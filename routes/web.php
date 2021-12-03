<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckPublicationStatus;
use App\Http\Middleware\CheckStatusSeller;
use App\Http\Middleware\CheckStatusAdmin;
use App\Http\Middleware\CheckStatusBuyer;

Route::get("/",function(){
	return redirect("login");
});

Route::get("/test",function(){
	return view("App.app_layout");
});

Route::middleware([CheckPublicationStatus::class])->group(function(){

	Route::middleware([CheckStatusAdmin::class])->group(function(){

		// Route::get("welcome",function(){
		// 	return view("welcome");
		// });

	});

	Route::middleware([CheckStatusSeller::class])->group(function(){

		//Brand
		Route::get("seller-add-brand","Seller\BrandController@create");
		Route::post("seller-save-add-brand","Seller\BrandController@store");
		Route::get("seller-view-brands","Seller\BrandController@index")->name('seller.view.brands');
		Route::get("seller-edit-brand/{id}","Seller\BrandController@edit");
		Route::post("seller-update-brand/{id}","Seller\BrandController@update");
		Route::get("seller-delete-brand/{id}","Seller\BrandController@destroy");

		//Categorey
		Route::get("seller-add-categorey","Seller\CategoreyController@create");
		Route::post("seller-save-add-categorey","Seller\CategoreyController@store");
		Route::get("seller-view-categories","Seller\CategoreyController@index");
		Route::get("seller-edit-categorey/{id}","Seller\CategoreyController@edit");
		Route::post("seller-update-categorey/{id}","Seller\CategoreyController@update");
		Route::get("seller-delete-categorey/{id}","Seller\CategoreyController@destroy");

		//Customer
		Route::get("seller-add-customer","Seller\CustomerController@create");
		Route::post("seller-save-add-customer","Seller\CustomerController@store");
		Route::get("seller-view-customers","Seller\CustomerController@index")->name('seller.view.customers');
		Route::get("seller-edit-customer/{id}","Seller\CustomerController@edit");
		Route::post("seller-update-customer/{id}","Seller\CustomerController@update");
		Route::get("seller-delete-customer/{id}","Seller\CustomerController@destroy");

		//Supplier
		Route::get("seller-add-supplier","Seller\SupplierController@create");
		Route::post("seller-save-add-supplier","Seller\SupplierController@store");
		Route::get("seller-view-suppliers","Seller\SupplierController@index")->name('seller-view-suppliers');
		Route::get("seller-edit-supplier/{id}","Seller\SupplierController@edit");
		Route::post("seller-update-supplier/{id}","Seller\SupplierController@update");
		Route::get("seller-delete-supplier/{id}","Seller\SupplierController@destroy");

		//Expense
		Route::get("seller-add-expense","Seller\ExpenseController@create");
		Route::post("seller-save-add-expense","Seller\ExpenseController@store");
		Route::get("seller-view-expenses","Seller\ExpenseController@index")->name('seller-view-expenses');
		Route::get("seller-edit-expense/{id}","Seller\ExpenseController@edit");
		Route::post("seller-update-expense/{id}","Seller\ExpenseController@update");
		Route::get("seller-delete-expense/{id}","Seller\ExpenseController@destroy");




	});

	Route::middleware([CheckStatusBuyer::class])->group(function(){

	});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
