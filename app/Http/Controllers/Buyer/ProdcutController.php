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
   
        // echo "<pre>";
        // print_r($all_products);exit;
    	return view("App.Product.products")
    	->with("all_products", $all_products);
    }
}
