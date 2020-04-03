<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppdb;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('ppdb.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new Ppdb;
        $ppdb->nama = $request->nama;
        $ppdb->alamat = $request->alamat;
        $ppdb->tempat_lahir = $request->tempat_lahir;
        $ppdb->tanggal_lahir = $request->tanggal_lahir;
        $ppdb->jenis_kelamin = $request->jenis_kelamin;
        $ppdb->agama = $request->agama;
        $ppdb->no_hp = $request->no_hp;
        $ppdb->alamat_sekolah = $request->alamat_sekolah;
        $ppdb->nama_ayah = $request->nama_ayah;
        $ppdb->nama_ibu = $request->nama_ibu;
        $ppdb->jurusan = $request->jurusan;
        $ppdb->save();

        return View('ppdb.sukses');
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
