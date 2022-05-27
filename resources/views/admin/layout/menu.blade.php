			<!-- menu profile quick info -->
			<div class="profile clearfix">
				<div class="profile_pic">
				  <img src="/public/uploads/avatars/{{ Auth::user()->avatar }}" alt="..." class="img-circle profile_img">
				</div>
				<div class="profile_info">
				  <span>Xin chào</span>
				  <h2>{{ Auth::user()->name }}</h2>
				</div>
			  </div>
			  <!-- /menu profile quick info -->
			<!-- /main sidebar --> 
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>Quản trị</h3>
      <ul class="nav side-menu">
        <li><a href="/admin/motelrooms/list"> <i class="fa fa-home"></i> Danh sách phòng trọ</a>
        </li>
        <li><a href="{{ route('categories.index') }}"> <i class="fa fa-th-list"></i> Danh sách loại phòng</a>
        </li>
        <li><a href="/admin/users/list"> <i class="fa fa-smile-o"></i> Danh sách người dùng </a>
        </li>
        <li><a href="/admin/users/list"> <i class="fa fa-users"></i> Danh sách người thuê trọ </a>
        </li>
        <li><a href="{{ route('payment.index') }}"> <i class="fa fa-cc-visa"></i> Thanh toán </a>
        </li>
        <li><a href="/admin/report"> <i class="fa fa-exclamation-triangle"></i> Báo cáo nội dung </a>
        </li>
        <li><a href="{{ route('electricandwater.create') }}"> <i class="fa fa-edit"></i> Số điện nước </a>
        </li>
        <li><a href="{{ route('billeaw.index') }}"> <i class="fa fa-list-ol"></i> Tiền điện nước </a>
        </li>
        <li><a href="/admin/thongke"> <i class="fa fa-tasks"></i> Thống kê </a>
        </li>
        <li><a href="/"> <i class="fa fa-laptop"></i> Đến trang chủ </a>
        </li>
      </ul>
    </div>
</div>
			<!-- /main sidebar -->