@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
  <div class="breadcrumb-line">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Khách thuê</li>
    </ol>
  </div>
  <!-- /page header -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý khách thuê</h2>
        <div class="nav navbar-right panel_toolbox">
          <h2><a class="btn btn-info" href="{{route('khachthue.create')}}"><i class="fa fa-plus"> Thêm khách thuê </i></a></h2>
        </div>
        @if(session('thongbao'))
          <div class="alert alert-success alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Thông báo!</strong> {{session('thongbao')}}.
          </div>
        @endif
        <div class="clearfix"></div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover jambo_table bulk_action">
          <thead>
          <tr>
            <th>HỌ & TÊN</th>
            <th>ẢNH 3x4</th>
            <th>SỐ ĐIỆN THOẠI</th>
            <th>TRẠNG THÁI</th>
            <th>TÙY CHỌN</th>
          </tr>
          </thead>
          <tbody>
          @foreach($khachthue as $khach)
            <tr>
              <td>{{ $khach->name }}</td>
              <td>
                <?php $array_img34 = json_decode($khach->hinhanhkhach, true) ?>
                <ul class="list-inline">
                  @foreach($array_img34 as $img34)
                    <li>
                      <img src="/public/uploads/khachthue/anhthe34/<?php echo $img34; ?>" class="avatar" alt="Avatar">
                    </li>
                  @endforeach
                </ul>
              </td>
              <td>{{ $khach->sdt }}</td>
              <td>
                @if($khach->tinhtrang==1)
                  <span class="btn btn-success btn-sm"><i class="fa fa-circle"></i></span>
                @elseif($khach->tinhtrang==2)
                  <span class="btn btn-dark btn-sm"><i class="fa fa-circle-o"></i></span>
                @endif
              </td>
              <td>
                <button type="button" class="btn btn-secondary  dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                  Lựa chọn
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('khachthue.show', $khach->id)}}"><i class="fa fa-folder"></i> Chi tiết </a>
                  <a class="dropdown-item" href="#" ><i class="fa fa-pencil"></i> Thay đổi  </a>
                  <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Xóa </a>
                  @if($khach->tinhtrang==1)
                    <a class="dropdown-item" href="/admin/khachthue/huyhoatdong/{{$khach->id}}"><i class="fa fa-lock"></i> Hủy hoạt động</a>
                  @elseif($khach->tinhtrang==2)
                    <a class="dropdown-item" href="/admin/khachthue/mohoatdong/{{$khach->id}}"><i class="fa fa-unlock"></i> Bật hoạt động</a>
                  @endif
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection