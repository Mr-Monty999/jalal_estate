@extends('layouts.user.main')

@section('content')
    <br><br><br><br><br><br>
    @php
        $user = auth()->user();
        
        $latestBlock = $user
            ->blocks()
            ->latest()
            ->first();
    @endphp
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <br><br>
        <h1 class="text-danger">{{ trans('keywords.you have been blocked') }}</h1>
        <h1 class="text-danger">{{ trans('keywords.reason') }}:&ThickSpace;{{ $latestBlock->reason }}</h1>
        <h1 class="text-danger">
            {{ trans('keywords.period') }}:&ThickSpace;{{ $latestBlock->period }}&ThinSpace;{{ trans('keywords.' . $latestBlock->period_type) }}
        </h1>
        <h1 class="text-danger">{{ trans('keywords.block expired at') }}:&ThickSpace;{{ $latestBlock->expired_at }}</h1>

    </div>

    <br><br><br><br><br><br>
@endsection
