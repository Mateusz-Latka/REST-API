<?php

namespace Database\Seeders;

use App\Models\People;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'FIRST NAME' => $faker->firstName,
                'SECOND NAME' => $faker->lastName,
                'TELEPHONE NUMBER' => $faker->phoneNumber,
                'RESIDENCE ADDRESS' => $faker->address,
                'COUNTRY' => $faker->country
            ]);
        }
    }
}
