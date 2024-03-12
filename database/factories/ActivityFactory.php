<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->sentence,
            'slots_available' => $this->faker->numberBetween(10, 20),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
