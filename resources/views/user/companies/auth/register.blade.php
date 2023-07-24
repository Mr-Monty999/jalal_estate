@extends('layouts.landing-page.app')

@section('content')
    <style>
        #company-register {
            /* padding: 20%; */
            /* padding-bottom: 10% */
        }
    </style>

    <br><br><br>
    <div class="bg-light site-section bg-white" id="company-register">
        <div class="container">
            <h1>{{ trans('keywords.Create Company Account') }}</h1>
            <br><br>
            <form method="POST" action="{{ route('user.companies.register') }}">
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="name">{{ trans('keywords.Name') }}</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="email">{{ trans('keywords.Email') }}</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="phone">{{ trans('keywords.Phone') }}</label>
                        <input type="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="license_number">{{ trans('keywords.License Number') }}</label>
                        <input type="text" class="form-control" id="license_number">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="advertiser_number">{{ trans('keywords.Advertiser Number') }}</label>
                        <input type="text" class="form-control" id="advertiser_number">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label
                            for="commercial_registration_number">{{ trans('keywords.Commercial Registration Number') }}</label>
                        <input type="text" class="form-control" id="commercial_registration_number">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="password">{{ trans('keywords.Password') }}</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="password_confirmation">{{ trans('keywords.Password Confirmation') }}</label>
                        <input type="password" class="form-control" id="password_confirmation">
                    </div>
                    <div class="form-group col-12">
                        <label for="logo">{{ trans('keywords.Logo') }}</label>
                        <input type="file" class="form-control" id="logo">
                    </div>
                    <div class="col-12">

                    </div>

                    {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                    <button style="margin-right: 30%" type="submit"
                        class="btn btn-primary">{{ trans('keywords.Create Account') }}</button>
                </div>

            </form>
        </div>
    </div>
    <br><br><br>
@endsection
