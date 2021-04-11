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
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix">
                <h1>درباره ما</h1>
                <span>هرچیزی که نیاز است درباره ما بدانید</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">درباره ما</a></li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_full">

                        <div class="heading-block center nobottomborder">
                            <h2>فروشگاه قهوه 7030</h2>
                            <span>مکانی برای تهیه قهوه مرغوب وتازه و البته تجهیزات دم آوری </span>
                        </div>

                        <div class="fslider" data-pagi="false" data-animation="fade">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="#"><img src="{{asset('images/cafe.jpg')}}" alt="cafe Image"></a></div>
                                    <div class="slide"><a href="#"><img src="{{asset('images/coffee-bar.jpg')}}" alt="coffee Image"></a></div>
                                    <div class="slide"><a href="#"><img src="{{asset('images/coffee-beans-brazil.jpg')}}" alt="coffee-beans Image"></a></div>
                                </div>
                            </div>
                        </div>

                    </div>

{{--                    <div class="col_one_fourth center" data-animate="bounceIn">--}}
{{--                        <i class="i-plain i-xlarge divcenter nobottommargin icon-users"></i>--}}
{{--                        <div class="counter counter-large" style="color: #3498db;"><span data-from="100" data-to="8465" data-refresh-interval="50" data-speed="2000"></span></div>--}}
{{--                        <h5></h5>--}}
{{--                    </div>--}}

{{--                    <div class="col_one_fourth center" data-animate="bounceIn" data-delay="200">--}}
{{--                        <i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>--}}
{{--                        <div class="counter counter-large" style="color: #e74c3c;"><span data-from="100" data-to="56841" data-refresh-interval="50" data-speed="2500"></span></div>--}}
{{--                        <h5>Lines of Code</h5>--}}
{{--                    </div>--}}

{{--                    <div class="col_one_fourth center" data-animate="bounceIn" data-delay="400">--}}
{{--                        <i class="i-plain i-xlarge divcenter nobottommargin icon-briefcase"></i>--}}
{{--                        <div class="counter counter-large" style="color: #16a085;"><span data-from="100" data-to="2154" data-refresh-interval="50" data-speed="3500"></span></div>--}}
{{--                        <h5>No. of Projects</h5>--}}
{{--                    </div>--}}

{{--                    <div class="col_one_fourth center col_last" data-animate="bounceIn" data-delay="600">--}}
{{--                        <i class="i-plain i-xlarge divcenter nobottommargin icon-cup"></i>--}}
{{--                        <div class="counter counter-large" style="color: #9b59b6;"><span data-from="100" data-to="874" data-refresh-interval="30" data-speed="2700"></span></div>--}}
{{--                        <h5>Cups of Coffee</h5>--}}
{{--                    </div>--}}

                    <div class="clear"></div>

                    <div class="promo promo-light bottommargin">
                        <h3>با ما تماس بگیرید <span>09358641637</span> یا ایمیل بزنید <span>soroush.ganjuee@gmail.com</span></h3>
                        <span>ما به دان مرغوب و تازه رست قهوه دسترسی داریم</span>
                        <a href="{{route('shop')}}" class="button button-xlarge button-rounded">ورود به فروشگاه</a>
                    </div>

                    <div class="heading-block center">
                        <h2> فروشگاه 7030</h2>
                        <span>شاخه های کاری مجموعه</span>
                    </div>

                    <div class="row clearfix">

                        <div class="col-lg-6 bottommargin">
                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{asset('images/coffee.jpg')}}" alt="coffee">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>فروش قهوه</h4><span>دان یا آسیاب</span></div>
                                    <div class="team-content">
                                        <p>رست و بسته بندی انواع قهوه عربیکا و روبستا.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 bottommargin">
                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{asset('images/coffee-group.jpg')}}" alt="coffee accesories">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>فروش تجهیزات دم آوری</h4><span>موکاپات، فرنچ پرس ، جزوه و غیره</span></div>
                                    <div class="team-content">
                                        <p>فروش انواع تجهیزات بروز و معتبر</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 bottommargin">
                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{asset('images/keepcup-review-1.jpg')}}" alt="cup">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4> فروش ماگ و لیوان</h4><span>فلاسک، ماگ مسافرتی </span></div>
                                    <div class="team-content">
                                        <p>فروش انواع ماگ و فلاسک با کیفیت </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 bottommargin">
                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{asset('images/Instant-Coffee.jpg')}}" alt="instant Coffee">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>فروش مواد اولیه </h4><span>چای ماسالا،نسکافه گلد،هاتچاکلت</span></div>
                                    <div class="team-content">
                                        <p>فروش انواع نسکافه گلد و کلاسیک ،چای ماسالا وهاتچاکلت </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="section topmargin-sm footer-stick">

                    <h4 class="uppercase center">نظر<span> مشتریان ما</span>درباره ما</h4>

                    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('images/coffee.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>بهترین بهترین ها و با فیمت عالییی</p>
                                        <div class="testi-meta">
                                            مشتریه همیشگی
                                            <span>کتابفروشی.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('images/keepcup-review-1.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('images/keepcup-review-1.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- #content end -->
    @endsection
</x-home-master>
