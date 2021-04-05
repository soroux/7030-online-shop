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
        <section id="page-title">

            <div class="container clearfix">
                <h1>Process Steps</h1>
                <span>Go through a Definite Process</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shortcodes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Process Steps</li>
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
                                <h5>Review Cart</h5>
                            </li>
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter ">2</a>
                                <h5>Enter Shipping Info</h5>
                            </li>
                            <li>
                                <a href="#" class="i-circled i-bordered i-alt divcenter bgcolor">3</a>
                                <h5>Order Complete</h5>
                            </li>
                        </ul>
                        <div>
                            <div id="ptab4">
                                @if($bill->status = 'done')

                                <div class="alert alert-success">
                                    <strong>Thank You.{{$bill->pay_name}}</strong> Your order will be processed once we verify the Payment.
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
                                                            <span class="amount">{{$paiedcart->total}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>
                                </div>
                                    <a  href="{{route('send.bill.email',$bill)}}" class="btn btn-outline-primary align-center">bill Send via Email</a></th>

                                @else
                                    <div class="alert alert-danger">
                                        <strong>Im Sorry.{{$bill->name}}</strong> {{$bill->error}}.
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>


                </div>
            </div>
        </section><!-- #content end -->
    @endsection
</x-home-master>
