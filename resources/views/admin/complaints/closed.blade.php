@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.closed complaints list'))

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
                                    {{ trans('keywords.closed complaints list') }}
                                    <span class="badge badge-soft-dark radius-50 fz-12">{{ $complaints->total() }}</span>
                                </h5>
                            </div>
                            <div class="col-12 my-5">
                                <form action="{{ route('admin.complaints.list.closed') }}" method="GET">
                                    <input type="text"
                                        placeholder="{{ trans('keywords.search by user name,phone,email,complaint number') }}"
                                        name="search" class="form-control text-center">
                                    <button class="btn btn-primary text-center my-1" type="submit">
                                        {{ trans('keywords.search') }}</button>
                                </form>
                            </div>
                            {{-- <div class="col-sm-8 col-md-6 col-lg-4">
                          <!-- Search -->
                          <form action="{{ url()->curadmin() }}" method="GET">
                              <div class="input-group input-group-custom input-group-merge">
                                  <div class="input-group-prepend">
                                      <div class="input-group-text">
                                          <i class="tio-search"></i>
                                      </div>
                                  </div>
                                  <input id="" type="search" name="search" class="form-control"
                                      placeholder="{{ trans('keywords.search_here') }}" value="{{ $search }}"
                                      required>
                                  <button type="submit" class="btn btn--primary">{{ trans('keywords.search') }}</button>
                              </div>
                          </form>
                          <!-- End Search -->
                      </div> --}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};"
                            class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100">
                            <thead class="thead-light thead-50 text-capitalize">
                                <tr>
                                    <th>{{ trans('keywords.ID') }}</th>
                                    <th class="text-center">{{ trans('keywords.complaint title') }}</th>
                                    <th>{{ trans('keywords.status') }}</th>
                                    <th class="text-center">{{ trans('keywords.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $key => $complaint)
                                    <tr>
                                        <td>{{ $complaint->id }}</td>
                                        <td>{{ $complaint->title }}</td>
                                        <td>
                                            {{-- @if ($complaint->status == 'open') --}}
                                            <div class="text-danger">
                                                {{ trans('keywords.closed') }}
                                            </div>
                                            {{-- @else
                                                <div class="text-danger">
                                                    {{ trans('keywords.closed') }}
                                                </div>
                                            @endif --}}
                                        </td>

                                        <td>
                                            <div class="d-flex justify-content-center gap-10">
                                                {{-- <button type="button" class="btn btn-danger close-complaint"
                                                    title="{{ trans('keywords.close') }}" id="{{ $complaint->id }}">
                                                    {{ trans('keywords.close') }}
                                                </button> --}}
                                                @include('admin.complaints.modals.view')
                                                {{-- <a class="btn btn-outline-danger btn-sm delete square-btn"
                                                    title="{{ trans('keywords.Delete') }}" id="{{ $complaint->id }}">
                                                    <i class="tio-delete"></i>
                                                </a> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <div class="table-responsive mt-4">
                        <div class="d-flex justify-content-lg-end">
                            <!-- Pagination -->
                            {{ $complaints->links() }}
                        </div>
                    </div>
                    @if (count($complaints) == 0)
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
        $(document).on('click', '.close-complaint', function() {
            var id = $(this).attr("id");
            Swal.fire({
                title: '{{ trans('keywords.Are You Sure?') }}',
                text: "{{ trans('keywords.are you sure you want to close this complaint') }}!",
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
                        url: "/admin/complaints/" + id + "/close",
                        method: 'post',
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

    {{-- <script>
        $(document).on('click', '.action', function() {
            var id = $(this).attr("id");
            let btnHasActiveClass = $(this).hasClass('active-user');

            Swal.fire({
                title: '{{ trans('keywords.Are You Sure?') }}',
                text: "{{ trans('keywords.are you sure want to do this operation?') }}!",
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
                    let url = "/admin/users/" + id + "/active";
                    if (btnHasActiveClass)
                        url = "/admin/users/" + id + "/deactive";


                    $.ajax({
                        url: url,
                        method: 'post',
                        data: {
                            id: id,
                            //'_method': "delete"
                        },
                        success: function() {
                            location.reload();
                        }
                    });
                }
            });
        });
    </script> --}}
@endpush
