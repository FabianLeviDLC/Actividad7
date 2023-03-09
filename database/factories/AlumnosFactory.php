<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Alumnos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'Name' => fake()->name(),
            'Group_Id' => fake()->numberBetween(1,5),
            'Course_Id' => fake()->randomDigitNot(0,5,6,7,8,9),
            'User_Id' => fake()->numberBetween(1,300),
        ];
    }
}
