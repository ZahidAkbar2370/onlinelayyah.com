<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
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
            "name" => $this->faker->name(),
            "city" => $this->faker->city(),
            "contact_no" => $this->faker->phoneNumber(),
        ];
    }
}
