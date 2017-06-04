<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DapAn extends Model
{
    protected $table='dap_an';
    protected $fillable=[
    	'id',
    	'MA_CH',
    	'NOI_DUNG',
    	'AUDIO_VIDEO',
    	'TRANGTHAI'
    ];
}
