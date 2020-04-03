@php
$tables = new \App\Role;
@endphp

@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editrole', 'judul' => 'role'])
@modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahrole', 'judul' => 'role', 'action' => 'tambah'])

<div class="container-fluid">
  {{-- widget --}}
  
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="form-group col-lg-2">
      @input(['type' => 'button','action' => 'tambah-modal', 'ukuran' => 'kecil', 'name' => 'Tambah role', 'target' => '#tambahrole'])
    </div>

    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      @table([
        'judul'               => 'Daftar roles',
        'columns'             => '3',
        'column1'             => 'No',
        'column2'             => 'Nama',
        'column3'             => 'Action',
        'tables'              =>  $tables->all(),
        'data1'               => 'nama',
        'target_edit'         => '#editrole',
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