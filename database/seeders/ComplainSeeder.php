<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Complain;

class ComplainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Complain::create([
         "user_id" => "1",
         "name" => "asad",
         "email" => "asad@gmail.com",
         "mobile_no" => "03257854639",
         "address" => "layyah",

       ]); 

       Complain::create([
         "user_id" => "1",
         "name" => "noor",
         "email" => "noor@gmail.com",
         "mobile_no" => "03027833440",
         "address" => "lahore",

       ]); 

       Complain::create([
         "user_id" => "2",
         "name" => "alia",
         "email" => "alia@gmail.com",
         "mobile_no" => "03116763422",
         "address" => "layyah",

       ]);

       Complain::create([
         "user_id" => "2",
         "name" => "mateen",
         "email" => "mateen@gmail.com",
         "mobile_no" => "03059026767",
         "address" => "karachi",

       ]); 

       Complain::create([
         "user_id" => "1",
         "name" => "azan",
         "email" => "azan@gmail.com",
         "mobile_no" => "03128763456",
         "address" => "kotsultan",

       ]);  
    }
}
