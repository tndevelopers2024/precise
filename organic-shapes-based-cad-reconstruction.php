<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title = "3D Scan Based Digital Sculpting | Scan It. Sculpt It. Redesign It. Manufacture It. | Precise3DM";
$meta_description = "Transform complex organic shapes into enhanced, production-ready digital models using industrial 3D scanning and advanced digital sculpting with Geomagic Freeform.";
$img = "assets/images/3d-scan-based-digital-sculpting";
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
    <meta name="keywords" content="3D Scan Based Digital Sculpting, Geomagic Freeform, 3D Sculpting India, Organic 3D Modeling, Scan It Sculpt It, Precise3DM, 3D scanning services">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />

    <!-- Open Graph & Twitter Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $page_title ?>" />
    <meta property="og:description" content="<?= $meta_description ?>" />
    <meta property="og:image" content="<?= $img ?>/3dsbss-hero-banner-img.png" />
    <meta property="og:url" content="https://www.precise3dm.com/organic-shapes-based-cad-reconstruction.php" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@precise3d_m" />
    <meta name="twitter:title" content="<?= $page_title ?>" />
    <meta name="twitter:description" content="<?= $meta_description ?>" />
    <meta name="twitter:image" content="<?= $img ?>/3dsbss-hero-banner-img.png" />

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
    <link rel="stylesheet" href="assets/css/3d-scan-based-digital-sculpting.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
    <link rel="canonical" href="https://www.precise3dm.com/organic-shapes-based-cad-reconstruction.php" />
</head>

<body>
    <!-- Site Header -->
    <?php include "includes/header.php"; ?>

    <!-- =========================================================================
         Hero Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="dsbss-hero-section">
        <div class="container-fluid dsbss-container">

            <!-- Top Right Contact (Desktop View) -->
            <div class="row d-none d-lg-flex">
                <div class="col-12 dsbss-top-contact-row">
                    <div class="dsbss-contact-badge">
                        <div class="dsbss-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="dsbss-contact-info">
                            <div class="dsbss-contact-label">Call us now</div>
                            <div class="dsbss-contact-val">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Hero Row -->
            <div class="row align-items-center">

                <!-- Left Column: Content & Calls to Action -->
                <div class="col-lg-6 col-12 dsbss-hero-left">
                    <h1 class="dsbss-hero-title">
                        3D Scan Based<br>
                        <span class="text-orange">Digital Sculpting</span>
                    </h1>

                    <h2 class="dsbss-hero-subtitle">
                        Scan It. Sculpt It.<br>
                        Redesign It. <span class="text-orange">Manufacture It.</span>
                    </h2>

                    <p class="dsbss-hero-desc">
                        Transform complex organic shapes into enhanced, production-ready digital models using industrial 3D scanning and advanced digital sculpting.
                    </p>

                    <p class="dsbss-hero-desc">
                        From statues and architectural ornaments to human-body forms and artistic products, we help you capture, refine, modify, and manufacture with precision.
                    </p>

                    <!-- Action Buttons -->
                    <div class="dsbss-hero-buttons">
                        <a href="3d-inspection-software-in-india.php" class="btn-dsbss-solid">3D Inspection Software</a>
                        <a href="scanning-solution-form.php" class="btn-dsbss-solid">Request a Quote</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-dsbss-outline">Book a Live Demo</a>
                    </div>

                    <!-- Email Badge -->
                    <div class="dsbss-email-badge">
                        <div class="dsbss-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="dsbss-contact-info">
                            <div class="dsbss-contact-label">Email us</div>
                            <div class="dsbss-contact-val">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Call Us Now (Mobile / Tablet View - Below Email Us) -->
                    <div class="dsbss-contact-badge d-flex d-lg-none mt-3">
                        <div class="dsbss-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="dsbss-contact-info">
                            <div class="dsbss-contact-label">Call us now</div>
                            <div class="dsbss-contact-val">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: 3-Step Process & Scanner Showcase -->
                <div class="col-lg-6 col-12 dsbss-hero-right">
                    <div class="dsbss-workflow-container">

                        <!-- 3 Workflow Steps with Connecting Arrows -->
                        <div class="dsbss-workflow-steps">
                            <!-- Step 1 -->
                            <div class="dsbss-step-item">
                                <div class="dsbss-step-header">
                                    <div class="dsbss-step-title">3D Scan Data</div>
                                    <div class="dsbss-step-subtitle">(Raw Mesh)</div>
                                </div>
                                <div class="dsbss-step-img-box">
                                    <img src="<?= $img ?>/3dsbss-hero-right-img1.png" alt="3D Scan Data (Raw Mesh)">
                                </div>
                            </div>

                            <!-- Connecting Arrow 1 -->
                            <div class="dsbss-step-arrow">
                                <div class="arrow-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="dsbss-step-item">
                                <div class="dsbss-step-header">
                                    <div class="dsbss-step-title">Digital Sculpting in</div>
                                    <div class="dsbss-step-subtitle">Geomagic Freeform</div>
                                </div>
                                <div class="dsbss-step-img-box">
                                    <img src="<?= $img ?>/3dsbss-hero-right-img2.png" alt="Digital Sculpting in Geomagic Freeform">
                                </div>
                            </div>

                            <!-- Connecting Arrow 2 -->
                            <div class="dsbss-step-arrow">
                                <div class="arrow-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="dsbss-step-item">
                                <div class="dsbss-step-header">
                                    <div class="dsbss-step-title">Enhanced Design</div>
                                    <div class="dsbss-step-subtitle">(Manufacturing Ready)</div>
                                </div>
                                <div class="dsbss-step-img-box">
                                    <img src="<?= $img ?>/3dsbss-hero-right-img3.png" alt="Enhanced Design (Manufacturing Ready)">
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Scanner Showcase Image -->
                        <div class="dsbss-scanner-showcase">
                            <img src="<?= $img ?>/3dsbss-hero-right-bottom-img.png" alt="3D Scanner and Ram Head Sculpting" class="dsbss-scanner-img">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. Status Bar Section (Features / Value Proposition Strip)
         ========================================================================= -->
    <section class="dsbss-status-section">
        <div class="container-fluid dsbss-container">
            <div class="dsbss-status-bar">

                <!-- Stat 1 -->
                <div class="dsbss-status-item">
                    <div class="dsbss-status-icon-wrap">
                        <img src="<?= $img ?>/3dsbss-sb-icon1.png" alt="Capture Real Objects with High Detail" class="dsbss-status-icon">
                    </div>
                    <div class="dsbss-status-text">
                        Capture Real Objects<br>with High Detail
                    </div>
                </div>

                <div class="dsbss-status-divider"></div>

                <!-- Stat 2 -->
                <div class="dsbss-status-item">
                    <div class="dsbss-status-icon-wrap">
                        <img src="<?= $img ?>/3dsbss-sb-icon2.png" alt="Modify & Enhance Existing Designs" class="dsbss-status-icon">
                    </div>
                    <div class="dsbss-status-text">
                        Modify & Enhance<br>Existing Designs
                    </div>
                </div>

                <div class="dsbss-status-divider"></div>

                <!-- Stat 3 -->
                <div class="dsbss-status-item">
                    <div class="dsbss-status-icon-wrap">
                        <img src="<?= $img ?>/3dsbss-sb-icon3.png" alt="Preserve Artistic Intent" class="dsbss-status-icon">
                    </div>
                    <div class="dsbss-status-text">
                        Preserve<br>Artistic Intent
                    </div>
                </div>

                <div class="dsbss-status-divider"></div>

                <!-- Stat 4 -->
                <div class="dsbss-status-item">
                    <div class="dsbss-status-icon-wrap">
                        <img src="<?= $img ?>/3dsbss-sb-icon4.png" alt="Prepare for 3D Printing, Casting or CNC" class="dsbss-status-icon">
                    </div>
                    <div class="dsbss-status-text">
                        Prepare for 3D Printing,<br>Casting or CNC
                    </div>
                </div>

                <div class="dsbss-status-divider"></div>

                <!-- Stat 5 -->
                <div class="dsbss-status-item">
                    <div class="dsbss-status-icon-wrap">
                        <img src="<?= $img ?>/3dsbss-sb-icon5.png" alt="Ideal for Statues, Sculptures, Architecture & More" class="dsbss-status-icon">
                    </div>
                    <div class="dsbss-status-text">
                        Ideal for Statues, Sculptures,<br>Architecture & More
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. Unlimited Design Possibilities Section
         ========================================================================= -->
    <section class="dsbss-udp-section" id="unlimited-design-possibilities">
        <div class="container-fluid dsbss-container">

            <!-- Section Title -->
            <div class="row">
                <div class="col-12">
                    <h2 class="dsbss-udp-title">Complex Organic Shapes. Unlimited Design Possibilities.</h2>
                </div>
            </div>

            <!-- Content & Cards Row -->
            <div class="row align-items-center">

                <!-- Left Column: Description & Action Button -->
                <div class="col-lg-5 col-12 dsbss-udp-left mb-4 mb-lg-0">
                    <p class="dsbss-udp-desc">
                        Not every product can be redesigned using conventional parametric CAD. Statues, human-body forms, artistic sculptures, decorative architectural elements, and other organic shapes often contain freeform surfaces that are difficult to recreate.
                    </p>
                    <p class="dsbss-udp-desc">
                        With 3D scanning and digital sculpting, you can work directly from the actual geometry to refine, modify, and develop new designs.
                    </p>
                    <div class="dsbss-udp-btn-wrap">
                        <a href="geomagic-freeform-3d-modelling-design-software.php" class="btn-udp-orange">See How It Works</a>
                    </div>
                </div>

                <!-- Right Column: 3 Process Cards -->
                <div class="col-lg-7 col-12 dsbss-udp-right">
                    <div class="dsbss-udp-cards-row">

                        <!-- Card 1 -->
                        <div class="dsbss-udp-card-col">
                            <div class="dsbss-udp-card">
                                <div class="dsbss-udp-card-img">
                                    <img src="<?= $img ?>/udp-img1.png" alt="Capture complex organic geometry" class="img-fluid">
                                </div>
                                <h3 class="dsbss-udp-card-title">
                                    Capture complex organic<br>geometry
                                </h3>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="dsbss-udp-card-col">
                            <div class="dsbss-udp-card">
                                <div class="dsbss-udp-card-img">
                                    <img src="<?= $img ?>/udp-img2.png" alt="Sculpt, refine and modify" class="img-fluid">
                                </div>
                                <h3 class="dsbss-udp-card-title">
                                    Sculpt, refine<br>and modify.
                                </h3>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="dsbss-udp-card-col">
                            <div class="dsbss-udp-card">
                                <div class="dsbss-udp-card-img">
                                    <img src="<?= $img ?>/udp-img3.png" alt="Export manufacturing-ready models" class="img-fluid">
                                </div>
                                <h3 class="dsbss-udp-card-title">
                                    Export manufacturing-<br>ready models
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. Real-World Applications Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="dsbss-rwa-section" id="real-world-applications">
        <div class="container-fluid dsbss-container">

            <!-- Section Eyebrow & Title -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="rwa-eyebrow">REAL-WORLD APPLICATIONS</div>
                    <h2 class="rwa-sec-title">What Can You Create from Organic 3D Scan Data?</h2>
                </div>
            </div>

            <!-- 3 Application Cards Row -->
            <div class="rwa-cards-row">

                <!-- Card 1: Sculpture & Statue Design Enhancement -->
                <div class="rwa-card-col">
                    <div class="rwa-card">
                        <div class="rwa-card-header d-flex align-items-center gap-3 mb-2">
                            <div class="rwa-number-badge">01</div>
                            <h3 class="rwa-card-title">Sculpture & Statue<br>Design Enhancement</h3>
                        </div>
                        <p class="rwa-card-subtitle">Improve existing sculptures without starting from scratch.</p>

                        <div class="rwa-card-visual">
                            <img src="<?= $img ?>/rwa-card-img1.png" alt="Sculpture & Statue Design Enhancement" class="img-fluid">
                        </div>

                        <ul class="rwa-feature-list list-unstyled mb-0 mt-auto">
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Religious statues and idols</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Artistic sculptures</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Museum replicas</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Decorative figures</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Sculpture restoration and reproduction</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Human-Body Scan to Enhanced Organic Model -->
                <div class="rwa-card-col">
                    <div class="rwa-card">
                        <div class="rwa-card-header d-flex align-items-center gap-3 mb-2">
                            <div class="rwa-number-badge">02</div>
                            <h3 class="rwa-card-title">Human-Body Scan to<br>Enhanced Organic Model</h3>
                        </div>
                        <p class="rwa-card-subtitle">Transform rough human scans into refined 3D models.</p>

                        <div class="rwa-card-visual">
                            <img src="<?= $img ?>/rwa-card-img2.png" alt="Human-Body Scan to Enhanced Organic Model" class="img-fluid">
                        </div>

                        <ul class="rwa-feature-list list-unstyled mb-0 mt-auto">
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Personalised figurines</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Human-form sculptures</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Anatomical representations</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Custom artistic models</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Refine for 3D printing or manufacturing</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3: Organic Design Modification & Feature Removal -->
                <div class="rwa-card-col">
                    <div class="rwa-card">
                        <div class="rwa-card-header d-flex align-items-center gap-3 mb-2">
                            <div class="rwa-number-badge">03</div>
                            <h3 class="rwa-card-title">Organic Design<br>Modification & Feature Removal</h3>
                        </div>
                        <p class="rwa-card-subtitle">Modify existing designs, Preserve what matters.</p>

                        <div class="rwa-card-visual">
                            <img src="<?= $img ?>/rwa-card-img3.png" alt="Organic Design Modification & Feature Removal" class="img-fluid">
                        </div>

                        <ul class="rwa-feature-list list-unstyled mb-0 mt-auto">
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Remove unwanted decorative elements</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Modify ornamental details</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Improve proportions and surface contours</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Develop new design variations</span>
                            </li>
                            <li>
                                <span class="rwa-check-icon"><i class="fa-solid fa-check"></i></span>
                                <span>Prepare for manufacturing</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. More Applications Areas Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="dsbss-maa-section" id="more-applications-areas">
        <div class="container-fluid dsbss-container">

            <!-- Section Title -->
            <div class="row">
                <div class="col-12">
                    <h2 class="maa-sec-title">More Applications Areas</h2>
                </div>
            </div>

            <!-- 6 Cards Grid -->
            <div class="maa-cards-grid">

                <!-- Card 1: Architectural Ornamentation -->
                <div class="maa-card">
                    <div class="maa-card-img">
                        <img src="<?= $img ?>/maa-img1.png" alt="Architectural Ornamentation" class="img-fluid">
                    </div>
                    <h3 class="maa-card-title">Architectural<br>Ornamentation</h3>
                </div>

                <!-- Card 2: Heritage Replication -->
                <div class="maa-card">
                    <div class="maa-card-img">
                        <img src="<?= $img ?>/maa-img2.png" alt="Heritage Replication" class="img-fluid">
                    </div>
                    <h3 class="maa-card-title">Heritage<br>Replication</h3>
                </div>

                <!-- Card 3: Custom Figurines -->
                <div class="maa-card">
                    <div class="maa-card-img">
                        <img src="<?= $img ?>/maa-img3.png" alt="Custom Figurines" class="img-fluid">
                    </div>
                    <h3 class="maa-card-title">Custom<br>Figurines</h3>
                </div>

                <!-- Card 4: Decorative Product Development -->
                <div class="maa-card">
                    <div class="maa-card-img">
                        <img src="<?= $img ?>/maa-img4.png" alt="Decorative Product Development" class="img-fluid">
                    </div>
                    <h3 class="maa-card-title">Decorative<br>Product<br>Development</h3>
                </div>

                <!-- Card 5: Organic Product Redesign -->
                <div class="maa-card">
                    <div class="maa-card-img">
                        <img src="<?= $img ?>/maa-img5.png" alt="Organic Product Redesign" class="img-fluid">
                    </div>
                    <h3 class="maa-card-title">Organic Product<br>Redesign</h3>
                </div>

                <!-- Card 6: Artistic Product Customisation -->
                <div class="maa-card">
                    <div class="maa-card-img">
                        <img src="<?= $img ?>/maa-img6.png" alt="Artistic Product Customisation" class="img-fluid">
                    </div>
                    <h3 class="maa-card-title">Artistic Product<br>Customisation</h3>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. Enhanced Digital Design Section (From Physical Object to Enhanced Digital Design)
         ========================================================================= -->
    <section class="dsbss-edd-section" id="enhanced-digital-design">
        <div class="container-fluid dsbss-container">

            <!-- Section Title -->
            <div class="row">
                <div class="col-12">
                    <h2 class="edd-sec-title">From Physical Object to Enhanced Digital Design</h2>
                </div>
            </div>

            <!-- 5 Process Cards with Arrows -->
            <div class="edd-cards-wrapper">

                <!-- Step 1 -->
                <div class="edd-card-item">
                    <div class="edd-card">
                        <div class="edd-card-header">
                            <div class="edd-number-badge">1</div>
                            <h3 class="edd-card-title">Capture the<br>Physical Object</h3>
                        </div>
                        <p class="edd-card-desc">Scan the object using a suitable 3D scanning system.</p>
                        <div class="edd-card-img-box">
                            <img src="<?= $img ?>/edd-img1.png" alt="Capture the Physical Object" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Arrow 1 -->
                <div class="edd-arrow-item">
                    <div class="edd-arrow-circle">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="edd-card-item">
                    <div class="edd-card">
                        <div class="edd-card-header">
                            <div class="edd-number-badge">2</div>
                            <h3 class="edd-card-title">Process the<br>Scan Data</h3>
                        </div>
                        <p class="edd-card-desc">Clean and prepare the mesh by removing artefacts.</p>
                        <div class="edd-card-img-box">
                            <img src="<?= $img ?>/edd-img2.png" alt="Process the Scan Data" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Arrow 2 -->
                <div class="edd-arrow-item">
                    <div class="edd-arrow-circle">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="edd-card-item">
                    <div class="edd-card">
                        <div class="edd-card-header">
                            <div class="edd-number-badge">3</div>
                            <h3 class="edd-card-title">Sculpt &<br>Enhance the Design</h3>
                        </div>
                        <p class="edd-card-desc">Modify, refine and enhance the geometry using Geomagic Freeform.</p>
                        <div class="edd-card-img-box">
                            <img src="<?= $img ?>/edd-img3.png" alt="Sculpt and Enhance the Design" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Arrow 3 -->
                <div class="edd-arrow-item">
                    <div class="edd-arrow-circle">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="edd-card-item">
                    <div class="edd-card">
                        <div class="edd-card-header">
                            <div class="edd-number-badge">4</div>
                            <h3 class="edd-card-title">Prepare the<br>Manufacturing Geometry</h3>
                        </div>
                        <p class="edd-card-desc">Export as STL, STEP, IGES or NURBS, as required.</p>
                        <div class="edd-card-img-box">
                            <img src="<?= $img ?>/edd-img4.png" alt="Prepare the Manufacturing Geometry" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Arrow 4 -->
                <div class="edd-arrow-item">
                    <div class="edd-arrow-circle">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="edd-card-item">
                    <div class="edd-card">
                        <div class="edd-card-header">
                            <div class="edd-number-badge">5</div>
                            <h3 class="edd-card-title">Manufacture<br>the Final Product</h3>
                        </div>
                        <p class="edd-card-desc">Use the model for 3D printing, casting, CNC machining or other manufacturing processes.</p>
                        <div class="edd-card-img-box">
                            <img src="<?= $img ?>/edd-img5.png" alt="Manufacture the Final Product" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. Technology & Software Section
         ========================================================================= -->
    <section class="dsbss-ts-section" id="technology-software">
        <div class="container-fluid dsbss-container">

            <!-- Section Title -->
            <div class="row">
                <div class="col-12">
                    <h2 class="ts-sec-title">Technology & Software</h2>
                </div>
            </div>

            <!-- Cards Row -->
            <div class="ts-cards-row">

                <!-- Card 1: 3D Scanners & Software for Digital Sculpting -->
                <div class="ts-card ts-card-scanners">
                    <h3 class="ts-card-title">3D Scanners & Software for Digital Sculpting</h3>
                    <div class="ts-subcards-wrapper">

                        <!-- Scanner 1: Einscan Trak -->
                        <div class="ts-subcard">
                            <div class="ts-subcard-img-box">
                                <img src="<?= $img ?>/ts-scanner1.png" alt="Einscan Trak" class="img-fluid">
                            </div>
                            <h4 class="ts-subcard-title">Einscan Trak</h4>
                            <a href="einscan-trak-3d-scanner-in-india.php" class="btn-ts-know-more">Know More</a>
                        </div>

                        <!-- Scanner 2: Einscan Rigil -->
                        <div class="ts-subcard">
                            <div class="ts-subcard-img-box">
                                <img src="<?= $img ?>/ts-scanner2.png" alt="Einscan Rigil" class="img-fluid">
                            </div>
                            <h4 class="ts-subcard-title">Einscan Rigil</h4>
                            <a href="einscan-rigil.php" class="btn-ts-know-more">Know More</a>
                        </div>

                        <!-- Scanner 3: Epic T150 -->
                        <div class="ts-subcard">
                            <div class="ts-subcard-img-box">
                                <img src="<?= $img ?>/ts-scanner3.png" alt="Epic T150" class="img-fluid">
                            </div>
                            <h4 class="ts-subcard-title">Epic T150</h4>
                            <a href="https://wildplantts.com/high-precision-terrestrial-laser-scanner.html" class="btn-ts-know-more">Know More</a>
                        </div>

                    </div>
                </div>

                <!-- Card 2: Geomagic Freeform -->
                <div class="ts-card ts-card-freeform">
                    <div class="ts-card-header-freeform">
                        <div class="ts-ff-badge">Ff</div>
                        <h3 class="ts-card-title-freeform">Geomagic <span>Freeform</span></h3>
                    </div>
                    <div class="ts-freeform-body">
                        <img src="<?= $img ?>/ts-freeform-box.png" alt="Geomagic Freeform Features" class="img-fluid">
                    </div>
                    <a href="geomagic-freeform-3d-modelling-design-software.php" class="btn-ts-freeform-more">Know More <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Card 3: Manufacturing Outputs -->
                <div class="ts-card ts-card-outputs">
                    <h3 class="ts-card-title">Manufacturing<br>Outputs</h3>
                    <div class="ts-outputs-body">
                        <img src="<?= $img ?>/ts-manufacturing-outputs.png" alt="Manufacturing Outputs - STL, STEP / IGES, Polygon Mesh" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. CAPEX & OPEX Solutions Section
         ========================================================================= -->
    <section class="dsbss-co-section" id="capex-opex-solutions">
        <div class="container-fluid dsbss-container">
            <div class="co-cards-row">

                <!-- CAPEX Card -->
                <div class="co-card co-card-capex">
                    <div class="co-card-header">
                        <div class="co-eyebrow">CAPEX SOLUTIONS</div>
                        <h3 class="co-card-title">Build Your Own Digital Sculpting<br>& Organic Design Facility</h3>
                    </div>
                    <div class="co-card-body">
                        <ul class="co-checklist">
                            <li><i class="fa-solid fa-circle-check"></i> Professional grade 3D scanners</li>
                            <li><i class="fa-solid fa-circle-check"></i> Geomagic Freeform software</li>
                            <li><i class="fa-solid fa-circle-check"></i> Workstations for sculpting</li>
                            <li><i class="fa-solid fa-circle-check"></i> Workflow implementation</li>
                            <li><i class="fa-solid fa-circle-check"></i> Training and application support</li>
                        </ul>
                        <div class="co-visual co-visual-capex">
                            <img src="<?= $img ?>/capex-img.png" alt="Build Your Own Digital Sculpting Facility" class="img-fluid">
                        </div>
                    </div>
                    <a href="3d-products.php" class="btn-co-orange">Explore Scanning & Software Solutions</a>
                </div>

                <!-- OPEX Card -->
                <div class="co-card co-card-opex">
                    <div class="co-card-header">
                        <div class="co-eyebrow">OPEX SOLUTIONS</div>
                        <h3 class="co-card-title">Outsource Your Organic Design<br>Projects to Precise3DM</h3>
                    </div>
                    <div class="co-card-body">
                        <ul class="co-checklist">
                            <li><i class="fa-solid fa-circle-check"></i> Organic shape design enhancement</li>
                            <li><i class="fa-solid fa-circle-check"></i> Statue and sculpture modification</li>
                            <li><i class="fa-solid fa-circle-check"></i> Digital sculpting</li>
                            <li><i class="fa-solid fa-circle-check"></i> Human-form model refinement</li>
                            <li><i class="fa-solid fa-circle-check"></i> Manufacturing geometry preparation</li>
                            <li><i class="fa-solid fa-circle-check"></i> 3D printing and production support</li>
                        </ul>
                        <div class="co-visual co-visual-opex">
                            <img src="<?= $img ?>/opex-img.png" alt="Outsource Your Organic Design Projects" class="img-fluid">
                        </div>
                    </div>
                    <a href="3d-services.php" class="btn-co-orange">Discuss Your Design Requirements</a>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         9. CTA Section (Have a Complex Shape You Want to Improve?)
         ========================================================================= -->
    <section class="dsbss-cta-section" id="cta-section">
        <div class="container-fluid dsbss-container">
            <div class="cta-banner-wrapper">

                <!-- Left Content -->
                <div class="cta-banner-left">
                    <h2 class="cta-title">Have a Complex Shape You Want to Improve?</h2>
                    <p class="cta-desc">
                        From statues and architectural ornaments to human-body forms and custom organic products, Precise3DM helps you transform physical geometry into enhanced digital designs.
                    </p>

                    <!-- Contact Details -->
                    <div class="cta-contact-list">

                        <!-- Call us now -->
                        <div class="cta-contact-item">
                            <div class="cta-contact-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="cta-contact-info">
                                <div class="cta-contact-label">Call us now</div>
                                <div class="cta-contact-val">
                                    <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
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
                                    <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Buttons -->
                <div class="cta-banner-right">
                    <a href="Get-3d-scan-service-quote.php" class="btn-cta-solid">Discuss Your Organic Design Project</a>
                    <a href="3d-scanners-by-technology.php" class="btn-cta-outline">Explore 3D Scanning Solutions</a>
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
