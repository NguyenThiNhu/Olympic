



@extends('User.master')
@section('title', 'Hoàn Thành')
@section('Carousel')
@stop
@section('content')
<script type="text/javascript">
    function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
    }



</script>

<div class="container">
<br>
    <div class="row col-md-8 col-md-offset-2 custyle">
    <!-- <table class="table table-striped custab">
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
            
    </table>  -->
    <div id="result"></div>
    <script type="text/javascript">
        document.getElementById('result').innerHTML = getCookie('total_correct_answer');
    </script>
    </div>
    <br>
</div>

@endsection