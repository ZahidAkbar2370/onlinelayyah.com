<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
        	"buyer_id" => "1",
	    	"seller_id" => "1",
	    	"product_id" => "1",
	    	"quantity" => "12",
	    	"price" => "10",
	    	"discount" => "0",
        ]);

        Cart::create([
        	"buyer_id" => "1",
	    	"seller_id" => "1",
	    	"product_id" => "2",
	    	"quantity" => "2",
	    	"price" => "10",
	    	"discount" => "5",
        ]);

        Cart::create([
        	"buyer_id" => "2",
	    	"seller_id" => "2",
	    	"product_id" => "2",
	    	"quantity" => "2",
	    	"price" => "10",
	    	"discount" => "5",
        ]);
    }
}
