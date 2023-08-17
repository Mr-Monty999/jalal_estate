<style>
    .navbar-vertical .navbar-nav.nav-tabs .active .nav-link,
    .navbar-vertical .navbar-nav.nav-tabs .active.nav-link {
        border: none
    }
</style>
<div id="sidebarMain" class="d-none">
    <aside style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};"
        class="bg-white js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset pb-0">
                <div class="navbar-brand-wrapper justify-content-between side-logo">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('admin.home') }}" aria-label="Front">
                        <img onerror="this.src='{{ asset('assets/back-end/img/900x400/img1.jpg') }}'"
                            class="navbar-brand-logo-mini for-web-logo max-h-30"
                            src="{{ asset('storage/app/company/') }}" alt="Logo">
                    </a>
                    <!-- Navbar Vertical Toggle -->
                    <button type="button"
                        class="d-none js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->

                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker close">
                        <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                            data-placement="right" title="" data-original-title="Collapse"></i>
                        <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                            data-template="<div class=&quot;tooltip d-none d-sm-block&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><div class=&quot;tooltip-inner&quot;></div></div>"
                            data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="Expand"></i>
                    </button>
                </div>

                <!-- Content -->
                <div style="padding: 0px" class="navbar-vertical-content">
                    <!-- Search Form -->
                    {{-- <div class="sidebar--search-form pb-3 pt-4">
                        <div class="search--form-group">
                            <button type="button" class="btn"><i class="tio-search"></i></button>
                            <input type="text" class="js-form-search form-control form--control"
                                id="search-bar-input" placeholder="{{ trans('keywords.search_menu') }}...">
                        </div>
                    </div> --}}

                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        <br>
                        <li class="navbar-vertical-aside-has-menu {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                                title="{{ trans('keywords.Dashboard') }}" href="{{ route('admin.home') }}">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.Dashboard') }}
                                </span>
                            </a>
                        </li>
                        <!-- End Dashboards -->


                        {{-- <li class="nav-item {{ Request::is('admin/cities*') ? 'scroll-here' : '' }}">
                            <small class="nav-subtitle" title="">{{ trans('keywords.Cities Management') }}</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li> --}}
                        <!-- Pages -->
                        <li class="navbar-vertical-aside-has-menu {{ Request::is('admin/cities*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.Cities') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.Cities') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/cities*') ? 'block' : '' }}">
                                @can('create_cities')
                                    <li class="nav-item {{ Request::is('admin/cities/create') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.cities.create') }}"
                                            title="{{ trans('keywords.Add City') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.Add City') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view_cities')
                                    <li class="nav-item {{ Request::is('admin/cities') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.cities.index') }}"
                                            title="{{ trans('keywords.Cities List') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.Cities List') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>

                        <li
                            class="navbar-vertical-aside-has-menu {{ Request::is('admin/neighbourhoods*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.Neighbourhoods') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.Neighbourhoods') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/neighbourhoods*') ? 'block' : '' }}">
                                @can('create_neighbourhoods')
                                    <li class="nav-item {{ Request::is('admin/neighbourhoods/create') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.neighbourhoods.create') }}"
                                            title="{{ trans('keywords.Add Neighbourhood') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.Add Neighbourhood') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view_neighbourhoods')
                                    <li class="nav-item {{ Request::is('admin/neighbourhoods') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.neighbourhoods.index') }}"
                                            title="{{ trans('keywords.Neighbourhoods List') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.Neighbourhoods List') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>

                        {{-- users --}}
                        @can('view_users')
                            <li class="navbar-vertical-aside-has-menu {{ Request::is('admin/users*') ? 'active' : '' }}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                    title="{{ trans('keywords.users') }}">
                                    <i class="tio-filter-list nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                        {{ trans('keywords.users') }}
                                    </span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{ Request::is('admin/users*') ? 'block' : '' }}">
                                    <li class="nav-item {{ Request::is('admin/users/all') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.users.all') }}"
                                            title="{{ trans('keywords.all users') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.all users') }}</span>
                                        </a>
                                    </li>

                                    <li class="nav-item {{ Request::is('admin/users/all/active') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.users.active.all') }}"
                                            title="{{ trans('keywords.active users') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.active users') }}</span>
                                        </a>
                                    </li>

                                    <li class="nav-item {{ Request::is('admin/users/all/unactive') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.users.unactive.all') }}"
                                            title="{{ trans('keywords.unactive users') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.unactive users') }}</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endcan

                        {{-- end user --}}

                        <li class="navbar-vertical-aside-has-menu {{ Request::is('admin/ads*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.ads') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.ads') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/ads*') ? 'block' : '' }}">
                                @can('create_ads')
                                    <li class="nav-item {{ Request::is('admin/ads/create') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.ads.create') }}"
                                            title="{{ trans('keywords.add ad') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.add ad') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view_ads')
                                    <li class="nav-item {{ Request::is('admin/ads') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.ads.index') }}"
                                            title="{{ trans('keywords.ads list') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.ads list') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>



                        {{-- Rents --}}
                        <li class="navbar-vertical-aside-has-menu {{ Request::is('admin/rents*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.rents') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.rents') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/rents*') ? 'block' : '' }}">
                                @can('create_rents')
                                    <li class="nav-item {{ Request::is('admin/rents/create') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.rents.create') }}"
                                            title="{{ trans('keywords.rents') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.add rent') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view_rents')
                                    <li class="nav-item {{ Request::is('admin/rents') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.rents.index') }}"
                                            title="{{ trans('keywords.rents list') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.rents list') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                        {{-- end rents --}}

                        {{-- Land Types --}}
                        <li
                            class="navbar-vertical-aside-has-menu {{ Request::is('admin/land-types*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.land types') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.land types') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/land-types*') ? 'block' : '' }}">
                                @can('create_land_types')
                                    <li class="nav-item {{ Request::is('admin/land-types/create') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.land-types.create') }}"
                                            title="{{ trans('keywords.land types') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.add land type') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view_land_types')
                                    <li class="nav-item {{ Request::is('admin/land-types') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.land-types.index') }}"
                                            title="{{ trans('keywords.land types list') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.land types list') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                        {{-- end land type --}}

                        {{-- Estate classifications --}}
                        <li
                            class="navbar-vertical-aside-has-menu {{ Request::is('admin/estate-classifications*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.estate classifications') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.estate classifications') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/estate-classifications*') ? 'block' : '' }}">
                                @can('create_estate_classifications')
                                    <li
                                        class="nav-item {{ Request::is('admin/estate-classifications/create') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.estate-classifications.create') }}"
                                            title="{{ trans('keywords.estate classifications') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span
                                                class="text-truncate">{{ trans('keywords.add estate classification') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view_estate_classifications')
                                    <li
                                        class="nav-item {{ Request::is('admin/estate-classifications') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.estate-classifications.index') }}"
                                            title="{{ trans('keywords.estate classifications list') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span
                                                class="text-truncate">{{ trans('keywords.estate classifications list') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                        {{-- end rents --}}

                        {{-- begin settings --}}
                        <li
                            class="navbar-vertical-aside-has-menu {{ Request::is('admin/settings*') ? 'active' : '' }}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                                title="{{ trans('keywords.settings') }}">
                                <i class="tio-filter-list nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{ trans('keywords.settings') }}
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: {{ Request::is('admin/settings*') ? 'block' : '' }}">
                                @can('view_settings')
                                    <li
                                        class="nav-item {{ Request::is('admin/settings/terms-and-conditions') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.terms-and-conditions.index') }}"
                                            title="{{ trans('keywords.terms & conditions settings') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span
                                                class="text-truncate">{{ trans('keywords.terms & conditions settings') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item {{ Request::is('admin/settings/about-page') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.about-page.index') }}"
                                            title="{{ trans('keywords.about page settings') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span
                                                class="text-truncate">{{ trans('keywords.about page settings') }}</span>
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item {{ Request::is('admin/settings/contact-page') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.contact-page.index') }}"
                                            title="{{ trans('keywords.contact page settings') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span
                                                class="text-truncate">{{ trans('keywords.contact page settings') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item {{ Request::is('admin/settings/footer') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{ route('admin.footer.index') }}"
                                            title="{{ trans('keywords.footer settings') }}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{ trans('keywords.footer settings') }}</span>
                                        </a>
                                    </li>
                                @endcan



                            </ul>
                        </li>
                        {{-- end settings --}}

                    </ul>

                </div>
                <!-- End Content -->
            </div>
        </div>
    </aside>
</div>

@push('script_2')
    <script>
        $(window).on('load', function() {
            if ($(".navbar-vertical-content li.active").length) {
                $('.navbar-vertical-content').animate({
                    scrollTop: $(".navbar-vertical-content li.active").offset().top - 150
                }, 10);
            }
        });

        //Sidebar Menu Search
        var $rows = $('.navbar-vertical-content .navbar-nav > li');
        $('#search-bar-input').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>
@endpush
