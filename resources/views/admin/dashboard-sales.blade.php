<x-app-master>

@section('content')

    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-2 text-gray-800">sales Table</h1>
                    <p class="mb-4">This data is comming straightly from Database<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">sales List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>P_name</th>
                                        <th>p_amount</th>
                                        <th>P_phone</th>
                                        <th>City</th>
                                        <th>status</th>
                                        <th>RefrenceId</th>
                                        <th>date</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>P_name</th>
                                        <th>p_amount</th>
                                        <th>P_phone</th>
                                        <th>City</th>
                                        <th>status</th>
                                        <th>RefrenceID</th>
                                        <th>date</th>
                                        <th>View</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($receipts as $receipt)
                                        <tr>
                                            <td>{{$receipt->pay_name."-".$receipt->pay_lastname}}</td>
                                            <td>{{$receipt->amount}}</td>
                                            <td>{{$receipt->pay_phone}}</td>
                                            <td>{{$receipt->ship_city}}</td>
                                            <td>{{$receipt->status}}</td>
                                            <td>{{$receipt->refrenceID}}</td>
                                            <td>{{$receipt->created_at}}</td>
                                            <td><a href="{{route('dashboard.sale.view',$receipt->id)}}" class="btn btn-outline-secondary">View</a></td>
                                        </tr>
                                    @endforeach


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
