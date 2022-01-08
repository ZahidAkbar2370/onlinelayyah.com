<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerPersonalProfile;
use App\Models\SellerBussinessProfile;
use App\Models\SellerAccountDetail;
use App\Models\User;

class BecomeASellerController extends Controller
{
    public function store(Request $request)
    {
        $insert_user = User::create([

            "name" => $request->first_name. " ". $request->last_name,
            "email" => $request->email,
            "password" => $request->password,
            "status" => "seller",
            "publication_status" => "0",

        ]);

        $insert_personal_info = SellerPersonalProfile::create([
            "user_id" => $insert_user->id,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "mobile_no" => $request->mobile_no,
            "whatsapp_no" => $request->whatsapp_no,
            "address" => $request->address,  
        ]);

        $insert_personal_info = SellerBussinessProfile::create([
            "user_id" => $insert_user->id,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "mobile_no" => $request->mobile_no,
            "whatsapp_no" => $request->whatsapp_no,
            "address" => $request->address,  
        ]);

        $insert_personal_info = SellerAccountDetail::create([
            "user_id" => $insert_user->id,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "mobile_no" => $request->mobile_no,
            "whatsapp_no" => $request->whatsapp_no,
            "address" => $request->address,  
        ]);
    }
}
