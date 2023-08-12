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
    </style>
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.rtl.css') }}">

        @include('layouts.arabic')
    @endif

    @livewireStyles


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



        @yield('content')




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

    {{-- <script>
        function getUserNotifications(userId) {
            $.ajax({
                type: "get",
                url: "/api/users/" + userId + "/notifications-count",
                success: function(response) {
                    if (response.unread_notifications_count > 0) {
                        let notificationCount = $("#notification-count");
                        notificationCount.text(response.unread_notifications_count);
                        notificationCount.removeAttr("hidden");
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

            setInterval(() => {
                getUserNotifications(userId);

            }, 5000);
            // readUserNotifications(userId);
        })
    </script> --}}

    @livewireScripts

</body>

</html>
