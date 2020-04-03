<link href="{{ asset('site/home/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/form-elements.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/customScrollbar.css') }}">
	<style type="text/css">
		.width100, .width50{font-size: 12px !important;}
		.discover{margin-top: -90px;position: relative;z-index: -1;}
		/*.form-bottom {box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.35);}*/
		.gradient{margin-top: 40px;text-align: right;padding: 10px;background: rgb(72,72,72);
			background: -moz-linear-gradient(left, rgba(72,72,72,1) 1%, rgba(73,73,73,1) 44%, rgba(73,73,73,1) 100%);
			background-image: linear-gradient(to right, rgba(72, 72, 72, 0.23) 1%, rgba(37, 37, 37, 0.64) 44%, rgba(73, 73, 73, 0) 100%);
			background-position-x: initial;
			background-position-y: initial;
			background-size: initial;
			background-repeat-x: initial;
			background-repeat-y: initial;
			background-attachment: initial;
			background-origin: initial;
			background-clip: initial;
			background-color: initial;
			background: -webkit-linear-gradient(left, rgba(72,72,72,1) 1%,rgb(73, 73, 73) 44%,rgba(73,73,73,1) 100%);
			background: linear-gradient(to right, rgba(72, 72, 72, 0.02) 1%,rgba(37, 37, 37, 0.67) 30%,rgba(73, 73, 73, 0) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#484848', endColorstr='#494949',GradientType=1 );}
			@media (min-width: 320px) and (max-width: 991px){
				.width100{width: 100% !important;display: block !important;
					float: left !important; margin-bottom: 5px !important;
					border-radius: 2px !important;}
					.width50{width: 50% !important;
						margin-bottom: 5px !important;
						display: block !important;
						border-radius:2px 0px 0px 2px !important;
						float: left !important;
						margin-left: 0px !important; }
						.widthright50{width: 50% !important;
							display: block !important;
							margin-bottom: 5px !important;
							border-radius: 0px 2px 2px 0px !important;
							float: left !important;margin-left: 0px !important;} }
							input[type="email"], input[type="password"], textarea, textarea.form-control {
								height: 40px;border: 1px solid #999;}

								input[type="email"]:focus, input[type="password"]:focus, textarea:focus, textarea.form-control:focus {border: 1px solid #424242;}

								button.btn {height: 40px;line-height: 40px;}

								@media(max-width:767px){
									.discover{margin-top: 10px}
									.gradient {text-align: center;}
									.logowidth{padding-right:0px;}
								}
								@media(min-width:768px) and (max-width:992px){
									.discover{margin-top: 10px}
									.logowidth{padding-right:0px;}
									.gradient {text-align: center;}
								}

/*.backstretch{position: relative;}
.backstretch:after {
position: absolute;
z-index: 2;
width: 100%;
height: 100%;
display: block;
left: 0;
top: 0;
content: "";
background-color: rgba(0, 0, 0, 0.16);
}*/
.col-md-offset-3 { margin-left: 29%;}

.loginbg {
	background: rgba(0, 0, 0, 0.81);
	max-height: 440px;
	box-shadow: 0px 7px 12px rgba(0, 0, 0, 0.29);
	border-radius: 4px;
}
.loginright {
	text-align: left;
	color: #fff;
	max-height: 385px;
	/* padding-right: 20px; */
	overflow: auto;
	position: relative;
	width: 100%;
	max-width: 100%;
	height: 385px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.logdivider {
	background: rgba(255, 253, 253, 0.7);
	clear: both;
	width: 100%;
	height: 1px;
	margin: 15px 0 15px;
}

.separatline {
	margin-left: 30px;
	width: 1px;
	height: 450px;
	background: rgba(255, 253, 253, 0.7);
}
.loginright h3 {
	font-size: 22px;
	color: #eae8e8;
	margin-top: 10px;
	line-height: normal;
	font-weight: 500;
	padding-bottom: 10px;
}
.col-md-offset-3 { margin-left: 29%;}
a.forgot {padding-top:0px;}
@media (max-width: 767px) {
	.separatline {
		margin-left: 0;
		width: 100%;
		height: 2px;
		margin: 35px auto 0px auto;
	}
	.col-md-offset-3 {margin-left: 0;}
}
</style>