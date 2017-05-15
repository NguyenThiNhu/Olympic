
@extends('Admin.adminmaster')
@section('title', 'Quản lý tin tức')
@section('Carousel')
@stop
@section('content')


<div class="templatemo-content-container col-sm-11 col-md-offset-3">
		<div class="templatemo-site-header">
   			<h1 style="text-align: center; background-color: #176cb0; color: white;">Quản Lý Tin Tức</h1>
  		</div>
			<h3 style="color: black;">Danh sách tin tức</h3>
      <a href="them-san-pham" class="btn btn-info" >Thêm tin tức</a>
      <br>
      <br>
		<div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table dataTables">
                <thead>
                  <tr >
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">STT <span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">
                        Tên Loại Tin Tức<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;" >
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">

                       Tiêu Đề<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Ảnh Tiêu Đề<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Nội Dung
                        <span class="caret"></span></a>
                      </th>
                      
                      <th style="background-color: #1b5ab6; ">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by t" >Sửa </a>
                      </th>
                      <th style="background-color: #1b5ab6; color: swhite;">
                      <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Xóa</a>
                      </th>
                  </tr>
                </thead>
                <tbody>
					         <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td></td>
                    <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Sửa</a></td>
                    <td class="text-align" style="text-align: center;"> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Xóa</a></td>
                  </tr>
                                  
                </tbody>
              </table>    
            </div>                          
    </div>  
</div>
@endsection