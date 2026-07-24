<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>3D Laser & LiDAR Scan to Mesh Model | Precise3DM</title>
    <meta name="description" content="Convert Point Clouds into Production-Ready Mesh Models for VFX, Color 3D Printing, Architecture, AR/VR, Digital Twins and Engineering Applications.">
    <meta name="keywords" content="3D Laser, LiDAR, Scan to Mesh, Mesh Model, Precise3DM">
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

    <!-- Page Specific Styles -->
    <link rel="stylesheet" href="assets/css/3d-scan-to-mesh-model.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- Main Content Starts Here -->
    <main>

        <!-- Hero Section Starts -->
        <section class="stm-hero-section">
            <div class="container-fluid stm-hero-container">
                <div class="row">

                    <!-- Left Column -->
                    <div class="col-lg-5 d-flex flex-column">
                        <h1 class="stm-hero-title">
                            <span class="stm-hero-title-black">3D Laser & LiDAR</span><br>
                            <span class="stm-hero-title-orange">Scan to Mesh</span>
                            <span class="stm-hero-title-black">Model</span>
                        </h1>
                        <p class="stm-hero-desc">
                            Convert Point Clouds into Production-Ready Mesh Models for VFX, Color 3D Printing, Architecture, AR/VR, Digital Twins and Engineering Applications.
                        </p>
                        <div class="stm-btn-group">
                            <a href="contact-us.php" class="stm-btn">Talk to 3D Experts</a>
                            <a href="contact-us.php" class="stm-btn">Schedule Live Demo</a>
                        </div>

                        <!-- Email Contact (Bottom Left) -->
                        <div class="stm-hero-contact-bottom mt-auto pt-4">
                            <img src="assets/images/3d-scan-to-mesh-model/mail-logo.png" alt="Email Us" class="stm-mail-icon">
                            <div class="stm-contact-text-wrap">
                                <span class="stm-contact-label" style="font-size:1.25rem;">Email us</span>
                                <div>
                                    <a href="mailto:sm@precise3dm.com" class="stm-emails">sm@precise3dm.com</a>
                                    <span class="stm-email-sep">|</span>
                                    <a href="mailto:sales@precise3dm.com" class="stm-emails">sales@precise3dm.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Column (Optional Center Images) -->
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="stm-center-images">
                            <!-- Visual representation space for Point Cloud to Mesh Model -->
                            <div class="stm-center-img-block mb-4">
                                <div class="row text-center mb-2">
                                    <div class="col-6"><span class="stm-center-img-title">LiDAR Point Cloud</span></div>
                                    <div class="col-6"><span class="stm-center-img-title">Mesh Model</span></div>
                                </div>
                                <div class="row align-items-center text-center">
                                    <div class="col-6">
                                        <img src="assets/images/3d-scan-to-mesh-model/lidar-point-cloud.png" alt="Lidar Point Cloud" class="img-fluid">
                                    </div>
                                    <div class="col-6">
                                        <img src="assets/images/3d-scan-to-mesh-model/mesh-model-hero-1.png" alt="Mesh Model" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <!-- Visual representation space for 3D Laser Scan to Mesh Model -->
                            <div class="stm-center-img-block mt-4">
                                <div class="row text-center mb-2">
                                    <div class="col-6"><span class="stm-center-img-title">3D Laser Scan</span></div>
                                    <div class="col-6"><span class="stm-center-img-title">Mesh Model</span></div>
                                </div>
                                <div class="row align-items-center text-center">
                                    <div class="col-6">
                                        <img src="assets/images/3d-scan-to-mesh-model/3d-laser-scan.png" alt="Laser Scan to Mesh" class="img-fluid" style="max-height: 250px;">
                                    </div>
                                    <div class="col-6">
                                        <img src="assets/images/3d-scan-to-mesh-model/mesh-model-hero-2.png" alt="Mesh Model" class="img-fluid" style="max-height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-3">
                        <div class="stm-apps-wrapper">

                            <!-- Phone Contact (Top Right) -->
                            <div class="stm-hero-contact-top w-100 mb-5">
                                <img src="assets/images/3d-scan-to-mesh-model/phone-icon.png" alt="Call Us" class="stm-phone-icon">
                                <div class="stm-contact-text-wrap">
                                    <span class="stm-contact-label">Call us now</span>
                                    <span class="stm-contact-numbers">+91 98404 78347 | +91 63744 06179</span>
                                </div>
                            </div>

                            <div class="w-100 text-end pe-4">
                                <div class="stm-apps-tag">Applications</div>
                            </div>

                            <div class="stm-apps-list-container">

                                <div class="stm-app-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/application-1.svg" alt="VFX & Animation" class="stm-app-icon">
                                    <h4 class="stm-app-name">VFX & Animation</h4>
                                </div>

                                <div class="stm-app-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/application-2.svg" alt="3D Printing" class="stm-app-icon">
                                    <h4 class="stm-app-name">3D Printing</h4>
                                </div>

                                <div class="stm-app-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/application-3.svg" alt="Architecture" class="stm-app-icon">
                                    <h4 class="stm-app-name">Architecture</h4>
                                </div>

                                <div class="stm-app-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/application-4.svg" alt="AR/VR" class="stm-app-icon">
                                    <h4 class="stm-app-name">AR/VR</h4>
                                </div>

                                <div class="stm-app-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/application-5.svg" alt="Digital Twins" class="stm-app-icon">
                                    <h4 class="stm-app-name">Digital Twins</h4>
                                </div>

                                <div class="stm-app-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/application-6.svg" alt="Reverse Engineering" class="stm-app-icon">
                                    <h4 class="stm-app-name">Reverse Engineering</h4>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Hero Section Ends -->

        <!-- What Is Scan To Mesh Section Starts -->
        <section class="stm-what-section">
            <div class="container-fluid" style="padding: 0 2%;">
                <div class="row align-items-center">

                    <!-- Left Column (5 cols) -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="stm-what-title">WHAT IS SCAN TO MESH?</h2>
                        <p class="stm-what-desc">
                            3D scanning technologies capture millions of measurement points from real-world objects and environments. To make this data usable for modern applications, the point cloud is converted into a clean, optimized mesh model.
                        </p>
                    </div>

                    <!-- Middle Column (4 cols) -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="stm-what-middle">
                            <div class="stm-what-img-box">
                                <h3 class="stm-what-img-title">RAW POINT CLOUD</h3>
                                <div class="stm-what-img-wrapper">
                                    <img src="assets/images/3d-scan-to-mesh-model/what-1.png" alt="Raw Point Cloud" class="stm-what-img">
                                </div>
                            </div>

                            <div class="stm-what-arrow">
                                &rarr;
                            </div>

                            <div class="stm-what-img-box">
                                <h3 class="stm-what-img-title">MESH MODEL</h3>
                                <div class="stm-what-img-wrapper">
                                    <img src="assets/images/3d-scan-to-mesh-model/what-2.png" alt="Mesh Model" class="stm-what-img">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (3 cols) -->
                    <div class="col-lg-2">
                        <div class="stm-what-steps">

                            <!-- Step 1 -->
                            <div class="stm-what-step">
                                <div class="stm-what-step-num">1</div>
                                <div class="stm-what-step-content">
                                    <h4 class="stm-what-step-title">Reality Capture</h4>
                                    <p class="stm-what-step-text">Capture real-world data using LiDAR / 3D scanners.</p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="stm-what-step">
                                <div class="stm-what-step-num">2</div>
                                <div class="stm-what-step-content">
                                    <h4 class="stm-what-step-title">Point Cloud</h4>
                                    <p class="stm-what-step-text">Raw point cloud data (millions to billions of points).</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="stm-what-step">
                                <div class="stm-what-step-num">3</div>
                                <div class="stm-what-step-content">
                                    <h4 class="stm-what-step-title">Mesh Generation</h4>
                                    <p class="stm-what-step-text">Convert points into connected polygon surfaces.</p>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="stm-what-step">
                                <div class="stm-what-step-num">4</div>
                                <div class="stm-what-step-content">
                                    <h4 class="stm-what-step-title">Optimization</h4>
                                    <p class="stm-what-step-text">Clean, optimize and prepare the mesh for downstream applications.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- What Is Scan To Mesh Section Ends -->

        <!-- Workflow Section Starts -->
        <section class="stm-workflow-section">
            <div class="container-fluid" style="padding: 0 5%;">
                <h2 class="stm-workflow-main-title">Understanding 3D Scan-to-Mesh Workflow</h2>
                <div class="stm-5-cols">

                    <!-- Workflow 1 -->
                    <div class="stm-workflow-col">
                        <div class="stm-workflow-card">
                            <div class="stm-workflow-num">1</div>
                            <div class="stm-workflow-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/workflow-1.png" alt="Reality Capture" class="stm-workflow-img">
                            </div>
                            <h3 class="stm-workflow-title">Reality Capture</h3>
                            <p class="stm-workflow-desc">Capture physical objects or environments using LiDAR / 3D scanners</p>
                        </div>
                    </div>

                    <!-- Workflow 2 -->
                    <div class="stm-workflow-col">
                        <div class="stm-workflow-card">
                            <div class="stm-workflow-num">2</div>
                            <div class="stm-workflow-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/workflow-2.png" alt="Point Cloud Processing" class="stm-workflow-img">
                            </div>
                            <h3 class="stm-workflow-title">Point Cloud Processing</h3>
                            <p class="stm-workflow-desc">Filter noise, remove unwanted data and prepare raw scans</p>
                        </div>
                    </div>

                    <!-- Workflow 3 -->
                    <div class="stm-workflow-col">
                        <div class="stm-workflow-card">
                            <div class="stm-workflow-num">3</div>
                            <div class="stm-workflow-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/workflow-3.png" alt="Registration & Cleanup" class="stm-workflow-img">
                            </div>
                            <h3 class="stm-workflow-title">Registration & Cleanup</h3>
                            <p class="stm-workflow-desc">Align multiple scans and remove outliers for accuracy</p>
                        </div>
                    </div>

                    <!-- Workflow 4 -->
                    <div class="stm-workflow-col">
                        <div class="stm-workflow-card">
                            <div class="stm-workflow-num">4</div>
                            <div class="stm-workflow-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/workflow-4.png" alt="Mesh Generation" class="stm-workflow-img">
                            </div>
                            <h3 class="stm-workflow-title">Mesh Generation</h3>
                            <p class="stm-workflow-desc">Convert point cloud into polygon mesh surfaces</p>
                        </div>
                    </div>

                    <!-- Workflow 5 -->
                    <div class="stm-workflow-col">
                        <div class="stm-workflow-card">
                            <div class="stm-workflow-num">5</div>
                            <div class="stm-workflow-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/workflow-5.png" alt="Final Deliverables" class="stm-workflow-img">
                            </div>
                            <h3 class="stm-workflow-title">Final Deliverables</h3>
                            <p class="stm-workflow-desc">Export in multiple formats for various applications</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Workflow Section Ends -->

        <!-- Where Are Mesh Models Used Section Starts -->
        <section class="stm-where-section">
            <div class="container-fluid" style="padding: 0 2%;">
                <h2 class="stm-where-main-title">Where Are Mesh Models Used?</h2>
                <div class="stm-8-cols">

                    <!-- Card 1 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/where-1.png" alt="VFX & Animation" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">VFX &<br>Animation</h3>
                                <p class="stm-where-desc">Create physical assets for movies, games, and visual effects.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/where-2.png" alt="Color 3D Printing" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">Color 3D<br>Printing</h3>
                                <p class="stm-where-desc">Full-color 3D models for figurines, replicas, and prototypes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper has-bg">
                                <img src="assets/images/3d-scan-to-mesh-model/where-3.png" alt="Architectural 3D Printing" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">Architectural<br>3D Printing</h3>
                                <p class="stm-where-desc">Physical models for presentations, urban planning, and design.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper has-bg">
                                <img src="assets/images/3d-scan-to-mesh-model/where-4.png" alt="AR / VR" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">AR / VR</h3>
                                <p class="stm-where-desc">Optimized 3D models for immersive AR and VR experiences.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper has-bg">
                                <img src="assets/images/3d-scan-to-mesh-model/where-5.png" alt="Human 3D Scanning" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">Human 3D<br>Scanning</h3>
                                <p class="stm-where-desc">3D Model creation for Human Miniature 3D Printing and Medical Modeling</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/where-6.png" alt="Heritage Preservation" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">Heritage<br>Preservation</h3>
                                <p class="stm-where-desc">Digitize and preserve cultural heritage for future generations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper has-bg">
                                <img src="assets/images/3d-scan-to-mesh-model/where-7.png" alt="Product Visualization" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">Product<br>Visualization</h3>
                                <p class="stm-where-desc">High-quality 3D models for marketing and visualization.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="stm-where-col">
                        <div class="stm-where-card">
                            <div class="stm-where-img-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/where-8.png" alt="Digital Twins" class="stm-where-img">
                            </div>
                            <div class="stm-where-card-body">
                                <h3 class="stm-where-title">Digital Twins</h3>
                                <p class="stm-where-desc">Real-world assets for monitoring and simulation.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Where Are Mesh Models Used Section Ends -->

        <!-- Point Cloud vs Mesh Model Section Starts -->
        <section class="stm-vs-section">
            <div class="container-fluid" style="padding: 0 2%;">
                <div class="row align-items-center">

                    <!-- Left Part -->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="stm-vs-main-title">Point Cloud <span>vs</span> Mesh Model</h2>

                        <div class="stm-vs-graphics">
                            <div class="stm-vs-item">
                                <h3 class="stm-vs-item-title">RAW POINT CLOUD</h3>
                                <img src="assets/images/3d-scan-to-mesh-model/point-cloud.png" alt="Raw Point Cloud" class="stm-vs-img">
                                <p class="stm-vs-item-desc">Unorganized<br>Difficult to edit<br>Not suitable for most applications</p>
                            </div>

                            <div class="stm-vs-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </div>

                            <div class="stm-vs-item">
                                <h3 class="stm-vs-item-title">MESH MODEL</h3>
                                <img src="assets/images/3d-scan-to-mesh-model/mesh-model.png" alt="Mesh Model" class="stm-vs-img">
                                <p class="stm-vs-item-desc">Organized geometry<br>Editable and optimized<br>Ready for multiple applications</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Part -->
                    <div class="col-lg-6">
                        <div class="stm-vs-table-wrapper">
                            <table class="stm-vs-table">
                                <thead>
                                    <tr>
                                        <th class="stm-th-black">Feature</th>
                                        <th class="stm-th-orange">Point Cloud</th>
                                        <th class="stm-th-orange">Mesh Model</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Data Type</td>
                                        <td>Millions / Billions<br>of Points</td>
                                        <td>Polygons / Surfaces</td>
                                    </tr>
                                    <tr>
                                        <td>File Size</td>
                                        <td>Very Large</td>
                                        <td>Optimized</td>
                                    </tr>
                                    <tr>
                                        <td>Visual Quality</td>
                                        <td>Raw &amp; Unstructured</td>
                                        <td>Clean &amp; Structured</td>
                                    </tr>
                                    <tr>
                                        <td>3D Printing Ready</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#FE1111" fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.536 12.122a1 1 0 0 1-1.414 1.414L12 13.414l-2.122 2.122a1 1 0 0 1-1.414-1.414L10.586 12 8.464 9.878a1 1 0 0 1 1.414-1.414L12 10.586l2.122-2.122a1 1 0 0 1 1.414 1.414L13.414 12l2.122 2.122z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#16A34A" fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm-1.293 14.707a1 1 0 0 1-1.414 0l-3.536-3.535a1 1 0 1 1 1.415-1.414L10 14.586l6.828-6.828a1 1 0 1 1 1.415 1.414l-7.536 7.535z" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Animation Ready</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#FE1111" fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.536 12.122a1 1 0 0 1-1.414 1.414L12 13.414l-2.122 2.122a1 1 0 0 1-1.414-1.414L10.586 12 8.464 9.878a1 1 0 0 1 1.414-1.414L12 10.586l2.122-2.122a1 1 0 0 1 1.414 1.414L13.414 12l2.122 2.122z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#16A34A" fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm-1.293 14.707a1 1 0 0 1-1.414 0l-3.536-3.535a1 1 0 1 1 1.415-1.414L10 14.586l6.828-6.828a1 1 0 1 1 1.415 1.414l-7.536 7.535z" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CAD Ready</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#FE1111" fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.536 12.122a1 1 0 0 1-1.414 1.414L12 13.414l-2.122 2.122a1 1 0 0 1-1.414-1.414L10.586 12 8.464 9.878a1 1 0 0 1 1.414-1.414L12 10.586l2.122-2.122a1 1 0 0 1 1.414 1.414L13.414 12l2.122 2.122z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#16A34A" fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm-1.293 14.707a1 1 0 0 1-1.414 0l-3.536-3.535a1 1 0 1 1 1.415-1.414L10 14.586l6.828-6.828a1 1 0 1 1 1.415 1.414l-7.536 7.535z" />
                                            </svg>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Point Cloud vs Mesh Model Section Ends -->

        <!-- Convert Section Starts -->
        <section class="stm-convert-section">
            <div class="container-fluid" style="padding: 0 2%;">
                <h2 class="stm-convert-title">Convert Non-Coloured 3D Scan Mesh into a Full-Colour 3D Printable Model</h2>

                <div class="stm-convert-row">
                    <div class="stm-convert-step">
                        <div class="stm-convert-img-wrapper">
                            <img src="assets/images/3d-scan-to-mesh-model/model-1.png" alt="3D Scan">
                        </div>
                        <p class="stm-convert-desc">3D Scan</p>
                    </div>

                    <div class="stm-convert-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </div>

                    <div class="stm-convert-step">
                        <div class="stm-convert-img-wrapper">
                            <img src="assets/images/3d-scan-to-mesh-model/model-2.png" alt="Add texture feature for image projection">
                        </div>
                        <p class="stm-convert-desc">Add texture Feature for<br>image projection</p>
                    </div>

                    <div class="stm-convert-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </div>

                    <div class="stm-convert-step">
                        <div class="stm-convert-img-wrapper">
                            <img src="assets/images/3d-scan-to-mesh-model/model-3.png" alt="Bring the image for projection">
                        </div>
                        <p class="stm-convert-desc">Bring the image for projection</p>
                    </div>

                    <div class="stm-convert-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </div>

                    <div class="stm-convert-step">
                        <div class="stm-convert-img-wrapper">
                            <img src="assets/images/3d-scan-to-mesh-model/model-4.png" alt="Project Image and export for 3D Printing">
                        </div>
                        <p class="stm-convert-desc">Project Image and<br>export for 3D Printing</p>
                    </div>

                    <div class="stm-convert-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </div>

                    <div class="stm-convert-step">
                        <div class="stm-convert-img-wrapper">
                            <img src="assets/images/3d-scan-to-mesh-model/model-5.png" alt="Engineering Outputs">
                        </div>
                        <p class="stm-convert-desc">Engineering Outputs</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Convert Section Ends -->

        <!-- Software Commonly Used Section Starts -->
        <section class="stm-software-section">
            <div class="container-fluid" style="padding: 0 5%;">
                <div class="stm-software-container">

                    <!-- Top Info Box -->
                    <div class="stm-software-info-box">
                        <div class="stm-software-logo">
                            <img src="assets/images/3d-scan-to-mesh-model/geomagic-warp-logo.png" alt="Geomagic Wrap">
                        </div>
                        <h2 class="stm-software-title">Software Commonly Used for Scan-to-Mesh Conversion</h2>
                        <p class="stm-software-desc">Several professional software solutions are used in this workflow. Geomagic Wrap is one of the most widely used tools for point cloud processing, mesh generation, optimization, and NURBS creation.</p>
                    </div>

                    <!-- Bottom Content (Workflow + List) -->
                    <div class="stm-software-content row align-items-center">

                        <!-- Left: Workflow -->
                        <div class="col-xl-9 col-lg-8 mb-5 mb-lg-0">
                            <div class="stm-software-workflow">
                                <!-- Step 1 -->
                                <div class="stm-sw-step">
                                    <div class="stm-sw-img-wrapper">
                                        <img src="assets/images/3d-scan-to-mesh-model/conversion-1.png" alt="Scan">
                                    </div>
                                    <div class="stm-sw-pill">Scan</div>
                                </div>
                                <!-- Arrow -->
                                <div class="stm-sw-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <!-- Step 2 -->
                                <div class="stm-sw-step">
                                    <div class="stm-sw-img-wrapper">
                                        <img src="assets/images/3d-scan-to-mesh-model/conversion-2.png" alt="Mesh">
                                    </div>
                                    <div class="stm-sw-pill">Mesh</div>
                                </div>
                                <!-- Arrow -->
                                <div class="stm-sw-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <!-- Step 3 -->
                                <div class="stm-sw-step">
                                    <div class="stm-sw-img-wrapper">
                                        <img src="assets/images/3d-scan-to-mesh-model/conversion-3.png" alt="Repair">
                                    </div>
                                    <div class="stm-sw-pill">Repair</div>
                                </div>
                                <!-- Arrow -->
                                <div class="stm-sw-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff931e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <!-- Step 4 -->
                                <div class="stm-sw-step">
                                    <div class="stm-sw-img-wrapper">
                                        <img src="assets/images/3d-scan-to-mesh-model/conversion-4.png" alt="Nurbs Surface">
                                    </div>
                                    <div class="stm-sw-pill">Nurbs Surface</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: List -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="stm-software-list">
                                <div class="stm-sl-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/tool-1.png" alt="CAD">
                                    <span>CAD/Engineering</span>
                                </div>
                                <div class="stm-sl-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/tool-2.png" alt="3D printing">
                                    <span>3D printing</span>
                                </div>
                                <div class="stm-sl-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/tool-3.png" alt="VFX">
                                    <span>VFX/Animations</span>
                                </div>
                                <div class="stm-sl-item">
                                    <img src="assets/images/3d-scan-to-mesh-model/tool-4.png" alt="AR/VR">
                                    <span>AR/VR/Digital Twin</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Button -->
                    <div class="stm-software-btn-wrapper">
                        <a href="geomagic-wrap-3d-scanning-software.php" class="stm-btn-know-more">
                            Know More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Software Commonly Used Section Ends -->

        <!-- Support Section Starts -->
        <section class="stm-support-section">
            <div class="container-fluid" style="padding: 0 2%;">
                <h2 class="stm-support-title">How Precise3DM Supports This Application</h2>

                <div class="row">
                    <!-- Capex Card -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="stm-sup-card stm-sup-capex">
                            <div class="stm-sup-content">
                                <h3 class="stm-sup-card-title">INVEST IN YOUR OWN SOLUTION (CAPEX)</h3>
                                <p class="stm-sup-card-desc">Purchase a Complete 3D Scanner and Mesh Modeling Software Package for In-House Use as a CAPEX Investment</p>
                                <ul class="stm-sup-list">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        3D LiDAR and Laser Scanner
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        3D Mesh Modeling Software
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        Training and Installation
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        Technical Support
                                    </li>
                                </ul>
                            </div>

                            <div class="stm-sup-bg-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/geomagic-warp-logo.png" alt="Geomagic" class="stm-sup-capex-logo">
                                <img src="assets/images/3d-scan-to-mesh-model/capex-bg.png" alt="Capex" class="stm-sup-capex-img">
                            </div>

                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="stm-sup-btn">Book Live Scanner & Software Demo</a>
                        </div>
                    </div>

                    <!-- Opex Card -->
                    <div class="col-lg-6">
                        <div class="stm-sup-card stm-sup-opex">
                            <div class="stm-sup-content">
                                <h3 class="stm-sup-card-title">OUTSOURCE AS A SERVICE (OPEX)</h3>
                                <p class="stm-sup-card-desc">Professional 3D LiDAR and Laser Scanning Services</p>
                                <ul class="stm-sup-list">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        3D Mesh Modeling & Data Processing
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        Fast Turnaround & Project-Based Execution
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        No Equipment Investment Required
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        Onsite or Offsite Scanning Services
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#16A34A">
                                            <path fill-rule="evenodd" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1.177-4.477l5.657-6.084-1.414-1.414-4.243 4.67-2.121-2.121-1.414 1.414 3.535 3.535z" clip-rule="evenodd" />
                                        </svg>
                                        Technical Consultation & Project Support
                                    </li>
                                </ul>
                            </div>

                            <div class="stm-sup-bg-wrapper">
                                <img src="assets/images/3d-scan-to-mesh-model/opex-bg.png" alt="Opex" class="stm-sup-opex-img">
                            </div>

                            <a href="contact-us.php" class="stm-sup-btn">Request a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support Section Ends -->

        <!-- Contact Section Starts -->
        <section class="stm-contact-section">
            <div class="container-fluid" style="padding: 0 5%;">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="stm-contact-title">Looking To Implement A<br>Scan-To-Mesh Workflow?</h2>

                        <div class="stm-contact-info-wrap">
                            <!-- Phone -->
                            <div class="stm-contact-item">
                                <img src="assets/images/3d-scan-to-mesh-model/phone-icon.png" alt="Phone" class="stm-contact-icon">
                                <div class="stm-contact-text-box">
                                    <h4 class="stm-contact-lbl">Call us now</h4>
                                    <p class="stm-contact-val">
                                        +91 98404 78347
                                        <span class="stm-contact-sep">|</span>
                                        +91 63744 06179
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="stm-contact-item">
                                <img src="assets/images/3d-scan-to-mesh-model/mail-logo.png" alt="Email" class="stm-contact-icon">
                                <div class="stm-contact-text-box">
                                    <h4 class="stm-contact-lbl">Email us</h4>
                                    <p class="stm-contact-val">
                                        sm@precise3dm.com
                                        <span class="stm-contact-sep">|</span>
                                        sales@precise3dm.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="stm-contact-actions">
                            <a href="contact-us.php" class="stm-contact-btn stm-btn-solid">Request Consultation</a>
                            <a href="contact-us.php" class="stm-contact-btn stm-btn-outline">Talk to an Expert</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section Ends -->

        <!-- FAQ Section Starts -->
        <section class="stm-faq-section">
            <div class="container-fluid py-4" style="padding: 0 5%;">
                <h2 class="stm-faq-title mb-5">FREQUENTLY ASKED QUESTIONS</h2>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <div class="accordion stm-faq-accordion" id="stmFaqAccordionLeft">

                            <!-- FAQ 1 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading1">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                                        What is the difference between a point cloud and a mesh model?
                                    </button>
                                </h2>
                                <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#stmFaqAccordionLeft">
                                    <div class="accordion-body stm-faq-body">
                                        A point cloud consists of individual measured points, while a mesh model connects those points into surfaces that can be visualized, edited, printed, or engineered.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading2">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                        Can LiDAR scan data be used for 3D printing?
                                    </button>
                                </h2>
                                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#stmFaqAccordionLeft">
                                    <div class="accordion-body stm-faq-body">
                                        Not directly. The point cloud must first be converted into a mesh model and optimized for additive manufacturing.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading3">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                        Can mesh models contain color information?
                                    </button>
                                </h2>
                                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#stmFaqAccordionLeft">
                                    <div class="accordion-body stm-faq-body">
                                        Yes. Textured mesh models can preserve RGB color information captured during scanning.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading4">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                        What software is used to convert point clouds into mesh models?
                                    </button>
                                </h2>
                                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#stmFaqAccordionLeft">
                                    <div class="accordion-body stm-faq-body">
                                        Professional software such as Geomagic Wrap is commonly used for scan processing, mesh generation, optimization, and NURBS creation.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6">
                        <div class="accordion stm-faq-accordion" id="stmFaqAccordionRight">

                            <!-- FAQ 5 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading5">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                        Can mesh models be converted into CAD models?
                                    </button>
                                </h2>
                                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#stmFaqAccordionRight">
                                    <div class="accordion-body stm-faq-body">
                                        Yes. Mesh models can be reconstructed into NURBS surfaces and CAD geometry suitable for engineering applications.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading6">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                                        What file formats are commonly used?
                                    </button>
                                </h2>
                                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#stmFaqAccordionRight">
                                    <div class="accordion-body stm-faq-body">
                                        Common formats include STL, OBJ, PLY, FBX, STEP, and IGES.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 7 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading7">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                                        How accurate are mesh models generated from scans?
                                    </button>
                                </h2>
                                <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#stmFaqAccordionRight">
                                    <div class="accordion-body stm-faq-body">
                                        Accuracy depends on scanner accuracy, scan quality, point density, and processing methodology.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 8 -->
                            <div class="accordion-item stm-faq-item">
                                <h2 class="accordion-header" id="faqHeading8">
                                    <button class="accordion-button collapsed stm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                                        Do I need expensive hardware to process scan data?
                                    </button>
                                </h2>
                                <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#stmFaqAccordionRight">
                                    <div class="accordion-body stm-faq-body">
                                        Not always. Organizations can either build in-house capabilities or outsource scan-to-mesh workflows depending on project requirements.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section Ends -->

    </main>
    <!-- Main Content Ends Here -->

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>