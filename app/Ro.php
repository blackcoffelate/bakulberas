<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ro extends Model
{
    protected $table = 'ro';
    protected $fillable = [
        'po_id',
        'kode',
        'tanggal',
        'jumlah',
        'status'
    ];
}
