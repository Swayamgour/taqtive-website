{{-- resources/views/website/components/testimonial.blade.php --}}

<div class="fx-testimonial-1-area pt-120 pb-120">
    <div class="container fx-container-1">

        <div class="fx-testimonial-1-scn-title mb-60">
            <h6 class="fx-subtitle-1 ">
                <span>05</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Client Testimonials</span>
            </h6>
            <h2 class="fx-scn-title-1">
                Client Testimonials: Success Stories in Industrial Services
            </h2>
        </div>

        <div class="fx-testimonial-1-wrap mb-45">

            {{-- LEFT --}}
            <div class="fx-testimonial-1-slider-preview p-relative fix">
                <div class="swiper fix fx-testimonial-left">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="fx-testimonial-1-slider-preview-item img-cover">
                                    <img src="{{ asset('public/assets/img/testimonial/t1-img-1.png') }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="fx-testimonial-1-slider-prev">‹</div>
            </div>

            {{-- MAIN --}}
            <div class="fx-testimonial-1-slider-main">
                <div class="swiper fx-testimonial-main">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="fx-testimonial-1-slider-main-item">

                                    <div class="item-img img-cover">
                                        <img src="{{ asset('public/assets/img/testimonial/t1-img-2.png') }}">
                                    </div>

                                    <div class="content-wrap">
                                        <h5>"{{$testimonial['description'] }}"</h5>
                                        <h6>{{$testimonial['name'] }}</h6>
                                        <p>{{$testimonial['city'] }}</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="fx-testimonial-1-slider-preview p-relative fix">
                <div class="swiper fx-testimonial-right">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="fx-testimonial-1-slider-preview-item img-cover">
                                    <img src="{{ asset('public/assets/img/testimonial/t1-img-3.png') }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="fx-testimonial-1-slider-next">›</div>
            </div>

        </div>
    </div>
</div>