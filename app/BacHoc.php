<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BacHoc extends Model
{
   protected $table='bac_hoc';
    protected $fillable=[
    	'MA_BAC',
    	'TEN_BACs'
    ];
}
