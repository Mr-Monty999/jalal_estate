@extends('layouts.guest.main')

@section('content')
    <br>
    <style>
        thead th {
            color: rgb(22 171 2) !important
        }
    </style>
    <div class="bg-light site-section bg-white my-4" id="offers">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 text-center">

                    <br><br>
                    <h1 class="text-center text-black">{{ trans('keywords.complaints') }}</h1>
                    <form enctype="multipart/form-data" class="row my-5" method="POST"
                        action="{{ route('guest.complaints.store') }}">
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
                        <div class="form-group col-12">
                            <label for="description">{{ trans('keywords.description') }}</label>
                            <textarea rows="5" type="text" placeholder="{{ trans('keywords.description') }}" name="description"
                                class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="attachments">{{ trans('keywords.attachments') }}</label>
                            <input type="file" placeholder="{{ trans('keywords.attachments') }}" name="attachment"
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
    {{-- @include('user.offers.ads.view') --}}
    <br><br><br>
@endsection

@push('scripts')
@endpush
