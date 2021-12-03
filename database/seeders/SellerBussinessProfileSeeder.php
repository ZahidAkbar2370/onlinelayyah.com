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
	    	"profile_image" => "shop.jpg",
	    	"cover_photo" => "shop_cover.jpg",
	    	"city" => "layyah",
        ]);

        SellerBussinessProfile::create([
        	"user_id" => "2",
	    	"shop_name" => "Shaikh Garments",
	    	"categorey_id" => "2",
	    	"address" => "mohllah shaikh wala",
	    	"profile_image" => "shop.jpg",
	    	"cover_photo" => "shop_cover.jpg",
	    	"city" => "layyah",
        ]);

        SellerBussinessProfile::create([
        	"user_id" => "3",
	    	"shop_name" => "Abid Jewlliers",
	    	"categorey_id" => "3",
	    	"address" => "eid gha",
	    	"profile_image" => "shop.jpg",
	    	"cover_photo" => "shop_cover.jpg",
	    	"city" => "layyah",
        ]);
    }
}
