<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "Digital Manufacturing Solutions for Railway & Locomotive Industry | Precise3DM";
$meta_description =
    "Precise3DM empowers railway OEMs, rolling stock manufacturers, component suppliers with 3D scanning, reverse engineering, 3D printing and inspection technologies.";
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
    <link rel="stylesheet" href="assets/css/digital-manufacturing-solution-for-construction-earthmoving-equipment-manufacturing.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

    <!-- Main Content Starts Here -->
    <section class="ceem-ind-hero-section">
        <!-- Adding overlay gradient explicitly via CSS, but putting image as background -->
        <div class="container-fluid ceem-ind-container">
            <!-- Top Right Contact -->
            <div class="row d-none d-lg-flex">
                <div class="col-12 d-flex justify-content-end pt-4 pb-3">
                    <div class="ceem-top-contact d-flex align-items-center" style="gap: 10px;">
                        <div class="ceem-contact-icon">
                            <i class="fa-solid fa-phone" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="ceem-contact-info ms-3 text-start">
                            <div class="ceem-contact-title text-white">Call us now</div>
                            <div class="ceem-contact-numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-end pb-4 position-relative">
                <!-- Left Side Content -->
                <div class="col-lg-8 col-xl-7">
                    <h1 class="ceem-hero-main-title text-white">Digital Manufacturing Solutions for<br><span class="text-orange">Construction & Earthmoving<br>Equipment Manufacturing</span></h1>
                    <h3 class="ceem-hero-subtitle text-white">Built Tough. Measured Right. Built to Perform.</h3>
                    <p class="ceem-hero-desc text-white">Construction & earthmoving equipment faces extreme environments, heavy loads, and tight project timelines. Precise3DM empowers manufacturers to capture large, complex components with high accuracy, accelerate production, reduce rework, and ensure reliability in the toughest conditions.</p>

                    <div class="ceem-hero-buttons d-flex flex-wrap mt-3" style="gap: 15px;">
                        <a href="contact-us.php" class="btn-talk">Talk to an Expert</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-demo">Book a live demo</a>
                    </div>

                    <div class="ceem-bottom-contact d-flex align-items-center mt-3 pt-1 mb-2">
                        <div class="ceem-contact-icon email-icon">
                            <i class="fa-solid fa-envelope" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="ceem-contact-info ms-3">
                            <div class="ceem-contact-title text-white">Email Us</div>
                            <div class="ceem-contact-emails">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Call us now (Mobile/Tablet View) -->
                    <div class="ceem-top-contact d-flex d-lg-none align-items-center mt-3" style="gap: 10px;">
                        <div class="ceem-contact-icon">
                            <i class="fa-solid fa-phone" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="ceem-contact-info ms-3 text-start">
                            <div class="ceem-contact-title text-white">Call us now</div>
                            <div class="ceem-contact-numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Graphic -->
                <div class="col-lg-4 col-xl-5 align-self-end ceem-hero-right-col">
                    <div class="ceem-hero-truck-container">
                        <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/dmsfceem-hero-right-img.png" alt="Digital Manufacturing for Construction & Earthmoving Equipment" class="ceem-hero-truck-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Stat Section -->
    <section class="ceem-stat-section py-5">
        <div class="container-fluid ceem-ind-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center ceem-stat-row">

                <!-- Stat 1 -->
                <div class="ceem-stat-item d-flex align-items-center">
                    <div class="ceem-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-1.svg" alt="10+ Years">
                    </div>
                    <div class="ceem-stat-content">
                        <div class="ceem-stat-title">10+</div>
                        <div class="ceem-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="ceem-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="ceem-stat-item d-flex align-items-center">
                    <div class="ceem-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="ceem-stat-content">
                        <div class="ceem-stat-title">250+</div>
                        <div class="ceem-stat-subtitle">Scanners sold</div>
                        <div class="ceem-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="ceem-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="ceem-stat-item d-flex align-items-center">
                    <div class="ceem-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="ceem-stat-content">
                        <div class="ceem-stat-title">60+</div>
                        <div class="ceem-stat-subtitle">Scan-based applications</div>
                        <div class="ceem-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="ceem-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="ceem-stat-item d-flex align-items-center">
                    <div class="ceem-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="ceem-stat-content">
                        <div class="ceem-stat-title">8+</div>
                        <div class="ceem-stat-subtitle">Direct locations</div>
                        <div class="ceem-stat-desc">across India</div>
                    </div>
                </div>

                <div class="ceem-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="ceem-stat-item d-flex align-items-center">
                    <div class="ceem-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-5.svg" alt="15+ Countries">
                    </div>
                    <div class="ceem-stat-content">
                        <div class="ceem-stat-title">15+</div>
                        <div class="ceem-stat-subtitle">Countries served</div>
                        <div class="ceem-stat-desc">Global 3D services</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Challenges Section -->
    <section class="ceem-cwc-section">
        <div class="ceem-container text-center">
            <h2 class="ceem-section-title">Challenges with Conventional Processes in Construction & Earthmoving<br>Equipment Manufacturing</h2>
            
            <div class="ceem-cwc-wrapper">
                <div class="row gx-4 gy-4">
                    
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="ceem-cwc-card">
                            <div class="ceem-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="ceem-cwc-card-title">Manual Measurement for<br>Reverse Engineering</h3>
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/cwc-img1.png" alt="Manual Measurement for Reverse Engineering" class="ceem-cwc-img">
                            <ul class="ceem-cwc-list text-start">
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
                        <div class="ceem-cwc-card">
                            <div class="ceem-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="ceem-cwc-card-title">Conventional<br>Manufacturing</h3>
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/cwc-img2.png" alt="Conventional Manufacturing" class="ceem-cwc-img">
                            <ul class="ceem-cwc-list text-start">
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
                        <div class="ceem-cwc-card">
                            <div class="ceem-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="ceem-cwc-card-title">Conventional CMM<br>Inspection</h3>
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/cwc-img3.png" alt="Conventional CMM Inspection" class="ceem-cwc-img">
                            <ul class="ceem-cwc-list text-start">
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
                        <div class="ceem-cwc-card">
                            <div class="ceem-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                            <h3 class="ceem-cwc-card-title">Impact on Your Business</h3>
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/cwc-img4.png" alt="Impact on Your Business" class="ceem-cwc-img">
                            <ul class="ceem-cwc-list text-start">
                                <li>Equipment downtime</li>
                                <li>Delays in project delivery</li>
                                <li>Higher operating costs</li>
                                <li>Reduced reliability & lifespan</li>
                                <li>Reduced competitiveness</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

        <!-- End-To-End Section -->
    <section class="ceem-ete-section">
        <div class="ceem-ete-container">
            
            <!-- Header Row -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <h2 class="ceem-ete-title">End-To-End Digital<br>Manufacturing Solutions for<br>Construction &amp; Earthmoving<br>Equipment Manufacturing</h2>
                    <h3 class="ceem-ete-subtitle">From Scan to Real-World Parts</h3>
                    <p class="ceem-ete-flow">Capture | Engineer | Manufacture or 3D Print | Inspect | Keep Moving</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="ceem-ete-top-right-container">
                        <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-top-right-img.png" alt="Digital Manufacturing for Construction & Earthmoving Equipment" class="ceem-ete-top-right-img">
                        <div class="ceem-ete-top-right-overlay">
                            <div class="ceem-ete-overlay-words">
                                <span>SCAN</span>
                                <span>DESIGN</span>
                                <span>PRINT</span>
                                <span>INSPECT</span>
                                <span>PERFORM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Grid (6 Columns) -->
            <div class="ceem-ete-grid">
                
                <!-- Card 1 -->
                <div class="ceem-ete-col-wrap">
                    <div class="ceem-ete-card">
                        <div class="ceem-ete-card-header">
                            <span class="ceem-ete-num">1</span>
                            <div class="ceem-ete-card-header-text">
                                <h4 class="ceem-ete-card-title">3D SCAN</h4>
                                <p class="ceem-ete-card-tagline">Capture Any Size. On-Site or In-House</p>
                            </div>
                        </div>
                        <p class="ceem-ete-desc">Scan components, attachments or entire machines using handheld, tripod or large-volume 3D scanners.</p>
                        <div class="ceem-ete-images-box">
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card1-img1.png" alt="3D Scan on-site" class="ceem-ete-img">
                            </div>
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card1-img2.png" alt="3D Scan large part" class="ceem-ete-img">
                            </div>
                        </div>
                        <div class="ceem-ete-bottom-feats">
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon1.png" alt="Large Parts & Assemblies">
                                </div>
                                <span class="ceem-ete-feat-title">Large Parts &amp;<br>Assemblies</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon2.png" alt="On-Site Scanning">
                                </div>
                                <span class="ceem-ete-feat-title">On-Site<br>Scanning</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon3.png" alt="High Accuracy">
                                </div>
                                <span class="ceem-ete-feat-title">High<br>Accuracy</span>
                            </div>
                        </div>
                    </div>
                    <div class="ceem-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 2 -->
                <div class="ceem-ete-col-wrap">
                    <div class="ceem-ete-card">
                        <div class="ceem-ete-card-header">
                            <span class="ceem-ete-num">2</span>
                            <div class="ceem-ete-card-header-text">
                                <h4 class="ceem-ete-card-title">CREATE CAD</h4>
                                <p class="ceem-ete-card-tagline">From Scan to Engineering Model.</p>
                            </div>
                        </div>
                        <p class="ceem-ete-desc">Convert scan data into precise, parametric CAD models for manufacturing, design improvement or new part development.</p>
                        <div class="ceem-ete-images-box">
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card2-img1.png" alt="Create CAD 1" class="ceem-ete-img">
                            </div>
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card2-img2.png" alt="Create CAD 2" class="ceem-ete-img">
                            </div>
                        </div>
                        <div class="ceem-ete-bottom-feats">
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon1.png" alt="Scan to CAD">
                                </div>
                                <span class="ceem-ete-feat-title">Scan<br>to CAD</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon2.png" alt="Parametric Editable Models">
                                </div>
                                <span class="ceem-ete-feat-title">Parametric<br>Editable<br>Models</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon3.png" alt="Design Optimization">
                                </div>
                                <span class="ceem-ete-feat-title">Design<br>Optimization</span>
                            </div>
                        </div>
                    </div>
                    <div class="ceem-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 3 -->
                <div class="ceem-ete-col-wrap">
                    <div class="ceem-ete-card">
                        <div class="ceem-ete-card-header">
                            <span class="ceem-ete-num">3</span>
                            <div class="ceem-ete-card-header-text">
                                <h4 class="ceem-ete-card-title">MANUFACTURING OPTIONS</h4>
                                <p class="ceem-ete-card-tagline">Your Design. Your Choice.</p>
                            </div>
                        </div>
                        <p class="ceem-ete-desc">Manufactured by your preferred method (e.g., casting, machining, welding, fabrication), or 3D printed in-house by Precise3DM using high-performance materials (PEEK &ndash; Figure 4 or industrial FDM) for functional parts, jigs, fixtures, tooling or replacement components.</p>
                        <div class="ceem-ete-images-box">
                            <div class="ceem-ete-mfg-wrap">
                                <div class="ceem-ete-mfg-img-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card3-img1.png" alt="Conventional Manufacturing" class="ceem-ete-img">
                                </div>
                                <div class="ceem-ete-mfg-label">
                                    Conventional Manufacturing<br><span>(by you or your supplier)</span>
                                </div>
                            </div>
                            <div class="ceem-ete-mfg-wrap">
                                <div class="ceem-ete-mfg-img-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card3-img2.png" alt="3D Printing" class="ceem-ete-img">
                                </div>
                                <div class="ceem-ete-mfg-label">
                                    3D Printing<br><span>(in-house at Precise3DM)</span>
                                </div>
                            </div>
                        </div>
                        <div class="ceem-ete-card3-banner">
                            <div class="ceem-ete-card3-icon">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon3.png" alt="Multiple Paths">
                            </div>
                            <div class="ceem-ete-card3-text">Same CAD. Multiple<br>Manufacturing Paths.</div>
                        </div>
                    </div>
                    <div class="ceem-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 4 -->
                <div class="ceem-ete-col-wrap">
                    <div class="ceem-ete-card">
                        <div class="ceem-ete-card-header">
                            <span class="ceem-ete-num">4</span>
                            <div class="ceem-ete-card-header-text">
                                <h4 class="ceem-ete-card-title">3D INSPECT</h4>
                                <p class="ceem-ete-card-tagline">Verify. Validate. Ensure Fit.</p>
                            </div>
                        </div>
                        <p class="ceem-ete-desc">Scan the manufactured or 3D printed part and compare with the original CAD. Perform full dimensional analysis, GD&amp;T and surface inspection to ensure accuracy, quality and interchangeability.</p>
                        <div class="ceem-ete-images-box">
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card4-img1.png" alt="3D Inspect 1" class="ceem-ete-img">
                            </div>
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card4-img2.png" alt="3D Inspect 2" class="ceem-ete-img">
                            </div>
                        </div>
                        <div class="ceem-ete-bottom-feats">
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon1.png" alt="3D Comparison">
                                </div>
                                <span class="ceem-ete-feat-title">3D<br>Comparison</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon2.png" alt="Dimensional Analysis">
                                </div>
                                <span class="ceem-ete-feat-title">Inspection<br>Report</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon3.png" alt="Dimensional Analysis">
                                </div>
                                <span class="ceem-ete-feat-title">Dimensional<br>Analysis</span>
                            </div>
                        </div>
                    </div>
                    <div class="ceem-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 5 -->
                <div class="ceem-ete-col-wrap">
                    <div class="ceem-ete-card">
                        <div class="ceem-ete-card-header">
                            <span class="ceem-ete-num">5</span>
                            <div class="ceem-ete-card-header-text">
                                <h4 class="ceem-ete-card-title">DEPLOY &amp; OPERATE</h4>
                                <p class="ceem-ete-card-tagline">Get Back to Work.</p>
                            </div>
                        </div>
                        <p class="ceem-ete-desc">Use the validated parts to produce, replace, repair or upgrade equipment. Reduce downtime, extend asset life and keep your fleet moving.</p>
                        <div class="ceem-ete-images-box">
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card5-img1.png" alt="Deploy & Operate 1" class="ceem-ete-img">
                            </div>
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card5-img2.png" alt="Deploy & Operate 2" class="ceem-ete-img">
                            </div>
                        </div>
                        <div class="ceem-ete-bottom-feats">
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon1.png" alt="Replace & Repair">
                                </div>
                                <span class="ceem-ete-feat-title">Replace &amp;<br>Repair</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon2.png" alt="Reduce Downtime">
                                </div>
                                <span class="ceem-ete-feat-title">Reduce<br>Downtime</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon3.png" alt="Extend Asset Life">
                                </div>
                                <span class="ceem-ete-feat-title">Extend Asset<br>Life</span>
                            </div>
                        </div>
                    </div>
                    <div class="ceem-ete-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 6 -->
                <div class="ceem-ete-col-wrap">
                    <div class="ceem-ete-card">
                        <div class="ceem-ete-card-header">
                            <span class="ceem-ete-num">6</span>
                            <div class="ceem-ete-card-header-text">
                                <h4 class="ceem-ete-card-title">CONTINUOUS IMPROVEMENT</h4>
                                <p class="ceem-ete-card-tagline">Build a Digital Library.</p>
                            </div>
                        </div>
                        <p class="ceem-ete-desc">Store scan and CAD data for future use. Quickly reproduce parts, create improved designs and support your maintenance operations.</p>
                        <div class="ceem-ete-images-box">
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card6-img1.png" alt="Continuous Improvement 1" class="ceem-ete-img">
                            </div>
                            <div class="ceem-ete-img-wrap">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card6-img2.png" alt="Continuous Improvement 2" class="ceem-ete-img">
                            </div>
                        </div>
                        <div class="ceem-ete-bottom-feats">
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon1.png" alt="Parts Database">
                                </div>
                                <span class="ceem-ete-feat-title">Parts<br>Database</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon2.png" alt="Quick Reproduction">
                                </div>
                                <span class="ceem-ete-feat-title">Quick<br>Reproduction</span>
                            </div>
                            <div class="ceem-ete-feat-col">
                                <div class="ceem-ete-feat-icon-box">
                                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/ete-card-icon3.png" alt="Future Upgrades">
                                </div>
                                <span class="ceem-ete-feat-title">Future<br>Upgrades</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>    <!-- CAPEX Section -->
    <section class="ceem-capex-section">
        <div class="ceem-container">
            
            <div class="ceem-capex-header">
                <div class="ceem-capex-top-label">
                    <span>CAPEX Engineering Services</span>
                    <div class="ceem-capex-line"></div>
                </div>
                <h2 class="ceem-capex-title">Build Your In-House Digital Manufacturing Capability <span class="ceem-text-orange">(CAPEX)</span></h2>
                <p class="ceem-capex-desc">Invest in advanced digital manufacturing technologies and establish an in-house engineering and quality-control department.</p>
            </div>

            <!-- Top Workflow -->
            <div class="ceem-capex-workflow d-none d-xl-flex">
                <div class="ceem-capex-step">
                    <div class="ceem-capex-step-num">1</div>
                    <div class="ceem-capex-step-text">
                        <strong>Capture</strong>
                        <span>Accurate 3D Data</span>
                    </div>
                </div>
                <div class="ceem-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="ceem-capex-step">
                    <div class="ceem-capex-step-num">2</div>
                    <div class="ceem-capex-step-text">
                        <strong>Engineer</strong>
                        <span>Create &amp; Optimize</span>
                    </div>
                </div>
                <div class="ceem-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="ceem-capex-step">
                    <div class="ceem-capex-step-num">3</div>
                    <div class="ceem-capex-step-text">
                        <strong>Validate</strong>
                        <span>Inspect &amp; Ensure</span>
                    </div>
                </div>
                <div class="ceem-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="ceem-capex-step">
                    <div class="ceem-capex-step-num">4</div>
                    <div class="ceem-capex-step-text">
                        <strong>Manufacture</strong>
                        <span>Produce &amp; Deliver</span>
                    </div>
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="ceem-capex-cards-grid">
                
                <!-- Card 1 -->
                <div class="ceem-capex-card">
                    <h3 class="ceem-capex-card-title text-center"><span class="ceem-text-orange">3D Scanners</span><br>for Construction &amp; Earthmoving<br>Equipment</h3>
                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card1-img1.png" alt="3D Scanners for Construction &amp; Earthmoving Equipment" class="ceem-capex-hero-img">
                    
                    <div class="ceem-capex-nested ceem-nested-dual border-gray mt-2">
                        <div class="ceem-dual-imgs">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card1-img2.png" alt="FreeScan Trak Nova" class="ceem-dual-img">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card1-img3.png" alt="FreeScan Trak ProW" class="ceem-dual-img">
                        </div>
                        <div class="ceem-dual-title">
                            <span>Tracker-Based<br>3D Scanners</span>
                        </div>
                        <div class="ceem-dual-links">
                            <a href="freescan-track-nova.php">
                                <span>FreeScan<br>Trak Nova</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="freescan-trak-prow.php">
                                <span>FreeScan<br>Trak ProW</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="ceem-capex-nested ceem-nested-dual border-gray mt-2 mb-3">
                        <div class="ceem-dual-imgs">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card1-img4.png" alt="EPIC T150" class="ceem-dual-img">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card1-img5.png" alt="FARO Focus Core" class="ceem-dual-img">
                        </div>
                        <div class="ceem-dual-title">
                            <span>Laser Scanners<br>(for large<br>environments)</span>
                        </div>
                        <div class="ceem-dual-links">
                            <a href="https://wildplantts.com/high-precision-terrestrial-laser-scanner.html" target="_blank">
                                <span>EPIC<br>T150</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="faro-focus-core-laser-scanner.php">
                                <span>FARO<br>Focus<br>Core</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <a href="3d-scanners-in-india.php" class="ceem-capex-btn solid mt-auto">Explore 3D Scanners <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 2 -->
                <div class="ceem-capex-card">
                    <h3 class="ceem-capex-card-title"><span class="ceem-text-orange">3D Reverse<br>Engineering Software</span><br>for Construction &amp; Earthmoving<br>Equipment</h3>
                    <p class="ceem-capex-card-desc">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>
                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card2-img1.png" alt="3D Reverse Engineering Software" class="ceem-capex-hero-img">
                    
                    <div class="ceem-capex-nested border-orange mt-2">
                        <div class="ceem-capex-nested-left">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card2-img2.png" alt="Geomagic Design X">
                            <span><strong>Geomagic Design X</strong><br><small>Dedicated Reverse Engineering Software</small></span>
                        </div>
                        <div class="ceem-capex-nested-right align-self-center">
                            <a href="reverse-engineering-geomagic-design-x.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="ceem-capex-nested border-orange mt-2">
                        <div class="ceem-capex-nested-left">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card2-img3.png" alt="Geomagic for SOLIDWORKS">
                            <span><strong>Geomagic for SOLIDWORKS</strong><br><small>Dedicated Reverse Engineering Software</small></span>
                        </div>
                        <div class="ceem-capex-nested-right align-self-center">
                            <a href="geomagic-for-solidworks-reverse-engineering-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="ceem-capex-nested border-orange mt-2 mb-3">
                        <div class="ceem-capex-nested-left">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card2-img4.png" alt="ExactFlat">
                            <span><strong>ExactFlat</strong><br><small>Automotive Sheet Cover / Sheet Material Flattening Software</small></span>
                        </div>
                        <div class="ceem-capex-nested-right align-self-center">
                            <a href="exactflat.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <a href="reverse-engineering-software-in-india.php" class="ceem-capex-btn outline mt-auto">EXPLORE REVERSE ENGINEERING SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 3 -->
                <div class="ceem-capex-card">
                    <h3 class="ceem-capex-card-title"><span class="ceem-text-orange">3D Inspection<br>Software</span><br>for Construction &amp; Earthmoving<br>Equipment</h3>
                    <p class="ceem-capex-card-desc">Perform dimensional inspection by comparing scanned automotive components against their original CAD models.</p>
                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card3-img1.png" alt="3D Inspection Software" class="ceem-capex-hero-img">
                    
                    <div class="ceem-capex-nested border-orange mt-2 mb-3">
                        <div class="ceem-capex-nested-left align-items-center">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card3-img2.png" alt="Geomagic Control X">
                            <span><strong>Geomagic Control X</strong><br><small>3D Inspection Software</small></span>
                        </div>
                        <div class="ceem-capex-nested-right align-self-center">
                            <a href="geomagic-control-x-3d-inspection-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="ceem-capex-features">
                        <p class="mb-2"><strong>Features:</strong></p>
                        <ul class="ceem-capex-features-list">
                            <li>CAD vs Scan Comparison</li>
                            <li>GD&amp;T</li>
                            <li>First Article Inspection (FAI)</li>
                            <li>Deviation Analysis</li>
                            <li>Colour Deviation Reports</li>
                            <li>Process &amp; Supplier Quality</li>
                            <li>Production QC</li>
                        </ul>
                    </div>

                    <a href="3d-inspection-software-in-india.php" class="ceem-capex-btn outline mt-auto">EXPLORE 3D INSPECTION SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 4 -->
                <div class="ceem-capex-card">
                    <h3 class="ceem-capex-card-title"><span class="ceem-text-orange">3D Printing Solutions<br>to Replace Hand molds</span><br>for Construction &amp; Earthmoving<br>Equipment</h3>
                    <p class="ceem-capex-card-desc">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>
                    
                    <div class="ceem-capex-nested border-gray mb-3 mt-3">
                        <div class="ceem-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card4-img1.png" alt="PEEK 3D Printer" style="max-width: 60px;">
                            <span style="font-size:12px; margin-left: 10px;"><strong>PEEK 3D Printer<br>for High-Performance Jigs<br>&amp; Fixtures</strong><br><small style="color: #64748b; font-size: 11px;">FUNMAT PRO<br>310 APOLLO</small></span>
                            <div class="ceem-capex-nested-right align-self-center ms-auto">
                                <a href="peek-3d-printing-services.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: var(--ceem-orange, #FF931E);"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="ceem-capex-nested border-gray mb-3">
                        <div class="ceem-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/capex-card4-img2.png" alt="Large-Format FDM" style="max-width: 60px;">
                            <span style="font-size:12px; margin-left: 10px;"><strong>Large-Format<br>Industrial FDM<br>Printers</strong><br><small style="color: #64748b; font-size: 11px;">For Jigs, Fixtures, Tools,<br>Templates &amp; Prototypes</small></span>
                            <div class="ceem-capex-nested-right align-self-center ms-auto">
                                <a href="industrial-fdm-3d-printers.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: var(--ceem-orange, #FF931E);"></i></a>
                            </div>
                        </div>
                    </div>

                    <a href="3d-printing-service-in-india.php" class="ceem-capex-btn outline mt-auto">EXPLORE INDUSTRIAL 3D PRINTERS <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>    <!-- OPEX Section -->
    <section class="ceem-opex-section">
        <div class="ceem-container">
            
            <div class="ceem-capex-header">
                <div class="ceem-capex-top-label">
                    <span>OPEX Engineering Services</span>
                    <div class="ceem-capex-line"></div>
                </div>
                <h2 class="ceem-capex-title">3D Scan-based Engineering and 3D Printing Services for<br>Construction &amp; Earthmoving Equipment Manufacturing <span class="ceem-text-orange">(OPEX)</span></h2>
                <p class="ceem-capex-desc mb-2">Not ready to invest? Experience the technology through our engineering services. Our experts can complete your project, demonstrate the workflow and<br>help you evaluate the return on investment based on your actual application.</p>
            </div>

            <div class="ceem-opex-divider">
                <span>From RFQ to Results</span>
            </div>

            <!-- 6-Step Workflow -->
            <div class="ceem-opex-workflow-wrapper">
                <div class="ceem-opex-workflow">
                    <div class="ceem-opex-step">
                        <div class="ceem-opex-step-num">1</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon1.png" alt="Share Your RFQ">
                        <strong>Share Your RFQ</strong>
                        <p>Send your component, application and expected deliverables.</p>
                    </div>
                    <div class="ceem-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                    
                    <div class="ceem-opex-step">
                        <div class="ceem-opex-step-num">2</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon2.png" alt="Receive a Proposal">
                        <strong>Receive a Proposal</strong>
                        <p>We review the requirement and provide a clear quotation.</p>
                    </div>
                    <div class="ceem-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ceem-opex-step">
                        <div class="ceem-opex-step-num">3</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon3.png" alt="Select Workflow">
                        <strong>Select the Right Workflow</strong>
                        <p>We choose the right 3D scanner, software and methodology.</p>
                    </div>
                    <div class="ceem-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ceem-opex-step">
                        <div class="ceem-opex-step-num">4</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon4.png" alt="Execution">
                        <strong>On-Site or In-House Execution</strong>
                        <p>Scanning is completed at your facility or at a Precise3DM centre.</p>
                    </div>
                    <div class="ceem-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ceem-opex-step">
                        <div class="ceem-opex-step-num">5</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon5.png" alt="Deliverables">
                        <strong>Receive Your Deliverables</strong>
                        <p>Get a manufacturing-ready CAD model or inspection report.</p>
                    </div>
                    <div class="ceem-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="ceem-opex-step">
                        <div class="ceem-opex-step-num">6</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon6.png" alt="Pay as OPEX">
                        <strong>Pay as OPEX</strong>
                        <p>Pay against invoice based on agreed terms. Monthly service options are available.</p>
                    </div>
                </div>
            </div>

            <!-- Service Cards Top Grid (3 Cards) -->
            <div class="ceem-opex-grid-top">
                
                <!-- Card 1 -->
                <div class="ceem-opex-card">
                    <h3 class="ceem-opex-card-title">3D Scanning Services for Construction &amp;<br>Earthmoving Equipment Manufacturing</h3>
                    <div class="ceem-opex-img-wrap">
                        <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/opex-card1-img.png" alt="3D Scanning Services" class="ceem-opex-hero-img">
                    </div>
                    <ul class="ceem-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Large Component Scanning</li>
                        <li><i class="fa-solid fa-circle-check"></i> On-site &amp; In-house Scanning</li>
                        <li><i class="fa-solid fa-circle-check"></i> Hard-to-Reach Areas</li>
                        <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
                        <li><i class="fa-solid fa-circle-check"></i> Inspection &amp; Archiving</li>
                    </ul>
                    <a href="3d-services.php" class="ceem-opex-btn">LEARN MORE</a>
                </div>

                <!-- Card 2 -->
                <div class="ceem-opex-card">
                    <h3 class="ceem-opex-card-title">Reverse Engineering Services for<br>Construction &amp; Earthmoving Equipment<br>Manufacturing</h3>
                    <div class="ceem-opex-img-wrap">
                        <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/opex-card2-img.png" alt="Reverse Engineering Services" class="ceem-opex-hero-img">
                    </div>
                    <ul class="ceem-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Scan-to-CAD</li>
                        <li><i class="fa-solid fa-circle-check"></i> Manufacturing-ready CAD</li>
                        <li><i class="fa-solid fa-circle-check"></i> STEP / IGES / Parasolid</li>
                        <li><i class="fa-solid fa-circle-check"></i> 2D Manufacturing Drawings</li>
                    </ul>
                    <a href="3d-Reverse-Engineering-Services-in-india.php" class="ceem-opex-btn">LEARN MORE</a>
                </div>

                <!-- Card 3 -->
                <div class="ceem-opex-card">
                    <h3 class="ceem-opex-card-title">3D Inspection Services for Construction<br>&amp; Earthmoving Equipment Manufacturing</h3>
                    <div class="ceem-opex-img-wrap">
                        <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/opex-card3-img.png" alt="3D Inspection Services" class="ceem-opex-hero-img">
                    </div>
                    <ul class="ceem-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Dimensional Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> GD&amp;T Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> FAI / PPAP Support</li>
                        <li><i class="fa-solid fa-circle-check"></i> First Article Inspection</li>
                    </ul>
                    <a href="3d-inspection-service.php" class="ceem-opex-btn">LEARN MORE</a>
                </div>

            </div>
            
            <!-- Service Cards Bottom Grid (2 Cards) -->
            <div class="ceem-opex-grid-bottom">
                
                <!-- Card 4 (3D Printing) -->
                <div class="ceem-opex-card">
                    <h3 class="ceem-opex-card-title">3D Printing Services for Construction &amp;<br>Earthmoving Equipment Manufacturing</h3>
                    <div class="ceem-opex-print-boxes w-100">
                        <div class="ceem-opex-nested-box mb-3">
                            <div class="ceem-opex-nested-left">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/opex-card4-img1.png" alt="PEEK 3D Printer">
                                <div class="ceem-opex-nested-text">
                                    <strong>PEEK 3D Printer<br>for High-Performance Jigs<br>&amp; Fixtures</strong>
                                    <small>FUNMAT PRO<br>310 APOLLO</small>
                                </div>
                            </div>
                            <div class="ceem-opex-nested-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>

                        <div class="ceem-opex-nested-box mb-3">
                            <div class="ceem-opex-nested-left">
                                <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/opex-card4-img2.png" alt="Large-Format FDM">
                                <div class="ceem-opex-nested-text">
                                    <strong>Large-Format<br>Industrial FDM<br>Printers</strong>
                                    <small>For Jigs, Fixtures, Tools,<br>Templates &amp; Prototypes</small>
                                </div>
                            </div>
                            <div class="ceem-opex-nested-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <a href="3d-printing-service-in-india.php" class="ceem-opex-btn">LEARN MORE</a>
                </div>

                <!-- Card 5 (Benchmarking) -->
                <div class="ceem-opex-card">
                    <h3 class="ceem-opex-card-title">Machinery Benchmarking &amp; Retrofit<br>Services for Construction &amp; Earthmoving<br>Equipment Manufacturing</h3>
                    <div class="ceem-opex-img-wrap">
                        <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/opex-card5-img.png" alt="Machinery Benchmarking &amp; Retrofit" class="ceem-opex-hero-img">
                    </div>
                    <ul class="ceem-opex-list">
                        <li><i class="fa-solid fa-circle-check"></i> Component-Level Analysis</li>
                        <li><i class="fa-solid fa-circle-check"></i> Reverse Engineering</li>
                        <li><i class="fa-solid fa-circle-check"></i> CAD Development</li>
                        <li><i class="fa-solid fa-circle-check"></i> Manufacturing Insights</li>
                    </ul>
                    <a href="digital-benchmarking-service-in-india.php" class="ceem-opex-btn">LEARN MORE</a>
                </div>
            </div>

        </div>
    </section><!-- Buy or Outsource Section -->
    <section class="ceem-boo-section">
        <div class="ceem-container">
            <div class="ceem-boo-grid">
                
                <!-- Card 1 (Dark) -->
                <div class="ceem-boo-card dark">
                    <h2 class="ceem-boo-title"><span style="color: var(--ceem-orange);">BUY OR<br>OUTSOURCE?</span><br>CHOOSE WHAT<br>WORKS<br>BEST FOR YOUR<br>BUSINESS</h2>
                    <div class="ceem-boo-icons-row">
                        <img src="assets/images/dms-for-tool-die-manufacturing/Vedtor.png" alt="Buy">
                        <span>&#8594;</span>
                        <img src="assets/images/dms-for-tool-die-manufacturing/Vectfdor.png" alt="Outsource">
                    </div>
                </div>

                <!-- Card 2 (CAPEX) -->
                <div class="ceem-boo-card ceem-position-relative" style="background:#fff7ed; border-color:#fed7aa;">
                    <h3 class="ceem-boo-card-title text-danger">BUILD IN-HOUSE (CAPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="ceem-boo-list green-check-small">
                        <li><i class="fa-solid fa-check"></i> Frequent Scanning and Reverse Engineering</li>
                        <li><i class="fa-solid fa-check"></i> Daily QC &amp; Inspection</li>
                        <li><i class="fa-solid fa-check"></i> Internal NPD &amp; Tool Rooms</li>
                        <li><i class="fa-solid fa-check"></i> Production Inspection</li>
                        <li><i class="fa-solid fa-check"></i> Long-Term Capability Building</li>
                    </ul>
                    <a href="3d-products.php" class="ceem-boo-btn orange">EXPLORE CAPEX SOLUTIONS</a>
                    
                    <!-- OR Badge -->
                    <div class="ceem-boo-or-badge">OR</div>
                </div>

                <!-- Card 3 (OPEX) -->
                <div class="ceem-boo-card" style="background:#f0fdf4; border-color:#bbf7d0;">
                    <h3 class="ceem-boo-card-title text-success">USE OUR ENGINEERING TEAM (OPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="ceem-boo-list green-check-circle-small">
                        <li><i class="fa-regular fa-circle-check"></i> One-Time Projects &amp; Immediate Requirements</li>
                        <li><i class="fa-regular fa-circle-check"></i> Technology Evaluation</li>
                        <li><i class="fa-regular fa-circle-check"></i> Specialized Inspections</li>
                        <li><i class="fa-regular fa-circle-check"></i> Benchmarking Projects</li>
                        <li><i class="fa-regular fa-circle-check"></i> Occasional Reverse Engineering</li>
                    </ul>
                    <a href="3d-services.php" class="ceem-boo-btn orange">EXPLORE ENGINEERING SERVICES</a>
                </div>

            </div>
        </div>
    </section>


    <!-- Engagement Models Section -->
    

        <!-- Why Choose Section -->
    <section class="ceem-why-choose-section">
        <div class="ceem-container" style="padding: 0 15px;">
            <div class="ceem-why-choose-card">
                
                <div class="ceem-why-choose-left">
                    <img src="assets/images/dms-for-construction-earthmoving-equipment-manufacturing/why-choose-img.png" alt="Why Construction &amp; Earthmoving Equipment Companies Choose Precise3DM" class="ceem-why-choose-truck-img">
                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/precise3dm-logo.png" alt="Precise3DM Logo" class="ceem-why-choose-logo">
                </div>

                <!-- Content Side -->
                <div class="ceem-why-choose-content">
                    <h2 class="ceem-why-choose-title">Why Construction &amp; Earth-moving<br>Equipment Manufacturing Companies<br>Choose <span>Precise3DM?</span></h2>
                    <ul class="ceem-why-choose-list">
                        <li><div class="ceem-why-choose-custom-icon"></div> Complete digital manufacturing solutions provider</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Industrial 3D scanners for any site components</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Reverse Engineering Scan-to-CAD expertise</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Meterology &amp; Engineering software expertise</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Industrial 3D printing solutions for manufacturing aids</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Pan-India Sales, Service, Training &amp; Technical Support</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Advanced 3D inspections &amp; quality control workflows</li>
                        <li><div class="ceem-why-choose-custom-icon"></div> Solution for OEMs, machine builders, tool rooms &amp; maintenance teams</li>
                    </ul>
                    <a href="About_us.php" class="ceem-why-choose-btn">Know More About Precise 3DM</a>
                </div>

            </div>
        </div>
    </section><!-- Technology Partners Section -->
    <section class="ceem-partners-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid ceem-ind-container">
            <h2 class="ceem-partners-title text-center mb-5">Our Technology Partners</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-1.png" alt="Shining 3D" class="img-fluid ceem-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-2.png" alt="Hexagon" class="img-fluid ceem-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-3.png" alt="ExactFlat" class="img-fluid ceem-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-4.png" alt="TrueProp" class="img-fluid ceem-partners-logo" style="max-height: 100px; transform: scale(1.1);">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-5.png" alt="EPIC" class="img-fluid ceem-partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="ceem-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="ceem-contact-inner-container p-4 p-xl-5 position-relative" style="background-image: url('assets/images/blog-26-freescan-trak-nova-5-functionality-in-1-device/contact-bg.png'); background-size: cover; background-position: center; border-radius: 16px;">

                <div class="text-center mb-4">
                    <h2 class="ceem-contact-main-title">Ready to Digitally Transform <span style="color: #FF931E;">Your Automotive Manufacturing?</span></h2>
                    <p class="ceem-contact-main-desc mt-3 mx-auto" style="max-width: 1100px;">Whether you're planning to invest in advanced digital manufacturing technologies or need immediate engineering support, Precise3DM can help you select the right solution for your application.</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-4 mb-5" style="gap: 20px;">
                    <a href="3d-products.php" class="ceem-contact-top-btn px-5 py-3">3D Products</a>
                    <a href="3d-services.php" class="ceem-contact-top-btn px-5 py-3">3D Services</a>
                </div>

                <div class="ceem-contact-divider mb-5 mx-auto"></div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="ceem-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-1.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="ceem-contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SERVICES</span></h3>
                            </div>
                            <p class="ceem-contact-card-desc mb-4 flex-grow-1">Tell us about your project and get a customized service quote.</p>
                            <a href="Get-3d-scan-service-quote.php" class="ceem-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SERVICES <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="ceem-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-2.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="ceem-contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="ceem-contact-card-desc mb-4 flex-grow-1">Looking to buy a 3D scanner? Get the best price and expert guidance.</p>
                            <a href="scanning-solution-form.php" class="ceem-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="ceem-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="ceem-contact-card-title mb-0">MEET US LIVE <br><span style="color: #FF931E;">ONLINE NOW</span></h3>
                            </div>
                            <p class="ceem-contact-card-desc mb-4 flex-grow-1">Connect with our experts instantly for live guidance and support.</p>
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="ceem-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">MEET US LIVE ONLINE NOW <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="ceem-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="ceem-contact-card-title mb-0">BOOK DEMO <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="ceem-contact-card-desc mb-4 flex-grow-1">Schedule a live demo and experience the power of Precise3DM scanners.</p>
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="ceem-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">BOOK DEMO FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
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








