<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    <title>Nephrology | GEM Hospital Chennai - Esophago-Gastric Excellence</title>
    <meta name="description" content="GEM Hospital Chennai is one of India's most advanced centers for Upper GI diseases, specializing in laparoscopic and robotic surgery for esophageal and stomach cancers.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/upper-gi-surgery.php">
    <meta property="og:title" content="Nephrology Excellence | GEM Hospital Chennai">
    <meta property="og:description" content="World-class care for Esophago-Gastric diseases. Pioneering Thoraco-Laparoscopic Esophagectomy techniques now used globally.">
    <meta property="og:image" content="https://gemhospital.net/chennai/assets/images/service/10.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/upper-gi-surgery.php">
    <meta property="twitter:title" content="Nephrology Excellence | GEM Hospital Chennai">
    <meta property="twitter:description" content="World-class care for Esophago-Gastric diseases. Pioneering Thoraco-Laparoscopic Esophagectomy techniques now used globally.">
    <meta property="twitter:image" content="https://gemhospital.net/chennai/assets/images/service/10.webp">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .icon img {
            filter: invert(22%) sepia(100%) saturate(455%) hue-rotate(110deg) brightness(35%) contrast(95%);
        }
        .icon-area img {
            filter: invert(22%) sepia(100%) saturate(455%) hue-rotate(110deg) brightness(35%) contrast(95%);
        }

        /* ===== Creative Sidebar ===== */
        .gem-sidebar-card {
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }

        /* --- Appointment Card --- */
        .gem-appt-card {
            background: linear-gradient(145deg, #1a4f32 0%, #0d6e42 60%, #14a05a 100%);
            color: #fff;
            box-shadow: 0 12px 40px rgba(26,79,50,0.35);
        }
        .gem-appt-glow {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            top: -50px;
            right: -50px;
            pointer-events: none;
        }
        .gem-appt-icon-ring {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .gem-appt-icon-ring i {
            font-size: 26px;
            color: #fff;
            animation: heartbeat 1.4s ease-in-out infinite;
        }
        .gem-appt-card h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .gem-appt-card p {
            color: rgba(255,255,255,0.82);
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 22px;
        }
        .gem-sidebar-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            color: #1a4f32;
            padding: 12px 22px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 4px 18px rgba(0,0,0,0.12);
        }
        .gem-sidebar-btn:hover {
            background: #f0faf4;
            color: #0d6e42;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        }
        .gem-appt-divider {
            height: 1px;
            background: rgba(255,255,255,0.2);
            margin: 22px 0;
        }
        .gem-emergency-row {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }
        .gem-emergency-row span {
            color: rgba(255,255,255,0.8);
            font-size: 13px;
        }
        .gem-emergency-row a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            margin-left: auto;
        }
        .gem-emergency-row a:hover { text-decoration: underline; }
        .gem-pulse-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #7fffb5;
            box-shadow: 0 0 0 0 rgba(127,255,181,0.6);
            animation: pulse-dot 1.6s infinite;
            flex-shrink: 0;
        }
        @keyframes pulse-dot {
            0%   { box-shadow: 0 0 0 0 rgba(127,255,181,0.6); }
            70%  { box-shadow: 0 0 0 8px rgba(127,255,181,0); }
            100% { box-shadow: 0 0 0 0 rgba(127,255,181,0); }
        }

        /* --- Feature Highlights Card --- */
        .gem-stats-card {
            background: #f6faf8;
            border: 1px solid rgba(26,79,50,0.12);
            box-shadow: 0 4px 20px rgba(26,79,50,0.07);
        }
        .gem-stats-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a4f32;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .gem-stats-title i { color: #e8a000; font-size: 16px; }
        .gem-feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gem-feature-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 0;
            font-size: 14px;
            color: #333;
            border-bottom: 1px solid rgba(26,79,50,0.07);
            font-weight: 500;
        }
        .gem-feature-list li:last-child { border-bottom: none; }
        .gem-feature-list li i {
            color: #1a4f32;
            font-size: 15px;
            flex-shrink: 0;
        }

        /* --- Trust CTA Card --- */
        .gem-trust-card {
            background: linear-gradient(160deg, #0a2e1c 0%, #1a4f32 100%);
            color: #fff;
            text-align: center;
            box-shadow: 0 12px 40px rgba(10,46,28,0.35);
            padding: 36px 28px;
        }
        .gem-trust-bg {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.07) 0%, transparent 60%);
            pointer-events: none;
        }
        .gem-trust-icon {
            font-size: 42px;
            color: #7fffb5;
            display: block;
            margin-bottom: 16px;
            animation: heartbeat 1.4s ease-in-out infinite;
        }
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            14%       { transform: scale(1.15); }
            28%       { transform: scale(1); }
            42%       { transform: scale(1.1); }
            70%       { transform: scale(1); }
        }
        .gem-trust-content h4 {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .gem-trust-content p {
            color: rgba(255,255,255,0.75);
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 22px;
        }
        .gem-sidebar-btn-white {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.5);
            justify-content: center;
            width: 100%;
        }
        .gem-sidebar-btn-white:hover {
            background: #fff;
            color: #1a4f32;
            border-color: #fff;
        }

        /* --- Responsive --- */
        @media (max-width: 991px) {
            .gem-sidebar-card { margin-top: 0; }
            .col-lg-3 { margin-top: 40px; }
        }
        @media (max-width: 575px) {
            .gem-sidebar-card { padding: 22px 18px; }
            .gem-appt-card h4 { font-size: 17px; }
        }

        /* ===== Content Section Styles ===== */
        .ugi-section-tag {
            display: inline-block;
            background: #1a4f32;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 5px 16px;
            border-radius: 50px;
            margin-top: 12px;
        }

        .ugi-highlight-banner {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            background: linear-gradient(135deg, #f0faf5, #e0f5ea);
            border-left: 4px solid #1a4f32;
            border-radius: 12px;
            padding: 20px 24px;
            margin: 24px 0;
        }
        .ugi-highlight-banner i {
            font-size: 28px;
            color: #e8a000;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .ugi-highlight-banner strong {
            display: block;
            color: #1a4f32;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 6px;
        }
        .ugi-highlight-banner p {
            margin: 0;
            font-size: 16px;
            color: #444;
            line-height: 1.7;
        }

        .ugi-tag-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 14px;
        }
        .ugi-tag-grid span {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #f6faf8;
            border: 1px solid rgba(26,79,50,0.15);
            color: #1a4f32;
            font-size: 15px;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 50px;
            transition: all 0.25s;
        }
        .ugi-tag-grid span:hover {
            background: #1a4f32;
            color: #fff;
            border-color: #1a4f32;
        }
        .ugi-tag-grid span i {
            font-size: 8px;
            color: #14a05a;
        }
        .ugi-tag-grid span:hover i { color: #7fffb5; }

        @media (max-width: 575px) {
            .ugi-highlight-banner { flex-direction: column; gap: 10px; padding: 16px; }
            .ugi-tag-grid span { font-size: 12px; padding: 6px 12px; }
        }

        /* ===== Info Cards (2-col grid) ===== */
        .ugi-info-card {
            background: #fff;
            border: 1px solid rgba(26,79,50,0.12);
            border-radius: 16px;
            padding: 26px 24px;
            height: 100%;
            box-shadow: 0 4px 20px rgba(26,79,50,0.06);
            transition: box-shadow 0.3s;
        }
        .ugi-info-card:hover {
            box-shadow: 0 8px 32px rgba(26,79,50,0.13);
        }
        .ugi-info-card--green {
            background: linear-gradient(160deg, #f0faf5 0%, #e6f7ee 100%);
            border-color: rgba(26,79,50,0.2);
        }
        .ugi-info-card-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(26,79,50,0.1);
        }
        .ugi-info-card-head h5 {
            margin: 0;
            font-size: 17px;
            font-weight: 700;
            color: #1a4f32;
            line-height: 1.4;
        }
        .ugi-card-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #1a4f32;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .ugi-card-icon i {
            color: #fff;
            font-size: 18px;
        }
        .ugi-card-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .ugi-card-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 7px 0;
            font-size: 15px;
            color: #444;
            line-height: 1.6;
            border-bottom: 1px dashed rgba(26,79,50,0.08);
        }
        .ugi-card-list li:last-child { border-bottom: none; }
        .ugi-card-list li i {
            color: #1a4f32;
            font-size: 13px;
            flex-shrink: 0;
            margin-top: 3px;
        }

        @media (max-width: 767px) {
            .ugi-info-card { margin-bottom: 0; }
            .ugi-card-icon { width: 38px; height: 38px; border-radius: 10px; }
            .ugi-card-icon i { font-size: 15px; }
            .ugi-info-card-head h5 { font-size: 14px; }
        }

        /* ===== Related Specialities List ===== */
        .gem-related-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gem-related-list li {
            border-bottom: 1px solid rgba(26,79,50,0.08);
        }
        .gem-related-list li:last-child { border-bottom: none; }
        .gem-related-list li a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 0;
            font-size: 13.5px;
            font-weight: 500;
            color: #333;
            text-decoration: none;
            transition: all 0.25s;
        }
        .gem-related-list li a i {
            font-size: 10px;
            color: #1a4f32;
            transition: transform 0.25s;
        }
        .gem-related-list li a:hover {
            color: #1a4f32;
            padding-left: 4px;
        }
        .gem-related-list li a:hover i { transform: translateX(3px); }

        /* ===== Doctor Card ===== */
        .gem-doctor-card {
            background: #fff;
            border: 1px solid rgba(26,79,50,0.12);
            box-shadow: 0 4px 20px rgba(26,79,50,0.06);
        }
        .gem-doctor-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 14px;
        }
        .gem-doctor-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid rgba(26,79,50,0.2);
            flex-shrink: 0;
        }
        .gem-doctor-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .gem-doctor-info h5 {
            margin: 0 0 4px;
            font-size: 15px;
            font-weight: 700;
            color: #1a4f32;
        }
        .gem-doctor-info span {
            font-size: 12px;
            color: #888;
        }
        .gem-doctor-bio {
            font-size: 16px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 16px;
        }
        .gem-sidebar-btn-outline {
            background: transparent;
            color: #1a4f32;
            border: 2px solid #1a4f32;
            box-shadow: none;
        }
        .gem-sidebar-btn-outline:hover {
            background: #1a4f32;
            color: #fff;
        }

        /* ===== Quick Stats Numbers ===== */
        .gem-stats-numbers-card {
            background: linear-gradient(145deg, #1a4f32 0%, #0d6e42 100%);
        }
        .gem-stats-numbers-card .gem-stats-title {
            color: #fff;
        }
        .gem-stats-numbers-card .gem-stats-title i { color: #7fffb5; }
        .gem-stat-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 4px;
        }
        .gem-stat-item {
            background: rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 14px 10px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.15);
        }
        .gem-stat-item strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
        }
        .gem-stat-item span {
            font-size: 11px;
            color: rgba(255,255,255,0.75);
            margin-top: 4px;
            display: block;
            line-height: 1.4;
        }

        /* ===== Diagnostic Icon Grid ===== */
        .ugi-diag-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 18px;
        }
        .ugi-diag-card {
            background: #f6faf8;
            border: 1px solid rgba(26,79,50,0.12);
            border-radius: 14px;
            padding: 20px 16px;
            text-align: center;
            transition: all 0.3s;
            cursor: default;
        }
        .ugi-diag-card:hover {
            background: #1a4f32;
            border-color: #1a4f32;
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(26,79,50,0.2);
        }
        .ugi-diag-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: rgba(26,79,50,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            transition: background 0.3s;
        }
        .ugi-diag-icon i {
            font-size: 20px;
            color: #1a4f32;
            transition: color 0.3s;
        }
        .ugi-diag-card:hover .ugi-diag-icon {
            background: rgba(255,255,255,0.15);
        }
        .ugi-diag-card:hover .ugi-diag-icon i { color: #fff; }
        .ugi-diag-card p {
            margin: 0;
            font-size: 15px;
            color: #444;
            line-height: 1.5;
            font-weight: 500;
            transition: color 0.3s;
        }
        .ugi-diag-card:hover p { color: rgba(255,255,255,0.9); }

        @media (max-width: 991px) { .ugi-diag-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 479px)  { .ugi-diag-grid { grid-template-columns: 1fr 1fr; gap: 10px; } }

        /* ===== Surgery Timeline ===== */
        .ugi-surgery-timeline {
            margin-top: 18px;
            display: flex;
            flex-direction: column;
            gap: 0;
        }
        .ugi-surgery-item {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 18px 20px;
            border-left: 3px solid rgba(26,79,50,0.15);
            margin-left: 26px;
            position: relative;
            transition: all 0.25s;
        }
        .ugi-surgery-item:hover {
            background: #f6faf8;
            border-radius: 0 12px 12px 0;
            border-left-color: #1a4f32;
        }
        .ugi-surgery-item--accent {
            border-left-color: rgba(20,160,90,0.4);
        }
        .ugi-surgery-item--accent:hover { border-left-color: #14a05a; }
        .ugi-surgery-num {
            position: absolute;
            left: -26px;
            top: 16px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #1a4f32;
            color: #fff;
            font-size: 11px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 3px solid #fff;
            box-shadow: 0 2px 8px rgba(26,79,50,0.25);
        }
        .ugi-surgery-item--accent .ugi-surgery-num { background: #14a05a; }
        .ugi-surgery-text strong {
            display: block;
            font-size: 18px;
            font-weight: 700;
            color: #1a4f32;
            margin-bottom: 4px;
        }
        .ugi-surgery-text p {
            margin: 0;
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 575px) {
            .ugi-surgery-item { padding: 14px 12px; gap: 12px; }
            .ugi-surgery-text strong { font-size: 13px; }
        }

        /* ===== Sidebar Surgery List Card ===== */
        .gem-surgery-card {
            background: #fff;
            border: 1px solid rgba(26,79,50,0.12);
            box-shadow: 0 4px 20px rgba(26,79,50,0.06);
        }
        .gem-surgery-list {
            display: flex;
            flex-direction: column;
            gap: 0;
            margin-top: 4px;
        }
        .gem-surgery-list-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 9px 8px;
            border-bottom: 1px dashed rgba(26,79,50,0.1);
            border-radius: 8px;
            transition: background 0.2s;
            cursor: default;
        }
        .gem-surgery-list-item:last-child { border-bottom: none; }
        .gem-surgery-list-item:hover { background: #f0faf5; }
        .gem-surgery-list-item--robotic { background: rgba(20,160,90,0.04); }
        .gem-surgery-list-item--robotic:hover { background: rgba(20,160,90,0.1); }
        .gsli-num {
            min-width: 28px;
            height: 28px;
            border-radius: 8px;
            background: #1a4f32;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .gem-surgery-list-item--robotic .gsli-num { background: #14a05a; }
        .gsli-text {
            font-size: 16px;
            color: #333;
            font-weight: 500;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <?php include 'include.php'; ?>
    <?php include 'header.php'; ?>

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Nephrology</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Nephrology</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->


    <!-- service details area start -->
    <div class="service-details-surgery rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 pl--40 pl_md--10 pl_sm--15">
                    <div class="service-details-surgery-main">
                        <div class="thumbnail">
                            <img src="assets/images/service/10.webp" alt="Nephrology at GEM Hospital">
                        </div>

                        <!-- OVERVIEW -->
                        <h2 class="title">Comprehensive Nephrology &amp; Kidney Care</h2>
                        <p class="disc">
                            The Department of Nephrology at GEM Hospital is dedicated to providing superior care for patients with kidney-related disorders. We combine clinical expertise with state-of-the-art technology to offer personalized treatment plans that prioritize patient safety and long-term health outcomes.
                        </p>
                        <p class="disc">
                            Our team of expert nephrologists manages the full spectrum of kidney diseases, from common infections to complex chronic conditions and end-stage renal failure. We are equipped with advanced dialysis facilities and offer comprehensive support for kidney transplantation and metabolic bone diseases.
                        </p>

                        <!-- Innovation Highlight banner -->
                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-hospital-user"></i>
                            <div>
                                <strong>Patient-Centric Dialysis Care</strong>
                                <p>Our advanced dialysis unit provides high-quality hemodialysis and peritoneal dialysis with stringent infection control protocols and comfortable recovery spaces.</p>
                            </div>
                        </div>

                        <!-- Specialized Care: 2-col card grid -->
                        <div class="row g-4 mt--10">
                            <div class="col-lg-6 col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-briefcase-medical"></i></span>
                                        <h5>Conditions We Treat</h5>
                                    </div>
                                    <ul class="ugi-card-list">
                                        <li><i class="fa-solid fa-circle-check"></i>Acute Kidney Injury (AKI)</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Chronic Kidney Disease (CKD)</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Diabetic Kidney Disease</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Hypertensive Nephropathy</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Glomerular Diseases</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Metabolic Bone Disorders</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="ugi-info-card ugi-info-card--green">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-flask-vial"></i></span>
                                        <h5>Specialized Services</h5>
                                    </div>
                                    <ul class="ugi-card-list">
                                        <li><i class="fa-solid fa-circle-check"></i>Advanced Hemodialysis</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Peritoneal Dialysis</li>
                                        <li><i class="fa-solid fa-circle-check"></i>CRRT for ICU Patients</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Kidney Biopsy (USG Guided)</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Transplant Nephrology</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Dialysis Access Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Diagnostic Grid -->
                        <h3 class="title pt-5">Precision Renal Diagnostics</h3>
                        <div class="ugi-diag-grid">
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-vial"></i></div>
                                <p>Comprehensive Renal Panels</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                                <p>Automated Kidney Biopsy</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-wave-square"></i></div>
                                <p>Renal Doppler Imaging</p>
                            </div>
                        </div>

                        <!-- GEM Advantage -->
                        <h3 class="title pt-5">The GEM Kidney Care Advantage</h3>
                        <div class="ugi-surgery-timeline">
                            <div class="ugi-surgery-item">
                                <div class="ugi-surgery-num">01</div>
                                <div class="ugi-surgery-text">
                                    <strong>Integrated ICU Support</strong>
                                    <p>Advanced CRRT (Continuous Renal Replacement Therapy) support for critically ill patients with multi-organ failure.</p>
                                </div>
                            </div>
                            <div class="ugi-surgery-item ugi-surgery-item--accent">
                                <div class="ugi-surgery-num">02</div>
                                <div class="ugi-surgery-text">
                                    <strong>Expert Transplant Team</strong>
                                    <p>Highly experienced in handling both living donor and cadaveric kidney transplantations with excellent success rates.</p>
                                </div>
                            </div>
                            <div class="ugi-surgery-item">
                                <div class="ugi-surgery-num">03</div>
                                <div class="ugi-surgery-text">
                                    <strong>24/7 Dialysis Services</strong>
                                    <p>Round-the-clock dialysis support for emergencies and regular outpatient maintenance with strict hygiene standards.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">

                    <!-- Card 1: Book Appointment -->
                    <div class="gem-sidebar-card gem-appt-card">
                        <div class="gem-appt-glow"></div>
                        <div class="gem-appt-icon-ring">
                            <i class="fa-solid fa-heartbeat"></i>
                        </div>
                        <h4>Book an Appointment</h4>
                        <p>Get expert care from our specialist surgeons. Quick, easy, and hassle-free.</p>
                        <a href="appoinment.php" class="gem-sidebar-btn">
                            <i class="fa-solid fa-calendar-plus"></i> Schedule Now
                        </a>
                        <div class="gem-appt-divider"></div>
                        <div class="gem-emergency-row">
                            <div class="gem-pulse-dot"></div>
                            <span>24/7 Emergency</span>
                            <a href="tel:04461666666"><strong>044 6166 6666</strong></a>
                        </div>
                    </div>

                    <!-- Card 2: Why GEM -->
                    <div class="gem-sidebar-card gem-stats-card">
                        <h5 class="gem-stats-title">
                            <i class="fa-solid fa-star"></i> Why GEM Hospital?
                        </h5>
                        <ul class="gem-feature-list">
                            <li><i class="fa-solid fa-circle-check"></i> 30+ Years of Excellence</li>
                            <li><i class="fa-solid fa-circle-check"></i> 1,00,000+ Surgeries Done</li>
                            <li><i class="fa-solid fa-circle-check"></i> Robotic &amp; Laparoscopic Care</li>
                            <li><i class="fa-solid fa-circle-check"></i> Internationally Accredited</li>
                            <li><i class="fa-solid fa-circle-check"></i> World-class ICU &amp; Recovery</li>
                        </ul>
                    </div>

                    <!-- Card 4: Surgeries Performed -->
                    <div class="gem-sidebar-card gem-surgery-card">
                        <h5 class="gem-stats-title">
                            <i class="fa-solid fa-hand-holding-medical"></i> Renal Procedures
                        </h5>
                        <div class="gem-surgery-list">
                            <div class="gem-surgery-list-item">
                                <span class="gsli-num">01</span>
                                <span class="gsli-text">Maintenance Hemodialysis</span>
                            </div>
                            <div class="gem-surgery-list-item">
                                <span class="gsli-num">02</span>
                                <span class="gsli-text">Continuous Renal Replacement Therapy (CRRT)</span>
                            </div>
                            <div class="gem-surgery-list-item">
                                <span class="gsli-num">03</span>
                                <span class="gsli-text">Percutaneous Kidney Biopsy</span>
                            </div>
                            <div class="gem-surgery-list-item">
                                <span class="gsli-num">04</span>
                                <span class="gsli-text">Permcath Insertion for Dialysis</span>
                            </div>
                            <div class="gem-surgery-list-item">
                                <span class="gsli-num">05</span>
                                <span class="gsli-text">AV Fistula Creation &amp; Management</span>
                            </div>
                            <div class="gem-surgery-list-item">
                                <span class="gsli-num">06</span>
                                <span class="gsli-text">CAPD (Peritoneal Dialysis) Training</span>
                            </div>
                            <div class="gem-surgery-list-item gem-surgery-list-item--robotic">
                                <span class="gsli-num">07</span>
                                <span class="gsli-text">Living Donor Kidney Transplant Support</span>
                            </div>
                            <div class="gem-surgery-list-item gem-surgery-list-item--robotic">
                                <span class="gsli-num">08</span>
                                <span class="gsli-text">Post-Transplant Renal Care</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Expert Surgeon -->
                    <div class="gem-sidebar-card gem-doctor-card">
                        <div class="gem-doctor-header">
                            <div class="gem-doctor-avatar">
                                <img src="assets/images/team/palanivelu.png" alt="Dr. C. Palanivelu">
                            </div>
                            <div class="gem-doctor-info">
                                <h5>Dr. C. Palanivelu</h5>
                                <span>Head of Division</span>
                            </div>
                        </div>
                        <p class="gem-doctor-bio">World-renowned pioneer in laparoscopic &amp; robotic surgery with <strong>1000+</strong> esophageal cancer surgeries performed successfully.</p>
                        <a href="doctor.php" class="gem-sidebar-btn gem-sidebar-btn-outline">
                            <i class="fa-solid fa-user-doctor"></i> View Profile
                        </a>
                    </div>

                    <!-- Card 6: Quick Stats -->
                    <div class="gem-sidebar-card gem-stats-numbers-card">
                        <h5 class="gem-stats-title"><i class="fa-solid fa-chart-line"></i> GEM at a Glance</h5>
                        <div class="gem-stat-grid">
                            <div class="gem-stat-item">
                                <strong>30+</strong>
                                <span>Years of Excellence</span>
                            </div>
                            <div class="gem-stat-item">
                                <strong>1L+</strong>
                                <span>Surgeries Performed</span>
                            </div>
                            <div class="gem-stat-item">
                                <strong>1000+</strong>
                                <span>Cancer Surgeries</span>
                            </div>
                            <div class="gem-stat-item">
                                <strong>24/7</strong>
                                <span>Emergency Care</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->



    <?php include 'footer.php'; ?>





    <script src="assets/js/plugins/jquery.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/vendor/waw.js"></script>
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/metismenu.js"></script>
    <script src="assets/js/plugins/jarallax.js"></script>
    <script src="assets/js/plugins/smooth-scroll.js"></script>
    <script src="assets/js/plugins/magnifying-popup.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- main js here -->
    <script src="assets/js/main.js"></script>
</body>

</html>