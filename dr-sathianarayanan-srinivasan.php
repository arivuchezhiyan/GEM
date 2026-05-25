<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    
    <!-- SEO Meta Tags -->
    <title>Dr. Sathianarayanan Srinivasan - Consultant & Transplant Anesthesiologist | GEM Hospital Chennai</title>
    <meta name="description" content="Book an appointment with Dr. Sathianarayanan Srinivasan, MD, DNB. Consultant & Transplant Anesthesiologist at GEM Hospital Chennai. Expert in Liver and Renal transplant anesthesia.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/dr-sathianarayanan-srinivasan.php">
    <meta property="og:title" content="Dr. Sathianarayanan Srinivasan - GEM Hospital Chennai">
    <meta property="og:description" content="Book an appointment with Dr. Sathianarayanan Srinivasan, MD, DNB. Consultant & Transplant Anesthesiologist at GEM Hospital Chennai. Expert in Liver and Renal transplant anesthesia.">
    <meta property="og:image" content="assets/images/team/sathianarayanan.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/dr-sathianarayanan-srinivasan.php">
    <meta property="twitter:title" content="Dr. Sathianarayanan Srinivasan - GEM Hospital Chennai">
    <meta property="twitter:description" content="Book an appointment with Dr. Sathianarayanan Srinivasan, MD, DNB. Consultant & Transplant Anesthesiologist at GEM Hospital Chennai. Expert in Liver and Renal transplant anesthesia.">
    <meta property="twitter:image" content="assets/images/team/sathianarayanan.png">

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
                    <h1 class="title">Dr. Sathianarayanan Srinivasan</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="doctor.php">Doctors</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Dr. Sathianarayanan Srinivasan</a>
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
                            <img src="assets/images/team/sathianarayanan.png" alt="Dr. Sathianarayanan Srinivasan" class="doctor-avatar">
                            <div class="doctor-info">
                                <h2>DR. SATHIANARAYANAN SRINIVASAN</h2>
                                <h5>M.D., DNB., Fellowship in Liver Transplant Anaesthesia & Critical care<br>Consultant Anesthesiologist & Transplant Intensivist</h5>
                                <p><strong>Speciality</strong> – Organ Transplant Anesthesia, Thoracic & Robotic Anesthesia</p>
                                <p><strong>Experience</strong> – 12+ Years in Anesthesiology, Transplantation & Intensive Care</p>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-lungs"></i>
                            <div>
                                <strong>Specialized Transplant Anesthesia & Critical Care</strong>
                                <p>Dr. Sathianarayanan Srinivasan is a distinguished Consultant and Transplant Anesthesiologist at GEM Hospital Chennai. Trained at AIIMS New Delhi and MAX Hospital, he has extensive experience in the perioperative care of patients undergoing organ transplants, major thoracic surgeries, and robotic procedures.</p>
                            </div>
                        </div>
                        
                        <div class="ugi-info-card">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-stethoscope"></i></span>
                                <h5>Core Strengths & Special Interests</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>Organ Transplant Anesthesia:</strong> Focused on the perioperative management of complex liver and renal transplant surgeries and post-operative critical care.</li>
                                <li><strong>Thoracic & Robotic Anesthesia:</strong> Skilled in advanced thoracic procedures (including one-lung ventilation, open/VATS) and multi-disciplinary robotic surgery anesthesia.</li>
                                <li><strong>Pediatric & Daycare Anesthesia:</strong> Specialized experience in pediatric and neonatal surgeries, as well as bariatric and daycare surgical interventions.</li>
                                <li><strong>Ultrasound-Guided Regional Techniques:</strong> Expertly skilled in ultrasound-guided regional nerve blocks for precise, localized anesthesia and optimal pain management.</li>
                                <li><strong>Intensive Care Proficiency:</strong> Extensive experience managing critically ill patients in the ICU and overseeing post-operative recovery for major complex surgeries.</li>
                            </ul>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-star"></i></span>
                                        <h5>Key Competencies</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li>Liver & Renal Transplant Anesthesia</li>
                                        <li>Thoracic (One-Lung Ventilation / VATS) Anesthesia</li>
                                        <li>Advanced Robotic & Laparoscopic Anesthesia</li>
                                        <li>Pediatric & Neonatal Anesthetic Protocols</li>
                                        <li>Ultrasound-Guided Regional Nerve Blocks</li>
                                        <li>ICU Management of Critically Ill Patients</li>
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
                                        <li><strong>MBBS:</strong> Madurai Medical College, Madurai</li>
                                        <li><strong>MD (Anaesthesiology & Critical Care):</strong> AIIMS, New Delhi</li>
                                        <li><strong>Senior Residency:</strong> AIIMS, New Delhi</li>
                                        <li><strong>Fellowship (Liver Transplant):</strong> MAX Hospital, New Delhi</li>
                                        <li><strong>Accolades:</strong> Mediquiz IGNITE 2015 Winner at AIIMS, New Delhi</li>
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
                                <li><strong>Transversus Abdominis Plane Block Study:</strong> "Comparison of transversus abdominis plane block and intrathecal morphine for laparoscopic donor nephrectomy: Randomised controlled trial" (<em>Indian Journal of Anaesthesia</em>, 2020).</li>
                                <li><strong>World Anesthesia Convention 2015:</strong> Presented poster on "Lung Isolation in a patient with Difficult Airway" at Vancouver, Canada.</li>
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
                        <p>Schedule a consultation with Dr. Sathianarayanan Srinivasan at GEM Hospital Chennai.</p>
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
                            <li><i class="fa-solid fa-user-md"></i> Transplant Anesthesiologist</li>
                            <li><i class="fa-solid fa-clock"></i> 12+ Years Experience</li>
                            <li><i class="fa-solid fa-hospital-user"></i> Organ Transplant Expert</li>
                            <li><i class="fa-solid fa-graduation-cap"></i> AIIMS Alumnus</li>
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
