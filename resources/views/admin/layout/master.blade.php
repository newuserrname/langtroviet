<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang Quản Trị Phòng Trọ</title>

    <!-- Bootstrap -->
    <link href="/public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/admin" class="site_title"><i class="fa fa-home"></i><span> Phòng Trọ </span></a>
            </div>
            <div class="clearfix"></div>
              <br />
            <!-- sidebar menu -->
           @include('admin.layout.menu')
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        @include('admin.layout.nav')
        <!-- /top navigation -->
       <div class="right_col" role="main">
        <!-- Main content -->
        	@yield('content2')
		<!-- /Main content -->       
      </div>
    </div>
     <!-- footer content -->
     <footer>
      <div class="pull-right">
        ©2022 phát triển ứng dụng Đăng tin Tìm kiếm Phòng trọ by <a href="https://laravel.com/">20IT461 & 20IT303</a>
      </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content --> 
  </div>
    <!-- jQuery -->
    <script src="/public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js --> 
    <script src="/public/vendors/Chart.js/dist/Chart.js"></script>
    <!-- gauge.js -->
    <script src="/public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/public/vendors/Flot/jquery.flot.js"></script>
    <script src="/public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/public/vendors/moment/min/moment.min.js"></script>
    <script src="/public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/js/custom.js"></script>
    <script type="text/javascript"> 
      function date() {
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('daterealtime()',refresh)
        }
        function daterealtime() {
        var time = new Date()
        var format=time.getDate() + "/" + (time.getMonth()+1) + "/" + time.getFullYear();
        format = format + " - " +  time.getHours( )+ ":" +  time.getMinutes() + ":" +  time.getSeconds();
        document.getElementById('realtime').innerHTML = format;
        date();      
        }
      </script>
    <script type="text/javascript">
      function ChangeToSlug()
          {
              var slug;
           
              //Lấy text từ thẻ input title 
              slug = document.getElementById("slug").value;
              slug = slug.toLowerCase();
              //Đổi ký tự có dấu thành không dấu
                  slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                  slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                  slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                  slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                  slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                  slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                  slug = slug.replace(/đ/gi, 'd');
                  //Xóa các ký tự đặt biệt
                  slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                  //Đổi khoảng trắng thành ký tự gạch ngang
                  slug = slug.replace(/ /gi, "-");
                  //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                  //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                  slug = slug.replace(/\-\-\-\-\-/gi, '-');
                  slug = slug.replace(/\-\-\-\-/gi, '-');
                  slug = slug.replace(/\-\-\-/gi, '-');
                  slug = slug.replace(/\-\-/gi, '-');
                  //Xóa các ký tự gạch ngang ở đầu và cuối
                  slug = '@' + slug + '@';
                  slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                  //In slug ra textbox có id “slug”
              document.getElementById('convert_slug').value = slug;
          }   
  </>

  </body>
</html>
