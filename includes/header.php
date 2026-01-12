<!DOCTYPE html>
<html lang="fr">
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
    <!-- Main CSS -->
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo file_exists('assets/css/style.css') ? filemtime('assets/css/style.css') : time(); ?>">
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Modern Font Stack -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
</head>
<body>

<header>
    <div class="container navbar">
        <div class="logo">
            <!-- Simple SVG Logo Icon -->
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="8" fill="#2563EB"/>
                <path d="M12 7V17M7 12H17" stroke="white" stroke-width="3" stroke-linecap="round"/>
            </svg>
            <div style="display:flex; flex-direction:column; line-height:1.1">
                <span style="font-size:1.1rem; color:var(--primary-900)">Fares Medical Center</span>
                <span style="font-size:0.75rem; color:var(--text-muted); font-weight:400;">Centre Médical Pluridisciplinaire</span>
            </div>
        </div>
        <nav class="nav-links">
            <a href="index.php" onclick="fbq('trackCustom', 'Nav_Click', {section: 'Home'});">Accueil</a>
            <a href="index.php#services" onclick="fbq('trackCustom', 'Nav_Click', {section: 'Services'});">Services</a>
            <a href="index.php#about" onclick="fbq('trackCustom', 'Nav_Click', {section: 'About'});">À Propos</a>
            <a href="index.php#reviews" onclick="fbq('trackCustom', 'Nav_Click', {section: 'Reviews'});">Avis</a>
            <a href="index.php#contact" onclick="fbq('track', 'Contact');">Rendez-vous</a>
        </nav>
        <div class="desktop-cta">
            <a href="tel:+212665010699" class="btn btn-primary" onclick="fbq('track', 'Contact'); gtag('event', 'contact'); return gtag_report_conversion('tel:+212665010699', 'AW-17847107352/Q8RwCJKJut4bEJj-lL5C');">
                Appeler 0665010699
            </a>
        </div>
    </div>
</header>
