 <section id="menu" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>SmartSchool / SmartApp</h2>
                         <h4>Aplikasi Management Sekolah</h4>
                    </div>
               </div>


               @foreach ($smartschool as $smartapp)


               <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                         <a href="{{ asset($smartapp->cover) }}" class="image-popup" title="{{ $smartapp->judul }}">
                              <img src="{{ asset($smartapp->cover) }}" class="img-responsive" alt="">

                              <div class="menu-info" style="text-align: right;">
                                   <a href="{{ route($smartapp->route) }}" class="section-btn">{{ $smartapp->judul }}</a>
                                   <div class="menu-item text-left">
                                        <h3>{{ $smartapp->judul }}</h3>
                                        <p>{{ $smartapp->description }}</p>
                                   </div>
                                   <div class="menu-price">
                                        <span></span>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>                  

               @endforeach

          </div>
     </div>
</section>