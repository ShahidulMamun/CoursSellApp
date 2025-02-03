@extends('admin.admin_master')
@section('admin')

 <header class="header_area">
 	 @include('admin.head')
 </header>
<aside class="sidebar-wrapper ">
	 @include('admin.sidemenu')
</aside>

<div class="contanier">
	<div class="row">
		<div class="col-xl-12 mt-3">
			<div class="card border-0">
				<div class="card-body">
					<div class="row">
					<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
					<p class="text-muted">Add Category</p>
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
            <label for="recipient-name" class="col-form-label">Price:</label>
            <input type="text" class="form-control" id="recipient-name" name="price">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
          </div>

           <div class="form-group">
            <label for="message-text" class="col-form-label">Thumnail:</label>
             <input type="file" class="form-control" id="recipient-name" name="thumbnail">
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
      	<a class="btn btn-primary btn-sm" href="#" role="button"> <i class="far fa-edit"></i> Edit</a>
     
         <button class="deleteCourse" data-id="{{ $course->id }}">Delete</button>
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
                            alert(response.message);
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
@endsection