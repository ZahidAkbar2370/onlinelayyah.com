<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerPersonalProfileFactory extends Factory
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
            "first_name" =>  $this->faker->name(),
            "last_name" =>  $this->faker->name(),
            "mobile_no" =>  $this->faker->phoneNumber(),
            "whatsapp_no" =>  $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
        ];
    }
}
