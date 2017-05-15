<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinh extends Model
{
    protected $table='tinh_thanhpho';
    protected $fillable=[
    	'MA_TINH',
    	'TEN_TINH'
    ];
}
