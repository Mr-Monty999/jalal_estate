@extends('layouts.landing-page.auth')

@section('content')
    <style>
        #company-register {
            /* padding: 20%; */
            /* padding-bottom: 10% */
        }
    </style>

    <br><br><br>
    <div class="bg-light site-section bg-white" id="company-register">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1>{{ trans('keywords.Create Company Account') }}</h1>
            <br><br>
            <form method="POST" action="{{ route('user.companies.store') }}">
                <div class="form-group">
                    <label for="name">{{ trans('keywords.Name') }}</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('keywords.Email') }}</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">{{ trans('keywords.Phone') }}</label>
                    <input type="phone" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="password">{{ trans('keywords.Password') }}</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">{{ trans('keywords.Password Confirmation') }}</label>
                    <input type="password" class="form-control" id="password_confirmation">
                </div>
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">{{ trans('keywords.Create Account') }}</button>
            </form>
        </div>
    </div>
    <br><br><br>
@endsection
