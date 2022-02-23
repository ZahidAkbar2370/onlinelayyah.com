<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckPublicationStatus;
use App\Http\Middleware\CheckStatusSeller;
use App\Http\Middleware\CheckStatusAdmin;
use App\Http\Middleware\CheckStatusBuyer;

Route::get("/",function(){
	return redirect("index");
});


Route::get("/test",function(){
	return view("App.app_layout");
});

Route::get("/contact",function(){
	return view("App.Page.contact_form");
});

Route::get("/become-a-seller",function(){
	return view("App.Page.become_a_seller");
});
Route::post("become-a-seller", "BecomeASellerController@store");

// Route::get("/index",function(){
// 	return view("App.Page.home");
// });
Route::get("index","Buyer\HomeController@products");
Route::get("products","Buyer\ProdcutController@index");
Route::get("product-detail/{id}","Buyer\ProdcutController@productDetail");
Route::post("buyer-add-to-cart","Buyer\CartController@store");

Route::get("shops","Buyer\ShopController@shops");
Route::get("shop-profile/{id}","Buyer\ShopController@shopProfile");

// Route::get("shop-profile",function(){
// 	return view("App.Shop.shop_profile");
// });

// Route::get("/buyer-register",function(){
// 	return view("App.Buyer.buyer_register");
// });
Route::get("buyer-register","Buyer\BuyerController@create");
Route::post("save-buyer-profile","Buyer\BuyerController@register");
Route::get("buyer-profile","Buyer\BuyerController@profile");


// Route::get("/cart",function(){
// 	return view("App.Buyer.cart");
// });
Route::get("cart","Buyer\CartController@create");
Route::get("delete-cart/{id}","Buyer\CartController@deleteCart");
Route::get("/check-out",function(){
	return view("App.Buyer.checkout");
});


	// Routes of a Admin for Product Advertisements
	Route::get('admin-view-productads','Admin\ProductAdsController@index')->name('admin-productads-view');
	Route::get('admin-create-productads','Admin\ProductAdsController@create')->name('admin-productads-create');
	Route::get('admin-add-productads','Admin\ProductAdsController@store')->name('admin-productads-store');
	Route::get('admin-delete-productads/{ads}','Admin\ProductAdsController@destroy')->name('admin-productads-delete');
	Route::get('admin-edit-productads/{ads}','Admin\ProductAdsController@edit')->name('admin-productads-edit');
	Route::get('admin-update-productads/{ads}','Admin\ProductAdsController@update')->name('admin-productads-update');

	// Routes for Admin to view seller and change their status
	Route::get('admin-view-seller','Admin\SellerController@index')->name('admin-seller-view');
	Route::get('admin-delete-seller/{id}','Admin\SellerController@destroy')->name('admin-seller-delete');
	Route::get('admin-edit-seller/{id}','Admin\SellerController@edit')->name('admin-seller-edit');
	Route::get('admin-update-seller/{id}','Admin\SellerController@update')->name('admin-seller-update');

	// Routes for Admin to view seller and change their status
	Route::get('admin-view-buyer','Admin\BuyerController@index')->name('admin-buyer-view');
	Route::get('admin-delete-buyer/{id}','Admin\BuyerController@destroy')->name('admin-buyer-delete');
	Route::get('admin-edit-buyer/{id}','Admin\BuyerController@edit')->name('admin-buyer-edit');
	Route::get('admin-update-buyer/{id}','Admin\BuyerController@update')->name('admin-buyer-update');

	// Routes of Admin for Shop Advertisement
	Route::get('admin-view-shopads','Admin\ShopAdsController@index')->name('admin-shopads-view');
	Route::get('admin-create-shopads','Admin\ShopAdsController@create')->name('admin-shopads-create');
	Route::get('admin-add-shopads','Admin\ShopAdsController@store')->name('admin-shopads-store');
	Route::get('admin-delete-shopads/{ads}','Admin\ShopAdsController@destroy')->name('admin-shopads-delete');
	Route::get('admin-edit-shopads/{ads}','Admin\ShopAdsController@edit')->name('admin-shopads-edit');
	Route::get('admin-update-shopads/{ads}','Admin\ShopAdsController@update')->name('admin-shopads-update');





	Route::middleware([CheckPublicationStatus::class])->group(function(){

/////////////////////// Admin Routes ///////////////////////

	Route::middleware([CheckStatusAdmin::class])->group(function(){

		// Route::get("welcome",function(){
		// 	return view("welcome");
		// });

		Route::get("admin-layout",function(){
			return view("Admin.admin_layout");
		});

		Route::get("admin-add-admin",function(){
			return view("Admin.Admin.add_admin");
		});

		Route::get("admin-view-admins",function(){
			return view("Admin.Admin.view_admins");
		});

	});


// //////////////////////// Seller Routes /////////////////


	Route::middleware([CheckStatusSeller::class])->group(function(){


		//Dashboard
		Route::get("seller-dashboard","Seller\DashboardController@index");

		//Profiles
		Route::get("seller-personal-profile","Seller\PersonalProfileController@personalProfile");
		Route::post("seller-update-personal-profile","Seller\PersonalProfileController@updatePersonalProfile");
		Route::get("seller-business-profile","Seller\BussinessProfileController@bussinessProfile");
		Route::post("seller-update-business-profile","Seller\BussinessProfileController@updateBussinessProfile");
		Route::get("seller-account-detail","Seller\AccountDetailController@accountDetail");
		Route::post("seller-update-account-detail","Seller\AccountDetailController@updateAccountDetail");

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

		//Purchase Stock
		Route::get("seller-add-purchase-stock","Seller\PurchaseStockController@create");
		Route::post("seller-save-add-purchase-stock","Seller\PurchaseStockController@store");
		Route::get("seller-view-purchase-stocks","Seller\PurchaseStockController@index");
		Route::get("seller-edit-purchase-stock/{id}","Seller\PurchaseStockController@edit");
		Route::post("seller-update-purchase-stock/{id}","Seller\PurchaseStockController@update");
		Route::get("seller-delete-purchase-stock/{id}","Seller\PurchaseStockController@destroy");

		//Expense
		Route::get("seller-add-expense","Seller\ExpenseController@create");
		Route::post("seller-save-add-expense","Seller\ExpenseController@store");
		Route::get("seller-view-expenses","Seller\ExpenseController@index")->name('seller-view-expenses');
		Route::get("seller-edit-expense/{id}","Seller\ExpenseController@edit");
		Route::post("seller-update-expense/{id}","Seller\ExpenseController@update");
		Route::get("seller-delete-expense/{id}","Seller\ExpenseController@destroy");

		//Product
		Route::get("seller-add-product","Seller\ProductController@create");
		Route::post("seller-save-add-product","Seller\ProductController@store");
		Route::get("seller-view-products","Seller\ProductController@index")->name('seller-view-products');
		// Route::get("seller-edit-expense/{id}","Seller\ProductController@edit");
		// Route::post("seller-update-expense/{id}","Seller\ProductController@update");
		Route::get("seller-delete-product/{id}","Seller\ProductController@destroy");

		//Change Password
		Route::get("seller-change-password","Seller\ChangePasswordController@create");
		Route::post('/change/password',"Seller\ChangePasswordController@changePassword")->name('profile.change.password');

		//Complain
		Route::get("seller-add-complain","Seller\ComplainController@create");
		Route::post("seller-save-add-complain","Seller\ComplainController@store");

		//Loan
		Route::get("seller-add-customer-loan/{id}","Seller\LoanController@create");
		Route::post("seller-save-add-loan","Seller\LoanController@store");
		Route::get("seller-view-loans/{id}","Seller\LoanController@index");
		Route::get("seller-delete-loan/{id}","Seller\LoanController@destroy");

		//Email
		Route::get("seller-add-email","Seller\EmailController@create");
		Route::post("seller-save-add-email","Seller\EmailController@store");
		Route::get("seller-view-emails","Seller\EmailController@index");

		//Order
		Route::get("seller-orders","Seller\OrderController@index");
		Route::get("seller-order-history","Seller\OrderController@orderHistory");
		Route::get("seller-delete-order/{id}","Seller\OrderController@deleteOrder");
		Route::get("seller-confirm-order/{id}","Seller\OrderController@confirmOrder");
		Route::get("seller-deliver-order/{id}","Seller\OrderController@deliverOrder");
		Route::get("seller-cashed-order/{id}","Seller\OrderController@cashedOrder");
		Route::get("seller-view-order/{id}","Seller\OrderController@viewOrder");

	});


// //////////////  Buyer Routes ////////////

	Route::middleware([CheckStatusBuyer::class])->group(function(){

	});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
