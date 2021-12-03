<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            "user_id" => "1",
            "customer_name" => "Abid Ali",
            "contact_no" => "03087474838",
            "address" => "Islamabad",

        ]);

        Customer::create([
            "user_id" => "1",
            "customer_name" => "Zahid Akbar",
            "contact_no" => "03087474834",
            "address" => "Islamabad",
        ]);

        Customer::create([
            "user_id" => "2",
            "customer_name" => "Amir Ali",
            "contact_no" => "03087474833",
            "address" => "Lahore",
        ]);

        Customer::create([
            "user_id" => "3",
            "customer_name" => "Saif Ali",
            "contact_no" => "03087474825",
            "address" => "Layyah",
        ]);

        Customer::create([
            "user_id" => "1",
            "customer_name" => "Asif Ali",
            "contact_no" => "03087474343",
            "address" => "Multan",
        ]);
    }
}
