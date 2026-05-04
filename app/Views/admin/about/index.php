<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page Manager | NextgenT Admin</title>
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
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        ::-webkit-scrollbar { width: 0px; background: transparent; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => 'About Page Management']) ?>

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

            <!-- Tab Navigation (Grid on Mobile, Flex on Desktop) -->
            <div class="grid grid-cols-2 lg:flex lg:flex-nowrap gap-2 mb-8 bg-white p-2 rounded-2xl shadow-sm border border-gray-100">
                <button onclick="showTab('general')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all active bg-navy text-white" data-tab="general">General</button>
                <button onclick="showTab('geographic')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="geographic">Geographic</button>
                <button onclick="showTab('team')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="team">Team</button>
                <button onclick="showTab('advantages')" class="tab-btn w-full lg:w-auto px-4 lg:px-6 py-2.5 rounded-xl text-xs lg:text-sm font-semibold transition-all text-gray-500" data-tab="advantages">Advantages</button>
            </div>

            <!-- General Sections Tab -->
            <div id="tab-general" class="tab-content active space-y-8">
                <!-- Hero Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Hero Section</h3>
                    </div>
                    <form action="<?= base_url('admin/about/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="hero">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <p class="text-[10px] text-teal-accent font-bold mb-2">Tip: Wrap words in [ ] to highlight them in teal. Example: About [NextgenT] Enterprises</p>
                                <input type="text" name="title" value="<?= esc($hero['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Upload Hero Image</label>
                                <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                                <label class="block text-[10px] font-bold text-gray-400 mb-1">OR Image URL</label>
                                <input type="text" name="image_url" value="<?= esc($hero['image']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
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

                <!-- Our Journey Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Our Journey & Purpose</h3>
                    </div>
                    <form action="<?= base_url('admin/about/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="journey">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($journey['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Upload Journey Image</label>
                                <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                                <label class="block text-[10px] font-bold text-gray-400 mb-1">OR Image URL</label>
                                <input type="text" name="image_url" value="<?= esc($journey['image']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description / Story (Para 1 & 2)</label>
                            <textarea name="description" rows="6" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($journey['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Journey</button>
                        </div>
                    </form>
                </div>

                <!-- Mission & Vision -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                            <h3 class="font-bold text-navy">Our Mission</h3>
                        </div>
                        <form action="<?= base_url('admin/about/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="mission">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($mission['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                                <textarea name="description" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($mission['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update Mission</button>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                            <h3 class="font-bold text-navy">Our Vision</h3>
                        </div>
                        <form action="<?= base_url('admin/about/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="vision">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($vision['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                                <textarea name="description" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($vision['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update Vision</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Geographic Tab -->
            <div id="tab-geographic" class="tab-content space-y-8">
                <!-- Header -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Geographic Section Header & Map</h3>
                    </div>
                    <form action="<?= base_url('admin/about/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="geographic">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($geographic_header['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Upload Map Image</label>
                                <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                                <label class="block text-[10px] font-bold text-gray-400 mb-1">OR Image URL</label>
                                <input type="text" name="image_url" value="<?= esc($geographic_header['image']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($geographic_header['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Header</button>
                        </div>
                    </form>
                </div>

                <div class="flex justify-between items-center mt-8">
                    <h3 class="font-bold text-navy text-lg">Geographic Detail Blocks</h3>
                    <button onclick="toggleModal('geo-modal')" class="bg-navy text-white px-5 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add List Item
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php foreach($geographic_items as $item): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center text-teal-accent mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $item['icon'] ?>"/></svg>
                                </div>
                                <h4 class="font-bold text-navy mb-2"><?= esc($item['title']) ?></h4>
                                <p class="text-xs text-gray-500 mb-6"><?= esc($item['description']) ?></p>
                            </div>
                            <div class="flex items-center gap-2">
                                <button onclick='editGeo(<?= json_encode($item) ?>)' class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-xs font-bold hover:bg-navy hover:text-white transition-all">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/about/geographic/delete/'.$item['id']) ?>')" class="w-10 h-10 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Team Tab -->
            <div id="tab-team" class="tab-content space-y-8">
                <!-- Header -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Leadership Section Header</h3>
                    </div>
                    <form action="<?= base_url('admin/about/update-section') ?>" method="POST" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="leadership">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                            <input type="text" name="title" value="<?= esc($leadership_header['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($leadership_header['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Header</button>
                        </div>
                    </form>
                </div>

                <div class="flex justify-between items-center mt-8">
                    <h3 class="font-bold text-navy text-lg">Manage Team Members</h3>
                    <button onclick="toggleModal('team-modal')" class="bg-navy text-white px-5 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add Team Member
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach($team as $member): ?>
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group">
                            <div class="aspect-square bg-gray-100">
                                <img src="<?= esc($member['image']) ?>" alt="<?= esc($member['name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-5">
                                <h4 class="font-bold text-navy"><?= esc($member['name']) ?></h4>
                                <p class="text-teal-accent text-[11px] font-bold uppercase tracking-wider mb-2"><?= esc($member['designation']) ?></p>
                                <p class="text-[11px] text-gray-500 line-clamp-2 mb-4"><?= esc($member['bio']) ?></p>
                                <div class="flex items-center gap-2">
                                    <button onclick='editTeam(<?= json_encode($member) ?>)' class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-[10px] font-bold hover:bg-navy hover:text-white transition-all uppercase tracking-widest">Edit</button>
                                    <button onclick="confirmDelete('<?= base_url('admin/about/team/delete/'.$member['id']) ?>')" class="w-8 h-8 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Advantages Tab -->
            <div id="tab-advantages" class="tab-content space-y-8">
                <!-- Header -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                        <h3 class="font-bold text-navy">Advantage Section Header</h3>
                    </div>
                    <form action="<?= base_url('admin/about/update-section') ?>" method="POST" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="advantage">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                            <input type="text" name="title" value="<?= esc($advantage_header['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($advantage_header['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-teal-accent-dark transition-all">Update Header</button>
                        </div>
                    </form>
                </div>

                <div class="flex justify-between items-center mt-8">
                    <h3 class="font-bold text-navy text-lg">Manage Advantage Cards</h3>
                    <button onclick="toggleModal('adv-modal')" class="bg-navy text-white px-5 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add Advantage Card
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <?php foreach($advantages as $adv): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center relative flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 bg-navy text-white rounded-lg flex items-center justify-center font-bold text-sm mx-auto mb-4"><?= esc($adv['number']) ?></div>
                                <h4 class="font-bold text-navy mb-2"><?= esc($adv['title']) ?></h4>
                                <p class="text-[11px] text-gray-500 mb-6"><?= esc($adv['description']) ?></p>
                            </div>
                            <div class="flex items-center gap-2">
                                <button onclick='editAdv(<?= json_encode($adv) ?>)' class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-[10px] font-bold hover:bg-navy hover:text-white transition-all uppercase tracking-widest">Edit</button>
                                <button onclick="confirmDelete('<?= base_url('admin/about/advantage/delete/'.$adv['id']) ?>')" class="w-8 h-8 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </main>
    </div>

    <!-- Modals -->
    <!-- Geographic Modal -->
    <div id="geo-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center shrink-0">
                <h3 class="font-bold text-navy" id="geo-modal-title">Add Geographic Detail</h3>
                <button onclick="toggleModal('geo-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="geo-form" action="<?= base_url('admin/about/geographic/add') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4 overflow-y-auto scrollbar-hide">
                <input type="hidden" name="id" id="geo-id">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                    <input type="text" name="title" id="geo-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Icon Choice</label>
                    <div class="space-y-4 shadow-sm border border-gray-100 p-4 rounded-xl">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-500 mb-2 uppercase">A. Select from List</label>
                            <select name="icon" id="geo-icon" onchange="toggleCustomIcon(this.value)" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs bg-white">
                                <option value="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z">Location Pin</option>
                                <option value="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">Global World</option>
                                <option value="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">Operational Model</option>
                                <option value="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-7.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">Shield</option>
                                <option value="M13 10V3L4 14h7v7l9-11h-7z">Thunder</option>
                                <option value="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">Team / Users</option>
                                <option value="custom">Other (Custom SVG Path)</option>
                            </select>
                            <input type="text" name="custom_icon" id="geo-custom-icon" placeholder="Enter SVG Path here..." class="hidden mt-2 w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-[10px]">
                        </div>
                        <div class="pt-2 border-t border-gray-50">
                            <label class="block text-[10px] font-bold text-gray-500 mb-2 uppercase">B. OR Upload Image Icon</label>
                            <input type="file" name="icon_file" class="w-full text-[10px] text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-[10px] file:font-bold file:bg-navy/5 file:text-navy hover:file:bg-navy/10 transition-all">
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="geo-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="geo-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Item</button>
            </form>
        </div>
    </div>

    <!-- Team Modal -->
    <div id="team-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center shrink-0">
                <h3 class="font-bold text-navy" id="team-modal-title">Add Team Member</h3>
                <button onclick="toggleModal('team-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="team-form" action="<?= base_url('admin/about/team/add') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4 overflow-y-auto scrollbar-hide">
                <input type="hidden" name="id" id="team-id">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Full Name</label>
                        <input type="text" name="name" id="team-name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Designation</label>
                        <input type="text" name="designation" id="team-designation" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Upload Profile Photo</label>
                    <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                    <label class="block text-[10px] font-bold text-gray-400 mb-1">OR Photo URL</label>
                    <input type="text" name="image_url" id="team-image" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Short Bio</label>
                    <textarea name="bio" id="team-bio" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="team-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Member</button>
            </form>
        </div>
    </div>

    <!-- Advantage Modal -->
    <div id="adv-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center shrink-0">
                <h3 class="font-bold text-navy" id="adv-modal-title">Add Advantage Card</h3>
                <button onclick="toggleModal('adv-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="adv-form" action="<?= base_url('admin/about/advantage/add') ?>" method="POST" class="p-6 space-y-4 overflow-y-auto scrollbar-hide">
                <input type="hidden" name="id" id="adv-id">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Number (Prefix)</label>
                        <input type="text" name="number" id="adv-number" required placeholder="01" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Title</label>
                        <input type="text" name="title" id="adv-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description</label>
                    <textarea name="description" id="adv-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="adv-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-navy text-white py-4 rounded-xl font-bold text-sm hover:bg-navy-light transition-all">Save Advantage</button>
            </form>
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

        function confirmDelete(url) {
            document.getElementById('delete-confirm-btn').href = url;
            toggleModal('delete-modal');
        }

        function editGeo(data) {
            document.getElementById('geo-modal-title').innerText = 'Edit Geographic Detail';
            document.getElementById('geo-form').action = '<?= base_url('admin/about/geographic/edit') ?>';
            document.getElementById('geo-id').value = data.id;
            document.getElementById('geo-title').value = data.title;
            document.getElementById('geo-icon').value = data.icon;
            document.getElementById('geo-description').value = data.description;
            document.getElementById('geo-sort').value = data.sort_order;
            toggleModal('geo-modal');
        }

        function editTeam(data) {
            document.getElementById('team-modal-title').innerText = 'Edit Team Member';
            document.getElementById('team-form').action = '<?= base_url('admin/about/team/edit') ?>';
            document.getElementById('team-id').value = data.id;
            document.getElementById('team-name').value = data.name;
            document.getElementById('team-designation').value = data.designation;
            document.getElementById('team-image').value = data.image;
            document.getElementById('team-bio').value = data.bio;
            document.getElementById('team-sort').value = data.sort_order;
            // Clear file input
            document.querySelector('#team-form input[type="file"]').value = '';
            toggleModal('team-modal');
        }

        function editAdv(data) {
            document.getElementById('adv-modal-title').innerText = 'Edit Advantage Card';
            document.getElementById('adv-form').action = '<?= base_url('admin/about/advantage/edit') ?>';
            document.getElementById('adv-id').value = data.id;
            document.getElementById('adv-title').value = data.title;
            document.getElementById('adv-number').value = data.number;
            document.getElementById('adv-description').value = data.description;
            document.getElementById('adv-sort').value = data.sort_order;
            toggleModal('adv-modal');
        }

        function toggleCustomIcon(val) {
            const customInput = document.getElementById('geo-custom-icon');
            if (val === 'custom') {
                customInput.classList.remove('hidden');
                customInput.name = 'icon';
                document.getElementById('geo-icon').name = 'icon_select_ignore';
            } else {
                customInput.classList.add('hidden');
                customInput.name = 'custom_icon_ignore';
                document.getElementById('geo-icon').name = 'icon';
            }
        }

        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) {
                toggleModal(event.target.id);
            }
        }
    </script>
</body>
</html>
