<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Menu;
use \App\Submenu;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('admin.show', ['admin' => 'menu']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute Harus Di isi',
        ];

        switch (request('menulevel_id')) {
            case '1':

            $data = $this->validate($request,[
                'nama'          =>  'required',
                'menulevel_id'  =>  'required',
                'icon'          =>  'required',
                'link' => 'required',

            ],$messages);

            break;

            case '2':
            $data = $this->validate($request,[
                'nama'          =>  'required',
                'menulevel_id'  =>  'required',
                'icon'          =>  'required',
                'submenu'       =>  'required',
                'submenulink'   =>  'required',

            ],$messages);

            default:
                # code...
            break;
        }

        $menu = new Menu;
        $submenu = new Submenu;

        $submenu->link      = $request->input('submenulink');
        $submenu->nama      = $request->input('submenu'); 
        $request->request->add(['submenu_id' => $submenu->id]);
        $submenu->save();
        

        $menu->submenu_id   = $submenu->id;
        $menu->menulevel_id = $request->input('menulevel_id');
        $menu->nama         = $request->input('nama');
        $menu->icon         = $request->input('icon');
        $menu->link         = $request->input('link');
        $menu->save();
        
        return back();

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
    public function edit($menu)
    {
        $menu = Menu::find($menu);
        $submenu = Submenu::find($menu->submenu_id);
        $data = [$menu,$submenu];
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $menu)
    {
        $menu                       =   Menu::find($menu);
        $submenu                    =   Submenu::find($menu->submenu_id);
        $menu->submenu_id           =   $submenu->id;
        $menu->nama                 =   request('nama');
        $menu->icon                 =   request('icon');
        $menu->link                 =   request('link');
        $submenu->nama              =   request('submenu');
        $submenu->link              =   request('submenulink');
        $submenu->submenuicon       =   request('submenuicon');

        $menu->save();
        $submenu->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($menu)
    {
        $menu = Menu::find($menu);
        $submenu = Submenu::where('id', $menu->submenu_id);
        
        $menu->delete();
        $submenu->delete();


        return response()->json([
            'success' => 'Data Berhasil Dihapus'
        ]);
    }
}
