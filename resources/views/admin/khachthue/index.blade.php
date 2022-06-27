@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Khách thuê trọ</li>
        </ol>
	</div>
<!-- /page header -->
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Danh sách khách thuê trọ</h2>
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
        <p>Bấm vào đây để tạo mới <a style="color:red" href="{{ route('khachthue.create') }}">Tạo</a></p>

        <div class="table-responsive">
          <table class="table table-striped projects">
            <thead>
            <tr>
              <th style="width: 1%">ID</th>
              <th style="width: 20%">Họ & tên</th>
              <th>Ảnh 3*4</th>
              <th>Số điện thoại</th>
              <th>Trạng thái</th>
              <th style="width: 20%">#Tùy chọn</th>
            </tr>
            </thead>
            <tbody>
            @foreach($khachthue as $khachthue)
            <tr>
              <td>{{ $khachthue->id }}</td>
              <td>
                <a>{{ $khachthue->name }}</a>
                <br />
                <small></small>
              </td>
              <td>
                <?php $array_img34 = json_decode($khachthue->hinhanhkhach, true) ?>
                <ul class="list-inline">
                  @foreach($array_img34 as $img34)
                  <li>
                    <img src="/public/uploads/khachthue/anhthe34/<?php echo $img34; ?>" class="avatar" alt="Avatar">
                  </li>
                  @endforeach
                </ul>
              </td>
              <td class="project_progress">
                {{ $khachthue->sdt }}
              </td>
              <td>
                @if ($khachthue->tinhtrang==1)
                  <h2><div type="button" class="badge badge-success"><i class="fa fa-circle"></i></div></h2>
                @elseif ($khachthue->tinhtrang==2)
                  <h2><div type="button" class="badge badge-secondary"><i class="fa fa-circle-o"></i></div></h2>
                @endif
              </td>
              <td>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                  Thay đổi
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('khachthue.show', $khachthue->id)}}"><i class="fa fa-folder"></i> Chi tiết </a>
                  <a class="dropdown-item" href="#" ><i class="fa fa-pencil"></i> Thay đổi  </a>
                  <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Xóa </a>
                  @if($khachthue->tinhtrang==1)
                    <a class="dropdown-item" href="/admin/khachthue/huyhoatdong/{{$khachthue->id}}"><i class="fa fa-lock"></i> Hủy hoạt động</a>
                  @elseif($khachthue->tinhtrang==2)
                    <a class="dropdown-item" href="/admin/khachthue/mohoatdong/{{$khachthue->id}}"><i class="fa fa-unlock"></i> Bật hoạt động</a>
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
  </div>
</div>
@endsection