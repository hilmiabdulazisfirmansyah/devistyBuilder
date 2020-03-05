<div class="card card-{{ $tema }}">
	<div class="card-header">
		<h3 class="card-title">{{$judul}}</h3>

		@tools(['type' => 'min'])
	
	</div>
	

	<div class="card-body">
		
		@include('admin.component.form.'.strtolower($judul))

	</div>
	<!-- /.card-body -->
</div>