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
		<div class="card-body ">
			<div class="row ">
				<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-6 col-xxl-6">
					<h6 class="text-primary font-weight-light alltext">Add Project</h6>
				</div>

				<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-6 col-xxl-6 text-right">
					<a href="{{asset('home')}}" class="alltext text-primary font-weight-light text-decoration-none">Dashboard&nbsp;&nbsp;<small class="font-weight-lighter">|</small></a>
				    <a href="#" class="alltext text-primary font-weight-light text-decoration-none">&nbsp;Project<small>&nbsp;&nbsp;|</small></a> 
					<a href="{{asset('blog_list')}}" class="alltext text-primary font-weight-light text-decoration-none">&nbsp;Project List</a>
					
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- End head part -->

	<div class="row">
		<div class="col-xl-4 mt-4">
			<h6 class="text-primary font-weight-light ml-4 alltext">Add Project</h6>
			<div class="card border-0">
				<div class="card-body"> 
					<form class="form" action="{{ route('add_blog.create')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                  <div class="form-gruop">
                    <label for="" class="col-12 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltextform font-weight-light">Project Title</label>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                    <input type="Text" class="form-control{{$errors->has('project_title') ? ' is-invalid' : ''}} alltextform font-weight-light" name="project_title" value="{{ old('project_title') }}" placeholder="Project Title">

                    @if ($errors->has('project_title'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_title') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>


                    <div class="form-gruop">
                    <label for="colFormLabelSm" class="col-form-label col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltextform font-weight-light">Project Descriptions</label>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
         <textarea class="form-control{{$errors->has('project_description') ? ' is-invalid' : ''}} alltextform font-weight-light" name="project_description" placeholder="Descriptions Here......." rows="5"></textarea>
                    
                    @if ($errors->has('project_description'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_description') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>



                   <div class="form-gruop">
                    <label for="colFormLabelSm" class="col-form-label col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm alltextform">Framework Name and Version</label>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                    <input type="Text" class="form-control{{$errors->has('project_framework') ? ' is-invalid' : ''}} alltextform font-weight-light" name="project_framework" value="{{ old('project_framework') }}" placeholder="Laravel 9x">

                    @if ($errors->has('project_framework'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_framework') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>



                  <div class="form-gruop">
                    <label for="colFormLabelSm" class="col-form-label col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm alltextform">Date</label>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                    <input type="Date" class="form-control{{$errors->has('project_date') ? ' is-invalid' : ''}} alltextform font-weight-light" name="project_date" value="{{ old('project_date') }}">

                    @if ($errors->has('project_date'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_date') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>
                      
                  <div class="form-gruop">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
    <img src="" id="preview-image" class="alltextform rounded studentedite font-italic font-weight-light mt-1" alt="Project Screenshot">

                  <input type="file" id="image" name="project_screenshot" class="form-control form-control-sm{{$errors->has('project_screenshot') ? ' is-invalid' : ''}} alltextform font-weight-light mt-1" value="{{ old('project_screenshot') }}" accept=".png,.jpeg,.jpg">

                    @if ($errors->has('project_screenshot'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_screenshot') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>


              <div class="form-gruop">
                    <label for="colFormLabelSm" class="col-form-label col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm alltextform">Framework Name and Version</label>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                    <input type="Text" class="form-control{{$errors->has('project_framework') ? ' is-invalid' : ''}} alltextform font-weight-light" name="project_framework" value="{{ old('project_framework') }}" placeholder="Laravel 9x">

                    @if ($errors->has('project_framework'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_framework') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>


                   <div class="form-gruop">
                    <label for="colFormLabelSm" class="col-form-label col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltextform font-weight-light">Project Code</label>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
         <textarea class="form-control{{$errors->has('project_code') ? ' is-invalid' : ''}} alltextform font-weight-light" name="project_code" placeholder="Project Code Here......." rows="10"></textarea>
                    
                    @if ($errors->has('project_code'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('project_code') }}</strong>
                   </span>
                     @endif
                    </div>
                  </div>

                 
     
            <div class="form-gruop">
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 col-xxl-12">
                <button type="submit" class=" btn-sm  btn btn-primary alltextform mt-4">Save Project</button>
               </div>
            </div>
                </form>
				</div>
			</div>
		</div>

    

		<div class="col-xl-8 mt-3">
			<div class="row">
				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-5 col-xxl-5"><h6 class="text-primary font-weight-light ml-md-3 ml-sm-1">Project list</h6></div>
				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
					<form class="form-inline float-right">
             <input class="form-control form-control-sm mr-sm-5" id="myInput" type="text" placeholder="Search" aria-label="Search">
          </form>
					
					 
				</div>
				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                 <a class="btn btn-danger btn-sm  float-right border-0 rounded-0" href="#"><i class="far fa-file-pdf "></i></a>
           <a class="btn btn-success btn-sm float-right border-0 rounded-0" title="excel" href="#"><i class="fas fa-file-excel "></i></a>
         <a class="btn btn-dark btn-sm float-right border-0 rounded-0" title="csv" href="#"><i class="fas fa-file-csv"></i></a>
				</div>
			</div>
			
			
			
              
			<div class="card border-0 mt-1">
				<div class="card-body">
          <div class="table-responsive">
					<table class="table">
                   <thead class="">
                     <tr class="tabletext font-weight-light text-muted">
                       <th scope="col">#</th>
                       <th scope="col">Project Title</th>
                       <th scope="col">Laravel Version</th>
                       <th scope="col">Date</th>
                       <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody class="alltextform" id="myTable">
                     <tr>
                       <td>1</td>
                       <td>test basdbcshb</td>
                       <td>Laravel asjkdb  skjdbwaadb</td>
                       <td>12/02/22</td>
                       <td class="">

  <a class="btn btn-info btn-sm btnresponsive" href="#" type="button">
    <h6 class="iconbtn"><i class="fa fa-eye fa-xs" aria-hidden="true"></i></h6>
</a>

  <a class="btn btn-primary btn-sm pb-sm-0 btnresponsive" href="#" type="button">
    <h6 class="iconbtn"><i class="fa fa-edit fa-xs"></i></h6>
   
  </a>

<a class="btn btn-danger btn-sm btnresponsive" href="#" type="button">
<h6 class="iconbtn"><i class="fa fa-trash-alt fa-xs"></i></h6>
</a>

                       </td>
                     </tr>
                    
                     
                   </tbody>

                 </table>
                 </div>
                  <nav aria-label="Page navigation example">
              <ul class="pagination pagination-sm">

                
                </ul>
               </nav>
				</div>
			</div>

		</div>
	</div>
</div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

@endsection


@section('scripts')
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
<script type="text/javascript">
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>



  <script type="text/javascript">
    $('#image').change(function(){
           
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#preview-image').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
  
   });
  </script>
@endsection