@extends('admin.layout.master')
@section('content2')
<!-- Main content -->
<div class="content-wrapper">
	<!-- Page header -->

		<div class="breadcrumb-line">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/admin">Admin</a></li>
				<li class="breadcrumb-item active" aria-current="page">Thống kê</li>
			  </ol>
		</div>
	</div>
		<!-- Quick stats boxes -->
		<div class="row">
			<div class="col-lg-4">

				<!-- Members online -->
				<div class="panel bg-teal-400">
					<div class="panel-body">
						<h3 class="no-margin">{{ $total_users_active }}</h3>
						Thành viên hoạt động
						<div class="text-muted text-size-small"> {{ $total_users_deactive }} bị khóa</div>
					</div>
					<div class="container-fluid">
						<div id="members-online"></div>
					</div>
				</div>
				<!-- /members online -->

			</div>

			<div class="col-lg-4">

				<!-- Motelroom -->
				<div class="panel bg-pink-400">
					<div class="panel-body">
						<h3 class="no-margin">{{ $total_rooms_approve }}</h3>
						Bất động sản đã duyệt
						<div class="text-muted text-size-small">trên tổng số {{ $total_rooms_approve + $total_rooms_unapprove }} Bất động sản đã đăng</div>
					</div>

					<div id="server-load"></div>
				</div>
				<!-- /current server load -->

			</div>

			<div class="col-lg-4">

				<!-- Today's report -->
				<a href="admin/report">
					<div class="panel bg-blue-400">
						<div class="panel-body">
							<h3 class="no-margin">{{ $total_report }}</h3>
							Báo cáo
							<div class="text-muted text-size-small">từ người dùng</div>
						</div>
						<div id="today-revenue"></div>
					</div>
				</a>
				<!-- /today's revenue -->

			</div>
		</div>
		<!-- /quick stats boxes -->
	</div>
</div>
@endsection