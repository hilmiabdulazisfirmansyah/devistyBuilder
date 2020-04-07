@php
$tables = new \App\Ppdb;

function jumlah_pendaftar($jurusan){
  $tables = new \App\Ppdb;
 return $jumlah_pendaftar = $tables->where('jurusan',$jurusan)->count();
}
@endphp


@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editCpd', 'judul' => 'PPDB'])
@modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahcpd', 'judul' => 'ppdb', 'action' => 'tambah'])


<div class="container-fluid">
<div class="row">
  
@include('admin.component.widget.ppdb', [
    'class_warna' => 'bg-info',
    'jumlah_pendaftar' => jumlah_pendaftar('TAV'),
    'jurusan' => 'TAV',
    'icon' => 'ion-ios-videocam',
  ])

@include('admin.component.widget.ppdb', [
    'class_warna' => 'bg-danger',
    'jumlah_pendaftar' => jumlah_pendaftar('TKR 1')+jumlah_pendaftar('TKR 2'),
    'jurusan' => 'TKR',
    'icon' => 'ion-model-s'
  ])

@include('admin.component.widget.ppdb', [
    'class_warna' => 'bg-warning',
    'jumlah_pendaftar' => jumlah_pendaftar('TKJ 1')+jumlah_pendaftar('TKJ 2')+jumlah_pendaftar('TKJ 3')+jumlah_pendaftar('TKJ 4'),
    'jurusan' => 'TKJ',
    'icon' => 'ion-monitor',
  ])

@include('admin.component.widget.kuota')


</div>
  {{-- widget --}}
  <div class="input-group input-group-sm">
    <input id="search" name="search" type="text" class="form-control" placeholder="Cari Nama / No Registrasi">
    <span class="input-group-append">
      <button id="cari" type="button" class="btn btn-info btn-flat">Cari</button>
    </span>
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="form-group col-lg-2 pt-5">
      @input(['type' => 'button','action' => 'tambah-modal', 'ukuran' => 'kecil', 'name' => 'Tambah Calon PD', 'target' => '#tambahcpd'])
    </div>

    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      @table([
        'judul'               => 'Daftar Calon Peserta Didik',
        'columns'             => '5',
        'column1'             => 'No',
        'column2'             => 'Nama',
        'column3'             => 'Asal Sekolah',
        'column4'             => 'No Registrasi',
        'column5'             => 'Action',
        'tables'              =>  $tables->all(),
        'data1'               => 'nama',
        'data2'               => 'asal_sekolah',
        'data3'               => 'id',
        'target_edit'         => '#editCpd',
        ])
        <!-- /.card -->
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">


        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->

  @section('js')
  @parent
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.ttl').datepicker({
      format:'dd/mm/yyyy'
    });

    $(document).on('click', '#edit', function(){
      var ppdb = $(this).attr("data-id");
      var url_ppdb = '{{ route('ppdb.edit', ":ppdb") }}';
      url_ppdb = url_ppdb.replace(':ppdb',ppdb);
      $.ajax({
        url: url_ppdb,
        method: "GET",
        data:{ppdb:ppdb},
        dataType:"json",
        success:function(data){
          console.log(data);
          $('#no_registrasi').val(data.id);
          $('#nisn').val(data.nisn);
          $('#nama').val(data.nama);
          $('#alamat').val(data.alamat);
          $('#tempat_lahir').val(data.tempat_lahir);
          $('#tanggal_lahir').val(data.tanggal_lahir);
          $('#agama').val(data.agama);
          $('#no_hp').val(data.no_hp);
          $('#asal_sekolah').val(data.asal_sekolah);
          $('#nama_ayah').val(data.nama_ayah);
          $('#nama_ibu').val(data.nama_ibu);
          $('#jurusan').val(data.jurusan);

          $('#modal-update').attr('data-id',data.id);
          var url_ppdb = '{{ route('ppdb.update', ":ppdb") }}';
          url_ppdb = url_ppdb.replace(':ppdb',ppdb);
          $('#form-edit').attr('action',url_ppdb);
        },
      });
    });

    $(document).on('click', '#hapus', function(){
      var ppdb = $(this).attr("data-id");
      var url_ppdb = '{{ route('ppdb.destroy', ":ppdb") }}';
      url_ppdb = url_ppdb.replace(':ppdb',ppdb);
      $.ajax({
        url: url_ppdb,
        method: "DELETE",
        data:{ppdb:ppdb},
        dataType:"json",
        success:function(data){
          if (data) {
            refreshPage();
            alert_delete();
          };
        },
      });
    });

    fetch_data();

    function fetch_data(query = ''){
      $.ajax({
        url: "{{ route('ppdb.cari') }}",
        method: 'GET',
        data:{query:query},
        dataType:'json',
        success:function(data){
          var no = 1;

          $('tbody tr').remove();

          $(data).each(function(i,v){
            no = i+1;

            $('tbody').append('<tr><td class="text-center">'+no+'</td><td>'+v.nama+'</td><td class="text-center">'+v.asal_sekolah+'</td><td class="text-center">'+v.id+'</td><td class="text-center"><button id="edit" type="button" class="btn btn-info fa fa-edit" data-toggle="modal" data-target="#editCpd" data-id="'+v.id+'"></button> <button id="hapus" type="button" class="btn btn-danger fas fa-trash-alt" data-id="'+v.id+'"></button></td></tr>');
            
          });
        }
      })
    }

    $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_data(query);
    });

    function refreshPage() {
      location.reload(true);
    }

    function alert_delete(){
      alert('Data Berhasil Dihapus');
    }

    $('button[data-toggle=modal]').on('click', function(){
      $('#form-tambah').attr('method','POST');
      $('#form-tambah').attr('action','{{ route('ppdb.store') }}');
      $('#modal-tambah').attr('type','submit');
    });
  </script>
  @endsection