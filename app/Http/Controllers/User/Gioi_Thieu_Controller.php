<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Gioi_Thieu_Controller extends Controller
{
    public function gioi_thieu(){
    	return view('User.gioithieu');
    }
}
