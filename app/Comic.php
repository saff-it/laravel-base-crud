<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'type',
        'sale_date',
    ];
}
