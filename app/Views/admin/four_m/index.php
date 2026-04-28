<?php
if (!function_exists('getIconSvgAdmin')) {
    function getIconSvgAdmin($name) {
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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4M Framework Manager | NextgenT Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#0F2D52', dark: '#0B213D', light: '#1A4A7A' },
                        'teal-accent': { DEFAULT: '#14B8A6', dark: '#0D9488', light: '#2DD4BF' }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        ::-webkit-scrollbar { width: 0px; background: transparent; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => '4M Framework Management']) ?>

        <main class="p-6 flex-1">
            
            <!-- Toast Notification -->
            <?php if(session()->getFlashdata('success') || session()->getFlashdata('error')): ?>
                <div id="toast" class="fixed top-24 right-6 min-w-[300px] z-[100] transition-all duration-500 transform translate-x-full">
                    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-4 flex items-center gap-4">
                        <?php if(session()->getFlashdata('success')): ?>
                            <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center text-green-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-navy">Success!</p>
                                <p class="text-[11px] text-gray-500 font-medium"><?= session()->getFlashdata('success') ?></p>
                            </div>
                        <?php else: ?>
                            <div class="w-10 h-10 bg-red-50 rounded-xl flex items-center justify-center text-red-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-navy">Error</p>
                                <p class="text-[11px] text-gray-500 font-medium"><?= session()->getFlashdata('error') ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <script>
                    setTimeout(() => {
                        const toast = document.getElementById('toast');
                        toast.classList.remove('translate-x-full');
                        setTimeout(() => {
                            toast.classList.add('translate-x-full');
                        }, 3000);
                    }, 100);
                </script>
            <?php endif; ?>

            <!-- Tab Navigation -->
            <div class="grid grid-cols-2 lg:flex lg:flex-nowrap gap-2 mb-8 bg-white p-2 rounded-2xl shadow-sm border border-gray-100">
                <button onclick="showTab('general')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all active bg-navy text-white" data-tab="general">General Sections</button>
                <button onclick="showTab('pillars')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="pillars">The 4 Pillars</button>
            </div>

            <!-- General Sections Tab -->
            <div id="tab-general" class="tab-content active space-y-8">
                <!-- Hero Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                        <h3 class="font-bold text-navy">Hero Section</h3>
                        <span class="text-[10px] bg-teal-50 text-teal-700 px-3 py-1 rounded-full font-bold">Tip: "4M" will automatically be colored teal</span>
                    </div>
                    <form action="<?= base_url('admin/4m/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="hero">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($hero['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Subtitle</label>
                                <input type="text" name="subtitle" value="<?= esc($hero['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Hero Image</label>
                                <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                                <input type="text" name="image_url" value="<?= esc($hero['image']) ?>" placeholder="OR Image URL" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($hero['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Hero</button>
                        </div>
                    </form>
                </div>

                <!-- Our Architecture Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Our Architecture Header</h3>
                    </div>
                    <form action="<?= base_url('admin/4m/update-section') ?>" method="POST" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="architecture">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($architecture['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Subtitle</label>
                                <input type="text" name="subtitle" value="<?= esc($architecture['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($architecture['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Architecture</button>
                        </div>
                    </form>
                </div>

                <!-- Healthcare Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Healthcare Sector Section</h3>
                    </div>
                    <form action="<?= base_url('admin/4m/update-section') ?>" method="POST" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="healthcare">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($healthcare['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Subtitle</label>
                                <input type="text" name="subtitle" value="<?= esc($healthcare['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($healthcare['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Healthcare</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Pillars Tab -->
            <div id="tab-pillars" class="tab-content space-y-8">
                <?php foreach($pillars as $pillar): ?>
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center text-navy font-bold">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-navy text-white rounded-lg flex items-center justify-center text-xs"><?= $pillar['pillar_no'] ?></div>
                                <span>Pillar <?= $pillar['pillar_no'] ?>: <?= esc($pillar['title']) ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button onclick='editPillar(<?= json_encode($pillar) ?>)' class="text-xs bg-gray-100 px-3 py-1.5 rounded-lg hover:bg-navy hover:text-white transition-all">Edit Pillar Details</button>
                                <button onclick="addHighlight(<?= $pillar['id'] ?>)" class="text-xs bg-teal-accent text-white px-3 py-1.5 rounded-lg hover:bg-teal-accent-dark transition-all">Add Highlight</button>
                            </div>
                        </div>
                        
                        <div class="p-6">
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                 <!-- Pillar Info -->
                                 <div>
                                     <div class="flex items-center gap-2 mb-4">
                                         <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Icon:</span>
                                         <span class="w-8 h-8 flex items-center justify-center bg-gray-50 border border-gray-100 rounded text-teal-accent">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvgAdmin($pillar['icon_svg']) ?>"/></svg>
                                         </span>
                                     </div>
                                     <h4 class="text-[10px] font-bold text-gray-400 uppercase mb-4 tracking-widest">Main Summary</h4>
                                     <p class="text-sm text-gray-600 mb-6"><?= esc($pillar['summary']) ?></p>
                                     <h4 class="text-[10px] font-bold text-gray-400 uppercase mb-4 tracking-widest">Healthcare Focus</h4>
                                     <p class="text-sm text-teal-accent font-semibold"><?= esc($pillar['healthcare_summary']) ?></p>
                                 </div>
                                 
                                 <!-- Highlights List -->
                                 <div>
                                     <h4 class="text-[10px] font-bold text-gray-400 uppercase mb-4 tracking-widest">Highlights (Repeatable Items)</h4>
                                     <div class="space-y-3">
                                         <?php if(empty($pillar['highlights'])): ?>
                                             <p class="text-xs text-gray-400 italic">No highlights added yet.</p>
                                         <?php else: ?>
                                             <?php foreach($pillar['highlights'] as $hl): ?>
                                                 <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl border border-gray-100">
                                                     <div class="flex items-center gap-3">
                                                         <div class="w-10 h-10 shrink-0 bg-white rounded-xl border border-gray-100 flex items-center justify-center text-teal-accent shadow-sm">
                                                             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvgAdmin($hl['icon_svg']) ?>"/></svg>
                                                         </div>
                                                         <span class="text-xs font-bold text-navy"><?= esc($hl['title']) ?></span>
                                                     </div>
                                                     <div class="flex items-center gap-2">
                                                         <button onclick='editHighlight(<?= json_encode($hl) ?>)' class="text-[10px] text-gray-400 hover:text-navy underline">Edit</button>
                                                         <button onclick="confirmDeleteHighlight('<?= base_url('admin/4m/highlight/delete/'.$hl['id']) ?>')" class="text-[10px] text-red-400 hover:text-red-600 underline">Delete</button>
                                                     </div>
                                                 </div>
                                             <?php endforeach; ?>
                                         <?php endif; ?>
                                     </div>
                                 </div>
                             </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </main>
    </div>

    <!-- Modals -->
    <!-- Pillar Modal -->
    <div id="pillar-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy">Edit Pillar Details</h3>
                <button onclick="closeModal('pillar-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form action="<?= base_url('admin/4m/pillar/edit') ?>" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="pillar-id">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                        <input type="text" name="title" id="pillar-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Select Icon</label>
                        <select name="icon_svg" id="pillar-icon" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-white">
                            <option value="users">People / Workforce</option>
                            <option value="marketing">Marketing / Shout</option>
                            <option value="management">Management / Shield</option>
                            <option value="operations">Operations / Gear</option>
                            <option value="world">World / Global</option>
                            <option value="star">Star / Excellence</option>
                            <option value="heart">Heart / Health</option>
                            <option value="dollar">Dollar / Revenue</option>
                            <option value="growth">Growth Arrow</option>
                            <option value="clipboard">Report / Data</option>
                            <option value="box">Cube / System</option>
                            <option value="rocket">Fast / Launch</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Summary (Short)</label>
                    <textarea name="summary" id="pillar-summary" rows="2" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description (Long)</label>
                    <textarea name="description" id="pillar-description" rows="4" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Healthcare Focus Summary</label>
                    <input type="text" name="healthcare_summary" id="pillar-healthcare" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Changes</button>
            </form>
        </div>
    </div>

    <!-- Highlight Modal -->
    <div id="highlight-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="hl-modal-title">Add Highlight</h3>
                <button onclick="closeModal('highlight-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="hl-form" action="<?= base_url('admin/4m/highlight/add') ?>" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="hl-id">
                <input type="hidden" name="pillar_id" id="hl-pillar-id">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                    <input type="text" name="title" id="hl-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="hl-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Select Icon</label>
                        <select name="icon_svg" id="hl-icon" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-white">
                            <option value="check">Checkmark (Default)</option>
                            <option value="check_circle">Circle Check</option>
                            <option value="verified">Verified Badge</option>
                            <option value="list">List / Menu</option>
                            <option value="box">Cube / Module</option>
                            <option value="clipboard">Clipboard / Report</option>
                            <option value="dollar">Dollar / Revenue</option>
                            <option value="palette">Palette / Design</option>
                            <option value="world">World / Global</option>
                            <option value="growth">Growth Arrow</option>
                            <option value="search">Search Eye</option>
                            <option value="book">Book / Education</option>
                            <option value="chart">Chart / Growth</option>
                            <option value="users">People</option>
                            <option value="star">Star</option>
                            <option value="heart">Heart / Health</option>
                            <option value="rocket">Rocket / Launch</option>
                            <option value="zap">Zap / Speed</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                        <input type="number" name="sort_order" id="hl-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Highlight</button>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="delete-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-[70] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-sm rounded-2xl shadow-2xl overflow-hidden text-center p-8">
            <h3 class="text-xl font-bold text-navy mb-2">Confirm Delete</h3>
            <p class="text-gray-500 text-sm mb-8">Are you sure? This cannot be undone.</p>
            <div class="flex gap-4">
                <button onclick="closeModal('delete-modal')" class="flex-1 bg-gray-50 text-gray-500 py-3 rounded-xl font-bold hover:bg-gray-100 transition-all">Cancel</button>
                <a id="delete-confirm-btn" href="#" class="flex-1 bg-red-500 text-white py-3 rounded-xl font-bold hover:bg-red-600 transition-all">Delete</a>
            </div>
        </div>
    </div>

    <script>
        function showTab(tab) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(el => {
                el.classList.remove('bg-navy', 'text-white');
                el.classList.add('text-gray-500');
            });
            document.getElementById('tab-' + tab).classList.add('active');
            const btn = document.querySelector(`[data-tab="${tab}"]`);
            btn.classList.add('bg-navy', 'text-white');
            btn.classList.remove('text-gray-500');
        }

        function closeModal(id) { document.getElementById(id).classList.add('hidden'); }
        function openModal(id) { document.getElementById(id).classList.remove('hidden'); }

        function editPillar(data) {
            document.getElementById('pillar-id').value = data.id;
            document.getElementById('pillar-title').value = data.title;
            document.getElementById('pillar-icon').value = data.icon_svg;
            document.getElementById('pillar-summary').value = data.summary;
            document.getElementById('pillar-description').value = data.description;
            document.getElementById('pillar-healthcare').value = data.healthcare_summary;
            openModal('pillar-modal');
        }

        function addHighlight(pillarId) {
            document.getElementById('hl-modal-title').innerText = 'Add Highlight';
            document.getElementById('hl-form').action = '<?= base_url('admin/4m/highlight/add') ?>';
            document.getElementById('hl-id').value = '';
            document.getElementById('hl-pillar-id').value = pillarId;
            document.getElementById('hl-title').value = '';
            document.getElementById('hl-description').value = '';
            document.getElementById('hl-icon').value = 'check';
            document.getElementById('hl-sort').value = '0';
            openModal('highlight-modal');
        }

        function editHighlight(data) {
            document.getElementById('hl-modal-title').innerText = 'Edit Highlight';
            document.getElementById('hl-form').action = '<?= base_url('admin/4m/highlight/edit') ?>';
            document.getElementById('hl-id').value = data.id;
            document.getElementById('hl-pillar-id').value = data.pillar_id;
            document.getElementById('hl-title').value = data.title;
            document.getElementById('hl-description').value = data.description;
            document.getElementById('hl-icon').value = data.icon_svg;
            document.getElementById('hl-sort').value = data.sort_order;
            openModal('highlight-modal');
        }

        function confirmDeleteHighlight(url) {
            document.getElementById('delete-confirm-btn').href = url;
            openModal('delete-modal');
        }

        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) closeModal(event.target.id);
        }
    </script>
</body>
</html>
