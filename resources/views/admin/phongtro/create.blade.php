@extends('admin.layout.master')
@section('content2')
<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('phongtro.index') }}">Phòng trọ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Thêm phòng trọ</li>
        </ol>
	</div>
<!-- /page header -->
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Thêm phòng trọ</h2>
                @if(session('thongbao'))
                    <div class="alert alert-success alert-dismissible " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>Thông báo!</strong> {{session('thongbao')}}.
                    </div>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <form method="POST" action="{{ route('phongtro.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên phòng <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="tenphong" id="first-name" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Địa chỉ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="diachiphong" id="first-name" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Giá <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="giaphong" id="first-name" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Diện tích <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="dientichphong" id="first-name" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">tiền điện (/kWh)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" name="tiendien" class="form-control" type="number" name="middle-name">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">tiền nước (/m3)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" name="tiennuoc" class="form-control" type="number" name="middle-name">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">loại phòng <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <p>
                                Phòng VIP:
                                <input type="radio" class="flat" name="loaiphong" id="genderM" value="1" checked="" required />
                                Phòng thường:
                                <input type="radio" class="flat" name="loaiphong" id="genderF" value="2" />
                            </p>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">tình trạng <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <p>
                                Còn phòng:
                                <input type="radio" class="flat" name="tinhtrang" id="genderM" value="1" checked="" required />
                                Đã cho thuê:
                                <input type="radio" class="flat" name="tinhtrang" id="genderF" value="2" />
                            </p>
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