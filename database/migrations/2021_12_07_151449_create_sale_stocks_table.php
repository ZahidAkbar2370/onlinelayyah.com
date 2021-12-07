<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id');
            $table->foreignId('seller_id');
            $table->foreignId('invoice_id');
            $table->foreignId('product_id');
            $table->string('quantity')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('discount')->nullable();
            $table->string('total_price')->nullable();
            $table->enum('sale_type',["online", "on_shop"])->default("on_shop");
            $table->enum('status',["pending", "confirm", "delivered", "cashed"])->default("pending");
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
        Schema::dropIfExists('sale_stocks');
    }
}
