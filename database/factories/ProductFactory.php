<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProductFactory extends Factory
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
            "brand_id" => $this->faker->numberBetween(1,5),
            "categorey_id" => $this->faker->numberBetween(1,5),
            "product_name" => Str::random(10),
            "sale_price" => $this->faker->numberBetween(20,100),
            "quantity" => $this->faker->numberBetween(10,18),
            "sale_type" => "online",
            "discount" => $this->faker->numberBetween(1,8),
            "product_image_1" => "04.jpg",
            "product_image_2" => "image2.jpg",
            "product_image_3" => "image3.jpg",
            "lable" => "lab",
            "description" => $this->faker->text(),
            "color" => $this->faker->colorName(),
            "size" => "20*20",
            "warrenty" => $this->faker->monthName(),
            "warrenty_period" => "6 months",
            "develivery" => "online",
            "delivery_charges" => $this->faker->numberBetween(1,5),
            "publication_status" => "1",
        ];
    }
}
