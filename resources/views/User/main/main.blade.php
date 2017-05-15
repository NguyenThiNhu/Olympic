@extends('User.master')
@section('title', 'Trang Chủ')
@section('Carousel')
@section('content')
<!--banner-bottom-->

<!--banner-bottom-->
<!--welcome-->
<div class="welcome-w3">
	<div class="container">
	</div>
</div>
<!--welcome-->
<!--student-->
<div class="container">
	<div class="student-w3ls" style="margin-top: -100px;">
	
		<h3 class="tittle">Cuộc Thi Olympic Tiếng Anh</h3>
		<div class="student-grids">
			<div class="col-md-6 student-grid">
				<h4>Lễ Trao Giải Cuộc Thi Olympic Tiếng Anh</h4>
					<p>Olympic tiếng Anh là cuộc thi được tổ chức ở hầu hết các nước mà tiếng Anh không phải là tiếng mẹ đẻ nhằm khuyến khích học sinh học tốt tiếng Anh trong bối cảnh tiếng Anh đang trở thành ngôn ngữ thông dụng nhất thế giới. </p>
					<p> Tham gia cuộc thi Olympic giúp cho học sinh:</p>
					
					<ul class="grid-part">
						<li><i class="glyphicon glyphicon-ok-sign"> </i> Trải nghiệm và thử sức với những bài thi được thiết sinh động, hấp dẫn.</li>
						<li><i class="glyphicon glyphicon-ok-sign"> </i> Rèn luyện bốn kỹ năng nghe, nói, đọc, viết.</li>
						<li><i class="glyphicon glyphicon-ok-sign"> </i> Có kinh nghiệm tham gia các kỳ thi quốc tế.</li>
						
					</ul>

			</div>
			<div class="col-md-6 student-grid">
				<img src="{!!asset('public/Olympic/images/cuocthi2.jpg')!!}" class="img-responsive" alt="Image-2">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--student-->
<!--testimonials-->
	
<!--testimonials-->
<!--news-->
	<div class="new-w3agile">
		<div class="container">
			<div class="new-grids">
				<div class="col-md-4 new-left">
					<h3 class="tittle1">Bảng Xếp Hạng</h3>
					<div class="new-top">
						<h5>Monday june 16</h5>
						<p>Proin fermentum diam eu massa blandit, congue finibus ante pulvinar. Aliquam lacinia odio eros.</p>
					</div>
					<div class="new-top1">
						<h5>Tuesday june 16</h5>
						<p>Proin fermentum diam eu massa blandit, congue finibus ante pulvinar. Aliquam lacinia odio eros.</p>
					</div>
					
				</div>
				<div class="col-md-8 new-right">
					<h3 class="tittle1">Tin Tức</h3>
						<h4>Excepteur sint occaecat cupidatat non proident</h4>
						<p>Quisque at tellus ullamcorper, pharetra arcu a, suscipit purus. Nullam feugiat in augue in consequat. Sed ac dictum ligula, et pellentesque velit. In gravida eu felis sit amet molestie. Morbi sed ex ac enim finibus vulputate. Cras arcu magna, auctor ornare neque in, finibus tincidunt augue.</p>
					<div class="new-bottom">
						<div class="new-bottom-left">
							<img src="images/w7.jpg" class="img-responsive" alt="">
						</div>
							<div class="new-bottom-right">
							<h5>Morbi sed ex ac enim finibus vulputate.</h5>
							<p>Nullam egestas diam eu felis dignissim, vitae posuere ex pretium. Morbi quam purus, rhoncus eget enim sed, laoreet venenatis arcu. Curabitur vestibulum, orci pulvinar pretium cursus, diam ante pretium elit, at finibus nisl ligula vitae enim. eu eleifend enim condimentum ac.</p>
							</div>
							<div class="clearfix"></div>
					</div>
						<h4>Excepteur sint occaecat cupidatat non proident</h4>
						<p>Quisque at tellus ullamcorper, pharetra arcu a, suscipit purus. Nullam feugiat in augue in consequat. Sed ac dictum ligula, et pellentesque velit. In gravida eu felis sit amet molestie. Morbi sed ex ac enim finibus vulputate. Cras arcu magna, auctor ornare neque in, finibus tincidunt augue.</p>
				</div>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--news-->

@endsection