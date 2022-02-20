<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComplainFactory extends Factory
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
            "email" => $this->faker->safeEmail(),
            "mobile_no" => $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
        ];
    }
}
