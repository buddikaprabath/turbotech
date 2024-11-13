<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;
    protected $guarded=[
        'product',
        'QTY',
        'product_cost',
        'service',
        'service_cost',
        'total'
    ];
}
