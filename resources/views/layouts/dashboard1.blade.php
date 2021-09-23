@extends('layouts.app')
@section('content')
<div class="d-flex">
    <div style="width: 20%">
        <div class="form-group d-flex flex-column justify-content-center" style="background-color: #000066; width: 100%">
            <div class="form-group d-flex justify-content-center" style="background-color: #000066; width: 100%">
                <img src="{{ asset('images/PNP-Logo-768x432@1X.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="form-group row justify-content-center">
                <h5 class="text-light"><span class="font-weight-bold">PNP</span> Violation Ticketing System</h5>
            </div>
        </div>
        <nav id="sidebarMenu">
        <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a class="nav-link active text-dark" href="/home">
                    <span><i class="bi-alarm mr-3 ml-3" style="font-size: 1.3rem;"></i></span>
                    <span class="font-weight-bold" style="font-size: 17px">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link text-dark" href="/tickets">
                    <span><i class="bi bi-stickies-fill mr-3 ml-3" style="font-size: 1.3rem;"></i></span>
                    <span class="font-weight-bold" style="font-size: 17px">Tickets</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link text-dark" href="/personal">
                    <span><i class="bi bi-person-badge-fill mr-3 ml-3" style="font-size: 1.3rem;"></i></span>
                    <span class="font-weight-bold" style="font-size: 17px">PNP Personal</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link text-dark" href="station">
                    <span><i class="bi bi-house mr-3 ml-3" style="font-size: 1.3rem;"></i></span>
                    <span class="font-weight-bold" style="font-size: 17px">Station list</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link text-dark" href="/category">
                    <span><i class="bi bi-table mr-3 ml-3" style="font-size: 1.3rem;"></i></span>
                    <span class="font-weight-bold" style="font-size: 17px">Category list</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link text-dark" href="/violation">
                    <span><i class="bi-menu-up ml-3 mr-3" style="font-size: 1.3rem;"></i></span>
                    <span class="font-weight-bold" style="font-size: 17px">Violation list</span>
                    </a>
                </li>
            </ul>
        </div>
        </nav>
        <div class="d-flex justify-content-center align-items-end mt-5">
            <a class="btn btn-danger w-75 mt-5" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                LOG-OUT
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <div style="width: 80%">
        <nav class="navbar navbar-light sticky-top bg-white flex-md-nowrap p-0 shadow" style="height: 50px">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="float-right">
                Hi, PNP Chief Guillermo Lorenzo Tolentino Eleazer
                <img src="{{ asset('images/img_20210823.png') }}" class="rounded-circle" alt="...">
            </div>
        </nav>
        <main role="main">
            @yield('mainContent')
        </main>
        <!-- <div style="position: absolute; bottom: 0;"> -->
            <div class="ml-2 d-flex justify-content-between">
                <h6>Copyright &copy; 2021 MRGEEK+OUTERBOX. All rights reserved.</h6>
                <h6 class="float-right ">Version 1.0.1</h6>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection