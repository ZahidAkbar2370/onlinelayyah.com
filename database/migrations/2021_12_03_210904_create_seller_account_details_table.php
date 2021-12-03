<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_account_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("account_holder_name")->nullable();
            $table->string("account_type")->nullable();
            $table->string("bank_name")->nullable();
            $table->string("account_no")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_account_details');
    }
}
