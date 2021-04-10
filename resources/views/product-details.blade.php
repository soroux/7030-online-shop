<x-home-master>
    @section('content')
        <header id="header" class="full-header clearfix">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{route('home')}}" class="standard-logo"><img src="{{asset('css/shop/images/logo@2x.png')}}" alt="Canvas Logo"></a>
                        <a href="{{route('home')}}" class="retina-logo"><img src="{{asset('css/shop/images/logo@2x.png')}}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="style-2 with-arrows">

                        <ul>
                            <li class="current"><a href="{{route('home')}}"><div>خانه</div></a></li>
                            <!-- Mega Menu
                            ============================================= -->
                            <li><a href="#"><div>محصولات</div></a>
                                <div class="mega-menu-content style-2 clearfix">
                                    <ul class="mega-menu-column border-left-0 col-lg-12">
                                        <li class="mega-menu-title"><a href="{{route('shop')}}"><div>تمام محصولات</div></a>
                                            <ul>
                                                <li><a href="{{route('shop')}}"><div>تجهیزات دم آوری</div></a></li>
                                                <li><a href="{{route('shop')}}"><div> دان  قهوه تازه رست</div></a></li>
                                                <li><a href="{{route('shop')}}"><div>ماگ و لیوان</div></a></li>
                                                <li><a href="{{route('shop')}}"><div>مواد اولیه</div></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li><a href="#"><div>آموزش ها</div></a>
                                <div class="mega-menu-content style-2 clearfix">
                                    <ul class="mega-menu-column col-lg-12">
                                        <li class="mega-menu-title"><a href="{{route('blog')}}"><div>همه پست ها</div></a>
                                            <ul>
                                                <li><a href="{{route('blog')}}"><div>آموزش دم آوری</div></a></li>
                                                <li><a href="{{route('blog')}}"><div>رسیپی ها</div></a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li><a href="{{route('shop')}}"><div>فروشگاه</div></a></li>
                            <li><a href="{{route('contacts')}}"><div>تماس با ما</div></a></li>

                            <li><a href="{{route('about')}}"><div>درباره ما</div></a></li>
                        </ul>

                        <!-- Top Search
                        ============================================= -->
                    {{--                        <div id="top-search">--}}
                    {{--                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>--}}
                    {{--                            <form action="search.html" method="get">--}}
                    {{--                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">--}}
                    {{--                            </form>--}}
                    {{--                        </div><!-- #top-search end -->--}}

                    <!-- Top CartController
                        ============================================= -->
                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span>{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span></a>

                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>

                                <div class="top-cart-items">
                                    @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() == 0)
                                        <tr class="top-cart-item clearfix">
                                            <td class="top-cart-item-name">
                                                <h5 class="alert-danger">سبد خرید شما خالیست</h5>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach($carts as $cart)
                                            <div class="top-cart-item clearfix">
                                                <div class="top-cart-item-image">
                                                    <a href="#"><img src="{{$cart->product_image}}" alt="" /></a>
                                                </div>
                                                <div class="top-cart-item-desc">
                                                    <a href="#" class="t400">{{$cart->name}}</a>
                                                    <span class="top-cart-item-price">{{number_format($cart->price)}}</span>
                                                    <span class="top-cart-item-quantity t600">x {{$cart->qty}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price t600 text-dark">{{number_format($cart_total)}}</span>

                                    <a href="{{route('view.cart')}}"><button class="button button-dark button-small nomargin fright" @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() == 0) disabled  @endif>سبد خرید</button></a>

                                </div>
                            </div>

                        </div><!-- #top-cart end -->

                        <!-- Top Search
                        ============================================= -->
                        {{--                        <div id="top-account">--}}
                        {{--                            <a href="#modal-register" data-lightbox="inline" ><i class="icon-line2-user mr-1 position-relative" style="top: 1px;"></i><span class="d-none d-sm-inline-block font-primary t500">Login</span></a>--}}
                        {{--                        </div><!-- #top-search end -->--}}

                    </nav><!-- #primary-menu end -->

                </div>
                @if(session('product-inventory'))
                    <div class="alert alert-danger nobottommargin">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon-remove-sign"></i><strong>وای بر من!</strong>{{session('product-inventory')}}
                    </div>
                @endif
            </div>

        </header><!-- #header end -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="single-product">

                        <div class="product">

                            <div class="col_two_fifth">

                                <!-- Product Single - Gallery
                                ============================================= -->

                                <div class="product-image" style="overflow: visible;">
                                    <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-lightbox="gallery" data-margin="0" data-items="1" data-pagi="false" data-autoplay="6000" data-loop="true">
                                        <div class="oc-item">
                                            <a href="{{$product->product_image}}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{$product->product_image}}" alt="Pink Printed Dress"></a>
                                        </div>
                                        <div class="oc-item">
                                            <a href="{{$product->product_image}}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{$product->product_image}}" alt="Pink Printed Dress"></a>
                                        </div>
                                        <div class="oc-item">
                                            <a href="{{$product->product_image}}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{$product->product_image}}" alt="Pink Printed Dress"></a>
                                        </div>
                                    </div>

                                </div><!-- Product Single - Gallery End -->

                                <div id="linked-to-gallery" style="margin-top: 4px;">
                                    <div id="oc-images-linker" class="owl-carousel image-carousel carousel-widget" data-margin="4" data-items="4" data-pagi="false" data-loop="true">
                                        <div class="oc-item">
                                            <a href="#" data-image="1"><img class="image_fade" src="{{$product->product_image}}" alt="Gallery Thumb 1"></a>
                                        </div>
                                        <div class="oc-item">
                                            <a href="#" data-image="2"><img class="image_fade" src="{{$product->product_image}}" alt="Gallery Thumb 2"></a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col_two_fifth product-desc">

                                <!-- Product Single - Price
                                ============================================= -->
                                <div class="product-price"><ins>{{number_format($product->price)}}</ins></div><!-- Product Single - Price End -->

                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div><!-- Product Single - Rating End -->

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
                                <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data' action="{{route('add.cart.details',$product)}}">
                                    @csrf
                                    <div class="quantity clearfix">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    <button type="submit" class="add-to-cart button nomargin">اضافه به سبد خرید</button>
                                </form><!-- Product Single - Quantity & Cart Button End -->
                                @endif
                                <div class="clear"></div>
                                <div class="line"></div>

                                <!-- Product Single - Short Description
                                ============================================= -->
                                <p>{{$product->content}}</p>
                                <ul class="iconlist">
                                    <li><i class="icon-caret-right"></i>ارسال در کوتاه ترین زمان</li>
                                    <li><i class="icon-caret-right"></i> ضمانت بازگشت کالا</li>
                                    <li><i class="icon-caret-right"></i> پرداخت اینترنتی مطمعا</li>
                                </ul><!-- Product Single - Short Description End -->

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class="card product-meta">
                                    <div class="card-body">
                                        <span itemprop="productID" class="sku_wrapper">موجودی: <span class="sku">{{$product->inventory}}</span></span>
                                        <span class="posted_in">Category: <a href="#" rel="tag">{{$product->category}}</a>.</span>
                                        <span class="tagged_as">Tags:@foreach($product->tags as $tag) <a href="#" rel="tag">{{$tag->name}}</a>@endforeach.</span>
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share <a href="#" rel="tag">Pink</a>
                                ============================================= -->
                                <div class="si-share noborder clearfix">
                                    <span>Share:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class="col_one_fifth col_last">

                                <a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="{{asset('css/shop/images/logo.png')}}" alt="Brand Logo"></a>

                                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <h3>100% کالا اصل</h3>
                                    <p class="notopmargin">اطمینان از خرید.</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-credit-cards"></i>
                                    </div>
                                    <h3> گزینه پرداخت اینترنتی</h3>
                                    <p class="notopmargin">پرداخت راحت و مطمعا</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-truck2"></i>
                                    </div>
                                    <h3>ارسال رایگان در محدوده آمل</h3>
                                    <p class="notopmargin">تمام سفارشات بالای 200 هزار تومان ارسال رایگان در محدوده مازندران.</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-undo"></i>
                                    </div>
                                    <h3>ضمانت بازگشت </h3>
                                    <p class="notopmargin">هفت روز ضمانت بازگشت کالا.</p>
                                </div>

                            </div>

                            <div class="col_full nobottommargin">

                                <div class="tabs clearfix nobottommargin" id="tab-1">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> توضیحات</span></a></li>
                                        <li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> اطلاعات بیشتر</span></a></li>
                                        <li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> بازخورد ({{$reviews->count()}})</span></a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <p>{{$product->description}}
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">

                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>طول</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>عرض</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>ارتفاق</td>
                                                    <td></td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">

                                            <div id="reviews" class="clearfix">

                                                <ol class="commentlist clearfix">

                                                    @foreach($reviews as $review)
                                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                                        <div id="comment-1" class="comment-wrap clearfix">

                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                                </div>
                                                            </div>

                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author">{{$review->name}}<span><a href="#" title="Permalink to this comment">{{$review->created_at}}</a></span></div>
                                                                <p>{{$review->content}}</p>
                                                                <div class="review-comment-ratings">
                                                                    @for($i=1;$i<=$review->rating;$i++)
                                                                    <i class="icon-star3"></i>
                                                                    @endfor
                                                                </div>
                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>
                                                    </li>
                                                    @endforeach



                                                </ol>

                                                <!-- Modal Reviews
                                                ============================================= -->
                                                <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">نوشتن بازخورد</a>

                                                <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="reviewFormModalLabel">ثبت بازخورد</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="{{route('create.review',$product)}}" method="post">
                                                                   @csrf
                                                                    <div class="col_half">
                                                                        <label for="template-reviewform-name">نام <small>*</small></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text"><i class="icon-user"></i></div>
                                                                            </div>
                                                                            <input type="text" id="template-reviewform-name" name="name" value="" class="form-control required" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col_half col_last">
                                                                        <label for="template-reviewform-email">ایمیل <small>*</small></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><div class="input-group-text">@</div></div>
                                                                            <input type="email" id="template-reviewform-email" name="email" value="" class="required email form-control" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="clear"></div>

                                                                    <div class="col_full col_last">
                                                                        <label for="template-reviewform-rating">امتیاز</label>
                                                                        <select id="template-reviewform-rating" name="rating" class="form-control">
                                                                            <option value="">-- یک امتیاز انتخاب کنید --</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="clear"></div>

                                                                    <div class="col_full">
                                                                        <label for="template-reviewform-comment">توضیحات <small>*</small></label>
                                                                        <textarea class="required form-control" id="template-reviewform-comment" name="content" rows="6" cols="30"></textarea>
                                                                    </div>

                                                                    <div class="col_full nobottommargin">
                                                                        <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit"> ثبت بازحورد</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- Modal Reviews End -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div class="col_full nobottommargin">

                        <h4>محصولات مرتبط</h4>

                        <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

                            @foreach($related_products as $related_product)
                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="{{$related_product->product_image}}" alt="{{$related_product->name}}"></a>

                                        <div class="product-overlay">
                                            <a href="{{route('add.cart.one',$related_product)}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> اضافه به سبد خرید</span></a>
                                            <a href="{{route('view',$related_product)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> مشاهده محصول</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">{{$related_product->name}}</a></h3></div>
                                        <div class="product-price"><ins>تومان {{$related_product->price}}</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->
        @endsection
</x-home-master>
