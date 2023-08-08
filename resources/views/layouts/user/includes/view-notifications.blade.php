        @php
            use App\Models\User;
        @endphp
        @foreach (auth()->user()->notifications as $index => $notification)
            @if ($notification->type == 'App\Notifications\LandOfferAcceptedNotification')
                <a class="dropdown-item alert alert-info"
                    @php
$user = User::find($notification->data['user_id']); @endphp
                    href="">{{ trans('keywords.user') . ' ' . $user->name . ' ' . trans('keywords.has accepted your offer') }}</a>
            @endif
            @if ($index != count(auth()->user()->notifications) - 1)
                <div class="dropdown-divider"></div>
            @endif
            {{-- <a class="dropdown-item dropdown-item alert alert-info" href="">إشعار2</a> --}}
        @endforeach
