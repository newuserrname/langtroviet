@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="{{ route('hopdong.index') }}">Danh sách hợp đồng thuê phòng trọ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tạo hợp đồng thuê phòng trọ</li>
        </ol>
	</div>
<!-- /page header -->

<div class="col-md-12">
    <div class="x_panel">
        <div class="x_title">
            <h2> Tạo hợp đồng thuê phòng trọ </h2>
            @if(session('thongbao'))
            <div class="alert bg-secondary">
                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                <span style="font-size:15px" class="badge badge-light">{{session('thongbao')}}</span>
            </div>
            @endif
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{ route('hopdong.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <div class="item form-group">
                    <label style="font-size: 23px" class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><span class="badge badge-light">1. Đại diện cho thuê phòng trọ (Bên A)</span></label>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ông(bà) <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="{{ Auth::user()->id }}" name="hotenbencn" required="required" value="{{ Auth::user()->name}}"class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Sinh ngày<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="birthday" class="date-picker form-control" name="ngaysinhcn" type="date" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nơi đăng ký hộ khẩu <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="diachicn" value="{{ Auth::user()->diachi }}" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">CMND số <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="last-name" name="cmndcn" value="{{ Auth::user()->cmnd }}" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày cấp<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="birthday" class="date-picker form-control" name="ngaycapcmndcn" type="date" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nơi cấp <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="noicapcmndcn" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Số điện thoại <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="last-name" name="sdtcn" required="required" value="{{ Auth::user()->phone }}" class="form-control">
                    </div>
                </div>

                <div class="item form-group">
                    <label style="font-size: 23px" class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><span class="badge badge-light">2. Bên thuê phòng trọ (Bên B)</span></label>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ông(bà) <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="hotenbenkt" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Sinh ngày<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="birthday" class="date-picker form-control" name="ngaysinhkt" type="date" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nơi đăng ký hộ khẩu <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="diachikt" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">CMND số <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="last-name" name="cmndkt" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày cấp<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input id="birthday" class="date-picker form-control" name="ngaycapcmndkt" placeholder="dd-mm-yyyy" type="date" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nơi cấp <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="noicapcmndkt" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Số điện thoại <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="last-name" name="sdtkt" required="required" class="form-control">
                    </div>
                </div>

                <br>
                <div class="item form-group">
                    <label style="font-size: 23px" class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><span class="badge badge-light">Thông tin phòng:</span></label>
                </div>
                <br>
                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Địa chỉ thuê phòng <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="diachiphong" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Giá <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" pattern="([0-9]{1,3}).([0-9]{1,3})" name="giaphong" required="required" class="form-control">
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-5">                        
                        <h4>đ/tháng</h4>                       
                      </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Hình thức thanh toán <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <select id="heard" name="phuongthucthanhtoan" class="form-control" required>
                            @foreach ($thanhtoan as $thanhtoan)
                            <option value="{{ $thanhtoan->id }}">{{ $thanhtoan->phuongthuc }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tiền điện <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="inputNumbers" step="0.01" name="tiendienphongtro" required="required" class="form-control">
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-5">                        
                        <h4>đ/kWh</h4>                       
                      </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tiền nước <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="inputNumbers" step="0.01" name="tiennuocphongtro" required="required" class="form-control">
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-5">                        
                        <h4>đ/m 3</h4>                       
                      </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tiền cọc <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="inputNumbers" step="0.01" name="tiendatcoc" required="required" class="form-control">
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-5">                        
                        <h4>đ</h4>                       
                      </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Giá trị hợp đồng <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-2 ">
                        <span>từ ngày</span>
                        <input type="date" id="last-name" name="tungay" required="required" class="form-control">
                    </div>
                    <div class="col-md-2 col-sm-2 ">
                        <span>đến ngày</span>
                        <input type="date" id="last-name" name="ngayhethan" required="required" class="form-control">
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" onclick="window.print();" type="button">Hủy</button>
                        <button type="submit" name="themhopdong" class="btn btn-success">Tạo</button>
                    </div>
                </div>

            </form>									
        </div>
    </div>
</div>
</div>

@endsection