<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	$this->call([
            AdvertisementSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            CategoreySeeder::class,
            SellerPersonalProfileSeeder::class,
            SellerBussinessProfileSeeder::class,
    		SellerAccountDetailSeeder::class,
            CustomerSeeder::class,
            SupplierSeeder::class,
            ExpenseSeeder::class,
            PurchaseStockSeeder::class,
            ComplainSeeder::class,
            LoanSeeder::class,
            EmailSeeder::class,
            ProductSeeder::class,
            BuyerProfileSeeder::class,
            CartSeeder::class,
            SaleStockSeeder::class,
            InvoiceSeeder::class,
    	]);
    }
}
