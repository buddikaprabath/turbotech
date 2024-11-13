<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $primarykey = 'id';
    protected $fillable = ['balance','invoice_date','total'];

    public function invocemodel(){
        return $this->hasMany(invoice_detail::class);
    }
}
