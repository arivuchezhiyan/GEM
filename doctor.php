<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.png">
    <title>Our Doctors | GEM Hospital Chennai - Expert Medical Team</title>
    <meta name="description"
        content="Meet our world-renowned specialists at GEM Hospital Chennai. Experts in gastroenterology, robotic surgery, and multi-disciplinary care dedicated to patient well-being.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemhospital.net/chennai/doctor.php">
    <meta property="og:title" content="Expert Doctors & Specialists | GEM Hospital Chennai">
    <meta property="og:description"
        content="Discover Asia's leading medical experts in Gastrology and Laparoscopy. Compassionate care with world-class expertise.">
    <meta property="og:image" content="https://gemhospital.net/chennai/assets/images/team/01.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemhospital.net/chennai/doctor.php">
    <meta property="twitter:title" content="Expert Doctors & Specialists | GEM Hospital Chennai">
    <meta property="twitter:description"
        content="Discover Asia's leading medical experts in Gastrology and Laparoscopy. Compassionate care with world-class expertise.">
    <meta property="twitter:image" content="https://gemhospital.net/chennai/assets/images/team/01.jpg">
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

        /* Specialty Tabs Styling */
        .specialty-tabs {
            background: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        }

        .specialty-tab-btn {
            display: block;
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 8px;
            background: #e8f3ec;
            /* Very light green */
            color: #1a4f32;
            border: none;
            border-radius: 6px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            font-size: 13px;
            letter-spacing: 0.5px;
            border-left: 4px solid transparent;
        }

        .specialty-tab-btn:hover {
            background: #d1e7d9;
            padding-left: 20px;
        }

        .specialty-tab-btn.active {
            background: #1a4f32;
            color: #fff;
            border-left: 4px solid #2c8555;
            box-shadow: 0 4px 12px rgba(26, 79, 50, 0.2);
        }

        .doctor-card {
            transition: all 0.4s ease;
        }

        .doctor-card.hidden {
            display: none;
            opacity: 0;
            transform: scale(0.9);
        }

        @media (max-width: 991px) {
            .specialty-tabs-wrapper {
                margin-bottom: 30px;
                position: static !important;
                width: 100%;
                overflow: hidden;
            }

            .specialty-tabs {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 5px;
                padding: 5px;
                white-space: normal;
                width: 100%;
                box-sizing: border-box;
            }

            .specialty-tab-btn {
                width: 100%;
                margin-bottom: 0;
                padding: 8px 2px;
                font-size: 9px;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 45px;
                line-height: 1.1;
                letter-spacing: -0.2px;
                word-break: break-word;
                hyphens: auto;
            }

            .specialty-tab-btn:hover {
                padding-left: 2px;
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
                    <h1 class="title">Our Doctor</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Our Doctor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->


    <div class="rts-doctors-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">Our Doctors</span>
                        <h2 class="title text-center">Discover Expert <br> Doctors </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-3">
                    <div class="specialty-tabs-wrapper sticky-top" style="top: 100px; z-index: 10;">
                        <div class="specialty-tabs">
                            <button class="specialty-tab-btn active" data-filter="all">ALL SPECIALITIES</button>
                            <button class="specialty-tab-btn" data-filter="chairman">CHAIRMAN</button>
                            <button class="specialty-tab-btn" data-filter="chief-surgeon">CHIEF SURGEON</button>
                            <button class="specialty-tab-btn" data-filter="surgical-gastro">SURGICAL
                                GASTROENTEROLOGY</button>
                            <button class="specialty-tab-btn" data-filter="medical-gastro">MEDICAL
                                GASTROENTEROLOGY</button>
                            <button class="specialty-tab-btn" data-filter="general-surgery">GENERAL SURGERY &
                                BARIATRIC</button>
                            <button class="specialty-tab-btn" data-filter="obstetrics">OBSTETRICS AND
                                GYNECOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="endogynaecology">ENDOGYNAECOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="urology">UROLOGY</button>
                            <button class="specialty-tab-btn" data-filter="nephrology">NEPHROLOGY</button>
                            <button class="specialty-tab-btn" data-filter="cardiology">CARDIOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="oncology">MEDICAL ONCOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="radiology">INTERVENTIONAL RADIOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="general-medicine">GENERAL MEDICINE</button>
                            <button class="specialty-tab-btn" data-filter="pathology">PATHOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="microbiology">MICROBIOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="emergency">EMERGENCY MEDICINE</button>
                            <button class="specialty-tab-btn" data-filter="anaesthesiology">ANAESTHESIOLOGY</button>
                            <button class="specialty-tab-btn" data-filter="icu">ICU</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row g-5 meet-doctor-area-sd" id="doctor-grid">
                        <?php 
                        include 'doctors-data.php';
                        foreach($doctors as $id => $doc): 
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 doctor-card" data-specialty="<?php echo $doc['specialty']; ?>">
                            <div class="single-team-area-start">
                                <a href="doctor/<?php echo $id; ?>" class="thumbnail">
                                    <img src="<?php echo $doc['image']; ?>" alt="team">
                                </a>
                                <div class="bottom">
                                    <a href="doctor/<?php echo $id; ?>">
                                        <h6 class="title"><?php echo $doc['name']; ?></h6>
                                    </a>
                                    <p><?php echo $doc['qualifications']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- <div class="row mt--60" id="load-more-container">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="text-center">
                                <a href="#" class="rts-btn btn-primary">Load More</a>
                            </div>
                        </div>
                    </div> -->
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
    <!-- main js here -->
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function () {
            $('.specialty-tab-btn').on('click', function () {
                // Update active button
                $('.specialty-tab-btn').removeClass('active');
                $(this).addClass('active');

                const filterValue = $(this).attr('data-filter');
                const $doctorCards = $('.doctor-card');
                const $loadMore = $('#load-more-container');

                if (filterValue === 'all') {
                    $doctorCards.removeClass('hidden').fadeIn(400);
                    $loadMore.show();
                } else {
                    $doctorCards.addClass('hidden').hide();
                    
                    const $filtered = $doctorCards.filter(function() {
                        const specialtyAttr = $(this).attr('data-specialty');
                        if (!specialtyAttr) return false;
                        const specialties = specialtyAttr.split(',').map(s => s.trim());
                        return specialties.includes(filterValue);
                    });

                    if ($filtered.length > 0) {
                        $filtered.removeClass('hidden').fadeIn(400);
                        $loadMore.hide(); // Hide load more when filtering
                    } else {
                        // Optional: Show "No doctors found" message
                        console.log('No doctors found for this specialty');
                        $loadMore.hide();
                    }
                }

                // Smooth scroll to results on mobile
                if (window.innerWidth < 992) {
                    $('html, body').animate({
                        scrollTop: $("#doctor-grid").offset().top - 150
                    }, 500);
                }
            });
        });
    </script>
</body>

</html>