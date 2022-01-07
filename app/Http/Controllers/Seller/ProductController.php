<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Categorey;
use Auth;

class ProductController extends Controller
{
    public function create()
    {
        $user_id = Auth::user()->id ?? 1;

        $brands = Brand::where("user_id", $user_id)->get();
        $categories = Categorey::where("user_id", $user_id)->get();
        // dd($categories);
        
        return view("Seller.Product.add_product")
        ->with("brands", $brands)
        ->with("categories", $categories)
        ;
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Product::create([
            "user_id" => $user_id, 
            "brand_id" => $request->brand_name,
            "categorey_id" => $request->categorey_name,
            "product_name" => $request->product_name,
            "sale_price" => $request->sale_price,
            "quantity" => "0",
            "sale_type" => $request->sale_type,
            "discount" => $request->discount,
            "product_image_1" => $request->product_image_1,
            "product_image_2" => $request->product_image_2,
            "product_image_3" => $request->product_image_3,
            "lable" => $request->lable,
            "description" => $request->description,
            "color" => $request->color,
            "size" => $request->size,
            "warrenty" => $request->warrenty,
            "warrenty_period" => $request->warrenty_period,
            "develivery" => $request->warrenty,
            "delivery_charges" => $request->delivery_charges,
            "publication_status" => "1",


        ]);

        return redirect("seller-view-products");
    }

    public function index()
    {
        $user_id = Auth::user()->id ?? 1;

        $all_products = Product::where("user_id", $user_id)->with("categorey")->with("brand")->get();

        return view("Seller.Product.view_products")
        ->with("all_products", $all_products);
    }

    public function edit($id)
    {
        $edit_product = Product::find($id);

        return view("Seller.Product.edit_product")
        ->with("edit_product", $edit_product);
    }

    public function update(Request $request, $id)
    {
        $update_expense = Product::find($id);

        $update_expense->title = $request->title;
        $update_expense->amount = $request->amount;
        $update_expense->description = $request->description;
        $update_expense->data_of_expense = $request->data_of_expense;


        $update_expense->update();

        return redirect("seller-view-products");
    }

    public function destroy($id)
    {
        $delete_product = Product::find($id)->delete();

        return redirect("seller-view-products");
    }
}
