<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'buyer_id' => $this->faker->numberBetween(1, 10), // Assuming you have buyers seeded from 1 to 10
            'product_id' => $this->faker->numberBetween(1, 20), // Assuming you have products seeded from 1 to 20
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'timestamp' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
