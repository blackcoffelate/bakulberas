<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoDetail extends Model
{
    protected $table = 'ro_detail';
    protected $fillable = [
        'ro_id',
        'product_id',
        'qty',
        'harga'
    ];
}
