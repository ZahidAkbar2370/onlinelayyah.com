<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	"name" => "zahid akbar",
        	"email" => "admin@gmail.com",
        	"password" => Hash::make("admin123"),
        	"status" => "admin",
        	"publication_status" => "1",
        ]);

        User::create([
        	"name" => "Janu Jakhar",
        	"email" => "seller@gmail.com",
        	"password" => Hash::make("seller123"),
        	"status" => "seller",
        	"publication_status" => "1",
        ]);

        User::create([
        	"name" => "Jakhar Jakhar",
        	"email" => "buyer@gmail.com",
        	"password" => Hash::make("buyer123"),
        	"status" => "buyer",
        	"publication_status" => "1",
        ]);

        User::create([
            "name" => "Test",
            "email" => "seller1@gmail.com",
            "password" => Hash::make("seller123"),
            "status" => "seller",
            "publication_status" => "1",
        ]);

        User::create([
            "name" => "Janu Shop",
            "email" => "seller2@gmail.com",
            "password" => Hash::make("seller123"),
            "status" => "seller",
            "publication_status" => "1",
        ]);
    }
}
