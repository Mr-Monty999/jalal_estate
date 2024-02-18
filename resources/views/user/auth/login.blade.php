@extends('layouts.guest.main')

@section('content')
    <br><br><br>
    <div class="bg-light site-section bg-white" id="login-page">
        <div class="container">
            <br><br>
            <form class="d-flex flex-column justify-content-center align-items-center" method="POST"
                action="{{ route('user.login.attempt') }}" enctype="multipart/form-data">
                @csrf
                <h1>{{ trans('keywords.Login') }}</h1>

                <div style="width: 50%">
                    <div class="form-group">
                        <label for="email">{{ trans('keywords.Email') }}</label>
                        <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                            id="email">
                        @error('email')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">{{ trans('keywords.Password') }}</label>
                        <input name="password" type="password" class="form-control" id="password">
                        @error('password')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <a href="{{ route('user.forget-password') }}">{{ trans('keywords.forget your password?') }}</a>
                    </div>

                    {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                    <button style="margin-right: 30%" type="submit"
                        class="btn btn-primary">{{ trans('keywords.Login') }}</button>
                    @foreach ($errors->all() as $error)
                        <br><br>
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $error }}
                        </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
    <br><br><br>
@endsection
