<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Olympic - @yield('title')</title>

<link href="{!!asset('public/Admin/css/bootstrap.min.css')!!}" rel="stylesheet">
<link href="{!!asset('public/Admin/css/datepicker3.css')!!}" rel="stylesheet">
<link href="{!!asset('public/Admin/css/styles.css')!!}" rel="stylesheet">

<link rel="stylesheet" href="{!! asset('public/Admin/css/jquery.datetimepicker.css') !!}" type="text/css">
<link rel="stylesheet" href="{!! asset('public/Admin/css/datepicker.css') !!}" type="text/css">
<!--Icons-->
 <link rel="shortcut icon" href="{!!asset('public/Olympic/images/logo3.PNG')!!}" type="image/x-icon" />
 <link rel="icon" href="{!!asset('public/Olympic/images/logo3.PNG')!!}" type="image/x-icon" /> 

<!-- Nhúng datatable-->
<link href="{!! asset('public/Admin/datatables-plugins/integration/bootstrap/1/dataTables.bootstrap.css')!!}" rel="stylesheet">
<link href="{!! asset('public/Admin/media/css/jquery.dataTables.css')!!}" rel="stylesheet">

<!--js-->
<script src="{!!asset('public/Olympic/js/jquery.min.js')!!}"></script>
<script src="{!!asset('public/Admin/js/lumino.glyphs.js')!!}"></script>

<style>
	.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="" style=" color:white; text-align: center; margin-bottom:  0px; font-size: 18px; text-decoration: none" href="#"><span style="color: blue; ">OLympic Tiếng Anh</span> -Trang Quản Trị</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Xin Chào: {!!Auth::user()->username!!}<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="{{url('dang-xuat')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng Xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-2 col-lg-2 sidebar">

		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href=""><i class="glyphicon glyphicon-home"></i> TRANG CHỦ</a></li>
			<li class="{!! Request::is('truong') ? 'active' : '' !!}" ><a href="{{url('truong')}}" ><i class="glyphicon glyphicon-file"></i> Quản Lý Trường</a></li>
			<li class="" ><a href=""><i class="glyphicon glyphicon-tasks"></i> Quản Lý Loại Tin Tức</a></li>
			<li class=""><a href=""><i class="glyphicon glyphicon-edit"></i> Quản Lý Tin Tức</a></li>
			<li class="{!! Request::is('de-thi') ? 'active' : '' !!}" ><a href="{{url('de-thi')}}"><i class="glyphicon glyphicon-list-alt"></i> Quản Lý Đề Thi </a></li>
			<li class="{!! Request::is('ql-loaicauhoi') ? 'active' : '' !!}"><a href="{{url('ql-loaicauhoi')}}"><i class="glyphicon glyphicon-book"></i> Quản Lý Loại Câu Hỏi</a></li>
			<li class="{!! Request::is('ql-cauhoi') ? 'active' : '' !!}"><a href="{{url('ql-cauhoi')}}"><i class="glyphicon glyphicon-pencil"></i> Quản Lý Câu Hỏi</a></li>
			<li ><a href=""><i class="glyphicon glyphicon-user"></i> Quản Lý Người Dùng</a></li>
			<li ><a href=""><i class="glyphicon glyphicon-signal"></i> Thống Kê</a></li>
			<li class="{!! Request::is('xem-gop-y') ? 'active' : '' !!}"><a href="{{url('xem-gop-y')}}"><i class="glyphicon glyphicon-comment"></i> Xem Góp Ý</a></li>
						
		</ul>
		
	</div>
	<div class="col-sm-offset-2 col-sm-10">
		<div class="row">
				@yield('content')
		</div>
	</div>
	<script src="{!!asset('public/Admin/js/jquery-1.11.1.min.js')!!}"></script>
	<script src="{!!asset('public/Admin/js/bootstrap.min.js')!!}"></script>
	<script src="{!!asset('public/Admin/js/bootstrap-datepicker.js')!!}"></script>
	<script language="JavaScript" type="text/javascript" src="{!! asset('public/Admin/js/datepicker.js') !!}">
	</script>
    <script language="JavaScript" type="text/javascript" src="{!! asset('public/Admin/js/datepicker.min.js') !!}">
    </script>
    <script language="JavaScript" type="text/javascript" src="{!! asset('public/Admin/media/js/jquery.dataTables.min.js') !!}"></script>
    

	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
  $(document).ready(function() {
        $('.dataTables').DataTable({
               "oLanguage": {
                    "sProcessing":   "Đang xử lý...",
                    "sLengthMenu":   "Xem _MENU_ mục",
                    "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                    "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
                    "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Tìm:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Đầu",
                        "sPrevious": "Trước",
                        "sNext":     "Tiếp",
                        "sLast":     "Cuối"
                    }
                },
                "initComplete": function(){

                }
        });        
    });
</script>

</body>

</html>
