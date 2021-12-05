<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('brand_id');
            $table->foreignId('categorey_id');
            $table->string("product_name");
            $table->integer("sale_price");
            $table->integer("quantity");
            $table->string("sale_type");
            $table->integer("discount")->nullable()->default(0);
            $table->string("product_image_1")->nullable()->default("product_image.png");
            $table->string("product_image_2")->nullable();
            $table->string("product_image_3")->nullable();
            $table->string("lable")->nullable();
            $table->longText("description");
            $table->string("color")->nullable();
            $table->string("size")->nullable();
            $table->string("warrenty")->nullable();
            $table->string("warrenty_period")->nullable();
            $table->string("develivery")->nullable();
            $table->string("delivery_charges")->nullable();
            $table->enum('publication_status',[0,1])->default('1');
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
        Schema::dropIfExists('products');
    }
}
