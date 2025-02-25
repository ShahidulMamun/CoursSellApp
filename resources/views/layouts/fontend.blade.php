<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
   <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('panel/assets/css/all.min.css')}}">
           <link rel="stylesheet" href="{{asset('fontawesome-free/css/font-awesome.css')}}">
           <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">
           <link rel="stylesheet" href="{{asset('fontawesome-free/css/font-awesome.min.css')}}">
    <!-- Styles --> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('panel/assets/css/style.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    
<style>

  

.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 2.5rem;
    padding-left: 2.5rem;
  }

  .navbar-nav{
  font-family: "Montserrat", Sans-serif;
  font-size: 18px;
  text-transform: capitalize;
  }

.nav-link {
  color: #6c757d;
}

.active{
   color: #d3b574;
}

.nav-link:hover {
  color: #d3b574;
 /* padding-left: 100px;*/
}

.navbar-toggler-icon{
  color: white;
}

</style>
    
</head>
<body>
    <div id="app"> 
      <!-- head top -->
     <div class="container-fluid sticky-top bg-dark">
      <div class="container">
       <div class="row bg-dark">
         <div class="col-12 col-xsm-10 col-sm-6 col-md-5 col-lg-5 col-xl-3 col-xxl-3 mt-2 mt-sm-2 mt-lg-2 mt-lg-2 mt-xl-2 mt-xxl-2 d-none d-sm-block">
          <a class="text-white text-decoration-none" href="#"><i class="fa fa-youtube-play text-white" aria-hidden="true"></i>  {{$settings->site_title ?? "ShikhonHub"}}</a>
         </div>
          <div class="col-12 col-xsm-12 col-sm-6 col-md-7 col-lg-7 col-xl-3 col-xxl-3 mt-2 mt-sm-2 mt-lg-2 mt-lg-2 mt-xl-2 mt-xxl-2 d-none d-sm-block">
           <p class="text-white"><i class="fa fa-envelope-o" aria-hidden="true"></i>  {{$settings->email ?? "Not set"}}</p>
      </div>
       <div class="col-12 col-xsm-12 col-sm-6 col-md-7 col-lg-7 col-xl-3 col-xxl-3 mt-2 mt-sm-2 mt-lg-2 mt-lg-2 mt-xl-2 mt-xxl-2 d-none d-sm-block">
         <p class="text-white"><i class="fa fa-map-marker fa-1x" aria-hidden="true"></i>  {{$settings->address ?? "Not Set"}}</p>
      </div>
       <div class="col-12 col-xsm-12 col-sm-6 col-md-7 col-lg-7 col-xl-3 col-xxl-3 text-right">
          <a class="btn btn-primary text-decoration-none btn-lg shadow border-0" id="login" href="{{route('login')}}" role="button">Login</a>
      </div>
       </div>
       </div>
<div class="row">
   <div class="col-12 p-0">
     <nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm mt-0 py-5">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('img/vu4.png')}}" width="30" height="30" class="" alt="">
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                    <span class="navbar-toggler-icon icon-bar"><i class="fa fa-bars mt-1" aria-hidden="true"></i></span>
                </button>
      <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-5">
                                <li class="nav-item">
                                  <a class="nav-link active" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ asset('/contact')}}">Contact</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ asset('/live-courses')}}">Live Courses</a>
                                </li>
                                 <li class="nav-item">
                                <a class="nav-link" href="{{ asset('/courses-recorded')}}">Recorded Courses</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    </nav>
                  </div>
                 </div>
               </div>
     <!-- end head top -->
        <main class="">
            @yield('content')
        </main>

        <section id="second-footer" class="bg-dark">
      <div class="container">
          <div class="row">
        <!-- Subscribe      -->
      <div class="col-12">
 <!--  <form>
  <div class="form-row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
     
    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
      <input type="text" class="form-control form-control-lg" placeholder="First name">
    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
      <input type="text" class="form-control form-control-lg" placeholder="Last name">
    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2">
    <button type="button" class="btn btn-outline-secondary btn-lg btn-block text-white"> Subscribe</button>
    </div>
  </div>
</form> -->
  </div>
  <!-- end Subscribe -->
                <div class="col-6 col-xsm-6 col-md-6 col-sm-6">
                  <!-- footer menu -->
                   <ul class="navbar-nav ms-auto menutext mt-5">
                    <p class="text-white">Important Links</p>
                              <li class="nav-item">
                               <a class="text-danger" href="#">Privacy Policy</a>
                             </li>
                             <li class="nav-item">
                               <a class="text-danger" href="#">Live Course</a>
                             </li>

                          <li class="nav-item">
                            <a class="text-danger" href="#">Recorded Courses</a>
                          </li>
                        <li class="nav-item">
                            <a class="text-danger" href="#">About Me</a>
                        </li>
                    </ul>
                    <!-- end footer menu -->
                </div>
                <!-- social media button -->
                 <div class="col-6 col-md-6 col-xsm-6 mt-4">
  <h5 class="text-white mt-4">Connects With Us</h5>
 

 @if(isset($social))
      <!-- Whatsapp -->
   @if($social->whatsapp)
<a data-mdb-ripple-init class="btn btn-primary border-0 mt-1" style="background-color: #25d366;" href="https://wa.me/{{ $social->whatsapp }}" role="button"
  ><i class="fab fa-whatsapp fa-2x"></i
></a>
@endif
<!-- Facebook -->
 @if($social->facebook)
 <a data-mdb-ripple-init class="btn btn-primary border-0 mt-1" style="background-color: #3b5998;" href="{{ $social->facebook }}" role="button"
  ><i class="fab fa-facebook-f fa-2x"></i>
</a>
 @endif
<!-- Youtube -->
  @if($social->youtube)
 <a data-mdb-ripple-init class="btn btn-primary border-0 mt-1" style="background-color: #ed302f;" href="{{ $social->youtube }}" role="button"
  ><i class="fab fa-youtube fa-2x"></i
></a>
 @endif
<!-- Linkedin -->
 @if($social->linkedin)
 <a data-mdb-ripple-init class="btn btn-primary border-0 mt-1" style="background-color: #0082ca;" href="{{ $social->linkedin }}" role="button"
  ><i class="fab fa-linkedin-in fa-2x"></i
></a>
 @endif

  @if($social->instagram)

   <a data-mdb-ripple-init class="btn btn-primary border-0 mt-1" style="background-color: #E20185;" href="{{ $social->instagram }}" role="button"
  ><i class="fab fa-instagram fa-2x"></i>
  </a>
  @endif

  @if($social->twitter)

    <a data-mdb-ripple-init class="btn btn-primary border-0 mt-1" style="background-color: #03A4EC;" href="{{ $social->twitter }}" role="button"
  ><i class="fab fa-linkedin-in fa-2x"></i>
  </a>
           
   @endif

@endif
<!-- end social media -->
                </div>
                  <div class="col-md-12 text-center">
                  <p class="text-white mt-2">Copyright © <?php echo date('Y'); ?> - <a href="https://shikhonhub.com/">shikhonhub.com</a></p>
                </div>
          </div>
          </div>
      </section>

    </div>

    <script src="  {{asset('css/website/bootstrap.min.js')}}"></script>
    <script src="  {{asset('css/website/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{ asset('panel/assets/js/popper.min.js') }}"></script>
   
</body>
</html>
