<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    <title>Advanced Endoscopy | GEM Hospital Chennai - Expert Therapeutic Care</title>
    <meta name="description"
        content="GEM Hospital Chennai offers cutting-edge therapeutic endoscopy procedures including ERCP, EUS, and the pioneering POEM procedure for Achalasia Cardia.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/advanced-endoscopy.php">
    <meta property="og:title" content="Advanced Therapeutic Endoscopy | GEM Hospital Chennai">
    <meta property="og:description"
        content="Leading the way in scarless procedures. GEM Hospital performed the Country’s First POEM Procedure. Expert care for complex GI conditions.">
    <meta property="og:image" content="https://gemhospital.net/chennai/assets/images/service/10.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/advanced-endoscopy.php">
    <meta property="twitter:title" content="Advanced Therapeutic Endoscopy | GEM Hospital Chennai">
    <meta property="twitter:description"
        content="Leading the way in scarless procedures. GEM Hospital performed the Country’s First POEM Procedure. Expert care for complex GI conditions.">
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
            box-shadow: 0 12px 40px rgba(26, 79, 50, 0.35);
        }

        .gem-appt-glow {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
            top: -50px;
            right: -50px;
            pointer-events: none;
        }

        .gem-appt-icon-ring {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            border: 2px solid rgba(255, 255, 255, 0.3);
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
            color: rgba(255, 255, 255, 0.82);
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
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.12);
        }

        .gem-sidebar-btn:hover {
            background: #f0faf4;
            color: #0d6e42;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .gem-appt-divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
            margin: 22px 0;
        }

        .gem-emergency-row {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .gem-emergency-row span {
            color: rgba(255, 255, 255, 0.8);
            font-size: 13px;
        }

        .gem-emergency-row a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            margin-left: auto;
        }

        .gem-emergency-row a:hover {
            text-decoration: underline;
        }

        .gem-pulse-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #7fffb5;
            box-shadow: 0 0 0 0 rgba(127, 255, 181, 0.6);
            animation: pulse-dot 1.6s infinite;
            flex-shrink: 0;
        }

        @keyframes pulse-dot {
            0% {
                box-shadow: 0 0 0 0 rgba(127, 255, 181, 0.6);
            }

            70% {
                box-shadow: 0 0 0 8px rgba(127, 255, 181, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(127, 255, 181, 0);
            }
        }

        /* --- Feature Highlights Card --- */
        .gem-stats-card {
            background: #f6faf8;
            border: 1px solid rgba(26, 79, 50, 0.12);
            box-shadow: 0 4px 20px rgba(26, 79, 50, 0.07);
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

        .gem-stats-title i {
            color: #e8a000;
            font-size: 16px;
        }

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
            border-bottom: 1px solid rgba(26, 79, 50, 0.07);
            font-weight: 500;
        }

        .gem-feature-list li:last-child {
            border-bottom: none;
        }

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
            box-shadow: 0 12px 40px rgba(10, 46, 28, 0.35);
            padding: 36px 28px;
        }

        .gem-trust-bg {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.07) 0%, transparent 60%);
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

            0%,
            100% {
                transform: scale(1);
            }

            14% {
                transform: scale(1.15);
            }

            28% {
                transform: scale(1);
            }

            42% {
                transform: scale(1.1);
            }

            70% {
                transform: scale(1);
            }
        }

        .gem-trust-content h4 {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .gem-trust-content p {
            color: rgba(255, 255, 255, 0.75);
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 22px;
        }

        .gem-sidebar-btn-white {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.5);
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
            .gem-sidebar-card {
                margin-top: 0;
            }

            .col-lg-3 {
                margin-top: 40px;
            }
        }

        @media (max-width: 575px) {
            .gem-sidebar-card {
                padding: 22px 18px;
            }

            .gem-appt-card h4 {
                font-size: 17px;
            }
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
            border: 1px solid rgba(26, 79, 50, 0.15);
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

        .ugi-tag-grid span:hover i {
            color: #7fffb5;
        }

        @media (max-width: 575px) {
            .ugi-highlight-banner {
                flex-direction: column;
                gap: 10px;
                padding: 16px;
            }

            .ugi-tag-grid span {
                font-size: 12px;
                padding: 6px 12px;
            }
        }

        /* ===== Info Cards (2-col grid) ===== */
        .ugi-info-card {
            background: #fff;
            border: 1px solid rgba(26, 79, 50, 0.12);
            border-radius: 16px;
            padding: 26px 24px;
            height: 100%;
            box-shadow: 0 4px 20px rgba(26, 79, 50, 0.06);
            transition: box-shadow 0.3s;
        }

        .ugi-info-card:hover {
            box-shadow: 0 8px 32px rgba(26, 79, 50, 0.13);
        }

        .ugi-info-card--green {
            background: linear-gradient(160deg, #f0faf5 0%, #e6f7ee 100%);
            border-color: rgba(26, 79, 50, 0.2);
        }

        .ugi-info-card-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(26, 79, 50, 0.1);
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
            border-bottom: 1px dashed rgba(26, 79, 50, 0.08);
        }

        .ugi-card-list li:last-child {
            border-bottom: none;
        }

        .ugi-card-list li i {
            color: #1a4f32;
            font-size: 13px;
            flex-shrink: 0;
            margin-top: 3px;
        }

        @media (max-width: 767px) {
            .ugi-info-card {
                margin-bottom: 0;
            }

            .ugi-card-icon {
                width: 38px;
                height: 38px;
                border-radius: 10px;
            }

            .ugi-card-icon i {
                font-size: 15px;
            }

            .ugi-info-card-head h5 {
                font-size: 14px;
            }
        }

        /* ===== Doctor Card ===== */
        .gem-doctor-card {
            background: #fff;
            border: 1px solid rgba(26, 79, 50, 0.12);
            box-shadow: 0 4px 20px rgba(26, 79, 50, 0.06);
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
            border: 2px solid rgba(26, 79, 50, 0.2);
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

        .gem-stats-numbers-card .gem-stats-title i {
            color: #7fffb5;
        }

        .gem-stat-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 4px;
        }

        .gem-stat-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 14px 10px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.15);
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
            color: rgba(255, 255, 255, 0.75);
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
            border: 1px solid rgba(26, 79, 50, 0.12);
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
            box-shadow: 0 8px 24px rgba(26, 79, 50, 0.2);
        }

        .ugi-diag-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: rgba(26, 79, 50, 0.1);
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
            background: rgba(255, 255, 255, 0.15);
        }

        .ugi-diag-card:hover .ugi-diag-icon i {
            color: #fff;
        }

        .ugi-diag-card p {
            margin: 0;
            font-size: 15px;
            color: #444;
            line-height: 1.5;
            font-weight: 500;
            transition: color 0.3s;
        }

        .ugi-diag-card:hover p {
            color: rgba(255, 255, 255, 0.9);
        }

        @media (max-width: 991px) {
            .ugi-diag-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 479px) {
            .ugi-diag-grid {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }
        }

        /* ===== Sidebar Surgery List Card ===== */
        .gem-surgery-card {
            background: #fff;
            border: 1px solid rgba(26, 79, 50, 0.12);
            box-shadow: 0 4px 20px rgba(26, 79, 50, 0.06);
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
            border-bottom: 1px dashed rgba(26, 79, 50, 0.1);
            border-radius: 8px;
            transition: background 0.2s;
            cursor: default;
        }

        .gem-surgery-list-item:last-child {
            border-bottom: none;
        }

        .gem-surgery-list-item:hover {
            background: #f0faf5;
        }

        .gem-surgery-list-item--robotic {
            background: rgba(20, 160, 90, 0.04);
        }

        .gem-surgery-list-item--robotic:hover {
            background: rgba(20, 160, 90, 0.1);
        }

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

        .gem-surgery-list-item--robotic .gsli-num {
            background: #14a05a;
        }

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

    <!-- Breadcrumb Area -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Advanced Endoscopy</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Advanced Endoscopy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service details area start -->
    <div class="service-details-surgery rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 pl--40 pl_md--10 pl_sm--15">
                    <div class="service-details-surgery-main">
                        <div class="thumbnail">
                            <img src="assets/images/service/10.webp" alt="Advanced Endoscopy at GEM Hospital"
                                class="rounded-3 shadow">
                        </div>

                        <!-- OVERVIEW -->
                        <h2 class="title mt--30">Advanced Therapeutic Endoscopy at GEM Hospital</h2>
                        <p class="disc">
                            Our department of advanced therapeutic endoscopy is led by <strong>Dr. R Vinoth Kumar
                                D.M</strong>, an expert in all kinds of therapeutic endoscopic procedures. GEM Hospital
                            is a high-load center performing a wide range of endoscopic interventions including ERCP,
                            Spyglass Cholangioscopy, EUS, Therapeutic enteral stenting, double balloon endoscopy, and
                            POEM.
                        </p>
                        <p class="disc">
                            Endoscopy is a non-surgical procedure used to examine the digestive tract. During an upper
                            endoscopy, an endoscope is passed through the mouth and throat into the esophagus, allowing
                            the doctor to view the esophagus, stomach, and the upper part of the small intestine.
                            Similarly, colonoscopy allows examination of the large intestine, while specialized
                            procedures like ERCP provide imaging of the pancreas and gallbladder.
                        </p>

                        <!-- Pioneering Banner -->
                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-trophy"></i>
                            <div>
                                <strong>Pioneering Excellence</strong>
                                <p>GEM Hospital holds the distinction of performing the <strong>Country’s First POEM
                                        Procedure</strong> for Achalasia Cardia and several other hybrid Lap-assisted
                                    Endoscopic procedures.</p>
                            </div>
                        </div>

                        <p class="disc">
                            GEM Hospital is recognized as one of the best endoscopy centers in Coimbatore and Chennai.
                            With its pioneering work, it has established itself as a leading healthcare provider in
                            Gastroenterology, Robotic surgery, and Therapeutic Endoscopy.
                        </p>

                        <!-- Expertise & Treatment Grid -->
                        <div class="row g-4 mt--10">
                            <div class="col-lg-6 col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-notes-medical"></i></span>
                                        <h5>Disease &amp; Treatment</h5>
                                    </div>
                                    <ul class="ugi-card-list">
                                        <li><i class="fa-solid fa-circle-check"></i>Stop active bleeding from ulcers
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remove polyps to prevent colon
                                            cancer</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remove gallstones from the bile duct
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Diagnosis of tumors (Pancreas, Lung)
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ultrasound exam of GI tract</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Liver biopsies for
                                            inflammation/fibrosis</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="ugi-info-card ugi-info-card--green">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-hospital"></i></span>
                                        <h5>GEM’s Advanced Facilities</h5>
                                    </div>
                                    <ul class="ugi-card-list">
                                        <li><i class="fa-solid fa-circle-check"></i>24/7 Emergency Endoscopy &amp; ICU
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>High-Resolution HD Endoscopes</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Endoscopic Ultrasound (EUS) &amp;
                                            ERCP</li>
                                        <li><i class="fa-solid fa-circle-check"></i>High-Resolution Manometry Lab</li>
                                        <li><i class="fa-solid fa-circle-check"></i>24-hour pH &amp; Impedance studies
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Biofeedback &amp; Motility Lab</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Specialized Procedures Grid -->
                        <h3 class="title pt-5">Key Endoscopic Procedures</h3>
                        <div class="ugi-diag-grid">
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-video"></i></div>
                                <p>Upper GI &amp; Colonoscopy</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-diagram-project"></i></div>
                                <p>ERCP (Bile/Pancreas)</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-wave-square"></i></div>
                                <p>Endoscopic Ultrasound (EUS)</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-bolt"></i></div>
                                <p>POEM Procedure</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                                <p>Spyglass Cholangioscopy</p>
                            </div>
                            <div class="ugi-diag-card">
                                <div class="ugi-diag-icon"><i class="fa-solid fa-circle-dot"></i></div>
                                <p>Double-Balloon Enteroscopy</p>
                            </div>
                        </div>

                        <!-- Technical Details -->
                        <h3 class="title pt-5">Specialized Interventions</h3>

                        <div class="ugi-highlight-banner mt--20"
                            style="background: #fff; border: 1px solid rgba(26,79,50,0.12); border-left: 4px solid #1a4f32;">
                            <div>
                                <strong>Spyglass Cholangioscopy</strong>
                                <p>Performed using a specialized flexible camera, this procedure treats large biliary
                                    stones using laser and takes precise biopsies from diseases of the biliary and
                                    pancreatic ducts. It is also used to retrieve forgotten or migrated stents.</p>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner mt--20"
                            style="background: #f6faf8; border-left: 4px solid #14a05a;">
                            <div>
                                <strong>Endoscopic Ultrasound (EUS)</strong>
                                <p>A special ultrasound probe at the endoscope's tip allows close visualization of
                                    internal structures. Used for diagnosing tumors of the pancreas, lymph nodes, and
                                    esophagus, and for scarless therapeutic procedures like Hepatogastrostomy.</p>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner mt--20"
                            style="background: #fff; border: 1px solid rgba(26,79,50,0.12); border-left: 4px solid #1a4f32;">
                            <div>
                                <strong>Achalasia treatment - POEM Procedure</strong>
                                <p>POEM (Per-Oral Endoscopic Myotomy) is a minimally invasive, scarless intervention for
                                    Achalasia Cardia. GEM Hospital is the pioneer of this procedure in Tamil Nadu,
                                    offering results comparable to surgery with quicker recovery.</p>
                            </div>
                        </div>

                        <h3 class="title pt-5">Supportive &amp; Other Procedures</h3>
                        <p class="disc">
                            Our referral center handles all kinds of advanced therapeutic interventions to improve
                            patient nutrition and quality of life:
                        </p>
                        <ul class="ugi-card-list">
                            <li><i class="fa-solid fa-circle-check"></i><strong>Feeding/PEG Tube Insertion</strong>:
                                Endoscopic insertion for patients with swallowing difficulties.</li>
                            <li><i class="fa-solid fa-circle-check"></i><strong>Enteral &amp; Esophageal
                                    Stenting</strong>: To relieve obstructions and improve nutrition in advanced cancer
                                patients.</li>
                            <li><i class="fa-solid fa-circle-check"></i><strong>Colonic Stenting</strong>: To relieve
                                intestinal obstruction and restore normal function in cancer cases.</li>
                            <li><i class="fa-solid fa-circle-check"></i><strong>Double-Balloon Enteroscopy</strong>: To
                                visualize the small bowel for diagnosing Crohn’s disease or malabsorption.</li>
                        </ul>

                        <!-- <div class="ugi-highlight-banner mt--30" style="background: linear-gradient(135deg, #f0faf5, #e0f5ea); border-left: 4px solid #e8a000;">
                            <i class="fa-solid fa-hand-holding-heart" style="color: #e8a000;"></i>
                            <div>
                                <strong>Compassionate Care</strong>
                                <p>Our Liver transplant program and HPB/HLT units bring the highest level of multidisciplinary scientific approach to patient care, adding hope to the burden of liver diseases.</p>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-lg-3">
                    <!-- Book Appointment -->
                    <div class="gem-sidebar-card gem-appt-card">
                        <div class="gem-appt-glow"></div>
                        <div class="gem-appt-icon-ring">
                            <i class="fa-solid fa-heartbeat"></i>
                        </div>
                        <h4>Book Appointment</h4>
                        <p>Get expert care from our specialist doctors. Quick, easy, and hassle-free.</p>
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

                    <!-- Why GEM -->
                    <div class="gem-sidebar-card gem-stats-card">
                        <h5 class="gem-stats-title"><i class="fa-solid fa-award"></i> Why GEM Hospital?</h5>
                        <ul class="gem-feature-list">
                            <li><i class="fa-solid fa-circle-check"></i> India's First POEM Center</li>
                            <li><i class="fa-solid fa-circle-check"></i> 1,00,000+ Surgeries Done</li>
                            <li><i class="fa-solid fa-circle-check"></i> 12+ In-house Endoscopes</li>
                            <li><i class="fa-solid fa-circle-check"></i> Expert DM Faculty</li>
                            <li><i class="fa-solid fa-circle-check"></i> 24/7 ICU &amp; Emergency</li>
                        </ul>
                    </div>

                    <!-- Doctor Card -->
                    <div class="gem-sidebar-card gem-doctor-card">
                        <div class="gem-doctor-header">
                            <div class="gem-doctor-avatar">
                                <img src="assets/images/team/palanivelu.png" alt="Dr. R Vinoth Kumar">
                            </div>
                            <div class="gem-doctor-info">
                                <h5>Dr. R Vinoth Kumar</h5>
                                <span>Head of Department</span>
                            </div>
                        </div>
                        <p class="gem-doctor-bio">Lead expert in therapeutic endoscopy, ERCP, and pioneering scarless
                            procedures like POEM.</p>
                        <a href="doctor.php" class="gem-sidebar-btn gem-sidebar-btn-outline">
                            <i class="fa-solid fa-user-doctor"></i> View Profile
                        </a>
                    </div>

                    <!-- Quick Stats -->
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
                                <strong>24/7</strong>
                                <span>Emergency Care</span>
                            </div>
                            <div class="gem-stat-item">
                                <strong>12+</strong>
                                <span>Endoscope Units</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="assets/js/main.js"></script>
</body>

</html>