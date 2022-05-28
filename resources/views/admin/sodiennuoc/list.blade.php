@extends('admin.layout.master')
@section('content2')
<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Số điện nước</li>
          </ol>
      </div>
<!-- /page header -->
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh sách số điện nước sử dụng <span class="badge badge-primary">{{$sodiennuoc->count()}}</span></h5>
						</div>

						<div class="panel-body">
							Các <code>số điện nước</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
						</div>
                        @if(session('thongbao'))
                        <div class="alert bg-warning">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Well done!</span>  {{session('thongbao')}}
						</div>
                        @endif
						<a href="{{ route('electricandwater.create') }}" class="btn btn-success">Thêm mới</a>
						<table class="table datatable-show-all">
							<thead>
								<tr class="bg-blue">
									<th>ID</th>
									<th>Số điện tiêu thụ (kWh)</th>
									<th>Số mước tiêu thụ (m3)</th>
									<th>Mã Phòng</th>
									<th>Ngày Thêm</th>
								</tr>
							</thead>
							<tbody>
								@foreach($sodiennuoc as $numbereaw)
								<tr>
									<td>{{$numbereaw->id}}</td>
									<td>{{$numbereaw->electric}} /kWh</td>
									<td>{{$numbereaw->water}} /m3</td>
									<td>{{$numbereaw->motelroom->coderoom}}</td>
									<td>{{ date("d/m/Y", strtotime($numbereaw->day)) }}</td>
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