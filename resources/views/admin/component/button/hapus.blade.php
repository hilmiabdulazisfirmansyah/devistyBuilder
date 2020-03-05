@switch($ukuran)

@case('besar')
<button id="hapus" type="button" class="btn btn-danger btn-lg fas fa-trash-alt" data-id="{{ $data_id }}"></button>
@break

@case('kecil')
<button id="hapus" type="button" class="btn btn-danger btn-sm fas fa-trash-alt" data-id="{{ $data_id }}"></button>
@break

@default
<button id="hapus" type="button" class="btn btn-danger fas fa-trash-alt" data-id="{{ $data_id }}"></button>
@endswitch