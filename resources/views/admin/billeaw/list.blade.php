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
							<h5 class="panel-title">Danh sách giá điện nước sử dụng của mỗi phòng <span class="badge badge-primary">{{ $list_bill->count() }}</span></h5>
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
						<a href="{{ route('billeaw.create') }}" hreftype="button" class="btn btn-success">Tính tiền</a>
						<table class="table datatable-show-all">
							<thead>
								<tr class="bg-blue">
									<th>ID</th>
									<th>Giá điện (kWh)</th>
									<th>Giá mước tiêu thụ (m3)</th>
									<th>Mã Phòng</th>
									<th>Từ ngày</th>
                                    <th>Đến ngày</th>
									<th>In hóa đơn</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_bill as $bill)
								<tr>
									<td>{{ $bill->id }}</td>
									<td>{{ number_format($bill->electric)}}</td>
									<td>{{ number_format($bill->water) }}</td>
									<td>{{ $bill->motelroom->coderoom }}</td>
									<td>{{ date("d/m/Y", strtotime($bill->tungay)) }}</td>
									<td>{{ date("d/m/Y", strtotime($bill->denngay)) }}</td>
									<td><a href="{{ route('payment.index') }}"><i class="fa fa-print"></i></a></td>
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