@extends('layouts.user.main')

@section('content')
    <style>
        /* css-rest */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        /* wrapper */


        /* tabs-section */
        .tabs {
            /* width: 100%; */
            height: 54px;
            border-radius: 8px;
            background-color: #fff;
            /* padding: 0 33px; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: auto;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        ul.tabs li {
            list-style: none;
            height: 100%;
        }

        ul.tabs li a {
            text-decoration: none;
            color: #000;
            font-size: 18px;
            font-weight: 500;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 0 18px;
        }

        ul.tabs a::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 0;
            right: 0;
            display: none;
            border-top: 3px solid;
        }

        ul.tabs li a:hover::after,
        ul.tabs li a.active::after {
            display: block;
            border-color: #fea901;
        }


        #content {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            min-height: 130px;
        }

        #content p {
            color: gray;
            font-size: 11px;
            font-weight: 400;
            line-height: 2.15;
        }

        div#one,
        div#two,
        div#three,
        div#four,
        div#five {
            display: none;
        }
    </style>
    <br><br><br><br><br><br>
    <div class="container">
        @include('user.auctions.modals.end-auction-modal')
        <div>
            <ul class="tabs group">
                <li>
                    <a class="active text-center" href="#/details">{{ trans('keywords.details') }}</a>
                </li>
                <li>
                    <a class="text-center" href="#/one">{{ trans('keywords.data') }}</a>
                </li>
                <li><a class="text-center" href="#/two">{{ trans('keywords.video') }}</a></li>
                <li>
                    <a class="text-center" href="#/three">{{ trans('keywords.images') }}</a>
                </li>
                <li>
                    <a class="text-center" href="#/four">{{ trans('keywords.features') }}</a>
                </li>
                <li>
                    <a class="text-center" href="#/five">{{ trans('keywords.address') }}</a>
                </li>
            </ul>
            <div id="content">
                <div id="details">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.lowest bid amount is currently over') }}:</h3>
                            <p class="text-black custom-font">{{ number_format($lowestBidPrice) }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.auction status') }}:</h3>
                            @if ($auction->status == 'active')
                                <div style="font-weight: bold" class="text-white text-success">
                                    {{ trans('keywords.active auction') }}</div>
                            @elseif($auction->status == 'end')
                                <div style="font-weight: bold" class="text-white text-danger">
                                    {{ trans('keywords.ended auction') }}</div>
                            @endif
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.participants count') }}:</h3>
                            <p class="text-black custom-font">{{ number_format($participantsCount) }}</p>
                        </div>
                        <div class="col-12 my-4">
                            <h3>{{ trans('keywords.bids record') }}:</h3>
                            <table class="table
                                table-responsive">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">{{ trans('keywords.ID') }}</th>
                                        <th scope="col">{{ trans('keywords.bidder') }}</th>
                                        <th scope="col">
                                            {{ trans('keywords.price') }}&ThinSpace;{{ trans('keywords.SAR') }}</th>
                                        <th scope="col">{{ trans('keywords.time') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($auctionBids as $index => $auctionBid)
                                        <tr>
                                            <th>{{ $index + 1 }}</th>
                                            <td class="text-black">{{ $auctionBid->user->name }}</td>
                                            <td class="text-black">{{ number_format($auctionBid->price) }}</td>
                                            <td class="text-black">{{ $auctionBid->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $auctionBids->links() !!}
                        </div>
                    </div>
                </div>
                <div id="one">
                    <div class="row">
                        <style>
                            .custom-font {
                                font-size: 15px !important
                            }
                        </style>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.name') }}:</h3>
                            <p class="text-black custom-font">{{ $auction->name }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.Instrument Number') }}:</h3>
                            <p class="text-black custom-font">{{ $auction->instrument_number }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.Space') }}:</h3>
                            <p class="text-black custom-font">
                                {{ number_format($auction->space) }}&ThinSpace;{{ trans('keywords.meter') }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.description') }}:</h3>
                            <p class="text-black custom-font">
                                {!! $auction->description !!}</p>
                        </div>
                        <div class="col-12">
                            <br>
                            <h1>{{ trans('keywords.the boundaries and lengths of the estate') }}:</h1>
                            <br>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.north') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->north_border }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.south') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->south_border }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.east') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->east_border }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.west') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->west_border }}</p>
                        </div>
                    </div>
                </div>
                <div id="two">
                    <div class="d-flex justify-content-center align-items-center">
                        @if ($auction->video)
                            <video style="width: 100%;height:200px" controls
                                src="{{ asset('storage/' . $auction->video) }}"></video>
                        @else
                            <h1>{{ trans('keywords.None') }}</h1>
                        @endif
                    </div>
                </div>
                <div id="three">
                    <div class="row">
                        @if ($auction->images()->count() > 0)
                            @foreach ($auction->images as $image)
                                <div class="col-6 col-md-4">
                                    <img style="width: 100%" src="{{ asset('storage/' . $image->path) }}" alt="">
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <h1 class="text-center">{{ trans('keywords.None') }}</h1>
                            </div>
                        @endif

                    </div>
                </div>
                <div id="four">
                    <div class="row">
                        <div class="col-12">
                            <h3>{{ trans('keywords.features') }}:</h3>
                            <p class="text-black custom-font">
                                {!! $auction->features !!}</p>
                        </div>
                    </div>

                </div>
                <div id="five">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.City') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->city->name }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.Neighbourhood') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->neighbourhood->name }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>{{ trans('keywords.street') }}:</h3>
                            <p class="text-black custom-font">
                                {{ $auction->street }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection

@push('scripts')
    <script>
        let j = jQuery.noConflict();
        j(document).ready(function() {
            let tabs = j(".tabs li a");
            tabs.click(function() {


                let content = this.hash.replace("/", "");

                console.log(content);
                tabs.removeClass("active");
                j(this).addClass("active");
                j("#content > div").hide();
                j(content).fadeIn(100);

                // j("div#" + id).fadeIn(100);

            });
        });
    </script>
@endpush
