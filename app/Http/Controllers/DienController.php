<?php

namespace App\Http\Controllers;

use App\HopDongThueNhaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DienModel;
use App\PhongTroModel;

class DienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hopdong = HopDongThueNhaModel::where('chutro_id', Auth::user()->id)->get();
        return view('admin.dien.index', [
            "hopdong"=>$hopdong,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_hopdong = HopDongThueNhaModel::where('chutro_id', Auth::user()->id)->get();
        return view('admin.dien.create', [
            "hopdong"=>$list_hopdong,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $gethopdong = HopDongThueNhaModel::find($id);
        $sodien = new DienModel();
        $sodien->chutro_id = Auth::user()->id;
        $sodien->hopdong_id = $id;
        $sodien->sodiencu = $gethopdong->sodienbandau;
        $sodien->sodienmoi = $request->sodienmoi;
        $sodien->ngaynhap = $request->ngaynhap;
        $sodien->giadien = $request->giadien;
        $sodien->save();

        return redirect('admin/dientro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_nhapsodien = HopDongThueNhaModel::find($id);
        return view('admin.dien.create', ["chitiet"=>$id_nhapsodien]);
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
