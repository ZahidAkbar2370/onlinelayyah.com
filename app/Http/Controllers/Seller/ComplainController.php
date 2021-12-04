<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;
use Auth;

class ComplainController extends Controller
{
    public function create()
    {
        return view("Seller.Complain.add_complain");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Complain::create([
            "user_id" => $user_id, 
            "name" => $request->name,
            "email" => $request->email,
            "mobile_no" => $request->mobile_no,
            "address" => $request->address,
        ]);

        return redirect("seller-add-complain");
    }
}
