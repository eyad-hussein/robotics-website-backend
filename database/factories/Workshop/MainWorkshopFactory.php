<?php

namespace Database\Factories\Workshop;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workshop\MainWorkshop>
 */
class MainWorkshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'workshop_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
