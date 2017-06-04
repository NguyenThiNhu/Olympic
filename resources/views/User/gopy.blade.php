
@extends('User.master')
@section('title', 'Góp Ý')
@section('Carousel')
@stop
@section('content')
<div class="container">
<br>
<br>
    <div class="row">
        @if(Session::has('flash_message'))
        <div class="alert alert-success col-sm-10">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>
           <span class="glyphicon glyphicon-ok"></span> <strong>Thông Báo</strong>
            <hr class="message-inner-separator">
            <p>{!! Session::get('flash_message') !!}</p>
        </div>
        @endif
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-7 col-sm-offset-1  well well-sm ">
            <legend><i class="glyphicon glyphicon-globe" style="color: #337ab7;"></i> Góp Ý Của Bạn</legend>
            <form  method="post" class="form" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input class="form-control" name="name" placeholder="Tên..." type="text" required="true" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="email" placeholder="Email.." type="text" required="true"/>
                </div>
                <div class="form-group">
                    <textarea name="noidung" id="message" class="form-control" rows="9" cols="25"  placeholder="Góp ý của bạn..." required="true"></textarea>
                </div>
                
                <div class="col-sm-4 col-sm-offset-4">
                    <button class="btn btn-lg btn-primary btn-block" type="submit"> Gửi Góp Ý</button>
                </div>
            </form>
        </div>
        <div class="ol-xs-12 col-sm-4">
            <form>
            <legend><i class="glyphicon glyphicon-info-sign" style="color: #337ab7;"></i> Olympic Tiếng Anh</legend>
            <address>
                <strong><i>Olympic Tiếng Anh là cuộc thi Olympic Tiếng Anh trực tuyến dành cho học sinh tiểu học trên Toàn quốc do Bộ Giáo Dục và Đào tạo tổ chức.</i></strong><br>
                Đường 3/2, Phường Xuân Khánh <br>  
                Quận Ninh Kiều - TP.Cần Thơ<br>
                <abbr title="Phone">
                    Điện Thoại:</abbr>
                 +1 599-033-5036
            </address>
            <address>
                <strong>Liên Hệ</strong><br>
                <a href="mailto:ntnhu3009@gmail.com">ntnhu3009@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
    @endsection