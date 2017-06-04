<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Cart,Auth,DateTime;
use App\DeThi;
use App\DapAn;
use App\CauHoi;
use App\KET_QUA;
use App\User;
use Expression;

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
        $kq = DB::table('ket_qua')
                 ->select(DB::raw('MA_TK, AVG(DIEM_SO) AS DIEM'))
                 ->groupBy('MA_TK')
                 ->get();
        $ket_qua;
        foreach ($kq as $kq) {
            $ket_qua[$kq->MA_TK]=$kq->DIEM;
        }
        arsort($ket_qua);
        $show_kq = array_slice ($ket_qua,0,1);
        $_val = implode ('', $show_kq);
        $top_val = array_search($_val,$ket_qua);
        return view('User.ketquathi',compact('top_val','ket_qua'));
    }

    public function lay_cau_hoi_bai_thi($ma_de,$stt){
        $de_thi = DeThi::where('MA_DE','=',$ma_de)->first();
        $cout_de = CauHoi::where('MA_DE','=',$ma_de)->count();

        if($stt<=$cout_de)
        {
            $cauhoi = DB::table('cau_hoi')
                ->join('loai_cau_hoi', 'cau_hoi.MA_LOAI', '=', 'loai_cau_hoi.MA_LOAI')
                ->join('de_thi', 'cau_hoi.MA_DE', '=', 'de_thi.MA_DE')
                ->select('cau_hoi.*', 'loai_cau_hoi.*', 'de_thi.*')
                ->where('cau_hoi.STT_CH','=',$stt)
                ->where('de_thi.MA_DE','=',$ma_de)
                ->first();
                $stt=$stt;
            return view('User.baithi',compact('cauhoi','stt','ma_de'));
        }
        else
        {
            return redirect()->route('hoan_thanh');
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

    public function cham_diem($ma_de,$ma_ch,$ma_da,$stt){
        $cau_hoi = CauHoi::where('MA_CH','=',$ma_ch)->first();
        $dap_an = DapAn::where('id','=',$ma_da)->first();
        Cart::add(array('id'=>$ma_ch,'name'=>$cau_hoi->NOI_DUNG,'qty'=>1,'price'=>10,'options'=>array('MA_DE'=>$ma_de,'TRANG_THAI'=>$dap_an->TRANGTHAI,'id_da'=>$dap_an->id)));
       
       return redirect()->route('Bai_thi',[$ma_de,$stt+1]);
    }

    public function hoan_thanh(){
        $hoan_thanh = Cart::content();
         $diem = 0;
        foreach ($hoan_thanh as $content) {
            $diem += $content->price*$content->options->TRANG_THAI;
        }
        return view('User.hoanthanh_baithi',compact('hoan_thanh','diem'));
       
    }
    public function ket_thuc(){
        $hoan_thanh = Cart::content();
        $diem = 0;
        $de_thi;
        foreach ($hoan_thanh as $content) {
            $diem += $content->price*$content->options->TRANG_THAI;
            $de_thi = $content->options->MA_DE;
        }

        $ket_qua = new KET_QUA;
        $ket_qua->MA_TK = Auth::user()->id;
        $ket_qua->MA_DE = $de_thi;
        $now = new DateTime();
        $ket_qua->NGAY_GIO_THI = $now;
        $ket_qua->DIEM_SO = $diem;
        $ket_qua->save();
        Cart::destroy();
        return redirect()->route('Ket_qua_thi');
    }
}
