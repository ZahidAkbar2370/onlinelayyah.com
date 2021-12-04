<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $table = "complains";

    protected $fillable = [
           'user_id',
           'name',
           'email',
           'mobile_no',
           'address',
    ];
}
