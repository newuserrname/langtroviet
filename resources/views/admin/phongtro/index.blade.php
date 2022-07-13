@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Phòng trọ</li>
        </ol>
	</div>
    <!-- /page header -->
    <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Quản lý phòng trọ</h2>
          <div class="nav navbar-right panel_toolbox">
            <h2><a class="btn btn-info" href="{{route('phongtro.create')}}"><i class="fa fa-plus"> Thêm phòng </i></a></h2>
          </div>
          @if(session('thongbao'))
            <div class="alert alert-success alert-dismissible " role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <strong>Thông báo!</strong> {{session('thongbao')}}.
            </div>
          @endif
          <div class="clearfix"></div>
          <div class="x_content">
            <button type="button" class="btn btn-warning">{{ $phongvip }}</button><b>:Phòng VIP</b>
            <button type="button" class="btn btn-info">{{ $phongthuong }}</button><b>:Phòng thường</b>
            <button type="button" class="btn btn-success">{{ $chothue }}</button><b>:Đang cho thuê</b>
            <button type="button" class="btn btn-secondary">{{ $conphong }}</button><b>:Còn phòng</b>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover jambo_table bulk_action">
            <thead>
            <tr>
              <th>PHÒNG</th>
              <th>GIÁ</th>
              <th>ĐỊA CHỈ</th>
              <th>DIỆN TÍCH</th>
              <th>TIỀN ĐIỆN</th>
              <th>TIỀN NƯỚC</th>
              <th>TÌNH TRẠNG</th>
              <th>TÙY CHỌN</th>
            </tr>
            </thead>
            <tbody>
            @foreach($listphongtro as $phong)
            <tr>
              <td>
                @if($phong->loaiphong==1)
                  <span class="btn btn-warning btn-sm">{{ $phong->tenphong }}</span>
                @elseif($phong->loaiphong==2)
                  <span class="btn btn-info btn-sm">{{ $phong->tenphong }}</span>
                @endif
              </td>
              <td>{{ number_format($phong->gia) }}</td>
              <td>{{ substr( $phong->diachi, 0, 43 ) }}...</td>
              <td>{{ $phong->dientich }}</td>
              <td>{{ number_format($phong->tiendien) }} /kWh</td>
              <td>{{ number_format($phong->tiennuoc) }} /m3</td>
              <td>
                @if($phong->tinhtrang==2)
                  <span class="btn btn-success btn-sm"> đang thuê </span>
                  @elseif($phong->tinhtrang==1)
                  <span class="btn btn-dark btn-sm"> trống </span>
                @endif
              </td>
              <td>
                <button type="button" class="btn btn-secondary  dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                  Lựa chọn
                </button>
                <div class="dropdown-menu">
                  @if($phong->tinhtrang==1)
                    <a class="dropdown-item" href="/admin/phongtro/chothue/{{$phong->id}}"><i class="fa fa-check-circle-o"></i> cho thuê</a>
                  @elseif($phong->tinhtrang==2)
                    <a class="dropdown-item" href="/admin/phongtro/conphong/{{$phong->id}}"><i class="fa fa-check-circle-o"></i> trống</a>
                  @endif
                    <a class="dropdown-item" href=""><i class="fa fa-edit"></i> Thay đổi </a>
                    <a class="dropdown-item" href=""><i class="fa fa-trash"></i> Xóa </a>
                </div>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          {{ $listphongtro->links() }}
      </div>
    </div>
</div>
@endsection