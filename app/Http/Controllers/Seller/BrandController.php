<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Auth;

class BrandController extends Controller
{
    public function create()
    {
    	return view("Seller.Brand.add_brand");
    }

    public function index()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$all_brands = Brand::where("user_id", $user_id)->get();

    	return view("Seller.Brand.view_brands")
    	->with("all_brands", $all_brands);
    }
}
