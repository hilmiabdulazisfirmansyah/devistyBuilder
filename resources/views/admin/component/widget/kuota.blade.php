 @php
 function kuota($jurusan){

  switch ($jurusan) {
            case 'TKR 1':
            $xL = 40;
            $xP = 40;
            break;

            case 'TKR 2':
            $xL = 40;
            $xP = 40;
            break;
            
            default:
            $xL = 20;
            $xP = 20;
            break;
        }

  $laki2     = App\Ppdb::where('jurusan',$jurusan)->where('jenis_kelamin','L')->get()->count();
  $perempuan = App\Ppdb::where('jurusan',$jurusan)->where('jenis_kelamin','P')->get()->count();

  $kuota_L = $xL - $laki2;
  $kuota_P = $xP - $perempuan;
  return array('laki'=> $kuota_L, 'perempuan' => $kuota_P );
}
@endphp

<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <div class="row">
        <div class="col">
          <small>TAV</small> <br>
          <span class="badge badge-primary">L : {{ kuota('TAV')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TAV')['perempuan'] }}</span><br>
          <small>TKR 1</small><br>
           <span class="badge badge-primary">L : {{ kuota('TKR 1')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TKR 1')['perempuan'] }}</span><br>
          <small>TKR 2</small><br>
           <span class="badge badge-primary">L : {{ kuota('TKR 2')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TKR 2')['perempuan'] }}</span><br>

        </div>

        <div class="col">
          <small>TKJ 1</small><br>
            <span class="badge badge-primary">L : {{ kuota('TKJ 1')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TKJ 1')['perempuan'] }}</span><br>
          <small>TKJ 2</small><br>
          <span class="badge badge-primary">L : {{ kuota('TKJ 2')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TKJ 2')['perempuan'] }}</span><br>
          <small>TKJ 3</small><br>
           <span class="badge badge-primary">L : {{ kuota('TKJ 3')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TKJ 3')['perempuan'] }}</span><br>
          <small>TKJ 4</small><br>
          <span class="badge badge-primary">L : {{ kuota('TKJ 4')['laki'] }}</span>
          <span class="badge badge-danger">P : {{ kuota('TKJ 4')['perempuan'] }}</span><br>
        </div>
      </div>

    </div>

    <div class="icon">
      <i class="ion ion-android-alarm-clock"></i>
    </div>

    <div class="small-box-footer">
      <small>Sisa Kuota</small>
      {{--  <small class="text-left ml-3">L : {{ $sisa_kuota_l }} <br><span>P : {{ $sisa_kuota_p }}</span></small> --}}
    </div>
    {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
  </div>
</div>
