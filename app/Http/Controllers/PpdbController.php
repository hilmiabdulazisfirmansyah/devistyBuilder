<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppdb;
use DB;

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
        $ppdb->asal_sekolah = $request->asal_sekolah;
        $ppdb->nama_ayah = $request->nama_ayah;
        $ppdb->nama_ibu = $request->nama_ibu;
        $ppdb->jurusan = $request->jurusan;
        $ppdb->save();

        $nomor_registrasi = $ppdb->id;

        return View('ppdb.sukses',compact('nomor_registrasi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ppdb)
    {
        switch ($ppdb) {
            case 'TKR 1':
            $xL = 40;
            $xP = 40;
            break;

            case 'TKR 2':
            $xL = 40;
            $xP = 40;
            break;
            
            default:
            $xL = 20;
            $xP = 20;
            break;
        }


        $laki2 = Ppdb::where('jurusan',$ppdb)->where('jenis_kelamin','L')->get()->count();
        $perempuan = Ppdb::where('jurusan',$ppdb)->where('jenis_kelamin','P')->get()->count();
        
        $kuota_L = $xL - $laki2;
        $kuota_P = $xP - $perempuan;

        if ($kuota_L <= 0) {
            $kuota_L = 'Sudah Penuh';
        }

        if ($kuota_P <= 0) {
            $kuota_P = 'Sudah Penuh';
        }

        $data = array('laki' => $kuota_L, 'perempuan' => $kuota_P);

        return $data;
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

    public function cari(Request $request)
    {

        $query = $request->get('query');
        if ($query == '') 
        {
            $data = Ppdb::all();
        }
        else
        {
            $data = DB::connection('smk')
            ->table('ppdb')
            ->where('nama', 'like', '%'.$query.'%')
            ->orWhere('id', 'like', '%'.$query.'%')
            ->get();
        }

        $total_row = $data->count();
        $no = 1;

        foreach ($data as $row) 
        {

            $output = '<tr><td>'.$no.'</td><td>'.$row->nama.'</td><td class="text-center">'.$row->asal_sekolah.'</td>
            <td class="text-center">'.$row->id.'</td><td style="text-align: center;"><button id="edit" type="button" class="btn btn-info fa fa-edit" data-toggle="modal" data-target="'.$row->id.'"></button><button id="hapus" type="button" class="btn btn-danger fas fa-trash-alt" data-id="'.$row->id.'"></button></td></tr>';
            $output[] = array('table_data' => $output);
            return $output;
        }


    }
}