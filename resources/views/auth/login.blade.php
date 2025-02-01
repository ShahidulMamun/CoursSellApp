@extends('layouts.login')
@section('content')

 <section id="header-section-login" class="mt-0">
    <!-- background image -->
    <img src="{{asset('/product/dog.jpg')}}" class="login-background-image" alt="">
      
         <div id="particles-js"></div>
         <div class="container-fluid">
           <div class="row">

             <div class="col-4 col-sm-2 col-md-4 col-lg-4 col-xl-4 col-xxl-4 login-panel1"></div>
             <!-- login-panel -->

             <div class="card cardlogin col-4 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 login-panel py-5">
                <div class="text-center">
                <img src="{{asset('img/apps3.jpg')}}" class="rounded-circle" alt="" style="width: 80px; height: 80px;">
                </div>
               <div class="row justify-content-center">
             
                <!-- sing in account -->
                 <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">

                  
                <form class="form mt-4" method="POST" action="{{ route('login') }}">
                      @csrf
                     
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                   

                       <input id="password" type="password" class=" mt-3 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     <!-- </div> -->

                     <div class="form-group mt-2">
                          <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                     </div>

                     <div class="form-group mt-2">
                <button class="btn btn-primary" type="submit">Sing in</button>
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
