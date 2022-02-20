<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerPersonalProfile;
use App\Models\SellerBussinessProfile;
use App\Models\SellerAccountDetail;
use App\Models\User;
use Hash;

class BecomeASellerController extends Controller
{
    public function store(Request $request)
    {
        // $insert_user = User::create([

        //     "name" => $request->first_name. " ". $request->last_name,
        //     "email" => $request->email,
        //     "password" => Hash::make($request->password),
        //     "status" => "seller",
        //     "publication_status" => "0",

        // ]);

        // $insert_personal_info = SellerPersonalProfile::create([
        //     "user_id"       =>    $insert_user->id,
        //     "first_name"    =>    $request->first_name,
        //     "last_name"     =>    $request->last_name,
        //     "mobile_no"     =>    $request->mobile_no,
        //     "whatsapp_no"   =>    $request->whatsapp_no,
        //     "address"       =>    $request->address,  
        // ]);

        // $insert_bussiness_info = SellerBussinessProfile::create([
        //     "user_id" => $insert_user->id,
        //     "categorey_id" => $request->categorey_id,
        //     "shop_name" => $request->shop_name,
        //     "address" => $request->address,
        //     "city" => $request->city,
        //     "profile_image" => $request->profile_image,  
        //     "cover_photo" => $request->cover_photo,  
        // ]);

        // $insert_account_info = SellerAccountDetail::create([
        //     "user_id" => $insert_user->id,
        //     "account_holder_name" => $request->account_holder_name,
        //     "account_type" => $request->account_type,
        //     "bank_name" => $request->bank_name,
        //     "account_no" => $request->account_no, 
        // ]);

        return redirect()->back()
                            ->with("successMessage","Your Shop Registered Successfully. Please Contact With Admin.");
    }
}
