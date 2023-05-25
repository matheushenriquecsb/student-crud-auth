<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory

{

    protected $model = Student::class;


    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail(),
            "phone" => $this->faker->phoneNumber(),
            "cpf" => $this->faker->numberBetween(00000000000, 99999999999),
            "gender" => $this->faker->randomElement([
                "male",
                "female"
            ]),
            "married" => $this->faker->randomElement([true, false]),
            "age" => $this->faker->numberBetween(15, 45),

        ];
    }
}
