<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductAds extends Model
{
    use HasFactory;
    protected $fillable=['product_id','start_date','end_date','label','status'];
    protected $dates=['start_date','end_date'];
    public function product()
    {
    return $this->belongsTo(Product::class);    
    }

}
