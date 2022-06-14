@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Hóa đơn</li>
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

        <p>Bấm vào đây để tạo mới <a style="color:red" href="{{ route('hoadon.create') }}">Tạo</a></p>

        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">                
            <thead>
              <tr class="headings"> 
                <th class="column-title">ID </th>
                <th class="column-title">Tên người thuê </th>
                <th class="column-title">Phòng </th>
                <th class="column-title">Số người ở </th>
                <th class="column-title">Tiền trọ </th>
                <th class="column-title">Tiền điện </th>
                <th class="column-title">Tiền nước </th>
                <th class="column-title no-link last"><span class="nobr">Chi tiết</span>
                </th>           
              </tr>
            </thead>

            <tbody>
              
              <tr class="even pointer">
                <td class=" "></td>
                <td class=" "></td>
                <td class=" "></td>
                <td class=" "></td>
                <td class=" "></td>
                <td class=" last"><a href=""></a>
                </td>
              </tr>
              
            </tbody>          
          </table>
        </div>          
      </div>
    </div>
  </div>
 </div> 
@endsection