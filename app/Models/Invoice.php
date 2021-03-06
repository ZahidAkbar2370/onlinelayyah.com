<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = "invoices";

    protected $fillable = [
    	"buyer_id",
    	"seller_id",
    	"order_items",
    	"grand_total",
    	"sale_type",
    	"status",
    ];
}