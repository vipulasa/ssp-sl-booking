<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = array(
            array(
                "name" => "Hotel Excelsior",
                "description" => "This luxury hotel boasts breathtaking views of the sea and is located in the heart of downtown.",
                "address" => "Lungomare Marconi 41",
                "city" => "Trieste",
                "country" => "Italy",
                "zip_code" => "34127",
                "latitude" => "45.651615",
                "longitude" => "13.769289",
                "phone" => "+39 040 773501",
                "email" => "info@hotelexcelsior.biz",
                "website" => "https://www.hotelexcelsior.biz/",
                "check_in" => "3:00 PM",
                "check_out" => "12:00 PM",
                "price" => "$300-$500/night"
            ),
            array(
                "name" => "The Ritz Carlton",
                "description" => "This 5-star hotel is situated in a prime location overlooking Central Park.",
                "address" => "50 Central Park S",
                "city" => "New York",
                "country" => "USA",
                "zip_code" => "10019",
                "latitude" => "40.765731",
                "longitude" => "-73.976497",
                "phone" => "+1 212-308-9100",
                "email" => "info@ritzcarlton.com",
                "website" => "https://www.ritzcarlton.com/",
                "check_in" => "3:00 PM",
                "check_out" => "12:00 PM",
                "price" => "$500-$800/night"
            ),
            array(
                "name" => "Hilton Prague",
                "description" => "This hotel is situated in the heart of Prague and offers stunning views of the city.",
                "address" => "Pobřežní 1",
                "city" => "Prague",
                "country" => "Czech Republic",
                "zip_code" => "186 00",
                "latitude" => "50.099018",
                "longitude" => "14.438733",
                "phone" => "+420 2 2182 1018",
                "email" => "info@hiltonprague.com",
                "website" => "https://www.hilton.com/en/hotels/prghitw-hilton-prague/",
                "check_in" => "2:00 PM",
                "check_out" => "12:00 PM",
                "price" => "$150-$250/night"
            ),
            array(
                "name" => "Mandarin Oriental",
                "description" => "This luxury hotel is located in the heart of Bangkok and offers panoramic views of the city.",
                "address" => "48 Oriental Avenue, Bang Rak",
                "city" => "Bangkok",
                "country" => "Thailand",
                "zip_code" => "10500",
                "latitude" => "13.725431",
                "longitude" => "100.526758",
                "phone" => "+66 2 659 9000",
                "email" => "mokul-reservations@mohg.com",
                "website" => "https://www.mandarinoriental.com/bangkok/chao-phraya-river/luxury-hotel",
                "check_in" => "2:00 PM",
                "check_out" => "12:00 PM",
                "price" => "$400-$700/night"
            ),
            array(
                "name" => "Burj Al Arab Jumeirah",
                "description" => "This iconic 7-star hotel is located on an artificial island and offers stunning views of the Persian Gulf.",
                "address" => "Jumeirah St - Umm Suqeim 3",
                "city" => "Dubai",
                "country" => "United Arab Emirates",
                "zip_code" => "75157",
                "latitude" => "25.141149",
                "longitude" => "55.185387",
                "phone" => "+971 4 301 7777",
                "email" => "baajreservations@jumeirah.com",
                "website" => "https://www.jumeirah.com/en/stay/dubai/burj-al-arab-jumeirah",
                "check_in" => "3:00 PM",
                "check_out" => "12:00 PM",
                "price" => "$2,000-$4,000/night"
            ),
            array(
                "name" => "The Peninsula Paris",
                "description" => "This luxury hotel is located in a 19th-century building and offers views of the Eiffel Tower.",
                "address" => "19 Avenue Kléber",
                "city" => "Paris",
                "country" => "France",
                "zip_code" => "75116",
                "latitude" => "48.870243",
                "longitude" => "2.293953",
                "phone" => "+33 1 58 12 28 88",
                "email" => "ppr@peninsula.com",
                "website" => "https://www.peninsula.com/en/paris/5-star-luxury-hotel-16th-arrondissement",
                "check_in" => "3:00 PM",
                "check_out" => "12:00 PM",
                "price" => "$600-$1,000/night"
            ),
        );

        foreach ($hotels as $hotel) {

            // generate a random number between 1 and 10 and add as the categort_id to the hotel array
            $hotel['category_id'] = rand(1, 10);

            \App\Models\Hotel::create($hotel);
        }
    }
}
