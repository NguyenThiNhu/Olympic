
@extends('Admin.adminmaster')
@section('title', 'Quản lý đề thi')
@section('Carousel')
@stop
@section('content')


<div class="templatemo-content-container col-sm-11 col-md-offset-3">
		<div class="templatemo-site-header">
   			<h1 style="text-align: center; background-color: #176cb0; color: white;">Quản Lý Đề Thi</h1>
  		</div>
			<h3 style="color: black;">Danh sách đề thi</h3>
      
      <br>
      <br>
      <div class="form-input clearfix">
                  <div class="label"></div>
                  <div class="value"><button  type="button" class="btn btn-info" onclick="showRecoverPasswordForm()">Thêm đề thi
                  </button></div>
                  <br>
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
                          <br>
                            <div class="form-input clearfix">
                                <div class="label"><span style="font-size: 16px; color: black;">Tên đề thi</span></div>
                                <br>
                                <div class="value"><input type="text" name="TEN_LOAI" class="form-control" placeholder="Tên đề thi" style="width: 300px;"></div>
                            </div>                            
                            <div class="form-input clearfix">
                                <div class="label"></div>
                                <div class="value"><button type="submit" class="btn btn-primary" style="background-color:green;">Thêm </button></div>
                                <div class="label"></div>
                                <div class="value"> 
                                <a href="{{url('truong')}}" class="btn btn-default" style="background-color:red; color: white" onclick="hideRecoverPasswordForm();return false;">Hủy</a></div>
                            </div>  
                                                                                  
                        </form>
                    </div>  
                    <br>           
		<div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table dataTables">
                <thead>
                  <tr >
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">STT <span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">
                        Tên Đề Thi<span class="caret"></span></a>
                      </th>
                      <th style="background-color: #1b5ab6; color: white;">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">
                        Số Câu Hỏi<span class="caret"></span></a>
                      </th>
                      
                      <th style="background-color: #1b5ab6; ">
                        <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by t" >Sửa </a>
                      </th>
                      <th style="background-color: #1b5ab6; color: swhite;">
                      <a style=" color: white; text-decoration: none;" href="" class="white-text templatemo-sort-by">Xóa</a>
                      </th>
                  </tr>
                </thead>
                <tbody>
                
                 <?php $pos=1; ?>
            
                 @foreach($dethi as $dethi)
                 
					         <tr>
                      <td style="text-align: center;"><?php echo $pos++;?></td>
                      <td style="text-align: center;">{!!$dethi->TEN_DE!!}</td>
                      <td style="text-align: center;">{!!$dethi->SO_CAUHOI!!}</td>
                      <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="#">
                      <span class="glyphicon glyphicon-edit"></span> </a></td>
                      <td class="text-align" style="text-align: center;"> <a href="#" class="btn btn-danger btn-xs">
                      <span class="glyphicon glyphicon-remove"></span></a></td>
                  </tr>
                          @endforeach      
                </tbody>
              </table>    
            </div>  
                          
    </div>  
</div>
@endsection