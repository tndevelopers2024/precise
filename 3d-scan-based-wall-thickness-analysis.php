<?php
$page_title = "3D Scan-Based Wall Thickness Analysis | Precise3DM";
$page_desc = "Measure Material Thickness Across Entire Components Without Cutting, Sectioning or Destroying Parts.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="title" content="<?php echo $page_title; ?>"/>
    <meta name="description" content="<?php echo $page_desc; ?>"/>
    
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
       integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
       
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
    
    <!-- page specific css -->
    <link rel="stylesheet" href="assets/css/3d-scan-based-wall-thickness-analysis.css">
</head>

<body>
    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- hero section -->
    <section class="analysis-hero">
        <div class="analysis-container">
            <div class="hero-left">
                <h1>3D Scan-Based <span class="text-orange">Wall<br>Thickness Analysis</span></h1>
                <h3>Measure Material Thickness Across Entire Components<br>Without Cutting, Sectioning or Destroying Parts</h3>
                <p>Using industrial 3D scanners and Geomagic Control X software, engineers can<br>digitally evaluate wall thickness, identify thin sections, excessive material build-up,<br>sink-prone areas, wear zones, casting inconsistencies and manufacturing defects<br>across the entire part.</p>
                
                <div class="hero-buttons">
                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-orange">Schedule Live Demo</a>
                    <a href="Get-3d-scan-service-quote.php" class="btn-orange">Request Inspection Service</a>
                </div>
                
                <div class="hero-features">
                    <div class="feature-item">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/3d-scan-based-hero-left-img1.png" alt="100% Surface Coverage">
                        <span>100% Surface<br>Coverage</span>
                    </div>
                    <div class="feature-item">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/3d-scan-based-hero-left-img2.png" alt="Non-Destructive Measurement">
                        <span>Non-Destructive<br>Measurement</span>
                    </div>
                    <div class="feature-item">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/3d-scan-based-hero-left-img3.png" alt="High Accuracy Results">
                        <span>High Accuracy<br>Results</span>
                    </div>
                    <div class="feature-item">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/3d-scan-based-hero-left-img4.png" alt="Actionable Engineering Insights">
                        <span>Actionable<br>Engineering Insights</span>
                    </div>
                </div>
            </div>
            
            <div class="hero-right">
                <div class="contact-top">
                    <div class="icon-circle">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-info">
                        <span class="title">Call us now</span>
                        <span class="details"><a href="tel:+919840478347" class="contact-link">+91 98404 78347</a> <span class="sep">|</span> <a href="tel:+919025700192" class="contact-link">+91 90257 00192</a> <span class="sep">|</span> <a href="tel:+919940352575" class="contact-link">+91 99403 52575</a></span>
                    </div>
                </div>
                
                <div class="hero-image-wrapper">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/3d-scan-based-hero-right-img.png" alt="3D Scan Based Wall Thickness Analysis" class="main-img">
                </div>
            </div>
        </div>
        
        <div class="hero-bottom-container">
            <div class="hero-bottom-email">
                <div class="icon-circle email-icon-circle">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <span class="title text-dark">Email Us</span>
                    <span class="details text-dark"><a href="mailto:sm@precise3dm.com" class="contact-link">sm@precise3dm.com</a> <span class="sep">|</span> <a href="mailto:service@precise3dm.com" class="contact-link">service@precise3dm.com</a></span>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Wall Thickness Analysis section -->
    <section class="wta-section">
        <div class="wta-container">
            <div class="wta-left">
                <h2>WHAT IS WALL THICKNESS<br>ANALYSIS?</h2>
                <p>Wall Thickness Analysis is a digital inspection process where a high-resolution 3D scan captures the entire geometry of a physical component. Using Geomagic Control X, the software calculates the distance between opposite surfaces and generates a complete wall thickness map throughout the model.</p>
                <ul class="wta-list">
                    <li><i class="fa-solid fa-circle-check"></i> Identify thin & thick areas</li>
                    <li><i class="fa-solid fa-circle-check"></i> Detect manufacturing defects</li>
                    <li><i class="fa-solid fa-circle-check"></i> Optimize material usage</li>
                    <li><i class="fa-solid fa-circle-check"></i> Improve quality and performance</li>
                </ul>
            </div>
            
            <div class="wta-right">
                <div class="wta-card">
                    <h4>Physical Part</h4>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/wta-right-img1.png" alt="Physical Part">
                </div>
                <div class="wta-card">
                    <h4>3D Scan</h4>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/wta-right-img2.png" alt="3D Scan">
                </div>
                <div class="wta-card">
                    <h4>Thickness<br>Calculation</h4>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/wta-right-img3.png" alt="Thickness Calculation">
                </div>
                <div class="wta-card">
                    <h4>Color<br>Thickness Map</h4>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/wta-right-img4.png" alt="Color Thickness Map">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Engineers Use Section -->
    <section class="weuwta-section">
        <div class="weuwta-container">
            <h2 class="weuwta-title">WHY ENGINEERS USE WALL THICKNESS ANALYSIS</h2>
            <div class="weuwta-grid">
                <!-- Card 1 -->
                <div class="weuwta-card">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/weuwta-card1-img.png" alt="100% Surface Inspection">
                    <h4>100% Surface<br>Inspection</h4>
                    <p>Analyze every point across the entire component.</p>
                </div>
                <!-- Card 2 -->
                <div class="weuwta-card">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/weuwta-card2-img.png" alt="Non-Destructive Measurement">
                    <h4>Non-Destructive<br>Measurement</h4>
                    <p>No cutting, sectioning or damaging valuable parts.</p>
                </div>
                <!-- Card 3 -->
                <div class="weuwta-card">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/weuwta-card3-img.png" alt="Detect Manufacturing Defects">
                    <h4>Detect<br>Manufacturing<br>Defects</h4>
                    <p>Identify sink marks, thin areas, porosity and inconsistencies.</p>
                </div>
                <!-- Card 4 -->
                <div class="weuwta-card">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/weuwta-card4-img.png" alt="Improve Product Quality">
                    <h4>Improve Product<br>Quality</h4>
                    <p>Ensure consistent wall thickness and structural integrity.</p>
                </div>
                <!-- Card 5 -->
                <div class="weuwta-card">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/weuwta-card5-img.png" alt="Reduce Material Waste">
                    <h4>Reduce Material<br>Waste</h4>
                    <p>Optimize material distribution and reduce excess weight.</p>
                </div>
                <!-- Card 6 -->
                <div class="weuwta-card">
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/weuwta-card6-img.png" alt="Optimize Product Design">
                    <h4>Optimize Product<br>Design</h4>
                    <p>Make informed design decisions with accurate thickness data.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why The Process Works Section -->
    <section class="wtpw-section">
        <div class="wtpw-container">
            <div class="wtpw-box">
                <h2 class="wtpw-title">WHY THE PROCESS WORKS</h2>
                <div class="wtpw-flow">
                    <!-- Step 1 -->
                    <div class="wtpw-step">
                        <div class="wtpw-number">1</div>
                        <div class="wtpw-card">
                            <div class="img-wrapper"><img src="assets/images/3d-scan-based-wall-thickness-analysis/wtpw-img1.png" alt="Capture Part"></div>
                            <h4>Capture Part</h4>
                            <p>Using 3D scanner<br>High accuracy data<br>capture</p>
                        </div>
                    </div>
                    
                    <div class="wtpw-arrow"><i class="fa-solid fa-angles-right"></i></div>
                    
                    <!-- Step 2 -->
                    <div class="wtpw-step">
                        <div class="wtpw-number">2</div>
                        <div class="wtpw-card">
                            <div class="img-wrapper"><img src="assets/images/3d-scan-based-wall-thickness-analysis/wtpw-img2.png" alt="Generate Mesh"></div>
                            <h4>Generate Mesh</h4>
                            <p>High Resolution<br>Create precise 3D mesh<br>model</p>
                        </div>
                    </div>
                    
                    <div class="wtpw-arrow"><i class="fa-solid fa-angles-right"></i></div>
                    
                    <!-- Step 3 -->
                    <div class="wtpw-step">
                        <div class="wtpw-number">3</div>
                        <div class="wtpw-card">
                            <div class="img-wrapper"><img src="assets/images/3d-scan-based-wall-thickness-analysis/wtpw-img3.png" alt="Run Analysis"></div>
                            <h4>Run Analysis</h4>
                            <p>Wall Thickness<br>Calculate distance<br>between surfaces</p>
                        </div>
                    </div>
                    
                    <div class="wtpw-arrow"><i class="fa-solid fa-angles-right"></i></div>
                    
                    <!-- Step 4 -->
                    <div class="wtpw-step">
                        <div class="wtpw-number">4</div>
                        <div class="wtpw-card">
                            <div class="img-wrapper"><img src="assets/images/3d-scan-based-wall-thickness-analysis/wtpw-img4.png" alt="Thickness Map"></div>
                            <h4>Thickness Map</h4>
                            <p>Color Visualization<br>Generate easy-to-interpret<br>heat map</p>
                        </div>
                    </div>
                    
                    <div class="wtpw-arrow"><i class="fa-solid fa-angles-right"></i></div>
                    
                    <!-- Step 5 -->
                    <div class="wtpw-step">
                        <div class="wtpw-number">5</div>
                        <div class="wtpw-card">
                            <div class="img-wrapper"><img src="assets/images/3d-scan-based-wall-thickness-analysis/wtpw-img5.png" alt="Inspection Report"></div>
                            <h4>Inspection Report</h4>
                            <p>Engineering Report<br>Detailed report with critical<br>insights</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Thickness Color Map Analysis Section -->
    <section class="tcma-section">
        <div class="tcma-container">
            <div class="tcma-grid">
                <!-- Info Card -->
                <div class="tcma-info-card">
                    <h2>THICKNESS COLOR<br>MAP ANALYSIS</h2>
                    <p>Instantly visualize thickness distribution and identify problem areas.</p>
                    
                    <div class="tcma-legend">
                        <div class="tcma-legend-header">Thickness Scale (mm)</div>
                        <ul class="tcma-legend-list">
                            <li><span class="color-box bg-red"></span> Very Thin (&lt; 1.0)</li>
                            <li><span class="color-box bg-yellow"></span> Thin (1.0 - 2.0)</li>
                            <li><span class="color-box bg-green"></span> Nominal (2.0 - 4.0)</li>
                            <li><span class="color-box bg-lightblue"></span> Thick (4.0 - 6.0)</li>
                            <li><span class="color-box bg-darkblue"></span> Excess (&gt; 6.0)</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Image Card 1 -->
                <div class="tcma-card">
                    <h4>Automotive Plastic<br>Component</h4>
                    <div class="tcma-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/tcma-img1.png" alt="Automotive Plastic Component">
                    </div>
                </div>
                
                <!-- Image Card 2 -->
                <div class="tcma-card">
                    <h4>Die Cast<br>Component</h4>
                    <div class="tcma-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/tcma-img2.png" alt="Die Cast Component">
                    </div>
                </div>
                
                <!-- Image Card 3 -->
                <div class="tcma-card">
                    <h4>Injection Molded<br>Part</h4>
                    <div class="tcma-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/tcma-img3.png" alt="Injection Molded Part">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cross Section Analysis Section -->
    <section class="csa-section">
        <div class="csa-container">
            <div class="csa-card">
                <div class="csa-left">
                    <h2>CROSS SECTION ANALYSIS</h2>
                    <p>Create unlimited cross-sections to evaluate internal structures, ribs, transitions, reinforcement zones and material flow.</p>
                    <ul class="csa-list">
                        <li><i class="fa-solid fa-circle-check"></i> Measure thickness at any location</li>
                        <li><i class="fa-solid fa-circle-check"></i> Analyze internal ribs and supports</li>
                        <li><i class="fa-solid fa-circle-check"></i> Evaluate material flow and transitions</li>
                        <li><i class="fa-solid fa-circle-check"></i> Detect wear, erosion and corrosion</li>
                        <li><i class="fa-solid fa-circle-check"></i> Engineering dimensions & annotations</li>
                    </ul>
                </div>
                
                <div class="csa-right">
                    <h4>Sample Cross Section Wall Thickness Values</h4>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/csa-right-img.jpg" alt="Sample Cross Section Wall Thickness Values">
                </div>
            </div>
        </div>
    </section>

    <!-- Software & Scanners Section -->
    <section class="software-scanners-section">
        <div class="ss-container">
            <div class="ss-grid">
                
                <!-- Left Box (Software) -->
                <div class="ss-left-box ss-card">
                    <h2>SOFTWARE USED</h2>
                    
                    <div class="software-highlight">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/su-left-img1.png" alt="Geomagic Control X">
                        <div class="sw-info">
                            <h4>Geomagic Control X</h4>
                            <p>Industry-leading software for scan-to-CAD and scan-to-scan curve comparison.</p>
                        </div>
                    </div>
                    
                    <div class="software-main-img">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/su-left-img2.png" alt="Geomagic Control X Interface">
                    </div>
                    
                    <ul class="software-features">
                        <li><i class="fa-solid fa-circle-check"></i> Wall Thickness Analysis</li>
                        <li><i class="fa-solid fa-circle-check"></i> First Article Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> CAD Comparison</li>
                        <li><i class="fa-solid fa-circle-check"></i> Production Quality Control</li>
                        <li><i class="fa-solid fa-circle-check"></i> Scan to Scan Inspection</li>
                        <li><i class="fa-solid fa-circle-check"></i> SPC Reporting</li>
                        <li><i class="fa-solid fa-circle-check"></i> GD&T Analysis</li>
                    </ul>
                </div>
                
                <!-- Right Box (Scanners) -->
                <div class="ss-right-box ss-card">
                    <h2>RECOMMENDED 3D SCANNERS</h2>
                    
                    <div class="scanners-flex">
                        <!-- Scanner 1 -->
                        <div class="scanner-item">
                            <div class="scanner-img">
                                <img src="assets/images/3d-scan-based-wall-thickness-analysis/su-right-img1.png" alt="AutoScan Inspec 2">
                            </div>
                            <h4>AutoScan Inspec 2</h4>
                            <p>Small Parts<br>Up to 200 mm<br>High Accuracy</p>
                            <a href="automatic-desktop-3d-scanner.php" class="btn-know-more">Know More</a>
                        </div>
                        
                        <!-- Scanner 2 -->
                        <div class="scanner-item">
                            <div class="scanner-img">
                                <img src="assets/images/3d-scan-based-wall-thickness-analysis/su-right-img2.png" alt="OptimScan Q12">
                            </div>
                            <h4>OptimScan Q12</h4>
                            <p>Precision Parts<br>Up to 500 mm<br>High Accuracy</p>
                            <a href="optimscan-q12.php" class="btn-know-more">Know More</a>
                        </div>
                        
                        <!-- Scanner 3 -->
                        <div class="scanner-item">
                            <div class="scanner-img">
                                <img src="assets/images/3d-scan-based-wall-thickness-analysis/su-right-img3.png" alt="FreeScan Combo">
                            </div>
                            <h4>FreeScan Combo</h4>
                            <p>Medium Parts<br>Up to 1000 mm<br>Versatile Use</p>
                            <a href="FreeScan-Combo.php" class="btn-know-more">Know More</a>
                        </div>
                        
                        <!-- Scanner 4 -->
                        <div class="scanner-item">
                            <div class="scanner-img">
                                <img src="assets/images/3d-scan-based-wall-thickness-analysis/su-right-img4.png" alt="FreeScan Omni">
                            </div>
                            <h4>FreeScan Omni</h4>
                            <p>Large Parts<br>Up to 4000 mm<br>High Efficiency</p>
                            <a href="freescan-omni.php" class="btn-know-more">Know More</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Deliverables Section -->
    <section class="deliverables-section">
        <div class="del-container">
            <h2>Deliverables</h2>
            <div class="del-grid">
                <!-- Card 1 -->
                <div class="del-card">
                    <h4>Complete 3D<br>Scan Data</h4>
                    <div class="del-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/deliverables-card1-img.png" alt="Complete 3D Scan Data">
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="del-card">
                    <h4>Inspection<br>Report</h4>
                    <div class="del-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/deliverables-card2-img.png" alt="Inspection Report">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="del-card">
                    <h4>Wall Thickness<br>Deviation<br>(PASS / FAIL)<br>Report</h4>
                    <div class="del-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/deliverables-card3-img.png" alt="Wall Thickness Deviation Report">
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="del-card">
                    <h4>Report<br>(PDF Format)</h4>
                    <div class="del-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/deliverables-card4-img.png" alt="Report (PDF Format)">
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="del-card">
                    <h4>Report<br>(PPT Format)</h4>
                    <div class="del-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/deliverables-card5-img.png" alt="Report (PPT Format)">
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="del-card">
                    <h4>Report<br>(Excel Format)</h4>
                    <div class="del-img-wrap">
                        <img src="assets/images/3d-scan-based-wall-thickness-analysis/deliverables-card6-img.png" alt="Report (Excel Format)">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Options Section -->
    <section class="options-section">
        <div class="opt-container">
            <div class="opt-grid">
                
                <!-- Option 1 -->
                <div class="opt-card opt-capex">
                    <div class="opt-content">
                        <h5>OPTION 1: CAPEX</h5>
                        <h2>BUILD IN-HOUSE CAPABILITY</h2>
                        <ul class="opt-list">
                            <li><i class="fa-solid fa-circle-check"></i> Buy Industrial 3D Scanner</li>
                            <li><i class="fa-solid fa-circle-check"></i> Buy Geomagic Control X Software</li>
                            <li><i class="fa-solid fa-circle-check"></i> Installation & Training</li>
                            <li><i class="fa-solid fa-circle-check"></i> Technical Support</li>
                            <li><i class="fa-solid fa-circle-check"></i> Long Term ROI</li>
                        </ul>
                    </div>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/option-card1-img.png" alt="Build In-House Capability" class="opt-img opt-img1">
                    <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="btn-know-more opt-btn">Talk to Product Expert</a>
                </div>
                
                <!-- Option 2 -->
                <div class="opt-card opt-opex">
                    <div class="opt-content">
                        <h5>OPTION 2: OPEX</h5>
                        <h2>OUTSOURCE AS A SERVICE</h2>
                        <ul class="opt-list">
                            <li><i class="fa-solid fa-circle-check"></i> Send Physical Parts</li>
                            <li><i class="fa-solid fa-circle-check"></i> Onsite or In-House Scanning</li>
                            <li><i class="fa-solid fa-circle-check"></i> Expert Wall Thickness Analysis</li>
                            <li><i class="fa-solid fa-circle-check"></i> Fast Turnaround Time</li>
                            <li><i class="fa-solid fa-circle-check"></i> No Software Investment</li>
                        </ul>
                    </div>
                    <img src="assets/images/3d-scan-based-wall-thickness-analysis/option-card2-img.png" alt="Outsource as a Service" class="opt-img opt-img2">
                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-know-more opt-btn">Request a Quote</a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="analysis-cta-section">
        <div class="cta-container">
            <div class="cta-banner" style="background-image: url('assets/images/3d-scan-based-wall-thickness-analysis/ep-cta-bg-img.png');">
                <h2>Ready to Analyze Wall Thickness with<br>Engineering Precision?</h2>
                <p>Whether you want to build an in-house inspection department or<br>outsource wall thickness analysis, Precise DM can help.</p>
                <div class="cta-buttons">
                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-primary-orange">Schedule Live Demo</a>
                    <a href="Get-3d-scan-service-quote.php" class="btn-outline-white">Request Inspection Service</a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer End -->
    
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- custom js -->
    <script src="assets/js/script.js"></script>
</body>
</html>
