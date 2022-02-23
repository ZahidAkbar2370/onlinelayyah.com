<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ProductAds;

class ProductAdsSeeder extends Seeder
{
public function run()
{
ProductAds::create([
'product_id'=>"1",
'start_date'=>"10-10-2020",
'end_date'=>"20-10-2020",
'label'=>'label-1',
'status'=>'2'
]);

ProductAds::create 
([
'product_id'=>"1",
'start_date'=>"10-10-2020",
'end_date'=>"20-10-2020",
'label'=>'label-1',
'status'=>'2',
]);
}
}

