@extends('User.master')
@section('title', 'Xem Kết quả')
@section('Carousel')
@stop
@section('content')
	<!-- File css -->
	<style type="text/css">	

	#ketqua{
		margin: auto;
		width: 80%;
		height: auto;
		
	}

	@media screen and (max-width: 760px) {
			
	}

	 .card {
	    margin-top: 0px;
	    padding: 30px;
	    background-color: rgba(214, 224, 226, 0.2);
	    -webkit-border-top-left-radius:5px;
	    -moz-border-top-left-radius:5px;
	    border-top-left-radius:5px;
	    -webkit-border-top-right-radius:5px;
	    -moz-border-top-right-radius:5px;
	    border-top-right-radius:5px;
	    -webkit-box-sizing: border-box;
	    -moz-box-sizing: border-box;
	    box-sizing: border-box;
	}
	.card.hovercard {
	    position: relative;
	    padding-top: 0;
	    overflow: hidden;
	    text-align: center;
	    background-color: #fff;
	    background-color: rgba(255, 255, 255, 1);
	}
	.card.hovercard .card-background {
	    height: 130px;
	}
	.card-background img {
	    -webkit-filter: blur(25px);
	    -moz-filter: blur(25px);
	    -o-filter: blur(25px);
	    -ms-filter: blur(25px);
	    filter: blur(25px);
	    margin-left: -100px;
	    margin-top: -200px;
	    min-width: 130%;
	}
	.card.hovercard .useravatar {
	    position: absolute;
	    top: 15px;
	    left: 0;
	    right: 0;
	}
	.card.hovercard .useravatar img {
	    width: 100px;
	    height: 100px;
	    max-width: 100px;
	    max-height: 100px;
	    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	    border: 5px solid rgba(255, 255, 255, 0.5);
	}
	.card.hovercard .card-info {
	    position: absolute;
	    bottom: 14px;
	    left: 0;
	    right: 0;
	}
	.card.hovercard .card-info .card-title {
	    padding:0 5px;
	    font-size: 20px;
	    line-height: 1;
	    color: #262626;
	    background-color: rgba(255, 255, 255, 0.1);
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    border-radius: 4px;
	}
	.card.hovercard .card-info {
	    overflow: hidden;
	    font-size: 12px;
	    line-height: 20px;
	    color: #737373;
	    text-overflow: ellipsis;
	}
	.card.hovercard .bottom {
	    padding: 0 20px;
	    margin-bottom: 17px;
	}
	.btn-pref .btn {
	    -webkit-border-radius:0 !important;
	}

	.listrap {
            list-style-type: none;
            margin: 0;
            padding: 0;
            cursor: default;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

    .listrap li {
        margin: 0;
        padding: 10px;
    }

    .listrap li.active, .listrap li:hover {
        background-color: #d9edf7;
    }

    .listrap strong {
        margin-left: 10px;
    }

    .listrap .listrap-toggle {
        display: inline-block;
        width: 60px;
        height: 60px;
    }

    .listrap .listrap-toggle span {
        background-color: #428bca;
        opacity: 0.8;
        z-index: 100;
        width: 60px;
        height: 60px;
        display: none;
        position: absolute;
        border-radius: 50%;
        text-align: center;
        line-height: 60px;
        vertical-align: middle;
        color: #ffffff;
    }

    .listrap .listrap-toggle span:before {
        font-family: 'Glyphicons Halflings';
        content: "\e013";
    }

    .listrap li.active .listrap-toggle span {
        display: block;
    } 	

    /*Table database */
    #tab3 .table1{
    	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    	text-align: center;
    	color: black;
    }

	</style>

<br>

	<div id="ketqua">
		<div class="row">
			<?php $user_top = App\User::where('id','=',$top_val)->first(); ?>
			<div class="col-lg-8 col-sm-12" id="user1">
    			<div class="card hovercard">
        			<div class="card-background">
            			<img class="card-bkimg" src="{!!asset('public/Olympic/images/nen.jpg')!!}">
        			</div>

		            <div class="useravatar">
		                <img src="{!!asset($user_top->HINH_ANH)!!}">
		            </div>

		            <div class="card-info">
		            	<span class="card-title" style="color: white; background-color: #ff9900">{!!$user_top->HO_TEN!!}</span>
		            </div>
    			</div>

        		<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group">
		            <div class="btn-group" role="group">
		                <button type="button" id="stars{!!$top_val!!}" class="btn btn-primary" href="#tab1{!!$top_val!!}" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		                    <div class="hidden-xs">Thông Tin</div>
		                </button>
		            </div>

		            <div class="btn-group" role="group">
		                <button type="button" id="favorites{!!$top_val!!}" class="btn btn-default" href="#tab2{!!$top_val!!}" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
		                    <div class="hidden-xs">Thành Tích</div>
		                </button>
		            </div>

		           <div class="btn-group" role="group">
		                <button type="button" id="following{!!$top_val!!}" class="btn btn-default" href="#tab3{!!$top_val!!}" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
		                    <div class="hidden-xs">Kết Quả Bài Làm</div>
		                </button>
		            </div>
        		</div>
					<?php $tt = DB::table('lop') 
									->join('truong','lop.MA_TRUONG','=','truong.MA_TRUONG')
									->where('lop.MA_LOP','=',$user_top->MA_LOP)
									->select('lop.TEN_LOP','truong.TEN_TRUONG')
									->first();
					?>
	            <div class="well" style="background-color:#d1d1d1; ">
			        <div class="tab-content">
			            <div class="tab-pane fade in active" id="tab1{!!$top_val!!}">
			              <h3>Trường Học: {!!$tt->TEN_TRUONG!!}</h3>
			              <hr><h3>Lớp: {!!$tt->TEN_LOP!!}</h3>
			              <hr><h3>ID: #00{!!$user_top->id!!}</h3>
			            </div>

			            <div class="tab-pane fade in" id="tab2{!!$top_val!!}">
			              <h3>Xếp hạng tuần: Nhất Tuần</h3>
			            </div>

			            <div class="tab-pane fade in" id="tab3{!!$top_val!!}">
							<table class="table table-striped table1">
						       <thead>
						            <tr class="info"  >
						                <th style="text-align: center; color: black;">STT</th>
						                <th style="text-align: center; color: black;">Đề Thi</th>
						                <th style="text-align: center; color: black;">Điểm</th>
						              
						            </tr>
						        </thead>
						        <tbody>
						        	<?php $stt=1; $_thi = App\KET_QUA::where('MA_TK','=',$user_top->id)->get();?>
						        	@foreach($_thi as $thi)
						        		<?php $de = App\DeThi::where('MA_DE','=',$thi->MA_DE)->first();?>
								        <tr>
								            <td class="success" style="text-align: center; color: black;font-weight: bold;">{!!$stt!!}</td>
								            <td class="warning" style="text-align: center; color: black;font-weight: bold;">{!!$de->TEN_DE!!}</td>
								            <td class="danger"  style="text-align: center; color: black;font-weight: bold;">{!!$thi->DIEM_SO!!}/100</td>
								        </tr>
								        <?php $stt++;?>
							        @endforeach
			   					</tbody>
			   				</table>
			            </div>
			        </div>
			    </div>
    		</div>
    		<?php $use_khac = DB::table('ket_qua')
						->join('users','ket_qua.MA_TK','=','users.id')
						->where('ket_qua.MA_TK','!=',$top_val)
						->select('users.*','ket_qua.*')
						->get();
				$use_stt = 2;
    		?>
    		@foreach($use_khac as $_use)
    		<div class="col-lg-8 col-sm-12"  id="user{!!$use_stt!!}" style="display: none;">
    			<div class="card hovercard">
        			<div class="card-background">
            			<img class="card-bkimg" src="{!!asset('public/Olympic/images/nen.jpg')!!}">
        			</div>

		            <div class="useravatar">
		                <img src="{!!asset($_use->HINH_ANH)!!}">
		            </div>

		            <div class="card-info">
		            	<span class="card-title" style="color: white; background-color: #ff9900">{!!$_use->HO_TEN!!}</span>
		            </div>
    			</div>

        		<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group">
		            <div class="btn-group" role="group">
		                <button type="button" id="stars{!!$_use->id!!}" class="btn btn-primary" href="#tab1{!!$_use->id!!}" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		                    <div class="hidden-xs">Thông Tin</div>
		                </button>
		            </div>

		            <div class="btn-group" role="group">
		                <button type="button" id="favorites{!!$_use->id!!}" class="btn btn-default" href="#tab2{!!$_use->id!!}" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
		                    <div class="hidden-xs">Thành Tích</div>
		                </button>
		            </div>

		           <div class="btn-group" role="group">
		                <button type="button" id="following{!!$_use->id!!}" class="btn btn-default" href="#tab3{!!$_use->id!!}" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
		                    <div class="hidden-xs">Kết Quả Bài Làm</div>
		                </button>
		            </div>
        		</div>
					<?php $tt = DB::table('lop') 
									->join('truong','lop.MA_TRUONG','=','truong.MA_TRUONG')
									->where('lop.MA_LOP','=',$_use->MA_LOP)
									->select('lop.TEN_LOP','truong.TEN_TRUONG')
									->first();
					?>
	            <div class="well" style="background-color:#d1d1d1; ">
			        <div class="tab-content">
			            <div class="tab-pane fade in active" id="tab1{!!$_use->id!!}">
			              <h3>Trường Học: {!!$tt->TEN_TRUONG!!}</h3>
			              <hr><h3>Lớp: {!!$tt->TEN_LOP!!}</h3>
			              <hr><h3>ID: #00{!!$_use->id!!}</h3>
			            </div>

			            <div class="tab-pane fade in" id="tab2{!!$_use->id!!}">
			              <h3>Xếp hạng tuần: Hạng {!!$use_stt!!} Tuần</h3>
			            </div>

			            <div class="tab-pane fade in" id="tab3{!!$_use->id!!}">
							<table class="table table-striped table1">
						       <thead>
						            <tr class="info"  >
						                <th style="text-align: center; color: black;">STT</th>
						                <th style="text-align: center; color: black;">Đề Thi</th>
						                <th style="text-align: center; color: black;">Điểm</th>
						              
						            </tr>
						        </thead>
						        <tbody>
						        	<?php $stt=1; $_thi = App\KET_QUA::where('MA_TK','=',$_use->id)->get();?>
						        	@foreach($_thi as $thi)
						        		<?php $de = App\DeThi::where('MA_DE','=',$thi->MA_DE)->first();?>
								        <tr>
								            <td class="success" style="text-align: center; color: black;font-weight: bold;">{!!$stt!!}</td>
								            <td class="warning" style="text-align: center; color: black;font-weight: bold;">{!!$de->TEN_DE!!}</td>
								            <td class="danger"  style="text-align: center; color: black;font-weight: bold;">{!!$thi->DIEM_SO!!}/100</td>
								        </tr>
								        <?php $stt++;?>
							        @endforeach
			   					</tbody>
			   				</table>
			            </div>
			        </div>
			    </div>
    		</div>
    		<?php $use_stt++; ?>
			@endforeach

			<!-- BANG XEP HANG-->
    		<div class="col-lg-4 col-sm-12" style="float: left;">
				<div class="card">
					<h2 style="color: #ff9900;">Bảng Xếp Hạng</h2>
					<div class="row">
						<ul class="listrap" id="xep_hang">
							<?php $_stt=1;?>
							@foreach($ket_qua as $key =>$value)
							<?php $use = App\User::where('id','=',$key)->first();?>
					            <li id="{!!$_stt!!}">
					                <div class="listrap-toggle">
					                    <img src="{!!asset($use->HINH_ANH)!!}" class="img-circle" style="width: 60px; height: 60px;">
					                </div>
					                <strong>{!!$use->HO_TEN!!}</strong>
					            </li>
					         <?php $_stt++;?>
				            @endforeach
				        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	


<script type="text/javascript">
	$(document).ready(function() {
		// $(".btn-pref .btn").click(function () {
	 //    	$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
	 //    	$(this).removeClass("btn-default").addClass("btn-primary");   
		// });
});
</script>
<script>
	$(document).ready(function($) {
		$('#xep_hang li').click(function(){
		   var x = $(this).attr('id');
		   var leng = $('#xep_hang li').length;
		   // alert(x);
		    $('#user'+x).show();
		    var i =1;
			for (i ;i<=leng;i++) {
				if(i!=x){
					$('#user'+i).hide();
				}
			}
		});
	});
</script>

@endsection


