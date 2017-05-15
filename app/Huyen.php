<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huyen extends Model
{
    protected $table='quan_huyen';
    protected $fillable=[
    	'MA_QH',
    	'MA_TINH',
    	'TEN_QH'
    ];
}
