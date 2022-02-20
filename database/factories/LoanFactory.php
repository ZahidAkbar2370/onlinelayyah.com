<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
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
            "customer_id" => $this->faker->numberBetween(1,5),
            "loan_type" => "give",
            "amount" => $this->faker->numberBetween(30,500),
            "description" => $this->faker->text(),
            "bill" => "empty",
            "loan_date" => $this->faker->date(),
        ];
    }
}
