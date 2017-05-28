@extends('Admin.adminmaster')

@section('title', 'Thêm trường')

@section('content')
<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Trường</div>

<div class="templatemo-content-container col-sm-12">
		<br>
		<div class="col-sm-offset-2 col-sm-8 main">
		<div class="panel panel-default">
			<div class="panel-body"  style="background-color:#e4edf4">
			 <h3 style="color: black; text-align: center;">Thêm Trường</h3> 
			 <br>      
			<div class=" col-sm-offset-2 col-sm-8">
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
						<button type="submit" class="btn btn-primary" >Thêm Trường</button>
						
						<a href="{{url('truong')}}" class="btn btn-danger" >Quay Lại</a> 
				</form>							
		</div>
			</div>
		</div>
	</div>
			
		
</div>

@endsection