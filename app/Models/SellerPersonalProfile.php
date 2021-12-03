<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerPersonalProfile extends Model
{
    use HasFactory;

    protected $table = "seller_personal_profiles";

    protected $fillable = [
    	"user_id",
    	"first_name",
    	"last_name",
    	"mobile_no",
    	"whatsapp_no",
    	"address",

    ];
}
