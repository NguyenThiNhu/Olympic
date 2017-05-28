
@extends('Admin.adminmaster')
@section('title', 'Chi tiết đề thi')
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
       <h1 style="color: black; text-align: center;">Danh sách câu hỏi {!!$de_thi->TEN_DE!!}</h1>
      <div class="form-input clearfix">
          <div class="label"></div>
          <div class="value"><a href="{!!url('them-cau-hoi',[$de_thi->MA_DE])!!}" class="btn btn-info">Thêm Câu Hỏi</a></div>
          <br>
      </div>           
		<div class="templatemo-content-widget no-padding">
      <div class="panel panel-default table-responsive">
        <table class="table table-striped table-bordered templatemo-user-table dataTables">
          <thead>
            <tr>
               <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">STT Câu Hỏi</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Loại Câu Hỏi</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Nội Dung</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Audio/Video</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Thời Gian Câu Hỏi</span>
                </th>
                <th style="background-color: #1b5ab6; color: white;">
                  <span style="color: white;">Xem Chi Tiết</span>
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
             @foreach($cau_hoi as $cau_hoi)
			         <tr>
                    <td style="text-align: center;">{!!$stt!!}</td>
                    <?php $loai_ch = App\LOAI_CAU_HOI::where('MA_LOAI','=',$cau_hoi->MA_LOAI)->first(); ?>
                    <td style="text-align: center;">{!!$loai_ch->TEN_LOAI!!}</td>
                  @if($cau_hoi->MA_LOAI==1)
                    <td style="text-align: left;">{!!$cau_hoi->NOI_DUNG!!}</td>
                    <td style="text-align: center;">Không có Audio/Video</td>
                  @elseif($cau_hoi->MA_LOAI==2)
                    <td style="text-align: center;"><img src="{!!asset($cau_hoi->NOI_DUNG)!!}" style="width: 80px;height: 50px;"></td>
                    <td style="text-align: center;">Không có Audio/Video</td>
                  @elseif($cau_hoi->MA_LOAI==3)
                    <td style="text-align: left;">{!!$cau_hoi->NOI_DUNG!!}</td>
                    <td style="text-align: center;">Không có Audio/Video</td>
                  @elseif($cau_hoi->MA_LOAI==4)
                    <td style="text-align: left;">{!!$cau_hoi->NOI_DUNG!!}</td>
                    <td style="text-align: center;">
                      <audio controls>
                        <source src="{!!asset($cau_hoi->AUDIO_VIDEO)!!}" type="audio/mp3">
                      </audio>
                    </td>
                  @elseif($cau_hoi->MA_LOAI==5)
                    <td style="text-align: left;">{!!$cau_hoi->NOI_DUNG!!}</td>
                    <td style="text-align: center;">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong{!!$cau_hoi->MA_CH!!}">
                        Xem Video
                      </button>
                    </td> 
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong{!!$cau_hoi->MA_CH!!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                <source src="{!!asset($cau_hoi->AUDIO_VIDEO)!!}" type="video/mp4">
                              </video>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                    <td style="text-align: center;">{!!$cau_hoi->TG_CAUHOI!!} s</td>
                    <td class="text-align" style="text-align: center;"><a class='btn btn-success btn-xs' href="{!!url('xem-dap-an',[$cau_hoi->MA_CH])!!}" title="Xem Chi Tiết">
                    <span class="glyphicon glyphicon-zoom-in"></span> </a></td>
                    <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="{!!url('cap-nhat-cau-hoi',[$cau_hoi->MA_CH])!!}" title="Sửa">
                    <span class="glyphicon glyphicon-edit"></span> </a></td>
                    <td class="text-align" style="text-align: center;">
                    <p data-placement="top" data-toggle="tooltip" title="Xóa"><button class="btn btn-danger btn-xs" data-title="delete" data-toggle="modal" data-target="#delete{!!$cau_hoi->MA_CH!!}" ><span class="glyphicon glyphicon-remove"></span></button></p>
                    </td>
                    <div class="modal fade" id="delete{!!$cau_hoi->MA_CH!!}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                  <h4 class="modal-title custom_align" id="Heading">Xóa Câu Hỏi</h4>
                              </div>
                          <div class="modal-body">
                              <div class="alert alert-danger"><i class="fa fa-trash"></i> Bạn có muốn xóa ?</div>
                          </div>
                          <div class="modal-footer">
                              <a href="{!!url('xoa-cau-hoi',[$cau_hoi->MA_CH])!!}" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Có </a>
                              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Không</button>
                          </div>
                          </div>
                    </div>
                  </div>
              </tr>
              <?php $stt++; ?>
             @endforeach

          </tbody>
        </table>    
      </div>                          
    </div>  
</div>
@endsection