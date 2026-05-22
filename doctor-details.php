<?php
include 'doctors-data.php';

// Get doctor ID from URL
$doctor_id = isset($_GET['id']) ? $_GET['id'] : 'dr-c-palanivelu';

// Find doctor in data
$doctor = isset($doctors[$doctor_id]) ? $doctors[$doctor_id] : null;

// Fallback if doctor not found in the array (just for demonstration, in production you'd show a 404)
if (!$doctor) {
    // Basic fallback for doctors not yet in the full array
    $doctor = [
        'name' => 'Expert Doctor',
        'qualifications' => 'Medical Specialist',
        'designation' => 'Consultant',
        'image' => 'assets/images/team/default.png',
        'experience' => '10+',
        'surgeries' => '1,000+',
        'awards' => '5+',
        'bio' => 'Our expert doctors at GEM Hospital Chennai are dedicated to providing the highest quality of care in gastroenterology and laparoscopic surgery.',
        'specializations' => ['Gastroenterology', 'Laparoscopic Surgery'],
        'education' => ['Medical Degree', 'Specialization'],
    ];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo/fav.png">
    <title><?php echo $doctor['name']; ?> | GEM Hospital Chennai</title>
    <meta name="description" content="Profile of <?php echo $doctor['name']; ?> at GEM Hospital Chennai. Qualifications: <?php echo $doctor['qualifications']; ?>">

    <link rel="stylesheet" href="/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .icon img { filter: invert(22%) sepia(100%) saturate(455%) hue-rotate(110deg) brightness(35%) contrast(95%); }
        .icon-area img { filter: invert(22%) sepia(100%) saturate(455%) hue-rotate(110deg) brightness(35%) contrast(95%); }
        .doctor-details-wrapper { padding: 80px 0; }
        .doctor-image-card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            position: sticky;
            top: 120px;
        }
        .doctor-image-card img { border-radius: 10px; width: 100%; margin-bottom: 20px; }
        .doctor-info-content .name { color: #1a4f32; font-weight: 700; margin-bottom: 10px; }
        .doctor-info-content .designation { color: #2c8555; font-weight: 600; margin-bottom: 20px; font-size: 18px; }
        .doctor-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0; }
        .stat-item { background: #f9fbf9; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid #eef2ee; }
        .stat-item h4 { color: #1a4f32; margin-bottom: 5px; }
        .stat-item p { font-size: 14px; margin-bottom: 0; color: #666; }
        .info-section { margin-bottom: 40px; }
        .info-section h4 { color: #1a4f32; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #e8f3ec; display: inline-block; }
        .specialization-list { list-style: none; padding: 0; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; }
        .specialization-list li { position: relative; padding-left: 25px; color: #444; }
        .specialization-list li::before { content: "\f00c"; font-family: "Font Awesome 6 Pro"; font-weight: 900; position: absolute; left: 0; color: #2c8555; }
        .quick-contact { margin-top: 20px; }
        .quick-contact .rts-btn { padding: 12px 20px; font-size: 16px; display: flex; align-items: center; justify-content: center; }
        @media (max-width: 768px) { .specialization-list { grid-template-columns: 1fr; } .doctor-stats { grid-template-columns: 1fr; } }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title"><?php echo $doctor['name']; ?></h1>
                    <div class="nav-bread-crumb">
                        <a href="index.php">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="doctor.php">Our Doctors</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="doctor-details-wrapper">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="doctor-image-card wow fadeInUp">
                        <img src="/<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">
                        <!-- <div class="quick-contact">
                            <a href="tel:04461666666" class="rts-btn btn-primary w-100 mb--15">
                                <i class="fa-solid fa-phone me-2"></i> Call for Appointment
                            </a>
                            <a href="https://wa.me/919500055483" class="rts-btn btn-secondary w-100" target="_blank">
                                <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Us
                            </a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="doctor-info-content">
                        <h4 class="name"><?php echo $doctor['name']; ?></h4>
                        <h5 class="designation"><?php echo $doctor['qualifications']; ?> - <?php echo $doctor['designation']; ?></h5>
                        
                        <div class="doctor-stats wow fadeInUp" data-wow-delay=".2s">
                            <div class="stat-item">
                                <h4><?php echo $doctor['experience']; ?></h4>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h4><?php echo $doctor['surgeries']; ?></h4>
                                <p>Surgeries Performed</p>
                            </div>
                            <div class="stat-item">
                                <h4><?php echo $doctor['awards']; ?></h4>
                                <p>Awards Received</p>
                            </div>
                        </div>

                        <div class="info-section wow fadeInUp" data-wow-delay=".3s">
                            <h4>Biography</h4>
                            <p><?php echo $doctor['bio']; ?></p>
                        </div>

                        <div class="info-section wow fadeInUp" data-wow-delay=".4s">
                            <h4>Areas of Specialization</h4>
                            <ul class="specialization-list">
                                <?php foreach($doctor['specializations'] as $spec): ?>
                                    <li><?php echo $spec; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="info-section wow fadeInUp" data-wow-delay=".5s">
                            <h4>Education & Training</h4>
                            <ul class="specialization-list">
                                <?php foreach($doctor['education'] as $edu): ?>
                                    <li><?php echo $edu; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="/assets/js/plugins/jquery.js"></script>
    <script src="/assets/js/plugins/jquery-ui.js"></script>
    <script src="/assets/js/vendor/waw.js"></script>
    <script src="/assets/js/plugins/swiper.js"></script>
    <script src="/assets/js/plugins/metismenu.js"></script>
    <script src="/assets/js/plugins/jarallax.js"></script>
    <script src="/assets/js/plugins/smooth-scroll.js"></script>
    <script src="/assets/js/plugins/magnifying-popup.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>new WOW().init();</script>
</body>

</html>
