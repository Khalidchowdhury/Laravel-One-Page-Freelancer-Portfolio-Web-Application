@extends('backend.layout.app')

@section('content')
  
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/roket.gif" alt="AdminLTELogo" height="240" width="260">
      </div>

      
      @include('backend.header')

      @include('backend.dashboard')

      @include('backend.Sidenav')

      @include('backend.footer')

    </div>

@endsection








