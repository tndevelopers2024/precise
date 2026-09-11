<?php
$page_title = "Digital Manufacturing Solutions | Precise3DM";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo $page_title; ?></title>
    
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    
    <!-- page specific css -->
    <link rel="stylesheet" href="assets/css/digital-manufacturing.css">
    
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Hero Section -->
    <section class="dms-hero-section">
        <div class="dms-container">
            <div class="row position-relative">
                
                <!-- Left Column -->
                <div class="col-lg-6 col-md-12 pe-lg-5 position-relative z-2">
                    <h1 class="dms-title">
                        <span class="dms-title-orange">Digital Manufacturing</span>
                        <span class="dms-title-white">Solutions for Every<br>Industry</span>
                    </h1>
                    
                    <h2 class="dms-subtitle">
                        Industrial 3D Scanning | Reverse Engineering | Quality Inspection | Industrial 3D Printing | Engineering Services
                    </h2>
                    
                    <p class="dms-desc">
                        Empowering manufacturers to innovate, optimize and accelerate through advanced digital engineering solutions.
                    </p>
                    
                    <div class="dms-btn-group">
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="dms-btn-primary">Talk to an Expert</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="dms-btn-outline">Book a live demo</a>
                    </div>
                    
                    <!-- Call Contact Block (Mobile/Tablet Only) -->
                    <div class="dms-contact-block d-flex d-lg-none mb-4">
                        <div class="dms-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="dms-contact-text-wrapper">
                            <span class="dms-contact-title">Call us now</span>
                            <span class="dms-contact-links">
                                <a href="tel:+919840478347">+91 98404 78347</a> 
                                <span class="dms-contact-sep">|</span> 
                                <a href="tel:+916374406179">+91 63744 06179</a>
                            </span>
                        </div>
                    </div>

                    <!-- Email Contact Block -->
                    <div class="dms-contact-block">
                        <div class="dms-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="dms-contact-text-wrapper">
                            <span class="dms-contact-title">Email Us</span>
                            <span class="dms-contact-links">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> 
                                <span class="dms-contact-sep">|</span> 
                                <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Cyclical Diagram) -->
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0 position-relative z-2">
                    
                    <!-- Absolute positioned Call block at top right -->
                    <div class="dms-contact-block dms-top-call d-none d-lg-flex">
                        <div class="dms-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="dms-contact-text-wrapper">
                            <span class="dms-contact-title">Call us now</span>
                            <span class="dms-contact-links">
                                <a href="tel:+919840478347">+91 98404 78347</a> 
                                <span class="dms-contact-sep">|</span> 
                                <a href="tel:+916374406179">+91 63744 06179</a>
                            </span>
                        </div>
                    </div>

                    <!-- The Diagram Container -->
                    <div class="dms-diagram-container">
                        
                        <!-- Center Logo -->
                        <div class="dms-center-logo">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/dmsfei-hero-right-center-img.png" alt="Precise3DM Logo">
                        </div>

                        <!-- 4 Orbit Images -->
                        <div class="dms-orbit-item dms-item-top">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/dmsfei-hero-right-top-img.png" alt="Engineering Models">
                        </div>
                        <div class="dms-orbit-item dms-item-right">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/dmsfei-hero-right-right-img.png" alt="Metal Castings">
                        </div>
                        <div class="dms-orbit-item dms-item-bottom">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/dmsfei-hero-right-bottom-img.png" alt="3D Printed Parts">
                        </div>
                        <div class="dms-orbit-item dms-item-left">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/dmsfei-hero-right-left-img.png" alt="Heatmap Inspection">
                        </div>

                        <!-- SVG Arrows -->
                        <svg class="dms-svg-arrows" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <marker id="arrow" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                                    <path d="M 0 0 L 10 5 L 0 10 z" fill="#F7941D" />
                                </marker>
                            </defs>
                            <!-- Top to Right -->
                            <path d="M 393 100 A 220 220 0 0 1 499 207" class="dms-arrow-path" marker-end="url(#arrow)" />
                            <!-- Right to Bottom -->
                            <path d="M 499 393 A 220 220 0 0 1 393 499" class="dms-arrow-path" marker-end="url(#arrow)" />
                            <!-- Bottom to Left -->
                            <path d="M 207 499 A 220 220 0 0 1 100 393" class="dms-arrow-path" marker-end="url(#arrow)" />
                            <!-- Left to Top -->
                            <path d="M 100 207 A 220 220 0 0 1 207 100" class="dms-arrow-path" marker-end="url(#arrow)" />
                        </svg>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CAPEX vs OPEX Section -->
    <section class="dms-compare-section">
        <div class="dms-container">
            <div class="row g-5">
                
                <!-- CAPEX Card -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="dms-card">
                        <div class="dms-card-icon-top">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/capex-icon1.png" alt="CAPEX Box Icon">
                        </div>
                        
                        <h3 class="dms-card-title">Build Your Own Digital Manufacturing<br>Capability (CAPEX)</h3>
                        <p class="dms-card-desc">
                            Invest in world-class 3D scanning hardware, software, 3D printers and training to build in-house capability and long-term value.
                        </p>
                        
                        <div class="dms-icon-row">
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/capex-icon2.png" alt="3D Scanners">
                                <span class="dms-icon-item-label">3D Scanners</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/capex-icon3.png" alt="Software">
                                <span class="dms-icon-item-label">Software</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/capex-icon4.png" alt="3D Printers">
                                <span class="dms-icon-item-label">3D Printers</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/capex-icon5.png" alt="Training">
                                <span class="dms-icon-item-label">Training</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/capex-icon6.png" alt="AMC & Support">
                                <span class="dms-icon-item-label">AMC & Support</span>
                            </div>
                        </div>
                        
                        <a href="3d-products.php" class="dms-btn-outline dms-btn-full">Explore CAPEX Solutions &rarr;</a>
                    </div>
                </div>

                <!-- OPEX Card -->
                <div class="col-lg-6">
                    <div class="dms-card dms-card-opex">
                        <div class="dms-card-icon-top">
                            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/opex-icon1.png" alt="OPEX Gears Icon">
                        </div>
                        
                        <h3 class="dms-card-title">Engineering Services On-Demand<br>(OPEX)</h3>
                        <p class="dms-card-desc">
                            Access expert 3D scanning, reverse engineering and inspection services for your projects&mdash;without upfront equipment investment.
                        </p>
                        
                        <div class="dms-icon-row">
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/opex-icon2.png" alt="3D Scanning">
                                <span class="dms-icon-item-label">3D Scanning</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/opex-icon3.png" alt="Reverse Engineering">
                                <span class="dms-icon-item-label">Reverse<br>Engineering</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/opex-icon4.png" alt="3D Inspection">
                                <span class="dms-icon-item-label">3D Inspection</span>
                            </div>
                            <div class="dms-icon-item">
                                <img src="assets/images/digital-manufacturing-solutions-for-every-industry/opex-icon5.png" alt="CAD Modelling">
                                <span class="dms-icon-item-label">CAD Modelling</span>
                            </div>
                        </div>
                        
                        <a href="3d-services.php" class="dms-btn-outline dms-btn-full">Explore OPEX Services &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="dms-industries-section">
        <div class="dms-container">
            <div class="dms-industries-header">
                <h2 class="dms-industries-title">Industries We Serve</h2>
                <p class="dms-industries-subtitle">Tailored digital manufacturing solutions for diverse industry needs</p>
            </div>
            
            <div class="dms-industry-grid">
                <?php
                $industries = [
                    ['img' => 'inws-img1.png', 'icon' => 'inws-icon1.png', 'name' => 'Automotive'],
                    ['img' => 'inws-img2.png', 'icon' => 'inws-icon2.png', 'name' => 'Auto Components &<br>Tier Suppliers'],
                    ['img' => 'inws-img3.png', 'icon' => 'inws-icon3.png', 'name' => 'Electric Vehicle (EV)'],
                    ['img' => 'inws-img4.png', 'icon' => 'inws-icon4.png', 'name' => 'Railway & Locomotive'],
                    ['img' => 'inws-img5.png', 'icon' => 'inws-icon5.png', 'name' => 'Shipbuilding & Marine'],
                    
                    ['img' => 'inws-img6.png', 'icon' => 'inws-icon6.png', 'name' => 'Aerospace'],
                    ['img' => 'inws-img7.png', 'icon' => 'inws-icon7.png', 'name' => 'Defence'],
                    ['img' => 'inws-img8.png', 'icon' => 'inws-icon8.png', 'name' => 'Medical Device'],
                    ['img' => 'inws-img9.png', 'icon' => 'inws-icon9.png', 'name' => 'Orthopaedic Implant'],
                    ['img' => 'inws-img10.png', 'icon' => 'inws-icon10.png', 'name' => 'Industrial Machinery'],
                    
                    ['img' => 'inws-img11.png', 'icon' => 'inws-icon11.png', 'name' => 'Heavy Engineering'],
                    ['img' => 'inws-img12.png', 'icon' => 'inws-icon12.png', 'name' => 'Construction &<br>Earthmoving Equipment'],
                    ['img' => 'inws-img13.png', 'icon' => 'inws-icon13.png', 'name' => 'Agricultural Machinery'],
                    ['img' => 'inws-img14.png', 'icon' => 'inws-icon14.png', 'name' => 'Material Handling<br>Equipment<br>Manufacturing'],
                    ['img' => 'inws-img15.png', 'icon' => 'inws-icon15.png', 'name' => 'Tool & Die'],
                    
                    ['img' => 'inws-img16.png', 'icon' => 'inws-icon16.png', 'name' => 'Mold'],
                    ['img' => 'inws-img17.png', 'icon' => 'inws-icon17.png', 'name' => 'Foundry & Casting'],
                    ['img' => 'inws-img18.png', 'icon' => 'inws-icon18.png', 'name' => 'Forging'],
                    ['img' => 'inws-img19.png', 'icon' => 'inws-icon19.png', 'name' => 'Plastic Parts'],
                    ['img' => 'inws-img20.png', 'icon' => 'inws-icon20.png', 'name' => 'Sheet Metal & Metal<br>Fabrication'],
                    
                    ['img' => 'inws-img21.png', 'icon' => 'inws-icon21.png', 'name' => 'Electrical Equipment'],
                    ['img' => 'inws-img22.png', 'icon' => 'inws-icon22.png', 'name' => 'Electronics'],
                    ['img' => 'inws-img23.png', 'icon' => 'inws-icon23.png', 'name' => 'Pumps, Valves & Flow<br>Control Equipment<br>Manufacturing'],
                    ['img' => 'inws-img24.png', 'icon' => 'inws-icon24.png', 'name' => 'Energy Equipment &mdash;<br>Wind, Solar & Power<br>Equipment']
                ];
                
                foreach ($industries as $item) {
                    echo '<div class="dms-industry-card">';
                    echo '    <div class="dms-industry-img-wrap">';
                    echo '        <img src="assets/images/digital-manufacturing-solutions-for-every-industry/' . $item['img'] . '" alt="' . strip_tags($item['name']) . '">';
                    echo '        <div class="dms-industry-icon">';
                    echo '            <img src="assets/images/digital-manufacturing-solutions-for-every-industry/' . $item['icon'] . '" alt="Icon">';
                    echo '        </div>';
                    echo '    </div>';
                    echo '    <div class="dms-industry-label">' . $item['name'] . '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            
            <div class="text-center mt-2">
                <a href="handheld-industrial-3d-scanning-service-india.php" class="dms-btn-orange">View All Industries &rarr;</a>
            </div>
            
        </div>
    </section>

    <!-- End-to-End Solutions Section -->
    <section class="dms-etoe-section">
        <div class="dms-container">
            <div class="dms-etoe-banner">
                <div class="dms-etoe-item">
                    <div class="dms-etoe-icon">
                        <img src="assets/images/digital-manufacturing-solutions-for-every-industry/etoe-img.png" alt="Icon">
                    </div>
                    <div class="dms-etoe-text">
                        <h4 class="dms-etoe-title">End-to-End Solutions</h4>
                        <p class="dms-etoe-desc">Hardware, software and services under one roof.</p>
                    </div>
                </div>
                <div class="dms-etoe-item">
                    <div class="dms-etoe-icon">
                        <img src="assets/images/digital-manufacturing-solutions-for-every-industry/etoe-img.png" alt="Icon">
                    </div>
                    <div class="dms-etoe-text">
                        <h4 class="dms-etoe-title">Application Expertise</h4>
                        <p class="dms-etoe-desc">Industry-specific solutions backed by experience.</p>
                    </div>
                </div>
                <div class="dms-etoe-item">
                    <div class="dms-etoe-icon">
                        <img src="assets/images/digital-manufacturing-solutions-for-every-industry/etoe-img.png" alt="Icon">
                    </div>
                    <div class="dms-etoe-text">
                        <h4 class="dms-etoe-title">Advanced Technology</h4>
                        <p class="dms-etoe-desc">Latest 3D scanning & digital engineering technologies.</p>
                    </div>
                </div>
                <div class="dms-etoe-item">
                    <div class="dms-etoe-icon">
                        <img src="assets/images/digital-manufacturing-solutions-for-every-industry/etoe-img.png" alt="Icon">
                    </div>
                    <div class="dms-etoe-text">
                        <h4 class="dms-etoe-title">Pan-India Support</h4>
                        <p class="dms-etoe-desc">Sales, service & application support across India.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="dms-cta-section">
        <div class="dms-container">
            <div class="dms-cta-banner">
                <div class="dms-cta-left">
                    <div class="dms-cta-icon">
                        <img src="assets/images/digital-manufacturing-solutions-for-every-industry/cta-icon.png" alt="Headphones Icon">
                    </div>
                    <div class="dms-cta-text">
                        <h3 class="dms-cta-title">Not Sure Which Solution Is <span>Right for You?</span></h3>
                        <p class="dms-cta-desc">
                            Our application engineers will help you choose the right technology or engineering service based on your application, accuracy requirements, component size, workflow and industry.
                        </p>
                    </div>
                </div>
                <div class="dms-cta-right">
                    <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="dms-cta-btn-primary">Talk to an Expert</a>
                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="dms-cta-btn-outline">Book a Demo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer End -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
