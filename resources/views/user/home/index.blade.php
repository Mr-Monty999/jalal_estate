@extends('layouts.user.main')

@section('content')
    <br><br><br>

    <div>
        {{-- <div class="container">
            <div class="my-3">
                <h3 class="text-center">{{ trans('keywords.welcome') }}&ThinSpace;{{ $user->name }}</h3>
            </div>
        </div> --}}
        <div style="position: relative" class="d-flex justify-content-center align-items-center">
            <img class="" style="width:100%;"
                onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                src="{{ asset('storage/' . $cityBanner->banner) }}">

            <h1 style="position: absolute;top:10%;right:10%;color:rgb(248, 245, 41);font-weight:bold" class="text-center">
                {{ trans('keywords.welcome') }}&ThinSpace;{{ $user->name }}
            </h1>


        </div>


    </div>


    <br><br><br>
@endsection
