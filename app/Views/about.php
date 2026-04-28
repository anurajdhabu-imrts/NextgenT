<?= $this->include('templates/header') ?>

<!-- Hero / Intro Section -->
<section class="relative w-full overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="<?= esc($hero['image']) ?>"
            alt="<?= esc($hero['title']) ?>"
            class="w-full h-[400px] md:h-[450px] object-cover opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/80 to-transparent"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <div class="flex items-center justify-center text-center" data-aos="fade-up">

            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    <?= preg_replace('/\[(.*?)\]/', '<span class="text-teal-accent">$1</span>', $hero['title']) ?>
                </h1>

                <p class="text-lg md:text-xl text-slate-300 leading-relaxed">
                    <?= esc($hero['description']) ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Company Story Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="<?= esc($journey['image']) ?>"
                    alt="<?= esc($journey['title']) ?>" class="rounded-2xl shadow-lg w-full h-80 object-cover" />
            </div>
            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-navy mb-6"><?= preg_replace('/\[(.*?)\]/', '<span class="text-teal-accent">$1</span>', $journey['title']) ?></h2>
                <div class="space-y-4 text-slate-600 leading-relaxed">
                    <?= nl2br(esc($journey['description'])) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Mission Card -->
            <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm transition-hover hover:shadow-md"
                data-aos="fade-up">
                <div
                    class="w-12 h-12 bg-teal-accent/10 rounded-xl flex items-center justify-center text-teal-accent mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-navy mb-4"><?= esc($mission['title']) ?></h3>
                <p class="text-slate-600 leading-relaxed">
                    <?= esc($mission['description']) ?>
                </p>
            </div>
            <!-- Vision Card -->
            <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm transition-hover hover:shadow-md"
                data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-navy/10 rounded-xl flex items-center justify-center text-navy mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-navy mb-4"><?= esc($vision['title']) ?></h3>
                <p class="text-slate-600 leading-relaxed">
                    <?= esc($vision['description']) ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Geographic Presence Section -->
<section class="py-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
            
            <!-- Left Side: Content -->
            <div data-aos="fade-right" class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-navy mb-3"><?= preg_replace('/\[(.*?)\]/', '<span class="text-teal-accent">$1</span>', $geographic_header['title']) ?></h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        <?= esc($geographic_header['description']) ?>
                    </p>
                </div>

                <div class="space-y-6">
                    <?php foreach($geographic_items as $index => $item): ?>
                    <div class="pl-5 border-l-[3px] <?= $index === 0 ? 'border-teal-accent' : 'border-slate-200 transition-colors duration-300 hover:border-teal-accent group' ?>">
                        <h3 class="text-lg font-bold text-navy mb-1.5 flex items-center gap-2">
                            <?php if(strpos($item['icon'], 'uploads/') !== false): ?>
                                <img src="<?= base_url($item['icon']) ?>" class="w-5 h-5 object-contain" alt="<?= esc($item['title']) ?>">
                            <?php else: ?>
                                <svg class="w-5 h-5 <?= $index === 0 ? 'text-teal-accent' : 'text-slate-400 group-hover:text-teal-accent transition-colors' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $item['icon'] ?>"/>
                                </svg>
                            <?php endif; ?>
                            <?= esc($item['title']) ?>
                        </h3>
                        <p class="text-sm text-slate-500 leading-relaxed">
                            <?= esc($item['description']) ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div data-aos="fade-left" class="h-full flex items-stretch">
                <div class="w-full h-full bg-[#18113c] rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <img src="<?= base_url($geographic_header['image']) ?>" alt="<?= esc($geographic_header['title']) ?>"
                        class="w-full h-[475px] object-cover opacity-90 hover:opacity-100 transition-opacity duration-500" />
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Team / Leadership Section -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-navy mb-4" data-aos="fade-up"><?= preg_replace('/\[(.*?)\]/', '<span class="text-teal-accent">$1</span>', $leadership_header['title']) ?></h2>
        <p class="text-slate-500 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <?= esc($leadership_header['description']) ?>
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach($team as $index => $member): ?>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 group" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="aspect-square rounded-xl overflow-hidden mb-4">
                    <img src="<?= esc($member['image']) ?>"
                        alt="<?= esc($member['name']) ?>"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" />
                </div>
                <h4 class="text-lg font-bold text-navy"><?= esc($member['name']) ?></h4>
                <p class="text-teal-accent text-sm font-semibold mb-3"><?= esc($member['designation']) ?></p>
                <p class="text-xs text-slate-500 leading-relaxed"><?= esc($member['bio']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-navy"><?= preg_replace('/\[(.*?)\]/', '<span class="text-teal-accent">$1</span>', $advantage_header['title']) ?></h2>
            <p class="text-slate-500 mt-4"><?= esc($advantage_header['description']) ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach($advantages as $index => $adv): ?>
            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 flex flex-col items-center text-center group hover:bg-navy transition-all duration-300"
                data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div
                    class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-navy mb-4 shadow-sm group-hover:bg-teal-accent group-hover:text-white transition-colors">
                    <span class="font-bold"><?= esc($adv['number']) ?></span>
                </div>
                <h4 class="font-bold text-navy mb-2 group-hover:text-white"><?= esc($adv['title']) ?></h4>
                <p class="text-sm text-slate-500 group-hover:text-slate-300"><?= esc($adv['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>