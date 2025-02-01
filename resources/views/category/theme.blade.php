@extends('layouts.fontend')
@section('content')

<style>
  input[type=text] {
       font-size: 15px;
       padding: 13px 13px;
}

.ratings{
    margin-right:10px;
}

.ratings i{
    
    color:#cecece;
    font-size:16px;
}

.rating-color{
    color: #FF0000 !important;
}


.small-ratings i{
  color: #FF0000;  
   font-size:16px; 
}

.review-stat{
    font-weight:300;
    font-size:18px;
    margin-bottom:2px;
}

.star-rating i {
  color: #ffc107;
  font-size: 10px;
}

/*product css*/
.image {
 transition: transform .2s;
 overflow: hidden;
}

 .image:hover {
  -ms-transform: scale(1.03); 
  -webkit-transform: scale(1.03); 
  transform: scale(1.03); 
}

.title{
  font-size: 14px;
/*  font-weight:600;*/
  font-family: Tahoma, Verdana, sans-serif;

}

.title-sidetext{
  font-size: 13px;
  font-weight:600;
  font-family: Tahoma, Verdana, sans-serif;

}


 a {
    text-decoration: none;
    color: inherit;
}

a:hover {
    text-decoration: underline;
    color: inherit
}



nav > .nav.nav-tabs{

    border: none;
    color:#fff;
    background:#FA8072;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
    border: none;
    padding: 25px 32px;
    color:#fff;
    background:#FA8072;
    border-radius:0;
}

.tab-content{
  background:   #f2f3f4;
    line-height: 25px;
   /* border: 1px solid #ddd;*/
   /* border-top:5px solid #6495ED ;*/
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
    border: none;
    background: #FF7F50;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}

/**/
.explore-rating-price a {margin:0;}
.explore-rating {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 13px;
    background-color: #bd70ff;;
    display: inline-block;
    width: 35px;
    height: 20px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
    font-weight: 500;
    margin-right: 10px;
}

/*end product css*/
</style>

<div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-8 col-xl-8 col-xxl-8">
        <h1 class="text-danger title">Latest Post</h1>
           <hr class="" style="color:rgba(222, 49, 99);">
      </div>
       <div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-2"></div>

      
         <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 col-xxl-8">
           <div class="row">
             @foreach($allproduct as $data)
             <div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 py-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="card border-0 bg-light shadow" data-aos="fade-up" data-aos-delay="100">
                  <div class="card-body image p-0">
                    <a href="">
                      <img src="/upload/productimage/{{ $data->images}}" class="fit-image rounded-top img-fluid softwareimage" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                  </div>
                     <!-- second div -->
                  <div class="container">
                  <div class="row">
                     <div class="col-7 col-sm-7 col-xsm-7 col-xl-7 p-0">
                       <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                     </div>
                     <div class="col-5 col-sm-5 col-xsm-5 col-xl-5 p-0">
                       <span class="float-right"><i class="fa fa-comments text-primary" aria-hidden="true"></i>&nbsp;comments&nbsp;0</span>
                     </div>
                    <div class="col-12 col-sm-12 col-xsm-12 col-xl-12 p-0">
                      <h1 class="title">
                        <a href="#" class="text-capitalize text-dark">{{ $data->title}}</a></h1>
                        <p class="">{!! $data->text !!}</p>
                    </div>
                    <!-- product rating -->
                    <div class="col-6 col-sm-6 col-xsm-6 col-sm-6 col-md-8 col-lg-8 p-0">
                  <p class="explore-rating-price text-dark">
                    <span class="explore-rating  text-white">5.0</span>
                    10 Ratings
                  </p>
                    
                  </div>
                  <!-- preview link -->
                  <div class="col-6 col-sm-6 col-xsm-6 col-sm-6 col-md-4 col-lg-4 p-0">
                        <a href="" class="btn btn-outline-primary btn-sm float-right" role="button" aria-pressed="true" style="font-size: 12px;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download</a>
                      </div>
                       <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
                         <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                       <div class="col-4 col-sm-4 col-xsm-4 col-xl-4 p-0">
                  <span class="border-2 text-muted" data-toggle="tooltip" data-placement="top" title="Availavel on Scripts"><i class="fa fa-tags text-primary" aria-hidden="true"></i>&nbsp;Php Scripts</span>
                       </div>
                       <div class="col-4 col-sm-4 col-xsm-4 col-xl-4 p-0">
                         <p class="text-muted"><i class="fa fa-calendar text-primary" aria-hidden="true"></i>&nbsp;Aug 2,2024 </p>
                       </div>
                       <div class="col-4 col-sm-4 col-xsm-4 col-xl-4 p-0">
                         <p class="text-muted"><i class="fa fa-eye text-primary" aria-hidden="true"></i>&nbsp;View:12</p>
                       </div>

                  </div>
                    </div>
                </div>
             </div>
              @endforeach
           </div>
         </div>
        
    <!--end middle containe bar -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-2">
                    <nav class="">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active title bg-dark" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Top Most Popular</a>
                      <a class="nav-item nav-link title" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Recent</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0 shadow" id="nav-tabContent">
                    <div class="tab-pane fade show active p-0" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                          <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                       <!-- second -->
                       <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>

                       <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                       <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                       <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                       <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                        </div>
                    </div>
                    <!-- second part -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <div class="row">
                           <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                       <!-- second -->
                        <div class="col-5 col-sm-5 col-xsm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2">
                      <a href="">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded-top img-fluid softwareimage pl-2" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </a>
                      </div>
                        <div class="col-7 col-sm-7 col-xsm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-1">
                              <h1 class="title-sidetext">
                        <a href="#" class="text-capitalize text-dark">Freshmart - Single or Multivendor Laravel eCommerce System</a></h1>
                        <span class=""><i class="fa fa-clock-o text-primary" aria-hidden="true"></i>&nbsp;1 day Ago</span>
                           </div>
                           <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pl-3 pr-3">
                       <hr class="" style="color:rgba(222, 49, 99);">
                       </div>
                        </div>
                    </div>
                  </div>
             </div>
        </div>
    </div>
</div>

<script src="  {{asset('css/website/jquery.slim.min.js')}}"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection