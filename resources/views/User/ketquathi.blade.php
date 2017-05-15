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
	<div class="container">
		<div id="ketqua">
			<div class="row">
				<div class="col-lg-8 col-sm-12">
        			<div class="card hovercard">
            			<div class="card-background">
                			<img class="card-bkimg" alt="" src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-1/p160x160/17554030_797573427058278_3039891187154012184_n.jpg?oh=f7bb790ecfafa58099c73c1daa7b6b85&oe=5985335A">
            			</div>

		            <div class="useravatar">
		                <img alt="" src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-1/p160x160/17554030_797573427058278_3039891187154012184_n.jpg?oh=f7bb790ecfafa58099c73c1daa7b6b85&oe=5985335A">
		            </div>

		            <div class="card-info">
		            <span class="card-title" style="color: white; background-color: #ff9900">Trần Chí Hữu</span>
		    
		            </div>
        			</div>

	        		<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
			            <div class="btn-group" role="group">
			                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			                    <div class="hidden-xs">Thông Tin</div>
			                </button>
			            </div>

			            <div class="btn-group" role="group">
			                <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
			                    <div class="hidden-xs">Thành Tích</div>
			                </button>
			            </div>

			           <div class="btn-group" role="group">
			                <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			                    <div class="hidden-xs">Kết Quả Bài Làm</div>
			                </button>
			            </div>
	        		</div>
    
	            <div class="well" style="background-color:#d1d1d1; ">
			        <div class="tab-content">
			            <div class="tab-pane fade in active" id="tab1">
			              <h3>Trường Học: THPT Nguyễn Khuyến</h3>
			              <hr><h3>Lớp: 12</h3>
			              <hr><h3>ID: 1234567890</h3>
			            </div>

			            <div class="tab-pane fade in" id="tab2">
			              <h3>Xếp hạng tuần: Nhất Tuần</h3>
			            </div>

			            <div class="tab-pane fade in" id="tab3">
							<table class="table table-striped table1">
						       <thead>
						            <tr class="info"  >
						                <th style="text-align: center; color: black;">STT</th>
						                <th style="text-align: center; color: black;">Đề Thi</th>
						                <th style="text-align: center; color: black;">Điểm</th>
						              
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						        <!--first example-->
						            <td class="success" style="text-align: center; color: black;">1</td>
						            <td style="text-align: center; color: black;">101</td>
						            <td class="danger"  style="text-align: center; color: black;">100/100</td>
						            
						            
						        </tr>
			   					</tbody>
			   				</table>
			            </div>
			        </div>
			    </div>
	        
        		</div>

        		<div class="col-lg-4 col-sm-12" style="float: left;">
					<div class="card">

							<h2 style="color: #ff9900;">Bảng Xếp Hạng</h2>
								<div class="row">
									<ul class="listrap">
							            <li>
							                <div class="listrap-toggle">
							                    <span></span>
							                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-1/p160x160/17554030_797573427058278_3039891187154012184_n.jpg?oh=f7bb790ecfafa58099c73c1daa7b6b85&oe=5985335A" class="img-circle" style="width: 60px; height: 60px;">
							                </div>
							                <strong >Trần Chí Hữu</strong>
							            </li>
							            <li >
							                <div class="listrap-toggle">
							                    <span></span>
							                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-1/p100x100/18010923_1727092714247608_8730098681512566089_n.jpg?oh=159f395e0f77b3988c9fc128fbdfcbb9&oe=59915C5B" class="img-circle" style="width: 60px; height: 60px;">
							                </div>
							                <strong>Nguyễn Thị Như</strong>
							            </li>
							            <li 	>
							                <div class="listrap-toggle">
							                    <span></span>
							                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-1/p100x100/14956437_689669261198624_2829101076920840499_n.jpg?oh=38225ce174dd3a34332bb1a2671a7d85&oe=59742FFE" class="img-circle" style="width: 60px; height: 60px;">
							                </div>
							                							                <strong>Phạm Nguyễn Minh Khôi</strong>
							            </li>
							          
							        </ul>
								</div>
					</div>
				</div>
                
        
			</div>
		</div>
	</div>
	

	


<script type="text/javascript">
	$(document).ready(function() {
	$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>

@endsection


