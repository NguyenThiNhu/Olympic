
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
			top: 20px;
			text-align: center;
			position: relative;
			margin: auto;
			width: 80%;
			padding: 20px;
			border-radius: 10px;
			background-color: #78d58b;
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


		#backgroud_dabanh{
			position: relative;
			background-position: center;
			width: inherit;
			min-height: 200px;
			padding-left: 10%;
			padding-right: 10%;
			background-repeat: no-repeat;
			background-image: url("{!!asset('public/Olympic/dabanh/nenfoo2t1.jpg')!!}");

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
    	.header-top{
    		padding: 0px;
    	}
    	.navbar-default{
    		padding: 10px;
    	}

</style>
<script>




	function dichuyen(e) {
		if (document.getElementById('backgroud_dabanh' == null)) 
			dichuyen_bancung(e);
		else
			dichuyen_dabanh(e);
	}

	function dichuyensai(e) {
		if (document.getElementById('backgroud_dabanh' == null)) 
			dichuyensai_bancung(e);
		else
			dichuyensai_dabanh(e);
	}

	function dichuyen_bancung(e) {
	  var a = document.getElementById("hinh"); 
	  var pos = 0;  
	  var posx = 0;
	  var posy = 0;
	  var id = setInterval(frame, 5);
	  function frame() {
	    if (pos == 250) {
	      clearInterval(id);
	      setCorrectAnswer(e);
	      setTimeout(() =>{
	      		console.log("{!!url('bai-thi',[$stt+1])!!}")
	      		window.location = "{!!url('bai-thi',[$stt+1])!!}";
	      }, 900);
	    } else {
	      pos++;
	      posx = pos;
	      posy = 2.5*pos;
	      //a.style.top = posx + 'px'; 
	      a.style.left = posy + 'px'; 
	    }
	    
	  }
	}


	function dichuyensai_bancung(e) {
	  var a = document.getElementById("hinh"); 
	  var pos = 0;  
	  var posx = 0;
	  var posy = 0;
	  var id = setInterval(frame, 5);
	  function frame() {
	    if (pos == 85) {
	      clearInterval(id);
	      setIncorrectAnswer(e);
	      setTimeout(() =>{
	      		console.log("{!!url('bai-thi',[$stt+1])!!}")
	      		window.location = "{!!url('bai-thi',[$stt+1])!!}";
	      }, 900);
	    } else {
	      pos++;
	      posx = pos;
	      posy = 8*pos;
	      a.style.top = posx + 'px'; 
	      a.style.left = posy + 'px'; 
	      
	    }
	   
	  }
	}

	function dichuyen_dabanh(e) {
	  var a = document.getElementById("hinh_dabanh"); 
	  console.log(a);
	  var pos = 0;  
	  var posx = 0;
	  var posy = 0;
	  var id = setInterval(frame, 5);
	  function frame() {
	    if (pos == 250) {
	      clearInterval(id);
	      setCorrectAnswer(e);
	      // setTimeout(() =>{
	      // 		console.log("{!!url('bai-thi',[$stt+1])!!}")
	      // 		window.location = "{!!url('bai-thi',[$stt+1])!!}";
	      // }, 900);
	      console.log('ss')
	    } else {
	      pos++;
	      posx = pos-8;
	      posy = pos;
	      //a.style.top = posx + 'px'; 
	      a.style.top = posx + 'px'; 
	    }
	    
	  }
	}

	function dichuyensai_dabanh(e) {
	  var a = document.getElementById("hinh_dabanh"); 
	  var pos = 0;  
	  var posx = 0;
	  var posy = 0;
	  var id = setInterval(frame, 5);
	  function frame() {
	    if (pos == 85) {
	      clearInterval(id);
	      setIncorrectAnswer(e);
	      setTimeout(() =>{
	      		console.log("{!!url('bai-thi',[$stt+1])!!}")
	      		window.location = "{!!url('bai-thi',[$stt+1])!!}";
	      }, 900);
	    } else {
	      pos++;
	      posx = pos;
	      posy = 8*pos;
	      a.style.top = posx + 'px'; 
	      a.style.left = posy + 'px'; 
	      
	    }
	   
	  }
	}

	function setCorrectAnswer(e){
		var answer = document.getElementById('dap_an1');
		answer.style.backgroundColor = '#58FA58';
	}
	function setIncorrectAnswer(e){
		console.log(e)
		e.style.backgroundColor = "#FE2E2E";
		setCorrectAnswer(e);
	}

	


</script>


<body>
<!-- TL Dúng -->

@if ($cauhoi->MA_LOAI ==1)
    <div class="container">
	
	<div id="Cauhoi">
			@if(rand(0,1)==0)
			<div id="backgroud_bancung" style="text-align: center; font-weight: bold; font-size: 100px;">

			 <div id ="khung" >
                  <div id ="hinh"><img style="height: 40px; width: 150px;" src="{!!asset('public/Olympic/Ban cung/ten2.png')!!}"/></div>
              </div>
              </div>
			@else
			<div id="backgroud_dabanh" style="text-align: center; font-weight: bold; font-size: 100px;">

				<div id ="khung" >
					<div id ="hinh_thumon" style="padding-top: 100px;"><img style="height: 70px; width: 70px;" align="bottom" src="{!!asset('public/Olympic/dabanh/thumon.png')!!}"/></div>

                  <div id ="hinh_dabanh" style="padding-top: 40px;"><img style="height: 70px; width: 70px;" align="bottom" src="{!!asset('public/Olympic/dabanh/ball.png')!!}"/></div>

              	</div>

              </div>
			@endif
		
		<div id	="text_cauhoi" style="color: white; font-size: 20px;" >
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
						<button  data-toggle="modal" data-target="#myModal" onclick="dichuyen(this)" id="dap_an{!!$dapan->TRANGTHAI!!}" class="dapan1 btn btn-info btn-sl" value="{!!$dapan->TRANGTHAI!!}"><p class="chon" style="color: black;">{!!$dapan->NOI_DUNG!!}</p></button>
						@else
						<button data-toggle="modal" data-target="#myModalSai" onclick="dichuyensai(this)" id="dap_an{!!$dapan->TRANGTHAI!!}" class="dapan1 btn btn-info btn-sl" value="{!!$dapan->TRANGTHAI!!}"><p class="chon" style="color: black;">{!!$dapan->NOI_DUNG!!}</p></button>
						@endif
					</div>
				@endforeach
	</div>
		<br>
	</div>

</div>
@elseif ($cauhoi->MA_LOAI ==2)
    <div class="container">
		

	</div>
@elseif ($cauhoi->MA_LOAI ==3)
	<div class="container">
	
	

	</div>
@elseif ($cauhoi->MA_LOAI ==4)
    <div class="container">
	
	<div id="tu-luan">
	

</div>
@endif


	
{{-- <script>
	$(document).ready(function(){
		$('#dap_an1').click(function(){
			alert($(this).val());
		});
	});
</script> --}}

@endsection