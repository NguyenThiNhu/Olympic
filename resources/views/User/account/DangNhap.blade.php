@extends('User.master')
@section('title', 'Góp Ý')
@section('Carousel')
@stop
@section('content')
	
<link rel="stylesheet" href="{!!asset('public/Olympic/css/dangnhap.css')!!}" type="text/css" media="all" />
<script src="{!!asset('public/Olympic/js/dangnhap.js')!!}"></script>
<div class="container">
<br>
<div class="row">
		@if(Session::has('flash_message'))
		<div class="alert alert-danger col-sm-12">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>
           <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
            <hr class="message-inner-separator">
            <p style="color: #000; font-weight: bold;">{!! Session::get('flash_message') !!}</p>
        </div>
        @endif
	</div>
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" enctype="">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<fieldset>
				<h2 style="text-align: center; color: green">Đăng Nhập</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="username" name="username" id="username" class="form-control input-lg" placeholder="Tài khoản">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mật khẩu">
				</div>
				<span class="button-checkbox">
					
                    
					<a href="" class="btn btn-link pull-right">Quên mật khẩu?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Đăng Nhập">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="{{url('dang-ky')}}" class="btn btn-lg btn-primary btn-block">Đăng Ký</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
<br>
<br>
	@endsection