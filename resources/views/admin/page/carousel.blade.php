@php
$tables = new \App\Website\Carousel;
@endphp

@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editCarousel', 'judul' => 'carousel'])
{{-- @modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahCarousel', 'judul' => 'carousel', 'action' => 'tambah']) --}}

<div class="container-fluid">
  {{-- widget --}}
  
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
   {{--  <div class="form-group col-lg-2">
      @input(['type' => 'button','action' => 'tambah-modal', 'ukuran' => 'kecil', 'name' => 'Tambah carousel', 'target' => '#tambahCarousel'])
    </div> --}}

    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      @tableCarousel([
        'judul'               => 'Daftar carousels',
        'columns'             => '3',
        'column1'             => 'No',
        'column2'             => 'Gambar',
        'column3'             => 'Action',
        'tables'              =>  $tables->all(),
        'data1'               => 'path',
        'target_edit'         => '#editCarousel',
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
      var carousel = $(this).attr("data-id");
      var url_carousel = '{{ route('website.edit', ":carousel") }}';
      url_carousel = url_carousel.replace(':carousel',carousel);
      $.ajax({
        url: url_carousel,
        method: "GET",
        data:{carousel:carousel},
        dataType:"json",
        success:function(data){
          console.log(data);
            $('#thumbnail').val(data.path);
            $('#holder').attr('src',data.path);
           $('#lfm-image').filemanager('image');
          $('#modal-update').attr('data-id',data.id);
          var url_carousel = '{{ route('website.update', ":carousel") }}';
          url_carousel = url_carousel.replace(':carousel',carousel);
          $('#form-edit').attr('action',url_carousel);
        },
      });
    });
  </script>
  @endsection