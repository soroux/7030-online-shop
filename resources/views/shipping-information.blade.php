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
                <h1>تکمیل اطلاعات </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
                    <li class="breadcrumb-item " aria-current="page">سبد خرید</li>
                    <li class="breadcrumb-item active" aria-current="page">تکمیل اطلاعات</li>

                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                    @if($errors->any())
                    <div class="col_half">
                        <div class="card">
                            <div class="card-body">

                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="clear"></div>
                    <div id="processTabs">
                        <ul class="process-steps bottommargin clearfix">
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter">1</a>
                                <h5>سبد خرید</h5>
                            </li>
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter bgcolor">2</a>
                                <h5>تکمیل اطلاعات</h5>
                            </li>
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter ">3</a>
                                <h5>پرداخت و تکمیل سفارش</h5>
                            </li>
                        </ul>
                    </div>

                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>
                    <form method="post" action="{{route('cart.purchase')}}" class="nobottommargin">
                        @csrf
                        <div class="row clearfix">

                            <div class="col-lg-6">
                                <h3>اطلاعات پرداخت کننده</h3>

                                <div class="style-msg2 style-msg-light" style="background-color: #4c4924;">
                                    <div class="msgtitle"><i class="icon-pencil2"></i>وارد کردن اطلاعات زیر الزامیست:</div>
                                    <div class="sb-msg">
                                        <ul>
                                            <li>نام و نام خانوادگی پرداخت کننده</li>
                                            <li>شماره تلفن وایمیل پرداخت کننده</li>
                                            <li>نام و نام خانوادگی دریافت کننده</li>
                                            <li>شماره تلفن دریافت کننده</li>
                                            <li>شهر و آدرس و کد پستی دریافت کننده</li>
                                            <li>شماره تلفن دریافت کننده</li>


                                        </ul>
                                    </div>
                                </div>



                                <div class="col_half">
                                    <label for="billing-form-name">نام:</label>
                                    <input type="text" id="billing-form-name" name="pay_name" value="" class="sm-form-control" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="billing-form-lname">نام خانوادگی:</label>
                                    <input type="text" id="billing-form-lname" name="pay_lastname" value="" class="sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_half">
                                    <label for="billing-form-email">آدرس ایمیل:</label>
                                    <input type="email" id="billing-form-email" name="pay_email" value="" class="sm-form-control" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="billing-form-phone">تلفن:</label>
                                    <input type="text" id="billing-form-phone" name="pay_phone" value="" class="sm-form-control" />
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <h3 class="">اطلاعات دریافت کننده سفارش</h3>

                                <form id="shipping-form" name="shipping-form" class="nobottommargin" action="#" method="post">

                                    <div class="col_half">
                                        <label for="shipping-form-name">نام:</label>
                                        <input type="text" id="shipping-form-name" name="ship_name" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="shipping-form-lname">نام خانوادگی:</label>
                                        <input type="text" id="shipping-form-lname" name="ship_lastname" value="" class="sm-form-control" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <label for="shipping-form-city">شهر:</label>
                                        <input type="text" id="shipping-form-city" name="ship_city" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="shipping-form-address">آدرس:</label>
                                        <input type="text" id="shipping-form-address" name="ship_address" value="" class="sm-form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="shipping-form-address">کد پستی:</label>
                                        <input type="text" id="shipping-form-address" name="ship_postcode" value="" class="sm-form-control" />
                                    </div>
                                    <div class="col_half">
                                        <label for="billing-form-email">آدرس ایمیل:</label>
                                        <input type="email" id="billing-form-email" name="ship_email" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="billing-form-phone">تلفن:</label>
                                        <input type="text" id="billing-form-phone" name="ship_phone" value="" class="sm-form-control" />
                                    </div>


                                    <div class="col_full">
                                        <label for="shipping-form-message">اطلاعات اضافه <small>*</small></label>
                                        <textarea class="sm-form-control" id="shipping-form-message" name="ship_message" rows="6" cols="30"></textarea>
                                    </div>

                                </form>
                            </div>

                            <div class="w-100 bottommargin"></div>
                            <div class="col-lg-6">
                                <h4>جمع سفارشات</h4>

                                <div class="table-responsive">
                                    <table class="table cart">
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="notopborder cart-product-name">
                                                <strong>مبلغ سفارش قبل از هزینه ارسال</strong>
                                            </td>

                                            <td class="notopborder cart-product-name">
                                                <span class="amount">{{number_format($cart_subtotal)}}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <strong>هزینه ارسال</strong>
                                            </td>

                                            <td class="cart-product-name">
                                                <span class="amount">ارسال رایگان</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <strong>مبلغ نهایی سفارش</strong>
                                            </td>

                                            <td class="cart-product-name">
                                                <span class="amount color lead"><strong>{{number_format($cart_total)}}</strong></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="accordion clearfix">
                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>پرداخت مستقیم بانکی</div>
                                    <div class="acc_content clearfix">تمامی تراکنش ها به صورت مستقیم و امن ار درگاههای معتبر بانکی انجام میشود.</div>

                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i> تایید پرداخت</div>
                                    <div class="acc_content clearfix">ارسال تایید پرداخت به ایمیل در صورت تمابل بعد از پرداخت</div>

                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>زرین پال</div>
                                    <div class="acc_content clearfix">درگاهی مطمعا برای پرداحتهای شما.</div>
                                </div>


                                <input type="hidden" value="{{$cart_total}}" name="amount">
                                <input type="hidden" value="@foreach($carts as $cart) {{"name:".$cart->name.",id:".$cart->id.",qty:".$cart->qty."-"}}  @endforeach " name="items">
                                <button type="submit" class="btn btn-outline-dark">پرداخت</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </section><!-- #content end -->

    @endsection
</x-home-master>
