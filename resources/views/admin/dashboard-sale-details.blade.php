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
                        <h1 class="h3 mb-0 text-gray-800">اطلاعات صورت حساب</h1>
                        <h2 class="h3 mb-0 text-gray-800"> date : {{$receiptContent->created_at}}</h2>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>row</th>
                                        <th>Info</th>
                                        <th>Data</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>اسم - خریدار</td>
                                            <td>{{$receiptContent->pay_name."-".$receiptContent->pay_lastname}}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>آدرس ایمیل - خریدار</td>
                                            <td>{{$receiptContent->pay_email}}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>شماره تلفن - خریدار</td>
                                            <td>{{$receiptContent->pay_phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>اسم - تحویل گیرنده</td>
                                            <td>{{$receiptContent->ship_name."-".$receiptContent->ship_lastname}}</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td> شماره تلفن - تحویل گیرنده</td>
                                            <td>{{$receiptContent->ship_phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>ایمیل -تحویل گیرنده</td>
                                            <td>{{$receiptContent->ship_email}}</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>شهر - تحویل گیرنده</td>
                                            <td>{{$receiptContent->ship_ciry}}</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>آدرس - تحویل گیرنده</td>
                                            <td>{{$receiptContent->ship_adress}}</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>کدپستی - تحویل گیرنده</td>
                                            <td>{{$receiptContent->ship_postcode}}</td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>وضعیت پرداخت</td>
                                            <td>{{$receiptContent->status}}</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>مقدار فاکتور</td>
                                            <td>{{number_format($receiptContent->amount)}}</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>شماره فاکتور پرداخت</td>
                                            <td>{{$receiptContent->refrenceID}}</td>
                                        </tr>
                                    </tbody>
                                </table>

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


