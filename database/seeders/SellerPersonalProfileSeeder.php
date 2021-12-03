<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SellerPersonalProfile;

class SellerPersonalProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SellerPersonalProfile::create([
    		"user_id" => "1",
	    	"first_name" => "Zahid",
	    	"last_name" => "Akbar",
	    	"mobile_no" => "03081312527",
	    	"whatsapp_no" => "03081312527",
	    	"address" => "Layyah",
    	]);

    	SellerPersonalProfile::create([
    		"user_id" => "2",
	    	"first_name" => "Abid",
	    	"last_name" => "Ali",
	    	"mobile_no" => "030898789374",
	    	"whatsapp_no" => "030898789374",
	    	"address" => "Islamabad",
    	]);

    	SellerPersonalProfile::create([
    		"user_id" => "3",
	    	"first_name" => "hello",
	    	"last_name" => "Jakhar",
	    	"mobile_no" => "03166356700",
	    	"whatsapp_no" => "03081312527",
	    	"address" => "Pindi",
    	]);
        
    }
}
