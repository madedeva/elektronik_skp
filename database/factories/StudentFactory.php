<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'student_id' => $this->faker->unique()->randomNumber(8),
            'study_program' => $this->faker->randomElement(['Sistem Informasi', 'Pendidikan Teknik Informatika', 'Teknik Mesin']),
            'major' => $this->faker->randomElement(['Sistem Informatika', 'Teknologi Industri']),
            'address' => $this->faker->address,
        ];
    }
}
