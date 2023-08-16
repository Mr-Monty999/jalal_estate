@extends('layouts.rents.main')
@section('rents-content')
    <div class="bravo_wrap">

        <div class="bravo_detail_hotel">
            <div class="blog-breadcrumb hidden-xs">
                <div class="container">
                    {{-- <ol class="ul" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="" itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class=" " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="" itemscope itemtype="https://schema.org/WebPage"
                            itemprop="item" itemid=""><span itemprop="name">Hotel</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class=" " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="" itemscope itemtype="https://schema.org/WebPage"
                            itemprop="item" itemid=""><span
                                itemprop="name">Paris</span></a>
                        <meta itemprop="position" content="3" />
                    </li>
                    <li class=" active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">Hotel Stanford</span>
                        <meta itemprop="position" content="4" />
                    </li>
                </ol> --}}
                </div>
            </div>
            <div class="bravo_banner"
                style="background-image: url('@if ($rent->banner) {{ asset('storage/'.$rent->banner)}} @else {{ asset('assets/front-end/img/placeholder.png') }} @endif')">
                <div class="container">
                    <div class="bravo_gallery">
                        <div class="btn-group">
                            {{-- <a href="#" class="btn btn-transparent has-icon bravo-video-popup" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/bhOiLfkChPo" data-target="#myModal"> --}}
                            {{-- <i class="input-icon field-icon fa">
                                    <svg height="18px" width="18px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 24 24"
                                        style="enable-background:new 0 0 24 24;" xml:space="preserve"> --}}
                            {{-- <g fill="#FFFFFF">
                                            <path
                                                d="M2.25,24C1.009,24,0,22.991,0,21.75V2.25C0,1.009,1.009,0,2.25,0h19.5C22.991,0,24,1.009,24,2.25v19.5
                                            c0,1.241-1.009,2.25-2.25,2.25H2.25z M2.25,1.5C1.836,1.5,1.5,1.836,1.5,2.25v19.5c0,0.414,0.336,0.75,0.75,0.75h19.5
                                            c0.414,0,0.75-0.336,0.75-0.75V2.25c0-0.414-0.336-0.75-0.75-0.75H2.25z">
                                            </path>
                                            <path
                                                d="M9.857,16.5c-0.173,0-0.345-0.028-0.511-0.084C8.94,16.281,8.61,15.994,8.419,15.61c-0.11-0.221-0.169-0.469-0.169-0.716
                                            V9.106C8.25,8.22,8.97,7.5,9.856,7.5c0.247,0,0.495,0.058,0.716,0.169l5.79,2.896c0.792,0.395,1.114,1.361,0.719,2.153
                                            c-0.154,0.309-0.41,0.565-0.719,0.719l-5.788,2.895C10.348,16.443,10.107,16.5,9.857,16.5z M9.856,9C9.798,9,9.75,9.047,9.75,9.106
                                            v5.788c0,0.016,0.004,0.033,0.011,0.047c0.013,0.027,0.034,0.044,0.061,0.054C9.834,14.998,9.845,15,9.856,15
                                            c0.016,0,0.032-0.004,0.047-0.011l5.788-2.895c0.02-0.01,0.038-0.027,0.047-0.047c0.026-0.052,0.005-0.115-0.047-0.141l-5.79-2.895
                                            C9.889,9.004,9.872,9,9.856,9z">
                                            </path>
                                        </g> --}}
                            {{-- </svg>
                                </i> --}}
                            </a>
                        </div>
                        {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item bravo_embed_video" src=""
                                                allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="bravo_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-9">
                            <div class="g-header">
                                <div class="left">
                                    {{-- <div class="star-rate">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div> --}}
                                    <h1>{!! $rent->name !!}</h1>
                                    <h2 class="address"><i class="fa fa-map-marker"></i>
                                        {{ $rent->location }}
                                    </h2>
                                </div>
                                {{-- <div class="right">
                                <div class="review-score">
                                    <div class="head">
                                        <div class="left">
                                            <span class="head-rating">Excellent</span>
                                            <span class="text-rating">from 3 reviews</span>
                                        </div>
                                        <div class="score">
                                            4.7<span>/5</span>
                                        </div>
                                    </div>
                                    <div class="foot">
                                        100% of guests recommend
                                    </div>
                                </div>
                            </div> --}}
                            </div>
                            <div class="g-gallery">
                                <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135"
                                    data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
                                    <a href="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-1.jpg') }}"
                                        data-thumb="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-1.jpg') }}"
                                        data-alt="Gallery"></a>
                                    <a href="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-2.jpg') }}"
                                        data-thumb="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-2.jpg') }}"
                                        data-alt="Gallery"></a>
                                    <a href="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-3.jpg') }}"
                                        data-thumb="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-3.jpg') }}"
                                        data-alt="Gallery"></a>
                                    <a href="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-4.jpg') }}"
                                        data-thumb="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-4.jpg') }}"
                                        data-alt="Gallery"></a>
                                    <a href="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-5.jpg') }}"
                                        data-thumb="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-5.jpg') }}"
                                        data-alt="Gallery"></a>
                                    <a href="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-6.jpg') }}"
                                        data-thumb="{{ asset('booking/uploads/demo/hotel/gallery/hotel-gallery-6.jpg') }}"
                                        data-alt="Gallery"></a>
                                </div>
                                <div class="social">
                                    <div class="social-share">
                                        <span class="social-icon">
                                            <i class="icofont-share"></i>
                                        </span>
                                        <ul class="share-wrapper">
                                            <li>
                                                <a class="facebook"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=&amp;title=Hotel Stanford"
                                                    target="_blank" rel="noopener" original-title="Facebook">
                                                    <i class="fa fa-facebook fa-lg"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter"
                                                    href="https://twitter.com/share?url=&amp;title=Hotel Stanford"
                                                    target="_blank" rel="noopener" original-title="Twitter">
                                                    <i class="fa fa-twitter fa-lg"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="service-wishlist " data-id="1" data-type="hotel">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="g-overview">
                                <h3>{{ trans('keywords.description') }}</h3>
                                <div class="description">
                                    <p>{!! $rent->description !!}</p>
                                    {{-- <h4>HIGHLIGHTS</h4> --}}
                                    {{-- <ul>
                                        <li>Visit the Museum of Modern Art in Manhattan</li>
                                        <li>See amazing works of contemporary art, including Vincent van Gogh's The
                                            Starry Night</li>
                                        <li>Check out Campbell's Soup Cans by Warhol and The Dance (I) by Matisse</li>
                                        <li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li>
                                        <li>Enjoy free audio guides available in English, French, German, Italian,
                                            Spanish, Portuguese</li>
                                    </ul> --}}
                                </div>
                            </div>
                            {{-- <div id="hotel-rooms" class="hotel_rooms_form" v-cloak=""
                            :class="{ 'd-none': enquiry_type != 'book' }">
                            <h3 class="heading-section">Available Rooms</h3>
                            <div class="nav-enquiry" v-if="is_form_enquiry_and_book">
                                <div class="enquiry-item active">
                                    <span>Book</span>
                                </div>
                                <div class="enquiry-item" data-toggle="modal" data-target="#enquiry_form_modal">
                                    <span>Enquiry</span>
                                </div>
                            </div>
                            <div class="form-book">
                                <div class="form-search-rooms">
                                    <div class="d-flex form-search-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-date-field form-date-search "
                                                @click="openStartDate" data-format="MM/DD/YYYY">
                                                <i class="fa fa-angle-down arrow"></i>
                                                <input type="text" class="start_date" ref="start_date"
                                                    style="height: 1px; visibility: hidden">
                                                <div class="date-wrapper form-content">
                                                    <label class="form-label">Check In - Out</label>
                                                    <div class="render check-in-render" v-html="start_date_html">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fa fa-angle-down arrow"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <label class="form-label">Guests</label>
                                                    <div class="render">
                                                        <span class="adults">
                                                            <span class="one">adults
                                                                <span v-if="adults < 2">Adult</span>
                                                                <span v-else>Adults</span>
                                                            </span>
                                                        </span>
                                                        -
                                                        <span class="children">
                                                            <span class="one"> children
                                                                <span v-if="children < 2">Child</span>
                                                                <span v-else>Children</span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu select-guests-dropdown">
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Adults</div>
                                                        <div class="val">
                                                            <span class="btn-minus2" data-input="adults"
                                                                @click="minusPersonType('adults')"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number"
                                                                    v-model="adults" min="1" /></span>
                                                            <span class="btn-add2" data-input="adults"
                                                                @click="addPersonType('adults')"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Children</div>
                                                        <div class="val">
                                                            <span class="btn-minus2" data-input="children"
                                                                @click="minusPersonType('children')"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number"
                                                                    v-model="children" min="0" /></span>
                                                            <span class="btn-add2" data-input="children"
                                                                @click="addPersonType('children')"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-btn">
                                            <div class="g-button-submit">
                                                <button class="btn btn-primary btn-search" @click="checkAvailability"
                                                    :class="{ 'loading': onLoadAvailability }" type="submit">
                                                    Check Availability
                                                    <i v-show="onLoadAvailability" class="fa fa-spinner fa-spin"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="start_room_sticky"></div>
                                <div class="hotel_list_rooms" :class="{ 'loading': onLoadAvailability }">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="room-item" v-for="room in rooms">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-3">
                                                        <div class="image"
                                                            @click="showGallery($event,room.id,room.gallery)">
                                                            <img :src="room.image" alt="">
                                                            <div class="count-gallery"
                                                                v-if="typeof room.gallery !='undefined' && room.gallery && room.gallery.length > 1">
                                                                <i class="fa fa-picture-o"></i>
                                                                room . gallery . length
                                                            </div>
                                                        </div>
                                                        <div class="modal" :id="'modal_room_' + room.id"
                                                            tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"> room . title
                                                                        </h5>
                                                                        <span class="c-pointer" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <i class="input-icon field-icon fa">
                                                                                <img src="{{asset('booking/images/ico_close.svg')}}"
                                                                                    alt="close">
                                                                            </i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="fotorama" data-nav="thumbs"
                                                                            data-width="100%" data-auto="false"
                                                                            data-allowfullscreen="true">
                                                                            <a v-for="g in room.gallery"
                                                                                :href="g.large"></a>
                                                                        </div>
                                                                        <div class="list-attributes">
                                                                            <div class="attribute-item"
                                                                                v-for="term in room.terms">
                                                                                <h4 class="title">
                                                                                    term . parent . title </h4>
                                                                                <ul v-if="term.child">
                                                                                    <li
                                                                                        v-for="term_child in term.child">
                                                                                        <i class="input-icon field-icon"
                                                                                            v-bind:class="term_child.icon"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            :title="term_child.title"></i>
                                                                                        term_child . title
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="hotel-info">
                                                            <h3 class="room-name"
                                                                @click="showGallery($event,room.id,room.gallery)">
                                                                room . title </h3>
                                                            <ul class="room-meta">
                                                                <li v-if="room.size_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Room Footage">
                                                                        <i
                                                                            class="input-icon field-icon icofont-ruler-compass-alt"></i>
                                                                        <span v-html="room.size_html"></span>
                                                                    </div>
                                                                </li>
                                                                <li v-if="room.beds_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="No. Beds">
                                                                        <i
                                                                            class="input-icon field-icon icofont-hotel"></i>
                                                                        <span v-html="room.beds_html"></span>
                                                                    </div>
                                                                </li>
                                                                <li v-if="room.adults_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="No. Adults">
                                                                        <i
                                                                            class="input-icon field-icon icofont-users-alt-4"></i>
                                                                        <span v-html="room.adults_html"></span>
                                                                    </div>
                                                                </li>
                                                                <li v-if="room.children_html">
                                                                    <div class="item" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="No. Children">
                                                                        <i
                                                                            class="input-icon field-icon fa-child fa"></i>
                                                                        <span v-html="room.children_html"></span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="room-attribute-item"
                                                                v-if="room.term_features">
                                                                <ul>
                                                                    <li v-for="term_child in room.term_features">
                                                                        <i class="input-icon field-icon"
                                                                            v-bind:class="term_child.icon"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            :title="term_child.title"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" v-if="room.number">
                                                        <div class="col-price clear">
                                                            <div class="text-center">
                                                                <span class="price" v-html="room.price_html"></span>
                                                            </div>
                                                            <select v-if="room.number" v-model="room.number_selected"
                                                                class="custom-select">
                                                                <option value="0">0</option>
                                                                <option v-for="i in (1,room.number)"
                                                                    :value="i">
                                                                    i + ' ' + (i > 1 ? i18n . rooms : i18n . room)
                                                                    &nbsp;&nbsp; ( formatMoney(i * room . price) )
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel_room_book_status" v-if="total_price">
                                    <div class="row row_extra_service" v-if="extra_price.length">
                                        <div class="col-md-12">
                                            <div class="form-section-group">
                                                <label>Extra prices:</label>
                                                <div class="row">
                                                    <div class="col-md-6 extra-item"
                                                        v-for="(type,index) in extra_price">
                                                        <div class="extra-price-wrap d-flex justify-content-between">
                                                            <div class="flex-grow-1">
                                                                <label>
                                                                    <input type="checkbox" true-value="1"
                                                                        false-value="0" v-model="type.enable">
                                                                    type . name
                                                                    <div class="render" v-if="type.price_type">
                                                                        ( type . price_type )</div>
                                                                </label>
                                                            </div>
                                                            <div class="flex-shrink-0"> type . price_html
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_total_price">
                                        <div class="col-md-6">
                                            <div class="extra-price-wrap d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <label>
                                                        Total Room:
                                                    </label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    total_rooms
                                                </div>
                                            </div>
                                            <div class="extra-price-wrap d-flex justify-content-between"
                                                v-for="(type,index) in buyer_fees">
                                                <div class="flex-grow-1">
                                                    <label>
                                                        type . type_name
                                                        <span class="render" v-if="type.price_type">( type .
                                                            price_type )</span>
                                                        <i class="icofont-info-circle" v-if="type.desc"
                                                            data-toggle="tooltip" data-placement="top"
                                                            :title="type.type_desc"></i>
                                                    </label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="unit" v-if='type.unit == "percent"'>
                                                        type . price %
                                                    </div>
                                                    <div class="unit" v-else>
                                                        formatMoney(type . price)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="extra-price-wrap d-flex justify-content-between is_mobile">
                                                <div class="flex-grow-1">
                                                    <label>
                                                        Total Price:
                                                    </label>
                                                </div>
                                                <div class="total-room-price"> total_price_html </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="control-book">
                                                <div class="total-room-price">
                                                    <span> Total Price:</span> total_price_html
                                                </div>
                                                <div v-if="is_deposit_ready" class="total-room-price">
                                                    <span>Pay now</span>
                                                    pay_now_price_html
                                                </div>
                                                <button type="button" class="btn btn-primary"
                                                    @click="doSubmit($event)" :class="{ 'disabled': onSubmit }"
                                                    name="submit">
                                                    <span>Book Now</span>
                                                    <i v-show="onSubmit" class="fa fa-spinner fa-spin"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="end_room_sticky"></div>
                                <div class="alert alert-warning" v-if="!firstLoad && !rooms.length">
                                    No room available with your selected date. Please change your search critical
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="modal fade" tabindex="-1" role="dialog" id="enquiry_form_modal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content enquiry_form_modal_form">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Enquiry</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="service_id" value="1">
                                        <input type="hidden" name="service_type" value="hotel">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="tawreed tech"
                                                name="enquiry_name" placeholder="Name *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="admin@admin.com"
                                                name="enquiry_email" placeholder="Email *">
                                        </div>
                                        <div class="form-group" v-if="!enquiry_is_submit">
                                            <input type="text" class="form-control" value="0543798662"
                                                name="enquiry_phone" placeholder="Phone">
                                        </div>
                                        <div class="form-group" v-if="!enquiry_is_submit">
                                            <textarea class="form-control" placeholder="Note" name="enquiry_note"></textarea>
                                        </div>
                                        <div class="message_box"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-submit-enquiry">Send now
                                            <i class="fa icon-loading fa-spinner fa-spin fa-fw"
                                                style="display: none"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="g-all-attribute is_mobile">
                            <div class="g-attributes property-type attr-5">
                                <h3>Property type</h3>
                                <div class="list-attributes">
                                    <div class="item apartments term-32">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Apartments
                                    </div>
                                    <div class="item hotels term-33">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotels
                                    </div>
                                    <div class="item homestays term-34">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Homestays
                                    </div>
                                    <div class="item villas term-35">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Villas
                                    </div>
                                    <div class="item boats term-36">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Boats
                                    </div>
                                    <div class="item motels term-37">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Motels
                                    </div>
                                    <div class="item resorts term-38">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Resorts
                                    </div>
                                    <div class="item lodges term-39">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Lodges
                                    </div>
                                    <div class="item holiday-homes term-40">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Holiday homes
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes facilities-1 attr-6">
                                <h3>Facilities</h3>
                                <div class="list-attributes">
                                    <div class="item wake-up-call term-42">
                                        <i class="icofont-wall-clock"></i>
                                        Wake-up call
                                    </div>
                                    <div class="item car-hire term-43">
                                        <i class="icofont-car-alt-3"></i>
                                        Car hire
                                    </div>
                                    <div class="item bicycle-hire term-44">
                                        <i class="icofont-bicycle-alt-2"></i>
                                        Bicycle hire
                                    </div>
                                    <div class="item flat-tv term-45">
                                        <i class="icofont-imac"></i>
                                        Flat Tv
                                    </div>
                                    <div class="item internet-wifi term-47">
                                        <i class="icofont-wifi-alt"></i>
                                        Internet – Wifi
                                    </div>
                                    <div class="item coffee-and-tea term-48">
                                        <i class="icofont-tea"></i>
                                        Coffee and tea
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes hotel-service attr-7">
                                <h3>Hotel Service</h3>
                                <div class="list-attributes">
                                    <div class="item fiesta-restaurant term-50">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Fiesta Restaurant
                                    </div>
                                    <div class="item hotel-transport-services term-51">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotel transport services
                                    </div>
                                    <div class="item free-luggage-deposit term-52">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Free luggage deposit
                                    </div>
                                    <div class="item laundry-services term-53">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Laundry Services
                                    </div>
                                    <div class="item pets-welcome term-54">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Pets welcome
                                    </div>
                                    <div class="item tickets term-55">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Tickets
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="g-rules">
                            <h3>Rules</h3>
                            <div class="description">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="key">Check In</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="value"> 12:00AM </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="key">Check Out</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="value"> 11:00AM </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="key">Hotel Policies</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="item ">
                                            <div class="strong">Guarantee Policy</div>
                                            <div class="context">- A valid credit card will be required upon
                                                booking;
                                                - For credit card reservations, the same card(s) must be presented
                                                upon check in at the respective hotels;
                                                - Management reserves the right to cancel any reservations without
                                                notice if we are notified of any fraud or illegal activities
                                                associated with the full payments received.</div>
                                        </div>
                                        <div class="item ">
                                            <div class="strong">Children Policy</div>
                                            <div class="context">- Child under 5-year old: free of charge.
                                                - Child from 5-year old to under 12-year old: surcharge
                                                $10/person/room/night.
                                                - Child from 12-year old or extra Adult: surcharge
                                                $15/person/room/night.</div>
                                        </div>
                                        <div class="item  d-none ">
                                            <div class="strong">Cancellation/Amendment Policy</div>
                                            <div class="context">- If cancellation/amendment is made 72 hours
                                                prior to your arrival date, no fee will be charged.
                                                - If cancellation/amendment is made within 72 hours, including
                                                reservations made within 72 hours of your arrival, 1st night’s room
                                                rate and tax will be charged
                                                - In case of no-show, 100% room rate and tax will be charged.
                                                - Early Bird/Long Stay/Last Min/Package Rates are Non - changeable &
                                                Non - refundable</div>
                                        </div>
                                        <div class="item  d-none ">
                                            <div class="strong">Late check-out policy</div>
                                            <div class="context">- Late check-out is subject to room availability
                                                - 12:00 to 17:00 check-out: 50% room rate surcharge
                                                - After 17:00 check-out: 100% room rate surcharge</div>
                                        </div>
                                        <div class="btn-show-all">
                                            <span class="text">Show All</span>
                                            <i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="bravo-hr"></div>
                            {{--
                        <div class="g-location">
                            <div class="location-title">
                                <h3>Location</h3>
                                <div class="address">
                                    <i class="icofont-location-arrow"></i>
                                    Arrondissement de Paris
                                </div>
                            </div>

                            <div class="location-map">
                                <div id="map_content"></div>
                            </div>
                        </div> --}}
                            <div class="bravo-hr"></div>
                            {{-- <div class="bravo-reviews" id="bravo-reviews">
                            <h3>Reviews</h3>
                            <div class="review-box">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="review-box-score">
                                            <div class="review-score">
                                                4.7<span class="per-total">/5</span>
                                            </div>
                                            <div class="review-score-text">
                                                Excellent
                                            </div>
                                            <div class="review-score-base">
                                                Based on
                                                <span>
                                                    3 reviews
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="review-sumary">
                                            <div class="item">
                                                <div class="label">
                                                    Excellent
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 67%"></div>
                                                </div>
                                                <div class="number">2</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Very Good
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 33%"></div>
                                                </div>
                                                <div class="number">1</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Average
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 0%"></div>
                                                </div>
                                                <div class="number">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Poor
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 0%"></div>
                                                </div>
                                                <div class="number">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="label">
                                                    Terrible
                                                </div>
                                                <div class="progress">
                                                    <div class="percent green" style="width: 0%"></div>
                                                </div>
                                                <div class="number">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-list">
                                <div class="review-item">
                                    <div class="review-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="avatar" src="{{asset('booking/images/avatar.png')}}"
                                                    alt=" ">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"> </h4>
                                                <div class="date">07/12/2023 11:10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item-body">
                                        <h4 class="title"> Easy way to discover the city </h4>
                                        <ul class="review-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <div class="detail">
                                            Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id
                                            posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex
                                            pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie
                                            mnesarchum complectitur per te
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="avatar" src="{{asset('booking/images/avatar.png')}}"
                                                    alt="System Admin">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">System Admin</h4>
                                                <div class="date">07/12/2023 11:10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item-body">
                                        <h4 class="title"> Nothing good this time </h4>
                                        <ul class="review-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <div class="detail">
                                            Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id
                                            posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex
                                            pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie
                                            mnesarchum complectitur per te
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="avatar" src="{{asset('booking/images/avatar.png')}}"
                                                    alt=" ">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"> </h4>
                                                <div class="date">07/12/2023 11:10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item-body">
                                        <h4 class="title"> Easy way to discover the city </h4>
                                        <ul class="review-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <div class="detail">
                                            Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id
                                            posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex
                                            pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie
                                            mnesarchum complectitur per te
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-pag-wrapper">
                                <div class="bravo-pagination">

                                </div>
                                <div class="review-pag-text">
                                    Showing 1 - 3 of 3 total
                                </div>
                            </div>
                            <div class="review-form">
                                <div class="title-form">
                                    Write a review
                                </div>
                                <div class="form-wrapper">
                                    <form action="booking/review" class="needs-validation" novalidate
                                        method="post">
                                        <input type="hidden" name="_token"
                                            value="vXshe4q7uxJCZyL1V8jPaNuOx2Cp89skdwSFD6BE">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" required class="form-control"
                                                        name="review_title" placeholder="Title">
                                                    <div class="invalid-feedback">Review title is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-8">
                                                <div class="form-group">
                                                    <textarea name="review_content" required class="form-control" placeholder="Review content" minlength="10"></textarea>
                                                    <div class="invalid-feedback">
                                                        Review content has at least 10 character
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <div class="form-group review-items">
                                                    <div class="item">
                                                        <label>Service</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Service]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Organization</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Organization]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Friendliness</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Friendliness]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Area Expert</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Area Expert]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Safety</label>
                                                        <input class="review_stats" type="hidden"
                                                            name="review_stats[Safety]">
                                                        <div class="rates">
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                            <i class="fa fa-star-o grey"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="hidden" name="review_service_id" value="1">
                                            <input type="hidden" name="review_service_type" value="hotel">
                                            <input id="submit" type="submit" name="submit" class="btn"
                                                value="Leave a Review">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                        <div class="col-md-12 col-lg-3">
                            <div class="owner-info widget-box">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="booking/profile/tawreed" class="avatar-cover"
                                            style="background-image: url('{{ asset('booking/uploads/0000/1/2023/07/12/logo-t.png') }}')">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a class="author-link"
                                                href="{{ asset('booking/profile/tawreed') }}">tawreed tech</a>
                                            <img data-toggle="tooltip" data-placement="top"
                                                src="{{ asset('booking/icon/ico-not-vefified-1.svg') }}"
                                                title="Not verified" alt="Verified">
                                        </h4>
                                        <p>Member Since Jul 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bravo-list-hotel-related-widget">
                                <h3 class="heading">Related Hotel</h3>
                                <div class="list-item">
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="booking/hotel/hotel-wbf-homachi">
                                                    <img class='img-responsive lazy'
                                                        data-src={{ asset('booking/uploads/demo/space/space-6.jpg') }}
                                                        alt='Hotel WBF Hommachi'>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="star-rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="media-heading">
                                                    <a href="{{ asset('booking/hotel/hotel-wbf-homachi') }}">
                                                        Hotel WBF Hommachi
                                                    </a>
                                                </h4>
                                                <div class="price-wrapper">
                                                    from
                                                    <span class="price">$350</span>
                                                    <span class="unit">/night</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{{ asset('booking/hotel/castello-casole-hotel') }}">
                                                    <img class='img-responsive lazy'
                                                        data-src={{ asset('booking/uploads/demo/space/space-7.jpg') }}
                                                        alt='Castello Casole Hotel'>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="star-rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="media-heading">
                                                    <a href="booking/hotel/castello-casole-hotel">
                                                        Castello Casole Hotel
                                                    </a>
                                                </h4>
                                                <div class="price-wrapper">
                                                    from
                                                    <span class="price">$350</span>
                                                    <span class="unit">/night</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="booking/hotel/redac-gateway-hotel">
                                                    <img class='img-responsive lazy'
                                                        data-src={{ asset('booking/uploads/demo/space/space-8.jpg') }}
                                                        alt='Redac Gateway Hotel'>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="star-rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="media-heading">
                                                    <a href="booking/hotel/redac-gateway-hotel">
                                                        Redac Gateway Hotel
                                                    </a>
                                                </h4>
                                                <div class="price-wrapper">
                                                    from
                                                    <span class="price">$500</span>
                                                    <span class="unit">/night</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="booking/hotel/parian-holiday-villas">
                                                    <img class='img-responsive lazy'
                                                        data-src={{ asset('booking/uploads/demo/space/space-13.jpg') }}
                                                        alt='Parian Holiday Villas'>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="star-rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="media-heading">
                                                    <a href="booking/hotel/parian-holiday-villas">
                                                        Parian Holiday Villas
                                                    </a>
                                                </h4>
                                                <div class="price-wrapper">
                                                    from
                                                    <span class="price">$550</span>
                                                    <span class="unit">/night</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="g-all-attribute is_pc">
                            <div class="g-attributes property-type attr-5">
                                <h3>Property type</h3>
                                <div class="list-attributes">
                                    <div class="item apartments term-32">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Apartments
                                    </div>
                                    <div class="item hotels term-33">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotels
                                    </div>
                                    <div class="item homestays term-34">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Homestays
                                    </div>
                                    <div class="item villas term-35">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Villas
                                    </div>
                                    <div class="item boats term-36">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Boats
                                    </div>
                                    <div class="item motels term-37">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Motels
                                    </div>
                                    <div class="item resorts term-38">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Resorts
                                    </div>
                                    <div class="item lodges term-39">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Lodges
                                    </div>
                                    <div class="item holiday-homes term-40">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Holiday homes
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes facilities-1 attr-6">
                                <h3>Facilities</h3>
                                <div class="list-attributes">
                                    <div class="item wake-up-call term-42">
                                        <i class="icofont-wall-clock"></i>
                                        Wake-up call
                                    </div>
                                    <div class="item car-hire term-43">
                                        <i class="icofont-car-alt-3"></i>
                                        Car hire
                                    </div>
                                    <div class="item bicycle-hire term-44">
                                        <i class="icofont-bicycle-alt-2"></i>
                                        Bicycle hire
                                    </div>
                                    <div class="item flat-tv term-45">
                                        <i class="icofont-imac"></i>
                                        Flat Tv
                                    </div>
                                    <div class="item internet-wifi term-47">
                                        <i class="icofont-wifi-alt"></i>
                                        Internet – Wifi
                                    </div>
                                    <div class="item coffee-and-tea term-48">
                                        <i class="icofont-tea"></i>
                                        Coffee and tea
                                    </div>
                                </div>
                            </div>
                            <div class="g-attributes hotel-service attr-7">
                                <h3>Hotel Service</h3>
                                <div class="list-attributes">
                                    <div class="item fiesta-restaurant term-50">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Fiesta Restaurant
                                    </div>
                                    <div class="item hotel-transport-services term-51">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Hotel transport services
                                    </div>
                                    <div class="item free-luggage-deposit term-52">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Free luggage deposit
                                    </div>
                                    <div class="item laundry-services term-53">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Laundry Services
                                    </div>
                                    <div class="item pets-welcome term-54">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Pets welcome
                                    </div>
                                    <div class="item tickets term-55">
                                        <i class="icofont-check-circled icon-default"></i>
                                        Tickets
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div id="cdn-browser-modal" class="modal fade">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div id="cdn-browser" class="cdn-browser d-flex flex-column" v-cloak
                        :class="{ is_loading: isLoading }">
                        <div class="files-nav flex-shrink-0">
                            <div class="d-flex justify-content-between">
                                <div class="col-left d-flex align-items-center">
                                    <div class="filter-item">
                                        <input type="text" placeholder="Search file name...." class="form-control"
                                            v-model="filter.s" @keyup.enter="filter.page = 1;reloadLists()">
                                    </div>
                                    <div class="filter-item">
                                        <button class="btn btn-default" @click="reloadAll()">
                                            <i class="fa fa-search"></i> Search</button>
                                    </div>
                                    <div class="filter-item">
                                        <small><i>Total: total files</i></small>
                                    </div>
                                </div>
                                <div class="div">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" @click="setViewType('grid')" class="btn"
                                            :class="viewType == 'grid' ? 'btn-secondary' : 'btn-outline-secondary'"><i
                                                class="fa fa-th"></i></button>
                                        <button type="button" @click="setViewType('list')" class="btn"
                                            :class="viewType != 'grid' ? 'btn-secondary' : 'btn-outline-secondary'"><i
                                                class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="col-right">
                                    <i class="fa-spin fa fa-spinner icon-loading active" v-show="isLoading"></i>
                                    <button class="btn btn-primary mr-2" @click="addFolder">
                                        <span><i class="fa fa-folder"></i> Add Folder</span>
                                    </button>
                                    <button class="btn btn-success btn-pick-files">
                                        <span><i class="fa fa-upload"></i> Upload</span>
                                        <input multiple :accept="accept_type" type="file" name="files[]"
                                            ref="files">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="upload-new" v-show="showUploader" display="none">
                            <input type="file" name="filepond[]" class="my-pond">
                        </div>
                        <div class="files-list">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a @click="toFolderRoot" href="#">Home</a>
                                    </li>
                                    <li v-for="(item,index) in breadcrumbs" class="breadcrumb-item active"
                                        aria-current="page"><a @click.prevent="showFolder(item,index)" href="#">
                                            item . name </a></li>
                                </ol>
                            </nav>
                            <div class="border-top border-left mb-3 px-3" v-if="viewType == 'list'">
                                <div class="row font-weight-bold " style="font-size: 16px">
                                    <div class="col-sm-6 py-2 border-bottom border-right">Name</div>
                                    <div class="col-sm-2 py-2 border-bottom border-right">Type</div>
                                    <div class="col-sm-2 py-2 border-bottom border-right">Created At</div>
                                    <div class="col-sm-2 py-2 border-bottom border-right">Size</div>
                                </div>
                                <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                                    @dblclick="showFolder(folder)" @update="updateFolder" :view-type="viewType"
                                    v-for="(folder,index) in folders" :index="index" :key="'folder-' + index"
                                    :folder="folder"></folder-item>
                                <file-item v-for="(file,index) in files" :key="index" :view-type="viewType"
                                    :selected="selected" :file="file"
                                    v-on:select-file="selectFile"></file-item>
                            </div>
                            <div class="files-wraps " v-if="viewType == 'grid'" :class="'view-' + viewType">
                                <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                                    @dblclick="showFolder(folder)" @update="updateFolder"
                                    v-for="(folder,index) in folders" :index="index" :key="'folder-' + index"
                                    :folder="folder"></folder-item>
                                <file-item v-for="(file,index) in files" :key="index" :view-type="viewType"
                                    :selected="selected" :file="file"
                                    v-on:select-file="selectFile"></file-item>
                            </div>
                            <p class="no-files-text text-center" v-show="!total && apiFinished" style="display: none">
                                No file found</p>
                            <div class="text-center" v-if="totalPage > 1">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item" :class="{ disabled: filter.page <= 1 }">
                                            <a class="page-link" v-if="filter.page <=1">Previous</a>
                                            <a class="page-link" href="#" v-if="filter.page > 1"
                                                v-on:click="changePage(filter.page-1,$event)">Previous</a>
                                        </li>
                                        <li class="page-item" v-if="p >= (filter.page-3) && p <= (filter.page+3)"
                                            :class="{ active: p == filter.page }" v-for="p in totalPage"
                                            @click="changePage(p,$event)">
                                            <a class="page-link" href="#"> p </a>
                                        </li>
                                        <li class="page-item" :class="{ disabled: filter.page >= totalPage }">
                                            <a v-if="filter.page >= totalPage" class="page-link">Next</a>
                                            <a href="#" class="page-link" v-if="filter.page < totalPage"
                                                v-on:click="changePage(filter.page+1,$event)">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="browser-actions d-flex justify-content-between flex-shrink-0" v-if="selected.length">
                            <div class="col-left" v-show="selected.length">
                                <div class="control-remove" v-if="selected && selected.length">
                                    <button class="btn btn-danger" @click="removeFiles">Delete file</button>
                                </div>
                                <div class="control-info" v-if="selected && selected.length">
                                    <div class="count-selected"> selected . length file selected</div>
                                    <div class="clear-selected" @click="selected=[]"><i>unselect</i></div>
                                </div>
                            </div>
                            <div class="col-right" v-show="selected.length">
                                <button class="btn btn-primary" :class="{ disabled: !selected.length }"
                                    @click="sendFiles">Use file</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
