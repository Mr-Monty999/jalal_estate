@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.edit rent'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-10">
                <img src="{{ asset('/assets/back-end/img/brand-setup.png') }}" alt="">
                {{ trans('keywords.edit rent') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                        <form action="{{ route('admin.rents.update', $rent->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                {{-- <div class="col-lg-6"> --}}
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.Name') }}<span class="text-danger">*</span></label>
                                    <input value="{{ $rent->name }}" type="text" name="name" class="form-control"
                                        placeholder="">
                                    @error('name')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.price') }}<span class="text-danger">*</span></label>
                                    <input value="{{ $rent->price }}" type="text" name="price" class="form-control"
                                        placeholder="">
                                    @error('price')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.rent period') }}<span class="text-danger">*</span></label>
                                    <select name="rent_period" class="form-control" id="rent_period">
                                        <option @selected($rent->rent_period == 'daily') value="daily">{{ trans('keywords.daily') }}
                                        </option>
                                        <option @selected($rent->rent_period == 'monthly') value="monthly">
                                            {{ trans('keywords.monthly') }}</option>
                                        <option @selected($rent->rent_period == 'yearly') value="yearly">{{ trans('keywords.yearly') }}
                                        </option>
                                    </select>
                                    @error('rent_period')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="title-color">
                                        {{ trans('keywords.location') }}<span class="text-danger">*</span></label>
                                    <input value="{{ $rent->location }}" type="text" name="location"
                                        class="form-control" placeholder="">
                                    @error('location')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-12">
                                    <label class="title-color">
                                        {{ trans('keywords.description') }}</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{!! $rent->description !!}</textarea>
                                    @error('description')
                                        <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="from_part_2 col-12">
                                    <label class="title-color">{{ trans('keywords.Estate Image') }}</label>
                                    <span class="text-info"> </span>
                                    <div class="text-left">
                                        <input type="file" name="banner" id="customFileEg1"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->banner)
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->banner) }}" alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_part_2 col-12 col-md-3">
                                    <label class="title-color">{{ trans('keywords.image 1') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="images[]" id="customFileEg1"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->images && isset($rent->images[0]))
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->images[0]->path) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_part_2 col-12 col-md-3">
                                    <label class="title-color">{{ trans('keywords.image 2') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="images[]" id="customFileEg2"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->images && isset($rent->images[1]))
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->images[1]->path) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_part_2 col-12 col-md-3">
                                    <label class="title-color">{{ trans('keywords.image 3') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="images[]" id="customFileEg3"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->images && isset($rent->images[2]))
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->images[2]->path) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_part_2 col-12 col-md-3">
                                    <label class="title-color">{{ trans('keywords.image 4') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="images[]" id="customFileEg4"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->images && isset($rent->images[3]))
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->images[3]->path) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_part_2 col-12 col-md-3">
                                    <label class="title-color">{{ trans('keywords.image 5') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="images[]" id="customFileEg5"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->images && isset($rent->images[4]))
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->images[4]->path) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_part_2 col-12 col-md-3">
                                    <label class="title-color">{{ trans('keywords.image 6') }}</label>
                                    <span class="text-info"><span class="text-danger">*</span> </span>
                                    <div class="text-left">
                                        <input type="file" name="images[]" id="customFileEg6"
                                            class="form-control image-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0 from_part_2">
                                        <div class="form-group">
                                            <center>
                                                @if ($rent->images && isset($rent->images[5]))
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('storage/' . $rent->images[5]) }}"
                                                        alt="image" />
                                                @else
                                                    <img class="upload-img-view viewer" id="viewer"
                                                        src="{{ asset('assets/back-end/img/900x400/img1.jpg') }}"
                                                        alt="image" />
                                                @endif
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
                    // console.log($(input));
                    $(input).parent().parent().find(".viewer").attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // $("#customFileEg1").change(function() {
        //     readURL(this);
        // });
        $(".image-input").change(function() {
            readURL(this);
        });
    </script>
@endpush
