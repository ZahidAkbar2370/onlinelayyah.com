<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1,5),
            "title" => $this->faker->paragraph(1,5),
            "amount" => $this->faker->numberBetween(100,5000),
            "description" => $this->faker->text(),
            "data_of_expense" => $this->faker->date(),
        ];
    }
}
