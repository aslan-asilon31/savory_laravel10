<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => rand(1, 10),
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered']),
            'order_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
