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
        ->paginate(22);

        // echo "<pre>";
        // print_r($all_shops);exit;

        return view("App.Shop.shops")
    	->with("all_shops", $all_shops);
    }


    public function shopProfile($id)
    {
        $shop_profile = DB::table('users')
        ->join('seller_personal_profiles', 'seller_personal_profiles.user_id', '=', 'users.id')
        ->join('seller_business_profiles', 'seller_business_profiles.user_id', '=', 'users.id')
        ->join('seller_account_details', 'seller_account_details.user_id', '=', 'users.id')
        ->select(
            "users.*",
            "seller_personal_profiles.*",
            "seller_business_profiles.*",
            "seller_account_details.*",
        )
        ->where("users.publication_status","=", "1")
        ->where("users.status","=", "seller")
        ->where("users.id","=", $id)
        ->get();

        $shop_products = DB::table('products')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->join('categories', 'categories.id', '=', 'products.categorey_id')
        ->select(
            "products.*",
            "brands.brand_name",
            "categories.categorey_name",
        )
        ->where("products.publication_status","=", "1")
        ->where("products.user_id","=", $id)
        ->orderBy("products.id", "desc")
        ->get();
// echo $id;
//         echo "<pre>";
//         print_r($shop_products);exit;

        return view("App.Shop.shop_profile")
        ->with("shop_profile", $shop_profile[0])
        ->with("shop_products", $shop_products);
    }
}
