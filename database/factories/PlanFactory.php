<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'duration_months' => $this->faker->numberBetween(1, 12),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'stripe_id' => Str::random(20),
            'paypal_id' => Str::random(20),
        ];
    }
}
