
@extends('Admin.adminmaster')
@section('title', 'Chi tiết câu hỏi')
@section('Carousel')
@stop
@section('content')

<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Câu Hỏi</div>
<div class="templatemo-content-container col-sm-12">
    @if(Session::has('flash_message'))
    <div class="alert alert-success col-sm-12">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×</button>
       <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
        <hr class="message-inner-separator">
        <p style="color: black;">{!! Session::get('flash_message') !!}</p>
    </div>
    @endif
      @if($cau_hoi->MA_LOAI==2)
       <h1 style="color: black; text-align: center;">Đáp án câu hỏi hình <img src="{!!asset($cau_hoi->NOI_DUNG)!!}" style="width: 100px;height: 80px;"></h1>
      @else
      <h1 style="color: black; text-align: center;">Đáp án câu hỏi {!!$cau_hoi->NOI_DUNG!!}</h1>
      @endif
      <div class="form-input clearfix">
          <div class="label"></div>
          <div class="value"><a href="{{url('them-dap-an',[$cau_hoi->MA_CH])}}" class="btn btn-info">Thêm Đáp Án</a>  &nbsp;&nbsp;<a href="{!!url('chi-tiet-de-thi',[$cau_hoi->MA_DE])!!}" class="btn btn-warning">Về Chi Tiết Đề Thi</a></div>
          <br>
      </div>           
		<div class="templatemo-content-widget no-padding">
      <div class="panel panel-default table-responsive">
        <table class="table table-striped table-bordered templatemo-user-table dataTables">
          <thead>
            <tr>
               <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">STT Đáp Án</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Nội Dung</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Trạng Thái</span>
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
            <?php $stt = 1;?>
             @foreach($dap_an as $dap_an)
			         <tr>
                    <td style="text-align: center;">{!!$stt!!}</td>
                    <?php $loai = App\CauHoi::where('MA_CH','=',$dap_an->MA_CH)->first();?>
                    @if($loai->MA_LOAI==2)
                    <td style="text-align: center;"><img src="{!!asset($dap_an->NOI_DUNG)!!}" style="width: 60px; height: 40px;"></td>
                    @else
                    <td style="text-align: center;">{!!$dap_an->NOI_DUNG!!}</td>
                    @endif
                    
                    @if($dap_an->TRANGTHAI==1)
                      <td style="text-align: center;">Đúng</td>
                    @else
                      <td style="text-align: center;">Sai</td>
                    @endif
                    
                    <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="#">
                    <span class="glyphicon glyphicon-edit"></span> </a></td>
                    <td class="text-align" style="text-align: center;"> <a href="#" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
              <?php $stt++; ?>
             @endforeach

          </tbody>
        </table>    
      </div>                          
    </div>  
</div>
@endsection