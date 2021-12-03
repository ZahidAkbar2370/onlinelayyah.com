<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerBusinessProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_business_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("categorey_id")->nullable();
            $table->string("shop_name")->nullable();
            $table->text("address")->nullable();
            $table->string("city")->nullable();
            $table->string("profile_image")->nullable();
            $table->string("cover_photo")->nullable();
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
        Schema::dropIfExists('seller_business_profiles');
    }
}
