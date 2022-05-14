@extends('admin.layout.master')
@section('content2')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="dashboard_graph">
      <div class="row x_title">
        <div class="col-md-6">
          <h3>Chào bạn! <small>Đây là trang quản lí phòng trọ</small></h3>
        </div>
      </div>
      <div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
          </ol>
      </div>
      <div class="clearfix"></div>
      {{-- thống kê tất cả --}}
 <div class="row" style="display: inline-block;" >
  <div class="tile_count">
    <div class="col-md-7 col-sm-9  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i>Thành viên hoạt động </span>
      <div class="count green"> {{ $total_users_active }} </div>
      <span class="count_bottom"><i class="green"> {{ $total_users_deactive }} </i> Thành viên bị khóa </span>
    </div>
    <div class="col-md-7 col-sm-9  tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Phòng trọ đã duyệt </span>
      <div class="count">  {{ $total_rooms_approve }}  </div>
      <span class="count_bottom"><i class="green"> {{ $total_rooms_approve + $total_rooms_unapprove }} </i> trên tổng số phòng trọ đã đăng</span>
    </div>
    <div class="col-md-7 col-sm-9  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Báo cáo </span>
      <div class="count"> {{ $total_report }} </div>
      <span class="count_bottom"><i class="green"></i> từ người dùng </span>
    </div>
  </div>
</div>
 {{-- thống kê tất cả --}}
    </div>
  </div>
</div>
<br />
 
@endsection