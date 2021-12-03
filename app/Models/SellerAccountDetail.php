<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerAccountDetail extends Model
{
    use HasFactory;

    protected $table = "seller_account_details";

    protected $fillable = [
    	"user_id",
    	"account_holder_name",
    	"account_type",
    	"bank_name",
    	"account_no",
    ];
}
