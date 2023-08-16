<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ trans('keywords.a website to search and view real estate') }}" />
    <meta name="author" content="{{ trans('keywords.created by tawreedtech') }}" />
    <meta name="robots" content="index, follow" />
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


    <style>
        button {
            border-radius: 10px !important
        }
    </style>
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.rtl.css') }}">

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


        {{-- <style>
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

            h1 {
                color: #0f2d52;
                font-weight: bold;
            }

            label {
                color: #0f2d52
            }
        </style> --}}
        <header>
            <nav style="padding: 10px" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" style="font-size: 35px"
                    href="{{ route('guest.home') }}">{{ env('APP_NAME') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item @if (Request::is('/')) active @endif">
                            <a class="nav-link" href="{{ route('guest.home') }}">{{ trans('keywords.Home') }} <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item @if (Request::is('user/login')) active @endif">
                            <a class="nav-link" href="{{ route('user.login') }}">{{ trans('keywords.login') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ trans('keywords.Join Us') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"
                                    href="{{ route('guest.companies.register') }}">{{ trans('keywords.Create Company Account') }}</a>
                                <a class="dropdown-item"
                                    href="{{ route('guest.marketers.register') }}">{{ trans('keywords.Create Marketer Account') }}</a>
                                <a class="dropdown-item"
                                    href="{{ route('guest.offices.register') }}">{{ trans('keywords.Create Office Account') }}</a>
                                <a class="dropdown-item"
                                    href="{{ route('guest.landlords.register') }}">{{ trans('keywords.Create Landlord Account') }}</a>
                                <a class="dropdown-item"
                                    href="{{ route('guest.service-providers.register') }}">{{ trans('keywords.Create Service Provider Account') }}</a>
                            </div>
                        </li>
                        <li class="nav-item @if (Request::is('/terms-and-conditions')) active @endif">
                            <a href="{{ route('guest.terms.index') }}"
                                class="nav-link">{{ trans('keywords.Terms and Conditions') }}</a>
                        </li>
                        <li class="nav-item @if (Request::is('/about')) active @endif">
                            <a href="{{ route('guest.about.index') }}"
                                class="nav-link">{{ trans('keywords.About') }}</a>
                        </li>
                        <li class="nav-item @if (Request::is('/contact')) active @endif">
                            <a href="{{ route('guest.contact.index') }}"
                                class="nav-link">{{ trans('keywords.Contact Us') }}</a>
                        </li>



                    </ul>
                    {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
                </div>
            </nav>
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

        @include('layouts.includes.footer')



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
    @stack('scripts')
</body>

</html>
