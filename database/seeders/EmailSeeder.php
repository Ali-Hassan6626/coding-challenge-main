<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) { // Generate 20 fake email addresses for suggestions
            DB::table('suggestions')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
        foreach (range(1, 20) as $index) { // Generate 20 fake email addresses for send request
            DB::table('send_requests')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
        foreach (range(1, 20) as $index) { // Generate 20 fake email addresses for receive requests
            DB::table('receive_requests')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
            ]);
        }

        //Store data for connections
        DB::table('connections')->insert([
            array('first_name' => 'Sebastian', 'last_name' => 'Halvorson', 'email' => 'carroll.tremblay@example.com', 'common_connections' => '[{"email": "john.doe@example.com", "last_name": "Doe", "first_name": "John"}, {"email": "jane.smith@example.com", "last_name": "Smith", "first_name": "Jane"}, {"email": "michael.johnson@example.com", "last_name": "Johnson", "first_name": "Michael"}, {"email": "emily.williams@example.com", "last_name": "Williams", "first_name": "Emily"}, {"email": "william.jones@example.com", "last_name": "Jones", "first_name": "William"}, {"email": "olivia.brown@example.com", "last_name": "Brown", "first_name": "Olivia"}, {"email": "james.davis@example.com", "last_name": "Davis", "first_name": "James"}, {"email": "sophia.miller@example.com", "last_name": "Miller", "first_name": "Sophia"}, {"email": "robert.wilson@example.com", "last_name": "Wilson", "first_name": "Robert"}, {"email": "ava.moore@example.com", "last_name": "Moore", "first_name": "Ava"}, {"email": "david.anderson@example.com", "last_name": "Anderson", "first_name": "David"}, {"email": "mia.taylor@example.com", "last_name": "Taylor", "first_name": "Mia"}, {"email": "joseph.jackson@example.com", "last_name": "Jackson", "first_name": "Joseph"}, {"email": "amelia.white@example.com", "last_name": "White", "first_name": "Amelia"}, {"email": "john.lee@example.com", "last_name": "Lee", "first_name": "John"}]'),
            array('first_name' => 'Raquel', 'last_name' => 'Strosin', 'email' => 'herminio.dickinson@example.org', 'common_connections' => '[{"email": "sarah.johnson@example.com", "last_name": "Johnson", "first_name": "Sarah"}, {"email": "daniel.williams@example.com", "last_name": "Williams", "first_name": "Daniel"}, {"email": "olivia.martinez@example.com", "last_name": "Martinez", "first_name": "Olivia"}, {"email": "james.taylor@example.com", "last_name": "Taylor", "first_name": "James"}, {"email": "emily.brown@example.com", "last_name": "Brown", "first_name": "Emily"}, {"email": "liam.smith@example.com", "last_name": "Smith", "first_name": "Liam"}, {"email": "sophia.jones@example.com", "last_name": "Jones", "first_name": "Sophia"}, {"email": "noah.miller@example.com", "last_name": "Miller", "first_name": "Noah"}, {"email": "ava.davis@example.com", "last_name": "Davis", "first_name": "Ava"}, {"email": "ethan.garcia@example.com", "last_name": "Garcia", "first_name": "Ethan"}, {"email": "isabella.wilson@example.com", "last_name": "Wilson", "first_name": "Isabella"}, {"email": "mia.hernandez@example.com", "last_name": "Hernandez", "first_name": "Mia"}]'),
            array('first_name' => 'Norval', 'last_name' => 'DuBuque', 'email' => 'mkessler@example.com', 'common_connections' => NULL),
            array('first_name' => 'Rolando', 'last_name' => 'Johnson', 'email' => 'gottlieb.hannah@example.net', 'common_connections' => '[{"email": "sophia.jones@example.com", "last_name": "Jones", "first_name": "Sophia"}, {"email": "noah.miller@example.com", "last_name": "Miller", "first_name": "Noah"}, {"email": "ava.davis@example.com", "last_name": "Davis", "first_name": "Ava"}, {"email": "ethan.garcia@example.com", "last_name": "Garcia", "first_name": "Ethan"}, {"email": "isabella.wilson@example.com", "last_name": "Wilson", "first_name": "Isabella"}, {"email": "mia.hernandez@example.com", "last_name": "Hernandez", "first_name": "Mia"}]'),
            array('first_name' => 'May', 'last_name' => 'Parisian', 'email' => 'deckow.charlotte@example.org', 'common_connections' => '[{"email": "sarah.johnson@example.com", "last_name": "Johnson", "first_name": "Sarah"}, {"email": "daniel.williams@example.com", "last_name": "Williams", "first_name": "Daniel"}, {"email": "olivia.martinez@example.com", "last_name": "Martinez", "first_name": "Olivia"}, {"email": "james.taylor@example.com", "last_name": "Taylor", "first_name": "James"}, {"email": "emily.brown@example.com", "last_name": "Brown", "first_name": "Emily"}, {"email": "liam.smith@example.com", "last_name": "Smith", "first_name": "Liam"}, {"email": "sophia.jones@example.com", "last_name": "Jones", "first_name": "Sophia"}, {"email": "noah.miller@example.com", "last_name": "Miller", "first_name": "Noah"}]'),
            array('first_name' => 'Virginia', 'last_name' => 'Schmeler', 'email' => 'leonel02@example.net', 'common_connections' => NULL)
        ]);
    }
}
