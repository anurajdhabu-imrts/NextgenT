<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Manager | NextgenT Admin</title>
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
        <?= view('admin/layout/header', ['title' => 'Services Page Management']) ?>

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
            <div class="flex gap-2 mb-8 bg-white p-2 rounded-2xl shadow-sm border border-gray-100 w-fit">
                <button onclick="showTab('general')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all active bg-navy text-white" data-tab="general">Page Sections</button>
                <button onclick="showTab('services')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all text-gray-500" data-tab="services">Manage Services</button>
            </div>

            <!-- Page Sections Tab -->
            <div id="tab-general" class="tab-content active space-y-8">
                
                <!-- Hero Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                        <h3 class="font-bold text-navy text-sm">Hero Section</h3>
                        <span class="text-[10px] font-bold text-teal-accent uppercase tracking-wider">Services Page Header</span>
                    </div>
                    <form action="<?= base_url('admin/services/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="hero">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Title</label>
                                <input type="text" name="title" value="<?= esc($hero['title']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm font-medium">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Upload/Update Banner</label>
                                <input type="file" name="image_file" class="w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-bold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 mb-2">
                                <input type="text" name="image_url" value="<?= esc($hero['image']) ?>" placeholder="OR Image URL" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-[10px]">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Badge Text</label>
                                <input type="text" name="subtitle" value="<?= esc($hero['subtitle']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Description</label>
                            <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($hero['description']) ?></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-teal-accent text-white px-8 py-3 rounded-xl font-bold text-xs hover:bg-teal-accent-dark transition-all">Update Hero</button>
                        </div>
                    </form>
                </div>

                <!-- Headers -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Core Header -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                            <h3 class="font-bold text-navy text-sm font-bold">Capabilities Section Header</h3>
                        </div>
                        <form action="<?= base_url('admin/services/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="core_header">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Badge</label>
                                <input type="text" name="subtitle" value="<?= esc($core_header['subtitle']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Title</label>
                                <input type="text" name="title" value="<?= esc($core_header['title']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Description</label>
                                <textarea name="description" rows="2" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs resize-none"><?= esc($core_header['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-[10px] uppercase hover:bg-teal-accent-dark transition-all">Update Header</button>
                            </div>
                        </form>
                    </div>

                    <!-- Hospital Header -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30">
                            <h3 class="font-bold text-navy text-sm font-bold">Hospital Sector Section Header</h3>
                        </div>
                        <form action="<?= base_url('admin/services/update-section') ?>" method="POST" class="p-6 space-y-4">
                            <input type="hidden" name="section_key" value="hospital_header">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Badge</label>
                                <input type="text" name="subtitle" value="<?= esc($hospital_header['subtitle']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Title</label>
                                <input type="text" name="title" value="<?= esc($hospital_header['title']) ?>" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Description</label>
                                <textarea name="description" rows="2" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-xs resize-none"><?= esc($hospital_header['description']) ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-teal-accent text-white px-6 py-2 rounded-xl font-bold text-[10px] uppercase hover:bg-teal-accent-dark transition-all">Update Header</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Services List Tab -->
            <div id="tab-services" class="tab-content space-y-6">
                <div class="flex justify-between items-center bg-white p-4 rounded-2xl shadow-sm border border-gray-100">
                    <div>
                        <h3 class="font-bold text-navy">Service Items</h3>
                        <p class="text-[10px] text-gray-500 font-medium">Manage individual services.</p>
                    </div>
                    <button onclick="toggleModal('service-modal')" class="bg-navy text-white px-3 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 hover:bg-navy-light transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add New Service
                    </button>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <?php foreach($services as $s): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-6 group hover:border-teal-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 rounded-2xl bg-teal-accent/5 flex items-center justify-center text-teal-accent shrink-0 group-hover:bg-teal-accent group-hover:text-white transition-all duration-300">
                                <!-- Temporary Simple Icon Rendering based on value -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <?php 
                                        $iconMap = [
                                            'location-marker' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                                            'office-building' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                                            'user-group' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                                            'shield-check' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                                            'trending-up' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                                            'speakerphone' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z',
                                            'academic-cap' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.227 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                                            'clipboard-list' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                                            'lightning-bolt' => 'M13 10V3L4 14h7v7l9-11h-7z'
                                        ];
                                        echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="' . ($iconMap[$s['icon']] ?? $s['icon']) . '"/>';
                                    ?>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-bold text-navy text-base"><?= esc($s['title']) ?></h4>
                                    <div class="flex items-center gap-2">
                                        <button onclick='editService(<?= json_encode($s) ?>)' class="px-4 py-1.5 bg-gray-50 text-gray-500 rounded-lg text-[10px] font-bold hover:bg-navy hover:text-white transition-all uppercase tracking-widest leading-loose">Edit</button>
                                        <button onclick="confirmDelete('<?= base_url('admin/services/delete/'.$s['id']) ?>')" class="w-8 h-8 bg-red-50 text-red-500 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-gray-50/50 px-4 py-3 rounded-xl border border-gray-100 flex flex-col h-full">
                                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">General Context</p>
                                        <p class="text-xs text-slate-600 leading-relaxed flex-1"><?= esc($s['description']) ?></p>
                                    </div>
                                    <div class="bg-teal-50/50 px-4 py-3 rounded-xl border border-teal-100 flex flex-col h-full">
                                        <p class="text-[9px] font-bold text-teal-600 uppercase tracking-widest mb-2">Hospital Context</p>
                                        <p class="text-xs text-teal-900/70 leading-relaxed font-medium flex-1"><?= esc($s['hospital_description']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </main>
    </div>

    <!-- Modals -->
    <div id="service-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col scale-100 transition-all">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center bg-gray-50/20 shrink-0">
                <h3 class="font-bold text-navy" id="service-modal-title">Add New Service</h3>
                <button onclick="toggleModal('service-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="service-form" action="<?= base_url('admin/services/add') ?>" method="POST" class="p-6 space-y-6 overflow-y-auto">
                <input type="hidden" name="id" id="service-id">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Service Title</label>
                        <input type="text" name="title" id="service-title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-gray-50/30">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Icon Selector</label>
                        <select name="icon" id="service-icon" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-white appearance-none cursor-pointer">
                            <option value="location-marker">Location Pin</option>
                            <option value="office-building">Building / Infrastructure</option>
                            <option value="user-group">Teams / Manpower</option>
                            <option value="shield-check">Insurance / Shield</option>
                            <option value="trending-up">Revenue / Growth</option>
                            <option value="speakerphone">Branding / Marketing</option>
                            <option value="academic-cap">Training / Academy</option>
                            <option value="clipboard-list">Operations / List</option>
                            <option value="lightning-bolt">Flash / Execution</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">General Description (Used in Capabilities section)</label>
                        <textarea name="description" id="service-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none bg-gray-50/30"></textarea>
                    </div>
                    <div class="p-5 bg-teal-50/50 rounded-2xl border border-teal-100">
                        <label class="block text-[10px] font-bold text-teal-600 uppercase mb-2">Hospital-Specific Description (Used in Hospital Sector section)</label>
                        <textarea name="hospital_description" id="service-hospital-description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-teal-100 focus:border-teal-accent outline-none text-sm resize-none bg-white"></textarea>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-32">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                        <input type="number" name="sort_order" id="service-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                    </div>
                    <div class="flex-1 pt-6 text-[10px] text-gray-400 italic">
                        * Higher numbers appear later in the list.
                    </div>
                </div>

                <button type="submit" class="w-full bg-navy text-white py-4 rounded-2xl font-bold text-sm hover:bg-navy-dark transition-all shadow-xl shadow-navy/20">Save Service Configuration</button>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation -->
    <div id="delete-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-[70] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-sm rounded-2xl shadow-2xl overflow-hidden text-center p-8">
            <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center text-red-500 mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <h3 class="text-xl font-bold text-navy mb-2">Are you sure?</h3>
            <p class="text-gray-500 text-sm mb-8">This will permanently remove this service. This action cannot be undone.</p>
            <div class="flex gap-4">
                <button onclick="toggleModal('delete-modal')" class="flex-1 bg-gray-50 text-gray-500 py-3 rounded-xl font-bold hover:bg-gray-100 transition-all">Keep it</button>
                <a id="delete-confirm-btn" href="#" class="flex-1 bg-red-500 text-white py-3 rounded-xl font-bold hover:bg-red-600 transition-all shadow-lg shadow-red-200 flex items-center justify-center">Delete</a>
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

        function editService(data) {
            document.getElementById('service-modal-title').innerText = 'Edit Service Item';
            document.getElementById('service-form').action = '<?= base_url('admin/services/edit') ?>';
            document.getElementById('service-id').value = data.id;
            document.getElementById('service-title').value = data.title;
            document.getElementById('service-icon').value = data.icon;
            document.getElementById('service-description').value = data.description;
            document.getElementById('service-hospital-description').value = data.hospital_description;
            document.getElementById('service-sort').value = data.sort_order;
            toggleModal('service-modal');
        }

        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) {
                toggleModal(event.target.id);
            }
        }
    </script>
</body>
</html>
