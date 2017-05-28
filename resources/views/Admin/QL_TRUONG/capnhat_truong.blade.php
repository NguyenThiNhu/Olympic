@extends('Admin.adminmaster')

@section('title', 'Thêm trường')

@section('content')
<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Trường</div>

<div class="templatemo-content-container col-sm-12">
    <br>
    <div class="col-sm-offset-2 col-sm-8 main">
    <div class="panel panel-default">
      <div class="panel-body"  style="background-color:#e4edf4">
       <h3 style="color: black; text-align: center;">Cập Nhật Trường</h3> 
       <br>      
      <div class=" col-sm-offset-2 col-sm-8">
        <form role="form" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label> Quận/Huyện:</label>
              <select class="form-control" name="quanhuyen" id="quanhuyen">
                <?php $huyen_ht= App\Huyen::where('MA_QH','=',$truong->MA_QH)->first(); ?>
                  <option value="{!!$truong->MA_QH!!}" selected="true">{!!$huyen_ht->TEN_QH!!}</option>
                <?php $qh = App\Huyen::where('MA_TINH','=',$huyen_ht->MA_TINH)->where('MA_QH','!=',$huyen_ht->MA_QH)->get();?>
                @foreach($qh as $qh)
                  <option value="{!!$qh->MA_QH!!}">{!!$qh->TEN_QH!!}</option>
                @endforeach

               
              </select>
            </div>
            <div class="form-group">
              <label> Bậc Học:</label>
              <select class="form-control" name="bachoc" id="bachoc">
                <?php $bachoc_ht= App\BacHoc::where('MA_BAC','=',$truong->MA_BAC)->first(); ?>
                  <option value="{!!$truong->MA_BAC!!}" selected="true">{!!$bachoc_ht->TEN_BAC!!}</option>
                  <?php $qh = App\BacHoc::where('MA_BAC','!=',$bachoc_ht->MA_BAC)->get();?>
                @foreach($qh as $bachoc)
                  <option value="{!!$bachoc->MA_BAC!!}">{!!$bachoc->TEN_BAC!!}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Tên Trường:</label>
              <input type="text" class="form-control" name="ten_truong" value="{!!$truong->TEN_TRUONG!!}">
            </div>
            <button type="submit" class="btn btn-primary" >Cập Nhật</button>
            
            <a onclick="window.history.back()" class="btn btn-danger" >Quay Lại</a> 
        </form>             
    </div>
      </div>
    </div>
  </div>
      
    
</div>

@endsection