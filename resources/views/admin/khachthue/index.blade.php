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
        <div class="clearfix"></div>
      </div> 
      <div class="x_content">

        <p>Bấm vào đây để tạo mới <a style="color:red" href="{{ route('khachthue.create') }}">Tạo</a></p>

        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">                
            <thead>
              <tr class="headings">
                <th>
                  <input type="checkbox" id="check-all" class="flat">
                </th>
                <th class="column-title">ID </th>
                <th class="column-title">Tên người thuê </th>
                <th class="column-title">Thuê phòng </th>
                <th class="column-title">Giá thuê </th>
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
              @foreach($khachthue as $khachthue)
              <tr class="even pointer">
                <td class="a-center ">
                  <input type="checkbox" class="flat" name="table_records">
                </td>
                <td class=" ">{{ $khachthue->id }}</td>
                <td class=" ">{{ $khachthue->name }}</td>
                <td class=" ">{{ $khachthue->phongtro->tenphong }}</td>
                <td class=" ">{{ number_format($khachthue->phongtro->gia) }} đ</td>
                <td class=" ">{{ number_format($khachthue->phongtro->tiendien) }} /kwh</td>
                <td class=" ">{{ number_format($khachthue->phongtro->tiennuoc) }} /m3</td>
                <td class=" ">
                  @if ($khachthue->tinhtrang==1)
                  <button type="button" class="btn btn-round btn-primary">Còn hợp đồng thuê</button>
                  @elseif ($khachthue->tinhtrang==2)
                  <button type="button" class="btn btn-round btn-info">Hết hợp đồng</button>
                  @endif
                </td>
                <td class=" "></td>
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