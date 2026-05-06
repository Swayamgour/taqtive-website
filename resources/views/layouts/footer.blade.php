<!-- footer-start -->
<div class="fx-footer-1-area fix ">
    <div class="container fx-container-1">
        <div class="fx-footer-1-widget pt-60 pb-95">

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <div class="fx-footer-1-logo fix txxaslideup">
                    <div class="text-center">
                        <a class="txxaslideup-item fx-cube-1" href="index.html" aria-label="logo">

                            <img src="{{asset('public/assets/img/logo/favicon.png')}}" alt="Logo" style="width: 150px;">

                        </a>
                    </div>

                    <p class="pt-20">TEQTIVE ENGINEERING INDIA PVT. LTD. tence—that supports one central, controlling idea. It usually begins on a new, often indented, line and functions as a structural unit to organize ideas. Well-developed paragraphs</p>


                    <h6 style="margin-bottom: 5px;" class="widget-title fx-heading-1  pt-50">Social media Icons:</h6>
                    <div class="fx-social-icon ">

                        <a href="#" class="fx-social-icon-btn-footer" aria-label="name">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="fx-social-icon-btn-footer" aria-label="name">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="fx-social-icon-btn-footer" aria-label="name">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="fx-social-icon-btn-footer" aria-label="name">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <h6 class="widget-title fx-heading-1 ">useful links:</h6>

                <ul class="fx-footer-1-menu">

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



                    <!--  -->



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

            </div>

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <h6 class="widget-title fx-heading-1">Our Product:</h6>

                <ul class="fx-footer-1-menu-2">
                    @foreach($category as $item)
                    <li>
                        <a href="{{ url('products/'.$item['_id']) }}" aria-label="{{$item['name'] }}">
                            {{$item['name'] ?? 'No Name' }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <h6 class="widget-title fx-heading-1 ">Get in Touch:</h6>

                <ul class="fx-footer-1-contact">

                    <!-- ADDRESS -->
                    <li class="contact-item">
                        <i class="fa-regular fa-location-dot"></i>
                        <div>
                            <p>
                                31 St Martin's Ln,<br>
                                London WC2N 4DD, United Kingdom
                            </p>

                            <p>
                                S-47, South Side Industrial Area,<br>
                                Ghaziabad - 201002 (U.P.), India
                            </p>

                            <p>
                                11/3, UPSIDC, South Side Industrial Area,<br>
                                Ghaziabad - 201002 (U.P.), India
                            </p>
                        </div>
                    </li>

                    <!-- EMAIL -->
                    <li class="contact-item">
                        <i class="fa-regular fa-envelope"></i>
                        <div class="contact-text">
                            <a href="mailto:info.teqve@gmail.com">info.teqve@gmail.com</a>
                            <a href="mailto:info@teqveref.com">info@teqveref.com</a>
                            <a href="mailto:sales@teqveref.com">sales@teqveref.com</a>
                            <a href="mailto:service@teqveref.com">service@teqveref.com</a>
                        </div>
                    </li>

                    <!-- PHONE -->
                    <li class="contact-item">
                        <i class="fa-regular fa-phone-volume"></i>
                        <div class="contact-text">
                            <a href="tel:+919625340587">+91-9625340587</a>
                            <a href="tel:+917048935403">+91-7048935403</a>
                            <a href="tel:+919069510846">+91-9069510846</a>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </div>


    <div class="fx-footer-1-copyright pt-20 pb-20">
        <div class="container fx-container-1">
            <div class="fx-footer-1-copyright-flex d-flex align-items-center">
                <!-- <p class="fx-footer-1-copyright-text fx-para-1">©2026, </a> All Rights Reserved.</p> -->
                <p class="fx-footer-1-copyright-text fx-para-1">
                    ©2026,
                    <a href="https://riveyrainfotech.com/" target="_blank">
                        Riveyra Infotech Pvt. Ltd.
                    </a>
                    All Rights Reserved.
                </p>

                <!-- <ul class="fx-footer-1-copyright-menu">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#">Legal Info</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

</div>
<!-- footer-end -->
<div class="fx-gap-12"></div>

<!-- offcanvas-start -->
<div class="txa-offcanvas-box  offcanvas_box_active">
    <button class="txa-offcanvas-box-close offcanvas_box_close" aria-label="name">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="txa-offcanvas-box-container lenis lenis-smooth">

        <!-- services -->
        <div class="txa-offcanvas-services-wrap d-lg-block d-none">
            <h5 class="txa-offcanvas-services-title fx-heading-1 fx-font-400">
                our products:
            </h5>

            <ul class="txa-offcanvas-services">
                @foreach($category ?? [] as $item)
                <li>
                    <span class="offcanvas-slideup">
                        <a
                            class="txa-offcanvas-services-item fx-heading-1 fx-font-400"
                            href="{{ url('products/'.$item['_id']) }}"
                            aria-label="{{$item['name'] }}">
                            <i class="fa-solid fa-arrow-right"></i>
                            {{$item['name'] ?? 'No Name' }}
                        </a>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>



        <!-- <div class="txa-offcanvas-search d-lg-none d-block">
            <form action="#" class="txa-offcanvas-search-form">
                <input class="txa-offcanvas-search-form-input" type="text" aria-label="name" placeholder="Search">
                <button class="txa-offcanvas-search-form-btn" type="button" aria-label="name">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div> -->

        <!-- mobile-menu-list -->
        <div class="mobile-menu-navigation d-lg-none d-block">
            <nav class="mobile-main-navigation clearfix ul-li">
                <ul id="main-nav2" class="nav navbar-nav clearfix">

                    <!-- HOME -->
                    <li>
                        <a href="{{ url('/') }}"
                            class="{{ request()->is('/') ? 'is-active' : '' }}">
                            Home
                        </a>
                    </li>

                    <!-- ABOUT -->
                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'is-active' : '' }}">
                            About
                        </a>
                    </li>

                    <!-- MANUFACTURING -->
                    <li>
                        <a href="{{ route('ManufacringFacility') }}"
                            class="{{ request()->routeIs('ManufacringFacility') ? 'is-active' : '' }}">
                            Manufacturing Facility
                        </a>
                    </li>

                    <!-- INDUSTRY -->
                    <li>
                        <a href="{{ route('industry') }}"
                            class="{{ request()->routeIs('industry') ? 'is-active' : '' }}">
                            Industry Serving
                        </a>
                    </li>

                    <!-- 🔥 OUR PRODUCTS (DYNAMIC DROPDOWN) -->
                    <li class="dropdown">
                        <a href="#!">Our Products</a>

                        <ul class="dropdown-menu clearfix">
                            @foreach($category ?? [] as $item)
                            <li>
                                <a href="{{ url('products/'.$item['_id']) }}">
                                    {{$item['name'] ?? 'No Name' }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <!-- INSTALLATION -->
                    <li>
                        <a href="{{ route('installation') }}"
                            class="{{ request()->routeIs('installation') ? 'is-active' : '' }}">
                            Installation
                        </a>
                    </li>

                    <!-- CONTACT -->
                    <li>
                        <a href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

        <div class="txa-offcanvas-content">

            <!-- contact -->
            <!-- <div class="txa-offcanvas-content-box">
                <h6 class="txa-offcanvas-content-box-title fx-heading-1 fx-font-400">quick contact:</h6>

                <ul class="txa-offcanvas-contact">
                    <li class="fx-heading-1 fix">
                        <span class="offcanvas-slideup">
                            <i class="fa-solid fa-location-dot"></i>
                            the londoner <br> 83 the strand, sliema, malta.
                        </span>
                    </li>
                    <li class="fx-heading-1 fix">
                        <span class="offcanvas-slideup">
                            <a href="#" aria-label="name">
                                <i class="fa-solid fa-phone"></i>
                                +1 917 265 8444
                            </a>
                        </span>

                    </li>
                    <li class="fx-heading-1 fix">
                        <span class="offcanvas-slideup">
                            <a href="#" aria-label="name">
                                <i class="fa-solid fa-envelope-open-text"></i>
                                example@email.com
                            </a>
                        </span>

                    </li>
                </ul>
            </div> -->

            <!-- socail -->
            <!-- <div class="txa-offcanvas-content-box">
                <h6 class="txa-offcanvas-content-box-title fx-heading-1 fx-font-400">we're on social media:</h6>

                <ul class="txa-offcanvas-social">
                    <li>
                        <span class="offcanvas-slideup">
                            <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500 " aria-label="name">
                                <i class="fa-brands fa-linkedin-in"></i>
                                linkedin
                            </a>
                        </span>

                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500 " aria-label="name">
                                <i class="fa-brands fa-facebook-f"></i>
                                facebook
                            </a>
                        </span>

                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500 " aria-label="name">
                                <i class="fa-brands fa-x-twitter"></i>
                                twitter
                            </a>
                        </span>

                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500" aria-label="name">
                                <i class="fa-brands fa-instagram"></i>
                                instagram
                            </a>
                        </span>

                    </li>

                </ul>
            </div> -->

        </div>
    </div>
</div>


<div class="overlay"></div>

<!-- JS here -->
<script src="{{asset('public/assets//js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('public/assets//js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets//js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/assets//js/wow.js')}}"></script>
<script src="{{asset('public/assets//js/nice-select.min.js')}}"></script>
<script src="{{asset('public/assets//js/marquee.min.js')}}"></script>
<script src="{{asset('public/assets//js/magnific-popup.min.js')}}"></script>
<script src="{{asset('public/assets//js/SplitText.min.js')}}"></script>
<script src="{{asset('public/assets//js/gsap.min.js')}}"></script>
<script src="{{asset('public/assets//js/CustomEase.min.js')}}"></script>
<script src="{{asset('public/assets//js/counterup.min.js')}}"></script>
<script src="{{asset('public/assets//js/waypoints.min.js')}}"></script>
<script src="{{asset('public/assets//js/lenis.min.js')}}"></script>
<script src="{{asset('public/assets//js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('public/assets//js/main.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<!-- <script>
    AOS.init({
        duration: 1000, // animation speed
        once: true // ek baar hi chale
    });
</script> -->

<script>
    const elements = document.querySelectorAll('.animate-up');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    });

    elements.forEach(el => observer.observe(el));
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const swiper = new Swiper('.ServiceTeamSwiper', {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            loop: true,
            speed: 800,
            grabCursor: true,

           

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,

                }
            }
        });

        // 🔥 LOAD ANIMATION (stagger effect)
        const slides = document.querySelectorAll('.team-slide');

        slides.forEach((slide, index) => {
            setTimeout(() => {
                slide.classList.add('show');
            }, index * 150); // delay each card
        });

    });
</script>


<script>
    var swiper = new Swiper('.fx-serve-1-active', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        speed: 800, // 🔥 smooth scroll fix
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: '#fx-serve-1-slider-next',
            prevEl: '#fx-serve-1-slider-prev',
        },

        breakpoints: {
            320: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        }
    });


    document.addEventListener("DOMContentLoaded", function() {

        // ALL testimonial sliders (same class)
        const sliders = document.querySelectorAll(".fx-testimonial-1-active-1");

        sliders.forEach((slider, index) => {
            new Swiper(slider, {
                loop: true,
                speed: 800,
                spaceBetween: 20,

                slidesPerView: 1,

                navigation: {
                    nextEl: ".fx-testimonial-1-slider-next",
                    prevEl: ".fx-testimonial-1-slider-prev",
                },

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        });

    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        new Swiper(".fx-core-1-active", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            speed: 800,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: ".fx-core-next",
                prevEl: ".fx-core-prev",
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    });
</script>

<script>
    document.getElementById("contactForm").addEventListener("submit", async function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        const data = {
            name: formData.get("name"),
            phone: formData.get("phone"),
            email: formData.get("email"),
            message: formData.get("message")
        };

        try {
            const res = await fetch("https://taqtiveadmin.amaxjobs.com/api/contact", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            });

            const result = await res.json();

            if (res.ok) {
                Swal.fire({
                    icon: "success",
                    title: "Message Sent!",
                    text: "Your message has been sent successfully.",
                    confirmButtonColor: "#FC5220",
                    timer: 3000

                });

                this.reset();

            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops!",
                    text: result.message || "Something went wrong",
                    confirmButtonColor: "#FC5220",
                    timer: 3000
                });
            }

        } catch (error) {
            console.error(error);
            alert("Server error ❌");
        }
    });
</script>


</body>

</html>