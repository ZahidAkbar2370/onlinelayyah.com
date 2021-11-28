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

    public function store(Request $request)
    {
    	$user_id = Auth::user()->id ?? 1;

    	$insert = Brand::create([
    		"user_id" => $user_id, 
    		"brand_name" => $request->brand_name,
    	]);

    	return redirect("seller-add-brand");
    }

    public function index()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$all_brands = Brand::where("user_id", $user_id)->get();

    	return view("Seller.Brand.view_brands")
    	->with("all_brands", $all_brands);
    }

    public function edit($id)
    {
    	$edit_brand = Brand::find($id);

    	return view("Seller.Brand.edit_brand")
    	->with("edit_brand", $edit_brand);
    }

    public function update(Request $request, $id)
    {
    	$update_brand = Brand::find($id);

    	$update_brand->brand_name = $request->brand_name;
    	$update_brand->publication_status = $request->publication_status;

    	$update_brand->update();

    	return redirect("seller-view-brands");
    }

    public function destroy($id)
    {
    	$delete_brand = Brand::find($id)->delete();

    	return redirect("seller-view-brands");
    }
}
