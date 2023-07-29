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
                                                        <label for="name">{{ trans('keywords.Company Name') }}</label>
                                                        <input name="name" value="{{ old('name') }}" type="text"
                                                            class="form-control" id="name">
                                                        @error('name')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="email">{{ trans('keywords.Email') }}</label>
                                                        <input name="email" value="{{ old('email') }}" type="email"
                                                            class="form-control" id="email">
                                                        @error('email')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="phone">{{ trans('keywords.Phone') }}</label>
                                                        <input name="phone" value="{{ old('phone') }}" type="phone"
                                                            class="form-control" id="phone">
                                                        @error('phone')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="license_number">{{ trans('keywords.License Number') }}</label>
                                                        <input name="license_number" value="{{ old('license_number') }}"
                                                            type="number" class="form-control" id="license_number">
                                                        @error('license_number')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="advertiser_number">{{ trans('keywords.Advertiser Number') }}</label>
                                                        <input name="advertiser_number" value="{{ old('advertiser_number') }}"
                                                            type="number" class="form-control" id="advertiser_number">
                                                        @error('advertiser_number')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="commercial_registration_number">{{ trans('keywords.Commercial Registration Number') }}</label>
                                                        <input name="commercial_registration_number"
                                                            value="{{ old('commercial_registration_number') }}" type="number"
                                                            class="form-control" id="commercial_registration_number">
                                                        @error('commercial_registration_number')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="password">{{ trans('keywords.Password') }}</label>
                                                        <input name="password" type="password" class="form-control"
                                                            id="password">
                                                        @error('password')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label
                                                            for="password_confirmation">{{ trans('keywords.Password Confirmation') }}</label>
                                                        <input name="password_confirmation" type="password" class="form-control"
                                                            id="password_confirmation">
                                                        @error('password_confirmation')
                                                            <div style="border-radius: 30px"
                                                                class="alert alert-danger text-center mt-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="logo">{{ trans('keywords.Logo') }}</label>
                                                        <input name="logo" type="file" class="form-control"
                                                            id="logo">
                                                        @error('logo')
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
