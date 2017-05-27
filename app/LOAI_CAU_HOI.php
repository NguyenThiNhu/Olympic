<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOAI_CAU_HOI extends Model
{
    protected $table='loai_cau_hoi';
    protected $fillable=[
    	'MA_LOAI',
    	'TEN_LOAI'
    ];
}
