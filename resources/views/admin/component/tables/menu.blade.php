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
          <th style="text-align: center;">{{ $column3 }}</th>
          <th style="text-align: center;">{{ $column4 }}</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($tables as $table)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $table->$data1 }}</td>

          @php
          $submenu = DB::table('submenus')->where('menu_id',$table->id)->get();
          @endphp

            <td class="text-center">
          @foreach ($submenu as $badge)
            <submenu 
            class="btn btn-info" 
            data-toggle="popover"
            title='Action <a href="#a" class="close">&times;</a>'
            data-content="<a id='{{ $badge->id }}' href='#a' class='btn btn-info btn-sm text-light edit-popover'><i class='fa fa-edit'></i></a> <a id='{{ $badge->id }}' href='#a' class='btn btn-danger btn-sm text-light hapus-popover'><i class='fas fa-trash-alt'></i></a>"
            style="cursor:pointer;"
            data-id="{{ $badge->id }}">

                  <span class="badge badge-info {{ $badge->submenuicon }}"> {{ $badge->nama }}</span>
                  <span class="badge badge-info"> Link :{{ $badge->link }}</span>

            </submenu> 
          @endforeach
            </td>
          
          <td style="text-align: center;">

            @input(['type' => 'button', 'action' => 'edit', 'ukuran' => 'kecil', 'name' => 'edit', 'target_edit' => $target_edit, 'data_id' => $table->id])

            @input(['type' => 'button', 'action' => 'hapus', 'ukuran' => 'kecil', 'name' => 'hapus', 'data_id' => $table->id])

            <button name="tambah" id="tambah" data-id="{{ $table->id }}" data-toggle="modal" data-target="#tambahSubMenu" class="btn btn-success btn-sm fa fa-plus-square"></button>

          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>