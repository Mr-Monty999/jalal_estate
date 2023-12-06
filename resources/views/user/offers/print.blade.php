@php
    use App\Models\User;
@endphp

<br><br><br><br><br>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
<link rel="stylesheet" href="{{ asset('theme2/fonts/icomoon/style.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/front-end/img/reop-logo.jpeg') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('theme2/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('theme2/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme2/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme2/css/owl.theme.default.min.css') }}">

<link rel="stylesheet" href="{{ asset('theme2/css/jquery.fancybox.min.css') }}">

<link rel="stylesheet" href="{{ asset('theme2/css/bootstrap-datepicker.css') }}">

<link rel="stylesheet" href="{{ asset('theme2/fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.3.0-web/css/all.min.css') }}">


<link rel="stylesheet" href="{{ asset('theme2/css/aos.css') }}">

<link rel="stylesheet" href="{{ asset('theme2/css/style.css') }}">
@if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.rtl.css') }}">

    @include('layouts.arabic')
@endif


<div class="d-flex justify-content-center align-items-center">
    <img style="width: 130px" src="{{ asset('assets/front-end/img/reop-logo.jpeg') }}" alt="">
</div>

<div class="container-fluid">
<table class="table
                                table-responsive">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ trans('keywords.estate classification') }}</th>
                                    <th scope="col">{{ trans('keywords.Instrument Order') }}</th>
                                    <th scope="col">{{ trans('keywords.Estate Type') }}
                                    </th>
                                    <th scope="col">{{ trans('keywords.City') }}</th>
                                    <th scope="col">{{ trans('keywords.Neighbourhood') }}</th>
                                    <th scope="col">{{ trans('keywords.space (in metres)') }}</th>
                                    <th scope="col">{{ trans('keywords.Street Width') }}</th>
                                    <th scope="col">{{ trans('keywords.schema number') }}</th>
                                    <th scope="col">{{ trans('keywords.Land Number') }}</th>
                                    <th scope="col">{{ trans('keywords.Price') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <style>
                                    .owner-style {
                                        background-color: rgb(52 223 97)
                                    }
                                </style>
                                    <tr class="@if ($landOffer->adjective == 'owner') owner-style @endif">
                                        <td class="text-black">
                                            <div style="border-radius: 10px;padding:10px;background-color:{{ $landOffer->estateClassification->color }}"
                                                class="btn">
                                                {{ $landOffer->estateClassification->name }}
                                            </div>

                                        </td>

                                        <td class="text-black">{{ $landOffer->order }}</td>
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
                                        {{-- <td class="text-black">{{ trans('keywords.' . ucfirst($landOffer->operation_type)) }}
                                        </td> --}}
                                        <td class="text-black">{{ number_format($landOffer->space) }}</td>
                                        <td class="text-black">{{ $landOffer->street_width }}</td>
                                        <td class="text-black">{{ $landOffer->schema_number }}</td>
                                        <td class="text-black">{{ $landOffer->land_number }}</td>
                                        <td class="text-black">{{ number_format($landOffer->price) }}</td>
                                    </tr>
                                <style>
                                    button[data-toggle="modal"] {
                                        padding: 8px
                                    }
                                </style>
                            </tbody>
                        </table>
</div>

{{-- <div class="container-fluid"> --}}
{{--     <br><br> --}}
{{--     {{-1- @if ($landOffer->acceptedBy) --}}
{{--         <h1 class="alert alert-success text-center"> --}}
{{--             {{ trans('keywords.accepted by') . ' ' . $landOffer->acceptedBy->name }}</h1> --}}
{{--         <br> --}}
{{--     @endif -1-}} --}}
{{--     <h3 class="alert alert-success text-center"> --}}
{{--         {{ trans('keywords.advertiser') }}: --}}
{{--         <br> --}}
{{--         {{ $landOffer->user->name }} --}}

{{--     </h3> --}}
{{--     <br> --}}
{{--     <div class="row"> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="city_id">{{ trans('keywords.City') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->city->name }} --}}
{{--             </p> --}}
{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->neighbourhood->name }}</p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="commercial_or_housing">{{ trans('keywords.estate classification') }}:</label> --}}
{{--             <br> --}}
{{--             <div style="border-radius: 10px;padding:10px;background-color:{{ $landOffer->estateClassification->color }}" --}}
{{--                 class="btn"> --}}
{{--                 {{ $landOffer->estateClassification->name }} --}}
{{--             </div> --}}

{{--         </div> --}}
{{--         @if ($landOffer->estateClassification->active_setting_1 == 1) --}}
{{--             <div class="form-group col-6"> --}}
{{--                 <label for="is_commercial">{{ trans('keywords.Is Commercial') }}</label> --}}
{{--                 <p class="text-black"> --}}
{{--                     {{ $landOffer->is_commercial == 1 ? trans('keywords.Yes') : trans('keywords.No') }} --}}
{{--                 </p> --}}
{{--             </div> --}}
{{--         @endif --}}
{{--         @if ($landOffer->type3) --}}
{{--             <div class="form-group col-6"> --}}
{{--                 <label for="type3">{{ trans('keywords.corner or one street') }}</label> --}}
{{--                 <p class="text-black"> --}}
{{--                     {{ trans('keywords.' . $landOffer->type3) }} --}}
{{--                 </p> --}}
{{--             </div> --}}
{{--         @endif --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="streets_count">{{ trans('keywords.streets count') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ number_format($landOffer->streets_count) }} --}}
{{--             </p> --}}
{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="schema_number">{{ trans('keywords.schema number') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->schema_number }} --}}
{{--             </p> --}}

{{--         </div> --}}

{{--         <div class="form-group col-6"> --}}
{{--             <label for="street_name">{{ trans('keywords.Street Name') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->street_name }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="direction">{{ trans('keywords.Directions') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->direction }} --}}
{{--             </p> --}}
{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="space">{{ trans('keywords.Space') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->space }} --}}
{{--             </p> --}}

{{--         </div> --}}

{{--         <div class="form-group col-6"> --}}
{{--             <label for="street_height">{{ trans('keywords.Height On Street') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->street_height }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="dept">{{ trans('keywords.Dept') }}</label> --}}
{{--             <p class="text-black">{{ $landOffer->dept }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="street_width">{{ trans('keywords.Street Width') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->street_width }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="land_number">{{ trans('keywords.Land Number') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->land_number }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         {{-1- <div class="form-group col-6"> --}}
{{--             <label for="instrument_number">{{ trans('keywords.Instrument Number') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->instrument_number }} --}}
{{--             </p> --}}

{{--         </div> -1-}} --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="operation_type">{{ trans('keywords.Operation Type') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ trans('keywords.' . ucfirst($landOffer->operation_type)) }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         @if ($landOffer->operation_type == 'rent') --}}
{{--             <div class="form-group col-6"> --}}
{{--                 <label for="rent_period">{{ trans('keywords.Rent Period') }}</label> --}}
{{--                 <p class="text-black"> --}}
{{--                     {{ $landOffer->rent_period }} --}}
{{--                 </p> --}}
{{--             </div> --}}
{{--         @endif --}}

{{--         <div class="form-group col-6"> --}}
{{--             <label for="price">{{ trans('keywords.Price') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ number_format($landOffer->price) }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="adjective">{{ trans('keywords.Adjective') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 @if ($landOffer->adjective == 'owner') --}}
{{--                     {{ trans('keywords.iam the owner (you have all the quest)') }} --}}
{{--                 @else --}}
{{--                     {{ trans('keywords.direct owner (I have half the quest)') }} --}}
{{--                 @endif --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="contact_info">{{ trans('keywords.Contact Info') }}</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ $landOffer->contact_info }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="type2">{{ trans('keywords.Is Piece Or Block') }}:</label> --}}
{{--             <p class="text-black"> --}}
{{--                 {{ trans('keywords.' . $landOffer->type2) }} --}}
{{--             </p> --}}

{{--         </div> --}}
{{--         <div class="form-grou col-6"> --}}
{{--             <label for="land_type_ids"> --}}
{{--                 {{ trans('keywords.Estate Type') }}:</label> --}}
{{--             <br> --}}
{{--             @foreach ($landOffer->landTypes as $landType) --}}
{{--                 <div class="form-check form-check-inline"> --}}
{{--                     <input disabled checked type="checkbox" class="form-check-input mx-1" name="land_type_ids[]" --}}
{{--                         id="land-type{{ $landType->id }}" value="{{ $landType->id }}"> --}}
{{--                     <label class="form-check-label" for="land-type{{ $landType->id }}"> --}}
{{--                         {{ $landType->name }} --}}
{{--                     </label> --}}
{{--                 </div> --}}
{{--             @endforeach --}}
{{--         </div> --}}
{{--         <div class="form-group col-6"> --}}
{{--             <label for="image">{{ trans('keywords.Estate Image') }}</label> --}}
{{--             @if ($landOffer->image) --}}
{{--                 <div> --}}
{{--                     <img style="width: 200px;height:200px" src="{{ asset('storage/' . $landOffer->image) }}" --}}
{{--                         alt=""> --}}
{{--                 </div> --}}
{{--             @else --}}
{{--                 <p class="text-black"> --}}
{{--                     {{ trans('keywords.None') }} --}}
{{--                 </p> --}}
{{--             @endif --}}


{{--         </div> --}}
{{--     </div> --}}

{{-- </div> --}}


<br><br><br>
<script src="{{ asset('theme2/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('theme2/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('theme2/js/jquery-ui.js') }}"></script>
<script src="{{ asset('theme2/js/popper.min.js') }}"></script>
<script src="{{ asset('theme2/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme2/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('theme2/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('theme2/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('theme2/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('theme2/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('theme2/js/aos.js') }}"></script>
<script src="{{ asset('theme2/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('theme2/js/jquery.sticky.js') }}"></script>
<script>
    print()
</script>
