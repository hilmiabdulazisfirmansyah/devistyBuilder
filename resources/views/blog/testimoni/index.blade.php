   <section id="testimonial" data-stellar-background-ratio="0.5" style="background: url({{ asset('site/home/images/testimonial-bg.jpg') }}) center center no-repeat;">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Testimoni</h2>
                    </div>
               </div>  

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">

                         @foreach ($testimonial as $testimoni)
                         <div class="item">
                              <p>"{{ $testimoni->komentar }}"</p>
                              <div class="tst-author">
                                   <h4>{{ $testimoni->nama }}</h4>
                                   <span>{{ $testimoni->peran }}</span>
                              </div>
                         </div>
                         @endforeach

                    </div>
               </div>

          </div>
     </div>
</section>  
