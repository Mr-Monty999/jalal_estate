   @extends('layouts.user.print')
   @section('content')
       <div class="bg-light site-section bg-white my-4" id="offers">
           <div class="container">
               <div class="row align-items-center justify-content-center">
                   <div class="col-md-12 text-center">
                       <div class="d-flex justify-content-center align-items-center">
                           @if ($user->hasRole('company'))
                               @if ($user->company->logo)
                                   <img src="{{ asset('storage/' . $user->company->logo) }}"
                                       style="width:300px;height: 200px;" alt="">
                               @endif
                           @elseif ($user->hasRole('landlord'))
                               @if ($user->landlord->photo)
                                   <img src="{{ asset('storage/' . $user->landlord->photo) }}"
                                       style="width:300px;height: 200px;" alt="">
                               @endif
                           @elseif ($user->hasRole('marketer'))
                               @if ($user->marketer->photo)
                                   <img src="{{ asset('storage/' . $user->marketer->photo) }}"
                                       style="width:300px;height: 200px;" alt="">
                               @endif
                           @elseif($user->hasRole('office'))
                               @if ($user->office->logo)
                                   <img src="{{ asset('storage/' . $user->office->logo) }}"
                                       style="width:300px;height: 200px;" alt="">
                               @endif
                           @elseif($user->hasRole('service-provider'))
                               @if ($user->serviceProvider->photo)
                                   <img src="{{ asset('storage/' . $user->serviceProvider->photo) }}"
                                       style="width:300px;height: 200px;" alt="">
                               @endif
                           @endif
                       </div>
                       <br><br>
                       {{-- <h1 class="text-center text-black">{{ trans('keywords.Estate Offers') }}</h1> --}}
                       <table class="table
                                table-responsive">
                           <thead class="thead-dark">
                               <tr>
                                   <th scope="col">{{ trans('keywords.ID') }}</th>
                                   <th scope="col">{{ trans('keywords.estate classification') }}
                                   </th>
                                   <th scope="col">{{ trans('keywords.Estate Type') }}
                                   </th>
                                   <th scope="col">{{ trans('keywords.City') }}</th>
                                   <th scope="col">{{ trans('keywords.Neighbourhood') }}</th>
                                   <th scope="col">{{ trans('keywords.Street') }}</th>
                                   <th scope="col">{{ trans('keywords.Operation Type') }}</th>
                                   <th scope="col">{{ trans('keywords.space (in metres)') }}</th>
                                   <th scope="col">{{ trans('keywords.Land Number') }}</th>
                                   <th scope="col">{{ trans('keywords.Price') }}</th>
                                   <th scope="col">{{ trans('keywords.created at') }}</th>
                                   <th scope="col">{{ trans('keywords.created by') }}</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th scope="row">1</th>
                                   <td class="text-black">
                                       @if ($landOffer->commercial_or_housing == 'housing')
                                           <div style="border-radius: 10px;padding:10px" class="btn btn-success">
                                               {{ trans('keywords.' . $landOffer->commercial_or_housing) }}
                                           </div>
                                       @else
                                           <div style="border-radius: 10px;padding:10px" class="btn btn-warning">
                                               {{ trans('keywords.' . $landOffer->commercial_or_housing) }}
                                           </div>
                                       @endif
                                   </td>

                                   <td class="text-black">
                                       <div class="d-flex">
                                           @foreach ($landOffer->landTypes as $index => $landType)
                                               {{ $landType->name }} @if ($index < count($landOffer->landTypes) - 1)
                                                   -
                                               @endif
                                           @endforeach
                                       </div>
                                   </td>
                                   <td class="text-black">{{ $landOffer->city->name }}</td>
                                   <td class="text-black">{{ $landOffer->neighbourhood->name }}</td>
                                   <td class="text-black">{{ $landOffer->street_name }}</td>
                                   <td class="text-black">
                                       {{ trans('keywords.' . ucfirst($landOffer->operation_type)) }}
                                   </td>
                                   <td class="text-black">{{ number_format($landOffer->space) }}</td>
                                   <td class="text-black">{{ $landOffer->land_number }}</td>
                                   <td class="text-black">{{ number_format($landOffer->price) }}</td>
                                   <td class="text-black">{{ $landOffer->created_at->diffForHumans() }}</td>
                                   <td class="text-black">{{ $landOffer->user->name }}</td>

                               </tr>
                               <style>
                                   button[data-toggle="modal"] {
                                       padding: 8px
                                   }
                               </style>
                           </tbody>
                       </table>

                   </div>
               </div>
           </div>
       </div>
   @endsection

   @push('scripts')
       <script>
           $(document).ready(function() {
               print();
           });
       </script>
   @endpush
