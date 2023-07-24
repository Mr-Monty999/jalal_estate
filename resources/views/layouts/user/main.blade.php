<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stated &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 "
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme2/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/style.css') }}">

    @if (app()->getLocale() == 'ar')
        @include('layouts.arabic')
    @endif

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <style>
            header {
                width: 1351px;
                position: fixed;
                top: 0px;
                z-index: inherit;
                padding-top: 10px !important;
                padding-bottom: 10px !important;
                background-color: #333333 !important;
            }

            /* .nav-link {
                color: #999999 !important;
            } */

            .sticky-wrapper.is-sticky .site-navbar ul li a {
                color: #999999 !important
            }

            .sticky-wrapper.is-sticky .site-navbar ul li a:hover {
                color: white !important
            }

            .icon-menu.h3 {
                color: white;
            }
        </style>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo m-0 p-0"><a style="color:white !important" href="index.html"
                                class="mb-0">{{ trans('keywords.Jalal') }}</a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="{{ route('user.home') }}"
                                        class="nav-link">{{ trans('keywords.Home') }}</a></li>
                                <li><a href="{{ route('user.profile') }}"
                                        class="nav-link">{{ trans('keywords.Profile') }}</a></li>
                                <li><a href="{{ route('user.logout') }}"
                                        class="nav-link">{{ trans('keywords.Sign Out') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#"
                            class="site-menu-toggle js-menu-toggle text-black float-left"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>



        {{-- <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade"
            id="home-section">


            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 mt-lg-5 text-center">
                        <h1>Buy and sell real estate properties</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda
                            ea quo cupiditate facere deleniti fuga officia.</p>

                    </div>
                </div>
            </div> -

            <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>

        </div> --}}
        @yield('content')



        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Stated</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium
                                    magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        {{-- <div class="mb-4">
                            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                            <form action="#" method="post" class="footer-subscribe">
                                <div class="input-group mb-3">
                                    <input type="text"
                                        class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-black" type="button"
                                            id="button-addon2">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}

                        <div class="">
                            <h2 class="footer-heading mb-4">Follow Us</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>


                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div> <!-- .site-wrap -->

    <script src="{{ asset('theme2/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('theme2/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('theme2/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('theme2/js/aos.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('theme2/js/jquery.sticky.js') }}"></script>


    <script src="{{ asset('theme2/js/main.js') }}"></script>

</body>

</html>
