
<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>Aplikasi SPP</title>
   <!-- Favicon -->
   <link rel="icon" href="{{asset('template/assets/img/brand/favicon.png')}}" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('template/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('template/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('template/assets/css/argon.css?v=1.1.0')}}" type="text/css">
   <!--Plug in allert-->
   <link rel="stylesheet" href="{{asset('template/assets/vendor/animate.css/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('template/assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
 </head>
 
 <body>
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
     <div class="scrollbar-inner">
       <!-- Brand -->
       <div class="sidenav-header d-flex align-items-center">
         <a class="navbar-brand" href="#">
           <img src="{{asset('template/assets/img/brand/spps.png')}}" class="navbar-brand-img" alt="...">
         </a>
         <div class="ml-auto">
           <!-- Sidenav toggler -->
           <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
             <div class="sidenav-toggler-inner">
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
             </div>
           </div>
         </div>
       </div>
       <div class="navbar-inner">
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
           <!-- Nav items -->
           <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                  <i class="ni ni-archive-2 text-green"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
             <li class="nav-item">
               <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                 <i class="ni ni-ungroup text-orange"></i>
                 <span class="nav-link-text">Data</span>
               </a>
               <div class="collapse" id="navbar-examples">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="/siswa" class="nav-link">Data-Siswa</a>
                   </li>
                   <li class="nav-item">
                     <a href="/petugas" class="nav-link">Data-Petugas</a>
                   </li>
                   <li class="nav-item">
                     <a href="/kelas" class="nav-link">Data-Kelas</a>
                   </li>
                   <li class="nav-item">
                     <a href="/spp" class="nav-link">Data-SPP</a>
                   </li>
                 </ul>
               </div>
             </li>
             @endif

           </ul>
           <!-- Divider -->
           <hr class="my-3">
           <!-- Heading -->
           <h6 class="navbar-heading p-0 text-muted">Lainnya</h6>
           <!-- Navigation -->
           <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                  <i class="ni ni-align-left-2 text-default"></i>
                  <span class="nav-link-text">Transaksi</span>
                </a>
                <div class="collapse" id="navbar-tables">
                  <ul class="nav nav-sm flex-column">
                    @if (auth()->user()->role == 'admin' | auth()->user()->role == 'petugas')
                    <li class="nav-item">
                      <a href="/pembayaran" class="nav-link">Entry Transaksi</a>
                    </li>
                    @endif
                    <li class="nav-item">
                      <a href="/history" class="nav-link">History Transaksi</a>
                    </li>
                  </ul>
                </div>
              </li>
           </ul>
         </div>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   @yield('content')
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{asset('template/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/js-cookie/js.cookie.js')}}"></script>
   <script src="{{asset('template/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
   <!-- Optional JS -->
   <script src="{{asset('template/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
   <!-- Argon JS -->
   <script src="{{asset('template/assets/js/argon.js?v=1.1.0')}}"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="{{asset('template/assets/js/demo.min.js')}}"></script>
   <script src="{{asset('template./assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
   <script src="{{asset('template./assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
 </body>
 
 </html>