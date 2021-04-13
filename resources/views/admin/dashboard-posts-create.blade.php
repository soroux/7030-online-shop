<x-app-master>

@section('content')

    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3>Create</h3>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                    <!-- Page Heading -->
                    <div id="content">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form  method="post" action="{{route('dashboard.post.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="product_name">post title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Enter post title" required>
                        </div>
                        <div class="form-group">
                            <label for="product_name">post Author</label>
                            <input type="text" name="author" class="form-control" id="author" aria-describedby="" placeholder="Enter post author" required>
                        </div>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category" required>
                            <option selected>Choose Category</option>
                            <option value="brewing">دم آوری قهوه</option>
                            <option value="recipe">رسیپی</option>

                        </select>


                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tag" required>
                            <option selected>Choose tag</option>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach

                        </select>
                        <div class="form-group">
                            <label for="content">content</label>
                            <textarea  id="editor" name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>

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

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
