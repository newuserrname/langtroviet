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
                <th class="column-title">Số người ở </th>
                <th class="column-title">Số điện cũ</th>
                <th class="column-title">Ngày lấy số điện cũ</th>
                <th class="column-title">Số điện mới</th>
                <th class="column-title">Ngày lấy số điện mới</th>        
              </tr>
            </thead>

            <tbody>
                @foreach ($dssodien as $dien)
              <tr class="even pointer">
                <td class=" ">{{ $dien->phongtro_id }}</td>
                <td class=" ">{{ $dien->id }}</td>
                <td class=" ">{{ number_format( $dien->sodiencu )}}</td>
                <td class=" ">{{ date('d/m/Y'), strtotime( $dien->ngaylaysocu )}}</td>
                <td class=" ">{{ number_format( $dien->sodienmoi )}}</td>
                <td class=" ">{{ date("d/m/Y"), strtotime( $dien->ngaylaysomoi ) }}</td>   
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