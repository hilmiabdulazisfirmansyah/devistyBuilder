@include('ppdb.css.style')
@include('ppdb.content.pamflet')

<form action="{{ route('ppdb.store') }}" method="POST">
@csrf
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="{{ asset('_ppdb/images/logo.png') }}" style="width: 100%" />
            <h6>SMK ALOER WARGAKUSUMAH</h6>
            
            <h4 style="margin-bottom: -2rem;margin-top: 3rem">Scan Lokasi:</h4>
            <img src="{{ asset('_ppdb/images/lokasi.png') }}" style="width: 77%;animation:none" />
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">
                        <p style="font-size: 2em">PPDB</p>
                        <p>(Pendaftaran Peserta Didik Baru)</p>
                        <p style="font-size: 0.5em">SMK ALOER WARGAKUSUMAH 2020/2021</p>
                    </h3>

                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input  name="tanggal_lahir" id="ttl" type="text" class="form-control"  placeholder="Tanggal Lahir *" value="" required/>
                            </div>
                            <div class="form-group">
                                <select name="jenis_kelamin" class="form-control">
                                    <option class="hidden"  selected disabled>Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div> 

                            <div class="form-group">
                                <select name="agama" class="form-control">
                                    <option class="hidden"  selected disabled>Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kepercayaan">Kepercayaan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="no_hp" type="text" class="form-control" placeholder="Nomor Handphone *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input name="alamat_sekolah" type="text" name="txtEmpPhone" class="form-control" placeholder="Asal Sekolah *" value="" required/>
                            </div>

                            <div class="form-group">
                                <input name="nama_ayah" type="text" name="txtEmpPhone" class="form-control" placeholder="Nama Ayah *" value="" required/>
                            </div> 

                            <div class="form-group">
                                <input name="nama_ibu" type="text" name="txtEmpPhone" class="form-control" placeholder="Nama Ibu *" value="" required/>
                            </div>

                            <div class="form-group">
                                <select name="jurusan" class="form-control">
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
                            <p>Sisa Kuota Untuk Kelas ini :</p>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background:#0062cc;color:white">Laki-Laki</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled value="10">
                        </div>

                        <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background: #dc3545;color:white">Perempuan</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled value="12">
                        </div>

                        <input type="submit" class="btnRegister" value="Daftar" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>
</form>