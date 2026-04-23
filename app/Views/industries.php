<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-navy py-20 lg:py-28">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1600&q=80"
            alt="Industries" class="w-full h-full object-cover opacity-20" />
        <div class="absolute inset-0 bg-navy/60"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <span data-aos="fade-up" class="inline-block px-4 py-1.5 rounded-full bg-teal-accent/20 border border-teal-accent/30 text-teal-accent text-sm font-bold tracking-widest uppercase mb-6">Sector Expertise</span>
        <h1 data-aos="fade-up" data-aos-delay="100" class="text-4xl md:text-6xl font-bold mb-6">Industries We <span class="text-teal-accent">Serve</span></h1>
        <p data-aos="fade-up" data-aos-delay="200" class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
            NextgenT Enterprises specializes in the hospital and hospitality sectors, providing tailored business solutions that address unique industry challenges.
        </p>
    </div>
</section>

<!-- Sector Selection Grid -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">
            
            <!-- Hospital Sector -->
            <div class="group relative overflow-hidden rounded-[3rem] bg-white border border-slate-100 shadow-sm transition-all hover:shadow-2xl hover:-translate-y-2" data-aos="fade-right">
                <div class="h-80 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" alt="Hospital Sector" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/10 transition-colors"></div>
                    <div class="absolute top-8 left-8 py-2 px-6 bg-white/90 backdrop-blur rounded-full text-navy font-bold text-xs tracking-widest uppercase shadow-xl">Healthcare</div>
                </div>
                <div class="p-10 lg:p-14">
                    <h3 class="text-3xl font-bold text-navy mb-6">Hospital & Healthcare</h3>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        From greenfield hospital development to operational auditing, we provide strategic architecture for modern medical facilities with a focus on clinical efficiency and patient satisfaction.
                    </p>
                    <ul class="space-y-3 mb-10 text-sm text-slate-500 font-medium">
                        <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 rounded-full bg-teal-accent"></div>NABH Compliance & Accreditation</li>
                        <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 rounded-full bg-teal-accent"></div>TPA & Insurance Management</li>
                        <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 rounded-full bg-teal-accent"></div>Clinical Staff Training</li>
                    </ul>
                    <a href="<?= base_url('hospital-sector') ?>" class="inline-flex items-center gap-3 py-4 px-10 bg-navy text-white rounded-xl font-bold hover:bg-teal-accent transition-all group/btn shadow-lg shadow-navy/10">
                        Explore Hospital Sector
                        <svg class="w-5 h-5 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Hospitality Sector -->
            <div class="group relative overflow-hidden rounded-[3rem] bg-white border border-slate-100 shadow-sm transition-all hover:shadow-2xl hover:-translate-y-2" data-aos="fade-left">
                <div class="h-80 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80" alt="Hospitality Sector" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-teal-accent/30 group-hover:bg-teal-accent/10 transition-colors"></div>
                    <div class="absolute top-8 left-8 py-2 px-6 bg-white/90 backdrop-blur rounded-full text-teal-accent-dark font-bold text-xs tracking-widest uppercase shadow-xl">Hospitality</div>
                </div>
                <div class="p-10 lg:p-14">
                    <h3 class="text-3xl font-bold text-navy mb-6">Hotels, Resorts & Tourism</h3>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Our hospitality wing focuses on guest-centric operations, brand standard development, and revenue management strategies that drive high-season occupancy and yield performance.
                    </p>
                    <ul class="space-y-3 mb-10 text-sm text-slate-500 font-medium">
                        <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 rounded-full bg-teal-accent"></div>Yield & Revenue Management</li>
                        <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 rounded-full bg-teal-accent"></div>Guest Journey Strategy</li>
                        <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 rounded-full bg-teal-accent"></div>Staffing & Service Standards</li>
                    </ul>
                    <a href="<?= base_url('hospitality-sector') ?>" class="inline-flex items-center gap-3 py-4 px-10 bg-teal-accent text-white rounded-xl font-bold hover:bg-navy transition-all group/btn shadow-lg shadow-teal-500/10">
                        Explore Hospitality Sector
                        <svg class="w-5 h-5 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Decorative Shape -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[120%] h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
</section>

<!-- Dual Sector Advantage -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-navy rounded-[3rem] p-10 md:p-20 text-center text-white relative overflow-hidden group">
            <h2 class="text-3xl md:text-5xl font-bold mb-8 relative z-10" data-aos="fade-up">The Cross-Sector <span class="text-teal-accent italic">Edge</span></h2>
            <p class="text-slate-300 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed relative z-10 mb-12" data-aos="fade-up" data-aos-delay="100">
                At NextgenT Enterprises, we uniquely bridge the gap between healthcare precision and hospitality excellence. Our consultants apply the rigorous operational standards of hospitals with the service-centric heart of hospitality to create truly superior business models.
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 relative z-10" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                    <span class="block text-2xl font-bold text-teal-accent mb-1">500+</span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-400">Trained Staff</span>
                </div>
                <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                    <span class="block text-2xl font-bold text-teal-accent mb-1">12</span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-400">States Covered</span>
                </div>
                <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                    <span class="block text-2xl font-bold text-teal-accent mb-1">20+</span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-400">SOP Frameworks</span>
                </div>
                <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                    <span class="block text-2xl font-bold text-teal-accent mb-1">98%</span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-400">Client Retention</span>
                </div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-tr from-teal-accent/5 to-transparent pointer-events-none"></div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="zoom-in">
        <h2 class="text-3xl font-bold text-navy mb-6">Need a Tailored Sector Solution?</h2>
        <p class="text-slate-500 mb-10 max-w-xl mx-auto leading-relaxed">Our multi-disciplinary team is ready to analyze your project requirements and provide a strategic 4M framework alignment.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="<?= base_url('contact') ?>" class="px-10 py-4 bg-navy text-white rounded-xl font-bold hover:bg-teal-accent transition-all shadow-xl shadow-navy/10">Get a Consultation</a>
            <a href="<?= base_url('projects') ?>" class="px-10 py-4 bg-white border border-slate-200 text-navy rounded-xl font-bold hover:bg-slate-50 transition-all">View Our Case Studies</a>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>
