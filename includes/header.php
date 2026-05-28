<?php 
$lang = $lang ?? 'fr'; 
$dir = $dir ?? 'ltr'; 
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : "Centre médical pluridisciplinaire à Marrakech (Izidihar). Dr. Amine Fares & Mme Qassimi. Spécialistes en Kinésithérapie, Ostéopathie, et Médecine du Sport."; ?>">
    <title><?php echo isset($page_title) ? $page_title : "Fares Medical Center Marrakech | Kinésithérapie & Médecine du Sport"; ?></title>
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://faresmedicalcenter.com/">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : "Fares Medical Center Marrakech"; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : "Centre médical à Marrakech. Spécialistes en Kinésithérapie, Ostéopathie et Médecine du Sport."; ?>">
    <meta property="og:image" content="https://faresmedicalcenter.com/assets/images/hero.jpg">

    <link rel="icon" href="favicon.ico" sizes="any">
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="assets/images/favicon.svg">
    <!-- Preload LCP Image -->
    <link rel="preload" as="image" href="assets/images/hero.jpg?v=2" fetchpriority="high">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo file_exists('assets/css/style.css') ? filemtime('assets/css/style.css') : time(); ?>">
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://md-eecad2978f7a43f5b7838c919258e6de.ecs.us-east-2.on.aws" crossorigin>
    <!-- Modern Font Stack -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <!-- Swiper CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    
    <!-- LocalBusiness Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "MedicalBusiness",
          "@id": "https://faresmedicalcenter.com/#clinic",
          "name": "Fares Medical Center",
          "alternateName": "Cabinet Dr. Amine Fares",
          "image": "https://faresmedicalcenter.com/assets/images/hero.jpg",
          "url": "https://faresmedicalcenter.com/",
          "telephone": "+212665010699",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "No 205, LOT izidihar",
            "addressLocality": "Marrakech",
            "postalCode": "40100",
            "addressCountry": "MA"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.6679513,
            "longitude": -8.0272461
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
              "opens": "09:00",
              "closes": "20:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": "Saturday",
              "opens": "09:00",
              "closes": "13:00"
            }
          ],
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "200"
          },
          "department": [
            {
              "@type": "MedicalSpecialty",
              "name": "Kinésithérapie du Sport",
              "image": "https://faresmedicalcenter.com/assets/images/kinesitherapie-real.jpg"
            },
            {
              "@type": "MedicalSpecialty",
              "name": "Neuro-rééducation",
              "image": "https://faresmedicalcenter.com/assets/images/neuro-real.jpg"
            }
          ]
        },
        {
          "@type": "Physician",
          "@id": "https://faresmedicalcenter.com/#dr-fares",
          "name": "Dr. Amine Fares",
          "medicalSpecialty": ["Sports Medicine", "Physical Medicine & Rehabilitation"],
          "worksFor": { "@id": "https://faresmedicalcenter.com/#clinic" },
          "description": "Médecin physique et médecin du sport spécialiste en traumatologie et rééducation neurologique."
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Faut-il une ordonnance pour consulter ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Non, ce n'est pas obligatoire. Notre médecin peut vous consulter sur place et vous prescrire une ordonnance si nécessaire."
              }
            },
            {
              "@type": "Question",
              "name": "Prenez-vous les sportifs ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Oui, nous prenons en charge les sportifs amateurs et professionnels en prévention, récupération des blessures et optimisation des performances."
              }
            },
            {
              "@type": "Question",
              "name": "Combien de séances sont nécessaires ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cela dépend de votre pathologie. Un protocole personnalisé est établi après le bilan initial lors de votre première visite."
              }
            },
            {
              "@type": "Question",
              "name": "Acceptez-vous les assurances ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Oui, nous fournissons tous les documents et factures nécessaires pour vos démarches de remboursement auprès de vos assurances."
              }
            }
          ]
        },

        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Accueil",
              "item": "https://faresmedicalcenter.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Services",
              "item": "https://faresmedicalcenter.com/#services"
            }
          ]
        },
        {
          "@type": "SiteNavigationElement",
          "name": "Accueil",
          "url": "https://faresmedicalcenter.com/"
        },
        {
          "@type": "SiteNavigationElement",
          "name": "Services",
          "url": "https://faresmedicalcenter.com/#services"
        },
        {
          "@type": "SiteNavigationElement",
          "name": "À Propos",
          "url": "https://faresmedicalcenter.com/#about"
        },
        {
          "@type": "SiteNavigationElement",
          "name": "Avis",
          "url": "https://faresmedicalcenter.com/#reviews"
        },
        {
          "@type": "SiteNavigationElement",
          "name": "Rendez-vous",
          "url": "https://faresmedicalcenter.com/#contact"
        }
      ]
    }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17847107352"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17847107352');
      // gtag('config', 'G-86LXPQY2P6'); // Commented out: Console 404 Error (Invalid ID)

      // Helper for Click Conversions (Dynamic Label)
      function gtag_report_conversion(url, label) {
        var callback = function () {
          if (typeof(url) != 'undefined') {
            window.location = url;
          }
        };
        gtag('event', 'conversion', {
            'send_to': label,
            'value': 1.0,
            'currency': 'MAD',
            'event_callback': callback
        });
        return false;
      }
    </script>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '792412222997462');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=792412222997462&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
        /* RTL Overrides */
        html[dir="rtl"] {
            text-align: right;
            direction: rtl;
        }
        html[dir="rtl"] .navbar {
            flex-direction: row-reverse;
        }
        html[dir="rtl"] .nav-links {
            margin-right: auto;
            margin-left: 0;
            flex-direction: row-reverse;
        }
        html[dir="rtl"] .desktop-cta {
            margin-right: 0; 
        }
        html[dir="rtl"] .logo {
            flex-direction: row-reverse;
            text-align: right;
        }
        html[dir="rtl"] .logo div {
            align-items: flex-end;
            margin-right: 10px;
            margin-left:0;
        }
    </style>
</head>
<body>

<?php
// Nav Content
$nav = [
    'home' => "Accueil",
    'services' => "Services",
    'about' => "À Propos",
    'reviews' => "Avis",
    'contact' => "Rendez-vous",
    'call_btn' => "Appeler 0665010699"
];

if (isset($lang) && $lang === 'ar') {
    $nav = [
        'home' => "الرئيسية",
        'services' => "الخدمات",
        'about' => "معلومات عنا",
        'reviews' => "آراء المرضى",
        'contact' => "حجز موعد",
        'call_btn' => "إتصل بنا 0665010699"
    ];
}

// Language Links
$link_fr = "?kw=kine"; // Default French context
$link_ar = "?kw=darija"; // Darija context
?>

<header id="main-header">
    <div class="container navbar">
        <a href="index.php" class="logo">
            <!-- Simple SVG Logo Icon -->
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="8" fill="#2563EB"/>
                <path d="M12 7V17M7 12H17" stroke="white" stroke-width="3" stroke-linecap="round"/>
            </svg>
            <div class="logo-text">
                <span class="logo-title">Fares Medical Center</span>
                <span class="logo-subtitle"><?php echo ($lang === 'ar') ? 'مركز طبي متعدد التخصصات' : 'Centre Médical Pluridisciplinaire'; ?></span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-links" id="nav-links">
            <a href="index.php" onclick="fbq('trackCustom', 'Nav_Click', {section: 'Home'});"><?php echo $nav['home']; ?></a>
            <a href="index.php#services" onclick="fbq('trackCustom', 'Nav_Click', {section: 'Services'});"><?php echo $nav['services']; ?></a>
            <a href="index.php#about" onclick="fbq('trackCustom', 'Nav_Click', {section: 'About'});"><?php echo $nav['about']; ?></a>
            <a href="index.php#reviews" onclick="fbq('trackCustom', 'Nav_Click', {section: 'Reviews'});"><?php echo $nav['reviews']; ?></a>
            <a href="index.php#contact" onclick="fbq('track', 'Contact');"><?php echo $nav['contact']; ?></a>
        </nav>

        <!-- Desktop CTA -->
        <div class="desktop-cta">
            <!-- Language Switcher -->
            <div class="lang-switcher">
                <a href="<?php echo $link_fr; ?>" class="lang-link <?php echo ($lang!=='ar')?'active':''; ?>">FR</a>
                <span class="lang-sep">|</span>
                <a href="<?php echo $link_ar; ?>" class="lang-link <?php echo ($lang==='ar')?'active':''; ?>">AR</a>
            </div>
            <a href="tel:+212665010699" class="btn btn-primary header-cta" onclick="fbq('track', 'Contact'); gtag('event', 'contact'); return gtag_report_conversion('tel:+212665010699', 'AW-17847107352/Q8RwCJKJut4bEJj-lL5C');">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <?php echo $nav['call_btn']; ?>
            </a>
        </div>

        <!-- Mobile Hamburger Button -->
        <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobile-overlay"></div>

    <!-- Mobile Slide Menu -->
    <div class="mobile-menu" id="mobile-menu" dir="<?php echo $dir; ?>">
        <div class="mobile-menu-header">
            <div class="logo" style="gap:0.5rem;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="8" fill="#2563EB"/><path d="M12 7V17M7 12H17" stroke="white" stroke-width="3" stroke-linecap="round"/></svg>
                <span class="logo-title" style="font-size:1rem;">Fares Medical Center</span>
            </div>
            <button class="mobile-close" id="mobile-close" aria-label="Fermer le menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
        <nav class="mobile-nav">
            <a href="index.php" class="mobile-nav-link" onclick="closeMobileMenu();">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <?php echo $nav['home']; ?>
            </a>
            <a href="index.php#services" class="mobile-nav-link" onclick="closeMobileMenu();">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                <?php echo $nav['services']; ?>
            </a>
            <a href="index.php#about" class="mobile-nav-link" onclick="closeMobileMenu();">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                <?php echo $nav['about']; ?>
            </a>
            <a href="index.php#reviews" class="mobile-nav-link" onclick="closeMobileMenu();">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <?php echo $nav['reviews']; ?>
            </a>
            <a href="index.php#contact" class="mobile-nav-link" onclick="closeMobileMenu();">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <?php echo $nav['contact']; ?>
            </a>
        </nav>
        <div class="mobile-menu-footer">
            <div class="lang-switcher" style="justify-content:center; margin-bottom:1rem;">
                <a href="<?php echo $link_fr; ?>" class="lang-link <?php echo ($lang!=='ar')?'active':''; ?>">🇫🇷 Français</a>
                <span class="lang-sep">|</span>
                <a href="<?php echo $link_ar; ?>" class="lang-link <?php echo ($lang==='ar')?'active':''; ?>">🇲🇦 العربية</a>
            </div>
            <a href="tel:+212665010699" class="btn btn-primary" style="width:100%; justify-content:center; gap:0.5rem;" onclick="fbq('track', 'Contact'); gtag('event', 'contact');">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <?php echo $nav['call_btn']; ?>
            </a>
        </div>
    </div>
</header>

<script>
// Mobile Menu Logic
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const mobileOverlay = document.getElementById('mobile-overlay');
const mobileClose = document.getElementById('mobile-close');

function openMobileMenu() {
    mobileMenu.classList.add('open');
    mobileOverlay.classList.add('open');
    hamburger.classList.add('active');
    hamburger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
    mobileMenu.classList.remove('open');
    mobileOverlay.classList.remove('open');
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
}

hamburger.addEventListener('click', function() {
    if (mobileMenu.classList.contains('open')) {
        closeMobileMenu();
    } else {
        openMobileMenu();
    }
});

mobileOverlay.addEventListener('click', closeMobileMenu);
mobileClose.addEventListener('click', closeMobileMenu);

// Header shrink on scroll
const mainHeader = document.getElementById('main-header');
window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        mainHeader.classList.add('scrolled');
    } else {
        mainHeader.classList.remove('scrolled');
    }
});
</script>
