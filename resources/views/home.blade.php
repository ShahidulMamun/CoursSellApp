    
@extends('layouts.blog_master')
@section('admin')

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
                             <span><i class="fa fa-code"></i></span>
                              <h2 class="timer count-number" data-to="300" data-speed="1500"></h2>
                        </div>
                     
                       <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-coffee"></i></span>
                             <h2 class="timer count-number" data-to="1700" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user"></i></span>
                             <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                          
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-bug"></i></span>
                             <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                        </div>
                         <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ counter_area -->
        <!-- table area -->
        <section class="table_area">
            
            <!-- chart area -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel chart_area">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                                <span>bar chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="bar-chart">
                                <div id="bar-legend"></div>
                                <canvas id="bar-canvas" ></canvas>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                                <span>pie chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="piechart"></div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>                   
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->
@endsection