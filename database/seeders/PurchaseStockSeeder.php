<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseStock;

class PurchaseStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseStock::create([
        	"user_id" => "1",
	        "supplier_id" => "1",
	        "product_id" => "1",
	        "quantity" => "10",
	        "purchase_price" => "5",
	        "total_price" => "50",
        ]);

        PurchaseStock::create([
        	"user_id" => "2",
	        "supplier_id" => "1",
	        "product_id" => "1",
	        "quantity" => "7",
	        "purchase_price" => "10",
	        "total_price" => "70",
        ]);

        PurchaseStock::create([
        	"user_id" => "1",
	        "supplier_id" => "2",
	        "product_id" => "1",
	        "quantity" => "10",
	        "purchase_price" => "5",
	        "total_price" => "50",
        ]);

        PurchaseStock::create([
        	"user_id" => "1",
	        "supplier_id" => "1",
	        "product_id" => "1",
	        "quantity" => "3",
	        "purchase_price" => "15",
	        "total_price" => "45",
        ]);
    }
}
