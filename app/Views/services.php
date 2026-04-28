<?= $this->include('templates/header') ?>

<!-- Hero / Intro Section -->
<section class="relative w-full overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="<?= esc($hero['image']) ?>"
            alt="<?= esc($hero['title']) ?>"
            class="w-full h-[400px] md:h-[420px] object-cover opacity-25" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/85 to-teal-accent/15"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <div class="flex items-center justify-center text-center" data-aos="fade-up">
            <div class="max-w-3xl">
                <span class="inline-flex items-center rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-medium tracking-wide text-white/90 mb-5">
                    <?= esc($hero['subtitle']) ?>
                </span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 leading-tight">
                    <?= $hero['title'] ?>
                </h1>
                <p class="text-base md:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto">
                    <?= esc($hero['description']) ?>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- SECTION 2: Core Services — Listed ONCE                   -->
<!-- ══════════════════════════════════════════════════════════ -->
<section id="core-services" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-teal-accent font-bold tracking-[0.2em] uppercase text-[10px] bg-teal-50 px-3 py-1 rounded-full"><?= esc($core_header['subtitle']) ?></span>
            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-navy leading-tight"><?= esc($core_header['title']) ?></h2>
            <p class="mt-3 text-slate-500 text-sm max-w-xl mx-auto leading-relaxed">
                <?= esc($core_header['description']) ?>
            </p>
            <div class="w-16 h-1 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Services Grid — 3 columns, compact rows -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-8">

            <?php 
            $iconMap = [
                'location-marker' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                'office-building' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'user-group' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                'shield-check' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'trending-up' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                'speakerphone' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z',
                'academic-cap' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                'clipboard-list' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                'lightning-bolt' => 'M13 10V3L4 14h7v7l9-11h-7z'
            ];
            foreach($services as $index => $s): ?>
                <div class="flex items-start gap-4 group" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>">
                    <div class="shrink-0 w-10 h-10 rounded-lg bg-navy/5 flex items-center justify-center text-navy group-hover:bg-navy group-hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $iconMap[$s['icon']] ?? $s['icon'] ?>"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-navy mb-1"><?= esc($s['title']) ?></h3>
                        <p class="text-sm text-slate-500 leading-relaxed"><?= esc($s['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- SECTION 3: Hospital Sector — Application Context            -->
<!-- ══════════════════════════════════════════════════════════ -->
<section id="hospital-sector" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 mb-10" data-aos="fade-up">
            <div>
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-9 h-9 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-teal-accent bg-teal-50 px-2 py-1 rounded"><?= esc($hospital_header['subtitle']) ?></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy text-base leading-relaxed"><?= esc($hospital_header['title']) ?></h2>
                <p class="text-slate-500 text-sm mt-1 max-w-xl leading-relaxed">
                    <?= esc($hospital_header['description']) ?>
                </p>
            </div>
            <a href="<?= base_url('hospital-sector') ?>" class="inline-flex items-center text-teal-accent font-bold text-sm shrink-0 group">
                View Full Sector Page
                <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        <!-- Hospital Application — All 9 Services Mapped -->
        <div class="space-y-4">

            <?php foreach($services as $s): ?>
                <div class="bg-white rounded-xl border border-slate-100 p-5 flex flex-col sm:flex-row sm:items-start gap-4 hover:shadow-md hover:border-teal-accent/20 transition-all duration-300 group" data-aos="fade-up">
                    <div class="shrink-0 w-9 h-9 rounded-lg bg-teal-accent/10 flex items-center justify-center text-teal-accent">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $iconMap[$s['icon']] ?? $s['icon'] ?>"/>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-sm font-bold text-navy mb-1"><?= esc($s['title']) ?></h3>
                        <p class="text-sm text-slate-500 leading-relaxed"><?= esc($s['hospital_description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


    


<!-- ══════════════════════════════════════════════════════════ -->
<!-- CTA Section                                              -->
<!-- ══════════════════════════════════════════════════════════ -->
<!-- <section class="py-16 bg-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-5" data-aos="fade-up">Need a Tailored Solution?</h2>
        <p class="text-slate-300 mb-8 max-w-2xl mx-auto text-base leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Every hospital project is unique. Let our strategic consulting team design a service package aligned to your operational goals and growth ambitions.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="<?= base_url('contact') ?>"
                class="inline-flex items-center justify-center px-10 py-4 bg-teal-accent hover:bg-teal-accent-dark text-white font-bold rounded-xl transition-all hover:shadow-lg hover:-translate-y-0.5 active:scale-95">
                Get In Touch Today
            </a>
            <a href="<?= base_url('projects') ?>"
                class="inline-flex items-center justify-center px-10 py-4 border border-white/25 bg-white/10 text-white font-bold rounded-xl transition-all hover:bg-white hover:text-navy hover:shadow-lg hover:-translate-y-0.5 active:scale-95">
                View Our Projects
            </a>
        </div>
    </div>
</section> -->

<?= $this->include('templates/footer') ?>
