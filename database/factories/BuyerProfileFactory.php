<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BuyerProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(4,6),
            "father_name" => $this->faker->name(),
            "mobile_no" => $this->faker->phoneNumber(),
            "city" => $this->faker->city(),
            "parmanent_address" => $this->faker->address(),
            "any_main_point" => $this->faker->streetName(),
            "buyer_image" => "buyer_image.png",
        ];
    }
}
