<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Pendaftaran Peserta Didik Baru</title>
	<link rel="shortcut icon" href="{{ asset('site/home/images/favicon.png') }}">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	@yield('css')

</head>
<body>


	
	@yield('content')

	

	@yield('js')

</body>
</html>