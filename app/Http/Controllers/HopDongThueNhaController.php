<?php

namespace App\Http\Controllers;

use App\TblDienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DateTime;
use App\Motelroom;
use App\User;
use App\ThanhToanModel;
use App\HopDongThueNhaModel;
use App\KhachThueModel;
use App\PhongTroModel;
use App\PhongChoThueModel;

class HopDongThueNhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_hopdong = HopDongThueNhaModel::where('chutro_id', Auth::user()->id)->get();

        return view('admin.hopdong.index', [
            "listhopdong"=>$list_hopdong,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thanhtoan = ThanhToanModel::all();
        $list_phongthue = PhongChoThueModel::where('chutro_id', Auth::user()->id)->get();
        return view('admin.hopdong.create', [
            "thanhtoan"=>$thanhtoan,
            "phongthue"=>$list_phongthue,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $json_dichvu = json_encode($request->dichvu, JSON_FORCE_OBJECT);

        $tthopdong = new HopDongThueNhaModel();
        $tthopdong->chutro_id = Auth::user()->id;
        $tthopdong->khachthue_id = $request->idkhachthue;
        $tthopdong->dichvu = $json_dichvu;
        $tthopdong->sodienbandau = $request->sodienbandau;
        $tthopdong->sonuocbandau = $request->sonuocbandau;
        $tthopdong->thanhtoan_id = $request->phuongthucthanhtoan;
        $tthopdong->tiencoc = $request->tiendatcoc;
        $tthopdong->tungay = $request->tungay;
        $tthopdong->denngay = $request->ngayhethan;


        $tthopdong->save();

        return redirect('admin/hopdong/create')->with('thongbao', 'tạo hợp đồng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_hopdong = HopDongThueNhaModel::find($id);
        return view('admin.hopdong.banhopdong', ["chitiet"=>$show_hopdong]);
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
        HopDongThueNhaModel::find($id)->delete();
        return redirect()->back()->with('thongbao', 'Đã xóa hợp đồng!');
    }
}
