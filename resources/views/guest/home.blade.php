 @extends('layouts.guest.main')

 @section('content')
     <br><br><br>
     <style>
         #home-page {
             background-image: url("{{ asset('theme2/images/riyadh.jpeg') }}");
             background-size: cover;
             background-position: center;
             padding-bottom: 600px
         }

         .link2 {
             /* height: 50px; */
             margin: 5px;
             color: white;
             padding: 20px;
             display: block;
             border-radius: 10px
         }

         .link2:hover {
             color: white;
             font-weight: bold
         }
     </style>
     <div class="bg-transparent site-section bg-white" id="home-page">
         <div class="container">
             <div class="row align-items-center justify-content-center">
                 <a class="link2 text-center bg-info col-8 col-md-4"
                     href="{{ route('guest.companies.register') }}">{{ trans('keywords.Create Company Account') }}</a>
                 <a class="link2 text-center bg-dark col-8 col-md-4"
                     href="{{ route('guest.offices.register') }}">{{ trans('keywords.Create Office Account') }}</a>

                 <a class="link2 text-center bg-success col-8 col-md-4"
                     href="{{ route('guest.marketers.register') }}">{{ trans('keywords.Create Marketer Account') }}</a>

                 <a class="link2 text-center bg-warning col-8 col-md-4"
                     href="{{ route('guest.landlords.register') }}">{{ trans('keywords.Create Landlord Account') }}</a>

                 <a class="link2 text-center bg-danger col-8 col-md-4"
                     href="{{ route('guest.service-providers.register') }}">{{ trans('keywords.Create Service Provider Account') }}</a>

             </div>
         </div>
     </div>
 @endsection
