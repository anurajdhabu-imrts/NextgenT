<?php
// Merge with defaults in case $seo is not fully populated
$seo = $seo ?? [];
$pageTitle       = $seo['title']          ?? 'NextgenT Enterprises | Corporate Excellence';
$pageDescription = $seo['description']    ?? 'NextgenT Enterprises — Strategic architecture for Hospitals.';
$pageKeywords    = $seo['keywords']       ?? 'Hospital Management, Healthcare Operations, Hospital Consulting';
$pageCanonical   = $seo['canonical']      ?? base_url(uri_string());
$ogTitle         = $seo['og_title']       ?? $pageTitle;
$ogDescription   = $seo['og_description'] ?? $pageDescription;
$ogImage         = $seo['og_image']       ?? base_url('assets/img/og-image.jpg');
$ogType          = $seo['og_type']        ?? 'website';
$pageType        = $seo['page_type']      ?? 'WebPage';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?= esc($pageTitle) ?></title>

    <!-- Primary SEO Meta Tags -->
    <meta name="description" content="<?= esc($pageDescription) ?>">
    <meta name="keywords" content="<?= esc($pageKeywords) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="NextgenT Enterprises">
    <link rel="canonical" href="<?= esc($pageCanonical) ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?= esc($ogType) ?>">
    <meta property="og:site_name" content="NextgenT Enterprises">
    <meta property="og:title" content="<?= esc($ogTitle) ?>">
    <meta property="og:description" content="<?= esc($ogDescription) ?>">
    <meta property="og:url" content="<?= esc($pageCanonical) ?>">
    <meta property="og:image" content="<?= esc($ogImage) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($ogTitle) ?>">
    <meta name="twitter:description" content="<?= esc($ogDescription) ?>">
    <meta name="twitter:image" content="<?= esc($ogImage) ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('FAVICON.png') ?>" type="image/png">

    <!-- Tailwind CSS Integration with Custom Palette -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#0F2D52',
                            dark: '#0B213D',
                            light: '#1A4A7A',
                        },
                        'teal-accent': {
                            DEFAULT: '#14B8A6',
                            dark: '#0D9488',
                            light: '#2DD4BF',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Poppins Font Integration -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    
    <!-- AOS - Animate On Scroll Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JSON-LD Structured Data: Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "NextgenT Enterprises",
        "url": "<?= base_url() ?>",
        "logo": "<?= base_url('assets/img/og-image.jpg') ?>",
        "description": "A comprehensive business solutions company specialising in the healthcare and hospital sector.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Corporate Blvd, Business District",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110001",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-98765-43210",
            "contactType": "sales",
            "areaServed": ["IN", "AE", "SG"],
            "availableLanguage": ["English", "Hindi"]
        },
        "sameAs": []
    }
    </script>
    <!-- JSON-LD Structured Data: Page -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<?= esc($pageType) ?>",
        "name": "<?= esc($pageTitle) ?>",
        "description": "<?= esc($pageDescription) ?>",
        "url": "<?= esc($pageCanonical) ?>"
    }
    </script>

    <!-- Analytics Placeholder (Inject GTM/GA here) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script> -->
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            overflow-x: hidden;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .nav-sticky {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
            height: 80px;
            /* Locked Height */
        }

        .menu-link {
            transition: all 0.2s ease;
            white-space: nowrap;
            position: relative;
        }

        .menu-link:hover {
            color: #14B8A6;
            /* Using teal-accent equivalent */
        }

        /* Sub-pixel precision for vertical centering */
        .flex-center {
            display: flex;
            align-items: center;
        }

        .dropdown-menu {
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.08);
            transform: translateY(10px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.25s ease;
        }

        .group:hover .dropdown-menu {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>

<body class="bg-gray-50/30">

    <header class="nav-sticky border-b border-gray-100 shadow-sm">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-10 h-full">
            <div class="flex justify-between items-center h-full">

                <!-- Logo with proper right margin -->
                <div class="flex-shrink-0 flex items-center mr-16">
                    <a href="/" class="flex items-center no-underline group">
                        <span class="text-xl md:text-[22px] font-bold text-navy tracking-tight">
                            NextgenT<span class="text-teal-accent font-medium ml-1">Enterprises</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation (Break at XL for 8 wide items) -->
                <nav class="hidden xl:flex items-center space-x-7 2xl:space-x-10">
                    <a href="<?= base_url('/') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">Home</a>
                    <a href="<?= base_url('about') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">About Us</a>
                    <a href="<?= base_url('services') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">Services</a>
                    <a href="<?= base_url('4m-framework') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">4M Framework</a>

                    <!-- Industries Dropdown (Simple) -->
                    <div class="relative group h-full flex items-center">
                        <button class="menu-link text-[13.5px] font-semibold text-[#000080]/90 flex items-center gap-1 focus:outline-none">
                            Industries
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        
                        <div class="dropdown-menu absolute top-full left-0 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="bg-white rounded-xl shadow-lg border border-gray-100 mt-2 py-1 overflow-hidden">
                                <a href="<?= base_url('hospital-sector') ?>" class="block px-4 py-2.5 text-[13px] font-semibold text-navy hover:bg-teal-50 hover:text-teal-accent transition-colors">
                                    Hospital Sector
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="<?= base_url('projects') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">Projects / Case
                        Studies</a>
                    <a href="<?= base_url('team') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">Team</a>
                    <a href="<?= base_url('contact') ?>" class="menu-link text-[13.5px] font-semibold text-[#000080]/90">Contact Us</a>
                </nav>

                <!-- CTA Button with left margin -->
                <!-- <div class="flex items-center ml-10">
                    <div class="hidden sm:block">
                        <a href="<?= base_url('contact') ?>"
                            class="bg-navy text-white px-4 py-3 rounded-[10px] text-sm font-bold hover:bg-teal-accent hover:shadow-xl transition-all duration-300 whitespace-nowrap active:scale-95 flex items-center">
                            Get Consultation
                        </a>
                    </div> -->

                    <!-- Mobile Hamburger -->
                    <button id="nav-toggle"
                        class="xl:hidden ml-4 p-2 text-[#000080] rounded-lg hover:bg-gray-100 transition-colors">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="hamburger" class="block" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            <path id="cross" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-nav"
            class="hidden xl:hidden bg-white border-t border-gray-100 absolute w-full shadow-2xl z-50 overflow-y-auto"
            style="max-height: calc(100vh - 80px);">
            <div class="px-8 py-10 space-y-5">
                <a href="<?= base_url('/') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">Home</a>
                <a href="<?= base_url('about') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">About Us</a>
                <a href="<?= base_url('services') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">Services</a>
                <a href="<?= base_url('4m-framework') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">4M Framework</a>

                <!-- Industries Dropdown Mobile -->
                <div class="space-y-3">
                    <button onclick="toggleMobileDropdown()" class="flex items-center justify-between w-full text-lg font-bold text-[#000080] hover:text-teal-600">
                        Industries
                        <svg id="arrow" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="mobile-industries" class="hidden pl-4 space-y-4 pt-2">
                        <a href="<?= base_url('hospital-sector') ?>" class="block text-[15px] font-semibold text-slate-500 hover:text-teal-accent">Hospital Sector</a>
                    </div>
                </div>

                <a href="<?= base_url('projects') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">Projects / Case
                    Studies</a>
                <a href="<?= base_url('team') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">Team</a>
                <a href="<?= base_url('contact') ?>" class="block text-lg font-bold text-[#000080] hover:text-teal-600">Contact Us</a>

              
            </div>
        </div>
    </header>

    <script>
        const navBtn = document.getElementById('nav-toggle');
        const mobileMenu = document.getElementById('mobile-nav');
        const menuIcon = document.getElementById('hamburger');
        const closeIcon = document.getElementById('cross');

        navBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            if (isOpen) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        });

        function toggleMobileDropdown() {
            const menu = document.getElementById('mobile-industries');
            const arrow = document.getElementById('arrow');
            menu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    </script>

    <!-- Main Content Wrapper -->
    <main class="w-full relative">