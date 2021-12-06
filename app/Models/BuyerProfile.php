<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerProfile extends Model
{
    use HasFactory;

    protected $table = "buyer_profiles";

    protected $fillable = [
    	"user_id",
    	"father_name",
    	"mobile_no",
    	"city",
    	"parmanent_address",
    	"any_main_point",
    	"buyer_image",
    ];
}
