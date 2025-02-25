@extends('layouts.fontend')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-1 col-sm-2 col-xsm-1 col-md-3 col-lg-3 col-xl-4 col-xxl-4"></div>
		<div class="col-10 col-sm-8 col-xsm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
			<div class="card shadow border-0">
				<div class="card-body">
					<p class="h4 mt-5">Student Registration </p>
<form class="mt-5" method="post" action="{{ route('register') }}">
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
   <button type="submit" class="btn btn-outline-success mt-3">Register</button>
  </div>
     
     
   
   </form>
              <hr class="">
				</div>
			</div>
		</div>
		<div class="col-1 col-sm-2 col-xsm-1 col-md-3 col-lg-3 col-xl-4 col-xxl-4"></div>
	</div>
</div>
@endsection