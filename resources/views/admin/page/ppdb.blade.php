@php
$tables = new \App\Ppdb;
@endphp

@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editCpd', 'judul' => 'PPDB'])
@modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahcpd', 'judul' => 'ppdb', 'action' => 'tambah'])

<div class="container-fluid">
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
    <div class="form-group col-lg-2">
      {{-- @input(['type' => 'button','action' => 'tambah-modal', 'ukuran' => 'kecil', 'name' => 'Tambah Calon PD', 'target' => '#tambahcpd']) --}}
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
    $(document).on('click', '#edit', function(){
      var role = $(this).attr("data-id");
      var url_role = '{{ route('roles.edit', ":role") }}';
      url_role = url_role.replace(':role',role);
      $.ajax({
        url: url_role,
        method: "GET",
        data:{role:role},
        dataType:"json",
        success:function(data){
          $('#nama').val(data.nama);

          $('#modal-update').attr('data-id',data.id);
          var url_role = '{{ route('roles.update', ":role") }}';
          url_role = url_role.replace(':role',role);
          $('#form-edit').attr('action',url_role);
        },
      });
    });

    $(document).on('click', '#hapus', function(){
      var role = $(this).attr("data-id");
      var url_role = '{{ route('roles.destroy', ":role") }}';
      url_role = url_role.replace(':role',role);
      $.ajax({
        url: url_role,
        method: "DELETE",
        data:{role:role},
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
            $('tbody').html(data.table_data);
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
      $('#form-tambah').attr('action','{{ route('roles.store') }}');
      $('#modal-tambah').attr('type','submit');
    });
  </script>
  @endsection