<?php
$page_title =
    "PEEK 3D Printers in India | INTAMSYS Industrial High-Performance Polymer 3D Printing | Precise3DM";
$meta_description =
    "Precise3DM brings industrial PEEK 3D printing technology to Indian manufacturers with high-performance additive manufacturing systems from INTAMSYS. Authorized Wholesale Dealer & Master Reseller.";
$img = "assets/images/peek-3d-printers-in-india";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <meta name="title" content="<?= $page_title ?>"/>
    <meta name="description" content="<?= $meta_description ?>"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
       integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">

    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="assets/css/peek-3d-printers-in-india.css?v=1.0">
</head>

<body>
    <!-- Header Start -->
    <?php include "includes/header.php"; ?>
    <!-- Header End -->

    <!-- =========================================================================
         1. Hero Section
         ========================================================================= -->
    <section class="peek-hero-section" id="peek-hero">
        <div class="container-fluid peek-hero-container">
            <!-- Top Call Bar (Top Right) -->
            <div class="peek-hero-topbar">
                <div class="peek-call-box">
                    <div class="peek-call-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="peek-call-content">
                        <div class="peek-call-title">Call us now</div>
                        <p class="peek-call-numbers">
                            <a href="tel:+919840478347">+91 98404 78347</a><span class="peek-piper">|</span><a href="tel:+916374406179">+91 63744 06179</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Main Content Row -->
            <div class="row align-items-center peek-hero-layout">
                <!-- Left Column -->
                <div class="col-lg-6 col-12 peek-hero-left">
                    <h1 class="peek-hero-title">PEEK 3D Printers in <span class="peek-text-orange">India</span></h1>
                    
                    <h2 class="peek-hero-subtitle">High-Performance Polymer Additive Manufacturing for Industry</h2>

                    <p class="peek-hero-desc">
                        Precise3DM brings industrial PEEK 3D printing technology to Indian manufacturers with high-performance additive manufacturing systems from INTAMSYS.
                    </p>

                    <!-- Trust Badge -->
                    <div class="peek-trust-badge">
                        <img src="<?= $img ?>/trust-hero-icon.svg" alt="Authorized INTAMSYS Dealer" class="peek-trust-icon">
                        <p class="peek-trust-text">
                            Authorized Wholesale Dealer &amp; Master Reseller for <span class="peek-text-orange font-weight-bold">INTAMSYS</span> in India
                        </p>
                    </div>

                    <!-- Two Buttons (Stacked) -->
                    <div class="peek-btn-group">
                        <a href="funmat-pro-310-apollo.php" class="peek-btn-primary">
                            <span>Explore FUNMAT PRO 310 APOLLO</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="peek-btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span>Talk to a PEEK Application Engineer</span>
                        </a>
                    </div>

                    <!-- Email Box -->
                    <div class="peek-email-box">
                        <div class="peek-email-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="peek-email-content">
                            <div class="peek-email-title">Email us</div>
                            <p class="peek-email-addresses">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a><span class="peek-piper">|</span><a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Machine Image) -->
                <div class="col-lg-6 col-12 peek-hero-right">
                    <div class="peek-hero-image-wrap">
                        <img src="<?= $img ?>/hero-image.png" alt="FUNMAT PRO 310 APOLLO High-Speed PEEK 3D Printer" class="peek-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. FDM vs PEEK Comparison Section
         ========================================================================= -->
    <section class="peek-comparison-section" id="fdm-vs-peek">
        <div class="container-fluid peek-section-container">
            <div class="row align-items-center">
                <!-- Left Info Column -->
                <div class="col-lg-4 col-12 mb-4 mb-lg-0 peek-comp-intro">
                    <h2 class="peek-comp-title">PEEK 3D Printing Is Moving From Prototyping to Production</h2>
                    <p class="peek-comp-desc">
                        PEEK is one of the most demanding engineering thermoplastics to process through additive manufacturing. With the right printer, thermal control and material management, it can enable high-performance functional components for demanding applications.
                    </p>
                </div>
                <!-- Right Tables Column with VS in middle -->
                <div class="col-lg-8 col-12 peek-comp-tables-wrap">
                    <div class="peek-comp-tables-row">
                        <!-- Table 1: Standard FDM -->
                        <div class="peek-comp-card peek-comp-card-standard">
                            <div class="peek-comp-header peek-comp-header-standard">
                                STANDARD FDM
                            </div>
                            <ul class="peek-comp-list">
                                <li>
                                    <span class="peek-comp-icon-circle standard"><img src="<?= $img ?>/standard-1.svg" alt="Lower Temperature"></span>
                                    <span class="peek-comp-text">Lower Temperature</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle standard"><img src="<?= $img ?>/standard-2.svg" alt="Limited Chemical Resistance"></span>
                                    <span class="peek-comp-text">Limited Chemical Resistance</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle standard"><img src="<?= $img ?>/standard-3.svg" alt="Moderate Mechanical Performance"></span>
                                    <span class="peek-comp-text">Moderate Mechanical Performance</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle standard"><img src="<?= $img ?>/standard-4.svg" alt="Lower Wear Resistance"></span>
                                    <span class="peek-comp-text">Lower Wear Resistance</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle standard"><img src="<?= $img ?>/standard-5.svg" alt="Prototyping Applications"></span>
                                    <span class="peek-comp-text">Prototyping Applications</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle standard"><img src="<?= $img ?>/standard-6.svg" alt="Limited End-Use Parts"></span>
                                    <span class="peek-comp-text">Limited End-Use Parts</span>
                                </li>
                            </ul>
                        </div>

                        <!-- VS Badge -->
                        <div class="peek-vs-badge">
                            <span>VS</span>
                        </div>

                        <!-- Table 2: High-Performance PEEK Printing -->
                        <div class="peek-comp-card peek-comp-card-high">
                            <div class="peek-comp-header peek-comp-header-high">
                                HIGH-PERFORMANCE PEEK PRINTING
                            </div>
                            <ul class="peek-comp-list">
                                <li>
                                    <span class="peek-comp-icon-circle high"><img src="<?= $img ?>/high-1.svg" alt="High Temperature Capability"></span>
                                    <span class="peek-comp-text font-weight-600">High Temperature Capability</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle high"><img src="<?= $img ?>/high-2.svg" alt="Excellent Chemical Resistance"></span>
                                    <span class="peek-comp-text font-weight-600">Excellent Chemical Resistance</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle high"><img src="<?= $img ?>/high-3.svg" alt="Superior Mechanical Performance"></span>
                                    <span class="peek-comp-text font-weight-600">Superior Mechanical Performance</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle high"><img src="<?= $img ?>/high-4.svg" alt="Excellent Wear Resistance"></span>
                                    <span class="peek-comp-text font-weight-600">Excellent Wear Resistance</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle high"><img src="<?= $img ?>/high-5.svg" alt="Functional End-Use Components"></span>
                                    <span class="peek-comp-text font-weight-600">Functional End-Use Components</span>
                                </li>
                                <li>
                                    <span class="peek-comp-icon-circle high"><img src="<?= $img ?>/high-6.svg" alt="Advanced Engineering Applications"></span>
                                    <span class="peek-comp-text font-weight-600">Advanced Engineering Applications</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. Supported Materials Section
         ========================================================================= -->
    <section class="peek-materials-section" id="supported-materials">
        <div class="container-fluid peek-section-container">
            <h2 class="peek-section-title text-center">Print Beyond Conventional Plastics</h2>
            
            <div class="peek-materials-grid mt-4">
                <!-- Card 1 -->
                <div class="peek-material-col">
                    <div class="peek-material-card">
                        <div class="peek-material-info">
                            <h3 class="peek-material-name">PEEK</h3>
                            <div class="peek-orange-line"></div>
                            <p class="peek-material-desc">Polyether ether<br>ketone</p>
                        </div>
                        <div class="peek-material-img-wrap">
                            <img src="<?= $img ?>/polymer-1.png" alt="PEEK Filament" class="peek-material-img">
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="peek-material-col">
                    <div class="peek-material-card">
                        <div class="peek-material-info">
                            <h3 class="peek-material-name">PEEK-CF</h3>
                            <div class="peek-orange-line"></div>
                            <p class="peek-material-desc">Carbon-fiber<br>reinforced PEEK</p>
                        </div>
                        <div class="peek-material-img-wrap">
                            <img src="<?= $img ?>/polymer-2.png" alt="PEEK-CF Filament" class="peek-material-img">
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="peek-material-col">
                    <div class="peek-material-card">
                        <div class="peek-material-info">
                            <h3 class="peek-material-name">PEEK-GF</h3>
                            <div class="peek-orange-line"></div>
                            <p class="peek-material-desc">Glass-fiber-<br>reinforced PEEK</p>
                        </div>
                        <div class="peek-material-img-wrap">
                            <img src="<?= $img ?>/polymer-3.png" alt="PEEK-GF Filament" class="peek-material-img">
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="peek-material-col">
                    <div class="peek-material-card">
                        <div class="peek-material-info">
                            <h3 class="peek-material-name">PEKK</h3>
                            <div class="peek-orange-line"></div>
                            <p class="peek-material-desc">Advanced high-<br>performance polymer</p>
                        </div>
                        <div class="peek-material-img-wrap">
                            <img src="<?= $img ?>/polymer-4.png" alt="PEKK Filament" class="peek-material-img">
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="peek-material-col peek-material-col-wide">
                    <div class="peek-material-card">
                        <div class="peek-material-info">
                            <h3 class="peek-material-name">Other Engineering Polymers</h3>
                            <div class="peek-orange-line"></div>
                            <p class="peek-material-desc">PEI / PPSU / PPS and other advanced materials depending on printer platform.</p>
                        </div>
                        <div class="peek-material-img-wrap">
                            <img src="<?= $img ?>/polymer-5.png" alt="Other Engineering Polymers" class="peek-material-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. Product Lineup Section
         ========================================================================= -->
    <section class="peek-lineup-section" id="product-lineup">
        <div class="container-fluid peek-section-container">
            <h2 class="peek-section-title text-center">INTAMSYS PEEK 3D Printers in India</h2>
            <p class="peek-section-subtitle text-center">Choose the right high-performance platform for your application.</p>
            
            <div class="row peek-lineup-grid mt-4">
                <!-- Card 1 (NEW Apollo) -->
                <div class="col-xl col-lg-4 col-md-6 col-12 peek-lineup-col">
                    <div class="peek-lineup-card featured">
                        <div class="peek-new-badge">NEW</div>
                        <div class="peek-lineup-img-wrap">
                            <img src="<?= $img ?>/printer-1.png" alt="FUNMAT PRO 310 APOLLO" class="peek-lineup-img">
                        </div>
                        <div class="peek-lineup-body">
                            <div class="peek-lineup-name">FUNMAT PRO 310</div>
                            <div class="peek-lineup-model">APOLLO</div>
                            <p class="peek-lineup-desc">High-Speed PEEK Production</p>
                            
                            <div class="peek-lineup-specs">
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-1.svg" alt="PEEK">
                                    <span>PEEK</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-2.svg" alt="PEEK-CF">
                                    <span>PEEK-CF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-3.svg" alt="PEEK-GF">
                                    <span>PEEK-GF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-4.svg" alt="PEKK">
                                    <span>PEKK</span>
                                </div>
                            </div>
                            
                            <a href="funmat-pro-310-apollo.php" class="peek-lineup-btn active-btn">
                                Explore Printer <span class="arrow">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 (Neo) -->
                <div class="col-xl col-lg-4 col-md-6 col-12 peek-lineup-col">
                    <div class="peek-lineup-card">
                        <div class="peek-lineup-img-wrap">
                            <img src="<?= $img ?>/printer-2.png" alt="FUNMAT PRO 310 NEO" class="peek-lineup-img">
                        </div>
                        <div class="peek-lineup-body">
                            <div class="peek-lineup-name">FUNMAT PRO 310</div>
                            <div class="peek-lineup-model">NEO</div>
                            <p class="peek-lineup-desc">Industrial High-Speed Printing</p>
                            
                            <div class="peek-lineup-specs">
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-1.svg" alt="PEEK">
                                    <span>PEEK</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-2.svg" alt="PEEK-CF">
                                    <span>PEEK-CF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-3.svg" alt="PEEK-GF">
                                    <span>PEEK-GF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-4.svg" alt="PEKK">
                                    <span>PEKK</span>
                                </div>
                            </div>
                            
                            <a href="funmat-pro.php" class="peek-lineup-btn">
                                Explore Printer <span class="arrow">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 (HT) -->
                <div class="col-xl col-lg-4 col-md-6 col-12 peek-lineup-col">
                    <div class="peek-lineup-card">
                        <div class="peek-lineup-img-wrap">
                            <img src="<?= $img ?>/printer-3.png" alt="FUNMAT HT" class="peek-lineup-img">
                        </div>
                        <div class="peek-lineup-body">
                            <div class="peek-lineup-name">FUNMAT</div>
                            <div class="peek-lineup-model">HT</div>
                            <p class="peek-lineup-desc">Compact High-Temperature Printing</p>
                            
                            <div class="peek-lineup-specs">
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-1.svg" alt="PEEK">
                                    <span>PEEK</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-2.svg" alt="PEEK-CF">
                                    <span>PEEK-CF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-3.svg" alt="PEEK-GF">
                                    <span>PEEK-GF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-4.svg" alt="PEKK">
                                    <span>PEKK</span>
                                </div>
                            </div>
                            
                            <a href="funmat-pro.php" class="peek-lineup-btn">
                                Explore Printer <span class="arrow">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 4 (410) -->
                <div class="col-xl col-lg-4 col-md-6 col-12 peek-lineup-col">
                    <div class="peek-lineup-card">
                        <div class="peek-lineup-img-wrap">
                            <img src="<?= $img ?>/printer-4.png" alt="FUNMAT PRO 410" class="peek-lineup-img">
                        </div>
                        <div class="peek-lineup-body">
                            <div class="peek-lineup-name">FUNMAT PRO</div>
                            <div class="peek-lineup-model">410</div>
                            <p class="peek-lineup-desc">Industrial Engineering &amp; Production</p>
                            
                            <div class="peek-lineup-specs">
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-1.svg" alt="PEEK">
                                    <span>PEEK</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-2.svg" alt="PEEK-CF">
                                    <span>PEEK-CF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-3.svg" alt="PEEK-GF">
                                    <span>PEEK-GF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-4.svg" alt="PEKK">
                                    <span>PEKK</span>
                                </div>
                            </div>
                            
                            <a href="funmat-pro.php" class="peek-lineup-btn">
                                Explore Printer <span class="arrow">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 5 (610HT) -->
                <div class="col-xl col-lg-4 col-md-6 col-12 peek-lineup-col">
                    <div class="peek-lineup-card">
                        <div class="peek-lineup-img-wrap">
                            <img src="<?= $img ?>/printer-5.png" alt="FUNMAT PRO 610HT" class="peek-lineup-img">
                        </div>
                        <div class="peek-lineup-body">
                            <div class="peek-lineup-name">FUNMAT PRO</div>
                            <div class="peek-lineup-model">610HT</div>
                            <p class="peek-lineup-desc">Large-Format High-Temperature Printing</p>
                            
                            <div class="peek-lineup-specs">
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-1.svg" alt="PEEK">
                                    <span>PEEK</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-2.svg" alt="PEEK-CF">
                                    <span>PEEK-CF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-3.svg" alt="PEEK-GF">
                                    <span>PEEK-GF</span>
                                </div>
                                <div class="peek-spec-item">
                                    <img src="<?= $img ?>/printer-icon-4.svg" alt="PEKK">
                                    <span>PEKK</span>
                                </div>
                            </div>
                            
                            <a href="funmat-pro.php" class="peek-lineup-btn">
                                Explore Printer <span class="arrow">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. Product Hero Section
         ========================================================================= -->
    <section class="peek-product-hero-section" id="product-hero">
        <div class="container-fluid peek-section-container">
            <div class="row align-items-center">
                <!-- Left Machine Image with Glow -->
                <div class="col-lg-5 col-12 text-center mb-4 mb-lg-0">
                    <div class="peek-prodhero-img-wrap">
                        <img src="<?= $img ?>/funmat-apollo-image.png" alt="FUNMAT PRO 310 APOLLO High-Speed PEEK 3D Printer" class="peek-prodhero-img">
                    </div>
                </div>
                
                <!-- Right Details -->
                <div class="col-lg-7 col-12 peek-prodhero-content">
                    <span class="peek-prodhero-tag">MEET THE NEW</span>
                    <h2 class="peek-prodhero-title">FUNMAT PRO 310 <span class="peek-text-orange">APOLLO</span></h2>
                    <p class="peek-prodhero-desc">The new generation of high-performance PEEK additive manufacturing.</p>
                    
                    <!-- 5 Specs Grid -->
                    <div class="peek-prodhero-specs-grid">
                        <div class="peek-prodhero-spec-item">
                            <div class="peek-prodhero-spec-icon"><img src="<?= $img ?>/product-hero-1.svg" alt="Speed"></div>
                            <span class="peek-prodhero-label">Up to</span>
                            <div class="peek-prodhero-val">200 mm/s</div>
                            <div class="peek-prodhero-sub">High-speed printing</div>
                        </div>
                        <div class="peek-prodhero-spec-item">
                            <div class="peek-prodhero-spec-icon"><img src="<?= $img ?>/product-hero-2.svg" alt="Chamber Temp"></div>
                            <span class="peek-prodhero-label">Up to</span>
                            <div class="peek-prodhero-val">100°C</div>
                            <div class="peek-prodhero-sub">Controlled thermal environment</div>
                        </div>
                        <div class="peek-prodhero-spec-item">
                            <div class="peek-prodhero-spec-icon"><img src="<?= $img ?>/product-hero-3.svg" alt="IDEX"></div>
                            <span class="peek-prodhero-label">PEEK-Optimized</span>
                            <div class="peek-prodhero-val">IDEX</div>
                            <div class="peek-prodhero-sub">Independent dual extrusion</div>
                        </div>
                        <div class="peek-prodhero-spec-item">
                            <div class="peek-prodhero-spec-icon"><img src="<?= $img ?>/product-hero-4.svg" alt="Drying"></div>
                            <span class="peek-prodhero-label">Dual 3 kg</span>
                            <div class="peek-prodhero-val">Active Drying</div>
                            <div class="peek-prodhero-sub">Material management</div>
                        </div>
                        <div class="peek-prodhero-spec-item">
                            <div class="peek-prodhero-spec-icon"><img src="<?= $img ?>/product-hero-5.svg" alt="Traceability"></div>
                            <span class="peek-prodhero-label">Production</span>
                            <div class="peek-prodhero-val">Traceability</div>
                            <div class="peek-prodhero-sub">INTAMQuality™</div>
                        </div>
                    </div>
                    
                    <!-- 2 CTA Buttons -->
                    <div class="peek-prodhero-btn-row">
                        <a href="contact-us.php" class="peek-prodhero-btn-orange">
                            <span>Request APOLLO Pricing</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="peek-prodhero-btn-outline">
                            <span>Schedule a Demonstration</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. Process Workflow Section
         ========================================================================= -->
    <section class="peek-process-section" id="process-workflow">
        <div class="container-fluid peek-section-container">
            <div class="row align-items-center">
                <!-- Left Info -->
                <div class="col-lg-3 col-12 mb-4 mb-lg-0 peek-process-left">
                    <h2 class="peek-process-title">PEEK Requires More Than a High-Temperature Nozzle</h2>
                    <p class="peek-process-desc">
                        PEEK processing demands a complete high-temperature printing ecosystem with precise control at every stage.
                    </p>
                </div>
                
                <!-- Right 6 Steps with Chevrons -->
                <div class="col-lg-9 col-12">
                    <div class="peek-workflow-chain">
                        <!-- Step 1 -->
                        <div class="peek-workflow-card">
                            <div class="peek-workflow-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Material Drying">
                            </div>
                            <h4 class="peek-workflow-name">Material<br>Drying</h4>
                        </div>
                        
                        <div class="peek-workflow-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 2 -->
                        <div class="peek-workflow-card">
                            <div class="peek-workflow-icon">
                                <img src="<?= $img ?>/workflow-2.svg" alt="High-Temperature Extrusion">
                            </div>
                            <h4 class="peek-workflow-name">High-<br>Temperature<br>Extrusion</h4>
                        </div>
                        
                        <div class="peek-workflow-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 3 -->
                        <div class="peek-workflow-card">
                            <div class="peek-workflow-icon">
                                <img src="<?= $img ?>/workflow-3.svg" alt="Controlled Build Chamber">
                            </div>
                            <h4 class="peek-workflow-name">Controlled<br>Build<br>Chamber</h4>
                        </div>
                        
                        <div class="peek-workflow-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 4 -->
                        <div class="peek-workflow-card">
                            <div class="peek-workflow-icon">
                                <img src="<?= $img ?>/workflow-4.svg" alt="Thermal Management">
                            </div>
                            <h4 class="peek-workflow-name">Thermal<br>Management</h4>
                        </div>
                        
                        <div class="peek-workflow-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 5 -->
                        <div class="peek-workflow-card">
                            <div class="peek-workflow-icon">
                                <img src="<?= $img ?>/workflow-5.svg" alt="Crystallization Control">
                            </div>
                            <h4 class="peek-workflow-name">Crystallization<br>Control</h4>
                        </div>
                        
                        <div class="peek-workflow-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 6 -->
                        <div class="peek-workflow-card">
                            <div class="peek-workflow-icon">
                                <img src="<?= $img ?>/workflow-6.svg" alt="Production-Ready Component">
                            </div>
                            <h4 class="peek-workflow-name">Production-<br>Ready<br>Component</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. Industry Application Section
         ========================================================================= -->
    <section class="peek-industries-section" id="industry-applications">
        <div class="container-fluid peek-section-container">
            <h2 class="peek-section-title text-center">Built for Demanding Manufacturing Applications</h2>
            
            <div class="row peek-industries-grid mt-4">
                <!-- 1. Automotive -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 peek-ind-col">
                    <div class="peek-ind-card">
                        <div class="peek-ind-img-wrap">
                            <img src="<?= $img ?>/built-1.png" alt="Automotive PEEK applications" class="peek-ind-img">
                        </div>
                        <div class="peek-ind-body">
                            <div class="peek-ind-header">
                                <img src="<?= $img ?>/built-icon-1.svg" alt="Automotive" class="peek-ind-icon">
                                <h3 class="peek-ind-title">Automotive</h3>
                            </div>
                            <p class="peek-ind-desc">Functional components and tooling</p>
                        </div>
                    </div>
                </div>
                
                <!-- 2. Aerospace -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 peek-ind-col">
                    <div class="peek-ind-card">
                        <div class="peek-ind-img-wrap">
                            <img src="<?= $img ?>/built-2.png" alt="Aerospace PEEK applications" class="peek-ind-img">
                        </div>
                        <div class="peek-ind-body">
                            <div class="peek-ind-header">
                                <img src="<?= $img ?>/built-icon-2.svg" alt="Aerospace" class="peek-ind-icon">
                                <h3 class="peek-ind-title">Aerospace</h3>
                            </div>
                            <p class="peek-ind-desc">Lightweight engineering components</p>
                        </div>
                    </div>
                </div>
                
                <!-- 3. Medical -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 peek-ind-col">
                    <div class="peek-ind-card">
                        <div class="peek-ind-img-wrap">
                            <img src="<?= $img ?>/built-3.png" alt="Medical PEEK applications" class="peek-ind-img">
                        </div>
                        <div class="peek-ind-body">
                            <div class="peek-ind-header">
                                <img src="<?= $img ?>/built-icon-3.svg" alt="Medical" class="peek-ind-icon">
                                <h3 class="peek-ind-title">Medical</h3>
                            </div>
                            <p class="peek-ind-desc">High-performance polymer applications</p>
                        </div>
                    </div>
                </div>
                
                <!-- 4. Oil & Gas -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 peek-ind-col">
                    <div class="peek-ind-card">
                        <div class="peek-ind-img-wrap">
                            <img src="<?= $img ?>/built-4.png" alt="Oil & Gas PEEK applications" class="peek-ind-img">
                        </div>
                        <div class="peek-ind-body">
                            <div class="peek-ind-header">
                                <img src="<?= $img ?>/built-icon-4.svg" alt="Oil & Gas" class="peek-ind-icon">
                                <h3 class="peek-ind-title">Oil &amp; Gas</h3>
                            </div>
                            <p class="peek-ind-desc">Chemical and temperature-resistant components</p>
                        </div>
                    </div>
                </div>
                
                <!-- 5. Industrial Machinery -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 peek-ind-col">
                    <div class="peek-ind-card">
                        <div class="peek-ind-img-wrap">
                            <img src="<?= $img ?>/built-5.png" alt="Industrial Machinery PEEK applications" class="peek-ind-img">
                        </div>
                        <div class="peek-ind-body">
                            <div class="peek-ind-header">
                                <img src="<?= $img ?>/built-icon-5.svg" alt="Industrial Machinery" class="peek-ind-icon">
                                <h3 class="peek-ind-title">Industrial Machinery</h3>
                            </div>
                            <p class="peek-ind-desc">Functional machine components</p>
                        </div>
                    </div>
                </div>
                
                <!-- 6. Robotics -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 peek-ind-col">
                    <div class="peek-ind-card">
                        <div class="peek-ind-img-wrap">
                            <img src="<?= $img ?>/built-6.png" alt="Robotics PEEK applications" class="peek-ind-img">
                        </div>
                        <div class="peek-ind-body">
                            <div class="peek-ind-header">
                                <img src="<?= $img ?>/built-icon-6.svg" alt="Robotics" class="peek-ind-icon">
                                <h3 class="peek-ind-title">Robotics</h3>
                            </div>
                            <p class="peek-ind-desc">Lightweight components and tooling</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. End to End Workflow Section
         ========================================================================= -->
    <section class="peek-endtoend-section" id="end-to-end-workflow">
        <div class="container-fluid peek-section-container">
            <div class="row align-items-center">
                <!-- Left Info -->
                <div class="col-lg-3 col-12 mb-4 mb-lg-0 peek-e2e-left">
                    <h2 class="peek-e2e-title">More Than a PEEK Printer Supplier</h2>
                    <p class="peek-e2e-desc">
                        From Physical Part to Production-Ready Digital Manufacturing
                    </p>
                </div>
                
                <!-- Right 4 Cards with Chevrons -->
                <div class="col-lg-9 col-12">
                    <div class="peek-e2e-chain">
                        <!-- Step 01 -->
                        <div class="peek-e2e-card">
                            <div class="peek-e2e-step">01</div>
                            <div class="peek-e2e-tag">CAPTURE</div>
                            <h4 class="peek-e2e-subtitle">3D Scanning</h4>
                            <p class="peek-e2e-text">Digitize physical components.</p>
                            <div class="peek-e2e-img-box">
                                <img src="<?= $img ?>/end-to-end-1.png" alt="3D Scanning & Digitize" class="peek-e2e-img">
                            </div>
                        </div>
                        
                        <div class="peek-e2e-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 02 -->
                        <div class="peek-e2e-card">
                            <div class="peek-e2e-step">02</div>
                            <div class="peek-e2e-tag">ENGINEER</div>
                            <h4 class="peek-e2e-subtitle">Reverse Engineering</h4>
                            <p class="peek-e2e-text">Convert scan data into CAD.</p>
                            <div class="peek-e2e-img-box">
                                <img src="<?= $img ?>/end-to-end-2.png" alt="Reverse Engineering CAD" class="peek-e2e-img">
                            </div>
                        </div>
                        
                        <div class="peek-e2e-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 03 -->
                        <div class="peek-e2e-card">
                            <div class="peek-e2e-step">03</div>
                            <div class="peek-e2e-tag">MANUFACTURE</div>
                            <h4 class="peek-e2e-subtitle">PEEK 3D Printing</h4>
                            <p class="peek-e2e-text">Produce component using high-performance polymers.</p>
                            <div class="peek-e2e-img-box">
                                <img src="<?= $img ?>/end-to-end-3.png" alt="PEEK 3D Printing Production" class="peek-e2e-img">
                            </div>
                        </div>
                        
                        <div class="peek-e2e-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                        
                        <!-- Step 04 -->
                        <div class="peek-e2e-card">
                            <div class="peek-e2e-step">04</div>
                            <div class="peek-e2e-tag">VALIDATE</div>
                            <h4 class="peek-e2e-subtitle">3D Inspection</h4>
                            <p class="peek-e2e-text">Verify the manufactured component.</p>
                            <div class="peek-e2e-img-box">
                                <img src="<?= $img ?>/end-to-end-4.png" alt="3D Inspection & Validation" class="peek-e2e-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         9. Implementation Service Section
         ========================================================================= -->
    <section class="peek-impl-section" id="implementation-services">
        <div class="container-fluid peek-section-container">
            <div class="row align-items-center">
                <!-- Left Info -->
                <div class="col-lg-3 col-12 mb-4 mb-lg-0 peek-impl-left">
                    <h2 class="peek-impl-title">PEEK Requires More Than a High-Temperature Nozzle</h2>
                    <p class="peek-impl-desc">
                        PEEK processing demands a complete high-temperature printing ecosystem with precise control at every stage.
                    </p>
                </div>
                
                <!-- Right 6 Cards Grid -->
                <div class="col-lg-9 col-12">
                    <div class="peek-impl-grid">
                        <!-- Card 1 -->
                        <div class="peek-impl-card">
                            <div class="peek-impl-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Technology Selection">
                            </div>
                            <h4 class="peek-impl-card-title">Technology Selection</h4>
                            <p class="peek-impl-card-desc">Choose the right printer and material.</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="peek-impl-card">
                            <div class="peek-impl-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Application Engineering">
                            </div>
                            <h4 class="peek-impl-card-title">Application Engineering</h4>
                            <p class="peek-impl-card-desc">Evaluate your actual manufacturing requirement.</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="peek-impl-card">
                            <div class="peek-impl-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Material Guidance">
                            </div>
                            <h4 class="peek-impl-card-title">Material Guidance</h4>
                            <p class="peek-impl-card-desc">PEEK, PEEK-CF, PEEK-GF, PEKK and engineering polymers.</p>
                        </div>
                        <!-- Card 4 -->
                        <div class="peek-impl-card">
                            <div class="peek-impl-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Installation & Training">
                            </div>
                            <h4 class="peek-impl-card-title">Installation &amp; Training</h4>
                            <p class="peek-impl-card-desc">Get your team operational.</p>
                        </div>
                        <!-- Card 5 -->
                        <div class="peek-impl-card">
                            <div class="peek-impl-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Application Support">
                            </div>
                            <h4 class="peek-impl-card-title">Application Support</h4>
                            <p class="peek-impl-card-desc">Move from prototype to production.</p>
                        </div>
                        <!-- Card 6 -->
                        <div class="peek-impl-card">
                            <div class="peek-impl-icon">
                                <img src="<?= $img ?>/workflow-1.svg" alt="Digital Manufacturing Integration">
                            </div>
                            <h4 class="peek-impl-card-title">Digital Manufacturing Integration</h4>
                            <p class="peek-impl-card-desc">Connect printing with scanning, CAD and inspection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         10. Polymer Ecosystem Section
         ========================================================================= -->
    <section class="peek-ecosystem-section" id="polymer-ecosystem">
        <div class="container-fluid peek-section-container">
            <div class="peek-ecosystem-banner">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-5 col-12 mb-4 mb-lg-0 peek-eco-left">
                        <h2 class="peek-eco-title">Building India's High-Performance Polymer Ecosystem</h2>
                        <p class="peek-eco-desc">
                            Precise3DM is building a broader portfolio around PEEK and high-performance engineering materials, bringing together printers, materials, software and engineering services.
                        </p>
                    </div>
                    <!-- Right Image -->
                    <div class="col-lg-7 col-12 peek-eco-right text-center">
                        <img src="<?= $img ?>/ecosystem-image.png" alt="Building India's High-Performance Polymer Ecosystem" class="peek-eco-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         11. Frequently Asked Questions Section
         ========================================================================= -->
    <section class="peek-faq-section" id="faq">
        <div class="container-fluid peek-section-container">
            <h2 class="peek-faq-title text-center">FREQUENTLY ASKED QUESTIONS</h2>
            
            <div class="peek-faq-accordion-wrap mt-5">
                <div class="accordion" id="peekFaqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item peek-faq-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed peek-faq-button" type="button" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="peek-faq-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="peek-faq-question">What is a PEEK 3D printer?</span>
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                            <div class="accordion-body peek-faq-body">
                                A PEEK 3D printer is an industrial-grade additive manufacturing system specifically engineered to process Polyether Ether Ketone (PEEK) and other high-temperature ultra-polymers. Unlike standard FDM printers, a PEEK printer features an ultra-high temperature extrusion system (reaching up to 450°C–500°C), a precision heated bed (up to 160°C–250°C), and an actively heated thermal chamber (90°C–300°C). This high-temperature environment is essential to control cooling rates, avoid warpage, and ensure complete semi-crystalline molecular structure for maximum mechanical strength, wear resistance, and chemical durability.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item peek-faq-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed peek-faq-button" type="button" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="peek-faq-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="peek-faq-question">Can PEEK be printed on a normal FDM printer?</span>
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body peek-faq-body">
                                No. Standard desktop or consumer FDM printers cannot print PEEK. Standard printers typically max out at nozzle temperatures around 260°C–300°C and lack actively heated chambers. PEEK melts around 343°C and requires extrusion temperatures of 400°C–450°C combined with an enclosed, actively heated build chamber (minimum 90°C–120°C+). Printing PEEK without uniform high-temperature chamber control causes severe delamination between layers, uncontrollable curling and warping, and amorphous parts that lack the necessary mechanical and thermal properties.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item peek-faq-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed peek-faq-button" type="button" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="peek-faq-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="peek-faq-question">Where can I buy a PEEK 3D printer in India?</span>
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                            <div class="accordion-body peek-faq-body">
                                You can procure INTAMSYS industrial PEEK 3D printers directly from Precise3DM, the Authorized Wholesale Dealer &amp; Master Reseller for INTAMSYS in India. Precise3DM provides complete end-to-end support across India, including pre-sales application consultation, benchmarking and sample part printing, on-site installation, certified operator training, local warranty service, preventative maintenance, and prompt delivery of genuine filaments and consumables from centers in Chennai, Bangalore, Pune, Coimbatore, and Delhi NCR.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item peek-faq-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed peek-faq-button" type="button" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="peek-faq-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="peek-faq-question">What materials can INTAMSYS printers process?</span>
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                            <div class="accordion-body peek-faq-body">
                                INTAMSYS high-temperature 3D printers feature an open material system capable of printing a wide spectrum of functional polymers, including:
                                <ul>
                                    <li><strong>Ultra-High Performance Polymers:</strong> Pure PEEK, Carbon Fiber Reinforced PEEK (PEEK-CF), Glass Fiber Reinforced PEEK (PEEK-GF), and PEKK.</li>
                                    <li><strong>High-Performance Engineering Materials:</strong> PEI (Ultem 1010, Ultem 9085), PPSU, PPS, and PVDF.</li>
                                    <li><strong>Standard &amp; Advanced Engineering Polymers:</strong> PA (Nylon), PA-CF, PC, PC-ABS, ABS, ASA, PETG, and TPU.</li>
                                    <li><strong>Dedicated Support Materials:</strong> Soluble and high-temperature breakaway support materials engineered specifically for complex geometries printed in PEEK and PEKK.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item peek-faq-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed peek-faq-button" type="button" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="peek-faq-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="peek-faq-question">Can Precise3DM supply PEEK filament in India?</span>
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                            <div class="accordion-body peek-faq-body">
                                Yes. Precise3DM maintains local inventory of certified, production-grade INTAMSYS PEEK, PEEK-CF, PEEK-GF, and PEKK filaments in India. All filaments come vacuum-sealed with desiccant and full batch traceability, technical data sheets (TDS), and pre-configured printing profiles for INTAMSYS slicers to ensure immediate, repeatable printing success.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item peek-faq-item">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed peek-faq-button" type="button" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="peek-faq-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="peek-faq-question">How much does a PEEK 3D printer cost in India?</span>
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                            <div class="accordion-body peek-faq-body">
                                The investment for an industrial PEEK 3D printer varies depending on chamber size, nozzle temperature thresholds, throughput speed, and automation capabilities. Configurations range from compact industrial desktop units like the FUNMAT HT to high-speed dual-extrusion production platforms (such as the FUNMAT PRO 310 APOLLO) and large-format high-temperature industrial production systems (like the FUNMAT PRO 610HT). Contact Precise3DM today to discuss your exact component requirements, request benchmark part printing, and receive a comprehensive price quotation with warranty and training options.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer End -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
        $(".peek-faq-button").on("click", function (e) {
            e.preventDefault();
            const $btn = $(this);
            const targetId = $btn.attr("data-bs-target");
            const $target = $(targetId);
            const isOpen = $target.hasClass("show") || $target.is(":visible");

            // Close all other accordion items
            $(".peek-faq-item .accordion-collapse").not($target).stop(true, true).slideUp(200, function () {
                $(this).removeClass("show");
            });
            $(".peek-faq-button").not($btn).addClass("collapsed").attr("aria-expanded", "false");
            $(".peek-faq-item").not($btn.closest(".peek-faq-item")).removeClass("is-open");

            // If already open, close it; if closed, open it
            if (isOpen) {
                $target.stop(true, true).slideUp(200, function () {
                    $(this).removeClass("show");
                });
                $btn.addClass("collapsed").attr("aria-expanded", "false");
                $btn.closest(".peek-faq-item").removeClass("is-open");
            } else {
                $target.stop(true, true).slideDown(200, function () {
                    $(this).addClass("show");
                });
                $btn.removeClass("collapsed").attr("aria-expanded", "true");
                $btn.closest(".peek-faq-item").addClass("is-open");
            }
        });
    });
    </script>
</body>
</html>
