@switch($ukuran)

@case('besar')
<button id="edit" type="button" class="btn btn-info btn-lg fa fa-edit" data-toggle="modal" data-target="{{ $target_edit }}"></button>
@break

@case('kecil')
<button id="edit" type="button" class="btn btn-info btn-sm fa fa-edit" data-toggle="modal" data-target="{{ $target_edit }}" data-id="{{ $data_id }}"></button>
@break

@default
<button id="edit" type="button" class="btn btn-info fa fa-edit" data-toggle="modal" data-target="{{ $target_edit }}">edit</button>
@endswitch