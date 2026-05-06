@extends('layouts.main')
@section('content')

<!-- MODERN INSTALLATION GALLERY - ELEVATE DESIGN WITH ZOOM FEATURE -->
<div class="elevate-installation-section pt-120 pb-120">
    <div class="container elevate-container">

        <!-- Section Header with Animation -->
        <div class="elevate-header mb-60">

            <h2 class="elevate-title">
                Manufacturing <span class="elevate-title-gradient">Facility</span>
            </h2>
            <div class="elevate-title-decoration">
                <span class="elevate-dot"></span>
                <span class="elevate-line"></span>
                <span class="elevate-dot"></span>
            </div>
            <p class="elevate-subtitle">Click on any image to view in fullscreen zoom with advanced controls</p>
        </div>

        <!-- Installation Grid -->
        <div class="elevate-installation-grid">
            @foreach($facilitys as $index => $product)

            @php
            // Fix image URL for both forward and backward slash issues
            $imagePath = $product['image'];
            $imagePath = str_replace(['\\', ''], '/', $imagePath);
            $imageUrlFull = rtrim($imageUrl, '/') . '/' . ltrim($imagePath, '/');
            $imageTitle = $product['title'] ?? 'Installation Image';
            $categoryName = $product['category']['name'] ?? 'Installation';
            @endphp
            <div class="elevate-install-card" data-delay="{{ $index * 0.05 }}">
                <div class="elevate-card-inner">

                    <!-- Image Container with Zoom Feature -->
                    <div class="elevate-card-media">
                        <div class="elevate-image-wrapper">
                            <img src="{{ $imageUrlFull }}"
                                alt="{{ $imageTitle }}"
                                loading="lazy"
                                class="elevate-install-img"
                                onerror="this.onerror=null; ">

                            <!-- Gradient Overlay -->
                            <div class="elevate-image-overlay"></div>

                            <!-- Category Badge -->


                            <!-- Search/Zoom Icon -->
                            <div class="elevate-zoom-icon" onclick="openInstallZoom('{{ $imageUrlFull }}', '{{ addslashes($imageTitle) }}', '{{ addslashes($categoryName) }}')">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                    <line x1="11" y1="8" x2="11" y2="14" />
                                    <line x1="8" y1="11" x2="14" y2="11" />
                                </svg>
                            </div>

                            <!-- Full Image Click Area -->
                            <div class="elevate-image-click-area" onclick="openInstallZoom('{{ $imageUrlFull }}', '{{ addslashes($imageTitle) }}', '{{ addslashes($categoryName) }}')"></div>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="elevate-card-content">
                        <!-- <div class="elevate-card-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div> -->
                        <div class="aether-content-header">
                            <div class="aether-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                            <div class="aether-line-divider"></div>
                        </div>
                        <h3 class="elevate-card-title">
                            {{ $imageTitle }}
                        </h3>
                        @if(($product['description'] ?? false))
                        <p class="elevate-card-description">{{ Str::limit($product['description'], 80) }}</p>
                        @endif
                        <div class="elevate-card-divider"></div>
                        <div class="elevate-card-footer">
                            <a href="javascript:void(0)" class="elevate-view-link" onclick="openInstallZoom('{{ $imageUrlFull }}', '{{ addslashes($imageTitle) }}', '{{ addslashes($categoryName) }}')">
                                <span>View Full Image</span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <!-- View More Button -->
        <div class="elevate-view-more">
            <button class="elevate-load-btn" id="loadMoreBtn">
                <span>Load More Installations</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        </div>

    </div>
</div>

<!-- ========== ZOOM MODAL FOR INSTALLATION IMAGES ========== -->
<div id="installZoomModal" class="elevate-zoom-modal" onclick="closeInstallZoom()">
    <div class="elevate-modal-container" onclick="event.stopPropagation()">
        <button class="elevate-modal-close" onclick="closeInstallZoom()">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

        <div class="elevate-modal-image-wrapper">
            <img id="installModalImage" src="" alt="Installation Image" class="elevate-modal-img">
        </div>

        <div class="elevate-modal-footer">
            <div class="elevate-modal-info">
                <div class="elevate-modal-category" id="installModalCategory"></div>
                <div class="elevate-modal-title" id="installModalTitle"></div>
            </div>

        </div>

        <!-- Navigation Buttons -->
        <div class="elevate-modal-nav">

        </div>
    </div>
</div>

<style>
    /* ============================================
   ELEVATE INSTALLATION GALLERY - MODERN DESIGN
   WITH FULL ZOOM FUNCTIONALITY
   ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap');

    .elevate-installation-section {
        background: linear-gradient(145deg, #fafbfd 0%, #f0f4f9 100%);
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow-x: hidden;
    }

    /* Animated Background */
    .elevate-installation-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 500px;
        background: radial-gradient(circle at 10% 20%, rgba(252, 82, 32, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(252, 82, 32, 0.03) 0%, transparent 60%);
        pointer-events: none;
    }

    .elevate-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        position: relative;
        z-index: 2;
    }

    /* ========== SECTION HEADER ========== */
    .elevate-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .elevate-header-badge {
        display: inline-block;
        margin-bottom: 20px;
        animation: elevateFadeDown 0.6s ease-out;
    }

    .elevate-badge-text {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(252, 82, 32, 0.12);
        padding: 8px 24px;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: #FC5220;
        backdrop-filter: blur(4px);
    }

    .elevate-badge-text svg {
        width: 16px;
        height: 16px;
    }

    @keyframes elevateFadeDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .elevate-title {
        font-size: 52px;
        font-weight: 800;
        color: #0a0c10;
        margin-bottom: 20px;
        letter-spacing: -0.02em;
        animation: elevateFadeUp 0.6s ease-out 0.1s both;
    }

    @keyframes elevateFadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .elevate-title-gradient {
        background: linear-gradient(135deg, #FC5220, #ff8c5a, #ffb08c);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        position: relative;
    }

    .elevate-title-decoration {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-bottom: 20px;
        animation: elevateFadeUp 0.6s ease-out 0.15s both;
    }

    .elevate-dot {
        width: 6px;
        height: 6px;
        background: #FC5220;
        border-radius: 50%;
        opacity: 0.6;
    }

    .elevate-line {
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, #FC5220, #ffb08c);
        border-radius: 2px;
    }

    .elevate-subtitle {
        font-size: 18px;
        color: #5a6874;
        max-width: 600px;
        margin: 0 auto;
        animation: elevateFadeUp 0.6s ease-out 0.2s both;
    }

    /* ========== INSTALLATION GRID ========== */
    .elevate-installation-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 35px;
    }

    /* Installation Card */
    .elevate-install-card {
        opacity: 0;
        animation: elevateCardReveal 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1) forwards;
        animation-delay: calc(var(--card-delay, 0) * 1s);
        --card-delay: 0s;
    }

    .elevate-install-card[data-delay="0"] {
        --card-delay: 0s;
    }

    .elevate-install-card[data-delay="0.05"] {
        --card-delay: 0.05s;
    }

    .elevate-install-card[data-delay="0.1"] {
        --card-delay: 0.1s;
    }

    .elevate-install-card[data-delay="0.15"] {
        --card-delay: 0.15s;
    }

    .elevate-install-card[data-delay="0.2"] {
        --card-delay: 0.2s;
    }

    .elevate-install-card[data-delay="0.25"] {
        --card-delay: 0.25s;
    }

    .elevate-install-card[data-delay="0.3"] {
        --card-delay: 0.3s;
    }

    @keyframes elevateCardReveal {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .elevate-card-inner {
        background: white;
        border-radius: 28px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        box-shadow: 0 15px 35px -15px rgba(0, 0, 0, 0.08);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .elevate-install-card:hover .elevate-card-inner {
        transform: translateY(-8px);
        box-shadow: 0 30px 50px -20px rgba(252, 82, 32, 0.25);
    }

    /* Image Container */
    .elevate-card-media {
        position: relative;
        overflow: hidden;
    }

    .elevate-image-wrapper {
        position: relative;
        aspect-ratio: 16 / 11;
        overflow: hidden;
        cursor: pointer;
    }

    .elevate-install-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        pointer-events: none;
    }

    .elevate-install-card:hover .elevate-install-img {
        transform: scale(1.08);
    }

    /* Image Overlay */
    .elevate-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(10, 12, 16, 0.5) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
        z-index: 1;
    }

    .elevate-install-card:hover .elevate-image-overlay {
        opacity: 1;
    }

    /* Category Badge */
    .elevate-category-badge {
        position: absolute;
        top: 18px;
        left: 18px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 12px;
        font-weight: 600;
        color: #FC5220;
        z-index: 3;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        pointer-events: none;
    }

    .elevate-install-card:hover .elevate-category-badge {
        background: #FC5220;
        color: white;
        transform: translateY(-2px);
    }

    /* Zoom/Search Icon */
    .elevate-zoom-icon {
        position: absolute;
        bottom: 18px;
        right: 18px;
        width: 46px;
        height: 46px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(4px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FC5220;
        opacity: 0;
        transform: scale(0.8) translateY(10px);
        transition: all 0.3s ease;
        cursor: pointer;
        z-index: 10;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
    }

    .elevate-install-card:hover .elevate-zoom-icon {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    .elevate-zoom-icon:hover {
        background: #FC5220;
        color: white;
        transform: scale(1.08);
    }

    /* Image Click Area */
    .elevate-image-click-area {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        cursor: pointer;
        z-index: 2;
    }

    /* Card Content */
    .elevate-card-content {
        padding: 24px 24px 28px;
        position: relative;
        background: white;
    }

    .elevate-card-number {
        position: absolute;
        top: -20px;
        right: 24px;
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        letter-spacing: -0.03em;
        opacity: 0.5;
    }

    .elevate-card-title {
        font-size: 20px;
        font-weight: 700;
        line-height: 1.35;
        color: #0a0c10;
        margin-bottom: 10px;
        transition: color 0.3s ease;
        padding-right: 40px;
    }

    .elevate-install-card:hover .elevate-card-title {
        color: #FC5220;
    }

    .elevate-card-description {
        font-size: 13px;
        line-height: 1.5;
        color: #64748b;
        margin-bottom: 15px;
    }

    .elevate-card-divider {
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #FC5220, #ffb08c);
        border-radius: 3px;
        margin-bottom: 18px;
        transition: width 0.3s ease;
    }

    .elevate-install-card:hover .elevate-card-divider {
        width: 60px;
    }

    .elevate-card-footer {
        margin-top: 10px;
    }

    .elevate-view-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #FC5220;
        text-decoration: none;
        transition: gap 0.3s ease;
        cursor: pointer;
    }

    .elevate-view-link svg {
        transition: transform 0.3s ease;
    }

    .elevate-view-link:hover {
        gap: 12px;
    }

    .elevate-view-link:hover svg {
        transform: translateX(4px);
    }

    /* ========== VIEW MORE BUTTON ========== */
    .elevate-view-more {
        text-align: center;
        margin-top: 55px;
    }

    .elevate-load-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: white;
        border: 2px solid #e2e8f0;
        padding: 14px 40px;
        border-radius: 60px;
        font-size: 15px;
        font-weight: 600;
        color: #1e293b;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .elevate-load-btn svg {
        transition: transform 0.3s ease;
    }

    .elevate-load-btn:hover {
        border-color: #FC5220;
        color: #FC5220;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -8px rgba(252, 82, 32, 0.2);
    }

    .elevate-load-btn:hover svg {
        transform: translateY(3px);
    }

    /* ========== ZOOM MODAL STYLES ========== */
    .elevate-zoom-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.94);
        backdrop-filter: blur(20px);
        z-index: 10000;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        cursor: pointer;
    }

    .elevate-zoom-modal.active {
        display: flex;
        animation: elevateModalFadeIn 0.3s ease forwards;
    }

    @keyframes elevateModalFadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .elevate-modal-container {
        position: relative;
        max-width: 90vw;
        max-height: 90vh;
        background: transparent;
        border-radius: 32px;
        overflow: hidden;
        cursor: default;
    }

    .elevate-modal-close {
        position: absolute;
        top: -50px;
        right: 0;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(8px);
        border: none;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: white;
        transition: all 0.3s ease;
        z-index: 10001;
    }

    .elevate-modal-close:hover {
        background: #FC5220;
        transform: rotate(90deg);
    }

    .elevate-modal-image-wrapper {
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 24px;
        min-width: 320px;
        min-height: 320px;
        max-width: 85vw;
        max-height: 75vh;
    }

    .elevate-modal-img {
        max-width: 100%;
        max-height: 75vh;
        object-fit: contain;
        transition: transform 0.2s ease;
        cursor: zoom-in;
    }

    /* Modal Footer */
    .elevate-modal-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        padding: 14px 24px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 60px;
    }

    .elevate-modal-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

     .aether-content-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
    }

    .aether-number {
        font-size: 28px;
        font-weight: 800;
        background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        letter-spacing: -0.02em;
    }

    .aether-line-divider {
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, #e2e8f0, transparent);
    }

    .elevate-modal-category {
        font-size: 12px;
        font-weight: 600;
        color: #FC5220;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .elevate-modal-title {
        color: white;
        font-size: 16px;
        font-weight: 500;
    }

    .elevate-modal-controls {
        display: flex;
        gap: 12px;
    }

    .elevate-zoom-btn {
        background: rgba(255, 255, 255, 0.15);
        border: none;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: white;
        transition: all 0.3s ease;
    }

    .elevate-zoom-btn:hover {
        background: #FC5220;
        transform: scale(1.08);
    }

    /* Navigation Buttons */
    .elevate-modal-nav {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        pointer-events: none;
        padding: 0 20px;
    }

    .elevate-nav-btn {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(8px);
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: white;
        transition: all 0.3s ease;
        pointer-events: auto;
    }

    .elevate-nav-btn:hover {
        background: #FC5220;
        transform: scale(1.1);
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1200px) {
        .elevate-installation-grid {
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .elevate-container {
            padding: 0 20px;
        }

        .elevate-title {
            font-size: 38px;
        }

        .elevate-subtitle {
            font-size: 16px;
        }

        .elevate-installation-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .elevate-card-content {
            padding: 20px;
        }

        .elevate-card-title {
            font-size: 18px;
        }

        .elevate-card-number {
            font-size: 38px;
            top: -16px;
        }

        .elevate-modal-footer {
            padding: 10px 16px;
        }

        .elevate-modal-title {
            font-size: 14px;
        }

        .elevate-zoom-btn {
            width: 36px;
            height: 36px;
        }

        .elevate-nav-btn {
            width: 40px;
            height: 40px;
        }

        .elevate-load-btn {
            padding: 12px 32px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .elevate-installation-section {
            padding: 80px 0;
        }

        .elevate-title {
            font-size: 32px;
        }

        .elevate-header-badge {
            margin-bottom: 15px;
        }

        .elevate-badge-text {
            padding: 6px 18px;
            font-size: 12px;
        }

        .elevate-zoom-icon {
            width: 38px;
            height: 38px;
        }

        .elevate-zoom-icon svg {
            width: 18px;
            height: 18px;
        }

        .elevate-modal-container {
            max-width: 95vw;
        }

        .elevate-modal-image-wrapper {
            min-width: 280px;
        }
    }

    /* Placeholder Image Styling */
    .elevate-install-img[src*="placeholder"],
    .elevate-install-img:not([src]) {
        object-fit: contain;
        background: linear-gradient(145deg, #f1f5f9, #e2e8f0);
        padding: 20px;
    }

    /* Prevent body scroll when modal is open */
    body.modal-open {
        overflow: hidden;
    }
</style>

<script>
    // ========== INSTALLATION ZOOM MODAL JAVASCRIPT ==========
    let installCurrentZoom = 1;
    let installModalImage = null;
    let installImages = [];
    let installCurrentIndex = 0;

    // Store all installation images data
    // function initInstallImages() {
    //     installImages = [];

    //     @foreach($facilitys as $index => $product)
    //     installImages.push({
    //         url: "{{ rtrim($imageUrl, '/') . '/' . ltrim(str_replace(['\\\\', ''], '/', $product['image']), '/') }}",
    //         title: "{{ addslashes($product['title'] ?? 'Installation Image') }}",
    //         category: "{{ addslashes($product['category']['name'] ?? 'Installation') }}"
    //     });
    //     @endforeach
    // }

    // Open zoom modal
    function openInstallZoom(imageUrl, imageTitle, categoryName) {
        const modal = document.getElementById('installZoomModal');
        const modalImg = document.getElementById('installModalImage');
        const modalTitle = document.getElementById('installModalTitle');
        const modalCategory = document.getElementById('installModalCategory');

        modalImg.src = imageUrl;
        modalTitle.textContent = imageTitle;
        modalCategory.textContent = '';
        installCurrentZoom = 1;
        modalImg.style.transform = `scale(${installCurrentZoom})`;

        modal.classList.add('active');
        document.body.classList.add('modal-open');

        installModalImage = modalImg;

        // Find current index for navigation
        installCurrentIndex = installImages.findIndex(img => img.url === imageUrl);
        updateInstallNavButtons();

        // Add keyboard event listener
        document.addEventListener('keydown', handleInstallModalKeydown);
    }

    // Close zoom modal
    function closeInstallZoom() {
        const modal = document.getElementById('installZoomModal');
        modal.classList.remove('active');
        document.body.classList.remove('modal-open');

        if (installModalImage) {
            installCurrentZoom = 1;
            installModalImage.style.transform = `scale(${installCurrentZoom})`;
        }

        document.removeEventListener('keydown', handleInstallModalKeydown);
    }

    // Zoom In
    function installZoomIn() {
        if (installCurrentZoom < 3) {
            installCurrentZoom = Math.min(3, installCurrentZoom + 0.25);
            if (installModalImage) {
                installModalImage.style.transform = `scale(${installCurrentZoom})`;
                installModalImage.style.cursor = installCurrentZoom > 1 ? 'zoom-out' : 'zoom-in';
            }
        }
    }

    // Zoom Out
    function installZoomOut() {
        if (installCurrentZoom > 0.5) {
            installCurrentZoom = Math.max(0.5, installCurrentZoom - 0.25);
            if (installModalImage) {
                installModalImage.style.transform = `scale(${installCurrentZoom})`;
                installModalImage.style.cursor = installCurrentZoom > 1 ? 'zoom-out' : 'zoom-in';
            }
        }
    }

    // Reset Zoom
    function installResetZoom() {
        installCurrentZoom = 1;
        if (installModalImage) {
            installModalImage.style.transform = `scale(${installCurrentZoom})`;
            installModalImage.style.cursor = 'zoom-in';
        }
    }

    // Navigate through images
    function navigateInstallImage(direction) {
        const newIndex = installCurrentIndex + direction;
        if (newIndex >= 0 && newIndex < installImages.length) {
            installCurrentIndex = newIndex;
            const image = installImages[installCurrentIndex];
            const modalImg = document.getElementById('installModalImage');
            const modalTitle = document.getElementById('installModalTitle');
            const modalCategory = document.getElementById('installModalCategory');

            modalImg.src = image.url;
            modalTitle.textContent = image.title;
            modalCategory.textContent = image.category;

            // Reset zoom
            installCurrentZoom = 1;
            modalImg.style.transform = `scale(${installCurrentZoom})`;

            updateInstallNavButtons();
        }
    }

    // Update navigation buttons visibility
    function updateInstallNavButtons() {
        const prevBtn = document.querySelector('.elevate-prev-btn');
        const nextBtn = document.querySelector('.elevate-next-btn');

        if (prevBtn) {
            prevBtn.style.opacity = installCurrentIndex <= 0 ? '0.3' : '1';
            prevBtn.style.cursor = installCurrentIndex <= 0 ? 'not-allowed' : 'pointer';
        }
        if (nextBtn) {
            nextBtn.style.opacity = installCurrentIndex >= installImages.length - 1 ? '0.3' : '1';
            nextBtn.style.cursor = installCurrentIndex >= installImages.length - 1 ? 'not-allowed' : 'pointer';
        }
    }

    // Toggle zoom on image click
    function toggleInstallZoom() {
        if (installCurrentZoom > 1) {
            installResetZoom();
        } else {
            installZoomIn();
        }
    }

    // Handle keyboard events
    function handleInstallModalKeydown(event) {
        if (event.key === 'Escape') {
            closeInstallZoom();
        } else if (event.key === '+' || event.key === '=') {
            installZoomIn();
            event.preventDefault();
        } else if (event.key === '-' || event.key === '_') {
            installZoomOut();
            event.preventDefault();
        } else if (event.key === '0') {
            installResetZoom();
            event.preventDefault();
        } else if (event.key === 'ArrowLeft') {
            navigateInstallImage(-1);
            event.preventDefault();
        } else if (event.key === 'ArrowRight') {
            navigateInstallImage(1);
            event.preventDefault();
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        // initInstallImages();

        const modalImg = document.getElementById('installModalImage');
        if (modalImg) {
            modalImg.addEventListener('click', toggleInstallZoom);
        }

        // Add wheel zoom support
        const modalContainer = document.querySelector('.elevate-modal-container');
        if (modalContainer) {
            modalContainer.addEventListener('wheel', function(e) {
                if (e.ctrlKey) {
                    e.preventDefault();
                    if (e.deltaY < 0) {
                        installZoomIn();
                    } else {
                        installZoomOut();
                    }
                }
            });
        }

        // Load More functionality
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                alert('Load more installations - Connect to your backend API');
            });
        }
    });
</script>

@endsection