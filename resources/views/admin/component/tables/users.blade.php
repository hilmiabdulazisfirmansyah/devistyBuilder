<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{ $judul }}</h3>

    <div class="card-tools">
      <ul class="pagination pagination-sm float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table">
      <thead>
        <tr>
          <th style="width: 10px">{{ $column1 }}</th>
          <th>{{ $column2 }}</th>
          <th style="text-align: left;">{{ $column3 }}</th>
          <th style="text-align: center;">{{ $column4 }}</th>
          <th style="text-align: center;">{{ $column5 }}</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($tables as $table)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $table->$data1 }}</td>
          
          <td class="text-left">{{ $table->email }}</td>
          <td class="text-center">{{ App\Role::find($table->$data2)->nama }}</td>

          @if ($column5 != 'Action')
          <td>{{ $table->data4 }}</td>
          @endif
          
          <td style="text-align: center;">
            
            @input(['type' => 'button', 'action' => 'edit', 'ukuran' => 'kecil', 'name' => 'edit', 'target_edit' => $target_edit, 'data_id' => $table->id])

            @input(['type' => 'button', 'action' => 'hapus', 'ukuran' => 'kecil', 'name' => 'hapus', 'data_id' => $table->id])

          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>