@extends('layouts.fontend')
@section('content')
<div class="container-fluid">
	<div class="container">
		<div class="row mt-3">
			<!-- search  -->
		<div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
			<form class="form">
       <div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-6 col-xl-6 col-xx-6 mt-2 p-0">
     <div class="input-group">
             <input type="text" class="form-control form-control-lg" id="search" placeholder="Search" name="search" value="">
              <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
        </div>
           </div>
         </form>
		</div>
		<!-- end search -->
	<div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
         <select class="form-select form-control-lg float-right text-muted col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2" aria-label="Default select example">
          <option selected>Date Published</option>
          <option value="">Date Update</option>
          <option value="">Rating</option>
          <option value="">Price</option>
       </select>
		</div>
		<!-- end selected options -->
		<!-- side bar section -->
	<div class="col-12 col-sm-6 col-xsm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 bg-white mt-5">
    <div class="form-group mt-5">
    <p class="h4 text-dark font-weight-bold">Type</p>
    <div class="form-check" style="font-size: 1.8em;">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label mt-2 text-muted" style="font-size: 20px;">
        Course
      </label>
         </div>
         <!-- check button -->
       <div class="form-check" style="font-size: 1.8em;">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label mt-2 text-muted" style="font-size: 20px;">
        Course
      </label>
         </div>
       </div>
       <!-- catagory -->
    <div class="form-group mt-5">
    <p class="h4 text-dark font-weight-bold">Category</p>
    <div class="form-check" style="font-size: 1.8em;">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label mt-2 text-muted" style="font-size: 20px;">
        Digital Marketing 
      </label>
         </div>
         <!-- check button -->
       <div class="form-check" style="font-size: 1.8em;">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label mt-2 text-muted" style="font-size: 20px;">
        Video Editing 
      </label>
         </div>
<a href="#" class="btn btn-outline-primary mt-3"><i class="fa fa-times" aria-hidden="true"></i>
  Clear All Filters</a>
       </div>
		</div>
		<!-- course section -->
		<div class="col-12 col-sm-6 col-xsm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
			<div class="row py-5">
		<div class="col-12 col-sm-12 col-xsm-12 col-md-8 col-lg-4 col-xl-4 col-xxl-4">
			<div class="card">
		<a href="{{ asset('/courses')}}">
           <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress-recorded" alt="">
             </a>
              <div class="card-header">
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
	<a href="">
		 <h5 class="card-title">Advanced Facebook Ads 2025</h5>
	        </a>
             <div class="row mt-5">
             	<div class="col-6">
             	<i class="fa fa-user-o" aria-hidden="true"></i> 101
             </div>
             	<div class="col-6">
             		<i class="fa fa-clock-o" aria-hidden="true"></i> 14h 52m 
             	</div>
             </div>
             <!-- tainer -->
          	   <ul class="list-unstyled mt-4">
                 <li class="media">
                   <img src="{{asset('img/re9.png')}}" class="rounded-circle" alt="" width="20%" height="20%">
                   <div class="media-body ml-2">
               	   <a class="" href="#">Fahimul Islam Khan</a>
               	   <p class="">Digital Marketing Manager</p>
                     </div>
                   </li>
                 </ul>

              </div>
             <div class="card-body">
             <div class="row">
             	<div class="col-6">
             		<del>2400.00 &#2547;</del>
             		<p>2800.00<small class="">&#2547;</small></p>
             	</div>
             	<div class="col-6">
 <a href="#" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>
 Add To Cart</a>
             	</div>
             </div>
             </div>
           </div>
           </div>
			
			
		<div class="col-12 col-sm-12 col-xsm-12 col-md-8 col-lg-4 col-xl-4 col-xxl-4">
			<div class="card">
		<a href="{{ asset('/courses')}}">
           <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress-recorded" alt="">
             </a>
              <div class="card-header">
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
	<a href="">
		 <h5 class="card-title">Advanced Facebook Ads 2025</h5>
	        </a>
             <div class="row mt-5">
             	<div class="col-6">
             	<i class="fa fa-user-o" aria-hidden="true"></i> 101
             </div>
             	<div class="col-6">
             		<i class="fa fa-clock-o" aria-hidden="true"></i> 14h 52m 
             	</div>
             </div>
             <!-- tainer -->
          	   <ul class="list-unstyled mt-4">
                 <li class="media">
                   <img src="{{asset('img/re9.png')}}" class="rounded-circle" alt="" width="20%" height="20%">
                   <div class="media-body ml-2">
               	   <a class="" href="#">Fahimul Islam Khan</a>
               	   <p class="">Digital Marketing Manager</p>
                     </div>
                   </li>
                 </ul>

              </div>
             <div class="card-body">
             <div class="row">
             	<div class="col-6">
             		<del>2400.00 &#2547;</del>
             		<p>2800.00<small class="">&#2547;</small></p>
             	</div>
             	<div class="col-6">
 <a href="#" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>
 Add To Cart</a>
             	</div>
             </div>
             </div>
           </div>
           </div>
		<div class="col-12 col-sm-12 col-xsm-12 col-md-8 col-lg-4 col-xl-4 col-xxl-4">
			<div class="card">
		<a href="{{ asset('/courses')}}">
           <img src="{{asset('img/martkart_image.png')}}" class="fit-image rounded img-fluid couress-recorded" alt="">
             </a>
              <div class="card-header">
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
	<a href="">
		 <h5 class="card-title">Advanced Facebook Ads 2025</h5>
	        </a>
             <div class="row mt-5">
             	<div class="col-6">
             	<i class="fa fa-user-o" aria-hidden="true"></i> 101
             </div>
             	<div class="col-6">
             		<i class="fa fa-clock-o" aria-hidden="true"></i> 14h 52m 
             	</div>
             </div>
             <!-- tainer -->
          	   <ul class="list-unstyled mt-4">
                 <li class="media">
                   <img src="{{asset('img/re9.png')}}" class="rounded-circle" alt="" width="20%" height="20%">
                   <div class="media-body ml-2">
               	   <a class="" href="#">Fahimul Islam Khan</a>
               	   <p class="">Digital Marketing Manager</p>
                     </div>
                   </li>
                 </ul>

              </div>
             <div class="card-body">
             <div class="row">
             	<div class="col-6">
             		<del>2400.00 &#2547;</del>
             		<p>2800.00<small class="">&#2547;</small></p>
             	</div>
             	<div class="col-6">
 <a href="#" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>
 Add To Cart</a>
             	</div>
             </div>
             </div>
           </div>
           </div>
			
			</div>
		</div>
		</div>
	</div>
</div>

@endsection