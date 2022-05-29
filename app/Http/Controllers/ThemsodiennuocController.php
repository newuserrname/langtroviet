<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ThemsodiennuocModel;
use App\User;
use App\District;
use App\Categories;
use App\Motelroom;

class ThemsodiennuocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_sodiennuoc = ThemsodiennuocModel::where('user_id', Auth::user()->id)->get();
        return view('admin/sodiennuoc/list', ['sodiennuoc'=>$list_sodiennuoc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myroom = Motelroom::where('user_id', Auth::user()->id)->get();
        return view('admin/sodiennuoc/create', ['myroom'=>$myroom]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'electric' => 'required|unique:numbereaw|max:255',
            'water' => 'required|max:255',
            'idroom' => 'required|max:255',
            'day' => 'required|max:255',

        ]);

        $sodiennuoc = new ThemsodiennuocModel();
        $sodiennuoc->electric = $data['electric'];
        $sodiennuoc->water = $data['water'];
        $sodiennuoc->user_id = Auth::user()->id;
        $sodiennuoc->motelroom_id = $data['idroom'];
        $sodiennuoc->day = $data['day'];

        // var_dump($data);
        // die();
        $sodiennuoc->save();

        return redirect() ->back();   
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
