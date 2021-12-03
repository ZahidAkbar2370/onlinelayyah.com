<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerBussinessProfile extends Model
{
    use HasFactory;

    protected $table = "seller_business_profiles";

    protected $fillable = [
    	"user_id",
    	"shop_name",
    	"categorey_id",
    	"address",
    	"profile_image",
    	"cover_photo",
    	"city",

    ];
}
