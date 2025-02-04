<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'kode', 'nama', 'alamat', 'telpon', 'foto', 'info', 'sales_id'
    ];
}
