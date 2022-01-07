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

    public function supplier()
    {
        return $this->belongsTo("App\Models\Supplier", "supplier_id", "id");
    }

    public function product()
    {
        return $this->belongsTo("App\Models\Product", "product_id", "id");
    }
}
