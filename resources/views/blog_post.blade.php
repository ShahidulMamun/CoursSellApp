@extends('layouts.fontend')
@section('content')

<div class="container-fluid">
    <div class="row">
    	<!-- start sidebar -->
    	<div class="col-12 col-sm-12 col-md-1 col-xl-1 col-xxl-1"></div>
    	<!-- middle containe bar -->
        <div class="col-12 col-sm-12 col-md-7 col-xl-7 col-xxl-7 bg-white mt-2">
             <div class="card border-0 mt-2">
             	<div class="card-body  ">
             		<h1 class="textpost text-secondary">
        	       Laravel Change Mail Driver Dynamically Example
            </h1>
             </div>
             </div>
            
               <div class="card border-0">
             	<div class="card-body p-0">
               <div class="row">
               	<div class="col-12 col-sm-12 col-md-12 col-xl-12 col-xxl-12">
               		<p class="text-justify p-2 projectdes">Livewire is a full-stack framework for Laravel framework that makes building dynamic interfaces simple, without leaving the comfort of Laravel. if you are using livewire with laravel then you don't worry about writing jquery ajax code, livewire will help to write very simple way jquery ajax code using php. without page refresh laravel validation will works, form will submit etc.
               		</p>
                    
                    <div class="card border-0 bg-primary latesttutaril">
                   <div class="card-body text-white p-1">
                     <span class="ml-2"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;By Hardik Savani</span>
                     <span class="ml-3"><i class="fa fa-calendar-alt" aria-hidden="true"></i> &nbsp;&nbsp;10 Sep 2022</span>

                     <span class="ml-3"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp;&nbsp;Freamwork :<span class="badge badge-warning ml-1 p-1">Laravel 9x</span></span>
                   </div>
                 </div>
               	</div>

                <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-xxl-12 mt-2">
                   <img src="{{asset('/product/dog.jpg')}}" class="mt-3 ml-2 screenshoutpost">

            
                   <div class="card border-0 mt-2 bg-light rounded-0 ">
                     <div class="card-body">
                       <pre class="prettyprint text-justify text-white">


                      </pre>
                   
                     </div>
                   </div>
                 
                </div>


               </div>
             </div>
             </div>

             
              <br><br>
             </div>
    <!--end middle containe bar -->
        <div class="col-12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
        	<div class="card border-0 mt-2">
                <div class="card-header bg-primary">
                <h2 class="text-white menutext text-center">Popular Posts</h2>
                </div>
                   <div class="card-body p-0">
                   	<table class="table table-hover text-white">
                    <tbody class="latestpost">
                      <tr>
                        <td><a href="#" class="text-decoration-none text-secondary">Angular 9/8 Image Upload and Cropper</a></td>
                      </tr>
                       <tr>
                       <td><a href="#" class=" text-decoration-none text-secondary">Angular 9/8 Image Upload and Cropper</a></td>
                     </tr>
                     <tr>
                       <td><a href="#" class=" text-decoration-none text-secondary">Angular 9/8 Image Upload and Cropper</a></td>
                     </tr>
                     <tr>
                       <td><a href="#" class=" text-decoration-none text-secondary">Angular 9/8 Image Upload and Cropper</a></td>
                     </tr>
                     <tr>
                       <td><a href="#" class=" text-decoration-none text-secondary">Angular 9/8 Image Upload and Cropper</a></td>
                     </tr>
                   </tbody>
                 </table>
                   </div>
                 </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">

 var g_files_added, socket, cookie, database = null;
var file_contents = [];
function viewFile(key, filename) {
    $('#title-filename').text(filename);
    $('#fileblock').html('<pre class="prettyprint">' + file_contents[key] + '</pre>'); // fileblock is a div.
    $('#viewFileModal').modal('show');
}
$(document).ready(function() {
    $(document).on('shown', '#viewFileModal', function(event) {
        prettyPrint();
    });
});
</script>
@endsection