@extends('layouts.guest.main')

@section('content')
    <br><br><br>
    <div class="bg-light site-section bg-white" id="terms-and-conditions">
        <div class="container">
            <h1 class="text-center">{{ trans('keywords.Terms and Conditions') }}</h1>
            <br><br><br>
            <p style="font-size: 25px">
                {!! $termsAndConditions !!}


            </p>
        </div>
    </div>
    <br><br><br>
@endsection

@push('scripts')
    <script>
        function getNeighbourhoods() {

            let city = $("#city_id");
            let neighbourhood = $("#neighbourhood_id");
            $.ajax({
                type: "get",
                url: "/api/cities/" + city.val() + "/neighbourhoods",
                success: function(response) {
                    neighbourhood.empty();
                    for (const data of response) {
                        neighbourhood.append("<option value='" + data.id + "'>" + data.name + "</option>");
                    }

                }
            });
        }
        $(document).ready(function() {
            getNeighbourhoods();
        });
    </script>
@endpush
