<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function create()
	{
		$buyer_id = Auth::user()->id ?? 1;

		$all_cart = Cart::where("buyer_id", $buyer_id)->get();

		return view("Shop.Buyer.cart")
		->with("all_cart", $all_cart);
	}
}
