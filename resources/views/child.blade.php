@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@component('alert')
<strong>Whoops!</strong> Something went wrong!
@endcomponent
@endsection

@section('content')
<p>This is my body content.</p>
@endsection