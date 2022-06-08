<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <style>
    </style>
    <script>
    window.onload = function () {
        window.print();
    }   
    </script>
</head>
<body>

<table align="center" cellspacing="">
    <tr>
        <td align="center">
            <b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM </b>
        </td>
    </tr>
    <tr>
        <td>
            <b style="padding-left: 3.5em" >Độc lập - Tự do - Hạnh phúc</b>
        </td>
    </tr>
    <tr>
        <td align="center" height="50"><b style="font-size:20px"> HỢP ĐỒNG THUÊ TRỌ </b></td>
    </tr>
</table>

<table width="90%" align="center">
    <tr>
        <td>Hôm nay ngày {{ date('d') }} tháng {{ date('m') }} năm {{ date('Y') }} </td>
    </tr>
    <tr>
        <td>Tại địa chỉ........................................................................... </td>
    </tr>
</table>
<br>
<table width="90%" align="center">
    <tr>
        <td style="font-weight: bold;">Chúng tôi gồm</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>1. Đại diện bên cho thuê phòng trọ (Bên A):</td>
    </tr>
    <tr>
        <td>Ông/bà:&nbsp;&nbsp;{{ $showhopdong->namecn }}</td>
        
    </tr>
    <tr>
        <td>Sinh ngày:&nbsp;&nbsp;{{ date("d/m/Y", strtotime($showhopdong->ngaysinhcn)) }}</td>
    </tr>
    <tr>
        <td>Nơi đăng ký HK:&nbsp;&nbsp;{{ $showhopdong->hokhaucn }}</td>
    </tr>
    <tr>
        <td>CMND số:&nbsp;&nbsp;{{ $showhopdong->cmndcn }}</td>
    </tr>
    <tr>
        <td>Nơi cấp: {{ $showhopdong->noicapcmndcn }}</td>
    </tr>
    <tr>
        <td>Cấp ngày:&nbsp;&nbsp;{{ date('d/m/Y'), strtotime($showhopdong->ngaycapcmndcn) }}</td>
    </tr>
    <tr>
        <td>Số điện thoại:&nbsp;&nbsp;{{ $showhopdong->sdtcn }}</td>
    </tr>
    <tr>
        <td>2. Bên thuê phòng trọ (Bên B):</td>
    </tr>
    <tr>
        <td>Ông/bà:&nbsp;&nbsp;{{ $showhopdong->namekt }}</td>
        
    </tr>
    <tr>
        <td>Sinh ngày:&nbsp;&nbsp;{{ date("d/m/Y", strtotime($showhopdong->ngaysinhkt)) }}</td>
    </tr>
    <tr>
        <td>Nơi đăng ký HK:&nbsp;&nbsp;{{ $showhopdong->hokhaukt }}</td>
    </tr>
    <tr>
        <td>CMND số:&nbsp;&nbsp;{{ $showhopdong->cmndkt }}</td>
    </tr>
    <tr>
        <td>Nơi cấp: {{ $showhopdong->noicapcmndkt }}</td>
    </tr>
    <tr>
        <td>Cấp ngày:&nbsp;&nbsp;{{ date('d/m/Y'), strtotime($showhopdong->ngaycapcmndkt) }}</td>
    </tr>
    <tr>
        <td>Số điện thoại:&nbsp;&nbsp;{{ $showhopdong->sdtkt }}</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><b>Sau khi bàn bạc trên tinh thần dân chủ, hai bên cùng có lợi,<br>cùng thống nhất như sau:<b></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>Bên A đồng ý cho bên B thuê 1 phòng ở tại địa chỉ: <br> {{ $showhopdong->diachi }} </td>
    </tr>
    <tr>
        <td>Giá thuê:&nbsp;&nbsp;{{ number_format($showhopdong->gia) }} đ/tháng</td>
    </tr>
    <tr>
        <td>Hình thức thanh toán:&nbsp;&nbsp;{{ $showhopdong->thanhtoan->phuongthuc }}</td>
    </tr>
    <tr>
        <td>Tiền điện:&nbsp;&nbsp;{{ number_format($showhopdong->tiendien) }} đ/kwh <br> tính theo chỉ số công tơ, thanh toán vào cuối các tháng.</td>
    </tr>
    <tr>
        <td>Tiền nước:&nbsp;&nbsp;{{ number_format($showhopdong->tiennuoc) }} đ/người thanh toán vào đầu các tháng. </td>
    </tr>
    <tr>
        <td>Tiền đặt cọc:&nbsp;&nbsp;{{ number_format($showhopdong->tiencoc) }} đ</td>
    </tr>
    <tr>
        <td>Hợp đồng có giá trị kể từ ngày:&nbsp;&nbsp;{{ date('d/m/Y'), strtotime($showhopdong->tungay) }} 
            &nbsp;&nbsp;đến ngày&nbsp;&nbsp;{{ date('d/m/Y'), strtotime($showhopdong->tungay) }}</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><b style="font-size:18px">TRÁCH NHIỆN CỦA CÁC BÊN<b></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>
            <b>* Trách nhiện của bên A:</b>
        </td>
    </tr>
    <tr>
        <td>- Tạo mọi điều kiện thuận lợi để bên B thực hiện theo hợp đồng.</td>
    </tr>
    <tr>
        <td>- Cung cấp nguồn điện, nước, wifi cho bên B sử dụng.</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>
            <b>* Trách nhiện của bên B:</b>
        </td>
    </tr>
    <tr>
        <td>- Thanh toán đầy đủ các khoản tiền theo đúng thỏa thuận.</td>
    </tr>
    <tr>
        <td>- Bảo quản các trang thiết bị và cơ sở vật chất của bên A trang bị cho ban đầu <br>
            (làm hỏng phải sửa, mất phải đền).</td>
    </tr>
    <tr>
        <td>- Không được tự ý sửa chữa, cải tạo cơ sở vật chất khi chưa được sự đồng ý của bên A.</td>
    </tr>
    <tr>
        <td>- Giữ gìn vệ sinh trong và ngoài khuôn viên của phòng trọ.</td>
    </tr>
    <tr>
        <td>- Bên B phải chấp hành mọi quy định của pháp luật Nhà nước và quy định của địa phương</td>
    </tr>
    <tr>
        <td>- Nếu bên B cho khách ở qua đêm thì phải báo và được sự đồng ý của chủ nhà <br>
            đồng thời phải chịu trách nhiệm về các hành vi vi phạm pháp luật của khách trong thời gian ở lại.</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><b style="font-size:18px">TRÁCH NHIỆN CHUNG<b></td>
    </tr>
    <tr>
        <td>- Hai bên phải tạo điều kiện cho nhau thực hiện hợp đồng.</td>
    </tr>
    <tr>
        <td>- Trong thời gian hợp đồng còn hiệu lực nếu bên nào vi phạm các điều khoản đã <br>
            thỏa thuận thì bên còn lại có quyền đơn phương chấm dứt hợp đồng; nếu sự vi phạm hợp <br>
            đồng đó gây tổn thất cho bên bị vi phạm hợp đồng thì bên vi phạm hợp đồng phải bồi thường thiệt hại.</td>
    </tr>
    <tr>
        <td>- Một trong hai bên muốn chấm dứt hợp đồng trước thời hạn thì phải báo trước cho bên kia 
            ít nhất 30 ngày và hai bên phải có sự thống nhất.</td>
    </tr>
    <tr>
        <td>- Bên A phải trả lại tiền đặt cọc cho bên B.</td>
    </tr>
    <tr>
        <td>- Bên nào vi phạm điều khoản chung thì phải chịu trách nhiệm trước pháp luật.</td>
    </tr>
    <tr>
        <td>- Hợp đồng được lập thành 02 bản có giá trị pháp lý như nhau, mỗi bên giữ một bản.</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <table width="90%" align="center">
        <tr>
            <td>ĐẠI DIỆN BÊN B</td>
            <td>ĐẠI DIỆN BÊN A</td>
        </tr>
    </table>        
</table>
</body>
</html>