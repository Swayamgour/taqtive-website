{{-- resources/views/projects-details.blade.php --}}
@extends('layouts.main')
@section('content')

<!-- project-details-start -->
<div class="fx-project-details-area pt-120 pb-120">
    <div class="container fx-container-1">

        <!-- Back Button -->
        <div class="mb-30">
            <!-- <a href="{{ url('/product') }}" class="back-button">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Back to Projects
            </a> -->
        </div>

        <!-- Main Project Details -->
        <div class="fx-project-details-wrapper">

            <!-- Hero Section with Image -->
            <div class="fx-project-hero mb-60">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="fx-project-main-image img-cover">
                            <img src="http://localhost:5000/{{$product['image'] }}" alt="{{$product['name'] }}" class="w-100 rounded-3">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="fx-project-info-card">
                            <div class="project-badge mb-3">
                                <span class="category-badge">{{$product['category']['name'] ?? 'Industry' }}</span>
                            </div>
                            <h1 class="fx-project-title mb-4">{{$product['name'] }}</h1>
                            <p class="fx-project-description mb-4">{{$product['description'] }}</p>

                            <!-- Quick Info -->
                            <div class="fx-project-meta">
                                <div class="meta-item">
                                    <div class="meta-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path d="M12 8v4l3 3M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                        </svg>
                                    </div>
                                    <div class="meta-info">
                                        <span class="meta-label">Created Date</span>
                                        <span class="meta-value">{{ date('F d, Y', strtotime($product['createdAt'])) }}</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <div class="meta-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path d="M20 7h-4.18A3 3 0 0 0 16 5.18V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v1.18A3 3 0 0 0 8.18 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Z" />
                                        </svg>
                                    </div>
                                    <div class="meta-info">
                                        <span class="meta-label">Last Updated</span>
                                        <span class="meta-value">{{ date('F d, Y', strtotime($product['updatedAt'])) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specifications Section -->
            @if(isset($product['specifications']) && !empty(array_filter((array)$product['specifications'])))
            <div class="fx-project-specifications mb-60">
                <div class="section-header mb-40">
                    <h2 class="fx-section-title">Technical Specifications</h2>
                    <p class="fx-section-subtitle">Detailed product specifications and technical data</p>
                </div>

                <div class="specifications-grid">
                    <!-- Basic Specifications -->
                    <div class="spec-group">
                        <h3 class="spec-group-title">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            </svg>
                            Basic Specifications
                        </h3>
                        <div class="spec-items">
                            @if($product['specifications']['capacityRange'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Capacity Range</span>
                                <span class="spec-value">{{$product['specifications']['capacityRange'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['temperatureRange'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Temperature Range</span>
                                <span class="spec-value">{{$product['specifications']['temperatureRange'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['designAmbientTemp'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Design Ambient Temperature</span>
                                <span class="spec-value">{{$product['specifications']['designAmbientTemp'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['refrigerant'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Refrigerant</span>
                                <span class="spec-value">{{$product['specifications']['refrigerant'] }}</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Components -->
                    <div class="spec-group">
                        <h3 class="spec-group-title">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10 10 10 0 0 1-10-10 10 10 0 0 1 10-10z" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                            Components
                        </h3>
                        <div class="spec-items">
                            @if($product['specifications']['compressorType'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Compressor Type</span>
                                <span class="spec-value">{{$product['specifications']['compressorType'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['evaporatorType'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Evaporator Type</span>
                                <span class="spec-value">{{$product['specifications']['evaporatorType'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['condenserType'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Condenser Type</span>
                                <span class="spec-value">{{$product['specifications']['condenserType'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['controllerType'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Controller Type</span>
                                <span class="spec-value">{{$product['specifications']['controllerType'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['starter'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Starter</span>
                                <span class="spec-value">{{$product['specifications']['starter'] }}</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Controls & Safety -->
                    <div class="spec-group">
                        <h3 class="spec-group-title">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                            Controls & Safety
                        </h3>
                        <div class="spec-items">
                            @if($product['specifications']['refrigerationControls'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Refrigeration Controls</span>
                                <span class="spec-value">{{$product['specifications']['refrigerationControls'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['electricalSafety'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Electrical Safety</span>
                                <span class="spec-value">{{$product['specifications']['electricalSafety'] }}</span>
                            </div>
                            @endif
                            @if($product['specifications']['mechanicalSafety'] ?? false)
                            <div class="spec-item">
                                <span class="spec-label">Mechanical Safety</span>
                                <span class="spec-value">{{$product['specifications']['mechanicalSafety'] }}</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Additional Information -->
            <div class="fx-project-additional mb-60">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-card">
                            <h3 class="info-card-title">Project Overview</h3>
                            <p class="info-card-text">{{$product['description'] ?: 'No description available for this product.' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <!-- <h3 class="info-card-title">Product ID</h3>
                            <p class="info-card-text">#{{$product['_id'] }}</p>
                            <hr class="my-3"> -->
                            <h3 class="info-card-title mt-3">Category</h3>
                            <p class="info-card-text">{{$product['category']['name'] ?? 'Uncategorized' }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Back Button Styles */
    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 24px;
        background: #f8f9fa;
        border-radius: 12px;
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .back-button:hover {
        background: #FC5220;
        color: white;
        transform: translateX(-5px);
    }

    /* Project Hero Section */
    .fx-project-hero {
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
    }

    .fx-project-main-image {
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        min-height: 400px;
    }

    .fx-project-main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .fx-project-info-card {
        padding: 30px;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 20px;
        height: 100%;
    }

    .category-badge {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, #FC5220, #ff7744);
        color: white;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .fx-project-title {
        font-size: 32px;
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1.3;
    }

    .fx-project-description {
        font-size: 16px;
        color: #666;
        line-height: 1.6;
    }

    /* Meta Info Styles */
    .fx-project-meta {
        border-top: 2px solid #e9ecef;
        padding-top: 20px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .meta-icon {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FC5220;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .meta-info {
        flex: 1;
    }

    .meta-label {
        display: block;
        font-size: 12px;
        color: #999;
        margin-bottom: 4px;
    }

    .meta-value {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    /* Specifications Section */
    .fx-project-specifications {
        background: #fff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
    }

    .section-header {
        text-align: center;
    }

    .fx-section-title {
        font-size: 36px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 10px;
    }

    .fx-section-subtitle {
        font-size: 16px;
        color: #666;
    }

    .specifications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
    }

    .spec-group {
        background: #f8f9fa;
        border-radius: 20px;
        padding: 25px;
        transition: all 0.3s ease;
    }

    .spec-group:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .spec-group-title {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 20px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #FC5220;
    }

    .spec-group-title svg {
        color: #FC5220;
    }

    .spec-items {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .spec-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #e9ecef;
    }

    .spec-item:last-child {
        border-bottom: none;
    }

    .spec-label {
        font-size: 14px;
        font-weight: 500;
        color: #666;
    }

    .spec-value {
        font-size: 14px;
        font-weight: 600;
        color: #1a1a1a;
        background: #fff;
        padding: 4px 12px;
        border-radius: 20px;
    }

    /* Additional Information Cards */
    .info-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .info-card-title {
        font-size: 20px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-card-text {
        font-size: 15px;
        color: #666;
        line-height: 1.6;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .fx-project-title {
            font-size: 28px;
        }

        .specifications-grid {
            grid-template-columns: 1fr;
        }

        .fx-section-title {
            font-size: 28px;
        }
    }

    @media (max-width: 768px) {
        .fx-project-info-card {
            padding: 20px;
        }

        .fx-project-specifications {
            padding: 20px;
        }

        .spec-group {
            padding: 20px;
        }
    }

    /* Animation Effects */
    .fx-project-details-wrapper {
        animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

@endsection