@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Danh sách số điện</li>
        </ol>
	</div>
<!-- /page header -->
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Danh sách phòng </h2>
        @if(session('thongbao'))
          <div class="alert alert-success alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Thông báo!</strong> {{session('thongbao')}}.
          </div>
        @endif
        <div class="clearfix"></div>
      </div> 
      <div class="x_content">

        <div class="table-responsive">
          <table class="table table-striped table-bordered dt-responsive nowrap">                
            <thead>
              <tr class="headings">
                <th class="column-title">Phòng </th>
                <th class="column-title">Người thuê </th>
                <th class="column-title">Số điện ban đầu </th>
                <th class="column-title">Liên hệ</th>
                <th class="column-title">Tùy chọn</th>
              </tr>
            </thead>

            <tbody>
            @foreach($hopdong as $dien)
              <tr class="even pointer">
                <td class=" ">{{ $dien->phongchothue->phongtro->tenphong }}</td>
                <td class=" ">{{ $dien->phongchothue->khachthueone->name }}</td>
                <td class=" ">{{ $dien->sodienbandau }}</td>
                <td class=" ">{{ $dien->phongchothue->khachthueone->sdt }}</td>
                <td class=" ">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Lựa chọn
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('dientro.edit', $dien->id) }}" ><i class="fa fa-pencil"></i> Nhập </a>
                    <a class="dropdown-item" href="{{ route('dientro.show', $dien->id) }}"><i class="fa fa-folder"></i> Chi tiết </a>
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
</div>
@endsection