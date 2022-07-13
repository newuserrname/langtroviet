@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
  <div class="breadcrumb-line">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Phòng trọ đang thuê</li>
    </ol>
  </div>
  <!-- /page header -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý phòng đang thuê</h2>
        <div class="nav navbar-right panel_toolbox">
          <h2><a class="btn btn-info" href="{{route('phongchothue.create')}}"><i class="fa fa-plus"> Nhập phòng khách thuê </i></a></h2>
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
            <th>PHÒNG</th>
            <th>TÊN KHÁCH THUÊ</th>
            <th>CHI TIẾT</th>
            <th>TÙY CHỌN</th>
          </tr>
          </thead>
          <tbody>
          @foreach($listkhachphong as $phongthue)
            <tr>
              <td>{{ $phongthue->phongtro->tenphong }}</td>
              <td>
               + {{ $phongthue->khachthueone->name }} <br>
                @if ($phongthue->khachthue2_id != 0)
                + {{ $phongthue->khachthuetwo->name }} <br>
                @endif
                @if ($phongthue->khachthue3_id != 0)
                + {{ $phongthue->khachthuethree->name }}
                @endif
              </td>
              <td>
                <span><a class="btn btn-outline-info btn-sm" href="{{ route('phongtro.show',$phongthue->id) }}">Chi tiết</a></span>
              </td>
              <td>
                <button type="button" class="btn btn-secondary  dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                  Lựa chọn
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href=""><i class="fa fa-edit"></i> Thay đổi </a>
                  <form method="POST" action="{{route('phongchothue.destroy',$phongthue->id)}}">
                    @method('DELETE')
                    @csrf
                    <button class="dropdown-item" href=""><i class="fa fa-trash-o"></i> Xóa</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
@endsection