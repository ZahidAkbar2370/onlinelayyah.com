<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    public function create()
	{
		$buyer_id = Auth::user()->id ?? 1;

		$all_cart = Cart::where("buyer_id", $buyer_id)->get();

		return view("Shop.Buyer.cart")
		->with("all_cart", $all_cart);
	}

	public function store(Request $request)
	{
		$buyer_id = Auth::user()->id ?? 1;

		Cart::create([
			"buyer_id" => $buyer_id,
			"seller_id" => $request->seller_id,
			"product_id" => $request->product_id,
			"price" => $request->price,
			"quantity" => $request->quantity,
			"discount" => $request->discount,
		]);

		return redirect("cart");
	}
}
