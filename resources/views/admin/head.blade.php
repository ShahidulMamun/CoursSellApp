
                <div class="sidebar_logo">
                    <a href="{{ route('admin.dashboard')}}">
<img src="{{asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid logo1">
<img src="{{asset('panel/assets/images/logo_small.png')}}" alt="" class="img-fluid logo2">
                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="header_menu">
                    <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                        <div class="modal fade search_box" id="myModal">
                              <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                              <form action="#" class="modal-dialog modal-lg">
                                
                                <div class="modal-content bg-transparent">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <input class="form-control bg-transparent text-white form-control-lg"  type="text" placeholder="Search...">
                                        <button class="btn btn-lg submit-btn" type="submit">Search</button>
                                      </div>
                                </div>
                                 
                              </form>
                        </div>
                    </li>
               
                    <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span>9</span></a>
                        <div class="dropdown_wrapper notification_item dropdown-menu dropdown-menu-right">
                            <div class="dropdown_header">
                                <p>You have 9 notifications</p>
                            </div>
                            <ul class="dropdown_body scrollbar nice_scroll">
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-users"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p>5 new members joined</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> Very long description here that may...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> 25 sales made</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-warning"><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> You changed your username</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-users"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p>5 new members joined</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> Very long description here that may...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> 25 sales made</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-warning"><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> You changed your username</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown_footer">
                                <a href="#">view All</a>
                            </div>
                        </div>
                    </li>
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                <div class="admin">
                                    <a href="#" class="user_link"><img src="panel/assets/images/admin.jpg" alt=""></a>
                                </div>
                            <ul>
                             
                                <li><a href="{{route('admin.password.form')}}"><span><i class="fas fa-user"></i></span>  Profile & Password </a></li>
                                <li>

                                    <a href=" {{ route('admin.logout') }}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            