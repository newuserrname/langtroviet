<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\BilldiennuocModel;
use app\ThemsodiennuocModel;
use app\Motelroom;
use app\Categories;
use app\District;
use app\User;

use PDF;
class BilldiennuocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_billeaw = BilldiennuocModel::where('user_id', Auth::user()->id)->get();
        return view('admin.billeaw.list', ['list_bill' => $list_billeaw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.billeaw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function print_bill($checkout_code) {
        $pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($this->print_bill_convert($checkout_code));
		
		return $pdf->stream();
    }
    public function print_bill_convert($checkout_code) {

        $infor_billeaw = BilldiennuocModel::where('user_id', Auth::user()->id)->first();

        $output = '';

        $output.= 
        '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
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
                body{
                    font-family: DejaVu Sans;
                }
            </style>
        </head>
        <body>
        <table>
            <tr>
                <td width="80%">
                    <tr>
                        <td align="lef"><b>Nhà trọ:'.$infor_billeaw->user->name.'</b></td>
                    </tr>
                    <tr>
                        <td align="left">Số điện thoại: '.$infor_billeaw->motelroom->phone.'</td>
                    </tr>
                    <tr>
                        <td align="left">Địa chỉ:'.$infor_billeaw->motelroom->address.'</td>
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
                                <td align="center" height="50"><b>HÓA ĐƠN TIỀN ĐIỆN NƯỚC THÁNG '.date('m').', TIỀN PHÒNG THÁNG '.date('m').'</b></td>
                            </tr>
                            <tr>
                                <table align="center">
                                    <tr>
                                        <td>Giá điện:</td>
                                        <td> 2500 vnđ/1kWh</td>
                                    </tr>
                                    <tr>
                                        <td>Giá nước:</td>
                                        <td> 6000 vnđ/1m3</td>
                                    </tr>
                                </table>
                            </tr>
                        </tr>
                    </table>
                <br>
                <table style="text-align: left;" align="center" class="tableStyle">
                    <tr>
                        <th style="text-align: center;" rowspan="6">Phòng:'.$infor_billeaw->motelroom->coderoom.'</th>
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
                        <td>'.$infor_billeaw->electric.'</td>
                    </tr>
                    <tr>
                        <td>Tiền nước tháng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>'.$infor_billeaw->water.'</td>
                    </tr>
                    <tr>
                        <td colspan="4">Tiền phòng tháng '.date('m').' - năm '.date('Y').' </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td> /td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center;"><b> Tổng cộng </b></td>
                        <td> </td>
                    </tr>
                </table>
                <p style="text-align: center;"><b>In ngày '.date('d').' tháng '.date('m').' <</b></p>
                <p style="text-align: center;"><b>(Vui lòng thanh toán trước ngày 07 của tháng)</b></p>
                <p style="text-align: center;text-decoration:underline;"><i class="fa fa-university" aria-hidden="true"></i>STK:</p>
                <p style="text-align: center;color: red;">Nội dung chuyển khoản</p>
                </body>
                </html>
                ';                   
                
        return $output;
    }
}
