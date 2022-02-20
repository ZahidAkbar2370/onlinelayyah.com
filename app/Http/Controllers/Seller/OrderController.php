<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\SaleStock;
use App\Models\Product;
use DB;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$all_orders = DB::table('invoices')
        ->join('users', 'users.id', '=', 'invoices.buyer_id')
        ->select(
        	"users.name",
        	"users.email",
        	"invoices.id as invoiceID",
        	"invoices.order_items",
        	"invoices.grand_total",
        	"invoices.status",
        	"invoices.created_at",
        )
        ->where("invoices.seller_id","=", $user_id)
        ->where("invoices.status","!=", "cashed")
        ->where("invoices.sale_type","=", "online")
        ->get();
   

    	return view("Seller.Order.orders")
    	->with("all_orders", $all_orders);
    }

    public function orderHistory()
    {
    	$user_id = Auth::user()->id ?? 1;

    	$all_order_history = DB::table('sale_stocks')
        ->join('buyer_profiles', 'buyer_profiles.id', '=', 'sale_stocks.buyer_id')
        ->join('users', 'users.id', '=', 'sale_stocks.buyer_id')
        ->join('invoices', 'invoices.id', '=', 'sale_stocks.invoice_id')
        ->join('products', 'products.id', '=', 'sale_stocks.product_id')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->join('categories', 'categories.id', '=', 'products.categorey_id')
        ->select(
        	'buyer_profiles.id as buyerID',
        	"users.name",
        	"users.email",
        	"buyer_profiles.mobile_no",
        	"buyer_profiles.city",
        	"buyer_profiles.parmanent_address",
        	"buyer_profiles.any_main_point",

        	'products.product_name',
        	'brands.brand_name',
        	'categories.categorey_name',

        	'sale_stocks.id as saleStockID',

        	"sale_stocks.invoice_id",
        	"sale_stocks.quantity",
        	"sale_stocks.sale_price",
        	"sale_stocks.discount",
        	"sale_stocks.total_price",
        	"sale_stocks.created_at",

        	"invoices.sale_type",
        	"invoices.status",
        )
        ->where("sale_stocks.seller_id","=", $user_id)
        ->get();

     //         echo "<pre>";
    	// print_r($all_order_history)
    	// ;exit;
    	return view("Seller.Order.order_history", ["all_order_history" => $all_order_history]);
    }

    public function viewOrder($id)
    {
        $delete_invoice = Invoice::find($id);

        $user_id = Auth::user()->id ?? 1;

        $view_order = DB::table('sale_stocks')
        ->join('buyer_profiles', 'buyer_profiles.id', '=', 'sale_stocks.buyer_id')
        ->join('users', 'users.id', '=', 'sale_stocks.buyer_id')
        ->join('invoices', 'invoices.id', '=', 'sale_stocks.invoice_id')
        ->join('products', 'products.id', '=', 'sale_stocks.product_id')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->join('categories', 'categories.id', '=', 'products.categorey_id')
        ->select(
            'buyer_profiles.id as buyerID',
            "users.name",
            "users.email",
            "buyer_profiles.mobile_no",
            "buyer_profiles.city",
            "buyer_profiles.parmanent_address",
            "buyer_profiles.any_main_point",

            'products.product_name',
            'brands.brand_name',
            'categories.categorey_name',

            'sale_stocks.id as saleStockID',

            "sale_stocks.invoice_id",
            "sale_stocks.quantity",
            "sale_stocks.sale_price",
            "sale_stocks.discount",
            "sale_stocks.total_price",
            "sale_stocks.created_at",

            "invoices.sale_type",
            "invoices.status",
        )
        ->where("sale_stocks.seller_id","=", $user_id)
        ->where("sale_stocks.invoice_id","=", $id)
        ->get();

     //         echo "<pre>";
        // print_r($all_order_history)
        // ;exit;
        return view("Seller.Order.view_order_detail", ["all_order_history" => $view_order]);
    }

    public function deleteOrder($id)
    {
    	$delete_invoice = Invoice::find($id)->delete();

    	$delete_sale_stock = DB::delete("delete from sale_stocks where invoice_id='$id'");

    	return redirect("seller-orders");
    }

    public function confirmOrder($id)
    {
        $confirm_invoice = Invoice::find($id);
        $confirm_invoice->status = "confirm";
        $confirm_invoice->update();

        return redirect("seller-orders");
    }

    public function deliverOrder($id)
    {
        $saleStock = SaleStock::where("invoice_id",$id)->get();

        foreach ($saleStock as $key => $stock) {
            $productID = $stock->product_id;

            $product = Product::find($productID);
            $oldQuantity = $product->quantity;
            $saleQuantity = $stock->quantity;
            $remainingQuantity = $product->quantity - $stock->quantity;

            $product->quantity = $remainingQuantity;

            $product->update();
        }

        $confirm_invoice = Invoice::find($id);
        $confirm_invoice->status = "delivered";
        $confirm_invoice->update();

        return redirect("seller-orders");
    }

    public function cashedOrder($id)
    {
        $confirm_invoice = Invoice::find($id);
        $confirm_invoice->status = "cashed";
        $confirm_invoice->update();

        return redirect("seller-orders");
    }
}
