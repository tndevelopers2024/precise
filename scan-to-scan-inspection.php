<?php
$page_title = "Scan-to-Scan Inspection | Precise3DM";
$meta_description = "When CAD data is unavailable, Scan-to-Scan Inspection compares two scanned objects to identify shape deviation, deformation, wear, and dimensional changes with high accuracy.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">

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

    <!-- Page-Specific CSS -->
    <link rel="stylesheet" href="assets/css/scan-to-scan-inspection.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>

    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- 1. Hero Section -->
    <section class="s2s-hero position-relative">
        <!-- Top Right Phone -->
        <div class="s2s-hero-top-bar d-flex justify-content-end align-items-center">
            <div class="d-flex align-items-center s2s-contact-box">
                <img src="assets/images/vehicle-occupant-and-architecture-intelligence/Phone-icon.png" alt="Phone" class="s2s-contact-icon">
                <div class="ms-3 text-start">
                    <div class="s2s-contact-title">Call us now</div>
                    <div class="s2s-contact-details">
                        <a href="tel:+919840478347">+91 98404 78347</a> <span class="divider">|</span> <a href="tel:+916374406179">+91 63744 06179</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4" style="padding: 0 5%;">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1>SCAN-TO-SCAN INSPECTION</h1>
                    <h3>Compare Reality Against Reality</h3>
                    <p>When CAD data is unavailable, Scan-to-Scan Inspection compares two scanned objects to identify shape deviation, deformation, wear, and dimensional changes with high accuracy.</p>

                    <div class="d-flex flex-wrap gap-3" style="gap: 12px;">
                        <a href="scan-to-cad-service.php" class="s2s-btn-primary">REQUEST SCAN-TO-SCAN STUDY</a>
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="s2s-btn-primary">TALK TO AN EXPERT</a>
                    </div>

                    <!-- Bottom Left Email -->
                    <div class="s2s-email-box s2s-contact-box d-flex align-items-center">
                        <img src="assets/images/vehicle-occupant-and-architecture-intelligence/mail-logo.png" alt="Email" class="s2s-contact-icon">
                        <div class="ms-3 text-start">
                            <div class="s2s-contact-title">Email Us</div>
                            <div class="s2s-contact-details">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> <span class="divider">|</span> <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. What is Scan to Scan Inspection? -->
    <section class="s2s-section what-is-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title text-center mb-5">What is Scan-to-Scan Inspection?</h2>
            <div class="row align-items-stretch g-4">
                <div class="col-lg-6">
                    <div class="s2s-what-is-card-left h-100 p-4 p-md-5">
                        <p>Scan-to-Scan Inspection is a 3D
                            measurement technique that compares two
                            scanned objects to identify dimensional and
                            shape differences.</p>
                        <p class="mb-0">One scan is treated as the reference
                            condition, while the second scan represents
                            the test condition. Advanced software aligns
                            both datasets and calculates deviations
                            across the entire surface.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="s2s-what-is-card-right h-100 p-4 p-md-4 d-flex align-items-center justify-content-center">
                        <div class="what-is-grid w-100">
                            <!-- Titles -->
                            <h6 class="what-is-item-title what-is-title-1 text-center m-0">Reference Scan</h6>
                            <h6 class="what-is-item-title what-is-title-2 text-center m-0">Test Scan</h6>
                            <h6 class="what-is-item-title what-is-title-3 text-center m-0">Comparison Result</h6>
                            
                            <!-- Images -->
                            <img src="assets/images/scan-to-scan-inpsection/what-1.png" alt="Reference Scan" class="what-is-img what-is-img-1">
                            
                            <div class="what-is-arrow what-is-arrow-1">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            
                            <img src="assets/images/scan-to-scan-inpsection/what-2.png" alt="Test Scan" class="what-is-img what-is-img-2">
                            
                            <div class="what-is-arrow what-is-arrow-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            
                            <img src="assets/images/scan-to-scan-inpsection/what-3.png" alt="Comparison Result" class="what-is-img what-is-img-3 img-scale-up">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. How the Scan to Scan Comparison Works -->
    <section class="s2s-section how-it-works">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title text-center mb-5">How the Scan-to-Scan <span>Comparison Works</span></h2>
            <div class="how-steps-wrapper">
                
                <div class="how-step-card">
                    <div class="step-badge">1</div>
                    <img src="assets/images/scan-to-scan-inpsection/how-1.png" alt="Scan Reference" class="img-fluid how-step-img">
                    <div class="how-step-content">
                        <h4 class="how-step-title">Scan Reference</h4>
                        <p class="how-step-text">Capture the 3D data of the master or baseline object.</p>
                    </div>
                </div>
                
                <div class="how-step-arrow">
                    <div class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                
                <div class="how-step-card">
                    <div class="step-badge">2</div>
                    <img src="assets/images/scan-to-scan-inpsection/how-2.png" alt="Scan Test Object" class="img-fluid how-step-img">
                    <div class="how-step-content">
                        <h4 class="how-step-title">Scan Test Object</h4>
                        <p class="how-step-text">Capture the 3D data of the secondary or worn object.</p>
                    </div>
                </div>
                
                <div class="how-step-arrow">
                    <div class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                
                <div class="how-step-card">
                    <div class="step-badge">3</div>
                    <img src="assets/images/scan-to-scan-inpsection/how-3.png" alt="Align Both Scans" class="img-fluid how-step-img">
                    <div class="how-step-content">
                        <h4 class="how-step-title">Align Both Scans</h4>
                        <p class="how-step-text">Overlay the two point clouds using advanced alignment algorithms.</p>
                    </div>
                </div>
                
                <div class="how-step-arrow">
                    <div class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                
                <div class="how-step-card">
                    <div class="step-badge">4</div>
                    <img src="assets/images/scan-to-scan-inpsection/how-4.png" alt="Generate Deviation Map" class="img-fluid how-step-img">
                    <div class="how-step-content">
                        <h4 class="how-step-title">Generate Deviation Map</h4>
                        <p class="how-step-text">Visualize the differences through a color-coded 3D map.</p>
                    </div>
                </div>
                
                <div class="how-step-arrow">
                    <div class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                
                <div class="how-step-card">
                    <div class="step-badge">5</div>
                    <img src="assets/images/scan-to-scan-inpsection/how-5.png" alt="Analyze Results" class="img-fluid how-step-img">
                    <div class="how-step-content">
                        <h4 class="how-step-title">Analyze Results</h4>
                        <p class="how-step-text">Extract actionable data like volume loss and deformation vectors.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 4. Common Applications -->
    <section class="s2s-section common-apps" style="background: #f6f6fa;">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title text-center mb-5">Common <span>Applications</span></h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="app-card">
                        <div class="app-card-left">
                            <h4 class="text-uppercase">Load Testing & Deformation Analysis</h4>
                            <p>Compare a part before and after applying load to understand deformation and movement.</p>
                        </div>
                        <div class="app-card-right">
                            <img src="assets/images/scan-to-scan-inpsection/application-1.png" alt="Load Testing & Deformation Analysis">
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="app-card">
                        <div class="app-card-left">
                            <h4 class="text-uppercase">Wear & Material Loss Analysis</h4>
                            <p>Measure wear patterns and material loss on turbine blades, molds tools, and machine components.</p>
                        </div>
                        <div class="app-card-right">
                            <img src="assets/images/scan-to-scan-inpsection/application-2.png" alt="Wear & Material Loss Analysis">
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="app-card">
                        <div class="app-card-left">
                            <h4 class="text-uppercase">Crash & Impact Studies</h4>
                            <p>Analyze components before and after crash or impact testing to evaluate damage and displacement.</p>
                        </div>
                        <div class="app-card-right">
                            <img src="assets/images/scan-to-scan-inpsection/application-3.png" alt="Crash & Impact Studies">
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="app-card">
                        <div class="app-card-left">
                            <h4 class="text-uppercase">Thermal Distortion Analysis</h4>
                            <p>Study distortion and shape changes due to temperature variations and thermal expansion.</p>
                        </div>
                        <div class="app-card-right">
                            <img src="assets/images/scan-to-scan-inpsection/application-4.png" alt="Manufacturing Variation Analysis">
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="app-card">
                        <div class="app-card-left">
                            <h4 class="text-uppercase">Manufacturing Variation Analysis</h4>
                            <p>Compare parts from different batches to monitor process drift, tool wear, and production consistency.</p>
                        </div>
                        <div class="app-card-right">
                            <img src="assets/images/scan-to-scan-inpsection/application-5.png" alt="Research & Development">
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="app-card">
                        <div class="app-card-left">
                            <h4 class="text-uppercase">Research &amp; Development</h4>
                            <p>Support R&amp;D and academic research with accurate shape comparison and experimental analysis.</p>
                        </div>
                        <div class="app-card-right">
                            <img src="assets/images/scan-to-scan-inpsection/application-6.png" alt="Quality Control & Assurance">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Deliverables -->
    <section class="s2s-section deliverables-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title text-center mb-5">Deliverables</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="deliverable-card">
                        <div class="deliverable-content">
                            <h4>Color Deviation Maps</h4>
                            <p>Visual representation of dimensional changes.</p>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/deliverables-1.png" alt="Color Deviation Maps">
                    </div>
                </div>
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="deliverable-card">
                        <div class="deliverable-content">
                            <h4>Cross-Section Analysis</h4>
                            <p>Detailed profile comparison reports.</p>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/deliverables-2.png" alt="Cross-Section Analysis">
                    </div>
                </div>
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="deliverable-card">
                        <div class="deliverable-content">
                            <h4>Deformation &amp; Displacement Studies</h4>
                            <p>Movement and structural change analysis.</p>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/deliverables-3.png" alt="Deformation Studies">
                    </div>
                </div>
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="deliverable-card">
                        <div class="deliverable-content">
                            <h4>Volume Change Analysis</h4>
                            <p>Material addition or material loss calculations.</p>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/deliverables-4.png" alt="Volume Change Analysis">
                    </div>
                </div>
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="deliverable-card">
                        <div class="deliverable-content">
                            <h4>Engineering Reports</h4>
                            <p>Porfessional PDF reports for validation and decision making.</p>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/deliverables-5.png" alt="Engineering Reports">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Scanners We Use -->
    <section class="s2s-section scanners-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title">Scanners We Use</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>FreeScan Omni</h4>
                        <p>Wireless Metrology-Grade 3D Scanner</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-1.png" alt="FreeScan Omni">
                        <a href="freescan-omni.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>FreeScan UE Pro 2</h4>
                        <p>Industrial Handheld Laser Scanner</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-2.png" alt="FreeScan UE Pro 2">
                        <a href="freescan-ue-pro2.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>FreeScan Combo</h4>
                        <p>High-Speed Blue Laser Scanner</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-3.png" alt="FreeScan Combo">
                        <a href="FreeScan-Combo.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>OptimScan 5M Plus</h4>
                        <p>Precision Structured-Light Scanner</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-4.png" alt="OptimScan 5M Plus">
                        <a href="optimscan-5m-plus.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>OptimScan Q12</h4>
                        <p>Industrial Optical Measurement System</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-5.png" alt="OptimScan Q12">
                        <a href="optimscan-q12.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>FreeScan Track Nova</h4>
                        <p>Large-Scale Dynamic Tracking Scanner</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-6.png" alt="FreeScan Track Nova">
                        <a href="freescan-track-nova.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="scanner-card">
                        <h4>LiDAR Systems</h4>
                        <p>Infrastructure and Large Object Scanning</p>
                        <img src="assets/images/scan-to-scan-inpsection/scanner-7.png" alt="LiDAR Systems">
                        <a href="lidar-scanners.php" class="scanner-btn mt-3">Know More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Software We Use -->
    <section class="s2s-section software-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title">Software We Use</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="software-card">
                        <h4>Geomagic Control X</h4>
                        <p>Advanced 3D Inspection Software</p>
                        <img src="assets/images/scan-to-scan-inpsection/software-1.png" alt="Geomagic Control X">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="software-card">
                        <h4>Geomagic Wrap</h4>
                        <p>Mesh Processing &amp; Analysis Software</p>
                        <img src="assets/images/scan-to-scan-inpsection/software-2.png" alt="Geomagic Wrap">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="software-card">
                        <h4>Shining3D Inspect</h4>
                        <p>Industrial Inspection Software</p>
                        <img src="assets/images/scan-to-scan-inpsection/software-3.png" alt="Shining3D Inspect">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="software-card">
                        <h4>PolyWorks Inspection</h4>
                        <p>Professional Metrology Platform</p>
                        <img src="assets/images/scan-to-scan-inpsection/software-4.png" alt="PolyWorks">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Invest / Outsource Section -->
    <section class="invest-outsource">
        <div class="container-fluid" style="padding:0 5%;">
            <div class="row g-4">
                <div class="col-md-6 py-3">
                    <div class="io-card invest-card">
                        <div class="io-content">
                            <h3>INVEST IN YOUR OWN SOLUTION (CAPEX)</h3>
                            <p>Purchase a complete SCAN-TO-SCAN INSPECTION for your in-house metrology requirements.</p>
                            <ul class="io-list">
                                <li><i class="fas fa-check-circle"></i> Metrology Grade 3D Scanner</li>
                                <li><i class="fas fa-check-circle"></i> Inspection Software</li>
                                <li><i class="fas fa-check-circle"></i> Training &amp; Installation</li>
                                <li><i class="fas fa-check-circle"></i> Technical Support</li>
                            </ul>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/invest-bg.png" alt="Invest in your own solution">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="io-btn">Book Live Scanner &amp; Software Demo</a>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="io-card outsource-card">
                        <div class="io-content">
                            <h3>OUTSOURCE AS A SERVICE (OPEX)</h3>
                            <p>Let our experts handle your scanning, SCAN-TO-SCAN INSPECTION, and reporting so your team can focus on engineering and manufacturing.</p>
                            <ul class="io-list">
                                <li><i class="fas fa-check-circle"></i> SCAN REFERENCE</li>
                                <li><i class="fas fa-check-circle"></i> SCAN TEST OBJECT</li>
                                <li><i class="fas fa-check-circle"></i> ALIGN BOTH SCANS</li>
                                <li><i class="fas fa-check-circle"></i> GENERATE DEVIATION MAP</li>
                                <li><i class="fas fa-check-circle"></i> Inspection Reports</li>
                            </ul>
                        </div>
                        <img src="assets/images/scan-to-scan-inpsection/outsource-bg.png" alt="Outsource as a service">
                        <a href="Get-3d-scan-service-quote.php" class="io-btn">Request Scan to Scan Inspection Service</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Service, Software, or Complete Solution -->
    <section class="s2s-section choices-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="s2s-title">Service, Software, or <span>Complete Solution</span> — Your Choice</h2>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="choice-card">
                        <img src="assets/images/scan-to-scan-inpsection/choice-1.png" alt="Scan-to-Scan Inspection Service">
                        <h4>Scan-to-Scan Inspection Service</h4>
                        <p>Send us your part or invite our team onsite. We perform scanning, comparison, analysis, and reporting.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="choice-card">
                        <img src="assets/images/scan-to-scan-inpsection/choice-2.png" alt="Purchase a 3D Scanner">
                        <h4>Purchase a 3D Scanner</h4>
                        <p>Deploy your own in-house Scan-to-Scan workflow with metrology-grade hardware.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="choice-card">
                        <img src="assets/images/scan-to-scan-inpsection/choice-3.png" alt="Software Implementation">
                        <h4>Software Implementation</h4>
                        <p>Implement advanced inspection capabilities using industry-leading software solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="choice-card">
                        <img src="assets/images/scan-to-scan-inpsection/choice-4.png" alt="Complete Turnkey Solution">
                        <h4>Complete Turnkey Solution</h4>
                        <p>Scanner + Software + Training + Engineering Support<br>A complete ecosystem for your measurement and inspection needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Final CTA Section -->
    <section class="s2s-section cta-section" id="contact">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="cta-title">NO CAD MODEL?<br>NO PROBLEM.</h2>
                    <p class="cta-desc">Perform accurate Scan-to-Scan Inspection, Deformation Analysis, Wear Studies, and Shape Comparison using industrial-grade 3D scanning technology.</p>

                    <div class="cta-contacts">
                        <div class="cta-contact-block">
                            <div class="cta-contact-icon">
                                <img src="assets/images/scan-to-scan-inpsection/phone-icon.png" alt="Phone">
                            </div>
                            <div class="cta-contact-text">
                                <h5>Call us now</h5>
                                <p><a href="tel:+919840478347" class="contact-link">+91 98404 78347</a> | <a href="tel:+916374406179" class="contact-link">+91 63744 06179</a></p>
                            </div>
                        </div>
                        <div class="cta-contact-block">
                            <div class="cta-contact-icon">
                                <img src="assets/images/scan-to-scan-inpsection/mail-logo.png" alt="Email">
                            </div>
                            <div class="cta-contact-text">
                                <h5>Email us</h5>
                                <p><a href="mailto:sm@precise3dm.com" class="contact-link">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com" class="contact-link">sales@precise3dm.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-buttons">
                        <a href="scan-to-cad-service.php" class="cta-btn">REQUEST A SCAN-TO-SCAN STUDY</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="cta-btn">BOOK A LIVE DEMO OF SOFTWARE</a>
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="cta-btn cta-btn-outline">TALK TO A 3D INSPECTION EXPERT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer End -->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>