<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title = "Digital Manufacturing Solutions for Sheet Metal & Metal Fabrication | Precise3DM";
$meta_description = "Precise3DM empowers sheet metal and metal fabrication manufacturers to capture real-world conditions, reduce rework, streamline fabrication, and ensure perfect fit-up and assembly.";
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
    <link rel="stylesheet" href="assets/css/digital-manufacturing-solutions-for-sheet-metal-metal-fabrication.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

        <!-- Main Content Starts Here -->
    <section class="smmf-ind-hero-section">
        <div class="container-fluid smmf-ind-container">
            <div class="row align-items-center position-relative">
                <!-- Left Side Content -->
                <div class="col-lg-8 col-xl-7">
                    <h1 class="smmf-hero-main-title text-white">Digital Manufacturing Solutions <span class="text-orange">for</span><br><span class="text-orange">Sheet Metal &amp; Metal Fabrication</span></h1>
                    <h3 class="smmf-hero-subtitle text-white">Accurate. Efficient. Production-Ready.</h3>
                    <p class="smmf-hero-desc text-white">Precise3DM empowers sheet metal and metal fabrication manufacturers to capture real-world conditions, reduce rework, streamline fabrication, and ensure perfect fit-up and assembly—every time.</p>

                    <!-- Workflow Highlight Box -->
                    <div class="smmf-hero-badge-box">
                        <div class="smmf-hero-badge-title">SCAN. DESIGN. FABRICATE. DELIVER.</div>
                        <div class="smmf-hero-badge-desc">Complete digital workflow for sheet metal &amp; fabrication excellence.</div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="smmf-hero-buttons d-flex flex-wrap" style="gap: 15px;">
                        <a href="contact-us.php" class="btn-talk">Talk to an Expert</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-demo">Book a live demo</a>
                    </div>

                    <!-- Bottom Contact Info (Email and Phone Side by Side) -->
                    <div class="smmf-hero-contacts">
                        <!-- Email Us -->
                        <div class="smmf-contact-item">
                            <div class="smmf-contact-icon email-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="smmf-contact-info">
                                <div class="smmf-contact-title">Email Us</div>
                                <div class="smmf-contact-details">
                                    <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- Call us now -->
                        <div class="smmf-contact-item">
                            <div class="smmf-contact-icon phone-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="smmf-contact-info">
                                <div class="smmf-contact-title">Call us now</div>
                                <div class="smmf-contact-details">
                                    <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Spacer (Background contains the image) -->
                <div class="col-lg-4 col-xl-5 d-none d-lg-block">
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Stat Section -->
    <section class="smmf-stat-section py-5">
        <div class="container-fluid smmf-ind-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center smmf-stat-row">

                <!-- Stat 1 -->
                <div class="smmf-stat-item d-flex align-items-center">
                    <div class="smmf-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-1.svg" alt="10+ Years">
                    </div>
                    <div class="smmf-stat-content">
                        <div class="smmf-stat-title">10+</div>
                        <div class="smmf-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="smmf-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="smmf-stat-item d-flex align-items-center">
                    <div class="smmf-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="smmf-stat-content">
                        <div class="smmf-stat-title">250+</div>
                        <div class="smmf-stat-subtitle">Scanners sold</div>
                        <div class="smmf-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="smmf-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="smmf-stat-item d-flex align-items-center">
                    <div class="smmf-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="smmf-stat-content">
                        <div class="smmf-stat-title">60+</div>
                        <div class="smmf-stat-subtitle">Scan-based applications</div>
                        <div class="smmf-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="smmf-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="smmf-stat-item d-flex align-items-center">
                    <div class="smmf-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="smmf-stat-content">
                        <div class="smmf-stat-title">8+</div>
                        <div class="smmf-stat-subtitle">Direct locations</div>
                        <div class="smmf-stat-desc">across India</div>
                    </div>
                </div>

                <div class="smmf-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="smmf-stat-item d-flex align-items-center">
                    <div class="smmf-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-5.svg" alt="15+ Countries">
                    </div>
                    <div class="smmf-stat-content">
                        <div class="smmf-stat-title">15+</div>
                        <div class="smmf-stat-subtitle">Countries served</div>
                        <div class="smmf-stat-desc">Global 3D services</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Challenges Section -->
    <section class="smmf-cwc-section">
        <div class="smmf-container text-center">
            <h2 class="smmf-section-title">Challenges with Conventional Processes in Sheet Metal &<br>Metal Fabrication Manufacturing</h2>
            
            <div class="smmf-cwc-wrapper">
                <div class="row gx-4 gy-4">
                    
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="smmf-cwc-card">
                            <div class="smmf-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="smmf-cwc-card-title">Manual Measurement for<br>Complex Fabrications</h3>
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/cwc-card1-img.png" alt="Manual Measurement for Complex Fabrications" class="smmf-cwc-img">
                            <ul class="smmf-cwc-list text-start">
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
                        <div class="smmf-cwc-card">
                            <div class="smmf-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="smmf-cwc-card-title">Conventional Fabrication<br>Workflows</h3>
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/cwc-card2-img.png" alt="Conventional Fabrication Workflows" class="smmf-cwc-img">
                            <ul class="smmf-cwc-list text-start">
                                <li>Multiple drawings & manual data transfer</li>
                                <li>High rework due to dimension errors</li>
                                <li>Material waste & excess scrap</li>
                                <li>Slower project cycles</li>
                                <li>Design changes are costly</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="smmf-cwc-card">
                            <div class="smmf-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="smmf-cwc-card-title">Conventional CMM<br>Inspection</h3>
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/cwc-card3-img.png" alt="Conventional CMM Inspection" class="smmf-cwc-img">
                            <ul class="smmf-cwc-list text-start">
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
                        <div class="smmf-cwc-card">
                            <div class="smmf-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="smmf-cwc-card-title">Impact on Your Business</h3>
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/cwc-card4-img.png" alt="Impact on Your Business" class="smmf-cwc-img">
                            <ul class="smmf-cwc-list text-start">
                                <li>Project delays & penalties</li>
                                <li>Increased rework & scrap</li>
                                <li>Higher fabrication costs</li>
                                <li>Lower profitability</li>
                                <li>Loss of competitiveness</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

        <!-- End-To-End Section -->
    <section class="smmf-ete-section">
        <div class="smmf-ete-container">
            
            <!-- Header Row -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <h2 class="smmf-ete-title">End-To-End Digital Manufacturing<br>Solutions for Sheet Metal &amp; Metal<br>Fabrication</h2>
                    <h3 class="smmf-ete-subtitle">From Scan to Functional Parts</h3>
                    <p class="smmf-ete-flow">Measure | Reverse Engineer | 3D Print | Fabricate with Confidence</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="smmf-ete-top-right-container">
                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-right-top-img.png" alt="Digital Manufacturing for Sheet Metal & Metal Fabrication" class="smmf-ete-top-right-img">
                        <div class="smmf-ete-top-right-overlay">
                            <div class="smmf-ete-overlay-words">
                                <div class="smmf-ete-overlay-group">
                                    <span>SCANNED</span>
                                    <span>TODAY.</span>
                                    <span>STRONGER</span>
                                    <span>FABRICATION</span>
                                    <span>TOMORROW.</span>
                                </div>
                                <div class="smmf-ete-overlay-group smmf-ete-overlay-group-lower">
                                    <span>REAL PARTS.</span>
                                    <span>REAL DATA.</span>
                                    <span>REAL RESULTS.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Grid (5 Columns) -->
            <div class="smmf-ete-grid">
                
                <!-- Card 1 -->
                <div class="smmf-ete-col-wrap">
                    <div class="smmf-ete-card">
                        <div class="smmf-ete-card-header">
                            <span class="smmf-ete-num">1</span>
                            <div class="smmf-ete-card-header-text">
                                <h4 class="smmf-ete-card-title">3D SCAN</h4>
                                <p class="smmf-ete-card-tagline">Capture Any<br>Sheet Metal Part</p>
                            </div>
                        </div>
                        <p class="smmf-ete-desc">Scan sheet metal parts, formed panels, brackets, chassis, assemblies or large structures on-site or in-house using high-accuracy 3D scanners.</p>
                        <div class="smmf-ete-images-box">
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card1-img1.png" alt="3D Scan sheet metal part 1" class="smmf-ete-img">
                            </div>
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card1-img2.png" alt="3D Scan sheet metal part 2" class="smmf-ete-img">
                            </div>
                        </div>
                        <div class="smmf-ete-bottom-feats">
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card1-icon1.png" alt="Small to Large Parts">
                                </div>
                                <span class="smmf-ete-feat-title">Small to<br>Large<br>Parts</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card1-icon2.png" alt="High Accuracy">
                                </div>
                                <span class="smmf-ete-feat-title">High<br>Accuracy</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card1-icon3.png" alt="On-Site or In-Plant Scanning">
                                </div>
                                <span class="smmf-ete-feat-title">On-Site or<br>In-Plant<br>Scanning</span>
                            </div>
                        </div>
                    </div>
                    <div class="smmf-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 2 -->
                <div class="smmf-ete-col-wrap">
                    <div class="smmf-ete-card">
                        <div class="smmf-ete-card-header">
                            <span class="smmf-ete-num">2</span>
                            <div class="smmf-ete-card-header-text">
                                <h4 class="smmf-ete-card-title">CREATE CAD</h4>
                                <p class="smmf-ete-card-tagline">From Scan to<br>Engineering Model.</p>
                            </div>
                        </div>
                        <p class="smmf-ete-desc">Convert scan data into precise, editable CAD models for reverse engineering, replacement parts, redesign or new product development.</p>
                        <div class="smmf-ete-images-box">
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card2-img1.png" alt="Create CAD 1" class="smmf-ete-img">
                            </div>
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card2-img2.png" alt="Create CAD 2" class="smmf-ete-img">
                            </div>
                        </div>
                        <div class="smmf-ete-bottom-feats">
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card2-icon1.png" alt="Accurate CAD Models">
                                </div>
                                <span class="smmf-ete-feat-title">Accurate<br>CAD Models</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card2-icon2.png" alt="Design Optimization">
                                </div>
                                <span class="smmf-ete-feat-title">Design<br>Optimization</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card2-icon3.png" alt="Manufacturing Ready Files">
                                </div>
                                <span class="smmf-ete-feat-title">Manufacturing<br>Ready Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="smmf-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 3 -->
                <div class="smmf-ete-col-wrap">
                    <div class="smmf-ete-card">
                        <div class="smmf-ete-card-header">
                            <span class="smmf-ete-num">3</span>
                            <div class="smmf-ete-card-header-text">
                                <h4 class="smmf-ete-card-title">3D PRINT</h4>
                                <p class="smmf-ete-card-tagline">Functional Parts in<br>PEEK.</p>
                            </div>
                        </div>
                        <p class="smmf-ete-desc">We 3D print functional parts, assembly jigs, fixtures, checking gauges and tooling in-house using industrial FDM, DLP and high-performance materials like PEEK for demanding applications.</p>
                        <div class="smmf-ete-images-box">
                            <div class="smmf-ete-img-wrap smmf-ete-img-wrap-tall">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card3-img1.png" alt="3D Print PEEK Functional Parts" class="smmf-ete-img">
                            </div>
                        </div>
                        <div class="smmf-ete-bottom-feats">
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card3-icon1.png" alt="FDM">
                                </div>
                                <span class="smmf-ete-feat-title">FDM</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card3-icon2.png" alt="DLP">
                                </div>
                                <span class="smmf-ete-feat-title">DLP</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card3-icon3.png" alt="PEEK & Engineering">
                                </div>
                                <span class="smmf-ete-feat-title">PEEK &amp;<br>Engineering</span>
                            </div>
                        </div>
                    </div>
                    <div class="smmf-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 4 -->
                <div class="smmf-ete-col-wrap">
                    <div class="smmf-ete-card">
                        <div class="smmf-ete-card-header">
                            <span class="smmf-ete-num">4</span>
                            <div class="smmf-ete-card-header-text">
                                <h4 class="smmf-ete-card-title">3D INSPECT</h4>
                                <p class="smmf-ete-card-tagline">Verify Form, Fit and<br>Dimensions</p>
                            </div>
                        </div>
                        <p class="smmf-ete-desc">Scan and inspect parts, tools or fabricated components. Compare with CAD, perform dimensional analysis, deviation maps, GD&amp;T and inspection reports.</p>
                        <div class="smmf-ete-images-box">
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card4-img1.png" alt="3D Inspect Inspection Report" class="smmf-ete-img">
                            </div>
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card4-img2.png" alt="3D Inspect Color Deviation Map" class="smmf-ete-img">
                            </div>
                        </div>
                        <div class="smmf-ete-bottom-feats">
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card4-icon1.png" alt="3D Inspection">
                                </div>
                                <span class="smmf-ete-feat-title">3D<br>Inspection</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card4-icon2.png" alt="Deviation Analysis">
                                </div>
                                <span class="smmf-ete-feat-title">Deviation<br>Analysis</span>
                            </div>
                            <div class="smmf-ete-feat-col">
                                <div class="smmf-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card4-icon3.png" alt="GD&T Reports">
                                </div>
                                <span class="smmf-ete-feat-title">GD&amp;T<br>Reports</span>
                            </div>
                        </div>
                    </div>
                    <div class="smmf-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 5 -->
                <div class="smmf-ete-col-wrap">
                    <div class="smmf-ete-card">
                        <div class="smmf-ete-card-header">
                            <span class="smmf-ete-num">5</span>
                            <div class="smmf-ete-card-header-text">
                                <h4 class="smmf-ete-card-title">USE &amp; FABRICATE</h4>
                                <p class="smmf-ete-card-tagline">Support Your<br>Manufacturing</p>
                            </div>
                        </div>
                        <p class="smmf-ete-desc">Use the CAD model, inspection data and 3D printed tooling for your local manufacturing, sheet metal fabrication or assembly. Improve accuracy, reduce rework and speed up time to market.</p>
                        <div class="smmf-ete-images-box">
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card5-img1.png" alt="Use & Fabricate Part" class="smmf-ete-img">
                            </div>
                            <div class="smmf-ete-img-wrap">
                                <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card5-img2.png" alt="Use & Fabricate Assembly" class="smmf-ete-img">
                            </div>
                        </div>
                        <div class="smmf-ete-card5-feats">
                            <div class="smmf-ete-card5-feats-row">
                                <div class="smmf-ete-feat-col">
                                    <div class="smmf-ete-feat-icon-box">
                                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card5-icon1.png" alt="Production Support">
                                    </div>
                                    <span class="smmf-ete-feat-title">Production<br>Support</span>
                                </div>
                                <div class="smmf-ete-feat-col">
                                    <div class="smmf-ete-feat-icon-box">
                                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card5-icon2.png" alt="Better Quality & Fit">
                                    </div>
                                    <span class="smmf-ete-feat-title">Better Quality<br>&amp; Fit</span>
                                </div>
                            </div>
                            <div class="smmf-ete-card5-bottom-row">
                                <div class="smmf-ete-feat-icon-inline">
                                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/ete-card5-icon3.png" alt="Prototypes & Fixtures">
                                </div>
                                <span class="smmf-ete-feat-title-inline">Prototypes &amp; Fixtures</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>    <!-- CAPEX Section -->
    <section class="smmf-capex-section">
        <div class="smmf-container">
            
            <div class="smmf-capex-header">
                <div class="smmf-capex-top-label">
                    <span>CAPEX Engineering Services</span>
                    <div class="smmf-capex-line"></div>
                </div>
                <h2 class="smmf-capex-title">Build Your In-House Digital Manufacturing Capability <span class="smmf-text-orange">(CAPEX)</span></h2>
                <p class="smmf-capex-desc">Invest in advanced digital manufacturing technologies and establish an in-house engineering and quality-control department.</p>
            </div>

            <!-- Top Workflow -->
            <div class="smmf-capex-workflow d-none d-xl-flex">
                <div class="smmf-capex-step">
                    <div class="smmf-capex-step-num">1</div>
                    <div class="smmf-capex-step-text">
                        <strong>Capture</strong>
                        <span>Accurate 3D Data</span>
                    </div>
                </div>
                <div class="smmf-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="smmf-capex-step">
                    <div class="smmf-capex-step-num">2</div>
                    <div class="smmf-capex-step-text">
                        <strong>Engineer</strong>
                        <span>Create &amp; Optimize</span>
                    </div>
                </div>
                <div class="smmf-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="smmf-capex-step">
                    <div class="smmf-capex-step-num">3</div>
                    <div class="smmf-capex-step-text">
                        <strong>Validate</strong>
                        <span>Inspect &amp; Ensure</span>
                    </div>
                </div>
                <div class="smmf-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="smmf-capex-step">
                    <div class="smmf-capex-step-num">4</div>
                    <div class="smmf-capex-step-text">
                        <strong>Manufacture</strong>
                        <span>Produce &amp; Deliver</span>
                    </div>
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="smmf-capex-cards-grid">
                
                <!-- Card 1 -->
                <div class="smmf-capex-card">
                    <h3 class="smmf-capex-card-title"><span class="smmf-text-orange">3D Scanners</span><br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card1-img.png" alt="3D Scanners for Sheet Metal &amp; Metal Fabrication" class="smmf-capex-hero-img">
                    
                    <div class="smmf-capex-nested border-gray mt-2">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card1-img1.png" alt="Optical 3D Scanners">
                            <span><strong>Optical 3D<br>Scanners</strong></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center text-end">
                            <a href="optical-3d-scanner.php" class="d-flex justify-content-end align-items-center"><span class="smmf-text-orange me-2" style="font-size:11px;">FreeScan<br>Q9</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="smmf-capex-nested border-gray mt-2">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card1-img2.png" alt="Optical 3D Scanners">
                            <span><strong>Optical 3D<br>Scanners</strong></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center text-end">
                            <a href="optimscan-q12.php" class="d-flex justify-content-end align-items-center"><span class="smmf-text-orange me-2" style="font-size:11px;">OptimScan<br>Q12</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="smmf-capex-nested border-gray mt-2">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card1-img3.png" alt="Automatic Desktop 3D Scanner">
                            <span><strong>Automatic<br>Desktop 3D<br>Scanner</strong></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center text-end">
                            <a href="automatic-desktop-3d-scanner.php" class="d-flex justify-content-end align-items-center"><span class="smmf-text-orange me-2" style="font-size:11px;">AutoScan<br>Inspect 2</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="smmf-capex-nested border-gray mt-2 mb-3">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card1-img4.png" alt="Handheld Laser 3D Scanners">
                            <span><strong>Handheld Laser<br>3D Scanners</strong></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center text-end">
                            <a href="handheld-3d-scanner.php" class="d-flex justify-content-end align-items-center"><span class="smmf-text-orange me-2" style="font-size:11px;">FreeScan<br>Omni</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <a href="3d-scanners-in-india.php" class="smmf-capex-btn solid mt-auto">Explore 3D Scanners <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 2 -->
                <div class="smmf-capex-card">
                    <h3 class="smmf-capex-card-title"><span class="smmf-text-orange">3D Reverse<br>Engineering Software</span><br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <p class="smmf-capex-card-desc">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>
                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card2-img.png" alt="3D Reverse Engineering Software" class="smmf-capex-hero-img">
                    
                    <div class="smmf-capex-nested border-orange mt-2">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card2-img2.png" alt="Geomagic Design X">
                            <span><strong>Geomagic Design X</strong><br><small>Dedicated Reverse Engineering Software</small></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center">
                            <a href="reverse-engineering-geomagic-design-x.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="smmf-capex-nested border-orange mt-2">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card2-img3.png" alt="Geomagic for SOLIDWORKS">
                            <span><strong>Geomagic for SOLIDWORKS</strong><br><small>Dedicated Reverse Engineering Software</small></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center">
                            <a href="geomagic-for-solidworks-reverse-engineering-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="smmf-capex-nested border-orange mt-2 mb-3">
                        <div class="smmf-capex-nested-left">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card2-img4.png" alt="ExactFlat">
                            <span><strong>ExactFlat</strong><br><small>Automotive Sheet Cover / Sheet Material Flattening Software</small></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center">
                            <a href="exactflat.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <a href="3d-scanning-and-reverse-engineering-software.php" class="smmf-capex-btn outline mt-auto">EXPLORE REVERSE ENGINEERING SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 3 -->
                <div class="smmf-capex-card">
                    <h3 class="smmf-capex-card-title"><span class="smmf-text-orange">3D Inspection<br>Software</span><br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <p class="smmf-capex-card-desc">Perform dimensional inspection by comparing scanned automotive components against their original CAD models.</p>
                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card3-img.png" alt="3D Inspection Software" class="smmf-capex-hero-img">
                    
                    <div class="smmf-capex-nested border-orange mt-2 mb-3">
                        <div class="smmf-capex-nested-left align-items-center">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card3-img2.png" alt="Geomagic Control X">
                            <span><strong>Geomagic Control X</strong><br><small>3D Inspection Software</small></span>
                        </div>
                        <div class="smmf-capex-nested-right align-self-center">
                            <a href="geomagic-control-x-3d-inspection-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="smmf-capex-features">
                        <p class="mb-2"><strong>Features:</strong></p>
                        <ul class="smmf-capex-features-list">
                            <li>CAD vs Scan Comparison</li>
                            <li>GD&amp;T</li>
                            <li>First Article Inspection (FAI)</li>
                            <li>Deviation Analysis</li>
                            <li>Colour Deviation Reports</li>
                            <li>Process &amp; Supplier Quality</li>
                            <li>Production QC</li>
                        </ul>
                    </div>

                    <a href="3d-inspection-software-in-india.php" class="smmf-capex-btn outline mt-auto">EXPLORE 3D INSPECTION SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 4 -->
                <div class="smmf-capex-card">
                    <h3 class="smmf-capex-card-title"><span class="smmf-text-orange">3D Printing Solutions<br>to Replace Hand molds</span><br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <p class="smmf-capex-card-desc">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>
                    
                    <div class="smmf-capex-nested border-gray mb-3 mt-3">
                        <div class="smmf-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card4-img1.png" alt="PEEK 3D Printer" style="max-width: 60px;">
                            <span style="font-size:12px; margin-left: 10px;"><strong>PEEK 3D Printer<br>for High-Performance Jigs<br>&amp; Fixtures</strong><br><small style="color: #64748b; font-size: 11px;">FUNMAT PRO<br>310 APOLLO</small></span>
                            <div class="smmf-capex-nested-right align-self-center ms-auto">
                                <a href="peek-3d-printing-services.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: var(--smmf-orange, #FF931E);"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="smmf-capex-nested border-gray mb-3">
                        <div class="smmf-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-sheet-metal-metal-fabrication/capex-card4-img2.png" alt="Large-Format FDM" style="max-width: 60px;">
                            <span style="font-size:12px; margin-left: 10px;"><strong>Large-Format<br>Industrial FDM<br>Printers</strong><br><small style="color: #64748b; font-size: 11px;">For Jigs, Fixtures, Tools,<br>Templates &amp; Prototypes</small></span>
                            <div class="smmf-capex-nested-right align-self-center ms-auto">
                                <a href="industrial-fdm-3d-printers.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: var(--smmf-orange, #FF931E);"></i></a>
                            </div>
                        </div>
                    </div>

                    <a href="3d-printing-service-in-india.php" class="smmf-capex-btn outline mt-auto">EXPLORE INDUSTRIAL 3D PRINTERS <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>    <!-- OPEX Section -->
    <section class="smmf-opex-section">
        <div class="smmf-container">
            
            <div class="smmf-capex-header">
                <div class="smmf-capex-top-label">
                    <span>OPEX Engineering Services</span>
                    <div class="smmf-capex-line"></div>
                </div>
                <h2 class="smmf-capex-title">3D Scan-based Engineering and 3D Printing Services for<br>Sheet Metal &amp; Metal Fabrication <span class="smmf-text-orange">(OPEX)</span></h2>
                <p class="smmf-capex-desc mb-2">Bring your sheet metal part or assembly to our application lab. We scan your parts, create CAD models, run inspection and suggest the best digital manufacturing solution for you.</p>
            </div>

            <div class="smmf-opex-divider">
                <span>From RFQ to Results</span>
            </div>

            <!-- 6-Step Workflow -->
            <div class="smmf-opex-workflow-wrapper">
                <div class="smmf-opex-workflow">
                    <div class="smmf-opex-step">
                        <div class="smmf-opex-step-num">1</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon1.png" alt="Share Your RFQ">
                        <strong>Share Your RFQ</strong>
                        <p>Send your component, application and expected deliverables.</p>
                    </div>
                    <div class="smmf-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                    
                    <div class="smmf-opex-step">
                        <div class="smmf-opex-step-num">2</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon2.png" alt="Receive a Proposal">
                        <strong>Receive a Proposal</strong>
                        <p>We review the requirement and provide a clear quotation.</p>
                    </div>
                    <div class="smmf-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="smmf-opex-step">
                        <div class="smmf-opex-step-num">3</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon3.png" alt="Select Workflow">
                        <strong>Select the Right Workflow</strong>
                        <p>We choose the right 3D scanner, software and methodology.</p>
                    </div>
                    <div class="smmf-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="smmf-opex-step">
                        <div class="smmf-opex-step-num">4</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon4.png" alt="Execution">
                        <strong>On-Site or In-House Execution</strong>
                        <p>Scanning is completed at your facility or at a Precise3DM centre.</p>
                    </div>
                    <div class="smmf-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="smmf-opex-step">
                        <div class="smmf-opex-step-num">5</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon5.png" alt="Deliverables">
                        <strong>Receive Your Deliverables</strong>
                        <p>Get a manufacturing-ready CAD model or inspection report.</p>
                    </div>
                    <div class="smmf-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="smmf-opex-step">
                        <div class="smmf-opex-step-num">6</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon6.png" alt="Pay as OPEX">
                        <strong>Pay as OPEX</strong>
                        <p>Pay against invoice based on agreed terms. Monthly service options are available.</p>
                    </div>
                </div>
            </div>

            <!-- Service Cards Top Grid (3 Cards) -->
            <div class="smmf-opex-grid-top">
                
                <!-- Card 1 -->
                <div class="smmf-opex-card">
                    <h3 class="smmf-opex-card-title">3D Scanning Services<br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <div class="smmf-opex-img-wrap">
                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/opex-card1-img.png" alt="3D Scanning Services for Sheet Metal &amp; Metal Fabrication" class="smmf-opex-hero-img">
                    </div>
                    <ul class="smmf-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> On-site &amp; In-house Scanning</li>
                        <li><i class="fa-solid fa-circle-check"></i> Large &amp; Heavy Forging</li>
                        <li><i class="fa-solid fa-circle-check"></i> Hard-to-Reach Areas</li>
                        <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering Support</li>
                        <li><i class="fa-solid fa-circle-check"></i> Inspection &amp; Archiving</li>
                    </ul>
                    <a href="3d-services.php" class="smmf-opex-btn">LEARN MORE</a>
                </div>

                <!-- Card 2 -->
                <div class="smmf-opex-card">
                    <h3 class="smmf-opex-card-title">Reverse Engineering Services<br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <div class="smmf-opex-img-wrap">
                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/opex-card2-img.png" alt="Reverse Engineering Services for Sheet Metal &amp; Metal Fabrication" class="smmf-opex-hero-img smmf-opex-img-contain">
                    </div>
                    <ul class="smmf-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Scan-to-CAD</li>
                        <li><i class="fa-solid fa-circle-check"></i> Sheet Metal Modeling</li>
                        <li><i class="fa-solid fa-circle-check"></i> Flat Pattern &amp; Unfolding</li>
                        <li><i class="fa-solid fa-circle-check"></i> Feature Recognition</li>
                        <li><i class="fa-solid fa-circle-check"></i> 3D Manufacturing Drawings</li>
                    </ul>
                    <a href="3d-Reverse-Engineering-Services-in-india.php" class="smmf-opex-btn">LEARN MORE</a>
                </div>

                <!-- Card 3 -->
                <div class="smmf-opex-card">
                    <h3 class="smmf-opex-card-title">3D Inspection Services<br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <div class="smmf-opex-img-wrap">
                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/opex-card3-img.png" alt="3D Inspection Services for Sheet Metal &amp; Metal Fabrication" class="smmf-opex-hero-img smmf-opex-img-contain">
                    </div>
                    <ul class="smmf-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Dimensional Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> GD&amp;T Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> Wall Thickness Analysis</li>
                        <li><i class="fa-solid fa-circle-check"></i> Fit-up &amp; Assembly Check</li>
                        <li><i class="fa-solid fa-circle-check"></i> First Article Inspection</li>
                    </ul>
                    <a href="3d-inspection-service.php" class="smmf-opex-btn">LEARN MORE</a>
                </div>

            </div>
            
            <!-- Service Cards Bottom Grid (2 Cards) -->
            <div class="smmf-opex-grid-bottom">
                
                <!-- Card 4 (Fabrication Support) -->
                <div class="smmf-opex-card">
                    <h3 class="smmf-opex-card-title">Fabrication Support Services for<br>Sheet Metal &amp; Metal Fabrication</h3>
                    <div class="smmf-opex-img-wrap">
                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/opex-card4-img.png" alt="Fabrication Support Services for Sheet Metal &amp; Metal Fabrication" class="smmf-opex-hero-img smmf-opex-img-contain">
                    </div>
                    <ul class="smmf-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Flat Pattern Generation</li>
                        <li><i class="fa-solid fa-circle-check"></i> Nesting &amp; Material Optimization</li>
                        <li><i class="fa-solid fa-circle-check"></i> Bend Deduction &amp; K-Factor Support</li>
                        <li><i class="fa-solid fa-circle-check"></i> Jig &amp; Fixture Design</li>
                        <li><i class="fa-solid fa-circle-check"></i> DFM Review &amp; Consultation</li>
                    </ul>
                    <a href="3d-services.php" class="smmf-opex-btn">LEARN MORE</a>
                </div>

                <!-- Card 5 (QA & Production Support) -->
                <div class="smmf-opex-card">
                    <h3 class="smmf-opex-card-title">QA &amp; Production Support<br>for Sheet Metal &amp; Metal Fabrication</h3>
                    <div class="smmf-opex-img-wrap">
                        <img src="assets/images/dms-for-sheet-metal-metal-fabrication/opex-card5-img.png" alt="QA &amp; Production Support for Sheet Metal &amp; Metal Fabrication" class="smmf-opex-hero-img smmf-opex-img-contain">
                    </div>
                    <ul class="smmf-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> In-Process Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> Weldment Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> Final Assembly Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> Documentation &amp; Reports</li>
                        <li><i class="fa-solid fa-circle-check"></i> Quality Compliance Support</li>
                    </ul>
                    <a href="3d-inspection-service.php" class="smmf-opex-btn">LEARN MORE</a>
                </div>
            </div>

        </div>
    </section><!-- Buy or Outsource Section -->
    <section class="smmf-boo-section">
        <div class="smmf-container">
            <div class="smmf-boo-grid">
                
                <!-- Card 1 (Dark) -->
                <div class="smmf-boo-card dark">
                    <h2 class="smmf-boo-title"><span style="color: var(--smmf-orange);">BUY OR<br>OUTSOURCE?</span><br>CHOOSE WHAT<br>WORKS<br>BEST FOR YOUR<br>BUSINESS</h2>
                    <div class="smmf-boo-icons-row">
                        <img src="assets/images/dms-for-tool-die-manufacturing/Vedtor.png" alt="Buy">
                        <span>&#8594;</span>
                        <img src="assets/images/dms-for-tool-die-manufacturing/Vectfdor.png" alt="Outsource">
                    </div>
                </div>

                <!-- Card 2 (CAPEX) -->
                <div class="smmf-boo-card smmf-position-relative" style="background:#fff7ed; border-color:#fed7aa;">
                    <h3 class="smmf-boo-card-title text-danger">BUILD IN-HOUSE (CAPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="smmf-boo-list green-check-small">
                        <li><i class="fa-solid fa-check"></i> High Production Volumes</li>
                        <li><i class="fa-solid fa-check"></i> Long-term Cost Savings</li>
                        <li><i class="fa-solid fa-check"></i> Complete Process Control</li>
                        <li><i class="fa-solid fa-check"></i> Faster Turnaround</li>
                        <li><i class="fa-solid fa-check"></i> Confidentiality & IP Security</li>
                    </ul>
                    <a href="3d-products.php" class="smmf-boo-btn orange">EXPLORE CAPEX SOLUTIONS</a>
                    
                    <!-- OR Badge -->
                    <div class="smmf-boo-or-badge">OR</div>
                </div>

                <!-- Card 3 (OPEX) -->
                <div class="smmf-boo-card" style="background:#f0fdf4; border-color:#bbf7d0;">
                    <h3 class="smmf-boo-card-title text-success">USE OUR ENGINEERING TEAM (OPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="smmf-boo-list green-check-circle-small">
                        <li><i class="fa-regular fa-circle-check"></i> One-Time Projects &amp; Immediate Needs</li>
                        <li><i class="fa-regular fa-circle-check"></i> Technology Access Without Investment</li>
                        <li><i class="fa-regular fa-circle-check"></i> Specialized Expertise</li>
                        <li><i class="fa-regular fa-circle-check"></i> Scalable Support</li>
                        <li><i class="fa-regular fa-circle-check"></i> Lower Upfront Cost</li>
                    </ul>
                    <a href="3d-services.php" class="smmf-boo-btn orange">EXPLORE ENGINEERING SERVICES</a>
                </div>

            </div>
        </div>
    </section>


    <!-- Engagement Models Section -->
    

        <!-- Why Choose Section -->
    <section class="smmf-why-choose-section">
        <div class="smmf-container" style="padding: 0 15px;">
            <div class="smmf-why-choose-card">
                
                <div class="smmf-why-choose-left">
                    <img src="assets/images/dms-for-sheet-metal-metal-fabrication/why-choose-img.png" alt="Why Sheet Metal &amp; Metal Fabrication Companies Choose Precise3DM" class="smmf-why-choose-truck-img">
                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/precise3dm-logo.png" alt="Precise3DM Logo" class="smmf-why-choose-logo">
                </div>

                <!-- Content Side -->
                <div class="smmf-why-choose-content">
                    <h2 class="smmf-why-choose-title">Why Sheet Metal &amp; Metal<br>Fabrication Companies Choose<br><span>Precise3DM?</span></h2>
                    <ul class="smmf-why-choose-list">
                        <li><div class="smmf-why-choose-custom-icon"></div> Complete digital manufacturing solutions provider</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Industrial 3D scanners for any site components</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Reverse Engineering Scan-to-CAD expertise</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Meterology &amp; Engineering software expertise</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Industrial 3D printing solutions for manufacturing aids</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Pan-India Sales, Service, Training &amp; Technical Support</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Advanced 3D inspections &amp; quality control workflows</li>
                        <li><div class="smmf-why-choose-custom-icon"></div> Solution for OEMs, machine builders, tool rooms &amp; maintenance teams</li>
                    </ul>
                    <a href="About_us.php" class="smmf-why-choose-btn">Know More About Precise 3DM</a>
                </div>

            </div>
        </div>
    </section><!-- Technology Partners Section -->
    <section class="smmf-partners-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid smmf-ind-container">
            <h2 class="smmf-partners-title text-center mb-5">Our Technology Partners</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-1.png" alt="Shining 3D" class="img-fluid smmf-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-2.png" alt="Hexagon" class="img-fluid smmf-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-3.png" alt="ExactFlat" class="img-fluid smmf-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-4.png" alt="TrueProp" class="img-fluid smmf-partners-logo" style="max-height: 100px; transform: scale(1.1);">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-5.png" alt="EPIC" class="img-fluid smmf-partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="smmf-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="smmf-contact-inner-container p-4 p-xl-5 position-relative" style="background-image: url('assets/images/blog-26-freescan-trak-nova-5-functionality-in-1-device/contact-bg.png'); background-size: cover; background-position: center; border-radius: 16px;">

                <div class="text-center mb-4">
                    <h2 class="smmf-contact-main-title">Ready to Digitally Transform <span style="color: #FF931E;">Your Sheet Metal & Metal Fabrication?</span></h2>
                    <p class="smmf-contact-main-desc mt-3 mx-auto" style="max-width: 1100px;">Whether you're planning to invest in advanced digital manufacturing technologies or need immediate engineering support, Precise3DM can help you select the right solution for your application.</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-4 mb-5" style="gap: 20px;">
                    <a href="3d-products.php" class="smmf-contact-top-btn px-5 py-3">3D Products</a>
                    <a href="3d-services.php" class="smmf-contact-top-btn px-5 py-3">3D Services</a>
                </div>

                <div class="smmf-contact-divider mb-5 mx-auto"></div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="smmf-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-1.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="smmf-contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SERVICES</span></h3>
                            </div>
                            <p class="smmf-contact-card-desc mb-4 flex-grow-1">Tell us about your project and get a customized service quote.</p>
                            <a href="Get-3d-scan-service-quote.php" class="smmf-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SERVICES <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="smmf-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-2.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="smmf-contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="smmf-contact-card-desc mb-4 flex-grow-1">Looking to buy a 3D scanner? Get the best price and expert guidance.</p>
                            <a href="scanning-solution-form.php" class="smmf-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="smmf-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="smmf-contact-card-title mb-0">MEET US LIVE <br><span style="color: #FF931E;">ONLINE NOW</span></h3>
                            </div>
                            <p class="smmf-contact-card-desc mb-4 flex-grow-1">Connect with our experts instantly for live guidance and support.</p>
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="smmf-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">MEET US LIVE ONLINE NOW <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="smmf-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="smmf-contact-card-title mb-0">BOOK DEMO <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="smmf-contact-card-desc mb-4 flex-grow-1">Schedule a live demo and experience the power of Precise3DM scanners.</p>
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="smmf-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">BOOK DEMO FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
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








