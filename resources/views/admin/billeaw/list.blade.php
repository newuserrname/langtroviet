@extends('admin.layout.master')
@section('content2')
<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Giá điện nước</li>
          </ol>
      </div>
<!-- /page header -->
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh sách giá điện nước sử dụng của mỗi phòng <span class="badge badge-primary">{{$sodiennuoc->count()}}</span></h5>
						</div>

						<div class="panel-body">
							Các <code>giá điện nước</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
						</div>
                        @if(session('thongbao'))
                        <div class="alert bg-warning">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Well done!</span>  {{session('thongbao')}}
						</div>
                        @endif
						<table class="table datatable-show-all">
							<thead>
								<tr class="bg-blue">
									<th>ID</th>
									<th>Giá điện (kWh)</th>
									<th>Giá mước tiêu thụ (m3)</th>
									<th>Phòng</th>
									<th>Từ ngày</th>
                                    <th>Đến ngày</th>
									<th class="text-center"><a href="{{ route('electricandwater.create') }}" class="btn btn-success">Thêm mới</a></th>
								</tr>
							</thead>
							<tbody>
								@foreach($sodiennuoc as $numbereaw)
								<tr>
									<td>{{$numbereaw->id}}</td>
									<td>{{$numbereaw->electric}} /kWh</td>
									<td>{{$numbereaw->water}} /m3</td>
									<td>{{$numbereaw->user->name}}</td>
									<td style="display:-webkit-box;
									overflow:hidden;
									text-overflow:ellipsis;
									-webkit-line-clamp: 1;
									-webkit-box-orient:vertical;
									width: 300px;height: 50px;">{{$numbereaw->motelroom->title}}</td>
									<td>{{$numbereaw->day}} / {{$numbereaw->month}} / {{$numbereaw->year}}</td>
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