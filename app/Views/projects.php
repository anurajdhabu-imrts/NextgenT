<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="<?= esc($hero['image']) ?>"
            alt="<?= esc($hero['title']) ?>"
            class="w-full h-[350px] md:h-[400px] object-cover opacity-20" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/90 to-transparent"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <div class="flex items-center justify-center text-center" data-aos="fade-up">
            
            <div class="max-w-3xl">
                <span class="inline-block px-3 py-1 bg-teal-accent/10 text-teal-accent rounded-full text-xs font-bold uppercase tracking-widest mb-4">
                    <?= esc($hero['subtitle']) ?>
                </span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    <?= esc($hero['title']) ?> 
                </h1>

                <p class="text-base md:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto">
                    <?= esc($hero['description']) ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Case Studies Grid Section -->
<section class="py-16 md:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            
            <?php 
                $icons = [
                    'office-building' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'shield-check' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    'trending-up' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                    'architecture' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'users' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                    'chart' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'
                ];
            ?>

            <?php foreach($projects as $index => $p): ?>
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-all group flex flex-col h-full" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-navy/5 rounded-lg text-navy group-hover:bg-navy group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?= $icons[$p['icon']] ?? $icons['office-building'] ?>"/>
                            </svg>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100 uppercase tracking-wider">
                            <?= esc($p['badge']) ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4"><?= esc($p['title']) ?></h3>
                    <div class="space-y-3 text-sm flex-grow">
                        <div>
                            <strong class="text-slate-700 block mb-0.5 uppercase text-[10px] tracking-widest font-bold opacity-60">Problem:</strong>
                            <p class="text-slate-500 leading-relaxed"><?= esc($p['problem']) ?></p>
                        </div>
                        <div>
                            <strong class="text-slate-700 block mb-0.5 uppercase text-[10px] tracking-widest font-bold opacity-60">Solution:</strong>
                            <p class="text-slate-500 leading-relaxed"><?= esc($p['solution']) ?></p>
                        </div>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100">
                        <strong class="text-navy text-sm block mb-1 uppercase text-[10px] tracking-widest font-bold opacity-60">Result:</strong>
                        <p class="text-teal-accent font-semibold text-sm"><?= esc($p['result']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>
