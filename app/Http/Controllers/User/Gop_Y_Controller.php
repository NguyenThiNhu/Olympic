<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GopY;

class Gop_Y_Controller extends Controller
{
    public function Gop_Y(){
    	return view('User.gopy');
    }

    public function post_Gop_Y(Request $req){

    	$gopy = new GopY;
    	$gopy->TEN_ND = $req->name;
    	$gopy->EMAIL = $req->email;
    	$gopy->NOI_DUNG = $req->noidung;
    	$gopy->save();
 		return redirect()->back()->with(['flash_message'=>'Cám ơn bạn đã góp ý!!']);  
 		return redirect('/');	
    }
}
