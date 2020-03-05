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
          <th>{{ $column3 }}</th>
          <th style="width: 40px">{{ $column4 }}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Update software</td>
          <td>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
            </div>
          </td>
          <td><span class="badge bg-danger">55%</span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>