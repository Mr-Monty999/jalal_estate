@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.add estate classification'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.add estate classification') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.estate-classifications.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="title-color">
                                            {{ trans('keywords.estate classification name') }}<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ old('name') }}" type="text" name="name"
                                            class="form-control" placeholder="">
                                        @error('name')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="title-color">
                                            {{ trans('keywords.color') }}</label>
                                        <input value="{{ old('color') }}" type="color" name="color"
                                            class="form-control" placeholder="">
                                        @error('color')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="active_setting_1" class="title-color">
                                            {{ trans('keywords.active setting 1') }}</label>

                                        <input name="active_setting_1" id="active_setting_1" type="checkbox"
                                            @checked(old('active_setting_1') == 'on') class="">
                                        @error('active_setting_1')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
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
