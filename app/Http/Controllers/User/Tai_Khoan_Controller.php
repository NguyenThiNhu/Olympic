<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Lop;
use Datetime,Hash;// mã hóa mật khẩu md5 với dổi ngày tháng năm

class Tai_Khoan_Controller extends Controller
{
    public function show_DK(){
    	return view('User.account.DangKy');
    }
    public function post_DK(Request $req){
        if($req->username =" " && $req->ho_ten=" "&& $req->email=" "&&$req->birthDate =" ")
            {
                return redirect()->back()->with(['flash_message_erorr'=>'Bạn vui lòng nhập đầy đủ thông Tin ']);
            }
            else if($req->password == $req->repassword)
            {
            
        	$lop = new Lop;
        	$lop->MA_TRUONG = $req->truong;
        	$lop->TEN_LOP = 'Lớp '.$req->lop;
        	$lop->save();

        	$ma_lop = Lop::where('MA_TRUONG','=',$req->truong)->where('TEN_LOP','like','Lớp '.$req->lop)->first();

        	$tai_khoan = new User;
        	$tai_khoan->MA_LOP = $ma_lop->MA_LOP;
        	$tai_khoan->username = $req->username;
        	$tai_khoan->password = Hash::make($req->password);
        	$tai_khoan->HO_TEN = $req->ho_ten;
        	$tai_khoan->EMAIL = $req->email;

        	$date = new Datetime($req->birthDate);
       		$ngay = $date->format('Y-m-d');// Định dạng ngày tháng năm

        	$tai_khoan->NGAY_SINH = $ngay;
        	if($req->gioi_tinh =='Nam')
    			$tai_khoan->GIOI_TINH = 'NAM';
    		else
    			$tai_khoan->GIOI_TINH = 'NỮ';
        	$tai_khoan->QUYEN = 1;
        	$tai_khoan->save();
        	return redirect('dang-nhap')->back()->with(['flash_message'=>'Bạn đã đăng ký thành công. Chúc mừng bạn..Mời bạn Đăng nhập!!']);
        
     }
        else
        {
            return redirect()->back()->with(['flash_message_erorr'=>'Mật khẩu không trùng khớp bạn vui lòng kiểm tra lại.']);
        }
    }
}
