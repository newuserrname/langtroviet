@extends('admin.layout.master')
@section('content2')
<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Danh sách phòng trọ</li>
          </ol>
      </div>
<!-- /page header -->
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh sách các Phòng trọ <span class="badge badge-primary">{{$motelrooms->count()}}</span></h5>
						</div>

						<div class="panel-body">
							Các <code>phòng trọ</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
						</div>
                        @if(session('thongbao'))
                        <div class="alert bg-success">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Well done!</span>  {{session('thongbao')}}
						</div>
                        @endif
						<table class="table datatable-show-all">
							<thead>
								<tr class="bg-blue">
									<th>ID</th>
									<th>Tiêu đề</th>
									<th>Danh mục</th>
									<th>Giá phòng</th>
									<th>Trạng thái</th>
									<th class="text-center"><i class="fa fa-bars"></i></th>
								</tr>
							</thead>
							<tbody>
								@foreach($motelrooms as $room)
								<tr>
									<td>{{$room->id}}</td>
									
									<td>
										<div style="width: 300px;
										height: 50px;">
										<a style="display:-webkit-box;
										overflow:hidden;
										text-overflow:ellipsis;
										-webkit-line-clamp: 1;
										-webkit-box-orient:vertical;" href="/phongtro/{{$room->slug}}">{{$room->title}}</a>
										</div>
									</td>
									<td>{{$room->category->name}}</td>
									<td>{{$room->price}}</td>
									<td>
										@if($room->approve == 1)
											<span class="btn btn-success">Đã kiểm duyệt</span>
										@elseif($room->tinhtrang == 0)
											<span class="btn btn-danger">Chờ Phê Duyệt</span>
										@endif
									</td>
									<td class="text-center">	
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
											  Thay đổi
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
												@if($room->approve == 1)
											<button class="dropdown-item" type="button">
												<a href="/admin/motelrooms/unapprove/{{$room->id}}"><i class="fa fa-check-circle-o"></i> Bỏ kiểm duyệt</a></button>
												@elseif($room->tinhtrang == 0)
											<button class="dropdown-item" type="button">
												<a href="/admin/motelrooms/approve/{{$room->id}}"><i class="fa fa-remove"></i> Kiểm duyệt</a></button>
												@endif
											<button class="dropdown-item" type="button">
												<a href="/admin/motelrooms/del/{{$room->id}}"><i class="fa fa-trash-o"></i> Xóa</a></button>
											</div>
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