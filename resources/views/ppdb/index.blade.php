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
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('#ttl').datepicker({
		format:'dd/mm/yyyy'
	});

	$('#jurusan').on('change', function(){
		$('.kuota').show();
		var jurusan = $(this).children('option:selected').val();
		var get_url = "{{ route('ppdb.show', ':ppdb') }}";
		get_url = get_url.replace(':ppdb',jurusan);
		$.ajax({
			url: get_url,
			method: "GET",
      		data:{ppdb:jurusan},
      		dataType:"json",
      		success:function(data){
      			$('#laki').val(data.laki);
      			$('#perempuan').val(data.perempuan);
      		}
		});
	});
</script>
@endsection

