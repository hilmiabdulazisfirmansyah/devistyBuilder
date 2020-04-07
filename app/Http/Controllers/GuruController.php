<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guru;

class GuruController extends Controller
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
        //
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
    public function edit($guru)
    {
        $data = Guru::where('ptk_terdaftar_id',$guru)->get();
        return $data[0];
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
    public function destroy($guru)
    {
        $guru = Guru::where('ptk_terdaftar_id',$guru);
        $guru->delete();

        return response()->json([
            'success' => 'Data Berhasil Dihapus'
        ]);
    }

    public function tarik(){

        $ip_dapodik = 'smkaloerwargakusumah.sch.id';
        $username = 'dedeheryanto15@gmail.com';
        $password = 'Samrat235';
        $semester_id = '20192';

        $url = 'http://'.$ip_dapodik.':5774/login';
        $cookie = "cookie.txt";
        if (file_exists($cookie)) {
            unlink($cookie);
        }

        $postfields = 'username=dedeheryanto15%40gmail.com&password=Samrat235&semester_id=20192';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_COOKIEJAR => $cookie,
            CURLOPT_COOKIEFILE => $cookie,
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_POST => 1,
            CURLOPT_REFERER => $url,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($response) {

        }else{
            echo "Koneksi Gagal";
        }


        $ip_dapodik = 'smkaloerwargakusumah.sch.id';

        $url = 'http://'.$ip_dapodik.':5774/rest/Ptk?_dc=1574193396908&entry_sekolah_id=07275a29-4663-4642-bee0-823762714895&ptk_module=ptkterdaftar&tahun_ajaran_id=2019&jenis_gtk=guru&limit=1000000&penugasan_null=2&page=1&start=0';

        $cookie = "cookie.txt";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEFILE => $cookie,
            CURLOPT_POST => 0,
        ));

        $data = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($data, true);
            $data = $data['rows'];
        }

        
        Guru::truncate(); //empty table

        foreach ($data as $guru) {
            # code...
            Guru::insert($guru);
        }

        return 'sukses';
    }
}
