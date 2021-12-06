<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyerProfile;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BuyerController extends Controller
{
	public function create()
	{
		return view("Shop.Buyer.buyer_profile");
	}


    public function register(Request $request)
    {
    	return $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

    	$insert_user = User::create([
        	"name" => $request->name,
	    	"email" => $request->email,
	    	"password" => Hash::make($request->password),
	    	"status" => "buyer",
	    	"publication_status" => "1",
        ]);

    	BuyerProfile::create([
        	"user_id" => $insert_user->id,
	    	"father_name" => $request->father_name,
	    	"mobile_no" => $request->mobile_no,
	    	"city" => $request->city,
	    	"parmanent_address" => $request->address,
	    	"any_main_point" => $request->any_main_po,
	    	"buyer_image" => "buyer_image.png",
        ]);

        return redirect("login");
    }

    public function profile()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$buyerProfile = BuyerProfile::where("user_id", $user_id)->first();

    	return view("App.Buyer.buyer_profile")
    	->with("buyerProfile", $buyerProfile);
    }
}
