## Laravel JSON Manipulation API For Nawatech Interview Test

This Laravel project demonstrates JSON manipulation skills by creating an API endpoint that manipulates and returns data from two JSON files. The objective is to showcase PHP Laravel skills, logic skills, and JSON manipulation skills.

## Project Structure

The project has the following structure:

- **app/Http/Controllers/Api/ApiController.php**: Controller responsible for handling API requests.
- **storage/data1.json**: JSON file containing user booking data.
- **storage/data2.json**: JSON file containing workshop data.

## API Endpoint

### Manipulate JSON Data

**Endpoint:**

```
GET /data
```

**Description:**

This endpoint manipulates the data from `data1.json` and `data2.json` to create a new structure and sorts the data based on the 'ahass_distance' field.

**Request:**

- Method: GET
- Headers: None
- Body: None

**Response:**

- Status: 200 OK
- Headers:
  - Content-Type: application/json
- Body:

```json
{
    "status": 1,
    "message": "Data Successfully Retrieved.",
    "data": [
        {
            "name": "bayu",
            "email": "bayu@yahoo.com",
            "booking_number": "100190109431",
            "book_date": "2022-06-10",
            "ahass_code": "17236",
            "ahass_name": "AHASS MEGATAMA MOTOR",
            "ahass_address": "",
            "ahass_contact": "",
            "ahass_distance": 0,
            "motorcycle_ut_code": "Y1G02N02L1A A/T",
            "motorcycle": "BEAT POP ESP CW COMIC"
        },
        {
            "name": "ilyas",
            "email": "ilyas@gmail.com",
            "booking_number": "117236109426",
            "book_date": "2022-06-08",
            "ahass_code": "00190",
            "ahass_name": "Dunia Motor Kebayoran Lama",
            "ahass_address": "Kebayoran Lama, Jakarta Selatan",
            "ahass_contact": "085600000000",
            "ahass_distance": 2.5,
            "motorcycle_ut_code": "NC11B3C2A/T",
            "motorcycle": "NEW BEAT CAST WHEEL"
        },
        {
            "name": "ilyas",
            "email": "ilyas@gmail.com",
            "booking_number": "117550109404",
            "book_date": "2022-06-08",
            "ahass_code": "00190",
            "ahass_name": "Dunia Motor Kebayoran Lama",
            "ahass_address": "Kebayoran Lama, Jakarta Selatan",
            "ahass_contact": "085600000000",
            "ahass_distance": 2.5,
            "motorcycle_ut_code": "R2B02K01S1K M/T",
            "motorcycle": "REVO FIT JKT"
        },
        {
            "name": "anwar",
            "email": "anwar@mail.com",
            "booking_number": "101000103066",
            "book_date": "2022-03-12",
            "ahass_code": "01000",
            "ahass_name": "Wahana Honda Gunung Sahari",
            "ahass_address": "Jalan Gunung Sahari",
            "ahass_contact": "085800000000",
            "ahass_distance": 5.2,
            "motorcycle_ut_code": "H5C02R20S1 M/T",
            "motorcycle": "NEW CB150R STREETFIRE"
        },
        {
            "name": "heru",
            "email": "heru@gmail.com",
            "booking_number": "10100062661",
            "book_date": "2022-06-09",
            "ahass_code": "11497",
            "ahass_name": "AHASS KAWI Indah Jaya Motor 3",
            "ahass_address": "Jakarta Pusat",
            "ahass_contact": "085300000000",
            "ahass_distance": 10.3,
            "motorcycle_ut_code": "HH1B02N41S1 A/T",
            "motorcycle": "BEAT SPORTY CBS MMC"
        },
        {
            "name": "kibo",
            "email": "kibo@gmail.com",
            "booking_number": "117550109401",
            "book_date": "2022-05-10",
            "ahass_code": "11497",
            "ahass_name": "AHASS KAWI Indah Jaya Motor 3",
            "ahass_address": "Jakarta Pusat",
            "ahass_contact": "085300000000",
            "ahass_distance": 10.3,
            "motorcycle_ut_code": "D1I02N27M1 A/T",
            "motorcycle": "BEAT STREET"
        },
        {
            "name": "santoso",
            "email": "santoso@microsoft.com",
            "booking_number": "101000109430",
            "book_date": "2022-03-12",
            "ahass_code": "07577",
            "ahass_name": "AHASS TUNGGAL JAYA",
            "ahass_address": "Jakarta Timur",
            "ahass_contact": "085200000000",
            "ahass_distance": 11.5,
            "motorcycle_ut_code": "NF11C1CD M/T",
            "motorcycle": "BLADE S"
        }
    ]
}
```

## How to Run the Project

1. Clone the repository:

   ```bash
   git clone https://github.com/wehmam/nawatech-test-imam.git
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Copy the example environment file:

   ```bash
   cp .env.example .env
   ```

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Run the development server:

   ```bash
   php artisan serve
   ```

6. Access the API endpoint in your browser:

   [http://localhost:8000/api/data](http://localhost:8000/api/data)
