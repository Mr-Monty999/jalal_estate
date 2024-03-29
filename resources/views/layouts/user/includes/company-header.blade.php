<header>
    <nav style="padding: 10px" class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        {{-- <a class="navbar-brand" style="font-size: 35px" href="{{ route('user.home') }}">{{ env('APP_NAME') }}</a> --}}

        <div class="text-center">
            {{-- <a class="navbar-brand text-info" style="font-size: 35px"
                href="{{ route('user.home') }}">{{ env('APP_NAME') }}</a>
            <br> --}}
            {{-- <h5 class="text-center text-info">{{ trans('keywords.direct owner and buyer') }}</h5> --}}
            <img style="width: 130px" src="{{ asset('assets/front-end/img/reop-logo.jpeg') }}" alt="">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (Request::is('user')) active @endif">
                    <a class="nav-link" href="{{ route('user.home') }}">{{ trans('keywords.Home') }} <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if (Request::is('user/land-offers/all')) active @endif">
                    <a class="nav-link"
                        href="{{ route('user.land-offers.all') }}">{{ trans('keywords.Companies & Offices Offers') }}
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if (Request::is('user/land-offers')) active @endif">
                    <a class="nav-link"
                        href="{{ route('user.land-offers.index') }}">{{ trans('keywords.Estate Offers') }} <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if (Request::is('user/land-offers/type/accepted')) active @endif">
                    <a class="nav-link"
                        href="{{ route('user.accepted-offers') }}">{{ trans('keywords.accepted estate offers') }}</a>
                </li>
                <li class="nav-item @if (Request::is('user/auctions')) active @endif">
                    <a class="nav-link" href="{{ route('user.auctions.index') }}">{{ trans('keywords.auctions') }}</a>
                </li>
                <li class="nav-item @if (Request::is('user/rents')) active @endif">
                    <a class="nav-link" href="{{ route('user.rents.index') }}">{{ trans('keywords.rents') }}</a>
                </li>
                <li class="nav-item @if (Request::is('user/complaints')) active @endif">
                    <a class="nav-link" href="{{ route('user.complaints.index') }}">{{ trans('keywords.complaints') }}
                        <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item @if (Request::is('user/profile')) active @endif">
                    <a class="nav-link" href="{{ route('user.profile') }}">{{ trans('keywords.my offers') }}</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (auth()->user()->company->logo)
                            <img src="{{ asset('storage/' . auth()->user()->company->logo) }}"
                                style="width:30px;height:30px;border-radius:50%" alt="">
                        @else
                            <img src="{{ asset('assets/front-end/img/5_1-placeholder.png') }}"
                                style="width:30px;height:30px;border-radius:50%" alt="">
                        @endif

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.profile') }}">
                            {{ trans('keywords.Profile') }}</a>
                        {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">{{ trans('keywords.logout') }}</a>
                    </div>
                </li>
                <li class="nav-item @if (Request::is('user/notifications')) active @endif">
                    <a class="nav-link" href="{{ route('user.notifications.index') }}">
                        <i id="notifications" class="fas fa-bell" style="font-size: 25px"></i>
                        <span id="notification-count" class="badge badge-danger" hidden>0</span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('user/chat')) active @endif">
                    <a class="nav-link" href="{{ route('user.chat.index') }}">
                        <i style="font-size: 25px" class="fa-solid fa-message"></i>
                        <span id="chat-count" class="badge badge-danger" hidden>0</span>
                    </a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i id="notifications" class="fas fa-bell text-white" style="font-size: 25px"></i>
                        <span id="notification-count" class="badge badge-danger" hidden>0</span>

                    </a>
                    <div style="padding-left: 10px;padding-right:10px" class="dropdown-menu"
                        aria-labelledby="navbarDropdown">
                        @include('layouts.user.includes.view-notifications')

                    </div>
                </li> --}}

            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
    </nav>
</header>
