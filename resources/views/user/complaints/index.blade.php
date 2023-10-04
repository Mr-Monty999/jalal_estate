@extends('layouts.user.main')

@section('content')
    <br>
    @can('view_offers')
        <style>
            thead th {
                color: rgb(22 171 2) !important
            }
        </style>
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
                        <h1 class="text-center text-black">{{ trans('keywords.complaints') }}</h1>
                        <form enctype="multipart/form-data" class="row my-5" method="POST"
                            action="{{ route('user.complaints.store') }}">
                            @csrf
                            <div class="form-group col-12 col-md-6">
                                <label for="title">{{ trans('keywords.title') }}</label>
                                <input type="text" placeholder="{{ trans('keywords.title') }}" name="title"
                                    class="form-control" value="{{ old('title') }}">
                                @error('title')
                                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="contact_info">{{ trans('keywords.phone number') }}</label>
                                <input type="text" placeholder="{{ trans('keywords.phone number') }}" name="contact_info"
                                    class="form-control" value="{{ old('contact_info') }}">
                                @error('contact_info')
                                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="description">{{ trans('keywords.description') }}</label>
                                <textarea type="text" placeholder="{{ trans('keywords.description') }}" name="description" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="attachments">{{ trans('keywords.attachments') }}</label>
                                <input type="file" placeholder="{{ trans('keywords.attachments') }}" name="attachments"
                                    class="form-control" value="{{ old('attachments') }}">
                                @error('attachments')
                                    <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">{{ trans('keywords.send') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    {{-- @include('user.offers.ads.view') --}}
    <br><br><br>
@endsection

@push('scripts')
@endpush
