<!-- header-start -->
<div class="fx-header-1-area  ">
    <div class="fx-header-1-container">
        <!-- header-top -->
        <div class="fx-header-1-top">
            <ul class="fx-contact-list">
                <li>
                    <a href="#" aria-label="name">
                        <i class="fa-regular fa-envelope"></i>
                        info.teqve@gmail.com
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="name">
                        <i class="fa-regular fa-phone-volume"></i>
                        +91-9625340587
                    </a>
                </li>
                <!-- <li>
                    <i class="fa-regular fa-clock"></i>
                    Mon - Fri 8:30 - 17:30, Sat - Sun off
                </li> -->
            </ul>
            <div class="fx-social-icon">
                <a href="#" class="fx-social-icon-btn" aria-label="name">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="fx-social-icon-btn" aria-label="name">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#" class="fx-social-icon-btn" aria-label="name">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="#" class="fx-social-icon-btn" aria-label="name">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- header-main -->
        <div class="fx-header-1-main">

            <!-- logo -->
            <a href="{{ url('/') }}" aria-label="name" class="fx-header-1-main-logo">
                <img src="{{asset('public/assets/img/logo/favicon.png')}}" alt="Logo">

                <!-- src="{{ asset('public/assets/img/hero/h1-img-2.png') }}" -->
            </a>

            <!-- menu -->
            <nav class="main-navigation fx-ml-auto d-none d-lg-block">
                <ul id="main-nav" class="nav navbar-nav clearfix">

                    <li>
                        <a href="{{ url('/') }}"
                            class="{{ request()->is('/') ? 'is-active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'is-active' : '' }}">
                            About
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#!">Our Products</a>

                        <ul class="dropdown-menu clearfix">
                            @foreach($category as $item)
                            <li>

                                <a href="{{ url('products/'.$item['_id']) }}">
                                    {{$item['name'] ?? 'No Name' }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('installation') }}"
                            class="{{ request()->routeIs('installation') ? 'is-active' : '' }}">
                            Installation
                        </a>
                    </li>



                    <li>
                        <a href="{{ route('industry') }}"
                            class="{{ request()->routeIs('industry') ? 'is-active' : '' }}">
                            Industry Serving
                        </a>
                    </li>







                    <li>
                        <a href="{{ route('ManufacringFacility') }}"
                            class="{{ request()->routeIs('ManufacringFacility') ? 'is-active' : '' }}">
                            Manufacturing Facility
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- action-btn -->
            <div class="fx-header-1-action-link d-flex align-items-center justify-content-end">

                <!-- search-btn -->
                <!-- <button type="button" aria-label="name" class="fx-search-btn-1 search_btn_toggle">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    search...
                </button> -->

                <!-- pr-btn -->
                <!-- <a href="contact.html" aria-label="name" class="fx-pr-btn-1">
                    <span class="text" data-back="request a quote" data-front="request a quote"></span>
                </a> -->

                <!-- sidebar-btn -->
                <button type="button" aria-label="name" class="fx-menu-btn-1 offcanvas_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>

        </div>
    </div>
</div>
<!-- header-end -->
<div class="fx-hero-1-area ">
    <div class="fx-hero-1-slider">
        <div class="swiper-container fx-hero-1-active fix">
            <div class="swiper-wrapper">

                @foreach($sliders as $index => $slide)
                <div class="swiper-slide">
                    <div class="fx-hero-1-slider-item">

                        <!-- IMAGE (same class, same UI) -->
                        <div class="fx-hero-1-slider-item-img img-cover fix">
                            <img src="{{ $imageUrl . $slide['image'] }}" alt="">
                        </div>

                        <!-- CONTENT (same UI) -->
                        <div class="container fx-container-1">
                            <div class="fx-hero-1-slider-item-content">

                                <!-- NUMBER -->
                                <h6 class="fx-hero-1-slider-item-number fx-heading-1">
                                    <!-- <span>{{ str_pad($index+1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <span>/</span>
                                    <span>{{ count($sliders) }}</span> -->
                                </h6>

                                <!-- TITLE -->
                                <h1 class="fx-hero-1-slider-item-title fx-heading-1 text-uppercase"
                                    data-txaa-split-text-1>
                                    <!-- {{$slide['title'] ?? 'Default Title' }} -->
                                </h1>

                                <!-- DESCRIPTION (same static) -->
                                <p class="fx-hero-1-slider-item-pera fx-para-1 has-clr-white fix">
                                    <!-- <span class="d-inline-block">
                                        Cutting-Edge Industrial Solutions to Elevate Your
                                        Manufacturing and Production Capabilities Efficiently
                                    </span> -->
                                </p>

                                <!-- BUTTON (same) -->
                                <div class="fx-hero-1-slider-item-btn fix">
                                    <!-- <span class="d-inline-block">
                                        <a href="services-details.html"
                                            class="fx-pr-btn-1 has-hover-white">
                                            <span class="text"
                                                data-back="discover more"
                                                data-front="discover more"></span>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </span> -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="fx-hero-1-pagination-posi">
        <div class="fx-hero-1-pagination"></div>
    </div>

</div>