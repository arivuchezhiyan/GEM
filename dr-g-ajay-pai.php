<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    
    <!-- SEO Meta Tags -->
    <title>Dr. G. Ajay Pai - Consultant Surgical Gastroenterologist | GEM Hospital Chennai</title>
    <meta name="description" content="Book an appointment with Dr. G. Ajay Pai MS, MRCS, MCh (SGE), FMAS, FACRSI, FALS, Consultant Surgical Gastroenterologist at GEM Hospital. Specialized in colorectal, hernia, and robotic surgeries.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/dr-g-ajay-pai.php">
    <meta property="og:title" content="Dr. G. Ajay Pai - GEM Hospital Chennai">
    <meta property="og:description" content="Book an appointment with Dr. G. Ajay Pai MS, MRCS, MCh (SGE), FMAS, FACRSI, FALS, Consultant Surgical Gastroenterologist at GEM Hospital. Specialized in colorectal, hernia, and robotic surgeries.">
    <meta property="og:image" content="assets/images/team/ajay-pal.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/dr-g-ajay-pai.php">
    <meta property="twitter:title" content="Dr. G. Ajay Pai - GEM Hospital Chennai">
    <meta property="twitter:description" content="Book an appointment with Dr. G. Ajay Pai MS, MRCS, MCh (SGE), FMAS, FACRSI, FALS, Consultant Surgical Gastroenterologist at GEM Hospital. Specialized in colorectal, hernia, and robotic surgeries.">
    <meta property="twitter:image" content="assets/images/team/ajay-pal.png">

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
                    <h1 class="title">Dr. G. Ajay Pai</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="doctor.php">Doctors</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Dr. G. Ajay Pai</a>
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
                            <img src="assets/images/team/ajay-pal.png" alt="Dr. G. Ajay Pai" class="doctor-avatar">
                            <div class="doctor-info">
                                <h2>DR. G. AJAY PAI</h2>
                                <h5>MS, MRCS, MCh (SGE), FMAS, FACRSI, FALS (Colorectal Surgery)<br>Consultant Surgical Gastroenterologist, Laparoscopic & Robotic Surgeon</h5>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-user-md"></i>
                            <div>
                                <strong>About Doctor</strong>
                                <p>Dr. G. Ajay Pai is an exceptionally qualified Consultant Surgical Gastroenterologist, Endoscopist, and Laparoscopic Surgeon. Renowned for his surgical mastery in advanced colorectal, hernia, and abdominal wall reconstructions (AWR), he has completed post-graduation at Grant Medical College, Mumbai, and MCh from the highly prestigious King George's Medical University (KGMU), Lucknow. He brings over a decade of rich clinical and surgical expertise to GEM Hospital.</p>
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
                                        <li><strong>MS (General Surgery):</strong> Completed at the top-tier Grant Medical College and Sir J.J. Group of Hospitals, Mumbai.</li>
                                        <li><strong>MCh (Surgical Gastroenterology):</strong> Completed 3 years of rigorous super-specialty surgical training and Liver Transplantation at the world-renowned <strong>King George’s Medical University (KGMU)</strong>, Lucknow.</li>
                                        <li><strong>Fellowships & Certifications:</strong> 
                                            <ul style="list-style: circle; padding-left: 20px; margin-top: 5px;">
                                                <li>MRCS (Royal College of Surgeons)</li>
                                                <li>FMAS (Fellow of Minimal Access Surgeons)</li>
                                                <li>FACRSI (Fellow of Colon and Rectal Surgeons of India)</li>
                                                <li>FALS (Fellow of Advanced Laparoscopic Surgery - Colorectal Surgery)</li>
                                            </ul>
                                        </li>
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
                                        <li><strong>Colorectal Cancer:</strong> Laparoscopic and Robotic surgery for colon and rectal cancers.</li>
                                        <li><strong>Benign Colorectal Diseases:</strong> Specialized care for IBD (Inflammatory Bowel Disease), rectal prolapse, and rectovaginal fistulas.</li>
                                        <li><strong>Hernia & AWR:</strong> Robotic and laparoscopic reconstructions for complex abdominal wall and groin hernias.</li>
                                        <li><strong>Biliary & Gallbladder:</strong> Advanced laparoscopic management of biliary tree and gallbladder issues.</li>
                                        <li><strong>Laser Proctology:</strong> Painless laser surgery for ano-rectal conditions including piles, fissures, and fistulas.</li>
                                        <li><strong>Diagnostic & Therapeutic Endoscopy:</strong> Highly skilled in advanced upper GI endoscopy and colonoscopy procedures.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ugi-info-card mt-4">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-book-open"></i></span>
                                <h5>Selected Publications & Video Articles</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>Diseases of the Colon and Rectum:</strong> <em>Natural Orifice Transanal Endoscopic Rectopexy: A novel option for Procidentia</em> (Original video article).</li>
                                <li><strong>Colorectal Disease Journal:</strong> <em>Laparoscopic Subtotal Colectomy with CME, CVL</em> (Original video article).</li>
                                <li><strong>Colorectal Disease Journal:</strong> <em>Robotic Low anterior resection with Laparoscopic Liver wedge metastasectomy</em> (Original video article).</li>
                                <li><strong>Hernia Journal (2024):</strong> <em>Laparoscopic modified e-tep repair of concomitant inguinal and ventral hernias</em> (Original publication).</li>
                                <li><strong>Colorectal Disease Journal:</strong> <em>Extraction of migrated colonic stent</em> (Original video article).</li>
                                <li><strong>Colorectal Disease Journal:</strong> <em>Perineal hernia repair – Double mesh repair technique</em> (Original video article).</li>
                                <li><strong>Hepatobiliary & Pancreatic Diseases International:</strong> <em>Gallbladder perforation: a single-center experience in north India and a step-up approach for management</em> (Original article).</li>
                                <li><strong>Turkish Journal of Surgery:</strong> <em>Gastrointestinal visceral artery pseudoaneurysms: Therapeutic experience from a tertiary care center</em> (Original article).</li>
                                <li><strong>Indian Journal of Surgery:</strong> <em>Validation of the Fistula Risk Score for post operative pancreatic fistula after pancreatoduodenectomy</em> (Original article).</li>
                                <li><strong>Journal of the American College of Surgeons:</strong> <em>Per Anal Endoscopic Ventral Suture Rectopexy</em> (Original Abstract).</li>
                                <li><strong>Journal of the American College of Surgeons:</strong> <em>Differential Expression of Antimicrobial Peptides in Activated Human Omentum</em> (Original Abstract).</li>
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
                        <p>Schedule a consultation with Dr. G. Ajay Pai at GEM Hospital Chennai.</p>
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
                            <li><i class="fa-solid fa-user-md"></i> Laparoscopic & Robotic Surgeon</li>
                            <li><i class="fa-solid fa-clock"></i> 10+ Years Experience</li>
                            <li><i class="fa-solid fa-hospital-user"></i> KGMU Lucknow Trained</li>
                            <li><i class="fa-solid fa-globe"></i> International Publications</li>
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
