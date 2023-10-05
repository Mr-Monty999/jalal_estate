@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.estate offers'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">

        <div class="row mt-20" id="cate-table">
            <div class="col-md-12">
                <div class="card">
                    <div class="px-3 py-4">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-md-6 col-lg-8 mb-2 mb-sm-0">
                                <h5 class="text-capitalize d-flex gap-1">
                                    {{ trans('keywords.estate offers') }}
                                    <span class="badge badge-soft-dark radius-50 fz-12">{{ $estateOffers->total() }}</span>
                                </h5>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-8">
                                <!-- Search -->
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-custom input-group-merge">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="" type="search" name="search" class="form-control"
                                            placeholder="{{ trans('keywords.search') }}" value="{{ request()->search }}">
                                        <button type="submit"
                                            class="btn btn--primary">{{ trans('keywords.search') }}</button>
                                    </div>
                                </form>
                                <!-- End Search -->
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};"
                            class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100">
                            <thead class="thead-light thead-50 text-capitalize">
                                <tr>
                                    <th scope="col">{{ trans('keywords.ID') }}</th>
                                    <th scope="col">{{ trans('keywords.estate classification') }}
                                    </th>
                                    <th scope="col">{{ trans('keywords.Estate Type') }}
                                    </th>
                                    <th scope="col">{{ trans('keywords.City') }}</th>
                                    <th scope="col">{{ trans('keywords.Neighbourhood') }}</th>
                                    <th scope="col">{{ trans('keywords.space (in metres)') }}</th>
                                    <th scope="col">{{ trans('keywords.streets count') }}</th>
                                    <th scope="col">{{ trans('keywords.Street Width') }}</th>
                                    <th scope="col">{{ trans('keywords.schema number') }}</th>
                                    <th scope="col">{{ trans('keywords.Land Number') }}</th>
                                    <th scope="col">{{ trans('keywords.Price') }}</th>
                                    <th scope="col">{{ trans('keywords.created at') }}</th>
                                    <th scope="col">{{ trans('keywords.created by') }}</th>

                                    <th scope="col">{{ trans('keywords.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <style>
                                    .owner-style {
                                        background-color: rgb(52 223 97)
                                    }
                                </style>
                                @foreach ($estateOffers as $index => $estateOffer)
                                    <tr class="{{-- @if ($estateOffer->adjective == 'owner') owner-style @endif --}}">
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td class="text-black">
                                            <div style="border-radius: 10px;padding:10px;background-color:{{ $estateOffer->estateClassification->color }}"
                                                class="btn text-white">
                                                {{ $estateOffer->estateClassification->name }}
                                            </div>

                                        </td>

                                        <td class="text-black">
                                            <div class="d-flex">
                                                @foreach ($estateOffer->landTypes as $index => $landType)
                                                    {{ $landType->name }} @if ($index < count($estateOffer->landTypes) - 1)
                                                        -
                                                    @endif
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="text-black">{{ $estateOffer->city->name }}</td>
                                        <td class="text-black">{{ $estateOffer->neighbourhood->name }}</td>
                                        {{-- <td class="text-black">{{ trans('keywords.' . ucfirst($estateOffer->operation_type)) }}
                                        </td> --}}
                                        <td class="text-black">{{ number_format($estateOffer->space) }}</td>
                                        <td class="text-black">{{ number_format($estateOffer->streets_count) }}</td>
                                        <td class="text-black">{{ $estateOffer->street_width }}</td>
                                        <td class="text-black">{{ $estateOffer->schema_number }}</td>
                                        <td class="text-black">{{ $estateOffer->land_number }}</td>
                                        <td class="text-black">{{ number_format($estateOffer->price) }}</td>
                                        <td class="text-black">{{ $estateOffer->created_at->diffForHumans() }}</td>
                                        <td class="text-black">{{ $estateOffer->user->name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @include('admin.estate-offers.modals.show')
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <style>
                                    button[data-toggle="modal"] {
                                        padding: 8px
                                    }
                                </style> --}}
                            </tbody>
                        </table>
                    </div>


                    <div class="table-responsive mt-4">
                        <div class="d-flex justify-content-lg-end">
                            <!-- Pagination -->
                            {{ $estateOffers->links() }}
                        </div>
                    </div>
                    @if (count($estateOffers) == 0)
                        <div class="text-center p-4">
                            <img class="mb-3 w-160" src="{{ asset('assets/back-end') }}/svg/illustrations/sorry.svg"
                                alt="Image Description">
                            <p class="mb-0">{{ trans('keywords.No Data Found') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    {{-- <script>
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            Swal.fire({
                title: '{{ trans('keywords.Are You Sure?') }}',
                text: "{{ trans('keywords.Are You Sure Want To Delete This Neighbourhood') }}!",
                showCancelButton: true,
                type: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ trans('keywords.Yes') }}',
                cancelButtonText: "{{ trans('keywords.Cancel') }}",
                reverseButtons: true
            }).then((result) => {

                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('admin.estateOffers.destroy', '') }}/" + id,
                        method: 'delete',
                        data: {
                            id: id,
                            //'_method': "delete"
                        },
                        success: function() {
                            location.reload();
                        }
                    });
                }
            })
        });
    </script> --}}
@endpush
