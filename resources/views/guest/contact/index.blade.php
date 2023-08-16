@extends('layouts.guest.main')

@section('content')
    <br><br><br>


    <div class="bg-light site-section bg-white" id="">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <h1 class="text-center">{{ App\Services\SettingService::get('contact_page_title') }}</h1>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center my-4">
                    <img style="width: 50%;heigt:50%"
                        onerror="this.src='{{ asset('theme2/images/thinking-face-rafiki.svg') }}'"
                        src="{{ asset('storage/' . App\Services\SettingService::get('contact_page_image')) }}"
                        alt="">
                </div>
                <div class="col-12">
                    <pre style="font-size: 20px;overflow:unset" class="text-center">{!! App\Services\SettingService::get('contact_page_description') !!}</pre>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
