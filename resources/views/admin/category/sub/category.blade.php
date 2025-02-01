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
					<p class="text-muted">Add Sub Category</p>
						</div>
						<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-end mt-2">
						<a class="text-dark" href="{{ asset('admin/dashboard')}}">Dashboard |</a>
							<a class="text-dark" href="#">Admin |</a>
							<a class="text-dark" href="{{ asset('admin/category/add')}}">Add Category</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-xsm-12 col-sm-5 col-md-5 col-lg-6 col-xl-4 col-xxl-4">
			 @if( session('status_subcategory'))
          <div class="alert alert-success">
            {{ session('status_subcategory') }}
          </div>
          @endif 
			<div class="card border-0 mt-3">
				<div class="card-body">
					<form class="form" action="{{ route('admin.category.sub.add')}}" method="POST">  
					@csrf       
          <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm ">SubCategory</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
          <input type="Text" class="form-control font-weight-light {{$errors->has('sub_category') ? ' is-invalid' : ''}}" name="sub_category" value="{{ old('sub_category')}}" placeholder="Category">

              @if ($errors->has('sub_category'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('sub_category') }}</strong>
                   </span>
                     @endif
           </div>
        </div>

         <div class="form-gruop">
            <label for="colFormLabelSm" class="p-0 col-form-label col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label-sm "> Category Select</label>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 p-0">
              <select class="form-control" name="category">
                @foreach($category as $cat)
                 <option value="{{$cat->id}}">{{$cat->category_title}}</option>
                @endforeach
              </select>

              @if ($errors->has('sub_category'))
                    <span class="invalid-feedback font-italic font-weight-light" role="alert">
                 <strong>{{ $errors->first('sub_category') }}</strong>
                   </span>
                     @endif
           </div>
        </div>


        <div class="form-gruop mt-sm-1">
               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 mt-2">
                <button type="submit" class=" btn-sm  btn btn-info ">Add</button>
               </div>
            </div>

      </form>
				</div>
			</div>
		</div>
		<div class="col-12 col-xsm-12 col-sm-7 col-md-7 col-lg-6 col-xl-6 col-xxl-6 mt-3">
			<div class="card border-0">
				<div class="card-body">
			<div class="table-responsive">
		<table class="table table-striped">
  <thead>
    <tr class="text-muted">
      <th>#</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($subcategory as $data)
    <tr>
      <td>{{ $loop->index +1}}</td>
      <td>{{ $data->sub_category }}</td>
      <td>
      	<a class="btn btn-primary btn-sm" href="#" role="button"> <i class="far fa-edit"></i> Edit</a>
      	<a class="btn btn-danger btn-sm" href="#" role="button"> <i class="fa fa-trash"></i> Delete</a>
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

@endsection