@extends('layouts.adminLTE')
@section('css')
@include('layouts.css.adminLTE')
@endsection

@section('content')
<div class="input-group input-group-sm">
	<input type="text" class="form-control" placeholder="Cari Data Siswa">
	<span class="input-group-append">
		<button type="button" class="btn btn-info btn-flat">Cari</button>
	</span>
</div>
@endsection


@section('css')
@include('layouts.js.adminLTE')
@endsection