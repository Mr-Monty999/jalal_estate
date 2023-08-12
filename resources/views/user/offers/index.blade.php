@extends('layouts.user.main')

@section('content')
    <br>
    @can('view_offers')
        <div class="bg-light site-section bg-white my-4" id="offers">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="d-flex justify-content-center align-items-center">
                            @if ($user->hasRole('company'))
                                @if ($user->company->logo)
                                    <img src="{{ asset('storage/' . $user->company->logo) }}" style="width:300px;height: 200px;"
                                        alt="">
                                @endif
                            @elseif ($user->hasRole('landlord'))
                                @if ($user->landlord->photo)
                                    <img src="{{ asset('storage/' . $user->landlord->photo) }}"
                                        style="width:300px;height: 200px;" alt="">
                                @endif
                            @elseif ($user->hasRole('marketer'))
                                @if ($user->marketer->photo)
                                    <img src="{{ asset('storage/' . $user->marketer->photo) }}"
                                        style="width:300px;height: 200px;" alt="">
                                @endif
                            @elseif($user->hasRole('office'))
                                @if ($user->office->logo)
                                    <img src="{{ asset('storage/' . $user->office->logo) }}" style="width:300px;height: 200px;"
                                        alt="">
                                @endif
                            @elseif($user->hasRole('service-provider'))
                                @if ($user->serviceProvider->photo)
                                    <img src="{{ asset('storage/' . $user->serviceProvider->photo) }}"
                                        style="width:300px;height: 200px;" alt="">
                                @endif
                            @endif
                        </div>
                        <br><br>
                        <h1 class="text-center text-black">{{ trans('keywords.Estate Offers') }}</h1>

                        @include('user.offers.modals.add-modal')
                        @include('user.offers.table-filters')
                        <table class="table
                                table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{ trans('keywords.ID') }}</th>
                                    <th scope="col">{{ trans('keywords.estate classification') }}
                                    </th>
                                    <th scope="col">{{ trans('keywords.Estate Type') }}
                                    </th>
                                    <th scope="col">{{ trans('keywords.City') }}</th>
                                    <th scope="col">{{ trans('keywords.Neighbourhood') }}</th>
                                    <th scope="col">{{ trans('keywords.Street') }}</th>
                                    <th scope="col">{{ trans('keywords.Operation Type') }}</th>
                                    <th scope="col">{{ trans('keywords.space (in metres)') }}</th>
                                    <th scope="col">{{ trans('keywords.Land Number') }}</th>
                                    <th scope="col">{{ trans('keywords.Price') }}</th>
                                    <th scope="col">{{ trans('keywords.created at') }}</th>
                                    <th scope="col">{{ trans('keywords.created by') }}</th>

                                    <th scope="col">{{ trans('keywords.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($landOffers as $index => $landOffer)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td class="text-black">
                                            @if ($landOffer->commercial_or_housing == 'housing')
                                                <div style="border-radius: 10px;padding:10px" class="btn btn-success">
                                                    {{ trans('keywords.' . $landOffer->commercial_or_housing) }}
                                                </div>
                                            @else
                                                <div style="border-radius: 10px;padding:10px" class="btn btn-warning">
                                                    {{ trans('keywords.' . $landOffer->commercial_or_housing) }}
                                                </div>
                                            @endif
                                        </td>

                                        <td class="text-black">
                                            <div class="d-flex">
                                                @foreach ($landOffer->landTypes as $index => $landType)
                                                    {{ $landType->name }} @if ($index < count($landOffer->landTypes) - 1)
                                                        -
                                                    @endif
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="text-black">{{ $landOffer->city->name }}</td>
                                        <td class="text-black">{{ $landOffer->neighbourhood->name }}</td>
                                        <td class="text-black">{{ $landOffer->street_name }}</td>
                                        <td class="text-black">{{ trans('keywords.' . ucfirst($landOffer->operation_type)) }}
                                        </td>
                                        <td class="text-black">{{ number_format($landOffer->space) }}</td>
                                        <td class="text-black">{{ $landOffer->land_number }}</td>
                                        <td class="text-black">{{ number_format($landOffer->price) }}</td>
                                        <td class="text-black">{{ $landOffer->created_at->diffForHumans() }}</td>
                                        <td class="text-black">{{ $landOffer->user->name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @include('user.offers.modals.accept-modal')
                                                @include('user.offers.modals.view-modal')
                                                {{-- @include('user.offers.modals.edit-modal') --}}
                                                @if ($landOffer->user_id == auth()->id())
                                                    @can('edit_offers')
                                                        <a href="{{ route('user.land-offers.edit', $landOffer->id) }}"
                                                            class="btn btn-warning text-center text-white">{{ trans('keywords.Edit') }}</a>
                                                    @endcan
                                                @endif
                                                @include('user.offers.modals.delete-modal')
                                            </div>
                                            <style>
                                                a.btn.btn-warning {
                                                    border-radius: 10px;
                                                    padding: 5px
                                                }
                                            </style>
                                        </td>
                                    </tr>
                                @endforeach
                                <style>
                                    button[data-toggle="modal"] {
                                        padding: 8px
                                    }
                                </style>
                            </tbody>
                        </table>
                        {!! $landOffers->links() !!}

                    </div>
                </div>
            </div>
        </div>
    @endcan
    {{-- @include('user.offers.ads.view') --}}
    <br><br><br>
@endsection

@push('scripts')
    @if (session()->has('print_offer_id'))
        @php
            $offerId = session()->get('print_offer_id');
            $printRoute = route('user.land-offers.print', $offerId);
        @endphp
        <script>
            window.open("{{ $printRoute }}", "_blank").focus();
            // let hyperText = '<a hidden href="{{ $printRoute }}" id="print-offer" target="_blank"></a>';
            // $("body").append(hyperText);

            // document.getElementById("print-offer").click();
        </script>
    @endif
    @if ($errors->any())
        <script>
            // $("#open-modal-button").click();
            $("#addOfferModal").modal("show");
        </script>
    @endif
    <script>
        function getNeighbourhoods() {

            let city = $(".city_id");
            city.on("change", function() {
                let neighbourhood = $(this).parent().parent().find(".neighbourhood_id");
                neighbourhood.find(":not(#all)").remove();

                $.ajax({
                    type: "get",
                    url: "/api/cities/" + this.value + "/neighbourhoods",
                    success: function(response) {
                        // let oldId =
                        //     "{{ old('neighbourhood_id') }}";


                        for (const data of response) {

                            // let val = "";
                            // if (oldId == data.id.toString())
                            //     val = "selected";


                            neighbourhood.append("<option value='" + data.id + "'>" + data
                                .name +
                                "</option>");


                        }

                    }
                });
            });

        }

        getNeighbourhoods();






        ////////////// Enable street Height,dept,width when is_commecrial is true /////
        // function toggleInputsStatus() {
        // let isCommercialYes = $("#is_commercial_yes");
        // let isCommercialNo = $("#is_commercial_no");

        // let isCommercial = $("[name='is_commercial']");
        // let inputs = $("[name='street_height'],[name='dept'],[name='street_width']");
        // isCommercial.on("click", function() {

        //     if (this.value == 1) {

        //         inputs.removeAttr("disabled");


        //     } else {

        //         inputs.attr("disabled", "true");


        //     }

        // });

        let operationType = $("[name='operation_type']");
        operationType.on("change", function() {

            let rentPeriod = $(this).parent().parent().find("[name='rent_period']");

            if (this.value == "rent") {

                rentPeriod.removeAttr("disabled");


            } else {

                rentPeriod.attr("disabled", "true");


            }

        });


        let CommercialOrHousing = $("[name=commercial_or_housing]");
        CommercialOrHousing.on("change",
            function() {

                let isCommercial = $(this).parent().parent().find("[name='is_commercial']");

                if (this.value == "housing") {

                    isCommercial.removeAttr("disabled");


                } else {

                    isCommercial.removeAttr("checked");
                    isCommercial.attr("disabled", "true");


                }

            });



        let type2 = $("[name='type2']");
        let inputs = $("[name='type3']");
        type2.on("click", function() {

            if (this.value == "piece") {

                inputs.removeAttr("disabled");


            } else {

                inputs.attr("disabled", "true");


            }

        });
    </script>
@endpush
