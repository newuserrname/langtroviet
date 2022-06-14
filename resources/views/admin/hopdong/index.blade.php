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
                <th class="column-title">ID </th>
                <th class="column-title">Ngày tạo </th>
                <th class="column-title">Tên người thuê </th>
                <th class="column-title no-link last"><span class="nobr">Chi tiết</span>
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($listhopdong as $list) 
              <tr class="even pointer">
                <td class=" ">{{ $list->id }}</td>
                <td class=" ">{{ date("d/m/Y", strtotime($list->created_at)) }}</td>
                <td class=" ">{{ $list->hopdongkhach->name }}</td>
                <td class=" last"><a href="{{ route('hopdong.show', $list->id) }}">Mở</a>
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