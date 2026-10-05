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
    <link rel="stylesheet" href="assets/css/railway-locomotive-industry.css">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include "includes/header.php"; ?>

    <!-- Main Content Starts Here -->
    <section class="rli-ind-hero-section">
        <!-- Adding overlay gradient explicitly via CSS, but putting image as background -->
        <div class="container-fluid rli-ind-container">
            <!-- Top Right Contact -->
            <div class="row d-none d-lg-flex">
                <div class="col-12 d-flex justify-content-end pt-4 pb-3">
                    <div class="rli-top-contact d-flex align-items-center" style="gap: 10px;">
                        <div class="rli-contact-icon">
                            <i class="fa-solid fa-phone" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="rli-contact-info ms-3 text-start">
                            <div class="rli-contact-title text-white">Call us now</div>
                            <div class="rli-contact-numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center pb-5">
                <!-- Left Side Content -->
                <div class="col-lg-7">
                    <h1 class="rli-hero-main-title text-white">Digital Manufacturing Solutions for <br><span class="text-orange">Railway & Locomotive Industry</span></h1>
                    <h3 class="rli-hero-subtitle text-white">Ensure Safety. Improve Reliability. Reduce Downtime.<br>Accelerate Innovation.</h3>
                    <p class="rli-hero-desc text-white">Precise3DM empowers railway OEMs, rolling stock manufacturers, component suppliers, maintenance depots and infrastructure companies with advanced 3D scanning, reverse engineering, 3D printing and inspection technologies.</p>
                    <p class="rli-hero-desc text-white">From new product development to refurbishment, modification, spare-part manufacturing and quality controlâ€”Precise3DM delivers a complete digital manufacturing ecosystem built for the rail industry.</p>

                    <div class="rli-hero-buttons d-flex flex-wrap mt-4" style="gap: 20px;">
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="btn-talk">Talk to an Expert</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-demo">Book a live demo</a>
                    </div>

                    <div class="rli-bottom-contact d-flex align-items-center mt-5 pt-3">
                        <div class="rli-contact-icon email-icon">
                            <i class="fa-solid fa-envelope" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="rli-contact-info ms-3">
                            <div class="rli-contact-title text-white">Email Us</div>
                            <div class="rli-contact-emails">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Call us now (Mobile/Tablet View) -->
                    <div class="rli-top-contact d-flex d-lg-none align-items-center mt-4" style="gap: 10px;">
                        <div class="rli-contact-icon">
                            <i class="fa-solid fa-phone" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <div class="rli-contact-info ms-3 text-start">
                            <div class="rli-contact-title text-white">Call us now</div>
                            <div class="rli-contact-numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Empty (Background covers full width) -->
                <div class="col-lg-5">
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Stat Section -->
    <section class="rli-stat-section py-5">
        <div class="container-fluid rli-ind-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center rli-stat-row">

                <!-- Stat 1 -->
                <div class="rli-stat-item d-flex align-items-center">
                    <div class="rli-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-1.svg" alt="10+ Years">
                    </div>
                    <div class="rli-stat-content">
                        <div class="rli-stat-title">10+</div>
                        <div class="rli-stat-subtitle">Years of Expertise</div>
                    </div>
                </div>

                <div class="rli-stat-divider"></div>

                <!-- Stat 2 -->
                <div class="rli-stat-item d-flex align-items-center">
                    <div class="rli-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-2.png" alt="250+ Scanners sold">
                    </div>
                    <div class="rli-stat-content">
                        <div class="rli-stat-title">250+</div>
                        <div class="rli-stat-subtitle">Scanners sold</div>
                        <div class="rli-stat-desc">under CAPEX investment</div>
                    </div>
                </div>

                <div class="rli-stat-divider"></div>

                <!-- Stat 3 -->
                <div class="rli-stat-item d-flex align-items-center">
                    <div class="rli-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-3.svg" alt="60+ Applications">
                    </div>
                    <div class="rli-stat-content">
                        <div class="rli-stat-title">60+</div>
                        <div class="rli-stat-subtitle">Scan-based applications</div>
                        <div class="rli-stat-desc">for advanced manufacturing</div>
                    </div>
                </div>

                <div class="rli-stat-divider"></div>

                <!-- Stat 4 -->
                <div class="rli-stat-item d-flex align-items-center">
                    <div class="rli-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-4.svg" alt="8+ Locations">
                    </div>
                    <div class="rli-stat-content">
                        <div class="rli-stat-title">8+</div>
                        <div class="rli-stat-subtitle">Direct locations</div>
                        <div class="rli-stat-desc">across India</div>
                    </div>
                </div>

                <div class="rli-stat-divider"></div>

                <!-- Stat 5 -->
                <div class="rli-stat-item d-flex align-items-center">
                    <div class="rli-stat-icon me-3">
                        <img src="assets/images/dms-for-railway-locomotive-industry/hero-stat-5.svg" alt="15+ Countries">
                    </div>
                    <div class="rli-stat-content">
                        <div class="rli-stat-title">15+</div>
                        <div class="rli-stat-subtitle">Countries served</div>
                        <div class="rli-stat-desc">Global 3D services</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="rli-overview-section">
        <div class="rli-container">
            <div class="rli-overview-wrapper">
                
                <!-- Left Side -->
                <div class="rli-overview-left">
                    <h4 class="rli-overview-subtitle">Overview</h4>
                    <h2 class="rli-overview-title">Powering the Future of Rail Mobility with Digital Manufacturing</h2>
                    <p>The railway industry demands uncompromising safety, precision engineering and long-term reliability. Components must perform in extreme operating conditions while ensuring maximum uptime.</p>
                    <p>Precise3DM's digital manufacturing solutions help you digitise, analyse, engineer and manufacture with greater accuracy and efficiency. Whether you are building high-speed trains, locomotives, metro systems, freight wagons or railway components - our technologies and engineering services deliver measurable value across the entire lifecycle.</p>
                </div>

                <!-- Right Side -->
                <div class="rli-overview-right">
                    <div class="rli-ovca-card">
                        <h3 class="rli-ovca-title">Common Applications</h3>
                        <div class="rli-ovca-grid">
                            
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon1.png" alt="Locomotive Components">
                                <span>Locomotive<br>Components</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon4.png" alt="Bogies & Wheelsets">
                                <span>Bogies &<br>Wheelsets</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon7.png" alt="Wheels & Axles">
                                <span>Wheels &<br>Axles</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon10.png" alt="Brake Systems">
                                <span>Brake<br>Systems</span>
                            </div>
                            
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon2.png" alt="Couplers & Buffers">
                                <span>Couplers &<br>Buffers</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon5.png" alt="Interior Components">
                                <span>Interior<br>Components</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon8.png" alt="Sheet Metal Parts">
                                <span>Sheet Metal<br>Parts</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon11.png" alt="Track & Infrastructure">
                                <span>Track &<br>Infrastructure</span>
                            </div>

                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon3.png" alt="Maintenance & Retrofit">
                                <span>Maintenance<br>& Retrofit</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon6.png" alt="Spare Parts Manufacturing">
                                <span>Spare Parts<br>Manufacturing</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon9.png" alt="Quality Inspection">
                                <span>Quality<br>Inspection</span>
                            </div>
                            <div class="rli-ovca-item">
                                <img src="assets/images/dms-for-railway-locomotive-industry/ov-icon12.png" alt="Jigs, Fixtures & Tooling">
                                <span>Jigs, Fixtures<br>& Tooling</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Challenges Section -->
    <section class="rli-cwc-section">
        <div class="rli-container text-center">
            <h2 class="rli-section-title">Challenges with Conventional Processes in<br>Railway & Locomotive Manufacturing</h2>
            
            <div class="rli-cwc-wrapper">
                <div class="row gx-4 gy-4">
                    
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rli-cwc-card">
                            <div class="rli-cwc-header">
                                <div class="rli-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                                <h3>Manual Measurement of Large &<br>Complex Railway Components</h3>
                            </div>
                            <img src="assets/images/dms-for-railway-locomotive-industry/cwc-img1.png" alt="Manual Measurement" class="rli-cwc-img">
                            <ul class="rli-cwc-list text-start">
                                <li>Bogies, wheelsets and underframes are difficult to measure</li>
                                <li>Complex curves and hidden features are easily missed</li>
                                <li>Multiple setups and scaffolding are required</li>
                                <li>Operator-dependent and inconsistent data</li>
                                <li>Higher risk of errors and rework</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rli-cwc-card">
                            <div class="rli-cwc-header">
                                <div class="rli-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                                <h3>Conventional Design &<br>Reverse Engineering</h3>
                            </div>
                            <img src="assets/images/dms-for-railway-locomotive-industry/cwc-img2.png" alt="Reverse Engineering" class="rli-cwc-img">
                            <ul class="rli-cwc-list text-start">
                                <li>Legacy parts often have no original CAD data</li>
                                <li>Multiple 2D drawings and manual measurements</li>
                                <li>Worn parts are difficult to reconstruct accurately</li>
                                <li>Material waste and machining errors</li>
                                <li>Slower spare-part development</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rli-cwc-card">
                            <div class="rli-cwc-header">
                                <div class="rli-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                                <h3>Conventional CMM Inspection</h3>
                            </div>
                            <img src="assets/images/dms-for-railway-locomotive-industry/cwc-img3.png" alt="CMM Inspection" class="rli-cwc-img">
                            <ul class="rli-cwc-list text-start">
                                <li>Large railway components may not fit on a CMM</li>
                                <li>Point-by-point measurement captures limited data</li>
                                <li>Slow inspection cycles and complex setups</li>
                                <li>Difficult to inspect bogies, couplers and castings</li>
                                <li>Higher dependence on skilled operators</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rli-cwc-card">
                            <div class="rli-cwc-header">
                                <div class="rli-cwc-cross-icon"><i class="fa-solid fa-xmark"></i></div>
                                <h3>Impact on Your Business</h3>
                            </div>
                            <img src="assets/images/dms-for-railway-locomotive-industry/cwc-img4.png" alt="Impact on Business" class="rli-cwc-img">
                            <ul class="rli-cwc-list text-start">
                                <li>Higher locomotive and production downtime</li>
                                <li>Longer maintenance & refurbishment cycles</li>
                                <li>Increased rework, rejection & scrap</li>
                                <li>Delays in spare-part availability</li>
                                <li>Higher inspection and production costs</li>
                                <li>Reduced reliability and profitability</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End-To-End Section -->
    <section class="rli-ete-section">
        <div class="rli-container">
            
            <!-- Header Row -->
            <div class="row align-items-center mb-4">
                <div class="col-lg-7 col-md-12">
                    <h2 class="rli-ete-title">End-To-End Digital Manufacturing<br>Solutions for Railway & Locomotive<br>Industry</h2>
                    <h3 class="rli-ete-subtitle">From Rail Assets to Reliable Operations</h3>
                    <p class="rli-ete-flow">Scan | Create CAD | Benchmark/New Product Development | 3D Print | Manufacture | Inspect</p>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="rli-ete-top-right-container">
                        <img src="assets/images/dms-for-railway-locomotive-industry/ete-right-img.png" alt="Digital Manufacturing for Railway" class="rli-ete-top-right-img">
                        <div class="rli-ete-top-right-overlay">
                            <div class="rli-ete-overlay-inner">
                                <div class="rli-ete-overlay-title">DIGITAL<br>MANUFACTURING<br>FOR A SAFER,<br>SMARTER AND MORE<br>RELIABLE RAILWAY.</div>
                                <div class="rli-ete-overlay-line"></div>
                                <div class="rli-ete-overlay-list">SCAN.<br>DESIGN.<br>PRINT.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Row -->
            <div class="row gx-3">
                <!-- Card 1 -->
                <div class="col-lg col-md-6 mb-4 rli-ete-col">
                    <div class="rli-ete-card">
                        <div class="rli-ete-card-header">
                            <span class="rli-ete-num">1</span>
                            <div>
                                <h4>3D SCAN</h4>
                                <p>Entire Train<br>Systems Components</p>
                            </div>
                        </div>
                        <p class="rli-ete-desc">Capture accurate 3D data of complete locomotives, coaches, bogies or individual components in workshops, depots or on-site</p>
                        <img src="assets/images/dms-for-railway-locomotive-industry/ete-img1.png" alt="3D Scan" class="mb-3 mt-auto">
                        <div class="rli-ete-features-list mt-auto">
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card1-icon1.png" alt="Large Scale Scanning"></div>
                                <span class="rli-ete-feature-text">Large Scale<br>Scanning</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card1-icon2.png" alt="High Accuracy"></div>
                                <span class="rli-ete-feature-text">High Accuracy</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card1-icon3.png" alt="On site & In plant Capture"></div>
                                <span class="rli-ete-feature-text">On site & In plant<br>Capture</span>
                            </div>
                        </div>
                    </div>
                    <div class="rli-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-lg col-md-6 mb-4 rli-ete-col">
                    <div class="rli-ete-card">
                        <div class="rli-ete-card-header">
                            <span class="rli-ete-num">2</span>
                            <div>
                                <h4>CREATE CAD</h4>
                                <p>As-Built to<br>Parametric Models</p>
                            </div>
                        </div>
                        <p class="rli-ete-desc">Convert scan data into precise CAD models for reverse engineering. remanufacturing, retrofitting or new design development.</p>
                        <img src="assets/images/dms-for-railway-locomotive-industry/ete-img2.png" alt="Create CAD" class="mb-3 mt-auto">
                        <div class="rli-ete-features-list mt-auto">
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card2-icon1.png" alt="Scan to CAD"></div>
                                <span class="rli-ete-feature-text">Scan to CAD</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card2-icon2.png" alt="Parametric Models"></div>
                                <span class="rli-ete-feature-text">Parametric Models</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card2-icon3.png" alt="NPD & Modification"></div>
                                <span class="rli-ete-feature-text">NPD & Modification</span>
                            </div>
                        </div>
                    </div>
                    <div class="rli-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg col-md-6 mb-4 rli-ete-col">
                    <div class="rli-ete-card">
                        <div class="rli-ete-card-header">
                            <span class="rli-ete-num">3</span>
                            <div>
                                <h4>3D PRINT</h4>
                                <p>Metal & Industrial<br>Polymers</p>
                            </div>
                        </div>
                        <p class="rli-ete-desc">Use validated CAD models to 3D print functional parts, replacement components or tooling for railway applications using Metal (PBF), FDM or high-performance polymers</p>
                        <img src="assets/images/dms-for-railway-locomotive-industry/ete-img3.png" alt="3D Print" class="mb-3 mt-auto">
                        <div class="rli-ete-features-list mt-auto">
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card3-icon1.png" alt="FDM Plastics"></div>
                                <span class="rli-ete-feature-text">FDM Plastics</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card3-icon2.png" alt="PEEK Hi-Temp"></div>
                                <span class="rli-ete-feature-text">PEEK Hi- Temp</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card3-icon3.png" alt="Metal 3D Print"></div>
                                <span class="rli-ete-feature-text">Metal 3D Print</span>
                            </div>
                        </div>
                    </div>
                    <div class="rli-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg col-md-6 mb-4 rli-ete-col">
                    <div class="rli-ete-card">
                        <div class="rli-ete-card-header">
                            <span class="rli-ete-num">4</span>
                            <div>
                                <h4>MANUFACTURE</h4>
                                <p>From Prototype<br>to Production</p>
                            </div>
                        </div>
                        <p class="rli-ete-desc">Use the validated CAD design for manufacturing, repair, replacement or modification through machining, casting, forming or hybrid manufacturing</p>
                        <img src="assets/images/dms-for-railway-locomotive-industry/ete-img4.png" alt="Manufacture" class="mb-3 mt-auto">
                        <div class="rli-ete-features-list mt-auto">
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card4-icon1.png" alt="CNC Machining"></div>
                                <span class="rli-ete-feature-text">CNC Machining</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card4-icon2.png" alt="Casting & Molding"></div>
                                <span class="rli-ete-feature-text">Casting & Molding</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card4-icon3.png" alt="Production Ready"></div>
                                <span class="rli-ete-feature-text">Production Ready</span>
                            </div>
                        </div>
                    </div>
                    <div class="rli-ete-arrow d-none d-lg-flex"><i class="fa-solid fa-chevron-right"></i></div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg col-md-6 mb-4 rli-ete-col">
                    <div class="rli-ete-card">
                        <div class="rli-ete-card-header">
                            <span class="rli-ete-num">5</span>
                            <div>
                                <h4>3D INSPECT</h4>
                                <p>Ensure Safety.<br>Ensure Reliability</p>
                            </div>
                        </div>
                        <p class="rli-ete-desc">Compare manufactured parts or assembled systems with the original CAD model or 2D drawings. Perform dimensional analysis, GD&T, fitment checks and digital inspection</p>
                        <img src="assets/images/dms-for-railway-locomotive-industry/ete-img5.png" alt="3D Inspect" class="mb-3 mt-auto">
                        <div class="rli-ete-features-list mt-auto">
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card5-icon1.png" alt="CAD Compare"></div>
                                <span class="rli-ete-feature-text">CAD Compare</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card5-icon2.png" alt="Dimensional Valid"></div>
                                <span class="rli-ete-feature-text">Dimensional Valid</span>
                            </div>
                            <div class="rli-ete-feature-item">
                                <div class="rli-ete-feature-icon"><img src="assets/images/dms-for-railway-locomotive-industry/ete-card5-icon3.png" alt="Detailed Reports"></div>
                                <span class="rli-ete-feature-text">Detailed Reports</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


        <!-- CAPEX Section -->
    <section class="rli-capex-section">
        <div class="rli-container">
            
            <div class="rli-capex-header">
                <div class="rli-capex-top-label">
                    <span>CAPEX Engineering Services</span>
                    <div class="rli-capex-line"></div>
                </div>
                <h2 class="rli-capex-title">Build Your In-House Digital Manufacturing Capability <span class="rli-text-orange">(CAPEX)</span></h2>
                <p class="rli-capex-desc">Invest in advanced digital manufacturing technologies and establish an in-house engineering and quality-control department.</p>
            </div>

            <!-- Top Workflow -->
            <div class="rli-capex-workflow d-none d-xl-flex">
                <div class="rli-capex-step">
                    <div class="rli-capex-step-num">1</div>
                    <div class="rli-capex-step-text">
                        <strong>Capture</strong>
                        <span>Accurate 3D Data</span>
                    </div>
                </div>
                <div class="rli-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="rli-capex-step">
                    <div class="rli-capex-step-num">2</div>
                    <div class="rli-capex-step-text">
                        <strong>Engineer</strong>
                        <span>Create & Optimize</span>
                    </div>
                </div>
                <div class="rli-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="rli-capex-step">
                    <div class="rli-capex-step-num">3</div>
                    <div class="rli-capex-step-text">
                        <strong>Validate</strong>
                        <span>Inspect & Ensure</span>
                    </div>
                </div>
                <div class="rli-capex-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="rli-capex-step">
                    <div class="rli-capex-step-num">4</div>
                    <div class="rli-capex-step-text">
                        <strong>Manufacture</strong>
                        <span>Produce & Deliver</span>
                    </div>
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="rli-capex-cards-grid">
                
                <!-- Card 1 -->
                <div class="rli-capex-card">
                    <h3 class="rli-capex-card-title"><span class="rli-text-orange">3D Scanners</span><br>for Railway & Locomotive</h3>
                    <img src="assets/images/dms-for-railway-locomotive-industry/capex-img1.png" alt="3D Scanners" class="rli-capex-hero-img">
                    
                    <div class="rli-capex-nested border-gray mt-2">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card1-img2.png" alt="Handheld Laser 3D Scanners">
                            <span><strong>Handheld Laser<br>3D Scanners</strong></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center text-end">
                            <a href="freescan-omni.php" class="d-flex justify-content-end align-items-center mb-1"><span class="rli-text-orange me-2" style="font-size:11px;">FreeScan<br>Omni</span> <i class="fa-solid fa-arrow-right"></i></a>
                            <a href="FreeScan-Combo.php" class="d-flex justify-content-end align-items-center"><span class="rli-text-orange me-2" style="font-size:11px;">FreeScan<br>Combo</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="rli-capex-nested border-gray mt-2">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card1-img3.png" alt="Optical 3D Scanners">
                            <span><strong>Optical 3D<br>Scanners</strong></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center text-end">
                            <a href="optimscan-q12.php" class="d-flex justify-content-end align-items-center mb-1"><span class="rli-text-orange me-2" style="font-size:11px;">OptimScan Q12</span> <i class="fa-solid fa-arrow-right"></i></a>
                            <a href="automatic-desktop-3d-scanner.php" class="d-flex justify-content-end align-items-center"><span class="rli-text-orange me-2" style="font-size:11px;">AutoInspect 2</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="rli-capex-nested border-gray mt-2">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card1-img4.png" alt="Tracker-Based 3D Scanner">
                            <span><strong>Tracker-Based<br>3D Scanner</strong></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center text-end">
                            <a href="freescan-track-nova.php" class="d-flex justify-content-end align-items-center"><span class="rli-text-orange me-2" style="font-size:11px;">FreeScan<br>Trak Nova</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="rli-capex-nested border-gray mt-2 mb-3">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card1-img5.png" alt="Long-Range LiDAR">
                            <span><strong>Long-Range<br>LiDAR</strong></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center text-end">
                            <a href="lidar-scanners.php" class="d-flex justify-content-end align-items-center"><span class="rli-text-orange me-2" style="font-size:11px;">EPIC<br>Wildplantts</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <a href="3d-scanners-in-india.php" class="rli-capex-btn solid mt-auto">EXPLORE RAILWAY 3D SCANNERS <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 2 -->
                <div class="rli-capex-card">
                    <h3 class="rli-capex-card-title"><span class="rli-text-orange">3D Reverse<br>Engineering Software</span><br>for Railway & Locomotive</h3>
                    <p class="rli-capex-card-desc">Convert scan data into editable, manufacturing-ready CAD models for redesign, product development and manufacturing.</p>
                    <img src="assets/images/dms-for-railway-locomotive-industry/capex-img2.png" alt="Reverse Engineering Software" class="rli-capex-hero-img">
                    
                    <div class="rli-capex-nested border-orange mt-2">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card2-img2.png" alt="Geomagic Design X">
                            <span><strong>Geomagic Design X</strong><br><small>Dedicated Reverse Engineering<br>Software</small></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center">
                            <a href="reverse-engineering-geomagic-design-x.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="rli-capex-nested border-orange mt-2">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card2-img3.png" alt="Geomagic for SOLIDWORKS">
                            <span><strong>Geomagic for SOLIDWORKS</strong><br><small>Dedicated Reverse Engineering<br>Software</small></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center">
                            <a href="geomagic-for-solidworks-reverse-engineering-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="rli-capex-nested border-orange mt-2 mb-3">
                        <div class="rli-capex-nested-left">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card2-img4.png" alt="ExactFlat">
                            <span><strong>ExactFlat</strong><br><small>Automotive Sheet Cover / Sheet<br>Material Flattening Software</small></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center">
                            <a href="exactflat.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <a href="reverse-engineering-software-in-india.php" class="rli-capex-btn outline mt-auto">EXPLORE REVERSE ENGINEERING SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 3 -->
                <div class="rli-capex-card">
                    <h3 class="rli-capex-card-title"><span class="rli-text-orange">3D Inspection<br>Software</span><br>for Railway & Locomotive</h3>
                    <p class="rli-capex-card-desc">Perform dimensional inspection by comparing scanned railway components against their original CAD models.</p>
                    <img src="assets/images/dms-for-railway-locomotive-industry/capex-img3.png" alt="Inspection Software" class="rli-capex-hero-img">
                    
                    <div class="rli-capex-nested border-orange mt-2 mb-3">
                        <div class="rli-capex-nested-left align-items-center">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card3-img2.png" alt="Geomagic Control X">
                            <span><strong>Geomagic Control X</strong><br><small>3D Inspection Software</small></span>
                        </div>
                        <div class="rli-capex-nested-right align-self-center">
                            <a href="geomagic-control-x-3d-inspection-software.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="rli-capex-features">
                        <p>Features:</p>
                        <ul>
                            <li>3D Inspection Software</li>
                            <li>CAD vs Scan Comparison</li>
                            <li>GD&T</li>
                            <li>Wall Thickness Analysis</li>
                            <li>Draft & Undercut Analysis</li>
                            <li>Warpage & Deformation Analysis</li>
                            <li>First Article Inspection (FAI)</li>
                        </ul>
                    </div>

                    <a href="3d-inspection-software-in-india.php" class="rli-capex-btn outline mt-auto">EXPLORE 3D INSPECTION SOFTWARE <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 4 -->
                <div class="rli-capex-card">
                    <h3 class="rli-capex-card-title"><span class="rli-text-orange">Industrial 3D Printing<br>Solutions</span><br>for Railway & Locomotive</h3>
                    <p class="rli-capex-card-desc">Accelerate product development and manufacturing using industrial additive manufacturing technologies.</p>
                    
                    <div class="rli-capex-nested border-gray mb-3 mt-3">
                        <div class="rli-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card4-img1.png" alt="PEEK 3D Printer" style="max-width: 60px;">
                            <span style="font-size:14px; margin-left: 10px;"><strong>PEEK 3D Printer<br>for EV</strong><br><small style="color: #64748b;">FUNMAT PRO<br>310 APOLLO</small></span>
                            <div class="rli-capex-nested-right align-self-center ms-auto">
                                <a href="peek-3d-printing-services.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: var(--rli-orange);"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rli-capex-nested border-gray mb-3">
                        <div class="rli-capex-nested-left align-items-center w-100">
                            <img src="assets/images/dms-for-railway-locomotive-industry/capex-card4-img2.png" alt="Large-Format FDM" style="max-width: 60px;">
                            <span style="font-size:14px; margin-left: 10px;"><strong>Large-Format<br>Industrial FDM<br>Printers</strong><br><small style="color: #64748b;">For jigs, fixtures,<br>prototypes, body panels,<br>ducts & molds.</small></span>
                            <div class="rli-capex-nested-right align-self-center ms-auto">
                                <a href="industrial-fdm-3d-printers.php"><i class="fa-solid fa-arrow-right" style="font-size:14px; color: var(--rli-orange);"></i></a>
                            </div>
                        </div>
                    </div>

                    <a href="3d-printing-service-in-india.php" class="rli-capex-btn outline mt-auto">EXPLORE INDUSTRIAL 3D PRINTERS <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    


    <!-- OPEX Section -->
    <section class="rli-opex-section">
        <div class="rli-container">
            
            <div class="rli-capex-header">
                <div class="rli-capex-top-label">
                    <span>OPEX Engineering Services</span>
                    <div class="rli-capex-line"></div>
                </div>
                <h2 class="rli-capex-title">3D Scan-based Engineering and 3D Printing Services for<br>Railway & Locomotive Industry <span class="rli-text-orange">(OPEX)</span></h2>
                <p class="rli-capex-desc mb-2">Not ready to invest? Experience the technology through our engineering services. Our experts can complete your project, demonstrate the workflow and<br>help you evaluate the return on investment based on your actual application.</p>
            </div>

            <div class="rli-opex-divider">
                <span>From RFQ to Results</span>
            </div>

            <!-- 6-Step Workflow -->
            <div class="rli-opex-workflow-wrapper">
                <div class="rli-opex-workflow">
                    <div class="rli-opex-step">
                        <div class="rli-opex-step-num">1</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon1.png" alt="Share Your RFQ">
                        <strong>Share Your RFQ</strong>
                        <p>Send your component, application and expected deliverables.</p>
                    </div>
                    <div class="rli-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                    
                    <div class="rli-opex-step">
                        <div class="rli-opex-step-num">2</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon2.png" alt="Receive a Proposal">
                        <strong>Receive a Proposal</strong>
                        <p>We review the requirement and provide a clear quotation.</p>
                    </div>
                    <div class="rli-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="rli-opex-step">
                        <div class="rli-opex-step-num">3</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon3.png" alt="Select Workflow">
                        <strong>Select the Right Workflow</strong>
                        <p>We choose the right 3D scanner, software and methodology.</p>
                    </div>
                    <div class="rli-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="rli-opex-step">
                        <div class="rli-opex-step-num">4</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon4.png" alt="Execution">
                        <strong>On-Site or In-House Execution</strong>
                        <p>Scanning is completed at your facility or at a Precise3DM centre.</p>
                    </div>
                    <div class="rli-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="rli-opex-step">
                        <div class="rli-opex-step-num">5</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon5.png" alt="Deliverables">
                        <strong>Receive Your Deliverables</strong>
                        <p>Get a manufacturing-ready CAD model or inspection report.</p>
                    </div>
                    <div class="rli-opex-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                    <div class="rli-opex-step">
                        <div class="rli-opex-step-num">6</div>
                        <img src="assets/images/dms-for-railway-locomotive-industry/opex-p1-icon6.png" alt="Pay as OPEX">
                        <strong>Pay as OPEX</strong>
                        <p>Pay against invoice based on agreed terms. Monthly service options are available.</p>
                    </div>
                </div>
            </div>

            <!-- Service Cards Grid -->
            <div class="rli-opex-grid">
                
                <!-- Card 1 -->
                <div class="rli-opex-card">
                    <h3 class="rli-opex-card-title">3D Scanning Services for<br>Railway & Locomotive Industry</h3>
                    <img src="assets/images/dms-for-railway-locomotive-industry/opex-img1.png" alt="3D Scanning Services" class="rli-opex-hero-img">
                    <ul class="rli-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> On-site & In-house Scanning</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Battery Packs, Modules & Cells</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Powertrain & Motors</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Inspection & Archiving</li>
                    </ul>
                    <a href="3d-services.php" class="rli-opex-btn mt-3">KNOW MORE</a>
                </div>

                <!-- Card 2 -->
                <div class="rli-opex-card">
                    <h3 class="rli-opex-card-title">Reverse Engineering Services for<br>Railway & Locomotive Industry</h3>
                    <img src="assets/images/dms-for-railway-locomotive-industry/opex-img2.png" alt="Reverse Engineering Services" class="rli-opex-hero-img rli-contain-img">
                    <ul class="rli-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Scan-to-CAD</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Manufacturing-ready CAD</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> STEP / IGES / Parasolid</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> 2D Manufacturing Drawings</li>
                    </ul>
                    <a href="3d-Reverse-Engineering-Services-in-india.php" class="rli-opex-btn mt-3">KNOW MORE</a>
                </div>

                <!-- Card 3 -->
                <div class="rli-opex-card">
                    <h3 class="rli-opex-card-title">3D Inspection Services for<br>Railway & Locomotive Industry</h3>
                    <img src="assets/images/dms-for-railway-locomotive-industry/opex-img3.png" alt="3D Inspection Services" class="rli-opex-hero-img rli-contain-img">
                    <ul class="rli-opex-list mt-auto">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Dimensional Inspection</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> CAD Comparison</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> FAI / GD&T / Deviation Maps</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Supplier & Production QC</li>
                    </ul>
                    <a href="3d-inspection-service.php" class="rli-opex-btn mt-3">KNOW MORE</a>
                </div>

            </div>
            
            <div class="rli-opex-grid rli-opex-grid-bottom mt-4" style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 20px;">
                <!-- Card 4 (3D Printing) -->
                <div class="rli-opex-card">
                    <h3 class="rli-opex-card-title text-center">3D Printing Services for Railway & Locomotive Industry</h3>
                    <div class="d-flex justify-content-between text-start mt-3 mb-4" style="gap: 15px;">
                        <div style="flex:1;">
                            <img src="assets/images/dms-for-railway-locomotive-industry/opex-card4-img1.png" alt="PEEK 3D Printing" style="width:100%; object-fit:contain; max-height:100px; margin-bottom:10px;">
                            <strong style="font-size:12px; color:#1a202c; display:block; margin-bottom:5px;">PEEK 3D Printing</strong>
                            <p style="font-size:11px; color:#475569; line-height:1.4;">High-performance engineering parts and functional automotive applications.</p>
                        </div>
                        <div style="flex:1;">
                            <img src="assets/images/dms-for-railway-locomotive-industry/opex-card4-img2.png" alt="Figure 4: DLP 3D Printing Service" style="width:100%; object-fit:contain; max-height:100px; margin-bottom:10px;">
                            <strong style="font-size:12px; color:#1a202c; display:block; margin-bottom:5px;">Figure 4: DLP 3D<br>Printing Service</strong>
                            <p style="font-size:11px; color:#475569; line-height:1.4;">High-detail prototypes with excellent surface finish and rapid turnaround.</p>
                        </div>
                        <div style="flex:1;">
                            <img src="assets/images/dms-for-railway-locomotive-industry/opex-card4-img3.png" alt="Large-Format FDM" style="width:100%; object-fit:contain; max-height:100px; margin-bottom:10px;">
                            <strong style="font-size:12px; color:#1a202c; display:block; margin-bottom:5px;">Large-Format FDM 3D Printing</strong>
                            <p style="font-size:11px; color:#475569; line-height:1.4;">Large automotive fixtures, tooling, prototype assemblies, dashboards, ducts, body panels and manufacturing aids.</p>
                        </div>
                    </div>
                    <a href="3d-printing-service-in-india.php" class="rli-opex-btn mt-auto">KNOW MORE</a>
                </div>

                <!-- Card 5 (Benchmarking) -->
                <div class="rli-opex-card">
                    <h3 class="rli-opex-card-title text-center">Benchmarking & Teardown<br>Services for Railway & Locomotive Industry</h3>
                    <img src="assets/images/dms-for-railway-locomotive-industry/opex-img4.png" alt="Benchmarking services" class="rli-opex-hero-img rli-contain-img mt-2">
                    <ul class="rli-opex-list mt-auto ms-4" style="padding-left: 20px;">
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Complete Teardown (Shape)</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Component-Level Analysis</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Reverse Engineering</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> CAD Development</li>
                        <li><i class="fa-solid fa-circle-check" style="color:#22c55e;"></i> Manufacturing Insights</li>
                    </ul>
                    <a href="digital-benchmarking-service-in-india.php" class="rli-opex-btn mt-3">KNOW MORE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Buy or Outsource Section -->
    <section class="rli-boo-section">
        <div class="rli-container">
            <div class="rli-boo-grid">
                
                <!-- Card 1 (Dark) -->
                <div class="rli-boo-card dark">
                    <h2 class="rli-boo-title"><span style="color: var(--rli-orange);">BUY OR<br>OUTSOURCE?</span><br>CHOOSE WHAT<br>WORKS<br>BEST FOR YOUR<br>BUSINESS</h2>
                    <div class="rli-boo-icons-row">
                        <img src="assets/images/dms-for-tool-die-manufacturing/Vedtor.png" alt="Buy">
                        <span>&#8594;</span>
                        <img src="assets/images/dms-for-tool-die-manufacturing/Vectfdor.png" alt="Outsource">
                    </div>
                </div>

                <!-- Card 2 (CAPEX) -->
                <div class="rli-boo-card rli-position-relative" style="background:#fff7ed; border-color:#fed7aa;">
                    <h3 class="rli-boo-card-title text-danger">BUILD IN-HOUSE (CAPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="rli-boo-list green-check-small">
                        <li><i class="fa-solid fa-check"></i> Frequent 3D scanning and reverse engineering</li>
                        <li><i class="fa-solid fa-check"></i> Daily quality control and inspection</li>
                        <li><i class="fa-solid fa-check"></i> Internal new-product development and tool rooms</li>
                        <li><i class="fa-solid fa-check"></i> Production inspection</li>
                        <li><i class="fa-solid fa-check"></i> Long-term capability building</li>
                    </ul>
                    <a href="3d-products.php" class="rli-boo-btn orange">EXPLORE CAPEX SOLUTIONS</a>
                    
                    <!-- OR Badge -->
                    <div class="rli-boo-or-badge">OR</div>
                </div>

                <!-- Card 3 (OPEX) -->
                <div class="rli-boo-card" style="background:#f0fdf4; border-color:#bbf7d0;">
                    <h3 class="rli-boo-card-title text-success">USE OUR ENGINEERING TEAM (OPEX)</h3>
                    <strong>Best for:</strong>
                    <ul class="rli-boo-list green-check-circle-small">
                        <li><i class="fa-regular fa-circle-check"></i> One-time projects and immediate requirements</li>
                        <li><i class="fa-regular fa-circle-check"></i> Technology evaluation</li>
                        <li><i class="fa-regular fa-circle-check"></i> Specialized inspections</li>
                        <li><i class="fa-regular fa-circle-check"></i> Benchmarking projects</li>
                        <li><i class="fa-regular fa-circle-check"></i> Occasional reverse engineering</li>
                    </ul>
                    <a href="3d-services.php" class="rli-boo-btn orange">EXPLORE ENGINEERING SERVICES</a>
                </div>

            </div>
        </div>
    </section>


    <!-- Engagement Models Section -->
    

    <!-- Why Choose Section -->
    <section class="rli-why-choose-section">
        <div class="rli-container" style="padding: 0 15px;">
            <div class="rli-why-choose-card">
                
                <div class="rli-why-choose-left" style="background-image: url('assets/images/dms-for-railway-locomotive-industry/wc-img.png'); background-size: cover; background-position: center;">
                    <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/precise3dm-logo.png" alt="Precise3DM Logo" class="rli-why-choose-logo">
                </div>

                <!-- Content Side -->
                <div class="rli-why-choose-content">
                    <h2 class="rli-why-choose-title">Why Railway Companies Choose<br><span>Precise3DM?</span></h2>
                    <ul class="rli-why-choose-list">
                        <li><div class="rli-why-choose-custom-icon"></div> Complete Digital Manufacturing Solutions Provider</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Hardware, Software & Engineering Services Under One Roof</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Industry-Focused 3D Scanners for Railway Applications</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Reverse Engineering & Scan-to-CAD Expertise</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Industrial & Engineering 3D Printing Solutions</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Advanced 3D Inspection & Quality Control Workflows</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Experienced Application Engineering Team</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Pan-India Sales, Service, Training & Technical Support</li>
                        <li><div class="rli-why-choose-custom-icon"></div> Solutions for OEMs, Suppliers, Depots and Infrastructure</li>
                    </ul>
                    <a href="About_us.php" class="rli-why-choose-btn">Know More About Precise 3DM</a>
                </div>

            </div>
        </div>
    </section>

    



    <!-- Technology Partners Section -->
    <section class="rli-partners-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid rli-ind-container">
            <h2 class="rli-partners-title text-center mb-5">Our Technology Partners</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-4 gap-lg-5">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-1.png" alt="Shining 3D" class="img-fluid rli-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-2.png" alt="Hexagon" class="img-fluid rli-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-3.png" alt="ExactFlat" class="img-fluid rli-partners-logo">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-4.png" alt="TrueProp" class="img-fluid rli-partners-logo" style="max-height: 100px; transform: scale(1.1);">
                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/partner-5.png" alt="EPIC" class="img-fluid rli-partners-logo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="rli-contact-section py-4" style="background-color: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 3%;">
            <div class="rli-contact-inner-container p-4 p-xl-5 position-relative" style="background-image: url('assets/images/blog-26-freescan-trak-nova-5-functionality-in-1-device/contact-bg.png'); background-size: cover; background-position: center; border-radius: 16px;">

                <div class="text-center mb-4">
                    <h2 class="rli-contact-main-title">Ready to Digitally Transform <span style="color: #FF931E;">Your Automotive Manufacturing?</span></h2>
                    <p class="rli-contact-main-desc mt-3 mx-auto" style="max-width: 1100px;">Whether you're planning to invest in advanced digital manufacturing technologies or need immediate engineering support, Precise3DM can help you select the right solution for your application.</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-4 mb-5" style="gap: 20px;">
                    <a href="3d-products.php" class="rli-contact-top-btn px-5 py-3">3D Products</a>
                    <a href="3d-services.php" class="rli-contact-top-btn px-5 py-3">3D Services</a>
                </div>

                <div class="rli-contact-divider mb-5 mx-auto"></div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="rli-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-1.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="rli-contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SERVICES</span></h3>
                            </div>
                            <p class="rli-contact-card-desc mb-4 flex-grow-1">Tell us about your project and get a customized service quote.</p>
                            <a href="3d-service-request.php" class="rli-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SERVICES <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="rli-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-2.png" alt="Get Quote" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="rli-contact-card-title mb-0">GET QUOTE <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="rli-contact-card-desc mb-4 flex-grow-1">Looking to buy a 3D scanner? Get the best price and expert guidance.</p>
                            <a href="scanning-solution-form.php" class="rli-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">GET QUOTE FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="rli-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-3.png" alt="Meet Us Live" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="rli-contact-card-title mb-0">MEET US LIVE <br><span style="color: #FF931E;">ONLINE NOW</span></h3>
                            </div>
                            <p class="rli-contact-card-desc mb-4 flex-grow-1">Connect with our experts instantly for live guidance and support.</p>
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="rli-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">MEET US LIVE ONLINE NOW <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-6 col-xl-3 d-flex">
                        <div class="rli-contact-action-card w-100 p-4 d-flex flex-column">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <img src="assets/images/precise3dm-digital-manufacturing-solutions-for-automotive-industry/contact-4.png" alt="Book Demo" class="img-fluid me-3" style="width: 75px;">
                                <h3 class="rli-contact-card-title mb-0">BOOK DEMO <br><span style="color: #FF931E;">FOR SCANNERS</span></h3>
                            </div>
                            <p class="rli-contact-card-desc mb-4 flex-grow-1">Schedule a live demo and experience the power of Precise3DM scanners.</p>
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="rli-contact-card-btn w-100 d-inline-flex justify-content-center align-items-center text-decoration-none">BOOK DEMO FOR SCANNERS <i class="fa-solid fa-arrow-right ms-2"></i></a>
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








