<div class="bg-white" style="padding: 10px">
    <style>
        .banner {
            width: 100px;
            height: 100px;
            margin-left: 8px;
            margin-right: 8px
        }
    </style>
    @php
        $ads = App\Services\AdService::loadAds();
        
        $banner1 = isset($ads[0]) ? $ads[0]->company_logo : '';
        $banner2 = isset($ads[1]) ? $ads[1]->company_logo : '';
        $banner3 = isset($ads[2]) ? $ads[2]->company_logo : '';
        $banner4 = isset($ads[3]) ? $ads[3]->company_logo : '';
        $banner5 = isset($ads[4]) ? $ads[4]->company_logo : '';
    @endphp
    <div class="d-flex justify-content-center align-items-center">
        <img class="rounded banner" style=""
            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
            src="{{ asset('storage/' . $banner1) }}">
        <img class="rounded banner" style=""
            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
            src="{{ asset('storage/' . $banner2) }}">
        <img class="rounded banner" style=""
            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
            src="{{ asset('storage/' . $banner3) }}">
        <img class="rounded banner" style=""
            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
            src="{{ asset('storage/' . $banner4) }}">
        <img class="rounded banner" style=""
            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
            src="{{ asset('storage/' . $banner5) }}">
    </div>

</div>
