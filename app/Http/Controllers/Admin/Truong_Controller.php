<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Truong;
use DB,Validator,Datetime,File;

class Truong_Controller extends Controller
{
		    
    public function lay_truong(){
		$truong = DB::table('truong')
            ->join('quan_huyen', 'truong.MA_QH', '=', 'quan_huyen.MA_QH')
            ->join('bac_hoc', 'truong.MA_BAC', '=', 'bac_hoc.MA_BAC')
            ->select('truong.*', 'quan_huyen.*', 'bac_hoc.*')
            ->get();
    	return view('Admin.QL_TRUONG.ql_truong',compact('truong'));
	}
	public function trang_them_truong(){
		$quan_huyen = DB::table('quan_huyen')
			->get();

		$bac_hoc = DB::table('bac_hoc')
			->get();

		return view('Admin.QL_TRUONG.themtruong',compact('quan_huyen','bac_hoc'));
	}
	public function them_truong(Request $req){
			$truong = new Truong;
			$quanhuyen = DB::table('quan_huyen')
				->where('TEN_QH','like',$req->quanhuyen)
				->select('MA_QH')
				->get();
			foreach ($quanhuyen as $quanhuyen) {
				$truong->MA_QH = $quanhuyen->MA_QH;
			}
			$bachoc = DB::table('bac_hoc')
				->where('TEN_BAC','like',$req->bachoc)
				->select('MA_BAC')
				->get();
			foreach ($bachoc as $bachoc) {
				$truong->MA_BAC = $bachoc->MA_BAC;
			}
			$truong->TEN_TRUONG = $req->tentruong;
			$truong->save();

			return redirect()->back()->with(['flash_message'=>'Thêm trường thành công.']);
	}
	public function cap_nhat_truong($id){
		$truong = Truong::where('MA_TRUONG','=',$id)->first();
		return view('Admin.QL_TRUONG.capnhat_truong',compact('truong'));
	}

	public function post_cap_nhat_truong($id,Request $req){
		Truong::where('MA_TRUONG','=',$id)
		->update([
			'MA_QH'=>$req->quanhuyen,
			'MA_BAC'=>$req->bachoc,
			'TEN_TRUONG'=>$req->ten_truong
			]);
		return redirect()->route('Truong')->with(['flash_message'=>'Cập Nhật trường thành công.']);
	}
    
}
