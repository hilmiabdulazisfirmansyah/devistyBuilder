  <section id="team" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Guru dan Tenaga Kependidikan</h2>
                         <h4>Mendidik dan Bertanggung Jawab</h4>
                    </div>
               </div>

               @foreach($pendidik as $guru)
               <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="{{ asset($guru->photo) }}" class="img-responsive" alt="">
                         <div class="team-hover">
                              <div class="team-item">
                                   <h4>Hubungi : {{ $guru->nama }}</h4> 
                                   <ul class="social-icon">
                                        <li><a href="{{ $guru->link_fb }}" class="fa fa-facebook"></a></li>
                                        <li><a href="{{ $guru->link_ig }}" class="fa fa-instagram"></a></li>
                                        <li><a href="{{ $guru->link_yt }}" class="fa fa-youtube"></a></li>
                                        <li><a href="{{ $guru->link_wa }}" class="fa fa-whatsapp"></a></li>
                                        <li><a href="{{ $guru->link_git }}" class="fa fa-github"></a></li>
                                        <li><a href="{{ $guru->email }}" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="team-info">
                         <h3>{{ $guru->nama }}</h3>
                         <p>{{ $guru->jenis_ptk_id_str}}</p>
                    </div>
               </div>
               @endforeach

          </div>
     </div>
</section>