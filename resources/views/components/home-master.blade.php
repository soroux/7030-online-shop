<!DOCTYPE html>
<html {{ str_replace('_', '-', app()->getLocale()) }} lang="fa-IR" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700%7CMontserrat:300,400,500,600,700%7CMerriweather:300,400,300i,400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />

    <!-- shop Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/shop/shop.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/shop/css/fonts.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('css/colors.php?color=000000')}}" type="text/css" />


</head>
<body class="stretched">
<div class="font-sans text-gray-900 antialiased">
    <div id="wrapper" class="clearfix">
{{--        <div class="modal1 mfp-hide" id="modal-register">--}}
{{--            <div class="card divcenter" style="max-width: 540px;">--}}
{{--                <div class="card-header py-3 nobg center">--}}
{{--                    <h3 class="mb-0 t400">Hello, Welcome Back</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body divcenter py-5" style="max-width: 70%;">--}}

{{--                    <a href="#" class="button button-large btn-block si-colored si-facebook nott t400 ls0 center nomargin"><i class="icon-facebook-sign"></i> Log in with Facebook</a>--}}

{{--                    <div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span></div>--}}

{{--                    <form id="login-form" name="login-form" class="nobottommargin row" action="#" method="post">--}}

{{--                        <div class="col-12">--}}
{{--                            <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />--}}
{{--                        </div>--}}

{{--                        <div class="col-12 mt-4">--}}
{{--                            <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />--}}
{{--                        </div>--}}

{{--                        <div class="col-12">--}}
{{--                            <a href="#" class="fright text-dark t300 mt-2">Forgot Password?</a>--}}
{{--                        </div>--}}

{{--                        <div class="col-12 mt-4">--}}
{{--                            <button class="button btn-block nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="card-footer py-4 center">--}}
{{--                    <p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
@yield('content')

    <!-- Footer
        ============================================= -->
        <footer id="footer" class="nobg noborder">

{{--            <div class="container clearfix">--}}

{{--                <!-- Footer Widgets--}}
{{--                ============================================= -->--}}
{{--                <div class="footer-widgets-wrap pb-3 border-bottom clearfix">--}}

{{--                    <div class="row">--}}

{{--                        <div class="col-lg-2 col-md-3 col-6">--}}
{{--                            <div class="widget clearfix">--}}

{{--                                <h4 class="ls0 mb-3 nott">Features</h4>--}}

{{--                                <ul class="list-unstyled iconlist ml-0">--}}
{{--                                    <li><a href="#">Help Center</a></li>--}}
{{--                                    <li><a href="#">Paid with Moblie</a></li>--}}
{{--                                    <li><a href="#">Status</a></li>--}}
{{--                                    <li><a href="#">Changelog</a></li>--}}
{{--                                    <li><a href="#">Contact Support</a></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-2 col-md-3 col-6">--}}
{{--                            <div class="widget clearfix">--}}

{{--                                <h4 class="ls0 mb-3 nott">Support</h4>--}}

{{--                                <ul class="list-unstyled iconlist ml-0">--}}
{{--                                    <li><a href="#">Home</a></li>--}}
{{--                                    <li><a href="#">About</a></li>--}}
{{--                                    <li><a href="#">FAQs</a></li>--}}
{{--                                    <li><a href="#">Support</a></li>--}}
{{--                                    <li><a href="#">Contact</a></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-2 col-md-3 col-6">--}}
{{--                            <div class="widget clearfix">--}}

{{--                                <h4 class="ls0 mb-3 nott">Trending</h4>--}}

{{--                                <ul class="list-unstyled iconlist ml-0">--}}
{{--                                    <li><a href="#">Shop</a></li>--}}
{{--                                    <li><a href="#">Portfolio</a></li>--}}
{{--                                    <li><a href="#">Blog</a></li>--}}
{{--                                    <li><a href="#">Events</a></li>--}}
{{--                                    <li><a href="#">Forums</a></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-2 col-md-3 col-6">--}}
{{--                            <div class="widget clearfix">--}}

{{--                                <h4 class="ls0 mb-3 nott">Get to Know us</h4>--}}

{{--                                <ul class="list-unstyled iconlist ml-0">--}}
{{--                                    <li><a href="#">Corporate</a></li>--}}
{{--                                    <li><a href="#">Agency</a></li>--}}
{{--                                    <li><a href="#">eCommerce</a></li>--}}
{{--                                    <li><a href="#">Personal</a></li>--}}
{{--                                    <li><a href="#">OnePage</a></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-8">--}}
{{--                            <div class="widget clearfix">--}}

{{--                                <h4 class="ls0 mb-3 nott">Subscribe Now</h4>--}}
{{--                                <div class="widget subscribe-widget mt-2 clearfix">--}}
{{--                                    <p class="mb-4"><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>--}}
{{--                                    <div class="widget-subscribe-form-result"></div>--}}
{{--                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mt-1 nobottommargin d-flex">--}}
{{--                                        <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control sm-form-control required email" placeholder="Enter your Email Address">--}}

{{--                                        <button class="button nott t400 ml-1 my-0" type="submit">Subscribe Now</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div><!-- .footer-widgets-wrap end -->--}}

{{--            </div>--}}

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights" class="nobg">

                <div class="container clearfix">

                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            Copyrights &copy; 2021 soroux.<br>
{{--                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>--}}
                        </div>

                        <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">About</a>/<a href="#">Features</a>/<a href="#">Contact</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->
    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-line-arrow-up"></div>
<!-- Document Wrapper
	============================================= -->


</div>


<!-- Footer Scripts
============================================= -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/shoppingcart.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>

<!-- ADD-ONS JS FILES -->
<script>
    jQuery(document).ready( function($){
        $('#shop').isotope({
            transitionDuration: '0.65s',
            getSortData: {
                name: '.product-title',
                price_lh: function( itemElem ) {
                    if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
                        var price = $(itemElem).find('.product-price ins').text();
                    } else {
                        var price = $(itemElem).find('.product-price').text();
                    }

                    priceNum = price.split("تومان");

                    return parseFloat( priceNum[1] );
                },
                price_hl: function( itemElem ) {
                    if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
                        var price = $(itemElem).find('.product-price ins').text();
                    } else {
                        var price = $(itemElem).find('.product-price').text();
                    }

                    priceNum = price.split("تومان");

                    return parseFloat( priceNum[1] );
                }
            },
            sortAscending: {
                name: true,
                price_lh: true,
                price_hl: false
            }
        });

        $('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
            var element = $(this),
                elementFilter = element.children('a').attr('data-filter'),
                elementFilterContainer = element.parents('.custom-filter').attr('data-container');

            elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

            element.append('<span>'+ elementFilterCount +'</span>');

        });

        $('.shop-sorting li').click( function() {
            $('.shop-sorting').find('li').removeClass( 'active-filter' );
            $(this).addClass( 'active-filter' );
            var sortByValue = $(this).find('a').attr('data-sort-by');
            $('#shop').isotope({ sortBy: sortByValue });
            return false;
        });
    });
</script>

</body>
</html>
