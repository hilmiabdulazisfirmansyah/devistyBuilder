@switch($ukuran)

@case('besar')
<button type="submit" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="{{ $target }}">{{ $name }}</button>
@break

@case('kecil')
<button type="submit" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="{{ $target }}">{{ $name }}</button>
@break

@default
<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="{{ $target }}">{{ $name }}</button>
@endswitch