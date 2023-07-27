@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.Add Neighbourhood'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.Add Neighbourhood') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.neighbourhoods.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="title-color">
                                            {{ trans('keywords.Neighbourhood Name') }}<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ old('name') }}" type="text" name="name"
                                            class="form-control" placeholder="">
                                        @error('name')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="title-color" for="city_id">{{ trans('keywords.City') }}

                                        </label>

                                        <select class="form-control" name="city_id" id="city_id" required>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('city_id')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="from_part_2">
                                        <label class="title-color">{{ trans('keywords.Logo') }}</label>
                                        <span class="text-info"><span class="text-danger">*</span> </span>
                                        <div class="text-left">
                                            <input type="file" name="image" id="customFileEg1" class="form-control"
                                                accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                    <div class="form-group">
                                        <center>
                                            <img class="upload-img-view" id="viewer"
                                                src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}" alt="image" />
                                        </center>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="d-flex flex-wrap gap-2 justify-content-end">
                                <button type="reset" id="reset"
                                    class="btn btn-secondary">{{ trans('keywords.reset') }}</button>
                                <button type="submit" class="btn btn--primary">{{ trans('keywords.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>





    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileEg1").change(function() {
            readURL(this);
        });
    </script>
@endpush
