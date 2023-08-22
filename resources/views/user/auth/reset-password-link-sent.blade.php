@extends('layouts.guest.main')

@section('content')
    <br><br><br>
    <div class="bg-light site-section bg-white" id="forget-password">
        <div class="container">
            <br><br>

            <h2 class="text-center text-success">
                {{ trans('keywords.a password reset link has been sent to your email. please check your inbox or junk mail') }}
            </h2>

        </div>
    </div>
    <br><br><br>
@endsection
