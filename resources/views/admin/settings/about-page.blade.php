@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.Terms and Conditions'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.Terms and Conditions') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="title-color">
                                        {{ trans('keywords.title') }}</label>
                                    <textarea class="form-control" name="about_page_title" id="" cols="30" rows="10">{{ App\Services\SettingService::get('about_page_title') }}</textarea>
                                    @error('about_page_title')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="title-color">
                                        {{ trans('keywords.description') }}</label>
                                    <textarea class="form-control" name="about_page_description" id="" cols="30" rows="10">{{ App\Services\SettingService::get('about_page_description') }}</textarea>
                                    @error('about_page_description')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="from_part_2 col-12 col-md-6">
                                    <label class="title-color">{{ trans('keywords.image') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="about_page_image" id="customFileEg1"
                                            class="form-control"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if (App\Services\SettingService::get('about_page_image'))
                                                    <img class="upload-img-view" id="viewer"
                                                        src="{{ asset('storage/' . {{ App\Services\SettingService::get('about_page_image') }}) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
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
