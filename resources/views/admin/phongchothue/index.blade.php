@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Phòng trọ đang cho thuê</li>
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

        <p>Bấm vào đây để tạo mới <a style="color:red" href="{{ route('phongchothue.create') }}">Tạo</a></p>

        <div class="table-responsive">
          <table class="table table-striped table-bordered dt-responsive nowrap">                
            <thead>
              <tr class="headings"> 
                <th class="column-title">ID </th>
                <th class="column-title">Tên người thuê </th>
                <th class="column-title">Phòng </th>
                <th class="column-title no-link last"><span class="nobr">Chi tiết</span></th>
              </tr>
            </thead>
            <tbody>
              @foreach($listkhachphong as $list)
              <tr class="even pointer">
                <td class=" ">{{ $list->id }}</td>
                <td class=" ">* {{ $list->khachthueone->name }} <br>
                  @if ($list->khachthue2_id != 0)
                    * {{ $list->khachthuetwo->name }} <br>
                    @endif
                  @if ($list->khachthue3_id != 0)
                    * {{ $list->khachthuethree->name }}
                    @endif
                </td>
                <td class=" ">{{ $list->phongtro->tenphong }}</td>
                <td class=" last"><a href="{{ route('phongchothue.show', $list->id) }}"><h2><span class="badge badge-info">Mở</span></h2></a>
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