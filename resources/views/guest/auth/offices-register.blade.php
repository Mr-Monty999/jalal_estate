@extends('layouts.guest.main')

@section('content')
    <br><br><br>
    <div class="bg-light site-section bg-white" id="offices-register">
        <div class="container">
            <h1 class="text-center">{{ trans('keywords.Create Office Account') }}</h1>
            <br><br>
            <form method="POST" action="{{ route('guest.offices.register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="name">{{ trans('keywords.Office Name') }}</label>
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                            id="name">
                        @error('name')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="email">{{ trans('keywords.Email') }}</label>
                        <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                            id="email">
                        @error('email')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="phone">{{ trans('keywords.Phone') }}</label>
                        <input name="phone" value="{{ old('phone') }}" type="phone" class="form-control"
                            id="phone">
                        @error('phone')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="license_number">{{ trans('keywords.License Number') }}</label>
                        <input name="license_number" value="{{ old('license_number') }}" type="number"
                            class="form-control" id="license_number">
                        @error('license_number')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="advertiser_number">{{ trans('keywords.Advertiser Number') }}</label>
                        <input name="advertiser_number" value="{{ old('advertiser_number') }}" type="number"
                            class="form-control" id="advertiser_number">
                        @error('advertiser_number')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label
                            for="commercial_registration_number">{{ trans('keywords.Commercial Registration Number') }}</label>
                        <input name="commercial_registration_number" value="{{ old('commercial_registration_number') }}"
                            type="number" class="form-control" id="commercial_registration_number">
                        @error('commercial_registration_number')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="password">{{ trans('keywords.Password') }}</label>
                        <input name="password" type="password" class="form-control" id="password">
                        @error('password')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="password_confirmation">{{ trans('keywords.Password Confirmation') }}</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                        @error('password_confirmation')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="logo">{{ trans('keywords.Logo') }}</label>
                        <input name="logo" type="file" class="form-control" id="logo">
                        @error('logo')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
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
