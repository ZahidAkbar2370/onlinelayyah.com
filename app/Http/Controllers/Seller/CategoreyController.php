<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorey;
use Auth;

class CategoreyController extends Controller
{
    public function create()
    {
        return view("Seller.Categorey.add_categorey");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $insert = Categorey::create([
            "user_id" => $user_id, 
            "categorey_name" => $request->categorey_name,
        ]);

        return redirect("seller-add-categorey");
    }

     public function index()
     {
         $user_id = Auth::user()->id ?? 1;

        $all_categories = Categorey::where("user_id", $user_id)->get();

        return view("Seller.Categorey.view_categories")
        ->with("all_categories", $all_categories);
     }

     public function destroy($id)
     {
        $delete_categorey = Categorey::find($id)->delete();

        return redirect("seller-view-categories");
     }
}
