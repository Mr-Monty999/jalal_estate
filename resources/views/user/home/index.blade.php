@extends('layouts.user.main')

@section('content')
    <br><br><br>
    @hasanyrole('company|office')
        <div class="bg-light site-section bg-white" id="offers">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center text-black">{{ trans('keywords.Estate Offers') }}</h1>
                        {{-- begin Modal --}}
                        <div class="my-1">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                {{ trans('keywords.Add Offer') }}
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="">
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
                                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
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
                                                        <label
                                                            for="street_height">{{ trans('keywords.Street Height') }}</label>
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
                                                        <input name="instrument_number" value="{{ old('instrument_number') }}"
                                                            type="number" class="form-control" id="instrument_number">
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
                                                            <option value="">{{ trans('keywords.Sell') }}</option>
                                                            <option value="">{{ trans('keywords.Buy') }}</option>

                                                        </select>
                                                        @error('operation_type')
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
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="land_type">{{ trans('keywords.Estate Type') }}</label>
                                                        <select name="land_type" class="form-control" id="land_type">
                                                            {{-- <option value="">{{ trans('keywords.Sell') }}</option> --}}
                                                        </select>
                                                        @error('land_type')
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
                                                <button type="button"
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
                                    <th scope="col">{{ trans('keywords.Estate Type') }}</th>
                                    <th scope="col">{{ trans('keywords.Land Number') }}</th>
                                    <th scope="col">{{ trans('keywords.Price') }}</th>
                                    <th scope="col">{{ trans('keywords.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endhasanyrole
    <br><br><br>
@endsection
