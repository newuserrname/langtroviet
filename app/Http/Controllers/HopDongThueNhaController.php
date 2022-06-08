<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Motelroom;
use App\User;
use App\ThanhToanModel;
use App\HopDongThueNhaModel;

class HopDongThueNhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_hopdong = HopDongThueNhaModel::where('user_id', Auth::user()->id)->get();
        return view('admin.hopdong.index', ["listhopdong"=>$list_hopdong]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thanhtoan = ThanhToanModel::all();
        return view('admin.hopdong.create', ["thanhtoan"=>$thanhtoan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tthopdong = new HopDongThueNhaModel();

        $tthopdong->user_id = Auth::user()->id;
        $tthopdong->namecn = $request->hotenbencn;
        $tthopdong->ngaysinhcn = $request->ngaysinhcn;
        $tthopdong->hokhaucn = $request->diachicn;
        $tthopdong->cmndcn = $request->cmndcn;
        $tthopdong->ngaycapcmndcn = $request->ngaycapcmndcn;
        $tthopdong->noicapcmndcn = $request->noicapcmndcn;
        $tthopdong->sdtcn = $request->sdtcn;
        $tthopdong->namekt = $request->hotenbenkt;
        $tthopdong->ngaysinhkt = $request->ngaysinhkt;
        $tthopdong->hokhaukt = $request->diachikt;
        $tthopdong->cmndkt = $request->cmndkt;
        $tthopdong->ngaycapcmndkt = $request->ngaycapcmndkt;
        $tthopdong->noicapcmndkt = $request->noicapcmndkt;
        $tthopdong->sdtkt = $request->sdtkt;
        $tthopdong->diachi = $request->diachiphong;
        $tthopdong->gia = $request->giaphong;
        $tthopdong->thanhtoan_id = $request->phuongthucthanhtoan;
        $tthopdong->tiendien = $request->tiendienphongtro;
        $tthopdong->tiennuoc = $request->tiennuocphongtro;
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
        return view('admin.hopdong.banhopdong', ["showhopdong"=>$show_hopdong]);
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
}
