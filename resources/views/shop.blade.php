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
                            <li class="mega-menu"><a href="#"><div>محصولات</div></a>
                                <div class="mega-menu-content style-2 clearfix">
                                    <ul class="mega-menu-column border-left-0 col-lg-6">
                                        <li class="mega-menu-title"><a href="#"><div>تجهیزات دم آوری</div></a>
                                            <ul>
                                                <li><a href="#"><div>موکا پات</div></a></li>
                                                <li><a href="#"><div>فرنچ پرس</div></a></li>
                                                <li><a href="#"><div>جزوه</div></a></li>
                                                <li><a href="#"><div>اسپرسو ساز خانگی</div></a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-title"><a href="#"><div>ماگ و لیوان</div></a>
                                            <ul>
                                                <li><a href="#"><div>ماگ</div></a></li>
                                                <li><a href="#"><div>فنجون</div></a></li>
                                                <li><a href="#"><div>شات قهوه</div></a></li>
                                                <li><a href="#"><div>لیوان دمنوش</div></a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-column border-left-0 col-lg-3">
                                        <li class="mega-menu-title"><a href="#"><div>قهوه تازه رست</div></a>
                                            <ul>
                                                <li><a href="#"><div>دان آسیاب نشده</div></a></li>
                                                <li><a href="#"><div>قهوه اسپرسو</div></a></li>
                                                <li><a href="#"><div>قهوه فرانسه</div></a></li>
                                                <li><a href="#"><div>قهوه ترک</div></a></li>

                                            </ul>
                                        </li>
                                        <li class="mega-menu-title"><a href="#"><div>مواد اولیه نوشیدنی ها</div></a>
                                            <ul>
                                                <li><a href="#"><div>نسکافه</div></a></li>
                                                <li><a href="#"><div>هات چاکلت</div></a></li>
                                                <li><a href="#"><div>ماسالا</div></a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li><a href="#"><div>آموزش ها</div></a>
                                <div class="mega-menu-content style-2 clearfix">
                                    <ul class="mega-menu-column col-lg-6">
                                        <li class="mega-menu-title"><a href="#"><div>دم آوری قهوه</div></a>
                                            <ul>
                                                <li><a href="#"><div>اسپرسو ساز خانگی</div></a></li>
                                                <li><a href="#"><div>موکا پات</div></a></li>
                                                <li><a href="#"><div>فرنچ پرس</div></a></li>
                                                <li><a href="#"><div>جزوه</div></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-column col-lg-6">
                                        <li class="mega-menu-title"><a href="#"><div>رسیپی ها</div></a>
                                            <ul>
                                                <li><a href="#"><div>اسپرسو</div></a></li>
                                                <li><a href="#"><div>لاته</div></a></li>
                                                <li><a href="#"><div>موکا</div></a></li>
                                                <li><a href="#"><div>امریکانو</div></a></li>

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


        <!-- Page Title
============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Shop</h1>
                <span>Products with Filter Functionality</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Filters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop Filter</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin col_last">

                        <!-- Shop
                        ============================================= -->
                        <div id="shop" class="shop product-3 grid-container clearfix">
                            @foreach($products as $product)
                            <div class="product {{$product->category}} clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="{{$product->product_image}}" alt="{{$product->name}}"></a>
                                    <div class="product-overlay">
                                        <a href="{{route('add.cart.one',$product)}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="{{route('quick.view',$product)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#">{{$product->name}}</a></h3></div>
                                    <div class="product-price">{{$product->price}}</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div><!-- #shop end -->

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget-filter-links clearfix">

                                <h4>Select Category</h4>
                                <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                                    <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
                                    <li><a href="#" data-filter=".coffeebean">دان قهوه</a></li>
                                    <li><a href="#" data-filter=".accessories">تجهیزات دم آوری</a></li>
                                    <li><a href="#" data-filter=".mug">ماگ و لیوان</a></li>
                                    <li><a href="#" data-filter=".ingredients">مواد اولیه</a></li>

                                </ul>

                            </div>

                            <div class="widget widget-filter-links clearfix">

                                <h4>Sort By</h4>
                                <ul class="shop-sorting">
                                    <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
                                    <li><a href="#" data-sort-by="name">Name</a></li>
                                    <li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
                                    <li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
                                </ul>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->
        @endsection
</x-home-master>
