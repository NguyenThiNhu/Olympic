<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truong extends Model
{
   protected $table='truong';
    protected $fillable=[
    	'MA_TRUONG',
    	'MA_BAC',
    	'MA_QH',
    	'TEN_TRUONG'
    ];
}
