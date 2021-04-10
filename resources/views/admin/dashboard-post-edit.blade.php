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

                    <form  method="post" action="{{route('dashboard.post.update',$post)}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="product_name">post title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Enter post title" value="{{$post->title}}">
                        </div>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category">
                            <option selected value="{{$post->category}}">Choose Category</option>
                            <option value="brewing">دم آوری قهوه</option>
                            <option value="recipe">رسیپی</option>

                        </select>


                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>

{{--                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tag">--}}
{{--                            <option selected value="">choose one</option>--}}
{{--                            @foreach($tags as $tag)--}}
{{--                                <option value="{{$tag->id}}">{{$tag->name}}</option>--}}
{{--                            @endforeach--}}

{{--                        </select>--}}
                        <div class="form-group">
                            <label for="content">content</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">edit</button>

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
