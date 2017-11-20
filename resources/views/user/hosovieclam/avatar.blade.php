<div class="avtar">
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-4" style="border-left:5px solid orange">
			<img src="image/avatar.jpg" alt="" style="height: 200px;width: 200px;margin-left: 50px;margin-top: 20px;">
			<button type="button" class="btn btn-default" style="margin-top:10px;margin-left: 90px;">Thay đổi ảnh</button>
		</div>
		<div class="col-md-8" style="border: 3px solid #eee; margin-bottom: 5px;margin-top: 5px;">
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
			<form action ="SuaAvatar" method="post"> 
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<div class="change-image" style="padding-left: 30px;padding-bottom: 30px;padding-top: 20px;">
					<div class="form-group">
						<label><span style="color: red">*</span>Họ và Tên</label>
						<input type="text" class="form-control"  name="name" value="{{Auth::user()->name}}">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><span style="color: red">*</span>Cấp bậc</label>
								<input type="text" class="form-control"" name="capbac" value="{{Auth::user()->capbac}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><span style="color: red">*</span>Chức danh</label>
								<input type="text" class="form-control"  name="chucdanh" value="{{Auth::user()->chucdanh}}">
							</div>		
						</div>
					</div>
					
					<div class="button" style="float: right;
					margin-right: 45px;">
					<button type="submit" class="btn btn-warning">Lưu</button>
					<button type="cancel" class="btn btn-default">Hủy</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<hr>