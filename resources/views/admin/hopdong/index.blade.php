@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Danh sách hợp đồng thuê phòng trọ</li>
        </ol>
	</div>
<!-- /page header -->
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Danh sách hợp đồng</h2>
        <div class="clearfix"></div>
      </div> 
      <div class="x_content">

        <p>Bấm vào đây để tạo hợp đồng mới <a style="color:red" href="{{ route('hopdong.create') }}">Tạo</a></p>

        <div class="table-responsive">
          <table class="table table-striped table-bordered dt-responsive nowrap">                
            <thead>
              <tr class="headings">
                <th class="column-title">Ngày tạo </th>
                <th class="column-title">Tên người thuê </th>
                <th class="column-title">Chi tiết</th>
                <th class="column-title">Tùy chọn</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($listhopdong as $list) 
              <tr class="even pointer">
                <td class=" ">{{ date("d/m/Y", strtotime($list->created_at)) }}</td>
                <td class=" ">{{ $list->phongchothue->khachthueone->name }}</td>
                <td class=" last"><a href="{{ route('hopdong.show', $list->id) }}">Mở</a></td>
                <td class=" last">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                      Tùy chọn
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Gia hạn hợp đồng</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Hủy hợp đồng</a>
                      <form method="POST" action="{{ route('hopdong.destroy', $list->id) }}">
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
</div>
@endsection