



@extends('User.master')
@section('title', 'Vào Thi')
@section('Carousel')
@stop
@section('content')


<div class="container">
<br>
    <div class="row col-md-8 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <h2 style="text-align: center; "> Danh Sách Đề Thi</h2>
    <br>
        <tr style="color: white; background-color: green; ">
            <th  style="color: white; text-align: center;">STT</th>
            <th style="color: white; text-align: center;" >Đề Thi</th>
            <th style="color: white;text-align: center;" class="text-center">Vào Thi</th>
        </tr>
    </thead>
                <?php $pos=1 ?>
                 @foreach($dethi as $dethi)
            <tr style="background-color:#e2f0e7; color: black; text-align: center;">
                <td style="color: black"><?php echo $pos; ?></td>
                <td  style="color: black" >{!!$dethi->TEN_DE!!}</td>
                <td class="text-center" >
                    <a href="{{url('bai-thi',$pos).'/1'}}" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-asterisk"></span> 
                        Bắt Đầu
                    </a>
                </td>
                <?php $pos++; ?>
            </tr>
            @endforeach
    </table>
    </div>
    <br>
</div>

@endsection