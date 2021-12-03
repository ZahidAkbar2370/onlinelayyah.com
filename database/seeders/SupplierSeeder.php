<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            "user_id" => "1",
            "name" => "Abid Ali",
            "city" => "Islamabad",
            "contact_no" => "03087474838",

        ]);

        Supplier::create([
            "user_id" => "1",
            "name" => "Asad Ali",
            "city" => "Layyah",
            "contact_no" => "03087474897",

        ]);

        Supplier::create([
            "user_id" => "2",
            "name" => "Abid Hussain",
            "city" => "Faislabad",
            "contact_no" => "03087474444",

        ]);

        Supplier::create([
            "user_id" => "2",
            "name" => "Hassan Islam",
            "city" => "Multan",
            "contact_no" => "03087474876",

        ]);

        Supplier::create([
            "user_id" => "1",
            "name" => "Amir Khan",
            "city" => "Lahore",
            "contact_no" => "03057983838",

        ]);
    }
}
