    
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
           
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        
    <div class="container">
        <h2>Change Password</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.update-password') }}">
            @csrf

            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="current_password" class="form-control" required>
                @error('current_password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" required>
                @error('new_password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password" name="new_password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>

                    </div>
                </div>
            </div> <!-- /table -->
          
           
        </section>                   
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->
@endsection