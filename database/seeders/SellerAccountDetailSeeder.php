<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SellerAccountDetail;

class SellerAccountDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //   SellerAccountDetail::create([
      //   	"user_id" => "1",
	    	// "account_holder_name" => "Zahid Akbar",
	    	// "account_type" => "jazzcash",
	    	// "bank_name" => "",
	    	// "account_no" => "03081312527",
      //   ]);

      //   SellerAccountDetail::create([
      //   	"user_id" => "2",
	    	// "account_holder_name" => "Jamshaid Akbar",
	    	// "account_type" => "easypassa",
	    	// "bank_name" => "",
	    	// "account_no" => "03059249897",
      //   ]);

      //   SellerAccountDetail::create([
      //   	"user_id" => "3",
	    	// "account_holder_name" => "Shoaib Akbar",
	    	// "account_type" => "bank_account",
	    	// "bank_name" => "HBL",
	    	// "account_no" => "092388564767834657",
      //   ]);
    	\App\Models\SellerAccountDetail::factory(5)->create();
    }
}
