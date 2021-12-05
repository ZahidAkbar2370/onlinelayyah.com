<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "user_id" => "1",
            "brand_id" => "2",
            "categorey_id" => "3",
            "product_name" => "Armani",
            "sale_price" => "20000",
            "quantity" => "2000",
            "sale_type" => "online",
            "discount" => "200",
            "product_image_1" => "image1.png",
            "product_image_2" => "image2.png",
            "product_image_3" => "image3.png",
            "lable" => "lab",
            "description" => "it is brand",
            "color" => "red",
            "size" => "20*20",
            "warrenty" => "12 months",
            "warrenty_period" => "6 months",
            "develivery" => "online",
            "delivery_charges" => "100",
            "publication_status" => "1",

        ]);

        Product::create([
            "user_id" => "1",
            "brand_id" => "3",
            "categorey_id" => "2",
            "product_name" => "Armani",
            "sale_price" => "20000",
            "quantity" => "2000",
            "sale_type" => "online",
            "discount" => "200",
            "product_image_1" => "image.png",
            "product_image_2" => "image.png",
            "product_image_3" => "image.png",
            "lable" => "lab",
            "description" => "it is brand",
            "color" => "red",
            "size" => "20*20",
            "warrenty" => "12 months",
            "warrenty_period" => "6 months",
            "develivery" => "online",
            "delivery_charges" => "100",
            "publication_status" => "1",

        ]);

        Product::create([
            "user_id" => "2",
            "brand_id" => "4",
            "categorey_id" => "2",
            "product_name" => "Armani",
            "sale_price" => "20000",
            "quantity" => "2000",
            "sale_type" => "online",
            "discount" => "200",
            "product_image_1" => "image.png",
            "product_image_2" => "image.png",
            "product_image_3" => "image.png",
            "lable" => "lab",
            "description" => "it is brand",
            "color" => "red",
            "size" => "20*20",
            "warrenty" => "12 months",
            "warrenty_period" => "6 months",
            "develivery" => "online",
            "delivery_charges" => "100",
            "publication_status" => "1",

        ]);

        Product::create([
            "user_id" => "2",
            "brand_id" => "5",
            "categorey_id" => "4",
            "product_name" => "Armani",
            "sale_price" => "20000",
            "quantity" => "2000",
            "sale_type" => "online",
            "discount" => "200",
            "product_image_1" => "image.png",
            "product_image_2" => "image.png",
            "product_image_3" => "image.png",
            "lable" => "lab",
            "description" => "it is brand",
            "color" => "red",
            "size" => "20*20",
            "warrenty" => "12 months",
            "warrenty_period" => "6 months",
            "develivery" => "online",
            "delivery_charges" => "100",
            "publication_status" => "1",

        ]);
    }
}
