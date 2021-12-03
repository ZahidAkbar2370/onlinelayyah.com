<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\SellerAccountDetail;

class AccountDetailController extends Controller
{
    public function accountDetail()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$edit_account_detail = SellerAccountDetail::where("user_id", $user_id)->get();

    	return view("Seller.Profile.account_detail")
    	->with("edit_account_detail", $edit_account_detail[0]);
    }

    public function updateAccountDetail(Request $request)
    {
    	$user_id = Auth::user()->id ?? 1;

    	$update_account_detail = SellerAccountDetail::where("user_id", $user_id)->update([
    		"account_holder_name" => $request->account_holder_name,
    		"account_type" => $request->account_type,
    		"bank_name" => $request->bank_name,
    		"account_no" => $request->account_no,
    	]);

    	return redirect("seller-account-detail");
    }
}
