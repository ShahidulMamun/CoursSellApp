@extends('layouts.fontend')
@section('content')
   <div class="container-fluid all-course">
   	    <!-- all live coures -->
  <div class="container">
    <div class="row">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-5">
         	<h1 class="display-courses font-weight-bold mb-0 mt-5 text-dark">Live Courses</h1>
           <div class="row mt-2">
          <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card bg-light shadow live-couress">
                  <div class="card-body couress-image p-0">
                    <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid live-couress" alt="">
                    </a>
                  </div>
                </div>
             </div>
             
         <!-- second part -->
           <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow live-couress">
                  <div class="card-body couress-image p-0">
                    <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid live-couress" alt="">
                    </a>
                  </div>
                </div>
             </div>

             <!-- third  -->
            <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow live-couress">
                  <div class="card-body couress-image p-0">
                    <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid live-couress" alt="">
                    </a>
                  </div>
                </div>
             </div>
             <!-- forth -->
                <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow live-couress">
                  <div class="card-body couress-image p-0">
                    <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid live-couress" alt="">
                    </a>
                  </div>
                </div>
             </div>
           </div>
         </div>
          <!-- end all live course -->
          
        </div>
    </div>
   </div>
@endsection