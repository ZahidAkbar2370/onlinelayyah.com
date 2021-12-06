<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BuyerProfile;

class BuyerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyerProfile::create([
        	"user_id" => "1",
	    	"father_name" => "Ahmed",
	    	"mobile_no" => "0303748334",
	    	"city" => "layyah",
	    	"parmanent_address" => "chah gopal wala",
	    	"any_main_point" => "bile kirana shop",
	    	"buyer_image" => "buyer_image.png",
        ]);

        BuyerProfile::create([
        	"user_id" => "2",
	    	"father_name" => "khan",
	    	"mobile_no" => "0308874675",
	    	"city" => "jamanshah",
	    	"parmanent_address" => "gali no etc",
	    	"any_main_point" => "jamanshah main chok",
	    	"buyer_image" => "buyer_image.png",
        ]);
    }
}
