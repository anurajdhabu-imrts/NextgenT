<?php
if (!function_exists('getIconSvgAdmin')) {
    function getIconSvgAdmin($name) {
        $icons = [
            'users' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
            'marketing' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z',
            'management' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
            'operations' => 'M13 10V3L4 14h7v7l9-11h-7z',
            'architecture' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
            'check' => 'M5 13l4 4L19 7',
            'shield' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
            'heart' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
            'zap' => 'M13 10V3L4 14h7v7l9-11h-7z',
            'star' => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.175 0l-3.976 2.888c-.783.57-1.838-.197-1.539-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z'
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
    <title>Hospital Sector Manager | NextgenT Admin</title>
    <link rel="icon" href="<?= base_url('FAVICON.png') ?>" type="image/png">
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
        <?= view('admin/layout/header', ['title' => 'Hospital Sector Management']) ?>

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
                <button onclick="showTab('challenges')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="challenges">Challenges</button>
                <button onclick="showTab('support')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="support">Support Pillars</button>
                <button onclick="showTab('solutions')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="solutions">Targeted Solutions</button>
            </div>

            <!-- General Sections Tab -->
            <div id="tab-general" class="tab-content active space-y-8">
                <!-- Hero Section -->
                <?php $sections = ['hero' => 'Hero Section', 'complexity' => 'Complexity Section', 'support_header' => 'Support Header', 'solutions_header' => 'Solutions Header']; ?>
                <?php foreach($sections as $key => $title): ?>
                <?php $section = $$key; ?>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                        <h3 class="font-bold text-navy"><?= $title ?></h3>
                        <?php if($key != 'solutions_header'): ?>
                        <span class="text-[10px] bg-teal-50 text-teal-700 px-3 py-1 rounded-full font-bold">✨ Tip: The last word will automatically be teal patterned</span>
                        <?php endif; ?>
                    </div>
                    <form action="<?= base_url('admin/hospital/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="<?= $key ?>">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($section['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <?php if($key == 'hero' || $key == 'complexity'): ?>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Subtitle</label>
                                <input type="text" name="subtitle" value="<?= esc($section['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Section Image</label>
                                <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                                <input type="text" name="image_url" value="<?= esc($section['image']) ?>" placeholder="OR Image URL" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($section['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Section</button>
                        </div>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Challenges Tab -->
            <div id="tab-challenges" class="tab-content space-y-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-navy">Hospital Challenges</h3>
                    <button onclick="openAddChallenge()" class="bg-teal-accent text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add Challenge
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach($challenges as $item): ?>
                        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between">
                            <div>
                                <h4 class="font-bold text-navy mb-2"><?= esc($item['title']) ?></h4>
                                <p class="text-sm text-gray-500 mb-4"><?= esc($item['description']) ?></p>
                            </div>
                            <div class="flex justify-end gap-2 border-t border-gray-50 pt-4">
                                <button onclick='editChallenge(<?= json_encode($item) ?>)' class="text-xs bg-gray-100 text-gray-600 px-3 py-1.5 rounded-lg hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/hospital/challenge/delete/'.$item['id']) ?>')" class="text-xs bg-red-50 text-red-500 px-3 py-1.5 rounded-lg hover:bg-red-500 hover:text-white transition-all">Delete</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Support Pillars Tab -->
            <div id="tab-support" class="tab-content space-y-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-navy">Support Pillars (4M Cards)</h3>
                    <button onclick="openAddSupport()" class="bg-teal-accent text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add Support Card
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach($support_cards as $item): ?>
                        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between">
                            <div class="flex gap-4 mb-4">
                                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-teal-accent shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= getIconSvgAdmin($item['icon_svg']) ?>"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-navy mb-1"><?= esc($item['title']) ?></h4>
                                    <p class="text-sm text-gray-500"><?= esc($item['description']) ?></p>
                                </div>
                            </div>
                            <div class="flex justify-end gap-2 border-t border-gray-50 pt-4">
                                <button onclick='editSupport(<?= json_encode($item) ?>)' class="text-xs bg-gray-100 text-gray-600 px-3 py-1.5 rounded-lg hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/hospital/support/delete/'.$item['id']) ?>')" class="text-xs bg-red-50 text-red-500 px-3 py-1.5 rounded-lg hover:bg-red-500 hover:text-white transition-all">Delete</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Solutions Tab -->
            <div id="tab-solutions" class="tab-content space-y-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-navy">Targeted Hospital Solutions</h3>
                    <button onclick="openAddSolution()" class="bg-teal-accent text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add Solution
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <?php foreach($solutions as $item): ?>
                        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between">
                            <div>
                                <h4 class="font-bold text-navy text-sm mb-2"><?= esc($item['title']) ?></h4>
                                <p class="text-xs text-gray-500 mb-4"><?= esc($item['description']) ?></p>
                            </div>
                            <div class="flex justify-end gap-2 border-t border-gray-50 pt-4">
                                <button onclick='editSolution(<?= json_encode($item) ?>)' class="text-[10px] bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/hospital/solution/delete/'.$item['id']) ?>')" class="text-[10px] bg-red-50 text-red-500 px-2.5 py-1 rounded-md hover:bg-red-500 hover:text-white transition-all">Del</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </main>
    </div>

    <!-- Modals -->
    <!-- Challenge Modal -->
    <div id="challenge-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="challenge-modal-title">Add Challenge</h3>
                <button onclick="closeModal('challenge-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="challenge-form" action="" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="challenge-id">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                    <input type="text" name="title" id="challenge-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="challenge-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="challenge-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Challenge</button>
            </form>
        </div>
    </div>

    <!-- Support Modal -->
    <div id="support-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="support-modal-title">Add Support Pillar</h3>
                <button onclick="closeModal('support-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="support-form" action="" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="support-id">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                    <input type="text" name="title" id="support-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="support-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Icon</label>
                        <select name="icon_svg" id="support-icon" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-white">
                            <option value="architecture">Architecture / Building</option>
                            <option value="users">People / Manpower</option>
                            <option value="marketing">Marketing / Bullhorn</option>
                            <option value="management">Management / Shield</option>
                            <option value="operations">Operations / Gear</option>
                            <option value="heart">Heart / Healthcare</option>
                            <option value="zap">Fast / Performance</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                        <input type="number" name="sort_order" id="support-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Support Card</button>
            </form>
        </div>
    </div>

    <!-- Solution Modal -->
    <div id="solution-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="solution-modal-title">Add Solution</h3>
                <button onclick="closeModal('solution-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="solution-form" action="" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="solution-id">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                    <input type="text" name="title" id="solution-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="solution-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="solution-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Solution</button>
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

        // Challenges
        function openAddChallenge() {
            document.getElementById('challenge-modal-title').innerText = 'Add Challenge';
            document.getElementById('challenge-form').action = '<?= base_url('admin/hospital/challenge/add') ?>';
            document.getElementById('challenge-id').value = '';
            document.getElementById('challenge-title').value = '';
            document.getElementById('challenge-description').value = '';
            document.getElementById('challenge-sort').value = '0';
            openModal('challenge-modal');
        }
        function editChallenge(data) {
            document.getElementById('challenge-modal-title').innerText = 'Edit Challenge';
            document.getElementById('challenge-form').action = '<?= base_url('admin/hospital/challenge/edit') ?>';
            document.getElementById('challenge-id').value = data.id;
            document.getElementById('challenge-title').value = data.title;
            document.getElementById('challenge-description').value = data.description;
            document.getElementById('challenge-sort').value = data.sort_order;
            openModal('challenge-modal');
        }

        // Support
        function openAddSupport() {
            document.getElementById('support-modal-title').innerText = 'Add Support Pillar';
            document.getElementById('support-form').action = '<?= base_url('admin/hospital/support/add') ?>';
            document.getElementById('support-id').value = '';
            document.getElementById('support-title').value = '';
            document.getElementById('support-description').value = '';
            document.getElementById('support-icon').value = 'architecture';
            document.getElementById('support-sort').value = '0';
            openModal('support-modal');
        }
        function editSupport(data) {
            document.getElementById('support-modal-title').innerText = 'Edit Support Pillar';
            document.getElementById('support-form').action = '<?= base_url('admin/hospital/support/edit') ?>';
            document.getElementById('support-id').value = data.id;
            document.getElementById('support-title').value = data.title;
            document.getElementById('support-description').value = data.description;
            document.getElementById('support-icon').value = data.icon_svg;
            document.getElementById('support-sort').value = data.sort_order;
            openModal('support-modal');
        }

        // Solutions
        function openAddSolution() {
            document.getElementById('solution-modal-title').innerText = 'Add Solution';
            document.getElementById('solution-form').action = '<?= base_url('admin/hospital/solution/add') ?>';
            document.getElementById('solution-id').value = '';
            document.getElementById('solution-title').value = '';
            document.getElementById('solution-description').value = '';
            document.getElementById('solution-sort').value = '0';
            openModal('solution-modal');
        }
        function editSolution(data) {
            document.getElementById('solution-modal-title').innerText = 'Edit Solution';
            document.getElementById('solution-form').action = '<?= base_url('admin/hospital/solution/edit') ?>';
            document.getElementById('solution-id').value = data.id;
            document.getElementById('solution-title').value = data.title;
            document.getElementById('solution-description').value = data.description;
            document.getElementById('solution-sort').value = data.sort_order;
            openModal('solution-modal');
        }

        function confirmDelete(url) {
            document.getElementById('delete-confirm-btn').href = url;
            openModal('delete-modal');
        }

        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) closeModal(event.target.id);
        }
    </script>
</body>
</html>
