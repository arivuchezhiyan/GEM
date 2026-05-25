<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    
    <!-- SEO Meta Tags -->
    <title>Dr. Vishnupriya S - Anaesthesiologist | GEM Hospital Chennai</title>
    <meta name="description" content="Book an appointment with Dr. Vishnupriya S, MBBS, MD. Anaesthesiologist at GEM Hospital Chennai. Specialist in difficult airway management, regional blocks, and daycare anesthesia.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/dr-vishnupriya-s.php">
    <meta property="og:title" content="Dr. Vishnupriya S - GEM Hospital Chennai">
    <meta property="og:description" content="Book an appointment with Dr. Vishnupriya S, MBBS, MD. Anaesthesiologist at GEM Hospital Chennai. Specialist in difficult airway management, regional blocks, and daycare anesthesia.">
    <meta property="og:image" content="assets/images/team/vishnupriya.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/dr-vishnupriya-s.php">
    <meta property="twitter:title" content="Dr. Vishnupriya S - GEM Hospital Chennai">
    <meta property="twitter:description" content="Book an appointment with Dr. Vishnupriya S, MBBS, MD. Anaesthesiologist at GEM Hospital Chennai. Specialist in difficult airway management, regional blocks, and daycare anesthesia.">
    <meta property="twitter:image" content="assets/images/team/vishnupriya.png">

    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        .doctor-profile-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 40px;
        }
        .doctor-avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #1a4f32;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .doctor-info h2 {
            color: #1a4f32;
            margin-bottom: 10px;
            font-size: 32px;
        }
        .doctor-info h5 {
            color: #14a05a;
            margin-bottom: 15px;
            font-size: 18px;
            line-height: 1.5;
        }
        .doctor-info p {
            color: #555;
            margin-bottom: 5px;
        }
        .section-title {
            color: #1a4f32;
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 20px;
            border-bottom: 2px solid #e0f5ea;
            padding-bottom: 10px;
        }
        .content-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
        }
        .list-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .list-items li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 12px;
            color: #444;
            line-height: 1.6;
        }
        .list-items li::before {
            content: '\f058';
            font-family: 'Font Awesome 6 Pro';
            font-weight: 900;
            color: #1a4f32;
            position: absolute;
            left: 0;
            top: 2px;
        }
        .ugi-info-card {
            background: #fff;
            border: 1px solid rgba(26,79,50,0.12);
            border-radius: 16px;
            padding: 26px 24px;
            height: 100%;
            box-shadow: 0 4px 20px rgba(26,79,50,0.06);
            transition: box-shadow 0.3s;
            margin-bottom: 20px;
        }
        .ugi-info-card:hover { box-shadow: 0 8px 32px rgba(26,79,50,0.13); }
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
        .ugi-card-icon i { color: #fff; font-size: 18px; }
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
        .ugi-highlight-banner i { font-size: 28px; color: #e8a000; flex-shrink: 0; margin-top: 2px; }
        .ugi-highlight-banner strong { display: block; color: #1a4f32; font-size: 18px; margin-bottom: 8px; font-weight: 700;}

        /* Sidebar Styles */
        .gem-sidebar-card {
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }
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
        .gem-pulse-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #7fffb5;
            box-shadow: 0 0 0 0 rgba(127,255,181,0.6);
            flex-shrink: 0;
        }
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
        .gem-feature-list li i {
            color: #1a4f32;
            font-size: 15px;
            flex-shrink: 0;
        }
        
        @media (max-width: 768px) {
            .doctor-profile-header {
                flex-direction: column;
                text-align: center;
            }
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
                    <h1 class="title">Dr. Vishnupriya S</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="doctor.php">Doctors</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Dr. Vishnupriya S</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- Doctor Details area start -->
    <div class="doctor-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="content-box">
                        <div class="doctor-profile-header">
                            <img src="assets/images/team/vishnupriya.png" alt="Dr. Vishnupriya S" class="doctor-avatar">
                            <div class="doctor-info">
                                <h2>DR. VISHNUPRIYA S</h2>
                                <h5>MBBS, MD (Anaesthesiology)<br>Anaesthesiologist</h5>
                                <p><strong>Speciality</strong> – Obstetric Emergencies, USG-Guided Nerve Blocks & Airway Management</p>
                                <p><strong>Experience</strong> – Experienced Consultant & Former Associate Consultant</p>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-syringe"></i>
                            <div>
                                <strong>Quality Perioperative Anesthesia & Pain Relief</strong>
                                <p>Dr. Vishnupriya S is an accomplished Anaesthesiologist at GEM Hospital Chennai. Experienced in managing anesthesia for complex surgeries across multiple disciplines (including SGE oncology, pediatric, and vascular surgery), she specializes in difficult airway cases and ultrasound-guided regional techniques.</p>
                            </div>
                        </div>
                        
                        <div class="ugi-info-card">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-stethoscope"></i></span>
                                <h5>Core Strengths & Special Interests</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>Multi-disciplinary Experience:</strong> Hands-on perioperative care for surgical oncology, vascular, pediatric, ENT, orthopedic, urological, and major gastrointestinal surgeries.</li>
                                <li><strong>Obstetric & Critical Care:</strong> Expert in dealing with critical obstetric emergencies and managing patients in both Medical and Surgical ICUs.</li>
                                <li><strong>Advanced Airway & Regional Techniques:</strong> Proficient in difficult airway protocols, submental intubation challenges, and complex daycare surgical anesthesia.</li>
                                <li><strong>USG-Guided Blocks & Vascular Access:</strong> High expertise in utilizing ultrasound guidance for peripheral blocks, localized anesthesia, and central vascular access.</li>
                                <li><strong>Post-operative Pain Management:</strong> Special research interest in bupivacaine adjuvants (clonidine, dexmedetomidine) to achieve optimal post-operative analgesia.</li>
                            </ul>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-star"></i></span>
                                        <h5>Core Competencies</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li>Safe and quality anesthesia for all surgical patients</li>
                                        <li>Anesthesia for daycare and major abdominal surgeries</li>
                                        <li>Critical obstetric emergency perioperative care</li>
                                        <li>Ultrasound-guided regional blocks & vascular access</li>
                                        <li>Advanced airway management & submental intubations</li>
                                        <li>Critical care management in Medical & Surgical ICUs</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                                        <h5>Education & Training</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li><strong>MBBS:</strong> Chettinad Hospital & Research Institute, Chennai</li>
                                        <li><strong>MD (Anaesthesiology):</strong> Rajah Muthiah Medical College, Annamalai University</li>
                                        <li><strong>Postgrad Training:</strong> Surgical Gastroenterology & Oncology (Southern Railway Headquarters Hospital, Perambur)</li>
                                        <li><strong>Senior Resident:</strong> Chettinad Hospital & Research Institute</li>
                                        <li><strong>Former Associate Consultant:</strong> Meenakshi Hospital, Thanjavur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ugi-info-card mt-4">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-book-open"></i></span>
                                <h5>Publications & Research</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>CSE Analgesia Study:</strong> "Comparative study of epidural clonidine vs dexmedetomidine as an adjuvant to bupivacaine for post operative analgesia in infra umbilical surgeries under combined spinal epidural anaesthesia" (<em>MedPulse International Journal of Anesthesiology</em>, March 2019).</li>
                                <li><strong>Bilateral Ilioinguinal Blocks:</strong> "Bilateral ilioinguinal iliohypogastric nerve block with 0.25% bupivacaine vs 0.25% bupivacaine with 50mcg dexmedetomidine for postoperative analgesia in lower abdomen surgery" (<em>MedPulse International Journal of Anesthesiology</em>, December 2020).</li>
                            </ul>
                        </div>

                        <div class="ugi-info-card mt-4">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-award"></i></span>
                                <h5>Accolades & Workshop Participation</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>Airway Congress 2020:</strong> Presented E-Poster on "Challenges of Submental Intubation" at Hotel Holiday Inn, New Delhi.</li>
                                <li><strong>USG Guided Blocks:</strong> Completed CME and workshop on blocks on human volunteers at Rajah Muthiah Medical College (2019).</li>
                                <li><strong>Obstetric Anesthesia:</strong> Attended workshop on critical incidents in obstetric anesthesia (Hyderabad, 2021).</li>
                                <li><strong>Active CME Participation:</strong> Participated in ISACON Tamilnadu (2021), GAARC (2022), and POCUS (2022).</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="gem-sidebar-card gem-appt-card">
                        <div class="gem-appt-glow"></div>
                        <div class="gem-appt-icon-ring">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <h4>Book an Appointment</h4>
                        <p>Schedule a consultation with Dr. Vishnupriya S at GEM Hospital Chennai.</p>
                        <a href="https://gemhospitals.com/contactus" class="gem-sidebar-btn gem-sidebar-btn-white">
                            Book Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="gem-appt-divider"></div>
                        <div class="gem-emergency-row">
                            <div class="gem-pulse-dot"></div>
                            <span>For Emergency</span>
                            <a href="tel:9500200600">9500200600</a>
                        </div>
                    </div>

                    <div class="gem-sidebar-card gem-stats-card">
                        <h4 class="gem-stats-title"><i class="fa-solid fa-award"></i> Quick Info</h4>
                        <ul class="gem-feature-list">
                            <li><i class="fa-solid fa-user-md"></i> Anaesthesiologist</li>
                            <li><i class="fa-solid fa-clock"></i> Critical Care Specialist</li>
                            <li><i class="fa-solid fa-hospital-user"></i> Obstetric & SGE Anesthesia</li>
                            <li><i class="fa-solid fa-syringe"></i> USG Block Specialist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Doctor Details area end -->

    <?php include 'footer.php'; ?>

</body>
</html>
