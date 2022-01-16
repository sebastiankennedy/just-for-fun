<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Semeter>
 */
class SemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'school_id' => $this->faker->numberBetween(1, 10),
            'academic_year_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->sentence,
            'started_at' => $this->faker->dateTime,
            'ended_at' => $this->faker->dateTime,
        ];
    }
}
