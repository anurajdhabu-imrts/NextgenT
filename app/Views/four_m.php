<?= $this->include('templates/header') ?>

<?php
// Icon Mapper Helper
function getIconSvg($name) {
    $icons = [
        'users' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        'marketing' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z',
        'management' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        'operations' => 'M13 10V3L4 14h7v7l9-11h-7z',
        'search' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
        'book' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
        'chart' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
        'star' => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.175 0l-3.976 2.888c-.783.57-1.838-.197-1.539-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z',
        'heart' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
        'check' => 'M5 13l4 4L19 7',
        'shield' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        'rocket' => 'M15.585 15.585a1.83 1.83 0 01-2.586 0l-4.707-4.707a1.83 1.83 0 010-2.586l4.707-4.707a1.83 1.83 0 012.586 0l4.707 4.707a1.83 1.83 0 010 2.586l-4.707 4.707z',
        'zap' => 'M13 10V3L4 14h7v7l9-11h-7z',
        'list' => 'M4 6h16M4 12h16M4 18h16',
        'box' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
        'clipboard' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
        'check_circle' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
        'dollar' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        'palette' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01',
        'world' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
        'growth' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'
    ];
    return $icons[$name] ?? $icons['check'];
}

function formatTitle($title) {
    return str_replace('4M', '<span class="text-teal-accent">4M</span>', esc($title));
}
?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden bg-navy">
    <div class="absolute inset-0">
        <img src="<?= esc($hero['image']) ?>"
            alt="<?= esc($hero['title']) ?>"
            class="w-full h-[400px] md:h-[420px] object-cover opacity-20" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/85 to-teal-accent/15"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <div class="flex items-center justify-center text-center" data-aos="fade-up">
            <div class="max-w-3xl">
                <span class="inline-flex items-center rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-medium tracking-wide text-white/90 mb-5">
                    <?= esc($hero['subtitle']) ?>
                </span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 leading-tight">
                    <?= formatTitle($hero['title']) ?>
                </h1>
                <p class="text-base md:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto">
                    <?= esc($hero['description']) ?>
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
            <span class="text-teal-accent font-bold tracking-[0.2em] uppercase text-[10px] bg-teal-50 px-3 py-1 rounded-full"><?= esc($architecture['subtitle']) ?></span>
            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-navy leading-tight"><?= formatTitle($architecture['title']) ?></h2>
            <p class="mt-3 text-slate-500 text-sm max-w-xl mx-auto leading-relaxed">
                <?= esc($architecture['description']) ?>
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
                    <?php 
                    $quadrants = [
                        ['class' => 'bg-gradient-to-br from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pr-14 pb-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group', 'bg_icon' => 'bg-navy'],
                        ['class' => 'bg-gradient-to-bl from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pl-14 pb-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group', 'bg_icon' => 'bg-teal-accent'],
                        ['class' => 'bg-gradient-to-tr from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pr-14 pt-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group', 'bg_icon' => 'bg-navy-light'],
                        ['class' => 'bg-gradient-to-tl from-slate-50 to-white rounded-2xl border border-slate-100 p-7 pl-14 pt-14 hover:shadow-lg hover:border-teal-accent/20 transition-all duration-300 group', 'bg_icon' => 'bg-teal-accent-dark']
                    ];
                    foreach($pillars as $index => $pillar): 
                        if ($index > 3) break;
                    ?>
                        <div class="<?= $quadrants[$index]['class'] ?>">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-11 h-11 rounded-xl <?= $quadrants[$index]['bg_icon'] ?> flex items-center justify-center text-white shadow-sm group-hover:scale-105 transition-transform">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvg($pillar['icon_svg']) ?>"/></svg>
                                </div>
                                <div>
                                    <span class="text-[10px] font-bold text-teal-accent tracking-wider">0<?= $pillar['pillar_no'] ?></span>
                                    <h3 class="text-lg font-bold text-navy leading-tight"><?= esc($pillar['title']) ?></h3>
                                </div>
                            </div>
                            <p class="text-sm text-slate-500 leading-relaxed"><?= esc($pillar['summary']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Mobile: Clean Stack -->
        <div class="lg:hidden grid grid-cols-1 sm:grid-cols-2 gap-5" data-aos="fade-up">
            <?php foreach($pillars as $index => $pillar): 
                $bg_icon = ['bg-navy', 'bg-teal-accent', 'bg-navy-light', 'bg-teal-accent-dark'][$index % 4];
            ?>
            <div class="bg-slate-50 rounded-xl border border-slate-100 p-6 flex items-start gap-4">
                <div class="shrink-0 w-11 h-11 rounded-xl <?= $bg_icon ?> flex items-center justify-center text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvg($pillar['icon_svg']) ?>"/></svg>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-teal-accent tracking-wider">0<?= $pillar['pillar_no'] ?></span>
                    <h3 class="text-lg font-bold text-navy"><?= esc($pillar['title']) ?></h3>
                    <p class="text-slate-500 text-xs leading-relaxed mt-1"><?= esc($pillar['summary']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PILLAR DETAIL SECTIONS -->
<?php foreach($pillars as $index => $pillar): 
    $bg_section = ($index % 2 == 0) ? 'bg-slate-50' : 'bg-white';
    $bg_icon = ['bg-navy', 'bg-teal-accent', 'bg-navy-light', 'bg-teal-accent-dark'][$index % 4];
    $text_accent = ['text-navy/10', 'text-teal-accent/10', 'text-navy-light/10', 'text-teal-accent-dark/10'][$index % 4];
    $hl_icon_bg = ($index % 2 == 0) ? 'bg-navy/5' : 'bg-teal-accent/10';
    $hl_icon_text = ($index % 2 == 0) ? 'text-navy' : 'text-teal-accent';
?>
<section class="py-14 <?= $bg_section ?>">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">
            <!-- Left: Number + Title -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl <?= $bg_icon ?> flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvg($pillar['icon_svg']) ?>"/></svg>
                    </div>
                    <span class="text-6xl font-black <?= $text_accent ?> leading-none select-none">0<?= $pillar['pillar_no'] ?></span>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-3"><?= esc($pillar['title']) ?></h2>
                <div class="text-sm text-slate-500 leading-relaxed max-w-md">
                    <?= nl2br(esc($pillar['description'])) ?>
                </div>
            </div>

            <!-- Right: Detail Highlights -->
            <div class="lg:col-span-3 space-y-4" data-aos="fade-left">
                <?php foreach($pillar['highlights'] as $hl): ?>
                <div class="<?= ($bg_section == 'bg-white') ? 'bg-slate-50' : 'bg-white' ?> rounded-xl border border-slate-100 p-5 flex items-start gap-4 hover:shadow-sm transition-shadow">
                    <div class="shrink-0 w-8 h-8 rounded-lg <?= $hl_icon_bg ?> flex items-center justify-center <?= $hl_icon_text ?>">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvg($hl['icon_svg'] ?: 'check') ?>"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-navy mb-0.5"><?= esc($hl['title']) ?></h4>
                        <p class="text-sm text-slate-500 leading-relaxed"><?= esc($hl['description']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>


<!-- ══════════════════════════════════════════════════════════ -->
<!-- Cross-Sector Value Section                               -->
<!-- ══════════════════════════════════════════════════════════ -->
<section class="py-14 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white"><?= formatTitle($healthcare['title']) ?></h2>
            <p class="mt-3 text-slate-300 text-sm max-w-xl mx-auto leading-relaxed">
                <?= esc($healthcare['description']) ?>
            </p>
            <div class="w-16 h-1 bg-teal-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Centered Hospital Card -->
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="100">
            <div class="max-w-lg w-full bg-white/5 border border-white/10 rounded-2xl p-7 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-teal-accent/20 flex items-center justify-center text-teal-accent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvg('heart') ?>"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white"><?= esc($healthcare_card['title']) ?></h3>
                </div>
                <ul class="space-y-3">
                    <?php foreach($pillars as $p): ?>
                    <li class="flex items-start gap-2.5 text-sm text-slate-300">
                        <span class="text-teal-accent mt-0.5">•</span>
                        <span><strong class="text-white"><?= esc($p['title']) ?></strong> — <?= esc($p['healthcare_summary']) ?></span>
                    </li>
                    <?php endforeach; ?>
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

<?= $this->include('templates/footer') ?>
