<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'kode',
        'nama',
        'merk_id',
        'varian_id',
        'satuan_id',
        'beli',
        'jual',
        'min',
        'max',
        'stok',
        'status'
    ];
    public function varian()
    {
        return $this->belongsTo('App\Varian', 'varian_id');
    }
}
