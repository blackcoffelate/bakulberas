<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    protected $table = 'varian';
    protected $fillable = [
        'varian',
        'info',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
