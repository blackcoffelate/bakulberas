<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    protected $table = 'po';
    protected $fillable = [
        'kode',
        'tanggal',
        'suplier_id',
        'seller_id',
        'jumlah',
        'potongan',
        'total',
        'bayar',
        'status',
        'info'
    ];
}
