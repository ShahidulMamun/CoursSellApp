    
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
        <!-- counter_area -->
        <section class="counter_area">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                             <span><i class="fa fa-graduation-cap"></i></span>
                              <h2 class="timer count-number" data-to="{{App\Models\Course::count()}}" data-speed="1500"></h2>
                        </div>
                     
                       <p class="count-text ">Live Courses</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-video"></i></span>
                             <h2 class="timer count-number" data-to="{{App\Models\Video::count()}}" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">Total Videos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user-plus"></i></span>
                             <h2 class="timer count-number" data-to="{{App\Models\Enrollment::count()}}" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">Enroll</p>
                          
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-users"></i></span>
                             <h2 class="timer count-number" data-to="{{App\Models\User::count()}}" data-speed="1500"></h2>
                        </div>
                         <p class="count-text ">Users</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ counter_area -->
        <!-- table area -->
        <section class="table_area">
            <div class="panel">
                <div class="panel_header">
             @php
                            
             $users = App\Models\User::where('created_at', '>=', Carbon\Carbon::now()->subDays(30))->get();
             

             @endphp
                    <div class="panel_title"><span>Last month registered users ({{$users->count()}})</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>UserID</th>
                                  <th>UserName</th>
                                  <th>Email</th>
                                  <th>Join</th>
                              </tr>
                          </thead>
                          <tbody>



             @foreach($users as $data)

                  <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->created_at->format('d M')}}</td>


                  </tr>

              @endforeach
                             
                             
                              
                          </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /table -->


            <div class="panel">
                <div class="panel_header">
             @php
                            
             $enroll = App\Models\Enrollment::where('created_at', '>=', Carbon\Carbon::now()->subDays(30))->with('user')->with('course')->get();
             

             @endphp
                    <div class="panel_title"><span>Last month Enrolled ({{$enroll->count()}})</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>CourseID</th>
                                  <th>Course Title</th>
                                  <th>UserID</th>
                                  <th>UserName</th>
                                  <th>Email</th>
                                  <th>Enrolled</th>
                              </tr>
                          </thead>
                          <tbody>



             @foreach($enroll as $data)

                  <tr>
                      <td>{{$data->course->id}}</td>
                      <td>{{$data->course->title}}</td>
                      <td>{{$data->user->id}}</td>
                      <td>{{$data->user->name}}</td>
                      <td>{{$data->user->email}}</td>
                      <td>{{$data->created_at->format('d M')}}</td>


                  </tr>

              @endforeach
                             
                             
                              
                          </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /table -->
          
           
        </section>                   
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->
@endsection