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

            </div>

        </header><!-- #header end -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>اطلاعات پرداخت</h1>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
                    <li class="breadcrumb-item " aria-current="page">مشاهده سبد خرید</li>
                    <li class="breadcrumb-item " aria-current="page">تکمیل اطلاعات</li>
                    <li class="breadcrumb-item active" aria-current="page">اطلاعات پرداخت</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div id="processTabs">
                        <ul class="process-steps bottommargin clearfix">
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter">1</a>
                                <h5>سبد خرید</h5>
                            </li>
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter ">2</a>
                                <h5>تکمیل اطلاعات</h5>
                            </li>
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter bgcolor">3</a>
                                <h5>پرداخت و تکمیل سفارش</h5>
                            </li>
                        </ul>
                        <div>
                            <div id="ptab4">
                                @if($bill->status == 'done')

                                <div class="alert alert-success">
                                    <i class="icon-hand-up"></i>  <strong>متشکریم {{$bill->pay_name}}</strong> سفارش شما در اولین فرصت پردازش و ارسال میشود.
                                </div>
                                    <div class="alert alert-success">
                                        <i class="icon-hand-up"></i>  <strong> شماره تراکنش :</strong> {{$bill->transaction_id}}.
                                    </div>
                                    <div class="col-lg-6">
                                        <h4>سفارشات شما</h4>

                                        <div class="table-responsive">
                                            <table class="table cart">
                                                <thead>
                                                <tr>
                                                    <th> <span class="badge badge-success">پرداخت موفق</span></th>
                                                    <th class="cart-product-name">نام محصول</th>
                                                    <th class="cart-product-quantity">تعداد</th>
                                                    <th class="cart-product-subtotal">جمع هزینه </th>

                                                </tr>
                                                </thead>

                                              <tbody>
                                                @foreach($paiedcarts as $paiedcart)
                                                    <tr class="cart_item">
                                                        <td class="cart-product-thumbnail">
                                                            <a href="#"><img width="64" height="64" src="{{$paiedcart->product_image}}" alt="Pink Printed Dress"></a>
                                                        </td>

                                                        <td class="cart-product-name">
                                                            <a href="#">{{$paiedcart->name}}</a>
                                                        </td>

                                                        <td class="cart-product-quantity">
                                                            <div class="quantity clearfix">
                                                                x{{$paiedcart->qty}}
                                                            </div>
                                                        </td>

                                                        <td class="cart-product-subtotal">
                                                            <span class="amount">{{number_format($paiedcart->total)}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>
                                </div>
                                @if($bill->pay_email)
                                    <a  href="{{route('send.bill.email',$bill)}}" class="btn btn-outline-primary align-center">ارسال اطلاعات پرداخت </a></th>
                                    @endif
                                    @if($bill->ship_email)
                                        <a  href="{{route('send.ship.email',$bill)}}" class="btn btn-outline-primary align-center">ارسال ایمیل اطلاع برای دریافت کننده</a></th>
                                    @endif
                                @else
                                    <div class="alert alert-danger">
                                        <strong>پرداخت ناموفق... {{$bill->pay_name}},متاسفیم</strong>
                                        <br>
                                        <h3>{{$bill->error}}.</h3>
                                    </div>
                                @endif


                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>


                </div>
            </div>
        </section><!-- #content end -->
    @endsection
</x-home-master>
