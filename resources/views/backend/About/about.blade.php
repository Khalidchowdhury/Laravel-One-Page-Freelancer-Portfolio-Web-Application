@extends('backend.layout.app')

@section('content')
  
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/roket.gif" alt="AdminLTELogo" height="240" width="260">
      </div>
      @include('backend.header')

      {{-- Main Content --}}
      

      <div class="content-wrapper">
        
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">About Section</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">About</a></li>
                  <li class="breadcrumb-item active">Dashboard </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

            
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_name">Title *</label>
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Header Section Title *" required="required" data-error="Title is required.">
                  </div>
              </div>
              <div class="col-md-6"></div>
          </div>

          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_message">Subtitle *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Header Section SubTitle" rows="4" required="required" data-error="Subtitle is Required"></textarea>
                </div>
              </div>
              <div class="col-md-6"></div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input type="file" name="" id="">
            </div>
            <div class="col-md-6"></div>
          </div>

          <input type="submit" class="btn btn-success btn-send mt-5" value="Send Message" >




          </div>
        </section>
      
      </div>




      @include('backend.Sidenav')

      @include('backend.footer')

    </div>

@endsection








