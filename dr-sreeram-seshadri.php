<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    
    <!-- SEO Meta Tags -->
    <title>Dr. Sreeram Seshadri - Upper GI & Minimal Access Surgeon | GEM Hospital Chennai</title>
    <meta name="description" content="Book an appointment with Dr. Sreeram Seshadri M.S., DrNB (SGE), FMAS, PDF, Consultant Surgical Gastroenterologist in the Division of Upper GI at GEM Hospital Chennai.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/dr-sreeram-seshadri.php">
    <meta property="og:title" content="Dr. Sreeram Seshadri - GEM Hospital Chennai">
    <meta property="og:description" content="Book an appointment with Dr. Sreeram Seshadri M.S., DrNB (SGE), FMAS, PDF, Consultant Surgical Gastroenterologist in the Division of Upper GI at GEM Hospital Chennai.">
    <meta property="og:image" content="assets/images/team/sreeram-seshadri.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/dr-sreeram-seshadri.php">
    <meta property="twitter:title" content="Dr. Sreeram Seshadri - GEM Hospital Chennai">
    <meta property="twitter:description" content="Book an appointment with Dr. Sreeram Seshadri M.S., DrNB (SGE), FMAS, PDF, Consultant Surgical Gastroenterologist in the Division of Upper GI at GEM Hospital Chennai.">
    <meta property="twitter:image" content="assets/images/team/sreeram-seshadri.png">

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
                    <h1 class="title">Dr. Sreeram Seshadri</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="doctor.php">Doctors</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Dr. Sreeram Seshadri</a>
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
                            <img src="assets/images/team/sreeram-seshadri.png" alt="Dr. Sreeram Seshadri" class="doctor-avatar">
                            <div class="doctor-info">
                                <h2>DR. SREERAM SESHADRI</h2>
                                <h5>M.S., DrNB (SGE), FMAS, Post Doctoral Fellowship (PDF) in Minimally Invasive Esophageal Surgery<br>Consultant Surgical Gastroenterologist</h5>
                                <p><strong>Division of Upper GI (Esophageo-gastric) & Minimal Access Surgery</strong></p>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-user-md"></i>
                            <div>
                                <strong>About Doctor</strong>
                                <p>Dr. Sreeram Seshadri is a Consultant Surgical Gastroenterologist in the Division of Upper GI & Minimal Access Surgery at GEM Hospital Chennai, serving since October 2021. An exceptionally trained surgeon, he honed his advanced laparoscopic and robotic gastrointestinal surgery skills under the mentorship of the legendary laparoscopic pioneer, Dr. C. Palanivelu, at GEM Hospital.</p>
                            </div>
                        </div>
                        
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                                        <h5>Education & Training</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li><strong>MBBS:</strong> MNR Medical College, Sangareddy, with internship completed at Gandhi Medical College, Secunderabad.</li>
                                        <li><strong>MS (General Surgery):</strong> Kurnool Medical College, Kurnool.</li>
                                        <li><strong>DrNB (Surgical Gastroenterology):</strong> Completed at GEM Hospital & Research Centre, Coimbatore.</li>
                                        <li><strong>Post Doctoral Fellowship (PDF):</strong> Specialized fellowship in Minimally Invasive Esophageal Surgery.</li>
                                        <li><strong>Fellowship:</strong> FMAS (Fellow of Minimal Access Surgeons).</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-hand-holding-medical"></i></span>
                                        <h5>Core Strengths & Specializations</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li><strong>Esophageal Diseases:</strong> Laparoscopic and Thoracoscopic/Robotic surgery for esophageal cancer and benign esophageal conditions.</li>
                                        <li><strong>Gastric Surgery:</strong> Advanced minimally invasive management of gastric cancers and GISTs.</li>
                                        <li><strong>Corrosive Injuries:</strong> Reconstruction and surgeries for corrosive injuries of the esophagus and stomach.</li>
                                        <li><strong>Redo Surgeries:</strong> Special interest in redo surgeries for failed fundoplications and failed cardiomyotomies.</li>
                                        <li><strong>Hernia & AWR:</strong> Highly skilled in advanced laparoscopic and robotic hernia repair and Abdominal Wall Reconstruction.</li>
                                        <li><strong>Acid Peptic Diseases:</strong> Comprehensive treatment for GERD, reflux, peptic ulcers, and H. pylori gastritis.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ugi-info-card">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-award"></i></span>
                                <h5>Accolades & Achievements</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>Zonal Winner - TYSA:</strong> Awarded the 1st prize in the Zonal level “TYSA Best Young Surgeon of the Year” in 2016.</li>
                                <li><strong>IASGCON Quiz Winner:</strong> Secured the prestigious 3rd prize in the national IASGCON Quiz in 2021.</li>
                                <li><strong>JIPMER HPB Certificate:</strong> Participated and received the specialized "Virtual HPB Certificate" course organized by JIPMER and IHPBA in 2021.</li>
                                <li><strong>Advanced Training:</strong> Mentored directly by legendary laparoscopic surgeon Dr. C. Palanivelu.</li>
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
                        <p>Schedule a consultation with Dr. Sreeram Seshadri at GEM Hospital Chennai.</p>
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
                            <li><i class="fa-solid fa-user-md"></i> Consultant Upper GI Surgeon</li>
                            <li><i class="fa-solid fa-clock"></i> 10+ Years Experience</li>
                            <li><i class="fa-solid fa-hospital-user"></i> Esophageal Surgery Expert</li>
                            <li><i class="fa-solid fa-globe"></i> Direct Mentorship Under Dr. Palanivelu</li>
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
