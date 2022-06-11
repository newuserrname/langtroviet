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
                    <label style="font-size: 23px" class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><span class="badge badge-light">2. Bên thuê phòng trọ (Bên B)</span></label>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ông(bà) <span class="required">* id khách thuê</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <div class="col-md-6 col-sm-6 ">
                            <select id="heard" class="form-control" name="idkhachthue" required>
                                @foreach ($khachthue as $khachthue)
                                <option value="{{ $khachthue->id }}">{{ $khachthue->id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="item form-group">
                    <label style="font-size: 23px" class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><span class="badge badge-light">Thông tin phòng:</span></label>
                </div>
                <br>
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