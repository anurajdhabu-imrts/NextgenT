<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=1600&q=80"
            alt="NextgenT Enterprises Hero" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-navy/80"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-navy/90 via-navy/75 to-teal-accent/20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="min-h-[72vh] flex items-center py-16 lg:py-20">
            <div class="max-w-2xl text-white">
                <span data-aos="fade-up" data-aos-delay="100"
                    class="inline-flex items-center rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs sm:text-sm font-medium tracking-wide">
                    <?= esc($hero['subtitle']) ?>
                </span>

                <h1 data-aos="fade-up" data-aos-delay="200" class="mt-5 text-4xl sm:text-5xl lg:text-5xl font-bold leading-tight">
                    <?= esc($hero['title']) ?>
                </h1>

                <p data-aos="fade-up" data-aos-delay="300" class="mt-5 text-base sm:text-lg text-slate-200 leading-7 max-w-xl">
                    <?= esc($hero['description']) ?>
                </p>

                <div data-aos="fade-up" data-aos-delay="400" class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-teal-accent px-6 py-3 text-sm sm:text-base font-semibold text-white transition hover:bg-teal-accent-dark hover:shadow-lg hover:-translate-y-0.5">
                        Get Consultation
                    </a>
                    <a href="/services"
                        class="inline-flex items-center justify-center rounded-lg border border-white/25 bg-white/10 px-6 py-3 text-sm sm:text-base font-semibold text-white transition hover:bg-white hover:text-navy hover:shadow-lg hover:-translate-y-0.5">
                        View Our Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4M Framework: Professional Production-Level Section -->
<section id="4m-framework" class="py-12 bg-white relative overflow-hidden reveal-on-scroll">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-8" data-aos="fade-up">
            <span class="text-teal-accent font-bold tracking-[0.2em] uppercase text-[10px] bg-teal-50 px-3 py-1 rounded-full"><?= esc($framework['subtitle']) ?></span>
            <h2 class="mt-4 text-3xl md:text-4xl lg:text-5xl font-bold text-navy leading-tight"><?= esc($framework['title']) ?></h2>
            <div class="w-16 h-1 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="relative flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-10">
            
            <!-- Mobile Layout (Clean Stack) - Hidden on LG -->
            <div class="lg:hidden grid grid-cols-1 sm:grid-cols-2 gap-6 w-full">
                <!-- <?= esc($m1['title']) ?> (Mobile) -->
                <div class="p-6 bg-slate-50/80 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                    <div class="shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-navy border border-slate-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy mb-1"><?= esc($m1['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed"><?= esc($m1['description']) ?></p>
                    </div>
                </div>
                <!-- <?= esc($m2['title']) ?> (Mobile) -->
                <div class="p-6 bg-slate-50/80 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                    <div class="shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-teal-accent border border-slate-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy mb-1"><?= esc($m2['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed"><?= esc($m2['description']) ?></p>
                    </div>
                </div>
                <!-- <?= esc($m3['title']) ?> (Mobile) -->
                <div class="p-6 bg-slate-50/80 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                    <div class="shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-navy-light border border-slate-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy mb-1"><?= esc($m3['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed"><?= esc($m3['description']) ?></p>
                    </div>
                </div>
                <!-- <?= esc($m4['title']) ?> (Mobile) -->
                <div class="p-6 bg-slate-50/80 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                    <div class="shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-[#0D9488] border border-slate-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy mb-1"><?= esc($m4['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed"><?= esc($m4['description']) ?></p>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout (Compact Circular Infographic) - LG and Up -->
            <div class="hidden lg:flex items-center justify-center w-full max-w-5xl mx-auto py-6">
                
                <!-- Left Labels -->
                <div class="flex flex-col gap-14 w-[30%]">
                    <!-- Column 1: <?= esc($m1['title']) ?> -->
                    <div class="framework-card group text-right relative cursor-pointer" data-index="0">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-navy/5 rounded-xl mb-2 text-navy transition-all duration-500 group-hover:bg-navy group-hover:text-white group-hover:-translate-y-1 shadow-sm border border-navy/5">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy"><?= esc($m1['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed mt-1.5 max-w-[240px] ml-auto"><?= esc($m1['description']) ?></p>
                        <!-- Thicker Connector -->
                        <div class="absolute -right-6 top-10 w-6 h-[2px] bg-slate-100 group-hover:bg-navy transition-colors duration-500"></div>
                    </div>

                    <!-- Column 3: <?= esc($m3['title']) ?> -->
                    <div class="framework-card group text-right relative cursor-pointer" data-index="2">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-navy/5 rounded-xl mb-2 text-navy-light transition-all duration-500 group-hover:bg-navy-light group-hover:text-white group-hover:-translate-y-1 shadow-sm border border-navy/5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy"><?= esc($m3['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed mt-1.5 max-w-[240px] ml-auto"><?= esc($m3['description']) ?></p>
                        <!-- Thicker Connector -->
                        <div class="absolute -right-6 top-10 w-6 h-[2px] bg-slate-100 group-hover:bg-navy-light transition-colors duration-500"></div>
                    </div>
                </div>

                <!-- Central Visualization (More Precise SVG) -->
                <div class="w-[40%] flex justify-center items-center relative z-10 px-0">
                    <div class="relative w-80 h-80 xl:w-[380px] xl:h-[380px]">
                        <!-- Polished SVG Donut -->
                        <svg viewBox="0 0 200 200" class="w-full h-full transform -rotate-90 filter drop-shadow-[0_15px_35px_rgba(15,45,82,0.12)] animate-[spin_120s_linear_infinite] animate-float">
                            <!-- High-precision segments with divider strokes -->
                            <path class="segment transition-all duration-500 cursor-pointer" data-index="0"
                                d="M 100 100 L 100 20 A 80 80 0 0 1 180 100 Z"
                                fill="#0F2D52" stroke="white" stroke-width="2.5" />
                            <path class="segment transition-all duration-500 cursor-pointer" data-index="1"
                                d="M 100 100 L 180 100 A 80 80 0 0 1 100 180 Z"
                                fill="#14B8A6" stroke="white" stroke-width="2.5" />
                            <path class="segment transition-all duration-500 cursor-pointer" data-index="3"
                                d="M 100 100 L 100 180 A 80 80 0 0 1 20 100 Z"
                                fill="#0D9488" stroke="white" stroke-width="2.5" />
                            <path class="segment transition-all duration-500 cursor-pointer" data-index="2"
                                d="M 100 100 L 20 100 A 80 80 0 0 1 100 20 Z"
                                fill="#1A4A7A" stroke="white" stroke-width="2.5" />
                            
                            <!-- Deep Inner Layout -->
                            <circle cx="100" cy="100" r="52" fill="white" />
                            <!-- Animated Inner Decorative Ring -->
                            <circle cx="100" cy="100" r="46" fill="transparent" stroke="#f1f5f9" stroke-width="1" stroke-dasharray="8 4" class="animate-[spin_25s_linear_infinite]" />
                            <circle cx="100" cy="100" r="42" fill="transparent" stroke="rgba(20,184,166,0.1)" stroke-width="1" />
                        </svg>

                        <!-- High-visibility Center Text -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center animate-float">
                            <span class="text-4xl font-black text-navy tracking-tighter leading-none">4M</span>
                            <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-400 mt-2 block">FRAMEWORK</span>
                        </div>

                        <!-- Pulse Aura -->
                        <div class="absolute inset-12 bg-teal-accent/5 rounded-full -z-10 animate-pulse-subtle"></div>
                    </div>
                </div>

                <!-- Right Labels -->
                <div class="flex flex-col gap-14 w-[30%]">
                    <!-- Column 2: <?= esc($m2['title']) ?> -->
                    <div class="framework-card group text-left relative cursor-pointer" data-index="1">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-teal-accent/5 rounded-xl mb-2 text-teal-accent transition-all duration-500 group-hover:bg-teal-accent group-hover:text-white group-hover:-translate-y-1 shadow-sm border border-teal-accent/5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy"><?= esc($m2['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed mt-1.5 max-w-[240px]"><?= esc($m2['description']) ?></p>
                         <!-- Thicker Connector -->
                         <div class="absolute -left-6 top-10 w-6 h-[2px] bg-slate-100 group-hover:bg-teal-accent transition-colors duration-500"></div>
                    </div>

                    <!-- Column 4: <?= esc($m4['title']) ?> -->
                    <div class="framework-card group text-left relative cursor-pointer" data-index="3">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-teal-accent/5 rounded-xl mb-2 text-[#0D9488] transition-all duration-500 group-hover:bg-[#0D9488] group-hover:text-white group-hover:-translate-y-1 shadow-sm border border-teal-accent/5">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy"><?= esc($m4['title']) ?></h3>
                        <p class="text-slate-500 text-xs leading-relaxed mt-1.5 max-w-[240px]"><?= esc($m4['description']) ?></p>
                        <!-- Thicker Connector -->
                        <div class="absolute -left-6 top-10 w-6 h-[2px] bg-slate-100 group-hover:bg-[#0D9488] transition-colors duration-500"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .segment {
        transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), filter 0.8s ease;
        transform-origin: 100px 100px;
    }
    .segment.highlight {
        transform: scale(1.05);
        filter: brightness(1.05) drop-shadow(0 8px 15px rgba(15,45,82,0.15));
        z-index: 50;
    }
    .framework-card {
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .framework-card.active {
        transform: translateY(-2px);
        background: rgba(248, 250, 252, 0.8);
        border-radius: 1rem;
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-pulse-subtle {
        animation: pulse-subtle 3s ease-in-out infinite;
    }
    @keyframes pulse-subtle {
        0%, 100% { opacity: 0.1; transform: scale(1); }
        50% { opacity: 0.2; transform: scale(1.1); }
    }
</style>




<!-- Services Section -->
<section id="services" class="bg-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Section Header -->
        <div class="mb-10" data-aos="fade-up">
            <span class="text-teal-accent font-bold tracking-[0.2em] uppercase text-[10px] bg-teal-50 px-3 py-1 rounded-full"><?= esc($services_header['subtitle']) ?></span>
            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-navy"><?= esc($services_header['title']) ?></h2>
            <div class="w-16 h-1 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Services Flex Container -->
        <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto">

            <?php foreach($services as $index => $service): ?>
            <!-- Card <?= $index + 1 ?> -->
            <div data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>"
                class="w-full md:w-[calc(50%-2rem)] lg:w-[calc(33.33%-2rem)] max-w-sm bg-white px-6 py-10 rounded-xl border border-slate-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-25 h-10 flex rounded-lg items-center justify-center mx-auto mb-1 group-hover:bg-navy group-hover:scale-105 transition-all duration-300">
                    <div class="text-navy group-hover:text-white transition-colors duration-300">
                        <?= $service['icon'] ?>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3"><?= esc($service['title']) ?></h3>
                <p class="text-sm text-slate-500 leading-relaxed max-w-xs mx-auto">
                    <?= esc($service['description']) ?>
                </p>
            </div>
            <?php endforeach; ?>

        </div>

        <!-- View All Services Button -->
        <div class="mt-10">
            <a href="/services"
                class="inline-flex items-center gap-2 bg-teal-accent hover:bg-teal-accent-dark text-white font-semibold px-8 py-3 rounded-lg transition-all duration-200 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                View All Services
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</section>


<!-- Industries Served Section -->
<section id="industries" class="bg-white py-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Hospital Sector Block (Image Left) -->
        <div class="flex flex-col lg:flex-row items-center gap-12 mb-20">
            <!-- Image Column -->
            <div class="w-full lg:w-1/2" data-aos="fade-right">
                <div class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-100 h-[340px] group">
                    <img src="https://aihms.in/blog/wp-content/uploads/2020/04/healthcare3.jpg"
                        alt="Healthcare Industry"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <!-- Subtle Teal Highlight -->
                    <div class="absolute inset-0 ring-1 ring-inset ring-teal-accent/10 pointer-events-none"></div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="w-full lg:w-1/2" data-aos="fade-left">
                <div class="space-y-5">
                    <div class="flex items-center gap-2">
                        <span
                            class="text-[10px] font-bold tracking-[0.2em] uppercase text-teal-accent bg-teal-50 px-2 py-1 rounded">Industry
                            Focus</span>
                        <div class="h-[1px] w-8 bg-teal-accent/30"></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="shrink-0 w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.423 15.621a11.215 11.215 0 01-1.423 3.67l-1.29-3.58a1.69 1.69 0 00-3.09 0l-1.29 3.58a11.215 11.215 0 01-1.423-3.67m1.29-3.58L15 8.5l1.29 3.58m0 0a1.69 1.69 0 013.09 0l1.29 3.58M9 4.5v3m3-3v3m3-3v3M9 15h3v3H9v-3z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-navy"> Hospital Sector</h2>
                    </div>
                    <p class="text-slate-600 text-base leading-relaxed max-w-xl">
                        Delivering operational excellence and strategic growth solutions for modern healthcare
                        institutions, ensuring clinical efficiency and sustainable performance.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="inline-flex items-center rounded-md bg-white border border-slate-100 px-3 py-1 text-xs font-semibold text-navy">Operations
                            Audit</span>
                        <span
                            class="inline-flex items-center rounded-md bg-white border border-slate-100 px-3 py-1 text-xs font-semibold text-navy">NABH
                            Compliance</span>
                        <span
                            class="inline-flex items-center rounded-md bg-white border border-slate-100 px-3 py-1 text-xs font-semibold text-navy">Manpower
                            Planning</span>
                    </div>
                    <div class="pt-2">
                        <a href="/hospital-sector" class="text-teal-accent font-bold text-sm inline-flex items-center group">
                            Explore More
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- Statistics Section -->
<section class="py-10 bg-navy text-white stats-trigger overflow-hidden" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            
            <?php foreach($statistics as $index => $stat): ?>
            <!-- Stat <?= $index + 1 ?> -->
            <div class="space-y-2" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                <div class="flex justify-center mb-1">
                    <div class="text-teal-accent">
                        <?= $stat['icon'] ?>
                    </div>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-teal-accent leading-none stat-number" data-target="<?= esc($stat['number']) ?>">0</div>
                <p class="text-xs sm:text-sm font-medium uppercase tracking-widest text-slate-300"><?= esc($stat['label']) ?></p>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Trust & Testimonials Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy">Trusted by Industry Leaders</h2>
            <div class="h-1 w-12 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>



        <!-- Testimonial Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <?php foreach($testimonials as $index => $t): ?>
            <!-- Testimonial <?= $index + 1 ?> -->
            <div data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>"
                class="bg-slate-50 border border-slate-100 rounded-2xl p-6 sm:p-8 shadow-sm transition hover:shadow-xl hover:-translate-y-1 group">
                <div class="flex items-center gap-4 mb-5">
                    <div
                        class="w-12 h-12 rounded-full <?= $index % 2 == 0 ? 'bg-navy' : 'bg-teal-accent' ?> flex items-center justify-center text-white font-bold text-sm transition-transform group-hover:scale-110">
                        <?= esc($t['initials']) ?></div>
                    <div>
                        <h4 class="font-bold text-navy text-base leading-tight"><?= esc($t['name']) ?></h4>
                        <p class="text-xs font-medium text-slate-500 uppercase tracking-wide"><?= esc($t['role']) ?></p>
                    </div>
                </div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed italic">
                    "<?= esc($t['quote']) ?>"
                </p>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Quick Enquiry Section -->
<!-- <section id="enquiry" class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl shadow-navy/5 border border-slate-100 overflow-hidden" data-aos="zoom-in">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                <div class="lg:col-span-2 bg-navy p-8 lg:p-12 text-white flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Quick Consultation</h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-8">
                        Fill out the form and our strategic team will get back to you within 24 hours.
                    </p>
                    <div class="space-y-4 text-sm">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-teal-accent">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <span>+91 98765 43210</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-teal-accent">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <span>contact@nextgent.com</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 p-8 lg:p-12">
                    <form action="#" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-1.5 ml-1">Full Name</label>
                                <input type="text" placeholder="John Doe" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-1.5 ml-1">Company Name</label>
                                <input type="text" placeholder="Healthcare Inc." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all outline-none text-sm">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-1.5 ml-1">Industry</label>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all outline-none text-sm appearance-none bg-white">
                                    <option>Hospital Sector</option>
                                    <option>Diagnostic / Clinics</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-1.5 ml-1">Phone Number</label>
                                <input type="tel" placeholder="+91 ..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all outline-none text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-1.5 ml-1">Email Address</label>
                            <input type="email" placeholder="john@company.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-1.5 ml-1">Message</label>
                            <textarea rows="3" placeholder="How can we help you?" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all outline-none text-sm resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 bg-teal-accent hover:bg-teal-accent-dark text-white font-bold rounded-xl shadow-lg shadow-teal-accent/20 transition-all hover:-translate-y-0.5 active:scale-95">
                            Send Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- CTA -->
<!-- <section id="contact" class="pb-24 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="rounded-3xl bg-gradient-to-br from-navy via-navy-light to-navy p-10 md:p-14 text-center shadow-xl shadow-navy/5 group">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                Ready for Strategic Growth?
            </h2>
            <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto leading-relaxed mb-10">
                Partner with NextgenT Enterprises to strengthen your operations, streamline execution, and support
                long-term growth.
            </p>
            <div>
                <a href="/contact"
                    class="inline-flex items-center justify-center rounded-xl bg-teal-accent px-10 py-4 text-base font-bold text-white transition hover:bg-white hover:text-navy shadow-lg shadow-teal-accent/20 hover:-translate-y-1 active:scale-95">
                    Schedule a Free Consultation
                </a>
            </div>
        </div>
    </div>
</section> -->


<?= $this->include('templates/footer') ?>