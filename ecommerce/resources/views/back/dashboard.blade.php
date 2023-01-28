@extends('back.layouts.master')



@section('content')


      
      <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Projects</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Projects</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row project-wrapper">
                        <div class="col-xxl-8">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary rounded-2 fs-2">
                                                        <i data-feather="briefcase"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden ms-3">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Active Projects</p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                                                        <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02 %</span>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0">Projects this month</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning rounded-2 fs-2">
                                                        <i data-feather="award"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                                                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58 %</span>
                                                    </div>
                                                    <p class="text-muted mb-0">Leads this month</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info rounded-2 fs-2">
                                                        <i data-feather="clock"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden ms-3">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                        Total Hours</p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="168">0</span>h <span class="counter-value" data-target="40">0</span>m</h4>
                                                        <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35
                                                            %</span>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0">Work this month</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                      
                                        <div class="card-header d-flex align-items-center">
                                            <h4 class="card-title flex-grow-1 ">Active Projects</h4>
                                        
                                        </div>
                                      
                                        <div class="card-body ">
                                            <div class="table-responsive table-card">
                                                <table class="table table-nowrap table-centered align-middle">
                                                    <thead class="bg-light text-muted">
                                                        <tr>
                                                            <th scope="col">Ad Soyad</th>
                                                            <th scope="col">Mail</th>
                                                            
                                                            <th scope="col">Nömrə</th>
                                                            <th scope="col" style="width: 10%;">Qeydiyyat tarixi</th>
                                                        </tr><!-- end tr -->
                                                    </thead><!-- thead -->
        
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-medium">Brand Logo Design</td>
                                                            <td>
                                                                
                                                                <a href="javascript: void(0);" class="text-reset">Donald
                                                                    Risher</a>
                                                            </td>
                                                            
                                                            <td><span class="badge badge-soft-warning">xxx-xx-xx</span></td>
                                                            <td class="text-muted">06 Sep 2021</td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Redesign - Landing Page</td>
                                                            <td>
                                                                
                                                                <a href="javascript: void(0);" class="text-reset">Prezy
                                                                    William</a>
                                                            </td>
                                                          
                                                            <td><span class="badge badge-soft-danger">xxxxxxx</span></td>
                                                            <td class="text-muted">13 Nov 2021</td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Multipurpose Landing Template</td>
                                                            <td>
                                                                
                                                                <a href="javascript: void(0);" class="text-reset">Boonie
                                                                    Hoynas</a>
                                                            </td>
                                                          
                                                            <td><span class="badge badge-soft-success">xxxxxxxx</span></td>
                                                            <td class="text-muted">26 Nov 2021</td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Chat Application</td>
                                                            <td>
                                                                
                                                                <a href="javascript: void(0);" class="text-reset">Pauline
                                                                    Moll</a>
                                                            </td>
                                                          
                                                            <td><span class="badge badge-soft-warning">xxxxxxxxx</span></td>
                                                            <td class="text-muted">15 Dec 2021</td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Create Wireframe</td>
                                                            <td>
                                                                
                                                                <a href="javascript: void(0);" class="text-reset">James
                                                                    Bangs</a>
                                                            </td>
                                                            
                                                          
                                                            <td><span class="badge badge-soft-warning">xxxxxxxxx</span></td>
                                                            <td class="text-muted">21 Dec 2021</td>
                                                        </tr><!-- end tr -->
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div>
        
                                            <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <ul class="pagination pagination-separated pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>
        
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->

                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h4 class="card-title mb-0">Upcoming Schedules</h4>
                                </div><!-- end cardheader -->
                                <div class="card-body pt-0">
                                    <div class="upcoming-scheduled">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                                    </div>

                                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Events:</h6>
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                09
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Development planning</h6>
                                            <p class="text-muted mb-0">iTest Factory </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                                        </div>
                                    </div><!-- end -->
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                12
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Design new UI and check sales</h6>
                                            <p class="text-muted mb-0">Meta4Systems</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">11:30 <span class="text-uppercase">am</span></p>
                                        </div>
                                    </div><!-- end -->
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                25
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Weekly catch-up </h6>
                                            <p class="text-muted mb-0">Nesta Technologies</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">02:00 <span class="text-uppercase">pm</span></p>
                                        </div>
                                    </div><!-- end -->
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                27
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                                            <p class="text-muted mb-0">Nesta Technologies</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                                        </div>
                                    </div><!-- end -->

                                    <div class="mt-3 text-center">
                                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">View
                                            all Events</a>
                                    </div>

                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                   

                 

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @endsection