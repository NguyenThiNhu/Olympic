
<!DOCTYPE html>
<html>
<head>
<title>Olympic - @yield('title')</title>
<!--css-->
<link href="{!!asset('public/Olympic/css/bootstrap.css')!!}" rel="stylesheet" type="text/css" media="all" />
<link href="{!!asset('public/Olympic/css/style.css')!!}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{!!asset('public/Olympic/css/ken-burns.css')!!}" type="text/css" media="all" />
<link rel="stylesheet" href="{!!asset('public/Olympic/css/animate.min.css')!!}" type="text/css" media="all" />
<!--css-->
<!--icon-->
 <link rel="shortcut icon" href="{!!asset('public/Olympic/images/logo3.PNG')!!}" type="image/x-icon" />
 <link rel="icon" href="{!!asset('public/Olympic/images/logo3.PNG')!!}" type="image/x-icon" />  

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--js-->
<script src="{!!asset('public/Olympic/js/jquery.min.js')!!}"></script>
<script src="{!!asset('public/Olympic/js/bootstrap.min.js')!!}"></script>
<!--js-->
<!--webfonts-->
<link href="{!!asset('public/Olympic/css/cagliostro.css')!!}" rel="stylesheet" type="text/css">

<link href="{!!asset('public/Olympic/css/font.css')!!}" rel="stylesheet" type="text/css">
<!--webfonts-->
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> + 1 599-033-5036</li>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Đường 3/2, Phường Xuân Khánh, Ninh Kiều-Cần Thơ</li>
						</ul>
					</div>
					<div class="detail pull-right">
						<ul>
							@if(Auth::guest())
							<li>
								<i class="glyphicon glyphicon-log-in"></i>
								<a href="{{url('dang-nhap')}}" style="color: white; text-decoration: none;">Đăng Nhập</a>
							</li>
							<li>
								<i class="glyphicon glyphicon-lock"></i>
								<a href="{{url('dang-ky')}}" style="color: white; text-decoration: none;">Đăng Ký</a>
								
							</li>
							@else
							<li>
								<i class="glyphicon glyphicon-user"></i>
								<a href="{{url('thong-tin-tai-khoan')}}" style="color: white; text-decoration: none;">Xin Chào: {!!Auth::user()->username!!}</a>
								
							</li>
							<li>
								<i class="glyphicon glyphicon-log-in"></i>
								<a href="{{url('dang-xuat')}}" style="color: white; text-decoration: none;">Đăng Xuất</a>
							</li>
							@endif	
						</ul>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="{!!url('/')!!}">Olympic <span>Tiếng Anh</span></a></h1>
							</div>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li class="{!! Request::is('/') ? 'active' : '' !!}"><a href="{!!url('/')!!}"><span data-hover="Trang Chủ">Trang Chủ</span></a></li>
									<li class="{!! Request::is('vao-thi') ? 'active' : '' !!}"><a href="{{url('vao-thi')}}"><span data-hover="Vào Thi">Vào Thi</span></a></li>
									<li class="{!! Request::is('ket-qua-thi') ? 'active' : '' !!}"><a href="{{url('ket-qua-thi')}}"><span data-hover="Kết Quả Thi">Kết Quả Thi</span></a></li>
									<li class="{!! Request::is('gioi-thieu') ? 'active' : '' !!}"><a href="{!!url('gioi-thieu')!!}"><span data-hover="Giới Thiệu">Giới Thiệu</span></a></li>	
									<li class="{!! Request::is('gop-y') ? 'active' : '' !!}"><a href="{{url('gop-y')}}"><span data-hover="Góp Ý">Góp Ý</span></a></li>
									
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
	@section('Carousel')
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="12000" data-pause="hover">

            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox" style="margin: auto; width: 100%; height: 450px;">

                <!-- First-Slide -->
                <div class="item active">
                    <img src="{!!asset('public/Olympic/images/home2.png')!!}" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption">
                        
                    </div>
                </div>

                <!-- Second-Slide -->
                <div class="item">
                    <img src="{!!asset('public/Olympic/images/banner.PNG')!!}" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        
                    </div>
                </div>

                <!-- Third-Slide -->
                <div class="item">
                    <img src="{!!asset('public/Olympic/images/banner1.JPG')!!}" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        
                    </div>
                </div>

            </div>
			
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
			
        </div>
		<script src="{!!asset('public/Olympic/js/custom.js')!!}"></script>
	</div>
<!--banner-->
	@show
	<!--content-->
		<div class="content">
			@yield('content')
		</div>
		<!--content-->
		
			<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="https://www.facebook.com/ntnhu94"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
					<div class="copy">
						<p>Copyright&copy; 2016- Olympic Tiếng Anh . Đường 3/2, Phường Xuân Khánh, Ninh Kiều-Cần Thơ | Thiết kế bởi <a href="http://w3layouts.com">Như Nguyễn</a></p>
					</div>
				</div>
			</div>
				
</body>
</html>
