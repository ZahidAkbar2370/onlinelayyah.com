<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;
use DB;

class CartController extends Controller
{
    public function create()
	{
		$buyer_id = Auth::user()->id ?? 1;

		$totalDiscount = Cart::where("buyer_id", $buyer_id)->sum("discount");
		$totalPrice = Cart::where("buyer_id", $buyer_id)->sum("total_price");
		$grandTotal = $totalPrice - $totalDiscount;
		$totalItems = Cart::where("buyer_id", $buyer_id)->count();

    	$all_cart = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->join('categories', 'categories.id', '=', 'products.categorey_id')
        ->select(
        	"products.id as productID",
        	"products.product_name",
        	"brands.brand_name",
        	"categories.categorey_name",
        	"carts.*",
        	"carts.id as cartID",
        )
        ->where("carts.buyer_id","=", $buyer_id)
        ->get();

		return view("App.Buyer.cart")
		->with("all_cart", $all_cart)
		->with("totalItems", $totalItems)
		->with("totalPrice", $totalPrice)
		->with("totalDiscount", $totalDiscount)
		->with("grandTotal", $grandTotal);
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
			"total_price" => $request->quantity * $request->price,
		]);

		return redirect("cart");
	}

	public function deleteCart($id)
	{
		$deleteCart = Cart::find($id)->delete();

		return redirect("cart");
	}
}
