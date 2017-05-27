@extends('Admin.adminmaster')
@section('title', 'Cập Nhật Câu Hỏi')
@section('Carousel')
@stop
@section('content')
	<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Câu Hỏi</div>
	<br><br>
	<div class="col-sm-offset-2 col-sm-8 main">
		<div class="panel panel-default">
			<div class="panel-body"  style="background-color:#e4edf4">
			 <h3 style="color: black; text-align: center;">Cập Nhật Câu Hỏi</h3> 
			 <br>      
				<div class="col-sm-offset-2 col-md-8">
					<form role="form" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label style="color: black;"> Loại Câu Hỏi:</label>
							<select name="loai_ch" id="loai_ch" class="form-control">
								<?php $loai_ht= App\LOAI_CAU_HOI::where('MA_LOAI','=',$cau_hoi->MA_LOAI)->first(); ?>
									<option value="{!!$cau_hoi->MA_LOAI!!}">{!!$loai_ht->TEN_LOAI!!}</option>
								<?php $loai = App\LOAI_CAU_HOI::where('MA_LOAI','!=',$cau_hoi->MA_LOAI)->get();?>
								@foreach($loai as $loai)
									<option value="{!!$loai->MA_LOAI!!}">{!!$loai->TEN_LOAI!!}</option>
								@endforeach
							</select>
						</div>
						@if($cau_hoi->MA_LOAI==1)
							<div class="form-group" id="loai1">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="trac_nghiem" rows="2" class="form-control">{!!$cau_hoi->NOI_DUNG!!}</textarea>
							</div>
							<div class="form-group" id="loai2" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<img src="" style="width: 100%;height: auto;" class="form-control" id="hinh_hien_tai">
								<input type="file" class="form-control" name="hinh" onchange="readURL(this);">
							</div>
							<div class="form-group" id="loai3" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="dien_khuyet" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai4" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<audio controls id="audio_ht" style="width: 100%;">
			                        	<source src="" type="audio/mp3" >
			                      	</audio>
									<input type="file" class="form-control" name="audio" onchange="readURL1(this);">	
								</div>
							</div>
							<div class="form-group" id="loai5" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<video controls id="vido_ht" style="width: 100%;">
	                                	<source src="{!!asset($cau_hoi->NOI_DUNG)!!}" type="video/mp4">
	                              	</video>
									<input type="file" class="form-control" name="video" onchange="readURL2(this);">	
								</div>
							</div>
						@elseif($cau_hoi->MA_LOAI==2)
							<div class="form-group" id="loai2">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<img src="{!!asset($cau_hoi->NOI_DUNG)!!}" style="width: 100%;height: auto;" class="form-control" id="hinh_hien_tai">
								<input type="file" class="form-control" name="hinh" onchange="readURL(this);">
							</div>
							<div class="form-group" id="loai1" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="trac_nghiem" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai3" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="dien_khuyet" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai4" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<audio controls id="audio_ht" style="width: 100%;">
			                        	<source src="" type="audio/mp3" >
			                      	</audio>
									<input type="file" class="form-control" name="audio" onchange="readURL1(this);">	
								</div>
							</div>
							<div class="form-group" id="loai5" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<video controls id="vido_ht" style="width: 100%;">
	                                	<source src="{!!asset($cau_hoi->NOI_DUNG)!!}" type="video/mp4">
	                              	</video>
									<input type="file" class="form-control" name="video" onchange="readURL2(this);">	
								</div>
							</div>
						@elseif($cau_hoi->MA_LOAI==3)
							<div class="form-group" id="loai3">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="dien_khuyet" rows="2" class="form-control">{!!$cau_hoi->NOI_DUNG!!}</textarea>
							</div>
							<div class="form-group" id="loai1" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="trac_nghiem" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai2" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<img src="" style="width: 100%;height: auto;" class="form-control" id="hinh_hien_tai">
								<input type="file" class="form-control" name="hinh" onchange="readURL(this);">
							</div>
							<div class="form-group" id="loai4" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<audio controls id="audio_ht" style="width: 100%;">
			                        	<source src="" type="audio/mp3" >
			                      	</audio>
									<input type="file" class="form-control" name="audio" onchange="readURL1(this);">	
								</div>
							</div>
							<div class="form-group" id="loai5" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<video controls id="vido_ht" style="width: 100%;">
	                                	<source src="{!!asset($cau_hoi->NOI_DUNG)!!}" type="video/mp4">
	                              	</video>
									<input type="file" class="form-control" name="video" onchange="readURL2(this);">	
								</div>
							</div>
						@elseif($cau_hoi->MA_LOAI==4)
							<div class="form-group" id="loai4">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<audio controls id="audio_ht" style="width: 100%;">
			                        	<source src="{!!asset($cau_hoi->NOI_DUNG)!!}" type="audio/mp3" >
			                      	</audio>
									<input type="file" class="form-control" name="audio" onchange="readURL1(this);">	
								</div>
							</div>
							<div class="form-group" id="loai1" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="trac_nghiem" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai2" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<img src="" style="width: 100%;height: auto;" class="form-control" id="hinh_hien_tai">
								<input type="file" class="form-control" name="hinh" onchange="readURL(this);">
							</div>
							<div class="form-group" id="loai3" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="dien_khuyet" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai5" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<video controls id="vido_ht" style="width: 100%;">
	                                	<source src="{!!asset($cau_hoi->NOI_DUNG)!!}" type="video/mp4">
	                              	</video>
									<input type="file" class="form-control" name="video" onchange="readURL2(this);">	
								</div>
							</div>
						@elseif($cau_hoi->MA_LOAI==5)
							<div class="form-group" id="loai5">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<video controls id="vido_ht" style="width: 100%;">
	                                <source src="{!!asset($cau_hoi->NOI_DUNG)!!}" type="video/mp4">
	                              </video>
									<input type="file" class="form-control" name="video" onchange="readURL2(this);">	
								</div>
							</div>
							<div class="form-group" id="loai1" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="trac_nghiem" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai2" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<img src="" style="width: 100%;height: auto;" class="form-control" id="hinh_hien_tai">
								<input type="file" class="form-control" name="hinh" onchange="readURL(this);">
							</div>
							<div class="form-group" id="loai3" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<textarea name="dien_khuyet" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group" id="loai4" style="display: none;">
								<label style="color: black;"> Nội Dung Câu Hỏi:</label>
								<div>
									<audio controls id="audio_ht" style="width: 100%;">
			                        	<source src="" type="audio/mp3" >
			                      	</audio>
									<input type="file" class="form-control" name="audio" onchange="readURL1(this);">	
								</div>
							</div>
						@endif
						<div class="form-group">
							<label style="color: black;"> Thời Gian Câu Hỏi (Giây):</label>
							<input type="number" class="form-control" name="tg_cauhoi" min="1" max="1000" value="{!!$cau_hoi->TG_CAUHOI!!}">
						</div>						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Cập Nhật</button>
							<a onclick="window.history.back()" class="btn btn-danger" >Quay Lại</a> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script>
	function readURL(input){
		if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#hinh_hien_tai')
                    .attr('src', e.target.result)
                    .width(400)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
	}
	function readURL1(input){
		if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#audio_ht')
                    .attr('src', e.target.result);
                     $('#audio_ht').load();
            };
            reader.readAsDataURL(input.files[0]);
           
        }
	}
	function readURL2(input){
		if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#vido_ht')
                    .attr('src', e.target.result);
                     $('#vido_ht').load();
            };
            reader.readAsDataURL(input.files[0]);
           
        }
	}
</script>
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
