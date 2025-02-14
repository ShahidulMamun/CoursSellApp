  
              <nav class="sidebar-nav">
                 <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{ asset('admin/dashboard')}}" class="menu-item">
                            <span class="left-icon"><i class="fa fa-home"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                      </li>

                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('admin.courses')}}" aria-expanded="false">
                            <span class="left-icon"><i class="fa fa-graduation-cap"></i></span>
                              <span class="menu-text">Course</span>
                          </a>
                      </li>

                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('admin.videos')}}" aria-expanded="false">
                            <span class="left-icon"><i class="fa fa-video"></i></span>
                              <span class="menu-text">Videos</span>
                          </a>
                      </li>


                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('admin.enrollment')}}" aria-expanded="false">
                            <span class="left-icon"><i class="fa fa-user-plus"></i></span>
                              <span class="menu-text">Enrollment</span>
                          </a>
                      </li>


                         <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('transaction')}}" aria-expanded="false">
                            <span class="left-icon"><i class="fab fa-exchange"></i></span>
                              <span class="menu-text">Transaction</span>
                          </a>
                      </li>



                    <!--   <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{ asset('admin/category/add')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Category</span>
                          </a>
                      </li> -->

                    <!--    <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{ route('admin.register')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Create Admin</span>
                          </a>
                      </li>
 -->

                        <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{ route('setting')}}" aria-expanded="false">
                            <span class="left-icon"><i class="fa fa-cog"></i></span>
                              <span class="menu-text">Setting</span>
                          </a>
                        </li>


                        <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{ route('social')}}" aria-expanded="false">
                            <span class="left-icon"><i class="fa fa-icons"></i></span>
                              <span class="menu-text">Social</span>
                          </a>
                        </li>


                   
                    </ul>
              </nav>
           