
@extends('User.master')
@section('title', 'Bài Thi')
@section('Carousel')
@stop
@section('content')

	

	<!-- File css -->
<style type="text/css">

		#cauhoi{

			position: relative;
			margin-top: 30px;
			margin-left: 50px;
			margin-right: 50px;
			padding-top: 30px;
			padding-bottom: 30px;
			background-color: #f0f0f0;
			height: auto;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}

		
		#text_cauhoi{

			text-align: center;
			position: relative;
			margin: auto;
			width: 80%;
			padding: 20px;
			border-radius: 10px;
			background-color: #78d58b;
			min-height: 150px;
		}

		
		#backgroud_bancung{
			position: relative;
			background-position: center;
			min-height: 200px;
			width: inherit;
			padding-left: 10%;
			padding-right: 10%;
			background-repeat: no-repeat;
			background-image: url("{!!asset('public/Olympic/Ban cung/bc12.jpg')!!}");

		}

		#dapan{
			position: relative;
			margin: auto;
			margin-top: 10px;
			width: 80%;
			height: 250px;

		}

		#dapan .dapan1{
			border-radius: 5px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			margin-bottom: 6%;
			float: left;
			position: relative;
			min-height: 60px;
			width: 100%;
			background-color: #d1d1d1;
			
		}

		#chon{
			float: left;
			height: inherit;
			width: 20px;
			color: red;
			position: relative;
			margin-left: 10px;
			text-align: left;
			font-size: 20px;
			font-weight: bold;
		}

		.cauhoi .dapan .dapan1 .noidung{
			position: relative;


		}

		@media screen and (max-width: 760px) {
				.cauhoi .backgroud_bancung{
					display: none;
					visibility: hidden;
				}

				.cauhoi .dapan .dapan1{
					margin-bottom: 2%
				}
		}
		#khung {
				  margin-left: 0px;
				  width: 800px;
				  height: 400px;
				  position: relative;
				 
				}
		#hinh {
			margin-top: 200px;
			margin-left: 30px;
		  width: 10px;
		  height: 10px;
		  position: absolute;
		  }
    	

</style>
<script>
function dichuyen() {
  var a = document.getElementById("hinh"); 
  var pos = 0;  
  var posx = 0;
  var posy = 0;
  var id = setInterval(frame, 5);
  function frame() {
    if (pos == 250) {
      clearInterval(id);
    } else {
      pos++;
      posx = pos;
      posy = 2.5*pos;
      //a.style.top = posx + 'px'; 
      a.style.left = posy + 'px'; 
    }
  }
}
</script>
<script>
function dichuyensai() {
  var a = document.getElementById("hinh"); 
  var pos = 0;  
  var posx = 0;
  var posy = 0;
  var id = setInterval(frame, 5);
  function frame() {
    if (pos == 85) {
      clearInterval(id);
    } else {
      pos++;
      posx = pos;
      posy = 8*pos;
      a.style.top = posx + 'px'; 
      a.style.left = posy + 'px'; 
    }
  }
}
</script>


<body>
<!-- TL Dúng -->

<div class="container">
	
	<div id="Cauhoi">
		<div id="backgroud_bancung" style="text-align: center; font-weight: bold; font-size: 100px;">
			
			 <div id ="khung" >
                  <div id ="hinh"><img style="height: 50px; width: 150px;" src="{!!asset('public/Olympic/Ban cung/ten2.png')!!}"/></div>
              </div>
		</div>
		<div id	="text_cauhoi" style="color: white; font-size: 30px;" >
		{!!$cauhoi->NOI_DUNG!!}
		</div>
		<br>

		<?php $stt = $stt+1;?>
		
		<div id="dapan">
					<!--<div class="col-sm-12 col-md-offset-2">-->
				<?php $dapan = App\DapAn::where('MA_CH','=',$cauhoi->MA_CH)->get(); ?>
				@foreach( $dapan as $dapan)
					<div class="col-sm-6">
						@if($dapan->TRANGTHAI==1)
						<button  data-toggle="modal" data-target="#myModal" onclick="dichuyen()" id="dap_an{!!$dapan->TRANGTHAI!!}" class="dapan1 btn btn-info btn-lg" value="{!!$dapan->TRANGTHAI!!}"><p class="chon" style="color: black;">{!!$dapan->NOI_DUNG!!}</p></button>
						@else
						<button data-toggle="modal" data-target="#myModalSai" onclick="dichuyensai()" id="dap_an{!!$dapan->TRANGTHAI!!}" class="dapan1 btn btn-info btn-lg" value="{!!$dapan->TRANGTHAI!!}"><p class="chon" style="color: black;">{!!$dapan->NOI_DUNG!!}</p></button>
						@endif
					</div>
				@endforeach
	</div>
		<br>
	</div>

</div>
{{-- <script>
	$(document).ready(function(){
		$('#dap_an1').click(function(){
			alert($(this).val());
		});
	});
</script> --}}
	
	<div class="container">
		  	<div class="modal fade" id="myModal" role="dialog">
		    	<div class="modal-dialog">
			      <div class="modal-content">
			       <div class="modal-header" style="color: blue;">
			        <button type="button" class="close" data-dismiss="modal"></button>
			        <h4 class="modal-title" >Thông Báo</h4>
			      </div>
			        <div class="modal-body">
			          <p style="color: green;">Chúc mừng bạn!!!</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			           <a href="{!!url('bai-thi',[$stt])!!}" class="btn btn-primary" >Tiếp Tục</a>
			        </div>
			      </div>
		      
		    	</div>
		  	</div>
		</div>
		<!--end TL ĐÚng-->
<!-- Tk Sai-->
	<div class="container">
		  	<div class="modal fade" id="myModalSai" role="dialog">
		    	<div class="modal-dialog">
			      <div class="modal-content">
			       <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="color: blue; ">Thông Báo</h4>
			      </div>
			        <div class="modal-body">
			          <p style="color: red;">Sai Rồi!!!!!</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			           <a href="{!!url('bai-thi',[$stt])!!}" class="btn btn-primary" >Tiếp Tục</a>
			        </div>
			      </div>
		      
		    	</div>
		  	</div>
		</div>


@endsection