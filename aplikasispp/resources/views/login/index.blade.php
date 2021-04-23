
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
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('template/assets/css/argon.css?v=1.1.0')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('template/assets/vendor/animate.css/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('template/assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
 </head>
 
 <body class="bg-default">
   <!-- Navbar -->
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-gradient-primary py-7 py-lg-5 pt-lg-3">
       <div class="container">
         <div class="header-body text-center mb-7">
         </div>
       </div>
       <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
       </div>
     </div>
     <!-- Page content -->
     <div class="container mt--8 pb-5">
       <div class="row justify-content-center">
         <div class="col-lg-5 col-md-7">
           <div class="card bg-secondary border-0 mb-0">
             <div class="card-header bg-transparent pb-5">
               <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
               <div class="btn-wrapper text-center">
                 <a href="#" class="btn btn-neutral btn-icon">
                   <span class="btn-inner--icon"><img src="{{asset('template/assets/img/icons/common/github.svg')}}"></span>
                   <span class="btn-inner--text">Github</span>
                 </a>
                 <a href="#" class="btn btn-neutral btn-icon">
                   <span class="btn-inner--icon"><img src="{{asset('template/assets/img/icons/common/google.svg')}}"></span>
                   <span class="btn-inner--text">Google</span>
                 </a>
               </div>
             </div>
             <div class="card-body px-lg-5 py-lg-5">
               <div class="text-center text-muted mb-4">
                 <small>Or sign in with credentials</small>
               </div>
               <form role="form" action="/postlogin" method="POST">
                {{csrf_field()}}
                 <div class="form-group mb-3">
                   <div class="input-group input-group-merge input-group-alternative">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                     </div>
                     <input name="email" class="form-control" placeholder="Email" type="email">
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="input-group input-group-merge input-group-alternative">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                     </div>
                     <input name="password" class="form-control" placeholder="Password" type="password">
                   </div>
                 </div>
                 <div class="custom-control custom-control-alternative custom-checkbox">
                   <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                   <label class="custom-control-label" for=" customCheckLogin">
                     <span class="text-muted">Remember me</span>
                   </label>
                 </div>
                 <div class="text-center">
                   <button type="submit" class="btn btn-primary my-4">Sign in</button>
                 </div>
               </form>
             </div>
           </div>
           <div class="row mt-3">
             <div class="col-6">
               <a href="#" class="text-light"><small>Forgot password?</small></a>
             </div>
             <div class="col-6 text-right">
               <a href="#" class="text-light"><small>Create new account</small></a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
           </div>
         </div>
         <div class="col-xl-6">
           <ul class="nav nav-footer justify-content-center justify-content-xl-end">
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
     </div>
   </footer>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{asset('template/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/js-cookie/js.cookie.js')}}"></script>
   <script src="{{asset('template/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
   <!-- Argon JS -->
   <script src="{{asset('template/assets/js/argon.js?v=1.1.0')}}"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="{{asset('template/assets/js/demo.min.js')}}"></script>
   <script src="{{asset('template./assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
   <script src="{{asset('template./assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

   @if (session('loginerror'))
     <div data-notify="container" class="alert alert-dismissible alert-warning alert-notify animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.3s ease-in-out 0s; z-index: 1080; top: 15px; left: 0px; right: 0px; animation-iteration-count: 1;">
      <span class="alert-icon ni fas fa-exclamation-circle" data-notify="icon"></span><i class=""></i>
      <div class="alert-text" <="" div="">
        <span class="alert-title" data-notify="title">Kesalahan Login</span>
        <span data-notify="message">Email atau password salah !</span>
      </div>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      </div>
   @endif
   @if (session('logoutsucces'))
   <div data-notify="container" class="alert alert-dismissible alert-success alert-notify animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1080; top: 15px; left: 0px; right: 0px; animation-iteration-count: 1;">
     <span class="alert-icon ni fas fa-check-circle" data-notify="icon">
       </span> <div class="alert-text" <="" div="">
         <span class="alert-title" data-notify="title">Sukses</span>
         <span data-notify="message">Logout Berhasil</span>
       </div>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
   @endif
 </body>
 
 </html>