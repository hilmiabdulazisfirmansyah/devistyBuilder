<!DOCTYPE html>
<html lang="id">
<head>

     <title>@yield('title', 'SMK ALOER WARGAKUSUMAH')</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="Website Pendidikan SMK ALOER WARGAKUSUMAH">
     <meta name="keywords" content="Website Pendidikan, SmartSchool, SMK Terbaik Provinsi Jawa Barat">
     <meta name="author" content="SMK ALOER WARGAKUSUMAH">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="shortcut icon" href="{{ asset('site/home/images/favicon.png') }}">

     @yield('css')

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <!-- MENU -->
    @yield('navbar')


     <!-- HOME -->
     @yield('carousel')


          <!-- POSTINGAN -->
     @yield('postingan')


           <!-- TEAM -->
     @yield('pendidik')


          <!-- MENU-->
          @include('blog.menu.index', [
               'judul'       =>   'PROFILE', 
               'sub_judul'   =>   'PROFILE SEKOLAH SMK ALOER WARGAKUSUMAH',
               'cards'       =>   $profiles,
               'id'          =>    'profile'])

          @include('blog.menu.index', [
               'judul'        =>   'SMARTSCHOOL / SMARTAPP',
               'sub_judul'    =>   'APLIKASI MANAGEMENT SEKOLAH',
               'cards'        =>   $smartschools,
               'id'           =>   'smartschool'])

          @include('blog.menu.index', [
               'judul'        =>   'JURUSAN',
               'sub_judul'    =>   'Terdapat Beberapa Jurusan di SMK ALOER WARGAKUSUMAH',
               'cards'        =>   $jurusan,
               'id'           =>   'jurusan']) 

          @include('blog.menu.index', [
               'judul'        =>   'PROGRAM SEKOLAH',
               'sub_judul'    =>   'Program Sekolah yang Kreatif dan Inovatif',
               'cards'        =>   $program,
               'id'           =>   'program'])

          @include('blog.menu.index', [
               'judul'        =>   'EKSTRAKULIKULER',
               'sub_judul'    =>   'Kegiatan tambahan yang dilakukan disekolah atau diluar sekolah',
               'cards'        =>   $ekskul,
               'id'       =>   'ekskul'])

               <!-- TESTIMONIAL -->
            @yield('testimoni')

               <!-- CONTACT -->
               <section id="contact" data-stellar-background-ratio="0.5">
                    <div class="container">
                         <div class="row">

                            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                              <div id="google-map">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1611.1830948074887!2d107.78369505610476!3d-7.051101684758597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c722328a6e4d%3A0x43aa2e5d2500db18!2sSMK%20Aloer%20Wargakusumah!5e1!3m2!1sid!2sid!4v1582609627749!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                              </div>
                         </div>    

                         <div class="col-md-6 col-sm-12">

                              <div class="col-md-12 col-sm-12">
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                        <h2>Kirim Testimoni Anda</h2>
                                        <h4>Mengenai SMK ALOER WARGAKUSUMAH</h4>
                                   </div>
                              </div>

                              <!-- CONTACT FORM -->
                              <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                                   <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                                   <h6 class="text-success">Testimoni Berhasil di Kirim</h6>

                                   <!-- IF MAIL NOT SENT -->
                                   <h6 class="text-danger">Mohon Masukkan Alamat email yang valid</h6>

                                   <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="cf-name" name="name" placeholder="Nama Lengkap">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email">
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Peran (Orang Tua Siswa / Alumni / Siswa / Visitor)">

                                        <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Masukkan Komentar Anda"></textarea>

                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim</button>
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>
          </section>          


          <!-- FOOTER -->
          <footer id="footer" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-3 col-sm-8">
                              <div class="footer-info">
                                   <div class="section-title">
                                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Alamat Kantor</h2>
                                   </div>
                                   <address class="wow fadeInUp" data-wow-delay="0.4s">
                                        <p>Kp. Baru RT 01 RW 05,<br>Ds. Mekarpawitan Kec. Paseh<br>Kab. Bandung, 40383</p>
                                   </address>
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-8">
                              <div class="footer-info">
                                   <div class="section-title">
                                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Informasi</h2>
                                   </div>
                                   <address class="wow fadeInUp" data-wow-delay="0.4s">
                                        <p>(022) 595 0166</p>
                                        <p><a href="mailto:smkaloerwk1@gmail.com">smkaloerwk1@gmail.com</a></p><br>
                                        <p>0821 1882 5906 (Eliyana Safitri, S.Pd. - Kepala Sekolah)</p><br>
                                        <p>0821 1146 6564 (Undang, S.Pd. - Kesiswaan)</p><br>
                                        <p>0821 1146 6564 (Agus Syamsudin, S.Pd. - Ketua Bursa Kerja Khusus)</p><br>
                                        <p>0853 2158 3245 (Hilmi Abdul Azis Firmansyah - Developer)</p><br>
                                   </address>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-8">
                              <div class="footer-info footer-open-hour">
                                   <div class="section-title">
                                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Jam Kerja</h2>
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="0.4s">
                                        <p>Minggu: Tutup</p>
                                        <div>
                                             <strong>Senin - Sabtu</strong>
                                             <p>7:00 WIB - 17:15 WIB</p>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-2 col-sm-4">
                              <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                                   <li><a href="https://www.facebook.com/smkaloerwk" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://api.whatsapp.com/send?phone=+6285321583245" class="fa fa-whatsapp"></a></li>
                              </ul>

                              <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                                   <p><br>Copyright &copy; 2020 <br>SMK ALOER WARGAKUSUMAH

                                        <br><br>Developer: Devisty Company</p>
                                   </div>
                              </div>

                         </div>
                    </div>
               </footer>


               <!-- SCRIPTS -->
               @yield('js')
          </body>
          </html>