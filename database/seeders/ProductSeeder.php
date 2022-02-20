<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    public function run()
    {
        // Product::create([
        //     "user_id" => "1",
        //     "brand_id" => "2",
        //     "categorey_id" => "3",
        //     "product_name" => "Samsung-J5",
        //     "sale_price" => "90",
        //     "quantity" => "4",
        //     "sale_type" => "online",
        //     "discount" => "60",
        //     "product_image_1" => "01.jpg",
        //     "product_image_2" => "image2.jpg",
        //     "product_image_3" => "image3.jpg",
        //     "lable" => "lab",
        //     "description" => "it is brand",
        //     "color" => "red",
        //     "size" => "20*20",
        //     "warrenty" => "12 months",
        //     "warrenty_period" => "6 months",
        //     "develivery" => "online",
        //     "delivery_charges" => "100",
        //     "publication_status" => "1",

        // ]);

        // Product::create([
        //     "user_id" => "1",
        //     "brand_id" => "3",
        //     "categorey_id" => "2",
        //     "product_name" => "HP Laptop G5",
        //     "sale_price" => "20000",
        //     "quantity" => "15",
        //     "sale_type" => "online",
        //     "discount" => "1500",
        //     "product_image_1" => "02.jpg",
        //     "product_image_2" => "image.jpg",
        //     "product_image_3" => "image.jpg",
        //     "lable" => "lab",
        //     "description" => "it is brand",
        //     "color" => "red",
        //     "size" => "20*20",
        //     "warrenty" => "12 months",
        //     "warrenty_period" => "6 months",
        //     "develivery" => "online",
        //     "delivery_charges" => "100",
        //     "publication_status" => "1",

        // ]);

        // Product::create([
        //     "user_id" => "2",
        //     "brand_id" => "4",
        //     "categorey_id" => "2",
        //     "product_name" => "One Men Show",
        //     "sale_price" => "1000",
        //     "quantity" => "10",
        //     "sale_type" => "online",
        //     "discount" => "00",
        //     "product_image_1" => "03.jpg",
        //     "product_image_2" => "image.jpg",
        //     "product_image_3" => "image.jpg",
        //     "lable" => "lab",
        //     "description" => "it is brand",
        //     "color" => "red",
        //     "size" => "20*20",
        //     "warrenty" => "12 months",
        //     "warrenty_period" => "6 months",
        //     "develivery" => "online",
        //     "delivery_charges" => "100",
        //     "publication_status" => "1",

        // ]);

        // Product::create([
        //     "user_id" => "2",
        //     "brand_id" => "5",
        //     "categorey_id" => "4",
        //     "product_name" => "Sport Showes",
        //     "sale_price" => "50",
        //     "quantity" => "20",
        //     "sale_type" => "online",
        //     "discount" => "20",
        //     "product_image_1" => "04.jpg",
        //     "product_image_2" => "image.jpg",
        //     "product_image_3" => "image.jpg",
        //     "lable" => "lab",
        //     "description" => "it is brand",
        //     "color" => "red",
        //     "size" => "20*20",
        //     "warrenty" => "12 months",
        //     "warrenty_period" => "6 months",
        //     "develivery" => "online",
        //     "delivery_charges" => "100",
        //     "publication_status" => "1",

        // ]);
        // Product::create([
        //     "user_id" => "2",
        //     "brand_id" => "5",
        //     "categorey_id" => "4",
        //     "product_name" => "Sport Showes",
        //     "sale_price" => "50",
        //     "quantity" => "20",
        //     "sale_type" => "Starlet Boat",
        //     "discount" => "20",
        //     "product_image_1" => "04.jpg",
        //     "product_image_2" => "image.jpg",
        //     "product_image_3" => "image.jpg",
        //     "lable" => "lab",
        //     "description" => "it is brand",
        //     "color" => "red",
        //     "size" => "20*20",
        //     "warrenty" => "12 months",
        //     "warrenty_period" => "6 months",
        //     "develivery" => "online",
        //     "delivery_charges" => "100",
        //     "publication_status" => "1",

        // ]);

        \App\Models\Product::factory(10)->create()
    }
}
