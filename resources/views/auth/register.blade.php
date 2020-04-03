@extends('layouts.login')

@section('title')
Register
@endsection

@section('css')
@include('layouts.css.login')
@endsection

@section('content')
<div class="col-lg-5 col-sm-5  form-box">
    <div class="loginbg" style="max-height: fit-content">
        <div class="form-top">
            <div class="form-top-left">
                <img src="{{ asset('site/home/images/app_logo.png') }}" class="logowidth">

            </div>
            <div class="form-top-right"> <i class="fa fa-key"></i>
            </div>
        </div>

        <div class="form-bottom">
            <h3 class="font-white">Registrasi User</h3>
            <form action="{{ route('register') }}" method="post">
                @csrf
                {{-- <input type='hidden' name='ci_csrf_token' value=''/> --}}
               <div class="form-group">
                    <label class="sr-only" for="form-name">
                    Nama</label>
                    <input type="name" name="name" placeholder="Nama" class="form-username form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus> <span class="text-danger"></span>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-email">
                    Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-username form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <span class="text-danger"></span>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-password form-control @error('password') is-invalid @enderror" required autocomplete="current-password"" id="password"> <span class="text-danger"></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="sr-only" for="password-confirm">
                    Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password"><span class="text-danger"></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <button type="submit" class="btn">
                Registrasi</button>


                <a href="{{ route('login') }}">
                    <span style="text-align:center;font-weight:normal;"><small class="text-info"><p> <i>Sudah Punya Akun</i></p></small></span>
                </a>
                
                <p style="margin-top: 20px;"><a style="color:#fff;padding-right: 20px;" href="{{ url('/') }}" class="forgot pull-right"> <i class="fa fa-empire"></i> Halaman Awal</a>
                </p>

                <p><a href="{{ route('password.request') }}"  class="forgot"> <i class="fa fa-key"></i> Forgot Password</a> </p>
            </div>
        </form>
    </div>
</div>

@include('auth.news')

@endsection

@section('js')
@include('layouts.js.login')
@endsection