<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    <title>Infrastructure - Gem Hospitals | Chennai</title>
    <meta name="description"
        content="GEM Hospitals boasts exceptional infrastructure for in-patient accommodation, robotics surgery, advanced ICU facilities, and 24/7 emergency response.">
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

        .infra-section-title {
            position: relative;
            padding-left: 20px;
            margin-bottom: 30px;
            color: #1a4f32;
            font-weight: 700;
        }

        .infra-section-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 30px;
            background: #1a4f32;
            border-radius: 5px;
        }

        .infra-grid-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
            border: 1px solid #f0f0f0;
            height: 100%;
            transition: all 0.3s ease;
        }

        .infra-grid-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(26, 79, 50, 0.08);
            border-color: #1a4f32;
        }

        .infra-grid-card .icon-box {
            width: 60px;
            height: 60px;
            background: #e8f3ec;
            color: #1a4f32;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 28px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .infra-grid-card:hover .icon-box {
            background: #1a4f32;
            color: #fff;
        }

        .infra-grid-card .title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #333;
        }

        .infra-grid-card .disc {
            font-size: 14px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 0;
        }

        .room-type-box {
            background: #f9fbf9;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e8f3ec;
            margin-bottom: 30px;
        }

        .room-type-box .room-img {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }

        .room-type-box .room-content {
            padding: 40px;
        }

        .room-type-box .room-content .tag {
            display: inline-block;
            background: #1a4f32;
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .room-type-box .room-content .title {
            font-size: 32px;
            font-weight: 800;
            color: #1a4f32;
            margin-bottom: 20px;
        }

        .bg-gradient-light {
            background: linear-gradient(180deg, #fff 0%, #f4f8f5 100%);
        }
    </style>
</head>

<body>
    <?php include 'include.php'; ?>
    <?php include 'header.php'; ?>

    <!-- Breadcrumb Area Start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper text-center">
                    <h1 class="title">Our Infrastructure</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Infrastructure</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Facilities Overview Start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-left-wrapper move-right wow">
                        <img src="assets/images/about/01.jpg" alt="infrastructure" class="rounded-3 shadow">
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_md--15 pl_sm--15 mt_md--40 mt_sm--40">
                    <div class="about-content-wrapper-right">
                        <div class="title-wrapper-left">
                            <span class="pre">Facilities, Amenities & Services</span>
                            <h2 class="title">Exceptional Standards of <br> Hygiene & Spaciousness</h2>
                        </div>
                        <p class="disc">
                            GEM Hospitals boasts exceptional infrastructure for in-patient accommodation, adhering to superior standards of hygiene and spaciousness. Our facilities include tastefully decorated A/C Deluxe rooms, single private rooms, shared rooms, cubicles, general wards, and VIP Suites.
                        </p>
                        <p class="disc">
                            With en-suite bathrooms, telephones, and televisions, our private rooms provide utmost comfort. All rooms are well-ventilated, equipped with modern amenities like closets, cable TV, and hot & cold water. Patient room assignments are based on individual preferences, insurance coverage, and the physician’s recommended level of care.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Overview End -->

    <!-- Specialized Units Grid Start -->
    <div class="rts-service-area bg-gradient-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">Medical Excellence</span>
                        <h2 class="title">Specialized Medical Infrastructure</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <!-- Robotics Surgery -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-robot"></i></div>
                        <h4 class="title">Robotics Surgery</h4>
                        <p class="disc">Equipped with state-of-the-art systems like the Da Vinci surgical robot, offering advanced treatment options with unparalleled precision and accuracy for minimally invasive procedures.</p>
                    </div>
                </div>
                <!-- ICU -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-bed-pulse"></i></div>
                        <h4 class="title">High-Quality ICU</h4>
                        <p class="disc">Advanced equipment including ventilators, monitors, and cardiac care systems. Our ICU rooms are designed for maximum comfort, providing a stress-free environment for recovery.</p>
                    </div>
                </div>
                <!-- Endoscopic Suite -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-microscope"></i></div>
                        <h4 class="title">Endoscopic Suite</h4>
                        <p class="disc">World-class suite with 12+ endoscopes, including Spyglass Cholangioscopy and laser lithotripter, performing complex therapeutic procedures like POEM and ERCP.</p>
                    </div>
                </div>
                <!-- Newborn ICU -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-baby-carriage"></i></div>
                        <h4 class="title">Newborn ICU (NICU)</h4>
                        <p class="disc">Dedicated specialized care for newborns with high-quality monitoring systems, advanced life support, and round-the-clock supervision by expert neonatologists.</p>
                    </div>
                </div>
                <!-- Dialysis -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-kidney"></i></div>
                        <h4 class="title">Dialysis Unit</h4>
                        <p class="disc">Hygienic and spacious dialysis center with super-specialty standards. Equipped with modern dialysis machines ensuring comfort and safety for renal patients.</p>
                    </div>
                </div>
                <!-- Laboratory -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-flask-vial"></i></div>
                        <h4 class="title">World-class Laboratory</h4>
                        <p class="disc">Cutting-edge diagnostic laboratory capable of performing a wide range of pathological, biochemical, and microbiological tests with high precision and quick turnaround.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialized Units Grid End -->

    <!-- Emergency & Support Services Start -->
    <div class="rts-emergency-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">24/7 Support</span>
                        <h2 class="title">Emergency Response & Support</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-truck-medical"></i></div>
                        <h4 class="title">Emergency Response</h4>
                        <p class="disc">Our dedicated emergency department operates 24/7, staffed with highly trained professionals and advanced life support systems for immediate and efficient care.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-ambulance"></i></div>
                        <h4 class="title">Ambulance Services</h4>
                        <p class="disc">Fleet of modern ambulances equipped with cardiac monitors, ventilators, and defibrillators, staffed by skilled paramedics and emergency technicians.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="title">24x7 Pharmacy</h4>
                        <p class="disc">Boasting a round-the-clock pharmacy ensuring immediate access to essential medications for all in-patients and emergency cases at any time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency & Support Services End -->

    <!-- Room Types Section Start -->
    <div class="rts-room-types rts-section-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">Accommodation</span>
                        <h2 class="title">Types of Rooms</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <!-- Suite Room -->
                    <div class="room-type-box wow fadeInUp" data-wow-delay=".2s">
                        <div class="row align-items-center g-0">
                            <div class="col-md-6">
                                <img src="assets/images/infrastructure/suite.png" alt="Suite Room" class="room-img">
                            </div>
                            <div class="col-md-6">
                                <div class="room-content">
                                    <span class="tag">Premium Experience</span>
                                    <h3 class="title">Suite Room</h3>
                                    <p class="disc">Our suite rooms provide luxurious and comfortable accommodations with additional amenities, ensuring a premium experience. Designed to provide a relaxing and conducive environment for recovery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Room -->
                    <div class="room-type-box wow fadeInUp" data-wow-delay=".4s">
                        <div class="row align-items-center g-0">
                            <div class="col-md-6 order-md-2">
                                <img src="assets/images/infrastructure/standard.png" alt="Standard Room" class="room-img">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="room-content">
                                    <span class="tag">Optimal Care</span>
                                    <h3 class="title">Standard Room</h3>
                                    <p class="disc">Standard rooms offer comfortable and well-equipped spaces for patients. Equipped with modern medical beds, bedside monitors, and all essential patient care amenities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Types Section End -->

    <!-- Lifestyle & Wellness Start -->
    <div class="rts-wellness-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-utensils"></i></div>
                        <h4 class="title">Restaurant and Cafeteria</h4>
                        <p class="disc">We provide a diverse menu of nutritious and delicious meals in a welcoming environment. A perfect place for patients and visitors to relax, socialize, and enjoy culinary variety.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="infra-grid-card">
                        <div class="icon-box"><i class="fa-solid fa-dumbbell"></i></div>
                        <h4 class="title">Wellness Gym</h4>
                        <p class="disc">Fully equipped gym within our premises, providing patients and visitors with the opportunity to prioritize their fitness and well-being with state-of-the-art facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lifestyle & Wellness End -->

    <?php include 'footer.php'; ?>

    <!-- Script imports -->
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
