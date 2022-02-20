<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerAccountDetailFactory extends Factory
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
            "account_holder_name" => $this->faker->name(),
            "account_type" => "jazzcash",
            "bank_name" => "",
            "account_no" => $this->faker->phoneNumber(),
        ];
    }
}
