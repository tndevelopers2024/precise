<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "Precise3DM Digital Manufacturing Solutions for Medical Device Manufacturing";
$meta_description =
    "Empowering medical device manufacturers, implant producers and contract manufacturers with 3D scanning, reverse engineering, 3D printing and inspection solutions built for precision, compliance and patient safety.";
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
    <link rel="stylesheet" href="assets/css/digital-manufacturing-solutions-for-medical-device-manufacturing.css">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section -->
    <section class="med-hero-section">
        <div class="container-fluid med-container">
            <div class="row pt-4 pb-5">
                <!-- Left Side Content -->
                <div class="col-lg-7 order-lg-1 order-2">
                    <h1 class="hero-main-title text-white">Digital Manufacturing Solutions for <span class="text-orange">Medical Device Manufacturing</span></h1>
                    <h3 class="hero-subtitle">Precision. Compliance. Patient Safety.</h3>

                    <div class="hero-desc text-white">
                        <p>Precise3DM empowers medical device manufacturers, implant producers, and contract manufacturers with advanced 3D scanning, reverse engineering, 3D printing, and inspection technologies.</p>
                        <p>From product design and prototyping to manufacturing and regulatory compliance—we deliver a complete digital manufacturing ecosystem for the medical industry.</p>
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
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-image-1.png" alt="Medical Device 3D Scanning and Inspection" class="img-fluid med-hero-img-main">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-image-2.png" alt="Medical Device Scan to 3D Print" class="img-fluid med-hero-img-strip">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Stat Section -->
    <section class="med-stat-section py-5">
        <div class="container-fluid med-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center med-stat-row">

                <!-- Stat 1 -->
                <div class="med-stat-item d-flex align-items-center">
                    <div class="med-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-stat-1.svg" alt="10+ Years">
                    </div>
                    <div class="med-stat-content">
                        <div class="med-stat-title">10+</div>
                        <div class="med-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="med-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="med-stat-item d-flex align-items-center">
                    <div class="med-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="med-stat-content">
                        <div class="med-stat-title">250+</div>
                        <div class="med-stat-subtitle">Scanners sold</div>
                        <div class="med-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="med-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="med-stat-item d-flex align-items-center">
                    <div class="med-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="med-stat-content">
                        <div class="med-stat-title">60+</div>
                        <div class="med-stat-subtitle">Scan-based applications</div>
                        <div class="med-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="med-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="med-stat-item d-flex align-items-center">
                    <div class="med-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="med-stat-content">
                        <div class="med-stat-title">8+</div>
                        <div class="med-stat-subtitle">Direct locations</div>
                        <div class="med-stat-desc">across India</div>
                    </div>
                </div>

                <div class="med-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="med-stat-item d-flex align-items-center">
                    <div class="med-stat-icon me-3">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/hero-stat-5.svg" alt="15+ Countries">
                    </div>
                    <div class="med-stat-content">
                        <div class="med-stat-title">15+</div>
                        <div class="med-stat-subtitle">Countries served</div>
                        <div class="med-stat-desc">Global 3D services</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Challenges Section -->
    <section class="med-challenges-section py-5">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="section-title text-center mb-5">Challenges with Conventional Processes in Medical Device Manufacturing</h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                <!-- Card 1 -->
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <h3 class="challenge-title">Manual Measurement for<br>Reverse Engineering</h3>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/challenge-1.png" class="challenge-img" alt="Manual Measurement for Reverse Engineering">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-circle-check"></i> Time-consuming & labor intensive</li>
                            <li><i class="fa-solid fa-circle-check"></i> Human errors & inconsistent results</li>
                            <li><i class="fa-solid fa-circle-check"></i> Difficulty capturing complex geometries</li>
                            <li><i class="fa-solid fa-circle-check"></i> Incomplete data leading to rework</li>
                            <li><i class="fa-solid fa-circle-check"></i> Longer turnaround time</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <h3 class="challenge-title">Conventional<br>Manufacturing</h3>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/challenge-2.png" class="challenge-img" alt="Conventional Manufacturing">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-circle-check"></i> Long tooling & fixture development</li>
                            <li><i class="fa-solid fa-circle-check"></i> Multiple trial-and-error cycles</li>
                            <li><i class="fa-solid fa-circle-check"></i> Difficulty in achieving tight tolerances</li>
                            <li><i class="fa-solid fa-circle-check"></i> Material waste & higher costs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Slower time-to-market</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <h3 class="challenge-title">Conventional CMM<br>Inspection</h3>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/challenge-3.png" class="challenge-img" alt="Conventional CMM Inspection">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-circle-check"></i> Limited accessibility for complex medical parts</li>
                            <li><i class="fa-solid fa-circle-check"></i> Point-by-point measurement only</li>
                            <li><i class="fa-solid fa-circle-check"></i> Long inspection cycles</li>
                            <li><i class="fa-solid fa-circle-check"></i> Complex GD&T reporting</li>
                            <li><i class="fa-solid fa-circle-check"></i> Higher dependency on skilled operators</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <h3 class="challenge-title">Impact on Medical<br>Device Business</h3>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/challenge-4.png" class="challenge-img" alt="Impact on Medical Device Business">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-circle-check"></i> Delays in regulatory approval</li>
                            <li><i class="fa-solid fa-circle-check"></i> Increased development costs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Risk to patient safety</li>
                            <li><i class="fa-solid fa-circle-check"></i> Documentation & traceability challenges</li>
                            <li><i class="fa-solid fa-circle-check"></i> Reduced competitiveness</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End to End Section -->
    <section class="aero-end-section">
        <div class="container-fluid med-container">

            <!-- Top Content -->
            <div class="row align-items-center">
                <!-- Left Title Area -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="aero-end-title">End-To-End Digital Manufacturing Solutions for Medical Device Manufacturing</h2>
                    <h3 class="aero-end-subtitle">From Scan to Better Lives</h3>
                    <p class="aero-end-desc">Reverse Engineer | 3D Print | Produce | Scale</p>
                </div>

                <!-- Right Image Overlay -->
                <div class="col-lg-6">
                    <div class="end-corner-box">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-to-end-corner-image.png" alt="Medical Device Manufacturing" class="end-corner-img">
                        <div class="end-overlay">
                            <div class="end-overlay-bar"></div>
                            <div class="end-overlay-bottom">SCAN.<br>DESIGN.<br>PRINT.<br>MANUFACTURE.<br>IMPROVE LIVES.</div>
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
                            <p class="end-card-subtitle">People. Devices. Any Size.</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Capture high-accuracy 3D data of human body (full or partial) using handheld or stationary scanners, or scan existing medical devices and components.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-to-end-1.png" alt="3D Scan" class="end-card-img">
                    <div class="end-badge-list end-badge-grid">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">High Accuracy</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Portable & Flexible</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Full Body / Partial Scan</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-4.svg" alt="Icon"></div>
                            <div class="end-badge-text">Device & Component Scan</div>
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
                            <p class="end-card-subtitle">From Scan to Smart Design.</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Convert scan data into precise, parametric CAD models for patient-specific devices, design optimization, reverse engineering or new product development.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-to-end-2.png" alt="Create CAD" class="end-card-img">
                    <div class="end-badge-list end-badge-grid">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">Scan to CAD</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Editable Parametric Model</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Design Optimization</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-4.svg" alt="Icon"></div>
                            <div class="end-badge-text">Ready for Manufacturing</div>
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
                            <p class="end-card-subtitle">High-Performance Materials.</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Manufacture patient-specific and standard medical devices using PEEK, Figure 4, FDM or metal 3D printing technology for prototypes, functional parts and surgical instruments.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-to-end-3.png" alt="3D Print" class="end-card-img">
                    <div class="end-badge-list end-badge-grid">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">PEEK for Implants & Devices</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Figure 4&reg; for Prototypes</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">FDM for Non-Critical Parts</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-4.svg" alt="Icon"></div>
                            <div class="end-badge-text">Metal 3D Printing (Ti, Co, Cr, SS)</div>
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
                            <p class="end-card-subtitle">Prototype to Production.</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Use validated designs for manufacturing surgical guides, implants, prosthetics, orthotics, instruments or custom devices through additive manufacturing or hybrid processes.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-to-end-4.png" alt="Manufacture" class="end-card-img">
                    <div class="end-badge-list end-badge-grid">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">Custom Implants & Orthotics</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Surgical Instruments</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Low-Volume Production</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-4.svg" alt="Icon"></div>
                            <div class="end-badge-text">Hybrid Manufacturing</div>
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
                            <p class="end-card-subtitle">Verify. Validate. Ensure Safety.</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Compare manufactured parts with original CAD or scan data. Perform full dimensional analysis, GD&T and surface inspection for regulatory compliance and patient safety.</p>
                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-to-end-5.png" alt="3D Inspect" class="end-card-img">
                    <div class="end-badge-list end-badge-grid">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">CAD Comparison</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Dimensional Inspection</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Inspection Report</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/end-card-4.svg" alt="Icon"></div>
                            <div class="end-badge-text">Regulatory Compliance</div>
                        </div>
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
                            <div class="capex-step-desc">Create & Optimize</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item">
                        <div class="capex-step-number">3</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Validate</div>
                            <div class="capex-step-desc">Inspect & Ensure</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item">
                        <div class="capex-step-number">4</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Manufacture</div>
                            <div class="capex-step-desc">Produce & Deliver</div>
                        </div>
                    </div>
                </div>

                <!-- Cards Row -->
                <div class="row g-4 d-flex align-items-stretch">
                    <!-- Card 1 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Scanners<br><span style="color: #000;">for Medical Device</span></h3>

                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-1-1.png" alt="3D Scanners for Medical Device" class="img-fluid my-3 capex-main-img capex-main-img-lg">

                            <div class="capex-inner-list flex-grow-1">
                                <div class="capex-inner-item capex-scanner-item">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-inner-img capex-scanner-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-1-2.png" alt="Handheld Laser 3D Scanners"></div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Handheld Laser<br>3D Scanners</div>
                                            </div>
                                        </div>
                                        <a href="freescan-omni.php" class="capex-scanner-link text-decoration-none text-end">FreeScan<br>Omni <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="capex-inner-item capex-scanner-item">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-inner-img capex-scanner-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-1-3.png" alt="Optical 3D Scanners"></div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Optical 3D<br>Scanners</div>
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
                                            <div class="capex-inner-img capex-scanner-icon"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-1-4.png" alt="Human Body 3D Scanner"></div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Human Body<br>3D Scanner</div>
                                            </div>
                                        </div>
                                        <a href="3d-scanners-in-india.php" class="capex-scanner-link text-decoration-none text-end">Medixa <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <a href="3d-scanners-in-india.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE MEDICAL DEVICE 3D SCANNERS</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Reverse<br>Engineering Software<br><span style="color: #000;">for Medical Device</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-2">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>

                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-2-1.png" alt="Reverse Engineering" class="img-fluid my-2 capex-main-img">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="reverse-engineering-geomagic-design-x.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-2-2.png" alt="Geomagic Design X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Design X</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="geomagic-for-solidworks-reverse-engineering-software.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-2-3.png" alt="Geomagic for SOLIDWORKS"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic for SOLIDWORKS</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="exactflat.php" class="capex-inner-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-2-4.png" alt="ExactFlat"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">ExactFlat</div>
                                            <div class="capex-inner-desc text-dark mt-1">Sheet Material Flattening Software</div>
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
                            <h3 class="capex-card-title text-center">3D Inspection<br>Software<br><span style="color: #000;">for Medical Device</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-2">Perform dimensional inspection by comparing scanned medical device components against their original CAD models.</p>

                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-3-1.png" alt="Inspection Software" class="img-fluid my-2 capex-main-img capex-main-img-lg">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="geomagic-control-x-3d-inspection-software.php" class="capex-inner-item text-decoration-none mb-3">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-3-2.png" alt="Geomagic Control X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Control X</div>
                                            <div class="capex-inner-desc text-dark mt-1">3D Inspection Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>

                                <div class="capex-app-title">Applications</div>
                                <div class="d-flex flex-wrap gap-2 mt-2" style="gap: 12px;">
                                    <span class="capex-badge">CAD vs Scan Comparison</span>
                                    <span class="capex-badge">GD&T</span>
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
                            <h3 class="capex-card-title text-center">Industrial 3D Printing<br>Solutions<br><span style="color: #000;">for Medical Device</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-4">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>

                            <div class="capex-inner-list flex-grow-1">
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-4-1.png" alt="High-Precision 3D Printing"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">High-Precision<br>3D Printing</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">Prototypes, Surgical Guides, Jigs, Fixtures, Dental Models</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-4-2.png" alt="PEEK 3D Printer"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">PEEK 3D Printer<br>for Medical Device</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">FUNMAT PRO<br>310 APOLLO</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-4-3.png" alt="Large-Format Industrial FDM Printers"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">Large-Format<br>Industrial FDM<br>Printers</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">For jigs, fixtures, prototypes, housings & molds.</div>
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
                        <h2 class="opex-main-title">3D Scan-based Engineering and 3D Printing Services<br>for Medical Device Manufacturing <span style="color: #FF931E;">(OPEX)</span></h2>
                        <p class="opex-main-desc mt-3">Not ready to invest? Experience the technology through our engineering services.<br>Our experts can complete your project, demonstrate the workflow and help you evaluate the return on investment based on your actual application.</p>
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
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/result-1.png" alt="Share Your RFQ" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Share Your RFQ</div>
                        <div class="opex-workflow-desc mt-2">Send your component, application and expected deliverables.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 2 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">2</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/result-2.png" alt="Receive a Proposal" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive a Proposal</div>
                        <div class="opex-workflow-desc mt-2">We review the requirement and provide a clear quotation.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 3 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">3</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/result-3.png" alt="Select the Right Workflow" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Select the Right<br>Workflow</div>
                        <div class="opex-workflow-desc mt-2">We choose the right 3D scanner, software and methodology.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 4 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">4</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/result-4.png" alt="On-Site or In-House Execution" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">On-Site or In-House<br>Execution</div>
                        <div class="opex-workflow-desc mt-2">Scanning is completed at your facility or at a Precise3DM centre.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 5 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">5</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/result-5.png" alt="Receive Your Deliverables" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive Your<br>Deliverables</div>
                        <div class="opex-workflow-desc mt-2">Get a manufacturing-ready CAD model or inspection report.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 6 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">6</div>
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/result-6.png" alt="Pay as OPEX" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Pay as OPEX</div>
                        <div class="opex-workflow-desc mt-2">Pay against invoice based on agreed terms. Monthly service options are available.</div>
                    </div>
                </div>

                <!-- Bottom 5 Cards -->
                <div class="row g-4 mt-2">
                    <!-- Card 1 -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">3D Scanning Services<br>for Medical Device</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/opex-1.png" alt="3D Scanning Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> On-site & In-house Scanning</li>
                                <li><i class="fa-solid fa-circle-check"></i> Battery Packs, Modules & Cells</li>
                                <li><i class="fa-solid fa-circle-check"></i> Powertrain & Motors</li>
                                <li><i class="fa-solid fa-circle-check"></i> Inspection & Archiving</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">Reverse Engineering Services<br>for Medical Device</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/opex-2.png" alt="Reverse Engineering Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
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
                            <h3 class="opex-service-title text-center">3D Inspection Services<br>for Medical Device</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/opex-3.png" alt="3D Inspection Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Dimensional Inspection</li>
                                <li><i class="fa-solid fa-circle-check"></i> CAD Comparison</li>
                                <li><i class="fa-solid fa-circle-check"></i> FAI / GD&T / Deviation Maps</li>
                                <li><i class="fa-solid fa-circle-check"></i> Supplier & Production QC</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>KNOW MORE</span>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Bottom 2 Cards (Row 2) -->
                <div class="row g-4 mt-4">
                    <!-- Card 4 (8 columns) -->
                    <div class="col-xl-8 col-lg-12">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center mb-4">3D Printing Services for Medical Device</h3>
                            <div class="row flex-grow-1 g-4 align-items-center">
                                <div class="col-md-4">
                                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-4-1.png" alt="PEEK 3D Printing" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-start">PEEK 3D Printing</div>
                                    <div class="opex-print-desc text-start mt-2">High-performance engineering parts and functional medical applications.</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/opex-4-2.png" alt="Figure 4 DLP" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-start">Figure 4: DLP 3D<br>Printing Service</div>
                                    <div class="opex-print-desc text-start mt-2">High-detail prototypes with excellent surface finish and rapid turnaround.</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/capex-4-3.png" alt="Large Format FDM" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-start">Large-Format FDM 3D Printing</div>
                                    <div class="opex-print-desc text-start mt-2">Large fixtures, tooling, prototype assemblies, housings and manufacturing aids.</div>
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
                            <h3 class="opex-service-title text-center mb-4">Benchmarking & Teardown<br>Services for Medical Device</h3>
                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/opex-5.png" alt="Benchmarking & Teardown" class="img-fluid mb-4 mx-auto d-block w-100" style="border-radius: 8px;">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Complete Teardown (Shape)</li>
                                <li><i class="fa-solid fa-circle-check"></i> Component-Level Analysis</li>
                                <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
                                <li><i class="fa-solid fa-circle-check"></i> CAD Development</li>
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
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/buy-image.png" alt="Buy or Outsource" class="img-fluid mt-auto mx-auto pt-4">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="eng-card h-100 d-flex flex-column" style="background: #fff;">
                        <h3 class="eng-title-orange">Build In-House CAPEX</h3>
                        <div class="eng-subtitle mt-3 mb-4">Best for</div>
                        <ul class="eng-list list-check-orange flex-grow-1">
                            <li><i class="fa-solid fa-circle-check"></i> Frequent Scanning & Reverse Engineering</li>
                            <li><i class="fa-solid fa-circle-check"></i> Daily QC & Inspection</li>
                            <li><i class="fa-solid fa-circle-check"></i> Internal NPD & R&D Labs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Regulatory Compliance & Documentation</li>
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
                            <li><i class="fa-solid fa-circle-check"></i> One-Time Projects & Immediate Needs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Technology Evaluation</li>
                            <li><i class="fa-solid fa-circle-check"></i> Specialized Inspections</li>
                            <li><i class="fa-solid fa-circle-check"></i> Regulatory & Validation Support</li>
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
                            <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/talk-to-expert-image.png" alt="Talk to Expert" class="img-fluid mb-4" style="max-height: 200px;">
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
            <div class="bg-white" style="border-radius: 20px; overflow: hidden; box-shadow: 0px 4px 9.6px 0px #0000001A;">
                <div class="row g-0">
                    <!-- Left Image Side -->
                    <div class="col-lg-6 position-relative d-flex align-items-center justify-content-center p-4">
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/why-image.png" alt="Why Precise3DM" class="why-img">
                        <!-- Logo at the bottom left -->
                        <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/precise3dm-logo.png" alt="Precise3DM Logo" class="position-absolute" style="bottom: 30px; left: 30px; max-width: 580px;">
                    </div>

                    <!-- Right Content Side -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-xl-5 w-100">
                            <h2 class="why-title mb-5">Why Medical Device Companies<br>Choose <span style="color: #FF931E;">Precise3DM?</span></h2>

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
                                    <div class="why-text">High-Accuracy 3D Scanners for Complex Medical Components</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Reverse Engineering & Scan-to-CAD Expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Advanced 3D Inspection for Quality & Regulatory Compliance</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial 3D Printing for Prototypes, Jigs & Medical Devices</div>
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
                                    <div class="why-text">Pan-India Sales, Service, Training & Technical Support</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line d-none"></div>
                                    </div>
                                    <div class="why-text">Solutions for Implant Manufacturers, OEMs, & R&D Labs</div>
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
            </div>
        </div>
    </section>

    <!-- Technology Partners Section -->
    <section class="auto-partners-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="partners-title text-center mb-5">Our Technology Partners</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/partner-1.png" alt="Shining 3D" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/partner-2.png" alt="Hexagon" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/partner-3.png" alt="ExactFlat" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/partner-4.png" alt="TrueProp Software" class="img-fluid partners-logo">
                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/partner-5.png" alt="GD EPIC" class="img-fluid partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="auto-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="contact-inner-container p-4 p-xl-5 position-relative" style="border-radius: 16px;">

                <div class="text-center mb-4">
                    <h2 class="contact-main-title">Ready to Accelerate Innovation in <span style="color: #FF931E;">Medical Device Manufacturing?</span></h2>
                    <p class="contact-main-desc mt-3 mx-auto" style="max-width: 1100px;">Partner with Precise3DM to build better, safer and smarter medical devices faster and with confidence.</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-4 mb-5" style="gap: 20px;">
                    <a href="#capex" class="contact-top-btn px-5 py-3">3D Products</a>
                    <a href="#opex" class="contact-top-btn px-5 py-3">3D Services</a>
                </div>

                <div class="contact-divider mb-5 mx-auto"></div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/contact-1.png" alt="Get Quote for Services" class="img-fluid me-3" style="width: 75px;">
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
                                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/contact-2.png" alt="Get Quote for Scanners" class="img-fluid me-3" style="width: 75px;">
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
                                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">MEET US LIVE <br><span style="color: #FF931E;">ONLINE NOW</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Connect with our experts instantly for live guidance and support.</p>
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">MEET US LIVE ONLINE NOW <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/digital-manufacturing-solutions-for-medical-device-manufacturing/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
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

    <!-- FAQ Section -->
    <section class="auto-faq-section py-5" style="background-color: #f6f6fa;">
        <div id="FAQ" class="container med-container faq">
            <h2 class="sec-head text-center mb-5" style="font-weight: 700; font-size: 2.1875rem; color: #000;">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="row mt-4 mx-auto" style="max-width: 1000px;">
               <div class="accordion" id="accordionExample">
                  <!-- 1 -->
                  <div class="accordion-item auto-faq-item mb-3 border-0">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <span>What is the cost of handheld colour 3D scanning services?</span>
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body auto-faq-body">
                           <p>Please contact our sales team for a detailed quotation based on your specific component and requirements.</p>
                        </div>
                     </div>
                  </div>
                  <!-- 2 -->
                  <div class="accordion-item auto-faq-item mb-3 border-0">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           <span>What is colour 3D Scanning, and how does it differ from industrial 3D Scanning?</span>
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body auto-faq-body">
                           <p>Colour 3D scanning captures both the geometry and the colour/texture of the object, while industrial 3D Scanning only captures the shape.</p>
                        </div>
                     </div>
                  </div>
                  <!-- 3 -->
                  <div class="accordion-item auto-faq-item mb-3 border-0">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>How long does it take when you do a 3D Scan with colour?</span>
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body auto-faq-body">
                           <p>The time required depends on the size and complexity of the object. Handheld colour scanning is generally fast and efficient.</p>
                        </div>
                     </div>
                  </div>
                  <!-- 4 -->
                  <div class="accordion-item auto-faq-item mb-3 border-0">
                     <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           <span>Who benefits from Precise3DM's Handheld Color 3D Scanning Services?</span>
                        </button>
                     </h2>
                     <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body auto-faq-body">
                           <p>Industries such as automotive, aerospace, heritage preservation, reverse engineering, and entertainment benefit from high-quality colour 3D scanning.</p>
                        </div>
                     </div>
                  </div>
                  <!-- 5 -->
                  <div class="accordion-item auto-faq-item mb-3 border-0">
                     <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           <span>Is your Colour 3D scanning service available for outdoor or indoor objects?</span>
                        </button>
                     </h2>
                     <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body auto-faq-body">
                           <p>Yes, our portable scanning systems allow us to perform accurate colour 3D scanning both indoors and outdoors.</p>
                        </div>
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
