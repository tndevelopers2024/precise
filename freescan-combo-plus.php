<?php
$page_title =
    "SHINING 3D FreeScan Combo+ Wireless 3D Scanner in India | Precise3DM";
$meta_description =
    "Precise3DM introduces the SHINING 3D FreeScan Combo+ Wireless 3D Scanner in India. Wireless metrology, 93 laser lines, and built-in VPG. Request a live demo today.";
$img = "assets/images/freescan-combo-plus";
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
    <link rel="stylesheet" href="assets/css/freescan-combo-plus.css?v=1.0">
</head>

<body>
    <!-- Header Start -->
    <?php include "includes/header.php"; ?>
    <!-- Header End -->

    <!-- =========================================================================
         1. Hero Section
         ========================================================================= -->
    <section class="fcp-hero-section" id="fcp-hero">
        <!-- Background Slide Layers (Right Side) -->
        <div class="fcp-hero-bg-container">
            <div class="fcp-hero-slide active" style="background-image: url('<?= $img ?>/hero-bg-1.png');" data-index="0"></div>
            <div class="fcp-hero-slide" style="background-image: url('<?= $img ?>/hero-bg-2.png');" data-index="1"></div>
            <div class="fcp-hero-slide" style="background-image: url('<?= $img ?>/hero-bg-3.png');" data-index="2"></div>
        </div>

        <!-- Solid Base for Left Text -->
        <div class="fcp-hero-base-overlay"></div>

        <!-- Gradient Overlay blending #2F2B2A on the left side of the image -->
        <div class="fcp-hero-gradient-overlay"></div>

        <!-- Hero Content Container -->
        <div class="container-fluid fcp-hero-content-wrap" style="padding-left: 5%; padding-right: 5%;">
            <!-- Top Call Us Now Row -->
            <div class="fcp-call-row">
                <div class="fcp-call-box">
                    <div class="fcp-call-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="fcp-call-text">
                        <span class="fcp-call-label">Call us now</span>
                        <div class="fcp-call-numbers">
                            <a href="tel:+919840478347">+91 98404 78347</a>
                            <span class="fcp-call-divider">|</span>
                            <a href="tel:+916374406179">+91 63744 06179</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left Info Area -->
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <div class="fcp-hero-left">
                        <!-- FreeScan Combo+ Logo -->
                        <img src="<?= $img ?>/Freescan-combo-plus-logo.png" alt="FreeScan Combo+ Logo" class="fcp-hero-logo img-fluid">

                        <!-- Main Title -->
                        <h1 class="fcp-hero-title">
                            Wireless 3D Scanner in <span class="fcp-text-orange">India</span>
                        </h1>

                        <!-- Subtitle -->
                        <h2 class="fcp-hero-subtitle">
                            The Next Generation of FreeScan Combo Has Arrived in India
                        </h2>

                        <!-- Description -->
                        <p class="fcp-hero-desc">
                            Wireless Metrology. 93 Laser Lines. Built-in VPG. Precise3DM introduces the new SHINING 3D FreeScan Combo+ Wireless in India.
                        </p>

                        <!-- Tag -->
                        <div class="fcp-hero-tag">
                            Wireless. Faster. More Precise.
                        </div>

                        <!-- CTA Buttons -->
                        <div class="fcp-hero-btns">
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="fcp-btn-primary">
                                <span>Request a Live Demo</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="fcp-btn-outline">
                                <span>Get India Pricing</span>
                            </a>
                        </div>

                        <!-- Email Us Contact -->
                        <div class="fcp-email-box">
                            <div class="fcp-email-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="fcp-email-text">
                                <span class="fcp-email-label">Email us</span>
                                <div class="fcp-email-addresses">
                                    <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a>
                                    <span class="fcp-email-divider">|</span>
                                    <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. Video Gallery Section
         ========================================================================= -->
    <section class="fcp-video-section" id="fcp-video-gallery">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Header -->
            <div class="fcp-video-header text-center">
                <h2 class="fcp-section-title">
                    Experience the <span class="fcp-text-orange">FreeScan Combo+ Wireless</span>
                </h2>
                <h3 class="fcp-video-subtitle">
                    Watch how it works. See the difference. Feel the freedom.
                </h3>
                <p class="fcp-video-desc">
                    From wireless scanning to built-in VPG, the FreeScan Combo+ Wireless is designed for real-world industrial applications. Watch the video to see the scanner in action and discover why it's the next generation.
                </p>
            </div>

            <!-- Video Player & Playlist Card -->
            <div class="fcp-video-gallery-card">
                <!-- Main Video Thumbnail / Player -->
                <div class="fcp-video-main-wrap">
                    <img src="<?= $img ?>/experience-video-main.png" alt="FreeScan Combo+ Wireless Video" class="fcp-video-main-img img-fluid">
                </div>

                <!-- Video Playlist -->
                <div class="fcp-video-playlist-wrap">
                    <!-- Item 1 -->
                    <div class="fcp-playlist-item active">
                        <div class="fcp-playlist-thumb-wrap">
                            <img src="<?= $img ?>/experience-1.png" alt="FreeScan Combo+ Wireless" class="fcp-playlist-thumb">
                            <span class="fcp-playlist-badge">12:31</span>
                        </div>
                        <div class="fcp-playlist-info">
                            <div class="fcp-playlist-title">FreeScan Combo+ Wireless</div>
                            <div class="fcp-playlist-duration">5:00</div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="fcp-playlist-item">
                        <div class="fcp-playlist-thumb-wrap">
                            <img src="<?= $img ?>/experience-2.png" alt="FreeScan Combo+ Wireless Versatile Scanning Modes" class="fcp-playlist-thumb">
                            <span class="fcp-playlist-badge">12:31</span>
                        </div>
                        <div class="fcp-playlist-info">
                            <div class="fcp-playlist-title">FreeScan Combo+ Wireless Versatile Scanning Modes</div>
                            <div class="fcp-playlist-duration">5:00</div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="fcp-playlist-item">
                        <div class="fcp-playlist-thumb-wrap">
                            <img src="<?= $img ?>/experience-3.png" alt="FreeScan Combo+ Wireless Compact and Powerful" class="fcp-playlist-thumb">
                            <span class="fcp-playlist-badge">12:31</span>
                        </div>
                        <div class="fcp-playlist-info">
                            <div class="fcp-playlist-title">FreeScan Combo+ Wireless Compact and Powerful</div>
                            <div class="fcp-playlist-duration">5:00</div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="fcp-playlist-item">
                        <div class="fcp-playlist-thumb-wrap">
                            <img src="<?= $img ?>/experience-4.png" alt="Marker-Free Infrared Scanning" class="fcp-playlist-thumb">
                            <span class="fcp-playlist-badge">12:31</span>
                        </div>
                        <div class="fcp-playlist-info">
                            <div class="fcp-playlist-title">Marker-Free Infrared Scanning</div>
                            <div class="fcp-playlist-duration">5:00</div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="fcp-playlist-item">
                        <div class="fcp-playlist-thumb-wrap">
                            <img src="<?= $img ?>/experience-5.png" alt="Inspection-Ready Workflow" class="fcp-playlist-thumb">
                            <span class="fcp-playlist-badge">12:31</span>
                        </div>
                        <div class="fcp-playlist-info">
                            <div class="fcp-playlist-title">Inspection-Ready Workflow</div>
                            <div class="fcp-playlist-duration">5:00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. Core Feature Section
         ========================================================================= -->
    <section class="fcp-core-section" id="fcp-core-features">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Header Row with bottom border -->
            <div class="row align-items-center fcp-core-header-row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="fcp-core-title">
                        More Freedom. More Speed.<br>
                        <span class="fcp-text-orange">More Control.</span>
                    </h2>
                </div>
                <div class="col-lg-6">
                    <p class="fcp-core-header-desc">
                        The FreeScan Combo+ Wireless takes the familiar FreeScan Combo concept and upgrades it for modern industrial workflows.
                    </p>
                </div>
            </div>

            <!-- Features Grid: 3 left, middle scanner image, 3 right -->
            <div class="fcp-core-grid">
                <!-- Left Column (3 features) -->
                <div class="fcp-core-column">
                    <!-- Feature 1 -->
                    <div class="fcp-core-item">
                        <div class="fcp-core-icon-box">
                            <img src="<?= $img ?>/control-1.svg" alt="Wireless Connectivity">
                        </div>
                        <div class="fcp-core-content">
                            <h3 class="fcp-core-item-title">Wireless Connectivity</h3>
                            <p class="fcp-core-item-desc">
                                Powered by Wi-Fi 7, the scanner enables wireless data transmission for greater freedom of movement across manufacturing environments, inspection areas and outdoor workspaces.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="fcp-core-item">
                        <div class="fcp-core-icon-box">
                            <img src="<?= $img ?>/control-2.svg" alt="93 Blue Laser Lines">
                        </div>
                        <div class="fcp-core-content">
                            <h3 class="fcp-core-item-title">93 Blue Laser Lines</h3>
                            <p class="fcp-core-item-desc">
                                The new high-speed scanning mode uses 93 blue laser lines to capture large surfaces rapidly.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="fcp-core-item">
                        <div class="fcp-core-icon-box">
                            <img src="<?= $img ?>/control-3.svg" alt="Built-in Video Photogrammetry">
                        </div>
                        <div class="fcp-core-content">
                            <h3 class="fcp-core-item-title">Built-in Video Photogrammetry</h3>
                            <p class="fcp-core-item-desc">
                                Integrated VPG technology helps maintain volumetric accuracy during large-scale scanning while reducing cumulative error.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Center Scanner Image -->
                <div class="fcp-core-center-image">
                    <img src="<?= $img ?>/scanner-image.png" alt="FreeScan Combo+ Wireless Scanner" class="img-fluid">
                </div>

                <!-- Right Column (3 features) -->
                <div class="fcp-core-column">
                    <!-- Feature 4 -->
                    <div class="fcp-core-item">
                        <div class="fcp-core-icon-box">
                            <img src="<?= $img ?>/control-4.svg" alt="Metrology-Grade Accuracy">
                        </div>
                        <div class="fcp-core-content">
                            <h3 class="fcp-core-item-title">Metrology-Grade Accuracy</h3>
                            <p class="fcp-core-item-desc">
                                Achieve scanner accuracy of up to 0.02 mm, with measurement performance verified according to ISO 10360.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="fcp-core-item">
                        <div class="fcp-core-icon-box">
                            <img src="<?= $img ?>/control-5.svg" alt="Dual-Light Technology">
                        </div>
                        <div class="fcp-core-content">
                            <h3 class="fcp-core-item-title">Dual-Light Technology</h3>
                            <p class="fcp-core-item-desc">
                                Blue laser scanning provides high-performance geometry capture, while infrared technology enables fast marker-free scanning on suitable feature-rich surfaces.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="fcp-core-item">
                        <div class="fcp-core-icon-box">
                            <img src="<?= $img ?>/control-6.svg" alt="Lightweight Professional Design">
                        </div>
                        <div class="fcp-core-content">
                            <h3 class="fcp-core-item-title">Lightweight Professional Design</h3>
                            <p class="fcp-core-item-desc">
                                At only 550 g, the scanner is designed for extended handheld operation and difficult-to-reach areas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. Key Features Section
         ========================================================================= -->
    <section class="fcp-kf-section" id="fcp-key-features">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Section Header -->
            <div class="fcp-kf-header">
                <img src="<?= $img ?>/Freescan-combo-plus-logo-2.png" alt="FreeScan Combo+" class="fcp-kf-header-logo">
                <h2 class="fcp-kf-header-title">Wireless - <span class="fcp-text-orange">Key Features</span></h2>
            </div>

            <!-- Two-Column Layout -->
            <div class="row fcp-kf-layout">
                <!-- Left Side Details Pane -->
                <div class="col-lg-7 col-md-12 fcp-kf-left">
                    <div class="fcp-kf-left-wrap">

                        <!-- Feature Panel 1 -->
                        <div class="fcp-kf-panel active" data-feature="1">
                            <img src="<?= $img ?>/feature-1.png" alt="Scan Without the Cable" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">1</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Scan Without the Cable</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Wi-Fi 7 Wireless 3D Scanning</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">Factory floors are not laboratories. Engineers need to move around vehicles, machines, components and structures without constantly managing cables.</p>
                                <p class="fcp-kf-desc">FreeScan Combo+ Wireless uses <span class="fcp-text-orange font-weight-bold">next-generation Wi-Fi 7 technology</span> and advanced anti-interference technology to provide stable wireless data transmission.</p>

                                <div class="row g-3 fcp-kf-minis">
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-1-1.png" alt="Scan Around the Object" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Scan Around the Object</div>
                                            <p class="fcp-kf-mini-desc">Move freely around your component.</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-1-2.png" alt="Scan in Confined Areas" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Scan in Confined Areas</div>
                                            <p class="fcp-kf-mini-desc">Reach seams, corners and difficult-to-access areas.</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-1-3.png" alt="Scan Across the Shop Floor" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Scan Across the Shop Floor</div>
                                            <p class="fcp-kf-mini-desc">Take the scanner directly to the inspection location.</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-1-4.png" alt="Switch Back to Wired Mode" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Switch Back to Wired Mode</div>
                                            <p class="fcp-kf-mini-desc">When required, the scanner can also operate in wired mode.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="fcp-kf-highlight">
                                    <p>Wireless when you need freedom. Wired when you need it.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 2 -->
                        <div class="fcp-kf-panel" data-feature="2">
                            <img src="<?= $img ?>/feature-2.png" alt="Built-in Video Photogrammetry" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">2</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Built-in Video Photogrammetry</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Large Objects. Better Volumetric Accuracy.</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">Large components can introduce cumulative errors during conventional handheld scanning.</p>
                                <p class="fcp-kf-desc">FreeScan Combo+ Wireless integrates <span class="fcp-text-orange font-weight-bold">Video Photogrammetry (VPG)</span> directly into the scanning workflow.</p>
                                <p class="fcp-kf-desc">VPG continuously optimizes the spatial position of reference markers during scanning to help maintain reliable volumetric accuracy over larger components.</p>

                                <div class="fcp-kf-stat-center">
                                    <div class="fcp-kf-stat-label">Volumetric Accuracy with VPG</div>
                                    <div class="fcp-kf-stat-val">0.02 mm + 0.015 mm/m</div>
                                </div>

                                <div class="mb-2">
                                    <span class="fcp-kf-pill-tag">Benefits</span>
                                </div>

                                <div class="row g-2 fcp-kf-minis">
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-2-1.png" alt="Reduced cumulative error" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Reduced cumulative error</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-2-2.png" alt="Improved large-object measurement performance" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Improved large-object measurement performance</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-2-3.png" alt="Better volumetric stability" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Better volumetric stability</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-2-4.png" alt="No coded markers required for VPG" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">No coded markers required for VPG</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-2-5.png" alt="Suitable for large-scale inspection applications" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Suitable for large-scale inspection applications</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fcp-kf-highlight">
                                    <p>For demanding large-object measurement workflows, VPG provides an additional layer of spatial control.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 3 -->
                        <div class="fcp-kf-panel" data-feature="3">
                            <img src="<?= $img ?>/feature-3.png" alt="93 Laser Lines for Faster Scanning" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">3</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>93 Laser Lines for Faster Scanning</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Cover More Surface in Less Time</h4>
                                    </div>
                                </div>

                                <div class="fcp-kf-highlight mt-0 mb-3">
                                    <p>The new FreeScan Combo+ Wireless dramatically increases high-speed scanning capability.</p>
                                </div>

                                <div class="fcp-kf-stat-center">
                                    <div style="font-size: 26px; font-weight: 800; color: #222;">
                                        <span class="fcp-text-orange" style="font-size: 32px;">93</span> Blue Laser Lines
                                    </div>
                                </div>

                                <p class="fcp-kf-desc">Designed for rapid coverage of large surfaces and complex components.</p>
                                <p class="fcp-kf-desc">The high-speed mode is supported by a scan frame rate of up to <span class="fcp-text-orange font-weight-bold">180 FPS</span>, enabling fast data acquisition while maintaining high-quality 3D data.</p>

                                <div class="row g-3 fcp-kf-minis mb-3">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-3-1.png" alt="High-Speed Scanning" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">High-Speed Scanning</div>
                                            <div class="fcp-kf-mini-sub">93 laser lines</div>
                                            <p class="fcp-kf-mini-desc">For rapid overall scanning.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-3-2.png" alt="Detailed Scanning" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Detailed Scanning</div>
                                            <div class="fcp-kf-mini-sub">25 parallel laser lines</div>
                                            <p class="fcp-kf-mini-desc">For intricate geometry and detailed features.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-3-3.png" alt="Deep-Pocket Scanning" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Deep-Pocket Scanning</div>
                                            <div class="fcp-kf-mini-sub">1 single laser line</div>
                                            <p class="fcp-kf-mini-desc">For narrow, deep and difficult-to-reach areas.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 fcp-kf-minis">
                                    <div class="col-12 col-md-6">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-3-4.png" alt="Infrared Scanning" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Infrared Scanning</div>
                                            <p class="fcp-kf-mini-desc">For rapid marker-free scanning of suitable feature-rich surfaces.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-3-5.png" alt="VPG Scanning" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">VPG Scanning</div>
                                            <p class="fcp-kf-mini-desc">For optimized volumetric accuracy during large-scale measurement.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 4 -->
                        <div class="fcp-kf-panel" data-feature="4">
                            <img src="<?= $img ?>/feature-4.png" alt="Five Scanning Modes. One Scanner." class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">4</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Five Scanning Modes. One Scanner.</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Select the Right Mode for the Job</h4>
                                    </div>
                                </div>

                                <div class="row g-3 fcp-kf-minis mb-3">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card text-center">
                                            <img src="<?= $img ?>/feature-card-4-1.png" alt="High-Speed Mode" class="fcp-kf-mode-img">
                                            <div class="fcp-kf-mini-title">High-Speed Mode</div>
                                            <div class="fcp-kf-mini-sub">93 blue laser lines</div>
                                            <p class="fcp-kf-mini-desc">Rapidly capture large surfaces and overall component geometry.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card text-center">
                                            <img src="<?= $img ?>/feature-card-4-2.png" alt="Detail Mode" class="fcp-kf-mode-img">
                                            <div class="fcp-kf-mini-title">Detail Mode</div>
                                            <div class="fcp-kf-mini-sub">25 parallel laser lines</div>
                                            <p class="fcp-kf-mini-desc">Capture smaller features, edges and intricate geometry with greater detail.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card text-center">
                                            <img src="<?= $img ?>/feature-card-4-3.png" alt="Deep-Pocket Mode" class="fcp-kf-mode-img">
                                            <div class="fcp-kf-mini-title">Deep-Pocket Mode</div>
                                            <div class="fcp-kf-mini-sub">Single Laser Line</div>
                                            <p class="fcp-kf-mini-desc">Reach deep pockets, narrow cavities and difficult features.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 fcp-kf-minis">
                                    <div class="col-12 col-md-6">
                                        <div class="fcp-kf-mini-card text-center">
                                            <img src="<?= $img ?>/feature-card-4-4.png" alt="IR Rapid Mode" class="fcp-kf-mode-img">
                                            <div class="fcp-kf-mini-title">IR Rapid Mode</div>
                                            <div class="fcp-kf-mini-sub">Marker-Free Scanning</div>
                                            <p class="fcp-kf-mini-desc">Reduce surface preparation on suitable feature-rich objects.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="fcp-kf-mini-card text-center">
                                            <img src="<?= $img ?>/feature-card-4-5.png" alt="VPG Mode" class="fcp-kf-mode-img">
                                            <div class="fcp-kf-mini-title">VPG Mode</div>
                                            <div class="fcp-kf-mini-sub">Large-Scale Accuracy</div>
                                            <p class="fcp-kf-mini-desc">Optimize global accuracy and volumetric performance for large components.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 5 -->
                        <div class="fcp-kf-panel" data-feature="5">
                            <img src="<?= $img ?>/feature-5.png" alt="Metrology-Grade Accuracy" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">5</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Metrology-Grade Accuracy</h3>
                                        <h4 class="fcp-kf-ld-subtitle">0.02 mm Accuracy</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">FreeScan Combo+ Wireless is designed for professional measurement applications where reliable dimensional data matters.</p>

                                <div class="fcp-kf-highlight my-3">
                                    <p>The scanner provides accuracy of up to: <span class="fcp-text-orange font-weight-bold">0.02 mm</span></p>
                                </div>

                                <p class="fcp-kf-desc">Measurement performance is verified according to the <strong>ISO 10360</strong> standard.</p>
                                <p class="fcp-kf-desc">SHINING 3D performs calibration and verification in its <strong>ISO/IEC 17025 accredited Accuracy Lab</strong>, providing traceable measurement performance.</p>

                                <div class="row g-3 fcp-kf-minis">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-5-1.png" alt="ISO 10360" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">ISO 10360</div>
                                            <p class="fcp-kf-mini-desc">Verified measurement performance.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-5-2.png" alt="ISO/IEC 17025" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">ISO/IEC 17025</div>
                                            <p class="fcp-kf-mini-desc">Accuracy laboratory accreditation.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-5-3.png" alt="Metrology Workflow" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Metrology Workflow</div>
                                            <p class="fcp-kf-mini-desc">Designed for professional inspection and measurement applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 6 -->
                        <div class="fcp-kf-panel" data-feature="6">
                            <img src="<?= $img ?>/feature-6.png" alt="Large-Object Scanning" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">6</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Large-Object Scanning</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Volumetric Accuracy Up to 0.02 mm + 0.015 mm/m with VPG</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">When scanning large components, maintaining volumetric accuracy becomes increasingly important.</p>
                                <p class="fcp-kf-desc">The integrated VPG system helps continuously optimize marker positioning during the scan.</p>

                                <div class="fcp-kf-highlight my-3">
                                    <p>This makes FreeScan Combo+ Wireless suitable for applications involving:</p>
                                </div>

                                <div class="row g-2 fcp-kf-minis mb-2">
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-1.png" alt="Automotive body panels" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Automotive body panels</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-2.png" alt="Large castings" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Large castings</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-3.png" alt="Industrial machinery" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Industrial machinery</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-4.png" alt="Heavy equipment" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Heavy equipment</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 fcp-kf-minis">
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-5.png" alt="Energy components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Energy components</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-6.png" alt="Vehicle structures" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Vehicle structures</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-7.png" alt="Large fabricated parts" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Large fabricated parts</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-6-8.png" alt="Engineering assemblies" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Engineering assemblies</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 7 -->
                        <div class="fcp-kf-panel" data-feature="7">
                            <img src="<?= $img ?>/feature-7.png" alt="Scan Black & Reflective Surfaces" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">7</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Scan Black & Reflective Surfaces</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Blue Laser Performance for Challenging Industrial Surfaces</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">Industrial components are not always easy to scan.</p>
                                <p class="fcp-kf-desc">Black surfaces, dark materials and reflective components can create challenges for conventional optical scanners.</p>

                                <div class="fcp-kf-highlight my-3">
                                    <p>The FreeScan Combo+ Wireless uses a <span class="fcp-text-orange font-weight-bold">blue laser light source</span> designed to provide strong adaptability to dark and reflective surfaces.</p>
                                </div>

                                <p class="fcp-kf-desc mb-2">Suitable applications include:</p>

                                <div class="row g-2 fcp-kf-minis mb-2">
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-1.png" alt="Automotive components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Automotive components</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-2.png" alt="Black painted surfaces" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Black painted surfaces</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-3.png" alt="Reflective metal components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Reflective metal components</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-4.png" alt="Engine components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Engine components</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-2 fcp-kf-minis">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-5.png" alt="Wheels and rims" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Wheels and rims</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-6.png" alt="Machined components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Machined components</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-7.png" alt="Industrial parts" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Industrial parts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 8 -->
                        <div class="fcp-kf-panel" data-feature="8">
                            <img src="<?= $img ?>/feature-8.png" alt="Marker-Free Scanning" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">8</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Marker-Free Scanning</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Less Preparation. Faster Capture.</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">With the infrared scanning mode, FreeScan Combo+ Wireless can capture suitable feature-rich surfaces without requiring markers on the object.</p>
                                <p class="fcp-kf-desc">This can reduce preparation time and simplify scanning workflows.</p>

                                <p class="fcp-kf-desc mb-2">Ideal for:</p>

                                <div class="row g-2 fcp-kf-minis mb-3">
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-8-1.png" alt="Engine compartments" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Engine compartments</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-1.png" alt="Automotive components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Automotive components</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-2.png" alt="Black painted surfaces" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Black painted surfaces</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-3.png" alt="Reflective metal components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Reflective metal components</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg fcp-col-5">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-4.png" alt="Engine components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Engine components</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fcp-kf-highlight">
                                    <p>For surfaces where marker-based scanning is still advantageous, markers remain available as part of the broader scanning workflow.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 9 -->
                        <div class="fcp-kf-panel" data-feature="9">
                            <img src="<?= $img ?>/feature-9.png" alt="Lightweight. Compact. Professional." class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">9</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Lightweight. Compact. Professional.</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Only 550 g</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">Professional 3D scanning often means moving around an object for extended periods.</p>

                                <div class="fcp-kf-highlight my-3">
                                    <p>The FreeScan Combo+ Wireless weighs only: <span class="fcp-text-orange font-weight-bold">550 g</span></p>
                                </div>

                                <p class="fcp-kf-desc mb-2">Its compact ergonomic design makes it easier to operate around:</p>

                                <div class="row g-2 fcp-kf-minis mb-2">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-9-1.png" alt="Narrow spaces" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Narrow spaces</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-9-2.png" alt="Vehicle interiors" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Vehicle interiors</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-7-4.png" alt="Engine compartments" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Engine compartments</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 fcp-kf-minis mb-2">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-9-4.png" alt="Complex assemblies" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Complex assemblies</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-9-5.png" alt="Industrial machinery" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Industrial machinery</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-9-6.png" alt="Large components" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Large components</div>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-muted mt-2 mb-0" style="font-size: 13.5px;">The optimized camera angle also supports scanning along seams and difficult-to-access areas.</p>
                            </div>
                        </div>

                        <!-- Feature Panel 10 -->
                        <div class="fcp-kf-panel" data-feature="10">
                            <img src="<?= $img ?>/feature-10.png" alt="Up to 2 Hours of Continuous Scanning" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">10</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Up to 2 Hours of Continuous Scanning</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Designed for Real Production Work</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">FreeScan Combo+ Wireless comes with <strong>3 rechargeable batteries</strong>.</p>

                                <div class="fcp-kf-highlight my-3">
                                    <p>Each battery provides up to: <span class="fcp-text-orange font-weight-bold">2 Hours</span> of continuous scanning.</p>
                                </div>

                                <p class="fcp-kf-desc">The rapid-charging dock allows <strong>two batteries to charge while one battery is being used</strong>, helping reduce downtime during longer scanning projects.</p>

                                <div class="row g-3 fcp-kf-minis">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-10-1.png" alt="3 Batteries" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">3 Batteries</div>
                                            <p class="fcp-kf-mini-desc">Included for extended operation.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-10-2.png" alt="Rapid Charging Dock" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Rapid Charging Dock</div>
                                            <p class="fcp-kf-mini-desc">Charge two batteries while scanning with the third.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-10-3.png" alt="Wireless Operation" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Wireless Operation</div>
                                            <p class="fcp-kf-mini-desc">Work without being restricted by the scanner cable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 11 -->
                        <div class="fcp-kf-panel" data-feature="11">
                            <img src="<?= $img ?>/feature-11.png" alt="Inspection-Ready from Scan to Report" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">11</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Inspection-Ready from Scan to Report</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Capture. Measure. Report.</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">FreeScan Combo+ Wireless works seamlessly with the SHINING 3D inspection ecosystem.</p>
                                <p class="fcp-kf-desc">Transfer scan data directly into <span class="fcp-text-orange font-weight-bold">SHINING3D Inspect</span> for professional dimensional analysis.</p>

                                <p class="fcp-kf-desc mb-2">Perform:</p>

                                <div class="row g-2 fcp-kf-minis mb-2">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-11-1.png" alt="3D dimensional inspection" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">3D dimensional inspection</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-11-2.png" alt="GD&T analysis" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">GD&T analysis</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-11-3.png" alt="Color-map comparison" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Color-map comparison</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 fcp-kf-minis mb-3">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-11-4.png" alt="CAD comparison" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">CAD comparison</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-11-5.png" alt="Feature measurement" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Feature measurement</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-11-6.png" alt="Automated reporting" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Automated reporting</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <span class="fcp-kf-pill-tag">One Digital Workflow</span>
                                </div>
                                <div class="fcp-kf-highlight mt-0">
                                    <p class="text-center font-weight-bold">3D Scan &rarr; Alignment &rarr; Measurement &rarr; Analysis &rarr; Inspection Report</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 12 -->
                        <div class="fcp-kf-panel" data-feature="12">
                            <img src="<?= $img ?>/feature-12.png" alt="Intelligent Scanning Software" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">12</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Intelligent Scanning Software</h3>
                                        <h4 class="fcp-kf-ld-subtitle">FreeScan Software</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">The FreeScan software environment is designed to make professional 3D scanning more efficient.</p>

                                <div class="row g-3 fcp-kf-minis mb-3">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-1.png" alt="Real-Time Mesh Display" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Real-Time Mesh Display</div>
                                            <p class="fcp-kf-mini-desc">Visualize mesh data while scanning and immediately monitor the captured geometry.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-2.png" alt="Intelligent Resolution" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Intelligent Resolution</div>
                                            <p class="fcp-kf-mini-desc">Automatically adjusts mesh resolution according to object curvature for efficient data processing.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-3.png" alt="Real-Time Data Quality" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Real-Time Data Quality</div>
                                            <p class="fcp-kf-mini-desc">Monitor scan quality while capturing the component and identify areas that require additional scanning.</p>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="text-center font-weight-bold mt-4 mb-1" style="font-size: 20px; color: #222;">AI Feature Recognition</h4>
                                <p class="text-center text-muted mb-3" style="font-size: 13.5px;">Intelligent feature recognition supports fast identification and measurement of:</p>

                                <div class="row g-2 fcp-kf-minis">
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-4.png" alt="Round holes" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Round holes</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-5.png" alt="Rectangular holes" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Rectangular holes</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-6.png" alt="Slots" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Slots</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-12-7.png" alt="Component features" class="fcp-kf-mini-icon">
                                            <div class="fcp-kf-mini-title">Component features</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Panel 13 -->
                        <div class="fcp-kf-panel" data-feature="13">
                            <img src="<?= $img ?>/feature-13.png" alt="Compatible with Your Engineering Software" class="fcp-kf-main-img">
                            <div class="fcp-kf-left-desc">
                                <div class="fcp-kf-ld-title">
                                    <div class="fcp-kf-ld-num">13</div>
                                    <div class="fcp-kf-ld-text">
                                        <h3>Compatible with Your Engineering Software</h3>
                                        <h4 class="fcp-kf-ld-subtitle">Build the Workflow You Already Use</h4>
                                    </div>
                                </div>
                                <p class="fcp-kf-desc">FreeScan Combo+ Wireless integrates with major reverse engineering and inspection software platforms.</p>

                                <h5 class="text-center font-weight-bold mt-3 mb-2" style="font-size: 18px; color: #222;">Inspection</h5>
                                <div class="row g-3 fcp-kf-minis mb-3">
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-13-1.png" alt="SHINING3D Inspect" class="fcp-kf-mini-icon" style="height: 38px;">
                                            <div class="fcp-kf-mini-title">SHINING3D Inspect</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-13-2.png" alt="Geomagic Control X" class="fcp-kf-mini-icon" style="height: 38px;">
                                            <div class="fcp-kf-mini-title">Geomagic Control X</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="fcp-kf-mini-card">
                                            <img src="<?= $img ?>/feature-icon-13-3.png" alt="PolyWorks Inspector" class="fcp-kf-mini-icon" style="height: 38px;">
                                            <div class="fcp-kf-mini-title">PolyWorks Inspector</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-12 col-md-8">
                                        <h5 class="text-center font-weight-bold mb-2" style="font-size: 18px; color: #222;">Reverse Engineering</h5>
                                        <div class="row g-2 fcp-kf-minis">
                                            <div class="col-6">
                                                <div class="fcp-kf-mini-card">
                                                    <img src="<?= $img ?>/feature-icon-13-4.png" alt="Geomagic Design X" class="fcp-kf-mini-icon" style="height: 38px;">
                                                    <div class="fcp-kf-mini-title">Geomagic Design X</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="fcp-kf-mini-card">
                                                    <img src="<?= $img ?>/feature-icon-13-5.png" alt="EXModel Pro" class="fcp-kf-mini-icon" style="height: 38px;">
                                                    <div class="fcp-kf-mini-title">EXModel Pro</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <h5 class="text-center font-weight-bold mb-2" style="font-size: 18px; color: #222;">Texture Mapping</h5>
                                        <div class="row g-2 fcp-kf-minis">
                                            <div class="col-12">
                                                <div class="fcp-kf-mini-card">
                                                    <img src="<?= $img ?>/feature-icon-13-6.png" alt="BlueStar Mapping" class="fcp-kf-mini-icon" style="height: 38px;">
                                                    <div class="fcp-kf-mini-title">BlueStar Mapping</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-muted mt-3 mb-0" style="font-size: 13.5px;">This allows your team to move from raw 3D scan data to CAD, inspection and engineering deliverables.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side Navigation Timeline -->
                <div class="col-lg-5 col-md-12 fcp-kf-right">
                    <div class="fcp-kf-right-header">
                        <div class="fcp-kf-rh-title">
                            <strong id="kf-counter-curr">01</strong><span>/13</span>
                            <h4>Key Features</h4>
                        </div>
                        <div class="fcp-kf-rh-arrows">
                            <button type="button" class="fcp-kf-arrow-btn" id="kf-arrow-down" title="Next Feature" aria-label="Next Feature">
                                <i class="fa-solid fa-arrow-down"></i>
                            </button>
                            <button type="button" class="fcp-kf-arrow-btn" id="kf-arrow-up" title="Previous Feature" aria-label="Previous Feature">
                                <i class="fa-solid fa-arrow-up"></i>
                            </button>
                        </div>
                    </div>

                    <div class="fcp-kf-timeline" id="kf-timeline">

                        <!-- Item 1 -->
                        <div class="fcp-kf-tl-item active" data-target="1">
                            <div class="fcp-kf-tl-dot">01</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-1.png" alt="Scan Without the Cable">
                                <div class="fcp-kf-tl-text">
                                    <h5>Scan Without the Cable</h5>
                                    <p>Wi-Fi 7 Wireless 3D Scanning</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="fcp-kf-tl-item" data-target="2">
                            <div class="fcp-kf-tl-dot inactive">2</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-2.png" alt="Built-in Video Photogrammetry">
                                <div class="fcp-kf-tl-text">
                                    <h5>Built-in Video Photogrammetry</h5>
                                    <p>Large Objects. Better Volumetric Accuracy.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="fcp-kf-tl-item" data-target="3">
                            <div class="fcp-kf-tl-dot inactive">3</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-3.png" alt="93 Laser Lines for Faster Scanning">
                                <div class="fcp-kf-tl-text">
                                    <h5>93 Laser Lines for Faster Scanning</h5>
                                    <p>Cover More Surface in Less Time</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="fcp-kf-tl-item" data-target="4">
                            <div class="fcp-kf-tl-dot inactive">4</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-4.png" alt="Five Scanning Modes. One Scanner.">
                                <div class="fcp-kf-tl-text">
                                    <h5>Five Scanning Modes. One Scanner.</h5>
                                    <p>Select the Right Mode for the Job</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="fcp-kf-tl-item" data-target="5">
                            <div class="fcp-kf-tl-dot inactive">5</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-5.png" alt="Metrology-Grade Accuracy">
                                <div class="fcp-kf-tl-text">
                                    <h5>Metrology-Grade Accuracy</h5>
                                    <p>0.02 mm Accuracy</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="fcp-kf-tl-item" data-target="6">
                            <div class="fcp-kf-tl-dot inactive">6</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-6.png" alt="Large-Object Scanning">
                                <div class="fcp-kf-tl-text">
                                    <h5>Large-Object Scanning</h5>
                                    <p>Volumetric Accuracy Up to 0.02 mm + 0.015 mm/m with VPG</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="fcp-kf-tl-item" data-target="7">
                            <div class="fcp-kf-tl-dot inactive">7</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-7.png" alt="Scan Black & Reflective Surfaces">
                                <div class="fcp-kf-tl-text">
                                    <h5>Scan Black & Reflective Surfaces</h5>
                                    <p>Blue Laser Performance for Challenging Industrial Surfaces</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 8 -->
                        <div class="fcp-kf-tl-item" data-target="8">
                            <div class="fcp-kf-tl-dot inactive">8</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-8.png" alt="Marker-Free Scanning">
                                <div class="fcp-kf-tl-text">
                                    <h5>Marker-Free Scanning</h5>
                                    <p>Less Preparation. Faster Capture.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 9 -->
                        <div class="fcp-kf-tl-item" data-target="9">
                            <div class="fcp-kf-tl-dot inactive">9</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-9.png" alt="Lightweight. Compact. Professional.">
                                <div class="fcp-kf-tl-text">
                                    <h5>Lightweight. Compact. Professional.</h5>
                                    <p>Only 550 g</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 10 -->
                        <div class="fcp-kf-tl-item" data-target="10">
                            <div class="fcp-kf-tl-dot inactive">10</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-10.png" alt="Up to 2 Hours of Continuous Scanning">
                                <div class="fcp-kf-tl-text">
                                    <h5>Up to 2 Hours of Continuous Scanning</h5>
                                    <p>Designed for Real Production Work</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 11 -->
                        <div class="fcp-kf-tl-item" data-target="11">
                            <div class="fcp-kf-tl-dot inactive">11</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-11.png" alt="Inspection-Ready from Scan to Report">
                                <div class="fcp-kf-tl-text">
                                    <h5>Inspection-Ready from Scan to Report</h5>
                                    <p>Capture. Measure. Report.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 12 -->
                        <div class="fcp-kf-tl-item" data-target="12">
                            <div class="fcp-kf-tl-dot inactive">12</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-12.png" alt="Intelligent Scanning Software">
                                <div class="fcp-kf-tl-text">
                                    <h5>Intelligent Scanning Software</h5>
                                    <p>FreeScan Software</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 13 -->
                        <div class="fcp-kf-tl-item" data-target="13">
                            <div class="fcp-kf-tl-dot inactive">13</div>
                            <div class="fcp-kf-tl-card">
                                <img src="<?= $img ?>/feature-13.png" alt="Compatible with Your Engineering Software">
                                <div class="fcp-kf-tl-text">
                                    <h5>Compatible with Your Engineering Software</h5>
                                    <p>Build the Workflow You Already Use</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. Technical Specifications Section
         ========================================================================= -->
    <section class="fcp-tech-section" id="fcp-specifications">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Header -->
            <div class="fcp-tech-header">
                <img src="<?= $img ?>/Freescan-combo-plus-logo-2.png" alt="FreeScan Combo+">
                <h2 class="fcp-tech-title">Wireless - <span class="fcp-text-orange">Technical Specifications</span></h2>
            </div>

            <!-- Two Tables Row -->
            <div class="row g-4">
                <!-- Table 1 (Left) -->
                <div class="col-lg-6">
                    <div class="fcp-tech-table-card">
                        <div class="table-responsive">
                            <table class="fcp-tech-table">
                                <thead>
                                    <tr>
                                        <th>Specification</th>
                                        <th>FreeScan Combo+ Wireless</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Product Type</td>
                                        <td>Wireless Hybrid Light Source Metrology Handheld 3D Scanner</td>
                                    </tr>
                                    <tr>
                                        <td>Light Source</td>
                                        <td>Blue Laser + Infrared VCSEL</td>
                                    </tr>
                                    <tr>
                                        <td>Accuracy</td>
                                        <td>0.02 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Volumetric Accuracy</td>
                                        <td>0.02 + 0.03 mm/m</td>
                                    </tr>
                                    <tr>
                                        <td>Volumetric Accuracy with VPG</td>
                                        <td>0.02 mm + 0.015 mm/m</td>
                                    </tr>
                                    <tr>
                                        <td>High-Speed Scanning</td>
                                        <td>93 laser lines</td>
                                    </tr>
                                    <tr>
                                        <td>Detailed Scanning</td>
                                        <td>25 parallel laser lines</td>
                                    </tr>
                                    <tr>
                                        <td>Deep-Pocket Scanning</td>
                                        <td>1 single laser line</td>
                                    </tr>
                                    <tr>
                                        <td>IR Scanning</td>
                                        <td>Marker-free infrared scanning</td>
                                    </tr>
                                    <tr>
                                        <td>Scan Speed</td>
                                        <td>Up to 9,106,000 points/s</td>
                                    </tr>
                                    <tr>
                                        <td>Scan Frame Rate</td>
                                        <td>Up to 180 FPS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Table 2 (Right) -->
                <div class="col-lg-6">
                    <div class="fcp-tech-table-card">
                        <div class="table-responsive">
                            <table class="fcp-tech-table">
                                <thead>
                                    <tr>
                                        <th>Specification</th>
                                        <th>FreeScan Combo+ Wireless</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Maximum FOV – Laser</td>
                                        <td>580 × 650 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum FOV – IR</td>
                                        <td>830 × 700 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Point Distance</td>
                                        <td>0.01 – 10 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Connectivity</td>
                                        <td>Wireless &amp; Wired</td>
                                    </tr>
                                    <tr>
                                        <td>Wireless Technology</td>
                                        <td>Wi-Fi 7</td>
                                    </tr>
                                    <tr>
                                        <td>Battery Runtime</td>
                                        <td>Up to 2 hours per battery</td>
                                    </tr>
                                    <tr>
                                        <td>Batteries</td>
                                        <td>3 rechargeable batteries</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>550 g</td>
                                    </tr>
                                    <tr>
                                        <td>Certification</td>
                                        <td>CE, FCC, RoHS, WEEE, KC, FDA, UKCA, IP50</td>
                                    </tr>
                                    <tr>
                                        <td>Acceptance Test</td>
                                        <td>ISO 10360</td>
                                    </tr>
                                    <tr>
                                        <td>Accuracy Laboratory</td>
                                        <td>ISO/IEC 17025 Accredited Accuracy Lab</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. FreeScan Combo Wireless vs Previous FreeScan Combo Section
         ========================================================================= -->
    <section class="fcp-compare-section" id="fcp-comparison">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Header -->
            <div class="fcp-compare-header">
                <img src="<?= $img ?>/Freescan-combo-plus-logo-2.png" alt="FreeScan Combo+">
                <h2 class="fcp-compare-title">Wireless vs Previous FreeScan Combo</h2>
            </div>

            <!-- Comparison Table -->
            <div class="fcp-compare-card">
                <div class="table-responsive">
                    <table class="fcp-compare-table">
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th>Previous FreeScan Combo</th>
                                <th>New FreeScan Combo+ Wireless</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>High-Speed Laser Lines</td>
                                <td>26 laser lines (Combo)<br>50 laser lines (Combo+)</td>
                                <td>93 laser lines (Combo+ Wireless)<br>50 laser lines (Combo Wireless)</td>
                            </tr>
                            <tr>
                                <td>Detailed Laser Lines</td>
                                <td>7</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>Scan Speed</td>
                                <td>Up to 1,860,000 points/s (Combo)<br>Up to 3,600,000 points/s (Combo+)</td>
                                <td>Up to 9,106,000 points/s (Combo+ Wireless)<br>Up to 7,344,000 points/s (Combo Wireless)</td>
                            </tr>
                            <tr>
                                <td>Wireless</td>
                                <td>No</td>
                                <td>Wi-Fi 7</td>
                            </tr>
                            <tr>
                                <td>VPG</td>
                                <td>No</td>
                                <td>Built-in VPG</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>620 g</td>
                                <td>550 g</td>
                            </tr>
                            <tr>
                                <td>Accuracy</td>
                                <td>0.02 mm</td>
                                <td>0.02 mm</td>
                            </tr>
                            <tr>
                                <td>Deep-Pocket Mode</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>IR Marker-Free Mode</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Power Source</td>
                                <td>Wired</td>
                                <td>Battery Operated</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. Social Proof Banner Section
         ========================================================================= -->
    <section class="fcp-proof-section" id="fcp-social-proof">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <div class="fcp-proof-banner" style="background-image: url('<?= $img ?>/social-proof-banner-image.png');">
                <div class="fcp-proof-content">
                    <div class="row align-items-center">
                        <!-- Left Info -->
                        <div class="col-lg-7 mb-4 mb-lg-0">
                            <h2 class="fcp-proof-title">
                                50+ FreeScan Combos<br><span class="fcp-text-orange">Sold in India</span>
                            </h2>
                            <h3 class="fcp-proof-subtitle">
                                Now Experience the Next Evolution
                            </h3>
                            <p class="fcp-proof-desc">
                                The FreeScan Combo has already become part of inspection, reverse engineering and manufacturing workflows across India. With 50+ FreeScan Combo scanners sold in India, Precise3DM has built application experience around the platform.
                            </p>
                            <div class="fcp-proof-btns">
                                <a href="Book-demo-get-quote-for-3D-scanner.php" class="fcp-proof-btn-primary">
                                    <span>Request a Live Demo</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="Book-demo-get-quote-for-3D-scanner.php" class="fcp-proof-btn-outline">
                                    <span>Get India Pricing</span>
                                </a>
                            </div>
                        </div>

                        <!-- Right Spec List -->
                        <div class="col-lg-5">
                            <ul class="fcp-proof-list">
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Wi-Fi 7</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>93 laser lines</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Built-in VPG</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Up to 9.106 million points/s</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>25 parallel laser lines</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>550 g lightweight design</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Up to 2 hours continuous scanning per battery</span>
                                </li>
                                <li class="fcp-proof-list-item">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Wireless + wired connectivity</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bottom Center Pill -->
                    <div class="fcp-proof-pill-wrap">
                        <div class="fcp-proof-pill">
                            It is the next generation of the FreeScan Combo workflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. From Physical Part to CAD Section
         ========================================================================= -->
    <section class="fcp-part-section" id="fcp-part-to-cad">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Header -->
            <div class="fcp-part-header">
                <h2 class="fcp-section-title">
                    From Physical <span class="fcp-text-orange">Part to CAD</span>
                </h2>
                <h3 class="fcp-video-subtitle">
                    Turn Reality Into Engineering Data
                </h3>
                <p class="fcp-video-desc">
                    FreeScan Combo+ Wireless is not only a scanner. It is a starting point for a complete digital engineering workflow.
                </p>
            </div>

            <!-- 5 Steps Grid -->
            <div class="fcp-part-grid">
                <!-- Step 1 -->
                <div class="fcp-part-card">
                    <div class="fcp-part-step-row">
                        <span class="fcp-part-step-label">Step</span>
                        <span class="fcp-part-step-badge">1</span>
                    </div>
                    <h3 class="fcp-part-title">3D SCAN</h3>
                    <p class="fcp-part-desc">Capture the physical component.</p>
                    <div class="fcp-part-img-wrap">
                        <img src="<?= $img ?>/part-to-cad-1.png" alt="3D Scan" class="fcp-part-img">
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="fcp-part-card">
                    <div class="fcp-part-step-row">
                        <span class="fcp-part-step-label">Step</span>
                        <span class="fcp-part-step-badge">2</span>
                    </div>
                    <h3 class="fcp-part-title">PROCESS</h3>
                    <p class="fcp-part-desc">Clean and optimize the scan data.</p>
                    <div class="fcp-part-img-wrap">
                        <img src="<?= $img ?>/part-to-cad-2.png" alt="Process" class="fcp-part-img">
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="fcp-part-card">
                    <div class="fcp-part-step-row">
                        <span class="fcp-part-step-label">Step</span>
                        <span class="fcp-part-step-badge">3</span>
                    </div>
                    <h3 class="fcp-part-title">REVERSE ENGINEERING</h3>
                    <p class="fcp-part-desc">Create CAD geometry from the scan.</p>
                    <div class="fcp-part-img-wrap">
                        <img src="<?= $img ?>/part-to-cad-3.png" alt="Reverse Engineering" class="fcp-part-img">
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="fcp-part-card">
                    <div class="fcp-part-step-row">
                        <span class="fcp-part-step-label">Step</span>
                        <span class="fcp-part-step-badge">4</span>
                    </div>
                    <h3 class="fcp-part-title">INSPECT</h3>
                    <p class="fcp-part-desc">Compare the physical component against CAD.</p>
                    <div class="fcp-part-img-wrap">
                        <img src="<?= $img ?>/part-to-cad-4.png" alt="Inspect" class="fcp-part-img">
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="fcp-part-card">
                    <div class="fcp-part-step-row">
                        <span class="fcp-part-step-label">Step</span>
                        <span class="fcp-part-step-badge">5</span>
                    </div>
                    <h3 class="fcp-part-title">MANUFACTURE</h3>
                    <p class="fcp-part-desc">Use the resulting engineering data for production and improvement.</p>
                    <div class="fcp-part-img-wrap">
                        <img src="<?= $img ?>/part-to-cad-5.png" alt="Manufacture" class="fcp-part-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         9. Why Buy FreeScan Combo+ from Precise3DM India Section
         ========================================================================= -->
    <section class="fcp-why-section" id="fcp-why-buy">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <!-- Title -->
            <h2 class="fcp-why-title">
                WHY BUY
                <img src="<?= $img ?>/Freescan-combo-plus-logo-2.png" alt="FreeScan Combo+">
                FROM
                <span class="fcp-text-orange">PRECISE3DM INDIA?</span>
            </h2>

            <!-- Subtitle Badge Row -->
            <div class="fcp-why-badge-row">
                <div class="fcp-why-badge-line"></div>
                <div class="fcp-why-badge">
                    <span>OFFICIAL</span>
                    <img src="<?= $img ?>/shining-3d-logo.png" alt="SHINING 3D">
                    <span>PROFESSIONAL TECHNOLOGY. LOCAL INDIAN SUPPORT.</span>
                </div>
                <div class="fcp-why-badge-line"></div>
            </div>

            <!-- 6 Cards Grid -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="fcp-why-card">
                        <div class="fcp-why-img-wrap">
                            <img src="<?= $img ?>/why-1.png" alt="Live Demonstration" class="fcp-why-img">
                        </div>
                        <h3 class="fcp-why-card-title">Live Demonstration</h3>
                        <p class="fcp-why-card-desc">
                            Bring your actual component and see the scanner working on your application.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="fcp-why-card">
                        <div class="fcp-why-img-wrap">
                            <img src="<?= $img ?>/why-2.png" alt="Application Engineering" class="fcp-why-img">
                        </div>
                        <h3 class="fcp-why-card-title">Application Engineering</h3>
                        <p class="fcp-why-card-desc">
                            Our engineers help determine the right scanning mode, resolution, alignment method and workflow for your application.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="fcp-why-card">
                        <div class="fcp-why-img-wrap">
                            <img src="<?= $img ?>/why-3.png" alt="Reverse Engineering Support" class="fcp-why-img">
                        </div>
                        <h3 class="fcp-why-card-title">Reverse Engineering Support</h3>
                        <p class="fcp-why-card-desc">
                            Go from scan data to CAD with support for professional scan-to-CAD workflows.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="fcp-why-card">
                        <div class="fcp-why-img-wrap">
                            <img src="<?= $img ?>/why-4.png" alt="Inspection Workflow" class="fcp-why-img">
                        </div>
                        <h3 class="fcp-why-card-title">Inspection Workflow</h3>
                        <p class="fcp-why-card-desc">
                            Configure your scanner with the right inspection software for dimensional analysis, GD&amp;T and reporting.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="fcp-why-card">
                        <div class="fcp-why-img-wrap">
                            <img src="<?= $img ?>/why-5.png" alt="Training" class="fcp-why-img">
                        </div>
                        <h3 class="fcp-why-card-title">Training</h3>
                        <p class="fcp-why-card-desc">
                            Get practical, application-focused training for your engineering and scanning teams.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="fcp-why-card">
                        <div class="fcp-why-img-wrap">
                            <img src="<?= $img ?>/why-6.png" alt="Pan-India Support" class="fcp-why-img">
                        </div>
                        <h3 class="fcp-why-card-title">Pan-India Support</h3>
                        <p class="fcp-why-card-desc">
                            Precise3DM supports customers across major manufacturing regions in India.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         10. Frequently Asked Questions Section
         ========================================================================= -->
    <section class="fcp-faq-section" id="fcp-faq">
        <div class="container" style="max-width: 1250px;">
            <h2 class="fcp-faq-heading">FREQUENTLY ASKED QUESTIONS</h2>

            <div class="accordion" id="fcpFaqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading1">
                        <button class="accordion-button auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse1" aria-expanded="true" aria-controls="fcpCollapse1">
                            <span>What is FreeScan Combo+ Wireless?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse1" class="accordion-collapse collapse show" aria-labelledby="fcpHeading1" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">FreeScan Combo+ Wireless is a wireless hybrid-light-source metrology handheld 3D scanner from SHINING 3D. It combines blue laser and infrared VCSEL technologies with wireless connectivity, multiple scanning modes and integrated Video Photogrammetry.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading2">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse2" aria-expanded="false" aria-controls="fcpCollapse2">
                            <span>What is the accuracy of FreeScan Combo+ Wireless?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse2" class="accordion-collapse collapse" aria-labelledby="fcpHeading2" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">The scanner provides accuracy of up to 0.02 mm. Its volumetric accuracy is specified as 0.02 + 0.03 mm/m, while VPG-enabled volumetric accuracy is 0.02 mm + 0.015 mm/m.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading3">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse3" aria-expanded="false" aria-controls="fcpCollapse3">
                            <span>How fast can FreeScan Combo+ Wireless scan?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse3" class="accordion-collapse collapse" aria-labelledby="fcpHeading3" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">The FreeScan Combo+ Wireless can scan at up to 9,106,000 points per second.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading4">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse4" aria-expanded="false" aria-controls="fcpCollapse4">
                            <span>How many laser lines does it have?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse4" class="accordion-collapse collapse" aria-labelledby="fcpHeading4" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">The new FreeScan Combo+ Wireless has 93 blue laser lines for high-speed scanning and 25 parallel laser lines for detailed scanning. It also has a single-line laser mode for deep pockets.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading5">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse5" aria-expanded="false" aria-controls="fcpCollapse5">
                            <span>Can it scan without markers?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse5" class="accordion-collapse collapse" aria-labelledby="fcpHeading5" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">Yes. The infrared scanning mode enables marker-free scanning on suitable feature-rich surfaces. The integrated VPG workflow also does not require coded markers.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading6">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse6" aria-expanded="false" aria-controls="fcpCollapse6">
                            <span>Can it scan black and reflective surfaces?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse6" class="accordion-collapse collapse" aria-labelledby="fcpHeading6" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">Yes. The blue laser source provides strong adaptability for dark and reflective industrial surfaces.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="accordion-item auto-faq-item mb-3 border-0">
                    <h2 class="accordion-header" id="fcpHeading7">
                        <button class="accordion-button collapsed auto-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#fcpCollapse7" aria-expanded="false" aria-controls="fcpCollapse7">
                            <span>Is FreeScan Combo+ Wireless truly wireless?</span>
                        </button>
                    </h2>
                    <div id="fcpCollapse7" class="accordion-collapse collapse" aria-labelledby="fcpHeading7" data-bs-parent="#fcpFaqAccordion">
                        <div class="accordion-body auto-faq-body">
                            <p class="mb-0">Yes. The scanner supports wireless connectivity using Wi-Fi 7. It can also operate in wired mode when required.</p>
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

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const heroSection = document.getElementById('fcp-hero');
            const slides = document.querySelectorAll('.fcp-hero-slide');
            let currentSlide = 0;
            const slideInterval = 5000; // 5 seconds per background

            function showNextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');

                // hero-bg-2.png has a bright white/cyan ceiling background where call text needs dark color
                if (currentSlide === 1) {
                    heroSection.classList.add('fcp-light-header');
                } else {
                    heroSection.classList.remove('fcp-light-header');
                }
            }

            setInterval(showNextSlide, slideInterval);
        });

        // Key Features Interactive Switcher
        document.addEventListener('DOMContentLoaded', function () {
            const tlItems = document.querySelectorAll('.fcp-kf-tl-item');
            const panels = document.querySelectorAll('.fcp-kf-panel');
            const counter = document.getElementById('kf-counter-curr');
            const btnDown = document.getElementById('kf-arrow-down');
            const btnUp = document.getElementById('kf-arrow-up');
            const timeline = document.getElementById('kf-timeline');
            let currentIndex = 1;
            const totalFeatures = tlItems.length;

            function switchFeature(targetIndex, smoothScroll) {
                if (targetIndex < 1) targetIndex = totalFeatures;
                if (targetIndex > totalFeatures) targetIndex = 1;
                currentIndex = targetIndex;

                // Update counter
                if (counter) {
                    counter.textContent = currentIndex < 10 ? '0' + currentIndex : currentIndex;
                }

                // Update left panels
                panels.forEach(function (panel) {
                    const fIndex = parseInt(panel.getAttribute('data-feature'), 10);
                    if (fIndex === currentIndex) {
                        panel.classList.add('active');
                    } else {
                        panel.classList.remove('active');
                    }
                });

                // Update right timeline items & dots
                let activeItem = null;
                tlItems.forEach(function (item) {
                    const itemIndex = parseInt(item.getAttribute('data-target'), 10);
                    const dot = item.querySelector('.fcp-kf-tl-dot');
                    if (itemIndex === currentIndex) {
                        item.classList.add('active');
                        if (dot) dot.classList.remove('inactive');
                        activeItem = item;
                    } else {
                        item.classList.remove('active');
                        if (dot) dot.classList.add('inactive');
                    }
                });

                // Smooth scroll timeline to active item
                if (smoothScroll !== false && activeItem && timeline) {
                    const itemTop = activeItem.offsetTop;
                    const timelineHeight = timeline.clientHeight;
                    const targetScroll = itemTop - (timelineHeight / 2) + (activeItem.clientHeight / 2);
                    timeline.scrollTo({
                        top: Math.max(0, targetScroll),
                        behavior: 'smooth'
                    });
                }
            }

            // Click on timeline items
            tlItems.forEach(function (item) {
                item.addEventListener('click', function () {
                    const target = parseInt(this.getAttribute('data-target'), 10);
                    switchFeature(target, true);
                });
            });

            // Arrow buttons navigation
            if (btnDown) {
                btnDown.addEventListener('click', function () {
                    switchFeature(currentIndex + 1, true);
                });
            }
            if (btnUp) {
                btnUp.addEventListener('click', function () {
                    switchFeature(currentIndex - 1, true);
                });
            }
        });
    </script>
</body>
</html>
