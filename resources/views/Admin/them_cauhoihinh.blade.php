
	

		
	

	@extends('Admin.adminmaster')
@section('title', 'Thêm Câu Hỏi Hình')
@section('Carousel')
@stop
@section('content')
		

	<div class="col-sm-12 col-sm-offset-3 main"  ">	
	<br>		
		<div class="col-lg-10">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading"  style="color:white;text-align:center; font-size:30px; background-color:#176cb0">Thêm Câu Hỏi Hình</div>
					<div class="panel-body"  style="background-color:#e4edf4">
						<div class=" col-sm-offset-2 col-md-8">
							<form role="form">
								<div class="form-group">
									<label>Hình câu hỏi</label>
									<input type="file">
									<label>Hình đáp án</label>
									<input type="file">
									 
								</div>
								<button type="submit" class="btn btn-primary" style="background-color:green;">Thêm</button>
								<button type="reset" class="btn btn-default" style="background-color:blue; color: white" >Thêm Lại</button>
								<button type="reset" class="btn btn-default" style="background-color:red; color: white">Quay Lại</button>
							</div>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
@endsection


		
	
