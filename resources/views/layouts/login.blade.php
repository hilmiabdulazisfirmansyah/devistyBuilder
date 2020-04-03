<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#424242" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') | {{ config('app_name','SmartApp') }}</title>
	@yield('css')
</head>

<body>
	<!-- Top content -->

	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					
					@yield('content')

					
					</div>
				</div>
			</div>
		</div>

		@yield('js')

	</body>
	</html>