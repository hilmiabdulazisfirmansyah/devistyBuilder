<div class="card-tools">

	@switch($type)
	@case('refresh')
	<button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="/pages/widgets.html" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
	@break 

	@case('max')
	<button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
	@break 

	@case('min')
	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
	@break

	@case('close')
	<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
	@break

	@default

	@endswitch


</div>