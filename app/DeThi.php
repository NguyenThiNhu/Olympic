<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeThi extends Model
{
    protected $table='de_thi';
    protected $fillable=[
    	'MA_DE',
    	'TEN_DE',
    	'SO_CAUHOI'
    ];
}
