@extends('layouts.login')
@section('content')

<section id="header-section-login" class="mt-0">
    <!-- background image -->
    <img src="{{asset('img/developers.jpg')}}" class="login-background-image" alt="">
      
         <div id="particles-js"></div>
         <div class="container-fluid">
           <div class="row">

             <div class="col-4 col-sm-2 col-md-4 col-lg-4 col-xl-4 col-xxl-4 login-panel1"></div>
             <!-- login-panel -->

             <div class="card cardlogin col-4 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 login-panel py-4">
                <div class="text-center">
                <img src="{{asset('img/apps3.jpg')}}" class="rounded-circle" alt="" style="width: 80px; height: 80px;">
                </div>
               <div class="row justify-content-center">
             
                <!-- sing in account -->
                 <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">

                  
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="form-group">
                               <label for="exampleInputEmail1">Name</label>
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>


                           <div class="form-group">
                               <label for="exampleInputEmail1">Email Address</label>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>


                          <div class="form-group">
                               <label for="exampleInputEmail1">Password</label>
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                     

                     <div class="form-group">
                               <label for="exampleInputEmail1">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                         </div>

                        
                         <div class="form-group mt-2">
                              <button type="submit" class="btn btn-primary">
                                    {{ __('Create Account') }}
                                </button>
                         </div>
                    </form>
                   <!-- copy-right -->
                     <p class="text-muted mt-0 copy-right"></p>                 
                 </div>
               </div> 
          
           </div>
            <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 login-panel2">
              
            </div>
           </div>
         </div>
   </section>

@endsection
