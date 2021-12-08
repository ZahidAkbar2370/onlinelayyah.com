<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SellerBussinessProfile;

class SellerBussinessProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SellerBussinessProfile::create([
        	"user_id" => "1",
	    	"shop_name" => "Jakhar Mobile Shop",
	    	"categorey_id" => "1",
	    	"address" => "ward # 5 layyah",
	    	"profile_image" => "1.jpg",
	    	"cover_photo" => "01.jpg",
	    	"city" => "layyah",
        ]);

        SellerBussinessProfile::create([
        	"user_id" => "2",
	    	"shop_name" => "Shaikh Garments",
	    	"categorey_id" => "2",
	    	"address" => "mohllah shaikh wala",
	    	"profile_image" => "2.jpg",
	    	"cover_photo" => "02.jpg",
	    	"city" => "layyah",
        ]);

        SellerBussinessProfile::create([
        	"user_id" => "5",
	    	"shop_name" => "Abid Jewlliers",
	    	"categorey_id" => "3",
	    	"address" => "eid gha",
	    	"profile_image" => "3.jpg",
	    	"cover_photo" => "03.jpg",
	    	"city" => "layyah",
        ]);

        SellerBussinessProfile::create([
        	"user_id" => "4",
	    	"shop_name" => "Test 2",
	    	"categorey_id" => "3",
	    	"address" => "main chok",
	    	"profile_image" => "4.jpg",
	    	"cover_photo" => "04.jpg",
	    	"city" => "layyah",
        ]);
    }
}
