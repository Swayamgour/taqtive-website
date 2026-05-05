@extends('layouts.main')
@section('content')


<!-- projects-start -->
<div class="fx-projects-7-area pt-120 pb-120">
    <div class="container fx-container-1">
       

        <!-- filter-btn -->
        <div class="fx-about-1-scn-title mb-55">

            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Manufacturing Facility</h2>
        </div>


        <!-- filter-item -->
        <div class="fx-projects-7-filter-item grid mb-45">

            <div class="grid-sizer"></div>

            <!-- single-item -->
            <div class="col-12 row">

                @foreach($facilitys as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="grid-item w-100 {{$product['category']['name'] ?? '' }}">
                        <div class="fx-projects-7-filter-item-single fix img-cover p-relative">

                            <!-- IMAGE -->
                            <img src="http://localhost:5000/{{$product['image'] }}" alt="">

                            <div class="content">
                                <div class="left">

                                    <!-- CATEGORY -->
                                    <!-- <h5 class="item-subtitle fx-heading-1 text-uppercase has-clr-white">
                                        {{$product['category']['name'] ?? 'industry' }}
                                    </h5> -->

                                    <!-- NAME -->
                                    <h4 class="item-title fx-heading-1 fx-font-600">
                                        <a href="projects-details/{{$product['_id'] }}">
                                            {{$product['title'] ?? 'No Name' }}
                                        </a>
                                    </h4>

                                </div>

                                <!-- BUTTON -->
                                <!-- <a href="projects-details/{{$product['_id'] }}" class="item-btn">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
                                        <path d="M13.0001 0H2.00012V2H9.58592L0.585938 11L2.00015 12.4142L11.0001 3.41427V11H13.0001V0Z" fill="#FC5220" />
                                    </svg>
                                </a> -->

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </div>
</div>

@endsection