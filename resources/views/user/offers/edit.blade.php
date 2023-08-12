@extends('layouts.user.main')

@section('content')
    <br><br><br><br><br><br>
    <div class="container">
        <form method="POST" action="{{ route('user.land-offers.update', $landOffer->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1 class="text-center">
                {{ trans('keywords.Edit') }}
            </h1>

            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="city_id{{ $landOffer->id }}">{{ trans('keywords.City') }}</label>
                    <select required name="city_id" class="form-control city_id" id="city_id{{ $landOffer->id }}">
                        <option value="" disabled selected>
                            {{ trans('keywords.Choose') }}
                        </option>
                        @foreach ($cities as $city)
                            <option @if ($landOffer->city->id == $city->id) selected @endif value="{{ $city->id }}">
                                {{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('city_id')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="neighbourhood_id{{ $landOffer->id }}">{{ trans('keywords.Neighbourhood') }}</label>
                    <select required name="neighbourhood_id" class="form-control neighbourhood_id"
                        id="neighbourhood_id{{ $landOffer->id }}">
                        @foreach ($landOffer->city->neighbourhoods as $neighbourhood)
                            <option @if ($neighbourhood->id == $landOffer->neighbourhood_id) selected @endif value="{{ $neighbourhood->id }}">
                                {{ $neighbourhood->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('neighbourhood_id')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label
                        for="commercial_or_housing{{ $landOffer->id }}">{{ trans('keywords.estate classification') }}</label>
                    <select name="commercial_or_housing" class="form-control"
                        id="commercial_or_housing{{ $landOffer->id }}">
                        <option @if ($landOffer->commercial_or_housing == 'commercial') selected @endif value="commercial">
                            {{ trans('keywords.commercial') }}
                        </option>
                        <option @if ($landOffer->commercial_or_housing == 'housing') selected @endif value="housing">
                            {{ trans('keywords.housing') }}
                        </option>
                    </select>
                    @error('commercial_or_housing')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="is_commercial{{ $landOffer->id }}">{{ trans('keywords.Is Commercial') }}</label>
                        <div class="form-check form-check-inline">
                            <input @if ($landOffer->commercial_or_housing != 'housing') disabled @endif
                                @if ($landOffer->is_commercial == '0') checked @endif type="radio"
                                class="form-check-input mx-1" name="is_commercial"
                                id="is_commercial_no{{ $landOffer->id }}" value="0">
                            <label class="form-check-label" for="is_commercial_no{{ $landOffer->id }}">
                                {{ trans('keywords.No') }}
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input @if ($landOffer->commercial_or_housing != 'housing') disabled @endif
                                @if ($landOffer->is_commercial == '1') checked @endif type="radio"
                                class="form-check-input mx-1" name="is_commercial"
                                id="is_commercial_yes{{ $landOffer->id }}" value="1">
                            <label class="form-check-label" for="is_commercial_yes{{ $landOffer->id }}">
                                {{ trans('keywords.Yes') }}
                            </label>
                        </div>
                        @error('is_commercial')
                            <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12 col-md-6 my-md-5">
                    {{-- <label for="type2{{ $landOffer->id }}">{{ trans('keywords.Is Piece Or Block') }}:</label> --}}
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input mx-1" name="type2"
                            @if ($landOffer->type2 == 'piece') checked @endif id="type2_piece{{ $landOffer->id }}"
                            value="piece">
                        <label class="form-check-label" for="type2_piece{{ $landOffer->id }}">
                            {{ trans('keywords.Piece') }}
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input mx-1" name="type2"
                            @if ($landOffer->type2 == 'block') checked @endif id="type2_block{{ $landOffer->id }}"
                            value="block">
                        <label class="form-check-label" for="type2_block{{ $landOffer->id }}">
                            {{ trans('keywords.Block') }}
                        </label>
                    </div>
                    @error('type2')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="type3{{ $landOffer->id }}">{{ trans('keywords.corner or one street') }}</label>
                    <select @if ($landOffer->type2 != 'piece') disabled @endif name="type3" class="form-control"
                        id="type3{{ $landOffer->id }}">
                        <option @if ($landOffer->type3 == 'corner') selected @endif value="corner">
                            {{ trans('keywords.corner') }}
                        </option>
                        <option @if ($landOffer->type3 == 'one_street') selected @endif value="one_street">
                            {{ trans('keywords.one_street') }}
                        </option>
                        <option @if ($landOffer->type3 == 'block_header') selected @endif value="block_header">
                            {{ trans('keywords.block_header') }}
                        </option>
                    </select>
                    @error('type3')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="streets_count{{ $landOffer->id }}">{{ trans('keywords.streets count') }}</label>
                    <input name="streets_count" value="{{ $landOffer->streets_count }}" type="text" class="form-control"
                        id="streets_count{{ $landOffer->id }}">
                    @error('streets_count')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="schema_number{{ $landOffer->id }}">{{ trans('keywords.schema number') }}</label>
                    <input name="schema_number" value="{{ $landOffer->schema_number }}" type="text" class="form-control"
                        id="schema_number{{ $landOffer->id }}">
                    @error('schema_number')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="street_name{{ $landOffer->id }}">{{ trans('keywords.Street Name') }}</label>
                    <input name="street_name" value="{{ $landOffer->street_name }}" type="text" class="form-control"
                        id="street_name{{ $landOffer->id }}">
                    @error('street_name')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="direction{{ $landOffer->id }}">{{ trans('keywords.Directions') }}</label>
                    <input name="direction" value="{{ $landOffer->direction }}" type="text" class="form-control"
                        id="direction{{ $landOffer->id }}">
                    @error('direction')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="space{{ $landOffer->id }}">{{ trans('keywords.Space') }}</label>
                    <input name="space" value="{{ $landOffer->space }}" type="text" class="form-control"
                        id="space{{ $landOffer->id }}">
                    @error('space')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="street_height{{ $landOffer->id }}">{{ trans('keywords.Height On Street') }}</label>
                    <input name="street_height" value="{{ $landOffer->street_height }}" type="text"
                        class="form-control" id="street_height{{ $landOffer->id }}">
                    @error('street_height')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="dept{{ $landOffer->id }}">{{ trans('keywords.Dept') }}</label>
                    <input name="dept" value="{{ $landOffer->dept }}" type="text" class="form-control"
                        id="dept{{ $landOffer->id }}">
                    @error('dept')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="street_width{{ $landOffer->id }}">{{ trans('keywords.Street Width') }}</label>
                    <input name="street_width" value="{{ $landOffer->street_width }}" type="text"
                        class="form-control" id="street_width{{ $landOffer->id }}">
                    @error('street_width')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="land_number{{ $landOffer->id }}">{{ trans('keywords.Land Number') }}</label>
                    <input name="land_number" value="{{ $landOffer->land_number }}" type="text" class="form-control"
                        id="land_number{{ $landOffer->id }}">
                    @error('land_number')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="instrument_number{{ $landOffer->id }}">{{ trans('keywords.Instrument Number') }}</label>
                    <input name="instrument_number" value="{{ $landOffer->instrument_number }}" type="number"
                        class="form-control" id="instrument_number{{ $landOffer->id }}">
                    @error('instrument_number')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="operation_type{{ $landOffer->id }}">{{ trans('keywords.Operation Type') }}</label>
                    <select name="operation_type" class="form-control" id="operation_type{{ $landOffer->id }}">
                        <option @if ($landOffer->operation_type == 'sell') selected @endif value="sell">
                            {{ trans('keywords.Sell') }}
                        </option>
                        <option @if ($landOffer->operation_type == 'rent') selected @endif value="rent">
                            {{ trans('keywords.Rent') }}
                        </option>
                    </select>
                    @error('operation_type')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="rent_period{{ $landOffer->id }}">{{ trans('keywords.Rent Period') }}</label>
                    <input @if ($landOffer->operation_type != 'rent') disabled @endif name="rent_period"
                        value="{{ $landOffer->rent_period }}" type="text" class="form-control"
                        id="rent_period{{ $landOffer->id }}">
                    @error('rent_period')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="price{{ $landOffer->id }}">{{ trans('keywords.Price') }}</label>
                    <input name="price" value="{{ $landOffer->price }}" type="number" class="form-control"
                        id="price{{ $landOffer->id }}">
                    @error('price')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="contact_info{{ $landOffer->id }}">{{ trans('keywords.Contact Info') }}</label>
                    <input name="contact_info" value="{{ $landOffer->contact_info }}" type="text"
                        class="form-control" id="contact_info{{ $landOffer->id }}">
                    @error('contact_info')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="adjective{{ $landOffer->id }}">{{ trans('keywords.Adjective') }}</label>
                    <input readonly name="adjective" value=""
                        placeholder="{{ trans('keywords.direct owner (I have half the quest)') }}" type="text"
                        class="form-control" id="adjective{{ $landOffer->id }}">
                    @error('adjective')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-12">
                    <label for="land_type_ids{{ $landOffer->id }}">{{ trans('keywords.Estate Type') }}:</label>
                    <br>
                    @php
                        $landOfferTypes = $landOffer
                            ->landTypes()
                            ->pluck('type_id')
                            ->toArray();
                    @endphp
                    @foreach ($landTypes as $landType)
                        <div class="form-check form-check-inline">
                            <input @if ($landOfferTypes && in_array($landType->id, $landOfferTypes)) checked @endif type="checkbox"
                                class="form-check-input mx-1" name="land_type_ids[]" id="land-type{{ $landType->id }}"
                                value="{{ $landType->id }}">
                            <label class="form-check-label" for="land-type{{ $landType->id }}">
                                {{ $landType->name }}
                            </label>
                        </div>
                    @endforeach

                    @error('land_type_ids')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="image{{ $landOffer->id }}">{{ trans('keywords.Estate Image') }}</label>
                    <input name="image" type="file" class="form-control" id="image{{ $landOffer->id }}">
                    @error('image')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="image{{ $landOffer->id }}">{{ trans('keywords.Estate Image') }}</label>
                    @if ($landOffer->image)
                        <div>
                            <img style="width: 200px;height:200px" src="{{ asset('storage/' . $landOffer->image) }}"
                                alt="">
                        </div>
                    @else
                        <p class="text-black">
                            {{ trans('keywords.None') }}
                        </p>
                    @endif


                </div>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-secondary mx-1">{{ trans('keywords.Cancel') }}</a>
            <button type="submit" class="btn btn-primary">{{ trans('keywords.Edit') }}</button>

            <style>
                a.btn {
                    border-radius: 10px;
                }
            </style>
        </form>
    </div>
    <br><br><br><br><br><br>
@endsection

@push('scripts')
    <script>
        function getNeighbourhoods() {

            let city = $(".city_id");
            city.on("change", function() {
                let neighbourhood = $(this).parent().parent().find(".neighbourhood_id");

                $.ajax({
                    type: "get",
                    url: "/api/cities/" + this.value + "/neighbourhoods",
                    success: function(response) {
                        neighbourhood.empty();
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

        })
    </script>
@endpush
