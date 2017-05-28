<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DeThi;
use App\CauHoi;
use App\DapAn;
use DB,Validator,Datetime,File;



class De_Thi_Controller extends Controller
{
    public function lay_de_thi(){
		$dethi = DeThi::all();
    	return view('Admin.QL_DETHI.ql_dethi',compact('dethi'));
	}
	public function chi_tiet($id){
		$de_thi = DeThi::where('MA_DE','=',$id)->first();
		$cau_hoi = CauHoi::where('MA_DE','=',$id)->get();
		return view('Admin.QL_DETHI.chi_tiet_de_thi',compact('de_thi','cau_hoi'));
	}

	public function them_cau_hoi($id){
		$de_thi = DeThi::where('MA_DE','=',$id)->first();
		return view('Admin.QL_DETHI.them_cau_hoi',compact('de_thi'));
	}

	public function post_them_cau_hoi($id, Request $req){
		if($req->loai_ch==1)
		{	
			foreach ($req->trac_nghiem as $key => $value) {
				foreach ($req->tg_cauhoi1 as $key1 => $value1) {
					if($value!=null && $value1!=null){
						if($key == $key1)
						{
							$cau_hoi = new CauHoi;
							$cau_hoi->MA_LOAI = $req->loai_ch;
							$cau_hoi->MA_DE = $id;
							$cau_hoi->NOI_DUNG = $value;
							$cau_hoi->TG_CAUHOI = $value1;
							$cau_hoi->save();
						}
					}
					
				}
			}
		}elseif ($req->loai_ch==2) {
			
			$files = $req->file('hinh');
			foreach($files as $file){
				//lay anh len
		        $filename = $file->getClientOriginalName();
		        $extension = $file->getClientOriginalExtension();
		        $destinationPath = 'public/image/image/';
		        $file->move($destinationPath, $filename);
		        //end lay anh
		        $cau_hoi = new CauHoi;
				$cau_hoi->MA_LOAI = $req->loai_ch;
				$cau_hoi->MA_DE = $id;
				$cau_hoi->NOI_DUNG = $destinationPath.$filename;
				$cau_hoi->TG_CAUHOI = 300;
				$cau_hoi->save();
		    }
		}elseif ($req->loai_ch==3) {

			foreach ($req->dien_khuyet as $key => $value) {
				foreach ($req->tg_cauhoi2 as $key1 => $value1) {
					if($value!=null && $value1!=null){
						if($key == $key1)
						{
							$cau_hoi = new CauHoi;
							$cau_hoi->MA_LOAI = $req->loai_ch;
							$cau_hoi->MA_DE = $id;
							$cau_hoi->NOI_DUNG = $value;
							$cau_hoi->TG_CAUHOI = $value1;
							$cau_hoi->save();
						}
					}
					
				}
			}
			
		}elseif ($req->loai_ch==4) {
			$files = $req->file('audio');
			foreach($files as $key =>$value){
				foreach ($req->ch_audio as $key1 => $value1) {
					if($value!=null && $value1!=null){
						if($key == $key1)
						{
							//lay audio len
					        $filename = $value->getClientOriginalName();
					        $extension = $value->getClientOriginalExtension();
					        $destinationPath = 'public/image/audio/';
					        $value->move($destinationPath, $filename);
					        //end lay audio
					        $cau_hoi = new CauHoi;
							$cau_hoi->MA_LOAI = $req->loai_ch;
							$cau_hoi->MA_DE = $id;
							$cau_hoi->NOI_DUNG = $value1; 
							$cau_hoi->AUDIO_VIDEO = $destinationPath.$filename;
							$cau_hoi->TG_CAUHOI = 50;
							$cau_hoi->save();
						}
					}
					
				}
		    }
			
		}elseif ($req->loai_ch==5) {
			$files = $req->file('video');
			foreach($files as $key =>$value){
				foreach ($req->ch_video as $key1 => $value1) {
					if($value!=null && $value1!=null){
						if($key == $key1)
						{
							//lay audio len
					        $filename = $value->getClientOriginalName();
					        $extension = $value->getClientOriginalExtension();
					        $destinationPath = 'public/image/video/';
					        $value->move($destinationPath, $filename);
					        //end lay audio
					        $cau_hoi = new CauHoi;
							$cau_hoi->MA_LOAI = $req->loai_ch;
							$cau_hoi->MA_DE = $id;
							$cau_hoi->NOI_DUNG = $value1; 
							$cau_hoi->AUDIO_VIDEO = $destinationPath.$filename;
							$cau_hoi->TG_CAUHOI = 50;
							$cau_hoi->save();
						}
					}
				}
		    }
			
		}

		$de_thi = CauHoi::where('MA_DE','=',$id)->get();
		$stt=1;
		foreach ($de_thi as $de_thi) {
			CauHoi::where('MA_CH','=',$de_thi->MA_CH)
			->update([
				'STT_CH'=>$stt
				]);
			$stt++;
		}
		return redirect()->route('chi_tiet_de_thi',[$id])->with(['flash_message'=>'Thêm câu hỏi cho đề thi thành công.']);
	}

	//cap_nhat_cau_hoi
	public function  cap_nhat_cau_hoi($id){
		$cau_hoi = CauHoi::where('MA_CH','=',$id)->first();
		return view('Admin.QL_DETHI.cap_nhat_cau_hoi',compact('cau_hoi'));
	}

	public function  post_cap_nhat($id,Request $req){
		$cau_hoi = CauHoi::where('MA_CH','=',$id)->first();

		if($req->loai_ch==1)
		{	
			CauHoi::where('MA_CH','=',$id)
			->update([
				'MA_LOAI'=>$req->loai_ch,
				'NOI_DUNG'=>$req->trac_nghiem,
				'TG_CAUHOI'=>$req->tg_cauhoi
			]);
		}elseif ($req->loai_ch==2) {

			$files = $req->file('hinh');
			if($files==null)
			{
				CauHoi::where('MA_CH','=',$id)
				->update([
					'TG_CAUHOI'=>$req->tg_cauhoi
				]);
			}
			else{
				
				File::delete($cau_hoi->NOI_DUNG);
				$filename = $files->getClientOriginalName();
		        $extension = $files->getClientOriginalExtension();
		        $destinationPath = 'public/image/image/';
		        $files->move($destinationPath, $filename);
				CauHoi::where('MA_CH','=',$id)
				->update([
					'MA_LOAI'=>$req->loai_ch,
					'NOI_DUNG'=>$destinationPath.$filename,
					'TG_CAUHOI'=>$req->tg_cauhoi
				]);
			}
			
		}elseif ($req->loai_ch==3) {
			CauHoi::where('MA_CH','=',$id)
			->update([
				'MA_LOAI'=>$req->loai_ch,
				'NOI_DUNG'=>$req->trac_nghiem,
				'TG_CAUHOI'=>$req->tg_cauhoi
			]);

		}elseif ($req->loai_ch==4) {
			$files = $req->file('audio');
			if($files==null)
			{
				CauHoi::where('MA_CH','=',$id)
				->update([
					'NOI_DUNG'=>$req->nd_audio,
					'TG_CAUHOI'=>$req->tg_cauhoi
				]);
			}
			else{
				File::delete($cau_hoi->NOI_DUNG);
				$filename = $files->getClientOriginalName();
		        $extension = $files->getClientOriginalExtension();
		        $destinationPath = 'public/image/audio/';
		        $files->move($destinationPath, $filename);
				CauHoi::where('MA_CH','=',$id)
				->update([
					'MA_LOAI'=>$req->loai_ch,
					'NOI_DUNG'=>$req->nd_audio,
					'AUDIO_VIDEO'=>$destinationPath.$filename,
					'TG_CAUHOI'=>$req->tg_cauhoi
				]);
			}

		}elseif ($req->loai_ch==5) {
			$files = $req->file('video');
			if($files==null)
			{
				CauHoi::where('MA_CH','=',$id)
				->update([
					'NOI_DUNG'=>$req->nd_video,
					'TG_CAUHOI'=>$req->tg_cauhoi
				]);
			}
			else{
				File::delete($cau_hoi->NOI_DUNG);

				$filename = $files->getClientOriginalName();
		        $extension = $files->getClientOriginalExtension();
		        $destinationPath = 'public/image/video/';
		        $files->move($destinationPath, $filename);
				CauHoi::where('MA_CH','=',$id)
				->update([
					'MA_LOAI'=>$req->loai_ch,
					'NOI_DUNG'=>$req->nd_video,
					'AUDIO_VIDEO'=>$destinationPath.$filename,
					'TG_CAUHOI'=>$req->tg_cauhoi
				]);
			}
		}

		$de_thi = CauHoi::where('MA_DE','=',$cau_hoi->MA_DE)->get();
		$stt=1;
		foreach ($de_thi as $de_thi) {
			CauHoi::where('MA_CH','=',$de_thi->MA_CH)
			->update([
				'STT_CH'=>$stt
				]);
			$stt++;
		}
		return redirect()->route('chi_tiet_de_thi',[$cau_hoi->MA_DE])->with(['flash_message'=>'Cập Nhật câu hỏi thành công.']);
	}

	//end cap nhat

	public function xoa_cau_hoi($id){
		$cau_hoi = CauHoi::where('MA_CH','=',$id)->first();
		DapAn::where('MA_CH','=',$id)->delete();
		if($cau_hoi->MA_LOAI==2||$cau_hoi->MA_LOAI==4||$cau_hoi->MA_LOAI==5)
			File::delete($cau_hoi->NOI_DUNG);

		CauHoi::where('MA_CH','=',$id)->delete();

		$de_thi = CauHoi::where('MA_DE','=',$cau_hoi->MA_DE)->get();
		$stt=1;
		foreach ($de_thi as $de_thi) {
			CauHoi::where('MA_CH','=',$de_thi->MA_CH)
			->update([
				'STT_CH'=>$stt
				]);
			$stt++;
		}

		return redirect()->back()->with(['flash_message'=>'Xóa câu hỏi thành công.']);
	}
	public function dap_an($id){
		$cau_hoi = CauHoi::where('MA_CH','=',$id)->first();
		$dap_an = DapAn::where('MA_CH','=',$id)->get();
		return view('Admin.QL_DETHI.dap_an',compact('cau_hoi','dap_an'));
	}

	public function vao_thi(){
		
		$dethi = DeThi::all();
    	return view('User.vaothi',compact('dethi'));
	
	}
	public function them_dethi(){
		return view('Admin.QL_DETHI.them_de_thi');
	}
	public function post_them_dethi(Request $req){
		$de_thi = new DeThi;
		$de_thi->TEN_DE = $req->ten_de;
		$de_thi->SO_CAUHOI = $req->so_cau;
		$de_thi->save();
		return redirect()->route('ql_de_thi')->with(['flash_message'=>'Thêm Đề Thi Thành Công.!!']);
	}

	public function them_dap_an($id){
		$cau_hoi = CauHoi::where('MA_CH','=',$id)->first();
		return view('Admin.QL_DETHI.them_dap_an',compact('cau_hoi'));
	}

	public function post_them_dap_an($id, Request $req){
		$cau_hoi = CauHoi::where('MA_CH','=',$id)->first();
		
		if($cau_hoi->MA_LOAI==2)
		{
			$files = $req->file('hinh_anh');
			$filename = $files->getClientOriginalName();
	        $extension = $files->getClientOriginalExtension();
	        $destinationPath = 'public/image/Dap_An/';
	        $files->move($destinationPath, $filename);

	        $add_da = new DapAn;
	        $add_da->MA_CH = $id;
	        $add_da->NOI_DUNG= $destinationPath.$filename;
	        $add_da->TRANGTHAI = $req->trang_thai;
	        $add_da->save();
		}
		else{
			$add_da = new DapAn;
			$add_da->MA_CH = $id;
			$add_da->NOI_DUNG = $req->noi_dung;
			$add_da->TRANGTHAI = $req->trang_thai;
			$add_da->save();
		}
		return redirect()->route('xem_dap_an',[$id])->with(['flash_message'=>'Thêm đáp án thành công.!']);

	}

}
