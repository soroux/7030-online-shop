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
                <h1>تماس با ما</h1>
                <span>مارو اینجا میتونین پیدا کنین</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                </ol>
            </div>

        </section><!-- #page-title end -->


        <!-- Contact Form & Map Overlay Section
        ============================================= -->
        <section>
            <!-- Google Map
                              ============================================= -->
            <section id="google-map" class="gmap">
                <div class="container clearfix">
                </div>

                <iframe width=100% height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzFuBbOjjz8R4Jwf-T0GWUc&key=AIzaSyCGV1o2sqentGk6Sau93nFO1hktFKywpxI"></iframe>
            </section>
            <div class="container clearfix">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <!-- Contact Form Overlay
                ============================================= -->
                <div  class="clearfix">

                    <div class="fancy-title title-dotted-border">
                        <h3>برای ما ایمیل بفرستید</h3>
                    </div>

                    <div class="">

                        <div class="form-result"></div>

                        <!-- Contact Form
                        ============================================= -->
                        <form class="nobottommargin" action="{{route('contact.email')}}" method="post">
                              @csrf
                            <div class="col_half">
                                <label for="template-contactform-name">اسم <small>*</small></label>
                                <input type="text"  name="name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_half col_last">
                                <label for="template-contactform-email">آدرس ایمیل <small>*</small></label>
                                <input type="email"  name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_half">
                                <label for="template-contactform-phone">شماره تلفن</label>
                                <input type="text"  name="phone" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-subject">عنوان <small>*</small></label>
                                <input type="text"  name="subject" value="" class="required sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="template-contactform-message">پیام <small>*</small></label>
                                <textarea class="required sm-form-control"  name="contents" rows="6" cols="30"></textarea>
                            </div>
                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit">Send Message</button>
                            </div>

                        </form>
                    </div>


                    <div class="line"></div>

                    <!-- Contact Info
                    ============================================= -->
                    <div class="col_one_third nobottommargin">

                        <address>
                            <strong>آدرس:</strong><br>
                            مازندران،آمل<br>
                           خیابان فرهنگوفروشگاه 7030<br>
                        </address>
                        <abbr title="Phone Number"><strong>تلفن:</strong></abbr> (+98) 4458 3637<br>
                        <abbr title="Fax"><strong>همراه:</strong></abbr> (0) 935 864 1616<br>
                        <abbr title="Email Address"><strong> ایمیل: </strong></abbr> soroudh.ganjiu@gmail.com

                    </div><!-- Contact Info End -->

                    <!-- Testimonails
                    ============================================= -->


                </div><!-- Contact Form Overlay End -->

            </div>




        </section><!-- Contact Form & Map Overlay Section End -->
    @endsection
</x-home-master>
