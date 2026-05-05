@extends('layouts.main')
@section('content')


<div class="fx-contact-us-1-area">
    <div class="container fx-container-1">
        <div class="row align-items-center pt-120 pb-120">
            <!-- left-side -->
            <div class="col-lg-6">
                <div class="fx-contact-us-1-left">
                    <!-- section-title -->
                    <div class="fx-blog-1-scn-title mb-35">
                        <!-- <h6 class="fx-subtitle-1 ">
                            <span>06</span>
                            <span class="txaa-split-text-2 txaa-split-text-2-ani">Get in Touch</span>
                        </h6> -->
                        <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Reach Out for Expert Industrial Service Solutions</h2>
                    </div>

                    <form id="contactForm" class="fx-form-1">

                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">full name:</label>
                            <input name="name" class="fx-form-1-input" type="text" placeholder="Full Name">
                        </div>

                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">phone:</label>
                            <input name="phone" class="fx-form-1-input" type="tel" placeholder="+91 9876543210">
                        </div>

                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">Email:</label>
                            <input name="email" class="fx-form-1-input" type="email" placeholder="info@gmail.com">
                        </div>

                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">message:</label>
                            <textarea name="message" class="fx-form-1-input" placeholder="Write your message..."></textarea>
                        </div>

                        <div class="fx-form-1-box">
                            <button type="submit" class="fx-pr-btn-1">
                                Submit Now
                            </button>
                        </div>

                    </form>


                </div>
            </div>



            <div class="col-lg-6">
                <div class="fx-contact-us-1-right">

                    <div class="fx-contact-us-1-content fix">

                        <!-- GET IN TOUCH -->
                        <div class="fx-contact-us-1-info-box fix txxaslideup">
                            <h6 class="box-title fx-heading-1 fx-font-400">Get in Touch:</h6>

                            <!-- <ul class="info-list txxaslideup-item fx-cube-1"> -->
                                <ul class="info-list txxaslideup-item fx-cube-1">

                                <li class="text-white">
                                    <a href="mailto:info@forgexindustry.co.uk">
                                        <i class="fa-regular fa-envelope"></i>
                                        info@forgexindustry.co.uk
                                    </a>
                                </li>

                                <li class="text-white">
                                    <a href="tel:+919625340587">
                                        <i class="fa-light fa-phone-volume"></i>
                                        +91-9625340587
                                    </a>
                                </li>

                                <li class="text-white">
                                    <a href="tel:+917048935403">
                                        <i class="fa-light fa-phone-volume"></i>
                                        +91-7048935403
                                    </a>
                                </li>

                                <li class="text-white">
                                    <a href="tel:+919069510846">
                                        <i class="fa-light fa-phone-volume"></i>
                                        +91-9069510846
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <!-- REGIONAL OFFICES -->
                        <div class="fx-contact-us-1-info-box txxaslideup fix">
                            <h6 class="box-title fx-heading-1 fx-font-400">Regional Offices:</h6>

                            <div class="regional-offices-wrapper">

                                <!-- WEST -->
                                <div class="regional-office-item">
                                    <h6 class="reg-title  pb-10">West</h6>
                                    <ul class="info-list">
                                        <li><i class="fa-regular fa-location-dot"></i> Ahmedabad, Gujarat</li>
                                        <li>
                                            <a href="mailto:sales.west@teqveref.com">
                                                <i class="fa-regular fa-envelope"></i>
                                                sales.west@teqveref.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+919319088580">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +91-9319088580
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- SOUTH -->
                                <div class="regional-office-item">
                                    <h6 class="reg-title pt-10 ">South</h6>
                                    <ul class="info-list">
                                        <li><i class="fa-regular fa-location-dot"></i> Bengaluru</li>
                                        <li>
                                            <a href="mailto:sales.south@teqveref.com">
                                                <i class="fa-regular fa-envelope"></i>
                                                sales.south@teqveref.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+919311772793">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +91-9311772793
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- EAST -->
                                <div class="regional-office-item">
                                    <h6 class="reg-title  pt-10 ">East</h6>
                                    <ul class="info-list">
                                        <li><i class="fa-regular fa-location-dot"></i> Kolkata</li>
                                        <li>
                                            <a href="mailto:sales.east@teqveref.com">
                                                <i class="fa-regular fa-envelope"></i>
                                                sales.east@teqveref.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+917289927046">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +91-7289927046
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- right-side -->

        </div>
    </div>
</div>

<!-- contact-us-end -->

@endsection