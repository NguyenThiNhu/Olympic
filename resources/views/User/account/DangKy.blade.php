@extends('User.master')
@section('title', 'Đăng Ký')
@section('Carousel')
@stop
@section('content')

<div class="container">
<br>
<br>
	<div class="row">
		@if(Session::has('flash_message'))
		<div class="alert alert-success col-sm-12">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>
           <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
            <hr class="message-inner-separator">
            <p style="color: #000;">{!! Session::get('flash_message') !!}</p>
        </div>
        @endif
	</div>
	<div class="row">
		@if(Session::has('flash_message_erorr'))
		<div class="alert alert-danger col-sm-12">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>
           <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
            <hr class="message-inner-separator">
            <p style="color: #000;">{!! Session::get('flash_message_erorr') !!}</p>
        </div>
        @endif
	</div>

	<form class="form-horizontal" role="form" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2 style="text-align: center; color: green;">ĐĂNG KÝ TÀI KHOẢN</h2>
        <br>
        <div class="col-md-offset-2 col-md-8">
        	<div class="form-group">
	            <label for="firstName" class="col-sm-3 control-label">Họ Tên:</label>
	            <div class="col-sm-8">
	                <input type="text" name="ho_ten" placeholder="Họ tên..." class="form-control" required="true">
	            </div>
	        </div>
	         <div class="form-group">
	            <label class="control-label col-sm-3">Giới Tính:</label>
	            <div class="col-sm-6">
	                <div class="row">
	                    <div class="col-sm-4">
	                        <label class="radio-inline">
	                            <input type="radio" name="gioi_tinh" value="Nam">Nam 
	                        </label>
	                    </div>
	                    <div class="col-sm-4">
	                        <label class="radio-inline">
	                            <input type="radio" name="gioi_tinh" value="Nu">Nữ
	                        </label>
	                    </div>
	                </div>
	            </div>
	        </div> <!-- /.form-group -->
	        <div class="form-group">
	            <label for="username" class="col-sm-3 control-label">Tên Đăng Nhập:</label>
	            <div class="col-sm-8">
	                <input type="text" name="username" placeholder="Tên Đăng Nhập" class="form-control" required="true">
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="password" class="col-sm-3 control-label">Mật Khẩu:</label>
	            <div class="col-sm-4">
	                <input type="password" name="password" placeholder="Mật Khẩu" class="form-control" required="true">
	            </div>
	            <div class="col-sm-4">
	                <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" class="form-control" required="true">
	            </div>
	        </div>
	         <div class="form-group">
	            <label for="email" class="col-sm-3 control-label">Email:</label>
	            <div class="col-sm-8">
	                <input type="text" name="email" placeholder="Email" class="form-control" required="true">
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="birthDate" class="col-sm-3 control-label">Ngày Sinh:</label>
	            <div class="col-sm-8">
	                <input type="date" name="birthDate" class="form-control" required="true">
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="country" class="col-sm-3 control-label">Địa Chỉ:</label>
	            <div class="col-sm-4">
	                <select id="country" class="form-control">
						<option hidden="true">Chọn Tỉnh/TP</option>
	                <?php $tinh= App\Tinh::all();?>
	                    @foreach($tinh as $tinh)
						<option value="{!!$tinh->MA_TINH!!}">{!!$tinh->TEN_TINH!!}</option>
	                    @endforeach
	                </select>
	            </div>
	            <div class="col-sm-4">
	                <select id="country" class="form-control">
	                    <option hidden="true">Chọn Quận/Huyện</option>
	                    <?php $huyen=App\Huyen::all(); ?>
	                    @foreach($huyen as $huyen)
	                    <option value="{!!$huyen->MA_QH!!}">{!!$huyen->TEN_QH!!}</option>
	                    @endforeach
	                </select>
	            </div>
	        </div> <!-- /.form-group -->
	        <div class="form-group">
	            <label for="truong" class="col-sm-3 control-label">Bậc Học:</label>
	            <div class="col-sm-8">
	                <select id="bac_hoc" class="form-control">
	                <option hidden="true">Chọn Bậc</option>
	                <?php $bachoc= App\BacHoc::all();?>
	                    @foreach($bachoc as $bachoc)
	                    <option value="{!!$bachoc->MA_BAC!!}">{!!$bachoc->TEN_BAC!!}</option>
	                    @endforeach
	                    
	                </select>
	            </div>
	        </div> <!-- /.form-group -->
	        <div class="form-group">
	            <label for="truong" class="col-sm-3 control-label">Trường:</label>
	            <div class="col-sm-8">
	                <select name="truong" class="form-control">
	                    <option hidden="true">Chọn Trường</option>
						<?php  $truong=App\Truong::all();?>
						@foreach($truong as $truong)
	                    <option value="{!!$truong->MA_TRUONG!!}">{!!$truong->TEN_TRUONG!!}</option>
	                    @endforeach
	                </select>
	            </div>
	        </div> <!-- /.form-group -->
	        <div class="form-group">
	            <label for="khoi" class="col-sm-3 control-label">Khối:</label>
	            <div class="col-sm-4">
	                <select id="khoi1" class="form-control">
	                    <option hidden="true">Chọn Khối</option>
	                    <option>Lớp 1</option>
	                    <option>Lớp 2</option>
	                    <option>Lớp 3</option>
	                    <option>Lớp 4</option>
	                    <option>Lớp 5</option>
	                </select>
	                <select id="khoi2" class="form-control" style="display: none;">
	                    <option hidden="true">Chọn Khối</option>
	                    <option>Lớp 6</option>
	                    <option>Lớp 7</option>
	                    <option>Lớp 8</option>
	                    <option>Lớp 9</option>
	                </select>
	                <select id="khoi3" class="form-control" style="display: none;">
	                    <option hidden="true">Chọn Khối</option>
	                    <option>Lớp 10</option>
	                    <option>Lớp 11</option>
	                    <option>Lớp 12</option>
	                </select>
	            </div>
	            <div class="col-sm-4">
	                <input type="text" name="lop" placeholder="Tên lớp" class="form-control" required="true">
	            </div>
	        </div> 
	        <div class="form-group">
	            <div class="col-sm-offset-4">
	            	<div class="col-md-4">
	            		<button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
	            	</div>
	            	<div class="col-md-4">
	            		<a href="" class="btn btn-danger btn-block">Quay Lại</a>
	            	</div>
	            </div>
	        </div>
        </div>
        
    </form>
</div>
<script>
	$(document).ready(function(){
		$('#bac_hoc').change(function(){
			if($('#bac_hoc').val()==1)
			{
				$('#khoi1').show();
				$('#khoi2').hide();
				$('#khoi3').hide();
			}else if($('#bac_hoc').val()==2){
				$('#khoi1').hide();
				$('#khoi2').show();
				$('#khoi3').hide();
			}else{
				$('#khoi1').hide();
				$('#khoi2').hide();
				$('#khoi3').show();
			}
		});
	});
</script>
@endsection