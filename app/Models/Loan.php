<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = "loans";

    protected $fillable = [
        'user_id',
        'customer_id',
        'loan_type',
        'amount',
        'description',
        'bill',
        'loan_date',
    ];

    public function customer()
    {
        return $this->belongsTo("App\Models\customer", "customer_id", "id");
    }
}
