<div class="mx-1">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewOfferModal{{ $estateOffer->id }}">
        {{ trans('keywords.View') }}
    </button>
    <!-- View Offer Modal -->
    <div class="modal fade" id="viewOfferModal{{ $estateOffer->id }}" tabindex="-1" role="dialog"
        aria-labelledby="viewOfferModal{{ $estateOffer->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOfferModal{{ $estateOffer->id }}Label">
                        {{ trans('keywords.View') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="city_id">{{ trans('keywords.City') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->city->name }}
                            </p>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->neighbourhood->name }}</p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="commercial_or_housing">{{ trans('keywords.estate classification') }}:</label>
                            <br>
                            <div style="border-radius: 10px;padding:10px;background-color:{{ $estateOffer->estateClassification->color }}"
                                class="btn text-white">
                                {{ $estateOffer->estateClassification->name }}
                            </div>

                        </div>
                        @if ($estateOffer->estateClassification->active_setting_1 == 1)
                            <div class="form-group col-12 col-md-6">
                                <label for="is_commercial">{{ trans('keywords.Is Commercial') }}</label>
                                <p class="text-black">
                                    {{ $estateOffer->is_commercial == 1 ? trans('keywords.Yes') : trans('keywords.No') }}
                                </p>
                            </div>
                        @endif
                        @if ($estateOffer->type3)
                            <div class="form-group col-12 col-md-6">
                                <label for="type3">{{ trans('keywords.corner or one street') }}</label>
                                <p class="text-black">
                                    {{ trans('keywords.' . $estateOffer->type3) }}
                                </p>
                            </div>
                        @endif
                        <div class="form-group col-12 col-md-6">
                            <label for="streets_count">{{ trans('keywords.streets count') }}</label>
                            <p class="text-black">
                                {{ number_format($estateOffer->streets_count) }}
                            </p>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="schema_number">{{ trans('keywords.schema number') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->schema_number }}
                            </p>

                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="street_name">{{ trans('keywords.Street Name') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->street_name }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="direction">{{ trans('keywords.Directions') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->direction }}
                            </p>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="space">{{ trans('keywords.Space') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->space }}
                            </p>

                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="street_height">{{ trans('keywords.Height On Street') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->street_height }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="dept">{{ trans('keywords.Dept') }}</label>
                            <p class="text-black">{{ $estateOffer->dept }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="street_width">{{ trans('keywords.Street Width') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->street_width }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="land_number">{{ trans('keywords.Land Number') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->land_number }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="instrument_number">{{ trans('keywords.Instrument Number') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->instrument_number }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="operation_type">{{ trans('keywords.Operation Type') }}</label>
                            <p class="text-black">
                                {{ trans('keywords.' . ucfirst($estateOffer->operation_type)) }}
                            </p>

                        </div>
                        @if ($estateOffer->operation_type == 'rent')
                            <div class="form-group col-12 col-md-6">
                                <label for="rent_period">{{ trans('keywords.Rent Period') }}</label>
                                <p class="text-black">
                                    {{ $estateOffer->rent_period }}
                                </p>
                            </div>
                        @endif

                        <div class="form-group col-12 col-md-6">
                            <label for="price">{{ trans('keywords.Price') }}</label>
                            <p class="text-black">
                                {{ number_format($estateOffer->price) }}
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="adjective">{{ trans('keywords.Adjective') }}</label>
                            <p class="text-black">
                                @if ($estateOffer->adjective == 'owner')
                                    {{ trans('keywords.iam the owner (you have all the quest)') }}
                                @else
                                    {{ trans('keywords.direct owner (I have half the quest)') }}
                                @endif
                            </p>

                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="contact_info">{{ trans('keywords.Contact Info') }}</label>
                            <p class="text-black">
                                {{ $estateOffer->contact_info }}
                            </p>

                        </div>
                        <div class="form-group col-12">
                            <label for="type2">{{ trans('keywords.Is Piece Or Block') }}:</label>
                            <p class="text-black">
                                {{ trans('keywords.' . $estateOffer->type2) }}
                            </p>

                        </div>
                        <div class="form-group col-12">
                            <label for="land_type_ids">{{ trans('keywords.Estate Type') }}:</label>
                            <br>
                            @foreach ($estateOffer->landTypes as $landType)
                                <div class="form-check form-check-inline">
                                    <input disabled checked type="checkbox" class="form-check-input mx-1"
                                        name="land_type_ids[]" id="land-type{{ $landType->id }}"
                                        value="{{ $landType->id }}">
                                    <label class="form-check-label" for="land-type{{ $landType->id }}">
                                        {{ $landType->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group col-12">
                            <label for="image">{{ trans('keywords.Estate Image') }}</label>
                            @if ($estateOffer->image)
                                <div>
                                    <img style="width: 200px;height:200px"
                                        src="{{ asset('storage/' . $estateOffer->image) }}" alt="">
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
</div>
