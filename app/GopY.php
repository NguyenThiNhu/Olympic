<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GopY extends Model
{
    protected $table = 'gop_y';
    protected $fillable = [
    
        'MA_GY',
        'TEN_ND',
        'EMAIL',
        'NOI_DUNG'
    ];
}
