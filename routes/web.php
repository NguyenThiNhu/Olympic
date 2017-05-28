<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route User*/
Route::get('/', function () {
    return view('User.main.main');
});

Route::get('dang-ky', ['as'=>'Dang_ky','uses'=>'User\Tai_Khoan_Controller@show_DK']);

Route::post('dang-ky', ['as'=>'post_dang_ky','uses'=>'User\Tai_Khoan_Controller@post_DK']);

Route::get('dang-xuat',['as'=>'Dang_xuat','uses'=>'User\Dang_Nhap_Controller@DangXuat']);


Route::get('gioi-thieu',['as'=>'Gioi_thieu','uses'=>'User\Gioi_Thieu_Controller@gioi_thieu']);

Route:: get('dang-nhap',['as'=>'Dang_nhap', 'uses'=>'User\Dang_Nhap_Controller@show_DN']);
Route:: post('dang-nhap',['as'=>'post_Dang_nhap', 'uses'=>'User\Dang_Nhap_Controller@DangNhap']);
/*Thi*/
Route:: get('vao-thi',['as'=>'Vao_thi', 'uses'=>'Admin\De_Thi_Controller@vao_thi']);
Route:: get('bai-thi/{stt}',['as'=>'Bai_thi', 'uses'=>'Admin\Cau_Hoi_Controller@lay_cau_hoi_bai_thi']);
Route:: get('ket-qua-thi',['as'=>'Ket_qua_thi', 'uses'=>'Admin\Cau_Hoi_Controller@ket_qua_thi']);


/* Góp Ý*/

Route:: get('gop-y',['as'=>'Gop_Y', 'uses'=>'User\Gop_Y_Controller@Gop_Y']);
Route:: post('gop-y',['as'=>'postGop_Y', 'uses'=>'User\Gop_Y_Controller@post_Gop_Y']);






/* Route Admin*/
Route::get('Admin', function () {
    return view('Admin.adminmaster');
});
/* quan ly cau hoi */
Route:: get('ql-cauhoi',['as'=>'QL_Cauhoi', 'uses'=>'Admin\Cau_Hoi_Controller@lay_cau_hoi']);
Route:: get('them-cauhoi-tn',['as'=>'Them_cauhoi_tn', 'uses'=>'Admin\Cau_Hoi_Controller@them_cau_hoi_TN']);
Route:: get('them-cauhoi-audio',['as'=>'Them_cauhoi_audio', 'uses'=>'Admin\Cau_Hoi_Controller@them_cau_hoi_audio']);
Route:: get('them-cauhoi-hinh',['as'=>'Them_cauhoi_hinh', 'uses'=>'Admin\Cau_Hoi_Controller@them_cau_hoi_hinh']);


Route:: get('ql-loaicauhoi',['as'=>'QL_Loaicauhoi', 'uses'=>'Admin\Cau_Hoi_Controller@loai_cau_hoi']);


Route:: get('truong',['as'=>'Truong', 'uses'=>'Admin\Truong_Controller@lay_truong']);
Route::get('them-truong',['as'=>'themtruong','uses'=>'Admin\Truong_Controller@trang_them_truong']);
Route::post('them-truong',['as'=>'themtruong','uses'=>'Admin\Truong_Controller@them_truong']);
 
 Route::get('cap-nhat-truong/{id}',['as'=>'cap_nhat_truong','uses'=>'Admin\Truong_Controller@cap_nhat_truong']);
Route::post('cap-nhat-truong/{id}',['as'=>'cap_nhat_truong', 'uses'=>'Admin\Truong_Controller@post_cap_nhat_truong']);


Route:: get('de-thi',['as'=>'ql_de_thi', 'uses'=>'Admin\De_Thi_Controller@lay_de_thi']);

Route:: get('chi-tiet-de-thi/{id}',['as'=>'chi_tiet_de_thi', 'uses'=>'Admin\De_Thi_Controller@chi_tiet']);

Route::get('xem-dap-an/{id}',['as'=>'xem_dap_an', 'uses'=>'Admin\De_Thi_Controller@dap_an']);

Route::get('them-cau-hoi/{id}',['as'=>'them_cau_hoi', 'uses'=>'Admin\De_Thi_Controller@them_cau_hoi']);
Route::post('them-cau-hoi/{id}',['as'=>'post_them_cau_hoi', 'uses'=>'Admin\De_Thi_Controller@post_them_cau_hoi']);

Route::get('them-de-thi',['as'=>'them_de_thi','uses'=>'Admin\De_Thi_Controller@them_dethi']);
Route::post('them-de-thi',['as'=>'post_them_de_thi','uses'=>'Admin\De_Thi_Controller@post_them_dethi']);
//cap_nhat
Route::get('cap-nhat-cau-hoi/{id}',['as'=>'cap_nhat_cau_hoi', 'uses'=>'Admin\De_Thi_Controller@cap_nhat_cau_hoi']);

Route::post('cap-nhat-cau-hoi/{id}',['as'=>'post_cap_nhat_cau_hoi', 'uses'=>'Admin\De_Thi_Controller@post_cap_nhat']);
//end_cap_nhat
Route::get('xoa-cau-hoi/{id}',['as'=>'xoa_cau_hoi', 'uses'=>'Admin\De_Thi_Controller@xoa_cau_hoi']);

//Them Dap An
Route::get('them-dap-an/{id}',['as'=>'them_dap_an', 'uses'=>'Admin\De_Thi_Controller@them_dap_an']);

Route::post('them-dap-an/{id}',['as'=>'post_them_dap_an', 'uses'=>'Admin\De_Thi_Controller@post_them_dap_an']);
//end them dap an


//Xem Gop Y
Route::get('xem-gop-y',['as'=>'xem_gop_y','uses'=>'Admin\GOP_Y_controller@show']);
