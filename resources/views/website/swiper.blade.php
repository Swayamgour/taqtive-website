<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Contact Right Section</title>
    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Inter & Outfit for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset & Base - only for right section preview */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0A0F1A 0%, #0B1120 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            padding: 40px 20px;
        }

        /* ========== ATTRACTIVE RIGHT SECTION UI ========== */
        .fx-contact-us-1-right {
            max-width: 550px;
            width: 100%;
            margin: 0 auto;
        }

        /* Modern Glassmorphic Card */
        .fx-contact-us-1-content {
            background: rgba(18, 28, 40, 0.75);
            backdrop-filter: blur(16px);
            border-radius: 36px;
            padding: 32px 28px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 30px 50px -20px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(252, 82, 32, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .fx-contact-us-1-content:hover {
            transform: translateY(-6px);
            box-shadow: 0 35px 55px -20px rgba(252, 82, 32, 0.25), 0 0 0 1px rgba(252, 82, 32, 0.2);
        }

        /* Info Box Styling */
        .fx-contact-us-1-info-box {
            margin-bottom: 32px;
        }

        /* Title with accent underline */
        .box-title {
            font-size: 1.4rem;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            color: #FFFFFF;
            margin-bottom: 24px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -0.3px;
            position: relative;
        }

        .box-title i {
            color: #FC5220;
            font-size: 1.5rem;
            background: rgba(252, 82, 32, 0.15);
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
        }

        .box-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #FC5220, #FFB085);
            border-radius: 3px;
        }

        /* Modern Info List Items */
        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .info-list li {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 14px;
            padding: 12px 18px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .info-list li:hover {
            background: rgba(252, 82, 32, 0.12);
            border-color: rgba(252, 82, 32, 0.35);
            transform: translateX(8px);
        }

        .info-list li i {
            width: 38px;
            height: 38px;
            background: rgba(252, 82, 32, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            color: #FC5220;
            font-size: 1.1rem;
            transition: all 0.25s ease;
        }

        .info-list li:hover i {
            background: #FC5220;
            color: white;
            transform: scale(1.05);
        }

        .info-list li a {
            color: #E8EDFF;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            letter-spacing: -0.2px;
            transition: color 0.2s;
            flex: 1;
        }

        .info-list li:hover a {
            color: #FFB893;
        }

        /* Divider with gradient */
        .modern-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(252, 82, 32, 0.4), rgba(255, 176, 133, 0.3), transparent);
            margin: 24px 0 28px;
        }

        /* Regional Offices - Premium Card Grid */
        .regional-offices-wrapper {
            margin-top: 8px;
        }

        .regional-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 18px;
            margin-top: 16px;
        }

        /* Individual Office Card */
        .regional-office-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%);
            border-radius: 24px;
            padding: 18px 16px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(4px);
        }

        .regional-office-card:hover {
            background: rgba(252, 82, 32, 0.08);
            border-color: rgba(252, 82, 32, 0.4);
            transform: translateY(-5px);
        }

        .reg-title-modern {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            color: #FC5220;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(252, 82, 32, 0.3);
        }

        .reg-title-modern i {
            font-size: 1rem;
            background: rgba(252, 82, 32, 0.2);
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        /* Office Detail List */
        .office-detail-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .office-detail-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 0.85rem;
            color: #C7D3F0;
            padding: 6px 0;
            background: transparent;
            border: none;
            transition: transform 0.2s;
        }

        .office-detail-list li:hover {
            transform: translateX(4px);
        }

        .office-detail-list li i {
            width: 28px;
            height: 28px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            color: #FC5220;
        }

        .office-detail-list li a {
            color: #C7D3F0;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: color 0.2s;
        }

        .office-detail-list li:hover a {
            color: #FFB085;
        }

        .office-detail-list li span {
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Support Badge - Small Attractive Element */
        .support-badge {
            margin-top: 28px;
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(252, 82, 32, 0.08);
            border-radius: 60px;
            padding: 10px 20px;
            border: 1px solid rgba(252, 82, 32, 0.2);
            backdrop-filter: blur(4px);
        }

        .support-badge i {
            font-size: 1.3rem;
            color: #FC5220;
        }

        .support-badge span {
            font-size: 0.8rem;
            font-weight: 500;
            color: #D1DFFF;
            letter-spacing: -0.2px;
        }

        /* Responsive */
        @media (max-width: 560px) {
            .fx-contact-us-1-content {
                padding: 24px 18px;
            }

            .info-list li {
                padding: 10px 14px;
            }

            .regional-grid {
                grid-template-columns: 1fr;
            }

            .box-title {
                font-size: 1.25rem;
            }
        }
    </style>
</head>

<body>

    <!-- ONLY RIGHT SECTION - ATTRACTIVE MODERN UI -->
    <div class="fx-contact-us-1-right">
        <div class="fx-contact-us-1-content fix">

            <!-- GET IN TOUCH - Premium Section -->
            <div class="fx-contact-us-1-info-box fix txxaslideup">
                <h6 class="box-title fx-heading-1 fx-font-400">
                    <i class="fa-regular fa-message-lines"></i> Get in Touch
                </h6>

                <ul class="info-list txxaslideup-item fx-cube-1">
                    <li class="txxaslideup-item fx-cube-1">
                        <i class="fa-regular fa-envelope"></i>
                        <a href="mailto:info@forgexindustry.co.uk">info@forgexindustry.co.uk</a>
                    </li>
                    <li class="txxaslideup-item fx-cube-1">
                        <i class="fa-light fa-phone-volume"></i>
                        <a href="tel:+919625340587">+91-9625340587</a>
                    </li>
                    <li class="txxaslideup-item fx-cube-1">
                        <i class="fa-light fa-phone-volume"></i>
                        <a href="tel:+917048935403">+91-7048935403</a>
                    </li>
                    <li class="txxaslideup-item fx-cube-1">
                        <i class="fa-light fa-phone-volume"></i>
                        <a href="tel:+919069510846">+91-9069510846</a>
                    </li>
                </ul>
            </div>

            <!-- Elegant Divider -->
            <div class="modern-divider"></div>

            <!-- REGIONAL OFFICES - Modern Card Grid Design -->
            <div class="fx-contact-us-1-info-box txxaslideup fix">
                <div class="regional-offices-wrapper">
                    <h6 class="box-title fx-heading-1 fx-font-400">
                        <i class="fa-regular fa-building"></i> Regional Offices
                    </h6>

                    <div class="regional-grid">
                        <!-- WEST CARD -->
                        <div class="regional-office-card">
                            <div class="reg-title-modern">
                                <i class="fa-regular fa-sun"></i> West
                            </div>
                            <ul class="office-detail-list">
                                <li><i class="fa-regular fa-location-dot"></i> <span>Ahmedabad, Gujarat</span></li>
                                <li><i class="fa-regular fa-envelope"></i> <a href="mailto:sales.west@teqveref.com">sales.west@teqveref.com</a></li>
                                <li><i class="fa-light fa-phone-volume"></i> <a href="tel:+919319088580">+91-9319088580</a></li>
                            </ul>
                        </div>

                        <!-- SOUTH CARD -->
                        <div class="regional-office-card">
                            <div class="reg-title-modern">
                                <i class="fa-regular fa-leaf"></i> South
                            </div>
                            <ul class="office-detail-list">
                                <li><i class="fa-regular fa-location-dot"></i> <span>Bengaluru, Karnataka</span></li>
                                <li><i class="fa-regular fa-envelope"></i> <a href="mailto:sales.south@teqveref.com">sales.south@teqveref.com</a></li>
                                <li><i class="fa-light fa-phone-volume"></i> <a href="tel:+919311772793">+91-9311772793</a></li>
                            </ul>
                        </div>

                        <!-- EAST CARD -->
                        <div class="regional-office-card">
                            <div class="reg-title-modern">
                                <i class="fa-regular fa-cloud-sun"></i> East
                            </div>
                            <ul class="office-detail-list">
                                <li><i class="fa-regular fa-location-dot"></i> <span>Kolkata, West Bengal</span></li>
                                <li><i class="fa-regular fa-envelope"></i> <a href="mailto:sales.east@teqveref.com">sales.east@teqveref.com</a></li>
                                <li><i class="fa-light fa-phone-volume"></i> <a href="tel:+917289927046">+91-7289927046</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support Badge (extra attractive element) -->
            <div class="support-badge">
                <i class="fa-regular fa-headset"></i>
                <span>24/7 technical support & service assistance</span>
            </div>

        </div>
    </div>

</body>

</html>