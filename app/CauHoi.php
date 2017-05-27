<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
     protected $table='cau_hoi';
    protected $fillable=[
    	'MA_CH',
    	'MA_LOAI',
    	'MA_DE',
    	'NOI_DUNG',
    	'TG_CAUHOI',

    ];
}
