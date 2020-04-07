<div class="form-group">
	<label for="nama" class="col">Nama User</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'nama', 'placeholder' => 'Nama User', 'id' => 'nama'])
</div>

<div class="form-group">
	<label for="nama" class="col">Email</label>
	@input(['type' => 'text', 'ukuran' => 'biasa', 'name' => 'email', 'placeholder' => 'Email', 'id' => 'email'])
</div>

<div class="form-group">
	<label for="nama" class="col">Password</label>
	<input type="password" name="password" id="password" placeholder="Password" required class="form-control form-control">
</div>

<div class="form-group">
	<label for="level" class="col">Role</label>
	@input(['type' => 'select', 'name' => 'role', 'id' => 'role', 'options' => DB::table('roles')->get(), 'value1' => 'id', 'value2' => 'nama'])
</div>


@switch($action)
@case('edit')

@break

@case('tambah')

@break

@default

@endswitch
