<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoinments extends Model
{
    use HasFactory;
    protected $guarded=[
        'name',
        'appoinment_date',
        'appoinment_time',
        'phone'
    ];
}
