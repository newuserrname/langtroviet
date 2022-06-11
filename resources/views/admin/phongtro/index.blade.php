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
        <h2>Danh sách phòng trọ</h2>
        <div class="clearfix"></div>
      </div> 
      <div class="x_content">

        <p>Bấm vào đây để tạo mới <a style="color:red" href="{{ route('phongtro.create') }}">Tạo</a></p>

        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">                
            <thead>
              <tr class="headings">
                <th>
                  <input type="checkbox" id="check-all" class="flat">
                </th>
                <th class="column-title">ID </th>
                <th class="column-title">Tên phòng </th>
                <th class="column-title">Mã phòng </th>
                <th class="column-title">Giá </th>
                <th class="column-title">Diện tích </th>
                <th class="column-title">Tiền điện </th>
                <th class="column-title">Tiền nước </th>
                <th class="column-title">Tình trạng </th>
                <th class="column-title">Tùy chỉnh </th>
                <th class="bulk-actions" colspan="8">
                  <a class="antoo" style="color:#fff; font-weight:500;">Đã chọn ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                </th>
              </tr>
            </thead>

            <tbody>
                @foreach ($listphongtro as $phongtro)
              <tr class="even pointer">
                <td class="a-center ">
                  <input type="checkbox" class="flat" name="table_records">
                </td>
                <td class=" ">{{ $phongtro->id }}</td>
                <td class=" ">{{ $phongtro->tenphong }}</td>
                <td class=" ">{{ $phongtro->post->id }}</td>
                <td class=" ">{{ number_format($phongtro->post->price )}} đ</td>
                <td class=" ">{{ $phongtro->post->area }} m2</td>
                <td class=" ">{{ number_format($phongtro->tiendien) }} /kwh</td>
                <td class=" ">{{ number_format($phongtro->tiennuoc) }} /m3</td>
                <td class=" ">
                    @if($phongtro->tinhtrang==1)
                    <button type="button" class="btn btn-round btn-primary">còn phòng</button>
                    @elseif($phongtro->tinhtrang==2)
                    <button type="button" class="btn btn-round btn-info">đã cho thuê</button>
                    @endif
                </td>
                <td class=" ">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Thay đổi
                  </button>
                  <div class="dropdown-menu">
                    @if($phongtro->tinhtrang==1)
                    <a class="dropdown-item" href="/admin/phongtro/chothue/{{$phongtro->id}}"><i class="fa fa-check-circle-o"></i> đã cho thuê</a>
                    @elseif($phongtro->tinhtrang==2)
                    <a class="dropdown-item" href="/admin/phongtro/conphong/{{$phongtro->id}}"><i class="fa fa-check-circle-o"></i> còn phòng</a>
                    @endif
                    <a class="dropdown-item" href="/admin/phongtro/{{$phongtro->id}}"><i class="fa fa-edit"></i> Thay đổi</a></button>
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