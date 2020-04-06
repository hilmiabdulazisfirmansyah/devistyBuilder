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
// end loginDapodikOnline
// 
// Start Grab
function siswa($nama)
{
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
		return $data['rows'];
	}

}
loginDapodikOnline();
@endphp


@extends('layouts.adminLTE')


@section('css')
@include('layouts.css.adminLTE')
@endsection

@section('content')
@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editProfilSiswa', 'judul' => 'profil_siswa'])


<form action="{{ route('search') }}" method="GET">
	<div class="input-group input-group-sm">
		<input type="text" class="form-control" placeholder="Cari Nama" name="nama">
		<span class="input-group-append">
			<button type="submit" class="btn btn-info btn-flat">Go!</button>
		</span>
	</div>
</form>

<div class="card card-solid mt-2">
	<div class="card-body pb-0">
		<div class="row d-flex align-items-stretch">

			@foreach (siswa($nama) as $siswa)
			{{-- expr --}}
			<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
				<div class="card bg-light">
					<div class="card-header text-muted border-bottom-0">
						Biodata Siswa
					</div>
					<div class="card-body pt-0">
						<div class="row">
							<div class="col-7">
								<h2 class="lead"><b>{{ $siswa['nama'] }}</b></h2>
								<p class="text-muted text-sm"><b>Kelas: </b> {{ $siswa['rombel'] }} </p>
								<ul class="ml-4 mb-0 fa-ul text-muted">
									<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>{{ $siswa['alamat_jalan'] }} RT {{ $siswa['rt'] }} RW {{ $siswa['rw'] }} DESA {{ $siswa['desa_kelurahan'] }}</li>
									<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No HP: {{ $siswa['nomor_telepon_seluler'] }}</li>
								</ul>
							</div>
							<div class="col-5 text-center">
								<img src="{{ asset('adminLTE/dist/img/162x142.png') }}" alt="" class="img-circle img-fluid">
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="text-right">
							<a href="#" id="edit" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editProfilSiswa" data-siswa="{{ strtolower(substr($siswa['nama'],0,3)) }}" data-peserta_didik_id="{{ $siswa['peserta_didik_id'] }}">
								<i class="fas fa-user"></i> Tampilkan Profil
							</a>
						</div>
					</div>
				</div>
			</div>

			@endforeach

		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
	</div>
	<!-- /.card-footer -->
</div>

@endsection


@section('js')
@include('layouts.js.adminLTE')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$(document).on('click', '#edit', function(){
		var nama = $(this).attr("data-siswa");
		var peserta_didik_id = $(this).attr("data-peserta_didik_id");
		var url_siswa = '{{ route('search.edit.nama', ":nama") }}';
		url_siswa = url_siswa.replace(':nama',nama);

		var url_pd = '{{ route('search.edit.pd',':peserta_didik_id') }}';
		url_pd = url_pd.replace(':peserta_didik_id',peserta_didik_id);

		$.ajax({
			url: url_siswa,
			method: "GET",
			data:{nama:nama},
			dataType:"json",
			success:function(data){
				$('#email').val(data.email);
				$('#no_kk').val(data.no_kk);
				$('#alamat_jalan').val(data.alamat_jalan);
				$('#rt').val(data.rt);
				$('#rw').val(data.rw);
				$('#desa_kelurahan').val(data.desa_kelurahan);
				$('#nomor_telepon_seluler').val(data.nomor_telepon_seluler);
				$('#tinggi_badan').val(data.tinggi_badan);
				$('#berat_badan').val(data.berat_badan);
				$('#jarak_rumah_ke_sekolah select').val(data.jarak_rumah_kesekolah);
				$('#jarak_rumah_ke_sekolah_km').val(data.jarak_rumah_kesekolah_km);
				$('#waktu_tempuh_ke_sekolah').val(data.waktu_tempuh_ke_sekolah);
				$('#menit_tempuh_ke_sekolah').val(data.menit_tempuh_ke_sekolah);
				$('#jumlah_saudara_kandung').val(data.jumlah_saudara_kandung);
				var peserta_didik_id = data.peserta_didik_id;
				$('#modal-update').attr('data-id',data.peserta_didik_id);
				var url_update = '{{ route('siswa.update', ":peserta_didik_id") }}';
				url_update = url_update.replace(':peserta_didik_id',peserta_didik_id);
				$('#form-edit').attr('action',url_update);
			},
		});

		$.ajax({
			url: url_pd,
			method: "GET",
			data:{peserta_didik_id:peserta_didik_id},
			dataType:"json",
			success:function(data){
				$('#tinggi_badan').val(data.tinggi_badan);
				$('#berat_badan').val(data.berat_badan);
				$('#lingkar_kepala').val(data.lingkar_kepala);
				$('#jarak_rumah_ke_sekolah select').val(data.jarak_rumah_kesekolah);
				$('#jarak_rumah_ke_sekolah_km').val(data.jarak_rumah_kesekolah_km);
				$('#waktu_tempuh_ke_sekolah').val(data.waktu_tempuh_ke_sekolah);
				$('#menit_tempuh_ke_sekolah').val(data.menit_tempuh_ke_sekolah);
				$('#jumlah_saudara_kandung').val(data.jumlah_saudara_kandung);
			},
		});

	});

	$('select').on('change', function(){
		if ($(this).val() != '1') {
			$('.submenu').show();
		}else{
			$('.submenu').hide();
			$('#jarak_rumah_ke_sekolah_km').val('0');
		}
	});

	$(function(){
		$('.modal-content').draggable();
	});
</script>
@endsection