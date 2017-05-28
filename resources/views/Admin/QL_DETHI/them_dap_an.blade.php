@extends('Admin.adminmaster')
@section('title', 'Thêm Đáp Án')
@section('Carousel')
@stop
@section('content')
  <div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Đáp Án</div>
  <br><br>
  <div class="col-sm-offset-2 col-sm-8 main">
    <div class="panel panel-default">
      <div class="panel-body"  style="background-color:#e4edf4;">
      @if($cau_hoi->MA_LOAI==2)
      <h3 style="color: black; text-align: center;">Thêm Đáp Án Cho Hình</h3>
      <div style="text-align: center;">
        <img src="{!!asset($cau_hoi->NOI_DUNG)!!}" style="width: 100px;height: 80px;">  
      </div>
      @else
      <h3 style="color: black; text-align: center;">Thêm Đáp Án Cho {!!$cau_hoi->NOI_DUNG!!}</h3>
      @endif
         
       <br>      
        <div class="col-sm-offset-2 col-md-8">
          <form role="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if($cau_hoi->MA_LOAI==2)
              <div class="form-group">
                <label style="color: black;"> Hình Ảnh:</label>
                <img src="" style="width: 100%;height: auto;" class="form-control" id="hinh_hien_tai">
                <input type="file" class="form-control" name="hinh_anh" onchange="readURL(this);">
              </div>
            @else
              <div class="form-group">
                <label style="color: black;"> Nội Dung:</label>
                <input type="text" class="form-control" name="noi_dung">
              </div>
            @endif
            <div class="form-group">
              <label> Trạng Thái:</label>
              <select name="trang_thai" class="form-control">
                <option value="1">Đúng</option>
                <option value="0">Sai</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Thêm</button>
              <a onclick="window.history.back()" class="btn btn-danger">Quay Lại</a> 
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function readURL(input){
      if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#hinh_hien_tai')
                      .attr('src', e.target.result)
                      .width(400)
                      .height(200);
              };
              reader.readAsDataURL(input.files[0]);
          }
    }
  </script>
@endsection
