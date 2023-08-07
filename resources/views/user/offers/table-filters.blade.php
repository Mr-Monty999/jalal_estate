           <br>
           <form class="row" method="GET" action="{{ route('user.land-offers.index') }}">
               @csrf
               <div class="form-group col-12 col-md-3">
                   <label for="city_id">{{ trans('keywords.City') }}</label>
                   @php
                       $selectedCity = null;
                   @endphp
                   <select name="city_id" class="form-control city_id" id="city_id">
                       <option class="text-black" id="all" value="" selected>
                           {{ trans('keywords.all') }}</option>

                       @foreach ($cities as $city)
                           @php
                               request('city_id') == $city->id ? ($selectedCity = $city) : null;
                           @endphp
                           <option @if (request('city_id') == $city->id) selected @endif value="{{ $city->id }}">
                               {{ $city->name }}
                           </option>
                       @endforeach
                   </select>
                   @error('city_id')
                       <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                           {{ $message }}
                       </div>
                   @enderror
               </div>
               <div class="form-group col-12 col-md-3">
                   <label for="neighbourhood_id">{{ trans('keywords.Neighbourhood') }}</label>
                   <select name="neighbourhood_id" class="form-control neighbourhood_id" id="neighbourhood_id">
                       <option class="text-black" id="all" value="" selected>
                           {{ trans('keywords.all') }}</option>
                       @if ($selectedCity)
                           @foreach ($selectedCity->neighbourhoods as $neighbourhood)
                               <option @if ($neighbourhood->id == request('neighbourhood_id')) selected @endif
                                   value="{{ $neighbourhood->id }}">
                                   {{ $neighbourhood->name }}
                               </option>
                           @endforeach
                       @endif
                   </select>

                   @error('neighbourhood_id')
                       <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                           {{ $message }}
                       </div>
                   @enderror
               </div>
               <div class="form-group col-12 col-md-3 d-flex flex-column">
                   <label for="commercial_or_housing">{{ trans('keywords.estate classification') }}</label>
                   <select multiple name="commercial_or_housing[]" class="form-control multiple-select-checkbox"
                       id="commercial_or_housing">
                       {{-- <option class="text-black select-all" value="">
                           {{ trans('keywords.select all') }}</option> --}}

                       <option @if (request('commercial_or_housing') && in_array('commercial', request('commercial_or_housing'))) selected @endif value="commercial">
                           {{ trans('keywords.commercial') }}
                       </option>
                       <option @if (request('commercial_or_housing') && in_array('housing', request('commercial_or_housing'))) selected @endif value="housing">
                           {{ trans('keywords.housing') }}
                       </option>
                   </select>
                   @error('commercial_or_housing')
                       <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                           {{ $message }}
                       </div>
                   @enderror
               </div>
               <div class="form-group col-12 d-flex flex-column">
                   <label for="land_type_ids">{{ trans('keywords.Estate Type') }}</label>
                   <select multiple name="land_type_ids[]" class="form-control multiple-select-checkbox"
                       id="land_type_ids">
                       {{-- <option class="text-black select-all" value="">
                           {{ trans('keywords.select all') }}</option> --}}
                       @foreach ($landTypes as $landType)
                           <option @if (request('land_type_ids') && in_array($landType->id, request('land_type_ids'))) selected @endif value="{{ $landType->id }}">
                               {{ $landType->name }}
                           </option>
                       @endforeach
                   </select>
                   @error('land_type_ids')
                       <div style="border-radius: 30px" class="alert alert-danger text-center mt-1">
                           {{ $message }}
                       </div>
                   @enderror
               </div>
               <div class="col-12">
                   <button class="btn btn-primary" type="submit">{{ trans('keywords.search') }}</button>
               </div>
           </form>
           <br>


           <link rel="stylesheet" type="text/css" href="{{ asset('multiselect/example-styles.css') }}">
           <script type="text/javascript" src="{{ asset('multiselect/jquery-2.2.4.min.js') }}"></script>
           <script type="text/javascript" src="{{ asset('multiselect/jquery.multi-select.js') }}"></script>

           <script>
               $('.multiple-select-checkbox').multiSelect();
               $(".select-all").on("click", function() {
                   console.log($(this));
               });
           </script>


           <style>
               .multi-select-menuitem {
                   direction: ltr !important;
               }
           </style>
