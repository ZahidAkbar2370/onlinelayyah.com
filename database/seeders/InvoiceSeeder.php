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
        	"buyer_id" => "1"
        	"seller_id" => "1"
        ]);

        Invoice::Create([
        	"buyer_id" => "1"
        	"seller_id" => "2"
        ]);

        Invoice::Create([
        	"buyer_id" => "2"
        	"seller_id" => "2"
        ]);
    }
}
