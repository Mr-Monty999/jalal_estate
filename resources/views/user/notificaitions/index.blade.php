@extends('layouts.user.main')

@section('content')
    @php
        use App\Models\User;
    @endphp

    <br><br><br><br><br>

    <div class="container">
        <h1 class="text-center text-black">{{ trans('keywords.notifcations') }}</h1>
        <br><br>
        <div class="d-flex flex-column justify-content-center align-items-center">
            @foreach ($notifications as $index => $notification)
                @if ($notification->type == 'App\Notifications\LandOfferAcceptedNotification')
                    <a style="width: 100%; margin-bottom:1px;padding:20px;border-radius: 10px;" class="alert-info text-center"
                        @php
$user = User::find($notification->data['user_id']); @endphp
                        href="{{ route('user.land-offers.show', $notification->data['land_offer_id']) }}">{{ trans('keywords.user') . ' ' . $user->name . ' ' . trans('keywords.has accepted your offer') }}</a>
                @endif
                {{-- @if ($index != count($notifications) - 1)
                    <div class="dropdown-divider"></div>
                @endif --}}
            @endforeach

        </div>
        {!! $notifications->links() !!}
    </div>


    <br><br><br>
@endsection
