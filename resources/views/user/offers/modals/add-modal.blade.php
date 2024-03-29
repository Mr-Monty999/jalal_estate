                        {{-- begin Modal --}}
                        @can('create_offers')


                            <div class="my-1">
                                <!-- Button trigger modal -->
                                <button id="open-modal-button" type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#addOfferModal">
                                    {{ trans('keywords.Add Offer') }}
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addOfferModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addOfferModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="{{ route('user.land-offers.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addOfferModalLabel">
                                                        {{ trans('keywords.New Offer') }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        @php
                                                            $selectedCity = null;
                                                        @endphp
                                                        <div class="form-group col-12 col-md-6">
                                                            <label for="city_id">{{ trans('keywords.City') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <select required name="city_id" class="form-control city_id"
                                                                id="city_id">
                                                                <option value="" disabled selected>
                                                                    {{ trans('keywords.Choose') }}</option>
                                                                @foreach ($cities as $city)
                                                                    @php
                                                                        old('city_id') == $city->id ? ($selectedCity = $city) : null;
                                                                    @endphp
                                                                    <option
                                                                        @if (old('city_id') == $city->id) selected @endif
                                                                        value="{{ $city->id }}">{{ $city->name }}
                                                                    </option>
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
                                                                for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <select required name="neighbourhood_id"
                                                                class="form-control neighbourhood_id" id="neighbourhood_id">
                                                                @if ($selectedCity)
                                                                    @foreach ($selectedCity->neighbourhoods as $neighbourhood)
                                                                        <option
                                                                            @if ($neighbourhood->id == old('neighbourhood_id')) selected @endif
                                                                            value="{{ $neighbourhood->id }}">
                                                                            {{ $neighbourhood->name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>

                                                            @error('neighbourhood_id')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="estate_classification_id">{{ trans('keywords.estate classification') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <select name="estate_classification_id" class="form-control"
                                                                id="estate_classification_id">
                                                                @foreach ($estateClassifications as $estateClassification)
                                                                    <option
                                                                        @if (old('estate_classification_id') == $estateClassification->id) selected @endif
                                                                        class="@if ($estateClassification->active_setting_1 == 1) active-setting-1 @endif"
                                                                        value="{{ $estateClassification->id }}">
                                                                        {{ $estateClassification->name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            @error('estate_classification_id')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror

                                                            <div class="form-group">
                                                                @php
                                                                    $estateClassification = App\Models\EstateClassification::findOrNew(old('estate_classification_id'));
                                                                @endphp
                                                                <label
                                                                    for="is_commercial">{{ trans('keywords.Is Commercial') }}</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input @if ($estateClassification->active_setting_1 == false) disabled @endif
                                                                        @if (old('is_commercial') == '0') checked @endif
                                                                        type="radio" class="form-check-input mx-1"
                                                                        name="is_commercial" id="is_commercial_no"
                                                                        value="0">
                                                                    <label class="form-check-label" for="is_commercial_no">
                                                                        {{ trans('keywords.No') }}
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input @if ($estateClassification->active_setting_1 == false) disabled @endif
                                                                        @if (old('is_commercial') == '1') checked @endif
                                                                        type="radio" class="form-check-input mx-1"
                                                                        name="is_commercial" id="is_commercial_yes"
                                                                        value="1">
                                                                    <label class="form-check-label" for="is_commercial_yes">
                                                                        {{ trans('keywords.Yes') }}
                                                                    </label>
                                                                </div>
                                                                @error('is_commercial')
                                                                    <div style="border-radius: 30px"
                                                                        class="alert alert-danger text-center mt-1">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-12 col-md-6 my-md-5">
                                                            {{-- <label
                                                                for="type2">{{ trans('keywords.Is Piece Or Block') }}:</label> --}}
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" class="form-check-input mx-1"
                                                                    name="type2"
                                                                    @if (old('type2') == 'piece') checked @endif
                                                                    id="piece" value="piece">
                                                                <label class="form-check-label" for="piece">
                                                                    {{ trans('keywords.Piece') }}
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" class="form-check-input mx-1"
                                                                    name="type2"
                                                                    @if (old('type2') == 'block') checked @endif
                                                                    id="block" value="block">
                                                                <label class="form-check-label" for="block">
                                                                    {{ trans('keywords.Block') }}
                                                                </label>
                                                            </div>
                                                            @error('type2')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="type3">{{ trans('keywords.corner or one street') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <select @if (old('type2') != 'piece') disabled @endif
                                                                name="type3" class="form-control" id="type3">
                                                                <option @if (old('type3') == 'corner') selected @endif
                                                                    value="corner">{{ trans('keywords.corner') }}
                                                                </option>
                                                                <option @if (old('type3') == 'one_street') selected @endif
                                                                    value="one_street">{{ trans('keywords.one street') }}
                                                                </option>
                                                                <option @if (old('type3') == 'block_header') selected @endif
                                                                    value="block_header">
                                                                    {{ trans('keywords.block header') }}
                                                                </option>
                                                            </select>
                                                            @error('type3')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="streets_count">{{ trans('keywords.streets count') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="streets_count"
                                                                value="{{ old('streets_count') }}" type="number"
                                                                class="form-control" id="streets_count">
                                                            @error('streets_count')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="schema_number">{{ trans('keywords.schema number') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="schema_number"
                                                                value="{{ old('schema_number') }}" type="number"
                                                                class="form-control" id="schema_number">
                                                            @error('schema_number')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="street_name">{{ trans('keywords.Street Name') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="street_name" value="{{ old('street_name') }}"
                                                                type="text" class="form-control" id="street_name">
                                                            @error('street_name')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label for="direction">{{ trans('keywords.Directions') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="direction" value="{{ old('direction') }}"
                                                                type="text" class="form-control" id="direction">
                                                            @error('direction')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label for="space">{{ trans('keywords.Space') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="space" value="{{ old('space') }}"
                                                                type="text" class="form-control" id="space">
                                                            @error('space')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="street_height">{{ trans('keywords.Height On Street') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="street_height"
                                                                value="{{ old('street_height') }}" type="text"
                                                                class="form-control" id="street_height">
                                                            @error('street_height')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label for="dept">{{ trans('keywords.Dept') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="dept" value="{{ old('dept') }}"
                                                                type="text" class="form-control" id="dept">
                                                            @error('dept')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="street_width">{{ trans('keywords.Street Width') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="street_width" value="{{ old('street_width') }}"
                                                                type="text" class="form-control" id="street_width">
                                                            @error('street_width')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="land_number">{{ trans('keywords.Land Number') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="land_number" value="{{ old('land_number') }}"
                                                                type="number" class="form-control" id="land_number">
                                                            @error('land_number')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="instrument_number">{{ trans('keywords.Instrument Number') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="instrument_number"
                                                                value="{{ old('instrument_number') }}" type="number"
                                                                class="form-control" id="instrument_number">
                                                            @error('instrument_number')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="operation_type">{{ trans('keywords.Operation Type') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <select name="operation_type" class="form-control"
                                                                id="operation_type">
                                                                <option @if (old('operation_type') == 'sell') selected @endif
                                                                    value="sell">{{ trans('keywords.Sell') }}</option>
                                                                <option @if (old('operation_type') == 'rent') selected @endif
                                                                    value="rent">{{ trans('keywords.Rent') }}</option>
                                                            </select>
                                                            @error('operation_type')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="rent_period">{{ trans('keywords.Rent Period') }}</label>
                                                            <input @if (old('operation_type') != 'rent') disabled @endif
                                                                name="rent_period" value="{{ old('rent_period') }}"
                                                                type="text" class="form-control" id="rent_period">
                                                            @error('rent_period')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label for="price">{{ trans('keywords.Price') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="price" value="{{ old('price') }}"
                                                                type="number" class="form-control" id="price">
                                                            @error('price')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12 col-md-6">
                                                            <label
                                                                for="contact_info">{{ trans('keywords.Contact Info') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span></label>
                                                            <input name="contact_info" value="{{ old('contact_info') }}"
                                                                type="text" class="form-control" id="contact_info">
                                                            @error('contact_info')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label
                                                                for="adjective">{{ trans('keywords.Adjective') }}</label>
                                                            {{-- <input readonly
                                                                placeholder="{{ trans('keywords.direct owner (I have half the quest)') }}"
                                                                name="adjective" value="" type="text"
                                                                class="form-control" id="adjective"> --}}
                                                            <select name="adjective" id="adjective" class="form-control">
                                                                <option value="direct_owner">
                                                                    {{ trans('keywords.direct owner (I have half the quest)') }}
                                                                </option>
                                                                <option value="owner">
                                                                    {{ trans('keywords.iam the owner (you have all the quest)') }}
                                                                </option>
                                                            </select>
                                                            @error('adjective')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group col-12">
                                                            <label
                                                                for="land_type_ids">{{ trans('keywords.Estate Type') }}<span
                                                                    class="text-danger"
                                                                    style="font-weight: bold">*</span>:</label>
                                                            <br>
                                                            @foreach ($landTypes as $landType)
                                                                <div class="form-check form-check-inline">
                                                                    <input
                                                                        @if (old('land_type_ids') && in_array($landType->id, old('land_type_ids'))) checked @endif
                                                                        type="checkbox" class="form-check-input mx-1"
                                                                        name="land_type_ids[]"
                                                                        id="land-type{{ $landType->id }}"
                                                                        value="{{ $landType->id }}">
                                                                    <label class="form-check-label"
                                                                        for="land-type{{ $landType->id }}">
                                                                        {{ $landType->name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach

                                                            @error('land_type_ids')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label
                                                                for="image">{{ trans('keywords.Estate Image') }}</label>
                                                            <input name="image" type="file" class="form-control"
                                                                id="image">
                                                            @error('image')
                                                                <div style="border-radius: 30px"
                                                                    class="alert alert-danger text-center mt-1">
                                                                    {{ $message }}
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
                        @endcan
