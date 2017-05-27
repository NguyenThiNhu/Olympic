
@extends('Admin.adminmaster')
@section('title', 'Quản lý câu hỏi')
@section('Carousel')
@stop
@section('content')

<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Câu Hỏi</div>
<div class="templatemo-content-container col-sm-12">
    @if(Session::has('flash_message'))
        <div class="alert alert-info col-sm-12 ">
            <b>Thông Báo: </b>
            {!! Session::get('flash_message') !!}
        </div>
      @endif 
			<h1 style="color: black;  text-align: center;">Danh sách câu hỏi</h1>
      
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
                        Tên Loại CH<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;" >
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">

                        Tên Đề Thi <span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Nội Dung<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Thời Gian
                        </a>
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
            
                 @foreach($cauhoi as $cauhoi)
					         <tr>
                    <td><?php echo $pos++;?></td>
                    <td>{!!$cauhoi->TEN_LOAI!!}</td>
                    <td>{!!$cauhoi->TEN_DE!!}</td>
                    @if($cauhoi->MA_LOAI==1)
                      <td style="text-align: left;">{!!$cauhoi->NOI_DUNG!!}</td>
                    @elseif($cauhoi->MA_LOAI==2)
                      <td style="text-align: center;"><img src="{!!asset($cauhoi->NOI_DUNG)!!}" style="width: 80px;height: 50px;"></td>
                    @elseif($cauhoi->MA_LOAI==3)
                      <td style="text-align: left;">{!!$cauhoi->NOI_DUNG!!}</td>
                    @elseif($cauhoi->MA_LOAI==4)
                      <td style="text-align: center;">
                        <audio controls>
                          <source src="{!!asset($cauhoi->NOI_DUNG)!!}" type="audio/mp3">
                        </audio>
                      </td>
                    @elseif($cauhoi->MA_LOAI==5)
                      <td style="text-align: center;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong{!!$cauhoi->MA_CH!!}">
                          Xem Video
                        </button>
                      </td> 
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalLong{!!$cauhoi->MA_CH!!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle" style="color: #000; font-weight: bold;">Video</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px;">
                                <span aria-hidden="true" >&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <video width="580" height="320" controls>
                                  <source src="{!!asset($cauhoi->NOI_DUNG)!!}" type="video/mp4">
                                </video>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                    <td style="text-align: center;">{!!$cauhoi->TG_CAUHOI!!} s</td>
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