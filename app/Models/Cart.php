<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";

    protected $fillable = [
    	"buyer_id",
    	"seller_id",
    	"product_id",
    	"quantity",
    	"price",
    	"discount",
    ];
}
