@extends('admin.layout.master')
@section('content2')

<div class="content-wrapper">
	<div class="breadcrumb-line">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('phongchothue.index') }}">Phòng trọ đang cho thuê</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nhập mới phòng cho thuê</li>
        </ol>
	</div>
<!-- /page header -->

</div>

@endsection