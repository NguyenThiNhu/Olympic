
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
    <tr>@if (Cart::count() == 0)
        <th style="color: black; font-size: 16px; font-style: italic;">Điểm: 0</th>
        @else
        <th style="color: black; font-size: 16px; font-style: italic;">Điểm: {!!$diem!!}</th>
        @endif
        <th colspan="2"></th>
        <th><a href="{!!url('ket-thuc-bai-thi')!!}" class="btn btn-warning">Kết Thúc</a></th>
    </tr>
    <tr style="color: white; background-color: green; ">
        <th  style="color: white; text-align: center;">STT</th>
        <th style="color: white; text-align: center;" >Đề Thi</th>
        <th style="color: white;text-align: center;" class="text-center">Câu Hỏi</th>
        <th style="color: white;text-align: center;" class="text-center">Trả Lời</th>
    </tr>
    </thead>
    <?php $stt=1;?>

    @foreach($hoan_thanh as $item)
    <tr style="background-color:#e2f0e7; color: black; text-align: center;">
        <td style="color: black"><?php echo $stt;?></td>
        <?php $de = DB::table('de_thi')
                ->join('cau_hoi','de_thi.MA_DE','=','cau_hoi.MA_DE')
                ->where('cau_hoi.MA_CH','=',$item->id)
                ->select('de_thi.TEN_DE')
                ->first();
        ?>
        <td  style="color: black" >{!!$de->TEN_DE!!}</td>
        <td style="color: black" >{!!$item->name!!}</td>
        @if($item->options->TRANG_THAI==1)
        <td  style="color: black" >Đúng</td>
        @else
        <td  style="color: black" >Sai</td>
        @endif
        
    </tr>
    <?php $stt++; ?>
    @endforeach        
    </table> 
    </div>
    <br>
</div>

@endsection