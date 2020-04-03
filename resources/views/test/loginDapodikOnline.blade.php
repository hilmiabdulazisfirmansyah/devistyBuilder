@extends('layouts.adminLTE')

@php
function loginDapodikOnline(){
	$ip_dapodik = 'smkaloer.online';
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
}
// end loginDapodikOnline
// 
// Start Grab
function siswa($nama)
{
	$ip_dapodik = 'smkaloer.online';
	$url = 'http://'.$ip_dapodik.':5774/rest/PesertaDidik?_dc=1583223205047&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=1000000&ascending=nama&page=1&start=0';

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
		return $data['rows'];
	}

}

// dd(siswa());
@endphp

@php
loginDapodikOnline(); //koneksi ke Dapodik
@endphp

@section('css')
@include('layouts.css.adminLTE')
@endsection

@section('content')
<div class="container-fluid">

		@foreach (siswa() as $siswa)
	<div class="row">
		<div class="card bg-light">
			<div class="card-header text-muted border-bottom-0">
				Biodata Siswa
			</div>
			<div class="card-body pt-0">
				<div class="row">
					<div class="col-12">
						<h2 class="lead"><b>{{ $siswa['nama'] }}</b></h2>
						<p class="text-muted text-sm"></p>
						<ul class="ml-4 mb-0 fa-ul text-muted">
							<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>{{ $siswa['alamat_jalan'] }} {{ $siswa['rt'] }} {{ $siswa['rw'] }} {{ $siswa['desa_kelurahan'] }}</li>

							<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>No Hp: {{$siswa['nomor_telepon_seluler'] }}</li>
						</ul>
					</div>
					<div class="col-5 text-center">
						<img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<div class="text-right">
					<a href="#" class="btn btn-sm btn-primary">
						<i class="fas fa-user"></i> Edit Profil
					</a>
				</div>
			</div>
		</div>
		<!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->

		<!-- right col -->
	</div>
		@endforeach
	<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection

@section('js')
@include('layouts.js.adminLTE')
@endsection