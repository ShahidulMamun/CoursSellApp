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

</head>

<div class="contanier">
	<div class="row">
		<div class="col-xl-12 mt-3">
			<div class="card border-0">
				<div class="card-body">
					<div class="row">
					<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
					<p class="text-muted">Courses</p>
						</div>
						<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-end mt-2">
						<a class="text-dark" href="{{ asset('admin/dashboard')}}">Dashboard |</a>
							<a class="text-dark" href="#">Admin |</a>
							<a class="text-dark" href="{{ asset('admin/category/add')}}">Courses</a>
						</div>
					</div>
				</div>
			</div>
      
     <!--  course add modal -->
      <div class="mt-2" style="float: right;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add Course</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content mt-5">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="{{route('courses.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="recipient-name" name="title">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Regular Price:</label>
            <input type="text" class="form-control" id="recipient-name" name="price">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Discount Price:</label>
            <input type="text" class="form-control" id="recipient-name" name="discount_price">
          </div>


          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
          </div>

          <div class="form-group">
              <label>Trial Video URL</label>
              <input type="text" name="course_trial_video" class="form-control" placeholder="Enter trial video URL">
          </div>

           <div class="form-group">
            <label for="message-text" class="col-form-label">Thumnail:</label>
             <input type="file" class="form-control" id="recipient-name" name="thumbnail">
          </div>

          <div class="form-group">
              <label>Tags (comma-separated)</label>
              <input type="text" name="tags" class="form-control" placeholder="Enter tags, e.g., Laravel, PHP, Web Development">
          </div>

           <div class="form-group">
            <label for="message-text" class="col-form-label">Status:</label>
               
             <select name="status" class="form-control">
                <option value="0">Coming Soon</option>
                <option value="1" selected>Active</option>
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

    <!-- Edit Course Modal -->
<div class="modal fade" id="editCourseModal" tabindex="-1" role="dialog" aria-labelledby="editCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content mt-5">
            <div class="modal-header">
                <h5 class="modal-title" id="editCourseModalLabel">Edit Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCourseForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="course_id">
                    
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" id="title" required>
                    <small class="text-danger error-message" id="title_error"></small>
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                    <small class="text-danger error-message" id="description_error"></small>
                </div>

                 <div class="form-group">
                    <label>Trial Video:</label>
                    <input type="text" class="form-control" name="course_trial_video" id="course_trial_video">
                    <small class="text-danger error-message" id="course_trial_video_error"></small>
                </div>


                <div class="form-group">
                    <label>Regula Price:</label>
                    <input type="number" class="form-control" name="regular_price" id="regular_price">
                    <small class="text-danger error-message" id="regular_price_error"></small>
                </div>

                 <div class="form-group">
                    <label>Discount Price:</label>
                    <input type="number" class="form-control" name="discount_price" id="discount_price">
                    <small class="text-danger error-message" id="discount_price_error"></small>
                </div>

                  <div class="form-group">
                    <label>Tags:</label>
                    <input type="text" class="form-control" name="tags" id="tags">
                    <small class="text-danger error-message" id="tags_error"></small>
                </div>
                
              <div class="form-group">
                  <label>Thumbnail:</label>
                  <br>
                  <img id="thumbnail_preview" src="" alt="Course Thumbnail" class="img-fluid" style="height:auto; width: 100%">
              </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" name="thumbnail" id="thumbnail">
                    <small class="text-danger error-message" id="thumbnail_error"></small>
                </div>

               



               <div class="form-group">
                        <label>Status:</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">Comming soon</option>
                            <option value="2">Paused</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Course</button>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- Edit Course Modal -->


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
      <th>Thumbnail</th>
      <th>Price</th>
      <th>Status</th>
     
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($courses as $course)
    <tr id="course-{{ $course->id }}">
      <td>{{ $loop->index +1}}</td>
      <td>{{ $course->title }}</td>
      <td><img src="{{ asset('storage/' . $course->thumbnail) }}" width="100"></td>
        <td>{{ $course->price }}BDT</td>
        <td>
           @if($course->status == 0) Coming Soon
                    @elseif($course->status == 1) Active
                    @else Paused
          @endif
        </td>
      <td>
      

        <button class="btn btn-success btn-sm edit-btn" data-target="#editCourseModal" data-toggle="modal" data-id="{{ $course->id }}"><i class="far fa-edit"></i>Edit</button>

     
         <button class="deleteCourse btn btn-sm btn-danger" data-id="{{ $course->id }}">Delete</button>
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
            let confirmDelete = confirm("Are you sure you want to delete this course?");

            if(confirmDelete){
                $.ajax({
                    url: "/admin/courses/" + courseId,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if(response.success){
                            $("#course-" + courseId).remove();
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

     // Initialize CKEditor
    CKEDITOR.replace("description");

    $(".edit-btn").click(function () {
        let courseId = $(this).data("id");

        // Fetch course data via AJAX
        $.ajax({
            url: `/admin/courseedit/${courseId}`,
            type: "GET",
            success: function (response) {
                let course = response.course;
                
                // Set data into modal fields
                $("#course_id").val(course.id);
                $("#title").val(course.title);
                $("#description").val(course.description);
                $("#course_trial_video").val(course.course_trial_video);
                $("#regular_price").val(course.regular_price);
                $("#discount_price").val(course.discount_price);
                $("#tags").val(course.tags);
                $("#status").val(course.status);



                // Show the thumbnail image
              if (course.thumbnail) {
                  $("#thumbnail_preview").attr("src", "/storage/" + course.thumbnail);
              } else {
                  $("#thumbnail_preview").attr("src", "https://via.placeholder.com/150");
              }
               
               // Set content in CKEditor
                CKEDITOR.instances.description.setData(course.description);
                // Show the modal using Bootstrap 4 method
                $("#editCourseModal").modal("show");
            },
            error: function () {
                alert("Error fetching course data.");
            }
        });
    });

    // Submit form with AJAX
   $("#editCourseForm").submit(function (e) {
    e.preventDefault();
    
    let formData = new FormData(this);
    let courseId = $("#course_id").val();

    $.ajax({
        url: `/admin/courses/update/${courseId}`,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response.success) {
                alert("Course updated successfully!");
                $("#editCourseModal").modal("hide");
                location.reload();
            }
        },
        error: function (xhr) {
            console.log(xhr.responseText); // Show actual error in the console
            alert("Something went wrong! Check console.");
        }
    });
});

});

    </script>

   <!--  script for ck-editor -->
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
     <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>

      <script>
    CKEDITOR.replace( 'description' );
    </script>


@endsection