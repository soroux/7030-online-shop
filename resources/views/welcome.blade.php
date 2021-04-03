<x-home-master>
@section('content')

        <header id="header" class="full-header clearfix">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{route('home')}}" class="standard-logo"><img src="{{asset('css/shop/images/logo.png')}}" alt="Canvas Logo"></a>
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
                                    <ul class="mega-menu-column border-left-0 col-lg-6">
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
                            <li><a href="{{route('blog')}}"><div>آموزش ها</div></a>
                                <div class="mega-menu-content style-2 clearfix">
                                    <ul class="mega-menu-column col-lg-6">
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
                            <li><a href="#"><div>تماس با ما</div></a></li>

                            <li><a href="#"><div>درباره ما</div></a></li>
                        </ul>

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                        <!-- Top CartController
                        ============================================= -->
                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span>{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span></a>

                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>

                                <div class="top-cart-items">
                                    @foreach($carts as $cart)
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="{{$cart->product_image}}" alt="" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#" class="t400">{{$cart->name}}</a>
                                                <span class="top-cart-item-price">{{$cart->price}}</span>
                                                <span class="top-cart-item-quantity t600">x {{$cart->qty}}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price t600 text-dark">{{$cart_total}}</span>

                                    <a href="{{route('view.cart')}}"><button class="button button-dark button-small nomargin fright">View Cart</button></a>

                                </div>
                            </div>

                        </div><!-- #top-cart end -->

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-account">
                            <a href="#modal-register" data-lightbox="inline" ><i class="icon-line2-user mr-1 position-relative" style="top: 1px;"></i><span class="d-none d-sm-inline-block font-primary t500">Login</span></a>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->
        <!-- Slider
        ============================================= -->
        <section id="slider" class="slider-element swiper_wrapper clearfix" data-autoplay="6000" data-speed="800" data-loop="true" data-grab="true" data-effect="fade" data-arrow="false" style="height: 600px;">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
@foreach($heroes as $hero)
                    <div class="swiper-slide dark" style="background-image: url({{asset($hero->image)}}) ; ">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <div class="h5 mb-2 font-secondary">Fresh Coffee Bean</div>
                                <h2 class="bottommargin-sm text-white">Arabica / Robosta</h2>
                                <a href="#" class="button bg-white text-dark button-light">Shop</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section><!-- #Slider End -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Shop Categories
                    ============================================= -->
                    <div class="fancy-title title-dotted-border title-center mb-4">
                        <h4>Shop popular categories</h4>
                    </div>

                    <div class="row shop-categories clearfix">
                        <div class="col-lg-7">
                            <a href="#" style="background: url({{asset('css/shop/images/categories/coffeebag.jpg')}}) no-repeat right center; background-size: cover;">
                                <div class="vertical-middle dark center">
                                    <div class="heading-block nomargin noborder">
                                        <h3 class="nott t600 ls0">دان قهوه</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <a href="#" style="background: url({{asset('css/shop/images/categories/coffee-group.jpg')}}) no-repeat center right; background-size: cover;">
                                <div class="vertical-middle dark center">
                                    <div class="heading-block nomargin noborder">
                                        <h3 class="nott t600 ls0">تجهیزات دم آوری</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
@foreach($categories as $category)
                        <div class="col-lg-4">
                            <a href="#" style="background: url({{$category->popular_categories}}) no-repeat center center; background-size: cover;">
                                <div class="vertical-middle dark center">
                                    <div class="heading-block nomargin noborder">
                                        <h3 class="nott t600 ls0">ماگ و لیوان</h3>
                                        <small class="button bg-white text-dark button-light button-mini">Browse Now</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>

                    <!-- Featured Carousel
                    ============================================= -->
                    <div class="fancy-title title-dotted-border mt-4 mb-1 title-center">
                        <h4>محصولات ویژه هفتگی</h4>
                    </div>

                    <div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-margin="20" data-loop="false" data-autoplay="5000" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">
                    @foreach($special_products as $special_product)
                        <!-- Shop Item 1
                        ============================================= -->
                        <div class="oc-item">
                            <div class="product iproduct clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="{{$special_product->product_image}}" alt=""></a>

                                    <div class="product-overlay">
                                        <a href="{{route('add.cart.one',$special_product)}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="{{route('quick.view',$special_product)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title mb-1"><h3><a href="#">{{$special_product->name}}</a></h3></div>
                                    <div class="product-price font-primary">{{$special_product->price}}</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>

                </div>


                <!-- New Arrivals
                ============================================= -->
                <div class="container clearfix">

                    <div class="fancy-title title-dotted-border topmargin-sm mb-4 title-center">
                        <h4>New Arrivals: Men</h4>
                    </div>

                    <div class="row grid-6">
@foreach($products as $product)
                        <!-- Shop Item 1
                        ============================================= -->
                        <div class="col-lg-2 col-md-3 col-6 px-2">
                            <div class="product iproduct clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="{{$product->product_image}}" alt="Image 1"></a>
                                    <div class="product-overlay">
                                        <a href="{{route('add.cart.one',$product)}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="{{route('quick.view',$product)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title mb-1"><h3><a href="#">{{$product->name}}</a></h3></div>
                                    <div class="product-price font-primary">{{$product->price}}</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach
                        <!-- Shop Item 2
                        ============================================= -->





                    </div>

                </div>


                <div class="clear"></div>

                <div class="container clearfix">

                    <!-- Features
                    ============================================= -->
                    <div class="row topmargin clearfix">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-box fbox-small fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-present text-dark text-dark"></i></a>
                                        </div>
                                        <h3 class="t400">ضمانت اصالت</h3>

                                    </div>
                                </div>

                                <div class="col-sm-6 mt-4 mt-sm-0">
                                    <div class="feature-box fbox-small fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-globe text-dark"></i></a>
                                        </div>
                                        <h3 class="t400">ارسال رایگان در محدوده آمل</h3>

                                    </div>
                                </div>

                                <div class="col-sm-6 mt-4">
                                    <div class="feature-box fbox-small fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-reload text-dark"></i></a>
                                        </div>
                                        <h3 class="t400">ضمانت بازگشت محصول </h3>

                                    </div>
                                </div>

                                <div class="col-sm-6 mt-4">
                                    <div class="feature-box fbox-small fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-wallet text-dark"></i></a>
                                        </div>
                                        <h3 class="t400">پرداخت آنلاین</h3>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 mt-4 mt-lg-0">
                            <div class="accordion clearfix">

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>هدف ما</div>
                                <div class="acc_content clearfix">ایجاد پلتفرمی مطمعا برای خرید قهوه و تجهیزات </div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Do?</div>
                                <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Company's Values</div>
                                <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Return Policy</div>
                                <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                            </div>
                        </div>

                    </div>

                    <div class="clear"></div>

                    <!-- Brands
                    ============================================= -->
{{--                    <div class="row mt-5 clearfix">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="fancy-title title-dotted-border title-center mb-4">--}}
{{--                                <h4>Brands who give Flat <span class="text-danger">40%</span> Off</h4>--}}
{{--                            </div>--}}

{{--                            <ul class="clients-grid grid-8 nobottommargin clearfix">--}}
{{--                                <li><a href="#"><img src="images/clients/logo/1.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/2.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/4.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/5.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/6.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/7.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/8.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/9.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/10.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/11.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/12.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/13.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/14.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/15.png" alt="Clients"></a></li>--}}
{{--                                <li><a href="#"><img src="images/clients/logo/16.png" alt="Clients"></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

                <div class="clear"></div>

                <!-- App Buttons
                ============================================= -->


                <!-- Last Section
                ============================================= -->
                <div class="section footer-stick bg-white nomargin py-3 border-bottom">
                    <div class="container clearfix">

                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6">
                                <div class="shop-footer-features mb-3 mb-lg-3"><i class="icon-line2-globe-alt"></i><h5 class="inline-block mb-0 ml-2 t600"><a href="#">ارسال زایگان</a><span class="t400 text-muted"> &amp; بازگشت آسان</span></h5></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="shop-footer-features mb-3 mb-lg-3"><i class="icon-line2-notebook"></i><h5 class="inline-block mb-0 ml-2"><a href="#">مجصولات با کیفیت</a><span class="t400 text-muted"> گارانتی </span></h5></div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="shop-footer-features mb-3 mb-lg-3"><i class="icon-line2-lock"></i><h5 class="inline-block mb-0 ml-2"><a href="#">256-Bit</a> <span class="t400 text-muted">پرداحت مطمعا</span></h5></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- #content end -->





@endsection
</x-home-master>
