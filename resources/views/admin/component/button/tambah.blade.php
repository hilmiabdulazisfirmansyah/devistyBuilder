@switch($ukuran)

@case('besar')
<button type="submit" class="btn btn-block btn-primary btn-lg">{{ $name }}</button>
@break

@case('kecil')
<button type="submit" class="btn btn-block btn-primary btn-sm">{{ $name }}</button>
@break

@default
<button type="button" class="btn btn-block btn-primary">{{ $name }}</button>
@endswitch