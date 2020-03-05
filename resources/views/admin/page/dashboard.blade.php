<div class="container-fluid">
  {{-- widget --}}
  @include('admin.component.widget.adminLTE')
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      @include('admin.component.chart.adminLTE')
      <!-- /.card -->

      <!-- DIRECT CHAT -->

      <!--/.direct-chat -->

      <!-- TO DO List -->
      @include('admin.component.todo.adminLTE')
      <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

      <!-- Map card -->
      @include('admin.component.map.adminLTE')
      <!-- /.card -->

      <!-- solid sales graph -->
      @include('admin.component.graph.adminLTE')
      <!-- /.card -->

      <!-- Calendar -->
      @include('admin.component.calendar.adminLTE')
      <!-- /.card -->
    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->