<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckPublicationStatus;
use App\Http\Middleware\CheckStatusSeller;
use App\Http\Middleware\CheckStatusAdmin;
use App\Http\Middleware\CheckStatusBuyer;

Route::get("/",function(){
	return redirect("login");
});

Route::middleware([CheckPublicationStatus::class])->group(function(){

	Route::middleware([CheckStatusAdmin::class])->group(function(){

		// Route::get("welcome",function(){
		// 	return view("welcome");
		// });

	});

	Route::middleware([CheckStatusSeller::class])->group(function(){

		Route::get("seller-add-brand","Seller\BrandController@create");
		Route::get("seller-view-brands","Seller\BrandController@index");

	});

	Route::middleware([CheckStatusBuyer::class])->group(function(){

	});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
