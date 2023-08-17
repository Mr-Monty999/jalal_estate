@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.add city banner'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.add city banner') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.cities-banners.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="from_part_2 col-12 col-md-6">
                                    <label class="title-color">{{ trans('keywords.city banner') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="banner" id="customFileEg1" class="form-control"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    @error('banner')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>

                                                <img class="upload-img-view" id="viewer"
                                                    src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                    alt="image" />
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label class="title-color">
                                        {{ trans('keywords.description') }}</label>
                                    <input value="{{ old('description') }}" type="text" name="description"
                                        class="form-control" placeholder="">
                                    @error('description')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group">
                                    <h1 class="title-color my-3">
                                        {{ trans('keywords.cities') }}:
                                    </h1>
                                    <label for="check-all-cities"
                                        class="title-color text-black">{{ trans('keywords.all') }}</label>
                                    <input id="check-all-cities" type="checkbox" class="mx-2 cities" placeholder="">
                                    <br>
                                    @foreach ($cities as $index => $city)
                                        <label for="city{{ $index }}" class="title-color">
                                            {{ $city->name }}</label>
                                        <input @checked(old('cities_ids') && in_array($city->id, old('cities_ids'))) id="city{{ $index }}"
                                            value="{{ $city->id }}" type="checkbox" name="cities_ids[]"
                                            class="mx-2 cities" placeholder="">
                                    @endforeach

                                    @error('cities_ids')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>

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
        let cities = $(".cities");
        let checkAllCities = $("#check-all-cities");

        checkAllCities.on('click', function() {
            if (!$(this).hasClass("checked")) {
                $(this).addClass("checked");
                cities.attr('checked', true);
            } else {
                $(this).removeClass("checked");
                cities.removeAttr('checked');



            }

        });
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
