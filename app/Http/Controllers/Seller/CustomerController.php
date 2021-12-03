<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;

class CustomerController extends Controller
{
    public function create()
    {
        return view("Seller.Customer.add_customer");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Customer::create([
            "user_id" => $user_id, 
            "customer_name" => $request->customer_name,
            "contact_no" => $request->contact_no,
            "address" => $request->address,

        ]);

        return redirect("seller-add-customer");
    }

    public function index()
    {
        $user_id = Auth::user()->id ?? 1;

        $all_customers = Customer::where("user_id", $user_id)->get();

        return view("Seller.Customer.view_customers")
        ->with("all_customers", $all_customers);
    }

    public function edit($id)
    {
        $edit_customer = Customer::find($id);

        return view("Seller.Customer.edit_customer")
        ->with("edit_customer", $edit_customer);
    }

    public function update(Request $request, $id)
    {
        $update_customer = Customer::find($id);

        $update_customer->customer_name = $request->customer_name;
        $update_customer->contact_no = $request->contact_no;
        $update_customer->address = $request->address;


        $update_customer->update();

        return redirect("seller-view-customers");
    }

    public function destroy($id)
    {
        $delete_customer = Customer::find($id)->delete();

        return redirect("seller-view-customers");
    }
}
