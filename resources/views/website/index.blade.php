@extends('layouts.main')
@section('content')
<!-- hero-start -->


<!-- hero-end -->

<!-- serve-start -->
<div class="fx-serve-1-area fix p-relative pt-120 pb-130">

    <div class="fx-serve-1-bg fix img-cover">
        <img class="fx-cube-1" src="{{ asset('public/assets/img/serve/s1-bg-1.png') }}" alt="Background">
    </div>

    <div class="container fx-container-1">

        <!-- section-title -->
        <div class="fx-serve-1-scn-title mb-45">
            <!-- <h6 class="fx-subtitle-1">
                <span>01</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">industries we serve</span>
            </h6> -->
            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Industrial Process Chiller</h2>
        </div>


        <!-- slider -->
        <div class="team-slider-section">

            <div class="swiper ServiceTeamSwiper">
                <div class="swiper-wrapper">

                    @foreach($services as $service)
                    <div class="swiper-slide team-slide">
                        <a href="{{ url($service['path']) }}">
                            <div class="team-card">

                                <img
                                    src="http://localhost:5000/{{$service['image']}}"
                                    alt=""
                                    class="team-card__img" />

                                <div class="team-card__body">
                                    <h3>{{$service['title']}}</h3>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>

        <!-- content  -->
        <div class="fx-serve-1-content">
            <!-- <a href="https://www.youtube.com/watch?v=f8ljCoogGtQ" aria-label="name"
                class="fx-play-btn-1 popup-video">
                <i class="fa-light fa-circle-play"></i>
                <span>play video</span>
            </a> -->

            <p class="fx-para-1 disc has-opacity-7 fix txxaslideup">
                <span class="txxaslideup-item fx-cube-1">Transforming Industrial Landscapes with Cutting-Edge
                    Technology and Customized Manufacturing Solutions for Growth</span>
            </p>
            <!-- <div class="fix txxaslideup">
                <div class="txxaslideup-item fx-cube-1">
                    <div class="btn-wrap">
                        <a href="services.html" aria-label="name" class="fx-pr-btn-1">
                            <span class="text" data-back="browse all services"
                                data-front="browse all services"></span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!-- serve-end -->

<div class="fx-gap-12 "></div>

<!-- about-start -->
<div class="fx-about-1-area pt-120  pb-120 p-relative fix ">

    <div class="fx-about-1-bg-img fix img-cover">
        <img src="{{asset('public/assets/img/about/a1-bg-img-1.png')}}" alt="">
    </div>

    <div class="container fx-container-1">

        <!-- section-title -->
        <div class="fx-about-1-scn-title mb-55">
            <!-- <h6 class="fx-subtitle-1">
                <span>02</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Who We Are</span>
            </h6> -->
            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">TEQTIVE ENGINEERING INDIA PVT. LTD.</h2>
        </div>
        <span class="fx-about-1-line mb-60 txaascale0 fx-cube-1"></span>

        <div class="fx-about-1-wrap row">

            <!-- left-side -->


            <!-- right-side -->
            <div class="col-lg-6">
                <div class="fx-about-1-content">
                    <p class="fx-para-1 disc has-opacity-7">Our industrial service specializes in maximizing machinery
                        performance and lifespan. With expert maintenance, timely repairs, and custom solutions, we
                        address your unique operational needs. Trust us to keep your equipment running smoothly and
                        efficiently, minimizing downtime and enhancing productivity across all your industrial
                        processes.</p>



                    <p class="fx-para-1 disc has-opacity-7">Our comprehensive industrial service is dedicated to
                        maximizing the efficiency and lifespan of your equipment. With expert maintenance, prompt
                        repairs, and customized solutions, we ensure your machinery operates at peak performance,
                        minimizing downtime and enhancing productivity for your business.</p>

                    <!-- counter -->


                    <div class="fx-about-1-content-btn txxaslideup fix">
                        <div class="txxaslideup-item fx-cube-1">
                            <a href="about.html" aria-label="name" class="fx-pr-btn-1">
                                <span class="text" data-back="Know About Us" data-front="Know About Us"></span>
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content-img fix img-cover mb-50">
                    <img src="{{asset('public/assets/img/logo/Home.jpg')}}" alt="">
                </div>
            </div>

        </div>

    </div>
</div>
<!-- about-end -->

<div class="fx-gap-12"></div>




<!-- story-start -->
<div class="fx-story-1-area fx-bg-gray fx-scn-redius  pb-120 pt-120">
    <div class="container fx-container-1">
        <!-- section-title -->
        <div class="fx-story-1-scn-title mb-50">
            <!-- <h6 class="fx-subtitle-1">
                <span>03</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Our Story</span>
            </h6> -->
            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">We are committed to industry homes with superior quality.</h2>
        </div>

        <div class="fx-story-1-disc mb-85">
            <p class="fx-para-1 has-opacity-7">We build multi-family and affordable housing communities, industrial facilities, public and private healthcare facilities, fitness centers and office buildings. We improve the supply chain management process, increase operational efficiencies and build environments.</p>
            <p class="fx-para-1 has-opacity-7">We are dedicated to constructing homes of the highest quality, ensuring excellence in every detail. Our commitment to superior craftsmanship guarantees a living space that exceeds your expectations.</p>
        </div>

        <div class="fx-story-1-img fix img-cover">
            <img src="{{ asset('public/assets/img/story/s1-img-1.png') }}" alt="">
        </div>

        <div class="fx-story-1-card">

            <!-- single-card -->
            <div class="fx-story-1-card-single">
                <div class="content">
                    <h4 class="card-titile fx-heading-1 fx-font-600">
                        <a href="projects-details.html">our mission</a>
                    </h4>
                    <p class="card-disc fx-para-1">Welcome to Industrie, a leading industry innovator with a rich history excellence. With a passion for precision and a commitment to quality we have been empowering industries and driving progress.</p>
                </div>
                <div class="card-img fix img-cover">
                    <img src="{{ asset('public/assets/img/story/s1-img-2.png') }}" alt="">
                </div>
            </div>

            <!-- single-card -->
            <div class="fx-story-1-card-single">
                <div class="content">
                    <h4 class="card-titile fx-heading-1 fx-font-600">
                        <a href="projects-details.html">our Vision</a>
                    </h4>
                    <p class="card-disc fx-para-1">Our vision in the industry is to lead with innovative solutions that set new standards for excellence. We are committed to harnessing the latest technologies and best practices to drive progress and efficiency</p>
                </div>
                <div class="card-img fix img-cover">
                    <img src="{{asset('public/assets/img/story/s1-img-3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- story-end -->





<!-- video-start -->


<div class="fx-blog-1-area pb-120 pt-120 p-relative fix ">
    <div class="container fx-container-1">
        <!-- section-title -->
        <div class="fx-blog-1-scn-title mb-50">
            <!-- <h6 class="fx-subtitle-1 ">
                <span>04</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Our Products</span>
            </h6> -->
            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Industrial News: Innovations and Trends
                Shaping Industry</h2>
        </div>

        <div class="fx-blog-1-item mb-55">

            @foreach($products as $product)

            @php
            $date = \Carbon\Carbon::parse($product['createdAt']);
            @endphp

            <!-- single-blog -->
            <div class="fx-blog-1-item-single">

                <!-- IMAGE -->
                <div class="item-img fix img-cover p-relative mb-35">
                    <img src="http://localhost:5000/{{$product['image'] }}" alt="">

                    <!-- DATE -->
                    <h6 class="item-date fx-heading-1 has-clr-white fx-font-600 text-uppercase">
                        <span>{{$date->format('d') }}</span>
                        <span>{{ strtolower($date->format('M')) }}</span>
                    </h6>
                </div>

                <!-- CATEGORY -->
                <h6 class="item-subtitle fx-heading-1 fx-font-500">
                    {{$product['category']['name'] ?? 'Category' }}
                </h6>

                <!-- TITLE -->
                <h4 class="item-title fx-heading-1 fx-font-500">
                    <a href="#">
                        {{$product['name'] }}
                    </a>
                </h4>

            </div>

            @endforeach

        </div>

        <div class="fx-blog-1-item-all-btn text-center fix txxaslideup">
            <!-- <span class="txxaslideup-item">
                <a href="blog.html" aria-label="name" class="fx-pr-btn-1 ">
                    <span class="text" data-back="Browse All News" data-front="Browse All News"></span>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </span> -->
        </div>
    </div>

    <div class="fx-blog-1-bg-shape">
        <svg width="1923" height="64" viewBox="0 0 1923 64" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.12" clip-path="url(#clip0_30_373)">
                <line x1="-33.0771" y1="69.4492" x2="10.4544" y2="-5.94949" stroke="black" />
                <line x1="-21.2379" y1="69.4492" x2="22.2935" y2="-5.94949" stroke="black" />
                <line x1="-9.39908" y1="69.4492" x2="34.1324" y2="-5.94949" stroke="black" />
                <line x1="2.44003" y1="69.4492" x2="45.9715" y2="-5.94949" stroke="black" />
                <line x1="14.2789" y1="69.4492" x2="57.8104" y2="-5.94949" stroke="black" />
                <line x1="26.118" y1="69.4492" x2="69.6495" y2="-5.94949" stroke="black" />
                <line x1="37.9569" y1="69.4492" x2="81.4883" y2="-5.94949" stroke="black" />
                <line x1="49.796" y1="69.4492" x2="93.3275" y2="-5.94949" stroke="black" />
                <line x1="61.6349" y1="69.4492" x2="105.166" y2="-5.94949" stroke="black" />
                <line x1="73.474" y1="69.4492" x2="117.005" y2="-5.94949" stroke="black" />
                <line x1="85.3131" y1="69.4492" x2="128.845" y2="-5.94949" stroke="black" />
                <line x1="97.1519" y1="69.4492" x2="140.683" y2="-5.94949" stroke="black" />
                <line x1="108.991" y1="69.4492" x2="152.523" y2="-5.94949" stroke="black" />
                <line x1="120.83" y1="69.4492" x2="164.361" y2="-5.94949" stroke="black" />
                <line x1="132.669" y1="69.4492" x2="176.201" y2="-5.94949" stroke="black" />
                <line x1="144.508" y1="69.4492" x2="188.039" y2="-5.94949" stroke="black" />
                <line x1="156.347" y1="69.4492" x2="199.878" y2="-5.94949" stroke="black" />
                <line x1="168.186" y1="69.4492" x2="211.717" y2="-5.94949" stroke="black" />
                <line x1="180.025" y1="69.4492" x2="223.556" y2="-5.94949" stroke="black" />
                <line x1="191.864" y1="69.4492" x2="235.395" y2="-5.94949" stroke="black" />
                <line x1="203.703" y1="69.4492" x2="247.234" y2="-5.94949" stroke="black" />
                <line x1="215.542" y1="69.4492" x2="259.073" y2="-5.94949" stroke="black" />
                <line x1="227.381" y1="69.4492" x2="270.912" y2="-5.94949" stroke="black" />
                <line x1="239.22" y1="69.4492" x2="282.751" y2="-5.94949" stroke="black" />
                <line x1="251.059" y1="69.4492" x2="294.59" y2="-5.94949" stroke="black" />
                <line x1="262.898" y1="69.4492" x2="306.43" y2="-5.94949" stroke="black" />
                <line x1="274.737" y1="69.4492" x2="318.268" y2="-5.94949" stroke="black" />
                <line x1="286.576" y1="69.4492" x2="330.107" y2="-5.94949" stroke="black" />
                <line x1="298.415" y1="69.4492" x2="341.946" y2="-5.94949" stroke="black" />
                <line x1="310.254" y1="69.4492" x2="353.785" y2="-5.94949" stroke="black" />
                <line x1="322.093" y1="69.4492" x2="365.624" y2="-5.94949" stroke="black" />
                <line x1="333.932" y1="69.4492" x2="377.463" y2="-5.94949" stroke="black" />
                <line x1="345.771" y1="69.4492" x2="389.302" y2="-5.94949" stroke="black" />
                <line x1="357.61" y1="69.4492" x2="401.141" y2="-5.94949" stroke="black" />
                <line x1="369.449" y1="69.4492" x2="412.98" y2="-5.94949" stroke="black" />
                <line x1="381.288" y1="69.4492" x2="424.819" y2="-5.94949" stroke="black" />
                <line x1="393.127" y1="69.4492" x2="436.658" y2="-5.94949" stroke="black" />
                <line x1="404.966" y1="69.4492" x2="448.497" y2="-5.94949" stroke="black" />
                <line x1="416.805" y1="69.4492" x2="460.336" y2="-5.94949" stroke="black" />
                <line x1="428.644" y1="69.4492" x2="472.175" y2="-5.94949" stroke="black" />
                <line x1="440.483" y1="69.4492" x2="484.014" y2="-5.94949" stroke="black" />
                <line x1="452.322" y1="69.4492" x2="495.853" y2="-5.94949" stroke="black" />
                <line x1="464.161" y1="69.4492" x2="507.692" y2="-5.94949" stroke="black" />
                <line x1="476" y1="69.4492" x2="519.531" y2="-5.94949" stroke="black" />
                <line x1="487.839" y1="69.4492" x2="531.37" y2="-5.94949" stroke="black" />
                <line x1="499.678" y1="69.4492" x2="543.209" y2="-5.94949" stroke="black" />
                <line x1="511.517" y1="69.4492" x2="555.048" y2="-5.94949" stroke="black" />
                <line x1="523.356" y1="69.4492" x2="566.887" y2="-5.94949" stroke="black" />
                <line x1="535.195" y1="69.4492" x2="578.726" y2="-5.94949" stroke="black" />
                <line x1="547.034" y1="69.4492" x2="590.565" y2="-5.94949" stroke="black" />
                <line x1="558.873" y1="69.4492" x2="602.404" y2="-5.94949" stroke="black" />
                <line x1="570.712" y1="69.4492" x2="614.243" y2="-5.94949" stroke="black" />
                <line x1="582.551" y1="69.4492" x2="626.082" y2="-5.94949" stroke="black" />
                <line x1="594.39" y1="69.4492" x2="637.921" y2="-5.94949" stroke="black" />
                <line x1="606.229" y1="69.4492" x2="649.76" y2="-5.94949" stroke="black" />
                <line x1="618.068" y1="69.4492" x2="661.599" y2="-5.94949" stroke="black" />
                <line x1="629.907" y1="69.4492" x2="673.438" y2="-5.94949" stroke="black" />
                <line x1="641.746" y1="69.4492" x2="685.277" y2="-5.94949" stroke="black" />
                <line x1="653.585" y1="69.4492" x2="697.116" y2="-5.94949" stroke="black" />
                <line x1="665.424" y1="69.4492" x2="708.955" y2="-5.94949" stroke="black" />
                <line x1="677.263" y1="69.4492" x2="720.794" y2="-5.94949" stroke="black" />
                <line x1="689.102" y1="69.4492" x2="732.633" y2="-5.94949" stroke="black" />
                <line x1="700.941" y1="69.4492" x2="744.472" y2="-5.94949" stroke="black" />
                <line x1="712.78" y1="69.4492" x2="756.311" y2="-5.94949" stroke="black" />
                <line x1="724.619" y1="69.4492" x2="768.15" y2="-5.94949" stroke="black" />
                <line x1="736.458" y1="69.4492" x2="779.989" y2="-5.94949" stroke="black" />
                <line x1="748.297" y1="69.4492" x2="791.828" y2="-5.94949" stroke="black" />
                <line x1="760.136" y1="69.4492" x2="803.667" y2="-5.94949" stroke="black" />
                <line x1="771.975" y1="69.4492" x2="815.506" y2="-5.94949" stroke="black" />
                <line x1="783.814" y1="69.4492" x2="827.345" y2="-5.94949" stroke="black" />
                <line x1="795.653" y1="69.4492" x2="839.184" y2="-5.94949" stroke="black" />
                <line x1="807.492" y1="69.4492" x2="851.023" y2="-5.94949" stroke="black" />
                <line x1="819.331" y1="69.4492" x2="862.862" y2="-5.94949" stroke="black" />
                <line x1="831.17" y1="69.4492" x2="874.701" y2="-5.94949" stroke="black" />
                <line x1="843.009" y1="69.4492" x2="886.54" y2="-5.94949" stroke="black" />
                <line x1="854.848" y1="69.4492" x2="898.379" y2="-5.94949" stroke="black" />
                <line x1="866.687" y1="69.4492" x2="910.218" y2="-5.94949" stroke="black" />
                <line x1="878.526" y1="69.4492" x2="922.057" y2="-5.94949" stroke="black" />
                <line x1="890.365" y1="69.4492" x2="933.896" y2="-5.94949" stroke="black" />
                <line x1="902.204" y1="69.4492" x2="945.735" y2="-5.94949" stroke="black" />
                <line x1="914.043" y1="69.4492" x2="957.574" y2="-5.94949" stroke="black" />
                <line x1="925.882" y1="69.4492" x2="969.413" y2="-5.94949" stroke="black" />
                <line x1="937.721" y1="69.4492" x2="981.252" y2="-5.94949" stroke="black" />
                <line x1="949.56" y1="69.4492" x2="993.091" y2="-5.94949" stroke="black" />
                <line x1="961.399" y1="69.4492" x2="1004.93" y2="-5.94949" stroke="black" />
                <line x1="973.238" y1="69.4492" x2="1016.77" y2="-5.94949" stroke="black" />
                <line x1="985.077" y1="69.4492" x2="1028.61" y2="-5.94949" stroke="black" />
                <line x1="996.916" y1="69.4492" x2="1040.45" y2="-5.94949" stroke="black" />
                <line x1="1008.75" y1="69.4492" x2="1052.29" y2="-5.94949" stroke="black" />
                <line x1="1020.59" y1="69.4492" x2="1064.13" y2="-5.94949" stroke="black" />
                <line x1="1032.43" y1="69.4492" x2="1075.96" y2="-5.94949" stroke="black" />
                <line x1="1044.27" y1="69.4492" x2="1087.8" y2="-5.94949" stroke="black" />
                <line x1="1056.11" y1="69.4492" x2="1099.64" y2="-5.94949" stroke="black" />
                <line x1="1067.95" y1="69.4492" x2="1111.48" y2="-5.94949" stroke="black" />
                <line x1="1079.79" y1="69.4492" x2="1123.32" y2="-5.94949" stroke="black" />
                <line x1="1091.63" y1="69.4492" x2="1135.16" y2="-5.94949" stroke="black" />
                <line x1="1103.47" y1="69.4492" x2="1147" y2="-5.94949" stroke="black" />
                <line x1="1115.31" y1="69.4492" x2="1158.84" y2="-5.94949" stroke="black" />
                <line x1="1127.14" y1="69.4492" x2="1170.68" y2="-5.94949" stroke="black" />
                <line x1="1138.98" y1="69.4492" x2="1182.52" y2="-5.94949" stroke="black" />
                <line x1="1150.82" y1="69.4492" x2="1194.35" y2="-5.94949" stroke="black" />
                <line x1="1162.66" y1="69.4492" x2="1206.19" y2="-5.94949" stroke="black" />
                <line x1="1174.5" y1="69.4492" x2="1218.03" y2="-5.94949" stroke="black" />
                <line x1="1186.34" y1="69.4492" x2="1229.87" y2="-5.94949" stroke="black" />
                <line x1="1198.18" y1="69.4492" x2="1241.71" y2="-5.94949" stroke="black" />
                <line x1="1210.02" y1="69.4492" x2="1253.55" y2="-5.94949" stroke="black" />
                <line x1="1221.86" y1="69.4492" x2="1265.39" y2="-5.94949" stroke="black" />
                <line x1="1233.7" y1="69.4492" x2="1277.23" y2="-5.94949" stroke="black" />
                <line x1="1245.53" y1="69.4492" x2="1289.07" y2="-5.94949" stroke="black" />
                <line x1="1257.37" y1="69.4492" x2="1300.91" y2="-5.94949" stroke="black" />
                <line x1="1269.21" y1="69.4492" x2="1312.74" y2="-5.94949" stroke="black" />
                <line x1="1281.05" y1="69.4492" x2="1324.58" y2="-5.94949" stroke="black" />
                <line x1="1292.89" y1="69.4492" x2="1336.42" y2="-5.94949" stroke="black" />
                <line x1="1304.73" y1="69.4492" x2="1348.26" y2="-5.94949" stroke="black" />
                <line x1="1316.57" y1="69.4492" x2="1360.1" y2="-5.94949" stroke="black" />
                <line x1="1328.41" y1="69.4492" x2="1371.94" y2="-5.94949" stroke="black" />
                <line x1="1340.25" y1="69.4492" x2="1383.78" y2="-5.94949" stroke="black" />
                <line x1="1352.09" y1="69.4492" x2="1395.62" y2="-5.94949" stroke="black" />
                <line x1="1363.92" y1="69.4492" x2="1407.46" y2="-5.94949" stroke="black" />
                <line x1="1375.76" y1="69.4492" x2="1419.3" y2="-5.94949" stroke="black" />
                <line x1="1387.6" y1="69.4492" x2="1431.13" y2="-5.94949" stroke="black" />
                <line x1="1399.44" y1="69.4492" x2="1442.97" y2="-5.94949" stroke="black" />
                <line x1="1411.28" y1="69.4492" x2="1454.81" y2="-5.94949" stroke="black" />
                <line x1="1423.12" y1="69.4492" x2="1466.65" y2="-5.94949" stroke="black" />
                <line x1="1434.96" y1="69.4492" x2="1478.49" y2="-5.94949" stroke="black" />
                <line x1="1446.8" y1="69.4492" x2="1490.33" y2="-5.94949" stroke="black" />
                <line x1="1458.64" y1="69.4492" x2="1502.17" y2="-5.94949" stroke="black" />
                <line x1="1470.48" y1="69.4492" x2="1514.01" y2="-5.94949" stroke="black" />
                <line x1="1482.31" y1="69.4492" x2="1525.85" y2="-5.94949" stroke="black" />
                <line x1="1494.15" y1="69.4492" x2="1537.69" y2="-5.94949" stroke="black" />
                <line x1="1505.99" y1="69.4492" x2="1549.52" y2="-5.94949" stroke="black" />
                <line x1="1517.83" y1="69.4492" x2="1561.36" y2="-5.94949" stroke="black" />
                <line x1="1529.67" y1="69.4492" x2="1573.2" y2="-5.94949" stroke="black" />
                <line x1="1541.51" y1="69.4492" x2="1585.04" y2="-5.94949" stroke="black" />
                <line x1="1553.35" y1="69.4492" x2="1596.88" y2="-5.94949" stroke="black" />
                <line x1="1565.19" y1="69.4492" x2="1608.72" y2="-5.94949" stroke="black" />
                <line x1="1577.03" y1="69.4492" x2="1620.56" y2="-5.94949" stroke="black" />
                <line x1="1588.87" y1="69.4492" x2="1632.4" y2="-5.94949" stroke="black" />
                <line x1="1600.7" y1="69.4492" x2="1644.24" y2="-5.94949" stroke="black" />
                <line x1="1612.54" y1="69.4492" x2="1656.08" y2="-5.94949" stroke="black" />
                <line x1="1624.38" y1="69.4492" x2="1667.91" y2="-5.94949" stroke="black" />
                <line x1="1636.22" y1="69.4492" x2="1679.75" y2="-5.94949" stroke="black" />
                <line x1="1648.06" y1="69.4492" x2="1691.59" y2="-5.94949" stroke="black" />
                <line x1="1659.9" y1="69.4492" x2="1703.43" y2="-5.94949" stroke="black" />
                <line x1="1671.74" y1="69.4492" x2="1715.27" y2="-5.94949" stroke="black" />
                <line x1="1683.58" y1="69.4492" x2="1727.11" y2="-5.94949" stroke="black" />
                <line x1="1695.42" y1="69.4492" x2="1738.95" y2="-5.94949" stroke="black" />
                <line x1="1707.26" y1="69.4492" x2="1750.79" y2="-5.94949" stroke="black" />
                <line x1="1719.09" y1="69.4492" x2="1762.63" y2="-5.94949" stroke="black" />
                <line x1="1730.93" y1="69.4492" x2="1774.47" y2="-5.94949" stroke="black" />
                <line x1="1742.77" y1="69.4492" x2="1786.3" y2="-5.94949" stroke="black" />
                <line x1="1754.61" y1="69.4492" x2="1798.14" y2="-5.94949" stroke="black" />
                <line x1="1766.45" y1="69.4492" x2="1809.98" y2="-5.94949" stroke="black" />
                <line x1="1778.29" y1="69.4492" x2="1821.82" y2="-5.94949" stroke="black" />
                <line x1="1790.13" y1="69.4492" x2="1833.66" y2="-5.94949" stroke="black" />
                <line x1="1801.97" y1="69.4492" x2="1845.5" y2="-5.94949" stroke="black" />
                <line x1="1813.81" y1="69.4492" x2="1857.34" y2="-5.94949" stroke="black" />
                <line x1="1825.65" y1="69.4492" x2="1869.18" y2="-5.94949" stroke="black" />
                <line x1="1837.48" y1="69.4492" x2="1881.02" y2="-5.94949" stroke="black" />
                <line x1="1849.32" y1="69.4492" x2="1892.86" y2="-5.94949" stroke="black" />
                <line x1="1861.16" y1="69.4492" x2="1904.69" y2="-5.94949" stroke="black" />
                <line x1="1873" y1="69.4492" x2="1916.53" y2="-5.94949" stroke="black" />
                <line x1="1884.84" y1="69.4492" x2="1928.37" y2="-5.94949" stroke="black" />
                <line x1="1896.68" y1="69.4492" x2="1940.21" y2="-5.94949" stroke="black" />
                <line x1="1908.52" y1="69.4492" x2="1952.05" y2="-5.94949" stroke="black" />
                <line x1="1920.36" y1="69.4492" x2="1963.89" y2="-5.94949" stroke="black" />
            </g>
            <defs>
                <clipPath id="clip0_30_373">
                    <rect width="1923" height="64" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="fx-blog-1-bg-shape-2 txxascale1">
        <img class="fx-cube-1" src="{{ asset('public/assets/img/blog/b1-bg-shape-1.png') }}" alt="">
    </div>
</div>

<!-- video-end -->

<!-- testimonial-start -->
<div class="fx-testimonial-1-area pt-120 pb-120">
    <div class="container fx-container-1">

        <!-- section-title -->
        <div class="fx-testimonial-1-scn-title mb-60">
            <h6 class="fx-subtitle-1 ">
                <span>05</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Client Testimonials</span>
            </h6>
            <h2 class="fx-scn-title-1 txaa-split-text-3-ani txaa-split-text-3">Client Testimonials: Success Stories in
                Industrial Services</h2>
        </div>

        <div class="fx-testimonial-1-wrap mb-45">

            <!-- LEFT SLIDER -->
            <div class="fx-testimonial-1-slider-preview p-relative fix">
                <div class="swiper-container fix fx-testimonial-1-active-1">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="fx-testimonial-1-slider-preview-item fix img-cover">
                                <img src="{{ asset('public/assets/img/testimonial/t1-img-1.png') }}" alt="">
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="fx-testimonial-1-slider-btn fx-testimonial-1-slider-prev">
                    <i class="fa-regular fa-angle-left"></i>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="fx-testimonial-1-slider-main">
                <div class="swiper-container fix fx-testimonial-1-active-1">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="fx-testimonial-1-slider-main-item">

                                <div class="item-img fix img-cover p-relative">
                                    <img src="{{ asset('public/assets/img/testimonial/t1-img-2.png') }}" alt="">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>

                                <div class="content-wrap">

                                    <!-- DESCRIPTION -->
                                    <h5 class="fx-heading-1 item-comment">
                                        "{{$testimonial['description'] }}"
                                    </h5>

                                    <div class="item-dot">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>

                                    <!-- NAME -->
                                    <h6 class="fx-heading-1 author-name">
                                        {{$testimonial['name'] }}
                                    </h6>

                                    <!-- CITY -->
                                    <p class="fx-para-1 has-opacity-7 author-bio">
                                        {{$testimonial['city'] }}
                                    </p>

                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- RIGHT SLIDER -->
            <div class="fx-testimonial-1-slider-preview p-relative fix">
                <div class="swiper-container fix fx-testimonial-1-active-1">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="fx-testimonial-1-slider-preview-item fix img-cover">
                                <img src="{{ asset('public/assets/img/testimonial/t1-img-3.png') }}" alt="">
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="fx-testimonial-1-slider-btn fx-testimonial-1-slider-next">
                    <i class="fa-regular fa-angle-right"></i>
                </div>
            </div>

        </div>

        <div class="fx-slider-pagi-1 fx-t1-slider-pagination"></div>

    </div>
</div>

<!-- testimonial-end -->


@endsection