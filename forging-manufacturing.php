<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "Digital Manufacturing Solutions for Forging Manufacturing | Precise3DM";
$meta_description =
    "Precise3DM empowers forging manufacturers to capture complex geometries, control dimensional accuracy, optimize tooling, and ensure quality from die to final part.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="digital manufacturing solutions for forging manufacturing, 3D scanning forging industry, forging die inspection, 3D scan to CAD forging, dimensional inspection forged parts, precise3dm">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />

    <!-- Open Graph Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $page_title ?>" />
    <meta property="og:description" content="<?= $meta_description ?>" />
    <meta property="og:image" content="assets/images/dms-for-forging-manufacturing/dmsffm-hero-banner-img.png" />
    <meta property="og:url" content="https://www.precise3dm.com/forging-manufacturing.php" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

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

    <!-- Dedicated Page CSS -->
    <link rel="stylesheet" href="assets/css/forging-manufacturing.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <!-- Site Header -->
    <?php include "includes/header.php"; ?>

    <!-- =========================================================================
         Hero Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="ffm-hero-section">
        <div class="container-fluid ffm-container">
            <div class="row align-items-center">
                
                <!-- Left Side Content -->
                <div class="col-lg-8 col-xl-7">
                    <div class="ffm-hero-content">
                        
                        <!-- Main Title -->
                        <h1 class="ffm-hero-title">
                            Digital Manufacturing Solutions <span class="text-orange">for</span><br>
                            <span class="text-orange">Forging Manufacturing</span>
                        </h1>

                        <!-- Subtitle -->
                        <h2 class="ffm-hero-subtitle">
                            Stronger Parts. Tighter Tolerances. Lower Costs.
                        </h2>

                        <!-- Description Paragraph -->
                        <p class="ffm-hero-desc">
                            Forging processes demand extreme strength and precision. Precise3DM empowers forging manufacturers to capture complex geometries, control dimensional accuracy, optimize tooling, and ensure quality from die to final part.
                        </p>

                        <!-- Highlight Callout Box -->
                        <div class="ffm-hero-highlight-box">
                            <h3 class="ffm-highlight-title">SCAN STRONG. CAPTURE COMPLETE. DELIVER EXCELLENCE.</h3>
                            <p class="ffm-highlight-desc">
                                Advanced 3D scanning and inspection solutions for forged parts and dies ensuring dimensional accuracy, fewer defects, and better performance.
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="ffm-hero-actions">
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" target="_blank" class="btn-ffm-orange">
                                Talk to an Expert
                            </a>
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-ffm-outline">
                                Book a live demo
                            </a>
                        </div>

                        <!-- Bottom Contact Row (Email & Phone) -->
                        <div class="ffm-hero-contact-row">
                            
                            <!-- Email Us -->
                            <div class="ffm-contact-item">
                                <div class="ffm-contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="ffm-contact-info">
                                    <div class="ffm-contact-label">Email Us</div>
                                    <div class="ffm-contact-links">
                                        <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a>
                                        <span class="ffm-contact-sep">|</span>
                                        <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Call us now -->
                            <div class="ffm-contact-item">
                                <div class="ffm-contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="ffm-contact-info">
                                    <div class="ffm-contact-label">Call us now</div>
                                    <div class="ffm-contact-links">
                                        <a href="tel:+919840478347">+91 98404 78347</a>
                                        <span class="ffm-contact-sep">|</span>
                                        <a href="tel:+916374406179">+91 63744 06179</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Right Side Empty (Background Image showcases the operator scanning the forging die) -->
                <div class="col-lg-4 col-xl-5">
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         Hero Stat / Status Section
         ========================================================================= -->
    <section class="ffm-stat-section py-5">
        <div class="container-fluid ffm-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center ffm-stat-row">

                <!-- Stat 1 -->
                <div class="ffm-stat-item d-flex align-items-center">
                    <div class="ffm-stat-icon me-3">
                        <img src="assets/images/dms-for-forging-manufacturing/hero-stat-1.svg" alt="10+ Years of Expertise">
                    </div>
                    <div class="ffm-stat-content">
                        <div class="ffm-stat-title">10+</div>
                        <div class="ffm-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="ffm-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="ffm-stat-item d-flex align-items-center">
                    <div class="ffm-stat-icon me-3">
                        <img src="assets/images/dms-for-forging-manufacturing/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="ffm-stat-content">
                        <div class="ffm-stat-title">250+</div>
                        <div class="ffm-stat-subtitle">Scanners sold</div>
                        <div class="ffm-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="ffm-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="ffm-stat-item d-flex align-items-center">
                    <div class="ffm-stat-icon me-3">
                        <img src="assets/images/dms-for-forging-manufacturing/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="ffm-stat-content">
                        <div class="ffm-stat-title">60+</div>
                        <div class="ffm-stat-subtitle">Scan-based applications</div>
                        <div class="ffm-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="ffm-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="ffm-stat-item d-flex align-items-center">
                    <div class="ffm-stat-icon me-3">
                        <img src="assets/images/dms-for-forging-manufacturing/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="ffm-stat-content">
                        <div class="ffm-stat-title">8+</div>
                        <div class="ffm-stat-subtitle">Direct locations</div>
                        <div class="ffm-stat-desc">across India</div>
                    </div>
                </div>

                <div class="ffm-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="ffm-stat-item d-flex align-items-center">
                    <div class="ffm-stat-icon me-3">
                        <img src="assets/images/dms-for-forging-manufacturing/hero-stat-5.svg" alt="15+ Countries">
                    </div>
                    <div class="ffm-stat-content">
                        <div class="ffm-stat-title">15+</div>
                        <div class="ffm-stat-subtitle">Countries served</div>
                        <div class="ffm-stat-desc">Global 3D services</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         Challenges with Conventional Processes in Forging Manufacturing Section
         ========================================================================= -->
    <section class="ffm-cwc-section">
        <div class="container-fluid ffm-container">
            <h2 class="ffm-cwc-section-title">Challenges with Conventional Processes in Forging Manufacturing</h2>
            
            <div class="ffm-cwc-wrapper">
                <div class="row gx-4 gy-4">
                    
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="ffm-cwc-card">
                            <div class="ffm-cwc-cross-icon">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="ffm-cwc-header">
                                <h3>Manual Measurement for<br>Forged Parts</h3>
                            </div>
                            <img src="assets/images/dms-for-forging-manufacturing/cwc-img1.png" alt="Manual Measurement for Forged Parts" class="ffm-cwc-img">
                            <ul class="ffm-cwc-list">
                                <li>Very large parts are difficult to measure on-site</li>
                                <li>Time-consuming & labor intensive</li>
                                <li>Limited access to critical areas</li>
                                <li>Low point density & inconsistent data</li>
                                <li>Longer turnaround time</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="ffm-cwc-card">
                            <div class="ffm-cwc-cross-icon">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="ffm-cwc-header">
                                <h3>Conventional Forging<br>Processes</h3>
                            </div>
                            <img src="assets/images/dms-for-forging-manufacturing/cwc-img2.png" alt="Conventional Forging Processes" class="ffm-cwc-img">
                            <ul class="ffm-cwc-list">
                                <li>Long tooling & fixture development</li>
                                <li>Multiple trial-and-error cycles</li>
                                <li>Difficulty in achieving tight tolerances</li>
                                <li>Material waste & higher costs</li>
                                <li>Slower time-to-market</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="ffm-cwc-card">
                            <div class="ffm-cwc-cross-icon">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="ffm-cwc-header">
                                <h3>Conventional CMM<br>Inspection</h3>
                            </div>
                            <img src="assets/images/dms-for-forging-manufacturing/cwc-img3.png" alt="Conventional CMM Inspection" class="ffm-cwc-img">
                            <ul class="ffm-cwc-list">
                                <li>CMM size limitations</li>
                                <li>Difficult to move or fixture large components</li>
                                <li>Point-by-point measurement only</li>
                                <li>Long inspection cycles</li>
                                <li>Higher dependence on skilled operators</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="ffm-cwc-card">
                            <div class="ffm-cwc-cross-icon">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="ffm-cwc-header">
                                <h3>Impact on Your Business</h3>
                            </div>
                            <img src="assets/images/dms-for-forging-manufacturing/cwc-img4.png" alt="Impact on Your Business" class="ffm-cwc-img">
                            <ul class="ffm-cwc-list">
                                <li>Higher rejection rate</li>
                                <li>Increased rework & scrap</li>
                                <li>Delays in deliveries</li>
                                <li>Higher tooling maintenance costs</li>
                                <li>Reduced profitability</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         End-To-End Digital Manufacturing Solutions for Forging Section
         ========================================================================= -->
    <section class="ffm-ete-section">
        <div class="container-fluid ffm-container">
            
            <!-- Header Row -->
            <div class="row align-items-center mb-4">
                <div class="col-lg-7 col-md-12">
                    <h2 class="ffm-ete-title">End-To-End Digital Manufacturing<br>Solutions for Forging</h2>
                    <h3 class="ffm-ete-subtitle">From Scan to Manufacturing-Ready Data</h3>
                    <p class="ffm-ete-flow">Capture | Reverse Engineer | 3D Print | 3D Inspect | Support Manufacturing</p>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="ffm-ete-top-right-container">
                        <img src="assets/images/dms-for-forging-manufacturing/ete-right-img.png" alt="Digital Manufacturing for Forging" class="ffm-ete-top-right-img">
                        <div class="ffm-ete-top-right-overlay">
                            <div class="ffm-ete-overlay-title">DIGITAL DATA<br>FOR A STRONGER<br>FORGING TOMORROW</div>
                            <div class="ffm-ete-overlay-line"></div>
                            <div class="ffm-ete-overlay-list">SCAN. DESIGN. PRINT. INSPECT. SUPPORT MANUFACTURING</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Row -->
            <div class="row gx-3">
                
                <!-- Card 1 -->
                <div class="col-lg col-md-6 mb-4 ffm-ete-col">
                    <div class="ffm-ete-card">
                        <div class="ffm-ete-card-header">
                            <span class="ffm-ete-num">1</span>
                            <div>
                                <h4>3D SCAN</h4>
                                <p>Capture Reality.<br>Any Size.</p>
                            </div>
                        </div>
                        <p class="ffm-ete-desc">Scan forged components, dies, tools or assemblies on-site or in-house using high-accuracy 3D scanners from small to large parts.</p>
                        <img src="assets/images/dms-for-forging-manufacturing/ete-card1-img.png" alt="3D Scan" class="ffm-ete-card-main-img mt-auto">
                        <div class="ffm-ete-bottom-icons-row mt-auto">
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card1-icon1.png" alt="Small to Large Parts"></div>
                                <span>Small to<br>Large<br>Parts</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card1-icon2.png" alt="High Accuracy"></div>
                                <span>High<br>Accuracy</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card1-icon3.png" alt="On-Site or In-Plant Scanning"></div>
                                <span>On-Site or<br>In-Plant<br>Scanning</span>
                            </div>
                        </div>
                    </div>
                    <div class="ffm-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg col-md-6 mb-4 ffm-ete-col">
                    <div class="ffm-ete-card">
                        <div class="ffm-ete-card-header">
                            <span class="ffm-ete-num">2</span>
                            <div>
                                <h4>CREATE CAD</h4>
                                <p>From Scan to<br>Engineering Model.</p>
                            </div>
                        </div>
                        <p class="ffm-ete-desc">Convert scan data into precise, editable CAD models for forging, die design, simulation, reverse engineering, part improvement or new development.</p>
                        <img src="assets/images/dms-for-forging-manufacturing/ete-card2-img.png" alt="Create CAD" class="ffm-ete-card-main-img mt-auto">
                        <div class="ffm-ete-bottom-icons-row mt-auto">
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card2-icon1.png" alt="Accurate CAD Models"></div>
                                <span>Accurate<br>CAD Models</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card2-icon2.png" alt="Design Optimization"></div>
                                <span>Design<br>Optimization</span>
                            </div>
                        </div>
                        <div class="ffm-ete-bottom-icons-row">
                            <div class="ffm-ete-icon-box wide">
                                <div class="ffm-ete-icon-badge mx-auto"><img src="assets/images/dms-for-forging-manufacturing/ete-card2-icon3.png" alt="Manufacturing Ready Files"></div>
                                <span>Manufacturing<br>Ready Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="ffm-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg col-md-6 mb-4 ffm-ete-col">
                    <div class="ffm-ete-card">
                        <div class="ffm-ete-card-header">
                            <span class="ffm-ete-num">3</span>
                            <div>
                                <h4>3D PRINT</h4>
                                <p>Prototypes, Tools<br>& Patterns</p>
                            </div>
                        </div>
                        <p class="ffm-ete-desc">3D print functional parts, patterns, jigs, fixtures, dies or end-use components using FDM, DLP or high-performance materials like PEEK for visualization, fitment testing or low/medium volume applications.</p>
                        <img src="assets/images/dms-for-forging-manufacturing/ete-card3-img.png" alt="3D Print" class="ffm-ete-card-main-img mt-auto">
                        <div class="ffm-ete-bottom-icons-row mt-auto">
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card3-icon1.png" alt="FDM"></div>
                                <span>FDM</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card3-icon2.png" alt="DLP"></div>
                                <span>DLP</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card3-icon3.png" alt="PEEK & Engineering"></div>
                                <span>PEEK &<br>Engineering</span>
                            </div>
                        </div>
                    </div>
                    <div class="ffm-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg col-md-6 mb-4 ffm-ete-col">
                    <div class="ffm-ete-card">
                        <div class="ffm-ete-card-header">
                            <span class="ffm-ete-num">4</span>
                            <div>
                                <h4>3D INSPECT</h4>
                                <p>Verify Dimensions &<br>Quality</p>
                            </div>
                        </div>
                        <p class="ffm-ete-desc">Scan and inspect printed or existing forged parts. Compare with CAD, perform deviation analysis, GD&T and quality reports to ensure accuracy before forging or production.</p>
                        <img src="assets/images/dms-for-forging-manufacturing/ete-card4-img.png" alt="3D Inspect" class="ffm-ete-card-main-img mt-auto">
                        <div class="ffm-ete-bottom-icons-row mt-auto">
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card4-icon1.png" alt="3D Inspection"></div>
                                <span>3D<br>Inspection</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card4-icon2.png" alt="Deviation Analysis"></div>
                                <span>Deviation<br>Analysis</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card4-icon3.png" alt="GD&T Reports"></div>
                                <span>GD&T<br>Reports</span>
                            </div>
                        </div>
                    </div>
                    <div class="ffm-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg col-md-6 mb-4 ffm-ete-col">
                    <div class="ffm-ete-card">
                        <div class="ffm-ete-card-header">
                            <span class="ffm-ete-num">5</span>
                            <div>
                                <h4>SUPPORT<br>MANUFACTURING</h4>
                                <p>Data for Conventional<br>Forging</p>
                            </div>
                        </div>
                        <p class="ffm-ete-desc">Deliver accurate CAD, drawings and inspection data to support your forging process. If required, use 3D printed parts directly (for prototypes, low volume or special applications) or combine additive manufacturing with conventional forging.</p>
                        <img src="assets/images/dms-for-forging-manufacturing/ete-card5-img.png" alt="Support Manufacturing" class="ffm-ete-card-main-img mt-auto">
                        <div class="ffm-ete-bottom-icons-row mt-auto">
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card5-icon1.png" alt="Support your Foundry/Forging Partner"></div>
                                <span>Support your<br>Foundry/Forging<br>Partner</span>
                            </div>
                            <div class="ffm-ete-icon-box">
                                <div class="ffm-ete-icon-badge"><img src="assets/images/dms-for-forging-manufacturing/ete-card5-icon2.png" alt="Drawings & Data"></div>
                                <span>Drawings<br>& Data</span>
                            </div>
                        </div>
                        <div class="ffm-ete-bottom-icons-row">
                            <div class="ffm-ete-icon-box wide">
                                <div class="ffm-ete-icon-badge mx-auto"><img src="assets/images/dms-for-forging-manufacturing/ete-card5-icon3.png" alt="Prototypes & Hybrid Manufacturing"></div>
                                <span>Prototypes & Hybrid<br>Manufacturing</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
 
    <!-- =========================================================================
         Build Your In-House Digital Manufacturing Capability (CAPEX) Section
         ========================================================================= -->
    <section class="ffm-capex-section">
        <div class="container-fluid ffm-container">
            
            <div class="ffm-capex-header">
                <div class="ffm-capex-top-label">
                    <span>CAPEX Engineering Services</span>
                    <div class="ffm-capex-line"></div>
                </div>
                <h2 class="ffm-capex-title">Build Your In-House Digital Manufacturing Capability <span class="ffm-text-orange">(CAPEX)</span></h2>
                <p class="ffm-capex-desc">Invest in advanced digital manufacturing technologies and establish an in-house engineering and quality-control department.</p>
            </div>

            <!-- Top Workflow -->
            <div class="ffm-capex-workflow d-none d-xl-flex">
                <div class="ffm-capex-step">
                    <div class="ffm-capex-step-num">1</div>
                    <div class="ffm-capex-step-text">
                        <strong>Capture</strong>
                        <span>Accurate 3D Data</span>
                    </div>
                </div>
                <div class="ffm-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="ffm-capex-step">
                    <div class="ffm-capex-step-num">2</div>
                    <div class="ffm-capex-step-text">
                        <strong>Engineer</strong>
                        <span>Create &amp; Optimize</span>
                    </div>
                </div>
                <div class="ffm-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="ffm-capex-step">
                    <div class="ffm-capex-step-num">3</div>
                    <div class="ffm-capex-step-text">
                        <strong>Validate</strong>
                        <span>Inspect &amp; Ensure</span>
                    </div>
                </div>
                <div class="ffm-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="ffm-capex-step">
                    <div class="ffm-capex-step-num">4</div>
                    <div class="ffm-capex-step-text">
                        <strong>Manufacture</strong>
                        <span>Produce &amp; Deliver</span>
                    </div>
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="ffm-capex-cards-grid">
                
                <!-- Card 1: 3D Scanners -->
                <div class="ffm-capex-card">
                    <h3 class="ffm-capex-card-title"><span class="ffm-text-orange">3D Scanners</span><br>for Forging Manufacturing</h3>
                    <img src="assets/images/dms-for-forging-manufacturing/capex-card1-img1.png" alt="3D Scanners for Forging Manufacturing" class="ffm-capex-hero-img">
                    
                    <div class="ffm-capex-nested border-gray mt-2">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card1-img2.png" alt="Optical 3D Scanners">
                            <span><strong>Optical 3D<br>Scanners</strong></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center text-end">
                            <a href="freescan-q9.php" class="d-flex justify-content-end align-items-center mb-1">
                                <span class="ffm-text-orange me-2">FreeScan<br>Q9</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="ffm-capex-nested border-gray mt-2">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card1-img3.png" alt="Optical 3D Scanners">
                            <span><strong>Optical 3D<br>Scanners</strong></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center text-end">
                            <a href="optimscan-q12.php" class="d-flex justify-content-end align-items-center mb-1">
                                <span class="ffm-text-orange me-2">OptimScan<br>Q12</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="ffm-capex-nested border-gray mt-2">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card1-img4.png" alt="Automatic Desktop 3D Scanner">
                            <span><strong>Automatic<br>Desktop 3D<br>Scanner</strong></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center text-end">
                            <a href="automatic-desktop-3d-scanner.php" class="d-flex justify-content-end align-items-center">
                                <span class="ffm-text-orange me-2">AutoScan<br>Inspect 2</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="ffm-capex-nested border-gray mt-2 mb-3">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card1-img5.png" alt="Handheld Laser 3D Scanners">
                            <span><strong>Handheld Laser<br>3D Scanners</strong></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center text-end">
                            <a href="freescan-omni.php" class="d-flex justify-content-end align-items-center">
                                <span class="ffm-text-orange me-2">FreeScan<br>Omni</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <a href="3d-scanners-in-india.php" class="ffm-capex-btn solid mt-auto">Explore 3D Scanners <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 2: 3D Reverse Engineering Software -->
                <div class="ffm-capex-card">
                    <h3 class="ffm-capex-card-title"><span class="ffm-text-orange">3D Reverse<br>Engineering Software</span><br>for Forging Manufacturing</h3>
                    <p class="ffm-capex-card-desc">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>
                    <img src="assets/images/dms-for-forging-manufacturing/capex-card2-img1.png" alt="Reverse Engineering Software" class="ffm-capex-hero-img">
                    
                    <div class="ffm-capex-nested border-orange mt-2">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card2-img2.png" alt="Geomagic Design X">
                            <span><strong>Geomagic Design X</strong><br><small>Dedicated Reverse Engineering<br>Software</small></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center">
                            <a href="reverse-engineering-geomagic-design-x.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="ffm-capex-nested border-orange mt-2">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card2-img3.png" alt="Geomagic for SOLIDWORKS">
                            <span><strong>Geomagic for SOLIDWORKS</strong><br><small>Dedicated Reverse Engineering<br>Software</small></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center">
                            <a href="geomagic-for-solidworks-reverse-engineering-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="ffm-capex-nested border-orange mt-2 mb-3">
                        <div class="ffm-capex-nested-left">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card2-img4.png" alt="ExactFlat">
                            <span><strong>ExactFlat</strong><br><small>Automotive Sheet Cover / Sheet<br>Material Flattening Software</small></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center">
                            <a href="exactflat.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <a href="reverse-engineering-software-in-india.php" class="ffm-capex-btn outline mt-auto">EXPLORE REVERSE ENGINEERING SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 3: 3D Inspection Software -->
                <div class="ffm-capex-card">
                    <h3 class="ffm-capex-card-title"><span class="ffm-text-orange">3D Inspection<br>Software</span><br>for Forging Manufacturing</h3>
                    <p class="ffm-capex-card-desc">Perform dimensional inspection by comparing scanned automotive components against their original CAD models.</p>
                    <img src="assets/images/dms-for-forging-manufacturing/capex-card3-img1.png" alt="Inspection Software" class="ffm-capex-hero-img">
                    
                    <div class="ffm-capex-nested border-orange mt-2 mb-3">
                        <div class="ffm-capex-nested-left align-items-center">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card3-img2.png" alt="Geomagic Control X">
                            <span><strong>Geomagic Control X</strong><br><small>3D Inspection Software</small></span>
                        </div>
                        <div class="ffm-capex-nested-right align-self-center">
                            <a href="geomagic-control-x-3d-inspection-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="ffm-capex-features">
                        <p>Features:</p>
                        <ul>
                            <li>CAD vs Scan Comparison</li>
                            <li>GD&amp;T</li>
                            <li>First Article Inspection (FAI)</li>
                            <li>Deviation Analysis</li>
                            <li>Colour Deviation Reports</li>
                            <li>Process &amp; Supplier Quality</li>
                            <li>Production QC</li>
                        </ul>
                    </div>

                    <a href="3d-inspection-software-in-india.php" class="ffm-capex-btn outline mt-auto">EXPLORE 3D INSPECTION SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 4: 3D Printing Solutions -->
                <div class="ffm-capex-card">
                    <h3 class="ffm-capex-card-title"><span class="ffm-text-orange">3D Printing Solutions<br>to Replace Hand molds</span><br>for Forging Manufacturing</h3>
                    <p class="ffm-capex-card-desc">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>
                    
                    <div class="ffm-capex-nested border-gray mb-3 mt-3">
                        <div class="ffm-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card4-img1.png" alt="PEEK 3D Printer for High-Performance Jigs & Fixtures" style="max-width: 60px;">
                            <span style="font-size:12px; margin-left: 10px;"><strong>PEEK 3D Printer<br>for High-Performance<br>Jigs &amp; Fixtures</strong><br><small style="color: #64748b;">FUNMAT PRO<br>310 APOLLO</small></span>
                            <div class="ffm-capex-nested-right align-self-center ms-auto">
                                <a href="peek-3d-printing-services.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: #FF931E;"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="ffm-capex-nested border-gray mb-3">
                        <div class="ffm-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-forging-manufacturing/capex-card4-img2.png" alt="Large-Format Industrial FDM Printers" style="max-width: 60px;">
                            <span style="font-size:12px; margin-left: 10px;"><strong>Large-Format<br>Industrial FDM<br>Printers</strong><br><small style="color: #64748b;">For Jigs, Fixtures, Tools,<br>Templates &amp; Prototypes</small></span>
                            <div class="ffm-capex-nested-right align-self-center ms-auto">
                                <a href="industrial-fdm-3d-printers.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: #FF931E;"></i></a>
                            </div>
                        </div>
                    </div>

                    <a href="3d-printing-service-in-india.php" class="ffm-capex-btn outline mt-auto">EXPLORE INDUSTRIAL 3D PRINTERS <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    <!-- OPEX Section -->
    <section class="ffm-opex-section">
        <div class="ffm-container">
            
            <div class="ffm-capex-header">
                <div class="ffm-capex-top-label">
                    <span>OPEX Engineering Services</span>
                    <div class="ffm-capex-line"></div>
                </div>
                <h2 class="ffm-capex-title">3D Scan-based Engineering and 3D Printing Services for Material<br>Forging Manufacturing <span class="ffm-text-orange">(OPEX)</span></h2>
                <p class="ffm-capex-desc mb-2">Bring your forged part, or component to our application lab. We scan your parts, create CAD models and inspection reports to prove measurable value<br>before you invest.</p>
            </div>

            <div class="ffm-opex-divider">
                <span>From RFQ to Results</span>
            </div>

            <!-- 6-Step Workflow -->
            <div class="ffm-opex-workflow-wrapper">
                <div class="ffm-opex-workflow">
                    <div class="ffm-opex-step">
                        <div class="ffm-opex-step-num">1</div>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-icon1.png" alt="Share Your RFQ">
                        <strong>Share Your RFQ</strong>
                        <p>Send your component, application and expected deliverables.</p>
                    </div>
                    <div class="ffm-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                    
                    <div class="ffm-opex-step">
                        <div class="ffm-opex-step-num">2</div>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-icon2.png" alt="Receive a Proposal">
                        <strong>Receive a Proposal</strong>
                        <p>We review the requirement and provide a clear quotation.</p>
                    </div>
                    <div class="ffm-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ffm-opex-step">
                        <div class="ffm-opex-step-num">3</div>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-icon3.png" alt="Select the Right Workflow">
                        <strong>Select the Right Workflow</strong>
                        <p>We choose the right 3D scanner, software and methodology.</p>
                    </div>
                    <div class="ffm-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ffm-opex-step">
                        <div class="ffm-opex-step-num">4</div>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-icon4.png" alt="On-Site or In-House Execution">
                        <strong>On-Site or In-House Execution</strong>
                        <p>Scanning is completed at your facility or at a Precise3DM centre.</p>
                    </div>
                    <div class="ffm-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ffm-opex-step">
                        <div class="ffm-opex-step-num">5</div>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-icon5.png" alt="Receive Your Deliverables">
                        <strong>Receive Your Deliverables</strong>
                        <p>Get a manufacturing-ready CAD model or inspection report.</p>
                    </div>
                    <div class="ffm-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ffm-opex-step">
                        <div class="ffm-opex-step-num">6</div>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-icon6.png" alt="Pay as OPEX">
                        <strong>Pay as OPEX</strong>
                        <p>Pay against invoice based on agreed terms. Monthly service options are available.</p>
                    </div>
                </div>
            </div>

            <!-- Service Cards Grid (3 Cards Top Row) -->
            <div class="ffm-opex-grid ffm-opex-grid-top">
                
                <!-- Card 1 -->
                <div class="ffm-opex-card">
                    <h3 class="ffm-opex-card-title">3D Scanning Services<br>Forging Manufacturing</h3>
                    <img src="assets/images/dms-for-forging-manufacturing/opex-img1.png" alt="3D Scanning Services Forging Manufacturing" class="ffm-opex-hero-img">
                    <ul class="ffm-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> On-site &amp; In-house Scanning</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Large &amp; Heavy Forging</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Complex Geometry Scanning</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Hard-to-Reach Areas</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Inspection &amp; Archiving</li>
                    </ul>
                    <a href="3d-services.php" class="ffm-opex-btn mt-3">LEARN MORE</a>
                </div>

                <!-- Card 2 -->
                <div class="ffm-opex-card">
                    <h3 class="ffm-opex-card-title">Reverse Engineering Services<br>Forging Manufacturing</h3>
                    <img src="assets/images/dms-for-forging-manufacturing/opex-img2.png" alt="Reverse Engineering Services Forging Manufacturing" class="ffm-opex-hero-img ffm-contain-img">
                    <ul class="ffm-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Scan-to-CAD</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Manufacturing-ready CAD</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> STEP / IGES / Parasolid</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> 2D Manufacturing Drawings</li>
                    </ul>
                    <a href="3d-Reverse-Engineering-Services-in-india.php" class="ffm-opex-btn mt-3">LEARN MORE</a>
                </div>

                <!-- Card 3 -->
                <div class="ffm-opex-card">
                    <h3 class="ffm-opex-card-title">3D Inspection Services<br>Forging Manufacturing</h3>
                    <img src="assets/images/dms-for-forging-manufacturing/opex-img5.png" onerror="this.onerror=null;this.src='assets/images/dms-for-railway-locomotive-industry/opex-img3.png';" alt="3D Inspection Services Forging Manufacturing" class="ffm-opex-hero-img ffm-contain-img">
                    <ul class="ffm-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Dimensional Inspection</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> GD&amp;T Inspection</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> FAI / PPAP Support</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> First Article Inspection</li>
                    </ul>
                    <a href="3d-inspection-service.php" class="ffm-opex-btn mt-3">LEARN MORE</a>
                </div>

            </div>
            
            <!-- Service Cards Grid (2 Cards Bottom Row - Centered) -->
            <div class="ffm-opex-grid ffm-opex-grid-bottom mt-4">
                
                <!-- Card 4 -->
                <div class="ffm-opex-card">
                    <h3 class="ffm-opex-card-title">Forging Analysis &amp; Optimization<br>Forging Manufacturing</h3>
                    <img src="assets/images/dms-for-forging-manufacturing/opex-img3.png" alt="Forging Analysis & Optimization Forging Manufacturing" class="ffm-opex-hero-img ffm-contain-img">
                    <ul class="ffm-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Flow Simulation Support</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Die Fill &amp; Defect Prediction</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Springback Analysis</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Die Tryout Optimization</li>
                    </ul>
                    <a href="3d-services.php" class="ffm-opex-btn mt-3">LEARN MORE</a>
                </div>

                <!-- Card 5 -->
                <div class="ffm-opex-card">
                    <h3 class="ffm-opex-card-title">Tooling Maintenance Services<br>Forging Manufacturing</h3>
                    <img src="assets/images/dms-for-forging-manufacturing/opex-img4.png" alt="Tooling Maintenance Services Forging Manufacturing" class="ffm-opex-hero-img ffm-contain-img">
                    <ul class="ffm-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Die Wear Analysis</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Die Repair Validation</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Crack &amp; Damage Detection</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Die Life Extension</li>
                    </ul>
                    <a href="3d-services.php" class="ffm-opex-btn mt-3">LEARN MORE</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Buy or Outsource Section -->
    <section class="ffm-boo-section">
        <div class="ffm-container">
            <div class="ffm-boo-grid">
                
                <!-- Card 1 (Dark) -->
                <div class="ffm-boo-card dark">
                    <h2 class="ffm-boo-title"><span style="color: var(--ffm-primary-orange, #FF931E);">BUY OR<br>OUTSOURCE?</span><br>CHOOSE WHAT<br>WORKS<br>BEST FOR YOUR<br>BUSINESS</h2>
                    <div class="ffm-boo-icons-row">
                        <img src="assets/images/dms-for-forging-manufacturing/opex-vector1.png" alt="Buy">
                        <span>&#8594;</span>
                        <img src="assets/images/dms-for-forging-manufacturing/opex-vector2.png" alt="Outsource">
                    </div>
                </div>

                <!-- Card 2 (CAPEX) -->
                <div class="ffm-boo-card ffm-position-relative" style="background:#fff7ed; border-color:#fed7aa;">
                    <h3 class="ffm-boo-card-title red">BUILD IN-HOUSE (CAPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="ffm-boo-list green-check">
                        <li><i class="fa-solid fa-check"></i> Frequent Scanning &amp; Reverse Engineering</li>
                        <li><i class="fa-solid fa-check"></i> Daily QC &amp; Inspection</li>
                        <li><i class="fa-solid fa-check"></i> Internal NPD &amp; Tool Rooms</li>
                        <li><i class="fa-solid fa-check"></i> Reduce Rework &amp; Scrap</li>
                        <li><i class="fa-solid fa-check"></i> Long-Term Capability Building</li>
                    </ul>
                    <a href="3d-products.php" class="ffm-boo-btn orange">EXPLORE CAPEX SOLUTIONS</a>
                    
                    <!-- OR Badge -->
                    <div class="ffm-boo-or-badge">OR</div>
                </div>

                <!-- Card 3 (OPEX) -->
                <div class="ffm-boo-card" style="background:#f0fdf4; border-color:#bbf7d0;">
                    <h3 class="ffm-boo-card-title green">USE OUR ENGINEERING TEAM (OPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="ffm-boo-list green-check-circle">
                        <li><i class="fa-regular fa-circle-check"></i> One-Time Projects &amp; Immediate Needs</li>
                        <li><i class="fa-regular fa-circle-check"></i> Technology Evaluation</li>
                        <li><i class="fa-regular fa-circle-check"></i> Specialized Inspections</li>
                        <li><i class="fa-regular fa-circle-check"></i> Forging Analysis &amp; Optimization</li>
                        <li><i class="fa-regular fa-circle-check"></i> Occasional Reverse Engineering</li>
                    </ul>
                    <a href="3d-services.php" class="ffm-boo-btn orange">EXPLORE ENGINEERING SERVICES</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="ffm-why-choose-section">
        <div class="ffm-container">
            <div class="ffm-why-choose-card">
                
                <div class="ffm-why-choose-left">
                    <img src="assets/images/dms-for-forging-manufacturing/wc-left-img.png" alt="Why Forging Companies Choose Precise3DM">
                    <img src="assets/images/dms-for-forging-manufacturing/wc-left-logo.png" alt="Precise3DM Logo" class="ffm-why-choose-logo">
                </div>

                <!-- Content Side -->
                <div class="ffm-why-choose-content">
                    <h2 class="ffm-why-choose-title">Why Forging Companies Choose<br><span>Precise3DM?</span></h2>
                    <ul class="ffm-why-choose-list">
                        <li><div class="ffm-why-choose-custom-icon"></div> Complete digital manufacturing solutions provider</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Industrial 3D scanners for any site components</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Reverse Engineering Scan-to-CAD expertise</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Meterology &amp; Engineering software expertise</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Industrial 3D printing solutions for manufacturing aids</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Pan-India Sales, Service, Training &amp; Technical Support</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Advanced 3D inspections &amp; quality control workflows</li>
                        <li><div class="ffm-why-choose-custom-icon"></div> Solution for OEMs, machine builders, tool rooms &amp; maintenance teams</li>
                    </ul>
                    <a href="About_us.php" class="ffm-why-choose-btn">Know More About Precise 3DM</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Technology Partners Section -->
    <section class="ffm-otp-section">
        <div class="ffm-container">
            <h2 class="ffm-otp-title text-center">Our Technology Partners</h2>
            <div class="ffm-otp-logos">
                <img src="assets/images/dms-for-forging-manufacturing/otp-logo1.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/otp-logo1.png';" alt="Shining 3D">
                <img src="assets/images/dms-for-forging-manufacturing/otp-logo2.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/otp-logo2.png';" alt="Hexagon">
                <img src="assets/images/dms-for-forging-manufacturing/otp-logo3.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/otp-logo3.png';" alt="ExactFlat">
                <img src="assets/images/dms-for-forging-manufacturing/otp-logo4.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/otp-logo4.png';" alt="TrueProp">
                <img src="assets/images/dms-for-forging-manufacturing/otp-logo5.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/otp-logo5.png';" alt="EPIC">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="ffm-cta-section">
        <div class="ffm-container">
            <div class="ffm-cta-wrapper">
                
                <div class="ffm-cta-top">
                    <h2 class="ffm-cta-title">Ready to Accelerate Innovation in <span style="color: var(--ffm-primary-orange, #FF931E);">Forging Manufacturing?</span></h2>
                    <div class="ffm-cta-btngroup">
                        <a href="3d-products.php" class="ffm-btn-orange">3D Products</a>
                        <a href="3d-services.php" class="ffm-btn-orange">3D Services</a>
                    </div>
                </div>

                <div class="ffm-cta-divider"></div>

                <div class="ffm-cta-grid">
                    <!-- Card 1 -->
                    <div class="ffm-cta-card">
                        <div class="ffm-cta-card-header">
                            <img src="assets/images/dms-for-forging-manufacturing/cta-card1-img.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/cta-card1-img.png';" alt="Get Quote For Services">
                            <h3>GET QUOTE<br><span>FOR SERVICES</span></h3>
                        </div>
                        <p>Tell us about your project and get a customized service quote.</p>
                        <a href="Get-3d-scan-service-quote.php" class="ffm-cta-card-btn">GET QUOTE FOR SERVICES <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="ffm-cta-card">
                        <div class="ffm-cta-card-header">
                            <img src="assets/images/dms-for-forging-manufacturing/cta-card2-img.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/cta-card2-img.png';" alt="Get Quote For Scanners">
                            <h3>GET QUOTE<br><span>FOR SCANNERS</span></h3>
                        </div>
                        <p>Looking to buy a 3D scanner? Get the best price and expert guidance.</p>
                        <a href="scanning-solution-form.php" class="ffm-cta-card-btn">GET QUOTE FOR SCANNERS <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="ffm-cta-card">
                        <div class="ffm-cta-card-header">
                            <img src="assets/images/dms-for-forging-manufacturing/cta-card3-img.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/cta-card3-img.png';" alt="Meet Us Live">
                            <h3>MEET US LIVE<br><span>ONLINE NOW</span></h3>
                        </div>
                        <p>Connect with our experts instantly for live guidance and support.</p>
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="ffm-cta-card-btn">MEET US LIVE ONLINE NOW <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="ffm-cta-card">
                        <div class="ffm-cta-card-header">
                            <img src="assets/images/dms-for-forging-manufacturing/cta-card4-img.png" onerror="this.onerror=null;this.src='assets/images/dms-for-tool-die-manufacturing/cta-card4-img.png';" alt="Book Demo">
                            <h3>BOOK DEMO<br><span>FOR SCANNERS</span></h3>
                        </div>
                        <p>Schedule a live demo and experience the power of Precise3DM scanners.</p>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="ffm-cta-card-btn">BOOK DEMO FOR SCANNERS <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Site Footer -->
    <?php include "includes/footer.php"; ?>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

</body>
</html>
