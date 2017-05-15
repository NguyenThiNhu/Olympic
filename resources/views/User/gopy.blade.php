



@extends('User.master')
@section('title', 'Góp Ý')

@section('content')
<link rel="stylesheet" href="{!!asset('public/Olympic/css/gopy.css')!!}" type="text/css" media="all" />
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
        <div class="col-xs-12 col-sm-6 col-sm-offset-3  well well-sm ">
            <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Góp Ý Của Bạn</legend>
            <form  method="post" class="form" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="form-control" name="name" placeholder="Tên..." type="text" />
                 <input class="form-control" name="email" placeholder="Email.." type="text" />
                <textarea name="noidung" id="message" class="form-control" rows="9" cols="25"  placeholder="Góp ý của bạn..."></textarea>
                <div class="col-sm-4 col-sm-offset-4">
                    <button class="btn btn-lg btn-primary btn-block" type="submit"> Gửi Góp Ý</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    @endsection