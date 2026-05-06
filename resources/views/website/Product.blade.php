@extends('layouts.main')
@section('content')

<!-- MODERN PRODUCT SHOWCASE - VORTEX DESIGN -->
<div class="vortex-products-section pt-120 pb-120">
    <div class="container vortex-container">

        <!-- Section Header with Animation -->
        <div class="vortex-header mb-60">
            <!-- <div class="vortex-header-badge">
                <span class="vortex-badge-text">Our Collection</span>
            </div> -->
            <h2 class="vortex-title">
                Featured <span class="vortex-title-highlight">Products</span>
            </h2>
            <div class="vortex-title-underline"></div>
            <p class="vortex-subtitle">Discover innovative solutions engineered for excellence</p>
        </div>

        <!-- Products Grid -->
        <div class="vortex-products-grid">

            @if(!empty($products) && count($products) > 0)
            @foreach($products as $product)
            @php
            $categoryName = $product['category']['name'] ?? 'industry';
            $productName = $product['name'] ?? 'No Product';
            $productId = $product['_id'] ?? null;
            $categoryClass = \Illuminate\Support\Str::slug($categoryName);
            $image = !empty($product['image']) ? $imageUrl . $product['image'] : asset('images/no-image.png');
            $productUrl = $productId ? url('projectsDetails/'.$productId) : '#';
            @endphp

            <!-- Product Card -->
            <div class="vortex-product-card" data-category="{{ $categoryClass }}">
                <div class="vortex-card-inner">

                    <!-- Image Container with Overlay -->
                    <div class="vortex-card-image">
                        <img src="{{ $image }}" alt="{{ $productName }}" loading="lazy"
                            onerror="this.onerror=null">

                        <!-- Category Badge -->
                        <div class="vortex-card-badge">
                            {{ $categoryName }}
                        </div>

                        <!-- Quick View Overlay -->
                        <div class="vortex-card-overlay">
                            <a href="{{ $productUrl }}" class="vortex-view-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                Quick View
                            </a>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="vortex-card-content">
                        <div class="vortex-card-meta">
                            <span class="vortex-category">{{ $categoryName }}</span>
                            <span class="vortex-product-id">#{{ substr($productId, -6) }}</span>
                        </div>

                        <h3 class="vortex-product-title">
                            <a href="{{ $productUrl }}">{{ $productName }}</a>
                        </h3>

                        <p class="vortex-product-excerpt">
                            {{ Str::limit($product['description'] ?? 'Premium quality product with exceptional performance and durability.', 80) }}
                        </p>

                        <div class="vortex-card-footer">
                            <a href="{{ $productUrl }}" class="vortex-learn-more">
                                Explore Product
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                            <div class="vortex-hover-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <!-- Empty State -->
            <div class="vortex-empty-state">
                <div class="vortex-empty-icon">🔍</div>
                <h3>No Products Found</h3>
                <p>This category has no products yet. Check back soon!</p>
            </div>
            @endif
        </div>
    </div>
</div>

<style>
    /* ============================================
   VORTEX MODERN PRODUCT CARDS - UNIQUE DESIGN
   ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap');

    .vortex-products-section {
        background: linear-gradient(145deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
        font-family: 'Inter', sans-serif;
    }

    /* Animated Background Pattern */
    .vortex-products-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(circle at 25% 50%, rgba(252, 82, 32, 0.03) 0%, transparent 50%),
            radial-gradient(circle at 75% 80%, rgba(252, 82, 32, 0.02) 0%, transparent 60%);
        pointer-events: none;
    }

    .vortex-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        position: relative;
        z-index: 2;
    }

    /* ========== SECTION HEADER ========== */
    .vortex-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .vortex-header-badge {
        display: inline-block;
        margin-bottom: 20px;
        animation: vortexFadeUp 0.6s ease-out;
    }

    .vortex-badge-text {
        background: linear-gradient(135deg, #FC5220 0%, #ff8a5c 100%);
        padding: 6px 18px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 1.5px;
        color: white;
        text-transform: uppercase;
        box-shadow: 0 4px 15px rgba(252, 82, 32, 0.25);
    }

    .vortex-title {
        font-size: 48px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 15px;
        animation: vortexFadeUp 0.6s ease-out 0.1s both;
    }

    .vortex-title-highlight {
        background: linear-gradient(135deg, #FC5220, #ff9966);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        position: relative;
    }

    .vortex-title-underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #FC5220, transparent);
        margin: 0 auto 20px;
        border-radius: 4px;
        animation: vortexExpandWidth 0.8s ease-out 0.2s both;
    }

    @keyframes vortexExpandWidth {
        from {
            width: 0;
            opacity: 0;
        }

        to {
            width: 80px;
            opacity: 1;
        }
    }

    .vortex-subtitle {
        font-size: 18px;
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        animation: vortexFadeUp 0.6s ease-out 0.2s both;
    }

    @keyframes vortexFadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ========== PRODUCTS GRID ========== */
    .vortex-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
        gap: 35px;
    }

    /* Product Card */
    .vortex-product-card {
        position: relative;
        border-radius: 28px;
        background: transparent;
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .vortex-card-inner {
        background: white;
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 15px 35px -12px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .vortex-product-card:hover {
        transform: translateY(-8px);
    }

    .vortex-product-card:hover .vortex-card-inner {
        box-shadow: 0 25px 45px -15px rgba(252, 82, 32, 0.2);
    }

    /* Card Image */
    .vortex-card-image {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16 / 11;
        background: linear-gradient(145deg, #e2e8f0, #f1f5f9);
    }

    .vortex-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .vortex-product-card:hover .vortex-card-image img {
        transform: scale(1.08);
    }

    /* Category Badge */
    .vortex-card-badge {
        position: absolute;
        top: 18px;
        left: 18px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(4px);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 12px;
        font-weight: 600;
        color: #FC5220;
        letter-spacing: 0.5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        z-index: 2;
        transition: all 0.3s ease;
    }

    .vortex-product-card:hover .vortex-card-badge {
        background: #FC5220;
        color: white;
        transform: translateY(-2px);
    }

    /* Overlay */
    .vortex-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(15, 23, 42, 0.75);
        backdrop-filter: blur(8px);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease;
        z-index: 3;
    }

    .vortex-product-card:hover .vortex-card-overlay {
        opacity: 1;
    }

    .vortex-view-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        background: white;
        padding: 12px 28px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 14px;
        color: #FC5220;
        text-decoration: none;
        transform: translateY(20px);
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .vortex-product-card:hover .vortex-view-btn {
        transform: translateY(0);
    }

    .vortex-view-btn:hover {
        background: #FC5220;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(252, 82, 32, 0.3);
    }

    /* Card Content */
    .vortex-card-content {
        padding: 24px 22px 28px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .vortex-card-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }

    .vortex-category {
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #FC5220;
        background: rgba(252, 82, 32, 0.1);
        padding: 4px 12px;
        border-radius: 20px;
    }

    .vortex-product-id {
        font-size: 11px;
        font-weight: 500;
        color: #94a3b8;
        font-family: monospace;
    }

    .vortex-product-title {
        font-size: 20px;
        font-weight: 700;
        line-height: 1.35;
        margin-bottom: 12px;
    }

    .vortex-product-title a {
        color: #0f172a;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .vortex-product-title a:hover {
        color: #FC5220;
    }

    .vortex-product-excerpt {
        font-size: 14px;
        line-height: 1.6;
        color: #64748b;
        margin-bottom: 20px;
        flex: 1;
    }

    .vortex-card-footer {
        position: relative;
        margin-top: auto;
        padding-top: 8px;
    }

    .vortex-learn-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #FC5220;
        text-decoration: none;
        transition: gap 0.3s ease;
    }

    .vortex-learn-more svg {
        transition: transform 0.3s ease;
    }

    .vortex-learn-more:hover {
        gap: 12px;
    }

    .vortex-learn-more:hover svg {
        transform: translateX(4px);
    }

    .vortex-hover-line {
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #FC5220, #ff9a6e);
        transition: width 0.4s ease;
        border-radius: 2px;
    }

    .vortex-product-card:hover .vortex-hover-line {
        width: 40px;
    }

    /* ========== EMPTY STATE ========== */
    .vortex-empty-state {
        grid-column: 1 / -1;
        text-align: center;
        padding: 80px 40px;
        background: white;
        border-radius: 40px;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
    }

    .vortex-empty-icon {
        font-size: 64px;
        margin-bottom: 20px;
        opacity: 0.6;
    }

    .vortex-empty-state h3 {
        font-size: 28px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
    }

    .vortex-empty-state p {
        color: #64748b;
        font-size: 16px;
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1200px) {
        .vortex-products-grid {
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .vortex-container {
            padding: 0 20px;
        }

        .vortex-title {
            font-size: 36px;
        }

        .vortex-subtitle {
            font-size: 16px;
        }

        .vortex-products-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .vortex-card-content {
            padding: 20px;
        }

        .vortex-product-title {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .vortex-products-section {
            padding: 80px 0;
        }

        .vortex-title {
            font-size: 30px;
        }

        .vortex-header-badge {
            margin-bottom: 15px;
        }

        .vortex-card-image {
            aspect-ratio: 16 / 12;
        }
    }

    /* Card Entry Animation */
    .vortex-product-card {
        animation: vortexCardReveal 0.5s ease-out backwards;
        animation-delay: calc(var(--card-index, 0) * 0.08s);
    }

    @keyframes vortexCardReveal {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Stagger animation for cards */
    .vortex-products-grid .vortex-product-card:nth-child(1) {
        --card-index: 0;
    }

    .vortex-products-grid .vortex-product-card:nth-child(2) {
        --card-index: 1;
    }

    .vortex-products-grid .vortex-product-card:nth-child(3) {
        --card-index: 2;
    }

    .vortex-products-grid .vortex-product-card:nth-child(4) {
        --card-index: 3;
    }

    .vortex-products-grid .vortex-product-card:nth-child(5) {
        --card-index: 4;
    }

    .vortex-products-grid .vortex-product-card:nth-child(6) {
        --card-index: 5;
    }
</style>

@endsection