<x-app-master>


@section('content')
    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3>Edit</h3>
                    <!-- Page Heading -->

                    <form  method="post" action="{{route('dashboard.hero.update',$hero)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="product_name">hero image Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter hero Name" value="{{$hero->name}}">
                        </div>

                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>

                    </form>

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
