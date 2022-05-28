@extends('admin.layout.master')
@section('content2')					
		<div class="row">
			<div class="breadcrumb-line">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
				  <li class="breadcrumb-item"><a href="{{ route('billeaw.index') }}">Danh sách giá điện nước</a></li>
				  <li class="breadcrumb-item active" aria-current="page">Tính giá điện nước</li>
				  </ol>
			  </div>
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Tính giá <small> điện nước mỗi tháng</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form method="POST" action="{{ route('electricandwater.store') }}">
								@csrf
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mã phòng<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<select name="idroom" class="form-control" class="form-control m-bot15">
									
									<option class="form-control " value=""></option>
											
									</select>							
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="item form-group">
								<div class="col-md-6 col-sm-6 offset-md-3">
									<button type="submit" class="btn btn-success">Thêm</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection