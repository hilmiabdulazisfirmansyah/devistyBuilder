@extends('layouts.adminLTE')


@section('css')
@include('layouts.css.adminLTE')
@endsection

@section('content')
<form action="{{ route('search') }}" method="GET">
	<div class="input-group input-group-sm">
		<input type="text" class="form-control" placeholder="Cari Nama" name="nama">
		<span class="input-group-append">
			<button type="submit" class="btn btn-info btn-flat">Go!</button>
		</span>
	</div>
</form>
@endsection


@section('js')
@include('layouts.js.adminLTE')
@endsection