@extends('layouts.fontend')
@section('content')
   
<div class="container-fluid">
	<div class="container">
		<div class="row">
		<!-- coureses previews -->
		<div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 cl-xxl-12">
			<!-- rating star -->
		<div class="form-group mt-3" id="rating-ability-wrapper">
	    <label class="control-label" for="rating">
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
	    </label>
	    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="1" id="rating-star-1">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="2" id="rating-star-2">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="3" id="rating-star-3">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="4" id="rating-star-4">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="5" id="rating-star-5">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <span class="selected-rating">0</span><small> / 5</small>
	</div>
	<!-- star end -->
	<!-- top title -->
		<h1 class="text-dark courses-preview-title mt-2">{{$course->title}}</h1>
		<!-- end top title -->
		<span>Categories:</span> <span><a href="Digital Marketing">Digital Marketing</a></span>
		</div>
		<!-- videos and sections -->
		<div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-8 col-xl-8 cl-xxl-8 py-5">
			<!-- videos -->
		 <div class="embed-responsive embed-responsive-16by9 mt-4">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/zLyT6wQUuHc?si=VSPvg5RR_lb1eUdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
             </div>

       <!-- tab menu -->
   <nav class="mt-5">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
   <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Course Info</button>
    <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  	<p class="text-dark text-justify">
  		This is some placeholder content the Home tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
  	</p>
  </div>
 <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	<p class="text-dark text-justify">
  		This is some placeholder content the Profile tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
  	</p>
  </div>
</div>
<!-- What Will You Learn  -->
     <div class="row mt-5">
     	<h4 class="text-dark font-weight-bold">What Will You Learn ?</h4>
     	<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
     		 <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Meta Business Suite A-Z </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Facebook Paid Ads </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Facebook Business Manager </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> All types of Paid Ads </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Server Side & Browser Side Tracking with GTM </p>
     	</div>
     	<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
     		 <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Social Media Management </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Facebook Ad Manager </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Campaign Stuctures & Best Practices </p>
             <p class="h5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Advantage Plus Catalog Ads  </p>

     	</div>
     </div>
<!-- end Learn -->
<!-- Accordion  section-->
     	<h4 class="text-dark font-weight-bold mt-5">Course Content</h4>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     	<p class="h3 text-dark font-weight-bold">Digital Marketing Overview</p>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      	<div class="row">
      		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
 <a class="h5 text-dark" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>
 How to Start learning digital Marketing, Job Opportunity, 10 Tools to Learn</a>
      		</div>
      		<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 float-right">
            <span>02:03:18</span><span class=" ml-2"> <i class="fa fa-eye" aria-hidden="true"></i></span>
      		</div>
      	</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       	<p class="h3 text-dark font-weight-bold"> Social Media Management</p>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        	<div class="row">
      		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
 <a class="h5 text-dark" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>
 How to Start learning digital Marketing, Job Opportunity, 10 Tools to Learn</a>
      		</div>
      		<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 float-right">
            <span>02:03:18</span><span class=" ml-2"> <i class="fa fa-eye" aria-hidden="true"></i></span>
      		</div>
      	</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      	<p class="h3 text-dark font-weight-bold">Advanced Facebook Marketing</p>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        	<div class="row">
      		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
 <a class="h5 text-dark" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>
 How to Start learning digital Marketing, Job Opportunity, 10 Tools to Learn</a>
      		</div>
      		<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 float-right">
            <span>02:03:18</span><span class=" ml-2"> <i class="fa fa-eye" aria-hidden="true"></i></span>
      		</div>
      	</div>
      </div>
    </div>
  </div>

   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      	<p class="h3 text-dark font-weight-bold">Google Analytics & Google Tag Manager</p>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        	<div class="row">
      		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
 <a class="h5 text-dark" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>
 How to Start learning digital Marketing, Job Opportunity, 10 Tools to Learn</a>
      		</div>
      		<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 float-right">
            <span>02:03:18</span><span class=" ml-2"> <i class="fa fa-eye" aria-hidden="true"></i></span>
      		</div>
      	</div>
      </div>
    </div>
  </div>
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      	<p class="h3 text-dark font-weight-bold">Google Analytics & Google Tag Manager</p>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        	<div class="row">
      		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
 <a class="h5 text-dark" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>
 How to Start learning digital Marketing, Job Opportunity, 10 Tools to Learn</a>
      		</div>
      		<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 float-right">
            <span>02:03:18</span><span class=" ml-2"> <i class="fa fa-eye" aria-hidden="true"></i></span>
      		</div>
      	</div>
      </div>
    </div>
  </div>
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      	<p class="h3 text-dark font-weight-bold">Google Analytics & Google Tag Manager</p>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        	<div class="row">
      		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
 <a class="h5 text-dark" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>
 How to Start learning digital Marketing, Job Opportunity, 10 Tools to Learn</a>
      		</div>
      		<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 float-right">
            <span>02:03:18</span><span class=" ml-2"> <i class="fa fa-eye" aria-hidden="true"></i></span>
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div>
<!-- end Accordion -->
</div>
		<!-- end coureses previews -->
		<!-- side section -->
		<div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-4 col-xl-4 cl-xxl-4">
			<div class="card">
               <div class="card-header py-5">
               <span class="text-dark display-6 font-weight-bold">{{$course->price}} <small class="">&#2547;</small></span><span class="ml-3 font-weight-bold"><del>2400.00 &#2547;</del></span>
               <br>
                 <a href="#" class="btn btn-outline-primary btn-lg mt-3">Add to Cart</a>
               </div>
               <div class="card-body">
               	<p class=""><i class="fa fa-bar-chart" aria-hidden="true"></i> Intermediate</p>
               	<p class=""><i class="fa fa-graduation-cap" aria-hidden="true"></i>98 Total Enrolled </p>
               	<p class=""><i class="fa fa-clock-o" aria-hidden="true"></i> 14 hours 52 minutes Duration </p>
               	<p class=""><i class="fa fa-calendar" aria-hidden="true"></i> January 31, 2025 Last Updated </p>
               	<p class=""><i class="fa fa-certificate" aria-hidden="true"></i> Certificate of completion </p>
               </div>
             </div>
             <!-- profile -->
             <div class="card mt-4">
               <div class="card-header">
               	 <p class="h5 ml-4 font-weight-light">A course by</p>
          	   <ul class="list-unstyled mt-4">
                 <li class="media">
                   <img src="{{asset('img/re9.png')}}" class="rounded-circle" alt="">
                   <div class="media-body mt-3 ml-2">
               	   <a class="h5 text-dark font-weight-bold" href="#">Fahimul Islam Khan</a>
               	   <p class="">Digital Marketing Manager</p>
                     </div>
                   </li>
                 </ul>
               </div>
               <div class="card-header">
               	<p class="h4 text-dark font-weight-bold">Material Includes </p>
               	<p class=""><i class="fa fa-bar-chart" aria-hidden="true"></i> Intermediate</p>
               	<p class=""><i class="fa fa-graduation-cap" aria-hidden="true"></i>98 Total Enrolled </p>
               	<p class=""><i class="fa fa-clock-o" aria-hidden="true"></i> 14 hours 52 minutes Duration </p>
               	<p class=""><i class="fa fa-calendar" aria-hidden="true"></i> January 31, 2025 Last Updated </p>
               	<p class=""><i class="fa fa-certificate" aria-hidden="true"></i> Certificate of completion </p>
               	 <p class="h4 text-dark font-weight-bold mt-4">Requirements</p>
               	 <p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Basic Understanding of Facebook Ads </p>
               	<p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Laptop / Desktop </p>
               	<p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Minimum HSC Complete </p>
               	<p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Basic Understanding of English </p>
                <p class="h4 text-dark font-weight-bold mt-4">Tags</p>
                <a href="#" class="btn btn-outline-primary btn-lg mt-3">Facebook Marketings</a>
                <p class="h4 text-dark font-weight-bold mt-4">Audience</p>
                <p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Online Business Owners </p>
               	<p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Freelancers </p>
               	<p class=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Job Holders </p>
               </div>
             </div>
		</div>
		<!-- end side section -->
		</div>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
		jQuery(document).ready(function($){
	    
	$(".btnrating").on('click',(function(e) {
	
	var previous_value = $("#selected_rating").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating").val(selected_value);
	
	$(".selected-rating").empty();
	$(".selected-rating").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star-"+i).toggleClass('btn-warning');
	$("#rating-star-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star-"+ix).toggleClass('btn-warning');
	$("#rating-star-"+ix).toggleClass('btn-default');
	}
	
	}));
	
		
});

</script>
@endsection