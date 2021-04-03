<x-home-master>
@section('content')

        <header id="header" class="full-header clearfix">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo"><img src="{{asset('css/shop/images/logo.png')}}" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo"><img src="{{asset('css/shop/images/logo@2x.png')}}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="style-2 with-arrows">

                        <ul>
                            <li class="current"><a href="#"><div>خانه</div></a></li>
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
                <h1>Checkout</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_half">
                        <div class="card">
                            <div class="card-body">
                                Returning customer? <a href="login-register.html">Click here to login</a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="row clearfix">
                        <div class="col-lg-6">
                            <h3>Billing Address</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

                            <form id="billing-form" name="billing-form" class="nobottommargin" action="#" method="post">

                                <div class="col_half">
                                    <label for="billing-form-name">Name:</label>
                                    <input type="text" id="billing-form-name" name="billing-form-name" value="" class="sm-form-control" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="billing-form-lname">Last Name:</label>
                                    <input type="text" id="billing-form-lname" name="billing-form-lname" value="" class="sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="billing-form-city">City / Town</label>
                                    <input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <label for="billing-form-address">Address:</label>
                                    <input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
                                </div>



                                <div class="col_half">
                                    <label for="billing-form-email">Email Address:</label>
                                    <input type="email" id="billing-form-email" name="billing-form-email" value="" class="sm-form-control" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="billing-form-phone">Phone:</label>
                                    <input type="text" id="billing-form-phone" name="billing-form-phone" value="" class="sm-form-control" />
                                </div>

                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="">Shipping Address</h3>

                            <form id="shipping-form" name="shipping-form" class="nobottommargin" action="#" method="post">

                                <div class="col_half">
                                    <label for="shipping-form-name">Name:</label>
                                    <input type="text" id="shipping-form-name" name="shipping-form-name" value="" class="sm-form-control" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="shipping-form-lname">Last Name:</label>
                                    <input type="text" id="shipping-form-lname" name="shipping-form-lname" value="" class="sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="shipping-form-city">City / Town</label>
                                    <input type="text" id="shipping-form-city" name="shipping-form-city" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <label for="shipping-form-address">Address:</label>
                                    <input type="text" id="shipping-form-address" name="shipping-form-address" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <input type="text" id="shipping-form-address2" name="shipping-form-adress" value="" class="sm-form-control" />
                                </div>



                                <div class="col_full">
                                    <label for="shipping-form-message">Notes <small>*</small></label>
                                    <textarea class="sm-form-control" id="shipping-form-message" name="shipping-form-message" rows="6" cols="30"></textarea>
                                </div>

                            </form>
                        </div>
                        <div class="w-100 bottommargin"></div>
                        <div class="col-lg-6">
                            <h4>Your Orders</h4>

                            <div class="table-responsive">
                                <table class="table cart">
                                    <thead>
                                    <tr>
                                        <th class="cart-product-thumbnail">&nbsp;</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-quantity">Quantity</th>
                                        <th class="cart-product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($carts as $cart)
                                    <tr class="cart_item">
                                        <td class="cart-product-thumbnail">
                                            <a href="#"><img width="64" height="64" src="{{$cart->product_image}}" alt="Pink Printed Dress"></a>
                                        </td>

                                        <td class="cart-product-name">
                                            <a href="#">{{$cart->name}}</a>
                                        </td>

                                        <td class="cart-product-quantity">
                                            <div class="quantity clearfix">
                                                x{{$cart->qty}}
                                            </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            <span class="amount">{{$cart->total}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4>Cart Totals</h4>

                            <div class="table-responsive">
                                <table class="table cart">
                                    <tbody>
                                    <tr class="cart_item">
                                        <td class="notopborder cart-product-name">
                                            <strong>Cart Subtotal</strong>
                                        </td>

                                        <td class="notopborder cart-product-name">
                                            <span class="amount">{{$cart_subtotal}}</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name">
                                            <strong>Shipping</strong>
                                        </td>

                                        <td class="cart-product-name">
                                            <span class="amount">Free Delivery</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name">
                                            <strong>Total</strong>
                                        </td>

                                        <td class="cart-product-name">
                                            <span class="amount color lead"><strong>{{$cart_total}}</strong></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="accordion clearfix">
                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Direct Bank Transfer</div>
                                <div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Cheque Payment</div>
                                <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Paypal</div>
                                <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>
                            </div>
                            <a href="#" class="button button-3d fright">Place Order</a>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- #content end -->

    @endsection
</x-home-master>
