@extends('Admin.adminmaster')
@section('title', 'Thêm Trường')
@section('Carousel')
@stop
@section('content')
		
	<div class="panel-heading"  style="color:white;text-align:center; margin-right: -150px; font-size:40px; background-color:#176cb0">Quản Lý Trường</div>		
	<div class="col-sm-12 col-sm-offset-3 main"  ">	
	<br>	
	<br>
	<br>
	<br>
	<br>

	<div class="row">
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

		<div class="col-lg-10">
			<div class="col-lg-9">
				<div class="panel panel-default">
					
					<div class="panel-body"  style="background-color:#e4edf4">
					 <h3 style="color: black; text-align: center;">Thêm Trường</h3> 
					 <br>      
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
								
								
								<button type="submit" class="btn btn-primary" style="background-color:green;">Thêm</button>
								<a href="{{url('them-truong')}}" class="btn btn-default" style="background-color:blue; color: white">Thêm Lại</a> 
								<a href="{{url('truong')}}" class="btn btn-default" style="background-color:red; color: white">Quay Lại</a> 
							</div>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
@endsection
