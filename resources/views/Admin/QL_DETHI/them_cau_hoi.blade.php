@extends('Admin.adminmaster')
@section('title', 'Thêm Câu Hỏi')
@section('Carousel')
@stop
@section('content')
	<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Đề Thi</div>
	<br><br>
	<div class="col-sm-offset-2 col-sm-8 main">
		<div class="panel panel-default">
			<div class="panel-body"  style="background-color:#e4edf4">
			 <h3 style="color: black; text-align: center;">Thêm Câu Hỏi Cho {!!$de_thi->TEN_DE!!}</h3> 
			 <br>      
				<div class="col-sm-offset-2 col-md-8">
					<form role="form" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label style="color: black;"> Loại Câu Hỏi:</label>
							<select name="loai_ch" id="loai_ch" class="form-control">
								<?php $loai = App\LOAI_CAU_HOI::all();?>
								@foreach($loai as $loai)
									<option value="{!!$loai->MA_LOAI!!}">{!!$loai->TEN_LOAI!!}</option>
								@endforeach
							</select>
						</div>
						<div id="loai1">
							@for ($i = 1; $i <= $de_thi->SO_CAUHOI; $i++)
							    <div class="form-group">
									<label style="color: black;"> Nội Dung Câu Hỏi Thứ {!!$i!!}:</label>
									<textarea name="trac_nghiem[]" rows="2" class="form-control" placeholder="Nội dung câu hỏi..."></textarea>
								</div>
								<div class="form-group">
									<label style="color: black;"> Thời Gian Câu Hỏi Thứ {!!$i!!}:</label>
									<input type="number" class="form-control" name="tg_cauhoi1[]" min="1" max="1000" placeholder="(Giây)">
								</div>
								<br>
							@endfor
						</div>
						<div id="loai2" style="display: none;">
							@for ($i = 1; $i <= $de_thi->SO_CAUHOI; $i++)
								<div class="form-group">
									<label style="color: black;"> Hình Thứ {!!$i!!}:</label>
									<input type="file" class="form-control" name="hinh[]">
								</div>
							@endfor
						</div>
						<div id="loai3" style="display: none;">
							@for ($i = 1; $i <= $de_thi->SO_CAUHOI; $i++)
							    <div class="form-group">
									<label style="color: black;"> Nội Dung Câu Hỏi Thứ {!!$i!!}:</label>
									<textarea name="dien_khuyet[]" rows="2" class="form-control" placeholder="Nội dung câu hỏi..."></textarea>
								</div>
								<div class="form-group">
									<label style="color: black;"> Thời Gian Câu Hỏi Thứ {!!$i!!}:</label>
									<input type="number" class="form-control" name="tg_cauhoi2[]" min="1" max="1000" placeholder="(Giây)">
								</div>
								<br>
							@endfor
						</div>
						<div id="loai4" style="display: none;">
							@for ($i = 1; $i <= $de_thi->SO_CAUHOI; $i++)
								<div class="form-group">
									<label style="color: black;"> Audio Thứ {!!$i!!}:</label>
									<input type="file" class="form-control" name="audio[]">
								</div>
								<br>
							@endfor
						</div>
						<div id="loai5" style="display: none;">
							@for ($i = 1; $i <= $de_thi->SO_CAUHOI; $i++)
								<div class="form-group">
									<label style="color: black;"> Video Thứ {!!$i!!}:</label>
									<input type="file" class="form-control" name="video[]">
								</div>
								<br>
							@endfor
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" style="background-color:green;">Thêm</button>
							<a onclick="window.history.back()" class="btn btn-default" style="background-color:red; color: white">Quay Lại</a> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script>
	$(document).ready(function(){
		$('#loai_ch').change(function() {
			var x = $(this).val();
			var leng = $('#loai_ch').find("option").length;
			// alert(leng);
			$('#loai'+x).show();
			var i =1;
			for (i ;i<=leng;i++) {
				if(i!=x){
					$('#loai'+i).hide();
				}
			}

		});

	});
</script>

@endsection
