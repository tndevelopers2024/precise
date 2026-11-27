<?php
$page_title = "First Article Inspection (FAI) Using 3D Scanning | Precise3DM";
$meta_description = "Validate your first manufactured part before moving to production with 3D scan-based First Article Inspection (FAI). Compare 3D scan data against CAD models or 2D drawings.";
$img = "assets/images/first-article-inspection-using-3d-scanning";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?></title>
  <meta name="title" content="<?= $page_title ?>" />
  <meta name="description" content="<?= $meta_description ?>" />
  <meta name="keywords" content="First Article Inspection, FAI 3D scanning, CAD to scan comparison, GD&T inspection, Geomagic Control X FAI, Precise3DM India" />

  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.precise3dm.com/first-article-inspection.php" />
  <meta property="og:title" content="<?= $page_title ?>" />
  <meta property="og:description" content="<?= $meta_description ?>" />
  <meta property="og:image" content="https://www.precise3dm.com/<?= $img ?>/hero-image.png" />

  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.precise3dm.com/first-article-inspection.php" />
  <meta property="twitter:title" content="<?= $page_title ?>" />
  <meta property="twitter:description" content="<?= $meta_description ?>" />
  <meta property="twitter:image" content="https://www.precise3dm.com/<?= $img ?>/hero-image.png" />

  <link rel="canonical" href="https://www.precise3dm.com/first-article-inspection.php" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-video-preview:-1, max-snippet:-1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Site-Wide & Page CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/first-article-inspection-using-3d-scanning.css?v=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body class="fai-page">

  <!-- Site Navigation Header -->
  <?php include('includes/header.php'); ?>

  <!-- =========================================================================
       SECTION 1: HERO SECTION
       ========================================================================= -->
  <section class="fai-hero-section" id="hero">
    <div class="fai-hero-bg" style="background-image: url('<?= $img ?>/hero-bg.png');"></div>
    <div class="fai-hero-overlay"></div>

    <div class="container-fluid fai-container fai-hero-inner">
      <!-- Top Right Call Contact -->
      <div class="fai-hero-top-bar">
        <div class="fai-contact-box fai-call-box">
          <div class="fai-contact-icon">
            <i class="fa-solid fa-phone"></i>
          </div>
          <div class="fai-contact-meta">
            <span class="fai-contact-label">Call us now</span>
            <div class="fai-contact-links">
              <a href="tel:+919840478347">+91 98404 78347</a>
              <span class="fai-divider">|</span>
              <a href="tel:+916374406179">+91 63744 06179</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Hero Grid -->
      <div class="fai-hero-grid">
        <div class="fai-hero-left">
          <h1 class="fai-hero-title">
            <span class="text-orange">First Article Inspection<br>(FAI)</span> Using 3D Scanning
          </h1>

          <p class="fai-hero-subtitle">
            Validate Your First Manufactured Part Before<br>Moving to Production
          </p>

          <p class="fai-hero-desc">
            Verify dimensional accuracy of newly manufactured components by comparing 3D scan data against CAD models or engineering drawings. Identify deviations, verify critical features and generate comprehensive inspection reports.
          </p>

          <div class="fai-hero-btns-wrap">
            <div class="fai-hero-btn-row-top">
              <a href="3d-inspection-software-in-india.php" class="fai-btn-solid fai-btn-wide">3D Inspection Software</a>
            </div>
            <div class="fai-hero-btn-row-bottom">
              <a href="scanning-solution-form.php" class="fai-btn-solid">Request a Quote</a>
              <a href="Book-demo-get-quote-for-3D-scanner.php" class="fai-btn-outline-orange">Book a Live Demo</a>
            </div>
          </div>

          <div class="fai-hero-stats">
            <div class="fai-stat-item">
              <div class="fai-stat-circle">
                <img src="<?= $img ?>/hero-stat-validate-dimensions.svg" alt="Validate Dimensions">
              </div>
              <span class="fai-stat-label">Validate<br>Dimensions</span>
            </div>
            <div class="fai-stat-item">
              <div class="fai-stat-circle">
                <img src="<?= $img ?>/hero-stat-verify-critical-features.svg" alt="Verify Critical Features">
              </div>
              <span class="fai-stat-label">Verify<br>Critical<br>Features</span>
            </div>
            <div class="fai-stat-item">
              <div class="fai-stat-circle">
                <img src="<?= $img ?>/hero-stat-ensure-tolerances.svg" alt="Ensure Tolerances">
              </div>
              <span class="fai-stat-label">Ensure<br>Tolerances</span>
            </div>
            <div class="fai-stat-item">
              <div class="fai-stat-circle">
                <img src="<?= $img ?>/hero-stat-reduce-production-rework.svg" alt="Reduce Production Rework">
              </div>
              <span class="fai-stat-label">Reduce<br>Production<br>Rework</span>
            </div>
            <div class="fai-stat-item">
              <div class="fai-stat-circle">
                <img src="<?= $img ?>/hero-stat-faster-inspection.svg" alt="Faster Inspection">
              </div>
              <span class="fai-stat-label">Faster<br>Inspection</span>
            </div>
          </div>

          <!-- Bottom Left Email Contact -->
          <div class="fai-contact-box fai-email-box">
            <div class="fai-contact-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="fai-contact-meta">
              <span class="fai-contact-label">Email us</span>
              <div class="fai-contact-links">
                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a>
                <span class="fai-divider">|</span>
                <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="fai-hero-right">
          <img src="<?= $img ?>/hero-image.png" alt="First Article Inspection Scan vs CAD and Color Deviation Comparison" class="fai-hero-visual">
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 2: PRODUCTION READINESS OVERVIEW
       ========================================================================= -->
  <section class="fai-section fai-readiness-section" id="production-readiness">
    <div class="container-fluid fai-container">
      <div class="fai-readiness-grid">
        <div class="fai-readiness-left">
          <h2 class="fai-section-heading">Is Your First Manufactured<br>Part Ready for Production?</h2>
          <p class="fai-readiness-desc">
            The first component produced after a new product launch, tooling change, or process setup must be inspected to verify that it meets design specifications. 3D scanning enables comprehensive dimensional verification, even for complex shapes, with faster and more reliable results.
          </p>
        </div>

        <div class="fai-readiness-card">
          <h3 class="fai-matter-heading">Identify What Matters</h3>
          <div class="fai-matter-grid">
            <div class="fai-matter-card">
              <div class="fai-matter-icon-circle">
                <img src="<?= $img ?>/matter-dimensional-accuracy.svg" alt="Dimensional Accuracy">
              </div>
              <h4 class="fai-matter-title">Dimensional<br>Accuracy</h4>
              <p class="fai-matter-desc">Verify geometry against design</p>
            </div>

            <div class="fai-matter-card">
              <div class="fai-matter-icon-circle">
                <img src="<?= $img ?>/matter-critical-features.svg" alt="Critical Features">
              </div>
              <h4 class="fai-matter-title">Critical<br>Features</h4>
              <p class="fai-matter-desc">Inspect holes, slots, profiles and mounting points</p>
            </div>

            <div class="fai-matter-card">
              <div class="fai-matter-icon-circle">
                <img src="<?= $img ?>/matter-tolerance-verification.svg" alt="Tolerance Verification">
              </div>
              <h4 class="fai-matter-title">Tolerance<br>Verification</h4>
              <p class="fai-matter-desc">Identify out-of-tolerance dimensions</p>
            </div>

            <div class="fai-matter-card">
              <div class="fai-matter-icon-circle">
                <img src="<?= $img ?>/matter-surface-deviation.svg" alt="Surface Deviation">
              </div>
              <h4 class="fai-matter-title">Surface<br>Deviation</h4>
              <p class="fai-matter-desc">Visualize differences with color maps</p>
            </div>

            <div class="fai-matter-card">
              <div class="fai-matter-icon-circle">
                <img src="<?= $img ?>/matter-production-readiness.svg" alt="Production Readiness">
              </div>
              <h4 class="fai-matter-title">Production<br>Readiness</h4>
              <p class="fai-matter-desc">Approve with confidence</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 3: HOW 3D SCAN-BASED FIRST ARTICLE INSPECTION WORKS
       ========================================================================= -->
  <section class="fai-section fai-how-section" id="how-it-works">
    <div class="container-fluid fai-container">
      <h2 class="fai-section-heading">How 3D Scan-Based First Article Inspection Works</h2>
      <p class="fai-section-subheading-orange">From First Manufactured Part to Inspection Report</p>

      <div class="fai-how-track">
        <!-- Step 1 -->
        <div class="fai-how-card">
          <div class="fai-how-header">
            <span class="fai-how-num">1</span>
            <h3 class="fai-how-title">Scan the<br>Component</h3>
          </div>
          <p class="fai-how-desc">Capture the first manufactured part using an industrial 3D scanner.</p>
          <div class="fai-how-img-box">
            <img src="<?= $img ?>/how-scan-the-component.png" alt="Scan the Component">
          </div>
        </div>

        <div class="fai-how-connector" aria-hidden="true">
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <!-- Step 2 -->
        <div class="fai-how-card">
          <div class="fai-how-header">
            <span class="fai-how-num">2</span>
            <h3 class="fai-how-title">Import the<br>Reference</h3>
          </div>
          <p class="fai-how-desc">Load original CAD model or use drawing-based inspection (if needed).</p>
          <div class="fai-how-img-box">
            <img src="<?= $img ?>/how-import-the-reference.png" alt="Import the Reference">
          </div>
        </div>

        <div class="fai-how-connector" aria-hidden="true">
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <!-- Step 3 -->
        <div class="fai-how-card">
          <div class="fai-how-header">
            <span class="fai-how-num">3</span>
            <h3 class="fai-how-title">Align the<br>Scan Data</h3>
          </div>
          <p class="fai-how-desc">Align using datums, geometric features or best-fit alignment.</p>
          <div class="fai-how-img-box">
            <img src="<?= $img ?>/how-align-the-scan-data.png" alt="Align the Scan Data">
          </div>
        </div>

        <div class="fai-how-connector" aria-hidden="true">
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <!-- Step 4 -->
        <div class="fai-how-card">
          <div class="fai-how-header">
            <span class="fai-how-num">4</span>
            <h3 class="fai-how-title">Inspect<br>Dimensions</h3>
          </div>
          <p class="fai-how-desc">Compare measured data against nominal values and tolerances.</p>
          <div class="fai-how-img-box">
            <img src="<?= $img ?>/how-inspect-dimensions.png" alt="Inspect Dimensions">
          </div>
        </div>

        <div class="fai-how-connector" aria-hidden="true">
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <!-- Step 5 -->
        <div class="fai-how-card">
          <div class="fai-how-header">
            <span class="fai-how-num">5</span>
            <h3 class="fai-how-title">Generate FAI<br>Report</h3>
          </div>
          <p class="fai-how-desc">Create detailed inspection report with measurements, deviations and PASS/FAIL results.</p>
          <div class="fai-how-img-box">
            <img src="<?= $img ?>/how-generate-fai-report.png" alt="Generate FAI Report">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 4: REAL-WORLD EXAMPLE: AUTOMOTIVE BRACKET
       ========================================================================= -->
  <section class="fai-section fai-example-section" id="real-world-example">
    <div class="container-fluid fai-container">
      <div class="fai-example-dark-box">
        <h2 class="fai-example-heading">Real-World Example: Automotive Bracket</h2>
        <p class="fai-example-subtitle">Complete first article inspection from scan to report.</p>

        <div class="fai-example-grid">
          <div class="fai-example-card fai-example-card-dark">
            <h3 class="fai-example-card-title">Original CAD<br>Model</h3>
            <div class="fai-example-img-box">
              <img src="<?= $img ?>/automotive-bracket-cad.png" alt="Original CAD Model Automotive Bracket">
            </div>
          </div>

          <div class="fai-example-card fai-example-card-dark">
            <h3 class="fai-example-card-title">3D Scan <span class="fai-title-sm">(First<br>Manufactured Part)</span></h3>
            <div class="fai-example-img-box">
              <img src="<?= $img ?>/automotive-bracket-3d-scan.png" alt="3D Scan First Manufactured Part">
            </div>
          </div>

          <div class="fai-example-card fai-example-card-dark">
            <h3 class="fai-example-card-title">Deviation Analysis<br><span class="fai-title-muted">(CAD vs Scan)</span></h3>
            <div class="fai-example-img-box">
              <img src="<?= $img ?>/automotive-bracket-deviation-analysis.png" alt="Deviation Analysis CAD vs Scan">
            </div>
          </div>

          <div class="fai-example-card fai-example-card-light">
            <h3 class="fai-example-card-title">Inspection<br>Analysis</h3>
            <div class="fai-example-img-box fai-example-img-bordered">
              <img src="<?= $img ?>/automotive-bracket-inspection-analysis.png" alt="Inspection Analysis Report">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 5: APPLICATIONS ACROSS INDUSTRIES
       ========================================================================= -->
  <section class="fai-section fai-applications-section" id="applications">
    <div class="container-fluid fai-container">
      <div class="fai-white-panel">
        <h2 class="fai-section-heading">Applications Across Industries</h2>
        <p class="fai-section-subheading-orange">One inspection technology. Multiple manufacturing applications.</p>

        <div class="fai-app-grid">
          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-automotive.png" alt="Automotive FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Automotive</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-aerospace.png" alt="Aerospace FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Aerospace</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-foundry.png" alt="Foundry FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Foundry</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-cnc-machining.png" alt="CNC Machining FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">CNC Machining</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-injection-molding.png" alt="Injection Molding FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Injection Molding</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-sheet-metal-fabrication.png" alt="Sheet Metal Fabrication FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Sheet Metal<br>Fabrication</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-heavy-engineering.png" alt="Heavy Engineering FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Heavy Engineering</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-medical-manufacturing.png" alt="Medical Manufacturing FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Medical<br>Manufacturing</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-railways.png" alt="Railways FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Railways</h3>
            </div>
          </div>

          <div class="fai-app-card">
            <div class="fai-app-img-wrap">
              <img src="<?= $img ?>/application-energy-industry.png" alt="Energy Industry FAI">
            </div>
            <div class="fai-app-label-box">
              <h3 class="fai-app-title">Energy Industry</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 6: WHAT CAN BE INSPECTED?
       ========================================================================= -->
  <section class="fai-section fai-capabilities-section" id="inspection-capabilities">
    <div class="container-fluid fai-container">
      <div class="fai-capabilities-layout">
        <!-- Left Card: 8 Capabilities -->
        <div class="fai-white-panel">
          <h2 class="fai-section-heading">What Can Be Inspected?</h2>
          <p class="fai-section-subheading-orange">Comprehensive dimensional verification for manufactured components.</p>

          <div class="fai-cap-grid">
            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-linear-dimensions.svg" alt="Linear Dimensions">
              </div>
              <div>
                <h3 class="fai-cap-title">Linear Dimensions</h3>
                <p class="fai-cap-desc">Length, width, height</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <circle cx="12" cy="12" r="7.5" stroke="#FF931E" stroke-width="2" />
                  <path d="M8.5 15.5L15.5 8.5M15.5 8.5H11.5M15.5 8.5V12.5M8.5 15.5H12.5M8.5 15.5V11.5" stroke="#FF931E" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h3 class="fai-cap-title">Hole Diameters</h3>
                <p class="fai-cap-desc">Bores and holes</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-position-location.svg" alt="Position & Location">
              </div>
              <div>
                <h3 class="fai-cap-title">Position &amp; Location</h3>
                <p class="fai-cap-desc">Feature locations</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-profiles-contours.svg" alt="Profiles & Contours">
              </div>
              <div>
                <h3 class="fai-cap-title">Profiles &amp; Contours</h3>
                <p class="fai-cap-desc">Complex shapes</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-flatness-parallelism.svg" alt="Flatness & Parallelism">
              </div>
              <div>
                <h3 class="fai-cap-title">Flatness &amp; Parallelism</h3>
                <p class="fai-cap-desc">Geometric characteristics</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-gdt-characteristics.svg" alt="GD&T Characteristics">
              </div>
              <div>
                <h3 class="fai-cap-title">GD&amp;T Characteristics</h3>
                <p class="fai-cap-desc">Supported GD&amp;T</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-thickness-sections.svg" alt="Thickness & Sections">
              </div>
              <div>
                <h3 class="fai-cap-title">Thickness &amp; Sections</h3>
                <p class="fai-cap-desc">Cross-sectional profiles</p>
              </div>
            </div>

            <div class="fai-cap-item">
              <div class="fai-cap-icon-box">
                <img src="<?= $img ?>/what-assembly-interfaces.svg" alt="Assembly Interfaces">
              </div>
              <div>
                <h3 class="fai-cap-title">Assembly Interfaces</h3>
                <p class="fai-cap-desc">Mounting and mating features</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Card: Visualize Deviations -->
        <div class="fai-white-panel fai-colormap-panel">
          <h3 class="fai-colormap-heading">Visualize Deviations with<br>Color Maps</h3>
          <div class="fai-colormap-img-wrap">
            <img src="<?= $img ?>/visualize-deviation-with-color-maps.png" alt="Visualize Deviations with Color Maps">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 7: INSPECTION REFERENCE OPTIONS & SOFTWARE USED
       ========================================================================= -->
  <section class="fai-section fai-methods-section" id="inspection-methods-and-software">
    <div class="container-fluid fai-container">
      <div class="fai-two-col-panels">
        <!-- Left Panel: Inspection Reference Options -->
        <div class="fai-white-panel">
          <h2 class="fai-panel-heading">Inspection Reference Options for Your Components: First Article Inspection (FAI)</h2>
          <p class="fai-section-subheading-orange fai-sub-compact">Flexible File Types and Scenarios</p>

          <div class="fai-ref-cards-grid">
            <div class="fai-ref-card">
              <h3 class="fai-ref-title">Original<br>CAD Model</h3>
              <div class="fai-ref-img-box">
                <img src="<?= $img ?>/original-cad-model.png" alt="Original CAD Model">
              </div>
              <ul class="fai-tick-list">
                <li><i class="fa-solid fa-check"></i><span>Design verification</span></li>
                <li><i class="fa-solid fa-check"></i><span>Dimensional inspection</span></li>
                <li><i class="fa-solid fa-check"></i><span>GD&amp;T analysis</span></li>
                <li><i class="fa-solid fa-check"></i><span>Critical feature validation</span></li>
              </ul>
            </div>

            <div class="fai-ref-card">
              <h3 class="fai-ref-title">Drawing-Based<br>Inspection</h3>
              <div class="fai-ref-img-box">
                <img src="<?= $img ?>/drawing-based-inspection.png" alt="Drawing-Based Inspection">
              </div>
              <ul class="fai-tick-list">
                <li><i class="fa-solid fa-check"></i><span>Extract specified dimensions</span></li>
                <li><i class="fa-solid fa-check"></i><span>Measure scan data</span></li>
                <li><i class="fa-solid fa-check"></i><span>Compare nominal vs measured</span></li>
                <li><i class="fa-solid fa-check"></i><span>Generate inspection report</span></li>
              </ul>
            </div>

            <div class="fai-ref-card">
              <h3 class="fai-ref-title">Previous<br>Component Scan</h3>
              <div class="fai-ref-img-box">
                <img src="<?= $img ?>/previous-component-scan.png" alt="Previous Component Scan">
              </div>
              <ul class="fai-tick-list">
                <li><i class="fa-solid fa-check"></i><span>Monitor production variation</span></li>
                <li><i class="fa-solid fa-check"></i><span>Compare scan-to-scan</span></li>
                <li><i class="fa-solid fa-check"></i><span>Track dimensional consistency</span></li>
                <li><i class="fa-solid fa-check"></i><span>Support ongoing quality control</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Right Panel: Software Used -->
        <div class="fai-white-panel fai-software-panel">
          <h2 class="fai-panel-heading mb-3">Software Used</h2>
          <div class="fai-software-logo-wrap">
            <img src="<?= $img ?>/geomagic-control-x-software.png" alt="Geomagic Control X Industry-leading inspection software for FAI" class="fai-cx-logo">
          </div>

          <div class="fai-software-body">
            <ul class="fai-box-check-list">
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>CAD-to-Scan Comparison</span></li>
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>3D Deviation Analysis</span></li>
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Dimensional Inspection</span></li>
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>GD&amp;T Inspection</span></li>
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Color Deviation Maps</span></li>
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Inspection Reporting</span></li>
              <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Repeatable Workflows</span></li>
            </ul>

            <div class="fai-software-preview-wrap">
              <img src="<?= $img ?>/software-used-image.png" alt="Geomagic Control X Software Deviation Analysis">
            </div>
          </div>

          <a href="geomagic-control-x-3d-inspection-software.php" class="fai-btn-solid fai-know-more-wide">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 8: RECOMMENDED 3D SCANNERS AND FAI DELIVERABLES
       ========================================================================= -->
  <section class="fai-section fai-scanners-deliv-section" id="scanners-and-deliverables">
    <div class="container-fluid fai-container">
      <div class="fai-two-col-panels">
        <!-- Left Panel: Recommended 3D Scanners -->
        <div class="fai-white-panel">
          <h2 class="fai-panel-heading mb-4">Recommended 3D Scanners</h2>

          <!-- Top 2 Scanners -->
          <div class="fai-scanners-top-row">
            <a href="automatic-desktop-3d-scanner.php" class="fai-scanner-card fai-scanner-horizontal">
              <div class="fai-scanner-img-h">
                <img src="<?= $img ?>/scanner-autoscan-inspec-2.png" alt="AutoScan Inspec 2">
              </div>
              <div class="fai-scanner-info-h">
                <h3 class="fai-scanner-name">AutoScan Inspec 2</h3>
                <ul class="fai-scanner-specs">
                  <li>Up to 200 mm</li>
                  <li>High Accuracy</li>
                  <li>Small Parts</li>
                </ul>
              </div>
            </a>

            <a href="OptimScan5M-Plus.php" class="fai-scanner-card fai-scanner-horizontal">
              <div class="fai-scanner-img-h">
                <img src="<?= $img ?>/scanner-optimscan-5m-plus.png" alt="OptimScan 5M Plus">
              </div>
              <div class="fai-scanner-info-h">
                <h3 class="fai-scanner-name">OptimScan 5M Plus</h3>
                <ul class="fai-scanner-specs">
                  <li>Up to 500 mm</li>
                  <li>High Accuracy</li>
                  <li>Optical Inspection</li>
                </ul>
              </div>
            </a>
          </div>

          <!-- Bottom 3 Scanners -->
          <div class="fai-scanners-bottom-row">
            <a href="FreeScan-Combo.php" class="fai-scanner-card fai-scanner-vertical">
              <div class="fai-scanner-v-head">
                <div class="fai-scanner-img-v">
                  <img src="<?= $img ?>/scanner-freescan-combo-wireless.png" alt="FreeScan Combo Wireless">
                </div>
                <h3 class="fai-scanner-name">FreeScan Combo Wireless</h3>
              </div>
              <ul class="fai-scanner-specs fai-specs-divided">
                <li>Up to 1000 mm</li>
                <li>General Inspection</li>
              </ul>
            </a>

            <a href="freescan-trio-triple-camera-handheld-laser-3D-scanner.php" class="fai-scanner-card fai-scanner-vertical">
              <div class="fai-scanner-v-head">
                <div class="fai-scanner-img-v">
                  <img src="<?= $img ?>/scanner-freescan-trio.png" alt="FreeScan Trio">
                </div>
                <h3 class="fai-scanner-name">FreeScan Trio</h3>
              </div>
              <ul class="fai-scanner-specs fai-specs-divided">
                <li>Up to 3000 mm</li>
                <li>High Accuracy</li>
                <li>Industrial Grade</li>
              </ul>
            </a>

            <a href="freescan-omni.php" class="fai-scanner-card fai-scanner-vertical">
              <div class="fai-scanner-v-head">
                <div class="fai-scanner-img-v">
                  <img src="<?= $img ?>/scanner-freescan-omni.png" alt="FreeScan Omni">
                </div>
                <h3 class="fai-scanner-name">FreeScan Omni</h3>
              </div>
              <ul class="fai-scanner-specs fai-specs-divided">
                <li>Up to 4000 mm+</li>
                <li>Large Parts &amp; Assemblies</li>
              </ul>
            </a>
          </div>
        </div>

        <!-- Right Panel: FAI Deliverables -->
        <div class="fai-white-panel fai-deliverables-panel">
          <h2 class="fai-panel-heading mb-4">FAI Deliverables</h2>

          <ul class="fai-deliv-wrap-list">
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>3D Scan Data (STL / Mesh)</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>CAD-to-Scan Comparison</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Dimensional Inspection Report</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>PASS / FAIL Results</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Color Deviation Maps</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>GD&amp;T Inspection Results</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>PDF Inspection Report</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Excel Measurement Report</span></li>
            <li><span class="fai-box-check"><i class="fa-solid fa-check"></i></span><span>Engineering Observations</span></li>
          </ul>

          <div class="fai-deliv-img-wrap">
            <img src="<?= $img ?>/deliverables.png" alt="First Article Inspection Report Deliverables">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 9: ENGAGEMENT MODELS SECTION (CAPEX & OPEX)
       ========================================================================= -->
  <section class="fai-section fai-engagement-section" id="engagement-models">
    <div class="container-fluid fai-container">
      <div class="fai-co-grid">
        <!-- Option 1: CAPEX -->
        <div class="fai-co-card fai-capex-card">
          <div class="fai-co-bg-img fai-capex-visual" style="background-image: url('<?= $img ?>/capex-image.png');" aria-hidden="true"></div>
          <div class="fai-co-content">
            <span class="fai-co-eyebrow">Option 1 – CAPEX</span>
            <h2 class="fai-co-title">Build Your Own First Article Inspection Capability</h2>
            <ul class="fai-co-list">
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Industrial 3D Scanner</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Geomagic Control X Software</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Installation and Training</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Technical Support</span></li>
            </ul>
          </div>
          <a href="3d-services.php" class="fai-btn-solid fai-co-btn">Discuss an In-House Solution <i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>

        <!-- Option 2: OPEX -->
        <div class="fai-co-card fai-opex-card">
          <div class="fai-co-bg-img fai-opex-visual" style="background-image: url('<?= $img ?>/opex-image.png');" aria-hidden="true"></div>
          <div class="fai-co-content">
            <span class="fai-co-eyebrow">Option 2 – OPEX</span>
            <h2 class="fai-co-title">Build Your Own First Article Inspection Capability</h2>
            <ul class="fai-co-list">
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Component Scanning</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>CAD-to-Scan or Drawing-Based Inspection</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Dimensional Measurement</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>Fast Turnaround Time</span></li>
              <li><span class="fai-green-dot"><i class="fa-solid fa-check"></i></span><span>No Software Investment</span></li>
            </ul>
          </div>
          <a href="3d-products.php" class="fai-btn-solid fai-co-btn">Request an FAI Inspection Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>
