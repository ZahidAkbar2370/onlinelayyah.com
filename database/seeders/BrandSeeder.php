<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Brand::create([
        // 	"user_id" => "1",
        // 	"brand_name" => "local brand",
        // 	"publication_status" => "1",
        // ]);

        // Brand::create([
        // 	"user_id" => "1",
        // 	"brand_name" => "imported brand",
        // 	"publication_status" => "1",
        // ]);

        // Brand::create([
        // 	"user_id" => "2",
        // 	"brand_name" => "pakistani",
        // 	"publication_status" => "0",
        // ]);

        // Brand::create([
        // 	"user_id" => "2",
        // 	"brand_name" => "indian",
        // 	"publication_status" => "1",
        // ]);

        // Brand::create([
        // 	"user_id" => "1",
        // 	"brand_name" => "indian",
        // 	"publication_status" => "0",
        // ]);

        \App\Models\Brand::factory(5)->create();
    }
}
