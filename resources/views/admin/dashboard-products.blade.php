<x-app-master>

@section('content')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @if(session('message'))
                    <div class="alert alert-danger">{{session('message')}}</div>
                @elseif(session('product-created-message'))
                    <div class="alert alert-success">{{session('product-created-message')}}</div>
                @elseif(session('product-updated-message'))
                    <div class="alert alert-success">{{session('product-updated-message')}}</div>

            @endif

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-2 text-gray-800">Products Table</h1>
                    <p class="mb-4">This data is comming straightly from Database<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Products List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Inventory</th>
                                        <th>featured</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Inventory</th>
                                        <th>featured</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($products as $product)
                                            <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td><img width="120" height="120" src="{{$product->product_image}}"></td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->inventory}}</td>
                                                <td>
                                                    @if($product->featured)
                                                        <input type="checkbox" checked>
                                                    @endif
                                                </td>
                                        <td><a href="{{route('dashboard.product.edit',$product->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                                                <td>
                                                <form method="post" action="{{route('dashboard.product.destroy',$product->id)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

{{$products->links()}}

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
