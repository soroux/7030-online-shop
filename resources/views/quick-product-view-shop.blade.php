
<div class="single-product shop-quick-view-ajax clearfix">

    <div class="ajax-modal-title">
        <h2>{{$product->name}}</h2>
    </div>

    <div class="product modal-padding clearfix">

        <div class="col_half nobottommargin">

            <div class="product-image">
                <div class="fslider" data-pagi="false">
                    <div class="flexslider">

                        <div class="slider-wrap">

                            <div class="slide"><a href="#" title="Pink Printed Dress - Front View"><img src="{{$product->product_image}}" alt="Pink Printed Dress"></a></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col_half nobottommargin col_last product-desc">
            <div class="product-price">{{$product->price}}</div>
            <div class="product-rating">
                <i class="icon-star3"></i>
                <i class="icon-star3"></i>
                <i class="icon-star3"></i>
                <i class="icon-star-half-full"></i>
                <i class="icon-star-empty"></i>
            </div>
            <div class="clear"></div>
            <div class="line"></div>

            <!-- Product Single - Quantity & Cart Button
            ============================================= -->
            @if($product->inventory <= 0 )
                <form class="cart nobottomborder clearfix">
                    <div class="quantity clearfix">
                <div class="btn btn-outline-danger">!موجود نیست</div>
                    </div>
                </form>
            @else
            <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data' action="{{route('add.cart.shop',$product)}}">
                @csrf
                <div class="quantity clearfix">
                    <input type="button" value="-" class="minus" field="quantity">
                    <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                    <input type="button" value="+" class="plus" field="quantity">
                </div>
              <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
            </form><!-- Product Single - Quantity & Cart Button End -->
            @endif
            <div class="clear"></div>
            <div class="line"></div>
            {!!$product->content!!}
            <div class="clear"></div>
            <div class="line"></div>
            <a href="{{route('view',$product)}}"><button type="button" class="btn btn-outline-dark">مشاهده محصول</button></a>
            <div class="clear"></div>
            <div class="line"></div>
            <ul class="iconlist">

                <li><i class="icon-caret-right"></i>ارسال در کوتاه ترین زمان</li>
                <li><i class="icon-caret-right"></i> ضمانت بازگشت کالا</li>
                <li><i class="icon-caret-right"></i> پرداخت اینترنتی مطمعا</li>
            </ul>
            <div class="card product-meta nobottommargin">
                <div class="card-body">
                    <span itemprop="productID" class="sku_wrapper">موجودی : <span class="sku">{{$product->inventory}}</span></span>
                    <span class="posted_in">  دسته بندی :<a href="#" rel="tag">{{$product->category}}</a>.</span>
                    <span class="tagged_as">تگ :@foreach($product->tags as $tag) <a href="#" rel="tag">{{$tag->name}}</a>@endforeach.</span>
                </div>
            </div>
        </div>

    </div>

</div>



<!-- Footer Scripts
============================================= -->


<!-- Footer Scripts
============================================= -->
{{--<script src="{{asset('js/functions.js')}}"></script>--}}

<script>
    jQuery(document).ready(function(){
        // This button will increment the value
        $('.plus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name='+fieldName+']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(0);
            }
        });
        // This button will decrement the value till 0
        $(".minus").click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name='+fieldName+']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(0);
            }
        });
    });
</script>
