<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "Precise3DM Digital Manufacturing Solutions for Material Handling Equipment Manufacturing";
$meta_description =
    "Precise3DM empowers material handling equipment manufacturers with 3D scanning, reverse engineering, PEEK 3D printing and inspection solutions to capture complex components with high accuracy, produce custom spares and reduce downtime.";
$img = "assets/images/digital-manufacturing-solutions-for-material-handling-equipment-manufacturing";
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
    <link rel="stylesheet" href="assets/css/digital-manufacturing-solutions-for-material-handling-equipment-manufacturing.css">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section -->
    <section class="mh-hero-section">
        <div class="container-fluid mh-container">
            <div class="row pt-4 pb-5">
                <div class="col-lg-6">
                    <h1 class="hero-main-title text-white">Digital Manufacturing Solutions <span class="text-orange">Material Handling Equipment Manufacturing</span></h1>
                    <h3 class="hero-subtitle">Move More. Handle More. With Precision.</h3>

                    <div class="hero-desc">
                        <p>Material handling equipment works in demanding environments where durability, safety, and reliability are non-negotiable. Precise3DM empowers manufacturers to capture complex components with high accuracy, reverse engineer, produce custom spares, and ensure quality—reducing downtime and keeping your operations running efficiently.</p>
                    </div>

                    <div class="hero-highlight">
                        <div class="hero-highlight-title">SCAN LARGE. CAPTURE COMPLEX. DELIVER PRECISE.</div>
                        <p class="hero-highlight-text">FreeScan Trak Nova is purpose-built for large assemblies, heavy structures, and hard-to-reach areas—delivering high-accuracy results without moving the part.</p>
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
            </div>
        </div>
    </section>

    <!-- Hero Stat Section -->
    <section class="auto-stat-section py-5">
        <div class="container-fluid mh-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center auto-stat-row">

                <!-- Stat 1 -->
                <div class="auto-stat-item d-flex align-items-center" style="gap: 10px;">
                    <div class="auto-stat-icon me-3">
                        <img src="<?= $img ?>/hero-stat-1.svg" alt="10+ Years">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">10+</div>
                        <div class="auto-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="auto-stat-item d-flex align-items-center" style="gap: 10px;">
                    <div class="auto-stat-icon me-3">
                        <img src="<?= $img ?>/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">250+</div>
                        <div class="auto-stat-subtitle">Scanners sold</div>
                        <div class="auto-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="auto-stat-item d-flex align-items-center" style="gap: 10px;">
                    <div class="auto-stat-icon me-3">
                        <img src="<?= $img ?>/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">60+</div>
                        <div class="auto-stat-subtitle">Scan-based applications</div>
                        <div class="auto-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="auto-stat-item d-flex align-items-center" style="gap: 10px;">
                    <div class="auto-stat-icon me-3">
                        <img src="<?= $img ?>/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="auto-stat-content">
                        <div class="auto-stat-title">8+</div>
                        <div class="auto-stat-subtitle">Direct locations</div>
                        <div class="auto-stat-desc">across India</div>
                    </div>
                </div>

                <div class="auto-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="auto-stat-item d-flex align-items-center" style="gap: 10px;">
                    <div class="auto-stat-icon me-3">
                        <img src="<?= $img ?>/hero-stat-5.svg" alt="15+ Countries">
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

    <!-- Challenges Section -->
    <section class="mh-challenges-section py-5">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="section-title text-center mb-5">Challenges with Conventional Processes in Material Handling Equipment Manufacturing</h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon"><i class="fa-solid fa-xmark"></i></div>
                        <h3 class="challenge-title">Manual Measurement for Large &amp; Complex Parts</h3>
                        <img src="<?= $img ?>/challenge-1.png" class="challenge-img" alt="Manual Measurement for Large and Complex Parts">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-caret-right"></i> Very large parts are difficult to measure on-site</li>
                            <li><i class="fa-solid fa-caret-right"></i> Time-consuming &amp; labor intensive</li>
                            <li><i class="fa-solid fa-caret-right"></i> Limited access to critical areas</li>
                            <li><i class="fa-solid fa-caret-right"></i> Low point density &amp; inconsistent data</li>
                            <li><i class="fa-solid fa-caret-right"></i> Longer turnaround time</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon"><i class="fa-solid fa-xmark"></i></div>
                        <h3 class="challenge-title">Conventional<br>Manufacturing</h3>
                        <img src="<?= $img ?>/challenge-2.png" class="challenge-img" alt="Conventional Manufacturing">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-caret-right"></i> Long tooling &amp; fixture development</li>
                            <li><i class="fa-solid fa-caret-right"></i> Multiple trial-and-error cycles</li>
                            <li><i class="fa-solid fa-caret-right"></i> Difficulty in achieving tight tolerances</li>
                            <li><i class="fa-solid fa-caret-right"></i> Material waste &amp; higher costs</li>
                            <li><i class="fa-solid fa-caret-right"></i> Slower time-to-market</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon"><i class="fa-solid fa-xmark"></i></div>
                        <h3 class="challenge-title">Conventional CMM<br>Inspection</h3>
                        <img src="<?= $img ?>/challenge-3.png" class="challenge-img" alt="Conventional CMM Inspection">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-caret-right"></i> CMM size limitations</li>
                            <li><i class="fa-solid fa-caret-right"></i> Difficult to move or fixture large components</li>
                            <li><i class="fa-solid fa-caret-right"></i> Point-by-point measurement only</li>
                            <li><i class="fa-solid fa-caret-right"></i> Long inspection cycles</li>
                            <li><i class="fa-solid fa-caret-right"></i> Higher dependence on skilled operators</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="challenge-card">
                        <div class="challenge-x-icon"><i class="fa-solid fa-xmark"></i></div>
                        <h3 class="challenge-title">Impact on Your<br>Business</h3>
                        <img src="<?= $img ?>/challenge-4.png" class="challenge-img" alt="Impact on Your Business">
                        <ul class="challenge-list">
                            <li><i class="fa-solid fa-caret-right"></i> Equipment downtime</li>
                            <li><i class="fa-solid fa-caret-right"></i> Delays in material handling operations</li>
                            <li><i class="fa-solid fa-caret-right"></i> Higher operating costs</li>
                            <li><i class="fa-solid fa-caret-right"></i> Reduced productivity &amp; throughput</li>
                            <li><i class="fa-solid fa-caret-right"></i> Reduced competitiveness</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End to End Section -->
    <section class="aero-end-section">
        <div class="container-fluid mh-container">

            <!-- Top Content -->
            <div class="row align-items-center g-4">
                <div class="col-xl-5 col-lg-12">
                    <h2 class="aero-end-title">End-To-End Digital Manufacturing Solutions for Material Handling Equipment Manufacturing</h2>
                    <h3 class="aero-end-subtitle">From Scan to Real-World Solutions</h3>
                    <p class="aero-end-desc">Spare Parts | Custom Components | Equipment Upgrades | Reverse Engineering</p>
                </div>

                <div class="col-xl-3 col-md-5">
                    <div class="end-tagline">STRONGER PARTS.<br>SMOOTHER OPERATIONS.<br>REAL IMPACT.</div>
                    <div class="end-tagline-bar"></div>
                    <img src="<?= $img ?>/end-to-end-middle.png" alt="Material Handling Equipment" class="end-middle-img">
                </div>

                <div class="col-xl-4 col-md-7">
                    <div class="end-parts-box">
                        <div class="end-parts-title">PEEK 3D PRINTED PARTS (EXAMPLES)</div>
                        <div class="end-parts-grid">
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-1.png" alt="Bushing"><span>Bushing</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-2.png" alt="Bearing Sleeve"><span>Bearing Sleeve</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-3.png" alt="Roller / Wheel Core"><span>Roller / Wheel Core</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-4.png" alt="Slider / Guide Block"><span>Slider / Guide Block</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-5.png" alt="Hinge Bracket"><span>Hinge Bracket</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-6.png" alt="Washer / Spacer"><span>Washer / Spacer</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-7.png" alt="Pump/Actuator Mount"><span>Pump/Actuator Mount</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-8.png" alt="Handle Grip"><span>Handle Grip</span></div>
                            <div class="end-part-tile"><img src="<?= $img ?>/end-corner-9.png" alt="Cable Clip"><span>Cable Clip</span></div>
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
                            <p class="end-card-subtitle">Capture Real Equipment</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Scan the existing equipment or individual components using high-accuracy 3D scanners.</p>
                    <img src="<?= $img ?>/end-to-end-1.png" alt="3D Scan" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">On-Site Scanning</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Capture Complex Parts</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">High Accuracy</div>
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
                            <p class="end-card-subtitle">From Scan to Engineering Model</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Convert scan data into precise, editable CAD models. Identify wear parts and design optimized replacements.</p>
                    <img src="<?= $img ?>/end-to-end-2.png" alt="Create CAD" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">Edit &amp; Optimize CAD Models</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Design Variants</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Manufacturing Ready Files</div>
                        </div>
                    </div>
                    <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 3 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">3</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">3D PRINT (PEEK)</h4>
                            <p class="end-card-subtitle">Durable, High-Performance Parts</p>
                        </div>
                    </div>
                    <p class="end-card-desc">3D print functional replacement parts using PEEK for high strength, chemical resistance and wear performance.</p>
                    <img src="<?= $img ?>/end-to-end-3.png" alt="3D Print PEEK" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">PEEK (High Performance)</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Heat &amp; Chemical Resistant</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Functional Prototypes &amp; Spares</div>
                        </div>
                    </div>
                    <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 4 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">4</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">VALIDATE &amp; FIT</h4>
                            <p class="end-card-subtitle">Ensure Performance</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Inspect printed parts, verify dimensions and fit on the equipment. Perform functional testing in real operating conditions.</p>
                    <img src="<?= $img ?>/end-to-end-4.png" alt="Validate and Fit" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">3D Inspection</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Dimensional Verification</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Fit &amp; Function Test</div>
                        </div>
                    </div>
                    <div class="end-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 5 -->
                <div class="end-card">
                    <div class="end-card-header">
                        <div class="end-card-num">5</div>
                        <div class="end-card-title-box">
                            <h4 class="end-card-title">DEPLOY &amp; SUPPORT</h4>
                            <p class="end-card-subtitle">Keep Your Operations Moving</p>
                        </div>
                    </div>
                    <p class="end-card-desc">Use 3D printed parts directly (for prototypes, low volume or critical spares) to minimize downtime. Combine with conventional manufacturing when required.</p>
                    <img src="<?= $img ?>/end-to-end-5.png" alt="Deploy and Support" class="end-card-img">
                    <div class="end-badge-list">
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-1.svg" alt="Icon"></div>
                            <div class="end-badge-text">Reduce Downtime</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-2.svg" alt="Icon"></div>
                            <div class="end-badge-text">Lower Costs</div>
                        </div>
                        <div class="end-badge-item">
                            <div class="end-badge-icon"><img src="<?= $img ?>/end-card-3.svg" alt="Icon"></div>
                            <div class="end-badge-text">Report &amp; Operational Support</div>
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
                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item" style="gap: 10px;">
                        <div class="capex-step-number">1</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Capture</div>
                            <div class="capex-step-desc">Accurate 3D Data</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item" style="gap: 10px;">
                        <div class="capex-step-number">2</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Engineer</div>
                            <div class="capex-step-desc">Create &amp; Optimize</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item" style="gap: 10px;">
                        <div class="capex-step-number">3</div>
                        <div class="ms-3">
                            <div class="capex-step-title">Validate</div>
                            <div class="capex-step-desc">Inspect &amp; Ensure</div>
                        </div>
                    </div>

                    <div class="capex-step-line flex-grow-1 d-none d-lg-block mx-3"></div>

                    <div class="d-flex align-items-center flex-shrink-0 capex-step-item" style="gap: 10px;">
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
                            <h3 class="capex-card-title text-center">3D Scanners<br><span style="color: #000;">for Material Handling</span></h3>
                            <p class="capex-card-desc text-center mt-2 mb-1">Large Parts. No Limits.</p>

                            <img src="<?= $img ?>/capex-1-1.png" alt="3D Scanners for Material Handling Equipment" class="img-fluid my-3 capex-main-img capex-main-img-lg">

                            <div class="capex-inner-list flex-grow-1">
                                <div class="capex-inner-item capex-scanner-item">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-scanner-icons">
                                                <img src="<?= $img ?>/capex-1-2.png" alt="Tracker-Based 3D Scanner">
                                                <img src="<?= $img ?>/capex-1-3.png" alt="Tracker-Based 3D Scanner">
                                            </div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Tracker-Based<br>3D Scanners</div>
                                            </div>
                                        </div>
                                        <div class="capex-scanner-links">
                                            <a href="3d-scanners-in-india.php" class="text-decoration-none">FreeScan Trak Nova <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                            <a href="freescan-trak-pro-w.php" class="text-decoration-none">FreeScan Trak ProW <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="capex-inner-item capex-scanner-item mb-0">
                                    <div class="d-flex align-items-center justify-content-between w-100 capex-inner-content">
                                        <div class="d-flex align-items-center">
                                            <div class="capex-scanner-icons">
                                                <img src="<?= $img ?>/capex-1-4.png" alt="Leica RTC360">
                                                <img src="<?= $img ?>/capex-1-5.png" alt="Laser Scanner">
                                            </div>
                                            <div class="capex-inner-text-container">
                                                <div class="capex-inner-title capex-scanner-title text-dark">Laser Scanners (for large environments)</div>
                                            </div>
                                        </div>
                                        <div class="capex-scanner-links">
                                            <a href="leica-rtc360.php" class="text-decoration-none">Leica RTC360 <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="3d-scanners-in-india.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE MATERIAL HANDLING 3D SCANNERS</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Reverse<br>Engineering Software<br><span style="color: #000;">for Material Handling</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-2">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>

                            <img src="<?= $img ?>/capex-2-1.png" alt="Reverse Engineering" class="img-fluid my-2 capex-main-img capex-main-img-lg">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="reverse-engineering-geomagic-design-x.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="<?= $img ?>/capex-2-2.png" alt="Geomagic Design X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Design X</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="geomagic-for-solidworks-reverse-engineering-software.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="<?= $img ?>/capex-2-3.png" alt="Geomagic for SOLIDWORKS"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic for SOLIDWORKS</div>
                                            <div class="capex-inner-desc text-dark mt-1">Reverse Engineering Plugin</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="exactflat.php" class="capex-inner-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="<?= $img ?>/capex-2-4.png" alt="ExactFlat for Rhino 3D"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">ExactFlat</div>
                                            <div class="capex-inner-desc text-dark mt-1">Surface Flattening for Rhino 3D</div>
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
                            <h3 class="capex-card-title text-center">3D Inspection<br>Software<br><span style="color: #000;">for Material Handling</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-3">Perform dimensional inspection by comparing scanned material handling components against their original CAD models.</p>

                            <div class="capex-inner-list flex-grow-1">
                                <a href="geomagic-control-x-3d-inspection-software.php" class="capex-inner-item text-decoration-none mb-2">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="<?= $img ?>/capex-3-2.png" alt="Geomagic Control X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Control X</div>
                                            <div class="capex-inner-desc text-dark mt-1">3D Inspection Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <img src="<?= $img ?>/capex-3-1.png" alt="Inspection Report" class="capex-inspect-img">
                            </div>

                            <a href="3d-inspection-software-in-india.php" class="capex-btn capex-btn-outline mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE 3D INSPECTION SOFTWARE</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Printing &amp; Additive<br>Manufacturing<br><span style="color: #000;">for Material Handling</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-4">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>

                            <div class="capex-inner-list flex-grow-1">
                                <a href="funmat-pro-310-apollo.php" class="capex-inner-item capex-card-4-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="<?= $img ?>/capex-4-1.png" alt="PEEK 3D Printer"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">PEEK 3D Printer for High-Performance Jigs &amp; Fixtures</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">FUNMAT PRO<br>310 APOLLO</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="<?= $img ?>/capex-4-2.png" alt="Large-Format Industrial FDM Printers"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">Large-Format Industrial FDM Printers</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">For Jigs, Fixtures, Tools, Templates &amp; Prototypes</div>
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
                        <h2 class="opex-main-title">3D Scan-based Engineering and 3D Printing Services for Material Handling Equipment Manufacturing <span style="color: #FF931E;">(OPEX)</span></h2>
                        <p class="opex-main-desc mt-3">Bring your components to our application lab. We scan your parts, create CAD models and inspection reports to prove measurable value before you invest.</p>
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
                        <img src="<?= $img ?>/result-1.png" alt="Share Your RFQ" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Share Your RFQ</div>
                        <div class="opex-workflow-desc mt-2">Send your component, application and expected deliverables.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 2 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">2</div>
                        <img src="<?= $img ?>/result-2.png" alt="Receive a Proposal" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive a Proposal</div>
                        <div class="opex-workflow-desc mt-2">We review the requirement and provide a clear quotation.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 3 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">3</div>
                        <img src="<?= $img ?>/result-3.png" alt="Select the Right Workflow" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Select the Right<br>Workflow</div>
                        <div class="opex-workflow-desc mt-2">We choose the right 3D scanner, software and methodology.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 4 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">4</div>
                        <img src="<?= $img ?>/result-4.png" alt="On-Site or In-House Execution" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">On-Site or In-House<br>Execution</div>
                        <div class="opex-workflow-desc mt-2">Scanning is completed at your facility or at a Precise3DM centre.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 5 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">5</div>
                        <img src="<?= $img ?>/result-5.png" alt="Receive Your Deliverables" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive Your<br>Deliverables</div>
                        <div class="opex-workflow-desc mt-2">Get a manufacturing-ready CAD model or inspection report.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 6 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">6</div>
                        <img src="<?= $img ?>/result-6.png" alt="Pay as OPEX" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Pay as OPEX</div>
                        <div class="opex-workflow-desc mt-2">Pay against invoice based on agreed terms. Monthly service options are available.</div>
                    </div>
                </div>

                <!-- Top 3 Cards -->
                <div class="row g-4 mt-2">
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">3D Scanning Services<br>for Material Handling Equipment</h3>
                            <img src="<?= $img ?>/opex-1.png" alt="3D Scanning Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Large Component Scanning</li>
                                <li><i class="fa-solid fa-circle-check"></i> On-site &amp; In-house Scanning</li>
                                <li><i class="fa-solid fa-circle-check"></i> Hard-to-Reach Areas</li>
                                <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
                                <li><i class="fa-solid fa-circle-check"></i> Inspection &amp; Archiving</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>LEARN MORE</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">Reverse Engineering Services<br>for Material Handling Equipment</h3>
                            <img src="<?= $img ?>/opex-2.png" alt="Reverse Engineering Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Scan-to-CAD</li>
                                <li><i class="fa-solid fa-circle-check"></i> Manufacturing-ready CAD</li>
                                <li><i class="fa-solid fa-circle-check"></i> STEP / IGES / Parasolid</li>
                                <li><i class="fa-solid fa-circle-check"></i> Surface Repair &amp; Optimization</li>
                                <li><i class="fa-solid fa-circle-check"></i> 2D Manufacturing Drawings</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>LEARN MORE</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">3D Inspection Services<br>for Material Handling Equipment</h3>
                            <img src="<?= $img ?>/opex-3.png" alt="3D Inspection Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Dimensional Inspection</li>
                                <li><i class="fa-solid fa-circle-check"></i> GD&amp;T Inspection</li>
                                <li><i class="fa-solid fa-circle-check"></i> Cavity &amp; Core Analysis</li>
                                <li><i class="fa-solid fa-circle-check"></i> FAI / PPAP Support</li>
                                <li><i class="fa-solid fa-circle-check"></i> First Article Inspection</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>LEARN MORE</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bottom 2 Cards (centered pair, same width as the cards above) -->
                <div class="row g-4 mt-4 justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">3D Printing Services<br>for Material Handling Equipment</h3>
                            <div class="opex-print-list flex-grow-1">
                                <a href="peek-3d-printing-services.php" class="capex-inner-item opex-print-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img opex-print-thumb"><img src="<?= $img ?>/capex-4-1.png" alt="PEEK 3D Printer"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">PEEK 3D Printer for High-Performance Jigs &amp; Fixtures</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">FUNMAT PRO<br>310 APOLLO</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon"></i>
                                    </div>
                                </a>
                                <a href="fdm-3d-printing-service-in-india.php" class="capex-inner-item opex-print-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img opex-print-thumb"><img src="<?= $img ?>/capex-4-2.png" alt="Large-Format Industrial FDM Printers"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">Large-Format Industrial FDM Printers</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">For Jigs, Fixtures, Tools, Templates &amp; Prototypes</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon"></i>
                                    </div>
                                </a>
                            </div>
                            <a href="3d-printing-service-request.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>LEARN MORE</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">Machinery Benchmarking &amp; Retrofit<br>Services for Material Handling Equipment</h3>
                            <img src="<?= $img ?>/opex-5.png" alt="Machinery Benchmarking and Retrofit" class="img-fluid my-4 mx-auto d-block opex-bench-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> Component-Level Analysis</li>
                                <li><i class="fa-solid fa-circle-check"></i> Retrofit &amp; Modernization</li>
                                <li><i class="fa-solid fa-circle-check"></i> Performance Analysis</li>
                                <li><i class="fa-solid fa-circle-check"></i> Spare Parts Development</li>
                            </ul>
                            <a href="Get-3d-scan-service-quote.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none text-white d-flex justify-content-center align-items-center">
                                <span>LEARN MORE</span>
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
            <div class="mh-eng-grid">
                <!-- Card 1 -->
                <div class="mh-eng-card mh-eng-dark">
                    <h3 class="mh-eng-dark-title"><span>BUY OR OUTSOURCE?</span><br>CHOOSE WHAT WORKS BEST FOR YOUR BUSINESS</h3>
                    <div class="mh-eng-dark-icons">
                        <img src="<?= $img ?>/engagement-model-1.svg" alt="Build In-House">
                        <i class="fa-solid fa-arrow-right-long"></i>
                        <img src="<?= $img ?>/engagement-model-2.svg" alt="Engineering Team">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="mh-eng-card mh-eng-capex">
                    <h3 class="mh-eng-title mh-eng-title-red">BUILD IN-HOUSE (CAPEX)</h3>
                    <div class="mh-eng-subtitle">Best for:</div>
                    <ul class="mh-eng-list mh-eng-list-check flex-grow-1">
                        <li><i class="fa-solid fa-check"></i> Frequent Scanning &amp; Reverse Engineering</li>
                        <li><i class="fa-solid fa-check"></i> Daily QC &amp; Inspection</li>
                        <li><i class="fa-solid fa-check"></i> Internal NPD &amp; Tool Rooms</li>
                        <li><i class="fa-solid fa-check"></i> Production Inspection</li>
                        <li><i class="fa-solid fa-check"></i> Long-Term Capability Building</li>
                    </ul>
                    <a href="#capex" class="capex-btn capex-btn-primary text-decoration-none text-white d-flex justify-content-center align-items-center text-center">
                        <span>EXPLORE CAPEX SOLUTIONS</span>
                    </a>
                    <div class="mh-eng-or">OR</div>
                </div>

                <!-- Card 3 -->
                <div class="mh-eng-card mh-eng-opex">
                    <h3 class="mh-eng-title mh-eng-title-green">USE OUR ENGINEERING TEAM (OPEX)</h3>
                    <div class="mh-eng-subtitle">Best for:</div>
                    <ul class="mh-eng-list mh-eng-list-circle flex-grow-1">
                        <li><i class="fa-regular fa-circle-check"></i> One-Time Projects &amp; Immediate Needs</li>
                        <li><i class="fa-regular fa-circle-check"></i> Technology Evaluation</li>
                        <li><i class="fa-regular fa-circle-check"></i> Specialized Inspections</li>
                        <li><i class="fa-regular fa-circle-check"></i> Benchmarking Projects</li>
                        <li><i class="fa-regular fa-circle-check"></i> Occasional Reverse Engineering</li>
                    </ul>
                    <a href="#opex" class="capex-btn capex-btn-primary text-decoration-none text-white d-flex justify-content-center align-items-center text-center">
                        <span>EXPLORE ENGINEERING SERVICES</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Precise3DM Section -->
    <section class="auto-why-section py-4">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="why-bg-container position-relative" style="border-radius: 20px; overflow: hidden; box-shadow: 0px 4px 9.6px 0px #0000001A;">
                <div class="row g-0">
                    <!-- Left Side — 5 columns, carries the background image -->
                    <div class="col-lg-5 why-left-col d-none d-lg-block"></div>

                    <!-- Right Side — 7 columns -->
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="p-4 p-xl-5 w-100">
                            <h2 class="why-title mb-5">Why Material Handling<br>Companies Choose <span style="color: #FF931E;">Precise3DM?</span></h2>

                            <ul class="why-list">
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Complete digital manufacturing solutions provider</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial 3D scanners for any site components</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Reverse Engineering Scan-to-CAD expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Metrology &amp; Engineering software expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial 3D printing solutions for manufacturing aids</div>
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
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Advanced 3D inspections &amp; quality control workflows</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line d-none"></div>
                                    </div>
                                    <div class="why-text">Solution for OEMs, machine builders, tool rooms &amp; maintenance teams</div>
                                </li>
                            </ul>

                            <div class="mt-4 text-start">
                                <a href="About_us.php" class="capex-btn capex-btn-primary why-know-btn text-decoration-none text-white d-inline-flex justify-content-center align-items-center">
                                    <span>Know More About Precise 3DM</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="<?= $img ?>/precise3dm-logo.png" alt="Precise3DM Logo" class="position-absolute why-logo">
            </div>
        </div>
    </section>

    <!-- Technology Partners Section -->
    <section class="auto-partners-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="partners-title text-center mb-5">Our Technology Partners</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="<?= $img ?>/partner-1.png" alt="Shining 3D" class="img-fluid partners-logo">
                <img src="<?= $img ?>/partner-2.png" alt="Hexagon" class="img-fluid partners-logo">
                <img src="<?= $img ?>/partner-3.png" alt="ExactFlat" class="img-fluid partners-logo">
                <img src="<?= $img ?>/partner-4.png" alt="TrueProp Software" class="img-fluid partners-logo">
                <img src="<?= $img ?>/partner-5.png" alt="GD EPIC" class="img-fluid partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="auto-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="contact-inner-container p-4 p-xl-5 position-relative" style="background-image: url('<?= $img ?>/contact-bg.png'); background-size: cover; background-position: center; border-radius: 16px;">

                <div class="text-center mb-4">
                    <h2 class="contact-main-title">Ready to Accelerate Innovation in <span style="color: #FF931E;">Material Handling Equipment Manufacturing?</span></h2>
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
                                <img src="<?= $img ?>/contact-1.png" alt="Get Quote for Services" class="img-fluid me-3" style="width: 75px;">
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
                                <img src="<?= $img ?>/contact-2.png" alt="Get Quote for Scanners" class="img-fluid me-3" style="width: 75px;">
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
                                <img src="<?= $img ?>/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
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
                                <img src="<?= $img ?>/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
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
