<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table = 'satuan';
    protected $fillable = [
        'satuan',
        'info',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
