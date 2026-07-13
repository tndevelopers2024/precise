<?php
$title = "Book A Live Demo Meeting & Consultation";
$description = "Schedule a live demo onsite at your facility or online with our experts.";
$keywords = "Book Live Demo, 3D Scanner Demo, Precise3DM, Onsite Demo, Online Demo";
$dev_step = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Precise3DM</title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- Google Fonts: Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Site-Wide CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/book-a-live-demo.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <style>
        .category-tabs .tab-item{
            color: #000;
        }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- =========================================================
         HERO SECTION (STEP 1)
         ========================================================= -->
    <div id="step1-container">
        <section class="book-demo-hero-section py-lg-3">
            <div class="container-fluid px-0">

                <!-- Split Image Layout -->
                <div class="demo-split-container">

                    <!-- Header Row -->
                    <div class="row align-items-center mb-4 d-none d-lg-flex position-relative z-3 pt-4 px-3 px-lg-5">
                        <div class="col-lg-3 d-flex justify-content-end">
                            <div class="demo-info-badge">
                                <img src="assets/images/book-a-live-demo/demo-1.svg" alt="Onsite Demo">
                                <span>Onsite Demo<br><small>At Your Facility</small></span>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center" style="z-index: 100;">
                            <h1 class="demo-main-title mb-2">Book A Live Demo<br>Meeting & Consultation</h1>
                            <p class="demo-subtitle mb-0">Choose the way that's convenient for you.<br>
                                <span class="text-orange">Onsite</span> at your facility or <span class="text-orange">Online</span> with our experts.
                            </p>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-start">
                            <div class="demo-info-badge">
                                <img src="assets/images/book-a-live-demo/demo-2.svg" alt="Online Demo">
                                <span>Online Demo<br><small>Meet Us Live</small></span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Header (Stacking) -->
                    <div class="row d-lg-none text-center mb-4 position-relative z-3 pt-4 px-3 px-lg-5">
                        <div class="col-12 mb-4">
                            <h1 class="demo-main-title mb-2">Book A Live Demo<br>Meeting & Consultation</h1>
                            <p class="demo-subtitle mb-0">Choose the way that's convenient for you.<br>
                                <span class="text-orange">Onsite</span> at your facility or <span class="text-orange">Online</span> with our experts.
                            </p>
                        </div>
                        <div class="col-12 d-flex flex-column align-items-center gap-3">
                            <div class="demo-info-badge w-100 justify-content-center">
                                <img src="assets/images/book-a-live-demo/demo-1.svg" alt="Onsite Demo">
                                <span>Onsite Demo<br><small>At Your Facility</small></span>
                            </div>
                            <div class="demo-info-badge w-100 justify-content-center mt-4 mt-lg-0">
                                <img src="assets/images/book-a-live-demo/demo-2.svg" alt="Online Demo">
                                <span>Online Demo<br><small>Meet Us Live</small></span>
                            </div>
                        </div>
                    </div>

                    <!-- Left Image -->
                    <div class="demo-left-box demo-left-box-bg">
                    </div>

                    <!-- Right Image -->
                    <div class="demo-right-box demo-right-box-bg">
                    </div>

                    <!-- Center Polygon -->
                    <div class="demo-center-polygon text-center">
                        <img src="assets/images/book-a-live-demo/calendar.svg" alt="Calendar" class="mb-2">
                        <div class="poly-title">SCHEDULE<br>YOUR DEMO</div>
                        <div class="poly-text">It's Free, No Obligation<br>Just Expert Advice</div>
                    </div>

                    <!-- Absolute Bottom Row for Glass Boxes & Stats -->
                    <div class="demo-bottom-row position-absolute w-100 demo-bottom-row-pos">
                        <div class="row align-items-end mx-0 px-lg-4">

                            <!-- Left Glass Box -->
                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="demo-glass-box">
                                    <div class="d-flex justify-content-between text-center gap-2">
                                        <div class="glass-item">
                                            <img src="assets/images/book-a-live-demo/hero-stat-left-1.svg" alt="Hands-on">
                                            <p>Hands-on Demonstration<br>on Your Application</p>
                                        </div>
                                        <div class="glass-item">
                                            <img src="assets/images/book-a-live-demo/hero-stat-left-2.svg" alt="Real-time">
                                            <p>Real-time Solution<br>Recommendations</p>
                                        </div>
                                        <div class="glass-item">
                                            <img src="assets/images/book-a-live-demo/hero-stat-left-3.svg" alt="Evaluate">
                                            <p>Evaluate Before<br>You Invest</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Center Stats -->
                            <div class="col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center flex-wrap gap-3 gap-xl-4 hero-bottom-stats-col">
                                <div class="bottom-stat text-center px-3">
                                    <img src="assets/images/book-a-live-demo/testimonial-1.svg" alt="Projects Delivered">
                                    <h4>5000+</h4>
                                    <p>Project Delivered<br>Across India</p>
                                </div>
                                <div class="bottom-stat text-center px-3">
                                    <img src="assets/images/book-a-live-demo/testimonial-2.svg" alt="Happy Customers">
                                    <h4>1000+</h4>
                                    <p>Happy Customers<br>Across Industries</p>
                                </div>
                                <div class="bottom-stat text-center px-3">
                                    <img src="assets/images/book-a-live-demo/testimonial-3.svg" alt="Support Network">
                                    <h4>Pan India</h4>
                                    <p>Support &<br>Service Network</p>
                                </div>
                            </div>

                            <!-- Right Glass Box -->
                            <div class="col-lg-4">
                                <div class="demo-glass-box">
                                    <div class="d-flex justify-content-between text-center gap-2">
                                        <div class="glass-item">
                                            <img src="assets/images/book-a-live-demo/hero-stat-right-1.svg" alt="Live Interaction">
                                            <p>Live Interaction<br>with Experts</p>
                                        </div>
                                        <div class="glass-item">
                                            <img src="assets/images/book-a-live-demo/hero-stat-right-2.svg" alt="Live Software">
                                            <p>See Software, Scans &<br>Workflows Live</p>
                                        </div>
                                        <div class="glass-item">
                                            <img src="assets/images/book-a-live-demo/hero-stat-right-3.svg" alt="Get Answers">
                                            <p>Get Answers to Your<br>Specific Questions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- =========================================================
         INDUSTRY SECTORS SECTION
         ========================================================= -->
        <section class="industry-sectors-section">
            <div class="container-fluid industry-sectors-container">
                <div class="row justify-content-center text-center">
                    <!-- Sector 1 -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <div class="sector-circle">
                            <img src="assets/images/book-a-live-demo/sector-1.svg" alt="Sector 1">
                        </div>
                        <p class="sector-title mt-3">Aerospace</p>
                    </div>
                    <!-- Sector 2 -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <div class="sector-circle">
                            <img src="assets/images/book-a-live-demo/sector-2.svg" alt="Sector 2">
                        </div>
                        <p class="sector-title mt-3">Marine & Shipbuilding</p>
                    </div>
                    <!-- Sector 3 -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <div class="sector-circle">
                            <img src="assets/images/book-a-live-demo/sector-3.svg" alt="Sector 3">
                        </div>
                        <p class="sector-title mt-3">Wind Energy</p>
                    </div>
                    <!-- Sector 4 -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <div class="sector-circle">
                            <img src="assets/images/book-a-live-demo/sector-4.svg" alt="Sector 4">
                        </div>
                        <p class="sector-title mt-3">Heavy Machinery</p>
                    </div>
                    <!-- Sector 5 -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <div class="sector-circle">
                            <img src="assets/images/book-a-live-demo/sector-5.svg" alt="Sector 5">
                        </div>
                        <p class="sector-title mt-3">Infrastructure & Construction</p>
                    </div>
                    <!-- Sector 6 -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <div class="sector-circle">
                            <img src="assets/images/book-a-live-demo/sector-6.svg" alt="Sector 6">
                        </div>
                        <p class="sector-title mt-3">Industrial Plants</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========================================================
         MULTI-STEP FORM SECTION
         ========================================================= -->
        <section class="demo-form-section" id="demo-form-section">
            <div class="container-fluid container-px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- Form Title & Progress -->
                        <div class="text-center mb-5">
                            <h2 class="demo-main-header">Schedule your demo in 30 seconds</h2>
                            <div class="progress-header d-flex flex-wrap justify-content-center align-items-center progress-header-gap">
                                <span class="step-text">Step <?php echo $dev_step; ?> of 3</span>
                                <div class="step-indicators d-flex align-items-center">
                                    <div class="step active">1</div>
                                    <div class="step-line <?php echo ($dev_step >= 2) ? 'active' : ''; ?>"></div>
                                    <div class="step <?php echo ($dev_step >= 2) ? 'active' : ''; ?>">2</div>
                                    <div class="step-line <?php echo ($dev_step >= 3) ? 'active' : ''; ?>"></div>
                                    <div class="step <?php echo ($dev_step >= 3) ? 'active' : ''; ?>">3</div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Card (Step 1) -->
                        <div class="demo-form-card" id="step-1" style="display: <?php echo ($dev_step == 1) ? 'block' : 'none'; ?>;">
                            <div class="form-badge mb-3">Step 1</div>
                            <h3 class="form-title mb-4">Tell Us About You</h3>

                            <form id="bookDemoFormStep1" onsubmit="event.preventDefault(); goToStep2();">
                                <div class="row g-4">
                                    <!-- First Name & Country -->
                                    <div class="col-md-6 py-2">
                                        <label class="form-label">Full Name <span>*</span></label>
                                        <input type="text" class="form-control demo-input" id="firstName" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <label class="form-label">Country <span>*</span></label>
                                        <select class="form-select demo-input" id="countrySelect" required>
                                            <option value="" selected disabled>Select Country</option>
                                        </select>
                                    </div>

                                    <!-- Company Name & State -->
                                    <div class="col-md-6 py-2">
                                        <label class="form-label">Company Name <span>*</span></label>
                                        <input type="text" class="form-control demo-input" id="companyName" placeholder="Enter Company Name" required>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <label class="form-label">State <span>*</span></label>
                                        <select class="form-select demo-input" id="stateSelect" required disabled>
                                            <option value="" selected disabled>Select State</option>
                                        </select>
                                    </div>

                                    <!-- Business Email & City -->
                                    <div class="col-md-6 py-2">
                                        <label class="form-label">Business Email Address <span>*</span></label>
                                        <input type="email" class="form-control demo-input" id="businessEmail" placeholder="Enter Email Address" required>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <label class="form-label">City <span>*</span></label>
                                        <select class="form-select demo-input" id="citySelect" required disabled>
                                            <option value="" selected disabled>Select City</option>
                                        </select>
                                    </div>

                                    <!-- Mobile Number -->
                                    <div class="col-md-6 col-12 py-2">
                                        <label class="form-label">Mobile Number <span>*</span></label>
                                        <div class="mobile-phone-container">
                                            <div class="country-select-wrapper">
                                                <img src="https://flagcdn.com/w20/in.png" alt="Flag" id="selectedFlag">
                                                <span id="selectedDialCode" class="fw-semibold dial-code-txt">+91</span>
                                                <i class="fa-solid fa-chevron-down chevron-icon"></i>
                                                <select id="mobileCountrySelect" class="country-code-select" onchange="updateCountryCode(this)" required>
                                                    <option value="+93" data-flag="af">+93 (Afghanistan)</option>
                                                    <option value="+355" data-flag="al">+355 (Albania)</option>
                                                    <option value="+213" data-flag="dz">+213 (Algeria)</option>
                                                    <option value="+1 684" data-flag="as">+1 684 (AmericanSamoa)</option>
                                                    <option value="+376" data-flag="ad">+376 (Andorra)</option>
                                                    <option value="+244" data-flag="ao">+244 (Angola)</option>
                                                    <option value="+1 264" data-flag="ai">+1 264 (Anguilla)</option>
                                                    <option value="+672" data-flag="aq">+672 (Antarctica)</option>
                                                    <option value="+1268" data-flag="ag">+1268 (Antigua and Barbuda)</option>
                                                    <option value="+54" data-flag="ar">+54 (Argentina)</option>
                                                    <option value="+374" data-flag="am">+374 (Armenia)</option>
                                                    <option value="+297" data-flag="aw">+297 (Aruba)</option>
                                                    <option value="+61" data-flag="au">+61 (Australia)</option>
                                                    <option value="+43" data-flag="at">+43 (Austria)</option>
                                                    <option value="+994" data-flag="az">+994 (Azerbaijan)</option>
                                                    <option value="+1 242" data-flag="bs">+1 242 (Bahamas)</option>
                                                    <option value="+973" data-flag="bh">+973 (Bahrain)</option>
                                                    <option value="+880" data-flag="bd">+880 (Bangladesh)</option>
                                                    <option value="+1 246" data-flag="bb">+1 246 (Barbados)</option>
                                                    <option value="+375" data-flag="by">+375 (Belarus)</option>
                                                    <option value="+32" data-flag="be">+32 (Belgium)</option>
                                                    <option value="+501" data-flag="bz">+501 (Belize)</option>
                                                    <option value="+229" data-flag="bj">+229 (Benin)</option>
                                                    <option value="+1 441" data-flag="bm">+1 441 (Bermuda)</option>
                                                    <option value="+975" data-flag="bt">+975 (Bhutan)</option>
                                                    <option value="+591" data-flag="bo">+591 (Bolivia, Plurinational State of Bolivia)</option>
                                                    <option value="+387" data-flag="ba">+387 (Bosnia and Herzegovina)</option>
                                                    <option value="+267" data-flag="bw">+267 (Botswana)</option>
                                                    <option value="+55" data-flag="bv">+55 (Bouvet Island)</option>
                                                    <option value="+55" data-flag="br">+55 (Brazil)</option>
                                                    <option value="+246" data-flag="io">+246 (British Indian Ocean Territory)</option>
                                                    <option value="+673" data-flag="bn">+673 (Brunei Darussalam)</option>
                                                    <option value="+359" data-flag="bg">+359 (Bulgaria)</option>
                                                    <option value="+226" data-flag="bf">+226 (Burkina Faso)</option>
                                                    <option value="+257" data-flag="bi">+257 (Burundi)</option>
                                                    <option value="+855" data-flag="kh">+855 (Cambodia)</option>
                                                    <option value="+237" data-flag="cm">+237 (Cameroon)</option>
                                                    <option value="+1" data-flag="ca">+1 (Canada)</option>
                                                    <option value="+238" data-flag="cv">+238 (Cape Verde)</option>
                                                    <option value="+1345" data-flag="ky">+1345 (Cayman Islands)</option>
                                                    <option value="+236" data-flag="cf">+236 (Central African Republic)</option>
                                                    <option value="+235" data-flag="td">+235 (Chad)</option>
                                                    <option value="+56" data-flag="cl">+56 (Chile)</option>
                                                    <option value="+86" data-flag="cn">+86 (China)</option>
                                                    <option value="+61" data-flag="cx">+61 (Christmas Island)</option>
                                                    <option value="+61" data-flag="cc">+61 (Cocos (Keeling) Islands)</option>
                                                    <option value="+57" data-flag="co">+57 (Colombia)</option>
                                                    <option value="+269" data-flag="km">+269 (Comoros)</option>
                                                    <option value="+242" data-flag="cg">+242 (Congo)</option>
                                                    <option value="+243" data-flag="cd">+243 (Congo, The Democratic Republic of the)</option>
                                                    <option value="+682" data-flag="ck">+682 (Cook Islands)</option>
                                                    <option value="+506" data-flag="cr">+506 (Costa Rica)</option>
                                                    <option value="+385" data-flag="hr">+385 (Croatia)</option>
                                                    <option value="+53" data-flag="cu">+53 (Cuba)</option>
                                                    <option value="+357" data-flag="cy">+357 (Cyprus)</option>
                                                    <option value="+420" data-flag="cz">+420 (Czech Republic)</option>
                                                    <option value="+45" data-flag="dk">+45 (Denmark)</option>
                                                    <option value="+253" data-flag="dj">+253 (Djibouti)</option>
                                                    <option value="+1 767" data-flag="dm">+1 767 (Dominica)</option>
                                                    <option value="+1 849" data-flag="do">+1 849 (Dominican Republic)</option>
                                                    <option value="+593" data-flag="ec">+593 (Ecuador)</option>
                                                    <option value="+20" data-flag="eg">+20 (Egypt)</option>
                                                    <option value="+503" data-flag="sv">+503 (El Salvador)</option>
                                                    <option value="+240" data-flag="gq">+240 (Equatorial Guinea)</option>
                                                    <option value="+291" data-flag="er">+291 (Eritrea)</option>
                                                    <option value="+372" data-flag="ee">+372 (Estonia)</option>
                                                    <option value="+251" data-flag="et">+251 (Ethiopia)</option>
                                                    <option value="+500" data-flag="fk">+500 (Falkland Islands)</option>
                                                    <option value="+298" data-flag="fo">+298 (Faroe Islands)</option>
                                                    <option value="+679" data-flag="fj">+679 (Fiji)</option>
                                                    <option value="+358" data-flag="fi">+358 (Finland)</option>
                                                    <option value="+33" data-flag="fr">+33 (France)</option>
                                                    <option value="+689" data-flag="pf">+689 (French Polynesia)</option>
                                                    <option value="+262" data-flag="tf">+262 (French Southern and Antarctic Lands)</option>
                                                    <option value="+241" data-flag="ga">+241 (Gabon)</option>
                                                    <option value="+220" data-flag="gm">+220 (Gambia)</option>
                                                    <option value="+995" data-flag="ge">+995 (Georgia)</option>
                                                    <option value="+49" data-flag="de">+49 (Germany)</option>
                                                    <option value="+233" data-flag="gh">+233 (Ghana)</option>
                                                    <option value="+350" data-flag="gi">+350 (Gibraltar)</option>
                                                    <option value="+30" data-flag="el">+30 (Greece)</option>
                                                    <option value="+299" data-flag="gl">+299 (Greenland)</option>
                                                    <option value="+1 473" data-flag="gd">+1 473 (Grenada)</option>
                                                    <option value="+590" data-flag="gp">+590 (Guadeloupe)</option>
                                                    <option value="+1 671" data-flag="gu">+1 671 (Guam)</option>
                                                    <option value="+502" data-flag="gt">+502 (Guatemala)</option>
                                                    <option value="+44" data-flag="gg">+44 (Guernsey)</option>
                                                    <option value="+224" data-flag="gn">+224 (Guinea)</option>
                                                    <option value="+245" data-flag="gw">+245 (Guinea-Bissau)</option>
                                                    <option value="+592" data-flag="gy">+592 (Guyana)</option>
                                                    <option value="+509" data-flag="ht">+509 (Haiti)</option>
                                                    <option value="+672" data-flag="hm">+672 (Heard Island and McDonald Islands)</option>
                                                    <option value="+504" data-flag="hn">+504 (Honduras)</option>
                                                    <option value="+852" data-flag="hk">+852 (Hong Kong)</option>
                                                    <option value="+36" data-flag="hu">+36 (Hungary)</option>
                                                    <option value="+354" data-flag="is">+354 (Iceland)</option>
                                                    <option value="+91" data-flag="in" selected>+91 (India)</option>
                                                    <option value="+62" data-flag="id">+62 (Indonesia)</option>
                                                    <option value="+98" data-flag="ir">+98 (Iran, Islamic Republic of)</option>
                                                    <option value="+964" data-flag="iq">+964 (Iraq)</option>
                                                    <option value="+353" data-flag="ie">+353 (Ireland)</option>
                                                    <option value="+44" data-flag="im">+44 (Isle of Man)</option>
                                                    <option value="+972" data-flag="il">+972 (Israel)</option>
                                                    <option value="+39" data-flag="it">+39 (Italy)</option>
                                                    <option value="+225" data-flag="ci">+225 (Ivory Coast)</option>
                                                    <option value="+1 876" data-flag="jm">+1 876 (Jamaica)</option>
                                                    <option value="+81" data-flag="jp">+81 (Japan)</option>
                                                    <option value="+44" data-flag="je">+44 (Jersey)</option>
                                                    <option value="+962" data-flag="jo">+962 (Jordan)</option>
                                                    <option value="+7" data-flag="kz">+7 (Kazakhstan)</option>
                                                    <option value="+254" data-flag="ke">+254 (Kenya)</option>
                                                    <option value="+686" data-flag="ki">+686 (Kiribati)</option>
                                                    <option value="+965" data-flag="kw">+965 (Kuwait)</option>
                                                    <option value="+996" data-flag="kg">+996 (Kyrgyzstan)</option>
                                                    <option value="+856" data-flag="la">+856 (Laos)</option>
                                                    <option value="+371" data-flag="lv">+371 (Latvia)</option>
                                                    <option value="+961" data-flag="lb">+961 (Lebanon)</option>
                                                    <option value="+266" data-flag="ls">+266 (Lesotho)</option>
                                                    <option value="+231" data-flag="lr">+231 (Liberia)</option>
                                                    <option value="+218" data-flag="ly">+218 (Libyan Arab Jamahiriya)</option>
                                                    <option value="+423" data-flag="li">+423 (Liechtenstein)</option>
                                                    <option value="+370" data-flag="lt">+370 (Lithuania)</option>
                                                    <option value="+352" data-flag="lu">+352 (Luxembourg)</option>
                                                    <option value="+853" data-flag="mo">+853 (Macau)</option>
                                                    <option value="+389" data-flag="mk">+389 (Macedonia, The Former Yugoslav Republic of)</option>
                                                    <option value="+261" data-flag="mg">+261 (Madagascar)</option>
                                                    <option value="+265" data-flag="mw">+265 (Malawi)</option>
                                                    <option value="+60" data-flag="my">+60 (Malaysia)</option>
                                                    <option value="+960" data-flag="mv">+960 (Maldives)</option>
                                                    <option value="+223" data-flag="ml">+223 (Mali)</option>
                                                    <option value="+356" data-flag="mt">+356 (Malta)</option>
                                                    <option value="+692" data-flag="mh">+692 (Marshall Islands)</option>
                                                    <option value="+596" data-flag="mq">+596 (Martinique)</option>
                                                    <option value="+222" data-flag="mr">+222 (Mauritania)</option>
                                                    <option value="+230" data-flag="mu">+230 (Mauritius)</option>
                                                    <option value="+262" data-flag="yt">+262 (Mayotte)</option>
                                                    <option value="+52" data-flag="mx">+52 (Mexico)</option>
                                                    <option value="+691" data-flag="fm">+691 (Micronesia, Federated States of)</option>
                                                    <option value="+373" data-flag="md">+373 (Moldova, Republic of)</option>
                                                    <option value="+377" data-flag="mc">+377 (Monaco)</option>
                                                    <option value="+976" data-flag="mn">+976 (Mongolia)</option>
                                                    <option value="+382" data-flag="me">+382 (Montenegro)</option>
                                                    <option value="+1664" data-flag="ms">+1664 (Montserrat)</option>
                                                    <option value="+212" data-flag="ma">+212 (Morocco)</option>
                                                    <option value="+258" data-flag="mz">+258 (Mozambique)</option>
                                                    <option value="+95" data-flag="mm">+95 (Myanmar)</option>
                                                    <option value="+264" data-flag="na">+264 (Namibia)</option>
                                                    <option value="+674" data-flag="nr">+674 (Nauru)</option>
                                                    <option value="+977" data-flag="np">+977 (Nepal)</option>
                                                    <option value="+31" data-flag="nl">+31 (Netherlands)</option>
                                                    <option value="+599" data-flag="an">+599 (Netherlands Antilles)</option>
                                                    <option value="+687" data-flag="nc">+687 (New Caledonia)</option>
                                                    <option value="+64" data-flag="nz">+64 (New Zealand)</option>
                                                    <option value="+505" data-flag="ni">+505 (Nicaragua)</option>
                                                    <option value="+227" data-flag="ne">+227 (Niger)</option>
                                                    <option value="+234" data-flag="ng">+234 (Nigeria)</option>
                                                    <option value="+683" data-flag="nu">+683 (Niue)</option>
                                                    <option value="+672" data-flag="nf">+672 (Norfolk Island)</option>
                                                    <option value="+850" data-flag="kp">+850 (North Korea)</option>
                                                    <option value="+1 670" data-flag="mp">+1 670 (Northern Mariana Islands)</option>
                                                    <option value="+47" data-flag="no">+47 (Norway)</option>
                                                    <option value="+968" data-flag="om">+968 (Oman)</option>
                                                    <option value="+92" data-flag="pk">+92 (Pakistan)</option>
                                                    <option value="+680" data-flag="pw">+680 (Palau)</option>
                                                    <option value="+970" data-flag="ps">+970 (Palestinian Territory, Occupied)</option>
                                                    <option value="+507" data-flag="pa">+507 (Panama)</option>
                                                    <option value="+675" data-flag="pg">+675 (Papua New Guinea)</option>
                                                    <option value="+595" data-flag="py">+595 (Paraguay)</option>
                                                    <option value="+51" data-flag="pe">+51 (Peru)</option>
                                                    <option value="+63" data-flag="ph">+63 (Philippines)</option>
                                                    <option value="+870" data-flag="pn">+870 (Pitcairn)</option>
                                                    <option value="+48" data-flag="pl">+48 (Poland)</option>
                                                    <option value="+351" data-flag="pt">+351 (Portugal)</option>
                                                    <option value="+1 939" data-flag="pr">+1 939 (Puerto Rico)</option>
                                                    <option value="+974" data-flag="qa">+974 (Qatar)</option>
                                                    <option value="+40" data-flag="ro">+40 (Romania)</option>
                                                    <option value="+7" data-flag="ru">+7 (Russia)</option>
                                                    <option value="+250" data-flag="rw">+250 (Rwanda)</option>
                                                    <option value="+262" data-flag="re">+262 (Réunion)</option>
                                                    <option value="+290" data-flag="sh">+290 (Saint Helena, Ascension and Tristan Da Cunha)</option>
                                                    <option value="+1 869" data-flag="kn">+1 869 (Saint Kitts and Nevis)</option>
                                                    <option value="+1 758" data-flag="lc">+1 758 (Saint Lucia)</option>
                                                    <option value="+508" data-flag="pm">+508 (Saint Pierre and Miquelon)</option>
                                                    <option value="+1 784" data-flag="vc">+1 784 (Saint Vincent and the Grenadines)</option>
                                                    <option value="+685" data-flag="ws">+685 (Samoa)</option>
                                                    <option value="+378" data-flag="sm">+378 (San Marino)</option>
                                                    <option value="+239" data-flag="st">+239 (Sao Tome and Principe)</option>
                                                    <option value="+966" data-flag="sa">+966 (Saudi Arabia)</option>
                                                    <option value="+221" data-flag="sn">+221 (Senegal)</option>
                                                    <option value="+381" data-flag="rs">+381 (Serbia)</option>
                                                    <option value="+248" data-flag="sc">+248 (Seychelles)</option>
                                                    <option value="+232" data-flag="sl">+232 (Sierra Leone)</option>
                                                    <option value="+65" data-flag="sg">+65 (Singapore)</option>
                                                    <option value="+421" data-flag="sk">+421 (Slovakia)</option>
                                                    <option value="+386" data-flag="si">+386 (Slovenia)</option>
                                                    <option value="+677" data-flag="sb">+677 (Solomon Islands)</option>
                                                    <option value="+252" data-flag="so">+252 (Somalia)</option>
                                                    <option value="+27" data-flag="za">+27 (South Africa)</option>
                                                    <option value="+500" data-flag="gs">+500 (South Georgia and the South Sandwich Islands)</option>
                                                    <option value="+82" data-flag="kr">+82 (South Korea)</option>
                                                    <option value="+34" data-flag="es">+34 (Spain)</option>
                                                    <option value="+94" data-flag="lk">+94 (Sri Lanka)</option>
                                                    <option value="+249" data-flag="sd">+249 (Sudan)</option>
                                                    <option value="+597" data-flag="sr">+597 (Suriname)</option>
                                                    <option value="+47" data-flag="sj">+47 (Svalbard and Jan Mayen)</option>
                                                    <option value="+268" data-flag="sz">+268 (Swaziland)</option>
                                                    <option value="+46" data-flag="se">+46 (Sweden)</option>
                                                    <option value="+41" data-flag="ch">+41 (Switzerland)</option>
                                                    <option value="+963" data-flag="sy">+963 (Syria)</option>
                                                    <option value="+886" data-flag="tw">+886 (Taiwan)</option>
                                                    <option value="+992" data-flag="tj">+992 (Tajikistan)</option>
                                                    <option value="+255" data-flag="tz">+255 (Tanzania, United Republic of)</option>
                                                    <option value="+66" data-flag="th">+66 (Thailand)</option>
                                                    <option value="+670" data-flag="tl">+670 (Timor-Leste)</option>
                                                    <option value="+228" data-flag="tg">+228 (Togo)</option>
                                                    <option value="+690" data-flag="tk">+690 (Tokelau)</option>
                                                    <option value="+676" data-flag="to">+676 (Tonga)</option>
                                                    <option value="+1 868" data-flag="tt">+1 868 (Trinidad and Tobago)</option>
                                                    <option value="+216" data-flag="tn">+216 (Tunisia)</option>
                                                    <option value="+90" data-flag="tr">+90 (Turkey)</option>
                                                    <option value="+993" data-flag="tm">+993 (Turkmenistan)</option>
                                                    <option value="+1 649" data-flag="tc">+1 649 (Turks and Caicos Islands)</option>
                                                    <option value="+688" data-flag="tv">+688 (Tuvalu)</option>
                                                    <option value="+256" data-flag="ug">+256 (Uganda)</option>
                                                    <option value="+380" data-flag="ua">+380 (Ukraine)</option>
                                                    <option value="+971" data-flag="ae">+971 (United Arab Emirates)</option>
                                                    <option value="+44" data-flag="gb">+44 (United Kingdom)</option>
                                                    <option value="+1" data-flag="us">+1 (United States)</option>
                                                    <option value="+1581" data-flag="um">+1581 (United States Minor Outlying Islands)</option>
                                                    <option value="+598" data-flag="uy">+598 (Uruguay)</option>
                                                    <option value="+998" data-flag="uz">+998 (Uzbekistan)</option>
                                                    <option value="+678" data-flag="vu">+678 (Vanuatu)</option>
                                                    <option value="+379" data-flag="va">+379 (Vatican City State (Holy See))</option>
                                                    <option value="+58" data-flag="ve">+58 (Venezuela, Bolivarian Republic of)</option>
                                                    <option value="+84" data-flag="vn">+84 (Vietnam)</option>
                                                    <option value="+1 284" data-flag="vg">+1 284 (Virgin Islands, British)</option>
                                                    <option value="+1 340" data-flag="vi">+1 340 (Virgin Islands, U.S.)</option>
                                                    <option value="+681" data-flag="wf">+681 (Wallis and Futuna)</option>
                                                    <option value="+732" data-flag="eh">+732 (Western Sahara)</option>
                                                    <option value="+967" data-flag="ye">+967 (Yemen)</option>
                                                    <option value="+260" data-flag="zm">+260 (Zambia)</option>
                                                    <option value="+263" data-flag="zw">+263 (Zimbabwe)</option>
                                                </select>
                                            </div>
                                            <input type="tel" class="mobile-phone-input demo-input flex-grow-1" id="mobileNumber" placeholder="Enter Mobile Number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                            <i class="fa-solid fa-phone input-icon-right phone-icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="termsCheck">
                                    <label class="form-check-label ms-2" for="termsCheck">
                                        I agree to be contacted on whatsapp
                                    </label>
                                </div>

                                <!-- Submit Row -->
                                <div class="mt-4">
                                    <button type="submit" class="btn-continue w-100 d-flex justify-content-center align-items-center" id="btnContinueStep1" disabled>
                                        Continue <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Form Card (Step 2) -->
                        <div class="demo-form-card step-2-card" id="step-2" style="display: <?php echo ($dev_step == 2) ? 'block' : 'none'; ?>;">
                            <!-- Badge -->
                            <div class="d-inline-block px-3 py-1 mb-3" class="step-badge">
                                Step 2
                            </div>

                            <h3 class="fw-bold mb-2">What Are you Interested In</h3>
                            <p class="text-muted mb-4">Help us understand your application better.</p>

                            <!-- Tabs/Categories -->
                            <div class="d-flex p-1 mb-4 category-tabs">
                                <div class="flex-fill text-center py-2 tab-item active" data-target="buy-products">Buy Products</div>
                                <div class="flex-fill text-center py-2 tab-item" data-target="engineering-services">Engineering & 3D Services</div>
                                <div class="flex-fill text-center py-2 tab-item" data-target="business-opportunities">Business Opportunities</div>
                            </div>

                            <form id="bookDemoFormStep2" onsubmit="event.preventDefault(); goToStep3();">
                                <!-- Hidden input to track selected tab -->
                                <input type="hidden" name="selectedCategory" id="selectedCategory" value="Buy Products">

                                <!-- Buy Products Content -->
                                <div id="buy-products" class="tab-content-block">
                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/product-1.svg" alt="3D Scanners" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">3D Scanners</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Entry-level, Professional, and metrology grade 3D Scanners</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="3D Scanners">
                                        </div>
                                    </label>

                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/product-2.svg" alt="3D Scanning Software" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">3D Scanning Software</h5>
                                            <p class="mb-0 text-muted demo-sm-text">3D Inspection, 3D Reverse engineering, scan-to-CAD, and flat pattern creation software.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="3D Scanning Software">
                                        </div>
                                    </label>

                                    <label class="product-option mb-4 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/product-3.svg" alt="3D Printers" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">3D Printers</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Industrial and professional 3D printing solutions for prototyping and manufacturing.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="3D Printers">
                                        </div>
                                    </label>

                                </div>

                                <!-- Engineering & 3D Services Content -->
                                <div id="engineering-services" class="tab-content-block" style="display: none;">
                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/engineering-1.svg" alt="3D Scanning Services" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">3D Scanning Services</h5>
                                            <p class="mb-0 text-muted demo-sm-text">On-site or off-site industrial 3D scanning for parts, vehicles, plants, and facilities.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="3D Scanning Services">
                                        </div>
                                    </label>

                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/engineering-2.svg" alt="3D Inspection Services" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">3D Inspection Services</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Dimensional inspection, GD&T validation, and deviation analysis reports.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="3D Inspection Services">
                                        </div>
                                    </label>

                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/engineering-3.svg" alt="Reverse Engineering Services" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">Reverse Engineering Services</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Convert physical parts into editable CAD models for manufacturing and redesign.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="Reverse Engineering Services">
                                        </div>
                                    </label>

                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/engineering-4.svg" alt="Automotive Benchmarking Services" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">Automotive Benchmarking Services</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Vehicle scanning, digital benchmarking, teardown studies, and competitive analysis.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="Automotive Benchmarking Services">
                                        </div>
                                    </label>

                                    <label class="product-option mb-4 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/product-3.svg" alt="3D Printing Services" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">3D Printing Services</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Rapid prototyping and functional part manufacturing.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="3D Printing Services">
                                        </div>
                                    </label>
                                </div>

                                <!-- Business Opportunities Content -->
                                <div id="business-opportunities" class="tab-content-block" style="display: none;">
                                    <label class="product-option mb-3 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/business-1.svg" alt="Channel Partnership" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">Channel Partnership</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Become a reseller, distributor, training partner, or service partner.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="Channel Partnership">
                                        </div>
                                    </label>

                                    <label class="product-option mb-4 d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <img src="assets/images/book-a-live-demo/business-2.svg" alt="Other Enquiries" width="30">
                                        </div>
                                        <div class="flex-grow-1 px-2">
                                            <h5 class="mb-1 fw-bold demo-sec-title">Other Enquiries</h5>
                                            <p class="mb-0 text-muted demo-sm-text">Projects, collaborations, research, training, rentals, or custom requirements.</p>
                                        </div>
                                        <div class="ms-3">
                                            <input type="checkbox" class="custom-checkbox step2-checkbox" name="interest[]" value="Other Enquiries">
                                        </div>
                                    </label>
                                </div>

                                <!-- Demo Type -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold mb-3 demo-sec-title">Demo Type</label>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="demo-type-option d-flex align-items-center p-3 h-100">
                                                <div class="ms-1 me-3 px-3">
                                                    <input class="form-check-input custom-radio demo-type-radio" type="radio" name="demoType" value="Online Demo">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fw-bold demo-text-dark">Online Demo</h6>
                                                    <p class="mb-0 text-muted demo-xs-text">Zoom / Teams</p>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="demo-type-option d-flex align-items-center p-3 h-100">
                                                <div class="ms-1 me-3 px-3">
                                                    <input class="form-check-input custom-radio demo-type-radio" type="radio" name="demoType" value="Offline Demo">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fw-bold demo-text-dark">Offline Demo</h6>
                                                    <p class="mb-0 text-muted demo-xs-text">At Your Facility</p>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="demo-type-option d-flex align-items-center p-3 h-100">
                                                <div class="ms-1 me-3 px-3">
                                                    <input class="form-check-input custom-radio demo-type-radio" type="radio" name="demoType" value="Visit Experience Center">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fw-bold demo-text-dark">Visit Experience Center</h6>
                                                    <p class="mb-0 text-muted demo-xs-text">At Precise3DM</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <!-- Buttons Row -->
                                <div class="d-flex justify-content-between mt-5">
                                    <button type="button" class="btn-back d-flex align-items-center justify-content-center" onclick="goToStep1()">
                                        <i class="fa-solid fa-arrow-left"></i> <span class="px-2">Back</span>
                                    </button>
                                    <button type="submit" id="btnContinueStep2" class="btn-continue d-flex align-items-center justify-content-center">
                                        <span class="px-2">Continue</span> <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Form Card (Step 3) -->
                        <div class="demo-form-card step-3-card" id="step-3" style="display: <?php echo ($dev_step == 3) ? 'block' : 'none'; ?>;">
                            <!-- Badge -->
                            <div class="d-inline-block px-3 py-1 mb-3" class="step-badge">
                                Step 3
                            </div>

                            <h3 class="fw-bold mb-2">Select Your Slot</h3>
                            <p class="text-muted mb-4">Choose a convenient date and time for your demo.</p>

                            <form id="bookDemoFormStep3" onsubmit="event.preventDefault(); submitForm();">
                                <div class="row g-4 mb-5">
                                    <!-- Left Column: Calendar -->
                                    <div class="col-lg-6">
                                        <label class="form-label fw-bold mb-3 demo-sec-title">Select Your Date</label>
                                        <div class="calendar-container p-3 h-100 cal-wrapper">
                                            <input type="text" id="inline-calendar" class="d-none" name="demoDate" required>
                                        </div>
                                    </div>

                                    <!-- Right Column: Time Slots -->
                                    <div class="col-lg-6 pt-5">
                                        <label class="form-label fw-bold mb-3 demo-sec-title">Available Time Slots</label>
                                        <div class="row g-3">
                                            <div class="col-6 py-2">
                                                <label class="time-slot-option d-flex align-items-center justify-content-center p-2 text-center h-100" >
                                                    <input class="form-check-input d-none time-slot-radio" type="radio" name="demoTime" value="09:00 AM - 10:00 AM" required>
                                                    <span class="time-slot-text fw-semibold time-slot-txt">10:30 AM - 11:30 AM</span>
                                                </label>
                                            </div>
                                            <div class="col-6 py-2">
                                                <label class="time-slot-option d-flex align-items-center justify-content-center p-2 text-center h-100" >
                                                    <input class="form-check-input d-none time-slot-radio" type="radio" name="demoTime" value="10:00 AM - 11:00 AM">
                                                    <span class="time-slot-text fw-semibold time-slot-txt">11:30 AM - 12:30 PM</span>
                                                </label>
                                            </div>
                                            <div class="col-6 py-2">
                                                <label class="time-slot-option d-flex align-items-center justify-content-center p-2 text-center h-100" >
                                                    <input class="form-check-input d-none time-slot-radio" type="radio" name="demoTime" value="11:30 AM - 12:30 PM">
                                                    <span class="time-slot-text fw-semibold time-slot-txt">12:30 PM - 1:30 PM</span>
                                                </label>
                                            </div>
                                            <div class="col-6 py-2">
                                                <label class="time-slot-option d-flex align-items-center justify-content-center p-2 text-center h-100" >
                                                    <input class="form-check-input d-none time-slot-radio" type="radio" name="demoTime" value="02:00 PM - 03:00 PM">
                                                    <span class="time-slot-text fw-semibold time-slot-txt">02:30 PM - 03:30 PM</span>
                                                </label>
                                            </div>
                                            <div class="col-6 py-2">
                                                <label class="time-slot-option d-flex align-items-center justify-content-center p-2 text-center h-100" >
                                                    <input class="form-check-input d-none time-slot-radio" type="radio" name="demoTime" value="03:30 PM - 04:30 PM">
                                                    <span class="time-slot-text fw-semibold time-slot-txt">03:30 PM - 04:30 PM</span>
                                                </label>
                                            </div>
                                            <div class="col-6 py-2">
                                                <label class="time-slot-option d-flex align-items-center justify-content-center p-2 text-center h-100" >
                                                    <input class="form-check-input d-none time-slot-radio" type="radio" name="demoTime" value="05:00 PM - 06:00 PM">
                                                    <span class="time-slot-text fw-semibold time-slot-txt">04:30 PM - 05:30 PM</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Buttons Row -->
                                <div class="d-flex justify-content-between mt-5">
                                    <button type="button" class="btn-back d-flex align-items-center justify-content-center" onclick="goToStep2Back()">
                                        <i class="fa-solid fa-arrow-left"></i> <span class="px-2">Back</span>
                                    </button>
                                    <button type="submit" id="btnConfirmSlot" class="btn-continue d-flex align-items-center justify-content-center btn-orange-solid">
                                        <span class="px-2">Confirm Date & Time</span> <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonial Section -->
        <section class="testimonial-section py-5 mb-5">
            <div class="container-fluid container-px-5">
                <div class="text-center mb-5">
                    <h2 class="industry-title">Trusted by Industry Leaders Worldwide</h2>
                </div>

                <!-- Company Logos -->
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 company-logos-row">
                    <img src="assets/images/book-a-live-demo/company-1.png" alt="Company 1">
                    <img src="assets/images/book-a-live-demo/company-2.png" alt="Company 2">
                    <img src="assets/images/book-a-live-demo/company-3.png" alt="Company 3">
                    <img src="assets/images/book-a-live-demo/company-4.png" alt="Company 4">
                    <img src="assets/images/book-a-live-demo/company-5.png" alt="Company 5">
                    <img src="assets/images/book-a-live-demo/company-6.png" alt="Company 6">
                </div>

                <!-- Stats/Testimonial Cards -->
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-3">
                        <div class="testimonial-card">
                            <div class="testimonial-icon-wrapper">
                                <img src="assets/images/book-a-live-demo/testimonial-1.svg" alt="Icon 1">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-stat">5000+</h3>
                                <p class="testimonial-text">Project Delivered Across India</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-3">
                        <div class="testimonial-card">
                            <div class="testimonial-icon-wrapper">
                                <img src="assets/images/book-a-live-demo/testimonial-2.svg" alt="Icon 2">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-stat">1000+</h3>
                                <p class="testimonial-text">Happy Customers Across Industries</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-3">
                        <div class="testimonial-card">
                            <div class="testimonial-icon-wrapper">
                                <img src="assets/images/book-a-live-demo/testimonial-4.svg" alt="Icon 4">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-stat">15+</h3>
                                <p class="testimonial-text">Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-3">
                        <div class="testimonial-card">
                            <div class="testimonial-icon-wrapper">
                                <img src="assets/images/book-a-live-demo/testimonial-3.svg" alt="Icon 3">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-stat">Pan India</h3>
                                <p class="testimonial-text">Support & Service Network</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- =========================================================
         THANK YOU SECTION
         ========================================================= -->
    <section class="thank-you-section" id="thank-you-section" style="display: none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="thank-you-card text-center" >

                        <!-- 4 Concentric Circles -->
                        <div class="ty-circle-4 mx-auto mb-4">
                            <div class="ty-circle-3">
                                <div class="ty-circle-2">
                                    <div class="ty-circle-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="ty-title mb-3 fw-bold">Your Demo Has Been Confirmed!</h2>
                        <p class="ty-subtitle text-muted mb-4">We have sent the details to your email.</p>

                        <ul class="thank-you-list text-start mx-auto mb-5" >
                            <li class="mb-3 d-flex align-items-center">
                                <div class="list-bullet me-3" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="pl-2" >Calendar Invitation Sent</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <div class="list-bullet me-3" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="pl-2" >Meeting Link Sent</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <div class="list-bullet me-3" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="pl-2" >Assigned Sales Engineer</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <div class="list-bullet me-3" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="pl-2" >Product Brochure</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <div class="list-bullet me-3" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="pl-2" >Case Studies</span>
                            </li>
                            <li class="mb-0 d-flex align-items-center">
                                <div class="list-bullet me-3" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="pl-2" >Demo Preparation Guide</span>
                            </li>
                        </ul>

                        <button type="button" class="btn-primary px-5 py-2" onclick="resetFormAndGoHome()" >Back to Home</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Form Validation Logic
            const formElements = document.querySelectorAll('#bookDemoFormStep1 .demo-input, #bookDemoFormStep1 .form-check-input');
            const btnContinue = document.getElementById('btnContinueStep1');

            function checkFormValidity() {
                let isValid = true;
                formElements.forEach(el => {
                    if (el.required) {
                        if (el.type === 'checkbox') {
                            if (!el.checked) isValid = false;
                        } else if (!el.value) {
                            isValid = false;
                        }
                    }
                });
                btnContinue.disabled = !isValid;
            }

            formElements.forEach(el => {
                el.addEventListener('input', checkFormValidity);
                el.addEventListener('change', checkFormValidity);
            });
            // Update Country Code & Flag in Mobile Input Group
            window.updateCountryCode = function(select) {
                const selectedOption = select.options[select.selectedIndex];
                const flagCode = selectedOption.getAttribute('data-flag');
                const dialCode = selectedOption.value;

                document.getElementById('selectedFlag').src = `https://flagcdn.com/w20/${flagCode}.png`;
                document.getElementById('selectedDialCode').innerText = dialCode;
            };

            // Fetch Countries, States, Cities (CountriesNow API)
            const countrySelect = document.getElementById('countrySelect');
            const stateSelect = document.getElementById('stateSelect');
            const citySelect = document.getElementById('citySelect');

            // 1. Fetch Countries
            fetch('https://countriesnow.space/api/v0.1/countries/states')
                .then(res => res.json())
                .then(res => {
                    if (!res.error) {
                        window.countryData = res.data; // Store for state lookup
                        res.data.forEach(country => {
                            let option = document.createElement('option');
                            option.value = country.name;
                            option.textContent = country.name;
                            countrySelect.appendChild(option);
                        });
                    }
                });

            // 2. On Country Change, Populate States
            countrySelect.addEventListener('change', function() {
                const selectedCountryName = this.value;
                stateSelect.innerHTML = '<option value="" selected disabled>Select State</option>';
                citySelect.innerHTML = '<option value="" selected disabled>Select City</option>';
                stateSelect.disabled = true;
                citySelect.disabled = true;

                if (window.countryData) {
                    const country = window.countryData.find(c => c.name === selectedCountryName);
                    if (country && country.states && country.states.length > 0) {
                        country.states.forEach(state => {
                            let option = document.createElement('option');
                            option.value = state.name;
                            option.textContent = state.name;
                            stateSelect.appendChild(option);
                        });
                        stateSelect.disabled = false;
                    }
                }
                checkFormValidity();
            });

            // 3. On State Change, Populate Cities
            stateSelect.addEventListener('change', function() {
                const selectedCountryName = countrySelect.value;
                const selectedStateName = this.value;
                citySelect.innerHTML = '<option value="" selected disabled>Select City</option>';
                citySelect.disabled = true;

                fetch('https://countriesnow.space/api/v0.1/countries/state/cities', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            country: selectedCountryName,
                            state: selectedStateName
                        })
                    })
                    .then(res => res.json())
                    .then(res => {
                        if (!res.error && res.data && res.data.length > 0) {
                            res.data.forEach(city => {
                                let option = document.createElement('option');
                                option.value = city;
                                option.textContent = city;
                                citySelect.appendChild(option);
                            });
                            citySelect.disabled = false;
                        }
                    })
                    .catch(err => {
                        citySelect.disabled = false; // Fallback
                    });
                checkFormValidity();
            });
            // Step 2 Logic
            const tabItems = document.querySelectorAll('.tab-item');
            const tabContents = document.querySelectorAll('.tab-content-block');
            const selectedCategoryInput = document.getElementById('selectedCategory');
            const step2Form = document.getElementById('bookDemoFormStep2');
            const btnContinueStep2 = document.getElementById('btnContinueStep2');

            // Handle Tab Switching
            tabItems.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active from all tabs
                    tabItems.forEach(t => t.classList.remove('active'));
                    // Add active to clicked tab
                    this.classList.add('active');

                    // Hide all contents
                    tabContents.forEach(c => c.style.display = 'none');
                    // Show target content
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).style.display = 'block';

                    // Update hidden input with the visible text
                    selectedCategoryInput.value = this.textContent.trim();

                    // Clear checkboxes/radios when switching tabs
                    const step2Checkboxes = step2Form.querySelectorAll('.step2-checkbox');
                    const step2Radios = step2Form.querySelectorAll('.demo-type-radio');
                    step2Checkboxes.forEach(cb => cb.checked = false);
                    step2Radios.forEach(radio => radio.checked = false);

                    checkStep2Validity();
                });
            });

            // Handle Step 2 Validation
            function checkStep2Validity() {
                // The continue button is always enabled in Step 2 per user request
                btnContinueStep2.disabled = false;
            }

            if (step2Form) {
                const step2Inputs = step2Form.querySelectorAll('.step2-checkbox, .demo-type-radio');
                step2Inputs.forEach(input => {
                    input.addEventListener('change', checkStep2Validity);
                });
            }
        });

        function goToStep2() {
            // Send Step 1 data in the background
            const dialCode = document.getElementById('selectedDialCode') ? document.getElementById('selectedDialCode').innerText : '';
            const mobileNumber = document.getElementById('mobileNumber') ? document.getElementById('mobileNumber').value : '';
            const fullMobile = dialCode + ' ' + mobileNumber;

            const step1Data = {
                step: '1',
                fullName: document.getElementById('firstName') ? document.getElementById('firstName').value : '',
                companyName: document.getElementById('companyName') ? document.getElementById('companyName').value : '',
                emailAddress: document.getElementById('businessEmail') ? document.getElementById('businessEmail').value : '',
                country: document.getElementById('countrySelect') ? document.getElementById('countrySelect').value : '',
                state: document.getElementById('stateSelect') ? document.getElementById('stateSelect').value : '',
                city: document.getElementById('citySelect') ? document.getElementById('citySelect').value : '',
                mobileNumber: fullMobile,
                termsAgreed: document.getElementById('termsCheck') ? document.getElementById('termsCheck').checked : false
            };

            fetch('process-book-live-demo.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(step1Data)
                })
                .then(res => res.json())
                .then(data => console.log('Step 1 email sent:', data))
                .catch(err => console.error('Error sending step 1 email:', err));

            // Hide Step 1, Show Step 2
            document.getElementById('step-1').style.display = 'none';
            document.getElementById('step-2').style.display = 'block';

            // Update Progress Header
            const stepText = document.querySelector('.step-text');
            if (stepText) stepText.innerText = 'Step 2 of 3';

            // Update Step Indicators
            const steps = document.querySelectorAll('.step-indicators .step');
            if (steps.length >= 2) {
                steps[1].classList.add('active'); // Activate step 2 indicator
            }

            const stepLines = document.querySelectorAll('.step-indicators .step-line');
            if (stepLines.length >= 1) {
                stepLines[0].classList.add('active');
            }

            // Scroll to top of form smoothly
            document.getElementById('demo-form-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function goToStep1() {
            // Hide Step 2, Show Step 1
            document.getElementById('step-2').style.display = 'none';
            document.getElementById('step-1').style.display = 'block';

            // Update Progress Header
            const stepText = document.querySelector('.step-text');
            if (stepText) stepText.innerText = 'Step 1 of 3';

            // Update Step Indicators
            const steps = document.querySelectorAll('.step-indicators .step');
            if (steps.length >= 2) {
                steps[1].classList.remove('active'); // Deactivate step 2 indicator
            }

            const stepLines = document.querySelectorAll('.step-indicators .step-line');
            if (stepLines.length >= 1) {
                stepLines[0].classList.remove('active');
            }

            // Scroll to top of form smoothly
            document.getElementById('demo-form-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function goToStep3() {
            // Hide Step 2, Show Step 3
            document.getElementById('step-2').style.display = 'none';
            document.getElementById('step-3').style.display = 'block';

            // Update Progress Header
            const stepText = document.querySelector('.step-text');
            if (stepText) stepText.innerText = 'Step 3 of 3';

            // Update Step Indicators
            const steps = document.querySelectorAll('.step-indicators .step');
            if (steps.length >= 3) {
                steps[2].classList.add('active'); // Activate step 3 indicator
            }

            const stepLines = document.querySelectorAll('.step-indicators .step-line');
            if (stepLines.length >= 2) {
                stepLines[1].classList.add('active');
            }

            // Scroll to top of form smoothly
            document.getElementById('demo-form-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function goToStep2Back() {
            // Hide Step 3, Show Step 2
            document.getElementById('step-3').style.display = 'none';
            document.getElementById('step-2').style.display = 'block';

            // Update Progress Header
            const stepText = document.querySelector('.step-text');
            if (stepText) stepText.innerText = 'Step 2 of 3';

            // Update Step Indicators
            const steps = document.querySelectorAll('.step-indicators .step');
            if (steps.length >= 3) {
                steps[2].classList.remove('active'); // Deactivate step 3 indicator
            }

            const stepLines = document.querySelectorAll('.step-indicators .step-line');
            if (stepLines.length >= 2) {
                stepLines[1].classList.remove('active');
            }

            // Scroll to top of form smoothly
            document.getElementById('demo-form-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function submitForm() {
            const btn = document.getElementById('btnConfirmSlot');
            if (btn) {
                btn.disabled = true;
                btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> <span class="px-2">Processing...</span>';
            }

            // Step 1 Data
            const dialCode = document.getElementById('selectedDialCode') ? document.getElementById('selectedDialCode').innerText : '';
            const mobileNumber = document.getElementById('mobileNumber') ? document.getElementById('mobileNumber').value : '';
            const fullMobile = dialCode + ' ' + mobileNumber;

            // Step 2 Data
            const category = document.getElementById('selectedCategory') ? document.getElementById('selectedCategory').value : '';
            let interests = [];
            document.querySelectorAll('input[name="interest[]"]:checked').forEach(cb => interests.push(cb.value));
            const demoType = document.querySelector('input[name="demoType"]:checked') ? document.querySelector('input[name="demoType"]:checked').value : '';

            // Step 3 Data
            const calendarEl = document.getElementById('inline-calendar');
            const demoDate = calendarEl && calendarEl._flatpickr && calendarEl._flatpickr.selectedDates.length > 0 ?
                calendarEl._flatpickr.formatDate(calendarEl._flatpickr.selectedDates[0], "Y-m-d") :
                '';
            const demoTime = document.querySelector('.time-slot-radio:checked') ? document.querySelector('.time-slot-radio:checked').value : '';

            if (!demoDate || !demoTime) {
                alert('Please select a date and time slot.');
                if (btn) {
                    btn.disabled = false;
                    btn.innerHTML = '<span class="px-2">Confirm Date & Time</span> <i class="fa-solid fa-arrow-right"></i>';
                }
                return;
            }

            const allData = {
                step: '3',
                fullName: document.getElementById('firstName') ? document.getElementById('firstName').value : '',
                companyName: document.getElementById('companyName') ? document.getElementById('companyName').value : '',
                emailAddress: document.getElementById('businessEmail') ? document.getElementById('businessEmail').value : '',
                country: document.getElementById('countrySelect') ? document.getElementById('countrySelect').value : '',
                state: document.getElementById('stateSelect') ? document.getElementById('stateSelect').value : '',
                city: document.getElementById('citySelect') ? document.getElementById('citySelect').value : '',
                mobileNumber: fullMobile,
                termsAgreed: document.getElementById('termsCheck') ? document.getElementById('termsCheck').checked : false,
                category: category,
                interests: interests,
                demoType: demoType,
                demoDate: demoDate,
                demoTime: demoTime
            };

            fetch('process-book-live-demo.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(allData)
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Hide Hero & Form entirely
                        const step1Container = document.getElementById('step1-container');
                        if (step1Container) step1Container.style.display = 'none';

                        // Show Thank You
                        const tySection = document.getElementById('thank-you-section');
                        tySection.style.display = 'flex';

                        // Confetti
                        if (typeof confetti === 'function') {
                            confetti({
                                particleCount: 150,
                                spread: 70,
                                origin: {
                                    y: 0.6
                                }
                            });
                        }
                        window.scrollTo(0, 0);
                    } else {
                        alert('Error: ' + data.message);
                        if (btn) {
                            btn.disabled = false;
                            btn.innerHTML = '<span class="px-2">Confirm Date & Time</span> <i class="fa-solid fa-arrow-right"></i>';
                        }
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert('Something went wrong. Please try again.');
                    if (btn) {
                        btn.disabled = false;
                        btn.innerHTML = '<span class="px-2">Confirm Date & Time</span> <i class="fa-solid fa-arrow-right"></i>';
                    }
                });
        }

        function resetFormAndGoHome() {
            window.location.href = 'index.php';
        }

        // Time slot selection styling
        document.addEventListener('DOMContentLoaded', function() {
            const timeSlotRadios = document.querySelectorAll('.time-slot-radio');
            timeSlotRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    // Reset all
                    document.querySelectorAll('.time-slot-option').forEach(el => {
                        el.style.backgroundColor = 'transparent';
                        el.querySelector('.time-slot-text').style.color = '#555';
                        el.style.borderColor = '#b3b3b3';
                    });
                    // Set active
                    if (this.checked) {
                        this.closest('.time-slot-option').style.backgroundColor = '#ff931e';
                        this.closest('.time-slot-option').querySelector('.time-slot-text').style.color = '#fff';
                        this.closest('.time-slot-option').style.borderColor = '#ff931e';
                    }
                });
            });
        });
    </script>


    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#inline-calendar", {
                inline: true,
                minDate: "today",
                disableMobile: "true",
                nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
                prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
                onChange: function(selectedDates, dateStr, instance) {
                    // console.log("Selected date: " + dateStr);
                }
            });
        });
    </script>
</body>

</html>