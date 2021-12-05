<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;
use Auth;

class LoanController extends Controller
{
    public function create($id)
    {
       return view("Seller.Loan.add_loan")
       ->with("id", $id);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Loan::create([
            "user_id" => $user_id, 
            "customer_id" => $request->customer_id,
            "loan_type" => $request->loan_type,
            "amount" => $request->amount,
            "description" => $request->description,
            "bill" => $request->bill,
            "loan_date" => $request->loan_date,
        ]);

        return redirect("seller-view-loans/$request->customer_id");
    }

    public function index($id)
    {
        $user_id = Auth::user()->id ?? 1;

        $all_loans = Loan::where("user_id", $user_id)->where("customer_id", $id)->get();

        return view("Seller.Loan.view_loans")
        ->with("all_loans", $all_loans)
        ->with("id", $id);
    }

    public function destroy($id)
    {
        $delete_loan = Loan::find($id);
        $customer_id = $delete_loan->customer_id;

        $delete_loan->delete();

        return redirect("seller-view-loans/$customer_id");
    }
}
