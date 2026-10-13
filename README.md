# Precise3DM - Digital Manufacturing, 3D Metrology & Engineering Solutions

## Overview

**Precise 3D Metrology & Design Solutions Pvt. Ltd.** (Precise3DM) is an advanced digital manufacturing and engineering company based in Chennai, India with operations across India, Sri Lanka, and the United Kingdom.

This repository powers the official website and web applications of Precise3DM:
* High-volume programmatic landing pages for 3D scanning, metrology hardware, reverse engineering software, and contract engineering services.
* Interactive multi-step technical quotation and CAD evaluation forms.
* Integrated transactional e-commerce engine with live currency conversion (ExchangeRate-API), Razorpay (INR), and PayPal (USD).
* Comprehensive corporate WordPress blog engine (`/blogs/`).
* Localized sub-sites (`/uk/` for United Kingdom operations).

---

## Technical Documentation Index

Detailed architectural, design, structural, and security documentation is available in the `docs/` directory and root configuration:

| Document | Description |
| :--- | :--- |
| **[`CLAUDE.md`](CLAUDE.md)** | Authoritative guide for Claude Code, AI agents, and developers detailing conventions, architecture, and operational rules. |
| **[`docs/PROJECT_CONTEXT.md`](docs/PROJECT_CONTEXT.md)** | Business background, hardware/software product lines (Shining 3D, Geomagic, Leica, Solutionix), engineering services, and SEO strategy. |
| **[`docs/ARCHITECTURE_AND_DESIGN.md`](docs/ARCHITECTURE_AND_DESIGN.md)** | System design, direct script routing, layout inclusion patterns, frontend stack, and e-commerce data flows. |
| **[`docs/DIRECTORY_AND_FILE_STRUCTURE.md`](docs/DIRECTORY_AND_FILE_STRUCTURE.md)** | Exhaustive breakdown and categorization of all 28,000+ files and 21 subdirectories. |
| **[`docs/FORMS_AND_MAIL_INTEGRATIONS.md`](docs/FORMS_AND_MAIL_INTEGRATIONS.md)** | Comprehensive guide to all 35+ lead capture forms, PHPMailer SMTP configuration, and 54 `.phtml` email templates. |
| **[`docs/DATABASE_AND_ECOMMERCE.md`](docs/DATABASE_AND_ECOMMERCE.md)** | Database schemas (`products`, `cart`), Razorpay & PayPal workflows, and automated 18% GST calculations. |
| **[`docs/SECURITY_AND_TECHNICAL_AUDIT.md`](docs/SECURITY_AND_TECHNICAL_AUDIT.md)** | Critical security audit report detailing active malware injections, arbitrary file upload vulnerabilities, and hardcoded secrets with remediation plans. |

---

## Technology Stack

* **Server Environment**: Apache 2.4+ / XAMPP (macOS / Linux)
* **Backend Runtime**: PHP 7.4 - 8.2
* **Database**: MySQL / MariaDB (`precise-cards` and `prec_precise_blogs`)
* **Email Engine**: PHPMailer v6.x via Google SMTP SSL (Port 465)
* **Payment Gateways**: Razorpay PHP SDK (`razorpay/razorpay`), PayPal REST SDK (`paypal/rest-api-sdk-php`)
* **Foreign Exchange**: ExchangeRate-API
* **Frontend**: Bootstrap 4/5, jQuery 3.6.0, Owl Carousel, Slick Carousel, Font Awesome 6.4
* **Analytics**: Google Tag Manager (`GTM-5FX95R9`), Google Analytics (`UA-96527116-1`), Facebook Pixel
* **Content Management**: WordPress (in `/blogs/`) with Elementor & Astra Theme

---

## Directory Overview

```
.
├── CLAUDE.md                     # Central Claude Code & Agent instruction guide
├── README.md                     # Project documentation index (this file)
├── docs/                         # Comprehensive technical documentation
│   ├── PROJECT_CONTEXT.md
│   ├── ARCHITECTURE_AND_DESIGN.md
│   ├── DIRECTORY_AND_FILE_STRUCTURE.md
│   ├── FORMS_AND_MAIL_INTEGRATIONS.md
│   ├── DATABASE_AND_ECOMMERCE.md
│   └── SECURITY_AND_TECHNICAL_AUDIT.md
├── includes/                     # Global headers, footers, and mega-menu navigation
├── assets/                       # Stylesheets, JavaScript, fonts, and images (9,950+ files)
├── blogs/                        # WordPress installation (15,700+ files)
├── uk/                           # UK localized sub-site
├── anita/                        # Campaign funnels and landing pages
├── admin_area/                   # Product insertion dashboard
├── sql_folder/                   # Database connection and catalog assets
├── PHPMailer/                    # PHPMailer library
├── vendor/                       # Composer packages (Razorpay, PayPal SDKs)
└── uploads/                      # Customer-uploaded CAD/STL files
```
