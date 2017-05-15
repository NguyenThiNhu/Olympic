



@extends('User.master')
@section('title', 'Hoàn Thành')
@section('Carousel')
@stop
@section('content')


<div class="container">
<br>
    <div class="row col-md-8 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <h2 style="text-align: center; "> Kết Quả Bài Làm</h2>
    <br>
    <tr style="color: white; background-color: red; ">
            <th  style="color: white; ">Điểm:</th>
            
        </tr>
        <tr style="color: white; background-color: green; ">
            <th  style="color: white; text-align: center;">STT</th>
            <th style="color: white; text-align: center;" >Đề Thi</th>
            <th style="color: white;text-align: center;" class="text-center">Câu Hỏi</th>
            <th style="color: white;text-align: center;" class="text-center">Trả Lời</th>
        </tr>
    </thead>
            <tr style="background-color:#e2f0e7; color: black; text-align: center;">
                <td style="color: black"  ></td>
                <td  style="color: black" ></td>
                <td style="color: black"  ></td>
                <td  style="color: black" ></td>
               
            </tr>
            
    </table>
    </div>
    <br>
</div>

@endsection