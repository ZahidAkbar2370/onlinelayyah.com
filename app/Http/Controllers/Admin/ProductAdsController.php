<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductAds;
use App\Models\Product;
use App\Http\Requests\ValidateProductAds;
use Auth;
use Http;

class ProductAdsController extends Controller
{

public function index()
{
$productads=ProductAds::with('product')->get();    
return view('Admin.ProductAds.view_product_ads')->with(['productads'=>$productads]);
}

public function create()
{
$products=Product::all();
return view('Admin.ProductAds.add_product_ads')->with(['products'=>$products]);
}

public function store(ValidateProductAds $request)
{
$auth=Auth::user()->id ?? 1;
$productid=$request->product_id;
$productlabel=Product::where(['id'=>$productid])->pluck('lable')->first();
$insert=ProductAds::create([
'product_id'=>$request->product_id,
'start_date'=>$request->start_date,
'end_date'=>$request->end_date,
'label'=>$productlabel,
'status'=>$request->status,
]);
if($insert)
{
return redirect()->route('admin-productads-view')->with('productadsadded','Your Advertisement Is Successfully Added');
}
}

public function destroy($ads)
{
$productads=ProductAds::find($ads);
$delete=$productads->delete();
if($delete)
{
return redirect()->route('admin-productads-view')->with('productadsdeleted','Your Advertisement Is Successfully Deleted');
}
}
public function edit($ads)
{
$ads=ProductAds::with('product')->where(['id'=>$ads])->first();
return view('Admin.ProductAds.edit_product_ads')->with('ads',$ads);
}
public function update(ValidateProductAds $request, $ads)
{
$ads=ProductAds::find($ads);
$update=$ads->update(['start_date'=>$request->start_date,'end_date'=>$request->end_date,'status'=>$request->status]);
if($update)
{
return redirect()->route('admin-productads-view')->with('productadsupdated','Advertisement is successfully Updated');    
}
}    

}
