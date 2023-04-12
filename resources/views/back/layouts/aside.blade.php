<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('admin-panel')}}/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('admin-panel')}}/assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('admin-panel')}}/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('admin-panel')}}/assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('partner.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Partnyorlar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('about.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Haqqımızda</span>
                            </a>
                        </li>
                      

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('service.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Xidmətlər</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('certificate.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Sertifikatlar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('support.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Texniki dəsdək</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('banner.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Bannerlər</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('slider.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Slayderlər</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Xəbərlər</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('news_category.index')}}" class="nav-link" data-key="t-analytics"> Xəbər kateqoriyası </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('news.index')}}" class="nav-link" data-key="t-analytics"> Xəbərlər </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-Projects">Layihələr</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('project.category.index')}}" class="nav-link" data-key="t-analytics"> Layihə kateqoriyası </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('project.index')}}" class="nav-link" data-key="t-analytics"> Layihələr </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-Products">Məhsullar</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProducts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link" data-key="t-analytics"> Məhsul kateqoriyası </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('brend.index')}}" class="nav-link" data-key="t-analytics"> Məhsul brendləri </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('product.index')}}" class="nav-link" data-key="t-analytics"> Məhsullar </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{-- {{route('contact.index')}} --}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Əlaqə</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('tercume.index')}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Tercume</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
