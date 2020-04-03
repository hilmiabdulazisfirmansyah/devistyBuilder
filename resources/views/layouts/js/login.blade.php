	<script type="text/javascript" src="{{ asset('auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('auth/vendor/bootstrap/css/bootstrap.min.css') }}"></script>
	<script type="text/javascript" src="{{ asset('auth/js/backstretch.js') }}"></script>
	<script type="text/javascript" src="{{ asset('auth/js/customScrollbar.js') }}"></script>
	<script type="text/javascript" src="{{ asset('auth/js/mousewheel.js') }}"></script>
	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		(function($){
			$(window).on("load",function(){
				$(".loginright").mCustomScrollbar();
			});
		})(jQuery);
		$(document).ready(function () {
			$.backstretch(["{{ asset('site/home/images/bg-02.jpg') }}"
				], {duration: 3000, fade: 750});
			$('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function () {
				$(this).removeClass('input-error');
			});
			$('.login-form').on('submit', function (e) {
				$(this).find('input[type="text"], input[type="password"], textarea').each(function () {
					if ($(this).val() == "") {
						e.preventDefault();
						$(this).addClass('input-error');
					} else {
						$(this).removeClass('input-error');
					}
				});
			});
		});
		
	</script>

	<script>
		function copy(email, password)
		{
			document.getElementById("email").placeholder = email;
			document.getElementById("password").placeholder = password;
		}
	</script>