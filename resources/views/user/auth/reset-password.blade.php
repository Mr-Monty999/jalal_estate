@extends('layouts.guest.main')

@section('content')
    <br><br><br>
    <div class="bg-light site-section bg-white" id="forget-password">
        <div class="container">
            <br><br>
            <form class="d-flex flex-column justify-content-center align-items-center" method="POST"
                action="{{ route('password.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" hidden name="token" value="{{ $token }}">
                <h1>{{ trans('keywords.new password') }}</h1>

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
                        <label for="password">{{ trans('keywords.Password Confirmation') }}</label>
                        <input name="password" value="{{ old('password') }}" type="password" class="form-control"
                            id="password">
                        @error('password')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{ trans('keywords.Password Confirmation') }}</label>
                        <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password"
                            class="form-control" id="password_confirmation">
                        @error('password_confirmation')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button style="margin-right: 30%" type="submit"
                        class="btn btn-primary">{{ trans('keywords.submit') }}</button>
                    {{-- @foreach ($errors->all() as $error)
                        <br><br>
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">{{ $error }}
                        </div>
                    @endforeach --}}
                </div>
            </form>
        </div>
    </div>
    <br><br><br>
@endsection
