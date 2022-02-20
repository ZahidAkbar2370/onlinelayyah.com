<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "buyer_id" => $this->faker->numberBetween(4,8),
            "seller_id" => $this->faker->numberBetween(1,5),
            "product_id" => $this->faker->numberBetween(1,10),
            "quantity" => $this->faker->numberBetween(1,10),
            "price" => $this->faker->numberBetween(100,500),
            "discount" => $this->faker->numberBetween(1,20),
        ];
    }
}
