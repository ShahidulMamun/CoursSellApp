    
@extends('admin.admin_master')
@section('admin')


<header class="header_area">
     @include('admin.head')
 </header>
<aside class="sidebar-wrapper ">
     @include('admin.sidemenu')
</aside>

<div class="content_wrapper">
    <!--middle content wrapper-->
    <div class="middle_content_wrapper">
          @if(Session::has('error'))                         
              <div class="ml-2 mr-2 alert alert-success alert-dismissible fade show font-weight-light" role="alert">
                <strong> {{ session::get('error')}} </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                @endif
       
        <!-- table area -->
        <section class="table_area">
            


    <div class="panel">
        <div class="panel_header">
          <h5 class="text-white">Site Settings Update</h5>
        </div>
     <div class="panel_body">
                   
	 <div class="container">
		   
		    <form id="settingsForm" enctype="multipart/form-data">
		        @csrf
		        <div class="form-group">
		            <label class="badge badge-info">Site Title</label>
		            <input type="text" name="site_title" id="site_title" class="form-control" value="{{ $setting->site_title ?? '' }}">
		        </div>

		        <div class="form-group">

		            <label class="badge badge-info">Logo</label>
		             @if(!empty($setting->logo))
		                <img src="{{ asset('storage/' . $setting->logo) }}" width="100px">
		            @endif

		            <input type="file" name="logo" id="logo" class="form-control">
		           
		        </div>

		        <div class="form-group">
		            <label class="badge badge-info">Email</label>
		            <input type="email" name="email" id="email" class="form-control" value="{{ $setting->email ?? '' }}">
		        </div>

		        <div class="form-group">
		            <label class="badge badge-info">Phone</label>
		            <input type="text" name="phone" id="phone" class="form-control" value="{{ $setting->phone ?? '' }}">
		        </div>

		        <div class="form-group">
		            <label class="badge badge-info">Address</label>
		            <textarea name="address" id="address" class="form-control">{{ $setting->address ?? '' }}</textarea>
		        </div>

		        <button type="submit" class="btn btn-success" style="float: right;">Update Settings</button>
		    </form>
		    <div id="success-message" class="mt-2 text-success" style="display: none;"></div>
	 </div>


                </div>
            </div>
          
           
        </section>                   
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('#settingsForm').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('settings.update') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    $('#success-message').text(response.message).show();
                    setTimeout(() => $('#success-message').fadeOut(), 6000);
                }
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                $('.error-message').remove();
                $.each(errors, function (key, value) {
                    $('[name="' + key + '"]').after('<span class="text-danger error-message">' + value[0] + '</span>');
                });
            }
        });
    });
});
</script>
@endsection