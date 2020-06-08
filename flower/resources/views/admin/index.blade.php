
@extends('admin.master')
@section('main')

<div class="clearfix"></div>
    
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Widgets</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Widgets</a></li>
            <li class="breadcrumb-item active" aria-current="page">Widgets</li>
         </ol>
       </div>
       <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
    
    <h6 class="text-uppercase">Static Widgets</h6>
         <hr>
    <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <h4 class="mb-0">4500</h4>
                            <span>Total Orders</span>
                        </div>
                        <div class="align-self-center w-icon">
                            <i class="icon-basket-loaded text-white"></i></div>
                    </div>
                    <div class="progress-wrapper mt-3">
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar" style="width:50%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <h4 class="mb-0">7850</h4>
                            <span>Total Expenses</span>
                        </div>
                        <div class="align-self-center w-icon">
                            <i class="icon-wallet text-white"></i></div>
                    </div>
                    <div class="progress-wrapper mt-3">
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar" style="width:50%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <h4 class="mb-0">87.5%</h4>
                            <span>Total Revenue</span>
                        </div>
                        <div class="align-self-center w-icon">
                            <i class="icon-pie-chart text-white"></i></div>
                    </div>
                    <div class="progress-wrapper mt-3">
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar" style="width:50%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <h4 class="mb-0">8400</h4>
                            <span>New Users</span>
                        </div>
                        <div class="align-self-center w-icon">
                            <i class="icon-user text-white"></i></div>
                    </div>
                    <div class="progress-wrapper mt-3">
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar" style="width:50%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

  <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                  <p class="text-white mb-0">Total Orders <span class="float-right"><i class="icon-basket-loaded"></i></span></p>
                   <div class="text-center">
                     <h4 class="mb-0 py-3">4856</h4>
                   </div>
                   <div class="progress-wrapper">
                      <div class="progress" style="height:5px;">
                        <div class="progress-bar" style="width:50%"></div>
                       </div>
                    </div>
              </div>
          </div>
       </div>


       <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                  <p class="text-white mb-0">Total Expenses <span class="float-right"><i class="icon-wallet"></i></span></p>
                   <div class="text-center">
                     <h4 class="mb-0 py-3">7850</h4>
                   </div>
                   <div class="progress-wrapper">
                      <div class="progress" style="height:5px;">
                        <div class="progress-bar" style="width:50%"></div>
                       </div>
                    </div>
              </div>
          </div>
       </div>

       <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                  <p class="text-white mb-0">Total Revenue <span class="float-right"><i class="icon-pie-chart"></i></span></p>
                   <div class="text-center">
                     <h4 class="mb-0 py-3">87.5%</h4>
                   </div>
                   <div class="progress-wrapper">
                      <div class="progress" style="height:5px;">
                        <div class="progress-bar" style="width:50%"></div>
                       </div>
                    </div>
              </div>
          </div>
       </div>

       <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                  <p class="text-white mb-0">New Users <span class="float-right"><i class="icon-user"></i></span></p>
                   <div class="text-center">
                     <h4 class="mb-0 py-3">8400</h4>
                   </div>
                   <div class="progress-wrapper">
                      <div class="progress" style="height:5px;">
                        <div class="progress-bar" style="width:50%"></div>
                       </div>
                    </div>
              </div>
          </div>
       </div>

   </div><!--End row-->
   
   <div class="row">
        <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left">
                            <h4 class="text-white mb-0">45240</h4>
                            <span class="text-white">Total Likes</span>
                        </div>
                        <div class="align-self-center w-circle-icon rounded border border-white">
                            <i class="fa fa-heart-o text-white"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left">
                            <h4 class="text-white mb-0">78,325</h4>
                            <span class="text-white">Comments</span>
                        </div>
                        <div class="align-self-center w-circle-icon rounded border border-white">
                            <i class="fa fa-comments-o text-white"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left">
                            <h4 class="text-white mb-0">25,354</h4>
                            <span class="text-white">Total Shares</span>
                        </div>
                        <div class="align-self-center w-circle-icon rounded border border-white">
                            <i class="fa fa-star text-white"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Row-->

    <div class="row">
        <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-white mb-0">45,260 <span class="float-right"><i class="zmdi zmdi-facebook"></i></span></h4>
            <div class="progress my-3" style="height:3px;">
               <div class="progress-bar" style="width:50%"></div>
            </div>
                    <p class="mb-0 text-white small-font">Facebook Likes <span class="float-right">+42% <i class="fa fa-arrow-up"></i></span></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-white mb-0">85,430 <span class="float-right"><i class="zmdi zmdi-twitter"></i></span></h4>
              <div class="progress my-3" style="height:3px;">
               <div class="progress-bar" style="width:50%"></div>
            </div>
                    <p class="mb-0 text-white">Twitter Followers <span class="float-right">+35% <i class="fa fa-arrow-up"></i></span></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-white mb-0">95,360 <span class="float-right"><i class="zmdi zmdi-youtube"></i></span></h4>
           <div class="progress my-3" style="height:3px;">
               <div class="progress-bar" style="width:50%"></div>
            </div>
                    <p class="mb-0 text-white">Youtube Subscribers <span class="float-right">+22% <i class="fa fa-arrow-up"></i></span></p>
                </div>
            </div>
        </div>

    </div>
    <!--End Row-->
         
     <h6 class="text-uppercase">Data Widgets</h6>
     <hr>
         <div class="row">
            <div class="col-12 col-lg-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                <div class="media align-items-center">
                 <div class="media-body text-left">
                   <p class="mb-0 text-white">Likes</p>
                  <h4 class="text-white">4500</h4>
                 </div>
                 <div id="widget-chart-1"></div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                <div class="media align-items-center">
                 <div class="media-body text-left">
                   <p class="mb-0 text-white">Comments</p>
                  <h4 class="text-white">7850</h4>
                 </div>
                 <div id="widget-chart-2"></div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                <div class="media align-items-center">
                 <div class="media-body text-left">
                   <p class="mb-0 text-white">Shares</p>
                  <h4 class="text-white">2500</h4>
                 </div>
                 <div id="widget-chart-3"></div>
                </div>
                </div>
              </div>
            </div>
          </div><!--End row-->
          
          <div class="card">
            <div class="card-content">
                <div class="row row-group m-0">
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0">4500</h4>
                                    <span>Total Orders</span>
                                </div>
                                <div class="w_chart dash-chart" data-percent="75">
                                   <span class="w_percent"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0">$8320</h4>
                                    <span>Total Revenue</span>
                                </div>
                                <div class="w_chart dash-chart" data-percent="55">
                                   <span class="w_percent"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0">3200</h4>
                                    <span>Visitors</span>
                                </div>
                                <div class="w_chart dash-chart" data-percent="85">
                                   <span class="w_percent"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0">5600</h4>
                                    <span>Messages</span>
                                </div>
                                <div class="w_chart dash-chart" data-percent="45">
                                   <span class="w_percent"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->
            </div>
        </div>
          
       <div class="row">
         <div class="col-12 col-lg-6 col-xl-3">
           <div class="card">
             <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body">
                      <span class="text-white">Total Orders</span>
                      <h3 class="text-white">2050</h3>
                    </div>
                    <div class="w-icon">
                      <i class="icon-basket-loaded text-white"></i>
                    </div>
                  </div>
                  <div id="widget-chart-4"></div>
                </div>
           </div>
         </div>
         <div class="col-12 col-lg-6 col-xl-3">
           <div class="card">
             <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body">
                      <span class="text-white">Total Expenses</span>
                      <h3 class="text-white">$325</h3>
                    </div>
                    <div class="w-icon">
                      <i class="icon-wallet text-white"></i>
                    </div>
                  </div>
                  <div id="widget-chart-5"></div>
                </div>
           </div>
         </div>
         <div class="col-12 col-lg-6 col-xl-3">
           <div class="card">
             <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body">
                    <span class="text-white">Total Revenue</span>
                    <h3 class="text-white">87.5%</h3>
                  </div>
                  <div class="w-icon">
                    <i class="icon-pie-chart text-white"></i>
                  </div>
                </div>
                <div id="widget-chart-6"></div>
              </div>
           </div>
         </div>
         <div class="col-12 col-lg-6 col-xl-3">
           <div class="card">
             <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body">
                    <span class="text-white">New Users</span>
                    <h3 class="text-white">2550</h3>
                  </div>
                  <div class="w-icon">
                    <i class="icon-user text-white"></i>
                  </div>
                </div>
                <div id="widget-chart-7"></div>
              </div>
           </div>
         </div>
      </div><!--End Row-->
          
    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 CoreUi Admin
        </div>
      </div>
    </footer>
    <!--End footer-->
    
    <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>
  <!--end color cwitcher-->
   
  </div><!--End wrapper-->


  
@stop

  