
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
			background-image: url("{!!asset('public/Olympic/dabanh/nenfoo2t.jpg')!!}");

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

    	#hinh_dabanh{
    		position: absolute;
			top: 350px;
			left: 300px;
    	}
    	#hinh_thumon{
    		position: absolute;
    		top: 160px;
    	}

</style>
<script>

	function dichuyen(e) {
		if (document.getElementById('backgroud_dabanh') == null)
			dichuyen_bancung(e);
		else
			dichuyen_dabanh(e);
	}

	function dichuyensai(e) {
		if (document.getElementById('backgroud_dabanh') == null)
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
	  var current_top = 350;
	 var width = 50;
	 var height = 50;
	 var right = 300;
	 a.style.left = '300px';
	  a.style.top = '350' + 'px'; 
	   console.log(a.style + "555555s");
	  var id = setInterval(frame, 4);
	  function frame() {
	    if (pos == 240) {
	      clearInterval(id);
	      setCorrectAnswer(e);
	      setTimeout(() =>{
	      		console.log("{!!url('bai-thi',[$stt+1])!!}")
	      		window.location = "{!!url('bai-thi',[$stt+1])!!}";
	      }, 900);
	      console.log('ss')
	    } else {
	      pos++;
	      current_top = current_top-1;
	       //console.log(current_top);
	      //a.style.top = posx + 'px'; 
	      a.style.top = current_top + 'px'; 
	      if (pos%50) {
	      	a.style.left = right++ + 'px';
	      }

	      if (pos%8== 0) {
	      	
	      	width--;
	      	height--;
	      	a.style.width= width + 'px';
	      	a.style.height= height + 'px';
	      }
	    }
	    
	  }
	}

	function dichuyensai_dabanh(e) {
	  var a = document.getElementById("hinh_dabanh"); 
	  console.log(a);
	  var pos = 0;  
	  var posx = 0;
	  var current_top = 350;
	 var width = 50;
	 var height = 50;
	 var right = 300;
	 a.style.left = '300px';
	  a.style.top = '350' + 'px'; 
	   console.log(a.style + "555555s");
	  var id = setInterval(frame, 3);
	  function frame() {
	    if (pos == 140) {
	      clearInterval(id);
	     
	      console.log('ss')
	      var id2 = setInterval(frame2, 1);
	      pos = 0;
	      posy = Number(a.style.left.split('p')[0]);
	      //console.log(posy);
	      function frame2() {
	      	  if (pos == 190) {
	      	  		  console.log('ss')
	      	  		 clearInterval(id2);
	      	  		 setIncorrectAnswer(e);
				      setTimeout(() =>{
				      		console.log("{!!url('bai-thi',[$stt+1])!!}")
				      		window.location = "{!!url('bai-thi',[$stt+1])!!}";
				      }, 900);
	      	  }
	      	  else
	      	  {
	      	  		pos++;
				      
				      //a.style.top = posx + 'px'; 
				     a.style.left = posy++ + 'px'; 
				     //console.log(posy);

				     if (pos%7 == 0) {
				     	var pos_temp = Number(a.style.top.split('p')[0]) - 1
				      	a.style.top = pos_temp + 'px';
				      }
	      	  }
	      }
	    } else {
	      pos++;
	      current_top = current_top-1;
	       //console.log(current_top);
	      //a.style.top = posx + 'px'; 
	      a.style.top = current_top + 'px'; 
	      if (pos%50) {
	      	a.style.left = right++ + 'px';
	      }

	      if (pos%8== 0) {
	      	
	      	width--;
	      	height--;
	      	a.style.width= width + 'px';
	      	a.style.height= height + 'px';
	      }
	    }
	    
	  }
	}

	function setCorrectAnswer(e){
		var answer = document.getElementById('dap_an1');
		answer.style.backgroundColor = '#58FA58';
		//document.cookie = Number(document.cookie)++ total_correct_answer++;
		if(getCookie('total_correct_answer') == null){
			setCookie('total_correct_answer','0',2)
		}
		var current_correct = Number(getCookie('total_correct_answer'));
		current_correct++;
		setCookie('total_correct_answer', current_correct, 2);

		console.log('------------------'+getCookie('total_correct_answer'))
		//console.log(document.cookie);
	}
	function setIncorrectAnswer(e){
		console.log(e)
		e.style.backgroundColor = "#FE2E2E";
		setCorrectAnswer(e);
	}

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


<body>
<!-- TL Dúng -->

@if ($cauhoi->MA_LOAI ==1)
    <div class="container">
	
	<div id="Cauhoi">
			@if(rand(0,1) == 0)
			<div id="backgroud_bancung" style="text-align: center; font-weight: bold; font-size: 100px;">

			 <div id ="khung" >
                  <div id ="hinh"><img style="height: 40px; width: 150px;" src="{!!asset('public/Olympic/Ban cung/ten2.png')!!}"/></div>
              </div>
              </div>
			@else
			<div id="backgroud_dabanh" style="text-align: center; font-weight: bold; font-size: 100px;">

				<div id ="khung" >
					
					<img id ="hinh_thumon"  style="height: 70px;width: 70px;" align="bottom" src="{!!asset('public/Olympic/dabanh/thumon.png')!!}"/>
                  <img  id ="hinh_dabanh" style="height: 50px;width: 50px;;" align="bottom" src="{!!asset('public/Olympic/dabanh/ball.png')!!}"/>
                 
              	</div>

              </div>
			@endif
		
		<div id	="text_cauhoi" style="color: white; font-size: 20px;" >
		{!!$cauhoi->NOI_DUNG!!}
		</div>
		<br>

		<?php $stt = $stt+1;?>
		
		<div id="dapan">
				
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
    <textarea class="form-control" rows="5" id="comment"></textarea>
	<div id="tu-luan">
	<div id	="text_cauhoi" style="color: white; font-size: 20px;" >
		{!!$cauhoi->NOI_DUNG!!}
		</div>
		<br>

</div>
@elseif ($cauhoi->MA_LOAI ==5)
    <div class="container">
    <textarea class="form-control" rows="5" id="comment"></textarea>
	<div id="tu-luan">
	<div id	="text_cauhoi" style="color: white; font-size: 20px;" >
		{!!$cauhoi->NOI_DUNG!!}
		</div>
		<br>

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