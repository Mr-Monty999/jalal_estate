<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>{{ trans('keywords.Admin Panel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/back-end') }}/css/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('assets/back-end') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/back-end') }}/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/back-end') }}/css/theme.minc619.css?v=1.0">
    <link rel="stylesheet" href="{{ asset('assets/back-end') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/back-end') }}/css/toastr.css">

    @if (app()->getLocale() == 'ar')
        @include('layouts.arabic')
    @endif

</head>

<body>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero __inline-1"
            style="background-image: url({{ asset('assets/admin') }}/svg/components/abstract-bg-4.svg);">
            <!-- SVG Bottom Shape -->
            <figure class="position-absolute right-0 bottom-0 left-0">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
                </svg>
            </figure>
            <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
            <a class="d-flex justify-content-center mb-5" href="javascript:">
                <img class="z-index-2" height="40" src="{{ asset('storage/app/company/') }}" alt="Logo"
                    onerror="this.src='{{ asset('assets/back-end/img/400x400/img2.jpg') }}'">
            </a>

            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <!-- Card -->
                    <div class="card card-lg mb-5">
                        <div class="card-body">
                            <!-- Form -->
                            <form id="form-id" action="{{ route('admin.login.attempt') }}" method="post">
                                @csrf

                                <div class="text-center">
                                    <div class="mb-5">
                                        <h1 class="display-4 text-center">{{ trans('keywords.Admin Panel') }}</h1><br>
                                        {{-- <span>({{ trans('keywords.Admin Login') }})</span> --}}
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label"
                                        for="signinSrEmail">{{ trans('keywords.Email') }}</label>

                                    <input type="email" class="form-control form-control-lg" name="email"
                                        id="signinSrEmail" tabindex="1" placeholder="email@address.com"
                                        aria-label="email@address.com" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label" for="signupSrPassword" tabindex="0">
                                        <span class="d-flex justify-content-between align-items-center">
                                            {{ trans('keywords.Password') }}
                                        </span>
                                    </label>

                                    <div class="input-group input-group-merge">
                                        <input type="password" class="js-toggle-password form-control form-control-lg"
                                            name="password" id="signupSrPassword" placeholder="8+ characters required"
                                            aria-label="8+ characters required" required
                                            data-msg="Your password is invalid. Please try again."
                                            data-hs-toggle-password-options='{
                                                     "target": "#changePassTarget",
                                            "defaultClass": "tio-hidden-outlined",
                                            "showClass": "tio-visible-outlined",
                                            "classChangeTarget": "#changePassIcon"
                                            }'>
                                        <div id="changePassTarget" class="input-group-append">
                                            <a class="input-group-text" href="javascript:">
                                                <i id="changePassIcon" class="tio-visible-outlined"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Checkbox -->
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCheckbox"
                                            name="remember">
                                        <label class="custom-control-label text-muted" for="termsCheckbox">
                                            {{ trans('keywords.Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->

                                <button type="submit"
                                    class="btn btn-lg btn-block btn--primary text-center">{{ trans('keywords.Login') }}</button>
                            </form>
                            <!-- End Form -->
                        </div>
                        @if (env('APP_MODE') == 'demo')
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-10">
                                        <span>{{ trans('keywords.Email') }} :
                                            {{ trans('keywords.admin@admin.com') }}</span><br>
                                        <span>{{ trans('keywords.Password') }} :
                                            {{ trans('keywords.12345678') }}</span>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn--primary" onclick="copy_cred()"><i class="tio-copy"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/back-end') }}/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/back-end') }}/js/theme.min.js"></script>
    <script src="{{ asset('assets/back-end') }}/js/toastr.js"></script>

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', Error, {
                    CloseButton: true,
                    ProgressBar: true
                });
            @endforeach
        </script>
    @endif

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SHOW PASSWORD
            // =======================================================
            $('.js-toggle-password').each(function() {
                new HSTogglePassword(this).init()
            });

            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this));
            });
        });
    </script>


    @if (env('APP_MODE') == 'demo')
        <script>
            function copy_cred() {
                $('#signinSrEmail').val('admin@admin.com');
                $('#signupSrPassword').val('12345678');
                toastr.success('Copied successfully!', 'Success!', {
                    CloseButton: true,
                    ProgressBar: true
                });
            }
        </script>
    @endif

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="{{ asset('assets/admin') }}/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

</html>
