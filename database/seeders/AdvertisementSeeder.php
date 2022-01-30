<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Advertisement;
class AdvertisementSeeder extends Seeder
{
    public function run()
    {
        Advertisement::create
        ([
        'product_id'=>"1",
        'start_date'=>"10-10-2020",
        'end_date'=>"20-10-2020",
        'label'=>'label-1',
        'status'=>'2',
        ]);
        Advertisement::create
        ([
        'product_id'=>"1",
        'start_date'=>"10-10-2020",
        'end_date'=>"20-10-2020",
        'label'=>'label-2',
        'status'=>'2',
        ]);
        Advertisement::create
        ([
        'product_id'=>"2",
        'start_date'=>"15-10-2020",
        'end_date'=>"20-10-2020",
        'label'=>'label-3',
        'status'=>'1',
        ]);
        Advertisement::create
        ([
        'product_id'=>"2",
        'start_date'=>"20-10-2020",
        'end_date'=>"25-10-2020",
        'label'=>'label-4',
        'status'=>'0',
        ]);
        Advertisement::create
        ([
        'product_id'=>"3",
        'start_date'=>"10-11-2020",
        'end_date'=>"20-11-2020",
        'label'=>'label-5',
        'status'=>'2',
        ]);
        Advertisement::create
        ([
        'product_id'=>"5",
        'start_date'=>"10-11-2021",
        'end_date'=>"20-11-2021",
        'label'=>'label-6',
        'status'=>'2',
        ]);
        Advertisement::create
        ([
        'product_id'=>"3",
        'start_date'=>"10-11-2018",
        'end_date'=>"20-11-2018",
        'label'=>'label-6',
        'status'=>'1',
        ]); 
        Advertisement::create
        ([
        'product_id'=>"2",
        'start_date'=>"10-11-2020",
        'end_date'=>"20-11-2020",
        'label'=>'label-7',
        'status'=>'3',
        ]);    
    }
}