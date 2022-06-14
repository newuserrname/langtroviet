@extends('admin.layout.master')
@section('content2')

<!-- top tiles -->
<div class="row" style="display: inline-block;" >
  <div class="tile_count">
    <div class="col-md-3 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Phòng trọ</span>
      <div class="count">{{ $phong_tro }}</div>
    </div>
    <div class="col-md-3 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Người thuê trọ</span>
      <div class="count">{{ $khach_thue }}</div>
      <span class="count_bottom"><i class="green">trên tổng số {{ $phong_tro }} phòng trọ </i></span>
    </div>
    <div class="col-md-3 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Tin đã đăng</span>
      <div class="count">{{ $tin_da_dang }}</div>
    </div>
    <div class="col-md-3 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Hóa đơn</span>
      <div class="count green">0</div>
      <span class="count_bottom"><i class="green">0% </i></span>
    </div>
    <div class="col-md-3 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Tiền phòng đã thu</span>
      <div class="count">0</div>
      <span class="count_bottom"><i class="blue">0% </i></span>
    </div>
    <div class="col-md-3 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Tiền phòng chưa thu</span>
      <div class="count">0</div>
      <span class="count_bottom"><i class="red">0% </i></span>
    </div>
    <div class="col-md- col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Tổng số lượt xem tin</span>
      <div class="count">{{ $tong_luot_xem }}</div>
      <span class="count_bottom"><i class="green">trên tổng số {{ $tin_da_dang }} tin </i></span>
    </div>
  </div>
</div>
  <!-- /top tiles -->
  {{-- Dashboard 1 --}}
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="dashboard_graph">

        <div class="x_title">
          <h2>Thống kê <small>Chi tiết</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <table class="" style="width:50%">
          <tr>
            <th style="width:30%;">
              <p>Biểu đồ chi tiết</p>
            </th>
            <th>
              <div class="col-lg-7 col-md-7 col-sm-7 ">
                <p class="">Mô tả</p>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 ">
                <p class="">Chi tiết</p>
              </div>
            </th>
          </tr>
          <tr>
              <td>
                  <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                </td>
            <td>
              <table class="tile_info">
                <tr>
                  <td>
                    <p><i class="fa fa-square blue"></i>Người thuê trọ </p>
                  </td>
                  <td>{{ $khach_thue }}</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square" style="color:#97FFFF"></i>Tin đã đăng </p>
                  </td>
                  <td>{{ $tin_da_dang }}</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square" style="color:#00BFFF"></i>Số lượt xem </p>
                  </td>
                  <td>{{ $tong_luot_xem }}</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square" style="color:#00FF00"></i>Yêu cầu </p>
                  </td>
                  <td>{{ $yeu_cau }}</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square" style="color:#FF3030"></i>Hợp đồng </p>
                  </td>
                  <td>{{ $hop_dong }}</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        </div>

        <div class="clearfix"></div>
      </div>
    </div>

  </div>
  <br />

  {{-- Dashborad 2 --}}
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-6">
            <h3>Thống kê <small>Chi tiết</small></h3>
          </div>
          <div class="col-md-6">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
              <span>{{ date("d/m/Y") }}</span> <b class="caret"></b>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-sm-9 ">
          <div id="chart_plot_01" class="demo-placeholder"></div>
        </div>
        <div class="col-md-3 col-sm-3  bg-white">
          <div class="x_title">
            <h2>Top Campaign Performance</h2>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 ">
            <div>
              <p>Facebook Campaign</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Twitter Campaign</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 ">
            <div>
              <p>Conventional Media</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Bill boards</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="clearfix"></div>
      </div>
    </div>

  </div>
  <br />
  <script type="text/javascript">
    var tindadang ='{!! json_encode($tin_da_dang) !!}';
    var luotxem ='{!! json_encode($tong_luot_xem) !!}';
    var yeucau ='{!! json_encode($yeu_cau) !!}';
    var hopdong = '{!! json_encode($hop_dong)}';
  </script>
@endsection