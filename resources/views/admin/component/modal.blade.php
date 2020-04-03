@switch($type)
@case('edit')
@include('admin.component.modal.edit')    
@break

@case('tambah')
@include('admin.component.modal.tambah')    
@break

@default

@endswitch
