<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "Precise3DM Digital Manufacturing Solutions for Auto Components & Tier Suppliers";
$meta_description =
    "Empowering auto component manufacturers and tier suppliers with 3D scanning, reverse engineering, 3D printing and inspection solutions to improve quality, reduce rejection and meet OEM standards.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Site-Wide CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers.css">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section -->
    <section class="auto-ind-hero-section">
        <div class="container-fluid auto-ind-container">
            <div class="row pt-4 pb-5">
                <!-- Left Side Content -->
                <div class="col-lg-7 order-lg-1 order-2">
                    <h1 class="hero-main-title text-white">Digital Manufacturing Solutions for <span class="text-orange">Auto Components &amp; Tier Suppliers</span></h1>
                    <h3 class="hero-subtitle">Boost Quality. Improve Productivity. Win More Business.</h3>

                    <div class="hero-desc text-white">
                        <p>Precise3DM empowers auto component manufacturers and tier suppliers with advanced 3D scanning, reverse engineering, 3D printing and inspection technologies to improve quality, reduce rejection, accelerate tooling, and meet stringent OEM quality standards.</p>
                        <p>From product development to production and inspection—we help you deliver better parts, faster, every time.</p>
                    </div>

                    <div class="hero-buttons d-flex flex-wrap">
                        <a href="contact-us.php" class="btn-talk">Talk to an Expert</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-demo">Book a live demo</a>
                    </div>

                    <div class="bottom-contact d-flex align-items-center mt-5">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info ms-3 text-start">
                            <div class="contact-title text-white">Email Us</div>
                            <div class="contact-numbers">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> <span class="divider">|</span> <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Contact & Imagery -->
                <div class="col-lg-5 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="top-contact d-flex align-items-center justify-content-lg-end justify-content-center">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-info ms-3 text-start">
                            <div class="contact-title">Call us now</div>
                            <div class="contact-numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> <span class="divider">|</span> <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-image-1.png" alt="Auto Components 3D Scanning and CAD" class="img-fluid auto-hero-img-main">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-image-2.png" alt="Auto Components Inspection and Scan Data" class="img-fluid auto-hero-img-strip">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Stat Section -->
    <section class="auto-stat-section py-5">
        <div class="container-fluid auto-ind-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center auto-stat-row">

                <!-- Stat 1 -->
                <div class="auto-stat-item d-flex align-items-center">
                    <div class="auto-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-stat-1.svg" alt="10+ Years">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">10+</div>
                        <div class="auto-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="auto-stat-item d-flex align-items-center">
                    <div class="auto-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">250+</div>
                        <div class="auto-stat-subtitle">Scanners sold</div>
                        <div class="auto-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="auto-stat-item d-flex align-items-center">
                    <div class="auto-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">60+</div>
                        <div class="auto-stat-subtitle">Scan-based applications</div>
                        <div class="auto-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="auto-stat-item d-flex align-items-center">
                    <div class="auto-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">8+</div>
                        <div class="auto-stat-subtitle">Direct locations</div>
                        <div class="auto-stat-desc">across India</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="auto-stat-item d-flex align-items-center">
                    <div class="auto-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/hero-stat-5.svg" alt="15+ Countries">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">15+</div>
                        <div class="auto-stat-subtitle">Countries served</div>
                        <div class="auto-stat-desc">Global 3D services</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End-To-End Section -->
    <section class="aero-end-section">
        <div class="container-fluid" style="padding: 0 4%;">

            <!-- Top Content -->
            <div class="row align-items-center">
                <!-- Left Title Area -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="aero-end-title">End-To-End Digital Manufacturing Solutions for Auto Components &amp; Tier Suppliers</h2>
                    <h3 class="aero-end-subtitle">From Real Parts to Real Possibilities</h3>
                    <p class="aero-end-desc">Scan automotive components | Create CAD | 3D Print | Manufacture | Inspect | Go to Production</p>
                </div>

                <!-- Right Image Overlay -->
                <div class="col-lg-6">
                    <div class="end-corner-box">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-to-end-corner-image.png" alt="Auto Components & Tier Suppliers" class="end-corner-img">
                        <div class="end-overlay">
                            <div class="end-overlay-title">REAL DATA.<br>REAL PARTS.<br>REAL PERFORMANCE.</div>
                            <div class="end-overlay-bar"></div>
                            <div class="end-overlay-bottom">SCAN.<br>DESIGN.<br>PRINT.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5 Cards Row -->
            <div class="end-cards-row">

                <!-- Card 1 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">1</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">3D SCAN</h4>
                            <p class="end-card-subtitle">Any Size. Any Complexity.</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Capture accurate 3D data of small to large automotive components – from plastic trim to engine blocks and body panels.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-to-end-1.png" alt="3D Scan" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-1-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">High Accuracy</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-1-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Fast Capture</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-1-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Large to Small</div>
                        </div>
                    </div>
                <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 2 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">2</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">CREATE CAD</h4>
                            <p class="end-card-subtitle">From Scan to Ready CAD</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Convert scan data into precise, parametric CAD models for manufacturing, simulation (CAE/CFD) or design modification.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-to-end-2.png" alt="Create CAD" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-2-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">Reverse Engineering</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-2-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Parametric CAD</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-2-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">CAE / CFD</div>
                        </div>
                    </div>
                <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 3 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">3</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">3D PRINT</h4>
                            <p class="end-card-subtitle">Prototypes to End-Use Parts</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Use the CAD model to 3D print functional prototypes, end-use parts or manufacturing tools with FDM, PEEK or Metal printing.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-to-end-3.png" alt="3D Print" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-2-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">FDM Plastics</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-3-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">PEEK Hi-Temp</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-3-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Metal Additive</div>
                        </div>
                    </div>
                <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 4 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">4</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">MANUFACTURE</h4>
                            <p class="end-card-subtitle">Prototype to Production</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Use the validated CAD for production through CNC, casting, injection molding or other manufacturing processes.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-to-end-4.png" alt="Manufacture" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-4-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">CNC Machining</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-4-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Casting &amp; Molding</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-4-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Tooling Dev</div>
                        </div>
                    </div>
                <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 5 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">5</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">3D INSPECT</h4>
                            <p class="end-card-subtitle">Quality You Can Trust</p>
                        </div>
                    </div>
                    <p class="end-card-desc">3D inspect the manufactured parts by comparing with original CAD model or using 2D drawings as reference.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-to-end-5.png" alt="3D Inspect" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-5-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">CAD Compare</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/end-card-5-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Full Reports</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Adopt Digital Manufacturing Pace Section -->
    <section class="auto-pace-section py-4" style="background-color: #F6F6FA;">
        <div class="container-fluid" style="padding: 0 2%;">
            <div class="pace-box bg-white p-4 p-md-5" style="border-radius: 16px;">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="pace-main-title">Adopt Digital Manufacturing at Your <span style="color: #FF931E;">Own Pace</span></h2>
                        <p class="pace-main-desc mt-3">Digital manufacturing does not mean you need to adopt the complete workflow. Each technology can work independently within your existing manufacturing process.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-4">
                        <div class="pace-card">
                            <div class="d-flex align-items-start mb-3" style="gap: 10px;">
                                <div class="pace-number">1</div>
                                <h3 class="pace-card-title ms-4">SCAN <i class="fa-solid fa-arrow-right" style="font-size: 1rem; margin: 0 4px;"></i> CAD <i class="fa-solid fa-arrow-right" style="font-size: 1rem; margin: 0 4px;"></i> EXISTING MANUFACTURING</h3>
                            </div>
                            <p class="pace-card-desc">Use 3D scanning and reverse engineering to create manufacturing-ready CAD, then continue with your existing manufacturing process.</p>

                            <div class="d-flex align-items-stretch justify-content-between mt-4 pace-inner-row">
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-1-1.png" alt="3D Scanners"></div>
                                    <div class="pace-inner-title">3D Scanners</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-1-2.png" alt="Reverse Engineering software"></div>
                                    <div class="pace-inner-title">Reverse<br>Engineering<br>software</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-normal">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-1-3.png" alt="Your Existing Process"></div>
                                    <div class="pace-inner-title text-center w-100">Your Existing<br>Process</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-4">
                        <div class="pace-card">
                            <div class="d-flex align-items-start mb-3" style="gap: 10px;">
                                <div class="pace-number">2</div>
                                <h3 class="pace-card-title ms-4">EXISTING MANUFACTURING <i class="fa-solid fa-arrow-right" style="font-size: 1rem; margin: 0 4px;"></i> SCAN <i class="fa-solid fa-arrow-right" style="font-size: 1rem; margin: 0 4px;"></i> INSPECT</h3>
                            </div>
                            <p class="pace-card-desc">Continue conventional manufacturing while integrating 3D scanning and inspection into your quality-control process.</p>

                            <div class="d-flex align-items-stretch justify-content-between mt-4 pace-inner-row">
                                <div class="pace-inner-card pace-normal">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-1-3.png" alt="Your Existing Process"></div>
                                    <div class="pace-inner-title text-center w-100">Your Existing<br>Process</div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-2-2.png" alt="Metrology-Grade 3D Scanners"></div>
                                    <div class="pace-inner-title">Metrology-Grade<br>3D Scanners</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-2-3.png" alt="3D Inspection Software"></div>
                                    <div class="pace-inner-title">3D Inspection<br>Software</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-4">
                        <div class="pace-card">
                            <div class="d-flex align-items-start mb-3" style="gap: 10px;">
                                <div class="pace-number">3</div>
                                <h3 class="pace-card-title ms-4">CAD <i class="fa-solid fa-arrow-right" style="font-size: 1rem; margin: 0 4px;"></i> 3D PRINT <i class="fa-solid fa-arrow-right" style="font-size: 1rem; margin: 0 4px;"></i> USE</h3>
                            </div>
                            <p class="pace-card-desc">Use industrial 3D printing independently for prototypes, tooling, jigs, fixtures or production parts.</p>

                            <div class="d-flex align-items-stretch justify-content-between mt-4 pace-inner-row">
                                <div class="pace-inner-card pace-normal pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-3-1.png" alt="CAD"></div>
                                    <div class="pace-inner-title text-center w-100">CAD</div>
                                </div>
                                <div class="pace-arrow pace-arrow-sm align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-3-2.png" alt="PEEK 3D Printers"></div>
                                    <div class="pace-inner-title">PEEK 3D<br>Printers</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow pace-arrow-sm align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-3-3.png" alt="Industrial FDM 3D Printers"></div>
                                    <div class="pace-inner-title">Industrial<br>FDM 3D<br>Printers</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow pace-arrow-sm align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-normal pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/pace-3-4.png" alt="Ready-To-Use Part"></div>
                                    <div class="pace-inner-title text-center w-100">Ready-To-Use<br>Part</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Banner -->
                <div class="pace-banner mt-5 d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="d-flex align-items-center mb-3 mb-md-0" style="gap: 15px;">
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/use-icon.png" alt="Target Icon" class="pace-banner-icon">
                        <div class="pace-banner-text ms-4 ms-md-5">Use The Complete Ecosystem Or Simply Integrate The Technology That Solves Today's Problem.</div>
                    </div>
                    <div class="pace-banner-chevron">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CAPEX Section -->
    <section id="capex" class="auto-capex-section py-4" style="background-color: #F6F6FA;">
        <div class="container-fluid" style="padding: 0 2%;">
            <div class="capex-box bg-white p-4 p-md-5" style="border-radius: 16px;">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                            <div class="capex-tag">CAPEX Engineering Services</div>
                            <div class="capex-tag-line ms-3"></div>
                        </div>
                        <h2 class="capex-main-title">Build Your In-House Digital Manufacturing Capability <span style="color: #FF931E;">(CAPEX)</span></h2>
                        <p class="capex-main-desc mt-3">Invest in advanced digital manufacturing technologies and establish an in-house engineering and quality-control department.</p>
                    </div>
                </div>

                <!-- Process Steps -->
                <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mb-5 capex-process-row gap-4 gap-lg-0">
                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item">
                        <div class="capex-step-number">1</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Capture</div>
                            <div class="capex-step-desc">Accurate 3D Data</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item">
                        <div class="capex-step-number">2</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Engineer</div>
                            <div class="capex-step-desc">Create &amp; Optimize</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item">
                        <div class="capex-step-number">3</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Validate</div>
                            <div class="capex-step-desc">Inspect &amp; Ensure</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item">
                        <div class="capex-step-number">4</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Manufacture</div>
                            <div class="capex-step-desc">Produce &amp; Deliver</div>
                        </div>
                    </div>
                </div>

                <!-- Cards Row -->
                <div class="row g-4 d-flex align-items-stretch">
                    <!-- Card 1 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Scanners<br><span style="color: #000;">for Auto Components</span></h3>

                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-1-1.png" alt="3D Scanners for Auto Components" class="img-fluid my-3 capex-main-img">

                            <div class="capex-inner-list flex-grow-1">
                                <div class="capex-inner-item capex-scanner-item">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-inner-img capex-scanner-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-1-2.png" alt="Handheld Laser 3D Scanners"></div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Handheld Laser<br>3D Scanners For PT</div>
                                            </div>
                                        </div>
                                        <div class="capex-scanner-links">
                                            <a href="freescan-omni.php" class="text-decoration-none">FreeScan Omni <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                            <a href="FreeScan-Combo.php" class="text-decoration-none">FreeScan Combo <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="capex-inner-item capex-scanner-item">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-inner-img capex-scanner-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-1-3.png" alt="Optical 3D Scanners"></div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Optical 3D<br>Scanners for PT</div>
                                            </div>
                                        </div>
                                        <div class="capex-scanner-links">
                                            <a href="optimscan-q12.php" class="text-decoration-none">OptimScan Q12 <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                            <a href="3d-scanners-in-india.php" class="text-decoration-none">AutoInspect 2 <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="capex-inner-item capex-scanner-item mb-0">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-inner-img capex-scanner-icon"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-1-4.png" alt="Tracker-Based 3D Scanners"></div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Tracker-Based 3D Scanners for larger auto components</div>
                                            </div>
                                        </div>
                                        <a href="3d-scanners-in-india.php" class="capex-scanner-link text-decoration-none text-end">FreeScan<br>Trak Nova <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <a href="3d-scanners-in-india.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE AUTOMOTIVE 3D SCANNERS</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Reverse<br>Engineering Software<br><span style="color: #000;">for Auto Components</span></h3>

                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-2-1.png" alt="Reverse Engineering" class="img-fluid my-2 capex-main-img">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="reverse-engineering-geomagic-design-x.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-2-2.png" alt="Geomagic Design X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Design X</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>

                                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-2-3.png" alt="Reverse Engineered Bracket" class="img-fluid my-2 capex-main-img">

                                <a href="geomagic-for-solidworks-reverse-engineering-software.php" class="capex-inner-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-2-4.png" alt="Geomagic for SOLIDWORKS"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic for SOLIDWORKS</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                            </div>

                            <a href="reverse-engineering-software-in-india.php" class="capex-btn capex-btn-outline mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE REVERSE ENGINEERING SOFTWARE</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Inspection<br>Software<br><span style="color: #000;">for Auto Components</span></h3>

                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-3-1.png" alt="Inspection Software" class="img-fluid my-2 capex-main-img capex-main-img-lg">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="geomagic-control-x-3d-inspection-software.php" class="capex-inner-item text-decoration-none mb-3">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-3-2.png" alt="Geomagic Control X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Control X</div>
                                            <div class="capex-inner-desc text-dark mt-1">3D Inspection Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>

                                <div class="capex-app-title">Features</div>
                                <div class="d-flex flex-wrap gap-2 mt-2" style="gap: 12px;">
                                    <span class="capex-badge">CAD vs Scan Comparison</span>
                                    <span class="capex-badge">GD&amp;T</span>
                                    <span class="capex-badge">FAI</span>
                                    <span class="capex-badge">Deviation Analysis</span>
                                    <span class="capex-badge">Production QC</span>
                                    <span class="capex-badge">Supplier Quality</span>
                                    <span class="capex-badge">Colour Deviation Reports</span>
                                </div>
                            </div>

                            <a href="3d-inspection-software-in-india.php" class="capex-btn capex-btn-outline mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE 3D INSPECTION SOFTWARE</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">Industrial 3D Printing<br>Solutions<br><span style="color: #000;">for Auto Components</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-4">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>

                            <div class="capex-inner-list flex-grow-1">
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-4-1.png" alt="PEEK 3D Printer"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">PEEK 3D Printer<br>for EV</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">FUNMAT PRO<br>310 APOLLO</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/capex-4-2.png" alt="Large-Format Industrial FDM Printers"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">Large-Format<br>Industrial FDM<br>Printers</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">For jigs, fixtures, prototypes, body panels, ducts &amp; molds.</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                            </div>

                            <a href="industrial-fdm-3d-printers.php" class="capex-btn capex-btn-outline mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE INDUSTRIAL 3D PRINTERS</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OPEX Section -->
    <section id="opex" class="auto-opex-section py-4" style="background-color: #F6F6FA;">
        <div class="container-fluid" style="padding: 0 2%">
            <div class="opex-box bg-white position-relative" style="border-radius: 16px; padding: 30px 40px;">

                <!-- Header -->
                <div class="row mb-5">
                    <div class="col-lg-9">
                        <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                            <div class="capex-tag">OPEX Engineering Services</div>
                            <div class="opex-tag-line ms-3"></div>
                        </div>
                        <h2 class="opex-main-title">3D Scan-based Engineering and 3D Printing Services<br>for Auto Components <span style="color: #FF931E;">(OPEX)</span></h2>
                        <p class="opex-main-desc mt-3">Not ready to invest? Experience the technology through our engineering services.<br>Precise3DM can complete your project, demonstrate the workflow and help you evaluate ROI based on your actual applications before making a CAPEX decision.</p>
                    </div>
                </div>

                <!-- Subtitle with lines -->
                <div class="d-flex align-items-center justify-content-center mb-5">
                    <div class="opex-sub-line flex-grow-1"></div>
                    <div class="opex-sub-title mx-4">From RFQ to Results</div>
                    <div class="opex-sub-line flex-grow-1"></div>
                </div>

                <!-- 6 Workflow Cards -->
                <div class="d-flex flex-column flex-xl-row justify-content-between align-items-stretch opex-workflow-row gap-4 mb-5">
                    <!-- Workflow 1 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">1</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/result-1.png" alt="Share Your RFQ" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Share Your RFQ</div>
                        <div class="opex-workflow-desc mt-2">Send your component, application and expected deliverables.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 2 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">2</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/result-2.png" alt="Receive a Proposal" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive a Proposal</div>
                        <div class="opex-workflow-desc mt-2">We review the requirement and provide a clear quotation.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 3 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">3</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/result-3.png" alt="Select the Right Workflow" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Select the Right<br>Workflow</div>
                        <div class="opex-workflow-desc mt-2">We choose the right 3D scanner, software and methodology.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 4 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">4</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/result-4.png" alt="On-Site or In-House Execution" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">On-Site or In-House<br>Execution</div>
                        <div class="opex-workflow-desc mt-2">Scanning is completed at your facility or at a Precise3DM centre.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 5 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">5</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/result-5.png" alt="Receive Your Deliverables" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive Your<br>Deliverables</div>
                        <div class="opex-workflow-desc mt-2">Get a manufacturing-ready CAD model or inspection report.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 6 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">6</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/result-6.png" alt="Pay as OPEX" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Pay as OPEX</div>
                        <div class="opex-workflow-desc mt-2">Pay against invoice based on agreed terms. Monthly service options are available.</div>
                    </div>
                </div>

                <!-- Top 3 Cards -->
                <div class="row g-4 mt-2">
                    <!-- Card 1 -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">3D Scanning Services<br>for Auto Components</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-1.png" alt="3D Scanning Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> On-site &amp; In-house Scanning</li>
                                <li><i class="fa-solid fa-circle-check"></i> Small to Large Components</li>
                                <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
                                <li><i class="fa-solid fa-circle-check"></i> Inspection &amp; Archiving</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">Reverse Engineering Services<br>for Auto Components</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-2.png" alt="Reverse Engineering Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Scan-to-CAD</li>
                                <li><i class="fa-solid fa-circle-check"></i> Manufacturing-ready CAD</li>
                                <li><i class="fa-solid fa-circle-check"></i> STEP / IGES / Parasolid</li>
                                <li><i class="fa-solid fa-circle-check"></i> 2D Manufacturing Drawings</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-xl-4 col-lg-12">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">3D Inspection Services<br>for Auto Components</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-3.png" alt="3D Inspection Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Dimensional Inspection</li>
                                <li><i class="fa-solid fa-circle-check"></i> CAD Comparison</li>
                                <li><i class="fa-solid fa-circle-check"></i> FAI / GD&amp;T / Deviation Maps</li>
                                <li><i class="fa-solid fa-circle-check"></i> Supplier &amp; Production QC</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bottom 2 Cards -->
                <div class="row g-4 mt-4">
                    <!-- Card 4 (8 columns) -->
                    <div class="col-xl-8 col-lg-12">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center mb-4">3D Printing Services for Auto Components</h3>
                            <div class="row flex-grow-1 g-4 align-items-center">
                                <div class="col-md-4 text-center">
                                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-4-1.png" alt="PEEK 3D Printing" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-center">PEEK 3D Printing</div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-4-2.png" alt="Figure 4 DLP" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-center">Figure 4: DLP 3D<br>Printing Service</div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-4-3.png" alt="Large-Format FDM" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-center">Large-Format FDM 3D Printing</div>
                                </div>
                            </div>
                            <a href="3d-printing-service-request.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 5 (4 columns) -->
                    <div class="col-xl-4 col-lg-12">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center mb-4">Auto Components<br>Benchmarking Services</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/opex-5.png" alt="Auto Components Benchmarking" class="img-fluid mb-4 mx-auto d-block opex-bench-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Complete Vehicle Digitization</li>
                                <li><i class="fa-solid fa-circle-check"></i> Component-Level Benchmarking</li>
                                <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
                                <li><i class="fa-solid fa-circle-check"></i> CAD Development</li>
                                <li><i class="fa-solid fa-circle-check"></i> Comparative Analysis</li>
                                <li><i class="fa-solid fa-circle-check"></i> Manufacturing Insights</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Engagement Models Section -->
    <section class="auto-engagement-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="row g-4 align-items-stretch">
                <!-- Card 1 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="eng-card h-100 d-flex flex-column" style="background: #060711;">
                        <h3 class="eng-title-white">Buy or Outsource? Choose What Works Best for Your Business</h3>
                        <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/buy-image.png" alt="Buy or Outsource" class="img-fluid mt-auto mx-auto pt-4">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="eng-card h-100 d-flex flex-column" style="background: #fff;">
                        <h3 class="eng-title-orange">Build In-House CAPEX</h3>
                        <div class="eng-subtitle mt-3 mb-4">Best for</div>
                        <ul class="eng-list list-check-orange flex-grow-1">
                            <li><i class="fa-solid fa-circle-check"></i> Frequent Scanning &amp; Reverse Engineering</li>
                            <li><i class="fa-solid fa-circle-check"></i> Daily QC &amp; Inspection</li>
                            <li><i class="fa-solid fa-circle-check"></i> Internal NPD &amp; Tool Rooms</li>
                            <li><i class="fa-solid fa-circle-check"></i> Production Inspection</li>
                            <li><i class="fa-solid fa-circle-check"></i> Long-Term Capability Building</li>
                        </ul>
                        <a href="#capex" class="capex-btn capex-btn-primary w-100 text-decoration-none text-white d-flex justify-content-center align-items-center mt-4 text-center">
                            <span>EXPLORE CAPEX SOLUTIONS</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="eng-card h-100 d-flex flex-column" style="background: #fff;">
                        <h3 class="eng-title-black">Use Our Engineering Team OPEX</h3>
                        <div class="eng-subtitle mt-3 mb-4">Best for</div>
                        <ul class="eng-list list-check-black flex-grow-1">
                            <li><i class="fa-solid fa-circle-check"></i> One-Time Projects &amp; Immediate Needs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Technology Evaluation</li>
                            <li><i class="fa-solid fa-circle-check"></i> Specialized Inspections</li>
                            <li><i class="fa-solid fa-circle-check"></i> Benchmarking Projects</li>
                            <li><i class="fa-solid fa-circle-check"></i> Occasional Reverse Engineering</li>
                        </ul>
                        <a href="#opex" class="capex-btn capex-btn-black w-100 text-decoration-none text-white d-flex justify-content-center align-items-center mt-4 text-center">
                            <span>EXPLORE ENGINEERING SERVICES</span>
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="eng-card h-100 d-flex flex-column justify-content-between align-items-center text-center" style="background: #fff;">
                        <div class="flex-grow-1 d-flex flex-column align-items-center justify-content-center w-100 p-2">
                            <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/talk-to-expert-image.png" alt="Talk to Expert" class="img-fluid mb-4" style="max-height: 200px;">
                            <h3 class="eng-title-black-center">Not sure which is right for your application?</h3>
                        </div>
                        <a href="contact-us.php" class="capex-btn capex-btn-primary w-100 text-decoration-none text-white d-flex justify-content-center align-items-center mt-4 text-center">
                            <span>TALK TO AN APPLICATION ENGINEER</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Precise3DM Section -->
    <section class="auto-why-section py-4">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="why-bg-container position-relative" style="border-radius: 20px; overflow: hidden; box-shadow: 0px 4px 9.6px 0px #0000001A;">
                <div class="row g-0">
                    <!-- Left Side — background image shows through, no foreground content -->
                    <div class="col-lg-6"></div>

                    <!-- Right Content Side -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-xl-5 w-100">
                            <h2 class="why-title mb-5">Why Auto Component &amp; Tier Suppliers<br>Choose <span style="color: #FF931E;">Precise3DM?</span></h2>

                            <ul class="why-list">
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Complete Digital Manufacturing Solutions Provider</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Hardware, Software &amp; Engineering Services Under One Roof</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial 3D Scanners for Every Automotive Application</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Reverse Engineering &amp; Scan-to-CAD Expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial 3D Engineering Scan-to-CAD Expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial &amp; Engineering Workflow Expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Advanced 3D Inspection &amp; Quality Control Workflows</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Experienced Application Engineering Team</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Pan-India Sales, Service, Training &amp; Technical Support</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line d-none"></div>
                                    </div>
                                    <div class="why-text">Solutions for OEMs, Tier Suppliers, Tool Rooms &amp; R&amp;D Centres</div>
                                </li>
                            </ul>

                            <div class="mt-4 text-start">
                                <a href="About_us.php" class="capex-btn capex-btn-primary text-decoration-none text-white d-inline-flex justify-content-center align-items-center" style="padding: 15px 40px;">
                                    <span>Know More About Precise 3DM</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo at the bottom left, over the background image -->
                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/precise3dm-logo.png" alt="Precise3DM Logo" class="position-absolute why-logo">
            </div>
        </div>
    </section>

    <!-- Technology Partners Section -->
    <section class="auto-partners-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="partners-title text-center mb-5">Our Technology Partners</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/partner-1.png" alt="Shining 3D" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/partner-2.png" alt="Hexagon" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/partner-3.png" alt="ExactFlat" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/partner-4.png" alt="TrueProp Software" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/partner-5.png" alt="GD EPIC" class="img-fluid partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="auto-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="contact-inner-container p-4 p-xl-5 position-relative" style="background-image: url('assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/contact-bg.png'); background-size: cover; background-position: center; border-radius: 16px;">

                <div class="text-center mb-4">
                    <h2 class="contact-main-title">Ready to Digitally Transform <span style="color: #FF931E;">Auto Components &amp; Tier Suppliers Manufacturing?</span></h2>
                    <p class="contact-main-desc mt-3 mx-auto" style="max-width: 1100px;">Whether you're planning to invest in advanced digital manufacturing technologies or need immediate engineering support, Precise3DM can help you select the right solution for your application.</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-4 mb-5" style="gap: 20px;">
                    <a href="#capex" class="btn contact-top-btn px-5 py-3">3D Products</a>
                    <a href="#opex" class="btn contact-top-btn px-5 py-3">3D Services</a>
                </div>

                <div class="contact-divider mb-5 mx-auto"></div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/contact-1.png" alt="Get Quote for Services" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SERVICES</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Tell us about your project and get a customized service quote.</p>
                            <a href="scanning-solution-form.php" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SERVICES <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/contact-2.png" alt="Get Quote for Scanners" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Looking to buy a 3D scanner? Get the best price and expert guidance.</p>
                            <a href="scanning-solution-form.php" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">MEET US LIVE <br><span style="color: #FF931E;">ONLINE NOW</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Connect with our experts instantly for live guidance and support.</p>
                            <a href="contact-us.php" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">MEET US LIVE ONLINE NOW <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/digital-manufacturing-solutions-for-auto-components-and-tier-suppliers/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">BOOK DEMO <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Schedule a live demo and experience the power of Precise3DM scanners.</p>
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">BOOK DEMO FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include "includes/footer.php"; ?>
    <!-- footer End -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</body>
</html>
