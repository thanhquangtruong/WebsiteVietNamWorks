<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="javascript/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/account.css" />
</head>
<body>
    <div style="background-color: #D6DADC;height: 800px;">
    	<div class="container" style="text-align: center;">
            <div class="col-md-5 body-signup">
                <!-- In thong bao -->
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form  class="form-horizontal" action="dangky" method="post" id="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <p id="txtDN">Đăng ký thành viên</p>
                    <div class="row" style="text-align: center;padding-left: 20px;padding-right: 0px;padding-top: 10px;">
                        <div class="col-md-5" style="margin-right: 10px;">
                            <button type="button" class="btn btn-facebook-signup"><span class="fa fa-facebook" style="color: white; "></span> Dùng tài khoản Facebook</button>
                        </div>
                        <div class="col-md-5" style="margin-left: 10px;">
                            <button type="button" class="btn btn-google-signup"><span class="fa fa-google" style="color: white;"></span> Dùng tài khoản Google</button>
                        </div>
                    </div>
                    <div class="form-login"><br><hr>
                        <p id="txt-mota-DN">Đăng ký bằng Email</p><br>
                        <div class="form-group">
                             <input type="text" class="form-control" name="name" style="height: 35px;" placeholder="Họ Tên">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" style="height: 35px;" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" style="height: 35px;" placeholder="Mật khẩu">
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-control" name="password_same" style="height: 35px;" placeholder="Mật khẩu">
                        </div>
                        <div class="checkbox checkbox-signup" style="text-align: left">
                            <label><input type="checkbox"> Tôi muốn nhận Bản tin VietnamWorks hàng tuần và hàng tháng</label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-signup-signup">Đăng ký</button>
                          <p id="txt-submit-signup">Nhấp chọn "Đăng ký", tôi đã đọc và đồng ý với các<br> 
                              <a href="#">Quy định bảo mật</a> và <a href="#">Thỏa thuận sử dụng</a></p>
                          <hr>  
                          <p id="txt-signup">Bạn là thành viên VietnamWorks? <a href="#" class="txt-sign-up">Đăng nhập</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>