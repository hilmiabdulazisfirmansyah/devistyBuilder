@php
	$news = DB::connection('web')->table('news')->get();
@endphp

<div class="col-lg-1 col-sm-1"><div class="separatline"></div></div>
<div class="col-lg-6 col-sm-6 col-sm-6">
	<div class="mCustomScrollbar loginright form-box">
		<div class="messages">
			<h3>Berita Terbaru</h3>

			@foreach ($news as $new)
			<h4>{{ $new->judul }}</h4>

			@php
           $string = strip_tags($new->isi);
           if (strlen($string) > 500) {

    // truncate string
            $stringCut = substr($string, 0, 500);
            $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
          }
          @endphp

			<p>

				{{ $string}}
				<a class=more href="#">Baca Selengkapnya</a>
			</p>
			<div class="logdivider"></div>
			@endforeach

		</div>
	</div>
</div><!--./col-lg-6-->