@extends('layouts.admin.back-end.app')

@section('title', trans('keywords.Dashboard'))

@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-12 mb-2 mb-sm-0">
                    <h3 class="text-center">{{ trans('keywords.Hi') }} {{ auth()->user()->name }},
                        {{ trans('keywords.Welcome To Dashboard') }}.</h3>
                </div>
                <div class="row">
                    <div></div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('public/assets/back-end') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('public/assets/back-end') }}/vendor/chart.js.extensions/chartjs-extensions.js"></script>
    <script
        src="{{ asset('public/assets/back-end') }}/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js">
    </script>
@endpush
