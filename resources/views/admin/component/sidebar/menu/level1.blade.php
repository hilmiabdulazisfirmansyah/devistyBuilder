<li class="nav-item">
	<a href="{{ url($role.$link) }}" class="nav-link @if(url()->current() == url($role.$link)){{ 'active' }}@endif">
		<i class="nav-icon {{ $icon }}"></i>
		<p>
			{{ $nama }}
			
			@if ($error_page == $nama)
			@if ($message_errors)
			<span class="right badge badge-danger">{{ $message_errors }}</span>
			@endif
			@endif

		</p>
	</a>

</li>