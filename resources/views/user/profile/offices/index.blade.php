@extends('layouts.user.main')

@section('content')
    <br><br><br><br><br>

    <div class="container">
        <form method="POST" class="row" action="{{ route('user.offices.profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group col-12 col-md-6">
                <label for="name">{{ trans('keywords.Office Name') }}</label>
                <input name="name" value="{{ auth()->user()->name }}" type="text" class="form-control" id="name">
                @error('name')
                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="password">{{ trans('keywords.Password') }}
                    <b
                        class="text-danger">({{ trans('keywords.leave empty if you dont want to change your password') }})</b></label>
                <input name="password" value="{{ old('password') }}" type="text" class="form-control" id="password">
                @error('password')
                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="password_confimation">{{ trans('keywords.Password Confirmation') }} <b
                        class="text-danger">({{ trans('keywords.leave empty if you dont want to change your password') }})</b></label>
                <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="text"
                    class="form-control" id="password_confirmation">
                @error('password_confirmation')
                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="logo">{{ trans('keywords.Logo') }}</label>
                <input name="logo" type="file" class="form-control" id="logo">
                <div>
                    @if (auth()->user()->office->logo)
                        <div>
                            <img style="width: 200px;height:200px"
                                src="{{ asset('storage/' . auth()->user()->office->logo) }}" alt="">
                        </div>
                    @else
                        <p class="text-black">
                            {{ trans('keywords.None') }}
                        </p>
                    @endif
                </div>
                @error('logo')
                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-warning text-white">{{ trans('keywords.update') }}</button>
        </form>
    </div>


    <br><br><br>
@endsection
