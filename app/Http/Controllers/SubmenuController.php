<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmenuController extends Controller
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
        $menu_id = request('id');
        $data = request()->validate([
            'submenu'       =>  'required',
            'submenulink'   =>  'required',
            'submenuicon'   =>  'required',
        ]);

        $submenu = new \App\Submenu;
        $submenu->menu_id       = $menu_id;
        $submenu->nama          = request('submenu');
        $submenu->link          = request('submenulink');
        $submenu->submenuicon   = request('submenuicon');
        $submenu->save();

        return response()->json([
            'success' => 'Data Berhasil Dihapus'
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($submenu)
    {
        $data = \App\Submenu::find($submenu);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $submenu)
    {
        $submenu = \App\Submenu::find($submenu);
        $submenu->nama = $request->input('submenu');
        $submenu->link = $request->input('submenulink');
        $submenu->submenuicon = $request->input('submenuicon');
        $submenu->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($submenu)
    {
        $submenu = \App\Submenu::find($submenu);
        $submenu->delete();
        return response()->json([
            'success' => 'Data Berhasil Dihapus'
        ]);
    }
}
