<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAdsTable extends Migration
{
public function up()
{
Schema::create('product_ads', function (Blueprint $table) {
$table->id();
$table->foreignId('product_id');
$table->string('start_date');
$table->string('end_date');
$table->string('label');
$table->enum('status',['inactive','active','expire']);
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('product_ads');
}
}
