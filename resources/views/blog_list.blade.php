@extends('layouts.blog_master')
@section('admin')

<div class="container-fluid">
	<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

@if( session('status_admitcardupdate'))
                            <div class="alert alert-success  font-weight-light">
                              {{ session('status_admitcardupdate') }}
                            </div>
                            @endif 

       @if( session('status_deleteadmitcard'))
                            <div class="alert alert-danger  font-weight-light">
                              {{ session('status_deleteadmitcard') }}
                            </div>
                            @endif 

        @if( session('status_admitcard'))
          <div class="alert alert-success">
            {{ session('status_admitcard') }}
          </div>
          @endif                     
      </div>
  </div>

  	<!-- Head part -->
<div class="row">
	<div class="col-12 Col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3">
		<div class="card border-0">
		<div class="card-body">
			<div class="row ">
				<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-6 col-xxl-6">
					<h6 class="text-primary font-weight-light topbaradmit">Blog list</h6>
				</div>

				<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-6 col-xxl-6 text-right">
					<a href="{{asset('home')}}" class="alltext text-primary font-weight-light text-decoration-none">Dashboard&nbsp;&nbsp;<small class="font-weight-lighter">|</small></a>
				    <a href="#" class="alltext text-primary font-weight-light text-decoration-none">&nbsp;Admin Corner<small>&nbsp;&nbsp;|</small></a> 
					<a href="{{asset('add_blog')}}" class="alltext text-primary font-weight-light text-decoration-none">&nbsp;Add Blog</a>
					
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- End head part -->
</div>

@endsection