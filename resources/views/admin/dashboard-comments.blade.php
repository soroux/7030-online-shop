<x-app-master>

@section('content')

    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @if(session('comment-deleted-message'))
                    <div class="alert alert-success">{{session('comment-deleted-message')}}</div>
                @elseif(session('comment-updated-message'))
                    <div class="alert alert-success">{{session('comment-updated-message')}}</div>

            @endif

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-2 text-gray-800">Comments Table</h1>
                    <p class="mb-4">This data is comming straightly from Database<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Comments List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Post title</th>
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
                                        <th>Post title</th>
                                        <th>Content</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($comments as $comment)
                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>{{$comment->name}}</td>
                                            <td>{{$comment->post->title}}</td>
                                            <td>{{$comment->content}}</td>
                                            <form method="post" action="{{route('dashboard.comment.edit')}}">
                                                @csrf
                                                @method('patch')
                                            <td>

                                                <input type="hidden" name="id" value="{{$comment->id}}">
                                                <button @if($comment->status == 'verified') disabled @endif class="btn btn-outline-primary" value="verified" name="status">Approve</button>
                                            </td>
                                                <td>
                                                    <input type="hidden" name="id" value="{{$comment->id}}">
                                                    <button @if($comment->status == 'unverified') disabled @endif class="btn btn-outline-secondary" value="unverified" name="status">Unapprove</button>
                                                </td>
                                            </form>
                                            <td>
                                                <form method="post" action="{{route('dashboard.comment.delete')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" value="{{$comment->id}}" name="id">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    {{$comments->links()}}

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
