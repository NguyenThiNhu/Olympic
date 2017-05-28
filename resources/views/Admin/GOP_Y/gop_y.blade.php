
@extends('Admin.adminmaster')
@section('title', 'Quản lý đề thi')
@section('Carousel')
@stop
@section('content')

<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Xem Góp Ý</div>
<div class="templatemo-content-container col-sm-12">
    <br>
       <h1 style="color: black; text-align: center;">Danh sách góp ý</h1>
    <br>          
		<div class="templatemo-content-widget no-padding">
      <div class="panel panel-default table-responsive">
        <table class="table table-striped table-bordered templatemo-user-table dataTables">
          <thead>
            <tr>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">STT</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Tên Người Góp Ý</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Email</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Nội Dung</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Thời Gian Góp Ý</span>
                </th>
            </tr>
          </thead>
          <tbody>
             <?php $pos=1; ?>
             @foreach($gop_y as $gopy)
			         <tr>
                  <td style="text-align: center;"><?php echo $pos++;?></td>
                  <td style="text-align: left;">{!!$gopy->TEN_ND!!}</td>
                  <td style="text-align: left;">{!!$gopy->EMAIL!!}</td>
                  <td style="text-align: left;">{!!$gopy->NOI_DUNG!!}</td>
                  <td style="text-align: center;">{!! Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $gopy->created_at)->format('H:i:s d/m/Y')!!}</td>
                  
              </tr>
             @endforeach

          </tbody>
        </table>    
      </div>                          
    </div>  
</div>
@endsection