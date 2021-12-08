<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProdcutController extends Controller
{
    public function index()
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
        ->get();
   
        
    	return view("App.Product.products")
    	->with("all_products", $all_products);
    }

    public function productDetail($id)
    {
        $select_product = DB::table('products')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->join('categories', 'categories.id', '=', 'products.categorey_id')
        ->join('seller_business_profiles', 'seller_business_profiles.user_id', '=', 'products.user_id')
        ->select(
            "brands.brand_name",
            "categories.categorey_name",
            "seller_business_profiles.user_id as SellerID",
            "seller_business_profiles.shop_name",

            "products.id as productID",
            "products.*",
        )
        ->where("products.id","=", $id)
        ->get();
   
        // echo "<pre>";
        // print_r($select_product[0]);exit;
        return view("App.Product.product_detail")
        ->with("select_product", $select_product[0]);
    }
}
