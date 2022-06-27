<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PhongTroModel;
use App\Motelroom;
use App\KhachThueModel;

class PhongTroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_phongtro = PhongTroModel::where('chutro_id', Auth::user()->id)->get();
        return view('admin.phongtro.index' , [
            "listphongtro"=>$list_phongtro,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phongtro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $maphong = "PT" . "-" . date('dis');

        $phongtro = new PhongTroModel();
        $phongtro->chutro_id = Auth::user()->id;
        $phongtro->tenphong = $request->tenphong;
        $phongtro->diachi = $request->diachiphong;
        $phongtro->gia = $request->giaphong;
        $phongtro->dientich = $request->dientichphong;
        $phongtro->tiendien = $request->tiendien;
        $phongtro->tiennuoc = $request->tiennuoc;
        $phongtro->tinhtrang = $request->tinhtrang;

        $phongtro->save();
        return redirect('admin/phongtro/create')->with('thongbao','phòng đã được tạo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list_khachthue = KhachThueModel::where('phongthue_id', $id)->get();
        // var_dump($list_khachthue);
        return view('admin.phongtro.khachdangthue', [
            "khachdangthue"=>$list_khachthue
        ]);
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
    public function conphong($id) {
        $room = PhongTroModel::find($id);
        $room->tinhtrang = 1;
        $room->save();
        return redirect('admin/phongtro/')->with('thongbao','Đã thay đổi ');
      }
  
    public function chothue($id) {
        $room = PhongTroModel::find($id);
        $room->tinhtrang = 2;
        $room->save();
        return redirect('admin/phongtro/')->with('thongbao','Đã thay đổi ');
      }
    
    public function conhopdong($id) {
        $hopdong = KhachThueModel::find($id);
        $hopdong->tinhtrang = 1;
        $hopdong->save();
        return redirect('admin/phongtro/');
    }
    public function hethopdong($id) {
        $hopdong = KhachThueModel::find($id);
        $hopdong->tinhtrang = 2;
        $hopdong->save();
        return redirect('admin/phongtro/');
    }
    
    public function dathanhtoan($id) {
        $hoadon = KhachThueModel::find($id);
        $hoadon->hoadon = 1;
        $hoadon->save();
        return redirect('admin/phongtro/');
    }
    public function chuathanhtoan($id) {
        $hoadon = KhachThueModel::find($id);
        $hoadon->hoadon = 2;
        $hoadon->save();
        return redirect('admin/phongtro/');
    }
}
