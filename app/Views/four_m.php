<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=1600&q=80"
            alt="4M Framework"
            class="w-full h-[400px] md:h-[420px] object-cover opacity-20" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/85 to-teal-accent/15"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <div class="flex items-center justify-center text-center" data-aos="fade-up">
            <div class="max-w-3xl">
                <span class="inline-flex items-center rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-medium tracking-wide text-white/90 mb-5">
                    Strategic Operating Model
                </span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 leading-tight">
                    The <span class="text-teal-accent">4M</span> Framework
                </h1>
                <p class="text-base md:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto">
                    The foundational strategic system behind every NextgenT engagement. Four integrated pillars that cover the complete hospital and healthcare value chain — from workforce to revenue.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- Framework Visual Overview                                -->
<!-- ══════════════════════════════════════════════════════════ -->
<section class="py-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="text-teal-accent font-bold tracking-[0.2em] uppercase text-[10px] bg-teal-50 px-3 py-1 rounded-full">Our Architecture</span>
            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-navy leading-tight">Four Pillars. One System.</h2>
            <p class="mt-3 text-slate-500 text-sm max-w-xl mx-auto leading-relaxed">
                Every service, every project, every outcome is powered by the integrated 4M operating model.
            </p>
            <div class="w-16 h-1 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Desktop: Quadrant Framework Visualization -->
        <div class="hidden lg:block max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="relative">
                <!-- Center Hub -->
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                    <div class="w-28 h-28 rounded-full bg-navy shadow-2xl shadow-navy/30 flex flex-col items-center justify-center border-4 border-white">
                        <span class="text-3xl font-black text-white leading-none">4M</span>
                        <span class="text-[8px] font-bold uppercase tracking-[0.25em] text-teal-accent mt-1">Framework</span>
                    </div>
                </div>

                <!-- Connecting Lines -->
                <div class="absolute left-1/2 top-0 bottom-0 w-px bg-slate-100 z-0"></div>
                <div class="absolute top-1/2 left-0 right-0 h-px bg-slate-100 z-0"></div>

                <!-- 4 Quadrant Cards -->
                <div class="grid grid-cols-2 gap-5 relative z-10">

                    <!-- Q1: Manpower (Top-Left) -->
                    <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pr-14 pb-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-xl bg-navy flex items-center justify-center text-white shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-teal-accent tracking-wider">01</span>
                                <h3 class="text-lg font-bold text-navy leading-tight">Manpower</h3>
                            </div>
                        </div>
                        <p class="text-sm text-slate-500 leading-relaxed">End-to-end workforce solutions — recruitment, onboarding, and ongoing training for skilled professionals.</p>
                    </div>

                    <!-- Q2: Marketing (Top-Right) -->
                    <div class="bg-gradient-to-bl from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pl-14 pb-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-xl bg-teal-accent flex items-center justify-center text-white shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-teal-accent tracking-wider">02</span>
                                <h3 class="text-lg font-bold text-navy leading-tight">Marketing</h3>
                            </div>
                        </div>
                        <p class="text-sm text-slate-500 leading-relaxed">Strategic brand positioning, digital marketing, patient acquisition, and revenue-linked campaigns.</p>
                    </div>

                    <!-- Q3: Management (Bottom-Left) -->
                    <div class="bg-gradient-to-tr from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pr-14 pt-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-xl bg-navy-light flex items-center justify-center text-white shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-teal-accent tracking-wider">03</span>
                                <h3 class="text-lg font-bold text-navy leading-tight">Management</h3>
                            </div>
                        </div>
                        <p class="text-sm text-slate-500 leading-relaxed">Governance frameworks, SOP development, regulatory compliance, accreditation, and financial advisory.</p>
                    </div>

                    <!-- Q4: Operations (Bottom-Right) -->
                    <div class="bg-gradient-to-tl from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pl-14 pt-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-xl bg-teal-accent-dark flex items-center justify-center text-white shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-teal-accent tracking-wider">04</span>
                                <h3 class="text-lg font-bold text-navy leading-tight">Operations</h3>
                            </div>
                        </div>
                        <p class="text-sm text-slate-500 leading-relaxed">Daily operational oversight, quality control, vendor management, and monthly revenue performance tracking.</p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mobile: Clean Stack -->
        <div class="lg:hidden grid grid-cols-1 sm:grid-cols-2 gap-5" data-aos="fade-up">
            <!-- M1: Manpower -->
            <div class="bg-slate-50 rounded-xl border border-slate-100 p-6 flex items-start gap-4">
                <div class="shrink-0 w-11 h-11 rounded-xl bg-navy flex items-center justify-center text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-teal-accent tracking-wider">01</span>
                    <h3 class="text-lg font-bold text-navy">Manpower</h3>
                    <p class="text-slate-500 text-xs leading-relaxed mt-1">Recruitment, onboarding, and workforce training.</p>
                </div>
            </div>
            <!-- M2: Marketing -->
            <div class="bg-slate-50 rounded-xl border border-slate-100 p-6 flex items-start gap-4">
                <div class="shrink-0 w-11 h-11 rounded-xl bg-teal-accent flex items-center justify-center text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-teal-accent tracking-wider">02</span>
                    <h3 class="text-lg font-bold text-navy">Marketing</h3>
                    <p class="text-slate-500 text-xs leading-relaxed mt-1">Brand positioning and revenue-linked campaigns.</p>
                </div>
            </div>
            <!-- M3: Management -->
            <div class="bg-slate-50 rounded-xl border border-slate-100 p-6 flex items-start gap-4">
                <div class="shrink-0 w-11 h-11 rounded-xl bg-navy-light flex items-center justify-center text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-teal-accent tracking-wider">03</span>
                    <h3 class="text-lg font-bold text-navy">Management</h3>
                    <p class="text-slate-500 text-xs leading-relaxed mt-1">Governance, compliance, and financial advisory.</p>
                </div>
            </div>
            <!-- M4: Operations -->
            <div class="bg-slate-50 rounded-xl border border-slate-100 p-6 flex items-start gap-4">
                <div class="shrink-0 w-11 h-11 rounded-xl bg-teal-accent-dark flex items-center justify-center text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-teal-accent tracking-wider">04</span>
                    <h3 class="text-lg font-bold text-navy">Operations</h3>
                    <p class="text-slate-500 text-xs leading-relaxed mt-1">Daily oversight, quality control, and performance tracking.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- Pillar Detail Sections                                   -->
<!-- ══════════════════════════════════════════════════════════ -->

<!-- PILLAR 01: MANPOWER -->
<section class="py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">
            <!-- Left: Number + Title -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-navy flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <span class="text-6xl font-black text-navy/10 leading-none select-none">01</span>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-3">Manpower</h2>
                <p class="text-sm text-slate-500 leading-relaxed max-w-md">
                    End-to-end workforce solutions — from role identification and recruitment to onboarding and ongoing training. We ensure hospital units are staffed with skilled, certified professionals who are aligned to institutional goals.
                </p>
            </div>

            <!-- Right: Detail Highlights -->
            <div class="lg:col-span-3 space-y-4" data-aos="fade-left">
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Role Identification & Recruitment</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">JD creation, candidate screening, and verified credential-based hiring for clinical and non-clinical hospital roles.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Training & Skill Development</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Structured induction, department-specific SOPs, soft skills workshops, and periodic upskilling for all staff levels.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Performance Management</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">KPI-linked appraisals, productivity monitoring, retention frameworks, and career progression pathways.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PILLAR 02: MARKETING -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">
            <!-- Left: Number + Title -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-teal-accent flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                    </div>
                    <span class="text-6xl font-black text-teal-accent/10 leading-none select-none">02</span>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-3">Marketing</h2>
                <p class="text-sm text-slate-500 leading-relaxed max-w-md">
                    Specialised hospital marketing — brand positioning, digital marketing, patient acquisition strategies, community outreach, and revenue-linked marketing campaigns designed for measurable growth.
                </p>
            </div>

            <!-- Right: Detail Highlights -->
            <div class="lg:col-span-3 space-y-4" data-aos="fade-left">
                <div class="bg-slate-50 rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Brand Identity & Positioning</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Complete brand strategy — logo, visual identity, messaging, and market positioning for new and existing facilities.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Digital Marketing & Online Presence</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Website development, SEO, social media management, Google Ads, OTA listings, and online reputation management.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Patient Acquisition Strategies</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Referral network development, community health camps, digital channel optimisation, and conversion funnel management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PILLAR 03: MANAGEMENT -->
<section class="py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">
            <!-- Left: Number + Title -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-navy-light flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <span class="text-6xl font-black text-navy/10 leading-none select-none">03</span>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-3">Management</h2>
                <p class="text-sm text-slate-500 leading-relaxed max-w-md">
                    Institutional management consulting — governance frameworks, SOP development, regulatory compliance, accreditation support (NABH/ISO), and financial management advisory for sustained operational excellence.
                </p>
            </div>

            <!-- Right: Detail Highlights -->
            <div class="lg:col-span-3 space-y-4" data-aos="fade-left">
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy-light">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Governance & SOPs</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Institutional governance design, department-level standard operating procedures, and policy documentation systems.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy-light">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Compliance & Accreditation</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">NABH, JCI, and ISO readiness programmes. Regulatory compliance management, licensing support, and audit preparation.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy-light">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Financial Management Advisory</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Budgeting, cost control, P&L management, revenue forecasting, and financial health monitoring for institutional stability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PILLAR 04: OPERATIONS -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">
            <!-- Left: Number + Title -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-teal-accent-dark flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span class="text-6xl font-black text-teal-accent/10 leading-none select-none">04</span>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-3">Operations</h2>
                <p class="text-sm text-slate-500 leading-relaxed max-w-md">
                    Full-spectrum hospital operations management — daily operational oversight, quality control, vendor management, inventory, housekeeping, and monthly revenue performance tracking to ensure consistent output and efficiency.
                </p>
            </div>

            <!-- Right: Detail Highlights -->
            <div class="lg:col-span-3 space-y-4" data-aos="fade-left">
                <div class="bg-slate-50 rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent-dark">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Daily Operational Oversight</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Workflow supervision, shift management, patient flow coordination, and real-time issue resolution across departments.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent-dark">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Quality Control & Audits</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Periodic quality assessments, housekeeping audits, service standards enforcement, and corrective action tracking.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent-dark">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5">Vendor & Inventory Management</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Supplier coordination, procurement cycles, inventory control, cost optimisation, and contract management systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- Cross-Sector Value Section                               -->
<!-- ══════════════════════════════════════════════════════════ -->
<section class="py-14 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white">One Framework. Total Excellence.</h2>
            <p class="mt-3 text-slate-300 text-sm max-w-xl mx-auto leading-relaxed">
                The 4M Framework powers every engagement — providing a strategic architecture for every healthcare project we touch.
            </p>
            <div class="w-16 h-1 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Centered Hospital Card -->
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="100">
            <div class="max-w-lg w-full bg-white/5 border border-white/10 rounded-2xl p-7 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-teal-accent/20 flex items-center justify-center text-teal-accent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">Healthcare & Hospitals</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2.5 text-sm text-slate-300">
                        <span class="text-teal-accent mt-0.5">•</span>
                        <span><strong class="text-white">Manpower</strong> — Doctors, nurses, paramedics, admin staff</span>
                    </li>
                    <li class="flex items-start gap-2.5 text-sm text-slate-300">
                        <span class="text-teal-accent mt-0.5">•</span>
                        <span><strong class="text-white">Marketing</strong> — Patient acquisition, health camps, referrals</span>
                    </li>
                    <li class="flex items-start gap-2.5 text-sm text-slate-300">
                        <span class="text-teal-accent mt-0.5">•</span>
                        <span><strong class="text-white">Management</strong> — NABH compliance, SOPs, financial health</span>
                    </li>
                    <li class="flex items-start gap-2.5 text-sm text-slate-300">
                        <span class="text-teal-accent mt-0.5">•</span>
                        <span><strong class="text-white">Operations</strong> — OPD/IPD workflows, pharmacy, housekeeping</span>
                    </li>
                </ul>
                <div class="mt-5">
                    <a href="<?= base_url('hospital-sector') ?>" class="text-teal-accent text-sm font-bold inline-flex items-center group/link">
                        Explore Hospital Sector
                        <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- CTA Section                                              -->
<!-- ══════════════════════════════════════════════════════════ -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-br from-navy via-navy-light to-navy p-10 md:p-14 text-center shadow-xl shadow-navy/5" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">
                Built on Strategy. Delivered with Precision.
            </h2>
            <p class="text-slate-300 text-base max-w-2xl mx-auto leading-relaxed mb-8">
                The 4M Framework is not just a model — it's the engine behind every successful hospital and healthcare engagement we deliver. Let us show you how it works for your project.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?= base_url('services') ?>"
                    class="inline-flex items-center justify-center px-10 py-4 bg-teal-accent hover:bg-teal-accent-dark text-white font-bold rounded-xl transition-all hover:shadow-lg hover:-translate-y-0.5 active:scale-95">
                    Explore Our Services
                </a>
                <a href="<?= base_url('contact') ?>"
                    class="inline-flex items-center justify-center px-10 py-4 border border-white/25 bg-white/10 text-white font-bold rounded-xl transition-all hover:bg-white hover:text-navy hover:shadow-lg hover:-translate-y-0.5 active:scale-95">
                    Get a Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>
