<?php
$page_title = "3D Scan-Based Surface Damage Inspection | Precise3DM";
$meta_description = "Automatically Detect, Measure and Report Surface Damage from High-Accuracy 3D Scan Data.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="title" content="<?php echo $page_title; ?>"/>
    <meta name="description" content="<?php echo $meta_description; ?>"/>
    
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
    
    <!-- page specific css -->
    <link rel="stylesheet" href="assets/css/3d-scan-based-surface-damage-inspection.css?v=1.0">
</head>
<body>
    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- hero section -->
    <section class="sdi-hero-section">
        <!-- Right Info (Full bleed) -->
        <div class="sdi-hero-right">
            <!-- Telephone Contact over image -->
            <div class="sdi-top-call-contact">
                <div class="contact-icon call-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="contact-info call-info">
                    <span class="contact-label">Call us now</span>
                    <div class="contact-links-group">
                        <a href="tel:+919840478347" class="contact-link">+91 98404 78347</a> 
                        <span class="divider">|</span> 
                        <a href="tel:+919025700192" class="contact-link">+91 90257 00192</a>
                        <span class="divider">|</span> 
                        <a href="tel:+919940352575" class="contact-link">+91 99403 52575</a>
                    </div>
                </div>
            </div>

            <img src="assets/images/3d-scan-based-surface-damage-inspection/3dsbsdi-hero-right-bg-img.png" alt="3D Scan-Based Surface Damage Inspection" class="hero-main-img">
        </div>

        <div class="sdi-container">
            <div class="sdi-hero-layout">
                <!-- Left Info -->
                <div class="sdi-hero-left">
                    <h1 class="hero-title">
                        3D Scan-Based Surface<br>
                        <span class="text-orange">Damage Inspection</span>
                    </h1>
                    
                    <div class="hero-subtitle">
                        Automatically Detect, Measure and Report Surface<br>Damage from High-Accuracy 3D Scan Data.
                    </div>

                    <p class="hero-desc">Inspect dents, impacts, scratches, deformations and rework<br>areas using industrial 3D scanning, automated comparison<br>algorithms and intelligent reporting.</p>

                    <div class="hero-cta-buttons">
                        <a href="#" class="btn-sdi-orange">Book a Live Demo</a>
                        <a href="#" class="btn-sdi-orange">Get Sample Report</a>
                        <a href="#" class="btn-sdi-orange">Get Quote</a>
                    </div>

                    <!-- Email Contact at bottom left -->
                    <div class="bottom-email-contact">
                        <div class="contact-icon email-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info email-info">
                            <span class="contact-label">Email Us</span>
                            <div class="contact-links-group">
                                <a href="mailto:sm@precise3dm.com" class="contact-link">sm@precise3dm.com</a>
                                <span class="divider">|</span>
                                <a href="mailto:service@precise3dm.com" class="contact-link">service@precise3dm.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Traditional Inspection Fails Section -->
    <section class="wtif-section section-padding">
        <div class="sdi-container">
            <div class="wtif-header text-center">
                <h2 class="wtif-main-title">Why Traditional Inspection Fails</h2>
            </div>
            
            <div class="wtif-grid">
                <!-- Traditional Inspection Card -->
                <div class="wtif-card card-traditional">
                    <div class="wtif-card-content">
                        <h3 class="wtif-card-title">Traditional Inspection</h3>
                        <ul class="wtif-list">
                            <li><i class="fa-solid fa-circle-xmark"></i> Visual inspection</li>
                            <li><i class="fa-solid fa-circle-xmark"></i> Manual gauges</li>
                            <li><i class="fa-solid fa-circle-xmark"></i> Operator dependent</li>
                            <li><i class="fa-solid fa-circle-xmark"></i> Time consuming</li>
                            <li><i class="fa-solid fa-circle-xmark"></i> Inconsistent results</li>
                            <li><i class="fa-solid fa-circle-xmark"></i> Cannot measure complex dents</li>
                            <li><i class="fa-solid fa-circle-xmark"></i> Limited documentation</li>
                        </ul>
                    </div>
                    <div class="wtif-card-image">
                        <img src="assets/images/3d-scan-based-surface-damage-inspection/wtif-img1.png" alt="Traditional Inspection">
                    </div>
                </div>
                
                <!-- Modern 3D Inspection Card -->
                <div class="wtif-card card-modern">
                    <div class="wtif-card-content">
                        <h3 class="wtif-card-title">Modern 3D Inspection</h3>
                        <ul class="wtif-list">
                            <li><i class="fa-solid fa-circle-check"></i> Complete digital surface</li>
                            <li><i class="fa-solid fa-circle-check"></i> Automatic dent isolation</li>
                            <li><i class="fa-solid fa-circle-check"></i> Repeatable inspection</li>
                            <li><i class="fa-solid fa-circle-check"></i> Professional reports</li>
                            <li><i class="fa-solid fa-circle-check"></i> Digital traceability</li>
                            <li><i class="fa-solid fa-circle-check"></i> Accurate depth measurement</li>
                            <li><i class="fa-solid fa-circle-check"></i> Millions of measurement points</li>
                        </ul>
                    </div>
                    <div class="wtif-card-image">
                        <img src="assets/images/3d-scan-based-surface-damage-inspection/wtif-img2.png" alt="Modern 3D Inspection">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Can We Detect Section -->
    <section class="wcwd-section section-padding">
        <div class="sdi-container">
            <div class="wcwd-header text-center">
                <h2 class="wtif-main-title">What Can We Detect?</h2>
            </div>
            
            <div class="wcwd-grid">
                <!-- Card 1 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img1.png" alt="Aircraft Dents"></div>
                    <div class="wcwd-card-text">Aircraft Dents</div>
                </div>
                <!-- Card 2 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img2.png" alt="Impact Damage"></div>
                    <div class="wcwd-card-text">Impact Damage</div>
                </div>
                <!-- Card 3 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img3.png" alt="Surface Depressions"></div>
                    <div class="wcwd-card-text">Surface Depressions</div>
                </div>
                <!-- Card 4 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img4.png" alt="Composite Deformation"></div>
                    <div class="wcwd-card-text">Composite<br>Deformation</div>
                </div>
                <!-- Card 5 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img5.png" alt="Wrinkles"></div>
                    <div class="wcwd-card-text">Wrinkles</div>
                </div>
                <!-- Card 6 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img6.png" alt="Buckling"></div>
                    <div class="wcwd-card-text">Buckling</div>
                </div>
                <!-- Card 7 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img7.png" alt="Panel Distortion"></div>
                    <div class="wcwd-card-text">Panel Distortion</div>
                </div>
                <!-- Card 8 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img8.png" alt="Manufacturing Defects"></div>
                    <div class="wcwd-card-text">Manufacturing<br>Defects</div>
                </div>
                <!-- Card 9 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img9.png" alt="Rework Regions"></div>
                    <div class="wcwd-card-text">Rework Regions</div>
                </div>
                <!-- Card 10 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img10.png" alt="Grinding Defects"></div>
                    <div class="wcwd-card-text">Grinding Defects</div>
                </div>
                <!-- Card 11 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img11.png" alt="Surface Waviness"></div>
                    <div class="wcwd-card-text">Surface<br>Waviness</div>
                </div>
                <!-- Card 12 -->
                <div class="wcwd-card">
                    <div class="wcwd-card-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/wcwd-img12.png" alt="Scratches"></div>
                    <div class="wcwd-card-text">Scratches</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="diwf-section section-padding">
        <div class="sdi-container">
            <div class="diwf-header text-center">
                <h2 class="wtif-main-title">3D Scan-Based Surface Damage Inspection Workflow</h2>
            </div>
            
            <div class="diwf-process-wrap">
                <!-- Step 1 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">1</div>
                    <h3 class="diwf-step-title">Scan Physical<br>Surface</h3>
                    <p class="diwf-step-desc">Capture accurate 3D<br>data using industrial<br>scanners</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img1.png" alt="Scan Physical Surface"></div>
                </div>
                <!-- Step 2 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">2</div>
                    <h3 class="diwf-step-title">Generate High<br>Resolution Mesh</h3>
                    <p class="diwf-step-desc">Create high-density<br>mesh for precise<br>analysis</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img2.png" alt="Generate Mesh"></div>
                </div>
                <!-- Step 3 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">3</div>
                    <h3 class="diwf-step-title">Select Damage<br>Region</h3>
                    <p class="diwf-step-desc">Engineer selects<br>damaged area of<br>interest</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img3.png" alt="Select Region"></div>
                </div>
                <!-- Step 4 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">4</div>
                    <h3 class="diwf-step-title">Automatically<br>Create Reference<br>Surface</h3>
                    <p class="diwf-step-desc">Damaged region is<br>referenced to build<br>reference mesh</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img4.png" alt="Create Reference"></div>
                </div>
                <!-- Step 5 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">5</div>
                    <h3 class="diwf-step-title">Compare Both<br>Meshes</h3>
                    <p class="diwf-step-desc">Input mesh compared<br>with reference mesh<br>to find deviations</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img5.png" alt="Compare Meshes"></div>
                </div>
                <!-- Step 6 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">6</div>
                    <h3 class="diwf-step-title">Automatically<br>Isolate Damage</h3>
                    <p class="diwf-step-desc">Damage is isolated<br>based on tolerance<br>settings</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img6.png" alt="Isolate Damage"></div>
                </div>
                <!-- Step 7 -->
                <div class="diwf-step-card">
                    <div class="diwf-step-number">7</div>
                    <h3 class="diwf-step-title">Measure &<br>GenerateReport</h3>
                    <p class="diwf-step-desc">Extract accurate<br>measurements<br>instantly</p>
                    <div class="diwf-step-img"><img src="assets/images/3d-scan-based-surface-damage-inspection/diwf-img7.png" alt="Generate Report"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inspection Parameters Section -->
    <section class="ipvp-section section-padding">
        <div class="sdi-container">
            <div class="ipvp-header text-center">
                <h2 class="wtif-main-title">Inspection Parameters We Provide</h2>
            </div>
            
            <div class="ipvp-wrap">
                <!-- Card 1 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img1.png" alt="Dent Length" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Dent Length</div>
                    <div class="ipvp-card-sub">0.644 mm</div>
                </div>
                <!-- Card 2 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img2.png" alt="Dent Width" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Dent Width</div>
                    <div class="ipvp-card-sub">0.098 mm</div>
                </div>
                <!-- Card 3 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img3.png" alt="Max Depth" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Max Depth</div>
                    <div class="ipvp-card-sub">0.001 mm</div>
                </div>
                <!-- Card 4 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img4.png" alt="Affected Area" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Affected Area</div>
                    <div class="ipvp-card-sub">245.03 mm&sup2;</div>
                </div>
                <!-- Card 5 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img5.png" alt="Volume Loss" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Volume Loss</div>
                    <div class="ipvp-card-sub">0.2159 mm&sup3;</div>
                </div>
                <!-- Card 6 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img6.png" alt="Max Position" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Max Position</div>
                    <div class="ipvp-card-sub">(0.2450,-0.0002)</div>
                </div>
                <!-- Card 7 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img7.png" alt="Distance from Datum" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Distance from<br>Datum</div>
                    <div class="ipvp-card-sub">15 mm</div>
                </div>
                <!-- Card 8 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img8.png" alt="Tolerance" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Tolerance</div>
                    <div class="ipvp-card-sub">&plusmn;0.05 mm</div>
                </div>
                <!-- Card 9 -->
                <div class="ipvp-card">
                    <img src="assets/images/3d-scan-based-surface-damage-inspection/ipvp-img9.png" alt="Result" class="ipvp-card-icon">
                    <div class="ipvp-card-title">Result</div>
                    <div class="ipvp-card-sub">PASS</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CAPEX and OPEX Section -->
    <section class="capex-opex-section section-padding">
        <div class="sdi-container">
            <div class="co-grid">
                <!-- Capex Card -->
                <div class="co-card co-capex">
                    <div class="co-card-inner">
                        <div class="co-subheading">CAPEX SOLUTIONS</div>
                        <h2 class="co-title">Build Your Own 3D Surface Damage Inspection Facility</h2>
                        <div class="co-content-wrapper">
                            <img src="assets/images/3d-scan-based-surface-damage-inspection/cpex-img.png" alt="Capex Solution" class="co-img-float">
                            <ul class="co-list">
                                <li><i class="fa-solid fa-circle-check"></i> FreeScan Omni for detailed surface scanning</li>
                                <li><i class="fa-solid fa-circle-check"></i> Geomagic Control X inspection software</li>
                                <li><i class="fa-solid fa-circle-check"></i> FreeScan Trak Nova for large components and structures</li>
                                <li><i class="fa-solid fa-circle-check"></i> Complete training, installation and workflow implementation</li>
                                <li><i class="fa-solid fa-circle-check"></i> Detect dents, deformation, wear, corrosion and surface damage</li>
                                <li><i class="fa-solid fa-circle-check"></i> Generate colour deviation maps and dimensional inspection reports</li>
                            </ul>
                        </div>
                    </div>
                    <div class="co-card-footer">
                        <a href="#" class="btn-sdi-orange co-btn">Book a Live 3D Scanning & Inspection Demo</a>
                    </div>
                </div>

                <!-- Opex Card -->
                <div class="co-card co-opex">
                    <div class="co-card-inner">
                        <div class="co-subheading">OPEX SOLUTIONS</div>
                        <h2 class="co-title">Outsource 3D Surface Damage Inspection to Precise3DM</h2>
                        <div class="co-content-wrapper">
                            <img src="assets/images/3d-scan-based-surface-damage-inspection/opex-img.png" alt="Opex Solution" class="co-img-float">
                            <ul class="co-list">
                                <li><i class="fa-solid fa-circle-check"></i> On-site and off-site 3D scanning services</li>
                                <li><i class="fa-solid fa-circle-check"></i> Dent, deformation, wear and corrosion assessment</li>
                                <li><i class="fa-solid fa-circle-check"></i> Surface deviation and damage-depth measurement</li>
                                <li><i class="fa-solid fa-circle-check"></i> Comparison against CAD data or reference scans</li>
                                <li><i class="fa-solid fa-circle-check"></i> Colour-mapped inspection reports using Control X</li>
                                <li><i class="fa-solid fa-circle-check"></i> Periodic inspection and damage-progression monitoring</li>
                            </ul>
                        </div>
                    </div>
                    <div class="co-card-footer">
                        <a href="#" class="btn-sdi-orange co-btn">Get Quote a 3D Surface Damage Inspection Service</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer end -->
    
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
