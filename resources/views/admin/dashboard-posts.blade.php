<x-app-master>

@section('content')

    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @if(session('message'))
                    <div class="alert alert-danger">{{session('message')}}</div>
                @elseif(session('Post-created-message'))
                    <div class="alert alert-success">{{session('Post-created-message')}}</div>
                @elseif(session('Post-updated-message'))
                    <div class="alert alert-success">{{session('Post-updated-message')}}</div>

            @endif

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-2 text-gray-800">Post Table</h1>
                    <p class="mb-4">This data is comming straightly from Database<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Posts List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>user</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>user</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->category}}</td>
                                            <td><img width="120" height="120" src="{{$post->image}}"></td>
                                            <td>{{$post->author}}</td>
                                            <td>{{$post->user->name}}</td>

                                            <td><a href="{{route('dashboard.post.edit',$post->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                                            <td>
                                                <form method="post" action="{{route('dashboard.post.destroy',$post->id)}}" enctype="multipart/form-data">
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

                    {{$posts->links()}}

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
