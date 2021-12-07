<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::Create([
        	"buyer_id" => "1",
        	"seller_id" => "1",
            "order_items" => "2",
            "grand_total" => "100",
            "sale_type" => "online",
            "status" => "pending",
        ]);

        Invoice::Create([
        	"buyer_id" => "1",
        	"seller_id" => "2",
            "order_items" => "2",
            "grand_total" => "100",
            "sale_type" => "online",
            "status" => "pending",
        ]);

        Invoice::Create([
        	"buyer_id" => "2",
            "seller_id" => "2",
        	"order_items" => "1",
            "grand_total" => "100",
            "sale_type" => "online",
            "status" => "pending",

        ]);
    }
}
