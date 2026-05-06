{{-- resources/views/projects-details.blade.php --}}
@extends('layouts.main')
@section('content')

<!-- MODERN PROJECT DETAILS - UNIQUE STYLES -->
<div class="elite-project-details-area pt-120 pb-120">
    <div class="container elite-container">

        <!-- Main Project Details -->
        <div class="elite-project-wrapper">

            <!-- Hero Grid Section -->
            <div class="elite-hero-grid mb-70">
                <div class="elite-hero-image">
                    <div class="elite-image-overlay">
                        <img src="{{ $imageUrl . $product['image'] }}" alt="{{$product['name'] }}">
                        <div class="elite-image-badge">
                            <span>{{$product['category']['name'] ?? 'Premium Product'}}</span>
                        </div>
                    </div>
                </div>
                <div class="elite-hero-content">
                    <div class="elite-content-inner">
                        <div class="elite-rating-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span>(4.9/5.0)</span>
                        </div>
                        <h1 class="elite-title">{{$product['name'] }}</h1>
                        <div class="elite-divider"></div>
                        <p class="elite-description">{{$product['description'] }}</p>
                        <div class="elite-quick-stats">
                            <div class="elite-stat">
                                <div class="elite-stat-icon">📅</div>
                                <div class="elite-stat-info">
                                    <span>Created</span>
                                    <strong>{{ date('M d, Y', strtotime($product['createdAt'])) }}</strong>
                                </div>
                            </div>
                            <div class="elite-stat">
                                <div class="elite-stat-icon">🔄</div>
                                <div class="elite-stat-info">
                                    <span>Updated</span>
                                    <strong>{{ date('M d, Y', strtotime($product['updatedAt'])) }}</strong>
                                </div>
                            </div>
                            <div class="elite-stat">
                                <div class="elite-stat-icon">📁</div>
                                <div class="elite-stat-info">
                                    <span>Category</span>
                                    <strong>{{$product['category']['name'] ?? 'Uncategorized'}}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="elite-action-buttons">
                            <a href="#" class="elite-btn elite-btn-primary">Get Quote →</a>
                            <a href="#" class="elite-btn elite-btn-outline">Technical Sheet 📄</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specifications Section - Modern Card Grid -->
            @if(isset($product['specifications']) && !empty(array_filter((array)$product['specifications'])))
            <div class="elite-specs-section mb-70">
                <div class="elite-section-header">
                    <h2>Technical <span>Specifications</span></h2>
                    <p>Precision engineering meets innovative technology</p>
                </div>
                <div class="elite-specs-grid">
                    <!-- Card 1: Basic -->
                    <div class="elite-spec-card">
                        <div class="elite-spec-icon">⚙️</div>
                        <h3>Core Specifications</h3>
                        <div class="elite-spec-list">
                            @if($product['specifications']['capacityRange'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Capacity Range</span>
                                <span class="elite-spec-value">{{$product['specifications']['capacityRange']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['temperatureRange'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Temperature Range</span>
                                <span class="elite-spec-value">{{$product['specifications']['temperatureRange']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['designAmbientTemp'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Ambient Temp</span>
                                <span class="elite-spec-value">{{$product['specifications']['designAmbientTemp']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['refrigerant'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Refrigerant</span>
                                <span class="elite-spec-value">{{$product['specifications']['refrigerant']}}</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Card 2: Components -->
                    <div class="elite-spec-card">
                        <div class="elite-spec-icon">🔧</div>
                        <h3>Key Components</h3>
                        <div class="elite-spec-list">
                            @if($product['specifications']['compressorType'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Compressor</span>
                                <span class="elite-spec-value">{{$product['specifications']['compressorType']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['evaporatorType'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Evaporator</span>
                                <span class="elite-spec-value">{{$product['specifications']['evaporatorType']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['condenserType'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Condenser</span>
                                <span class="elite-spec-value">{{$product['specifications']['condenserType']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['controllerType'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Controller</span>
                                <span class="elite-spec-value">{{$product['specifications']['controllerType']}}</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Card 3: Safety -->
                    <div class="elite-spec-card">
                        <div class="elite-spec-icon">🛡️</div>
                        <h3>Safety & Controls</h3>
                        <div class="elite-spec-list">
                            @if($product['specifications']['starter'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Starter</span>
                                <span class="elite-spec-value">{{$product['specifications']['starter']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['refrigerationControls'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Refrigeration Controls</span>
                                <span class="elite-spec-value">{{$product['specifications']['refrigerationControls']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['electricalSafety'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Electrical Safety</span>
                                <span class="elite-spec-value">{{$product['specifications']['electricalSafety']}}</span>
                            </div>
                            @endif
                            @if($product['specifications']['mechanicalSafety'] ?? false)
                            <div class="elite-spec-row">
                                <span class="elite-spec-label">Mechanical Safety</span>
                                <span class="elite-spec-value">{{$product['specifications']['mechanicalSafety']}}</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Overview & Highlights Section -->
            <div class="elite-overview-section">
                <div class="elite-overview-card">
                    <div class="elite-overview-header">
                        <div class="elive-overview-icon">📋</div>
                        <h3>Product Overview</h3>
                    </div>
                    <p class="elite-overview-text">{{$product['description'] ?: 'This advanced product delivers exceptional performance and reliability, engineered with cutting-edge technology to meet your most demanding requirements.'}}</p>
                </div>
                <div class="elite-highlights-card">
                    <div class="elite-highlights-header">
                        <div class="elite-highlights-icon">✨</div>
                        <h3>Key Highlights</h3>
                    </div>
                    <ul class="elite-highlights-list">
                        <li>✓ 2 years comprehensive warranty</li>
                        <li>✓ 24/7 technical support</li>
                        <li>✓ Free installation guidance</li>
                        <li>✓ Energy efficient certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* ========== UNIQUE CSS STYLES - ELITE PROJECT DESIGN ========== */
    @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap');

    .elite-project-details-area {
        background: linear-gradient(135deg, #f5f7fc 0%, #eef2f8 100%);
        font-family: 'Inter', sans-serif;
    }

    .elite-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
    }

    /* Main Wrapper */
    .elite-project-wrapper {
        animation: eliteFadeIn 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    @keyframes eliteFadeIn {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ========== HERO GRID ========== */
    .elite-hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        background: #ffffff;
        border-radius: 48px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .elite-hero-grid:hover {
        transform: translateY(-5px);
        box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.2);
    }

    .elite-hero-image {
        position: relative;
        overflow: hidden;
        min-height: 500px;
    }

    .elite-image-overlay {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .elite-image-overlay img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .elite-hero-image:hover .elite-image-overlay img {
        transform: scale(1.05);
    }

    .elite-image-badge {
        position: absolute;
        top: 24px;
        left: 24px;
        background: linear-gradient(135deg, #FC5220, #ff7a44);
        padding: 8px 20px;
        border-radius: 100px;
        color: white;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.5px;
        box-shadow: 0 8px 20px rgba(252, 82, 32, 0.3);
        backdrop-filter: blur(4px);
    }

    .elite-hero-content {
        padding: 48px 48px 48px 0;
        display: flex;
        align-items: center;
    }

    .elite-content-inner {
        max-width: 90%;
    }

    .elite-rating-stars {
        margin-bottom: 20px;
        color: #ffc107;
        font-size: 18px;
        letter-spacing: 4px;
    }

    .elite-rating-stars span {
        color: #6c757d;
        font-size: 14px;
        margin-left: 10px;
        letter-spacing: normal;
    }

    .elite-title {
        font-size: 48px;
        font-weight: 800;
        line-height: 1.2;
        background: linear-gradient(135deg, #1a1a2e, #16213e);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 20px;
    }

    .elite-divider {
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #FC5220, #ff9a6e);
        border-radius: 4px;
        margin-bottom: 24px;
    }

    .elite-description {
        font-size: 16px;
        line-height: 1.7;
        color: #4a5568;
        margin-bottom: 32px;
    }

    .elite-quick-stats {
        display: flex;
        gap: 24px;
        flex-wrap: wrap;
        margin-bottom: 36px;
        padding: 20px 0;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
    }

    .elite-stat {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .elite-stat-icon {
        font-size: 28px;
    }

    .elite-stat-info {
        display: flex;
        flex-direction: column;
    }

    .elite-stat-info span {
        font-size: 12px;
        color: #718096;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .elite-stat-info strong {
        font-size: 15px;
        color: #1a202c;
        margin-top: 4px;
    }

    .elite-action-buttons {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .elite-btn {
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        font-size: 15px;
    }

    .elite-btn-primary {
        background: linear-gradient(135deg, #FC5220, #e84510);
        color: white;
        box-shadow: 0 8px 20px rgba(252, 82, 32, 0.3);
    }

    .elite-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(252, 82, 32, 0.4);
        color: white;
    }

    .elite-btn-outline {
        border: 2px solid #e2e8f0;
        background: white;
        color: #2d3748;
    }

    .elite-btn-outline:hover {
        border-color: #FC5220;
        color: #FC5220;
        transform: translateY(-3px);
    }

    /* ========== SPECIFICATIONS SECTION ========== */
    .elite-specs-section {
        margin-top: 20px;
    }

    .elite-section-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .elite-section-header h2 {
        font-size: 40px;
        font-weight: 800;
        color: #1a202c;
    }

    .elite-section-header h2 span {
        background: linear-gradient(135deg, #FC5220, #ff7a44);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .elite-section-header p {
        color: #718096;
        font-size: 18px;
        margin-top: 12px;
    }

    .elite-specs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .elite-spec-card {
        background: white;
        border-radius: 32px;
        padding: 32px;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 0, 0, 0.03);
    }

    .elite-spec-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 40px -15px rgba(252, 82, 32, 0.15);
        border-color: rgba(252, 82, 32, 0.2);
    }

    .elite-spec-icon {
        font-size: 44px;
        margin-bottom: 20px;
    }

    .elite-spec-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 24px;
        padding-bottom: 12px;
        border-bottom: 2px solid #edf2f7;
    }

    .elite-spec-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .elite-spec-row {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        flex-wrap: wrap;
        gap: 10px;
    }

    .elite-spec-label {
        font-size: 14px;
        font-weight: 500;
        color: #718096;
    }

    .elite-spec-value {
        font-size: 14px;
        font-weight: 700;
        background: linear-gradient(135deg, #f8fafc, #ffffff);
        padding: 6px 16px;
        border-radius: 40px;
        color: #FC5220;
        border: 1px solid #e2e8f0;
    }

    /* ========== OVERVIEW & HIGHLIGHTS ========== */
    .elite-overview-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 40px;
    }

    .elite-overview-card,
    .elite-highlights-card {
        background: white;
        border-radius: 32px;
        padding: 32px;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
    }

    .elite-overview-card:hover,
    .elite-highlights-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.1);
    }

    .elite-overview-header,
    .elite-highlights-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }

    .elive-overview-icon,
    .elite-highlights-icon {
        font-size: 32px;
    }

    .elite-overview-header h3,
    .elite-highlights-header h3 {
        font-size: 24px;
        font-weight: 700;
        color: #1a202c;
    }

    .elite-overview-text {
        font-size: 16px;
        line-height: 1.7;
        color: #4a5568;
    }

    .elite-highlights-list {
        list-style: none;
        padding: 0;
    }

    .elite-highlights-list li {
        padding: 12px 0;
        color: #4a5568;
        font-size: 15px;
        border-bottom: 1px solid #edf2f7;
        font-weight: 500;
    }

    .elite-highlights-list li:last-child {
        border-bottom: none;
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1100px) {
        .elite-hero-grid {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .elite-hero-content {
            padding: 40px;
        }

        .elite-content-inner {
            max-width: 100%;
        }

        .elite-title {
            font-size: 38px;
        }
    }

    @media (max-width: 768px) {
        .elite-container {
            padding: 0 20px;
        }

        .elite-title {
            font-size: 32px;
        }

        .elite-quick-stats {
            flex-direction: column;
            gap: 15px;
        }

        .elite-specs-grid {
            grid-template-columns: 1fr;
        }

        .elite-overview-section {
            grid-template-columns: 1fr;
        }

        .elite-section-header h2 {
            font-size: 32px;
        }

        .elite-action-buttons {
            flex-direction: column;
        }

        .elite-btn {
            text-align: center;
        }

        .elite-hero-image {
            min-height: 320px;
        }
    }

    @media (max-width: 480px) {
        .elite-hero-content {
            padding: 24px;
        }

        .elite-title {
            font-size: 28px;
        }

        .elite-spec-card {
            padding: 24px;
        }

        .elite-spec-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 6px;
        }
    }

    /* Smooth Scroll Behavior */
    html {
        scroll-behavior: smooth;
    }
</style>

@endsection