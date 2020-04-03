<section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="row">

          <div class="owl-carousel owl-theme">

               @foreach ($carousels as $carousel)
               <div class="item" style="background-image: url('{{ asset($carousel->path) }}');">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-8 col-sm-12">

                              </div>
                         </div>
                    </div>
               </div>
               @endforeach


          </div>
     </section>