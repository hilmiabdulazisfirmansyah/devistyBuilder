<div class="form-group submenu">
	<label for="submenu" class="col">Nama Sub Menu</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'submenu', 'placeholder' => 'Sub Menu', 'id' => 'submenu'])
</div>

<div class="form-group submenu">
	<label for="submenulink" class="col">Sub Menu Link</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'submenulink', 'placeholder' => 'Sub Menu Link', 'id' => 'submenulink'])
</div>

<div class="form-group">
	<label for="icon" class="col">Sub Menu Icon</label>
	<div class="input-group">
		<span class="input-group-prepend">
			<button id="icp_menu" class="btn btn-info" data-icon="fas fa-map-marker-alt" role="iconpicker" data-rows="3" data-cols="6" data-selected-class="btn-danger" data-unselected-class="btn-info"></button>
		</span>
		@input(['type' => 'icon-picker', 'ukuran' => 'biasa', 'name' => 'submenuicon', 'placeholder' => 'Sub Menu Icon', 'id' => 'submenuicon'])
	</div>
</div>