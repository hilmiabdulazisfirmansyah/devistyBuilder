@switch($type)

@case('text')

@switch($ukuran)
@case('besar')
<input id="{{ $id }}" class="form-control form-control-lg @error($name) is-invalid @enderror" name="{{ $name }}" type="text" placeholder="{{ $placeholder }}" value="{{ old($name) }}" required auto-complete="{{ $name }}" autofocus/><span id="{{ $id }}-alert-text" class="text-danger"></span>

@error($name)
<div id="{{ $id }}-alert" class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</div>
@enderror
@break

@case('kecil')
<input id="{{ $id }}" class="form-control form-control-sm @error($name) is-invalid @enderror" name="{{ $name }}" type="text" placeholder="{{ $placeholder }}" value="{{ old($name) }}" required auto-complete="{{ $name }}" autofocus/><span id="{{ $id }}-alert-text" class="text-danger"></span>

@error($name)
<div id="{{ $id }}-alert" class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</div>
@enderror
@break

@default
<input id="{{ $id }}" class="form-control @error($name) is-invalid @enderror" type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) }}" required auto-complete="{{ $name }}" autofocus/><span id="{{ $id }}-alert-text" class="text-danger"></span>

@error($name)
<div id="{{ $id }}-alert" class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</div>
@enderror
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

@case('tambah-modal')

@include('admin.component.button.tambah-modal')

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

@case('icon-picker')
<input id="{{ $id }}" data-placement="bottomRight" class="form-control icp icp-auto @error($name) is-invalid @enderror" type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) }}" required auto-complete="{{ $name }}" autofocus/><span id="{{ $id }}-alert-text" class="text-danger"></span><span class="input-group-addon"></span>

@error($name)
<div id="{{ $id }}-alert" class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</div>
@enderror
@break
{{-- break case icon-picker --}}
@default

@endswitch