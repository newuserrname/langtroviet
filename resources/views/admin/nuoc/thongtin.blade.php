@extends('admin.layout.master')
@section('content2')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="breadcrumb-line">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                <li class="breadcrumb-item"><a href="/admin/nuoctro">Danh sách số nước</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
            </ol>
        </div>
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chi tiết số nước </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Phòng</th>
                                        <th>Số người</th>
                                        <th>Số trước</th>
                                        <th>Số hiện tại</th>
                                        <th>Giá</th>
                                        <th>Ngày nhập</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($nuoc as $nuoc)
                                        <tr>
                                            <td>{{ $nuoc->hopdong->phongchothue->phongtro->tenphong }}</td>
                                            <td>{{ $nuoc->hopdong->phongchothue->khachthueone->name }}</td>
                                            <td>{{ $nuoc->sonuoccu }}</td>
                                            <td>{{ $nuoc->sonuocmoi }}</td>
                                            <td>{{ number_format($nuoc->gianuoc) }} đ</td>
                                            <td>{{date('d-m-Y', strtotime($nuoc->ngaynhap))}}</td>
                                            <td>{{ number_format(($nuoc->sonuocmoi - $nuoc->sonuoccu) * $nuoc->gianuoc) }} đ</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection