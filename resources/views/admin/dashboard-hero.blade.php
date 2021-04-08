<x-app-master>
    @section('content')
        <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    @if(session('message'))
                        <div class="alert alert-danger">{{session('message')}}</div>
                    @elseif(session('hero-created-message'))
                        <div class="alert alert-success">{{session('hero-created-message')}}</div>
                    @elseif(session('hero-updated-message'))
                        <div class="alert alert-success">{{session('hero-updated-message')}}</div>

                @endif

                <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->

                        <h1 class="h3 mb-2 text-gray-800">Hero Table</h1>
                        <p class="mb-4">This data is comming straightly from Database<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Hero Images</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Hero_image</th>
                                            <th>Edit</th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Description</th>
                                            <th>Hero_image</th>
                                            <th>Edit</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        @foreach($heroes as $hero)
                                            <tr>
                                                <td>{{$hero->text}}</td>
                                                <td><img width="120" height="120" src="{{$hero->image}}"></td>

                                                <td><a href="{{route('dashboard.hero.edit',$hero->id)}}"><button class="btn btn-primary">Edit</button></a></td>

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
