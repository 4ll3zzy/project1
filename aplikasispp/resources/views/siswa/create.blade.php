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
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
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
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('template/assets/img/theme/team-4.jpg')}}">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
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
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
          <div class="col">
            <div class="card-wrapper">
              <!-- Custom form validation -->
              <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <h3 class="mb-0">Tambah Data Siswa</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                      <p class="mb-0">
                        Siswa dapan menggunakan email dan password untuk login.
                        <br>
                        Untuk password disetting default (siswa)
                        <br>
                      </p>
                    </div>
                  </div>
                  <hr>
                  <form action="/siswa" method="POST" class="needs-validation" novalidate="">
                    {{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label class="form-control-label" for="validationCustom01">Nisn</label>
                        <input name="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" id="validationCustom01" placeholder="tidak boleh kosong"  required="">
                        @error('nisn')
                        <div class="invalid-feedback">
                          harus berupa angka min-5 max-16
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-4 mb-3">
                        <label class="form-control-label" for="validationCustom02">Nis</label>
                        <input name="nis" type="text" class="form-control @error('nis') is-invalid @enderror" id="validationCustom02" placeholder="tidak boleh kosong" required="">
                        @error('nis')
                        <div class="invalid-feedback">
                          harus berupa angka min-5 max-16
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-4 mb-3">
                        <label class="form-control-label" for="validationCustomUsername">Nama Lengkap Siswa</label>
                        <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="validationCustomUsername" placeholder="tidak boleh kosong" aria-describedby="inputGroupPrepend" required="">
                        @error('nama')
                        <div class="invalid-feedback">
                          nama lengkap max-45
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="validationCustom03">Alamat</label>
                        <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="validationCustom03" placeholder="tidak boleh kosong" required="">
                        @error('alamat')
                        <div class="invalid-feedback">
                          mohon masukkan alamat.
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-3 mb-3">
                        <label class="form-control-label" for="validationCustom04">No Telepon</label>
                        <input name="tlpn" type="text" class="form-control @error('tlpn') is-invalid @enderror" id="validationCustom04" placeholder="tidak boleh kosong" required="">
                        @error('tlpn')
                        <div class="invalid-feedback">
                          no telepon harus berupa angka min-10 max-14
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-3 mb-3">
                        <label class="form-control-label" for="validationCustom04">Email</label>
                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="validationCustom04" placeholder="tidak boleh kosong" required="">
                        @error('email')
                        <div class="invalid-feedback">
                          email harus menggunakan @
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="validationCustom03">Kelas</label>
                        <select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
                          @foreach ($kelas as $kelas)
                          <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="validationCustom03">Spp</label>
                        <select name="spp_id" class="form-control" id="exampleFormControlSelect1">
                          @foreach ($spp as $spp)
                          <option value="{{$spp->id}}">{{$spp->tahun}} - {{$spp->nominal}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </form>
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
      </div>
@endsection