<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Expense::create([
        //     "user_id" => "1",
        //     "title" => "Gucci",
        //     "amount" => "10000",
        //     "description" => "It is international Brand",
        //     "data_of_expense" => "2021-12-04",


        // ]);

        // Expense::create([
        //     "user_id" => "1",
        //     "title" => "Nike",
        //     "amount" => "20000",
        //     "description" => "It is international Brand",
        //     "data_of_expense" => "2021-12-02",


        // ]);

        // Expense::create([
        //     "user_id" => "2",
        //     "title" => "Lagends perfume",
        //     "amount" => "5000",
        //     "description" => "It is international Brand",
        //     "data_of_expense" => "2021-12-04",


        // ]);

        // Expense::create([
        //     "user_id" => "2",
        //     "title" => "BMW",
        //     "amount" => "10000000",
        //     "description" => "It is international Brand",
        //     "data_of_expense" => "2021-12-13",


        // ]);

        // Expense::create([
        //     "user_id" => "1",
        //     "title" => "POMA",
        //     "amount" => "10000",
        //     "description" => "It is international Brand",
        //     "data_of_expense" => "2021-12-07",


        // ]);
        \App\Models\Expense::factory(10)->create();
    }
}
