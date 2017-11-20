<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="javascript/jquery.min.js"></script>
    <script src = "bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/account.css"/>
    <link rel="stylesheet" href="css/header.css"/>
</head>
<body>
	@include('header_guest')
	@include('index.carousel')
	@include('index.logo-trademark')
	@include('index.job-index')
	<div class="panel-image">
		<div class="container">
			<div class="row" style="text-align: center;padding-left: 20px;padding-top: 60px;padding-bottom: 30px;padding-right: 20px;">
				<div class="col-md-3" >
					<img class="img-panel-content" src="image/home/SPVB.jpg" alt="">
				</div>
				<div class="col-md-3" >
					<img class="img-panel-content" src="image/home/SPVB.gif" alt="">
				</div>
				<div class="col-md-3" >
					<img class="img-panel-content" src="image/home/VNWS.jpg" alt="">
				</div>
				<div class="col-md-3" >
					<img class="img-panel-content" src="image/home/WOWCV.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="block-zoom">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="#"><img class="zoombie" src="image/home/zoom.jpg"></a>
				</div>
				<div class="col-md-10" style="padding-top:30px;">
					<a href="#" id ="title-zoom">Độc chiêu để trở thành một nhà tuyển dụng thành công</a>
					<p id="txt-des-zoom">Là một nhà tuyển dụng thành công đồng nghĩa với việc doanh nghiệp của bạn sở hữu một môi trường làm việc tuyệt vời và một thương hiệu nổi bật, các tài năng tốt nhất trong ngành luôn muốn được làm việc cho bạn. Điều này cũng đòi hỏi bạn phải luôn thu hút và giữ chân được đội ngũ nhân viên xuất sắc với chi phí thấp hơn những doanh nghiệp khác. Vì vậy, làm thế nào để bạn có thể xây dựng văn hóa công ty đặc sắc và nắm được các chiến lược để tuyển dụng và giữ chân nhân tài? Sau đây là 5 chiêu thức mà bạn có thể tham khảo:</p>
				</div>
			</div>
		</div>
	</div><hr>
	@include('index.job-filter-city')
	<br><br>
	@include('footer')
</body>

</html>