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
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
	@include('header_guest')
	<div class="myprofile" style="background-color: #eee">
		@include('user.hosovieclam.job-hobby')
		<div class="infomation-profile">
			<p id="txt-infomation-profile"><span class="fa fa-info-circle" style="color: orange"></span> <strong>Quang</strong>, Thêm chi tiết và bắt đầu phỏng vấn ngay.</p>
		</div>
		<div class="resume-profile">
			<div class="container" style="margin-right: -60px;margin-left: 20px;">
				<div class="row">
					<div class="col-md-9" style="background-color: white; padding-left: 20px;margin-left:15px;">
						@include('user.hosovieclam.avatar')
						@include('user.hosovieclam.personal')
						@include('user.hosovieclam.genaral-information')
						@include('user.hosovieclam.skill')
						@include('user.hosovieclam.language')
						@include('user.hosovieclam.experience')
						@include('user.hosovieclam.education')
						@include('user.hosovieclam.information')
						@include('user.hosovieclam.desired-job')
					</div>
					<div class="col-md-4" style="float: right; margin-right: -120px;">
							<div class="your-profile">
								<div class="title-profile">
									Your Profile Strength
								</div>
								<div class="content-profile" style="background-color: white;padding-left: 30px;padding-top: 30px;padding-bottom: 30px;">
									<p>Your profile strength is <strong style="color: #468847">Unfinished</strong></p><hr>
									<p><strong>Mang hồ sơ của bạn tới cấp độ tiếp theo:</strong></p>
									<ul style="list-style: none;">
										<li><a href="#" id="add-info-profile">+ Thêm thông tin liên lạc</a></li>
										<li><li><a href="#" id="add-info-profile">+ Thêm kỹ năng chính (1)</a></li>
										<li><a href="#" id="add-info-profile">+ Thêm giáo dục</a></li>
									</ul>
								</div>
							</div>
							<div class="profile-setting" style="padding-top: 40px;">
								<div class="title-profile">
									Cài đặt cấu hình
								</div>
								<div class="content-profile" style="background-color: white;padding-left: 30px;padding-top: 30px;padding-bottom: 30px;">
									<p>Hồ sơ đính kèm</p><hr>
									<div class="upload" style="padding-right: 40px;">
										<form action="" method="post" enctype="multipart/form-data">
											<input class="form-control" type="file" name="upload">
											<p style="font-size: 13px;margin-top: 10px;">Bạn chỉ có thể đính kèm tệp .doc, .docx và .pdf có kích thước nhỏ hơn 2MB</p>
											<input type="submit" class="btn btn-success" value="Upload" name="submit">
										</form>
										<hr>
										<h4>Có thể tìm kiếm được</h4>
										<p style="font-size: 13px;margin-top: 10px;">Làm cho hồ sơ của bạn có thể tìm kiếm được để tăng khả năng hiển thị của bạn cho nhà tuyển dụng</p>
									</div>
								</div>
							</div>
							<div class="view-profile" style="padding-top: 40px;">
								<div class="title-profile">
									Ai đã xem tôi?
								</div>
								<div class="content-profile" style="background-color: white;padding-left: 30px;padding-top: 30px;padding-bottom: 30px;">
									<div class="row">
										<div class="col-md-2">
											<h4 style="color: orange; font-size: 25px;font-weight: bold;">0</h4>
										</div>
										<div class="col-md-10">
											<a href="#" id="nhatuyendung-view-profile">Nhà tuyển dụng đã xem tiểu sử của bạn trong 7 ngày qua</a>
										</div>
								</div>
							</div>
							<div class="application-profile" style="padding-top: 40px;">
								<div class="title-profile">
									Ứng dụng
								</div>
								<div class="content-profile" style="background-color: white;padding-left: 30px;padding-top: 30px;padding-bottom: 30px;">
									<div class="row">
										<div class="col-md-4">
											<a href="#" data-toggle="tooltip" title="Các ứng dụng đang chờ người sử dụng lao động tiến hành." id="tool-tip">Mở</a>
										</div>
										<div class="col-md-6">
											<a href="#" id="nhatuyendung-view-appli" style="background-color: #5cb85c">0</a>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4">
											<a href="#" data-toggle="tooltip" title="Người sử dụng lao động đã xem đơn đăng ký của bạn." id="tool-tip">Xem</a>
										</div>
										<div class="col-md-6">
											<a href="#" id="nhatuyendung-view-appli" style="background-color: orange">0 lượt xem</a>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4">
											<a href="#" data-toggle="tooltip" title="Công việc không còn trên VietNamWorks; tuy nhiên bạn có thể liên lạc với nhà tuyển dụng" id="tool-tip">Đóng</a>
										</div>
										<div class="col-md-6">
											<a href="#" id="nhatuyendung-view-appli" style="background-color: #ff6868;">0</a>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>			
			</div>
		</div>
		<br><br>
	</div>
	<div class="footer" style="padding-top: 30px;">
		@include('footer')
	</div>
</body>
</html>