<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    
    <!-- SEO Meta Tags -->
    <title>Dr. Pawan Kumar - Anaesthesiologist & Critical Care Specialist | GEM Hospital Chennai</title>
    <meta name="description" content="Book an appointment with Dr. Pawan Kumar MBBS, MD, Anaesthesiologist at GEM Hospital Chennai. Expert in neuroanaesthesiology, critical care, and emergency airway management.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/dr-pawan-kumar.php">
    <meta property="og:title" content="Dr. Pawan Kumar - GEM Hospital Chennai">
    <meta property="og:description" content="Book an appointment with Dr. Pawan Kumar MBBS, MD, Anaesthesiologist at GEM Hospital Chennai. Expert in neuroanaesthesiology, critical care, and emergency airway management.">
    <meta property="og:image" content="assets/images/team/pawankumar.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/dr-pawan-kumar.php">
    <meta property="twitter:title" content="Dr. Pawan Kumar - GEM Hospital Chennai">
    <meta property="twitter:description" content="Book an appointment with Dr. Pawan Kumar MBBS, MD, Anaesthesiologist at GEM Hospital Chennai. Expert in neuroanaesthesiology, critical care, and emergency airway management.">
    <meta property="twitter:image" content="assets/images/team/pawankumar.png">

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
                    <h1 class="title">Dr. Pawan Kumar</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="doctor.php">Doctors</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Dr. Pawan Kumar</a>
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
                            <img src="assets/images/team/pawankumar.png" alt="Dr. Pawan Kumar" class="doctor-avatar">
                            <div class="doctor-info">
                                <h2>DR. PAWAN KUMAR</h2>
                                <h5>MBBS, MD (Anaesthesiology)<br>Consultant Anaesthesiologist</h5>
                                <p><strong>Specialist</strong> – Anaesthesiology & Critical Care Medicine</p>
                                <p><strong>Department</strong> – Anaesthesiology & Critical Care Medicine</p>
                            </div>
                        </div>

                        <div class="ugi-highlight-banner">
                            <i class="fa-solid fa-star"></i>
                            <div>
                                <strong>Expert in Neuroanaesthesia & Critical Care</strong>
                                <p>Dr. Pawan Kumar has extensive training and experience in neurosurgical cases, neurocritical care, and neuroradiological procedures. He is committed to delivering precision anesthesia care and managing complex emergencies in the ICU and operating rooms.</p>
                            </div>
                        </div>
                        
                        <div class="ugi-info-card">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-user-md"></i></span>
                                <h5>About Dr. Pawan Kumar</h5>
                            </div>
                            <p>Dr. Pawan Kumar completed his residency in M.D. Anaesthesiology and Critical Care Medicine at the prestigious Amrita Institute of Medical Sciences, Kochi, India. He has trained and worked with highly experienced faculty at the Institute of Brain and Spinal Disorders (MGM Healthcare) and the Institute of Brain and Spine (Kauvery Hospital).</p>
                            <p>He has acquired extensive experience across a wide spectrum of clinical domains, including:</p>
                            <ul class="list-items">
                                <li><strong>Neurosurgical Cases:</strong> Brain tumours, cerebral aneurysms, spinal tumours and lesions, hydrocephalus, and emergency head injuries.</li>
                                <li><strong>Neurological Conditions:</strong> Stroke, seizure disorders, brain and spinal infections, neuropathies, and myopathy disorders.</li>
                                <li><strong>Neuroradiological Procedures:</strong> Diagnostic procedures such as digital subtraction angiography (DSA) of the brain, and therapeutic interventions including aneurysm coiling/clipping and stent placements.</li>
                            </ul>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                                        <h5>Qualifications & Memberships</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li><strong>M.D. Anaesthesiology</strong> – Amrita Institute of Medical Sciences</li>
                                        <li><strong>M.B.B.S.</strong> – Bachelor of Medicine and Bachelor of Surgery</li>
                                        <li>Member, Indian Society of Anaesthesiology (ISA)</li>
                                        <li>Member, Indian Society of Neuroanaesthesiology and Critical Care (ISNACC)</li>
                                        <li>Member, Neurocritical Care Society of India (NCSI)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ugi-info-card">
                                    <div class="ugi-info-card-head">
                                        <span class="ugi-card-icon"><i class="fa-solid fa-kit-medical"></i></span>
                                        <h5>Core Strengths & Skills</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li>General & Regional Anesthesia (GI, Urology, Robotic, Pediatric, Neuro, Ortho, Vascular, and Day Care Surgeries)</li>
                                        <li>Experience in Liver and Renal Transplant Anesthesia</li>
                                        <li>Basic Life Support (BLS) & Advanced Cardiac Life Support (ACLS)</li>
                                        <li>Emergency Airway Management & Critical Care Medicine</li>
                                        <li>Invasive Line Placement (central venous, pulmonary artery, and arterial lines) using USG guidance and anatomic landmarks</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ugi-info-card mt-4">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-trophy"></i></span>
                                <h5>Achievements & Certifications</h5>
                            </div>
                            <ul class="list-items">
                                <li><strong>Basic Course in Biomedical Research:</strong> Online certification as mandated by the National Medical Commission of India.</li>
                                <li><strong>AIIMS Neuroanaesthesia Update:</strong> Participation in the 3rd Annual Conference of NCSI & 8th AIIMS Neuroanaesthesia Update, New Delhi (2022).</li>
                                <li><strong>Neurocritical Care Updates:</strong> Delegate at the 4th Annual Conference of NCSI & ANCU 2023 at Artemis Hospitals, Gurugram.</li>
                                <li><strong>Brain Death Workshop & CME:</strong> Delegate at St. John’s Medical College, Bangalore.</li>
                                <li><strong>Stroke Update:</strong> Delegate at the 1st Annual Stroke Update, Kauvery Hospital, Chennai.</li>
                                <li><strong>Postgraduate Training:</strong> Participated in the Amrita Anaesthesia PG Session 2019 and the 23rd Ramachandra Anaesthesia Continuing Education.</li>
                                <li><strong>Amrita BLS / ACLS Course:</strong> Certified in Basic and Advanced Life Support at Amrita Institute of Medical Sciences.</li>
                            </ul>
                        </div>

                        <div class="ugi-info-card mt-4">
                            <div class="ugi-info-card-head">
                                <span class="ugi-card-icon"><i class="fa-solid fa-book"></i></span>
                                <h5>Publications & Presentations</h5>
                            </div>
                            <h6 class="mt-3 mb-2" style="color: #1a4f32; font-weight: 700;">Key Publications</h6>
                            <ul class="list-items">
                                <li><strong>Case Report:</strong> Anesthetic management of total thyroidectomy and partial sternotomy for retrosternal goiter. (<em>Amrita J Med 2020</em>).</li>
                                <li><strong>Case Report:</strong> Successful resuscitation of a child from cardiac arrest secondary to massive hemorrhage and possible venous air embolism during fronto-orbital advancement surgery. (<em>Indian J Clin Anaesth 2021</em>).</li>
                                <li><strong>Original Article:</strong> Comparison of Perioperative Anesthetic Concerns in Simple and Complex Craniosynostosis Cases. (<em>J Neuroanaesthesiol Crit Care 2021</em>).</li>
                                <li>Comparative study of dexmedetomidine and propofol infusions as anaesthetic adjuvants in TNTS resection surgeries.</li>
                                <li>Case studies on the successful management of mycotic brain aneurysm, stunned myocardium in posterior circulation stroke, and Steven Johnson Syndrome/Toxic Epidermal Necrolysis.</li>
                            </ul>
                            <h6 class="mt-4 mb-2" style="color: #1a4f32; font-weight: 700;">Conference Presentations</h6>
                            <ul class="list-items">
                                <li><strong>ISNACC 2021:</strong> Paper on simple vs complex craniosynostosis cases.</li>
                                <li><strong>ISAMIDKON 2021:</strong> Scientific poster presentation on retained fracture segment of central venous catheter.</li>
                                <li><strong>NCSI Update 2022:</strong> Case report presentation on Stunned Myocardium in Posterior Circulation Stroke.</li>
                                <li><strong>NCSI Update 2023:</strong> Case report presentation on Successful Management of SJS/TEN.</li>
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
                        <p>Schedule a consultation with Dr. Pawan Kumar at GEM Hospital Chennai.</p>
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
                            <li><i class="fa-solid fa-user-md"></i> Consultant Anaesthesiologist</li>
                            <li><i class="fa-solid fa-clock"></i> 6+ Years Experience</li>
                            <li><i class="fa-solid fa-hospital-user"></i> Neuro & Critical Care Specialist</li>
                            <li><i class="fa-solid fa-book-open"></i> Published Researcher & Presenter</li>
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
