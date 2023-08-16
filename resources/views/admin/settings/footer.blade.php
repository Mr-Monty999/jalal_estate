@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.footer settings'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.footer settings') }}
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
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.facebook page link') }}</label>
                                    <input value="{{ App\Services\SettingService::get('footer_facebook_link') }}"
                                        type="text" class="form-control" name="footer_facebook_link">
                                    @error('footer_facebook_link')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.twitter page link') }}</label>
                                    <input value="{{ App\Services\SettingService::get('footer_twitter_link') }}"
                                        type="text" class="form-control" name="footer_twitter_link">
                                    @error('footer_twitter_link')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.instagram page link') }}</label>
                                    <input value="{{ App\Services\SettingService::get('footer_instagram_link') }}"
                                        type="text" class="form-control" name="footer_instagram_link">
                                    @error('footer_instagram_link')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.linkedin page link') }}</label>
                                    <input value="{{ App\Services\SettingService::get('footer_linkedin_link') }}"
                                        type="text" class="form-control" name="footer_linkedin_link">
                                    @error('footer_linkedin_link')
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
