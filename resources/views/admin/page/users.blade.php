@php
$tables = new \App\User;
@endphp

@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editUser', 'judul' => 'User'])
@modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahUser', 'judul' => 'User', 'action' => 'tambah'])

<div class="container-fluid">
  {{-- widget --}}
  
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="form-group col-lg-2">
      @input(['type' => 'button','action' => 'tambah-modal', 'ukuran' => 'kecil', 'name' => 'Tambah User', 'target' => '#tambahUser'])
    </div>

    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      @tableUsers([
        'judul'               => 'Daftar Users',
        'columns'             => '5',
        'column1'             => 'No',
        'column2'             => 'Nama Users',
        'column3'             => 'Email',
        'column4'             => 'Roles',
        'column5'             => 'Action',
        'tables'              =>  $tables->all(),
        'data1'               => 'name',
        'data2'               => 'role_id',
        'data3'               => 'email',
        'target_edit'         => '#editUser',
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
      var user = $(this).attr("data-id");
      var url_user = '{{ route('users.edit', ":user") }}';
      url_user = url_user.replace(':user',user);
      $.ajax({
        url: url_user,
        method: "GET",
        data:{user:user},
        dataType:"json",
        success:function(data){
          $('#nama').val(data.name);
          $('#email').val(data.email);
          $('#role').val(data.role_id);

          $('#modal-update').attr('data-id',data.id);
          var url_user = '{{ route('users.update', ":user") }}';
          url_user = url_user.replace(':user',user);
          $('#form-edit').attr('action',url_user);
        },
      });
    });

    $(document).on('click', '#hapus', function(){
      var user = $(this).attr("data-id");
      var url_user = '{{ route('users.destroy', ":user") }}';
      url_user = url_user.replace(':user',user);
      $.ajax({
        url: url_user,
        method: "DELETE",
        data:{user:user},
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
      $('#form-tambah').attr('action','{{ route('users.store') }}');
      $('#modal-tambah').attr('type','submit');
    });
  </script>
  @endsection