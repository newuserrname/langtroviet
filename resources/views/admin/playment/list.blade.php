<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <style>
        .tableStyle{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .tableStyle th{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #CCCCCC;
        }
        .tableStyle td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<!-- <table>
    <tr>
        <td align="center">
            <b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM </b>
        </td>
    </tr>
    <tr>
        <td>
            <b style="padding-left: 2.4em" >Độc lập - Tự do - Hạnh phúc</b>
        </td>
    </tr>
</table> -->

<table>
    <tr>
        <td width="80%">
            <tr>
                <td align="center"><b>Nhà trọ:...</b></td>
            </tr>
            <tr>
                <td align="left">Số điện thoại:...</td>
            </tr>
            <tr>
                <td align="left">Địa chỉ:...</td>
            </tr>
        </td>
    </tr>
</table>

<script>
window.onload = function () {
    window.print();
}
</script>

<table width="80%" align="center">
    <tr>
        <tr>
            <td align="center" height="50"><b>HÓA ĐƠN TIỀN ĐIỆN NƯỚC THÁNG , TIỀN PHÒNG THÁNG </b></td>
            <tr>
            <td align="center">ngày 123 tháng 456</td>
        </tr>
        </tr>
        <tr>
            <table align="center">
                <tr>
                    <td style="padding-right: 7em">Giá điện:</td>
                    <td> vnđ/1kWh</td>
                </tr>
                <tr>
                    <td>Giá nước:</td>
                    <td> vnđ/1m3</td>
                </tr>
            </table>
        </tr>
    </tr>
</table>
<br>
<table style="text-align: left;" align="center" class="tableStyle">
    <tr>
        <th style="text-align: center;" rowspan="6">Phòng:</th>
        <th>&nbsp</th>
        <th style="text-align: center;">Chỉ số cũ</th>
        <th style="text-align: center;">Chỉ số mới</th>
        <th style="text-align: center;">Đã dùng</th>
        <th style="text-align: center;">Thành tiền</th>
    </tr>
    <tr>
        <td>Tiền điện tháng</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Tiền nước tháng</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">Tiền phòng tháng - năm </td>
        <td>&nbsp</td>
    </tr>
    <tr>
        <td colspan="4"></td>
        <td>&nbsp</td>
    </tr>
    <tr>
        <td colspan="4" style="text-align: center;"><b> Tổng cộng </b></td>
        <td>&nbsp</td>
    </tr>
</table>
<p style="text-align: center;"><b>(Vui lòng thanh toán trước ngày 07 của tháng)</b></p>
<p style="text-align: center;text-decoration:underline;"><i class="fa fa-university" aria-hidden="true"></i>STK:</p>
<p style="text-align: center;color: red;">Nội dung chuyển khoản</p>
</body>
</html>