<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\SellerBussinessProfile;

class BussinessProfileController extends Controller
{
    public function bussinessProfile()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$edit_business_profile = SellerBussinessProfile::where("user_id", $user_id)->get();

    	return view("Seller.Profile.business_profile")
    	->with("edit_business_profile", $edit_business_profile[0]);
    }


    public function updateBussinessProfile(Request $request)
    {
    	$user_id = Auth::user()->id ?? 1;

    	$update_business_profile = SellerBussinessProfile::where("user_id", $user_id)->update([
    		"shop_name" => $request->shop_name,
    		"city" => $request->city,
    		"address" => $request->address,
    	]);

    	return redirect("seller-business-profile");
    }
}
