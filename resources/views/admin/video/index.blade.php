@extends('admin.admin_master')
@section('admin')

 <header class="header_area">
 	 @include('admin.head')
 </header>
<aside class="sidebar-wrapper ">
	 @include('admin.sidemenu')
</aside>
<head>
  <style type="text/css">
    .modal-dialog {
    max-width: 70%;
    margin: 0 auto;
   }
   .cke_notification{
    display: none;
   }
  </style>

	 <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
	<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
	<script>
	    const player = new Plyr('#player');
	</script>


</head>

<div class="contanier">
	<div class="row">
		<div class="col-xl-12 mt-3">
			<div class="card border-0">
				<div class="card-body">
					<div class="row">
					<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
					<p class="text-muted">Videos</p>
						</div>
						<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-end mt-2">
						<a class="text-dark" href="{{ asset('admin/dashboard')}}">Dashboard |</a>
							<a class="text-dark" href="#">Admin |</a>
							<a class="text-dark" href="{{ route('admin.videos')}}">videos</a>
						</div>
					</div>
				</div>
			</div>
      
     <!--  course add modal -->
      <div class="mt-2" style="float: right;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add Video</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content mt-5">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="{{route('videos.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="recipient-name" name="title">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Link</label>
            <input type="text" class="form-control" id="recipient-name" name="video_url">
          </div>
        
           <div class="form-group">
            <label for="message-text" class="col-form-label">Course</label>
               
             <select name="course_id" class="form-control">
             	@foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->title}}</option>
                @endforeach
            </select>
          </div>
             <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add Course</button>
        </div>
      </form>
      
      </div>
       

    </div>
  </div>
</div>
      </div>
    <!-- courese add modal -->

    <!-- Edit Video Modal -->
   <div class="modal fade" id="editVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Video</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="editVideoForm">
                	@csrf
                    <input  name="id" id="video_id">
                    
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="video_title" name="video_title" class="form-control">
                         <span class="text-danger error-message" id="title_error"></span> <!-- Error message -->
                    </div>

                    <div class="form-group">
                        <label>Video Link</label>
                        <input type="text" id="video_url" name="video_url" class="form-control">
                       <span class="text-danger error-message" id="video_url_error"></span> <!-- Error message -->
                    </div>
<!-- 
                    <div class="form-group">
                        <label>Order</label>
                        <input type="number" id="video_order" nameclass="form-control">
                        <span class="text-danger error-text order_error"></span>
                    </div>
 -->
                    <div class="form-group">
                        <label>Course</label>
                        <select id="course_id" name="course_id" class="form-control">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger error-message" id="course_id_error"></span> <!-- Error message -->
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- Edit Video Modal -->


		</div>
  @if( session('status_addcategory'))
          <div class="alert alert-success">
            {{ session('status_addcategory') }}
          </div>
          @endif 

		<div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3">
			<div class="card border-0">
				<div class="card-body">
			<div class="table-responsive">
		<table class="table table-striped">
  <thead>
    <tr class="text-muted">
      <th>#</th>
      <th>Title</th>
      <th>Video</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($videos as $video)
    <tr id="video-{{ $video->id }}">
      <td>{{ $loop->index +1}}</td>
      <td>{{ $video->title }}</td>
      <td>
   
   <!-- <video id="player" playsinline controls>
    <source src="https://www.youtube.com/embed/{{ $video->video_id }}" type="video/youtube">
  </video> -->

  <iframe 
    width="560" 
    height="315" 
    src="https://www.youtube.com/embed/{{ $video->video_id }}" 
    frameborder="0" 
    allowfullscreen>
</iframe>


      </td>
        <td>
           {{$video->status}}
        </td>
      <td>
      

        <button class="btn btn-success btn-sm edit-video" data-target="#editVideoModal" data-toggle="modal" data-id="{{ $video->id }}"><i class="far fa-edit"></i>Edit</button>

     
         <button class="deleteCourse btn btn-sm btn-danger" data-id="{{ $video->id }}">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- scripts for delete -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).on("click", ".deleteCourse", function(){
            let courseId = $(this).data("id");
            let confirmDelete = confirm("Are you sure you want to delete this Video?");

            if(confirmDelete){
                $.ajax({
                    url: "/admin/video/" + courseId,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if(response.success){
                            $("#video-" + courseId).remove();
                            // alert(response.message);
                        } else {
                            alert("Something went wrong.");
                        }
                    },
                    error: function() {
                        alert("Error deleting course.");
                    }
                });
            }
        });
    </script>


    <script>
     $(document).ready(function () {
    // Open modal and load data
    $(".edit-video").click(function () {
        var videoId = $(this).data("id");

    $.ajax({
    url: "/admin/video/" + videoId + "/edit",
    type: "GET",
    success: function (data) {
        // console.log("Fetched Data:", data); // Check what is received
        
        $("#video_id").val(data.video.id);
        $("#video_title").val(data.video.title);
        $("#course_id").val(data.video.course_id);
        $("#video_url").val(data.video.video_id);
        $("#video_order").val(data.video.order);
        

        // console.log("Title Field Value:", $("#video_title").val()); // Debug
        // console.log("Video Code Field Value:", $("#video_code").val()); // Debug
        
        $("#editVideoModal").modal("show");
    },
    error: function (xhr) {
        console.error("Error fetching video:", xhr);
    }
  });

    });

    // Update video details
 $("#editVideoForm").submit(function (e) {
    e.preventDefault(); // Prevent form from submitting normally

    var videoId = $("#video_id").val(); // Get video ID from hidden input

    $.ajax({
        url: "/admin/videoupdate/" + videoId,  // Update route with ID
        type: "POST",  // Use POST instead of PUT
        data: {
            _method: "POST",  // Laravel treats this as a PUT request
            title: $("#video_title").val(),
            video_url: $("#video_url").val(),
            course_id: $("#course_id").val(),
            _token: $("input[name=_token]").val() // CSRF Token for security
        },
        success: function (response) {
            alert(response.success); // Show success message
            $("#editVideoModal").modal("hide"); // Close modal
            location.reload(); // Refresh the page to reflect changes
        },
        error: function (xhr) {
             if (xhr.status === 422) { // Laravel validation error
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    $("#" + key + "_error").text(value[0]).show(); // Show errors in the correct place
                });
            } else {
                alert("Something went wrong. Please try again.");
            }
        }
    });
});


});

    </script>

  

@endsection