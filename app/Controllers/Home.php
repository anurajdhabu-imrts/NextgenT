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

    /**
     * Returns common SEO defaults, merged with page-specific overrides.
     */
    private function seo(array $overrides = []): array
    {
        $base = base_url();
        $defaults = [
            'title'       => 'NextgenT Enterprises | Corporate Excellence',
            'description' => 'NextgenT Enterprises — Strategic architecture for Hospitals & Hospitality. Manpower, Marketing, Management, and Operations solutions.',
            'keywords'    => 'Hospital Management, Hospitality Services, Manpower Planning, Healthcare Marketing',
            'canonical'   => rtrim($base, '/') . '/' . ltrim(uri_string(), '/'),
            'og_title'    => 'NextgenT Enterprises | Corporate Excellence',
            'og_description' => 'Leading transformation in healthcare and hospitality through strategic advisory and operational excellence.',
            'og_image'    => $base . 'assets/img/og-image.jpg',
            'og_type'     => 'website',
            'page_type'   => 'WebPage',
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
            'services_header' => $model->getSection('services'),
            'services' => array_slice($model->getAll('services', 'sort_order', 'ASC'), 0, 3),
            'statistics' => $model->getAll('statistics', 'sort_order', 'ASC'),
            'testimonials' => $model->getAll('testimonials', 'sort_order', 'ASC'),
        ];

        $seo = $this->seo([
            'title'          => 'NextgenT Enterprises | One-Stop Solution for Hospitals & Hospitality',
            'description'    => 'NextgenT Enterprises is a comprehensive business solutions company for the healthcare and hospitality sectors. Manpower, Marketing, Management & Operations under one roof.',
            'keywords'       => 'Hospital Management, Hospitality Consulting, Manpower Solutions, Healthcare Operations, 4M Framework, NextgenT',
            'og_title'       => 'NextgenT Enterprises | One-Stop Solution for Hospitals & Hospitality',
            'og_description' => 'End-to-end expertise across manpower, marketing, management, and operations for hospitals and hotels.',
            'page_type'      => 'WebSite',
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
            'title'          => 'About Us | NextgenT Enterprises — Our Story & Mission',
            'description'    => 'Learn about NextgenT Enterprises — a premier strategic consulting firm transforming healthcare and hospitality through the 4M Framework. Discover our mission, vision, and leadership.',
            'keywords'       => 'About NextgenT, Company History, 4M Framework, Hospital Consulting, Hospitality Advisory, Leadership Team',
            'og_title'       => 'About NextgenT Enterprises',
            'og_description' => 'A premier strategic consulting firm dedicated to transforming healthcare and hospitality through innovation and the 4M Framework.',
            'page_type'      => 'AboutPage',
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
            'title'          => 'Our Services | NextgenT Enterprises — Hospital & Hospitality Solutions',
            'description'    => 'Explore NextgenT\'s comprehensive suite of consulting and execution services — from feasibility studies and infrastructure planning to branding, staffing, and day-to-day operational management.',
            'keywords'       => 'Hospital Services, Hospitality Consulting, Feasibility Study, Infrastructure Planning, Manpower Training, Operations Management, Branding',
            'og_title'       => 'Services — NextgenT Enterprises',
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
            'title'          => '4M Framework | NextgenT Enterprises — Manpower, Marketing, Management, Operations',
            'description'    => 'Discover the 4M Framework — NextgenT\'s strategic operating model covering Manpower, Marketing, Management, and Operations for hospitals and hospitality businesses.',
            'keywords'       => '4M Framework, Manpower, Marketing, Management, Operations, Strategic Model, Hospital Operations, Hotel Management',
            'og_title'       => 'The 4M Framework — NextgenT Enterprises',
            'og_description' => 'Four integrated pillars covering the complete hospital and hospitality value chain — from workforce to revenue.',
        ]);

        $data['seo'] = $seo;
        return view('four_m', $data);
    }

    public function industries(): string
    {
        $seo = $this->seo([
            'title'          => 'Industries We Serve | NextgenT Enterprises — Healthcare & Hospitality',
            'description'    => 'NextgenT Enterprises specializes in two core sectors: Healthcare (Hospitals & Clinics) and Hospitality (Hotels, Resorts & Tourism). Tailored business solutions for each industry.',
            'keywords'       => 'Healthcare Industry, Hospitality Industry, Hospital Sector, Hotel Sector, Industry Solutions, Sector Expertise',
            'og_title'       => 'Industries We Serve — NextgenT Enterprises',
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
        foreach($sections as $s) {
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
            'title'          => 'Hospital Sector | NextgenT Enterprises — Healthcare Consulting & Operations',
            'description'    => 'Strategic architecture and operational support for hospitals, clinics, and medical institutions. NABH compliance, TPA management, clinical staffing, and revenue cycle optimization.',
            'keywords'       => 'Hospital Consulting, NABH Compliance, TPA Management, Clinical Staffing, Hospital Operations, Revenue Cycle Management, Healthcare',
            'og_title'       => 'Hospital Sector — NextgenT Enterprises',
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
            'title'          => 'Hospitality Sector | NextgenT Enterprises — Hotel & Resort Consulting',
            'description'    => 'Elevating guest experiences and optimizing revenue for hotels, resorts, and hospitality ventures. Brand standards, yield management, staffing, and F&B consulting.',
            'keywords'       => 'Hotel Consulting, Resort Management, Hospitality Operations, Guest Experience, Yield Management, F&B Consulting, Brand Standards',
            'og_title'       => 'Hospitality Sector — NextgenT Enterprises',
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
            'title'          => 'Projects & Case Studies | NextgenT Enterprises — Proven Results',
            'description'    => 'Explore how NextgenT\'s 4M Framework has transformed healthcare and hospitality businesses. View our portfolio of successful projects and case studies across India and international markets.',
            'keywords'       => 'Case Studies, Hospital Projects, Hospitality Projects, Portfolio, Project Results, Client Success Stories',
            'og_title'       => 'Projects & Case Studies — NextgenT Enterprises',
            'og_description' => 'Proven results from our 4M framework implementation across healthcare and hospitality.',
        ]);
        
        $data['seo'] = $seo;
        return view('projects', $data);
    }

    public function team(): string
    {
        $seo = $this->seo([
            'title'          => 'Our Team | NextgenT Enterprises — Leadership & Expertise',
            'description'    => 'Meet the cross-functional leadership team at NextgenT Enterprises. Decades of specialized experience in healthcare management and hospitality operations.',
            'keywords'       => 'Leadership Team, Management Team, Healthcare Experts, Hospitality Specialists, Company Team',
            'og_title'       => 'Our Team — NextgenT Enterprises',
            'og_description' => 'Cross-functional leadership combining decades of specialized experience in healthcare and hospitality.',
        ]);
        return view('team', ['seo' => $seo]);
    }

    public function contact(): string
    {
        $seo = $this->seo([
            'title'          => 'Contact Us | NextgenT Enterprises — Start a Consultation',
            'description'    => 'Get in touch with NextgenT Enterprises for a strategic consultation. Our team is ready to analyze your hospital or hospitality project requirements. Contact us today.',
            'keywords'       => 'Contact NextgenT, Business Consultation, Hospital Advisory, Hotel Consultation, Get in Touch',
            'og_title'       => 'Contact Us — NextgenT Enterprises',
            'og_description' => 'Our strategic team is ready to analyze your project requirements. Contact us for a growth-oriented partnership.',
            'page_type'      => 'ContactPage',
        ]);
        return view('contact', ['seo' => $seo]);
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
        
        $user = $model->getAdminByUsername($username);
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('admin/dashboard');
            } else {
                $session->setFlashdata('error', 'Invalid password.');
                return redirect()->back()->withInput();
            }
        } else {
            $session->setFlashdata('error', 'Username not found.');
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
            'total_team'     => $model->countAll('about_team'),
            'total_testimonials' => $model->countAll('testimonials'),
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
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
        $model = new \App\Models\MainModel();
        $data = [
            'hero' => $model->getSection('hero'),
            'framework' => $model->getSection('framework'),
            'm1' => $model->getSection('m1'),
            'm2' => $model->getSection('m2'),
            'm3' => $model->getSection('m3'),
            'm4' => $model->getSection('m4'),
            'services_header' => $model->getSection('services'),
            'services' => $model->getAll('services', 'sort_order', 'ASC'),
            'statistics' => $model->getAll('statistics', 'sort_order', 'ASC'),
            'testimonials' => $model->getAll('testimonials', 'sort_order', 'ASC'),
        ];
        return view('admin/homepage/index', $data);
    }

    public function adminUpdateSection()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];
        
        $model->updateSection($key, $data);
        return redirect()->back()->with('success', 'Section updated successfully.');
    }

    public function adminServices()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
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
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['image'] = $path;
        } elseif($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }
        
        $model->updateServicesSection($key, $data);
        return redirect()->back()->with('success', 'Section updated successfully.');
    }

    public function adminAddService()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'icon' => $this->request->getPost('icon'),
            'description' => $this->request->getPost('description'),
            'hospital_description' => $this->request->getPost('hospital_description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('services', $data);
        return redirect()->back()->with('success', 'Service added.');
    }

    public function adminEditService()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
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
        return redirect()->back()->with('success', 'Service updated.');
    }

    public function adminDeleteService($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('services', $id);
        return redirect()->back()->with('success', 'Service deleted.');
    }

    // --- Stats Management ---
    public function adminAddStat()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'number' => $this->request->getPost('number'),
            'label' => $this->request->getPost('label'),
            'icon' => $this->request->getPost('icon'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('statistics', $data);
        return redirect()->back()->with('success', 'Stat added.');
    }

    public function adminEditStat()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'number' => $this->request->getPost('number'),
            'label' => $this->request->getPost('label'),
            'icon' => $this->request->getPost('icon'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('statistics', $id, $data);
        return redirect()->back()->with('success', 'Stat updated.');
    }

    public function adminDeleteStat($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('statistics', $id);
        return redirect()->back()->with('success', 'Stat deleted.');
    }

    // --- Testimonials Management ---
    public function adminAddTestimonial()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
            'quote' => $this->request->getPost('quote'),
            'initials' => $this->request->getPost('initials'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('testimonials', $data);
        return redirect()->back()->with('success', 'Testimonial added.');
    }

    public function adminEditTestimonial()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
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
        return redirect()->back()->with('success', 'Testimonial updated.');
    }

    public function adminDeleteTestimonial($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('testimonials', $id);
        return redirect()->back()->with('success', 'Testimonial deleted.');
    }

    // --- About Page Dashboard Module ---

    public function adminAbout()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
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
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['image'] = $path;
        } elseif($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }
        
        $model->updateAboutSection($key, $data);
        return redirect()->back()->with('success', 'Section updated successfully.');
    }

    // --- About Geographic Management ---
    public function adminAddAboutGeographic()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        
        $file = $this->request->getFile('icon_file');
        if($file && $file->isValid()) {
            $data['icon'] = $this->uploadImage($file);
        } else {
            $data['icon'] = $this->request->getPost('icon');
        }

        $model->insertData('about_geographic', $data);
        return redirect()->back()->with('success', 'Item added.');
    }

    public function adminEditAboutGeographic()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];

        $file = $this->request->getFile('icon_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['icon'] = $path;
        } else {
            $data['icon'] = $this->request->getPost('icon');
        }

        $model->updateData('about_geographic', $id, $data);
        return redirect()->back()->with('success', 'Item updated.');
    }

    public function adminDeleteAboutGeographic($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('about_geographic', $id);
        return redirect()->back()->with('success', 'Item deleted.');
    }

    // --- About Team Management ---
    public function adminAddAboutTeam()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
            'bio' => $this->request->getPost('bio'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        
        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $data['image'] = $this->uploadImage($file);
        } else {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->insertData('about_team', $data);
        return redirect()->back()->with('success', 'Team member added.');
    }

    public function adminEditAboutTeam()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
            'bio' => $this->request->getPost('bio'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];

        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['image'] = $path;
        } elseif($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateData('about_team', $id, $data);
        return redirect()->back()->with('success', 'Team member updated.');
    }

    public function adminDeleteAboutTeam($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('about_team', $id);
        return redirect()->back()->with('success', 'Team member deleted.');
    }

    // --- About Advantages Management ---
    public function adminAddAboutAdvantage()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'number' => $this->request->getPost('number'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('about_advantages', $data);
        return redirect()->back()->with('success', 'Advantage added.');
    }

    public function adminEditAboutAdvantage()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'number' => $this->request->getPost('number'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('about_advantages', $id, $data);
        return redirect()->back()->with('success', 'Advantage updated.');
    }

    public function adminDeleteAboutAdvantage($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('about_advantages', $id);
        return redirect()->back()->with('success', 'Advantage deleted.');
    }

    // --- 4M Framework Dashboard Module ---

    public function adminFourM()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
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
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['image'] = $path;
        } elseif($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateFourMSection($key, $data);
        return redirect()->back()->with('success', 'Section updated.');
    }

    public function adminEditFourMPillar()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
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
        return redirect()->back()->with('success', 'Pillar updated.');
    }

    public function adminAddFourMHighlight()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'pillar_id' => $this->request->getPost('pillar_id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('four_m_highlights', $data);
        return redirect()->back()->with('success', 'Highlight added.');
    }

    public function adminEditFourMHighlight()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('four_m_highlights', $id, $data);
        return redirect()->back()->with('success', 'Highlight updated.');
    }

    public function adminDeleteFourMHighlight($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('four_m_highlights', $id);
        return redirect()->back()->with('success', 'Highlight deleted.');
    }

    public function adminHospitalSector()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        
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
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['image'] = $path;
        } elseif($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateHospitalSection($key, $data);
        return redirect()->back()->with('success', 'Section updated.');
    }

    // --- Hospital Challenges CRUD ---
    public function adminAddHospitalChallenge()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('hospital_challenges', $data);
        return redirect()->back()->with('success', 'Challenge added.');
    }

    public function adminEditHospitalChallenge()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('hospital_challenges', $id, $data);
        return redirect()->back()->with('success', 'Challenge updated.');
    }

    public function adminDeleteHospitalChallenge($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('hospital_challenges', $id);
        return redirect()->back()->with('success', 'Challenge deleted.');
    }

    // --- Hospital Support Cards CRUD ---
    public function adminAddHospitalSupport()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('hospital_support_cards', $data);
        return redirect()->back()->with('success', 'Support card added.');
    }

    public function adminEditHospitalSupport()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'icon_svg' => $this->request->getPost('icon_svg'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('hospital_support_cards', $id, $data);
        return redirect()->back()->with('success', 'Support card updated.');
    }

    public function adminDeleteHospitalSupport($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('hospital_support_cards', $id);
        return redirect()->back()->with('success', 'Support card deleted.');
    }

    // --- Hospital Solutions CRUD ---
    public function adminAddHospitalSolution()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->insertData('hospital_solutions', $data);
        return redirect()->back()->with('success', 'Solution added.');
    }

    public function adminEditHospitalSolution()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'sort_order' => $this->request->getPost('sort_order'),
        ];
        $model->updateData('hospital_solutions', $id, $data);
        return redirect()->back()->with('success', 'Solution updated.');
    }

    public function adminDeleteHospitalSolution($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('hospital_solutions', $id);
        return redirect()->back()->with('success', 'Solution deleted.');
    }

    // --- Projects Management ---

    public function adminProjects()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
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
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $key = $this->request->getPost('section_key');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('image_file');
        if($file && $file->isValid()) {
            $path = $this->uploadImage($file);
            if($path) $data['image'] = $path;
        } elseif($this->request->getPost('image_url')) {
            $data['image'] = $this->request->getPost('image_url');
        }

        $model->updateProjectSection($key, $data);
        return redirect()->back()->with('success', 'Section updated.');
    }

    public function adminAddProject()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
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
        return redirect()->back()->with('success', 'Project added.');
    }

    public function adminEditProject()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
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
        return redirect()->back()->with('success', 'Project updated.');
    }

    public function adminDeleteProject($id)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('admin/login');
        $model = new \App\Models\MainModel();
        $model->deleteData('projects', $id);
        return redirect()->back()->with('success', 'Project deleted.');
    }
}
