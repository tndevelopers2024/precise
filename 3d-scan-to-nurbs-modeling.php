<?php
$page_title = "3D Scan to NURBS Modeling Services | Precise3DM";
$meta_description = "Convert complex 3D scan data into high-quality engineering NURBS surfaces. Accurate reverse engineering services with Geomagic Design X and metrology 3D scanners in India.";
$img = "assets/images/3d-scan-to-nurbs-modeling";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <meta name="title" content="<?= $page_title ?>">
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="3D Scan to NURBS, NURBS Modeling, Reverse Engineering, Geomagic Design X, FreeScan, Surface Modeling India, Class-A Surfaces, STEP IGES">

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

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">

    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="assets/css/3d-scan-to-nurbs-modeling.css?v=1.1">
</head>

<body>
    <!-- Header Start -->
    <?php include "includes/header.php"; ?>
    <!-- Header End -->

    <!-- =========================================================================
         1. Hero Section
         ========================================================================= -->
    <section class="nurbs-hero-section" id="nurbs-hero">
        <div class="container-fluid px-lg-5 px-3">
            <!-- Top Right Contact -->
            <div class="nurbs-hero-top-contact">
                <a href="tel:+919840478347" class="nurbs-contact-badge">
                    <div class="nurbs-contact-icon-circle">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="nurbs-contact-info-text">
                        <span class="nurbs-contact-label">Call us now</span>
                        <span class="nurbs-contact-val">+91 98404 78347 | +91 63744 06179</span>
                    </div>
                </a>
            </div>

            <!-- Hero Main Content Row -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h1 class="nurbs-hero-title">
                        3D <span class="highlight-orange">Scan to NURBS</span> Modeling
                    </h1>
                    <h2 class="nurbs-hero-subtitle">
                        Convert Complex Scan Data into High-Quality Engineering Surfaces
                    </h2>
                    <h3 class="nurbs-hero-subtag">
                        Reverse Engineering Services, Geomagic Design X Software & Industrial 3D Scanners
                    </h3>
                    <p class="nurbs-hero-desc">
                        Convert scan data into smooth, accurate NURBS surfaces suitable for CAD, CAE, CAM, product redesign and manufacturing.
                    </p>
                </div>
                <div class="col-lg-6 col-12 nurbs-hero-img-wrap">
                    <img src="<?= $img ?>/hero-image.png" alt="Scan Mesh to Nurbs Surface to Nurbs Model" class="nurbs-hero-img img-fluid">
                </div>
            </div>

            <!-- 3 CTA Buttons -->
            <div class="nurbs-hero-buttons">
                <a href="scanning-solution-form.php" class="btn-nurbs-gradient">
                    Request Technical Review
                </a>
                <a href="Get-3d-scan-service-quote.php" class="btn-nurbs-gradient">
                    <img src="<?= $img ?>/upload-icon.svg" alt="Upload Icon" class="upload-svg-icon">
                    <span>Upload Scan Data</span>
                </a>
                <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-nurbs-gradient">
                    Book Live Demo
                </a>
            </div>

            <!-- Bottom Features Strip & Email Info -->
            <div class="nurbs-hero-bottom-strip">
                <div class="nurbs-features-row">
                    <div class="nurbs-feature-item">
                        <div class="nurbs-feature-icon-circle">
                            <img src="<?= $img ?>/hero-icon-1.svg" alt="Projects Icon">
                        </div>
                        <span class="nurbs-feature-label">300+ Surface<br>Modeling Projects</span>
                    </div>

                    <div class="nurbs-feature-item">
                        <div class="nurbs-feature-icon-circle">
                            <img src="<?= $img ?>/hero-icon-2.svg" alt="Deployments Icon">
                        </div>
                        <span class="nurbs-feature-label">50+ Reverse<br>Engineering<br>Deployments</span>
                    </div>

                    <div class="nurbs-feature-item">
                        <div class="nurbs-feature-icon-circle">
                            <img src="<?= $img ?>/hero-icon-3.svg" alt="Customers Icon">
                        </div>
                        <span class="nurbs-feature-label">100+ Industrial<br>Customers</span>
                    </div>

                    <div class="nurbs-feature-item">
                        <div class="nurbs-feature-icon-circle">
                            <img src="<?= $img ?>/hero-icon-4.svg" alt="Support Icon">
                        </div>
                        <span class="nurbs-feature-label">Pan India<br>Technical Support</span>
                    </div>
                </div>

                <a href="mailto:sm@precise3dm.com" class="nurbs-hero-email-wrap">
                    <div class="nurbs-email-icon-circle">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="nurbs-email-text-box">
                        <span class="nurbs-email-title">Email Us</span>
                        <span class="nurbs-email-val">sm@precise3dm.com | sales@precise3dm.com</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. What is scan to nurbs modeling section
         ========================================================================= -->
    <section class="scan-nurbs-section bg-white" id="what-is-scan-to-nurbs">
        <div class="container-fluid px-lg-5 px-3">
            <h2 class="nurbs-whatis-title">WHAT IS 3D SCAN TO NURBS MODELING?</h2>

            <div class="row g-4 align-items-stretch">
                <!-- 7 cols: Orange tinted box -->
                <div class="col-lg-7 col-12">
                    <div class="nurbs-whatis-desc-box">
                        <p>
                            Scan data is converted into smooth, accurate NURBS surfaces using advanced reverse engineering software. These NURBS surfaces are ideal for complex, freeform, ergonomic and styling-based products where parametric features are not suitable.
                        </p>
                    </div>
                </div>

                <!-- 5 cols: White boxed card -->
                <div class="col-lg-5 col-12">
                    <div class="nurbs-why-card">
                        <div class="nurbs-why-header">
                            Why NURBS Modeling is Important
                        </div>
                        <div class="nurbs-why-body">
                            <ul class="nurbs-why-list">
                                <li>Perfect for freeform & organic geometry</li>
                                <li>High surface quality & continuity</li>
                                <li>Ideal for styling, design & aesthetics</li>
                                <li>Better for CAE, CFD & flow analysis</li>
                                <li>Essential for Class-A surfaces</li>
                                <li>Industry standard for complex products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Workflow 3 Image Progression -->
            <div class="nurbs-whatis-gallery">
                <div class="nurbs-whatis-img-col">
                    <div class="nurbs-whatis-img-box">
                        <img src="<?= $img ?>/what-1.png" alt="Physical Component" class="img-fluid">
                    </div>
                    <h3 class="nurbs-whatis-caption">Physical Component</h3>
                </div>

                <div class="nurbs-arrow-col">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <div class="nurbs-whatis-img-col">
                    <div class="nurbs-whatis-img-box">
                        <img src="<?= $img ?>/what-2.png" alt="Scan Mesh (STL)" class="img-fluid">
                    </div>
                    <h3 class="nurbs-whatis-caption">Scan Mesh (STL)</h3>
                </div>

                <div class="nurbs-arrow-col">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <div class="nurbs-whatis-img-col">
                    <div class="nurbs-whatis-img-box">
                        <img src="<?= $img ?>/what-3.png" alt="NURBS Surfaces" class="img-fluid">
                    </div>
                    <h3 class="nurbs-whatis-caption">NURBS Surfaces</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. How the Workflow works section
         ========================================================================= -->
    <section class="scan-nurbs-section bg-white" id="how-workflow-works">
        <div class="container-fluid px-lg-5 px-3">
            <h2 class="nurbs-workflow-title">HOW THE WORKFLOW WORKS</h2>

            <div class="nurbs-workflow-row">
                <!-- Step 1 -->
                <div class="nurbs-workflow-step">
                    <div class="nurbs-step-box">
                        <div class="nurbs-step-badge">1</div>
                        <img src="<?= $img ?>/how-1.png" alt="Capture the Physical Geometry" class="nurbs-step-img">
                    </div>
                    <div class="nurbs-step-info">
                        <h4 class="nurbs-step-title">Capture the Physical Geometry</h4>
                        <p class="nurbs-step-desc">Digitize the component using industrial 3D scanning systems.</p>
                    </div>
                </div>

                <div class="nurbs-workflow-arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 2 -->
                <div class="nurbs-workflow-step">
                    <div class="nurbs-step-box">
                        <div class="nurbs-step-badge">2</div>
                        <img src="<?= $img ?>/how-2.png" alt="Generate High-Quality Mesh" class="nurbs-step-img">
                    </div>
                    <div class="nurbs-step-info">
                        <h4 class="nurbs-step-title">Generate High-Quality Mesh</h4>
                        <p class="nurbs-step-desc">Process scan data into a clean STL mesh, removing noise and defects.</p>
                    </div>
                </div>

                <div class="nurbs-workflow-arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 3 -->
                <div class="nurbs-workflow-step">
                    <div class="nurbs-step-box">
                        <div class="nurbs-step-badge">3</div>
                        <img src="<?= $img ?>/how-3.png" alt="Create NURBS Surfaces" class="nurbs-step-img">
                    </div>
                    <div class="nurbs-step-info">
                        <h4 class="nurbs-step-title">Create NURBS Surfaces</h4>
                        <p class="nurbs-step-desc">Automatically or manually create smooth NURBS surfaces.</p>
                    </div>
                </div>

                <div class="nurbs-workflow-arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 4 -->
                <div class="nurbs-workflow-step">
                    <div class="nurbs-step-box">
                        <div class="nurbs-step-badge">4</div>
                        <img src="<?= $img ?>/how-4.png" alt="Review & Refine Surfaces" class="nurbs-step-img">
                    </div>
                    <div class="nurbs-step-info">
                        <h4 class="nurbs-step-title">Review & Refine Surfaces</h4>
                        <p class="nurbs-step-desc">Analyze, trim, join and refine surfaces for accuracy and continuity.</p>
                    </div>
                </div>

                <div class="nurbs-workflow-arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 5 -->
                <div class="nurbs-workflow-step">
                    <div class="nurbs-step-box">
                        <div class="nurbs-step-badge">5</div>
                        <img src="<?= $img ?>/how-5.png" alt="Export to CAD Platforms" class="nurbs-step-img">
                    </div>
                    <div class="nurbs-step-info">
                        <h4 class="nurbs-step-title">Export to CAD Platforms</h4>
                        <p class="nurbs-step-desc">Deliver in IGES, STEP, or Parasolid for downstream CAD & CAE.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. Modeling Comparison and Application Section
         ========================================================================= -->
    <section class="scan-nurbs-section" id="comparison-applications">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row g-5">
                <!-- Left: Table comparison -->
                <div class="col-lg-6 col-12">
                    <h3 class="nurbs-col-heading">NURBS VS PARAMETRIC CAD MODELING</h3>
                    <div class="nurbs-comparison-table-wrap">
                        <table class="nurbs-comparison-table">
                            <thead>
                                <tr>
                                    <th>Parametric CAD</th>
                                    <th>NURBS Modeling</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ideal for mechanical parts</td>
                                    <td>Ideal for freeform shapes</td>
                                </tr>
                                <tr>
                                    <td>Hole Features</td>
                                    <td>Have NURBS Surfaces</td>
                                </tr>
                                <tr>
                                    <td>Holes, slots, cylinders</td>
                                    <td>Organic geometries</td>
                                </tr>
                                <tr>
                                    <td>Manufacturing components</td>
                                    <td>Styling and design surfaces</td>
                                </tr>
                                <tr>
                                    <td>Engineering features</td>
                                    <td>Complex flowing surfaces</td>
                                </tr>
                                <tr>
                                    <td>Design history driven</td>
                                    <td>Curvature driven</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right: Applications grid -->
                <div class="col-lg-6 col-12">
                    <h3 class="nurbs-col-heading">APPLICATIONS OF SCAN TO NURBS MODELING</h3>
                    <div class="nurbs-apps-grid">
                        <!-- App 1 -->
                        <div class="nurbs-app-card">
                            <div class="nurbs-app-box">
                                <img src="<?= $img ?>/application-1.png" alt="Automotive Exterior" class="nurbs-app-img">
                            </div>
                            <span class="nurbs-app-caption">Automotive<br>Exterior</span>
                        </div>

                        <!-- App 2 -->
                        <div class="nurbs-app-card">
                            <div class="nurbs-app-box">
                                <img src="<?= $img ?>/application-2.png" alt="Automotive Interior" class="nurbs-app-img">
                            </div>
                            <span class="nurbs-app-caption">Automotive<br>Interior</span>
                        </div>

                        <!-- App 3 -->
                        <div class="nurbs-app-card">
                            <div class="nurbs-app-box">
                                <img src="<?= $img ?>/application-3.png" alt="Marine Hull Modeling" class="nurbs-app-img">
                            </div>
                            <span class="nurbs-app-caption">Marine Hull<br>Modeling</span>
                        </div>

                        <!-- App 4 -->
                        <div class="nurbs-app-card">
                            <div class="nurbs-app-box">
                                <img src="<?= $img ?>/application-4.png" alt="Aerospace Surface Engineering" class="nurbs-app-img">
                            </div>
                            <span class="nurbs-app-caption">Aerospace<br>Surface<br>Engineering</span>
                        </div>

                        <!-- App 5 -->
                        <div class="nurbs-app-card">
                            <div class="nurbs-app-box">
                                <img src="<?= $img ?>/application-5.png" alt="Product Design Reconstruction" class="nurbs-app-img">
                            </div>
                            <span class="nurbs-app-caption">Product Design<br>Reconstruction</span>
                        </div>

                        <!-- App 6 -->
                        <div class="nurbs-app-card">
                            <div class="nurbs-app-box">
                                <img src="<?= $img ?>/application-6.png" alt="Medical & Ergonomic Development" class="nurbs-app-img">
                            </div>
                            <span class="nurbs-app-caption">Medical &<br>Ergonomic<br>Development</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. Hybrid Modeling Workflow Section
         ========================================================================= -->
    <section class="scan-nurbs-section" id="hybrid-modeling">
        <div class="container-fluid px-lg-5 px-3">
            <h2 class="nurbs-hybrid-title">SCAN TO HYBRID MODELING – BEST OF BOTH WORLDS</h2>

            <div class="nurbs-hybrid-row">
                <!-- Card 1: Parametric Features -->
                <div class="nurbs-hybrid-card">
                    <div class="nurbs-hybrid-card-content">
                        <div class="nurbs-hybrid-text-col">
                            <h3 class="nurbs-hybrid-card-title">Parametric Features</h3>
                            <ul class="nurbs-hybrid-list">
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Holes</li>
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Slots</li>
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Ribs</li>
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Mounting Points</li>
                            </ul>
                        </div>
                        <div class="nurbs-hybrid-img-col">
                            <img src="<?= $img ?>/hybrid-1.png" alt="Parametric Features" class="nurbs-hybrid-img">
                        </div>
                    </div>
                </div>

                <div class="nurbs-operator-col">+</div>

                <!-- Card 2: NURBS Surfaces -->
                <div class="nurbs-hybrid-card">
                    <div class="nurbs-hybrid-card-content">
                        <div class="nurbs-hybrid-text-col">
                            <h3 class="nurbs-hybrid-card-title">NURBS Surfaces</h3>
                            <ul class="nurbs-hybrid-list">
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Curved regions</li>
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Ergonomic shapes</li>
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Freeform transitions</li>
                                <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Styling surfaces</li>
                            </ul>
                        </div>
                        <div class="nurbs-hybrid-img-col">
                            <img src="<?= $img ?>/hybrid-2.png" alt="NURBS Surfaces" class="nurbs-hybrid-img">
                        </div>
                    </div>
                </div>

                <div class="nurbs-operator-col">=</div>

                <!-- Card 3: Hybrid CAD Model -->
                <div class="nurbs-hybrid-result-card">
                    <h3 class="nurbs-hybrid-result-title">Hybrid CAD Model</h3>
                    <div class="nurbs-hybrid-result-img-box">
                        <img src="<?= $img ?>/hybrid-3.png" alt="Hybrid CAD Model" class="nurbs-hybrid-result-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CT Scans to NURBS Modeling Section
         ========================================================================= -->
    <section class="scan-nurbs-section bg-white" id="ct-scans">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <h2 class="nurbs-ct-title">CT SCAN TO NURBS MODELING</h2>
                    <p class="nurbs-ct-desc">
                        Industrial CT scanning captures both internal and external geometry.
                    </p>
                    <p class="nurbs-ct-desc">
                        Perfect for components with cooling channels, internal passages, castings, medical implants and additive manufactured parts.
                    </p>
                </div>
                <div class="col-lg-6 col-12 nurbs-ct-img-wrap">
                    <img src="<?= $img ?>/scan-to-nurbs.png" alt="CT Scan to NURBS Modeling Workflow" class="nurbs-ct-img img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. Software Used section
         ========================================================================= -->
    <section class="scan-nurbs-section" id="software-used">
        <div class="container-fluid px-lg-5 px-3">
            <h2 class="nurbs-soft-title">SOFTWARE USED</h2>

            <div class="row g-4 align-items-stretch">
                <!-- Software 1: Geomagic Design X -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="nurbs-soft-card">
                        <img src="<?= $img ?>/software-1.png" alt="Geomagic Design X" class="nurbs-soft-banner-img">
                        <h3 class="nurbs-soft-name">Geomagic Design X</h3>
                        <ul class="nurbs-soft-list">
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Scan Processing</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Mesh Editing</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Surface Creation</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Hybrid Modeling</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Feature Recognition</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Direct CAD Integration</li>
                        </ul>
                    </div>
                </div>

                <!-- Software 2: Geomagic Wrap -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="nurbs-soft-card">
                        <img src="<?= $img ?>/software-2.png" alt="Geomagic Wrap" class="nurbs-soft-banner-img">
                        <h3 class="nurbs-soft-name">Geomagic Wrap</h3>
                        <ul class="nurbs-soft-list">
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Auto NURBS</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Manual Surface</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> NURBS Patches</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Auto Surface</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> NURBS</li>
                        </ul>
                    </div>
                </div>

                <!-- Software 3: Geomagic for SolidWorks -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="nurbs-soft-card">
                        <img src="<?= $img ?>/software-3.png" alt="Geomagic for SolidWorks" class="nurbs-soft-banner-img">
                        <h3 class="nurbs-soft-name">Geomagic for SolidWorks</h3>
                        <ul class="nurbs-soft-list">
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Perform NURBS inside SolidWorks</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Auto Surface</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> NURBS</li>
                            <li><i class="fa-regular fa-circle-check" style="color: #ff931e;"></i> Seamless Workflow</li>
                        </ul>
                    </div>
                </div>

                <!-- Software 4: Compatible CAD -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="nurbs-soft-card">
                        <div class="nurbs-soft-compatible-col">
                            <h3 class="nurbs-soft-name">Compatible CAD</h3>
                            <div class="nurbs-compatible-logos">
                                <img src="<?= $img ?>/software-5.png" alt="SolidWorks" class="nurbs-cad-logo">
                                <img src="<?= $img ?>/software-6.png" alt="Siemens NX" class="nurbs-cad-logo">
                                <img src="<?= $img ?>/software-7.png" alt="CATIA" class="nurbs-cad-logo">
                                <img src="<?= $img ?>/software-8.png" alt="PTC Creo" class="nurbs-cad-logo">
                            </div>
                            <div class="nurbs-soft-more-text">and more....</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. Recommended Scanners Section
         ========================================================================= -->
    <section class="scan-nurbs-section" id="recommended-scanners">
        <div class="container-fluid px-lg-5 px-3">
            <h2 class="nurbs-scanners-title">INDUSTRIAL 3D SCANNERS FOR SCAN TO NURBS APPLICATIONS</h2>

            <div class="row g-4 align-items-stretch justify-content-center">
                <!-- Scanner 1 -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="nurbs-scanner-card">
                        <h3 class="nurbs-scanner-name">FreeScan Combo</h3>
                        <div class="nurbs-scanner-img-box">
                            <img src="<?= $img ?>/scanner-1.png" alt="FreeScan Combo" class="nurbs-scanner-img">
                        </div>
                        <p class="nurbs-scanner-desc">
                            Precision scanning for engineering and reverse engineering projects.
                        </p>
                        <a href="FreeScan-Combo.php" class="btn-scanner-action">
                            Know More
                        </a>
                    </div>
                </div>

                <!-- Scanner 2 -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="nurbs-scanner-card">
                        <h3 class="nurbs-scanner-name">EinScan Rigil</h3>
                        <div class="nurbs-scanner-img-box">
                            <img src="<?= $img ?>/scanner-2.png" alt="EinScan Rigil" class="nurbs-scanner-img">
                        </div>
                        <p class="nurbs-scanner-desc">
                            Tri-mode 3D scanner for statues and organic shapes.
                        </p>
                        <a href="einscan-rigil.php" class="btn-scanner-action">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         9. Engagement Models Section
         ========================================================================= -->
    <section class="scan-nurbs-section" id="engagement-models">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row g-4 align-items-stretch">
                <!-- OPEX Card -->
                <div class="col-lg-6 col-12">
                    <div class="nurbs-engagement-card opex">
                        <div>
                            <h3 class="nurbs-eng-title">OPEX Service Model</h3>
                            <p class="nurbs-eng-desc">
                                Need NURBS models but don't want to invest in software & equipment? Our engineering team can complete the entire project for you.
                            </p>
                            <div class="nurbs-eng-body-wrap">
                                <div class="nurbs-eng-list-col">
                                    <ul class="nurbs-eng-check-list">
                                        <li><i class="fa-solid fa-check" style="color: #ff931e;"></i> NURBS Surface Models</li>
                                        <li><i class="fa-solid fa-check" style="color: #ff931e;"></i> STEP Files</li>
                                        <li><i class="fa-solid fa-check" style="color: #ff931e;"></i> IGES Files</li>
                                        <li><i class="fa-solid fa-check" style="color: #ff931e;"></i> Hybrid CAD Models</li>
                                        <li><i class="fa-solid fa-check" style="color: #ff931e;"></i> Class-A Surface Models</li>
                                        <li><i class="fa-solid fa-check" style="color: #ff931e;"></i> Reverse Engineered CAD Data</li>
                                    </ul>
                                </div>
                                <div class="nurbs-eng-img-col">
                                    <img src="<?= $img ?>/opex-image.png" alt="OPEX Service Model" class="nurbs-eng-img">
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="3d-services.php" class="btn-eng-solid">
                                OUTSOURCE YOUR PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CAPEX Card -->
                <div class="col-lg-6 col-12">
                    <div class="nurbs-engagement-card capex">
                        <div>
                            <h3 class="nurbs-eng-title">Build Your Own Reverse Engineering Department (CAPEX)</h3>
                            <p class="nurbs-eng-desc">
                                Complete solution to build your in-house capability.
                            </p>
                            <div class="nurbs-eng-body-wrap">
                                <div class="nurbs-eng-list-col">
                                    <ul class="nurbs-eng-disc-list">
                                        <li>Industrial 3D Scanner</li>
                                        <li>Geomagic Design X</li>
                                        <li>Workstation</li>
                                        <li>Installation</li>
                                        <li>Training</li>
                                        <li>Workflow Consulting</li>
                                        <li>Technical Support</li>
                                    </ul>
                                </div>
                                <div class="nurbs-eng-img-col">
                                    <img src="<?= $img ?>/capex-image.png" alt="Build In-House Reverse Engineering Department" class="nurbs-eng-img">
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="3d-products.php" class="btn-eng-solid">
                                BUILD YOUR LAB
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         10. Frequently Asked Questions Section
         ========================================================================= -->
    <section class="scan-nurbs-section" id="faq-section">
        <div class="container-fluid px-lg-5 px-3">
            <h2 class="nurbs-faq-title">FREQUENTLY ASKED QUESTIONS</h2>

            <div class="row g-4">
                <!-- Column 1 -->
                <div class="col-lg-6 col-12">
                    <!-- FAQ 1 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">What is NURBS Modeling?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            NURBS (Non-Uniform Rational B-Splines) modeling is a mathematical representation of 3D geometry that can accurately describe any shape from simple 2D lines, circles, arcs, or curves to the most complex 3D organic freeform surface or solid. It converts faceted mesh (STL) into smooth, editable mathematical surfaces.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="nurbs-faq-item active">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">-</span>
                            <h4 class="nurbs-faq-question">What is the difference between STL and NURBS?</h4>
                        </div>
                        <div class="nurbs-faq-body" style="display: block;">
                            STL is a mesh composed of thousands or millions of flat triangular facets without mathematical smoothness or curvature continuity, making it heavy and hard to modify in standard CAD. NURBS surfaces are mathematically smooth, continuous (G1/G2/G3), lightweight, and fully compatible with downstream CAD/CAM/CAE platforms.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">When should I use NURBS Modeling?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            You should use NURBS modeling when reverse engineering organic, ergonomic, or freeform shapes like automotive body panels, turbine blades, medical prosthetics, ergonomic consumer products, and footwear molds where standard parametric sketching cannot capture complex curves.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">Can NURBS models be modified?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            Yes, NURBS models can be exported to standard CAD packages (SolidWorks, NX, CATIA, Creo) where you can add parametric features, modify control points, trim surfaces, add mounting bosses, holes, flanges, and split core/cavity tooling.
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">Which software is used for Scan to NURBS?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            We primarily use industry-standard reverse engineering software like Geomagic Design X and Geomagic Wrap, alongside CAD suites including SOLIDWORKS, Siemens NX, CATIA, and PTC Creo.
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-6 col-12">
                    <!-- FAQ 6 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">Can vehicle bodies be converted into NURBS models?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            Yes, vehicle exteriors and interior trims are ideal candidates for scan-to-NURBS modeling. High-resolution 3D scan data can be transformed into Class-A or engineering-grade NURBS surface patches with precise tangent and curvature continuity (G1/G2).
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="nurbs-faq-item active">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">-</span>
                            <h4 class="nurbs-faq-question">Can CT scan data be converted into NURBS surfaces?</h4>
                        </div>
                        <div class="nurbs-faq-body" style="display: block;">
                            Industrial CT scanning captures both internal and external geometry. CT scan data can be segmented, reconstructed, and converted into smooth NURBS surfaces for internal channels, manifolds, castings, and medical implants.
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">What file formats are delivered?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            We deliver native CAD files (SolidWorks, NX, CATIA, Creo) or neutral CAD formats including STEP (.stp), IGES (.igs), Parasolid (.x_t), and high-resolution STL files.
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">Can NURBS models be used for CAE or CFD?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            Yes. Unlike raw mesh files which often fail during meshing in simulation tools, NURBS surfaces provide clean watertight geometry ideal for Finite Element Analysis (FEA), Computational Fluid Dynamics (CFD), and aerodynamic simulations.
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="nurbs-faq-item">
                        <div class="nurbs-faq-header">
                            <span class="nurbs-faq-icon">+</span>
                            <h4 class="nurbs-faq-question">Do you provide training and support?</h4>
                        </div>
                        <div class="nurbs-faq-body">
                            Yes, we provide comprehensive end-to-end training, software deployment, scanner calibration, workflow consulting, and dedicated technical support across India.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         11. Contact Section
         ========================================================================= -->
    <section class="scan-nurbs-section bg-tinted-orange" id="contact-nurbs">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row align-items-center">
                <!-- Left: Title, Description, Call & Email Info -->
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <h2 class="nurbs-contact-sec-title">
                        Ready to Convert Scan Data into Engineering-Grade Surface Models?
                    </h2>
                    <p class="nurbs-contact-sec-desc">
                        Whether you need outsourced Scan-to-NURBS services or want to establish a complete in-house reverse engineering workflow, Precise3DM can help.
                    </p>

                    <div class="nurbs-contact-info-row">
                        <a href="tel:+919840478347" class="nurbs-contact-info-card">
                            <div class="nurbs-icon-wrap">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="nurbs-text-wrap">
                                <span class="nurbs-lbl">Call us now</span>
                                <span class="nurbs-str">+91 98404 78347 | +91 63744 06179</span>
                            </div>
                        </a>

                        <a href="mailto:sm@precise3dm.com" class="nurbs-contact-info-card">
                            <div class="nurbs-icon-wrap">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="nurbs-text-wrap">
                                <span class="nurbs-lbl">Email us</span>
                                <span class="nurbs-str">sm@precise3dm.com | sales@precise3dm.com</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Right: 4 Stacked CTA Buttons -->
                <div class="col-lg-6 col-12">
                    <div class="nurbs-contact-btn-stack">
                        <!-- Button 1: Solid Gradient -->
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-contact-orange">
                            Schedule Live Demo
                        </a>

                        <!-- Button 2: Outline Orange with Upload Icon -->
                        <a href="Get-3d-scan-service-quote.php" class="btn-contact-outline">
                            <img src="<?= $img ?>/upload-icon.svg" alt="Upload Icon" class="upload-orange-icon">
                            <span>Upload Scan Data</span>
                        </a>

                        <!-- Button 3: Solid Gradient -->
                        <a href="scanning-solution-form.php" class="btn-contact-orange">
                            Request Technical Review
                        </a>

                        <!-- Button 4: Outline Orange -->
                        <a href="contact-us.php" class="btn-contact-outline">
                            Talk to Reverse Engineering Experts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer End -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>

    <!-- Interactive FAQ Accordion Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqItems = document.querySelectorAll('.nurbs-faq-item');

            faqItems.forEach(function (item) {
                const header = item.querySelector('.nurbs-faq-header');
                const body = item.querySelector('.nurbs-faq-body');
                const icon = item.querySelector('.nurbs-faq-icon');

                header.addEventListener('click', function () {
                    const isActive = item.classList.contains('active');

                    if (isActive) {
                        // Collapse active item
                        item.classList.remove('active');
                        body.style.display = 'none';
                        if (icon) icon.textContent = '+';
                    } else {
                        // Expand item
                        item.classList.add('active');
                        body.style.display = 'block';
                        if (icon) icon.textContent = '-';
                    }
                });
            });
        });
    </script>
</body>

</html>
