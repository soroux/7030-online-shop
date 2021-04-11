<x-home-master>
    @section('content')
        <header id="header" class="full-header clearfix">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{route('home')}}" class="standard-logo"><img src="{{asset('images/logo@2x.png')}}" alt="Canvas Logo"></a>
                        <a href="{{route('home')}}" class="retina-logo"><img src="{{asset('images/logo@2x.png')}}" alt="Canvas Logo"></a>
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


        <!-- Page Title
============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>فروشگاه</h1>
                <span>محصولات </span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>

                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Sidebar
                ============================================= -->
                    <div class="sidebar nobottommargin">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget-filter-links clearfix">

                                <h3>دسته بندی محصول را انتخاب کنبد</h3>
                                <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                                    <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">حدف</a></li>
                                    <li><a href="#" data-filter=".coffeebean">دان قهوه</a></li>
                                    <li><a href="#" data-filter=".accessories">تجهیزات دم آوری</a></li>
                                    <li><a href="#" data-filter=".mug">ماگ و لیوان</a></li>
                                    <li><a href="#" data-filter=".ingredients">مواد اولیه</a></li>

                                </ul>

                            </div>

                            <div class="widget widget-filter-links clearfix">

                                <h3>مرتب کرد بر اساس</h3>
                                <ul class="shop-sorting">
                                    <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
                                    <li><a href="#" data-sort-by="name">نام محصول</a></li>
                                    <li><a href="#" data-sort-by="price_lh">قیمت: کم به زیاد</a></li>
                                    <li><a href="#" data-sort-by="price_hl">قیمت: زیاد به کم</a></li>
                                </ul>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->
                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin col_last">

                        <!-- Shop
                        ============================================= -->
                        <div id="shop" class="shop product-3 grid-container clearfix">
                            @foreach($products as $product)
                                @if($product->inventory <=0)
                                    <div class="product {{$product->category}} clearfix">
                                        <div class="product-image">
                                            <img src="{{$product->product_image}}" alt="{{$product->name}}">
                                            <div class="product-overlay">
                                                <a href="{{route('quick.view',$product)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="sale-flash bg-danger">!موجود نیست</div>
                                        <div class="product-desc center">
                                            <div class="product-title"><h3><a href="#">{{$product->name}}</a></h3></div>
                                            <div class="product-price">تومان {{number_format($product->price)}}</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                @else
                            <div class="product {{$product->category}} clearfix">
                                <div class="product-image">
                                   <img src="{{$product->product_image}}" alt="{{$product->name}}">
                                    <div class="product-overlay">
                                        <a href="{{route('add.cart.one',$product)}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="{{route('quick.view',$product)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#">{{$product->name}}</a></h3></div>
                                    <div class="product-price">تومان {{number_format($product->price)}}</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                                @endif
                            @endforeach

                        </div><!-- #shop end -->

                    </div><!-- .postcontent end -->



                </div>

            </div>

        </section><!-- #content end -->
        @endsection
</x-home-master>
