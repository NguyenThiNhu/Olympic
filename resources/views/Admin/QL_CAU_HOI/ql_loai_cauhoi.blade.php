
@extends('Admin.adminmaster')
@section('title', 'Quản lý loại câu hỏi')
@section('Carousel')
@stop
@section('content')

<div class="panel-heading" style="color:white;text-align:center;background-color:#176cb0; font-size: 34px;">Quản Lý Loại Câu Hỏi</div>
<div class="templatemo-content-container col-sm-12">
		<h1 style="color: black; text-align: center;">Danh sách loại câu hỏi</h1>
    
    <br>
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
                        Tên Loại Câu Hỏi<span class="caret"></span></a>
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
            
                 @foreach($loaicauhoi as $loaicauhoi)
					         <tr>
                    <td><?php echo $pos++;?></td>
                    <td>{!!$loaicauhoi->TEN_LOAI!!}</td>
                    <td class="text-align" style="text-align: center;"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Sửa</a></td>
                    <td class="text-align" style="text-align: center;"> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Xóa</a></td>
                  </tr>
                       @endforeach           
                </tbody>
              </table>    
            </div>  
            <div class="form-input clearfix">
                  <div class="label"></div>
                  <div class="value"><button  type="button" class="btn btn-info" onclick="showRecoverPasswordForm()">Thêm loại câu hỏi</button></div>
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
                                <div class="label"><span style="font-size: 16px; color: black;">Tên loại câu hỏi</span></div>
                                <div class="value"><input type="text" name="TEN_LOAI" class="form-control" placeholder="Tên loại câu hỏi" style="width: 300px;"></div>
                            </div>                            
                            <div class="form-input clearfix">
                                <div class="label"></div>
                                <div class="value"><button type="submit" class="btn btn-success">Thêm</button></div>
                                <div class="label"></div>
                                <div class="value"> 
                                <a href="{{url('truong')}}" class="btn btn-default" style="background-color:red; color: white" onclick="hideRecoverPasswordForm();return false;">Hủy</a></div>
                            </div>  
                                                                                  
                        </form>
                    </div>                           
    </div>  
</div>
@endsection