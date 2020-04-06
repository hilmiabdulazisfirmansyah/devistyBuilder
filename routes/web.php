<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::group(['prefix' => '/'], function(){
	Route::get('/', 'WebsiteController@index')->name('home');
	Route::get('mpd',function(){
		return view('mpd.login');
	});
	Route::get('dapo',function(){
		return view('dapo.index');
	});

	Route::get('classroom', function(){
		return view('google.classroom');
	});

	Route::resource('ppdb', 'PpdbController');
});


Route::resource('admin', 'AdminController')->middleware('auth');
Route::resource('users', 'AdminController');
Route::resource('guru', 'AdminController');


Route::group(['prefix' => 'admin'], function (){

	Route::group(['prefix' => 'settings'], function(){
		Route::resource('menus', 'MenuController');
		Route::resource('submenus', 'SubmenuController');
	});

	Route::group(['prefix' => 'users'], function(){
		Route::resource('users','UserController');
	});

	Route::resource('website', 'AdminWebsiteController');
	Route::resource('profiles', 'AdminWebsiteController');

	Route::resource('roles','RoleController');
	Route::GET('ppdb/cari','PpdbController@cari')->name('ppdb.cari');
});

Route::get('/dapodik', function(){
	return View('test.loginDapodikOnline');
});



Route::get('search', function(Request $request){
	$nama = $request->input('nama');
	return View('test.siswa',compact('nama'));
})->name('search');

Route::get('search/{nama}/edit', function($nama){
	$ip_dapodik = 'smkaloerwargakusumah.sch.id';

	$url = 'http://'.$ip_dapodik.':5774/rest/PesertaDidik?_dc=1583420967534&nama='.$nama.'&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=25&ascending=nama&page=1&start=0';

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
		return $data['rows'][0];
	}

	$url2 = 'http://'.$ip_dapodik.':5774/rest/PesertaDidikLongitudinal?_dc=1583488015929&peserta_didik_id='.$peserta_didik_id.'&page=1&start=0&limit=50&semester_id=20192';
	
	edit_siswa($ip_dapodik,$url2);

})->name('search.edit.nama');

Route::get('search/lainnya/{peserta_didik_id}/edit', function($peserta_didik_id){
	$ip_dapodik = 'smkaloerwargakusumah.sch.id';

	$url = 'http://'.$ip_dapodik.':5774/rest/PesertaDidikLongitudinal?_dc=1583488015929&peserta_didik_id='.$peserta_didik_id.'&page=1&start=0&limit=50&semester_id=20192';

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
		return $data['rows'][0];
	}

	// $url2 = 'http://'.$ip_dapodik.':5774/rest/PesertaDidikLongitudinal?_dc=1583488015929&peserta_didik_id='.$peserta_didik_id.'&page=1&start=0&limit=50';
	
	// edit_siswa($ip_dapodik,$url2);

})->name('search.edit.pd');

Route::PUT('siswa/{peserta_didik_id}', function(Request $request, $peserta_didik_id){

	$data1 = array(
		'tinggi_badan' => $request->input('tinggi_badan'), 
		'berat_badan' => $request->input('berat_badan'), 
		'lingkar_kepala' => $request->input('lingkar_kepala'), 
		'jarak_rumah_ke_sekolah' => $request->input('jarak_rumah_ke_sekolah'), 
		'jarak_rumah_ke_sekolah_km' => $request->input('jarak_rumah_ke_sekolah_km'), 
		'waktu_tempuh_ke_sekolah' => $request->input('waktu_tempuh_ke_sekolah'), 
		'menit_tempuh_ke_sekolah' => $request->input('menit_tempuh_ke_sekolah'), 
		'jumlah_saudara_kandung' => $request->input('jumlah_saudara_kandung'),
	);

	$data1_json = json_encode($data1);

	$data2 = array(
		'email' => $request->input('email'), 
		'no_kk' => $request->input('no_kk'), 
		'alamat_jalan' => $request->input('alamat_jalan'), 
		'rt' => $request->input('rt'), 
		'rw' => $request->input('rw'), 
		'desa_kelurahan' => $request->input('desa_kelurahan'), 
		'nomor_telepon_seluler' => $request->input('nomor_telepon_seluler'), 
	);

	$data2_json = json_encode($data2);

	$data3 = array(
		'peserta_didik_id' => $peserta_didik_id, 
		'semester_id' => 20192, 
		'tinggi_badan' => $request->input('tinggi_badan'), 
		'berat_badan' => $request->input('berat_badan'), 
		'jarak_rumah_ke_sekolah_km' => $request->input('jarak_rumah_ke_sekolah_km'),
		'jarak_rumah_ke_sekolah' => $request->input('jarak_rumah_ke_sekolah'),
		'waktu_tempuh_ke_sekolah' => $request->input('waktu_tempuh_ke_sekolah'),
		'menit_tempuh_ke_sekolah' => $request->input('menit_tempuh_ke_sekolah'),
		'jumlah_saudara_kandung' => $request->input('jumlah_saudara_kandung'),
		'lingkar_kepala' => $request->input('lingkar_kepala'),
	);

	$data2_json = json_encode($data2);

	$url1 = 'http://smkaloerwargakusumah.sch.id:5774/rest/PesertaDidikLongitudinal/'.$peserta_didik_id.'%3A20192?_dc=1583484799153';
	$url2 = 'http://smkaloerwargakusumah.sch.id:5774/rest/PesertaDidik/'.$peserta_didik_id.'?_dc=1583498668521&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=25&ascending=nama';
	$url3 = 'http://smkaloerwargakusumah.sch.id:5774/rest/PesertaDidikLongitudinal?_dc=1586157393554';

	$cookie = "cookie.txt";

	$ch2 = curl_init();

	curl_setopt($ch2, CURLOPT_URL, $url2);
	curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie);
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data2_json)));
	curl_setopt($ch2, CURLOPT_POSTFIELDS, $data2_json);

	$response = curl_exec($ch2);

	$ch1 = curl_init();

	curl_setopt($ch1, CURLOPT_URL, $url1);
	curl_setopt($ch1, CURLOPT_COOKIEFILE, $cookie);
	curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data1_json)));
	curl_setopt($ch1, CURLOPT_POSTFIELDS, $data1_json);

	$response = curl_exec($ch1);

	$ch3 = curl_init();

	curl_setopt($ch3, CURLOPT_URL, $url3);
	curl_setopt($ch3, CURLOPT_COOKIEFILE, $cookie);
	curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch3, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch3, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data1_json)));
	curl_setopt($ch3, CURLOPT_POSTFIELDS, $data1_json);

	$response = curl_exec($ch3);

	return back();

})->name('siswa.update');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('postingan','PostsController');

Route::get('icon', function(){
	return View('test.iconpicker');
});

Route::get('akun/{nama}', function($nama){
	$nama = $nama;
	return view('test.akun',compact('nama'));
});