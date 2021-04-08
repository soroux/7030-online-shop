<x-app-master>

@section('content')

    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @if(session('review-deleted-message'))
                    <div class="alert alert-success">{{session('review-deleted-message')}}</div>
                @elseif(session('review-updated-message'))
                    <div class="alert alert-success">{{session('review-updated-message')}}</div>

            @endif

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-2 text-gray-800">reviews Table</h1>
                    <p class="mb-4">This data is comming straightly from Database<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">reviews List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Product name</th>
                                        <th>Rating</th>
                                        <th>Content</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Product name</th>
                                        <th>Rating</th>
                                        <th>Content</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($reviews as $review)
                                        <tr>
                                            <td>{{$review->id}}</td>
                                            <td>{{$review->name}}</td>
                                            <td>{{$review->product->name}}</td>
                                            <td>
                                                <div class="review-comment-ratings">
                                                    @for($i=1;$i<=$review->rating;$i++)
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    @endfor
                                                </div>
                                            </td>
                                            <td>{{$review->content}}</td>
                                            <form method="post" action="{{route('dashboard.review.edit')}}">
                                                @csrf
                                                @method('patch')
                                                <td>

                                                    <input type="hidden" name="id" value="{{$review->id}}">
                                                    <button @if($review->status == 'verified') disabled @endif class="btn btn-outline-primary" value="verified" name="status">Approve</button>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="id" value="{{$review->id}}">
                                                    <button @if($review->status == 'unverified') disabled @endif class="btn btn-outline-secondary" value="unverified" name="status">Unapprove</button>
                                                </td>
                                            </form>
                                            <td>
                                                <form method="post" action="{{route('dashboard.review.delete')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" value="{{$review->id}}" name="id">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    {{$reviews->links()}}

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
