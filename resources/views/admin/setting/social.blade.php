    
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
                      <h5 class="text-white">Social Media Update</h5>
                </div>
                <div class="panel_body">
                   
				<div class="container">
				  
				    <form id="socialForm">
				        @csrf
				        <div class="form-group">
				            <label>Facebook URL</label>
				            <input type="url" name="facebook" id="facebook" class="form-control" value="{{ $social->facebook ?? '' }}">
				        </div>

				        <div class="form-group">
				            <label>Twitter URL</label>
				            <input type="url" name="twitter" id="twitter" class="form-control" value="{{ $social->twitter ?? '' }}">
				        </div>

				        <div class="form-group">
				            <label>Instagram URL</label>
				            <input type="url" name="instagram" id="instagram" class="form-control" value="{{ $social->instagram ?? '' }}">
				        </div>

				        <div class="form-group">
				            <label>LinkedIn URL</label>
				            <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ $social->linkedin ?? '' }}">
				        </div>


                    <div class="form-group">
                        <label>YouTube URL</label>
                        <input type="url" name="youtube" id="youtube" class="form-control" value="{{ $social->youtube ?? '' }}">
                    </div>

                     <div class="form-group">
                        <label>WhatsApp Number</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ $social->whatsapp ?? '' }}">
                    </div>


				        <button type="submit" class="btn btn-success" style="float: right;">Update Social Media</button>
				    </form>
				    <div id="social-success" class="mt-2 text-success" style="display: none;"></div>
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
    $('#socialForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();

        $.ajax({
            url: "{{ route('social.update') }}",
            type: "POST",
            data: formData,
            success: function (response) {
                if (response.success) {
                    $('#social-success').text(response.message).show();
                    setTimeout(() => $('#social-success').fadeOut(), 3000);
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