<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaleStock;

class SaleStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SaleStock::create([
        	"buyer_id" => "1",
	    	"seller_id" => "1",
	    	"invoice_id" => "1",
	    	"product_id" => "1",
	    	"quantity" => "2",
	    	"sale_price" => "20",
	    	"discount" => "30",
	    	"total_price" => "12",
	    	"sale_type" => "online",
	    	"status" => "pending",
        ]);

        SaleStock::create([
        	"buyer_id" => "1",
	    	"seller_id" => "2",
	    	"invoice_id" => "2",
	    	"product_id" => "2",
	    	"quantity" => "1",
	    	"sale_price" => "10",
	    	"discount" => "0",
	    	"total_price" => "10",
	    	"sale_type" => "online",
	    	"status" => "delivered",
        ]);

        SaleStock::create([
        	"buyer_id" => "2",
	    	"seller_id" => "2",
	    	"invoice_id" => "3",
	    	"product_id" => "1",
	    	"quantity" => "1",
	    	"sale_price" => "20",
	    	"discount" => "20",
	    	"total_price" => "0",
	    	"sale_type" => "on_shop",
	    	"status" => "cashed",
        ]);

    }
}
