<footer style="margin-top: -25px;">
        <div class="site-footer">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    	<h4 class="footer-title-col-1">Về VietnamWorks</h4>
                    	<ul class="footer-list">
                    		<li><a href="vechungtoi" id="list-footer">Về VietnamWorks</a></li>
	                        <li><a href="lienhe" id="list-footer">Liên Hệ</a></li>
	                        <li><a href="gocbaochi" id="list-footer">Góc Báo Chí</a></li>
	                        <li><a href="hoidap" id="list-footer">Hỏi Đáp</a></li>
	                        <li><a href="ungdungdidong" id="list-footer">Ứng Dụng Di Động</a></li>
                    	</ul>
                    </div>
                    <div class="col-sm-3 diekhoan">
                    	<h4 class="footer-title-col-1">Điều khoản dịch vụ</h4>
                    	<ul class="footer-list">
                    		<li><a href="thoathuansudung" id="list-footer">Thỏa Thuận Sử Dụng</a></li>
	                        <li><a href="quydinhbaomat" id="list-footer">Quy Định Bảo Mật</a></li>
	                        <li><a href="quychehoatdong" id="list-footer">Quy chế hoạt động Sàn giao dịch thương mại điện tử VietnamWorks</a></li> 
                    	</ul>
                    </div>
                    <div class="col-sm-3 congcu">
                    	<h4 class="footer-title-col-1">Công cụ</h4>
                        @if(!Auth::check())
                        	<ul class="footer-list">
                        		<li><a href="dangnhap" id="list-footer">Tài khoản</a></li>
    	                        <li><a href="dangnhap" id="list-footer">Hồ sơ của tôi</a></li>
    	                        <li><a href="dangnhap" id="list-footer">Việc Làm Của Tôi</a></li>
    	                        <li><a href="dangnhap" id="list-footer">Thông Báo Việc Làm</a></li>
    	                        <li><a href="dangnhap" id="list-footer">Phản Hồi</a></li>
    	                        <li><a href="dangnhap" id="list-footer">Tư vấn nghề nghiệp</a></li>
                        	</ul>
                        @else
                            <ul class="footer-list">
                                <li><a href="thongtintaikhoan" id="list-footer">Tài khoản</a></li>
                                <li><a href="hosocuatoi" id="list-footer">Hồ sơ của tôi</a></li>
                                <li><a href="#" id="list-footer">Việc Làm Của Tôi</a></li>
                                <li><a href="#" id="list-footer">Thông Báo Việc Làm</a></li>
                                <li><a href="#" id="list-footer">Phản Hồi</a></li>
                                <li><a href="#" id="list-footer">Tư vấn nghề nghiệp</a></li>
                            </ul>
                        @endif
                    </div>
                    
                    <div class="col-sm-3">
                        <h4 class="footer-title-col-1">Kết Nối Với VietnamWorks</h4>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook-f icon_footer"></i></a>
                            <a href="#"><i class="fa fa-google-plus icon_footer"></i></a>
                            <a href="#"><i class="fa fa-youtube icon_footer"></i></a>
                        </div>
                        <h4 class="footer-title-col-1" style="text-align: center;">Tải xuống</h4>
                        <div class="row">
							<div class="col-md-6">
								<a href="#"><img class="img-footer" src ="image/header/app_store.svg" alt=""></a>
							</div>
							<div class="col-md-6">
								<a href="#"><img class="img-footer" src ="image/header/google_play.jpg" alt=""></a>
							</div>
                        </div>  
                    </div>
                </div>
                <div class="bottom-footer">
                	Copyright © Công Ty Cổ Phần Navigos Group Việt Nam<br>
					Địa Chỉ: 130 Sương Nguyệt Ánh, Phường Bến Thành, Quận 1, TP.Hồ Chí Minh
                </div>
            </div>
        </div>
    </footer>