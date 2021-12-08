<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    public function shops()
    {
    	$all_shops = DB::table('users')
        ->join('seller_business_profiles', 'seller_business_profiles.user_id', '=', 'users.id')
        ->select(
        	"seller_business_profiles.*",
        )
        ->where("users.publication_status","=", "1")
        ->where("users.status","=", "seller")
        ->orderBy('users.id', 'desc')
        ->get();

        // echo "<pre>";
        // print_r($all_shops);exit;

        return view("App.Shop.shops")
    	->with("all_shops", $all_shops);
    }
}
