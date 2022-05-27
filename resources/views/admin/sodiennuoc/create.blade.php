@extends('admin.layout.master')
@section('content2')					
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Thêm <small>Số điện nước</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a class="dropdown-item" href="#">Settings 1</a>
									</li>
									<li><a class="dropdown-item" href="#">Settings 2</a>
									</li>
								</ul>
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
									@foreach ($myroom as $mroom)
									<option class="form-control " value="{{ $mroom->id }}">{{ $mroom->coderoom }}</option>
									@endforeach		
									</select>							
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Số điện<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="number" name="electric" required="required" class="form-control">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Số nước<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="number" name="water" required="required" class="form-control ">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ngày thêm<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="number" name="day" required="required" class="form-control ">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">tháng<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="number" name="month" required="required" class="form-control ">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">năm<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="number" name="year" required="required" class="form-control ">
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