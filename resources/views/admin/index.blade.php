@extends('layouts.adminLTE')

{{-- Title Here --}}
@section('title', $title)


{{-- CSS Here--}}
@section('css')
@include('layouts.css.adminLTE')
@endsection
{{-- end CSS --}}

@section('navbar')
@include('admin.component.navbar.adminLTE',[
  'notification_messages' => $notification_messages, 
  ])
  @endsection

  @section('sidebar')
  @include('admin.component.sidebar.adminLTE')
  @endsection

  @section('header')
  @include('admin.component.header.adminLTE')
  @endsection

  @section('content')
  @include('admin.page.'.$page)
  @endsection


  {{-- JS Here --}}
  @section('js')
  @include('layouts.js.adminLTE')
  @include('admin.scripts.sidebar')
@endsection
{{-- End JS --}}