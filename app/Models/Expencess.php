<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expencess extends Model
{
    use HasFactory;
    protected $fillable=[
        'details',
        'amount',
        'date',
        'month',
        'year',

    ];
}
