<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        DB::table('students')->insert([
            "name" => $faker->name(),
            "email" => $faker->safeEmail,
            "phone" => $faker->phoneNumber(),
            "cpf" => $faker->numberBetween(0, 99999999999),
            "gender" => $faker->randomElement(["male", "female"]),
            "married" => $faker->randomElement([true, false]),
            "age" => $faker->numberBetween(25, 50),
        ]);
    }
}
