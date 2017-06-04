@extends('User.master')
@section('title', 'Thông Tin Tài Khoản')
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
            <p style="font-size: 15px; font-weight: bold; color: black;">{!! Session::get('flash_message') !!}</p>
        </div>
        @endif
	</div>
	<div style="height: 50px;"></div>
	<form class="form-horizontal" role="form"  method="post" enctype="multipart/form-data">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<div class="col-sm-4 col-md-4">
            	<img id="img-upload" src="{!!asset(Auth::user()->HINH_ANH)!!}" class="img-rounded img-responsive img-circle"/>
            	<input type="file" name="file" id="imgInp" >
        	</div>
        	<div class="col-sm-8 col-md-8">
                <h2 style="text-align: center;">Thông Tin Tài Khoản</h2>
                <br>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Tài Khoản:</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" value="{!!Auth::user()->username!!}" class="form-control" required="true" disabled="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mat_khau" class="col-sm-3 control-label">Mật Khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" name="mat_khau"  class="form-control" required="true" value="{!!Auth::user()->password!!}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="ho_ten" class="col-sm-3 control-label">Họ Tên:</label>
                    <div class="col-sm-9">
                        <input type="text" name="ho_ten" class="form-control" required="true" value="{!!Auth::user()->HO_TEN!!}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" value="{!!Auth::user()->EMAIL!!}" class="form-control" required="true" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="ngay_sinh" class="col-sm-3 control-label">Ngày Sinh</label>
                    <div class="col-sm-9">
                        <input type="date"  name="ngay_sinh" class="form-control" required="true" value="{!!Auth::user()->NGAY_SINH!!}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gioi_tinh" class="col-sm-3 control-label">Giới Tính</label>
                    <div class="col-sm-9">
                        <select name="gioi_tinh" class="form-control">
                            @if(Auth::user()->GIOI_TINH == 'NAM')
                            	<option value="0" selected="true">NAM</option>
                            	<option value="1" >NỮ</option>
                            @else
                                <option value="0" >NAM</option>
                                <option value="1" selected="true">NỮ</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Cập Nhật</button>
                    </div>
                    <div class="col-sm-3">
                        <button  onclick="window.history.back()" class="btn btn-danger btn-block">Quay Lại</button>
                    </div>
                </div>
        	</div>
    	</form>
</div>
<script>
    $(document).ready(function() {
        
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
                });

                $('.btn-file :file').on('fileselect', function(event, label) {
                    
                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;
                    
                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }
                
                });
                
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#img-upload').attr('src', e.target.result);
                        }
                        
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imgInp").change(function(){
                    readURL(this);
                });      
         });
</script>
@endsection