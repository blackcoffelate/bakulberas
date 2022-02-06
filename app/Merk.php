<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merk';
    protected $fillable = [
        'merk',
        'info',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
