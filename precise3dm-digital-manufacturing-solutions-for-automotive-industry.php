<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "Precise3DM Digital Manufacturing Solutions for the Automotive Industry";
$meta_description =
    "Empowering OEMs, Tier-1 & Tier-2 suppliers with 3D scanning, reverse engineering, 3D printing and inspection solutions to accelerate innovation.";
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
    <link rel="stylesheet" href="assets/css/precise3dm-digital-manufacturing-solutions-for-automotive-industry.css">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

    <!-- Main Content Starts Here -->
    <section class="auto-ind-hero-section">
        <div class="container-fluid auto-ind-container">
            <!-- Top Right Contact -->
            <div class="row">
                <div class="col-12 d-flex justify-content-end pt-4 pb-3">
                    <div class="top-contact d-flex align-items-center" style="gap: 10px;">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="contact-info ms-3 text-start">
                            <div class="contact-title">Call us now</div>
                            <div class="contact-numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center pb-5">
                <!-- Left Side Content -->
                <div class="col-lg-7">
                    <h1 class="hero-main-title text-white">Precise3DM Digital Manufacturing Solutions for the <span class="text-orange">Automotive Industry</span></h1>
                    <h3 class="hero-subtitle text-white">Accelerate Automotive Product Development, Manufacturing & Quality Control</h3>
                    <p class="hero-desc text-white">Empowering OEMs, Tier-1 & Tier-2 suppliers, EV manufacturers and component makers with 3D scanning, reverse engineering, 3D printing and inspection solutions to accelerate innovation, ensure quality and stay ahead in a competitive market.</p>

                    <div class="hero-buttons d-flex flex-wrap mt-4" style="gap: 20px;">
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="btn-talk">Talk to an Automotive Expert</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-demo">Book a live demo</a>
                    </div>

                    <div class="bottom-contact d-flex align-items-center mt-5 pt-3">
                        <div class="contact-icon email-icon">
                            <i class="fa-solid fa-envelope" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="contact-info ms-3">
                            <div class="contact-title-dark">Email Us</div>
                            <div class="contact-emails">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Center Image -->
                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/hero-image.png" alt="Automotive Industry" class="img-fluid">
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/hero-stat-1.svg" alt="10+ Years">
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/hero-stat-2.png" alt="250+ Scanners sold">
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/hero-stat-3.svg" alt="60+ Applications">
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/hero-stat-4.svg" alt="8+ Locations">
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/hero-stat-5.svg" alt="15+ Countries">
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

    <!-- Complete Workflow Section -->
    <section class="auto-workflow-section py-4" style="background-color: #F6F6FA;">
        <div class="container-fluid" style="padding: 0 4%;">
            <div class="workflow-box bg-white p-4 p-md-5" style="border-radius: 16px;">
                <h2 class="text-center mb-5 workflow-main-title">Complete Digital Manufacturing Workflow for <span style="color: #FF931E;">Automotive</span></h2>

                <div class="workflow-diagram-scroll">
                    <div class="workflow-diagram position-relative">
                        <div class="workflow-lines-container position-relative">
                            <!-- Lines -->
                            <div class="line-top-main"></div>
                            <div class="line-curve-top-left"></div>
                            <div class="line-curve-top-right"></div>

                            <div class="line-bottom-left"></div>
                            <div class="line-bottom-right"></div>

                            <!-- Arrows Top -->
                            <div class="arrow-right" style="left: 16.66%;"></div>
                            <div class="arrow-right" style="left: 33.33%;"></div>
                            <div class="arrow-right" style="left: 50%;"></div>
                            <div class="arrow-right" style="left: 66.66%;"></div>
                            <div class="arrow-right" style="left: 83.33%;"></div>

                            <!-- Arrows Bottom Up -->
                            <div class="arrow-up-left"></div>
                            <div class="arrow-up-right"></div>

                            <!-- Bottom Text -->
                            <div class="workflow-bottom-text text-center position-absolute w-100" style="bottom: -15px;">
                                <span class="bg-white px-4">DATA-DRIVEN INSIGHTS FOR CONTINUOUS IMPROVEMENT</span>
                            </div>

                            <!-- 6 Columns -->
                        <div class="row text-center m-0 position-relative z-index-2 flex-nowrap flex-lg-wrap w-row-custom">

                            <!-- Col 1 -->
                            <div class="col-2 w-col-custom">
                                <div class="workflow-number">1</div>
                                <div class="workflow-col-title">Physical Part /<br>Product Idea</div>
                                <div class="workflow-img-container"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/workflow-1.png" alt="Workflow 1" class="img-fluid workflow-img"></div>
                                <div class="workflow-col-desc">Concept or existing<br>component</div>
                            </div>

                            <!-- Col 2 -->
                            <div class="col-2 w-col-custom">
                                <div class="workflow-number">2</div>
                                <div class="workflow-col-title">3D Scanning /<br>Digital Capture</div>
                                <div class="workflow-img-container"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/workflow-2.png" alt="Workflow 2" class="img-fluid workflow-img"></div>
                                <div class="workflow-col-desc">Capture accurate<br>3D data</div>
                            </div>

                            <!-- Col 3 -->
                            <div class="col-2 w-col-custom">
                                <div class="workflow-number">3</div>
                                <div class="workflow-col-title">Reverse Engineering /<br>CAD Development</div>
                                <div class="workflow-img-container"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/workflow-3.png" alt="Workflow 3" class="img-fluid workflow-img"></div>
                                <div class="workflow-col-desc">Convert scan<br>data into editable<br>CAD model</div>
                            </div>

                            <!-- Col 4 -->
                            <div class="col-2 w-col-custom">
                                <div class="workflow-number">4</div>
                                <div class="workflow-col-title">Tooling, Fixtures &<br>Manufacturing Prep</div>
                                <div class="workflow-img-container"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/workflow-4.png" alt="Workflow 4" class="img-fluid workflow-img"></div>
                                <div class="workflow-col-desc">Prepare tools,<br>jigs, fixtures &<br>process setup</div>
                            </div>

                            <!-- Col 5 -->
                            <div class="col-2 w-col-custom">
                                <div class="workflow-number">5</div>
                                <div class="workflow-col-title">3D Printing /<br>Prototyping / Production</div>
                                <div class="workflow-img-container"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/workflow-5.png" alt="Workflow 5" class="img-fluid workflow-img"></div>
                                <div class="workflow-col-desc">Produce<br>prototypes, jigs<br>or end-use parts</div>
                            </div>

                            <!-- Col 6 -->
                            <div class="col-2 w-col-custom">
                                <div class="workflow-number">6</div>
                                <div class="workflow-col-title">Quality Control /<br>3D Inspection</div>
                                <div class="workflow-img-container"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/workflow-6.png" alt="Workflow 6" class="img-fluid workflow-img"></div>
                                <div class="workflow-col-desc">Inspect &<br>compare with<br>CAD model</div>
                            </div>

                        </div>
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
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-1-1.png" alt="3D Scanners"></div>
                                    <div class="pace-inner-title">3D Scanners</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-1-2.png" alt="Reverse Engineering software"></div>
                                    <div class="pace-inner-title">Reverse<br>Engineering<br>software</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-normal">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-1-3.png" alt="Your Existing Process"></div>
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
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-1-3.png" alt="Your Existing Process"></div>
                                    <div class="pace-inner-title text-center w-100">Your Existing<br>Process</div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-1-1.png" alt="Metrology-Grade 3D Scanners"></div>
                                    <div class="pace-inner-title">Metrology-Grade<br>3D Scanners</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-2-3.png" alt="3D Inspection Software"></div>
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
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-3-1.png" alt="CAD"></div>
                                    <div class="pace-inner-title text-center w-100">CAD</div>
                                </div>
                                <div class="pace-arrow pace-arrow-sm align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-3-2.png" alt="PEEK 3D Printers"></div>
                                    <div class="pace-inner-title">PEEK 3D<br>Printers</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow pace-arrow-sm align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-highlight pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-3-3.png" alt="Industrial FDM 3D Printers"></div>
                                    <div class="pace-inner-title">Industrial<br>FDM 3D<br>Printers</div>
                                    <div class="pace-chevron"><i class="fa-solid fa-chevron-right"></i></div>
                                </div>
                                <div class="pace-arrow pace-arrow-sm align-self-center"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="pace-inner-card pace-normal pace-card-sm">
                                    <div class="pace-inner-img-wrapper"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/pace-3-4.png" alt="Ready-To-Use Part"></div>
                                    <div class="pace-inner-title text-center w-100">Ready-To-Use<br>Part</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Banner -->
                <div class="pace-banner mt-5 d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="d-flex align-items-center mb-3 mb-md-0" style="gap: 15px;">
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/use-icon.png" alt="Target Icon" class="pace-banner-icon">
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
                            <h3 class="capex-card-title text-center">3D Scanners<br><span style="color: #000;">for Automotive</span></h3>

                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-1-1.png" alt="3D Scanners" class="img-fluid my-3 capex-main-img">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="3d-scanners-in-india.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-1-2.png" alt="Handheld"></div>
                                        <div class="capex-inner-text-container flex-grow-1">
                                            <div class="capex-inner-title text-dark">Handheld Laser<br>3D Scanners</div>
                                        </div>
                                        <div class="capex-inner-subtitle text-end me-2">FreeScan<br>Omni</div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon"></i>
                                    </div>
                                </a>
                                <a href="3d-scanners-in-india.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-1-3.png" alt="Optical"></div>
                                        <div class="capex-inner-text-container flex-grow-1">
                                            <div class="capex-inner-title text-dark">Optical 3D<br>Scanners</div>
                                        </div>
                                        <div class="capex-inner-subtitle text-end me-2">OptimScan<br>Q12</div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon"></i>
                                    </div>
                                </a>
                                <a href="3d-scanners-in-india.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-1-4.png" alt="Tracker"></div>
                                        <div class="capex-inner-text-container flex-grow-1">
                                            <div class="capex-inner-title text-dark">Tracker-Based<br>Scanning</div>
                                        </div>
                                        <div class="capex-inner-subtitle text-end me-2">FreeScan<br>Trak Nova</div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon"></i>
                                    </div>
                                </a>
                                <a href="3d-scanners-in-india.php" class="capex-inner-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-1-5.png" alt="LiDAR"></div>
                                        <div class="capex-inner-text-container flex-grow-1">
                                            <div class="capex-inner-title text-dark">Long-Range<br>LiDAR</div>
                                        </div>
                                        <div class="capex-inner-subtitle text-end me-2">EPIC<br>Wildplantts</div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon"></i>
                                    </div>
                                </a>
                            </div>

                            <a href="3d-scanners-in-india.php" class="capex-btn capex-btn-primary mt-4 text-decoration-none d-flex justify-content-center align-items-center" style="gap: 7px;">
                                <span>EXPLORE AUTOMOTIVE 3D SCANNERS</span> <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="capex-card">
                            <h3 class="capex-card-title text-center">3D Reverse<br>Engineering Software<br><span style="color: #000;">for Automotive</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-2">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>

                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-2-1.png" alt="Reverse Engineering" class="img-fluid my-2 capex-main-img">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="reverse-engineering-software-in-india.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-2-2.png" alt="Design X"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic Design X</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="reverse-engineering-software-in-india.php" class="capex-inner-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-2-3.png" alt="Geomagic for SOLIDWORKS"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">Geomagic for SOLIDWORKS</div>
                                            <div class="capex-inner-desc text-dark mt-1">Dedicated Reverse Engineering Software</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="reverse-engineering-software-in-india.php" class="capex-inner-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-2-4.png" alt="ExactFlat"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title text-dark">ExactFlat</div>
                                            <div class="capex-inner-desc text-dark mt-1">Automotive Sheet Cover / Sheet Material Flattening Software</div>
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
                            <h3 class="capex-card-title text-center">3D Inspection<br>Software<br><span style="color: #000;">for Automotive</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-2">Perform dimensional inspection by comparing scanned automotive components against their original CAD models.</p>

                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-3-1.png" alt="Inspection Software" class="img-fluid my-2 capex-main-img">

                            <div class="capex-inner-list flex-grow-1">
                                <a href="3d-inspection-software-in-india.php" class="capex-inner-item text-decoration-none mb-3">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-3-2.png" alt="Geomagic Control X"></div>
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
                            <h3 class="capex-card-title text-center">3D Printing & Additive<br>Manufacturing<br><span style="color: #000;">for Automotive</span></h3>
                            <p class="capex-card-desc text-center mt-3 mb-4">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>

                            <div class="capex-inner-list flex-grow-1">
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-4-1.png" alt="PEEK 3D Printer"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">PEEK 3D Printer<br>for Automotive<br>Parts</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">FUNMAT PRO<br>310 APOLLO</div>
                                        </div>
                                        <i class="fa-solid fa-arrow-right capex-inner-icon mt-auto"></i>
                                    </div>
                                </a>
                                <a href="industrial-fdm-3d-printers.php" class="capex-inner-item capex-card-4-item text-decoration-none mb-0">
                                    <div class="d-flex align-items-center w-100 capex-inner-content">
                                        <div class="capex-inner-img capex-inner-img-xl"><img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/capex-4-2.png" alt="Large-Format FDM"></div>
                                        <div class="capex-inner-text-container flex-grow-1 pe-2">
                                            <div class="capex-inner-title capex-card-4-title text-dark">Large-Format<br>Industrial FDM<br>Printers</div>
                                            <div class="capex-inner-desc capex-card-4-desc text-dark mt-1">Large-format FDM solutions for prototypes, tooling, fixtures and manufacturing applications.</div>
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
                
                <!-- Top Right Image -->
                <div class="opex-corner-img d-none d-lg-block">
                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/opex-image.png" alt="OPEX Facility" class="img-fluid">
                </div>

                <!-- Header -->
                <div class="row mb-5">
                    <div class="col-lg-7">
                        <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                            <div class="capex-tag">OPEX Engineering Services</div>
                            <div class="opex-tag-line ms-3"></div>
                        </div>
                        <h2 class="opex-main-title">Automotive Engineering Services <span style="color: #FF931E;">(OPEX)</span></h2>
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/result-1.png" alt="Share Your RFQ" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Share Your RFQ</div>
                        <div class="opex-workflow-desc mt-2">Send your component, application and expected deliverables.</div>
                    </div>
                    
                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>
                    
                    <!-- Workflow 2 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">2</div>
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/result-2.png" alt="Receive a Proposal" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive a Proposal</div>
                        <div class="opex-workflow-desc mt-2">We review the requirement and provide a clear quotation.</div>
                    </div>
                    
                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 3 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">3</div>
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/result-3.png" alt="Select the Right Workflow" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Select the Right<br>Workflow</div>
                        <div class="opex-workflow-desc mt-2">We choose the right 3D scanner, software and methodology.</div>
                    </div>

                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 4 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">4</div>
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/result-4.png" alt="On-Site or In-House Execution" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">On-Site or In-House<br>Execution</div>
                        <div class="opex-workflow-desc mt-2">Scanning is completed at your facility or at a Precise3DM centre.</div>
                    </div>
                    
                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 5 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">5</div>
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/result-5.png" alt="Receive Your Deliverables" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Receive Your<br>Deliverables</div>
                        <div class="opex-workflow-desc mt-2">Get a manufacturing-ready CAD model or inspection report.</div>
                    </div>
                    
                    <div class="opex-chevron d-none d-xl-flex align-self-center"><i class="fa-solid fa-chevron-right"></i></div>

                    <!-- Workflow 6 -->
                    <div class="opex-workflow-card" style="flex: 1 1 0%;">
                        <div class="opex-step-number">6</div>
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/result-6.png" alt="Pay as OPEX" class="opex-workflow-img my-3">
                        <div class="opex-workflow-title">Pay as OPEX</div>
                        <div class="opex-workflow-desc mt-2">Pay against invoice based on agreed terms. Monthly service options are available.</div>
                    </div>
                </div>

                <!-- Bottom 5 Cards -->
                <div class="row g-4 mt-2">
                    <!-- Card 1 -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="opex-service-card d-flex flex-column h-100">
                            <h3 class="opex-service-title text-center">Automotive 3D<br>Scanning Services</h3>
                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-1.png" alt="Scanning Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
                            <ul class="opex-list flex-grow-1">
                                <li><i class="fa-solid fa-circle-check"></i> On-site & In-house Scanning</li>
                                <li><i class="fa-solid fa-circle-check"></i> Small to Large Components</li>
                                <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
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
                            <h3 class="opex-service-title text-center">Automotive Reverse<br>Engineering Services</h3>
                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-2.png" alt="Reverse Engineering Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
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
                            <h3 class="opex-service-title text-center">Automotive 3D<br>Inspection Services</h3>
                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-3.png" alt="Inspection Services" class="img-fluid my-4 mx-auto d-block opex-service-img">
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
                            <h3 class="opex-service-title text-center mb-4">Automotive 3D Printing Services</h3>
                            <div class="row flex-grow-1 g-4">
                                <div class="col-md-4">
                                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-4-1.png" alt="PEEK 3D Printing" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-start">PEEK 3D Printing</div>
                                    <div class="opex-print-desc text-start mt-2">High-performance engineering parts and functional automotive applications.</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-4-2.png" alt="Figure 4 DLP" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-start">Figure 4: DLP 3D<br>Printing Service</div>
                                    <div class="opex-print-desc text-start mt-2">High-detail prototypes with excellent surface finish and rapid turnaround.</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-4-3.png" alt="Large Format FDM" class="img-fluid mb-3 opex-print-img">
                                    <div class="opex-print-title text-start">Large-Format FDM 3D Printing</div>
                                    <div class="opex-print-desc text-start mt-2">Large automotive fixtures, tooling, prototype assemblies, dashboards, ducts, body panels and manufacturing aids.</div>
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
                            <h3 class="opex-service-title text-center mb-4">Automotive<br>Benchmarking Services</h3>
                            <div class="d-flex flex-column gap-4 flex-grow-1 mb-3" style="gap: 10px;">
                                <a href="vehicle-teardown-benchmarking-service-in-india.php" class="opex-bench-item text-decoration-none">
                                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-5-1.png" alt="Full Vehicle Teardown">
                                    <div class="opex-bench-title flex-grow-1 mx-3">Full Vehicle<br>Teardown & Digital<br>Benchmarking</div>
                                    <i class="fa-solid fa-arrow-right opex-bench-arrow"></i>
                                </a>
                                <a href="vehicle-occupant-architecture-analysis-service.php" class="opex-bench-item text-decoration-none">
                                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-5-2.png" alt="Vehicle Occupant">
                                    <div class="opex-bench-title flex-grow-1 mx-3">Vehicle Occupant &<br>Architecture Study</div>
                                    <i class="fa-solid fa-arrow-right opex-bench-arrow"></i>
                                </a>
                                <a href="vehicle-scan-to-cad.php" class="opex-bench-item text-decoration-none mb-0">
                                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/automotive-5-3.png" alt="Vehicle Scan-to-CAD">
                                    <div class="opex-bench-title flex-grow-1 mx-3">Vehicle Scan-to-<br>CAD</div>
                                    <i class="fa-solid fa-arrow-right opex-bench-arrow"></i>
                                </a>
                            </div>
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
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/buy-image.png" alt="Buy or Outsource" class="img-fluid mt-auto mx-auto pt-4">
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
                            <li><i class="fa-solid fa-circle-check"></i> Internal NPD & Tool Rooms</li>
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
                            <li><i class="fa-solid fa-circle-check"></i> One-Time Projects & Immediate Needs</li>
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
                            <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/talk-to-expert-image.png" alt="Talk to Expert" class="img-fluid mb-4" style="max-height: 200px;">
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
    <section class="py-4" style="background-color: #f6f6fa; background-image: none !important;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="bg-white" style="border-radius: 20px; overflow: hidden; box-shadow: 0px 4px 9.6px 0px #0000001A;">
                <div class="row g-0">
                    <!-- Left Image Side -->
                    <div class="col-lg-6 position-relative d-flex align-items-center justify-content-center p-4">
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/why-image.png" alt="Why Precise3DM" class="img-fluid" style="max-height: 80%;">
                        <!-- Logo at the bottom left -->
                        <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/precise3dm-logo.png" alt="Precise3DM Logo" class="position-absolute" style="bottom: 30px; left: 30px; max-width: 580px;">
                    </div>
                    
                    <!-- Right Content Side -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-xl-5 w-100">
                            <h2 class="why-title mb-5">Why Automotive Manufacturers<br>Choose <span style="color: #FF931E;">Precise3DM?</span></h2>
                            
                            <ul class="why-list">
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Product purchase and 3D Service both options for Automotive</div>
                                </li>
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
                                    <div class="why-text">3D Scanner, Software & Engineering Services Under One Roof</div>
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
                                    <div class="why-text">Reverse Engineering & Scan-to-CAD Expertise</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Industrial & Engineering 3D Printing Solutions</div>
                                </li>
                                <li>
                                    <div class="why-bullet-col">
                                        <div class="why-bullet"><div class="why-bullet-inner"></div></div>
                                        <div class="why-line"></div>
                                    </div>
                                    <div class="why-text">Advanced 3D Inspection & Quality Control Workflows</div>
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
                                    <div class="why-text">Solutions for OEMs, Tier Suppliers, EV Manufacturers, Tool Rooms & R&D Centres</div>
                                </li>
                            </ul>

                            <div class="mt-4 text-start">
                                <a href="about-us.php" class="capex-btn capex-btn-primary text-decoration-none text-white d-inline-flex justify-content-center align-items-center" style="padding: 15px 40px;">
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
        <div class="container-fluid auto-ind-container">
            <h2 class="partners-title text-center mb-5">Our Technology Partners</h2>
            
            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-1.png" alt="Shining 3D" class="img-fluid partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-2.png" alt="Hexagon" class="img-fluid partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-3.png" alt="ExactFlat" class="img-fluid partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-4.png" alt="TrueProp" class="img-fluid partners-logo" style="max-height: 100px; transform: scale(1.1);">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-5.png" alt="EPIC" class="img-fluid partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="auto-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="contact-inner-container p-4 p-xl-5 position-relative" style="background-image: url('assets/images/blog-26-freescan-trak-nova-5-functionality-in-1-device/contact-bg.png'); background-size: cover; background-position: center; border-radius: 16px;">
                
                <div class="text-center mb-4">
                    <h2 class="contact-main-title">Ready to Digitally Transform <span style="color: #FF931E;">Your Automotive Manufacturing?</span></h2>
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
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-1.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SERVICES</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Tell us about your project and get a customized service quote.</p>
                            <a href="3d-service-request.php" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SERVICES <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-2.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="contact-card-desc mb-4 flex-grow-1">Looking to buy a 3D scanner? Get the best price and expert guidance.</p>
                            <a href="buy-product-form.php" class="contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
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
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
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
        <div id="FAQ" class="container auto-ind-container faq">
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
