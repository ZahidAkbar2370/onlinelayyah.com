<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Email;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::create([
            "customer_id" => "1",
            "email" => "bia@gmail.com",
            "subject" => "subject line matters",
            "message" => "keep it short",
        ]);

        Email::create([
            "customer_id" => "1",
            "email" => "noor@gmail.com",
            "subject" => "what do i write here?",
            "message" => "be clear and specific",
        ]);

        Email::create([
            "customer_id" => "2",
            "email" => "zahid@gmail.com",
            "subject" => "eliminate filler words",
            "message" => "keep it short",
        ]);

        Email::create([
            "customer_id" => "2",
            "email" => "shani@gmail.com",
            "subject" => "keep it simple and focused",
            "message" => "be clear and specific",
        ]);

        Email::create([
            "customer_id" => "1",
            "email" => "hadi@gmail.com",
            "subject" => "subject line matters",
            "message" => "use logical keywords for search",
        ]);

    }
}
