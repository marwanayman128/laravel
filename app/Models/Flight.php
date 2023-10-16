<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [

        'flight_number',
        'airline',
        'departure_date',
        'departure_time',
        'arrival_time',
        'duration',
        'price',
        'seats',
        'from',
        'to',
        'description',

    ];
}
