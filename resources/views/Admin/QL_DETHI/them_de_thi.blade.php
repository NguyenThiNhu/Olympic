@extends('Admin.adminmaster')
@section('title', 'Thêm Đề Thi')
@section('Carousel')
@stop
@section('content')
	<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Đề Thi</div>
	<br><br>
	<div class="col-sm-offset-2 col-sm-8 main">
		<div class="panel panel-default">
			<div class="panel-body"  style="background-color:#e4edf4">
			 <h3 style="color: black; text-align: center;">Thêm Đề Thi</h3> 
			 <br>      
				<div class="col-sm-offset-2 col-md-8">
					<form role="form" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label> Tên Đề:</label>
							<input type="text" class="form-control" name="ten_de" required="true">
						</div>
						<div class="form-group">
							<label> Số Câu Hỏi:</label>
							<input type="number" class="form-control" name="so_cau" min="1" max="10" required="true">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" style="background-color:green;">Thêm</button>
							<a onclick="window.history.back()" class="btn btn-default" style="background-color:red; color: white">Quay Lại</a> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
@endsection
