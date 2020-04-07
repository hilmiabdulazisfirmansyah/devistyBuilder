@php
$tables = new \App\Guru;
@endphp

@modal(['type' => 'edit','ukuran'=>'biasa', 'id' => 'editguru', 'judul' => 'guru'])
@modal(['type' => 'tambah','ukuran'=>'biasa', 'id' => 'tambahguru', 'judul' => 'guru', 'action' => 'tambah'])

<div class="container-fluid">
  {{-- widget --}}
  

    <div class="form-group col-lg-2">
      <button id="tarik_data" class="btn btn-primary"><i id="load" class="fas fa-sync"></i> Tarik Data</a>
    </div>
  <!-- /.row -->
   
    @include('admin.component.progressbar.xss')
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      @tableGuru([
        'judul'               => 'Daftar Guru',
        'columns'             => '5',
        'column1'             => 'No',
        'column2'             => 'Nama',
        'column3'             => 'Jabatan',
        'column4'             => 'Tugas Tambahan',
        'column5'             => 'Action',
        'tables'              =>  $tables->all(),
        'data1'               => 'nama',
        'data2'               => 'job_title',
        'data3'               => 'tugas_tambahan',
        'target_edit'         => '#editguru',
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
      var guru = $(this).attr("data-id");
      var url_guru = '{{ route('guru.edit', ":guru") }}';
      url_guru = url_guru.replace(':guru',guru);
      $.ajax({
        url: url_guru,
        method: "GET",
        data:{guru:guru},
        dataType:"json",
        success:function(data){
          $('#nama').val(data.nama);
          $('#jabatan').val(data.job_title);
          $('#tugas_tambahan').val(data.tugas_tambahan);
          $('#modal-update').attr('data-id',data.id);
          var url_guru = '{{ route('guru.update', ":guru") }}';
          url_guru = url_guru.replace(':guru',guru);
          $('#form-edit').attr('action',url_guru);

        },
      });
    });

    $(document).on('click', '#hapus', function(){
      var guru = $(this).attr("data-id");
      var url_guru = '{{ route('guru.destroy', ":guru") }}';
      url_guru = url_guru.replace(':guru',guru);
      $.ajax({
        url: url_guru,
        method: "DELETE",
        data:{guru:guru},
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
      $('#form-tambah').attr('action','{{ route('guru.store') }}');
      $('#modal-tambah').attr('type','submit');
    });

    $('#tarik_data').on('click', function(){
      $.ajax({
          url:'{{ route('guru.tarik') }}',
          method:'GET',
          beforeSend: function(){
            $('#load').addClass('fa-spin');
            $('#tarik_data').attr('disabled','disabled');
          },
          success: function(data){
              var percentage = 0;
              var timer = setInterval(function(){
                percentage = percentage + 1;
                progress_bar_process(percentage, timer);
              }, 1000);
          }
      });
    });

    function progress_bar_process(percentage, timer){
      $('.progress-bar').css('width', percentage+'%');
      if (percentage > 100) {
          clearInterval(timer);
          refreshPage();
      }
    };
  </script>
  @endsection