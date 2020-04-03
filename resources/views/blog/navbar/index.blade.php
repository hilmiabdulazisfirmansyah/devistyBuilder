 <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('site/home/images/logo.png') }}" class="align-top" alt="logo aloer" style="display: inline-block;width: 25px;height: 33px;"> SMK ALOER<span>.</span></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first" style="margin-left: 6em">

                     @foreach ($navbar as $nav)
                     <li>
                         <a href="{{ $nav->link }}" class="smoothScroll">{{ $nav->menu }}</a>
                    </li>
                    @endforeach


               </ul>

               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-phone"></i> (022) 595 0166</a></li>
                    {{-- login --}}
                    @if (auth()->user())
                    <a href="" class="section-btn">Profile</a>
                    <a href="{{ url($role) }}/dashboard" class="section-btn">Dashboard</a>
                    @endif

                    @if (!auth()->user())
                    <a href="{{ url('login') }}" class="section-btn">Login</a>
                    <a href="{{ url('register') }}" class="section-btn">Daftar</a>
                    @endif
               </ul>
          </div>

     </div>
</section>