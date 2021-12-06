<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
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
    	]);
    }
}
