@extends('layouts.blog')

@section('css')
@include('layouts.css.blog')
<style type="text/css">
	a:hover, a:active, a:focus, .navbar-brand{
		background-color: transparent;
	}
</style>
@endsection

@section('navbar')
@include('blog.navbar.index')
@endsection

@section('carousel')
@include('blog.carousel.index')
@endsection

@section('postingan')
@include('blog.postingan.index')
@endsection

@section('pendidik')
@include('blog.pendidik.index')
@endsection

@section('testimoni')
@include('blog.testimoni.index')
@endsection




@section('js')
@include('layouts.js.blog')
@endsection