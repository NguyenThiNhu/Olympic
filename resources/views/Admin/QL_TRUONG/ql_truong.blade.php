
@extends('Admin.adminmaster')
@section('title', 'Quản lý Trường ')
@section('Carousel')
@stop
@section('content')

<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Trường</div>
<div class="templatemo-content-container col-sm-12">
			<h3 style="color: black;">Danh sách trường</h3>
      <a href="{{url('them-truong')}}" class="btn btn-info" >Thêm trường</a>
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
                        Tên Quận/Huyện<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;" >
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by>

                        Tên Bậc Học <span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Tên Trường
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
                <?php $pos=1; ?>
               
                 @foreach($truong as $item)
					         <tr>
                    <td> <?php echo $pos++;?></td>
                    <td>{!!$item->TEN_QH!!}</td>
                    <td>{!!$item->TEN_BAC!!}</td>
                    <td>{!!$item->TEN_TRUONG!!}</td>
                    <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Sửa</a></td>
                    <td class="text-align" style="text-align: center;"> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Xóa</a></td>
                  </tr>
                        @endforeach          
                </tbody>
              </table>    
            </div>                          
    </div>  
</div>
@endsection