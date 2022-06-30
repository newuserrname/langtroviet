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
        <h2>Danh sách phòng đang cho thuê</h2>
        <div class="clearfix"></div>
      </div> 
      <div class="x_content">

        <p>Bấm vào đây để Nhập số điện mới <a style="color:red" href="{{ route('dientro.create') }}">thêm</a></p>

        <div class="table-responsive">
          <table class="table table-striped table-bordered dt-responsive nowrap">                
            <thead>
              <tr class="headings">
                <th class="column-title">Phòng </th>
                <th class="column-title">Người thuê </th>
                <th class="column-title">Liên hệ</th>
                <th class="column-title">Tùy chọn</th>
              </tr>
            </thead>

            <tbody>
            @foreach($hopdong as $dien)
              <tr class="even pointer">
                <td class=" ">{{ $dien->phongchothue->phongtro->tenphong }}</td>
                <td class=" ">{{ $dien->phongchothue->khachthueone->name }}</td>
                <td class=" ">{{ $dien->phongchothue->khachthueone->sdt }}</td>
                <td class=" ">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Thay đổi
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href=""><i class="fa fa-folder"></i> Chi tiết </a>
                    <a class="dropdown-item" href="{{ route('dientro.show', $dien->id) }}" ><i class="fa fa-pencil"></i> Nhập </a>
                    <!-- Button trigger modal -->
                  </div>
{{--                  <!-- Modal -->--}}
{{--                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                      <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                          <h5 class="modal-title" id="exampleModalLabel">Nhập số điện </h5>--}}
{{--                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                          </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">--}}

{{--                        </div>--}}
{{--                        <div class="modal-footer">--}}
{{--                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>--}}
{{--                          <button type="button" class="btn btn-primary">Lưu</button>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
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