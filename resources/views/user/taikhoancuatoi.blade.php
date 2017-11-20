<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="javascript/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/user.css" />
</head>
<body>
    @include('header_guest')
    <div style="background-color: #eee">
        <div class="container">
            <p id="taikhoan">Tài Khoản</p>
            <hr id="hr" />
            <div class="body-thongtinuser">
                <div class="title-ttuser">
                    <p id="update-user">Cập nhật tài khoản</p>
                </div>
                <div class="body-ttuser">
                    <div class="row">
                        <div class="col-md-6">
                            <p id="ttcnhan">Thông tin cá nhân</p>
                            @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $err)
                                                {{$err}}<br>
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- In thong bao -->
                                    @if(session('thongbao'))
                                        <div class="alert alert-success">
                                            {{session('thongbao')}}
                                        </div>
                                    @endif
                            <form class="form-horizontal" action="suathongtintaikhoan" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="pass"><span class="fa fa-star-o" style="color:orange"></span> Mật khẩu hiện tại</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="password" placeholder="Mật khẩu hiện tại..." name="password" value="{{Auth::user()->password}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="ho"><span class="fa fa-star-o" style="color:orange"></span> Họ</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="firstname" name="name"  id="password" placeholder="Nhập mật khẩu hiện tại..." name="password" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="date"><span class="fa fa-star-o" style="color:orange"></span> Ngày Sinh</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="{{Auth::user()->ngaysinh}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="sex"><span class="fa fa-star-o" style="color:orange"></span> Giới tính</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="gioitinh" name="gioitinh" value="{{Auth::user()->gioitinh}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="quocgia"><span class="fa fa-star-o" style="color:orange"></span> Quốc gia</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="quocgia" name="quocgia" value="{{Auth::user()->quocgia}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="address"><span class="fa fa-star-o" style="color:orange"></span> Địa chỉ</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="diachi" name="diachi" value="{{Auth::user()->diachi}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-save-ttuser">Lưu</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                        	<p id="ttcnhan">Đổi mật khẩu</p>
                            <form class="form-horizontal" action="doimatkhau" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="pass"><span class="fa fa-star-o" style="color:orange"></span> Nhập mật khẩu hiện tại</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu hiện tại..." name="pass">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="pass"><span class="fa fa-star-o" style="color:orange"></span> Nhập mật khẩu mới</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu mới..." name="pass_new">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="pass"><span class="fa fa-star-o" style="color:orange"></span> Xác nhận mật khẩu</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="password" placeholder="" name="pass_same">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-save-ttuser">Lưu</button>
                            </form>

                            <p id="ttcnhan">Đổi Email</p>
                            <form class="form-horizontal" action="suathongtinemailtaikhoan" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            	<label class="control-label col-sm-12 title-form-user" for="pass" style="text-align: left;margin-bottom: 20px;">Email truy cập hiện tại: {{Auth::user()->email}}</label>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="email"><span class="fa fa-star-o" style="color:orange"></span> Nhập Email mới</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email" placeholder="Nhập Email mới..." name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="email"><span class="fa fa-star-o" style="color:orange"></span> Xác nhận Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email" placeholder="" name="email_new">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5 title-form-user" for="pass"><span class="fa fa-star-o" style="color:orange"></span> Nhập mật khẩu hiện tại</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="password" placeholder="" name="pass">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-save-ttuser">Lưu</button><br><br>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        @include('footer')
    </div>
</body>

</html>