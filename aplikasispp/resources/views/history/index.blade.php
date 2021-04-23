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
                                <li class="breadcrumb-item active" aria-current="page">Halaman History</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/history/export" class="btn btn-sm btn-neutral">Export PDF</a>
                    </div>
                </div>
                <!-- Card stats -->
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">History Transaksi</h3>
                        <p class="text-sm mb-0">
                            Semua history berdasarkan date/waktu
                        </p>
                    </div>
                    <div class="table-responsive py-4">
                        <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-flush dataTable" id="datatable-basic" role="grid"
                                        aria-describedby="datatable-basic_info">
                                        <thead class="thead-light">
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 177px;">Nama Petugas</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 274px;">Nama Siswa</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 139px;">Biaya Spp</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="width: 63px;">Bulan Dibayar</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="width: 136px;">Dibayar</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 114px;">Tunggakan</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-basic"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 114px;">Tanggal Dibayar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            @foreach ($pembayaran as $pembayaran)
                                            <tr>
                                                <th rowspan="1" colspan="1">{{$pembayaran->user->name}}</th>
                                                <th rowspan="1" colspan="1">{{$pembayaran->siswa->nama}}</th>
                                                <th rowspan="1" colspan="1">{{$pembayaran->siswa->spp->tahun}} -
                                                    {{$hspp = $pembayaran->siswa->spp->nominal}}</th>
                                                <th rowspan="1" colspan="1">{{$pembayaran->bulan}}</th>
                                                <th rowspan="1" colspan="1">{{$bspp = $pembayaran->bayar}}</th>
                                                <th rowspan="1" colspan="1">{{$hspp = $bspp}}</th>
                                                <th rowspan="1" colspan="1">{{$pembayaran->created_at->format('d M,Y')}}
                                                </th>
                                            </tr>
                                            @endforeach
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
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
                        © 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
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
</div>
@endsection