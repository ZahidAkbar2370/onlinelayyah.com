<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorey;

class CategoreySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categorey::create([
        // 	"user_id" => "1",
        // 	"categorey_name" => "categorey1",
        // 	"publication_status" => "1",
        // ]);

        // Categorey::create([
        // 	"user_id" => "1",
        // 	"categorey_name" => "categorey2",
        // 	"publication_status" => "0",
        // ]);

        // Categorey::create([
        // 	"user_id" => "2",
        // 	"categorey_name" => "categorey1",
        // 	"publication_status" => "0",
        // ]);

        // Categorey::create([
        // 	"user_id" => "2",
        // 	"categorey_name" => "categorey7",
        // 	"publication_status" => "0",
        // ]);

        // Categorey::create([
        // 	"user_id" => "3",
        // 	"categorey_name" => "categorey0",
        // 	"publication_status" => "1",
        // ]);
        \App\Models\Categorey::factory(5)->create();
    }	
}
