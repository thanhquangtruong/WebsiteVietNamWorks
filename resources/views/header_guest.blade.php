<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img class="img-logo" src="image/header/logo.png" alt=""></a>
    </div>
    <ul class="nav navbar-nav">
      <li id="header-active"><a href="#">Tất Cả Việc Làm</a></li>
      <li id="header"><a href="#">Công Ty</a></li>
      <li id="header"><a href="#">Tư Vấn</a></li>
      <li id="header"><a href="#">Bảo Mật</a></li>
    </ul>
    <ul class="nav navbar-nav navbar" style="float: right;margin-right: -20px;"> 
      <li class="nhatuyendung">
        <a href="#">
          <p id="nhatuyendung">NHÀ TUYỂN DỤNG</p>
          <p id="noidungtuyendung">Đăng tuyển và tìm kiếm nhân tài</p>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right" style="margin-right: 30px;">
      <li><a href="#"><span class="fa fa-search"></span></a></li>
      <li><a href="#"><span class="fa fa-bell"></span></a></li>
      <li><a href="#"><span class="fa fa-comments-o"></span></a></li>
      @if(!Auth::check())
        <li><a href="dangnhap" ><span class="fa fa-sign-in"> Đăng nhập </span></a></li>
        <li><a href="dangky"><span class="fa fa-user-plus"> Đăng ký</span></a></li>
        <!-- sdfghjkl -->
        @else
          <li class="navbar-right dropdown">
            <div class="dropdown">
              <button class="btn dropdown-toggle btn-user" type="button" data-toggle="dropdown"><span class="fa fa-user"></span>{{Auth::user()->name}}
              <span class="caret"></span></button>
              <ul class="dropdown-menu dropdown-user">
                <a href="hosocuatoi" type="button" class="btn btn-resume" style="background-color: orange;height: 40px;color: white;margin-top: 10px;margin-bottom: 10px;">Hồ sơ việc làm</button><hr>
                <a href="thongtintaikhoan" type="button" class="btn btn-change-user"><span class="fa fa-user"></span> Thông tin tài khoản</a>
                <button type="button" class="btn btn-change-user"><span class="fa fa-heart"></span> Việc làm của tôi</button>
                <button type="button" class="btn btn-change-user"><span class="fa fa-envelope-o"></span> Thông báo việc làm</button>
                <button type="button" class="btn btn-change-user"><span class="fa fa-comments-o"></span> Phản hồi</button>
                <button type="button" class="btn btn-change-user"><span class="fa fa-eye"></span> Nhà tuyển dụng xem hồ sơ</button>
                <a href="dangxuat" type="button" class="btn btn-change-user"><span class="fa fa-sign-in"></span> Thoát</a>
              </ul>
            </div>  
      </li>
      @endif
      </ul> 
  </div>
</nav>
    <!--Modal Login-->
    <div class="modal fade" id="modelLogin" tabindex="-1">
        <div class="modal-dialog modal-lg-login">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <p id="title-modal">Đăng nhập</p>
                </div>
                <div class="modal-body">
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
                    <form  class="form-horizontal" action="dangnhap" method="post" id="">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="row" style="text-align: center;padding-left: 40px;padding-right: 40px;">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-facebook"><span class="fa fa-facebook"></span> Dùng tài khoản Facebook</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-google"><span class="fa fa-google"></span> Dùng tài khoản Google</button>
                            </div>
                        </div>
                        <div class="form-login">
                          <p id="login-title">SỬ DỤNG TÀI KHOẢN VIETNAMWORK</p>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                          </div>
                          <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                          <a href="#" class="forgot-pass">Quên mật khẩu?</a>
                          <button type="submit" class="btn btn-warning btn-login">Đăng nhập</button>
                          <hr>
                          <p id="txt-signup">Chưa có tài khoản? <a href="#" class="txt-sign-up">Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Modal SignUp-->
    <div class="modal fade" id="modelSignup" tabindex="-1">
        <div class="modal-dialog modal-lg-signup">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <p id="title-modal">Đăng ký thành viên</p>
                </div>
                <div class="modal-body">
                    <form  class="form-horizontal" action="" method="post" id="">
                        <div class="row" style="text-align: center;padding-left: 40px;padding-right: 40px;">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-facebook"><span class="fa fa-facebook"></span> Dùng tài khoản Facebook</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-google"><span class="fa fa-google"></span> Dùng tài khoản Google</button>
                            </div>
                        </div>
                        <div class="form-login">
                          <p id="login-title">ĐĂNG KÝ BẰNG EMAIL</p>
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="ho">Họ</label>
                                <input type="text" class="form-control" id="ho">
                              </div>
                            </div>
                            <div class="col-md-6" style="margin-left: 40px;">
                              <div class="form-group">
                                <label for="ten">Tên</label>
                                <input type="text" class="form-control" id="ten">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password">
                          </div>
                          <div class="checkbox checkbox-signup">
                            <label><input type="checkbox"> Tôi muốn nhận Bản tin VietnamWorks hàng tuần và hàng tháng</label>
                          </div>
                          <button type="button" class="btn btn-warning btn-login">Đăng ký</button>
                          <p id="txt-submit-signup">Nhấp chọn "Đăng ký", tôi đã đọc và đồng ý với các<br> 
                              <a href="#">Quy định bảo mật</a> và <a href="#">Thỏa thuận sử dụng</a></p>
                          <hr>  
                          <p id="txt-signup">Bạn là thành viên VietnamWorks? <a href="#" class="txt-sign-up">Đăng nhập</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>