@extends('layouts.rents.main')
@push('head')
@endpush
@section('rents-content')
    <br><br><br><br><br><br>
    <div class="container">
        <div class="bravo-list-hotel layout_normal">
            <h1 class="title text-center">
                {{ trans('keywords.rents') }}
            </h1>
            {{-- <div class="sub-title">
                Hotel highly rated for thoughtful design
            </div> --}}
            <div class="list-item">
                <div class="row">
                    @foreach ($rents as $rent)
                        <div class="col-lg-3 col-md-6 my-2">
                            <div class="item-loop card">
                                <div class="thumb-image ">
                                    <a href="{{ route('user.rents.show', $rent->id) }}">
                                        <img class='img-responsive' src="{{ asset('storage/' . $rent->banner) }}"
                                            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'">
                                    </a>
                                    {{-- <div class="star-rate">
                                        <div class="list-star">
                                            <ul class="booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="service-wishlist " data-id="1" data-type="hotel">
                                        <i class="fa fa-heart"></i>
                                    </div> --}}
                                </div>
                                <div style="font-size: 20px;padding:5px" class="item-title">
                                    <a class="text-dark" style="font-weight: bold"
                                        href="{{ route('user.rents.show', $rent->id) }}">
                                        {{ $rent->name }}
                                    </a>
                                </div>
                                <div class="location" style="padding:5px">
                                    {{ $rent->location }} <i class="fa fa-map-marker"></i>
                                </div>
                                {{-- <div class="service-review">
                                    <span class="rate">
                                        4.7/5 <span class="rate-text">Excellent</span>
                                    </span>
                                    <span class="review">
                                        3 Reviews
                                    </span>
                                </div> --}}
                                <div style="padding:20px" class="info">
                                    <div class="g-price">
                                        {{-- <div class="prefix">
                                            <span class="fr_text">from</span>
                                        </div> --}}
                                        <div class="price">
                                            <span
                                                class="text-price">{{ number_format($rent->price) }}&ThinSpace;{{ trans('keywords.SAR') }}
                                                <span class="unit">/&ThinSpace;
                                                    @if ($rent->rent_period == 'daily')
                                                        {{ trans('keywords.day') }}
                                                    @elseif ($rent->rent_period == 'monthly')
                                                        {{ trans('keywords.month') }}
                                                    @else
                                                        {{ trans('keywords.year') }}
                                                    @endif
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $rents->links() !!}
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
