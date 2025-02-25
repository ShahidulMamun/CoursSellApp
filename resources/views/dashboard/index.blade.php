@extends('layouts.fontend')
@section('content')
	<div class="container">
		<div class="row py-5">
		<div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          	   <ul class="list-unstyled mt-4">
                 <li class="media">
                   <img src="{{asset('img/re9.png')}}" class="rounded-circle" alt="">
                   <div class="media-body mt-3">
               	   <a class="h5 text-dark font-weight-bold ml-2" href="#">{{Auth::user()->name}}</a>
               	   <p class="ml-2">Digital Marketing Manager</p>
                     </div>
                   </li>
                 </ul>
		       </div>
		     <hr class="mt-3">
<!-- menu start -->
  <div class="col-6 col-sm-6 col-xsm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3 card border-right border-top-0 border-left-0 border-bottom-0 rounded-0">
     <div class="nav flex-column nav-pills mt-3 py-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	 	<!-- Dashboard -->
      <button class="nav-link active text-left" id="v-pills-dashboard-tab" data-toggle="pill" data-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</button>
<!-- My Profile -->
      <button class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-user text-primary" aria-hidden="true"></i> My Profile</button>
      <!-- Enrolled Couress -->
      <button class="nav-link text-left" id="v-pills-enrolled-tab" data-toggle="pill" data-target="#v-pills-enrolled" type="button" role="tab" aria-controls="v-pills-enrolled" aria-selected="false"><i class="fa fa-graduation-cap text-primary" aria-hidden="true"></i> Enrolled Couress</button>
      <!-- Wishlist -->
      <button class="nav-link text-left" id="v-pills-wishlist-tab" data-toggle="pill" data-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-wishlist" aria-selected="false"><i class="fa fa-bookmark text-primary" aria-hidden="true"></i> Wishlist</button>
<!-- reviews -->
      <button class="nav-link text-left" id="v-pills-reviews-tab" data-toggle="pill" data-target="#v-pills-reviews" type="button" role="tab" aria-controls="v-pills-reviews" aria-selected="false"><i class="fa fa-star text-primary" aria-hidden="true"></i> Reviews</button>
<!-- My Quiz Attempts -->
      <button class="nav-link text-left" id="v-pills-quiz-tab" data-toggle="pill" data-target="#v-pills-quiz" type="button" role="tab" aria-controls="v-pills-quiz" aria-selected="false"><i class="fa fa-rocket text-primary" aria-hidden="true"></i> My Quiz Attempts</button>
<!-- Order History -->
      <button class="nav-link text-left" id="v-pills-history-tab" data-toggle="pill" data-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="false"><i class="fa fa-shopping-cart text-primary" aria-hidden="true"></i> Order History</button>

      <!-- Question & Answer	 -->
      <button class="nav-link text-left" id="v-pills-question-tab" data-toggle="pill" data-target="#v-pills-question" type="button" role="tab" aria-controls="v-pills-question" aria-selected="false"><i class="fa fa-question-circle-o text-primary" aria-hidden="true"></i> Question & Answer</button>
<!-- calander -->
      <button class="nav-link text-left" id="v-pills-calander-tab" data-toggle="pill" data-target="#v-pills-calander" type="button" role="tab" aria-controls="v-pills-calander" aria-selected="false"><i class="fa fa-calendar text-primary" aria-hidden="true"></i> Calander</button>
       <hr>
       <!-- setting -->
       <button class="nav-link text-left" id="v-pills-setting-tab" data-toggle="pill" data-target="#v-pills-setting" type="button" role="tab" aria-controls="v-pills-setting" aria-selected="false"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Setting</button>

 <!-- logout -->
 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


         </div>
  </div>
  <!-- menu end -->
  <div class="col-6 col-sm-6 col-xsm-12 col-md-8 col-lg-8 col-xl-9 col-xxl-9">
  	<!-- top clicklable menu -->
    <div class="tab-content" id="v-pills-tabContent">
      <!-- Dashboard -->
     <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
     	<h3 class="text-dark">Dashboard</h3>
     	<!-- row start -->
     	<div class="row">
     		<!-- Enrolled -->
     <div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
       	<div class="card mt-2">
        <div class="card-body text-center">
        <button type="button" class="btn btn-primary btn-lg rounded mt-3"><i class="fas fa-book-open fa-2xl"></i></button>
        <h1 class="text-dark font-weight-bold mt-2">0</h1>
        <p class="text-dark">Enrolled Courses</p>
           </div>
         </div>
       	</div>
       	<!-- end Enrolled -->
       	<!-- Active Courses -->
       	<div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
       		<div class="card mt-2">
           <div class="card-body text-center">
         <button type="button" class="btn btn-primary btn-lg rounded mt-3"><i class="fas fa-graduation-cap fa-2xl"></i></button>
        <h1 class="text-dark font-weight-bold mt-2">0</h1>
        <p class="text-dark">Active Courses</p>
           </div>
         </div>
       	</div>
       	<!-- Active Courses -->
       	<!-- Completed Courses -->
       <div class="col-12 col-sm-12 col-xsm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
       	 <div class="card mt-2">
           <div class="card-body text-center">
        <button type="button" class="btn btn-primary btn-lg rounded mt-3"><i class="fas fa-trophy fa-2xl"></i></button>
        <h1 class="text-dark font-weight-bold mt-2">0</h1>
        <p class="text-dark">Completed Courses</p>
           </div>
         </div>
       	</div>
       	<!-- Completed Courses -->
     	</div>
     	<!-- end row -->
     </div>
<!-- end Dashboard -->
<!-- profile -->
      <div class="tab-pane fade text-dark" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <h3 class="text-dark">My Profile</h3>
      <div class="card p-3 border-0">
      <dl class="row">
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">Registration Date</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">February 2, 2025 11:25 am</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">First Name</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9"><p>Ali</p></dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">last Name</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">Ali</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">Username</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">atoz</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">Username</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">atoz</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">Email</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">----</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">phone</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">----</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">Skill/Occupation</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">----</dd>
  <dt class="col-12 col-xsm-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 col-xxl-3">Biography</dt>
  <dd class="col-12 col-xsm-12 col-sm-12 col-md-7 col-lg-9 col-xl-9 col-xxl-9">----</dd>
  </dl>
    </div>
    </div>
       <!-- end profile -->
      <!-- enrolled -->
  <div class="tab-pane fade" id="v-pills-enrolled" role="tabpanel" aria-labelledby="v-pills-messages-tab">
     <h3 class="text-dark">Enrolled Courses</h3>
            <!-- tab menu Enrolled Courses-->
  <div class="card p-3 border-0">
   <nav class="mt-5">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
   <button class="nav-link active border-0 bg-white" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Course Info</button>
    <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</button>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <p class="text-dark text-justify">
      This is some placeholder content the Home tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
    </p>
  </div>
 <div class="tab-pane fade" id="nav-profile" role="tabpane1" aria-labelledby="nav-profile-tab">
    <p class="text-dark text-justify">
      This is some placeholder content the Profile tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
    </p>
  </div>
</div>
</div>
 <!-- end tab menu Enrolled Courses-->
  </div>
      <!-- wishlist -->
      <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
    <h3 class="text-dark">wishlist</h3>
       </div>
      <!-- reviews -->
     <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab">
     <h3 class="text-dark">Reviews</h3>
     </div>
<!-- Quiz -->
     <div class="tab-pane fade" id="v-pills-quiz" role="tabpanel" aria-labelledby="v-pills-quiz-tab">
     	 <h3 class="text-dark">My Quiz Attempts</h3>
      </div>
     <!-- order history -->
     <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
      <h3 class="text-dark">Order History</h3>
       <div class="card p-3 border-0">
         <div class="row">
           <div class="col-12 col-xsm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <a class="btn btn-outline-primary active btn-lg" href="#" role="button">Today</a>
            <a class="btn btn-outline-primary btn-lg" href="#" role="button">Monthly</a>
            <a class="btn btn-outline-primary btn-lg" href="#" role="button">Yearly</a>
           </div>
           <div class="col-12 col-xsm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            
       <input type="Date" class="form-control" name="">

           </div>
         </div>
       </div>
     </div>

      <!-- question -->
     <div class="tab-pane fade" id="v-pills-question" role="tabpanel" aria-labelledby="v-pills-question-tab">
    <h3 class="text-dark">Question & Answer</h3>
     <div class="card p-3 border-0">
    <div class="row">
      <div class="col-12 col-xsm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label text-dark">Sort By:</label>
    <div class="col-sm-10">
        <select class="form-select" aria-label="Default select example">
         <option selected>All(0)</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
     </select>
    </div>
     </div>
      </div>
    </div>
    </div>
     </div>
      <!-- question -->
     <div class="tab-pane fade" id="v-pills-calander" role="tabpanel" aria-labelledby="v-pills-calander-tab">
    <h3 class="text-dark">Calander</h3>
     <div class="card p-3 border-0">
    <div class="row">
      <div class="col-12 col-xsm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        
      </div>
    </div>
    </div>
     </div>

      <!-- setting -->
     <div class="tab-pane fade" id="v-pills-setting" role="tabpanel" aria-labelledby="v-pills-setting-tab">
      <h3 class="text-dark">Setting</h3>
                 <!-- tab menu Enrolled Courses-->
  <div class="card p-3 border-0">
    <nav class="mt-5">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
   <button class="nav-link active border-0 bg-white text-dark" id="nav-settingProfile-tab" data-toggle="tab" data-target="#nav-settingProfile" type="button" role="tab" aria-controls="nav-settingProfile" aria-selected="true">Profile</button>
    <button class="nav-link text-dark" id="nav-settingPassword-tab" data-toggle="tab" data-target="#nav-settingPassword" type="button" role="tab" aria-controls="nav-settingPassword" aria-selected="false">Password</button>
    <button class="nav-link text-dark" id="nav-settingSocial-tab" data-toggle="tab" data-target="#nav-settingSocial" type="button" role="tab" aria-controls="nav-settingSocial" aria-selected="false">Social Profile</button>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-settingProfile" role="tabpanel" aria-labelledby="nav-settingProfile-tab">
   <div class="row">
     <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
       <div class="card rounded">
        <img src="{{ asset('img/cover.png')}}" width="100%" height="250px">
        <span>shbdhbds</span>

         <!-- <div class="card-body">
           ghsg
         </div> -->
       </div>
     </div>
     <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
       <form class="row g-3 text-dark">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name </label>
    <input type="text" class="form-control" placeholder="First Name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name </label>
    <input type="text" class="form-control" placeholder="Last Name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">User Nmae</label>
    <input type="text" class="form-control" placeholder="User Name">
  </div>
   <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone</label>
    <input type="text" class="form-control" placeholder="Phone">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Skill/Occupation</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Bio</label>
    <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Display name publicly as</label>
     <select class="form-select" aria-label="Default select example">
         <option selected>All(0)</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
     </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn btn-outline-primary">Update Profile</button>
  </div>
</form>
     </div>
   </div>

  </div>
 <div class="tab-pane fade" id="nav-settingPassword" role="tabpane1" aria-labelledby="nav-settingPassword-tab">
    <div class="card p-3 border-0">
      <div class="row">
     <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
      <form class="text-dark">
       <div class="mb-3 col-6 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
  <label for="formGroupExampleInput" class="form-label">Current Password</label>
  <input type="Password" class="form-control" id="formGroupExampleInput" placeholder="Current Password">
</div>
<div class="mb-3 col-6 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
  <label for="formGroupExampleInput2" class="form-label">New Password </label>
  <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="New Password">
</div>
<div class="mb-3 col-6 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
  <label for="formGroupExampleInput2" class="form-label">Re-type New Password</label>
  <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Re-type New Password">
</div>
<div class="col-12">
    <button type="submit" class="btn btn btn-outline-primary">Resset Password</button>
  </div>
</form>
     </div>
   </div>
    </div>
  </div>
   <div class="tab-pane fade" id="nav-settingSocial" role="tabpane1" aria-labelledby="nav-settingSocial-tab">
     <div class="card p-3 border-0">
      <div class="row">
     <div class="col-12 col-sm-12 col-xsm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
      <h4 class="text-dark mt-3">Social Profile Link</h4>
      <form class="text-dark mt-5">
  <div class="row mb-3">
    <label for="" class="col-sm-3 col-form-label"><i class="fa fa-facebook-f" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Facebook </label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" placeholder="https://facebook.com/username">
    </div>
  </div>
  <div class="row mb-3">
    <label for="" class="col-sm-3 col-form-label"><i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Twitter </label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" placeholder="https://twitter.com/username">
    </div>
  </div>

  <div class="row mb-3">
    <label for="" class="col-sm-3 col-form-label"><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Linkedin </label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" placeholder="https://example.com/">
    </div>
  </div>

  <div class="row mb-3">
    <label for="" class="col-sm-3 col-form-label"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Website </label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" placeholder="https://github.com/username">
    </div>
  </div>

  <div class="row mb-3">
    <label for="" class="col-sm-3 col-form-label"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Github </label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" placeholder="https://github.com/username">
    </div>
  </div>
 <div class="col-12">
    <button type="submit" class="btn btn btn-outline-primary">Update Profile</button>
  </div>
</form>
     </div>
   </div>
 </div>
  </div>
 </div>
   </div>
 <!-- end tab menu Enrolled Courses-->
     </div>
     <!-- logout -->
     <!-- <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">
<h3 class="text-dark">logout</h3>
     </div> -->
    
    </div>
    <!-- end clickble menu -->
  </div>
    </div>
    </div>

<script src="{{asset('css/website/jquery-3.2.1.slim.min.js')}}"></script>

@endsection