<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function products()
    {
    	$all_products = DB::table('products')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->join('categories', 'categories.id', '=', 'products.categorey_id')
        ->select(
        	"brands.brand_name",
        	"categories.categorey_name",

        	"products.id as productID",
        	"products.product_name",
        	"products.product_image_1",
        	"products.sale_price",
        	"products.discount",
        )
        ->where("products.publication_status","=", "1")
        ->orderBy('products.id', 'desc')
        ->paginate(7);
        

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

    	return view("App.Page.home")
    	->with("all_products", $all_products)
    	->with("all_shops", $all_shops);
    }

    public function shops()
    {
    	$all_products = DB::table('users')
        ->join('seller_business_profiles', 'seller_business_profiles.user_id', '=', 'users.id')
        ->select(
        	"seller_business_profiles.*",
        )
        ->where("users.publication_status","=", "1")
        ->where("users.status","=", "seller")
        ->orderBy('users.id', 'desc')
        ->get();

        echo "<pre>";
        print_r($all_products);exit;
    	return view("App.Page.home")
    	->with("all_products", $all_products);
    }
}
