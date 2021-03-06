<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ui-widget-content" style="cursor: move;">
      <div class="modal-header">
        <h4 class="modal-title">Edit {{ ucwords(str_replace('_', ' ', $judul)) }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form id="form-edit" method="POST">
        @method('PUT')
        @csrf
      <div class="modal-body">
       		@include('admin.component.form.'.strtolower(str_replace('_', '', $judul)),['action' => 'edit'])
      </div>
      <div class="modal-footer">
        <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button id="modal-update" type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
