<div class="personel" style="margin-left: -20px;margin-right: -20px">					
	<form action="SuaThongTinCaNhan" method="post" style="margin-left: 20px;margin-right: 20px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>	
		<div class="title-personal">
			<button type="button" class="btn" style="height: 40px; float: right"><span class="fa fa-briefcase" ></span> Thông tin cá nhân</button><br>
		</div>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-6">
				<div class="form-group">
					<label><span style="color: red">*</span>Email</label>
					<input type="email" class="form-control" disabled="true" name="email" value="{{Auth::user()->email}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Ngày sinh</label>
					<input type="date" class="form-control"  name="ngaysinh" value="{{Auth::user()->ngaysinh}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Giới tính</label>
					<input type="text" class="form-control" name="gioitinh" value="{{Auth::user()->gioitinh}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Quốc Gia</label>
					<input type="text" class="form-control" name="quocgia" value="{{Auth::user()->quocgia}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Tỉnh/Thành Phố</label>
					<input type="text" class="form-control" name="thanhpho" value="{{Auth::user()->thanhpho}}">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label><span style="color: red">*</span>Điện thoại</label>
					<input type="text" class="form-control" name="dienthoai" value="{{Auth::user()->dienthoai}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Quốc tịch</label>
					<input type="text" class="form-control" name="quoctich" value="{{Auth::user()->quoctich}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Tình trạng hôn nhân</label>
					<input type="text" class="form-control" name="honnhan" value="{{Auth::user()->honnhan}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Quận huyện</label>
					<input type="text" class="form-control" name="quan" value="{{Auth::user()->quan}}">
				</div>
				<div class="form-group">
					<label><span style="color: red">*</span>Địa chỉ</label>
					<input type="text" class="form-control" name="diachi" value="{{Auth::user()->diachi}}">
				</div>
			</div>
			<div class="button" style="float: right;
				margin-right: 45px;padding-bottom: 20px;">
				<button type="submit" class="btn btn-warning">Lưu</button>
				<button type="button" class="btn btn-default">Hủy</button>
			</div>
		</div>
	</form>
</div>