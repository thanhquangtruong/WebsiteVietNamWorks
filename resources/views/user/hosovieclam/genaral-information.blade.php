<div class="thongtinchung">
	<div style="height: 20px;background-color: #eee;margin-left: -20px;margin-right: -15px;">
	</div>
	<div class="bd-thongtinchung">
		<p style="font-size: 18px;margin-top: 15px;"><span class="fa fa-list"></span>Thông tin chung</p><hr>
		<form action="SuaThongTinChung" method="post" style="margin-left: 20px;margin-right: 20px;">
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>	
			<div class="form-group">
				<label>Giới thiệu bản thân và miêu tả mục tiêu nghề nghiệp của bạn</label>
				<textarea class="form-control" rows="4" id="comment" name="thongtinchung" >{{Auth::user()->thongtinchung}}</textarea>
			</div>
			<div class="button" style="float: right;
				margin-right: 25px;padding-bottom: 20px;">
				<button type="submit" class="btn btn-warning">Lưu</button>
				<button type="button" class="btn btn-default">Hủy</button>
			</div>
		</form>
	</div>	
</div>