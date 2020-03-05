@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editMenu', 'judul' => 'Menu'])

<div class="container-fluid">

  <div class="row">

    <section class="col-lg-5 connectedSortable">
      <form action="{{ route('menus.create') }}" method="GET">
        @csrf
        @form(['tema' => 'primary', 'judul' => 'Menu', 'action' => 'tambah'])
      </form>
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-7 connectedSortable">
     @table([
      'columns'       => '3',
      'judul'         => 'Daftar Menu',
      'column1'       => 'No',
      'column2'       => 'Nama Menu',
      'column3'       => 'Action',
      'tables'        =>  DB::table('menus')->get(),
      'data1'         =>  'nama',
      'target_edit'   =>  '#editMenu',
      ])
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
    var menu = $(this).attr("data-id");
    var url_menu = '{{ route('menus.edit', ":menu") }}';
    url_menu = url_menu.replace(':menu',menu);
    $.ajax({
      url: url_menu,
      method: "GET",
      data:{menu:menu},
      dataType:"json",
      success:function(data){
        $('#nama').val(data.nama);
        $('#level').val(data.menulevel_id);
        $('#icon').val(data.icon);
        $('#link').val(data.link);
        $('#modal-update').attr('data-id',data.id);
        var url_menu = '{{ route('menus.update', ":menu") }}';
        url_menu = url_menu.replace(':menu',menu);
        $('#form-edit').attr('action',url_menu);
      },
    });
  });

  $(document).on('click', '#hapus', function(){
    var menu = $(this).attr("data-id");
    var url_menu = '{{ route('menus.destroy', ":menu") }}';
    url_menu = url_menu.replace(':menu',menu);
    $.ajax({
      url: url_menu,
      method: "DELETE",
      data:{menu:menu},
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

  $(function(){
    $('.modal-content').draggable();
  });

 $('select').on('change', function(){
    if ($(this).val() != '1') {
      $('.submenu').show();
    }else{
      $('.submenu').hide();
    }
 });
</script>
@endsection