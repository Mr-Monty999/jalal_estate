<style>
    .banner {
        width: 20%;
        height: 100%;
        margin-left: 10px;
        margin-right: 10px
    }

    .full-banner {
        width: 100%;
        height: 300px;
    }
</style>
<div class="d-flex flex-column justify-content-center align-items-center">

    @php
        $banner1 = isset($ads[0]) ? $ads[0]->company_logo : '';
        $banner2 = isset($ads[1]) ? $ads[1]->company_logo : '';
        $banner3 = isset($ads[2]) ? $ads[2]->company_logo : '';
        $banner4 = isset($ads[3]) ? $ads[3]->company_logo : '';
        $banner5 = isset($ads[4]) ? $ads[4]->company_logo : '';
        
    @endphp
    <div style="width: 36%;" class="d-flex justify-content-center align-items-center">
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
    </div>
    <div style="width: 36%;" class="d-flex justify-content-center align-items-center">
        <img class="rounded full-banner" style=""
            onerror="this.src='{{ asset('assets/front-end/img/image-place-holder.png') }}'"
            src="{{ asset('storage/' . $banner5) }}">

    </div>

</div>
