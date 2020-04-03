@php
$tables = new \App\Menu;
$tables2 = new \App\Submenu;
@endphp

@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editMenu', 'judul' => 'Menu'])
@modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahSubMenu', 'judul' => 'Sub_Menu'])
@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editSubmenu', 'judul' => 'Sub_Menu'])

<div class="container-fluid">

  <div class="row">

    <section class="col-lg-5 connectedSortable">
      <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        @form(['tema' => 'primary', 'judul' => 'Menu', 'action' => 'tambah'])
      </form>
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-7 connectedSortable">
     @tableMenu([
      'judul'               => 'Daftar Menu',
      'column1'             => 'No',
      'column2'             => 'Nama Menu',
      'column3'             => 'Sub Menu',
      'column4'             => 'Action',
      'tables'              =>  $tables->all(),
      'data1'               => 'nama',
      'data2'               => 'nama',
      'target_edit'         => '#editMenu',
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

  $(document).ready(function(){
    $('[data-toggle="popover"]').popover({
      placement : 'top',
      html : true,
      title : '<a href="#" class="close" data-dismiss="alert">&times;</a>',
      content : '<a href="#" class="btn btn-info btn-sm text-light edit">edit</a>'
    });
    $(document).on("click", ".popover .close" , function(){
      $(this).parents(".popover").popover('hide');
    }); 
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
        $('#nama').val(data[0].nama);
        $('#level').val(data[0].menulevel_id);
        $('#icon').val(data[0].icon);
        $('#link').val(data[0].link);
        if (data[0].menulevel_id != '1') {
          $('.submenu').show();
          $('#submenu1').val(data[1].nama);
          $('#submenulink1').val(data[1].link);
          $('#submenuicon1').val(data[1].submenuicon);
        }else{
          $('.submenu').hide();
        };

        $('.input-group-text').html('<i class="'+data[1].submenuicon+'"></i>');

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
      $('.link').hide();
      $('#link').val('#');
    }else{
      $('.submenu').hide();
    }
  });

  $('button[id=tambah]').on('click', function(){
   $('#form-tambah')[0].reset();
   var id = $(this).attr('data-id');
   $('#modal-tambah').attr('data-id',id);
   $('.submenu').show();
 });

  $('#modal-tambah').on('click', function(){
    var id = $(this).attr('data-id');
    var submenu = $("#submenu").val();
    var submenu_id = $("#submenu").attr('id');
    var submenulink = $("#submenulink").val();
    var submenulink_id = $("#submenulink").attr('id');
    var submenuicon = $("#submenuicon").val();
    var submenuicon_id = $("#submenuicon").attr('id');

    validation(submenu_id);
    validation(submenulink_id);
    validation(submenuicon_id);

    var url_submenu = '{{ route('submenus.create', ":id") }}';
    url_submenu = url_submenu.replace(':id',id);
    $.ajax({
      url: url_submenu,
      method: "GET",
      data:{id:id,submenu:submenu,submenulink:submenulink,submenuicon:submenuicon},
      dataType:"json",
      success:function(data){
        refreshPage();
      }
    });
  });


  function validation(data){
    if ($('#'+data).val() === '') {
      $('#'+data).addClass('is-invalid');
      $('#'+data+'-alert-text').html(data+' Harus Di isi');
    }
  };

  $(document).on('click', '.edit-popover', function(){
    $('#editSubmenu').modal('show');

    $('.popover').popover('hide');
    var submenu = $(this).attr("id");
    var url_menu = '{{ route('submenus.edit', ":submenu") }}';
    url_menu = url_menu.replace(':submenu',submenu);
    $.ajax({
      url: url_menu,
      method: "GET",
      data:{submenu:submenu},
      dataType:"json",
      success:function(data){
        $('input[id=submenu]').val(data.nama);
        $('input[id=submenuicon]').val(data.submenuicon);
        $('input[id=submenulink]').val(data.link);
        $('#modal-update').attr('data-id',data.id);
        var url_submenu = '{{ route('submenus.update', ":submenu") }}';
        url_submenu = url_submenu.replace(':submenu',data.id);
        $('form[method=POST]').attr('action',url_submenu);
      },
    });
  });

  $(document).on('click', '.hapus-popover', function(){
    var submenu = $(this).attr("id");
    var url_menu = '{{ route('submenus.destroy', ":submenu") }}';
    url_menu = url_menu.replace(':submenu',submenu);
    $.ajax({
      url: url_menu,
      method: "DELETE",
      data:{submenu:submenu},
      dataType:"json",
      success:function(data){
        if (data) {
          refreshPage();
          alert_delete();
        };
      },
    });
  });

  $('#close').on('click', function(){
      $('#form-edit')[0].reset();
      $('#form-tambah')[0].reset();
      $('.submenu').hide();
  });

  $('#icp_submenu').on('change', function(e) {
      $('#submenuicon1').val(e.icon);
  });

  $('#icp_menu').on('change', function(e) {
      $('.icp').val(e.icon);
  });

  $('button[id=icp_menu]').on('change', function(e) {
      $('.icp').val(e.icon);
  });

</script>
@endsection