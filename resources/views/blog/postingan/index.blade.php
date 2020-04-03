 <section id="about" data-stellar-background-ratio="0.5">
   
   <div class="container">
    @foreach ($posts as $post)
    <div class="row" style="margin-bottom: 20vh;border-radius: 10px;background-color: ghostwhite;min-height: 360px;">

     <div class="col-md-6 col-sm-12">
      <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
       <img src="{{ asset($post->cover) }}" class="img-responsive" alt="">
     </div>
   </div>

   <div class="col-md-6 col-sm-12">
    <div class="about-info" style="padding: 50px">
     <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
       <h2>{{ucwords($post->judul)}} - {{ucwords($post->sub_judul)}}</h2>
       <h4>{{$post->created_at}}<p class="post-meta"><i>Di Posting Oleh -</i> {{ $post->user_id }}</h4>
       </div>

       <div class="wow fadeInUp mt-5" data-wow-delay="0.4s" style="margin-bottom: 25px">
         @php
         $string = strip_tags($post->postingan);
         if (strlen($string) > 500) {

          $stringCut = substr($string, 0, 500);
          $endPoint = strrpos($stringCut, ' ');

          $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        }
        echo $string;
        @endphp
      </div>
      <a href="{{ route('postingan.show',['postingan' => $post->id]) }}" class="section-btn">Baca Selengkapnya</a>
    </div>
  </div>

</div>
@endforeach
</div>

</section>