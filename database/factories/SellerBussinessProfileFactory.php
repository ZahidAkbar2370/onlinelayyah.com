<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerBussinessProfileFactory extends Factory
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
            "shop_name" => $this->faker->name(),
            "categorey_id" => $this->faker->numberBetween(1,4),
            "address" => $this->faker->address(),
            "profile_image" => "1.jpg",
            "cover_photo" => "01.jpg",
            "city" => $this->faker->city(),
        ];
    }
}
