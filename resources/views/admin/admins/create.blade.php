@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.create admin'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.create admin') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- <div class="col-lg-6"> --}}
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.Name') }}<span class="text-danger">*</span></label>
                                    <input value="{{ old('name') }}" type="text" name="name" class="form-control"
                                        placeholder="">
                                    @error('name')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.Email') }}<span class="text-danger">*</span></label>
                                    <input value="{{ old('email') }}" type="text" name="email" class="form-control"
                                        placeholder="">
                                    @error('email')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="password">{{ trans('keywords.Password') }}</label>
                                    <input name="password" type="text" class="form-control" id="password">
                                    @error('password')
                                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label
                                        for="password_confirmation">{{ trans('keywords.Password Confirmation') }}</label>
                                    <input name="password_confirmation" type="text" class="form-control"
                                        id="password_confirmation">
                                    @error('password_confirmation')
                                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="role_name">{{ trans('keywords.role') }} </label>
                                    <select name="role_name" class="form-control" id="role_name">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_name')
                                        <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="from_part_2 col-12 col-md-6">
                                    <label class="title-color">{{ trans('keywords.Photo') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="photo" id="customFileEg1" class="form-control"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                {{-- @if (auth()->user()->admin->photo)
                                                    <img class="upload-img-view" id="viewer"
                                                        src="{{ asset('storage/' . auth()->user()->admin->photo) }}"
                                                        alt="image" />
                                                @else --}}
                                                <img class="upload-img-view" id="viewer"
                                                    src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                    alt="image" />
                                                {{-- @endif --}}
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}

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
