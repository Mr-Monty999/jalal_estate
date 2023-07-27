      @extends('layouts.admin.back-end.app')

      @section('title', trans('keywords.Neighbourhoods List'))

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
                                          {{ trans('keywords.Neighbourhoods List') }}
                                          <span
                                              class="badge badge-soft-dark radius-50 fz-12">{{ $neighbourhoods->total() }}</span>
                                      </h5>
                                  </div>
                                  {{-- <div class="col-sm-8 col-md-6 col-lg-4">
                                <!-- Search -->
                                <form action="{{ url()->current() }}" method="GET">
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
                                          <th class="text-center">{{ trans('keywords.Neighbourhood Name') }}</th>
                                          <th>{{ trans('keywords.City') }}</th>
                                          <th class="text-center">{{ trans('keywords.Action') }}</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($neighbourhoods as $key => $neighbourhood)
                                          <tr>
                                              <td>{{ $neighbourhood->id }}</td>
                                              {{-- <td class="text-center">
                                            <img class="rounded" width="64"
                                                onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                                src="{{ asset('storage/app/neighbourhood') }}/{{ $neighbourhood['icon'] }}">
                                        </td> --}}
                                              <td>{{ $neighbourhood->name }}</td>
                                              <td>
                                                  {{ $neighbourhood->city ? $neighbourhood->city->name : trans('keywords.None') }}
                                              </td>

                                              <td>
                                                  <div class="d-flex justify-content-center gap-10">
                                                      <a class="btn btn-outline-info btn-sm square-btn"
                                                          title="{{ trans('keywords.Edit') }}"
                                                          href="{{ route('admin.neighbourhoods.edit', [$neighbourhood->id]) }}">
                                                          <i class="tio-edit"></i>
                                                      </a>
                                                      <a class="btn btn-outline-danger btn-sm delete square-btn"
                                                          title="{{ trans('keywords.Delete') }}"
                                                          id="{{ $neighbourhood->id }}">
                                                          <i class="tio-delete"></i>
                                                      </a>
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
                                  {{ $neighbourhoods->links() }}
                              </div>
                          </div>
                          @if (count($neighbourhoods) == 0)
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
          <script>
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
                              url: "{{ route('admin.neighbourhoods.destroy', '') }}/" + id,
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
          </script>
      @endpush
