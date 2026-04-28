<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Manager | NextgenT Admin</title>
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
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        /* Also hide main scrollbar if desired for cleaner look */
        ::-webkit-scrollbar { width: 0px; background: transparent; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => 'Home Page Management']) ?>

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
            <div class="flex flex-wrap gap-2 mb-8 bg-white p-2 rounded-2xl shadow-sm border border-gray-100">
                <button onclick="showTab('hero')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all active bg-navy text-white" data-tab="hero">Hero & Sections</button>
                <button onclick="showTab('services')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all text-gray-500" data-tab="services">Services</button>
                <button onclick="showTab('stats')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all text-gray-500 " data-tab="stats">Statistics</button>
                <button onclick="showTab('testimonials')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all text-gray-500 " data-tab="testimonials">Testimonials</button>
            </div>

            <!-- Hero & Sections Tab -->
            <div id="tab-hero" class="tab-content active space-y-8">
                <!-- Hero Section Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Hero Section Content</h3>
                    </div>
                    <form action="<?= base_url('admin/update-section') ?>" method="POST" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="hero">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Subtitle / Tagline</label>
                                <input type="text" name="subtitle" value="<?= esc($hero['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Main Title</label>
                                <input type="text" name="title" value="<?= esc($hero['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
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

                <!-- 4M Framework Header -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Framework Section Header</h3>
                    </div>
                    <form action="<?= base_url('admin/update-section') ?>" method="POST" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="framework">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Tagline</label>
                                <input type="text" name="subtitle" value="<?= esc($framework['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($framework['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Header</button>
                        </div>
                    </form>
                </div>

                <!-- 4M Framework Pieces -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- m1: Manpower -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                            <h3 class="font-bold text-navy text-sm">Framework: Manpower</h3>
                            <span class="text-[10px] font-bold text-teal-accent bg-teal-50 px-2 py-1 rounded tracking-widest uppercase">M1</span>
                        </div>
                        <form action="<?= base_url('admin/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="m1">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($m1['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                                <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($m1['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update M1</button>
                            </div>
                        </form>
                    </div>

                    <!-- m2: Marketing -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                            <h3 class="font-bold text-navy text-sm">Framework: Marketing</h3>
                            <span class="text-[10px] font-bold text-teal-accent bg-teal-50 px-2 py-1 rounded tracking-widest uppercase">M2</span>
                        </div>
                        <form action="<?= base_url('admin/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="m2">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($m2['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                                <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($m2['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update M2</button>
                            </div>
                        </form>
                    </div>

                    <!-- m3: Management -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                            <h3 class="font-bold text-navy text-sm">Framework: Management</h3>
                            <span class="text-[10px] font-bold text-teal-accent bg-teal-50 px-2 py-1 rounded tracking-widest uppercase">M3</span>
                        </div>
                        <form action="<?= base_url('admin/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="m3">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($m3['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                                <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($m3['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update M3</button>
                            </div>
                        </form>
                    </div>

                    <!-- m4: Operations -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                            <h3 class="font-bold text-navy text-sm">Framework: Operations</h3>
                            <span class="text-[10px] font-bold text-teal-accent bg-teal-50 px-2 py-1 rounded tracking-widest uppercase">M4</span>
                        </div>
                        <form action="<?= base_url('admin/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="m4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($m4['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                                <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($m4['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update M4</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Services Tab -->
            <div id="tab-services" class="tab-content space-y-8">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-navy text-lg">Manage Services</h3>
                    <button onclick="toggleModal('service-modal')" class="bg-navy text-white px-3 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add New Service
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach($services as $service): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative group">
                            <div class="mb-4 text-teal-accent">
                                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center">
                                    <?= $service['icon'] ?>
                                </div>
                            </div>
                            <h4 class="font-bold text-navy mb-2"><?= esc($service['title']) ?></h4>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-3"><?= esc($service['description']) ?></p>
                            <div class="flex items-center gap-2">
                                <button onclick='editService(<?= json_encode($service) ?>)' class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-xs font-bold hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/services/delete/'.$service['id']) ?>')" class="w-10 h-10 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Stats Tab -->
            <div id="tab-stats" class="tab-content space-y-8">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-navy text-lg">Manage Statistics</h3>
                    <button onclick="toggleModal('stat-modal')" class="bg-navy text-white px-5 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add New Stat
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach($statistics as $stat): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                            <div class="flex justify-center mb-3 text-teal-accent">
                                <?= $stat['icon'] ?>
                            </div>
                            <h3 class="text-3xl font-bold text-navy"><?= esc($stat['number']) ?></h3>
                            <p class="text-sm text-gray-400 font-medium"><?= esc($stat['label']) ?></p>
                            <div class="flex items-center gap-2 mt-4">
                                <button onclick='editStat(<?= json_encode($stat) ?>)' class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-xs font-bold hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/stats/delete/'.$stat['id']) ?>')" class="w-8 h-8 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Testimonials Tab -->
            <div id="tab-testimonials" class="tab-content space-y-8">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-navy text-lg">Manage Testimonials</h3>
                    <button onclick="toggleModal('testimonial-modal')" class="bg-navy text-white px-5 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add Testimonial
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach($testimonials as $t): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 rounded-full bg-teal-accent text-white flex items-center justify-center font-bold text-xs uppercase"><?= esc($t['initials']) ?></div>
                                    <div>
                                        <h4 class="font-bold text-navy text-sm"><?= esc($t['name']) ?></h4>
                                        <p class="text-[11px] text-gray-400 font-medium uppercase tracking-wider"><?= esc($t['role']) ?></p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 italic leading-relaxed mb-6">"<?= esc($t['quote']) ?>"</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <button onclick='editTestimonial(<?= json_encode($t) ?>)' class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-xs font-bold hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/testimonials/delete/'.$t['id']) ?>')" class="w-10 h-10 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </main>

        <footer class="p-6 text-center border-t border-gray-100 bg-white">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> NextgenT Enterprises. Admin Portal.</p>
        </footer>
    </div>

    <!-- Modals -->
    <!-- Service Modal -->
    <div id="service-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="service-modal-title">Add New Service</h3>
                <button onclick="toggleModal('service-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="service-form" action="<?= base_url('admin/services/add') ?>" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="service-id">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                    <input type="text" name="title" id="service-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Icon</label>
                    <div class="flex items-start gap-4">
                        <div id="service-icon-preview" class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-teal-accent border border-teal-100">
                            <!-- Preview SVG will go here -->
                        </div>
                        <div class="flex-1">
                            <button type="button" onclick="openIconPicker('service')" class="w-full bg-gray-50 border border-gray-200 text-gray-600 py-3 rounded-xl text-sm font-semibold hover:bg-gray-100 transition-all flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                Choose Icon
                            </button>
                            <input type="hidden" name="icon" id="service-icon" required>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="service-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                        <input type="number" name="sort_order" id="service-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all shadow-lg shadow-navy/20">Save Service</button>
            </form>
        </div>
    </div>

    <!-- Stat Modal -->
    <div id="stat-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="stat-modal-title">Add Statistic</h3>
                <button onclick="toggleModal('stat-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="stat-form" action="<?= base_url('admin/stats/add') ?>" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="stat-id">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Number (Value)</label>
                        <input type="text" name="number" id="stat-number" required placeholder="e.g., 250" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Label</label>
                        <input type="text" name="label" id="stat-label" required placeholder="e.g., Projects" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Icon</label>
                    <div class="flex items-start gap-4">
                        <div id="stat-icon-preview" class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-teal-accent border border-teal-100">
                            <!-- Preview SVG will go here -->
                        </div>
                        <div class="flex-1">
                            <button type="button" onclick="openIconPicker('stat')" class="w-full bg-gray-50 border border-gray-200 text-gray-600 py-3 rounded-xl text-sm font-semibold hover:bg-gray-100 transition-all flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                Choose Icon
                            </button>
                            <input type="hidden" name="icon" id="stat-icon" required>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="stat-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Statistic</button>
            </form>
        </div>
    </div>

    <!-- Testimonial Modal -->
    <div id="testimonial-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy" id="testimonial-modal-title">Add Testimonial</h3>
                <button onclick="toggleModal('testimonial-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="testimonial-form" action="<?= base_url('admin/testimonials/add') ?>" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="testimonial-id">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Name</label>
                        <input type="text" name="name" id="testimonial-name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Initials</label>
                        <input type="text" name="initials" id="testimonial-initials" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Role / Designation</label>
                    <input type="text" name="role" id="testimonial-role" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Quote</label>
                    <textarea name="quote" id="testimonial-quote" rows="4" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Testimonial</button>
            </form>
        </div>
    </div>

    <!-- Icon Picker Modal -->
    <div id="icon-picker-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-[60] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-navy">Select an Icon</h3>
                <button onclick="toggleModal('icon-picker-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="p-6">
                <div id="icon-grid" class="grid grid-cols-4 sm:grid-cols-6 gap-4 max-h-[400px] overflow-y-auto pr-2 scrollbar-hide">
                    <!-- Icons will be generated by JS -->
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-[70] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-sm rounded-2xl shadow-2xl overflow-hidden text-center p-8">
            <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center text-red-500 mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <h3 class="text-xl font-bold text-navy mb-2">Confirm Delete</h3>
            <p class="text-gray-500 text-sm mb-8">Are you sure you want to delete this item? This action cannot be undone.</p>
            <div class="flex gap-4">
                <button onclick="toggleModal('delete-modal')" class="flex-1 bg-gray-50 text-gray-500 py-3 rounded-xl font-bold hover:bg-gray-100 transition-all">Cancel</button>
                <a id="delete-confirm-btn" href="#" class="flex-1 bg-red-500 text-white py-3 rounded-xl font-bold hover:bg-red-600 transition-all shadow-lg shadow-red-200">Delete</a>
            </div>
        </div>
    </div>
    
    <script>
        let deleteUrl = '';
        function confirmDelete(url) {
            deleteUrl = url;
            document.getElementById('delete-confirm-btn').href = url;
            toggleModal('delete-modal');
        }

        const ICONS = [
            { name: 'User Group', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a.75.75 0 000 1.5H5.625a.75.75 0 01-.75-.75V17.25a3.375 3.375 0 013.375-3.375h5.25a3.375 3.375 0 013.375 3.375v1.47zM3.75 6.75a3 3 0 116 0 3 3 0 01-6 0zM15.75 9a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM17.25 12h.008v.008h-.008V12z" /></svg>' },
            { name: 'Academic Cap', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147L12 14.654l7.74-4.507a.75.75 0 000-1.294L12 4.346 4.26 8.853a.75.75 0 000 1.294zm0 4.095l7.35 4.287a.75.75 0 00.75 0l7.35-4.287a.75.75 0 011.096.647v3.534a.75.75 0 01-.442.688l-7.65 3.53a.75.75 0 01-.611 0l-7.65-3.53a.75.75 0 01-.442-.688v-3.534a.75.75 0 011.096-.647z" /></svg>' },
            { name: 'Megaphone', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.062.506.123.76.184l.01.003 2.31.516a.75.75 0 00.902-.95l-1.01-3.111a.75.75 0 01.11-.659 7.052 7.052 0 001.31-2.973 5.03 5.03 0 00-1.53-4.51L10.34 6.66M10.34 15.84V6.66m-1.044 13.852l-2.22-3.133m3.264 3.133l-2.22-3.133" /></svg>' },
            { name: 'Shield', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6.11a.75.75 0 00-.597.933 11.666 11.666 0 009.002 9.002.75.75 0 00.933-.597c1.47-5.592.518-10.315-1.187-12.733a.75.75 0 00-.598-.44z" /></svg>' },
            { name: 'Bolt', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" /></svg>' },
            { name: 'Chart', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75c0 .621-.504 1.125-1.125 1.125h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>' },
            { name: 'Briefcase', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 .414-.336.75-.75.75H4.5a.75.75 0 01-.75-.75V14.15c.688.06 1.386.09 2.09.09h12.16c.704 0 1.402-.03 2.09-.09zM20.25 14.15l.394-2.368a1.5 1.5 0 00-1.478-1.747h-14.332a.5 0 00-.493.582l.394 2.368c.688-.06 1.386-.09 2.09-.09h12.16c.704 0 1.402-.03 2.09-.09zM8.25 10.125V6.108c0-1.135.845-2.098 1.976-2.192.773-.065 1.554-.09 2.333-.076a2.22 2.22 0 012.191 2.268v4.017" /></svg>' },
            { name: 'Heart', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg>' },
            { name: 'Beaker', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v1.242c0 .289.106.56.297.77l3.996 4.396a1.125 1.125 0 01.298.77v3.363a1.125 1.125 0 01-.298.77l-3.996 4.396a1.125 1.125 0 01-.297.77V21h4.5v-1.125c0-.289.106-.56.297-.77l3.996-4.396a1.125 1.125 0 01.298-.77V10.28c0-.289-.106-.56-.298-.77l-3.996-4.396a1.125 1.125 0 01-.297-.77V3.104h-4.5z" /></svg>' },
            { name: 'Hospital', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" /></svg>' },
            { name: 'Clock', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>' },
            { name: 'Location', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>' },
            { name: 'Check', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>' },
            { name: 'Puzzle', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0 7.5 7.5 0 00-15 0zM12 4.5v15m7.5-7.5h-15" /></svg>' },
            { name: 'Presentation', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" /></svg>' },
            { name: 'Building', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12a3 3 0 013 3v12a3 3 0 01-3 3H3" /></svg>' },
            { name: 'Calculator', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-3-2.25V18M9.75 15.75V18m3-12a2.31 2.31 0 012.31 2.31v1.14a2.31 2.31 0 01-2.31 2.31H9.75a2.31 2.31 0 01-2.31-2.31V8.06c0-1.276 1.034-2.31 2.31-2.31h3zm-3.75 9h.008v.008H9V14.25zm.75 0h.008v.008H9.75V14.25zm.75 0h.008v.008H10.5V14.25zm.75 0h.008v.008H11.25V14.25zm.75 0h.008v.008H12V14.25zm.75 0h.008v.008H12.75V14.25zm.75 0h.008v.008H13.5V14.25zm.75 0h.008v.008H14.25V14.25zm.75 0h.008v.008H15V14.25z" /></svg>' },
            { name: 'Document', svg: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>' }
        ];

        let activeIconTarget = '';

        function openIconPicker(target) {
            activeIconTarget = target;
            const grid = document.getElementById('icon-grid');
            grid.innerHTML = '';
            
            ICONS.forEach((icon, index) => {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'flex flex-col items-center justify-center p-4 border border-gray-100 rounded-xl hover:bg-teal-50 hover:border-teal-200 transition-all group';
                btn.onclick = () => selectIcon(icon.svg);
                btn.innerHTML = `
                    <div class="text-gray-400 group-hover:text-teal-accent mb-2">${icon.svg}</div>
                    <span class="text-[10px] font-bold text-gray-400 group-hover:text-teal-accent uppercase tracking-wider">${icon.name}</span>
                `;
                grid.appendChild(btn);
            });
            
            toggleModal('icon-picker-modal');
        }

        function selectIcon(svg) {
            document.getElementById(activeIconTarget + '-icon').value = svg;
            document.getElementById(activeIconTarget + '-icon-preview').innerHTML = svg;
            toggleModal('icon-picker-modal');
        }

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

        function toggleModal(id) {
            const modal = document.getElementById(id);
            modal.classList.toggle('hidden');
        }

        function editService(data) {
            document.getElementById('service-modal-title').innerText = 'Edit Service';
            document.getElementById('service-form').action = '<?= base_url('admin/services/edit') ?>';
            document.getElementById('service-id').value = data.id;
            document.getElementById('service-title').value = data.title;
            document.getElementById('service-icon').value = data.icon;
            document.getElementById('service-icon-preview').innerHTML = data.icon;
            document.getElementById('service-description').value = data.description;
            document.getElementById('service-sort').value = data.sort_order;
            toggleModal('service-modal');
        }

        function editStat(data) {
            document.getElementById('stat-modal-title').innerText = 'Edit Statistic';
            document.getElementById('stat-form').action = '<?= base_url('admin/stats/edit') ?>';
            document.getElementById('stat-id').value = data.id;
            document.getElementById('stat-number').value = data.number;
            document.getElementById('stat-label').value = data.label;
            document.getElementById('stat-icon').value = data.icon;
            document.getElementById('stat-icon-preview').innerHTML = data.icon;
            document.getElementById('stat-sort').value = data.sort_order;
            toggleModal('stat-modal');
        }

        function editTestimonial(data) {
            document.getElementById('testimonial-modal-title').innerText = 'Edit Testimonial';
            document.getElementById('testimonial-form').action = '<?= base_url('admin/testimonials/edit') ?>';
            document.getElementById('testimonial-id').value = data.id;
            document.getElementById('testimonial-name').value = data.name;
            document.getElementById('testimonial-initials').value = data.initials;
            document.getElementById('testimonial-role').value = data.role;
            document.getElementById('testimonial-quote').value = data.quote;
            toggleModal('testimonial-modal');
        }

        // Initialize previews for new items
        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) {
                toggleModal(event.target.id);
            }
        }

        // Mobile Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const mobileToggle = document.getElementById('mobile-sidebar-toggle');
        const closeSidebar = document.getElementById('sidebar-close');

        function openMenu() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeMenu() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        if(mobileToggle) mobileToggle.addEventListener('click', openMenu);
        if(closeSidebar) closeSidebar.addEventListener('click', closeMenu);
        if(overlay) overlay.addEventListener('click', closeMenu);
    </script>
</body>
</html>
