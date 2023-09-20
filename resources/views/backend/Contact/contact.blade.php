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
                <h1 class="m-0">Contact Details</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Contact</a></li>
                  <li class="breadcrumb-item active">Dashboard </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

                                
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Massage</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
                
            </table>




          </div>
        </section>
      
      </div>




      @include('backend.Sidenav')

      @include('backend.footer')

    </div>

@endsection








