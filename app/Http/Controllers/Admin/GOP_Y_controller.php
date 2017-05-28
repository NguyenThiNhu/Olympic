<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GopY;

class GOP_Y_controller extends Controller
{
    public function show(){
    	$gop_y = GopY::all();
    	return view('Admin.GOP_Y.gop_y',compact('gop_y'));
    }
}
