
@extends('Admin.adminmaster')
@section('title', 'Quản lý Trường')
@section('Carousel')
@stop
@section('content')


	<div class="col-sm-12  main"  ">	
	<br>
	<br>
	<br>
	<br>
	<br>		
		<div class="col-lg-12 col-sm-offset-3">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"  style="color:white;text-align:center; font-size:30px; background-color:#176cb0">Quản Lý Trường</div>
					<div class="panel-body"  style="background-color:#e4edf4">
						
						 <h3 style="color: black;">Danh sách trường</h3>       
						  	<a href="{{url('them-truong')}}" class="btn btn-primary dropdown-toggle" style="margin-bottom:0px;background-color:blue;">
						  	    Thêm Trường <span class="caret"></span>
							</a>
						  <br>
						  <br>
						  	<table class="table table-striped custab">
							    <thead>
							    
							        <tr style="background-color: #176cb0">
							            <th style="background-color: #176cb0">STT</th>
							            <th style="background-color: #176cb0" >Tên Quận/Huyện</th>
							            <th style="background-color: #176cb0" >Tên Bậc Học</th>
							             <th style="background-color: #176cb0" >Tên Trường</th>
							            <th  style="background-color: #176cb0">Sửa</th>
							            <th  style="background-color: #176cb0">Xóa</th>
							        </tr>
							    </thead>
							    <tbody>
							    <?php $pos=1; ?>
							 
                					@foreach($truong as $item)
							    	<tr style="text-align: center;" >
						                <td> <?php echo $pos++;?> </td>
						                <td>{!!$item->TEN_QH!!}</td>
						                <td>{!!$item->TEN_BAC!!}</td>
						                <td>{!!$item->TEN_TRUONG!!}</td>
						                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Sửa</a></td>
						                <td class="text-center"> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Xóa</a></td>
						            </tr>
						             @endforeach
							    </tbody>
							            
							</table>
					
				
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->


	

@endsection