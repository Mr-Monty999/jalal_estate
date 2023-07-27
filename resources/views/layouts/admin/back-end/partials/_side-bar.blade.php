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
                <div class="navbar-vertical-content">
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
                                <li class="nav-item {{ Request::is('admin/cities/create') ? 'active' : '' }}">
                                    <a class="nav-link " href="{{ route('admin.cities.create') }}"
                                        title="{{ trans('keywords.Add City') }}">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">{{ trans('keywords.Add City') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('admin/cities') ? 'active' : '' }}">
                                    <a class="nav-link " href="{{ route('admin.cities.index') }}"
                                        title="{{ trans('keywords.Cities List') }}">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">{{ trans('keywords.Cities List') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

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
