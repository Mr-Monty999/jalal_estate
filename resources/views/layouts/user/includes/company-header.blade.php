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
                        <li><a href="{{ route('user.home') }}" class="nav-link">{{ trans('keywords.Home') }}</a></li>
                        <li>
                            <div>
                                {{-- <img style="width: 50px;height:50px;border-radius:50%"
                                    src="{{ asset('storage') . '/' . auth()->user()->company->logo }}" alt=""> --}}
                                <a href="{{ route('user.profile') }}"
                                    class="nav-link">{{ trans('keywords.Profile') }}</a>
                            </div>
                        </li>
                        <li><a href="{{ route('user.logout') }}" class="nav-link">{{ trans('keywords.Sign Out') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#"
                    class="site-menu-toggle js-menu-toggle text-black float-left"><span class="icon-menu h3"></span></a>
            </div>

        </div>
    </div>

</header>
