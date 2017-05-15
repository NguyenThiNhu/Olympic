<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
// use Auth;

class Dang_Nhap_Controller extends Controller
{
    public function show_DN(){
    	return view('User.account.DangNhap');
    }

    public function DangNhap(Request $req){
    	$level = DB::table('users')->where('username','like',$req->username)->select('QUYEN')->get();
         $quyen = $level[0]->QUYEN;
         echo $quyen;

        if(($level !=null)){
            $login =
        [
            'username' => $req->username, 
            'password' => $req->password,
            'QUYEN'=>$quyen
        ];
        }
    	
    		
    	if (Auth::attempt($login,true)) {
            if($quyen==1)
            {
                return redirect('/');
            } else if($quyen==2)
            {
                 return redirect('Admin');
            }
        }
        else
        {
        	return redirect()->back()->with(['flash_message'=>'Tài khoản không tồn tại học mật khẩu sai. Vui lòng kiểm tra lại!!']);
        }
        

    }
    public function DangXuat()
    {
        Auth::logout();
        return redirect('/');

    }
}
