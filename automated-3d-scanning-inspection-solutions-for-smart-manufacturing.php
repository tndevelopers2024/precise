<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title = "Automated 3D Scanning & Inspection Solutions for Smart Manufacturing | Precise3DM";
$meta_description = "Transform manual inspection into repeatable, automated 3D measurement with SHINING 3D RobotScan solutions, integrating robotic metrology 3D scanners and inspection software.";
$img = "assets/images/automated-3d-scanning-inspection-solutions-for-smart-manufacturing";
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
    <meta name="keywords" content="Automated 3D Scanning, Robotic 3D Metrology, Smart Manufacturing, SHINING 3D RobotScan, Automated Quality Control, Precise3DM India, Industrial Automation Inspection">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />

    <!-- Open Graph & Twitter Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $page_title ?>" />
    <meta property="og:description" content="<?= $meta_description ?>" />
    <meta property="og:image" content="<?= $img ?>/a3dsissm-hero-banner-img.png" />
    <meta property="og:url" content="https://www.precise3dm.com/automated-3d-scanning-inspection-solutions-for-smart-manufacturing.php" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@precise3d_m" />
    <meta name="twitter:title" content="<?= $page_title ?>" />
    <meta name="twitter:description" content="<?= $meta_description ?>" />
    <meta name="twitter:image" content="<?= $img ?>/a3dsissm-hero-banner-img.png" />

    <!-- Bootstrap CSS (v4.5.3 compatible) -->
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
    <link rel="stylesheet" href="assets/css/automated-3d-scanning-inspection-solutions.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
    <link rel="canonical" href="https://www.precise3dm.com/automated-3d-scanning-inspection-solutions-for-smart-manufacturing.php" />
</head>

<body>
    <!-- Site Header -->
    <?php include "includes/header.php"; ?>

    <!-- =========================================================================
         1. Hero Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-hero-section">
        <div class="container-fluid asis-container">

            <!-- Top Right Contact (Desktop View) -->
            <div class="row d-none d-lg-flex">
                <div class="col-12 asis-top-contact-row">
                    <div class="asis-contact-badge">
                        <div class="asis-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="asis-contact-info">
                            <div class="asis-contact-label">Call us now</div>
                            <div class="asis-contact-val">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Hero Row -->
            <div class="row align-items-center">

                <!-- Left Column: Content & Calls to Action -->
                <div class="col-lg-7 col-xl-6 col-12 asis-hero-left">
                    <div class="asis-hero-eyebrow">
                        INDUSTRIAL AUTOMATION • ROBOTIC 3D METROLOGY
                    </div>

                    <h1 class="asis-hero-title">
                        Automated 3D Scanning &amp; Inspection Solutions for Smart Manufacturing
                    </h1>

                    <div class="asis-hero-subtitle">
                        Precision. Speed. Robotics. Automation.
                    </div>

                    <p class="asis-hero-desc">
                        Transform manual inspection into repeatable, automated 3D measurement. Precise3DM brings SHINING 3D RobotScan solutions to Indian manufacturers, integrating metrology-grade 3D scanners, robotic systems, turntables, and inspection software into intelligent quality-control workflows.
                    </p>

                    <!-- Action Buttons -->
                    <div class="asis-hero-buttons">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-asis-solid">
                            Request a Live Demo <i class="fa-solid fa-arrow-right ml-1"></i>
                        </a>
                        <a href="#automation-systems" class="btn-asis-outline">
                            Explore Automation Systems <i class="fa-solid fa-arrow-down ml-1"></i>
                        </a>
                    </div>

                    <!-- Email Badge (Bottom Left) -->
                    <div class="asis-email-badge">
                        <div class="asis-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="asis-contact-info">
                            <div class="asis-contact-label">Email us</div>
                            <div class="asis-contact-val">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Call Us Now (Mobile / Tablet View - Below Email Us) -->
                    <div class="asis-contact-badge d-flex d-lg-none mt-3">
                        <div class="asis-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="asis-contact-info">
                            <div class="asis-contact-label">Call us now</div>
                            <div class="asis-contact-val">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. RobotScan Series Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-rss-section" id="robotscan-series">
        <div class="container-fluid asis-container">

            <!-- Top Row: Workstation Diagram & Overview -->
            <div class="row align-items-center rss-top-row">

                <!-- Left Column: Workstation Graphic -->
                <div class="col-lg-5 col-12 rss-visual-col">
                    <div class="rss-workstation-box">
                        <img src="<?= $img ?>/rss-workstation.png" alt="SHINING 3D RobotScan Series Automated Workstation" class="img-fluid rss-workstation-img">
                    </div>
                </div>

                <!-- Right Column: Content -->
                <div class="col-lg-7 col-12 rss-content-col">
                    <h2 class="rss-sec-title">RobotScan Series</h2>
                    <h3 class="rss-sec-subtitle">From Manual Measurement to Automated Inspection</h3>
                    <p class="rss-desc">
                        The SHINING 3D RobotScan Series combines industrial robotic motion, high-precision 3D scanning, and automated inspection workflows to help manufacturers measure parts consistently and efficiently.
                    </p>
                    <p class="rss-desc">
                        Designed for batch inspection, repetitive component measurement, and production quality control, these systems can reduce repetitive operator involvement and help standardize inspection processes.
                    </p>
                </div>

            </div>

            <!-- Bottom Row: 5 Key Features Grid -->
            <div class="rss-features-grid">

                <!-- Feature 1 -->
                <div class="rss-feature-item">
                    <div class="rss-feature-icon-box">
                        <img src="<?= $img ?>/rss-icon1.png" alt="Automated scanning" class="img-fluid rss-feature-icon">
                    </div>
                    <div class="rss-feature-content">
                        <h4 class="rss-feature-title">Automated scanning</h4>
                        <p class="rss-feature-desc">Execute programmed scanning routines.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="rss-feature-item">
                    <div class="rss-feature-icon-box">
                        <img src="<?= $img ?>/rss-icon2.png" alt="Repeatable workflows" class="img-fluid rss-feature-icon">
                    </div>
                    <div class="rss-feature-content">
                        <h4 class="rss-feature-title">Repeatable workflows</h4>
                        <p class="rss-feature-desc">Standardize inspection processes.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="rss-feature-item">
                    <div class="rss-feature-icon-box">
                        <img src="<?= $img ?>/rss-icon3.png" alt="Detailed inspection" class="img-fluid rss-feature-icon">
                    </div>
                    <div class="rss-feature-content">
                        <h4 class="rss-feature-title">Detailed inspection</h4>
                        <p class="rss-feature-desc">Compare with CAD and generate reports.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="rss-feature-item">
                    <div class="rss-feature-icon-box">
                        <img src="<?= $img ?>/rss-icon4.png" alt="Flexible integration" class="img-fluid rss-feature-icon">
                    </div>
                    <div class="rss-feature-content">
                        <h4 class="rss-feature-title">Flexible integration</h4>
                        <p class="rss-feature-desc">Configure around your components and fixtures.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="rss-feature-item">
                    <div class="rss-feature-icon-box">
                        <img src="<?= $img ?>/rss-icon5.png" alt="Digital traceability" class="img-fluid rss-feature-icon">
                    </div>
                    <div class="rss-feature-content">
                        <h4 class="rss-feature-title">Digital traceability</h4>
                        <p class="rss-feature-desc">Support structured inspection data.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. Standard Automation Solutions Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-sas-section" id="automation-systems">
        <div class="container-fluid asis-container">

            <!-- Section Header -->
            <div class="sas-header">
                <h2 class="sas-sec-title">Standard automation solutions</h2>
                <h3 class="sas-sec-subtitle">Choose the Right Automated 3D Scanning System</h3>
                <p class="sas-desc">
                    Start with a proven standard configuration, then tailor the system to your part size, geometry, surface characteristics, accuracy requirements, and inspection throughput.
                </p>
            </div>

            <!-- 3 Solution Cards Grid -->
            <div class="sas-cards-grid">

                <!-- Card 1: RobotScan Q12 -->
                <div class="sas-card">
                    <div class="sas-card-img-box">
                        <img src="<?= $img ?>/sas-q12.jpg" alt="RobotScan Q12 Automated 3D Scanning" class="sas-card-img">
                    </div>
                    <div class="sas-card-body">
                        <h4 class="sas-card-title">RobotScan Q12</h4>
                        <div class="sas-card-badge-wrap">
                            <span class="sas-card-badge">Fine-detail inspection</span>
                        </div>
                        <ul class="sas-features-list">
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Intricate surfaces, sharp edges, and fine details</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Gears, brackets, connectors, housings, and airfoils</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Automated batch inspection</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>High-accuracy dimensional analysis</span>
                            </li>
                        </ul>
                        <div class="sas-card-action">
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-sas-cta">
                                Request Q12 Demo <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: RobotScan UE Pro2 -->
                <div class="sas-card">
                    <div class="sas-card-img-box">
                        <img src="<?= $img ?>/sas-uepro2.jpg" alt="RobotScan UE Pro2 Automated 3D Scanning" class="sas-card-img">
                    </div>
                    <div class="sas-card-body">
                        <h4 class="sas-card-title">RobotScan UE Pro2</h4>
                        <div class="sas-card-badge-wrap">
                            <span class="sas-card-badge">Laser scanning</span>
                        </div>
                        <ul class="sas-features-list">
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Machined parts and castings</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Sheet-metal components and moulds</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Black, shiny, and reflective surfaces, subject to application validation</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Flexible wired or wireless scanner configurations where supported</span>
                            </li>
                        </ul>
                        <div class="sas-card-action">
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-sas-cta">
                                Request UE Pro2 Demo <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: RobotScan Combo+ -->
                <div class="sas-card">
                    <div class="sas-card-img-box">
                        <img src="<?= $img ?>/sas-combo.png" alt="RobotScan Combo+ Automated 3D Scanning" class="sas-card-img">
                    </div>
                    <div class="sas-card-body">
                        <h4 class="sas-card-title">RobotScan Combo+</h4>
                        <div class="sas-card-badge-wrap">
                            <span class="sas-card-badge">Versatile inspection</span>
                        </div>
                        <ul class="sas-features-list">
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Intricate surfaces, sharp edges, and fine details</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Gears, brackets, connectors, housings, and airfoils</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>Automated batch inspection</span>
                            </li>
                            <li>
                                <span class="sas-check">✓</span>
                                <span>High-accuracy dimensional analysis</span>
                            </li>
                        </ul>
                        <div class="sas-card-action">
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-sas-cta">
                                Request Combo+ Demo <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. Key Advantages Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-ka-section" id="key-advantages">
        <div class="container-fluid asis-container">

            <!-- Section Title -->
            <div class="ka-header">
                <h2 class="ka-sec-title">Key advantages</h2>
            </div>

            <!-- 4 Advantages Grid -->
            <div class="ka-cards-grid">

                <!-- Advantage 1: High-accuracy 3D measurement -->
                <div class="ka-item">
                    <div class="ka-img-box">
                        <img src="<?= $img ?>/ka-accuracy.png" alt="High-accuracy 3D measurement" class="ka-img">
                    </div>
                    <div class="ka-content">
                        <h3 class="ka-item-title">High-accuracy 3D measurement</h3>
                        <p class="ka-item-desc">
                            Capture complex surfaces, edges, holes, and detailed component geometry using an appropriate metrology-grade scanner.
                        </p>
                    </div>
                </div>

                <!-- Advantage 2: Consistent inspection workflows -->
                <div class="ka-item">
                    <div class="ka-img-box">
                        <img src="<?= $img ?>/ka-workflows.png" alt="Consistent inspection workflows" class="ka-img">
                    </div>
                    <div class="ka-content">
                        <h3 class="ka-item-title">Consistent inspection workflows</h3>
                        <p class="ka-item-desc">
                            Program repeatable scanning routines to reduce variation associated with manual scanning operations.
                        </p>
                    </div>
                </div>

                <!-- Advantage 3: Flexible system integration -->
                <div class="ka-item">
                    <div class="ka-img-box">
                        <img src="<?= $img ?>/ka-integration.png" alt="Flexible system integration" class="ka-img">
                    </div>
                    <div class="ka-content">
                        <h3 class="ka-item-title">Flexible system integration</h3>
                        <p class="ka-item-desc">
                            Combine scanners, robot arms, turntables, fixtures, and motion platforms to suit the application.
                        </p>
                    </div>
                </div>

                <!-- Advantage 4: Scan-to-report workflow -->
                <div class="ka-item">
                    <div class="ka-img-box">
                        <img src="<?= $img ?>/ka-scantoreport.png" alt="Scan-to-report workflow" class="ka-img">
                    </div>
                    <div class="ka-content">
                        <h3 class="ka-item-title">Scan-to-report workflow</h3>
                        <p class="ka-item-desc">
                            Connect 3D data capture with dimensional comparison, deviation analysis, and quality reporting.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. Customized Solutions Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-cs-section" id="customized-solutions">
        <div class="container-fluid asis-container">

            <!-- Section Header (Centered) -->
            <div class="cs-header text-center">
                <h2 class="cs-sec-title">Customized Solutions</h2>
                <p class="cs-sec-desc">
                    RobotScan series also offers a fully customizable configuration to meet the diverse 3D measurement needs of multiple industries. Components such as different brands of robotic arm, SHINING 3D scanner, turntable, fixtures, and control and inspection software can all be tailored to specific application requirements.
                </p>
            </div>

            <!-- Main Diagram Box -->
            <div class="cs-diagram-box">
                <img src="<?= $img ?>/cs-gantry-cell.png" alt="Customized Solutions Gantry Inspection Cell" class="img-fluid cs-diagram-img">
            </div>

            <!-- Feature Row 1: RobotScan Trak Nova -->
            <div class="row align-items-center cs-feature-row">
                <div class="col-lg-6 col-12 cs-feature-text-col">
                    <h3 class="cs-feature-title">RobotScan Trak Nova</h3>
                    <ul class="cs-feature-list">
                        <li>Extended-reach robotic arm for increased scanning coverage</li>
                        <li>Heavy-duty turntable supporting bigger and heavier parts</li>
                        <li>Ideal for manufacturers handling medium-to-large industrial components</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12 cs-feature-media-col">
                    <div class="cs-video-card">
                        <img src="<?= $img ?>/cs-trak-nova.png" alt="RobotScan Trak Nova" class="cs-video-img">
                    </div>
                </div>
            </div>

            <!-- Feature Row 2: Automated Loading & Unloading System -->
            <div class="row align-items-center cs-feature-row">
                <div class="col-lg-6 col-12 cs-feature-text-col">
                    <h3 class="cs-feature-title">Automated Loading &amp; Unloading System</h3>
                    <ul class="cs-feature-list">
                        <li>Fully automated material handling from part loading to 3D scanning and unloading</li>
                        <li>Reduced manual intervention for a more efficient, safety and consistent inspection workflow</li>
                        <li>Designed for continuous batch inspection and high-throughout manufacturing environments</li>
                        <li>Seamless integration with factory conveyors, AGVs, and production lines</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12 cs-feature-media-col">
                    <div class="cs-video-card">
                        <img src="<?= $img ?>/cs-loading-unloading.png" alt="Automated Loading & Unloading System" class="cs-video-img">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         6. Software and Inspection Workflow Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-siw-section" id="inspection-workflow">
        <div class="container-fluid asis-container">

            <div class="row align-items-center siw-main-row">

                <!-- Left Column: Title, Subtitle, Description & Main Software Screen Box -->
                <div class="col-lg-7 col-12 siw-left-col">
                    <div class="siw-header">
                        <h2 class="siw-sec-title">Software and inspection workflow</h2>
                        <h3 class="siw-sec-subtitle">From Robotic Scanning to Actionable Quality Data</h3>
                        <p class="siw-desc">
                            A complete automation solution needs more than a robot and scanner. It needs a coordinated process for programming, measurement, comparison, and reporting.
                        </p>
                    </div>

                    <div class="siw-screen-box">
                        <img src="<?= $img ?>/siw-software-screen.png" alt="Software and Inspection Workflow Simulation" class="img-fluid siw-screen-img">
                    </div>
                </div>

                <!-- Right Column: 3 Workflow Feature Items -->
                <div class="col-lg-5 col-12 siw-right-col">
                    <div class="siw-features-stack">

                        <!-- Item 1: RobotScan Control -->
                        <div class="siw-feature-item">
                            <div class="siw-icon-box">
                                <img src="<?= $img ?>/siw-robotscan-control.png" alt="RobotScan Control" class="siw-icon-img">
                            </div>
                            <div class="siw-feature-text">
                                <h4 class="siw-feature-title">RobotScan Control</h4>
                                <p class="siw-feature-desc">
                                    Coordinate supported robotic arms, scanner motion, turntables, scanning paths, and automated measurement routines.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2: SHINING3D Inspect -->
                        <div class="siw-feature-item">
                            <div class="siw-icon-box">
                                <img src="<?= $img ?>/siw-shining3d-inspect.png" alt="SHINING3D Inspect" class="siw-icon-img">
                            </div>
                            <div class="siw-feature-text">
                                <h4 class="siw-feature-title">SHINING3D Inspect</h4>
                                <p class="siw-feature-desc">
                                    Process 3D scan data, compare geometry, analyze dimensional deviations, and generate inspection reports.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3: CAD comparison and quality reporting -->
                        <div class="siw-feature-item">
                            <div class="siw-icon-box">
                                <img src="<?= $img ?>/siw-cad-reporting.png" alt="CAD comparison and quality reporting" class="siw-icon-img">
                            </div>
                            <div class="siw-feature-text">
                                <h4 class="siw-feature-title">CAD comparison and quality reporting</h4>
                                <p class="siw-feature-desc">
                                    Build an inspection workflow around reference CAD models, dimensional requirements, and the customer's reporting standards.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         7. Technical Specifications Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="asis-ts-section" id="technical-specifications">
        <div class="container-fluid asis-container">

            <div class="row align-items-center ts-main-row">

                <!-- Left Column: Header + Specifications Table -->
                <div class="col-lg-7 col-12 ts-left-col">
                    <div class="ts-header">
                        <h2 class="ts-sec-title">Technical specifications</h2>
                        <h3 class="ts-sec-subtitle">
                            RobotScan Standard Configuration<br>
                            Technical Overview
                        </h3>
                    </div>

                    <div class="ts-table-card">
                        <table class="ts-spec-table" aria-label="RobotScan Standard Configuration Technical Specifications">
                            <tbody>
                                <tr>
                                    <th>Measurable object size</th>
                                    <td>Up to 500 mm</td>
                                </tr>
                                <tr>
                                    <th>Turntable load capacity</th>
                                    <td>Up to 20 kg</td>
                                </tr>
                                <tr>
                                    <th>Robot type</th>
                                    <td>Collaborative robot (cobot)</td>
                                </tr>
                                <tr>
                                    <th>Robot working radius</th>
                                    <td>800 mm</td>
                                </tr>
                                <tr>
                                    <th>System dimensions</th>
                                    <td>1,030 &times; 670 &times; 270 mm</td>
                                </tr>
                                <tr>
                                    <th>System weight</th>
                                    <td>70 kg</td>
                                </tr>
                                <tr>
                                    <th>Power supply</th>
                                    <td>100&ndash;240 V, single-phase, 10 A</td>
                                </tr>
                                <tr>
                                    <th>Safe working space</th>
                                    <td>2,400 &times; 2,400 &times; 1,600 mm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right Column: Hardware Callout Diagram -->
                <div class="col-lg-5 col-12 ts-right-col">
                    <div class="ts-visual-box">
                        <img src="<?= $img ?>/ts-robotscan-config.png" alt="RobotScan Standard Configuration Diagram" class="img-fluid ts-visual-img">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         8. Software and Inspection Workflow - 5-Card Customized Configurations
         ========================================================================= -->
    <section class="asis-swf-section" id="engineered-workflow">
        <div class="container-fluid asis-container">

            <!-- Section Header -->
            <div class="swf-header">
                <h2 class="swf-sec-title">Software and inspection workflow</h2>
                <h3 class="swf-sec-subtitle">Engineered Around Your Part. Designed for Your Process.</h3>
                <p class="swf-desc">
                    Not every inspection application fits a standard robotic cell. Precise3DM can work with you to evaluate customized scanning configurations based on part dimensions, robot reach, production layout, loading requirements, and inspection objectives.
                </p>
            </div>

            <!-- 5 Configuration Cards Grid -->
            <div class="swf-cards-grid">

                <!-- Card 1: RobotScan Trak Nova -->
                <div class="swf-card">
                    <div class="swf-card-img-box">
                        <img src="<?= $img ?>/swf-trak-nova.png" alt="RobotScan Trak Nova" class="swf-card-img">
                    </div>
                    <div class="swf-card-body">
                        <h4 class="swf-card-title">RobotScan Trak Nova</h4>
                        <p class="swf-card-desc">
                            Evaluate extended-reach robotic scanning for medium-to-large industrial components.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Mobile Scanning Workstations -->
                <div class="swf-card">
                    <div class="swf-card-img-box">
                        <img src="<?= $img ?>/swf-mobile-workstations.jpg" alt="Mobile Scanning Workstations" class="swf-card-img">
                    </div>
                    <div class="swf-card-body">
                        <h4 class="swf-card-title">Mobile Scanning Workstations</h4>
                        <p class="swf-card-desc">
                            Enable flexible scanning and inspection across work areas.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Robotic Scanning with AGV Integration -->
                <div class="swf-card">
                    <div class="swf-card-img-box">
                        <img src="<?= $img ?>/swf-agv-integration.png" alt="Robotic Scanning with AGV Integration" class="swf-card-img">
                    </div>
                    <div class="swf-card-body">
                        <h4 class="swf-card-title">Robotic Scanning with AGV Integration</h4>
                        <p class="swf-card-desc">
                            Automate part transport between scanning stations for multi-line production.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Automated Loading and Unloading -->
                <div class="swf-card">
                    <div class="swf-card-img-box">
                        <img src="<?= $img ?>/swf-loading-unloading.png" alt="Automated Loading and Unloading" class="swf-card-img">
                    </div>
                    <div class="swf-card-body">
                        <h4 class="swf-card-title">Automated Loading and Unloading</h4>
                        <p class="swf-card-desc">
                            Integrate part handling and scanning for efficient, repeatable inspections.
                        </p>
                    </div>
                </div>

                <!-- Card 5: Servo Gantry Scanning Systems -->
                <div class="swf-card">
                    <div class="swf-card-img-box">
                        <img src="<?= $img ?>/swf-servo-gantry.png" alt="Servo Gantry Scanning Systems" class="swf-card-img">
                    </div>
                    <div class="swf-card-body">
                        <h4 class="swf-card-title">Servo Gantry Scanning Systems</h4>
                        <p class="swf-card-desc">
                            Enable multi-axis scanning of large components beyond conventional robot reach.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         9. Five Core Components Section (Exact Match to Design Reference)
         ========================================================================= -->
    <?php
    $core_components = [
        [
            'num'   => '01',
            'title' => '3D Scanner',
            'desc'  => 'Select laser or fringe-projection scanning technology.',
            'img'   => 'fcc-3d-scanner.png',
        ],
        [
            'num'   => '01',
            'title' => 'Turntable and Fixtures',
            'desc'  => 'Configure part positioning, rotation, and load capacity.',
            'img'   => 'fcc-turntable-fixtures.png',
        ],
        [
            'num'   => '01',
            'title' => 'Robotic Arm',
            'desc'  => 'Optimize reach, payload, and repeatability.',
            'img'   => 'fcc-robotic-arm.jpg',
        ],
        [
            'num'   => '01',
            'title' => 'AGV Integration',
            'desc'  => 'Automate component transport between workstations.',
            'img'   => 'fcc-agv-integration.jpg',
        ],
        [
            'num'   => '01',
            'title' => 'Servo Gantry',
            'desc'  => 'Scan large parts across extended workspaces.',
            'img'   => 'fcc-servo-gantry.png',
        ],
    ];
    ?>
    <section class="asis-fcc-section" id="five-core-components">
        <div class="container-fluid asis-container">

            <!-- Section Heading -->
            <div class="fcc-header">
                <h2 class="fcc-sec-title">A Modular System Built Around Five Core Components</h2>
            </div>

            <!-- 5 Core Components Grid -->
            <div class="fcc-cards-grid">
                <?php foreach ($core_components as $component) : ?>
                    <div class="fcc-card">
                        <div class="fcc-card-img-box">
                            <img src="<?= $img ?>/<?= htmlspecialchars($component['img'], ENT_QUOTES, 'UTF-8') ?>"
                                 alt="<?= htmlspecialchars($component['title'], ENT_QUOTES, 'UTF-8') ?>"
                                 class="fcc-card-img">
                        </div>
                        <div class="fcc-card-body">
                            <div class="fcc-card-title-row">
                                <span class="fcc-num"><?= htmlspecialchars($component['num'], ENT_QUOTES, 'UTF-8') ?></span>
                                <h4 class="fcc-card-title"><?= htmlspecialchars($component['title'], ENT_QUOTES, 'UTF-8') ?></h4>
                            </div>
                            <p class="fcc-card-desc">
                                <?= htmlspecialchars($component['desc'], ENT_QUOTES, 'UTF-8') ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         10. CTA Section (Ready to Automate Your 3D Inspection Process?)
         ========================================================================= -->
    <section class="asis-cta-section" id="cta-section">
        <div class="container-fluid asis-container">
            <div class="cta-banner-wrapper">

                <!-- Left Content & Contact Info -->
                <div class="cta-banner-left">
                    <h2 class="cta-title">Ready to Automate Your 3D Inspection Process?</h2>
                    <p class="cta-desc">
                        Tell us what you manufacture, what you need to measure, and your inspection targets. Our team will help evaluate the right robotic 3D scanning solution for your production environment.
                    </p>

                    <div class="cta-contact-list">

                        <!-- Call us now -->
                        <div class="cta-contact-item">
                            <div class="cta-contact-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="cta-contact-info">
                                <div class="cta-contact-label">Call us now</div>
                                <div class="cta-contact-val">
                                    <a href="tel:+919840478347">+91 98404 78347</a><span class="cta-sep">|</span><a href="tel:+916374406179">+91 63744 06179</a>
                                </div>
                            </div>
                        </div>

                        <!-- Email us -->
                        <div class="cta-contact-item">
                            <div class="cta-contact-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="cta-contact-info">
                                <div class="cta-contact-label">Email us</div>
                                <div class="cta-contact-val">
                                    <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a><span class="cta-sep">|</span><a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Action Button -->
                <div class="cta-banner-right">
                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-cta-solid">
                        Book Your Application Demo <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
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