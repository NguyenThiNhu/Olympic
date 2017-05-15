<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Cau_Hoi_Controller extends Controller
{
    
    public function them_cau_hoi_TN(){
    	return view('Admin.QL_CAU_HOI.them_cauhoitracnghiem');
    }
    public function them_cau_hoi_audio(){
    	return view('Admin.QL_CAU_HOI.them_cauhoiaudio');
    }
    public function them_cau_hoi_hinh(){
    	return view('Admin.QL_CAU_HOI.them_cauhoihinh');
    }
    public function ket_qua_thi(){
        return view('User.ketquathi');
    }



    public function lay_cau_hoi_bai_thi($stt){
        if($stt<=10)
        {
        $cauhoi = DB::table('cau_hoi')
            ->join('loai_cau_hoi', 'cau_hoi.MA_LOAI', '=', 'loai_cau_hoi.MA_LOAI')
            ->join('de_thi', 'cau_hoi.MA_DE', '=', 'de_thi.MA_DE')
            ->select('cau_hoi.*', 'loai_cau_hoi.*', 'de_thi.*')
            ->where('cau_hoi.STT_CH','=',$stt)
            ->first();
            $stt=$stt;
        return view('User.baithi',compact('cauhoi','stt'));
        }
        else
            {
                return view('User.hoanthanh_baithi');
            }
        
    }
       public function lay_cau_hoi(){
        $cauhoi = DB::table('cau_hoi')
            ->join('loai_cau_hoi', 'cau_hoi.MA_LOAI', '=', 'loai_cau_hoi.MA_LOAI')
            ->join('de_thi', 'cau_hoi.MA_DE', '=', 'de_thi.MA_DE')
            ->select('cau_hoi.*', 'loai_cau_hoi.*', 'de_thi.*')
            ->get();
        return view('Admin.QL_CAU_HOI.ql_cauhoi',compact('cauhoi'));
    }
     
    public function loai_cau_hoi(){
        $loaicauhoi = DB::table('loai_cau_hoi')->get();
        return view('Admin.QL_CAU_HOI.ql_loai_cauhoi',compact('loaicauhoi'));
    }
}
