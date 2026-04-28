<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Manager | NextgenT Admin</title>
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
        
        /* Icon Picker Styles */
        .icon-option {
            cursor: pointer;
            transition: all 0.2s;
        }
        .icon-option:hover {
            background-color: #f3f4f6;
        }
        .icon-option.selected {
            background-color: #14B8A6;
            color: white;
            border-color: #14B8A6;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => 'Projects & Case Studies Management']) ?>

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
                <button onclick="showTab('projects')" class="tab-btn px-6 py-2.5 rounded-xl text-sm font-semibold transition-all text-gray-500" data-tab="projects">Manage Case Studies</button>
            </div>

            <!-- Page Sections Tab -->
            <div id="tab-general" class="tab-content active space-y-8">
                
                <!-- Hero Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                        <h3 class="font-bold text-navy text-sm">Hero Section</h3>
                        <span class="text-[10px] font-bold text-teal-accent uppercase tracking-wider">Projects Page Header</span>
                    </div>
                    <form action="<?= base_url('admin/projects/update-section') ?>" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                        <input type="hidden" name="section_key" value="hero">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Main Title</label>
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
            </div>

            <!-- Case Studies List Tab -->
            <div id="tab-projects" class="tab-content space-y-6">
                <div class="flex justify-between items-center bg-white p-4 rounded-2xl shadow-sm border border-gray-100">
                    <div>
                        <h3 class="font-bold text-navy">Project Lists</h3>
                        <p class="text-[10px] text-gray-500 font-medium">Manage individual project case studies.</p>
                    </div>
                    <button onclick="toggleModal('project-modal')" class="bg-navy text-white px-2 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 hover:bg-navy-light transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add New Project
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach($projects as $p): ?>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col gap-4 group hover:border-teal-accent/30 transition-all duration-300 relative">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-2xl bg-teal-accent/5 flex items-center justify-center text-teal-accent shrink-0 group-hover:bg-teal-accent group-hover:text-white transition-all duration-300">
                                        <svg class="w-6 h-6 icon-preview" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-icon="<?= $p['icon'] ?>">
                                            <!-- Dynamic Icon Injection via JS -->
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-navy text-sm leading-tight"><?= esc($p['title']) ?></h4>
                                        <span class="inline-block mt-1 px-2 py-0.5 bg-blue-50 text-blue-600 rounded text-[9px] font-bold uppercase tracking-wider"><?= esc($p['badge']) ?></span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button onclick='editProject(<?= json_encode($p) ?>)' class="w-8 h-8 bg-gray-50 text-gray-400 flex items-center justify-center rounded-lg hover:bg-navy hover:text-white transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </button>
                                    <button onclick="confirmDelete('<?= base_url('admin/projects/delete/'.$p['id']) ?>')" class="w-8 h-8 bg-red-50 text-red-400 flex items-center justify-center rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">Problem:</p>
                                    <p class="text-xs text-slate-600 leading-relaxed line-clamp-2"><?= esc($p['problem']) ?></p>
                                </div>
                                <div>
                                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">Solution:</p>
                                    <p class="text-xs text-slate-600 leading-relaxed line-clamp-2"><?= esc($p['solution']) ?></p>
                                </div>
                                <div class="pt-2 border-t border-gray-50">
                                    <p class="text-[9px] font-bold text-teal-600 uppercase tracking-widest mb-1">Result:</p>
                                    <p class="text-xs text-teal-700 font-semibold leading-relaxed"><?= esc($p['result']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </main>
    </div>

    <!-- Modals -->
    <div id="project-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col scale-100 transition-all">
            <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center bg-gray-50/20 shrink-0">
                <h3 class="font-bold text-navy" id="project-modal-title">Add New Case Study</h3>
                <button onclick="toggleModal('project-modal')" class="text-gray-400 hover:text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form id="project-form" action="<?= base_url('admin/projects/add') ?>" method="POST" class="p-6 space-y-6 overflow-y-auto">
                <input type="hidden" name="id" id="project-id">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Section 1: Basic Info -->
                    <div class="space-y-4 md:col-span-2">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-1.5 h-4 bg-teal-accent rounded-full"></div>
                            <h4 class="text-[10px] font-bold text-navy uppercase tracking-widest">General Information</h4>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Project Title</label>
                                <input type="text" name="title" id="project-title" required placeholder="e.g. Multi-Specialty Hospital Turnaround" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-gray-50/30">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Badge / Category</label>
                                <input type="text" name="badge" id="project-badge" required placeholder="e.g. Hospital Sector" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-gray-50/30">
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Icon Selection -->
                    <div class="md:col-span-2 space-y-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-1.5 h-4 bg-teal-accent rounded-full"></div>
                            <h4 class="text-[10px] font-bold text-navy uppercase tracking-widest">Icon Selection</h4>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <input type="hidden" name="icon" id="project-icon-value" value="office-building">
                            
                            <div class="icon-btn p-3 border border-gray-100 rounded-xl flex flex-col items-center gap-2 w-20 icon-option" data-icon="office-building">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                <span class="text-[8px] font-bold uppercase tracking-tighter">Building</span>
                            </div>
                            
                            <div class="icon-btn p-3 border border-gray-100 rounded-xl flex flex-col items-center gap-2 w-20 icon-option" data-icon="shield-check">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                <span class="text-[8px] font-bold uppercase tracking-tighter">Accreditation</span>
                            </div>
                            
                            <div class="icon-btn p-3 border border-gray-100 rounded-xl flex flex-col items-center gap-2 w-20 icon-option" data-icon="trending-up">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                <span class="text-[8px] font-bold uppercase tracking-tighter">Revenue</span>
                            </div>
                            
                            <div class="icon-btn p-3 border border-gray-100 rounded-xl flex flex-col items-center gap-2 w-20 icon-option" data-icon="architecture">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                <span class="text-[8px] font-bold uppercase tracking-tighter">Planning</span>
                            </div>

                            <div class="icon-btn p-3 border border-gray-100 rounded-xl flex flex-col items-center gap-2 w-20 icon-option" data-icon="users">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                <span class="text-[8px] font-bold uppercase tracking-tighter">Staffing</span>
                            </div>

                            <div class="icon-btn p-3 border border-gray-100 rounded-xl flex flex-col items-center gap-2 w-20 icon-option" data-icon="chart">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                <span class="text-[8px] font-bold uppercase tracking-tighter">Performance</span>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Case Details -->
                    <div class="md:col-span-2 space-y-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-1.5 h-4 bg-teal-accent rounded-full"></div>
                            <h4 class="text-[10px] font-bold text-navy uppercase tracking-widest">Case Details</h4>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">The Problem</label>
                                <textarea name="problem" id="project-problem" rows="2" required placeholder="Describe the challenge..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none bg-gray-50/30"></textarea>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">The Solution</label>
                                <textarea name="solution" id="project-solution" rows="2" required placeholder="How NextgenT addressed it..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none bg-gray-50/30"></textarea>
                            </div>
                            <div class="p-5 bg-teal-50 border border-teal-100 rounded-2xl">
                                <label class="block text-[10px] font-bold text-teal-600 uppercase mb-2">Key Result / Achievement</label>
                                <input type="text" name="result" id="project-result" required placeholder="e.g. 45% increase in OPD volume" class="w-full px-4 py-3 rounded-xl border border-teal-200 focus:border-teal-accent outline-none text-sm font-semibold text-teal-900 bg-white">
                            </div>
                        </div>
                    </div>

                    

                    <div class="flex items-center gap-4">
                        <div class="w-32">
                            <label class="block text-[10px] font-bold text-gray-400 uppercase mb-2">Sort Order</label>
                            <input type="number" name="sort_order" id="project-sort" value="0" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm bg-gray-50/30">
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full bg-navy text-white py-4 rounded-2xl font-bold text-sm hover:bg-navy-dark transition-all shadow-xl shadow-navy/20">Save Case Study</button>
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
            <p class="text-gray-500 text-sm mb-8">This will permanently remove this case study. This action cannot be undone.</p>
            <div class="flex gap-4">
                <button onclick="toggleModal('delete-modal')" class="flex-1 bg-gray-50 text-gray-500 py-3 rounded-xl font-bold hover:bg-gray-100 transition-all">Keep it</button>
                <a id="delete-confirm-btn" href="#" class="flex-1 bg-red-500 text-white py-3 rounded-xl font-bold hover:bg-red-600 transition-all shadow-lg shadow-red-200 flex items-center justify-center">Delete</a>
            </div>
        </div>
    </div>

    <script>
        const icons = {
            'office-building': 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
            'shield-check': 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
            'trending-up': 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
            'architecture': 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
            'users': 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
            'chart': 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'
        };

        // Render Icons in List
        document.querySelectorAll('.icon-preview').forEach(el => {
            const iconName = el.getAttribute('data-icon');
            if (icons[iconName]) {
                el.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="${icons[iconName]}"/>`;
            }
        });

        // Icon Picker Selection
        document.querySelectorAll('.icon-option').forEach(opt => {
            opt.addEventListener('click', function() {
                document.querySelectorAll('.icon-option').forEach(el => el.classList.remove('selected'));
                this.classList.add('selected');
                document.getElementById('project-icon-value').value = this.getAttribute('data-icon');
            });
        });

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

        function editProject(data) {
            document.getElementById('project-modal-title').innerText = 'Edit Case Study';
            document.getElementById('project-form').action = '<?= base_url('admin/projects/edit') ?>';
            document.getElementById('project-id').value = data.id;
            document.getElementById('project-title').value = data.title;
            document.getElementById('project-badge').value = data.badge;
            document.getElementById('project-problem').value = data.problem;
            document.getElementById('project-solution').value = data.solution;
            document.getElementById('project-result').value = data.result;
            document.getElementById('project-sort').value = data.sort_order;
            
            // Set Icon
            document.getElementById('project-icon-value').value = data.icon;
            document.querySelectorAll('.icon-option').forEach(el => {
                el.classList.remove('selected');
                if (el.getAttribute('data-icon') === data.icon) {
                    el.classList.add('selected');
                }
            });

            toggleModal('project-modal');
        }

        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) {
                toggleModal(event.target.id);
            }
        }

        // Initialize first icon as selected for "Add" mode
        document.querySelector('.icon-option[data-icon="office-building"]').classList.add('selected');
    </script>
</body>
</html>
