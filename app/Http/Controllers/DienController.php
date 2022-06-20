<?php

namespace App\Http\Controllers;

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
        $list_sodien = DienModel::where('user_id', Auth::user()->id)->get();
        return view('admin.dien.index', [
            "dssodien"=>$list_sodien
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_phong = PhongTroModel::where('user_id', Auth::user()->id)->where('tinhtrang', '2')->get(); 
        $list_sodien = DienModel::where('user_id', Auth::user()->id)->first();
        // dd($list_phong);
        return view('admin.dien.create', [
            "phongtro"=>$list_phong,
            "dssodien"=>$list_sodien
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
        $sodien = new DienModel();
        $sodien->user_id = Auth::user()->id;
        $sodien->phongtro_id = $request->phongtro;
        $sodien->sodiencu = $request->sodiencu;
        $sodien->sodienmoi = $request->sodienmoi;
        $sodien->ngaylaysocu = $request->ngaylaycu;
        $sodien->ngaylaysomoi = $request->ngaylaymoi;
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

}
