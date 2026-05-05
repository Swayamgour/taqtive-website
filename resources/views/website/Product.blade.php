@extends('layouts.main')
@section('content')


<!-- projects-start -->
<div class="fx-projects-7-area pt-120 pb-120">
    <div class="container fx-container-1">

        <!-- filter-btn -->

        <div class="fx-about-1-scn-title mb-55">

            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Our Product</h2>
        </div>

        <!-- filter-item -->
        <div class="fx-projects-7-filter-item grid mb-45">

            <div class="grid-sizer"></div>

            <!-- single-item -->
            <div class="col-12 row">

                @if(!empty($products) && count($products) > 0)

                @foreach($products as $product)

                @php
                $categoryName = $product['category']['name'] ?? 'industry';
                $productName = $product['name'] ?? 'No Product ';
                $productId = $product['_id'] ?? null;

                // ✅ slug for filter class (space issue fix)
                $categoryClass = \Illuminate\Support\Str::slug($categoryName);

                // ✅ image fallback
                $image = !empty($product['image'])
                ? 'http://localhost:5000/'.$product['image']
                : asset('images/no-image.png');

                // ✅ correct URL

                $productUrl = $productId ? url('projectsDetails/'.$productId) : '#';

                @endphp

                <div class="col-lg-6 col-md-6">
                    <div class="grid-item w-100 {{$categoryClass }}">
                        <div class="fx-projects-7-filter-item-single fix img-cover p-relative">

                            <!-- IMAGE -->
                            <img
                                src="{{$image }}"
                                alt="{{$productName }}"
                                loading="lazy"
                                onerror="this.onerror=null;
                                // this.src='{{ asset('images/no-image.png') }}';" />

                            <div class="content">
                                <div class="left">

                                    <!-- CATEGORY -->
                                    <h5 class="item-subtitle fx-heading-1 text-uppercase has-clr-white">
                                        {{$categoryName }}
                                    </h5>

                                    <!-- NAME -->
                                    <h4 class="item-title fx-heading-1 fx-font-600">
                                        <a href="{{$productUrl }}">
                                            {{$productName }}
                                        </a>
                                    </h4>

                                </div>

                                <!-- BUTTON -->
                                <a href="{{$productUrl }}" class="item-btn">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
                                        <path d="M13.0001 0H2.00012V2H9.58592L0.585938 11L2.00015 12.4142L11.0001 3.41427V11H13.0001V0Z" fill="#FC5220" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                @else

                <!-- 🔥 EMPTY STATE -->
                <div class="col-12 text-center py-5">
                    <h3>No Products Found</h3>
                    <p style="color:#777;">This category has no products yet.</p>
                </div>

                @endif

            </div>


        </div>
    </div>
</div>

@endsection