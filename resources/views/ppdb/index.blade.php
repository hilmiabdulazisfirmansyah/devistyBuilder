@extends('layouts.ppdb')

@section('css')
@include('ppdb.css.default')
@endsection

@section('content')
@include('ppdb.content.section')
@endsection

@section('js')
@include('ppdb.js.default')
<script type="text/javascript">
	$('#ttl').datepicker({
		format:'dd/mm/yyyy'
	});
</script>
@endsection

