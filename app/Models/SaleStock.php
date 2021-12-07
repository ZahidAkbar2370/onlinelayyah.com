<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleStock extends Model
{
    use HasFactory;

    protected $table = "sale_stocks";

    protected $fillable = [
    	"buyer_id",
    	"seller_id",
    	"invoice_id",
    	"product_id",
    	"quantity",
    	"sale_price",
    	"discount",
    	"total_price",
    ];
}
