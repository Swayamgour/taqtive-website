@extends('layouts.main')
@section('content')

<!-- MODERN INSTALLATION SHOWCASE - AETHER DESIGN WITH ZOOM MODAL -->
<div class="aether-installation-section pt-120 pb-120">
    <div class="container aether-container">

        <!-- Section Header with Animation Effects -->
        <div class="aether-header mb-60">
            <!-- <div class="aether-header-chip">
                <span class="aether-chip-text">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                    </svg>
                    Our Work
                </span>
            </div> -->
            <h2 class="aether-title">
                Installation <span class="aether-title-gradient">Gallery</span>
            </h2>
            <div class="aether-title-decoration">
                <span class="aether-dot"></span>
                <span class="aether-line"></span>
                <span class="aether-dot"></span>
            </div>
            <p class="aether-subtitle">Click on any image to view in fullscreen zoom</p>
        </div>

        <!-- Installation Grid -->
        <div class="aether-installation-grid">
            @foreach($installation as $index => $product)
            @php
            $imageUrlFull = rtrim($imageUrl, '/') . '/' . ltrim(str_replace('\\', '/', $product['image']), '/');
            $imageTitle = $product['title'] ?? 'Installation Image';
            @endphp
            <div class="aether-install-card" data-delay="{{ $index * 0.05 }}">
                <div class="aether-card-inner">

                    <!-- Image Container -->
                    <div class="aether-card-media" data-image="{{ $imageUrlFull }}" data-title="{{ $imageTitle }}">
                        <div class="aether-image-wrapper">
                            <img src="{{ $imageUrlFull }}"
                                alt="{{ $imageTitle }}"
                                loading="lazy"
                                class="aether-gallery-img"
                                onerror="this.onerror=null;">

                            <!-- Overlay Gradient -->
                            <div class="aether-image-overlay"></div>

                            <!-- Category Tag (if needed later) -->
                            @if(($product['category']['name'] ?? false))
                            <div class="aether-category-tag">
                                {{ $product['category']['name'] }}
                            </div>
                            @endif

                            <!-- Zoom Icon - Click to Zoom -->
                            <div class="aether-zoom-icon" onclick="openZoomModal('{{ $imageUrlFull }}', '{{ addslashes($imageTitle) }}')">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                    <line x1="11" y1="8" x2="11" y2="14" />
                                    <line x1="8" y1="11" x2="14" y2="11" />
                                </svg>
                            </div>

                            <!-- Full Image Click Overlay (optional - click anywhere on image to zoom) -->
                            <div class="aether-image-click-area" onclick="openZoomModal('{{ $imageUrlFull }}', '{{ addslashes($imageTitle) }}')"></div>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="aether-card-content">
                        <div class="aether-content-header">
                            <div class="aether-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                            <div class="aether-line-divider"></div>
                        </div>
                        <h3 class="aether-card-title">
                            {{ $product['title'] ?? 'Installation Project' }}
                        </h3>

                        @if(($product['description'] ?? false))
                        <p class="aether-card-description">{{ Str::limit($product['description'], 100) }}</p>
                        @endif

                        <div class="aether-card-footer">
                            <a href="javascript:void(0)" class="aether-details-link" onclick="openZoomModal('{{ $imageUrlFull }}', '{{ addslashes($imageTitle) }}')">
                                View Full Image
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
        <div class="aether-view-more">
            <button class="aether-load-btn" id="loadMoreBtn">
                <span>Load More Installations</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        </div>

    </div>
</div>

<!-- ========== ZOOM MODAL - FULLSCREEN IMAGE VIEWER ========== -->
<div id="zoomModal" class="aether-zoom-modal" onclick="closeZoomModal()">
    <div class="aether-modal-container" onclick="event.stopPropagation()">
        <button class="aether-modal-close" onclick="closeZoomModal()">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

        <div class="aether-modal-image-wrapper">
            <img id="modalImage" src="" alt="Zoomed Image" class="aether-modal-img">
        </div>

        <div class="aether-modal-footer">
            <div class="aether-modal-title" id="modalTitle"></div>
        </div>
    </div>
</div>

<style>
    /* ============================================
   AETHER INSTALLATION GALLERY - UNIQUE MODERN DESIGN
   WITH ZOOM MODAL FUNCTIONALITY
   ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

    .aether-installation-section {
        background: linear-gradient(180deg, #fafbfd 0%, #f0f4f9 100%);
        font-family: 'Plus Jakarta Sans', sans-serif;
        position: relative;
        overflow-x: hidden;
    }

    /* Background Pattern */
    .aether-installation-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 600px;
        background: radial-gradient(circle at 20% 30%, rgba(252, 82, 32, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(252, 82, 32, 0.03) 0%, transparent 60%);
        pointer-events: none;
    }

    .aether-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        position: relative;
        z-index: 2;
    }

    /* ========== SECTION HEADER STYLES ========== */
    .aether-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .aether-header-chip {
        display: inline-block;
        margin-bottom: 20px;
        animation: aetherFadeDown 0.6s ease-out;
    }

    .aether-chip-text {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(252, 82, 32, 0.12);
        padding: 6px 18px;
        border-radius: 100px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: #FC5220;
        backdrop-filter: blur(4px);
    }

    .aether-chip-text svg {
        width: 14px;
        height: 14px;
    }

    @keyframes aetherFadeDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .aether-title {
        font-size: 52px;
        font-weight: 800;
        color: #0a0c10;
        margin-bottom: 20px;
        letter-spacing: -0.02em;
        animation: aetherFadeUp 0.6s ease-out 0.1s both;
    }

    @keyframes aetherFadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .aether-title-gradient {
        background: linear-gradient(135deg, #FC5220, #ff8c5a, #ffb08c);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        position: relative;
    }

    .aether-title-decoration {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-bottom: 20px;
        animation: aetherFadeUp 0.6s ease-out 0.15s both;
    }

    .aether-dot {
        width: 6px;
        height: 6px;
        background: #FC5220;
        border-radius: 50%;
        opacity: 0.6;
    }

    .aether-line {
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, #FC5220, #ffb08c);
        border-radius: 2px;
    }

    .aether-subtitle {
        font-size: 18px;
        color: #5a6874;
        max-width: 550px;
        margin: 0 auto;
        animation: aetherFadeUp 0.6s ease-out 0.2s both;
    }

    /* ========== INSTALLATION GRID ========== */
    .aether-installation-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
        gap: 35px;
    }

    /* Installation Card */
    .aether-install-card {
        opacity: 0;
        animation: aetherCardReveal 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1) forwards;
        animation-delay: calc(var(--card-delay, 0) * 1s);
        --card-delay: 0s;
    }

    .aether-install-card[data-delay="0"] {
        --card-delay: 0s;
    }

    .aether-install-card[data-delay="0.05"] {
        --card-delay: 0.05s;
    }

    .aether-install-card[data-delay="0.1"] {
        --card-delay: 0.1s;
    }

    .aether-install-card[data-delay="0.15"] {
        --card-delay: 0.15s;
    }

    .aether-install-card[data-delay="0.2"] {
        --card-delay: 0.2s;
    }

    .aether-install-card[data-delay="0.25"] {
        --card-delay: 0.25s;
    }

    .aether-install-card[data-delay="0.3"] {
        --card-delay: 0.3s;
    }

    @keyframes aetherCardReveal {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .aether-card-inner {
        background: white;
        border-radius: 28px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        box-shadow: 0 15px 35px -15px rgba(0, 0, 0, 0.08);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .aether-install-card:hover .aether-card-inner {
        transform: translateY(-8px);
        box-shadow: 0 30px 50px -20px rgba(252, 82, 32, 0.25);
    }

    /* Image Container */
    .aether-card-media {
        position: relative;
        overflow: hidden;
    }

    .aether-image-wrapper {
        position: relative;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        cursor: pointer;
    }

    .aether-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        pointer-events: none;
    }

    .aether-install-card:hover .aether-image-wrapper img {
        transform: scale(1.08);
    }

    /* Image Click Area - Full image clickable */
    .aether-image-click-area {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        cursor: pointer;
        z-index: 2;
    }

    /* Image Overlay */
    .aether-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(10, 12, 16, 0.4) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
        z-index: 1;
    }

    .aether-install-card:hover .aether-image-overlay {
        opacity: 1;
    }

    /* Category Tag */
    .aether-category-tag {
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

    .aether-install-card:hover .aether-category-tag {
        background: #FC5220;
        color: white;
        transform: translateY(-2px);
    }

    /* Zoom Icon */
    .aether-zoom-icon {
        position: absolute;
        bottom: 18px;
        right: 18px;
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(4px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FC5220;
        opacity: 0;
        transform: scale(0.8);
        transition: all 0.3s ease;
        cursor: pointer;
        z-index: 10;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .aether-install-card:hover .aether-zoom-icon {
        opacity: 1;
        transform: scale(1);
    }

    .aether-zoom-icon:hover {
        background: #FC5220;
        color: white;
        transform: scale(1.05);
    }

    /* Card Content */
    .aether-card-content {
        padding: 24px 24px 28px;
        flex: 1;
        display: flex;
        flex-direction: column;
        position: relative;
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

    .aether-card-title {
        font-size: 20px;
        font-weight: 700;
        line-height: 1.4;
        color: #0a0c10;
        margin-bottom: 12px;
        transition: color 0.3s ease;
    }

    .aether-install-card:hover .aether-card-title {
        color: #FC5220;
    }

    .aether-card-description {
        font-size: 14px;
        line-height: 1.6;
        color: #64748b;
        margin-bottom: 20px;
        flex: 1;
    }

    /* Card Footer */
    .aether-card-footer {
        margin-top: auto;
        padding-top: 16px;
        border-top: 1px solid #f1f5f9;
    }

    .aether-details-link {
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

    .aether-details-link svg {
        transition: transform 0.3s ease;
    }

    .aether-details-link:hover {
        gap: 12px;
    }

    .aether-details-link:hover svg {
        transform: translateX(4px);
    }

    /* ========== VIEW MORE BUTTON ========== */
    .aether-view-more {
        text-align: center;
        margin-top: 55px;
    }

    .aether-load-btn {
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

    .aether-load-btn svg {
        transition: transform 0.3s ease;
    }

    .aether-load-btn:hover {
        border-color: #FC5220;
        color: #FC5220;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -8px rgba(252, 82, 32, 0.2);
    }

    .aether-load-btn:hover svg {
        transform: translateY(3px);
    }

    /* ========== ZOOM MODAL STYLES ========== */
    .aether-zoom-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.92);
        backdrop-filter: blur(20px);
        z-index: 10000;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        cursor: pointer;
    }

    .aether-zoom-modal.active {
        display: flex;
        animation: modalFadeIn 0.3s ease forwards;
    }

    @keyframes modalFadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .aether-modal-container {
        position: relative;
        max-width: 90vw;
        max-height: 90vh;
        background: transparent;
        border-radius: 32px;
        overflow: hidden;
        cursor: default;
    }

    .aether-modal-close {
        position: absolute;
        top: -50px;
        right: 0;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        border: none;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: white;
        transition: all 0.3s ease;
        z-index: 10001;
    }

    .aether-modal-close:hover {
        background: #FC5220;
        transform: rotate(90deg);
    }

    .aether-modal-image-wrapper {
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 20px;
        min-width: 300px;
        min-height: 300px;
        max-width: 85vw;
        max-height: 80vh;
    }

    .aether-modal-img {
        max-width: 100%;
        max-height: 80vh;
        object-fit: contain;
        transition: transform 0.2s ease;
        cursor: zoom-in;
    }

    /* Modal Footer */
    .aether-modal-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        padding: 12px 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 60px;
    }

    .aether-modal-title {
        color: white;
        font-size: 14px;
        font-weight: 500;
        max-width: 60%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .aether-modal-controls {
        display: flex;
        gap: 12px;
    }

    .aether-zoom-btn {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: white;
        transition: all 0.3s ease;
    }

    .aether-zoom-btn:hover {
        background: #FC5220;
        transform: scale(1.05);
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1200px) {
        .aether-installation-grid {
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .aether-container {
            padding: 0 20px;
        }

        .aether-title {
            font-size: 38px;
        }

        .aether-subtitle {
            font-size: 16px;
        }

        .aether-installation-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .aether-card-content {
            padding: 20px;
        }

        .aether-card-title {
            font-size: 18px;
        }

        .aether-load-btn {
            padding: 12px 32px;
            font-size: 14px;
        }

        .aether-modal-footer {
            padding: 10px 16px;
        }

        .aether-modal-title {
            font-size: 12px;
            max-width: 50%;
        }

        .aether-zoom-btn {
            width: 34px;
            height: 34px;
        }
    }

    @media (max-width: 480px) {
        .aether-installation-section {
            padding: 80px 0;
        }

        .aether-title {
            font-size: 32px;
        }

        .aether-header-chip {
            margin-bottom: 15px;
        }

        .aether-number {
            font-size: 24px;
        }

        .aether-zoom-icon {
            width: 38px;
            height: 38px;
        }

        .aether-zoom-icon svg {
            width: 18px;
            height: 18px;
        }

        .aether-modal-container {
            max-width: 95vw;
        }
    }

    /* Placeholder Image Styling */
    .aether-image-wrapper img[src*="placeholder"],
    .aether-image-wrapper img:not([src]) {
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
    // ========== ZOOM MODAL JAVASCRIPT ==========
    let currentZoom = 1;
    let modalImage = null;

    function openZoomModal(imageUrl, imageTitle) {
        const modal = document.getElementById('zoomModal');
        const modalImg = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');

        modalImg.src = imageUrl;
        modalTitle.textContent = imageTitle || 'Installation Image';
        currentZoom = 1;
        modalImg.style.transform = `scale(${currentZoom})`;

        modal.classList.add('active');
        document.body.classList.add('modal-open');

        // Store reference for zoom functions
        modalImage = modalImg;

        // Add keyboard event listener
        document.addEventListener('keydown', handleModalKeydown);
    }

    function closeZoomModal() {
        const modal = document.getElementById('zoomModal');
        modal.classList.remove('active');
        document.body.classList.remove('modal-open');

        // Reset zoom when closing
        if (modalImage) {
            currentZoom = 1;
            modalImage.style.transform = `scale(${currentZoom})`;
        }

        // Remove keyboard event listener
        document.removeEventListener('keydown', handleModalKeydown);
    }

    function zoomIn() {
        if (currentZoom < 3) {
            currentZoom = Math.min(3, currentZoom + 0.25);
            if (modalImage) {
                modalImage.style.transform = `scale(${currentZoom})`;
                modalImage.style.cursor = currentZoom > 1 ? 'zoom-out' : 'zoom-in';
            }
        }
    }

    function zoomOut() {
        if (currentZoom > 0.5) {
            currentZoom = Math.max(0.5, currentZoom - 0.25);
            if (modalImage) {
                modalImage.style.transform = `scale(${currentZoom})`;
                modalImage.style.cursor = currentZoom > 1 ? 'zoom-out' : 'zoom-in';
            }
        }
    }

    function resetZoom() {
        currentZoom = 1;
        if (modalImage) {
            modalImage.style.transform = `scale(${currentZoom})`;
            modalImage.style.cursor = 'zoom-in';
        }
    }

    // Handle keyboard events
    function handleModalKeydown(event) {
        if (event.key === 'Escape') {
            closeZoomModal();
        } else if (event.key === '+' || event.key === '=') {
            zoomIn();
            event.preventDefault();
        } else if (event.key === '-' || event.key === '_') {
            zoomOut();
            event.preventDefault();
        } else if (event.key === '0') {
            resetZoom();
            event.preventDefault();
        }
    }

    // Click on image to toggle zoom
    function toggleZoomOnImage() {
        if (currentZoom > 1) {
            resetZoom();
        } else {
            zoomIn();
        }
    }

    // Initialize after DOM loads
    document.addEventListener('DOMContentLoaded', function() {
        // Add click handler on modal image
        const modalImg = document.getElementById('modalImage');
        if (modalImg) {
            modalImg.addEventListener('click', toggleZoomOnImage);
        }

        // Load More functionality
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                // You can implement AJAX load more here
                alert('Load more functionality - connect to your backend API');
            });
        }
    });

    // Also handle window click to close (already handled by modal onclick)
</script>

@endsection


<!-- https://taqtiveadmin.amaxjobs.com/uploads%7F7620267496-ammonia-refrigeration-installation-in-a-food-process-plant.jpg
https://taqtiveadmin.amaxjobs.com/uploads/1777620267496-ammonia-refrigeration-installation-in-a-food-process-plant.jpg


https://taqtiveadmin.amaxjobs.com/uploads\1777620267496-ammonia-refrigeration-installation-in-a-food-process-plant.jpg
https://taqtiveadmin.amaxjobs.com/uploads7620267496-ammonia-refrigeration-installation-in-a-food-process-plant.jpg -->