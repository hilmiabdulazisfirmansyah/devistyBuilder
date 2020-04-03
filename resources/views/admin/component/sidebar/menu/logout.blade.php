<li class="nav-item">
	<form action="{{ route('logout') }}" method="POST">
		@csrf
		<button type="submit" class="btn btn-danger" style="width: 100%"><i class="fa fa-power-off"></i> Logout</button>
	</form>
</li>