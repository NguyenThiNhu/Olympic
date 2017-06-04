<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB,DateTime,Hash;
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
        	return redirect()->back()->with(['flash_message'=>'Tài khoản không tồn tại hoặc mật khẩu sai. Vui lòng kiểm tra lại!!']);
        }
        

    }
    public function DangXuat()
    {
        Auth::logout();
        return redirect('/');

    }

    public function thong_tin(){
        return view('User.account.thong_tin_tai_khoan');
    }
    public function post_thong_tin(Request $req){
        $file = $req->file('file');
        $tk = User::where('id','=',Auth::user()->id)->first();
        $ngay = new DateTime($req->ngay_sinh);
        if($req->gioi_tinh==0)
            $gt = 'NAM';
        else
            $gt = 'NỮ';

        
        if(empty($file))
        {
            if($tk->password==$req->mat_khau)
                {
                    User::where('id','=',$tk->id)
                    ->update([
                        'HO_TEN'=>$req->ho_ten,
                        'EMAIL'=>$req->email,
                        'NGAY_SINH'=>$ngay->format('Y-m-d'),
                        'GIOI_TINH'=>$gt
                        ]);
                }
            else
               {
                    $mk = Hash::make($req->mat_khau);
                    User::where('id','=',$tk->id)
                    ->update([
                            'password'=>$mk,
                            'HO_TEN'=>$req->ho_ten,
                            'EMAIL'=>$req->email,
                            'NGAY_SINH'=>$ngay->format('Y-m-d'),
                            'GIOI_TINH'=>$gt
                        ]);
                   
               }
        }else{
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $destinationPath = 'public/image/user/';
                $file->move($destinationPath, $filename);
                $hinh_new = $destinationPath.$filename;
                 if($tk->password==$req->mat_khau)
                {
                    User::where('id','=',$tk->id)
                    ->update([
                        'HO_TEN'=>$req->ho_ten,
                        'EMAIL'=>$req->email,
                        'NGAY_SINH'=>$ngay->format('Y-m-d'),
                        'GIOI_TINH'=>$gt,
                        'HINH_ANH'=>$hinh_new
                        ]);
                }
            else
               {
                    $mk = Hash::make($req->mat_khau);
                    User::where('id','=',$tk->id)
                    ->update([
                            'password'=>$mk,
                            'HO_TEN'=>$req->ho_ten,
                            'EMAIL'=>$req->email,
                            'NGAY_SINH'=>$ngay->format('Y-m-d'),
                            'GIOI_TINH'=>$gt,
                            'HINH_ANH'=>$hinh_new
                        ]);
                   
               }
        }

        return redirect()->back()->with(['flash_message'=>'Cập Nhật Thông Tin Tài Khoản Thành Công.']);
    }
}
