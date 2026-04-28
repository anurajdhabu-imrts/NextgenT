<?= $this->include('templates/header') ?>

<?php
/**
 * Helper to automatically style the last word of a string with a teal accent.
 */
function style_title($title) {
    $words = explode(' ', $title);
    if (count($words) <= 1) return $title;
    
    // Original design often highlights the last 1 or 2 words depending on length
    // For "Supports Hospitals", we highlight both.
    $lastTwo = implode(' ', array_slice($words, -2));
    if ($lastTwo == 'Supports Hospitals') {
        $main = implode(' ', array_slice($words, 0, -2));
        return $main . ' <span class="text-teal-accent">' . $lastTwo . '</span>';
    }

    $last = array_pop($words);
    $main = implode(' ', $words);
    return $main . ' <span class="text-teal-accent">' . $last . '</span>';
}
?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-navy py-20 lg:py-28">
    <div class="absolute inset-0">
        <img src="<?= esc($hero['image']) ?>"
            alt="Hospital Sector" class="w-full h-full object-cover opacity-20" />
        <div class="absolute inset-0 bg-navy/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/80 to-transparent"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <span data-aos="fade-up" class="inline-block px-4 py-1.5 rounded-full bg-teal-accent/20 border border-teal-accent/30 text-teal-accent text-sm font-bold tracking-widest uppercase mb-6"><?= esc($hero['subtitle']) ?></span>
        <h1 data-aos="fade-up" data-aos-delay="100" class="text-4xl md:text-6xl font-bold mb-6"><?= style_title($hero['title']) ?></h1>
        <p data-aos="fade-up" data-aos-delay="200" class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
            <?= esc($hero['description']) ?>
        </p>
    </div>
</section>

<!-- Sector Challenges & Needs -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2" data-aos="fade-right">
                <div class="inline-block p-2 bg-teal-50 rounded-xl mb-6">
                    <svg class="w-10 h-10 text-teal-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h2 class="text-3xl font-bold text-navy mb-6"><?= style_title($complexity['title']) ?></h2>
                <p class="text-slate-600 text-lg leading-relaxed mb-6">
                    <?= esc($complexity['description']) ?>
                </p>
                <div class="space-y-6">
                    <?php foreach($challenges as $index => $item): ?>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-navy/5 flex items-center justify-center flex-shrink-0">
                            <span class="text-teal-accent font-bold"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></span>
                        </div>
                        <div>
                            <h4 class="text-navy font-bold text-lg mb-1"><?= esc($item['title']) ?></h4>
                            <p class="text-slate-500 text-sm"><?= esc($item['description']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="lg:w-1/2" data-aos="fade-left">
                <div class="relative">
                    <div class="absolute inset-0 bg-teal-accent rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
                    <img src="<?= esc($complexity['image']) ?>" alt="Hospital Management Challenge" class="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NextgenT Support Application -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-navy mb-6"><?= style_title($support_header['title']) ?></h2>
            <p class="text-slate-600 text-lg"><?= esc($support_header['description']) ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php 
            $icons = [
                'architecture' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'users' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'
            ];
            ?>
            <?php foreach($support_cards as $index => $item): ?>
            <div class="bg-white p-10 rounded-[2rem] shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up" <?= $index > 0 ? 'data-aos-delay="100"' : '' ?>>
                <div class="w-14 h-14 rounded-2xl bg-teal-50 flex items-center justify-center mb-6 text-teal-accent group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $icons[$item['icon_svg']] ?? $icons['users'] ?>"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-navy mb-4"><?= esc($item['title']) ?></h3>
                <p class="text-slate-500 leading-relaxed mb-6"><?= esc($item['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Brief Support Areas -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-navy mb-10 text-center" data-aos="fade-up"><?= esc($solutions_header['title']) ?></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php foreach($solutions as $index => $item): ?>
            <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-lg transition-all" data-aos="fade-up" <?= $index > 0 ? 'data-aos-delay="'.($index * 100).'"' : '' ?>>
                <h4 class="text-navy font-bold mb-2"><?= esc($item['title']) ?></h4>
                <p class="text-sm text-slate-500"><?= esc($item['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>
