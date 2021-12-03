<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerPersonalProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_personal_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("mobile_no")->nullable();
            $table->string("whatsapp_no")->nullable();
            $table->text("address")->nullable();
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
        Schema::dropIfExists('seller_personal_profiles');
    }
}
