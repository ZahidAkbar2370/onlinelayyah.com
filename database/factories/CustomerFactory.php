<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
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
            "customer_name" => $this->faker->name(),
            "contact_no" => $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
        ];
    }
}
