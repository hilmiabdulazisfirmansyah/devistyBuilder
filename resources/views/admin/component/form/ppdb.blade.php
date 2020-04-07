<div class="form-group">
	<label for="nama" class="col">Nomor Registrasi</label>
	<input id="no_registrasi" class="form-control" type="text" name="nomor_registrasi" placeholder="Nomor Registrasi" disabled/>
</div>

<div class="form-group">
	<label for="nama" class="col">NISN</label>
	<input id="nisn" class="form-control" type="text" name="nisn" placeholder="NISN" required/>
</div>

<div class="form-group">
	<label for="nama" class="col">Nama Lengkap</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nama', 'placeholder' => 'Nama Lengkap', 'id' => 'nama'])
</div>

<div class="form-group">
	<label for="nama" class="col">Alamat Lengkap</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'alamat', 'placeholder' => 'Alamat Lengkap', 'id' => 'alamat'])
</div>

<div class="form-group">
	<label for="nama" class="col">Tempat Lahir</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'tempat_lahir', 'placeholder' => 'Tempat Lahir', 'id' => 'tempat_lahir'])
</div>

<div class="form-group">
	<label for="nama" class="col">Tanggal Lahir</label>
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control ttl"  placeholder="Tanggal Lahir *" value="" required/>
</div>

<div class="form-group">
	<label for="nama" class="col">Jenis Kelamin</label>
	<select name="jenis_kelamin" class="form-control">
		<option class="hidden"  selected disabled>Jenis Kelamin</option>
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>
	</select>
</div>

<div class="form-group">
	<label for="nama" class="col">Agama</label>
	<select name="agama" class="form-control">
		<option class="hidden"  selected disabled>Agama</option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Budha">Budha</option>
		<option value="Hindu">Hindu</option>
		<option value="Kepercayaan">Kepercayaan</option>
	</select>
</div>

<div class="form-group">
	<label for="nama" class="col">No Handphone</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'no_hp', 'placeholder' => 'Nomor Handphone', 'id' => 'no_hp'])
</div>

<div class="form-group">
	<label for="nama" class="col">Asal Sekolah</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'asal_sekolah', 'placeholder' => 'Asal Sekolah', 'id' => 'asal_sekolah'])
</div>

<div class="form-group">
	<label for="nama" class="col">Nama Ayah</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nama_ayah', 'placeholder' => 'Nama Ayah', 'id' => 'nama_ayah'])
</div>

<div class="form-group">
	<label for="nama" class="col">Nama Ibu</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nama_ibu', 'placeholder' => 'Nama Ibu', 'id' => 'nama_ibu'])
</div>

<div class="form-group">
	<label for="nama" class="col">Pilihan Program Keahlian</label>
	<select id="jurusan" name="jurusan" class="form-control">
		<option class="hidden"  selected disabled>Pilihan Program Keahlian dan Kelas</option>
		<option value="TAV">Teknik Audio Video</option>
		<option value="TKR 1">Teknik Kendaraan Ringan 1</option>
		<option value="TKR 2">Teknik Kendaraan Ringan 2</option>
		<option value="TKJ 1">Teknik Komputer dan Jaringan 1</option>
		<option value="TKJ 2">Teknik Komputer dan Jaringan 2</option>
		<option value="TKJ 3">Teknik Komputer dan Jaringan 3</option>
		<option value="TKJ 4">Teknik Komputer dan Jaringan 4</option>
	</select>
</div>