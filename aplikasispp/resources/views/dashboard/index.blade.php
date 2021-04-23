@extends('layouts.master')

@section('content')
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin"
                            data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder"
                                        src="{{asset('template/assets/img/theme/team-4.jpg')}}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/logout" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Aplikasi SPP</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Halaman Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
                <!-- Card stats -->
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
          <div class="col-lg-12">
            <!-- Image-Text card -->
            <!-- Members list group card -->
            <!-- Messages -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0">Latest messages</h5>
              </div>
              <!-- Card body -->
              <div class="card-body p-0">
                <!-- List group -->
                <div class="list-group list-group-flush">
                    @foreach ($pembayaran as $pembayaran)
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4">
                    <div class="d-flex w-100 justify-content-between">
                      <div>
                        <div class="d-flex w-100 align-items-center">
                          <img src="{{asset('template/assets/img/theme/team-2.jpg')}}" alt="Image placeholder" class="avatar avatar-xs mr-2">
                          <h5 class="mb-1">Nama Petugas : {{$pembayaran->user->name}} - {{$pembayaran->siswa->kelas->nama}}</h5>
                        </div>
                      </div>
                      <small>{{$pembayaran->created_at->format('d M,Y')}}</small>
                    </div>
                    <h4 class="mt-3 mb-1"><span class="text-info">●</span>Nama Siswa : {{$pembayaran->siswa->nama}}</h4>
                    <p class="text-sm mb-0">Biaya Spp : {{$pembayaran->siswa->spp->tahun}} - {{$hspp = $pembayaran->siswa->spp->nominal}}</p>
                    <p class="text-sm mb-0">Dibayar Bulan : {{$pembayaran->bulan}}</p>
                    <p class="text-sm mb-0">Dibayar : {{$bspp = $pembayaran->bayar}}</p>
                    <p class="text-sm mb-0">Tunggakan : -{{$hspp-$bspp}}</p>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <div class="copyright text-center text-lg-left text-muted">
                © 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
        @if (session('loginsucces'))
        <div data-notify="container" class="alert alert-dismissible alert-success alert-notify animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.2s ease-in-out 0s; z-index: 1080; top: 15px; left: 0px; right: 0px; animation-iteration-count: 1;">
          <span class="alert-icon ni fas fa-check-circle" data-notify="icon">
            </span> <div class="alert-text" <="" div="">
              <span class="alert-title" data-notify="title">Selamat</span>
              <span data-notify="message">Login Berhasil</span>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        @endif
      </div>
</div>
@endsection