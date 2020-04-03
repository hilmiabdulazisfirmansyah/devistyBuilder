<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'email', 'placeholder' => 'Email', 'id' => 'email'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">No KK</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'no_kk', 'placeholder' => 'No KK', 'id' => 'no_kk'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'alamat_jalan', 'placeholder' => 'Alamat', 'id' => 'alamat_jalan'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">RT</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'rt', 'placeholder' => 'RT', 'id' => 'rt'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">RW</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'rw', 'placeholder' => 'RW', 'id' => 'rw'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Desa</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'desa_kelurahan', 'placeholder' => 'Desa', 'id' => 'desa_kelurahan'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">No HP</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nomor_telepon_seluler', 'placeholder' => 'No HP', 'id' => 'nomor_telepon_seluler'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Tinggi Badan</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'tinggi_badan', 'placeholder' => 'Tinggi Badan', 'id' => 'tinggi_badan'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Berat Badan</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'berat_badan', 'placeholder' => 'Berat Badan', 'id' => 'berat_badan'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Lingkar Kepala</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'lingkar_kepala', 'placeholder' => 'Lingkar Kepala', 'id' => 'lingkar_kepala'])
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Jarak Rumah Ke Sekolah</label>
	@input(['type' => 'select', 'name' => 'jarak_rumah_ke_sekolah', 'id' => 'jarak_rumah_ke_sekolah', 'options' => DB::table('jarak')->get(), 'value1' => 'id', 'value2' => 'nama'])
</div>

<div class="form-group submenu" style="display: none">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Jarak Rumah Ke Sekolah</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'jarak_rumah_ke_sekolah_km', 'placeholder' => 'Sebutkan Dalam Kilometer', 'id' => 'jarak_rumah_ke_sekolah_km'])
	<span><i>ketikkan angka saja</i></span> <span class="small"><i>dalam satuan kilometer</i></span>
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Berapa Jam ?</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'waktu_tempuh_ke_sekolah', 'placeholder' => 'Berapa Jam dari rumah ?', 'id' => 'waktu_tempuh_ke_sekolah'])
	<span><i>ketikkan angka saja</i></span> <span class="small"><i>jika tidak terhitung jam ketik 0</i></span>
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Berapa Menit ?</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'menit_tempuh_ke_sekolah', 'placeholder' => 'Berapa Menit dari rumah ?', 'id' => 'menit_tempuh_ke_sekolah'])
	<span><i>ketikkan angka saja</i></span>
</div>

<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Saudara Kandung</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'jumlah_saudara_kandung', 'placeholder' => 'Jumlah Saudara Kandung', 'id' => 'jumlah_saudara_kandung'])
	<span><i>ketikkan angka saja</i></span>
</div>

@switch($action)
@case('edit')

@break

@case('tambah')
<div class="form-group">
	@input(['type' => 'button', 'ukuran' => 'kecil', 'name' => 'Simpan', 'action' => 'tambah'])
</div>    
@break

@default

@endswitch
