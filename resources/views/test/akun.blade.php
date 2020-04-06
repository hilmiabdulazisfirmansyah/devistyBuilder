@php
	function loginDapodikOnline(){
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
}
loginDapodikOnline();

function siswa($nama)
{
	$url = 'http://smkaloerwargakusumah.sch.id:5774/rest/Pengguna?_dc=1586161055129&nama='.$nama.'&entry_sekolah_id=07275a29-4663-4642-bee0-823762714895&sekolah_id=07275a29-4663-4642-bee0-823762714895&peran_id=90&aktif=%23IN0%2C1&callback=ptkgrid&page=1&start=0&limit=50';

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

@endphp

<!DOCTYPE html>
<html>
<head>
	<title>Peserta Didik </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="container">
@foreach (siswa($nama) as $row)
		
<div class="card" style="width: 18rem;display: inline-block;margin-left: 2rem;margin-top: 2rem">
  <img class="card-img-top" src="{{ asset('site/home/images/default-post-cover.png') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Akun Untuk Siswa</h5>
    <p class="card-text">Gunakan Akun ini untuk merubah Data Anda</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama: {{ $row['nama'] }} </li>
    <li class="list-group-item">Username : {{ $row['username'] }}</li>
  </ul>
  <div class="card-body">
    <a href="http://smkaloerwargakusumah.sch.id:5774" class="card-link">Login</a>
  </div>
</div>

@endforeach
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>