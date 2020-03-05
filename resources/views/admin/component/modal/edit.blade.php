<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ui-widget-content" style="cursor: move;">
      <div class="modal-header">
        <h4 class="modal-title">Edit {{ $judul }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form id="form-edit" method="POST">
        @method('PUT')
        @csrf
      <div class="modal-body">
       		@include('admin.component.form.'.strtolower($judul),['action' => 'edit'])
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button id="modal-update" type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
