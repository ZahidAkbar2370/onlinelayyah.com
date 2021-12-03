<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;

class SupplierController extends Controller
{
    public function create()
    {
        return view("Seller.Supplier.add_supplier");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Supplier::create([
            "user_id" => $user_id, 
            "name" => $request->name,
            "city" => $request->city,
            "contact_no" => $request->contact_no,

        ]);

        return redirect("seller-add-supplier");
    }

    public function index()
    {
        $user_id = Auth::user()->id ?? 1;

        $all_suppliers = Supplier::where("user_id", $user_id)->get();

        return view("Seller.Supplier.view_suppliers")
        ->with("all_suppliers", $all_suppliers);
    }

    public function edit($id)
    {
        $edit_supplier = Supplier::find($id);

        return view("Seller.Supplier.edit_supplier")
        ->with("edit_supplier", $edit_supplier);
    }

    public function update(Request $request, $id)
    {
        $update_supplier = Supplier::find($id);

        $update_supplier->name = $request->name;
        $update_supplier->city = $request->city;
        $update_supplier->contact_no = $request->contact_no;


        $update_supplier->update();

        return redirect("seller-view-suppliers");
    }

    public function destroy($id)
    {
        $delete_supplier = Supplier::find($id)->delete();

        return redirect("seller-view-suppliers");
    }
}

