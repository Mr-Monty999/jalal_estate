@extends('layouts.user.main')

@section('content')
    <br><br><br>
    @can('view_offers')
        <div class="bg-light site-section bg-white my-4" id="offers">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center text-black">{{ trans('keywords.Estate Offers') }}</h1>
                        {{-- begin Modal --}}
                        <div class="my-1">
                            <!-- Button trigger modal -->
                            <button id="open-modal-button" type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#exampleModal">
                                {{ trans('keywords.Add Offer') }}
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('user.land-offers.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ trans('keywords.New Offer') }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="city_id">{{ trans('keywords.City') }}</label>
                                                        <select required onchange="getNeighbourhoods()" name="city_id"
                                                            class="form-control" id="city_id">
                                                            <option value="" disabled selected>
                                                                {{ trans('keywords.Choose') }}</option>
                                                            @foreach ($cities as $city)
                                                                <option @if (old('city_id') == $city->id) selected @endif
                                                                    value="{{ $city->id }}">{{ $city->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('city_id')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}</label>
                                                        <select required name="neighbourhood_id" class="form-control"
                                                            id="neighbourhood_id">
                                                        </select>
                                                        @error('neighbourhood_id')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="street_name">{{ trans('keywords.Street Name') }}</label>
                                                        <input name="street_name" value="{{ old('street_name') }}"
                                                            type="text" class="form-control" id="street_name">
                                                        @error('street_name')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="direction">{{ trans('keywords.Directions') }}</label>
                                                        <input name="direction" value="{{ old('direction') }}" type="text"
                                                            class="form-control" id="direction">
                                                        @error('direction')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="space">{{ trans('keywords.Space') }}</label>
                                                        <input name="space" value="{{ old('space') }}" type="text"
                                                            class="form-control" id="space">
                                                        @error('space')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label
                                                            for="is_commercial">{{ trans('keywords.Is Commercial') }}</label>
                                                        <div class="form-check form-check-inline">
                                                            <input @if (old('is_commercial') == '0') checked @endif
                                                                type="radio" class="form-check-input mx-1"
                                                                name="is_commercial" id="is_commercial_no" value="0">
                                                            <label class="form-check-label" for="is_commercial_no">
                                                                {{ trans('keywords.No') }}
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input @if (old('is_commercial') == '1') checked @endif
                                                                type="radio" class="form-check-input mx-1"
                                                                name="is_commercial" id="is_commercial_yes" value="1">
                                                            <label class="form-check-label" for="is_commercial_yes">
                                                                {{ trans('keywords.Yes') }}
                                                            </label>
                                                        </div>
                                                        @error('is_commercial')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="street_height">{{ trans('keywords.Height On Street') }}</label>
                                                        <input name="street_height" value="{{ old('street_height') }}"
                                                            type="text" class="form-control" id="street_height">
                                                        @error('street_height')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="dept">{{ trans('keywords.Dept') }}</label>
                                                        <input name="dept" value="{{ old('dept') }}" type="text"
                                                            class="form-control" id="dept">
                                                        @error('dept')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="street_width">{{ trans('keywords.Street Width') }}</label>
                                                        <input name="street_width" value="{{ old('street_width') }}"
                                                            type="text" class="form-control" id="street_width">
                                                        @error('street_width')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="land_number">{{ trans('keywords.Land Number') }}</label>
                                                        <input name="land_number" value="{{ old('land_number') }}"
                                                            type="text" class="form-control" id="land_number">
                                                        @error('land_number')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="instrument_number">{{ trans('keywords.Instrument Number') }}</label>
                                                        <input name="instrument_number"
                                                            value="{{ old('instrument_number') }}" type="number"
                                                            class="form-control" id="instrument_number">
                                                        @error('instrument_number')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="operation_type">{{ trans('keywords.Operation Type') }}</label>
                                                        <select name="operation_type" class="form-control"
                                                            id="operation_type">
                                                            <option @if (old('operation_type') == 'sell') selected @endif
                                                                value="sell">{{ trans('keywords.Sell') }}</option>
                                                            <option @if (old('operation_type') == 'rent') selected @endif
                                                                value="rent">{{ trans('keywords.Rent') }}</option>
                                                        </select>
                                                        @error('operation_type')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="rent_period">{{ trans('keywords.Rent Period') }}</label>
                                                        <input @if (old('operation_type') != 'rent') disabled @endif
                                                            name="rent_period" value="{{ old('rent_period') }}"
                                                            type="text" class="form-control" id="rent_period">
                                                        @error('rent_period')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="price">{{ trans('keywords.Price') }}</label>
                                                        <input name="price" value="{{ old('price') }}" type="number"
                                                            class="form-control" id="price">
                                                        @error('price')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="adjective">{{ trans('keywords.Adjective') }}</label>
                                                        <input name="adjective" value="{{ old('adjective') }}"
                                                            type="text" class="form-control" id="adjective">
                                                        @error('adjective')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="contact_info">{{ trans('keywords.Contact Info') }}</label>
                                                        <input name="contact_info" value="{{ old('contact_info') }}"
                                                            type="text" class="form-control" id="contact_info">
                                                        @error('contact_info')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label
                                                            for="type2">{{ trans('keywords.Is Piece Or Block') }}:</label>
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio" class="form-check-input mx-1"
                                                                name="type2" @if (old('type2') == 'piece') checked @endif
                                                                id="type2_piece" value="piece">
                                                            <label class="form-check-label" for="type2_piece">
                                                                {{ trans('keywords.Piece') }}
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio" class="form-check-input mx-1"
                                                                name="type2" @if (old('type2') == 'block') checked @endif
                                                                id="type2_block" value="block">
                                                            <label class="form-check-label" for="type2_block">
                                                                {{ trans('keywords.Block') }}
                                                            </label>
                                                        </div>
                                                        @error('type2')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label
                                                            for="land_type_ids">{{ trans('keywords.Estate Type') }}:</label>
                                                        <br>
                                                        @foreach ($landTypes as $landType)
                                                            <div class="form-check form-check-inline">
                                                                <input @if (old('land_type_ids') && in_array($landType->id, old('land_type_ids'))) checked @endif
                                                                    type="checkbox" class="form-check-input mx-1"
                                                                    name="land_type_ids[]" id="land-type{{ $landType->id }}"
                                                                    value="{{ $landType->id }}">
                                                                <label class="form-check-label"
                                                                    for="land-type{{ $landType->id }}">
                                                                    {{ $landType->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                        @error('land_type_ids')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="image">{{ trans('keywords.Estate Image') }}</label>
                                                        <input name="image" type="file" class="form-control"
                                                            id="image">
                                                        @error('image')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary mx-1"
                                                    data-dismiss="modal">{{ trans('keywords.Cancel') }}</button>
                                                <button type="submit"
                                                    class="btn btn-primary">{{ trans('keywords.Add') }}</button>
                                            </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        {{-- End Modal  --}}

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
                                                <button class="btn btn-success mx-1">{{ trans('keywords.Accept') }}</button>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#viewOfferModal{{ $landOffer->id }}">
                                                    {{ trans('keywords.View') }}
                                                </button>
                                                <!-- View Offer Modal -->
                                                <div class="modal fade" id="viewOfferModal{{ $landOffer->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="viewOfferModal{{ $landOffer->id }}Label"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="viewOfferModal{{ $landOffer->id }}Label">
                                                                    {{ trans('keywords.New Offer') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="city_id">{{ trans('keywords.City') }}</label>
                                                                        <p class="text-black">{{ $landOffer->city->name }}</p>
                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}</label>
                                                                        <p class="text-black">
                                                                            {{ $landOffer->neighbourhood->name }}</p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="street_name">{{ trans('keywords.Street Name') }}</label>
                                                                        <p class="text-black">{{ $landOffer->street_name }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="direction">{{ trans('keywords.Directions') }}</label>
                                                                        <p class="text-black">{{ $landOffer->direction }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="space">{{ trans('keywords.Space') }}</label>
                                                                        <p class="text-black">{{ $landOffer->space }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="is_commercial">{{ trans('keywords.Is Commercial') }}</label>
                                                                        <p class="text-black">
                                                                            {{ $landOffer->is_commercial == 1 ? trans('keywords.Yes') : trans('keywords.No') }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="street_height">{{ trans('keywords.Height On Street') }}</label>
                                                                        <p class="text-black">{{ $landOffer->street_height }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="dept">{{ trans('keywords.Dept') }}</label>
                                                                        <p class="text-black">{{ $landOffer->dept }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="street_width">{{ trans('keywords.Street Width') }}</label>
                                                                        <p class="text-black">{{ $landOffer->street_width }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="land_number">{{ trans('keywords.Land Number') }}</label>
                                                                        <p class="text-black">{{ $landOffer->land_number }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="instrument_number">{{ trans('keywords.Instrument Number') }}</label>
                                                                        <p class="text-black">
                                                                            {{ $landOffer->instrument_number }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="operation_type">{{ trans('keywords.Operation Type') }}</label>
                                                                        <p class="text-black">
                                                                            {{ trans('keywords.' . ucfirst($landOffer->operation_type)) }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="rent_period">{{ trans('keywords.Rent Period') }}</label>
                                                                        <p class="text-black">{{ $landOffer->rent_period }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="price">{{ trans('keywords.Price') }}</label>
                                                                        <p class="text-black">
                                                                            {{ number_format($landOffer->price) }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="adjective">{{ trans('keywords.Adjective') }}</label>
                                                                        <p class="text-black">{{ $landOffer->adjective }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12 col-md-6">
                                                                        <label
                                                                            for="contact_info">{{ trans('keywords.Contact Info') }}</label>
                                                                        <p class="text-black">{{ $landOffer->contact_info }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <label
                                                                            for="type2">{{ trans('keywords.Is Piece Or Block') }}:</label>
                                                                        <p class="text-black">
                                                                            {{ trans('keywords.' . $landOffer->type2) }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <label
                                                                            for="land_type_ids">{{ trans('keywords.Estate Type') }}:</label>
                                                                        <br>
                                                                        @foreach ($landOffer->landTypes as $landType)
                                                                            <div class="form-check form-check-inline">
                                                                                <input disabled checked type="checkbox"
                                                                                    class="form-check-input mx-1"
                                                                                    name="land_type_ids[]"
                                                                                    id="land-type{{ $landType->id }}"
                                                                                    value="{{ $landType->id }}">
                                                                                <label class="form-check-label"
                                                                                    for="land-type{{ $landType->id }}">
                                                                                    {{ $landType->name }}
                                                                                </label>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <label
                                                                            for="image">{{ trans('keywords.Estate Image') }}</label>
                                                                        @if ($landOffer->image)
                                                                            <div>
                                                                                <img style="width: 200px;height:200px"
                                                                                    src="{{ asset('storage/' . $landOffer->image) }}"
                                                                                    alt="">
                                                                            </div>
                                                                        @else
                                                                            <p class="text-black">
                                                                                {{ trans('keywords.None') }}
                                                                            </p>
                                                                        @endif


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary mx-1"
                                                                    data-dismiss="modal">{{ trans('keywords.Close') }}</button>
                                                                {{-- <button type="submit"
                                                                    class="btn btn-primary">{{ trans('keywords.Add') }}</button> --}}
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End View Offer Modal-->


                                                @if ($landOffer->user_id == auth()->id())
                                                    <button
                                                        class="btn btn-danger mx-1">{{ trans('keywords.Delete') }}</button>
                                                    <button
                                                        class="btn btn-warning mx-1">{{ trans('keywords.Edit') }}</button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
            $(".modal").modal("show");
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
        function toggleInputsStatus() {
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


        }

        toggleInputsStatus();
    </script>
@endpush
