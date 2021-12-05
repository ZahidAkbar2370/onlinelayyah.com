<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'user_id',
        'brand_id',
        'categorey_id',
        'product_name',
        'sale_price',
        'quantity',
        'sale_type',
        'discount',
        'product_image_1',
        'product_image_2',
        'product_image_3',
        'lable',
        'description',
        'color',
        'size',
        'warrenty',
        'warrenty_period',
        'develivery',
        'delivery_charges',
        'publication_status',
    
    ];
}
