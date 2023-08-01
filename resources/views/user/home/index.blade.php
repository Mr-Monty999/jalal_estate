@extends('layouts.user.main')

@section('content')
    <br><br><br>
    @can('view_offers')
        <div class="bg-light site-section bg-white my-4" id="offers">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center text-black">{{ trans('keywords.Estate Offers') }}</h1>

                        @include('user.home.offers-modals.add-modal')

                        <table class="table table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{ trans('keywords.ID') }}</th>
                                    <th scope="col">{{ trans('keywords.City') }}</th>
                                    <th scope="col">{{ trans('keywords.Neighbourhood') }}</th>
                                    <th scope="col">{{ trans('keywords.Street') }}</th>
                                    <th scope="col">{{ trans('keywords.Operation Type') }}</th>
                                    <th scope="col">{{ trans('keywords.Type') }}</th>
                                    <th scope="col">{{ trans('keywords.Land Number') }}</th>
                                    <th scope="col">{{ trans('keywords.Price') }}</th>
                                    <th scope="col">{{ trans('keywords.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($landOffers as $index => $landOffer)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $landOffer->city->name }}</td>
                                        <td>{{ $landOffer->neighbourhood->name }}</td>
                                        <td>{{ $landOffer->street_name }}</td>
                                        <td>{{ trans('keywords.' . ucfirst($landOffer->operation_type)) }}</td>
                                        <td>{{ trans('keywords.' . ucfirst($landOffer->type2)) }}</td>
                                        <td>{{ $landOffer->land_number }}</td>
                                        <td>{{ number_format($landOffer->price) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @include('user.home.offers-modals.accept-modal')
                                                @include('user.home.offers-modals.view-modal')
                                                @include('user.home.offers-modals.edit-modal')
                                                @include('user.home.offers-modals.delete-modal')
                                            </div>
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

            let city = $("#city_id");
            let neighbourhood = $("#neighbourhood_id");
            $.ajax({
                type: "get",
                url: "/api/cities/" + city.val() + "/neighbourhoods",
                success: function(response) {
                    neighbourhood.empty();
                    let oldId = "{{ old('neighbourhood_id') }}";

                    for (const data of response) {

                        let val = "";
                        if (oldId == data.id)
                            val = "selected";

                        neighbourhood.append("<option " + val + " value='" + data.id + "'>" + data.name +
                            "</option>");
                    }

                }
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
        let rentPeriod = $("[name='rent_period']");
        operationType.on("change", function() {

            if (this.value == "rent") {

                rentPeriod.removeAttr("disabled");


            } else {

                rentPeriod.attr("disabled", "true");


            }

        });


        let isCommercial = $("[name='is_commercial']");
        let CommercialOrHousing = $("[name=commercial_or_housing]");
        CommercialOrHousing.on("change", function() {

            if (this.value == "housing") {

                isCommercial.removeAttr("disabled");


            } else {

                isCommercial.removeAttr("checked");
                isCommercial.attr("disabled", "true");


            }

        });

        // }

        // toggleInputsStatus();
    </script>
@endpush
