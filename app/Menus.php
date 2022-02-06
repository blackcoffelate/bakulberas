<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'parent_id',
        'label',
        'icon',
        'url',
        'order',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
