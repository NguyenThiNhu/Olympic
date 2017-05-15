<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
     protected $table='lop';
    protected $fillable=[
    	'MA_LOP',
    	'TEN_TRUONG',
    	'TEN_LOP'
    ];
}
