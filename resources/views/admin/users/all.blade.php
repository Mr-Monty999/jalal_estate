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
                                          {{ trans('keywords.all users') }}
                                          <span class="badge badge-soft-dark radius-50 fz-12">{{ $users->total() }}</span>
                                      </h5>
                                  </div>
                                  <div class="col-sm-8 col-md-6 col-lg-4">
                                      <!-- Search -->
                                      <form action="{{ url()->current() }}" method="GET">
                                          <div class="input-group input-group-custom input-group-merge">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <i class="tio-search"></i>
                                                  </div>
                                              </div>
                                              <input id="" type="search" name="search" class="form-control"
                                                  placeholder="{{ trans('keywords.search') }}"
                                                  value="{{ request()->search }}">
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
                                          <th>{{ trans('keywords.ID') }}</th>
                                          <th class="text-center">{{ trans('keywords.Name') }}</th>
                                          <th>{{ trans('keywords.Phone') }}</th>
                                          <th>{{ trans('keywords.Email') }}</th>
                                          <th>{{ trans('keywords.user type') }}</th>
                                          <th>{{ trans('keywords.License Number') }}</th>
                                          <th>{{ trans('keywords.Advertiser Number') }}</th>
                                          <th>{{ trans('keywords.Commercial Registration Number') }}</th>
                                          <th>{{ trans('keywords.status') }}</th>
                                          <th>{{ trans('keywords.registered at') }}</th>
                                          <th class="text-center">{{ trans('keywords.Action') }}</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($users as $key => $user)
                                          @if (!$user->can('access_admin_dashboard'))
                                              <tr>
                                                  <td>{{ $user->id }}</td>
                                                  {{-- <td class="text-center">
                                            <img class="rounded" width="64"
                                                onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
                                                src="{{ asset('storage/app/user') }}/{{ $user['icon'] }}">
                                        </td> --}}
                                                  <td>{{ $user->name }}</td>
                                                  <td>
                                                      {{ $user->phone }}
                                                  </td>
                                                  <td>
                                                      {{ $user->email }}
                                                  </td>
                                                  <td>
                                                      @if ($user->hasRole('company'))
                                                          {{ trans('keywords.company') }}
                                                      @elseif ($user->hasRole('landlord'))
                                                          {{ trans('keywords.landlord') }}
                                                      @elseif ($user->hasRole('marketer'))
                                                          {{ trans('keywords.marketer') }}
                                                      @elseif($user->hasRole('office'))
                                                          {{ trans('keywords.office') }}
                                                      @elseif($user->hasRole('service-provider'))
                                                          {{ trans('keywords.service provider') }}
                                                      @endif
                                                  </td>
                                                  <td>
                                                      @if ($user->hasRole('company'))
                                                          {{ $user->company->license_number ? $user->company->license_number : trans('keywords.None') }}
                                                      @elseif ($user->hasRole('landlord'))
                                                          {{ $user->landlord->license_number ? $user->landlord->license_number : trans('keywords.None') }}
                                                      @elseif ($user->hasRole('marketer'))
                                                          {{ $user->marketer->license_number ? $user->marketer->license_number : trans('keywords.None') }}
                                                      @elseif($user->hasRole('office'))
                                                          {{ $user->office->license_number ? $user->office->license_number : trans('keywords.None') }}
                                                      @elseif($user->hasRole('service-provider'))
                                                          {{ $user->serviceProvider->license_number ? $user->serviceProvider->license_number : trans('keywords.None') }}
                                                      @endif
                                                  </td>
                                                  <td>
                                                      @if ($user->hasRole('company'))
                                                          {{ $user->company->advertiser_number ? $user->company->advertiser_number : trans('keywords.None') }}
                                                      @elseif ($user->hasRole('landlord'))
                                                          {{ $user->landlord->advertiser_number ? $user->landlord->advertiser_number : trans('keywords.None') }}
                                                      @elseif ($user->hasRole('marketer'))
                                                          {{ $user->marketer->advertiser_number ? $user->marketer->advertiser_number : trans('keywords.None') }}
                                                      @elseif($user->hasRole('office'))
                                                          {{ $user->office->advertiser_number ? $user->office->advertiser_number : trans('keywords.None') }}
                                                      @elseif($user->hasRole('service-provider'))
                                                          {{ $user->serviceProvider->advertiser_number ? $user->serviceProvider->advertiser_number : trans('keywords.None') }}
                                                      @endif
                                                  </td>
                                                  <td>
                                                      @if ($user->hasRole('company'))
                                                          {{ $user->company->commercial_registration_number ? $user->company->commercial_registration_number : trans('keywords.None') }}
                                                      @elseif ($user->hasRole('landlord'))
                                                          {{ $user->landlord->commercial_registration_number ? $user->landlord->commercial_registration_number : trans('keywords.None') }}
                                                      @elseif ($user->hasRole('marketer'))
                                                          {{ $user->marketer->commercial_registration_number ? $user->marketer->commercial_registration_number : trans('keywords.None') }}
                                                      @elseif($user->hasRole('office'))
                                                          {{ $user->office->commercial_registration_number ? $user->office->commercial_registration_number : trans('keywords.None') }}
                                                      @elseif($user->hasRole('service-provider'))
                                                          {{ $user->serviceProvider->commercial_registration_number ? $user->serviceProvider->commercial_registration_number : trans('keywords.None') }}
                                                      @endif
                                                  </td>
                                                  @if ($user->is_active == 1)
                                                      <td class="text-success">
                                                          {{ trans('keywords.active') }}
                                                      </td>
                                                  @else
                                                      <td class="text-danger">
                                                          {{ trans('keywords.not active') }}
                                                      </td>
                                                  @endif
                                                  <td>
                                                      {{ $user->created_at->diffForHumans() }}
                                                  </td>
                                                  <td>
                                                      <div class="d-flex justify-content-center gap-10">
                                                          {{-- <a class="btn btn-outline-info btn-sm square-btn"
                                                              title="{{ trans('keywords.Edit') }}"
                                                              href="{{ route('admin.users.edit', [$user->id]) }}">
                                                              <i class="tio-edit"></i>
                                                          </a> --}}
                                                          {{-- <a class="btn btn-outline-danger btn-sm delete square-btn"
                                                              title="{{ trans('keywords.Delete') }}"
                                                              id="{{ $user->id }}">
                                                              <i class="tio-delete"></i>
                                                          </a> --}}
                                                          @if ($user->is_active == 1)
                                                              <a class="btn btn-outline-danger action btn-sm active-user"
                                                                  title="{{ trans('keywords.deactivate') }}"
                                                                  id="{{ $user->id }}">
                                                                  {{ trans('keywords.deactivate') }}
                                                              </a>
                                                          @else
                                                              <a class="btn btn-outline-success action btn-sm deactive-user"
                                                                  title="{{ trans('keywords.active') }}"
                                                                  id="{{ $user->id }}">
                                                                  {{ trans('keywords.active user') }}
                                                              </a>
                                                          @endif
                                                      </div>
                                                  </td>
                                              </tr>
                                          @endif
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>


                          <div class="table-responsive mt-4">
                              <div class="d-flex justify-content-lg-end">
                                  <!-- Pagination -->
                                  {{ $users->links() }}
                              </div>
                          </div>
                          @if (count($users) == 0)
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
          </script>
      @endpush
