<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ValidateAdvertisement extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return 
[
'product_id'=>'required|notIn:0',
'status'=>'required|notIn:0|in:1,2,3',
'start_date'=>'required|date',
'end_date'=>'required|date|after_or_equal:start_date'
];
}
}
