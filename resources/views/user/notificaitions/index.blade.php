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
                        href="{{ route('user.land-offers.show', $notification->data['land_offer_id']) }}">
                        @php
                            $user = User::find($notification->data['user_id']);
                        $landOffer = \App\Models\LandOffer::find($notification->data['land_offer_id']); @endphp
                        {{ trans('keywords.user') . ' ' . $user->name . ' ' . trans('keywords.has accepted your offer') }}
                        <div class="text-black">
                            {{ $landOffer->created_at->diffForHumans() }}
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
        {!! $notifications->links() !!}
    </div>


    <br><br><br>
@endsection
