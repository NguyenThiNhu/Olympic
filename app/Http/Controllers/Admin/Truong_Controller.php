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
	public function cap_nhat_truong($MA_TRUONG){
		$truong = DB::table('truong')
					->join('quan_huyen', 'truong.MA_QH', '=', 'quan_huyen.MA_QH')
		            ->join('bac_hoc', 'truong.MA_BAC', '=', 'bac_hoc.MA_BAC')
					->where('truong.MA_TRUONG','=',$MA_TRUONG)
					->select('truong.*','quan_huyen.TEN_QH','bac_hoc.TEN_BAC')
					->get();
		return view('Admin.QL_TRUONG.capnhat_truong',compact('truong'));
	}

		public function cap_nhat($MA_TRUONG,Request $req){
		$file = $request->file('up_hinh');
		if(!empty($file)){
			
				$validator = Validator::make($request->all(), [
	            	'LOAI_SP' => 'required',
	            	'KM' => 'required',
	            	'TEN_SP' => 'required',
	            	'GIA' => 'required',
	            	'SO_LUONG' => 'required',
	            	'MO_TA' => 'required',
	            	'TRANGTHAI' => 'required',
	        	]);

		        if ($validator->fails()) {
		            return redirect()->back()->with(['flash_message'=>'Bạn phải nhập đầy đủ thông tin.']);
		        }
		        else{
		        		$img_curent	 = $request->anh_hien_tai;
		        		$destinationPath = 'public/user/sanpham/';
		        		$fileRequest = $request->up_hinh;
						$filename = $request->up_hinh->getClientOriginalName();
						//echo $destinationPath.$filename;
						$fileRequest->move($destinationPath,$filename);
						if (File::exists($img_curent))
						{
							File::delete($img_curent);
						}
						$img_url = $destinationPath.$filename;
						$loai = DB::table('loai_san_pham')
		        			->where('TEN_LOAI','like',$request->LOAI_SP)
		        			->select('MA_LOAI')
		        			->get();
		        	foreach ($loai as $loai) {
		        		$ma_loai = $loai->MA_LOAI;
		        	}
		        	$khuyen_mai = DB::table('khuyen_mai')
		        			->where('NOI_DUNG','like',$request->KM)
		        			->select('MA_KM')
		        			->get();
		        	foreach ($khuyen_mai as $khuyen_mai) {
		        		$ma_km = $khuyen_mai->MA_KM;
		        	}
		        	$ten_sp = $request->TEN_SP;
		        	$gia = $request->GIA;
		        	$sl = $request->SO_LUONG;
		        	$mota = $request->MO_TA;
		        	$trangthai = $request->TRANGTHAI;

		        	 San_pham::where('MA_SP', $MA_SP)->update(array(
			            'MA_LOAI'    =>  $ma_loai,
			            'MA_KM' =>  $ma_km,
			            'TEN_SP'  => $ten_sp,
			            'GIA' => $gia,
			            'SO_LUONG' => $sl,
			            'MO_TA' => $mota,
			            'TRANG_THAI' => $trangthai,
			            'IMAGE_URL'=> $img_url
			        ));
		        	return redirect()->back()->with(['flash_message'=>'Cập nhật sản phẩm thành công']);
		        }
		}
		else
			{
					$validator = Validator::make($request->all(), [
	            	'LOAI_SP'=>'required',
	            	'KM'=>'required',
	            	'TEN_SP' => 'required',
	            	'GIA' => 'required',
	            	'SO_LUONG' => 'required',
	            	'MO_TA' => 'required',
	            	'TRANGTHAI' => 'required',
	        	]);

		        if ($validator->fails()) {
		            return redirect()->back()->with(['flash_message'=>'Bạn phải nhập đầy đủ thông tin.']);
		        }
		        else{

		        	$loai = DB::table('loai_san_pham')
		        			->where('TEN_LOAI','like',$request->LOAI_SP)
		        			->select('MA_LOAI')
		        			->get();
		        	foreach ($loai as $loai) {
		        		$ma_loai = $loai->MA_LOAI;
		        	}
		        	$khuyen_mai = DB::table('khuyen_mai')
		        			->where('NOI_DUNG','like',$request->KM)
		        			->select('MA_KM')
		        			->get();
		        	foreach ($khuyen_mai as $khuyen_mai) {
		        		$ma_km = $khuyen_mai->MA_KM;
		        	}
		        	$ten_sp = $request->TEN_SP;
		        	$gia = $request->GIA;
		        	$sl = $request->SO_LUONG;
		        	$mota = $request->MO_TA;
		        	$trangthai = $request->TRANGTHAI;

		        	 San_pham::where('MA_SP', $MA_SP)->update(array(
			            'MA_LOAI'    =>  $ma_loai,
			            'MA_KM' =>  $ma_km,
			            'TEN_SP'  => $ten_sp,
			            'GIA' => $gia,
			            'SO_LUONG' => $sl,
			            'MO_TA' => $mota,
			            'TRANG_THAI' => $trangthai
			        ));
		        	return redirect()->back()->with(['flash_message'=>'Cập nhật sản phẩm thành công']);
		        }
			}
	}
    
}
