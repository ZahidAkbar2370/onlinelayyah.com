<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\SellerPersonalProfile;

class PersonalProfileController extends Controller
{
    public function personalProfile()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$edit_personal_profile = SellerPersonalProfile::where("user_id", $user_id)->get();

    	return view("Seller.Profile.personal_profile")
    	->with("edit_personal_profile", $edit_personal_profile[0]);
    }

    public function updatePersonalProfile(Request $request)
    {
    	$user_id = Auth::user()->id ?? 1;

    	$update_personal_profile = SellerPersonalProfile::where("user_id", $user_id)->update([
    		"first_name" => $request->first_name,
    		"last_name" => $request->last_name,
    		"mobile_no" => $request->mobile_no,
    		"whatsapp_no" => $request->whatsapp_no,
    		"address" => $request->address,
    	]);

    	return redirect("seller-personal-profile");
    }
}
