<div class="form-group">
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nama', 'placeholder' => 'Nama Menu', 'id' => 'nama'])
</div>

<div class="form-group">
	@input(['type' => 'select', 'name' => 'menulevel_id', 'id' => 'level', 'options' => DB::table('menulevels')->get(), 'value1' => 'id', 'value2' => 'nama'])
</div>

<div class="form-group submenu" style="display: none">
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'submenu', 'placeholder' => 'Sub Menu', 'id' => 'submenu'])
</div>

<div class="form-group">
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'icon', 'placeholder' => 'Icon', 'id' => 'icon'])
</div>

<div class="form-group">
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'link', 'placeholder' => 'Link', 'id' => 'link'])
</div>

@switch($action)
@case('edit')

@break

@case('tambah')
<div class="form-group">
	@input(['type' => 'button', 'ukuran' => 'kecil', 'name' => 'Simpan', 'action' => 'tambah'])
</div>    
@break

@default

@endswitch
