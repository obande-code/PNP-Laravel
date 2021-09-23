@extends('layouts.apps')
@section('content')
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('AdminLTE-3.1.0/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
       <span class="font-weight-bold">Hi</span>, PNP Chief Guillermo Lorenzo Tolentino Eleazer
        <img src="{{ asset('images/img_20210823.png') }}" class="rounded-circle" alt="...">
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4 overflow-hidden"  style="height: 100vh">
    <!-- Brand Logo -->
        <div class="form-group d-flex flex-column justify-content-center" style="background-color: #000066; width: 100%">
            <div class="form-group d-flex justify-content-center">
                <img src="{{ asset('images/PNP-Logo-768x432@1X.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="form-group row justify-content-center">
                <h6 class="text-light"><span class="font-weight-bold">PNP</span> Violation Ticketing System</h6>
            </div>
        </div>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav flex-column">
            <li class="nav-item mb-3">
                <a class="nav-link active text-dark" href="/home">
                <span><img src="{{ asset('images/icon_images/dashboard-violet.png') }}" id="dashboard_icon" style="width: 33px;" alt="Kiwi standing on oval"></span>
                <span class="font-weight-bold ml-1 menu_item" id="dashboard_text"  style="font-size: 17px">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link text-dark" href="/tickets">
                <span><img src="{{ asset('images/icon_images/ticketingviolet.png') }}" id="tickets_icon" style="width: 33px" alt="Kiwi standing on oval"></span>
                <span class="font-weight-bold ml-1 menu_item" id="tickets_text"  style="font-size: 17px">Tickets</span>
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link text-dark" href="/personal">
                <span><img src="{{ asset('images/icon_images/pnp-violet1.png') }}" id="pnp_icon" style="width: 33px" alt="Kiwi standing on oval"></span>
                <span class="font-weight-bold ml-1 menu_item" id="pnp_text" style="font-size: 17px">PNP Personal</span>
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link text-dark" href="/station">
                <span><img src="{{ asset('images/icon_images/station-violet.png') }}" id="station_icon" style="width: 27px" alt="Kiwi standing on oval"></span>
                <span class="font-weight-bold ml-1 menu_item" id="station_text" style="font-size: 17px">Station list</span>
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link text-dark" href="/category">
                <span><img src="{{ asset('images/icon_images/category-violet.png') }}" id="category_icon" style="width: 25px" alt="Kiwi standing on oval"></span>
                <span class="font-weight-bold ml-1 menu_item" id="category_text" style="font-size: 17px">Category list</span>
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link text-dark" href="/violation">
                <span><img src="{{ asset('images/icon_images/violation-violet.png') }}" id="violation_icon" style="width: 25px" alt="Kiwi standing on oval"></span>
                <span class="font-weight-bold ml-1 menu_item" id="violation_text" style="font-size: 17px">Violation list</span>
                </a>
            </li>
        </ul>
      </nav>
      <div style="position: absolute; bottom: 10px; left: 20%; width: 80%">
        <a class="btn btn-danger w-75 mt-5 text-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            LOG-OUT
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content">
        @yield('mainContent')
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-dark">
    <strong>Copyright &copy; 2021 MRGEEK+OUTERBOX.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
@endsection
