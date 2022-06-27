@extends('admin.layout.master')
@section('content2')

<!-- Main content -->
<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('dientro.index') }}">Danh sách số điện</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nhập số điện</li>
        </ol>
	</div>
<!-- /page header -->
<div class="x_panel">
    <div class="x_title">
        <h2>Nhập số điện</h2>
        @if(session('thongbao'))
        <div class="alert bg-secondary">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <h2><span class="badge badge-success">{{session('thongbao')}}</span></h2>
        </div>
        @endif
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br />
        <form method="POST" action="{{ route('dientro.store') }}" class="form-label-left input_mask">
            @csrf
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <select class="form-control has-feedback-left choose phongtro" name="phongtro" id="phongtro">
                    <option>chọn phòng</option>
                    @foreach($hopdong as $phong)
                    <option value="">{{$phong->phongchothue->phongtro->tenphong}}</option>
                    @endforeach
                </select>
                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
            </div>
            
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <select class="form-control has-feedback-left ngaylaycu choose" name="ngaylaycu" id="ngaylaycu">
                    <option>ngày</option>
                </select>
                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="date" class="form-control has-feedback-left" id="inputSuccess3" name="ngaylaymoi" placeholder="ngày lấy số mới">
                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>   
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <select class="form-control has-feedback-left sodiencu choose" name="sodiencu" id="sodiencu">
                    <option>số điện</option>
                </select>
                <span class="fa fa-plus-square form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="number" class="form-control has-feedback-left" id="inputSuccess5" name="sodienmoi" placeholder="số điện mới">
                <span class="fa fa-plus-square form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group row">
                <div class="col-md-6 col-sm-6  offset-md-6">
                    <button type="submit" class="btn btn-success">Nhập</button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var phong_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action);
            // alert(phong_id);
            // alert(_token);
            if (action=='phongtro') {
                result = 'ngaylaycu';
            } else {
                result = 'sodiencu';
            }
            $.ajax({
                url: '{{url('/admin/dientro/create/get-data')}}',
                method: 'POST',
                data: {action:action,phong_id:phong_id,_token:_token},
                success: function(data)
                {
                    $('#'+result).html(data);
                }
            });
        });
    })
</script> --}}
@endsection