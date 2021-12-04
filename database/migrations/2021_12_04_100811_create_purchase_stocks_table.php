<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('supplier_id');
            $table->foreignId('product_id');
            $table->string("quantity");
            $table->string("purchase_price");
            $table->string("total_price");
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
        Schema::dropIfExists('purchase_stocks');
    }
}
