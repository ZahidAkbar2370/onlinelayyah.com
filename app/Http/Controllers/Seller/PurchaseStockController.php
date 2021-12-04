<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\PurchaseStock;
use App\Models\Supplier;

class PurchaseStockController extends Controller
{
    public function create()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$all_suppliers = Supplier::where("user_id", $user_id)->get();

    	return view("Seller.PurchaseStock.add_purchase_stock")
    	->with("all_suppliers", $all_suppliers);
    }

    public function store(Request $request)
    {
    	$user_id = Auth::user()->id ?? 1;

    	$add_purchase_stock = PurchaseStock::create([
        	"user_id" => $user_id,
	        "supplier_id" => $request->supplier_id,
	        "product_id" => $request->product_id,
	        "quantity" => $request->quantity,
	        "purchase_price" => $request->purchase_price,
	        "total_price" => $request->total_price,
        ]);

        return redirect("seller-view-purchase-stocks");
    }

    public function index()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$all_purchase_stocks = PurchaseStock::where("user_id", $user_id)->get();

    	return view("Seller.PurchaseStock.view_purchase_stocks")
    	->with("all_purchase_stocks", $all_purchase_stocks);
    }

    public function edit($id)
    {
    	$user_id = Auth::user()->id ?? 1;
    	
    	$all_suppliers = Supplier::where("user_id", $user_id)->get();
        $edit_purchase_stock = PurchaseStock::find($id);

        return view("Seller.PurchaseStock.edit_purchase_stock")
        ->with("all_suppliers", $all_suppliers)
    	->with("edit_purchase_stock", $edit_purchase_stock);
    }

    public function update(Request $request, $id)
    {
        $update_purchase_stock = PurchaseStock::find($id);

	    $update_purchase_stock->supplier_id = $request->supplier_id;
	    $update_purchase_stock->product_id = $request->product_id;
	    $update_purchase_stock->quantity = $request->quantity;
	    $update_purchase_stock->purchase_price = $request->purchase_price;
	    $update_purchase_stock->total_price = $request->total_price;
        
        $update_purchase_stock->update();

        return redirect("seller-view-purchase-stocks");
    }

    public function destroy($id)
    {
        $delete_purchase_stock = PurchaseStock::find($id)->delete();

        return redirect("seller-view-purchase-stocks");
    }
}
