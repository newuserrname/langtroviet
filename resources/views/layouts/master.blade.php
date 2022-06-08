<!DOCTYPE html>
<html lang="en">
<head>
	<title>Làng Trọ Việt</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/style.css">
	<link rel="stylesheet" href="public/assets/awesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="public/assets/toast/toastr.min.css">
	<script src="public/assets/jquery.min.js"></script>
	<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/assets/myjs.js"></script>
	<link rel="stylesheet" href="public/assets/selectize.default.css" data-theme="default">
	<script src="public/assets/js/fileinput/fileinput.js" type="text/javascript"></script>
	<script src="public/assets/js/fileinput/vi.js" type="text/javascript"></script>
	<link rel="stylesheet" href="public/assets/fileinput.css">
	<script src="public/assets/pgwslider/pgwslider.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="public/assets/pgwslider/pgwslider.min.css">
	<link rel="stylesheet" href="public/assets/bootstrap/bootstrap-select.min.css">
	<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<script src="public/assets/bootstrap/bootstrap-select.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #003352;">
			<div class="container">
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href=""><img src="/images/logolt.png"></a>
					@if(Auth::user())
				<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						  Loại phòng
						  <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							@foreach($categories as $category)
							<li><a href="category/{{ $category->id }}">{{ $category->name }}</a></li>
							@endforeach
						</ul>
					  </div>	
				<ul class="nav navbar-nav navbar-right">
				  <li><a class="btn btn-default" href="user/dangtin"><i class="fas fa-edit"></i>Đăng tin ngay</a></li>
				  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào! {{ Auth::user()->name }} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="user/profile">Thông tin chi tiết</a></li>
						<li><a href="user/dangtin">Đăng tin cho thuê</a></li>
						<li><a href="user/diennuoc">Thêm số điện nước</a></li>
						<li class="divider"></li>
						<li><a href="user/logout">Thoát</a></li>
					</ul>
				  </li>
				</ul>
					@else
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						  Loại phòng
						  <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							@foreach($categories as $category)
							<li><a href="category/{{ $category->id }}">{{ $category->name }}</a></li>
							@endforeach
						</ul>
					  </div>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="btn-dangtin" href="user/dangtin"><i class="fas fa-edit"></i> Đăng tin ngay</a></li>
						<li><a href="user/login" class="btn btn-outline-primary">Đăng Nhập</a></li>
						<li><a href="user/register" class="btn btn-outline-primary">Đăng Kí</a></li>
					</ul>
					@endif
			  </div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>	
		@yield('content')

	<div class="gap"></div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo-footer">
						<a href="/" title="Cổng thông tin số 1 về Dự án Bất động sản">
							<img src="/images/logolt.png">
						</a>
						<div style="padding-top: 10px;">
							<p>Dự án phát triển Website tìm kiếm và cho thuê phòng trọ</p>
							<p>Sinh viên thực hiện: Phạm Thanh Trường - Trần Gia Bảo</p>
							<p>Trường Đại học Công nghệ Thông tin & Truyền Thông Việt - Hàn, Đại học Đà Nẵng</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	
<script type="text/javascript" src="public/assets/toast/toastr.min.js"></script>
</body>
</html>
