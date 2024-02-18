<div id="headerMain" class="d-none">
    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container shadow">

        <div class="navbar-nav-wrap">
            <div class="navbar-brand-wrapper">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('admin.home') }}" aria-label="">
                    <img class="navbar-brand-logo"
                        onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                        src="{{ asset('storage/app/company') }}" alt="Logo">
                    <img class="navbar-brand-logo-mini"
                        onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                        src="{{ asset('storage/app/company') }}" alt="Logo">
                </a>
                <!-- End Logo -->
            </div>

            <div class="navbar-nav-wrap-content-left">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3 d-xl-none">
                    <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                        data-placement="right" title="Collapse"></i>
                    <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                        data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-toggle="tooltip" data-placement="right" title="Expand"></i>
                </button>
            </div>


            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content-right"
                style="{{ app()->getLocale() === 'rtl' ? 'margin-left:unset; margin-right: auto' : 'margin-right:unset; margin-left: auto' }}">
                <!-- Navbar -->
                <ul class="navbar-nav align-items-center flex-row">


                    <li class="nav-item d-none d-md-inline-block">
                        <div class="hs-unfold">
                            <a title="Website home"
                                class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                href="{{ route('admin.home') }}" target="_blank">
                                <i class="tio-globe"></i>
                            </a>
                        </div>
                    </li>



                    <li class="nav-item">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker media align-items-center gap-3 navbar-dropdown-account-wrapper dropdown-toggle dropdown-toggle-left-arrow"
                                href="javascript:;"
                                data-hs-unfold-options='{
                                     "target": "#accountNavbarDropdown",
                                     "type": "css-animation"
                                   }'>
                                <div class="d-none d-md-block media-body text-right">
                                    <h5 class="profile-name mb-0">{{ auth()->user()->name }}</h5>
                                    <span class="fz-12">{{ auth()->user()->roles->first()->name }}</span>
                                </div>
                                <div class="avatar border avatar-circle">
                                    <img class="avatar-img"
                                        onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                        src="{{ asset('storage/' . auth()->user()->admin->photo) }}"
                                        alt="Image Description">
                                    <span class="d-none avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>

                            <div id="accountNavbarDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center text-break">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            {{-- @if (auth()->user()->admin->photo) --}}
                                            <img class="avatar-img"
                                                onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                                src="{{ asset('storage/' . auth()->user()->admin->photo) }}"
                                                alt="Image Description">
                                            {{-- @else
                                                <img class="avatar-img"
                                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                                    src="{{ asset('storage/app/admin') }}/{{ auth()->user()->image }}"
                                                    alt="Image Description">
                                            @endif --}}
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5">{{ auth()->user()->name }}</span>
                                            <span class="card-text">{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                {{-- <a class="dropdown-item"
                                    href="{{ route('admin.profile.update', auth()->user()->id) }}">
                                    <span class="text-truncate pr-2"
                                        title="Settings">{{ trans('keywords.settings') }}</span>
                                </a> --}}

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
                                    <span class="text-truncate pr-2"
                                        title="{{ trans('keywords.Profile') }}">{{ trans('keywords.Profile') }}</span>
                                </a>

                                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                    <span class="text-truncate pr-2"
                                        title="Sign out">{{ trans('keywords.Sign Out') }}</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                </ul>
                <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->
        </div>
    </header>
</div>
<div id="headerFluid" class="d-none"></div>
<div id="headerDouble" class="d-none"></div>

@if (app()->getLocale() == 'ar')
    <style>
        div.navbar-nav-wrap-content-right {
            margin-left: unset !important;
            margin-right: auto !important;
        }
    </style>
@endif
