@extends('layouts.fontend')
@section('content')

<style>
/*product css*/

.title{
  font-size: 14px;
  font-family: Tahoma, Verdana, sans-serif;

}

.title-sidetext{
  font-size: 13px;
  font-weight:600;
  font-family: Tahoma, Verdana, sans-serif;

}

/*end product css*/
 .review-text{
  font-family: Arial, Helvetica, sans-serif;
   font-size: 13px;
   line-height: normal;
 }


 .exprience-section{
   background-color:#aeb6bf;
 }


.text-exprience{
  font-family: "Poppins", Sans-serif;
  font-size: 4rem;
}

</style>
<!-- name -->
<div class="container-fluid top-title">
  <div class="row">
    <div class="col-xl-3"></div>
    <div class="col-xl-5 text-center">
      <h1 class="display-text font-weight-bold mb-0 text-dark mt-3">Hi I am</h1>
      <h2 class="display-name font-weight-bold text-dark">Mohsin Hasan</h2>
      <p class="ptop-head font-weight-lighter text-muted mt-3">
        I help your online business and career thrive with over 8+ years of industry experience in growth and digital marketing.
      </p>
      <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Join Course</a>
    </div>
    <div class="col-xl-4 mt-0">
      <img src="{{ asset('img/ceo.png')}}" class="" width="90%" height="350px">
    </div>
  </div>
</div>
<!-- end name -->
<!-- all course -->
<div class="container-fluid all-course">   
  <div class="row">
    <div class="col-xl-3"></div>
    <div class="col-xl-5">
      <h1 class="display-courses font-weight-bold mb-0 text-center mt-5 text-dark">My Active Courses</h1>
    </div>
    <div class="col-xl-4 "></div>
  </div>
    <!-- all coures -->
<div class="container mt-5">
    <div class="row">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           <div class="row">
           
        <!--    course item -->
         @foreach($courses as $data)
          <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow couress">
                  <div class="card-body image p-0">
                    <a href="{{ route('course-detail',$data->slug)}}">
                      <img src="{{ asset('storage/' . $data->thumbnail) }}" class="fit-image rounded img-fluid couress" alt="">
                    </a>
                  </div>
                </div>
                <a href="">
                <h3 class="text-dark font-weight-bold mt-3">{{$data->title}}</h3>
              </a>
              <a class="btn btn-primary btn-lg mt-2 image shadow" href="{{ route('course-detail',$data->slug)}}" role="button">Enroll Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
             </div>
          @endforeach
         <!--  course item end -->

               
           </div>
         </div>
          <!-- end all course -->
             <!-- review sections -->
          <div class="col-12 text-center mt-5">
            <h2 class="font-weight-light">Rated <span class="font-weight-bold text-dark">5 out of 5 stars</span> based on 38 customer reviews</h2>
          </div>
          <div class="col-12 col-sm-12 col-xxl-4 col-md-6 mt-4">
            <div class="card border-0 rounded">
              <ul class="list-unstyled">
  <li class="media">
    <img src="{{asset('img/re9.png')}}" class="ml-3 rounded-circle mt-3" alt="">
    <div class="media-body">
      <p class="pl-3 pr-3 text-justify mt-3 review-text text-muted">All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
      <a class="float-right mr-2" href=""><i class="fa fa-facebook-square fa-x1" aria-hidden="true"></i></a>
    </div>
  </li>
</ul>
    </div>
    </div>
 <div class="col-12 col-sm-12 col-xxl-4 col-md-6 mt-4">
    <div class="card border-0 rounded">
    <ul class="list-unstyled">
  <li class="media">
    <img src="{{asset('img/re9.png')}}" class="ml-3 rounded-circle mt-3" alt="">
    <div class="media-body">
      <p class="pl-3 pr-3 text-justify mt-3 review-text text-muted">All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
      <a class="float-right mr-2" href=""><i class="fa fa-facebook-square fa-x1" aria-hidden="true"></i></a>
    </div>
  </li>
</ul>
    </div>
        </div>
        <div class="col-12 col-sm-12 col-xxl-4 col-md-6 mt-4">
          <div class="card border-0 rounded">
          <ul class="list-unstyled">
  <li class="media">
    <img src="{{asset('img/re9.png')}}" class="ml-3 rounded-circle mt-3" alt="">
    <div class="media-body">
      <p class="pl-3 pr-3 text-justify mt-3 review-text text-muted">All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
      <a class="float-right mr-2" href=""><i class="fa fa-facebook-square fa-x1" aria-hidden="true"></i></a>
    </div>
  </li>
</ul>
    </div>
    </div>
    <!-- load button -->
      <div class="col-12 text-center text-center mt-5 py-3">
        <button type="button" class="btn btn-primary btn-lg">Load More</button>
      </div>
<!--       end load button -->
        </div>
    </div>
</div>
<!-- exprence part -->
<div class="container-fluid exprience-section">
    <div class="container">
        <div class="col-xxl-12">
          <div class="row">
            <div class="col-xxl-4 text-center">
              <h1 class="display-text text-exprience mb-0">8</h1>
              <h1 class="display-name text-white">Years of Experience</h1>
            </div>
            <div class="col-xxl-4 text-center">
              <h1 class="display-text text-exprience mb-0">7</h1>
              <h1 class="display-name text-white">Brands Worked With</h1>
            </div>
            <div class="col-xxl-4 text-center">
              <h1 class="display-text text-exprience mb-0">220</h1>
              <h1 class="display-name text-white">Students</h1>
            </div>
          </div>
        </div>
    </div>
</div>


<!-- Awards sectiont -->
<div class="container-fluid all-course">
   <div class="row">
    <div class="col-xl-3"></div>
    <div class="col-xl-5 text-center">
      <h1 class="display-courses font-weight-bold mb-0 mt-5">Awards & Key Achievements</h1>
       <p class="ptop-head font-weight-lighter text-muted mt-3">
        My 8 years of corporate career has bestowed me with numerious national & international awards on digital marketing
      </p>
    </div>
    <div class="col-xl-4 "></div>
  </div>
        <!-- all awards -->
<div class="container mt-5">
    <div class="row">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           <div class="row">
          <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow couress">
                  <div class="card-body image p-0">
                    <a href="{{ asset('/courses')}}">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress" alt="">
                    </a>
                  </div>
                </div>
                <h3 class="text-dark font-weight-bold mt-3">Facebook 2025 + Server Side Tracking (Recorded + Live)</h3>
               
             </div>
             
         <!-- second part -->
           <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow couress">
                  <div class="card-body image p-0">
                    <a href="{{ asset('/courses')}}">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress" alt="">
                    </a>
                  </div>
                </div>
                <h3 class="text-dark font-weight-bold mt-3">Facebook 2025 + Server Side Tracking (Recorded + Live)</h3>
             </div>

             <!-- third  -->
            <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow couress">
                  <div class="card-body image p-0">
                    <a href="{{ asset('/courses')}}">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress" alt="">
                    </a>
                  </div>
                </div>
                <h3 class="text-dark font-weight-bold mt-3">Facebook 2025 + Server Side Tracking (Recorded + Live)</h3>
             </div>
             <!-- forth -->
                <div class="col-12 col-xsm-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 py-2 text-center">
        <div class="card border-0 bg-light shadow couress">
                  <div class="card-body image p-0">
                    <a href="{{ asset('/courses')}}">
                      <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress" alt="">
                    </a>
                  </div>
                </div>
                <h3 class="text-dark font-weight-bold mt-3">Facebook 2025 + Server Side Tracking (Recorded + Live)</h3>
             </div>
             <div class="col-12 text-center">
                <a class="btn btn-primary btn-lg mt-2 image shadow" href="#" role="button">See All Awards <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
             </div>
             <!-- Follow section -->
             <div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 mt-5">
                <h3 class="display-courses font-weight-bold mb-0 mt-5">Follow Me On YouTube</h3>
                 <p class="ptop-head font-weight-lighter text-muted mt-3">
        My 8 years of corporate career has bestowed me with numerious national & international awards on digital marketing</p>
             
    <a class="btn btn-primary btn-lg mt-5 my-5 image shadow" href="#" role="button"><i class="fa fa-youtube-play" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Subscribe Now</a>
             </div>
             <div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mt-5">
               <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zLyT6wQUuHc?si=VSPvg5RR_lb1eUdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
             </div>
             <!-- end follow section -->
             <!-- more videos -->
             <div class="col-xxl-12 text-center mt-5">
               <h1 class="display-name text-dark mt-5">More Videos From My Channel </h1>
              <i aria-hidden="true" class="fab fa-youtube fa-3x"></i>
             </div>
             <!-- yoytube videos link -->
             <div class="col-xxl-6 col-sm-12 col-md-6 mt-5">
               <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zLyT6wQUuHc?si=VSPvg5RR_lb1eUdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
             </div>
             <div class="col-xxl-6 col-sm-12 col-md-6 mt-5">
               <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zLyT6wQUuHc?si=VSPvg5RR_lb1eUdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
             </div>
             <div class="col-xxl-6 col-sm-12 col-md-6 mt-2">
               <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zLyT6wQUuHc?si=VSPvg5RR_lb1eUdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
             </div>
             <div class="col-xxl-6 col-sm-12 col-md-6 mt-2">
               <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zLyT6wQUuHc?si=VSPvg5RR_lb1eUdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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