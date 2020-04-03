<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{ $judul }}</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table">
      <thead>
        <tr>
          <th style="width: 10px">{{ $column1 }}</th>
          <th>{{ $column2 }}</th>
          <th style="width: 140px;text-align: center;">{{ $column3 }}</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($tables as $table)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{ asset($table->$data1) }}" style="max-height:100px"></td>

          @if ($column3 != 'Action')
          <td>{{ $table->$data2 }}</td>
          @endif
          
          <td style="text-align: center;">
            
            @input(['type' => 'button', 'action' => 'edit', 'ukuran' => 'kecil', 'name' => 'edit', 'target_edit' => $target_edit, 'data_id' => $table->id])
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>