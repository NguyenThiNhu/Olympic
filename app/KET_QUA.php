<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KET_QUA extends Model
{
    protected $table='ket_qua';
    protected $fillable=[
    	'MA_KQ',
    	'MA_TK',
    	'MA_DE',
    	'NGAY_GIO_THI',
    	'DIEM_SO'
    ];
}
