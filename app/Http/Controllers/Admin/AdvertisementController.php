<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Product;
use App\Http\Requests\ValidateAdvertisement;
use Auth;
use Http;

class AdvertisementController extends Controller
{
public function index()
{
$advertisements=Advertisement::with('product')->get();    
return view('Admin.Advertisement.view_advertisement')->with(['advertisements'=>$advertisements]);
}

public function create()
{
$products=Product::all();
return view('Admin.Advertisement.add_advertisement')->with(['products'=>$products]);
}

public function store(ValidateAdvertisement $request)
{
$auth=Auth::user()->id ?? 1;
$productid=$request->product_id;
$productlabel=Product::where(['id'=>$productid])->pluck('lable')->first();
$insert=Advertisement::create([
'product_id'=>$request->product_id,
'start_date'=>$request->start_date,
'end_date'=>$request->end_date,
'label'=>$productlabel,
'status'=>$request->status,
]);
if($insert)
{
return redirect()->route('admin-advertisement-view')->with('advertisementadded','Your Advertisement Is Successfully Added');
}

}
public function destroy($ads)
{
$advertisement=Advertisement::find($ads);
$delete=$advertisement->delete();
if($delete)
{
return redirect()->route('admin-advertisement-view')->with('advertisementdeleted','Your Advertisement Is Successfully Deleted');
}
}
public function edit($ads)
{
$ads=Advertisement::with('product')->where(['id'=>$ads])->first();
return view('Admin.Advertisement.edit_advertisement')->with('ads',$ads);
}
public function update(ValidateAdvertisement $request, $ads)
{
$ads=Advertisement::find($ads);
$update=$ads->update(['start_date'=>$request->start_date,'end_date'=>$request->end_date,'status'=>$request->status]);
if($update)
{
return redirect()->route('admin-advertisement-view')->with('advertisementupdated','Advertisement is successfully Updated');    
}
}    

}
