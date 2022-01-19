<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!empty(auth()->user()) && auth()->user()->status == 'admin')
        {
            return redirect('admin-layout');
        }
        else if (!empty(auth()->user()) && auth()->user()->status == 'seller'){
            return redirect('seller-dashboard');
        }
    }
}
