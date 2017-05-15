

@extends('User.master')
@section('title', 'Góp Ý')
@section('Carousel')
@stop
@section('content')

<div class="templatemo-content-container">
		<div class="templatemo-site-header">
   			<h1 style="text-align: center;">Quản lý loại sản phẩm</h1>
  		</div>
		<marquee style=" background-color: #79CDCD; font-size: 18px;">Nội Thất Mr Gà -- Quản lý loại sản phẩm</marquee>
		<hr  width="30%" align="center" />
			 @if(Session::has('flash_message'))
	            <div class="alert alert-info col-sm-12">
	                <b>Thông Báo: </b>
	                {!! Session::get('flash_message') !!}
	            </div>
			@endif 
			<h3 style="color: black;">Danh sách loại sản phẩm</h3>
		<div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="tablesorter table table-striped table-bordered templatemo-user-table" id="example">
                <thead>
                  <tr>
                    <th><a href="" class="white-text templatemo-sort-by">Mã Loại<span class="caret"></span></a></th>
                    <th><a href="" class="white-text templatemo-sort-by">Tên Loại Sản Phẩm <span class="caret"></span></a></th>
                    <th><a href="" class="white-text templatemo-sort-by">Sửa</a></th>
                    <th><a href="" class="white-text templatemo-sort-by">Xóa</a></th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                  <form action="" method="post">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <td><span></span></td>
                    <td><input type="text" class="form-control" name=""></td>
                    <td><button type="submit" class="nut">Sửa</button></td>
                    <td><a href="" class="nut">Xóa</a></td>
                    </form>
                  </tr>
                @endforeach                   
                </tbody>
              </table> 
            </div> 
              	<div class="form-input clearfix">
	                <div class="label">&nbsp;</div>
	                <div class="value"><button  type="button" class="btn btn-info" onclick="showRecoverPasswordForm()">Thêm loại sản phẩm</button></div>
	            </div>                                         
                    <script type="text/javascript">
                          function showRecoverPasswordForm() {
                            document.getElementById('recover').style.display = 'block';
                            document.getElementById('login').style.display='none';
                          }

                          function hideRecoverPasswordForm() {
                            document.getElementById('recover').style.display = 'none';
                            document.getElementById('login').style.display = 'block';
                          }
                        </script>   
                    <div class="customer-login" id="recover" style="display:none">
                        <form action=""  method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input name="utf8" type="hidden" value="true">
                            <div class="form-input clearfix">
                                <div class="label"><span style="font-size: 16px; color: black;">Tên loại sản phẩm*</span></div>
                                <div class="value"><input type="text" name="TEN_LOAI" class="form-control" placeholder="Nội thất phòng khách" style="width: 300px;"></div>
                            </div>                            
                            <div class="form-input clearfix">
                                <div class="label">&nbsp;</div>
                                <div class="value"><button type="submit" class="btn btn-success">Thêm</button></div>
                                <div class="label">&nbsp;</div>
                                <div class="value"><a href="" onclick="hideRecoverPasswordForm();return false;">Hủy</a></div>
                            </div>  
                                                                                  
                        </form>
                    </div>                           
    </div>  
</div>
@endsection