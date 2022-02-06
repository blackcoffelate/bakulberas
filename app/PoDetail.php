<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoDetail extends Model
{
    protected $table = 'po_detail';
    protected $fillable = [
        'po_id',
        'product_id',
        'qty',
        'harga'
    ];
}
