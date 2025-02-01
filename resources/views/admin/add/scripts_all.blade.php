@extends('admin.admin_master')
 <script src="{{ asset('checkeditor/ckeditor.js')}}"></script>
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
							<p class="text-muted">Add Scripts</p>
						</div>
						<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-end mt-2">
						<a class="text-dark" href="{{ asset('admin/dashboard')}}">Dashboard |</a>
							<a class="text-dark" href="#">Admin |</a>
							<a class="text-dark" href="{{ asset('admin/add/scripts_all')}}">Add Scripts</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-5">
       @if( session('add_product'))
          <div class="alert alert-success">
            {{ session('add_product') }}
          </div>
          @endif 
			<div class="card border-0 mt-3">
				<div class="card-body">
					<form class="form" action="{{ route('admin.add.software')}}" method="POST" enctype='multipart/form-data'>  
           @csrf
             <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltext">Title</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
            <input type="Text" class="form-control alltext font-weight-light {{$errors->has('title') ? ' is-invalid' : ''}}" name="title" value="{{ old('title')}}" placeholder="Title">
             @if ($errors->has('title'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
               </span>
            @endif
           </div>
        </div>

           <div class="form-gruop mt-2">
            <select class="form-control {{$errors->has('product_category') ? ' is-invalid' : ''}}" name="product_category">
              <option disabled selected hidden>Selected Category</option>
              @foreach($allcategory as $cat)
              <option value="{{$cat->category_title}}">{{$cat->category_title}}</option>
              @endforeach
            </select>
             @if ($errors->has('product_category'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('product_category') }}</strong>
               </span>
            @endif
           </div>

            <div class="form-gruop mt-2">
            <select class="form-control {{$errors->has('product_subcategory') ? ' is-invalid' : ''}}" name="product_subcategory">
              <option disabled selected hidden>Selected Sub Category</option>
              @foreach($subcategory as $cat)
              <option value="{{$cat->sub_category}}">{{$cat->sub_category}}</option>
              @endforeach
            </select>
             @if ($errors->has('product_subcategory'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('product_subcategory') }}</strong>
               </span>
            @endif
           </div>

           <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltext">Image</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
            <input type="file" class="form-control alltext font-weight-light {{$errors->has('images') ? ' is-invalid' : ''}}" name="images" value="" placeholder="Title">
             @if ($errors->has('images'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('images') }}</strong>
               </span>
            @endif
           </div>
        </div>


        <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltext">Text</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
              <textarea id="text" class="form-control alltext font-weight-light {{$errors->has('text') ? ' is-invalid' : ''}}" name="text" value="" placeholder="Text here ........">
              </textarea>
             @if ($errors->has('text'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('text') }}</strong>
               </span>
            @endif
           </div>
        </div>

         <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltext">Rating</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
            <input type="Text" class="form-control alltext font-weight-light {{$errors->has('rating') ? ' is-invalid' : ''}}" name="rating" value="" placeholder="Rating 4.5">
             @if ($errors->has('rating'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('rating') }}</strong>
               </span>
            @endif
           </div>
        </div>

         <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltext">Preview images</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
            <input type="file" class="form-control alltext font-weight-light {{$errors->has('preview_images') ? ' is-invalid' : ''}}" name="preview_images" value="" placeholder="">
             @if ($errors->has('preview_images'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('preview_images') }}</strong>
               </span>
            @endif

           </div>
         </div>


         <div class="form-gruop">
            <label class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm  alltext">Software Features</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
              <textarea  class="form-control{{$errors->has('software_features') ? ' is-invalid' : ''}}" id="features" rows="3" name="software_features" value=""></textarea>
             @if ($errors->has('software_features'))
              <span class="invalid-feedback font-italic font-weight-light" role="alert">
                <strong>{{ $errors->first('software_features') }}</strong>
               </span>
            @endif
           </div>
        </div>

           
        <div class="form-gruop mt-sm-1">
               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 mt-2">
                <button type="submit" class=" btn-sm  btn btn-info alltext">Add</button>
               </div>
            </div>

      </form>
				</div>
			</div>
		</div>
		<div class="col-xl-7 mt-3">
			<div class="card border-0">
				<div class="card-body">
			<div class="table-responsive">
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- checkeditor -->
<script>
    ClassicEditor
    .create( document.querySelector( '#text' ) )
    .catch( error => {
    console.error( error );
    });
</script>
<script>
    ClassicEditor
    .create( document.querySelector( '#features' ) )
    .catch( error => {
    console.error( error );
    });
</script>

<script src="{{ asset('checkeditor/jquery.min.js')}}"></script>
@endsection