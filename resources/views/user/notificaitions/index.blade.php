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
                        <div>
                            @php
                                $user = User::find($notification->data['user_id']);
                                $landOffer = \App\Models\LandOffer::find($notification->data['land_offer_id']);
                            @endphp

                            @if ($user->hasRole('company'))
                                <img style="width: 80px;height:80px;border-radius:50%;margin-left:10px"
                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                    src="{{ asset('storage/' . $user->company->logo) }}" alt="">
                            @elseif ($user->hasRole('landlord'))
                                <img style="width: 80px;height:80px;border-radius:50%;margin-left:10px"
                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                    src="{{ asset('storage/' . $user->landlord->photo) }}" alt="">
                            @elseif ($user->hasRole('marketer'))
                                <img style="width: 80px;height:80px;border-radius:50%;margin-left:10px"
                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                    src="{{ asset('storage/' . $user->marketer->photo) }}" alt="">
                            @elseif($user->hasRole('office'))
                                <img style="width: 80px;height:80px;border-radius:50%;margin-left:10px"
                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                    src="{{ asset('storage/' . $user->office->logo) }}" alt="">
                            @elseif($user->hasRole('service-provider'))
                                <img style="width: 80px;height:80px;border-radius:50%;margin-left:10px"
                                    onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                    src="{{ asset('storage/' . $user->serviceProvider->logo) }}" alt="">
                            @endif
                            <span class="text-black">
                                {{ trans('keywords.user') . ' ' . $user->name . ' ' . trans('keywords.has accepted your offer') }}
                            </span>
                        </div>
                        <div>
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
