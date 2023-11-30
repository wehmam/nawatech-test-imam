<?php

namespace App\Repository;


class ApiRepository {
    public static function get() {
        try {
            $data1 = json_decode(file_get_contents(storage_path('data1.json')), true);
            $data2 = json_decode(file_get_contents(storage_path('data2.json')), true);

            $manipulateData = self::manipulateData($data1["data"],$data2["data"]);
            if (!$manipulateData) {
                return [
                    "status" => 0,
                    "errorMessage" => "Failed Manipulate Data",
                    "data" => []
                ];
            }

            usort($manipulateData, function ($a, $b) {
                return $a['ahass_distance'] <=> $b['ahass_distance'];
            });

            return [
                'status' => 1,
                'message' => 'Data Successfully Retrieved.',
                'data' => $manipulateData,
            ];
        } catch (\Throwable $th) {
            return [
                "status" => 0,
                "errorMessage" => $th->getMessage(),
                "data" => []
            ];
        }
    }

    private static function manipulateData($data1, $data2)
    {
        try {
            $result = [];
            foreach ($data1 as $item) {
                $ahassData = collect($data2)->where('code', $item['booking']['workshop']['code'])->first();

                $result[] = [
                    'name' => $item['name'],
                    'email' => $item['email'],
                    'booking_number' => $item['booking']['booking_number'],
                    'book_date' => $item['booking']['book_date'],
                    'ahass_code' => $ahassData['code'] ?? $item['booking']['workshop']['code'],
                    'ahass_name' => $ahassData['name'] ?? $item['booking']['workshop']['name'],
                    'ahass_address' => $ahassData['address'] ?? "",
                    'ahass_contact' => $ahassData['phone_number'] ?? "",
                    'ahass_distance' => $ahassData['distance'] ?? 0,
                    'motorcycle_ut_code' => $item['booking']['motorcycle']['ut_code'],
                    'motorcycle' => $item['booking']['motorcycle']['name'],
                ];
            }

            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
