@php
    use App\Services\UserService;
    
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 "
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme2/fonts/icomoon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/front-end/img/reop-logo.jpeg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme2/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.3.0-web/css/all.min.css') }}">


    <link rel="stylesheet" href="{{ asset('theme2/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('theme2/css/style.css') }}">


    <style>
        button {
            border-radius: 10px !important
        }

        *:not(i) {
            text-transform: capitalize !important
        }

        .nav-link {
            font-size: 18px !important;
            color: #17a2b8 !important;
            font-weight: bold
        }

        @media only screen and (max-width: 800px) {
            .root-container {
                margin-top: 20%;
                margin-bottom: 10%;
            }
        }
    </style>
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.rtl.css') }}">

        @include('layouts.arabic')
    @endif

    @livewireStyles

    @stack('head')


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



        {{-- @include('layouts.user.includes.header') --}}
        @role('company')
            @include('layouts.user.includes.company-header')
        @endrole
        @role('marketer')
            @include('layouts.user.includes.marketer-header')
        @endrole
        @role('office')
            @include('layouts.user.includes.office-header')
        @endrole
        @role('service-provider')
            @include('layouts.user.includes.service-provider-header')
        @endrole
        @role('landlord')
            @include('layouts.user.includes.landlord-header')
        @endrole


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
        <div class="root-container">
            @yield('content')
        </div>

        @include('layouts.includes.footer')

        @include('layouts.user.includes.ads-bar')
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

    <script>
        function getUserNotifications(userId) {
            $.ajax({
                type: "get",
                url: "/api/users/" + userId + "/notifications-count",
                success: function(response) {
                    let notificationCount = $("#notification-count");

                    if (response.unread_notifications_count > 0) {
                        notificationCount.text(response.unread_notifications_count);
                        notificationCount.removeAttr("hidden");
                    } else {
                        notificationCount.text(0);
                        notificationCount.attr("hidden", true);
                    }

                }
            });
        }

        function getUserMessagesCount(userId) {
            $.ajax({
                type: "get",
                url: "/api/chat/users/" + userId + "/unread-messages-count",
                success: function(response) {
                    let unreadMessagesCount = $("#chat-count");
                    if (response.unread_messages_count > 0) {
                        unreadMessagesCount.text(response.unread_messages_count);
                        unreadMessagesCount.removeAttr("hidden");
                    } else {
                        unreadMessagesCount.text(0);
                        unreadMessagesCount.attr("hidden", true);
                    }

                }
            });
        }

        function readUserNotifications(userId) {
            let notificationCount = $("#notification-count");
            let notifications = $("#notifications");
            notifications.on("click", function() {
                notificationCount.attr("hidden", "hidden");


                $.ajax({
                    type: "post",
                    url: "/api/users/read-notifications",
                    data: {
                        "user_id": userId
                    },
                    success: function(response) {}
                });


            });
        }
        $(document).ready(function() {
            let userId = "{{ auth()->user()->id }}";

            getUserNotifications(userId);
            getUserMessagesCount(userId);

            setInterval(() => {
                getUserNotifications(userId);
                getUserMessagesCount(userId);

            }, 5000);
            // readUserNotifications(userId);
        })
    </script>

    @livewireScripts

</body>

</html>
