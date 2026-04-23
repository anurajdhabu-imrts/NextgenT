<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1600&q=80"
            alt="Business Case Studies"
            class="w-full h-[350px] md:h-[400px] object-cover opacity-20" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/90 to-transparent"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <div class="flex items-center justify-center text-center" data-aos="fade-up">
            
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Projects & <span class="text-teal-accent">Case Studies</span>
                </h1>

                <p class="text-lg text-slate-300 leading-relaxed">
                    Discover how NextgenT Enterprises leverages the 4M Framework to resolve complex operational challenges, driving measurable growth and operational excellence across the healthcare and hospitality sectors.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Case Studies Grid Section -->
<section class="py-16 md:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            
            <!-- Case Study 1 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full" data-aos="fade-up">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-navy/5 rounded-lg text-navy group-hover:bg-navy group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                        Hospital Sector
                    </span>
                </div>
                <h3 class="text-xl font-bold text-navy mb-4">Multi-Specialty Hospital Turnaround</h3>
                <div class="space-y-3 text-sm flex-grow">
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Problem:</strong>
                        <p class="text-slate-500 leading-relaxed">A 150-bed regional hospital struggled with declining out-patient footfall and extremely high attrition rates in nursing staff.</p>
                    </div>
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Solution:</strong>
                        <p class="text-slate-500 leading-relaxed">Deployed the 4M framework to restructure clinical operations, standardise HR policies, and launch targeted digital outreach campaigns.</p>
                    </div>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-100">
                    <strong class="text-navy text-sm block mb-1">Result:</strong>
                    <p class="text-teal-accent font-semibold text-sm">45% increase in OPD volume; nursing attrition dropped below 8% within six months.</p>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-navy/5 rounded-lg text-navy group-hover:bg-navy group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                        Hospitality Sector
                    </span>
                </div>
                <h3 class="text-xl font-bold text-navy mb-4">Pre-Opening Strategy for Luxury Resort</h3>
                <div class="space-y-3 text-sm flex-grow">
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Problem:</strong>
                        <p class="text-slate-500 leading-relaxed">A premium resort faced persistent launch delays, unorganized vendor pipelines, and escalating pre-opening operational budgets.</p>
                    </div>
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Solution:</strong>
                        <p class="text-slate-500 leading-relaxed">Streamlined vendor management, conducted intensive staff training, and established strict SOPs across all F&B and housekeeping outlets.</p>
                    </div>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-100">
                    <strong class="text-navy text-sm block mb-1">Result:</strong>
                    <p class="text-teal-accent font-semibold text-sm">Successfully launched 3 weeks ahead of the revised schedule with a 15% saving on initial operating budgets.</p>
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full" data-aos="fade-up">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-navy/5 rounded-lg text-navy group-hover:bg-navy group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                        Hospital Sector
                    </span>
                </div>
                <h3 class="text-xl font-bold text-navy mb-4">Revenue Cycle & TPA Optimization</h3>
                <div class="space-y-3 text-sm flex-grow">
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Problem:</strong>
                        <p class="text-slate-500 leading-relaxed">A growing clinic network experienced severe cash flow bottlenecks due to high insurance claim rejections and delayed TPA documentation.</p>
                    </div>
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Solution:</strong>
                        <p class="text-slate-500 leading-relaxed">Overhauled billing software integration, automated claim tracking, and trained the front-desk team on strict documentation compliance.</p>
                    </div>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-100">
                    <strong class="text-navy text-sm block mb-1">Result:</strong>
                    <p class="text-teal-accent font-semibold text-sm">Reduced claim rejection rates by 60% and improved cash flow turnaround from 90 days to under 30 days.</p>
                </div>
            </div>

            <!-- Case Study 4 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-navy/5 rounded-lg text-navy group-hover:bg-navy group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                        Hospitality Sector
                    </span>
                </div>
                <h3 class="text-xl font-bold text-navy mb-4">Boutique Hotel Brand Repositioning</h3>
                <div class="space-y-3 text-sm flex-grow">
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Problem:</strong>
                        <p class="text-slate-500 leading-relaxed">A heritage boutique property suffered from a stagnant online reputation, poor visibility, and static average daily rates (ADR).</p>
                    </div>
                    <div>
                        <strong class="text-slate-700 block mb-0.5">Solution:</strong>
                        <p class="text-slate-500 leading-relaxed">Revamped digital marketing presence, implemented robust guest feedback loops, and introduced a dynamic pricing distribution strategy.</p>
                    </div>
                </div>
                <div class="mt-5 pt-4 border-t border-slate-100">
                    <strong class="text-navy text-sm block mb-1">Result:</strong>
                    <p class="text-teal-accent font-semibold text-sm">Achieved a 35% boost in average daily rates and elevated platform rankings to the top 5 in the region.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 border-t border-slate-100 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-navy mb-4">Ready to Write Your Success Story?</h2>
        <p class="text-slate-500 mb-8">
            Partner with NextgenT Enterprises to navigate technical challenges and drive tangible growth for your project.
        </p>
        <a href="<?= base_url('contact') ?>"
            class="inline-flex items-center px-8 py-3 bg-teal-accent hover:bg-teal-accent-dark text-white font-semibold rounded-lg transition-colors shadow-sm">
            Discuss Your Project
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>
</section>

<?= $this->include('templates/footer') ?>
