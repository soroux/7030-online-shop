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

            </div>

        </header><!-- #header end -->


        <!-- Page Title
		============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>بلاگ</h1>
                <span>آخرین مطالب</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">بلاگ</li>
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
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts">
                            @foreach($posts as $post)
                            <div class="entry {{$post->category}} clearfix">
                                <div class="entry-image">
                                    <a href="{{$post->image}}" data-lightbox="image"><img class="image_fade" src="{{$post->image}}" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="{{route('blog.post',$post)}}">{{$post->title}}</a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> {{date_format($post->updated_at,'d/m/Y')}}</li>
                                    <li><a href="#"><i class="icon-user"></i> {{$post->author}}</a></li>
                                    <li><i class="icon-folder-open"></i> @foreach($post->tags as $tag)<a href="#">{{$tag->name}}</a>@endforeach</li>
                                    <li><a href="{{route('blog.post',$post)}}#comments"><i class="icon-comments"></i>{{$post->comments()->count()}}</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                                <div class="entry-content">
                                    {!!$post->content!!}
                                    <a href="{{route('blog.post',$post)}}"class="more-link">Read More</a>
                                </div>
                            </div>
                            @endforeach

                        </div><!-- #posts end -->

                        <!-- Blog Filter Script
                        ============================================= -->
{{--                        <script>--}}

{{--                            jQuery(window).on( 'load', function(){--}}

{{--                                var $container = $('#posts');--}}

{{--                                $container.isotope({ transitionDuration: '0.65s' });--}}

{{--                                $('#blog-filter a').click(function(){--}}
{{--                                    $('#blog-filter li').removeClass('activeFilter');--}}
{{--                                    $(this).parent('li').addClass('activeFilter');--}}
{{--                                    var selector = $(this).attr('data-filter');--}}
{{--                                    $container.isotope({ filter: selector });--}}
{{--                                    return false;--}}
{{--                                });--}}

{{--                                $(window).resize(function() {--}}
{{--                                    $container.isotope('layout');--}}
{{--                                });--}}

{{--                            });--}}

{{--                        </script><!-- Portfolio Script End -->--}}

                        <!-- Pagination
                        ============================================= -->
{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-12">--}}
{{--                                <a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>--}}
{{--                                <a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- .pager end -->--}}

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget_filter_links clearfix">

                                <h4>Blog Filter</h4>
                                <ul id="blog-filter" class="custom-filter" data-container="#posts" data-active-class="active-filter">
                                    <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">تمام مطالب</a></li>
                                    <li><a href="#" data-filter=".brewing"><div>آموزش دم آوری</div></a></li>
                                    <li><a href="#" data-filter=".recipe"><div>رسیپی ها</div></a></li>

                                </ul>

                            </div>

{{--                            <div class="widget widget-twitter-feed clearfix">--}}

{{--                                <h4>Twitter Feed</h4>--}}
{{--                                <ul class="iconlist twitter-feed" data-username="envato" data-count="2">--}}
{{--                                    <li></li>--}}
{{--                                </ul>--}}

{{--                                <a href="#" class="btn btn-secondary btn-sm fright">Follow Us on Twitter</a>--}}

{{--                            </div>--}}

{{--                            <div class="widget clearfix">--}}

{{--                                <h4>Flickr Photostream</h4>--}}
{{--                                <div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>--}}

{{--                            </div>--}}

{{--                            <div class="widget clearfix">--}}

{{--                                <div class="tabs nobottommargin clearfix" id="sidebar-tabs">--}}

{{--                                    <ul class="tab-nav clearfix">--}}
{{--                                        <li><a href="#tabs-1">Popular</a></li>--}}
{{--                                        <li><a href="#tabs-2">Recent</a></li>--}}
{{--                                        <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>--}}
{{--                                    </ul>--}}

{{--                                    <div class="tab-container">--}}

{{--                                        <div class="tab-content clearfix" id="tabs-1">--}}
{{--                                            <div id="popular-post-list-sidebar">--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <div class="entry-title">--}}
{{--                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="entry-meta">--}}
{{--                                                            <li><i class="icon-comments-alt"></i> 35 Comments</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <div class="entry-title">--}}
{{--                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="entry-meta">--}}
{{--                                                            <li><i class="icon-comments-alt"></i> 24 Comments</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <div class="entry-title">--}}
{{--                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="entry-meta">--}}
{{--                                                            <li><i class="icon-comments-alt"></i> 19 Comments</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-content clearfix" id="tabs-2">--}}
{{--                                            <div id="recent-post-list-sidebar">--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <div class="entry-title">--}}
{{--                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="entry-meta">--}}
{{--                                                            <li>10th July 2014</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <div class="entry-title">--}}
{{--                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="entry-meta">--}}
{{--                                                            <li>10th July 2014</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <div class="entry-title">--}}
{{--                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="entry-meta">--}}
{{--                                                            <li>10th July 2014</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-content clearfix" id="tabs-3">--}}
{{--                                            <div id="recent-post-list-sidebar">--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="spost clearfix">--}}
{{--                                                    <div class="entry-image">--}}
{{--                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="entry-c">--}}
{{--                                                        <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="widget clearfix">--}}

{{--                                <h4>Portfolio Carousel</h4>--}}
{{--                                <div id="oc-portfolio-sidebar" class="owl-carousel portfolio-5">--}}

{{--                                    <div class="oc-item">--}}
{{--                                        <div class="iportfolio">--}}
{{--                                            <div class="portfolio-image">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">--}}
{{--                                                </a>--}}
{{--                                                <div class="portfolio-overlay">--}}
{{--                                                    <a href="https://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="portfolio-desc center nobottompadding">--}}
{{--                                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>--}}
{{--                                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="oc-item">--}}
{{--                                        <div class="iportfolio">--}}
{{--                                            <div class="portfolio-image">--}}
{{--                                                <a href="portfolio-single.html">--}}
{{--                                                    <img src="images/portfolio/4/1.jpg" alt="Open Imagination">--}}
{{--                                                </a>--}}
{{--                                                <div class="portfolio-overlay">--}}
{{--                                                    <a href="images/blog/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="portfolio-desc center nobottompadding">--}}
{{--                                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>--}}
{{--                                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <script>--}}

{{--                                    jQuery(document).ready(function($) {--}}

{{--                                        var ocClients = $("#oc-portfolio-sidebar");--}}

{{--                                        ocClients.owlCarousel({--}}
{{--                                            items: 1,--}}
{{--                                            margin: 10,--}}
{{--                                            loop: true,--}}
{{--                                            nav: false,--}}
{{--                                            autoplay: true,--}}
{{--                                            dots: true,--}}
{{--                                            autoplayHoverPause: true--}}
{{--                                        });--}}

{{--                                    });--}}

{{--                                </script>--}}

{{--                            </div>--}}

{{--                            <div class="widget clearfix">--}}

{{--                                <h4>Tag Cloud</h4>--}}
{{--                                <div class="tagcloud">--}}
{{--                                    <a href="#">general</a>--}}
{{--                                    <a href="#">videos</a>--}}
{{--                                    <a href="#">music</a>--}}
{{--                                    <a href="#">media</a>--}}
{{--                                    <a href="#">photography</a>--}}
{{--                                    <a href="#">parallax</a>--}}
{{--                                    <a href="#">ecommerce</a>--}}
{{--                                    <a href="#">terms</a>--}}
{{--                                    <a href="#">coupons</a>--}}
{{--                                    <a href="#">modern</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}

                        </div>

                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->
    @endsection
</x-home-master>
