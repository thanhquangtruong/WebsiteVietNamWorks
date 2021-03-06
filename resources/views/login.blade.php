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
    <div style="background-color: #D6DADC;height: 660px;">
        <div class="container" style="text-align: center;">
            <div class="col-md-8 body-login">
                <p id="txtDN">Đăng nhập</p>
                <!-- In thong bao -->
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form  class="form-horizontal" action="dangnhap" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <p id="txt-mota-DN">Đăng nhập hoặc đăng ký thành viên nhanh bằng tài khoản</p>
                    <div class="row" style="text-align: center;padding-left: 160px;padding-right: 80px;padding-top: 20px;">
                        <div class="col-md-5">
                            <a href="{{route('loginfacebook')}}" type="button" class="btn btn-facebook-login"><span class="fa fa-facebook" style="color: white"></span> &nbsp; Facebook</a>
                        </div>
                        <div class="col-md-5">
                            <a href="{{ URL::to('google/redirect') }}" type="button" class="btn btn-google-login"><span class="fa fa-google" style="color: white"></span>&nbsp; Google</a>
                        </div>
                    </div>
                    <div class="form-login"><br><hr>
                        <p id="txt-mota-DN">Đăng nhập bằng tài khoản Vietnamworks</p><br>
                        <div class="form-group" style="padding-left: 100px;padding-right: 100px;">
                            <input type="email" class="form-control" name="email" style="height: 40px;">
                        </div>
                        <div class="form-group" style="padding-left: 100px;padding-right: 100px;">
                            <input type="password" class="form-control" name="password" style="height: 40px;">
                        </div>
                            <a href="#" class="forgot-pass" style="padding-right: 100px;">Quên mật khẩu?</a><br>
                        <button type="submit" class="btn btn-warning btn-login" style="padding-right: 100px;padding-left: 100px;height: 40px; font-weight: bold;">Đăng nhập</button>
                        <hr>
                        <p id="txt-signup">Chưa có tài khoản? <a href="dangky" class="txt-sign-up">Đăng ký ngay</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>