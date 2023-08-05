@extends('layouts.user.main')

@section('content')
    <br><br><br>
    @can('view_offers')
        <div class="bg-light site-section bg-white my-4" id="offers">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center text-black">{{ trans('keywords.Estate Offers') }}</h1>

                        @include('user.offers.modals.add-modal')
                        <br>
                        <form class="row" method="GET" action="{{ route('user.land-offers.index') }}">
                            @csrf
                            <div class="form-group col-12 col-md-3">
                                <label for="city_id">{{ trans('keywords.City') }}</label>
                                @php
                                    $selectedCity = null;
                                @endphp
                                <select name="city_id" class="form-control city_id" id="city_id">
                                    <option value="" selected>
                                        {{ trans('keywords.all') }}</option>
                                    @foreach ($cities as $city)
                                        @php
                                            request('city_id') == $city->id ? ($selectedCity = $city) : null;
                                        @endphp
                                        <option @if (request('city_id') == $city->id) selected @endif value="{{ $city->id }}">
                                            {{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-3">
                                <label for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}</label>
                                <select name="neighbourhood_id" class="form-control neighbourhood_id" id="neighbourhood_id">
                                    <option id="all" value="" selected>
                                        {{ trans('keywords.all') }}</option>
                                    @if ($selectedCity)
                                        @foreach ($selectedCity->neighbourhoods as $neighbourhood)
                                            <option @if ($neighbourhood->id == request('neighbourhood_id')) selected @endif
                                                value="{{ $neighbourhood->id }}">
                                                {{ $neighbourhood->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('neighbourhood_id')
                                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">{{ trans('keywords.search') }}</button>
                            </div>
                        </form>
                        <br>
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
                                    <th scope="col">{{ trans('keywords.type2') }}</th>
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
                                        <td class="text-black">{{ trans('keywords.' . $landOffer->commercial_or_housing) }}</td>
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
                                        <td class="text-black">{{ trans('keywords.' . $landOffer->type2) }}</td>
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
    <br><br><br>
@endsection

@push('scripts')
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

                $.ajax({
                    type: "get",
                    url: "/api/cities/" + this.value + "/neighbourhoods",
                    success: function(response) {
                        neighbourhood.find(":not(#all)").remove();
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
