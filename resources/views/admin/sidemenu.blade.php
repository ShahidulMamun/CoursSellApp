  
              <nav class="sidebar-nav">
                 <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{ asset('admin/dashboard')}}" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">home</span>
                        </a>
                      </li>

                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('admin.courses')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Course</span>
                          </a>
                      </li>

                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{route('admin.videos')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Videos</span>
                          </a>
                      </li>

                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{ asset('admin/category/add')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Category</span>
                          </a>
                      </li>

                       <li class="single-nav-wrapper">
                          <a class="menu-item" href="{{ route('admin.register')}}" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                              <span class="menu-text">Create Admin</span>
                          </a>
                      </li>


                   
                    </ul>
              </nav>
           