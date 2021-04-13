<x-app-master>

@section('content')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3>Create</h3>
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

                    <form  method="post" action="{{route('dashboard.product.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter Product Name" required>

                        </div>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category" required>
                            <option selected>Choose Category</option>
                            <option value="coffeebean">coffeebean</option>
                            <option value="accessories">accessories</option>
                            <option value="mug">mug</option>
                            <option value="ingredients">ingredients</option>
                        </select>


                        <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" name="product_image" class="form-control-file" id="product_image">
                            </div>
                        <div class="form-group">
                            <label for="inventory">Inventory</label>
                            <input type="number" name="inventory" class="form-control" id="inventory" aria-describedby="" placeholder="Enter Product Inventory" required>
                        </div>
                        <div class="form-group">
                            <label for="inventory">IS featured</label>
                            <input type="checkbox" name="featured" class="form-control" id="featured" aria-describedby="">
                        </div>
                        <div class="form-group">
                            <label for="inventory">Price</label>
                            <input type="number" name="price" class="form-control" id="price" aria-describedby="" placeholder="Enter Product Price $" required>
                        </div>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tag" required>
                            <option selected value="">Choose tag</option>
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach

                        </select>
                        <div class="form-group">
                            <label for="content">content</label>
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control" required></textarea>

                        </div>
                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea id="editor" name="description" id="content" cols="30" rows="10" class="form-control" required></textarea>

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
