<?php

namespace App\Controllers;

class Home extends BaseController
{
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
        $seo = $this->seo([
            'title'          => 'NextgenT Enterprises | One-Stop Solution for Hospitals & Hospitality',
            'description'    => 'NextgenT Enterprises is a comprehensive business solutions company for the healthcare and hospitality sectors. Manpower, Marketing, Management & Operations under one roof.',
            'keywords'       => 'Hospital Management, Hospitality Consulting, Manpower Solutions, Healthcare Operations, 4M Framework, NextgenT',
            'og_title'       => 'NextgenT Enterprises | One-Stop Solution for Hospitals & Hospitality',
            'og_description' => 'End-to-end expertise across manpower, marketing, management, and operations for hospitals and hotels.',
            'page_type'      => 'WebSite',
        ]);
        return view('home', ['seo' => $seo]);
    }

    public function about(): string
    {
        $seo = $this->seo([
            'title'          => 'About Us | NextgenT Enterprises — Our Story & Mission',
            'description'    => 'Learn about NextgenT Enterprises — a premier strategic consulting firm transforming healthcare and hospitality through the 4M Framework. Discover our mission, vision, and leadership.',
            'keywords'       => 'About NextgenT, Company History, 4M Framework, Hospital Consulting, Hospitality Advisory, Leadership Team',
            'og_title'       => 'About NextgenT Enterprises',
            'og_description' => 'A premier strategic consulting firm dedicated to transforming healthcare and hospitality through innovation and the 4M Framework.',
            'page_type'      => 'AboutPage',
        ]);
        return view('about', ['seo' => $seo]);
    }

    public function services(): string
    {
        $seo = $this->seo([
            'title'          => 'Our Services | NextgenT Enterprises — Hospital & Hospitality Solutions',
            'description'    => 'Explore NextgenT\'s comprehensive suite of consulting and execution services — from feasibility studies and infrastructure planning to branding, staffing, and day-to-day operational management.',
            'keywords'       => 'Hospital Services, Hospitality Consulting, Feasibility Study, Infrastructure Planning, Manpower Training, Operations Management, Branding',
            'og_title'       => 'Services — NextgenT Enterprises',
            'og_description' => 'End-to-end consulting and execution services for hospitals and hospitality ventures.',
        ]);
        return view('services', ['seo' => $seo]);
    }

    public function fourM(): string
    {
        $seo = $this->seo([
            'title'          => '4M Framework | NextgenT Enterprises — Manpower, Marketing, Management, Operations',
            'description'    => 'Discover the 4M Framework — NextgenT\'s strategic operating model covering Manpower, Marketing, Management, and Operations for hospitals and hospitality businesses.',
            'keywords'       => '4M Framework, Manpower, Marketing, Management, Operations, Strategic Model, Hospital Operations, Hotel Management',
            'og_title'       => 'The 4M Framework — NextgenT Enterprises',
            'og_description' => 'Four integrated pillars covering the complete hospital and hospitality value chain — from workforce to revenue.',
        ]);
        return view('four_m', ['seo' => $seo]);
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

    public function hospitalSector(): string
    {
        $seo = $this->seo([
            'title'          => 'Hospital Sector | NextgenT Enterprises — Healthcare Consulting & Operations',
            'description'    => 'Strategic architecture and operational support for hospitals, clinics, and medical institutions. NABH compliance, TPA management, clinical staffing, and revenue cycle optimization.',
            'keywords'       => 'Hospital Consulting, NABH Compliance, TPA Management, Clinical Staffing, Hospital Operations, Revenue Cycle Management, Healthcare',
            'og_title'       => 'Hospital Sector — NextgenT Enterprises',
            'og_description' => 'Clinical efficiency, compliance, and sustainable growth solutions for healthcare institutions.',
        ]);
        return view('hospital_sector', ['seo' => $seo]);
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
        $seo = $this->seo([
            'title'          => 'Projects & Case Studies | NextgenT Enterprises — Proven Results',
            'description'    => 'Explore how NextgenT\'s 4M Framework has transformed healthcare and hospitality businesses. View our portfolio of successful projects and case studies across India and international markets.',
            'keywords'       => 'Case Studies, Hospital Projects, Hospitality Projects, Portfolio, Project Results, Client Success Stories',
            'og_title'       => 'Projects & Case Studies — NextgenT Enterprises',
            'og_description' => 'Proven results from our 4M framework implementation across healthcare and hospitality.',
        ]);
        return view('projects', ['seo' => $seo]);
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
}
