<?php

namespace App\Http\Controllers;
use App\DataVideo;

//ini request form stack over flow
//use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request;


class DataVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DataVideo.file_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       



        //dd($request->all());
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

         $data = new DataVideo;
          $data->keterangan = $request->keterangan;
          $data->file = $namaFile;

        $nm->move(public_path().'/video',$namaFile);
        $data->save();

       // return back()->with(['success' => 'Data baru  Berhasil Disimpan']);

        return view('halaman_sukses_upload_video')->with(['success' => 'Data baru  Berhasil Disimpan']);

       // return view('halaman_tampil',compact('data'))->with(['success' => 'Data baru  Berhasil Disimpan']);
    }

    public function tampil(){

        $data = DataVideo::all();

        return view('halaman_tampil',compact('data'));
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
