<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $db;

    private function uploadImage($file, $folder = 'uploads')
    {
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . $folder, $newName);
            return $folder . '/' . $newName;
        }
        return null;
    }

    private function seo(array $overrides = []): array
    {
        $base = base_url();
        $defaults = [
            'title' => 'NextgenT Enterprises | Corporate Excellence',
            'description' => 'NextgenT Enterprises — Strategic architecture for Hospitals & Hospitality. Manpower, Marketing, Management, and Operations solutions.',
            'keywords' => 'Hospital Management, Hospitality Services, Manpower Planning, Healthcare Marketing',
            'canonical' => rtrim($base, '/') . '/' . ltrim(uri_string(), '/'),
            'og_title' => 'NextgenT Enterprises | Corporate Excellence',
            'og_description' => 'Leading transformation in healthcare and hospitality through strategic advisory and operational excellence.',
            'og_image' => $base . 'assets/img/og-image.jpg',
            'og_type' => 'website',
            'page_type' => 'WebPage',
        ];
        return array_merge($defaults, $overrides);
    }

    public function index(): string
    {
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getSection('hero'),
            'framework' => $model->getSection('framework'),
            'm1' => $model->getSection('m1'),
            'm2' => $model->getSection('m2'),
            'm3' => $model->getSection('m3'),
            'm4' => $model->getSection('m4'),
            'industries' => $model->getSection('industries'),
            'services_header' => $model->getSection('services'),
            'services' => array_slice($model->getAll('services', 'sort_order', 'ASC'), 0, 3),
            'statistics' => $model->getAll('statistics', 'sort_order', 'ASC'),
            'testimonials' => $model->getAll('testimonials', 'sort_order', 'ASC'),
        ];

        $seo = $this->seo([
            'title' => 'NextgenT Enterprises | One-Stop Solution for Hospitals & Hospitality',
            'description' => 'NextgenT Enterprises is a comprehensive business solutions company for the healthcare and hospitality sectors. Manpower, Marketing, Management & Operations under one roof.',
            'keywords' => 'Hospital Management, Hospitality Consulting, Manpower Solutions, Healthcare Operations, 4M Framework, NextgenT',
            'og_title' => 'NextgenT Enterprises | One-Stop Solution for Hospitals & Hospitality',
            'og_description' => 'End-to-end expertise across manpower, marketing, management, and operations for hospitals and hotels.',
            'page_type' => 'WebSite',
        ]);

        $data['seo'] = $seo;

        return view('home', $data);
    }

    public function about(): string
    {
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getAboutSection('hero'),
            'journey' => $model->getAboutSection('journey'),
            'mission' => $model->getAboutSection('mission'),
            'vision' => $model->getAboutSection('vision'),
            'geographic_header' => $model->getAboutSection('geographic'),
            'leadership_header' => $model->getAboutSection('leadership'),
            'advantage_header' => $model->getAboutSection('advantage'),
            'geographic_items' => $model->getAll('about_geographic', 'sort_order', 'ASC'),
            'team' => $model->getAll('about_team', 'sort_order', 'ASC'),
            'advantages' => $model->getAll('about_advantages', 'sort_order', 'ASC'),
        ];

        $seo = $this->seo([
            'title' => 'About Us | NextgenT Enterprises — Our Story & Mission',
            'description' => 'Learn about NextgenT Enterprises — a premier strategic consulting firm transforming healthcare and hospitality through the 4M Framework. Discover our mission, vision, and leadership.',
            'keywords' => 'About NextgenT, Company History, 4M Framework, Hospital Consulting, Hospitality Advisory, Leadership Team',
            'og_title' => 'About NextgenT Enterprises',
            'og_description' => 'A premier strategic consulting firm dedicated to transforming healthcare and hospitality through innovation and the 4M Framework.',
            'page_type' => 'AboutPage',
        ]);

        $data['seo'] = $seo;

        return view('about', $data);
    }

    public function services(): string
    {
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getServicesSection('hero') ?? ['title' => 'Our Services', 'subtitle' => '', 'description' => '', 'image' => ''],
            'core_header' => $model->getServicesSection('core_header') ?? ['title' => 'Core Services', 'subtitle' => '', 'description' => ''],
            'hospital_header' => $model->getServicesSection('hospital_header') ?? ['title' => 'Hospital Sector', 'subtitle' => '', 'description' => ''],
            'services' => $model->getAll('services', 'sort_order', 'ASC'),
        ];

        $seo = $this->seo([
            'title' => 'Our Services | NextgenT Enterprises — Hospital & Hospitality Solutions',
            'description' => 'Explore NextgenT\'s comprehensive suite of consulting and execution services — from feasibility studies and infrastructure planning to branding, staffing, and day-to-day operational management.',
            'keywords' => 'Hospital Services, Hospitality Consulting, Feasibility Study, Infrastructure Planning, Manpower Training, Operations Management, Branding',
            'og_title' => 'Services — NextgenT Enterprises',
            'og_description' => 'End-to-end consulting and execution services for hospitals and hospitality ventures.',
        ]);

        $data['seo'] = $seo;

        return view('services', $data);
    }

    private function initFourMDatabase()
    {
        $this->db = \Config\Database::connect();

        if (!$this->db->tableExists('four_m_sections')) {
            $this->db->query("CREATE TABLE four_m_sections (
                section_key VARCHAR(50) PRIMARY KEY,
                title TEXT, subtitle TEXT, description TEXT, image TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('four_m_sections')->insertBatch([
                ['section_key' => 'hero', 'title' => 'The 4M Framework', 'subtitle' => 'Strategic Operating Model', 'description' => 'The foundational strategic system behind every NextgenT engagement. Four integrated pillars that cover the complete hospital and healthcare value chain — from workforce to revenue.', 'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=1600&q=80'],
                ['section_key' => 'architecture', 'title' => 'Four Pillars. One System.', 'subtitle' => 'Our Architecture', 'description' => 'Every service, every project, every outcome is powered by the integrated 4M operating model.', 'image' => ''],
                ['section_key' => 'healthcare', 'title' => 'One Framework. Total Excellence.', 'subtitle' => 'Total Excellence', 'description' => 'The 4M Framework powers every engagement — providing a strategic architecture for every healthcare project we touch.', 'image' => ''],
                ['section_key' => 'healthcare_card', 'title' => 'Healthcare & Hospitals', 'subtitle' => '', 'description' => '', 'image' => '']
            ]);
        }

        if (!$this->db->tableExists('four_m_pillars')) {
            $this->db->query("CREATE TABLE four_m_pillars (
                id INT AUTO_INCREMENT PRIMARY KEY,
                pillar_no INT, title VARCHAR(100), summary TEXT, description TEXT, icon_svg VARCHAR(50), color_class VARCHAR(100), healthcare_summary TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('four_m_pillars')->insertBatch([
                ['pillar_no' => 1, 'title' => 'Manpower', 'summary' => 'End-to-end workforce solutions — recruitment, onboarding, and ongoing training for skilled professionals.', 'description' => 'End-to-end workforce solutions — from role identification and recruitment to onboarding and ongoing training. We ensure hospital units are staffed with skilled, certified professionals who are aligned to institutional goals.', 'icon_svg' => 'users', 'color_class' => 'navy', 'healthcare_summary' => 'Doctors, nurses, paramedics, admin staff'],
                ['pillar_no' => 2, 'title' => 'Marketing', 'summary' => 'Strategic brand positioning, digital marketing, patient acquisition, and revenue-linked campaigns.', 'description' => 'Specialised hospital marketing — brand positioning, digital marketing, patient acquisition strategies, community outreach, and revenue-linked marketing campaigns designed for measurable growth.', 'icon_svg' => 'marketing', 'color_class' => 'teal-accent', 'healthcare_summary' => 'Patient acquisition, health camps, referrals'],
                ['pillar_no' => 3, 'title' => 'Management', 'summary' => 'Governance frameworks, SOP development, regulatory compliance, accreditation, and financial advisory.', 'description' => 'Institutional management consulting — governance frameworks, SOP development, regulatory compliance, accreditation support (NABH/ISO), and financial management advisory for sustained operational excellence.', 'icon_svg' => 'management', 'color_class' => 'navy-light', 'healthcare_summary' => 'NABH compliance, SOPs, financial health'],
                ['pillar_no' => 4, 'title' => 'Operations', 'summary' => 'Daily operational oversight, quality control, vendor management, and monthly revenue performance tracking.', 'description' => 'Full-spectrum hospital operations management — daily operational oversight, quality control, vendor management, inventory, housekeeping, and monthly revenue performance tracking to ensure consistent output and efficiency.', 'icon_svg' => 'operations', 'color_class' => 'teal-accent-dark', 'healthcare_summary' => 'OPD/IPD workflows, pharmacy, housekeeping']
            ]);
        }

        if (!$this->db->tableExists('four_m_highlights')) {
            $this->db->query("CREATE TABLE four_m_highlights (
                id INT AUTO_INCREMENT PRIMARY KEY,
                pillar_id INT, title VARCHAR(255), description TEXT, icon_svg VARCHAR(50), sort_order INT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
        }
    }

    public function fourM(): string
    {
        $this->initFourMDatabase();
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getFourMSection('hero'),
            'architecture' => $model->getFourMSection('architecture'),
            'healthcare' => $model->getFourMSection('healthcare'),
            'healthcare_card' => $model->getFourMSection('healthcare_card'),
            'pillars' => $model->getAll('four_m_pillars', 'pillar_no', 'ASC')
        ];

        foreach ($data['pillars'] as &$pillar) {
            $pillar['highlights'] = $this->db->table('four_m_highlights')
                ->where('pillar_id', $pillar['id'])
                ->orderBy('sort_order', 'ASC')
                ->get()
                ->getResultArray();
        }

        $seo = $this->seo([
            'title' => '4M Framework | NextgenT Enterprises — Manpower, Marketing, Management, Operations',
            'description' => 'Discover the 4M Framework — NextgenT\'s strategic operating model covering Manpower, Marketing, Management, and Operations for hospitals and hospitality businesses.',
            'keywords' => '4M Framework, Manpower, Marketing, Management, Operations, Strategic Model, Hospital Operations, Hotel Management',
            'og_title' => 'The 4M Framework — NextgenT Enterprises',
            'og_description' => 'Four integrated pillars covering the complete hospital and hospitality value chain — from workforce to revenue.',
        ]);

        $data['seo'] = $seo;
        return view('four_m', $data);
    }

    public function industries(): string
    {
        $seo = $this->seo([
            'title' => 'Industries We Serve | NextgenT Enterprises — Healthcare & Hospitality',
            'description' => 'NextgenT Enterprises specializes in two core sectors: Healthcare (Hospitals & Clinics) and Hospitality (Hotels, Resorts & Tourism). Tailored business solutions for each industry.',
            'keywords' => 'Healthcare Industry, Hospitality Industry, Hospital Sector, Hotel Sector, Industry Solutions, Sector Expertise',
            'og_title' => 'Industries We Serve — NextgenT Enterprises',
            'og_description' => 'Specialized business solutions for the healthcare and hospitality industries.',
        ]);
        return view('industries', ['seo' => $seo]);
    }

    private function initHospitalDatabase()
    {
        $this->db = \Config\Database::connect();

        if (!$this->db->tableExists('hospital_sections')) {
            $this->db->query("CREATE TABLE hospital_sections (
                section_key VARCHAR(50) PRIMARY KEY,
                title TEXT, subtitle TEXT, description TEXT, image TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('hospital_sections')->insertBatch([
                ['section_key' => 'hero', 'title' => 'Hospital Sector', 'subtitle' => 'Sector Focus', 'description' => 'Addressing the critical challenges of modern healthcare through strategic architecture, operational optimization, and clinical excellence.', 'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1600&q=80'],
                ['section_key' => 'complexity', 'title' => 'Navigating Complexity in Healthcare', 'subtitle' => '', 'description' => 'Hospitals face unprecedented challenges in balancing patient care quality with operational sustainability. Rapidly changing regulatory environments, skilled workforce shortages, and the integration of complex technologies demand a robust operational model.', 'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80'],
                ['section_key' => 'support_header', 'title' => 'How NextgenT Supports Hospitals', 'subtitle' => '', 'description' => 'We apply our 4M Framework—Manpower, Marketing, Management, and Operations—to build resilient, high-performing medical institutions.', 'image' => ''],
                ['section_key' => 'solutions_header', 'title' => 'Targeted Hospital Solutions', 'subtitle' => '', 'description' => '', 'image' => '']
            ]);
        }

        if (!$this->db->tableExists('hospital_challenges')) {
            $this->db->query("CREATE TABLE hospital_challenges (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255), description TEXT, sort_order INT DEFAULT 0,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('hospital_challenges')->insertBatch([
                ['title' => 'Quality & Compliance', 'description' => 'Maintaining rigorous standards like NABH and JCI while managing high patient volumes with consistent excellence.', 'sort_order' => 1],
                ['title' => 'Financial Sustainability', 'description' => 'Optimizing revenue cycles, managing TPA constraints, and ensuring cost-effective, scalable operations.', 'sort_order' => 2]
            ]);
        }

        if (!$this->db->tableExists('hospital_support_cards')) {
            $this->db->query("CREATE TABLE hospital_support_cards (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255), description TEXT, icon_svg VARCHAR(50), sort_order INT DEFAULT 0,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('hospital_support_cards')->insertBatch([
                ['title' => 'Operational Architecture', 'description' => 'We restructure hospital workflows, from admission to discharge, ensuring seamless departmental coordination and reducing patient wait times. Our approach integrates robust HIMS strategies for unified data governance across all units.', 'icon_svg' => 'architecture', 'sort_order' => 1],
                ['title' => 'Clinical Resource Optimization', 'description' => 'By optimizing clinical and non-clinical manpower, we alleviate staffing pressure and improve care delivery. We implement continuous training programs to ensure medical technicians and nursing staff meet stringent quality benchmarks consistently.', 'icon_svg' => 'users', 'sort_order' => 2]
            ]);
        }

        if (!$this->db->tableExists('hospital_solutions')) {
            $this->db->query("CREATE TABLE hospital_solutions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255), description TEXT, sort_order INT DEFAULT 0,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('hospital_solutions')->insertBatch([
                ['title' => 'Accreditation Support', 'description' => 'NABH & JCI readiness and continuous compliance monitoring infrastructure.', 'sort_order' => 1],
                ['title' => 'TPA Management', 'description' => 'Streamlined insurance workflows and faster cashless claim settlements.', 'sort_order' => 2],
                ['title' => 'Equipment Planning', 'description' => 'Strategic procurement and lifecycle management of core medical devices.', 'sort_order' => 3],
                ['title' => 'Revenue Cycle', 'description' => 'Active leakage prevention and advanced billing optimization strategies.', 'sort_order' => 4]
            ]);
        }

        // AUTO-CLEANUP: If previous runs inserted HTML, clean it up for the admin
        $sections = $this->db->table('hospital_sections')->get()->getResultArray();
        foreach ($sections as $s) {
            if (strpos($s['title'], '<span') !== false) {
                $cleanTitle = strip_tags($s['title']);
                $this->db->table('hospital_sections')->where('section_key', $s['section_key'])->update(['title' => $cleanTitle]);
            }
        }
    }

    public function hospitalSector(): string
    {
        $this->initHospitalDatabase();
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getHospitalSection('hero'),
            'complexity' => $model->getHospitalSection('complexity'),
            'support_header' => $model->getHospitalSection('support_header'),
            'solutions_header' => $model->getHospitalSection('solutions_header'),
            'challenges' => $model->getAll('hospital_challenges', 'sort_order', 'ASC'),
            'support_cards' => $model->getAll('hospital_support_cards', 'sort_order', 'ASC'),
            'solutions' => $model->getAll('hospital_solutions', 'sort_order', 'ASC')
        ];

        $seo = $this->seo([
            'title' => 'Hospital Sector | NextgenT Enterprises — Healthcare Consulting & Operations',
            'description' => 'Strategic architecture and operational support for hospitals, clinics, and medical institutions. NABH compliance, TPA management, clinical staffing, and revenue cycle optimization.',
            'keywords' => 'Hospital Consulting, NABH Compliance, TPA Management, Clinical Staffing, Hospital Operations, Revenue Cycle Management, Healthcare',
            'og_title' => 'Hospital Sector — NextgenT Enterprises',
            'og_description' => 'Clinical efficiency, compliance, and sustainable growth solutions for healthcare institutions.',
        ]);

        $data['seo'] = $seo;
        return view('hospital_sector', $data);
    }

    private function initProjectsDatabase()
    {
        $this->db = \Config\Database::connect();

        if (!$this->db->tableExists('projects_sections')) {
            $this->db->query("CREATE TABLE projects_sections (
                section_key VARCHAR(50) PRIMARY KEY,
                title TEXT, subtitle TEXT, description TEXT, image TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('projects_sections')->insertBatch([
                ['section_key' => 'hero', 'title' => 'Projects & Case Studies', 'subtitle' => 'Our Portfolio', 'description' => 'A showcase of our impact across hospital infrastructure, NABH accreditation, and medical facility management.', 'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1600&q=80'],
            ]);
        }

        if (!$this->db->tableExists('projects')) {
            $this->db->query("CREATE TABLE projects (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255),
                badge VARCHAR(100),
                problem TEXT,
                solution TEXT,
                result TEXT,
                icon VARCHAR(50),
                sort_order INT DEFAULT 0,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");

            $this->db->table('projects')->insertBatch([
                [
                    'title' => 'Multi-Specialty Hospital Turnaround',
                    'badge' => 'Hospital Sector',
                    'problem' => 'A 150-bed regional hospital struggled with declining out-patient footfall and extremely high attrition rates in nursing staff.',
                    'solution' => 'Deployed the 4M framework to restructure clinical operations, standardise HR policies, and launch targeted digital outreach campaigns.',
                    'result' => '45% increase in OPD volume; nursing attrition dropped below 8% within six months.',
                    'icon' => 'office-building',
                    'sort_order' => 1
                ],
                [
                    'title' => 'Strategic NABH Accreditation',
                    'badge' => 'Hospital Sector',
                    'problem' => 'A secondary-care facility struggled with quality compliance and lacked a structured framework for NABH initial accreditation.',
                    'solution' => 'Implemented 60+ new SOPs, conducted intensive staff sensitization, and overhauled patient safety protocols aligned with gold standards.',
                    'result' => 'Successfully achieved NABH accreditation in the first audit with zero major non-conformities.',
                    'icon' => 'shield-check',
                    'sort_order' => 2
                ],
                [
                    'title' => 'Revenue Cycle & TPA Optimization',
                    'badge' => 'Hospital Sector',
                    'problem' => 'A growing clinic network experienced severe cash flow bottlenecks due to high insurance claim rejections and delayed TPA documentation.',
                    'solution' => 'Overhauled billing software integration, automated claim tracking, and trained the front-desk team on strict documentation compliance.',
                    'result' => 'Reduced claim rejection rates by 60% and improved cash flow turnaround from 90 days to under 30 days.',
                    'icon' => 'trending-up',
                    'sort_order' => 3
                ],
                [
                    'title' => 'Equipment & Layout Planning',
                    'badge' => 'Hospital Sector',
                    'problem' => 'A greenfield project required end-to-end medical technology planning and a layout optimized for high-volume patient flow.',
                    'solution' => 'Engineered a clinical-grade architectural layout and handled turnkey equipment procurement with multi-vendor coordination.',
                    'result' => 'Reduced capital expenditure by 18% and optimized space utility, increasing bed capacity by 10% in the original footprint.',
                    'icon' => 'architecture',
                    'sort_order' => 4
                ]
            ]);
        }
    }

    public function hospitalitySector(): string
    {
        $seo = $this->seo([
            'title' => 'Hospitality Sector | NextgenT Enterprises — Hotel & Resort Consulting',
            'description' => 'Elevating guest experiences and optimizing revenue for hotels, resorts, and hospitality ventures. Brand standards, yield management, staffing, and F&B consulting.',
            'keywords' => 'Hotel Consulting, Resort Management, Hospitality Operations, Guest Experience, Yield Management, F&B Consulting, Brand Standards',
            'og_title' => 'Hospitality Sector — NextgenT Enterprises',
            'og_description' => 'International standards with local operational excellence for hotels and resorts.',
        ]);
        return view('hospitality_sector', ['seo' => $seo]);
    }

    public function projects(): string
    {
        $this->initProjectsDatabase();
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getProjectSection('hero'),
            'projects' => $model->getAll('projects', 'sort_order', 'ASC')
        ];

        $seo = $this->seo([
            'title' => 'Projects & Case Studies | NextgenT Enterprises — Proven Results',
            'description' => 'Explore how NextgenT\'s 4M Framework has transformed healthcare and hospitality businesses. View our portfolio of successful projects and case studies across India and international markets.',
            'keywords' => 'Case Studies, Hospital Projects, Hospitality Projects, Portfolio, Project Results, Client Success Stories',
            'og_title' => 'Projects & Case Studies — NextgenT Enterprises',
            'og_description' => 'Proven results from our 4M framework implementation across healthcare and hospitality.',
        ]);

        $data['seo'] = $seo;
        return view('projects', $data);
    }

    public function team(): string
    {
        $seo = $this->seo([
            'title' => 'Our Team | NextgenT Enterprises — Leadership & Expertise',
            'description' => 'Meet the cross-functional leadership team at NextgenT Enterprises. Decades of specialized experience in healthcare management and hospitality operations.',
            'keywords' => 'Leadership Team, Management Team, Healthcare Experts, Hospitality Specialists, Company Team',
            'og_title' => 'Our Team — NextgenT Enterprises',
            'og_description' => 'Cross-functional leadership combining decades of specialized experience in healthcare and hospitality.',
        ]);
        return view('team', ['seo' => $seo]);
    }

    private function initContactDatabase()
    {
        $this->db = \Config\Database::connect();

        if (!$this->db->tableExists('contact_content')) {
            $this->db->query("CREATE TABLE contact_content (
                id INT AUTO_INCREMENT PRIMARY KEY,
                heading TEXT,
                description TEXT,
                phone VARCHAR(255),
                email VARCHAR(255),
                address TEXT,
                map_link TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");
            $this->db->table('contact_content')->insert([
                'heading' => 'Start a Consultation',
                'description' => 'Our strategic team is ready to analyze your project requirements. Contact us today for a growth-oriented partnership.',
                'phone' => '+91 98765 43210',
                'email' => 'contact@nextgent.com',
                'address' => '123 Corporate Blvd, Business District, New Delhi, India 110001',
                'map_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.123456789!2d77.123456789!3d28.123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDA3JzE2LjUiTiA3N8KwMDcnMjQuNCJF!5e0!3m2!1sen!2sin!4v1234567890'
            ]);
        }

        if (!$this->db->tableExists('enquiries')) {
            $this->db->query("CREATE TABLE enquiries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                company VARCHAR(255),
                industry_focus VARCHAR(255),
                phone VARCHAR(50),
                email VARCHAR(255),
                message TEXT,
                status ENUM('New', 'Read') DEFAULT 'New',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )");
        }
    }

    public function contact(): string
    {
        $this->initContactDatabase();
        $model = new \App\Models\MainModel();

        $this->initSettingsDatabase();

        $data = [
            'contact' => $model->getContactContent(),
            'settings' => $model->getSettings(),
        ];

        $seo = $this->seo([
            'title' => 'Contact Us | NextgenT Enterprises — Start a Consultation',
            'description' => 'Get in touch with NextgenT Enterprises for a strategic consultation. Our team is ready to analyze your hospital or hospitality project requirements. Contact us today.',
            'keywords' => 'Contact NextgenT, Business Consultation, Hospital Advisory, Hotel Consultation, Get in Touch',
            'og_title' => 'Contact Us — NextgenT Enterprises',
            'og_description' => 'Our strategic team is ready to analyze your project requirements. Contact us for a growth-oriented partnership.',
            'page_type' => 'ContactPage',
        ]);

        $data['seo'] = $seo;
        return view('contact', $data);
    }

    public function privacy(): string
    {
        $model = new \App\Models\MainModel();
        $this->initSettingsDatabase();
        $settings = $model->getSettings();

        $seo = $this->seo([
            'title' => $settings['privacy_title'] . ' | NextgenT Enterprises',
            'description' => $settings['privacy_intro'],
            'og_title' => $settings['privacy_title'] . ' — NextgenT Enterprises',
            'og_description' => $settings['privacy_intro'],
        ]);
        return view('privacy', ['seo' => $seo, 'settings' => $settings]);
    }

    public function terms(): string
    {
        $model = new \App\Models\MainModel();
        $this->initSettingsDatabase();
        $settings = $model->getSettings();

        $seo = $this->seo([
            'title' => $settings['terms_title'] . ' | NextgenT Enterprises',
            'description' => $settings['terms_intro'],
            'og_title' => $settings['terms_title'] . ' — NextgenT Enterprises',
            'og_description' => $settings['terms_intro'],
        ]);
        return view('terms', ['seo' => $seo, 'settings' => $settings]);
    }

    public function submitContact()
    {
        $model = new \App\Models\MainModel();

        // 1. Validate form fields properly
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|exact_length[10]',
            'company' => 'required',
            'industry_focus' => 'required',
            'message' => 'required|min_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', 'Please fix the errors: ' . implode(', ', $validation->getErrors()));
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'company' => $this->request->getPost('company'),
            'industry_focus' => $this->request->getPost('industry_focus'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'status' => 'New',
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->initContactDatabase();
        $this->db->table('enquiries')->insert($data);
        
        // Fetch settings for admin email
        $this->initSettingsDatabase();
        $settings = $model->getSettings();
        $adminEmail = (!empty($settings['email'])) ? $settings['email'] : 'reedhigohel563@gmail.com';

        $email = \Config\Services::email();

        // 3. Email to User
        $email->clear(true);
        $email->setTo($data['email']);
        $email->setSubject('Thank you for contacting us');
        
        $userHtml = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #f1f5f9; border-radius: 16px; overflow: hidden;'>
            <div style='background: #0F2D52; padding: 30px; text-align: center;'>
                <h1 style='color: #14B8A6; margin: 0; font-size: 24px;'>NextgenT Enterprises</h1>
            </div>
            <div style='padding: 40px; background: #ffffff; color: #334155;'>
                <h2 style='color: #0F2D52; margin-top: 0;'>Hello " . esc($data['name']) . ",</h2>
                <p style='font-size: 16px; line-height: 1.6;'>Your enquiry has been received successfully. Our team will get back to you soon.</p>
                <p style='font-size: 16px; line-height: 1.6;'>Thank you for reaching out to us. We appreciate your interest in our services.</p>
                <div style='margin-top: 30px; padding-top: 20px; border-top: 1px solid #f1f5f9;'>
                    <p style='margin: 0; font-size: 14px; color: #64748b;'>Regards,</p>
                    <p style='margin: 5px 0 0; font-weight: bold; color: #0F2D52;'>NextgenT Team</p>
                </div>
            </div>
        </div>";
        
        $email->setMessage($userHtml);
        
        if (!$email->send()) {
            log_message('error', 'User Email Notification Failed: ' . $email->printDebugger(['headers', 'subject', 'body']));
        }

        // 4. Email to Admin
        $email->clear(true);
        $email->setTo($adminEmail);
        $email->setSubject('New Contact Enquiry Received');

        $adminHtml = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #f1f5f9; border-radius: 16px; overflow: hidden;'>
            <div style='background: #0F2D52; padding: 20px; text-align: center;'>
                <h2 style='color: #ffffff; margin: 0; font-size: 20px;'>New Submission Details</h2>
            </div>
            <div style='padding: 30px; background: #ffffff;'>
                <table style='width: 100%; border-collapse: collapse; font-size: 14px;'>
                    <tr><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #64748b; width: 120px;'>Name:</td><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #0F2D52; font-weight: bold;'>" . esc($data['name']) . "</td></tr>
                    <tr><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;'>Email:</td><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #0F2D52; font-weight: bold;'>" . esc($data['email']) . "</td></tr>
                    <tr><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;'>Phone:</td><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #0F2D52; font-weight: bold;'>" . esc($data['phone']) . "</td></tr>
                    <tr><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;'>Company:</td><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #0F2D52; font-weight: bold;'>" . esc($data['company']) . "</td></tr>
                    <tr><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;'>Focus:</td><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #0F2D52; font-weight: bold;'>" . esc($data['industry_focus']) . "</td></tr>
                    <tr><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;'>Date:</td><td style='padding: 12px 0; border-bottom: 1px solid #f1f5f9; color: #0F2D52; font-weight: bold;'>" . $data['created_at'] . "</td></tr>
                </table>
                <div style='margin-top: 25px;'>
                    <p style='margin: 0 0 10px; font-size: 12px; color: #64748b; font-weight: bold; text-transform: uppercase;'>User Message:</p>
                    <div style='padding: 15px; background: #f8fafc; border-radius: 12px; border: 1px solid #f1f5f9; color: #334155; line-height: 1.6;'>" . nl2br(esc($data['message'])) . "</div>
                </div>
                <div style='text-align: center; margin-top: 35px;'>
                    <a href='" . base_url('admin/enquiries') . "' style='background: #0F2D52; color: white; padding: 14px 28px; text-decoration: none; border-radius: 10px; font-weight: bold; font-size: 14px; display: inline-block;'>Access Admin Dashboard</a>
                </div>
            </div>
        </div>";

        $email->setMessage($adminHtml);

        if (!$email->send()) {
            log_message('error', 'Admin Email Notification Failed: ' . $email->printDebugger(['headers', 'subject', 'body']));
        }

        // 5. Success response (Toast + Home Redirect)
        return redirect()->to(base_url())->with('success', 'Your form has been submitted successfully. We will get back to you soon.');
    }

    public function testEmail()
    {
        $email = \Config\Services::email();
        $model = new \App\Models\MainModel();
        
        $this->initSettingsDatabase();
        $settings = $model->getSettings();
        $adminEmail = (!empty($settings['email'])) ? $settings['email'] : 'reedhigohel563@gmail.com';

        $email->setTo($adminEmail);
        $email->setSubject('SMTP Test Email - NextgenT');
        $email->setMessage('This is a test email to verify SMTP configuration is working correctly.');

        echo "<h2>SMTP Debugger</h2>";
        if ($email->send()) {
            echo "<p style='color: green;'>Email sent successfully to: " . $adminEmail . "</p>";
        } else {
            echo "<p style='color: red;'>Email failed to send.</p>";
            echo "<pre>" . $email->printDebugger(['headers', 'subject', 'body']) . "</pre>";
        }
    }

    public function adminContact()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $this->initContactDatabase();
        $model = new \App\Models\MainModel();
        $data = [
            'contact' => $model->getContactContent()
        ];

        return view('admin/contact/index', $data);
    }

    public function updateContactContent()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $map_link = $this->request->getPost('map_link');

        // Auto-convert standard Google Maps links to embed format
        if (strpos($map_link, 'google.com/maps') !== false && strpos($map_link, 'embed') === false) {
            // Check for /place/ format
            if (preg_match('/\/maps\/place\/(.*?)\//', $map_link, $matches)) {
                $place = $matches[1];
                $map_link = "https://maps.google.com/maps?q=" . $place . "&t=&z=13&ie=UTF8&iwloc=&output=embed";
            }
            // Check for search?q= format
            elseif (preg_match('/q=(.*?)(&|$)/', $map_link, $matches)) {
                $map_link = "https://maps.google.com/maps?q=" . $matches[1] . "&t=&z=13&ie=UTF8&iwloc=&output=embed";
            }
        }

        $data = [
            'heading' => $this->request->getPost('heading'),
            'description' => $this->request->getPost('description'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'map_link' => $map_link,
        ];

        $model->updateContactContent($data);
        return redirect()->to('admin/contact')->with('success', 'Contact content updated successfully.');
    }

    public function getEnquiries()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $this->initContactDatabase();
        $model = new \App\Models\MainModel();

        $search = $this->request->getGet('q');
        if ($search) {
            $enquiries = $model->searchEnquiries($search);
        } else {
            $enquiries = $model->getEnquiries();
        }

        $data = [
            'enquiries' => $enquiries
        ];

        return view('admin/contact/enquiries', $data);
    }

    public function deleteEnquiry($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $model->deleteEnquiry($id);
        return redirect()->to('admin/enquiries')->with('success', 'Enquiry deleted.');
    }

    public function updateEnquiryStatus($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $enquiry = $model->getById('enquiries', $id);
        $newStatus = ($enquiry['status'] == 'New') ? 'Read' : 'New';
        $model->updateEnquiryStatus($id, $newStatus);
        return redirect()->to('admin/enquiries')->with('success', 'Enquiry status updated.');
    }

    public function adminLogin()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('admin/dashboard');
        }
        return view('admin/login');
    }

    public function adminLoginSubmit()
    {
        $session = session();
        $model = new \App\Models\MainModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->getAdminByIdentifier($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'] ?? '',
                    'isLoggedIn' => true
                ]);
                return redirect()->to('admin/dashboard');
            } else {
                $session->setFlashdata('error', 'Invalid password.');
                return redirect()->back()->withInput();
            }
        } else {
            $session->setFlashdata('error', 'Username or Email not found.');
            return redirect()->back()->withInput();
        }
    }

    public function adminDashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('admin/login');
        }

        $this->initProjectsDatabase();
        $model = new \App\Models\MainModel();
        $data = [
            'total_services' => $model->countAll('services'),
            'total_projects' => $model->countAll('projects'),
            'total_team' => $model->countAll('about_team'),
            'total_testimonials' => $model->countAll('testimonials'),
            'total_enquiries' => $model->countAll('enquiries'),
            'recent_enquiries' => $model->getRecentEnquiries(5)
        ];

        return view('admin/dashboard', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('admin/login');
    }

    public function adminPlaceholder($title)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('admin/login');
        }
        return view('admin/placeholder', ['title' => $title]);
    }

    // --- Homepage Dashboard Module ---

    public function adminHomepage()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'hero' => $model->getSection('hero'),
            'framework' => $model->getSection('framework'),
            'm1' => $model->getSection('m1'),
            'm2' => $model->getSection('m2'),
            'm3' => $model->getSection('m3'),
            'm4' => $model->getSection('m4'),
            'industries' => $model->getSection('industries'),
            'services_header' => $model->getSection('services'),
            'services' => $model->getAll('services', 'sort_order', 'ASC'),
            'statistics' => $model->getAll('statistics', 'sort_order', 'ASC'),
            'testimonials' => $model->getAll('testimonials', 'sort_order', 'ASC'),
        ];
        return view('admin/homepage/index', $data);
    }

    public function adminUpdateSection()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateSection($key, $data);
        return redirect()->to('admin/pages/home')->with('success', 'Section updated successfully.');
    }

    public function adminServices()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'hero' => $model->getServicesSection('hero') ?? ['title' => 'Our Services', 'subtitle' => '', 'description' => '', 'image' => ''],
            'core_header' => $model->getServicesSection('core_header') ?? ['title' => 'Core Services', 'subtitle' => '', 'description' => ''],
            'hospital_header' => $model->getServicesSection('hospital_header') ?? ['title' => 'Hospital Sector', 'subtitle' => '', 'description' => ''],
            'services' => $model->getAll('services', 'sort_order', 'ASC'),
        ];
        return view('admin/services/index', $data);
    }

    public function adminUpdateServicesSection()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');

        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateServicesSection($key, $data);
        return redirect()->to('admin/pages/services')->with('success', 'Section updated successfully.');
    }

    public function adminAddService()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'icon' => $this->request->getPost('icon'),
            'description' => $this->request->getPost('description'),
            'hospital_description' => $this->request->getPost('hospital_description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('services', $data);
        return redirect()->to('admin/pages/home')->with('success', 'Service added.');
    }

    public function adminEditService()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'icon' => $this->request->getPost('icon'),
            'description' => $this->request->getPost('description'),
            'hospital_description' => $this->request->getPost('hospital_description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('services', $id, $data);
        return redirect()->to('admin/pages/home')->with('success', 'Service updated.');
    }

    public function adminDeleteService($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('services', $id);
        return redirect()->to('admin/pages/home')->with('success', 'Service deleted.');
    }

    // --- Stats Management ---
    public function adminAddStat()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'number' => $this->request->getPost('number'),
            'label' => $this->request->getPost('label'),
            'icon' => $this->request->getPost('icon'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('statistics', $data);
        return redirect()->to('admin/pages/home')->with('success', 'Stat added.');
    }

    public function adminEditStat()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'number' => $this->request->getPost('number'),
            'label' => $this->request->getPost('label'),
            'icon' => $this->request->getPost('icon'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('statistics', $id, $data);
        return redirect()->to('admin/pages/home')->with('success', 'Stat updated.');
    }

    public function adminDeleteStat($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('statistics', $id);
        return redirect()->to('admin/pages/home')->with('success', 'Stat deleted.');
    }

    // --- Testimonials Management ---
    public function adminAddTestimonial()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
            'quote' => $this->request->getPost('quote'),
            'initials' => $this->request->getPost('initials'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('testimonials', $data);
        return redirect()->to('admin/pages/home')->with('success', 'Testimonial added.');
    }

    public function adminEditTestimonial()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
            'quote' => $this->request->getPost('quote'),
            'initials' => $this->request->getPost('initials'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('testimonials', $id, $data);
        return redirect()->to('admin/pages/home')->with('success', 'Testimonial updated.');
    }

    public function adminDeleteTestimonial($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('testimonials', $id);
        return redirect()->to('admin/pages/home')->with('success', 'Testimonial deleted.');
    }

    // --- About Page Dashboard Module ---

    public function adminAbout()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'hero' => $model->getAboutSection('hero'),
            'journey' => $model->getAboutSection('journey'),
            'mission' => $model->getAboutSection('mission'),
            'vision' => $model->getAboutSection('vision'),
            'geographic_header' => $model->getAboutSection('geographic'),
            'leadership_header' => $model->getAboutSection('leadership'),
            'advantage_header' => $model->getAboutSection('advantage'),
            'geographic_items' => $model->getAll('about_geographic', 'sort_order', 'ASC'),
            'team' => $model->getAll('about_team', 'sort_order', 'ASC'),
            'advantages' => $model->getAll('about_advantages', 'sort_order', 'ASC'),
        ];
        return view('admin/about/index', $data);
    }

    public function adminUpdateAboutSection()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');

        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateAboutSection($key, $data);
        return redirect()->to('admin/pages/about')->with('success', 'Section updated successfully.');
    }

    private function initSettingsDatabase()
    {
        $this->db = \Config\Database::connect();
        if (!$this->db->tableExists('website_settings')) {
            $this->db->query("CREATE TABLE website_settings (
                id INT PRIMARY KEY DEFAULT 1,
                footer_description TEXT,
                address TEXT,
                phone VARCHAR(50),
                email VARCHAR(255),
                copyright_text VARCHAR(255),
                instagram VARCHAR(255),
                facebook VARCHAR(255),
                twitter VARCHAR(255),
                linkedin VARCHAR(255),
                whatsapp VARCHAR(50),
                privacy_title VARCHAR(255),
                privacy_intro TEXT,
                privacy_content TEXT,
                terms_title VARCHAR(255),
                terms_intro TEXT,
                terms_content TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )");

            $this->db->table('website_settings')->insert([
                'id' => 1,
                'footer_description' => 'Leading transformation in the healthcare and hospital sector through strategic advisory and operational excellence.',
                'address' => '123 Corporate Blvd, Business District, New Delhi, India 110001',
                'phone' => '+91 98765 43210',
                'email' => 'contact@nextgent.com',
                'copyright_text' => '&copy; ' . date('Y') . ' NextgenT Enterprises. All Rights Reserved.',
                'instagram' => '#',
                'facebook' => '#',
                'twitter' => '#',
                'linkedin' => '#',
                'whatsapp' => '919876543210',
                'privacy_title' => 'Privacy Policy',
                'privacy_intro' => 'Your privacy and data security are fundamental to our commitment as a strategic consulting partner.',
                'privacy_content' => "1. Introduction\nAt NextgenT Enterprises, we respect your privacy and are committed to protecting your personal data. This privacy policy explains how we collect, use, and safeguard your information when you visit our website or use our consulting services. By using our website, you consent to the data practices described in this policy.\n\n2. Information We Collect\nWe collect information that you provide directly to us through our contact forms, email subscriptions, or service inquiries. This may include name and contact details, professional information, project-specific details, and technical data.\n\n3. How We Use Your Information\nThe information we collect is used solely for professional purposes, including responding to inquiries, improving website functionality, and ensuring compliance with healthcare sector regulations.\n\n4. Data Protection & Security\nWe implement industry-standard security measures to protect your personal data from unauthorized access, alteration, disclosure, or destruction.\n\n5. Contact Info\nIf you have any questions about this Privacy Policy, please email us at privacy@nextgent.com",
                'terms_title' => 'Terms & Conditions',
                'terms_intro' => 'Governing the professional relationship and standards of excellence at NextgenT Enterprises.',
                'terms_content' => "1. Introduction\nWelcome to NextgenT Enterprises. These Terms & Conditions govern your use of our website and the professional consulting services we provide. By accessing this website, you agree to be bound by these terms.\n\n2. Use of Website\nThe content provided on this website is for general information and professional showcase purposes. You agree to use the website only for lawful purposes.\n\n3. Services Disclaimer\nNextgenT Enterprises provides strategic consulting, manpower, and operational advisory services for the hospital and healthcare sectors. All consulting advice is informational and intended to support management decisions.\n\n4. Liability\nTo the maximum extent permitted by law, NextgenT Enterprises shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use our website or services.\n\n5. Contact Info\nFor any legal inquiries regarding these terms, please contact our administrative team at legal@nextgent.com"
            ]);
        }
    }

    public function adminSettings()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $this->initSettingsDatabase();
        $model = new \App\Models\MainModel();
        $data = [
            'settings' => $model->getSettings()
        ];
        return view('admin/settings/index', $data);
    }

    public function updateFooter()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'footer_description' => $this->request->getPost('footer_description'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'copyright_text' => $this->request->getPost('copyright_text'),
        ];
        $model->updateSettings($data);
        return redirect()->to('admin/settings')->with('success', 'Footer settings updated.');
    }

    public function updateSocialLinks()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'instagram' => $this->request->getPost('instagram'),
            'facebook' => $this->request->getPost('facebook'),
            'twitter' => $this->request->getPost('twitter'),
            'linkedin' => $this->request->getPost('linkedin'),
            'whatsapp' => $this->request->getPost('whatsapp'),
        ];
        $model->updateSettings($data);
        return redirect()->to('admin/settings')->with('success', 'Social links updated.');
    }

    public function updatePrivacyPolicy()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'privacy_title' => $this->request->getPost('privacy_title'),
            'privacy_intro' => $this->request->getPost('privacy_intro'),
            'privacy_content' => $this->request->getPost('privacy_content'),
        ];
        $model->updateSettings($data);
        return redirect()->to('admin/settings')->with('success', 'Privacy Policy updated.');
    }

    public function updateTerms()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $data = [
            'terms_title' => $this->request->getPost('terms_title'),
            'terms_intro' => $this->request->getPost('terms_intro'),
            'terms_content' => $this->request->getPost('terms_content'),
        ];
        $model->updateSettings($data);
        return redirect()->to('admin/settings')->with('success', 'Terms & Conditions updated.');
    }

    // --- About Geographic Management ---
    public function adminAddAboutGeographic()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];

        $file = $this->request->getFile('icon_file');
        if ($file && $file->isValid()) {
            $data['icon'] = $this->uploadImage($file);
        } else {
            $data['icon'] = $this->request->getPost('icon');
        }

        $model->insertData('about_geographic', $data);
        return redirect()->to('admin/pages/about')->with('success', 'Item added.');
    }

    public function adminEditAboutGeographic()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];

        $file = $this->request->getFile('icon_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['icon'] = $path;
        } else {
            $data['icon'] = $this->request->getPost('icon');
        }

        $model->updateData('about_geographic', $id, $data);
        return redirect()->to('admin/pages/about')->with('success', 'Item updated.');
    }

    public function adminDeleteAboutGeographic($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('about_geographic', $id);
        return redirect()->to('admin/pages/about')->with('success', 'Item deleted.');
    }

    // --- About Team Management ---
    public function adminAddAboutTeam()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
            'bio' => $this->request->getPost('bio'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $data['image'] = $this->uploadImage($file);
        } else {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->insertData('about_team', $data);
        return redirect()->to('admin/pages/about')->with('success', 'Team member added.');
    }

    public function adminEditAboutTeam()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
            'bio' => $this->request->getPost('bio'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateData('about_team', $id, $data);
        return redirect()->to('admin/pages/about')->with('success', 'Team member updated.');
    }

    public function adminDeleteAboutTeam($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('about_team', $id);
        return redirect()->to('admin/pages/about')->with('success', 'Team member deleted.');
    }

    // --- About Advantages Management ---
    public function adminAddAboutAdvantage()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'number' => $this->request->getPost('number'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('about_advantages', $data);
        return redirect()->to('admin/pages/about')->with('success', 'Advantage added.');
    }

    public function adminEditAboutAdvantage()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'number' => $this->request->getPost('number'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('about_advantages', $id, $data);
        return redirect()->to('admin/pages/about')->with('success', 'Advantage updated.');
    }

    public function adminDeleteAboutAdvantage($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('about_advantages', $id);
        return redirect()->to('admin/pages/about')->with('success', 'Advantage deleted.');
    }

    // --- 4M Framework Dashboard Module ---

    public function adminFourM()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $this->initFourMDatabase();
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getFourMSection('hero'),
            'architecture' => $model->getFourMSection('architecture'),
            'healthcare' => $model->getFourMSection('healthcare'),
            'healthcare_card' => $model->getFourMSection('healthcare_card'),
            'pillars' => $model->getAll('four_m_pillars', 'pillar_no', 'ASC')
        ];

        foreach ($data['pillars'] as &$pillar) {
            $pillar['highlights'] = $this->db->table('four_m_highlights')
                ->where('pillar_id', $pillar['id'])
                ->orderBy('sort_order', 'ASC')
                ->get()
                ->getResultArray();
        }

        return view('admin/four_m/index', $data);
    }

    public function adminUpdateFourMSection()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateFourMSection($key, $data);
        return redirect()->to('admin/pages/4m-framework')->with('success', 'Section updated.');
    }

    public function adminEditFourMPillar()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'summary' => $this->request->getPost('summary'),
            'description' => $this->request->getPost('description'),
            'healthcare_summary' => $this->request->getPost('healthcare_summary'),
            'icon_svg' => $this->request->getPost('icon_svg'),
        ];
        $model->updateData('four_m_pillars', $id, $data);
        return redirect()->to('admin/pages/4m-framework')->with('success', 'Pillar updated.');
    }

    public function adminAddFourMHighlight()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'pillar_id' => $this->request->getPost('pillar_id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('four_m_highlights', $data);
        return redirect()->to('admin/pages/4m-framework')->with('success', 'Highlight added.');
    }

    public function adminEditFourMHighlight()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('four_m_highlights', $id, $data);
        return redirect()->to('admin/pages/4m-framework')->with('success', 'Highlight updated.');
    }

    public function adminDeleteFourMHighlight($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('four_m_highlights', $id);
        return redirect()->to('admin/pages/4m-framework')->with('success', 'Highlight deleted.');
    }

    public function adminHospitalSector()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');

        $this->initHospitalDatabase();
        $model = new \App\Models\MainModel();

        $data = [
            'hero' => $model->getHospitalSection('hero'),
            'complexity' => $model->getHospitalSection('complexity'),
            'support_header' => $model->getHospitalSection('support_header'),
            'solutions_header' => $model->getHospitalSection('solutions_header'),
            'challenges' => $model->getAll('hospital_challenges', 'sort_order', 'ASC'),
            'support_cards' => $model->getAll('hospital_support_cards', 'sort_order', 'ASC'),
            'solutions' => $model->getAll('hospital_solutions', 'sort_order', 'ASC')
        ];

        return view('admin/hospital_sector/index', $data);
    }

    public function adminUpdateHospitalSection()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateHospitalSection($key, $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Section updated.');
    }

    // --- Hospital Challenges CRUD ---
    public function adminAddHospitalChallenge()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('hospital_challenges', $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Challenge added.');
    }

    public function adminEditHospitalChallenge()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('hospital_challenges', $id, $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Challenge updated.');
    }

    public function adminDeleteHospitalChallenge($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('hospital_challenges', $id);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Challenge deleted.');
    }

    // --- Hospital Support Cards CRUD ---
    public function adminAddHospitalSupport()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('hospital_support_cards', $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Support card added.');
    }

    public function adminEditHospitalSupport()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('hospital_support_cards', $id, $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Support card updated.');
    }

    public function adminDeleteHospitalSupport($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('hospital_support_cards', $id);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Support card deleted.');
    }

    // --- Hospital Solutions CRUD ---
    public function adminAddHospitalSolution()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('hospital_solutions', $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Solution added.');
    }

    public function adminEditHospitalSolution()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('hospital_solutions', $id, $data);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Solution updated.');
    }

    public function adminDeleteHospitalSolution($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('hospital_solutions', $id);
        return redirect()->to('admin/pages/hospital-sector')->with('success', 'Solution deleted.');
    }

    // --- Projects Management ---

    public function adminProjects()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $this->initProjectsDatabase();
        $model = new \App\Models\MainModel();
        $data = [
            'hero' => $model->getProjectSection('hero'),
            'projects' => $model->getAll('projects', 'sort_order', 'ASC'),
        ];
        return view('admin/projects/index', $data);
    }

    public function adminUpdateProjectsSection()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if ($path)
                $data['image'] = $path;
        } elseif ($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateProjectSection($key, $data);
        return redirect()->to('admin/pages/projects')->with('success', 'Section updated.');
    }

    public function adminAddProject()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'badge' => $this->request->getPost('badge'),
            'icon' => $this->request->getPost('icon'),
            'problem' => $this->request->getPost('problem'),
            'solution' => $this->request->getPost('solution'),
            'result' => $this->request->getPost('result'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('projects', $data);
        return redirect()->to('admin/pages/projects')->with('success', 'Project added.');
    }

    public function adminEditProject()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'badge' => $this->request->getPost('badge'),
            'icon' => $this->request->getPost('icon'),
            'problem' => $this->request->getPost('problem'),
            'solution' => $this->request->getPost('solution'),
            'result' => $this->request->getPost('result'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('projects', $id, $data);
        return redirect()->to('admin/pages/projects')->with('success', 'Project updated.');
    }

    public function adminDeleteProject($id)
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('projects', $id);
        return redirect()->to('admin/pages/projects')->with('success', 'Project deleted.');
    }

    /**
     * User Registration
     */
    public function register()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('admin/dashboard');
        }

        // Ensure table has required fields as soon as they visit the page
        $this->db = \Config\Database::connect();
        try {
            $this->db->query("ALTER TABLE admins ADD name VARCHAR(255) AFTER id");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD email VARCHAR(255) AFTER name");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        } catch (\Exception $e) {
        }

        return view('admin/register');
    }

    public function registerSubmit()
    {
        // Ensure table has required fields before validation runs
        $this->db = \Config\Database::connect();
        try {
            $this->db->query("ALTER TABLE admins ADD name VARCHAR(255) AFTER id");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD email VARCHAR(255) AFTER name");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD reset_token VARCHAR(255) NULL");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD reset_expires_at DATETIME NULL");
        } catch (\Exception $e) {
        }

        $model = new \App\Models\MainModel();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[admins.email]',
            'username' => 'required|min_length[3]|is_unique[admins.username]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $model->insertUser($data);

        return redirect()->to('admin/login')->with('success', 'Registration successful, please login');
    }

    public function forgotPassword()
    {
        return view('admin/forgot_password');
    }

    public function forgotPasswordSubmit()
    {
        $model = new \App\Models\MainModel();
        $email_id = $this->request->getPost('email');

        // Ensure fields exist
        $this->db = \Config\Database::connect();
        try {
            $this->db->query("ALTER TABLE admins ADD reset_token VARCHAR(255) NULL");
        } catch (\Exception $e) {
        }
        try {
            $this->db->query("ALTER TABLE admins ADD reset_expires_at DATETIME NULL");
        } catch (\Exception $e) {
        }

        if ($model->checkEmailExists($email_id)) {
            $token = bin2hex(random_bytes(32));
            $expiresAt = date('Y-m-d H:i:s', strtotime('+1 hour'));

            $model->updateResetToken($email_id, $token, $expiresAt);

            // Send Email
            $email = \Config\Services::email();
            $email->setFrom('reedhigohel563@gmail.com', 'NextgenT System');
            $email->setTo($email_id);
            $email->setSubject('Password Reset Request - NextgenT');
            $email->setMailType('html');

            $resetLink = base_url('admin/reset-password/' . $token);
            $html = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #e1e1e1; border-radius: 12px; overflow: hidden;'>
                <div style='background: #0F2D52; padding: 25px; text-align: center;'>
                    <h1 style='color: #14B8A6; margin: 0;'>NextgenT Enterprises</h1>
                </div>
                <div style='padding: 30px;'>
                    <h2 style='color: #0F2D52;'>Password Reset Request</h2>
                    <p>We received a request to reset your admin password. Click the button below to proceed:</p>
                    <div style='text-align: center; margin: 30px 0;'>
                        <a href='$resetLink' style='background: #14B8A6; color: white; padding: 14px 28px; text-decoration: none; border-radius: 8px; font-weight: bold; display: inline-block;'>Reset Password</a>
                    </div>
                    <p style='color: #666; font-size: 14px;'>This link will expire in 1 hour. If you didn't request this, please ignore this email.</p>
                </div>
            </div>";

            $email->setMessage($html);
            $email->send();

            return redirect()->back()->with('success', 'Password reset link sent to your email.');
        } else {
            return redirect()->back()->with('error', 'Email address not found.');
        }
    }

    public function resetPassword($token = null)
    {
        if (!$token)
            return redirect()->to('admin/login');

        $model = new \App\Models\MainModel();
        $user = $model->getAdminByToken($token);

        if (!$user) {
            return redirect()->to('admin/login')->with('error', 'Invalid or expired reset token.');
        }

        return view('admin/reset_password', ['token' => $token]);
    }

    public function resetPasswordSubmit()
    {
        $token = $this->request->getPost('token');
        $password = $this->request->getPost('password');
        $confirm = $this->request->getPost('confirm_password');

        if ($password !== $confirm) {
            return redirect()->back()->with('error', 'Passwords do not match.');
        }

        $model = new \App\Models\MainModel();
        $user = $model->getAdminByToken($token);

        if (!$user) {
            return redirect()->to('admin/login')->with('error', 'Invalid or expired reset token.');
        }

        $model->resetPasswordID($user['id'], password_hash($password, PASSWORD_DEFAULT));

        return redirect()->to('admin/login')->with('success', 'Password reset successful. Please login.');
    }
}
