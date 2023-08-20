@extends('layouts.user.main')

@section('content')
    <br><br><br><br><br><br>
    <div class="container">
        <form method="POST" action="{{ route('user.auctions.store') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center">
                {{ trans('keywords.add auction') }}
            </h1>
            <br><br>

            <div class="row">
                @php
                    $selectedCity = null;
                @endphp
                <div class="form-group col-12 col-md-6">
                    <label for="name">{{ trans('keywords.name') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="name">
                    @error('name')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="price">{{ trans('keywords.price') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="price" value="{{ old('price') }}" type="number" class="form-control" id="price">
                    @error('price')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="instrument_number">{{ trans('keywords.Instrument Number') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="instrument_number" value="{{ old('instrument_number') }}" type="number"
                        class="form-control" id="instrument_number">
                    @error('instrument_number')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="city_id">{{ trans('keywords.City') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <select required name="city_id" class="form-control city_id" id="city_id">
                        <option value="" disabled selected>
                            {{ trans('keywords.Choose') }}</option>
                        @foreach ($cities as $city)
                            @php
                                old('city_id') == $city->id ? ($selectedCity = $city) : null;
                            @endphp
                            <option @if (old('city_id') == $city->id) selected @endif value="{{ $city->id }}">
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
                <div class="form-group col-12 col-md-6">
                    <label for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <select required name="neighbourhood_id" class="form-control neighbourhood_id" id="neighbourhood_id">
                        @if ($selectedCity)
                            @foreach ($selectedCity->neighbourhoods as $neighbourhood)
                                <option @if ($neighbourhood->id == old('neighbourhood_id')) selected @endif value="{{ $neighbourhood->id }}">
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
                <div class="form-group col-12 col-md-6">
                    <label for="street">{{ trans('keywords.street') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="street" value="{{ old('street') }}" type="text" class="form-control" id="street">
                    @error('street')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="space">{{ trans('keywords.Space') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="space" value="{{ old('space') }}" type="number" class="form-control" id="space">
                    @error('space')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <br><br>
                    <h1>{{ trans('keywords.the boundaries and lengths of the estate') }}</h1>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="north_border">{{ trans('keywords.north') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="north_border" value="{{ old('north_border') }}" type="text" class="form-control"
                        id="north_border">
                    @error('north_border')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="south_border">{{ trans('keywords.south') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="south_border" value="{{ old('south_border') }}" type="text" class="form-control"
                        id="south_border">
                    @error('south_border')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="east_border">{{ trans('keywords.east') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="east_border" value="{{ old('east_border') }}" type="text" class="form-control"
                        id="east_border">
                    @error('east_border')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="west_border">{{ trans('keywords.west') }}<span class="text-danger"
                            style="font-weight: bold">*</span></label>
                    <input name="west_border" value="{{ old('west_border') }}" type="text" class="form-control"
                        id="west_border">
                    @error('west_border')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                    <br><br>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="estate_classification_id">{{ trans('keywords.estate classification') }}<span
                            class="text-danger" style="font-weight: bold">*</span></label>
                    <select name="estate_classification_id" class="form-control" id="estate_classification_id">
                        @foreach ($estateClassifications as $estateClassification)
                            <option @if (old('estate_classification_id') == $estateClassification->id) selected @endif
                                class="@if ($estateClassification->active_setting_1 == 1) active-setting-1 @endif"
                                value="{{ $estateClassification->id }}">
                                {{ $estateClassification->name }}
                            </option>
                        @endforeach

                    </select>
                    @error('estate_classification_id')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group col-12 col-md-6">
                    <label for="land_type_id">{{ trans('keywords.Estate Type') }}<span class="text-danger"
                            style="font-weight: bold">*</span>:</label>
                    {{-- <input @if (old('land_type_id') && in_array($landType->id, old('land_type_id'))) checked @endif type="checkbox"
                            class="form-check-input mx-1" name="land_type_id" id="land-type{{ $landType->id }}"
                            value="{{ $landType->id }}">
                        <label class="form-check-label" for="land-type{{ $landType->id }}">
                            {{ $landType->name }}
                        </label> --}}
                    <select name="land_type_id" id="land_type_id" class="form-control">
                        {{-- <option value="" disabled>{{ trans('keywords.Choose') }}</option> --}}
                        @foreach ($landTypes as $landType)
                            <option @selected(old('land_type_id') == $landType->id) value="{{ $landType->id }}">
                                {{ $landType->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                @error('land_type_id')
                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group col-12 col-md-6">
                    <label for="features">{{ trans('keywords.features') }}</label>
                    <textarea rows="5" name="features" class="form-control" id="features">{!! old('features') !!}</textarea>
                    @error('features')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="description">{{ trans('keywords.description') }}</label>
                    <textarea rows="5" name="description" class="form-control" id="description">{!! old('description') !!}</textarea>
                    @error('description')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group col-12">
                    <label for="video">{{ trans('keywords.estate video') }}</label>
                    <input name="video" type="file" class="form-control" id="video">
                    @error('video')
                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mx-1">{{ trans('keywords.Cancel') }}</a>
                    <button type="submit" class="btn btn-primary">{{ trans('keywords.Add') }}</button>

                </div>

            </div>
        </form>
    </div>

    <style>
        a.btn {
            border-radius: 10px;
        }
    </style>
    <br><br><br><br><br><br>
@endsection

@push('scripts')
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
    </script>
@endpush
