@switch($type)

@case('text')

@switch($ukuran)
@case('besar')
<input id="{{ $id }}" class="form-control form-control-lg" name="{{ $name }}" type="text" placeholder="{{ $placeholder }}" value=""/>
@break

@case('kecil')
<input id="{{ $id }}" class="form-control form-control-sm" name="{{ $name }}" type="text" placeholder="{{ $placeholder }}" value=""/>
@break

@default
<input id="{{ $id }}" class="form-control" type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" value=""/>
@endswitch
{{-- end switch ukuran --}}
@break

@case('button') 
{{-- @input(['type' => 'button', 'action' => 'edit', 'ukuran' => 'kecil', 'target_edit' => 'editMenu') --}}
@switch($action)
@case('edit')

@include('admin.component.button.edit')

@break

@case('tambah')

@include('admin.component.button.tambah')

@break

@case('hapus')

@include('admin.component.button.hapus')

@break

@default

@endswitch 
{{-- end switch action --}}
@break
{{-- break case button --}}
@case('select')
<select id="{{ $id }}" class="form-control" name="{{ $name }}" style="width: 100%">
	@foreach ($options as $option)
		<option value="{{ $option->$value1 }}">{{ $option->$value2 }}</option>
	@endforeach
</select>
@break
{{-- break case select --}}
@default

@endswitch