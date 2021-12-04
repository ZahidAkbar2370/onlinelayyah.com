<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $table = "emails";

    protected $fillable = [
        'customer_id',
        'email',
        'subject',
        'message',
    ];
}
