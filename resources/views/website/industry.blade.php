@extends('layouts.main')
@section('content')


<div class="fx-blog-page-area pt-120 pb-120">
    <div class="container fx-container-1">
        <div class="fx-about-1-scn-title mb-55">

            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Industry Serving</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="fx-blog-page-item has-three-col mb-65">

                    @foreach($products as $product)
                    <div class="fx-blog-1-item-single">

                        <div class="item-img fix img-cover p-relative mb-35">
                            <img src="http://localhost:5000/{{$product['image'] }}" alt="">
                        </div>

                        <!-- CATEGORY -->
                        <!-- <h6 class="item-subtitle fx-heading-1 fx-font-500">
                            {{$product['category']['name'] ?? 'Category' }}
                        </h6> -->

                        <!-- TITLE -->
                        <h4 class="item-title fx-heading-1 fx-font-500">
                            <a href="projects-details/{{$product['_id'] }}">
                                {{$product['title'] ?? 'No Name' }}
                            </a>
                        </h4>

                    </div>
                    @endforeach

                </div>

                <!-- <div class="text-center">
                    <div class="fx-pagination">
                        <a href="#" aria-label="name" class="fx-pagination-item has-btn">
                            <i class="fa-regular fa-chevrons-left"></i>
                        </a>
                        <a href="#" aria-label="name" class="fx-pagination-item">1</a>
                        <a href="#" aria-label="name" class="fx-pagination-item">2</a>
                        <a href="#" aria-label="name" class="fx-pagination-item">3</a>
                        <a href="#" aria-label="name" class="fx-pagination-item has-btn">
                            <i class="fa-regular fa-chevrons-right"></i>
                        </a>
                    </div>
                </div> -->
            </div>

            <!-- sidebar -->

        </div>
    </div>
</div>
<!-- blog-end -->


@endsection