<div class="form-group">
	<label for="nama" class="col">Nama Menu</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nama', 'placeholder' => 'Nama Menu', 'id' => 'nama'])
</div>

<div class="form-group">
	<label for="level" class="col">Menu Level</label>
	@input(['type' => 'select', 'name' => 'menulevel_id', 'id' => 'level', 'options' => DB::table('menulevels')->get(), 'value1' => 'id', 'value2' => 'nama'])
</div>

<div class="form-group submenu" style="display: none">
	<label for="submenu" class="col">Sub Menu</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'submenu', 'placeholder' => 'Sub Menu', 'id' => 'submenu1'])
</div>

<div class="form-group submenu" style="display: none">
	<label for="submenulink" class="col">Sub Menu Link</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'submenulink', 'placeholder' => 'Sub Menu Link', 'id' => 'submenulink1'])
</div>



<div class="form-group submenu" style="display: none">
	<label for="submenuicon" class="col">Sub Menu Icon</label>
	<div class="input-group">
		<span class="input-group-prepend">
			<button id="icp_submenu" class="btn btn-info" data-icon="fas fa-map-marker-alt" role="iconpicker" data-rows="3" data-cols="6" data-selected-class="btn-danger" data-unselected-class="btn-info"></button>
		</span>
		@input(['type' => 'icon-picker', 'ukuran' => 'biasa', 'name' => 'submenuicon', 'placeholder' => 'Sub Menu Icon', 'id' => 'submenuicon1'])
	</div>
</div>

<div class="form-group">
	<label for="icon" class="col">Icon</label>
	<div class="input-group">
		<span class="input-group-prepend">
			<button id="icp_menu" class="btn btn-info" data-icon="fas fa-map-marker-alt" role="iconpicker" data-rows="3" data-cols="6" data-selected-class="btn-danger" data-unselected-class="btn-info"></button>
		</span>
		@input(['type' => 'icon-picker', 'ukuran' => 'biasa', 'name' => 'icon', 'placeholder' => 'Icon', 'id' => 'icon'])
	</div>
</div>

<div class="form-group link">
	<label for="link" class="col">Link</label>
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
