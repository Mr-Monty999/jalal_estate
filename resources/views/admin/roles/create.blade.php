@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.add role'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.add role') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 form-group">
                                    <label class="title-color">
                                        {{ trans('keywords.role name') }}<span class="text-danger">*</span></label>
                                    <input value="{{ old('name') }}" type="text" name="name" class="form-control"
                                        placeholder="">
                                    @error('name')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 form-group">
                                    <h1 class="title-color my-3">
                                        {{ trans('keywords.permissions') }}:
                                    </h1>
                                    <label for="check-all-permissions"
                                        class="title-color text-black">{{ trans('keywords.all') }}</label>
                                    <input id="check-all-permissions" type="checkbox" class="mx-2 permissions"
                                        placeholder="">
                                    <br>
                                    @foreach ($permissions as $index => $permission)
                                        <label for="permission{{ $index }}" class="title-color">
                                            {{ trans('keywords.' . $permission) }}</label>
                                        <input @checked(old('permissions') && in_array($permission, old('permissions'))) id="permission{{ $index }}"
                                            value="{{ $permission }}" type="checkbox" name="permissions[]"
                                            class="mx-2 permissions" placeholder="">
                                    @endforeach

                                    @error('permissions')
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
        let permissions = $(".permissions");
        let checkAllCities = $("#check-all-permissions");

        checkAllCities.on('click', function() {
            if (!$(this).hasClass("checked")) {
                $(this).addClass("checked");
                permissions.attr('checked', true);
            } else {
                $(this).removeClass("checked");
                permissions.removeAttr('checked');



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
