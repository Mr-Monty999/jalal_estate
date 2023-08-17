<style>
    footer * {
        color: #17a2b8 !important
    }
</style>
<footer class="site-footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="footer-heading mb-4">{{ trans('keywords.who we are?') }}</h2>
                        <p>نحن منصة تمكنك من البحث وعرض العقارات</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h2 class="footer-heading mb-4">{{ trans('keywords.quick links') }}</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('guest.contact.index') }}">{{ trans('keywords.Contact Us') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('guest.terms.index') }}">{{ trans('keywords.Terms and Conditions') }}</a>
                            </li>
                            <li><a href="{{ route('user.login') }}">{{ trans('keywords.login') }}</a></li>
                            <li><a href="{{ route('guest.home') }}">{{ trans('keywords.Home') }}</a></li>
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
                    <h2 class="footer-heading mb-4">{{ trans('keywords.follow us') }}</h2>
                    <a href="{{ App\Services\SettingService::get('footer_facebook_link') }}" target="_blank"
                        class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="{{ App\Services\SettingService::get('footer_twitter_link') }}" target="_blank"
                        class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="{{ App\Services\SettingService::get('footer_instagram_link') }}" target="_blank"
                        class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="{{ App\Services\SettingService::get('footer_linkedin_link') }}" target="_blank"
                        class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>


            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        {{ trans('keywords.All rights reserved | This Website is made') }} </i>
                        {{ trans('keywords.by') }} <a href="https://tawreedtech.com"
                            target="_blank">{{ trans('keywords.tawreed tech company') }}</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
