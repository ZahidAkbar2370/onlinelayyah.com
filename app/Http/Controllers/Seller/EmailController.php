<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Email;
use Auth;

class EmailController extends Controller
{
    public function create()
    {
       return view("Seller.Email.add_email");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Email::create([
            "user_id" => $user_id, 
            "customer_id" => "1",
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);

        return redirect("seller-view-emails");
    }

    public function index()
    {
        $user_id = Auth::user()->id ?? 1;

        $all_emails = Email::where("user_id", $user_id)->get();

        return view("Seller.Email.view_emails")
        ->with("all_emails", $all_emails);
    }

    public function destroy($id)
    {
        $delete_email = Loan::find($id)->delete();

        return redirect("seller-view-emails");
    }
}
