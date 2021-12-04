<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use Auth;

class ExpenseController extends Controller
{
    
    public function create()
    {
        return view("Seller.Expense.add_expense");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Expense::create([
            "user_id" => $user_id, 
            "title" => $request->title,
            "amount" => $request->amount,
            "description" => $request->description,
            "data_of_expense" => $request->data_of_expense,


        ]);

        return redirect("seller-add-expense");
    }

    public function index()
    {
        $user_id = Auth::user()->id ?? 1;

        $all_expenses = Expense::where("user_id", $user_id)->get();

        return view("Seller.Expense.view_expenses")
        ->with("all_expenses", $all_expenses);
    }

    public function edit($id)
    {
        $edit_expense = Expense::find($id);

        return view("Seller.Expense.edit_expense")
        ->with("edit_expense", $edit_expense);
    }

    public function update(Request $request, $id)
    {
        $update_expense = Expense::find($id);

        $update_expense->title = $request->title;
        $update_expense->amount = $request->amount;
        $update_expense->description = $request->description;
        $update_expense->data_of_expense = $request->data_of_expense;


        $update_expense->update();

        return redirect("seller-view-expenses");
    }

    public function destroy($id)
    {
        $delete_expense = Expense::find($id)->delete();

        return redirect("seller-view-expenses");
    }
}


