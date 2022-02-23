<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellerAccountDetail;
use App\Models\SellerBusinessProfile;
use App\Models\SellerPersonalProfile;
use App\Models\User;

class SellerController extends Controller
{
public function index()
{
// To show all detail of seller on admin panel
$sellers=User::join('seller_personal_profiles','seller_personal_profiles.user_id','=','users.id')
->join('seller_business_profiles','seller_business_profiles.user_id','=','users.id')
->join('seller_account_details','seller_account_details.user_id','=','users.id')
->get();
return view('Admin.Seller.view_sellers')->with(['sellers'=>$sellers]);
}
public function edit($id)
{
dd($id);
}
public function update($id)
{
dd($id);
}
public function destroy($id)
{
// To delete a seller by using admin panel
$seller=User::find($id);
$delete=$seller->delete();
if($delete)
{
return redirect()->route('admin-seller-view')->with('sellerdeleted','Seller Is Successfully Deleted');
}
}
}