<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'register' => $this->faker->randomNumber(9,),
            'name' => $this->faker->name,
            'birthplace' => $this->faker->city,
            'birthdate' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'address' => $this->faker->address,
            'school' => $this->faker->company,
            'father' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'ladder' => $this->faker->randomElement(['1', '2']),
            'program' => $this->faker->randomElement(['1', '2']),
            'room' => $this->faker->numberBetween(1,10),
        ];
    }
}
