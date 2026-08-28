<?php
$page_title = "CT Scan to 3D CAD Modeling | Precise3DM";
$meta_description = "Convert CT Scan Data and Segmented Mesh Models into Fully Editable CAD Models for Manufacturing, Product Development, and more.";
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
    <link rel="stylesheet" href="assets/css/ct-scan-to-3d-cad-modeling.css?v=1.0">
</head>
<body>
    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- hero section -->
    <section class="ct3d-hero-section">
        <div class="ct3d-container">
            <div class="ct3d-hero-layout">
                <!-- Left Info -->
                <div class="ct3d-hero-left">
                    <h1 class="hero-title">
                        <span class="text-white">CT Scan to</span><br>
                        <span class="text-orange">3D CAD Modeling</span>
                    </h1>
                    
                    <p class="hero-desc">Convert CT Scan Data and Segmented Mesh Models into<br>Fully Editable CAD Models for Manufacturing, Product<br>Development, Medical Devices, Aerospace Components,<br>Tooling, and Reverse Engineering Applications.</p>

                    <div class="hero-cta-buttons">
                        <a href="#" class="btn-ct3d-orange outline">Book a Live Demo</a>
                        <a href="#" class="btn-ct3d-orange solid">Request Quote</a>
                    </div>

                    <!-- Email Contact at bottom left -->
                    <div class="bottom-email-contact">
                        <div class="contact-icon email-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info email-info">
                            <span class="contact-label">Email Us</span>
                            <div class="contact-links-group">
                                <a href="mailto:sm@precise3dm.com" class="contact-link text-white">sm@precise3dm.com</a>
                                <span class="divider">|</span>
                                <a href="mailto:service@precise3dm.com" class="contact-link text-white">service@precise3dm.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Info -->
                <div class="ct3d-hero-right">
                    <!-- Telephone Contact at top right -->
                    <div class="ct3d-top-call-contact">
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

                    <img src="assets/images/ct-scan-to-3d-cad-modeling/3dcadm-hero-right-img.png" alt="CT Scan to 3D CAD Modeling" class="hero-main-img">
                </div>
            </div>
        </div>
    </section>

    <!-- What is CT Scan Section -->
    <section class="whatis-ct-section section-padding">
        <div class="ct3d-container">
            <div class="whatis-ct-layout">
                <!-- Left Image -->
                <div class="whatis-left">
                    <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcad-left-img.png" alt="CT Scanner">
                </div>

                <!-- Center Content -->
                <div class="whatis-center">
                    <h2 class="whatis-title">What is <span class="text-orange">CT Scan to CAD?</span></h2>
                    <p class="whatis-desc">Industrial CT scanners capture both internal and external geometry of components using X-ray technology. The data is reconstructed into a 3D volume, segmented to isolate the part, and converted into a mesh model. This mesh is then used to create an accurate, editable CAD model.</p>
                    
                    <div class="whatis-features-grid">
                        <div class="feature-item">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcad-center-img1.png" alt="Icon 1" class="feature-icon">
                            <span class="feature-text">Capture hidden<br>internal features</span>
                        </div>
                        <div class="feature-item">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcad-center-img2.png" alt="Icon 2" class="feature-icon">
                            <span class="feature-text">Non-destructive<br>inspection</span>
                        </div>
                        <div class="feature-item">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcad-center-img3.png" alt="Icon 3" class="feature-icon">
                            <span class="feature-text">High accuracy<br>and detail</span>
                        </div>
                        <div class="feature-item">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcad-center-img4.png" alt="Icon 4" class="feature-icon">
                            <span class="feature-text">Supports complex<br>assemblies</span>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="whatis-right">
                    <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcad-right-img.png" alt="CAD Model">
                </div>
            </div>
        </div>
    </section>

    <!-- CT Scan Data to CAD Process Flow Section -->
    <section class="fcts-cad-section section-padding">
        <div class="ct3d-container">
            <div class="fcts-header text-center">
                <h2 class="fcts-main-title">From CT Scan Data to <span class="text-orange">Engineering CAD</span></h2>
            </div>
            
            <div class="fcts-process-wrap">
                <!-- Step 1 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img1.png" alt="CT Scanning"></div>
                    <h3 class="fcts-step-title">CT<br>Scanning</h3>
                    <p class="fcts-step-desc">Capture the<br>component using<br>an industrial CT<br>scanner.</p>
                </div>
                
                <div class="fcts-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                
                <!-- Step 2 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img2.png" alt="Volumetric Reconstruction"></div>
                    <h3 class="fcts-step-title">Volumetric<br>Reconstruction<br>& Segmentation</h3>
                    <p class="fcts-step-desc">Generate a 3D<br>volume from X-<br>ray slices.</p>
                </div>
                
                <div class="fcts-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                
                <!-- Step 3 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img3.png" alt="STL Mesh Generation"></div>
                    <h3 class="fcts-step-title">STL Mesh<br>Generation</h3>
                    <p class="fcts-step-desc">Create a high-<br>resolution mesh<br>model.</p>
                </div>
                
                <div class="fcts-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                
                <!-- Step 4 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img4.png" alt="Mesh Optimization"></div>
                    <h3 class="fcts-step-title">Mesh<br>Optimization</h3>
                    <p class="fcts-step-desc">Clean and optimize<br>the mesh for<br>accurate modeling.</p>
                </div>
                
                <div class="fcts-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                
                <!-- Step 5 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img5.png" alt="Feature Recognition"></div>
                    <h3 class="fcts-step-title">Feature<br>Recognition</h3>
                    <p class="fcts-step-desc">Detect design<br>intent & engineering<br>features.</p>
                </div>
                
                <div class="fcts-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                
                <!-- Step 6 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img6.png" alt="Parametric CAD Modeling"></div>
                    <h3 class="fcts-step-title">Parametric<br>CAD Modeling</h3>
                    <p class="fcts-step-desc">Build editable<br>CAD models with<br>parametric<br>features.</p>
                </div>
                
                <div class="fcts-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                
                <!-- Step 7 -->
                <div class="fcts-step-card">
                    <div class="fcts-img-wrap"><img src="assets/images/ct-scan-to-3d-cad-modeling/fcts-img7.png" alt="Manufacturing Outputs"></div>
                    <h3 class="fcts-step-title">Manufacturing<br>Outputs</h3>
                    <p class="fcts-step-desc">Export CAD<br>formats ready for<br>manufacturing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CT Scan vs 3D Scanning Section -->
    <section class="ct-vs-3d-section section-padding">
        <div class="ct3d-container">
            <div class="vs-header text-center">
                <h2 class="vs-main-title">CT Scan vs <span class="text-orange">3D Scanning</span></h2>
            </div>
            
            <div class="vs-comparison-card">
                <!-- Left Side: CT Scan -->
                <div class="vs-left-side">
                    <div class="vs-content-box">
                        <h3 class="vs-title">CT Scan</h3>
                        <ul class="vs-feature-list">
                            <li><i class="fa-solid fa-circle-check"></i> Captures internal and external geometry</li>
                            <li><i class="fa-solid fa-circle-check"></i> Captures hidden channels and cavities</li>
                            <li><i class="fa-solid fa-circle-check"></i> Works with assembled components</li>
                            <li><i class="fa-solid fa-circle-check"></i> Detects porosity and internal defects</li>
                            <li><i class="fa-solid fa-circle-check"></i> Measures wall thickness</li>
                            <li><i class="fa-solid fa-circle-check"></i> Ideal for reverse engineering</li>
                        </ul>
                    </div>
                    <div class="vs-image-wrap">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctvs3d-left-img.png" alt="CT Scan Component">
                    </div>
                </div>
                
                <!-- Divider -->
                <div class="vs-divider">
                    <div class="vs-line"></div>
                    <div class="vs-circle">VS</div>
                </div>
                
                <!-- Right Side: 3D Scanning -->
                <div class="vs-right-side">
                    <div class="vs-image-wrap">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctvs3d-right-img.png" alt="3D Scanned Component">
                    </div>
                    <div class="vs-content-box">
                        <h3 class="vs-title">3D Scanning</h3>
                        <ul class="vs-feature-list">
                            <li><i class="fa-solid fa-circle-check"></i> Captures external geometry only</li>
                            <li><i class="fa-solid fa-circle-check"></i> Faster scanning process</li>
                            <li><i class="fa-solid fa-circle-check"></i> Lower cost</li>
                            <li><i class="fa-solid fa-circle-check"></i> Best for surface inspection</li>
                            <li><i class="fa-solid fa-circle-check"></i> Ideal for large object digitization</li>
                            <li><i class="fa-solid fa-circle-check"></i> Not suitable for internal features</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Where is CT Scan Used Section -->
    <section class="wct-used-section section-padding">
        <div class="ct3d-container">
            <div class="wct-header text-center">
                <h2 class="wct-main-title">Where is <span class="text-orange">CT Scan to CAD Used?</span></h2>
            </div>
            
            <div class="wct-grid">
                <!-- Card 1 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img1.png" alt="Medical Devices"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Medical Devices</h3>
                        <p class="wct-desc">Implants, prosthetics, and patient-specific solutions.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img2.png" alt="Aerospace"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Aerospace</h3>
                        <p class="wct-desc">Turbine blades, castings, and critical components.</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img3.png" alt="Automotive"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Automotive</h3>
                        <p class="wct-desc">Engine parts, housings, and transmission components.</p>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img4.png" alt="Injection Molding"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Injection Molding</h3>
                        <p class="wct-desc">Plastic parts, housings, and consumer products.</p>
                    </div>
                </div>
                
                <!-- Card 5 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img5.png" alt="Additive Manufacturing"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Additive Manufacturing</h3>
                        <p class="wct-desc">Lattice structures, conformal cooling, and optimized designs.</p>
                    </div>
                </div>
                
                <!-- Card 6 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img6.png" alt="Foundry & Casting"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Foundry & Casting</h3>
                        <p class="wct-desc">Cast components & internal defect reconstruction.</p>
                    </div>
                </div>
                
                <!-- Card 7 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img7.png" alt="Tooling"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Tooling</h3>
                        <p class="wct-desc">Mold inserts, dies, and tooling validation.</p>
                    </div>
                </div>
                
                <!-- Card 8 -->
                <div class="wct-card">
                    <div class="wct-img-box"><img src="assets/images/ct-scan-to-3d-cad-modeling/wct-img8.png" alt="Research & Development"></div>
                    <div class="wct-content">
                        <h3 class="wct-title">Research & Development</h3>
                        <p class="wct-desc">Innovation, testing, and product improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CT Scan to CAD Modeling Section -->
    <section class="cad-modeling-section section-padding">
        <div class="ct3d-container">
            <div class="cad-mod-header text-center">
                <h2 class="cad-mod-maintitle"><span class="text-orange">CT Scan</span> to <span class="text-orange">CAD Modeling</span></h2>
                <p class="cad-mod-subtitle">Transform CT-generated STL - data into accurate, CAD - ready geometry.<br>Create an optimised patch network. Generate accurate NURBS surfaces</p>
            </div>
            
            <!-- Wide Card 1 -->
            <div class="cad-wide-card">
                <div class="cad-process-flow">
                    <div class="cad-intro-step">
                        <h3>Industrial CT<br><span class="text-orange">Parametric CAD</span><br>using</h3>
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-1part-img1.png" alt="Geomagic Design X" class="software-logo">
                    </div>
                    
                    <div class="cad-arrow" style="color: #111;"><i class="fa-solid fa-arrow-right"></i></div>
                    
                    <div class="cad-process-step">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-1part-im2.png" alt="Import STL">
                        <p>Import STL</p>
                    </div>
                    
                    <div class="cad-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    
                    <div class="cad-process-step">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-1part-img3.png" alt="Segmentation Internal + External">
                        <p>Segmentation<br>Internal + External</p>
                    </div>
                    
                    <div class="cad-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    
                    <div class="cad-process-step">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-1part-img4.png" alt="Parametric CAD">
                        <p>Parametric CAD</p>
                    </div>
                </div>
                <!-- Button securely centered under the flow -->
                <div class="text-center mt-4">
                    <a href="#" class="btn-cad-know">Know More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Wide Card 2 -->
            <div class="cad-wide-card mt-5">
                <div class="cad-process-flow">
                    <div class="cad-intro-step">
                        <h3>Medical CT<br><span class="text-orange">NURBS Surface</span><br>using</h3>
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-2part-img1.png" alt="Geomagic Wrap" class="software-logo">
                    </div>
                    
                    <div class="cad-arrow" style="color: #111;"><i class="fa-solid fa-arrow-right"></i></div>
                    
                    <div class="cad-process-step">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-2part-img2.png" alt="Import STL">
                        <p>Import STL</p>
                    </div>
                    
                    <div class="cad-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    
                    <div class="cad-process-step">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-2part-img3.png" alt="Mesh Cleanup">
                        <p>Mesh Cleanup</p>
                    </div>
                    
                    <div class="cad-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    
                    <div class="cad-process-step">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-2part-img4.png" alt="NURBS Surface">
                        <p>NURBS Surface</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn-cad-know">Know More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Bottom Grid Outputs -->
            <div class="cad-outputs-grid mt-4">
                <!-- Output Card 1 -->
                <div class="cad-output-card">
                    <h4 class="output-title">Mesh Outputs</h4>
                    <div class="output-icons-wrap">
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img1.png" alt="STL">
                            <span>STL</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img2.png" alt="OBJ">
                            <span>OBJ</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img3.png" alt="PLY">
                            <span>PLY</span>
                        </div>
                    </div>
                </div>
                <!-- Output Card 2 -->
                <div class="cad-output-card">
                    <h4 class="output-title">Surface Outputs</h4>
                    <div class="output-icons-wrap">
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img4.png" alt="NURBS">
                            <span>NURBS</span>
                        </div>
                    </div>
                </div>
                <!-- Output Card 3 -->
                <div class="cad-output-card output-large-card">
                    <h4 class="output-title">CAD Outputs</h4>
                    <div class="output-icons-wrap">
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img5.png" alt="STEP">
                            <span>STEP</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img6.png" alt="IGES">
                            <span>IGES</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img7.png" alt="Parasolid">
                            <span>Parasolid (X_T)</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img8.png" alt="SolidWorks">
                            <span>SolidWorks</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img9.png" alt="Creo">
                            <span>Creo</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img10.png" alt="CATIA">
                            <span>CATIA</span>
                        </div>
                    </div>
                </div>
                <!-- Output Card 4 -->
                <div class="cad-output-card">
                    <h4 class="output-title">Mesh Outputs</h4>
                    <div class="output-icons-wrap">
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img11.png" alt="2D Drawings">
                            <span>2D<br>Drawings</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img12.png" alt="GD&T">
                            <span>GD&T</span>
                        </div>
                        <div class="output-icon">
                            <img src="assets/images/ct-scan-to-3d-cad-modeling/ctstcadm-3part-img13.png" alt="Inspection Report">
                            <span>Inspection<br>Report</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Support Section -->
    <section class="workflow-section section-padding">
        <div class="ct3d-container">
            <div class="wf-header text-center">
                <h2 class="wf-title">How Precise3DM<br>Supports <span class="text-orange">This Workflow</span></h2>
            </div>
            <div class="row g-4 mt-2">
                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="wf-card wf-blue">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/wf-img1.png" alt="In-House Workflow" class="wf-bg-img">
                        <div class="wf-content">
                            <h3 class="wf-card-title">Implement In-<br>House Workflow</h3>
                            <ul class="wf-list">
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> Geomagic Design X Software or Geomagic Wrap</li>
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> Training & Certification</li>
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> Workflow Development</li>
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> Technical Support</li>
                            </ul>
                            <div class="wf-btn-box mt-4">
                                <a href="#" class="btn-wf-orange">Build Your In - House Capability</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-6">
                    <div class="wf-card wf-green">
                        <img src="assets/images/ct-scan-to-3d-cad-modeling/wf-img2.png" alt="Outsource Engineering" class="wf-bg-img">
                        <div class="wf-content">
                            <h3 class="wf-card-title">Outsource<br>Engineering Projects</h3>
                            <ul class="wf-list">
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> CT STL Cleanup</li>
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> Reverse Engineering</li>
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> CAD Modeling</li>
                                <li><i class="fa-solid fa-circle-check text-wf-green"></i> Manufacturing Drawings</li>
                            </ul>
                            <div class="wf-btn-box mt-4">
                                <a href="#" class="btn-wf-orange">Outsource Your Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding">
        <div class="ct3d-container">
            <div class="faq-header text-center">
                <h2 class="faq-main-title">FREQUENTLY ASKED QUESTIONS</h2>
            </div>
            
            <div class="faq-accordion-wrap">
                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <div class="faq-head">
                        <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        <h4 class="faq-title">What is the cost of handheld colour 3D scanning services?</h4>
                    </div>
                    <div class="faq-body-wrapper">
                        <div class="faq-body">
                            <div class="faq-body-inner">
                                <p>The cost depends on the size and complexity of the object. Please contact us for a customized quote tailored to your specific requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 (Active Demo) -->
                <div class="faq-item active">
                    <div class="faq-head">
                        <span class="faq-icon"><i class="fa-solid fa-minus"></i></span>
                        <h4 class="faq-title">What is colour 3D Scanning, and how does it differ from industrial 3D Scanning?</h4>
                    </div>
                    <div class="faq-body-wrapper">
                        <div class="faq-body">
                            <div class="faq-body-inner">
                                <p>Colour 3D scanning captures both the geometry and the colour/texture of the object, while industrial 3D Scanning only captures the shape.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-head">
                        <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        <h4 class="faq-title">How long does it take when you do a 3D Scan with colour?</h4>
                    </div>
                    <div class="faq-body-wrapper">
                        <div class="faq-body">
                            <div class="faq-body-inner">
                                <p>Scanning time varies based on the object's size and detail level, ranging from a few minutes to several hours for complex assemblies.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-head">
                        <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        <h4 class="faq-title">Who benefits from Precise3DM's Handheld Color 3D Scanning Services?</h4>
                    </div>
                    <div class="faq-body-wrapper">
                        <div class="faq-body">
                            <div class="faq-body-inner">
                                <p>Industries such as healthcare, aerospace, automotive, and consumer goods greatly benefit from the high accuracy and texture capture of color scanning.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-head">
                        <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        <h4 class="faq-title">Is your Colour 3D scanning service available for outdoor or indoor objects?</h4>
                    </div>
                    <div class="faq-body-wrapper">
                        <div class="faq-body">
                            <div class="faq-body-inner">
                                <p>Yes, our equipment is highly versatile and capable of capturing precise data both indoors and outdoors in various lighting conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Superior Vanilla JS CSS-Grid Triggers -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqHeads = document.querySelectorAll('.faq-head');
            faqHeads.forEach(head => {
                head.addEventListener('click', function() {
                    const parent = this.parentElement;
                    const icon = this.querySelector('.faq-icon i');
                    
                    // Is it already active?
                    if (parent.classList.contains('active')) {
                        parent.classList.remove('active');
                        icon.classList.remove('fa-minus');
                        icon.classList.add('fa-plus');
                    } else {
                        // Close all others
                        document.querySelectorAll('.faq-item').forEach(item => {
                            if (item !== parent) {
                                item.classList.remove('active');
                                const otherIcon = item.querySelector('.faq-icon i');
                                if (otherIcon) {
                                    otherIcon.classList.remove('fa-minus');
                                    otherIcon.classList.add('fa-plus');
                                }
                            }
                        });
                        
                        // Open this one
                        parent.classList.add('active');
                        icon.classList.remove('fa-plus');
                        icon.classList.add('fa-minus');
                    }
                });
            });
        });
    </script>

    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer end -->
    
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
