
@extends('Admin.adminmaster')
@section('title', 'Quản lý đề thi')
@section('Carousel')
@stop
@section('content')

<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Đề Thi</div>
<div class="templatemo-content-container col-sm-12">
    <br>
    @if(Session::has('flash_message'))
    <div class="alert alert-success col-sm-12">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×</button>
       <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
        <hr class="message-inner-separator">
        <p style="color: black;">{!! Session::get('flash_message') !!}</p>
    </div>
    @endif
       <h1 style="color: black; text-align: center;">Danh sách đề thi</h1>
      <div class="form-input clearfix">
          <div class="label"></div>
          <div class="value"><a href="{!!url('them-de-thi')!!}" class="btn btn-info">Thêm đề thi</a></div>
          <br>
      </div>           
		<div class="templatemo-content-widget no-padding">
      <div class="panel panel-default table-responsive">
        <table class="table table-striped table-bordered templatemo-user-table dataTables">
          <thead>
            <tr>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">STT</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Tên Đề Thi</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Số Câu Hỏi</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Sửa</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Xóa</span>
                </th>
            </tr>
          </thead>
          <tbody>
             <?php $pos=1; ?>
             @foreach($dethi as $dethi)
			         <tr>
                  <td style="text-align: center;"><?php echo $pos++;?></td>
                  <td style="text-align: center;"><a href="{!!url('chi-tiet-de-thi',[$dethi->MA_DE])!!}">{!!$dethi->TEN_DE!!}</a></td>
                  <td style="text-align: center;">{!!$dethi->SO_CAUHOI!!}</td>
                  <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="#">
                  <span class="glyphicon glyphicon-edit"></span> </a></td>
                  <td class="text-align" style="text-align: center;"> <a href="#" class="btn btn-danger btn-xs">
                  <span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
             @endforeach

          </tbody>
        </table>    
      </div>                          
    </div>  
</div>
@endsection