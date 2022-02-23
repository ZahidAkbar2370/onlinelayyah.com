<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ValidateProductAds extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return 
[
'product_id'=>'required|notIn:null',
'status'=>'required|notIn:null|In:active,inactive,expire',
'start_date'=>'required|date',
'end_date'=>'required|date|after_or_equal:start_date'
];
}
}
