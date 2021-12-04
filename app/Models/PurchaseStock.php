<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseStock extends Model
{
    use HasFactory;

    protected $table = "purchase_stocks";

    protected $fillable = [
        "user_id",
        "supplier_id",
        "product_id",
        "quantity",
        "purchase_price",
        "total_price",
    ];
}
