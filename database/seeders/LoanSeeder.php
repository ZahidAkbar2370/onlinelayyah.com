<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Loan::create([
        //     "user_id" => "1",
        //     "customer_id" => "1",
        //     "loan_type" => "give",
        //     "amount" => "5000",
        //     "description" => "roti khai",
        //     "bill" => "empty",
        //     "loan_date" => "12/12/2020",
        // ]);
        // Loan::create([
        //     "user_id" => "1",
        //     "customer_id" => "2",
        //     "loan_type" => "recieve",
        //     "amount" => "2000",
        //     "description" => "khana khaya",
        //     "bill" => "none",
        //     "loan_date" => "12/07/2019",
        // ]);
        // Loan::create([
        //     "user_id" => "2",
        //     "customer_id" => "1",
        //     "loan_type" => "recieve",
        //     "amount" => "2500",
        //     "description" => "shadi p lgayn",
        //     "bill" => "empty",
        //     "loan_date" => "09/11/2018",
        // ]);
        // Loan::create([
        //     "user_id" => "2",
        //     "customer_id" => "1",
        //     "loan_type" => "give",
        //     "amount" => "5000",
        //     "description" => "roti khai",
        //     "bill" => "empty",
        //     "loan_date" => "25/08/2010",
        // ]);
        // Loan::create([
        //     "user_id" => "2",
        //     "customer_id" => "2",
        //     "loan_type" => "recieve",
        //     "amount" => "3450",
        //     "description" => "uni fee jma krai hahhahahhaahh wo bh loan utha k",
        //     "bill" => "none",
        //     "loan_date" => "24/12/2017",
        // ]);

        \App\Models\Loan::factory(10)->create();
    }
}
