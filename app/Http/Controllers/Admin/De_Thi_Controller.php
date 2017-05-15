<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DeThi;
use DB,Validator,Datetime,File;


class De_Thi_Controller extends Controller
{
    public function lay_de_thi(){
		
		$dethi = DeThi::all();
    	return view('Admin.QL_DETHI.ql_dethi',compact('dethi'));
	
	}
	public function vao_thi(){
		
		$dethi = DeThi::all();
    	return view('User.vaothi',compact('dethi'));
	
	}
	public function them_dethi(Request $req){
			$dethi = new DeThi;
			
			$dethi->TEN_DE = $req->tende;
			$dethi->save();

			return redirect()->back()->with(['flash_message'=>'Thêm đề thi thành công.']);
	}

}
