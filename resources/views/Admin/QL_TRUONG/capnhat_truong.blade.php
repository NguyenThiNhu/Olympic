@extends('Admin.adminmaster')

@section('title', 'Cập Nhật trường')

@section('content')

<div class="templatemo-content-container col-sm-11 col-md-offset-3">
		<div class="templatemo-site-header">
   			<h1 style="text-align: center; background-color: #176cb0; color: white;">Quản Lý Trường</h1>
  		</div>
		<br><br>
		<div class="col-sm-offset-2 col-md-12">
	        @if(Session::has('flash_message'))
	        <div class="alert alert-success col-sm-8">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
	                ×</button>
	           <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
	            <hr class="message-inner-separator">
	            <p>{!! Session::get('flash_message') !!}</p>
	        </div>
	        @endif
    	</div>
			<h2 style="color: black;" align="center">Cập Nhật trường</h2>
			
		<div class=" col-sm-offset-2 col-md-8">
				<form role="form" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
									<label> Quận/Huyện:</label>
									<select class="form-control" name="quanhuyen">
										@foreach($quan_huyen as $item)
								        	<option>{!! $item->TEN_QH !!}</option>
								        @endforeach
									</select>
								</div>
								<div class="form-group">
									<label>  Bậc Học:</label>
									<select class="form-control" name="bachoc">
										
										@foreach($bac_hoc as $item)
								        	<option>{!! $item->TEN_BAC !!}</option>
								        @endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Tên Trường:</label>
									<textarea class="form-control" rows="3" name="tentruong"></textarea>
								</div>
								<button type="submit" class="btn btn-primary" style="background-color:green;">Thêm Trường</button>
								<a href="{{url('them-truong')}}" class="btn btn-default" style="background-color:blue; color: white">Thêm Lại</a> 
								<a href="{{url('truong')}}" class="btn btn-default" style="background-color:red; color: white">Quay Lại</a> 

				</form>							
		</div>
</div>

@endsection