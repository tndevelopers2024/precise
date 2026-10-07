<?php
session_start();
ini_set("upload_max_filesize", "40000M");
ini_set("post_max_size", "40000M");
ini_set("max_input_time", 300000);
ini_set("max_execution_time", "-1");
$page_title =
    "3D Scan-Based New Product Development Solutions™ | Precise3DM";
$meta_description =
    "Design new products around existing forms with 3D scan-based product development solutions from Precise3DM. Turn physical products into the foundation for your new product development.";
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
    <meta name="keywords" content="3D scan-based product development, design new products around existing forms, 3D scanning product development, reverse engineering for product development, automotive aftermarket 3d scan to cad, precise3dm">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />

    <!-- Open Graph & Twitter Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $page_title ?>" />
    <meta property="og:description" content="<?= $meta_description ?>" />
    <meta property="og:image" content="assets/images/3d-scan-based-new-product-development-solutions/3dsbnpds-hero-banner-image.png" />
    <meta property="og:url" content="https://www.precise3dm.com/3d-scan-based-new-product-development-solutions.php" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@precise3d_m" />
    <meta name="twitter:title" content="<?= $page_title ?>" />
    <meta name="twitter:description" content="<?= $meta_description ?>" />
    <meta name="twitter:image" content="assets/images/3d-scan-based-new-product-development-solutions/3dsbnpds-hero-banner-image.png" />

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
    <link rel="stylesheet" href="assets/css/3d-scan-based-new-product-development-solutions.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <!-- Site Header -->
    <?php include "includes/header.php"; ?>

    <!-- =========================================================================
         Hero Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="npd-hero-section">
        <div class="container-fluid npd-container">
            
            <!-- Top Right Contact (Desktop View) -->
            <div class="row d-none d-lg-flex">
                <div class="col-12 npd-top-contact-wrapper">
                    <div class="npd-top-contact">
                        <div class="npd-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="npd-contact-info text-start">
                            <div class="npd-contact-title">Call us now</div>
                            <div class="npd-contact-links">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center pb-4">
                <!-- Left Side Content: Title, Subtitle, Description, Action Buttons & Email Widget -->
                <div class="col-lg-7 col-xl-6">
                    <!-- Main Title -->
                    <h1 class="npd-hero-title">
                        3D Scan-Based <span class="text-orange">New<br>Product Development<br>Solutions™</span>
                    </h1>

                    <!-- Tagline / Subtitle -->
                    <h2 class="npd-hero-subtitle">Design New Products Around Existing Forms.</h2>

                    <!-- Description -->
                    <p class="npd-hero-desc">Turn existing physical products into the foundation for your New product development.</p>

                    <!-- Action Buttons -->
                    <div class="npd-hero-buttons d-flex flex-wrap align-items-center">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-hero-orange">Book a Live Demo</a>
                        <a href="get-quote-for-3D-scanning-service.php" class="btn-hero-orange">Request Quote</a>
                    </div>

                    <!-- Bottom Email Contact Widget -->
                    <div class="npd-bottom-contact">
                        <div class="npd-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="npd-contact-info text-start">
                            <div class="npd-contact-title">Email us</div>
                            <div class="npd-contact-links">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Call Us Now (Mobile / Tablet View) -->
                    <div class="npd-top-contact d-flex d-lg-none mt-4">
                        <div class="npd-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="npd-contact-info text-start">
                            <div class="npd-contact-title">Call us now</div>
                            <div class="npd-contact-links">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Column (Kept clear so background artwork & collage display cleanly) -->
                <div class="col-lg-5 col-xl-6">
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         Real World Section: Concept & 4-Step Process (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="npd-real-world-section">
        <div class="container-fluid npd-container">
            
            <!-- Top Part: Question Copy + Featured Visual -->
            <div class="row align-items-center g-4 g-lg-5 mb-5 pb-3">
                <!-- Left Column: Problem Statement & Value Proposition -->
                <div class="col-lg-6">
                    <h2 class="rw-main-title">
                        Do you want to develop a new product based on an existing product, component, environment, or physical form?
                    </h2>
                    <p class="rw-paragraph">
                        <strong class="text-orange">Precise3DM 3D Scan-Based Product Development</strong> helps you capture the exact geometry of an existing physical object and use that 3D data as the foundation for designing a new product.
                    </p>
                    <p class="rw-paragraph mb-0">
                        Simply provide the <span class="text-orange fw-semibold">physical product, component, anatomical model, or 3D scan data, along with your new-product idea</span>. We can scan the existing geometry, create an accurate digital reference, develop the required CAD model, and help transform the concept into a manufacturable product.
                    </p>
                </div>

                <!-- Right Column: Visual Product Development Showcase Image -->
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="rw-image-wrapper">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/rw-img.png" 
                             alt="3D Scan-Based Product Development Around Existing Forms" 
                             class="img-fluid rw-featured-image">
                    </div>
                </div>
            </div>

            <!-- Middle Section Headline -->
            <div class="row">
                <div class="col-12 text-center my-4 py-2">
                    <h3 class="rw-center-headline">
                        Start with the real world.<br>
                        Capture its geometry. Design the next product around it.
                    </h3>
                </div>
            </div>

            <!-- Bottom Workflow: 4 Cards with Chevron Connectors -->
            <div class="row">
                <div class="col-12">
                    <div class="rw-process-grid">
                        
                        <!-- Step 1 Card: Capture -->
                        <div class="rw-card">
                            <div class="rw-card-icon">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/rw-icon1.png" 
                                     alt="Capture physical object" 
                                     class="img-fluid">
                            </div>
                            <h4 class="rw-card-title">Capture</h4>
                            <p class="rw-card-subtitle">Physical object</p>
                        </div>

                        <!-- Step Connector 1 -->
                        <div class="rw-connector">
                            <span class="rw-chevron-badge">
                                <i class="fa-solid fa-angles-right"></i>
                            </span>
                        </div>

                        <!-- Step 2 Card: Use the 3D Data -->
                        <div class="rw-card">
                            <div class="rw-card-icon">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/rw-icon2.png" 
                                     alt="Use the 3D Data" 
                                     class="img-fluid">
                            </div>
                            <h4 class="rw-card-title">Use the 3D Data</h4>
                            <p class="rw-card-subtitle">Scan data</p>
                        </div>

                        <!-- Step Connector 2 -->
                        <div class="rw-connector">
                            <span class="rw-chevron-badge">
                                <i class="fa-solid fa-angles-right"></i>
                            </span>
                        </div>

                        <!-- Step 3 Card: Design New Product -->
                        <div class="rw-card">
                            <div class="rw-card-icon">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/rw-icon3.png" 
                                     alt="Design New Product" 
                                     class="img-fluid">
                            </div>
                            <h4 class="rw-card-title">Design New Product</h4>
                            <p class="rw-card-subtitle">Improve & innovate</p>
                        </div>

                        <!-- Step Connector 3 -->
                        <div class="rw-connector">
                            <span class="rw-chevron-badge">
                                <i class="fa-solid fa-angles-right"></i>
                            </span>
                        </div>

                        <!-- Step 4 Card: Manufacture -->
                        <div class="rw-card">
                            <div class="rw-card-icon">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/rw-icon4.png" 
                                     alt="Manufacture" 
                                     class="img-fluid">
                            </div>
                            <h4 class="rw-card-title">Manufacture</h4>
                            <p class="rw-card-subtitle">Production</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         Workflow Section: 5-Step Process (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="npd-workflow-section">
        <div class="container-fluid npd-container">
            
            <!-- Section Header -->
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="wf-main-title">
                        Workflow for 3D Scan-Based New Product Development
                    </h2>
                </div>
            </div>

            <!-- Workflow 5 Cards Row -->
            <div class="row">
                <div class="col-12">
                    <div class="wf-cards-container">
                        
                        <!-- Step 1 Card -->
                        <div class="wf-card">
                            <span class="wf-step-badge">1</span>
                            <div class="wf-card-image">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/wf-img1.png" 
                                     alt="3D Scan Existing Object" 
                                     class="img-fluid">
                            </div>
                            <h3 class="wf-card-title">3D Scan Existing Object</h3>
                            <p class="wf-card-desc">
                                Capture accurate geometry of the physical object using industrial 3D scanning.
                            </p>
                        </div>

                        <!-- Connector 1 -->
                        <div class="wf-connector">
                            <span class="wf-chevron-badge">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>

                        <!-- Step 2 Card -->
                        <div class="wf-card">
                            <span class="wf-step-badge">2</span>
                            <div class="wf-card-image">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/wf-img2.png" 
                                     alt="Import & Process Scan Data" 
                                     class="img-fluid">
                            </div>
                            <h3 class="wf-card-title">Import & Process Scan Data</h3>
                            <p class="wf-card-desc">
                                Import the scan data into dedicated reverse engineering software to use as a foundation for the new design
                            </p>
                        </div>

                        <!-- Connector 2 -->
                        <div class="wf-connector">
                            <span class="wf-chevron-badge">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>

                        <!-- Step 3 Card -->
                        <div class="wf-card">
                            <span class="wf-step-badge">3</span>
                            <div class="wf-card-image">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/wf-img3.png" 
                                     alt="Create Parametric CAD Model" 
                                     class="img-fluid">
                            </div>
                            <h3 class="wf-card-title">Create Parametric CAD Model</h3>
                            <p class="wf-card-desc">
                                Use the as-built scan data as a reference to create a clean, fully editable parametric CAD model. Sketch Sweep and Extrusion Paths with Bending Radii using a clearance path.
                            </p>
                        </div>

                        <!-- Connector 3 -->
                        <div class="wf-connector">
                            <span class="wf-chevron-badge">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>

                        <!-- Step 4 Card -->
                        <div class="wf-card">
                            <span class="wf-step-badge">4</span>
                            <div class="wf-card-image">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/wf-img4.png" 
                                     alt="Improve, Redesign & Innovate" 
                                     class="img-fluid">
                            </div>
                            <h3 class="wf-card-title">Improve, Redesign & Innovate</h3>
                            <p class="wf-card-desc">
                                Analyse, improve, redesign, or develop new product concepts based on the parametric model.
                            </p>
                        </div>

                        <!-- Connector 4 -->
                        <div class="wf-connector">
                            <span class="wf-chevron-badge">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>

                        <!-- Step 5 Card -->
                        <div class="wf-card">
                            <span class="wf-step-badge">5</span>
                            <div class="wf-card-image">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/wf-img5.png" 
                                     alt="Manufacture & Deploy" 
                                     class="img-fluid">
                            </div>
                            <h3 class="wf-card-title">Manufacture & Deploy</h3>
                            <p class="wf-card-desc">
                                Finalise the design, manufacture the part, and use it in real-world applications.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         Use Cases Section: Typical Application Use Cases (Exact Design Match)
         ========================================================================= -->
    <section class="npd-use-cases-section">
        <div class="container-fluid npd-container">
            
            <!-- Section Header with Orange Accent Bar -->
            <div class="row">
                <div class="col-12 text-center mb-5 pb-2">
                    <h2 class="uc-main-title">Typical Application Use Cases</h2>
                    <div class="uc-title-bar"></div>
                </div>
            </div>

            <!-- 2x2 Use Cases Grid with Robust Column and Row Gaps -->
            <div class="uc-grid">
                
                <!-- Use Case 1: Existing Product -> New Product -->
                <div class="uc-card">
                    <div class="uc-card-image-box">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/uc-img1.png" 
                             alt="Existing Product to New Product" 
                             class="uc-card-img">
                    </div>
                    <div class="uc-card-content">
                        <span class="uc-badge">Existing Product &rarr; New Product</span>
                        <h3 class="uc-card-title">Existing Product &rarr;<br>New Product</h3>
                        <p class="uc-card-desc">
                            Scan an existing product and use its geometry to design a new component, accessory, replacement, or improved product.
                        </p>
                    </div>
                </div>

                <!-- Use Case 2: Scan -> Custom-Fit Product -->
                <div class="uc-card">
                    <div class="uc-card-image-box">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/uc-img2.png" 
                             alt="Scan to Custom-Fit Product" 
                             class="uc-card-img">
                    </div>
                    <div class="uc-card-content">
                        <span class="uc-badge">Scan &rarr; Custom-Fit Product</span>
                        <h3 class="uc-card-title">Scan &rarr; Custom-Fit<br>Product</h3>
                        <p class="uc-card-desc">
                            Scan the existing surface or environment and design a product specifically to fit it.
                            <span class="uc-example">Example: Scan a car floor &rarr; design a custom-fit car mat.</span>
                        </p>
                    </div>
                </div>

                <!-- Use Case 3: Existing Component -> Redesigned Product -->
                <div class="uc-card">
                    <div class="uc-card-image-box">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/uc-img3.png" 
                             alt="Existing Component to Redesigned Product" 
                             class="uc-card-img">
                    </div>
                    <div class="uc-card-content">
                        <span class="uc-badge">Existing Component &rarr; Redesigned Product</span>
                        <h3 class="uc-card-title">Existing Component &rarr;<br>Redesigned Product</h3>
                        <p class="uc-card-desc">
                            Capture an existing component, and use it as a reference for a new or improved design.
                        </p>
                    </div>
                </div>

                <!-- Use Case 4: CT Scan -> Medical Implant -->
                <div class="uc-card">
                    <div class="uc-card-image-box">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/uc-img4.png" 
                             alt="CT Scan to Medical Implant" 
                             class="uc-card-img">
                    </div>
                    <div class="uc-card-content">
                        <span class="uc-badge">CT Scan &rarr; Medical Implant</span>
                        <h3 class="uc-card-title">CT Scan &rarr; Medical<br>Implant</h3>
                        <p class="uc-card-desc">
                            Import CT scan data into medical modelling software, reconstruct the patient’s anatomy, and design a patient-specific implant or surgical solution.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         Software We Use Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="npd-software-section">
        <div class="container-fluid npd-container">
            
            <!-- Section Header -->
            <div class="row">
                <div class="col-12 text-center mb-5 pb-2">
                    <h2 class="sw-main-title">Software We Use</h2>
                    <p class="sw-subtitle">The right tools for the right applications.</p>
                    <div class="sw-title-bar"></div>
                </div>
            </div>

            <!-- 3 Software Cards Grid -->
            <div class="sw-grid">
                
                <!-- Card 1: Geomagic Design X -->
                <div class="sw-card">
                    <div class="sw-card-body">
                        <!-- Header with Dx Icon and Title -->
                        <div class="sw-card1-header">
                            <div class="sw-dx-icon-wrapper">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon1.png" 
                                     alt="Geomagic Design X" 
                                     class="sw-dx-icon">
                            </div>
                            <h3 class="sw-card-title text-start mb-0">Geomagic Design X</h3>
                        </div>

                        <!-- Description -->
                        <p class="sw-card-desc mt-3">
                            Create parametric CAD models from scan data and transfer the history to your CAD systems such as:
                        </p>

                        <!-- CAD Systems Icons Row -->
                        <div class="sw-icons-row my-3">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon2.png" alt="Creo / Generic CAD" class="sw-cad-icon">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon3.png" alt="SolidWorks" class="sw-cad-icon">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon4.png" alt="Siemens NX" class="sw-cad-icon">
                        </div>

                        <!-- Sub-caption -->
                        <p class="sw-dumb-solids-label">Or export dumb solids in:</p>

                        <!-- File Formats Icons Row -->
                        <div class="sw-icons-row mb-4">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon5.png" alt="STEP" class="sw-cad-icon">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon6.png" alt="IGES" class="sw-cad-icon">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card1-icon7.png" alt="Parasolid X_T" class="sw-cad-icon">
                        </div>
                    </div>

                    <!-- Button CTA -->
                    <div class="sw-card-footer">
                        <a href="reverse-engineering-geomagic-design-x.php" class="btn-sw-orange">
                            Geomagic Design X &rarr;
                        </a>
                    </div>
                </div>

                <!-- Card 2: ExactFlat -->
                <div class="sw-card text-center">
                    <div class="sw-card-body d-flex flex-column align-items-center">
                        <!-- Top ExactFlat Logo / Visual Banner -->
                        <div class="sw-exactflat-img-wrapper mb-3">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card2-icon.png" 
                                 alt="ExactFlat" 
                                 class="sw-exactflat-logo">
                        </div>

                        <!-- Software Title -->
                        <h3 class="sw-card-title text-center mb-2">ExactFlat</h3>

                        <!-- Subtitle -->
                        <h4 class="sw-card-subtitle mb-2">
                            Dedicated flattening software for scan data.
                        </h4>

                        <!-- Description -->
                        <p class="sw-card-desc text-center">
                            Import scan data, create surfaces and flatten them for pattern making.
                        </p>
                    </div>

                    <!-- Button CTA -->
                    <div class="sw-card-footer">
                        <a href="exactflat.php" class="btn-sw-orange">
                            ExactFlat &rarr;
                        </a>
                    </div>
                </div>

                <!-- Card 3: Geomagic Freeform -->
                <div class="sw-card text-center">
                    <div class="sw-card-body d-flex flex-column align-items-center">
                        <!-- Top Freeform Brand Logo -->
                        <div class="sw-freeform-img-wrapper mb-3">
                            <img src="assets/images/3d-scan-based-new-product-development-solutions/sw-card3-icon.png" 
                                 alt="Geomagic Freeform Logo" 
                                 class="sw-freeform-logo">
                        </div>

                        <!-- Software Title -->
                        <h3 class="sw-card-title text-center mb-3">
                            Geomagic<br>Freeform
                        </h3>

                        <!-- Description -->
                        <p class="sw-card-desc text-center">
                            Import CT scans or human body scans and design new medical devices and NPD solutions for healthcare applications.
                        </p>
                    </div>

                    <!-- Button CTA -->
                    <div class="sw-card-footer">
                        <a href="geomagic-freeform-3d-modelling-design-software.php" class="btn-sw-orange">
                            Geomagic Freeform &rarr;
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         Scanners We Use Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="npd-scanners-section">
        <div class="container-fluid npd-container">
            
            <!-- Section Header -->
            <div class="row">
                <div class="col-12 text-center mb-5 pb-2">
                    <h2 class="sc-main-title">Scanners We Use</h2>
                    <p class="sc-subtitle">We choose the right scanner for your project.</p>
                    <div class="sc-title-bar"></div>
                </div>
            </div>

            <!-- Row 1: Two White Scanner Category Cards -->
            <div class="sc-scanner-grid mb-5">
                
                <!-- Scanner Card 1: Professional Grade 3D Scanners -->
                <div class="sc-card">
                    <div class="sc-card-img-wrapper">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/scwu-img1.png" 
                             alt="Professional Grade 3D Scanners" 
                             class="sc-card-img">
                    </div>
                    <div class="sc-card-content">
                        <h3 class="sc-card-title">Professional Grade 3D Scanners</h3>
                        <p class="sc-card-desc">
                            For applications requiring flexible and efficient 3D scanning.
                        </p>
                    </div>
                    <div class="sc-card-footer">
                        <a href="professional-3d-scanners.php" class="btn-sc-orange">
                            Professional Grade 3D Scanners &rarr;
                        </a>
                    </div>
                </div>

                <!-- Scanner Card 2: Metrology-Grade Scanners -->
                <div class="sc-card">
                    <div class="sc-card-img-wrapper">
                        <img src="assets/images/3d-scan-based-new-product-development-solutions/scwu-img2.png" 
                             alt="Metrology-Grade Scanners" 
                             class="sc-card-img">
                    </div>
                    <div class="sc-card-content">
                        <h3 class="sc-card-title">Metrology-Grade Scanners</h3>
                        <p class="sc-card-desc">
                            For high-accuracy engineering, inspection and reverse-engineering applications.
                        </p>
                    </div>
                    <div class="sc-card-footer">
                        <a href="metrology-grade-3d-scanners.php" class="btn-sc-orange">
                            Metrology-Grade Scanners &rarr;
                        </a>
                    </div>
                </div>

            </div>

            <!-- Row 2: CAPEX and OPEX Solutions Dark Cards -->
            <div class="sc-solutions-grid">
                
                <!-- Solution Card 1: CAPEX SOLUTIONS (Deep Navy) -->
                <div class="sc-sol-card sc-capex-card">
                    <div class="sc-sol-content-wrap">
                        <div class="sc-sol-badge">CAPEX SOLUTIONS</div>
                        <h3 class="sc-sol-title">
                            Build Your Own Product<br class="d-none d-sm-inline">Development Laboratory
                        </h3>
                        
                        <div class="sc-sol-body-flex">
                            <!-- Checklist -->
                            <ul class="sc-checklist">
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Industrial 3D Scanners (Handheld to Metrology)</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Geomagic Design X Software</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Reverse Engineering Systems</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Portable Metrology Solutions</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Professional Metrology-Grade Scanners</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Training, Installation & Implementation</span>
                                </li>
                            </ul>

                            <!-- Visual Graphic -->
                            <div class="sc-sol-image-box">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/capex-img.png" 
                                     alt="Build Your Own Product Development Lab" 
                                     class="img-fluid sc-sol-img">
                            </div>
                        </div>
                    </div>

                    <!-- Button CTA -->
                    <div class="sc-sol-footer">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-sc-orange">
                            Book Live Scanner & Software Demo
                        </a>
                    </div>
                </div>

                <!-- Solution Card 2: OPEX SOLUTIONS (Dark Forest Teal) -->
                <div class="sc-sol-card sc-opex-card">
                    <div class="sc-sol-content-wrap">
                        <div class="sc-sol-badge">OPEX SOLUTIONS</div>
                        <h3 class="sc-sol-title">
                            Outsource Complete Product<br class="d-none d-sm-inline">Development to Precise3DM
                        </h3>
                        
                        <div class="sc-sol-body-flex">
                            <!-- Checklist -->
                            <ul class="sc-checklist">
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Product Development Services</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Scan-to-CAD Engineering</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Reverse Engineering Projects</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Industrial Design Services</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Manufacturing Support</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>Rapid Prototyping & Validation</span>
                                </li>
                            </ul>

                            <!-- Visual Graphic -->
                            <div class="sc-sol-image-box">
                                <img src="assets/images/3d-scan-based-new-product-development-solutions/opex-img.png" 
                                     alt="Outsource Product Development to Precise3DM" 
                                     class="img-fluid sc-sol-img">
                            </div>
                        </div>
                    </div>

                    <!-- Button CTA -->
                    <div class="sc-sol-footer">
                        <a href="get-quote-for-3D-scanning-service.php" class="btn-sc-orange">
                            Request Curvature Analysis Service
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         Call to Action (CTA) Banner Section (Exact Match to Design Reference)
         ========================================================================= -->
    <section class="npd-cta-section">
        <div class="container npd-cta-container text-center">
            
            <!-- Headline with Orange Accent -->
            <h2 class="cta-banner-title">
                Have a Physical Product<br>
                You Want to Turn Into <span class="text-orange">Something New?</span>
            </h2>

            <!-- Subtitle -->
            <p class="cta-banner-subtitle">
                Let's discuss your project. Our engineers are here to help.
            </p>

            <!-- Action Buttons -->
            <div class="cta-banner-buttons d-flex flex-wrap justify-content-center align-items-center">
                <a href="get-quote-for-3D-scanning-service.php" class="btn-cta-orange">
                    Start Your Project &rarr;
                </a>
                <a href="contact-us.php" class="btn-cta-outline">
                    Talk to an Engineer
                </a>
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
