<x-app-master>
   @section('content')


       <!-- Content Wrapper -->
           <div id="content-wrapper" class="d-flex flex-column">

               <!-- Main Content -->
               <div id="content">

                   <!-- Topbar -->
                   <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                       <!-- Sidebar Toggle (Topbar) -->
                       <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                           <i class="fa fa-bars"></i>
                       </button>

                       <!-- Topbar Search -->
                       <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                           <div class="input-group">
                               <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                               <div class="input-group-append">
                                   <button class="btn btn-primary" type="button">
                                       <i class="fas fa-search fa-sm"></i>
                                   </button>
                               </div>
                           </div>
                       </form>

                       <!-- Topbar Navbar -->
                       <ul class="navbar-nav ml-auto">

                           <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                           <li class="nav-item dropdown no-arrow d-sm-none">
                               <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-search fa-fw"></i>
                               </a>
                               <!-- Dropdown - Messages -->
                               <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                   <form class="form-inline mr-auto w-100 navbar-search">
                                       <div class="input-group">
                                           <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                           <div class="input-group-append">
                                               <button class="btn btn-primary" type="button">
                                                   <i class="fas fa-search fa-sm"></i>
                                               </button>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </li>


                       </ul>

                   </nav>
                   <!-- End of Topbar -->

                   <!-- Begin Page Content -->
                   <div class="container-fluid">

                       <!-- Page Heading -->
                       <div class="d-sm-flex align-items-center justify-content-between mb-4">
                           <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       </div>

                       <!-- Content Row -->
                       <div class="row">

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-primary shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">درامد ماهانه</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($receiptsAmounts_m)}}</div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-success shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">درامد سالانه</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($receiptsAmounts_y)}}</div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-warning shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">بازخوردهای در انتظار</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendingReviews}}</div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Pending Requests Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-warning shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">نظرات در انتظار</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendingComments}}</div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Content Row -->

                       <div class="row">

                           <!-- Area Chart -->
                           <div class="col-xl-8 col-lg-7">
                               <div class="card shadow mb-4">
                                   <!-- Card Header - Dropdown -->
                                   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                       <h6 class="m-0 font-weight-bold text-primary">نمودار فروش</h6>
                                       <div class="dropdown no-arrow">
                                           <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                           </a>
                                           <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                               <div class="dropdown-header">Dropdown Header:</div>
                                               <a class="dropdown-item" href="#">Action</a>
                                               <a class="dropdown-item" href="#">Another action</a>
                                               <div class="dropdown-divider"></div>
                                               <a class="dropdown-item" href="#">Something else here</a>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Card Body -->
                                   <div class="card-body">
                                       <div class="chart-area">
                                           <canvas id="myAreaChart"></canvas>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Pie Chart -->
                           <div class="col-xl-4 col-lg-5">
                               <div class="card shadow mb-4">
                                   <!-- Card Header - Dropdown -->
                                   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                       <h6 class="m-0 font-weight-bold text-primary">درصد فروش هرشهر</h6>
                                       <div class="dropdown no-arrow">
                                           <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                           </a>
                                           <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                               <div class="dropdown-header">Dropdown Header:</div>
                                               <a class="dropdown-item" href="#">Action</a>
                                               <a class="dropdown-item" href="#">Another action</a>
                                               <div class="dropdown-divider"></div>
                                               <a class="dropdown-item" href="#">Something else here</a>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Card Body -->
                                   <div class="card-body">
                                       <div class="chart-pie pt-4 pb-2">
                                           <canvas id="myPieChart"></canvas>
                                       </div>
                                       <div class="mt-4 text-center small">
{{--                    <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-primary"></i>کرج--}}
{{--                    </span>--}}
{{--                                           <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-success"></i>آمل--}}
{{--                    </span>--}}
{{--                                           <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-info"></i>تهران--}}
{{--                    </span>--}}
{{--                                           <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-info"></i> بابل--}}
{{--                    </span>--}}
{{--                                           <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-info"></i> دیگر شهرها--}}
{{--                    </span>--}}
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Content Row -->
                       <div class="row">

                           <!-- Content Column -->
                           <div class="col-lg-6 mb-4">

                               <!-- Project Card Example -->
                               <div class="card shadow mb-4">
                                   <div class="card-header py-3">
                                       <h6 class="m-0 font-weight-bold text-primary">Yasin _The Barisata</h6>
                                   </div>
                                   <div class="text-center">
                                       <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('images1/barista-making-coffee-cafe.jpg')}}" alt="">
                                   </div>
                               </div>
                           </div>

                           <div class="col-lg-6 mb-4">

                               <!-- Illustrations -->
                               <div class="card shadow mb-4">
                                   <div class="card-header py-3">
                                       <h6 class="m-0 font-weight-bold text-primary">Bahar_The Banoo</h6>
                                   </div>
                                   <div class="card-body">
                                       <div class="text-center">
                                           <img class="img-fluid px-3 px-sm-2 mt-3 mb-4" style="width: 30rem;" src="{{asset('images1/wfh_1.svg')}}" alt="">
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>

                   </div>
                   <!-- /.container-fluid -->

               </div>
               <!-- End of Main Content -->

               <!-- Footer -->
               <footer class="sticky-footer bg-white">
                   <div class="container my-auto">
                       <div class="copyright text-center my-auto">
                           <span>Copyright &copy; Your Website 2019</span>
                       </div>
                   </div>
               </footer>
               <!-- End of Footer -->

           </div>
           <!-- End of Content Wrapper -->

   @endsection
</x-app-master>
