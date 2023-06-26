<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    const DEAL_STATUSES = [
      'lead', 'to contact', 'contacted', 'won', 'lost'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => fake()->numberBetween(1000, 100000),
            'status' => fake()->randomElement(self::DEAL_STATUSES),
        ];
    }
}
