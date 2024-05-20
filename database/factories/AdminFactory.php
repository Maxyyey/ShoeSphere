<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Assuming you have a User factory defined, you can use it to generate user_id
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            }
            // Add any other attributes you want to include in the definition
        ];
    }
}
