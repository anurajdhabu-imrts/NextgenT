<aside id="sidebar"
    class="fixed inset-y-0 left-0 bg-navy w-72 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-30 flex flex-col shadow-2xl">
    <!-- Sidebar Header -->
    <div class="px-6 h-16 flex items-center justify-between border-b border-white/5">
        <a href="<?= base_url('admin/dashboard') ?>" class="text-white font-bold text-xl tracking-tight">
            NextgenT<span class="text-teal-accent">Enterprises</span>
        </a>
        <button id="sidebar-close" class="lg:hidden text-gray-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Sidebar Content -->
    <div class="flex-1 overflow-y-auto py-4 px-4 space-y-6 scrollbar-hide">

        <!-- Menu Group -->
        <div>
            <p class="px-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest mb-2">Core</p>
            <nav class="space-y-1">
                <a href="<?= base_url('admin/dashboard') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/dashboard' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="<?= base_url('admin/settings') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/settings' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Website Settings
                </a>
            </nav>
        </div>

        <!-- content Group -->
        <div>
            <p class="px-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest mb-2">Pages Manager</p>
            <nav class="space-y-1">
                <a href="<?= base_url('admin/pages/home') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/home' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home Page
                </a>
                <a href="<?= base_url('admin/pages/about') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/about' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    About Page
                </a>
                <a href="<?= base_url('admin/pages/services') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/services' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Services
                </a>
                <a href="<?= base_url('admin/pages/4m-framework') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/4m-framework' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                    4M Framework
                </a>
                <a href="<?= base_url('admin/pages/hospital-sector') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/hospital-sector' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Hospital Sector
                </a>
                <a href="<?= base_url('admin/pages/projects') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/projects' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Projects
                </a>
                <a href="<?= base_url('admin/contact') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/contact' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Contact Page
                </a>
                <!-- <a href="<?= base_url('admin/pages/team') ?>" class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/team' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    Team
                </a> -->
                <!-- <a href="<?= base_url('admin/pages/testimonials') ?>" class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/pages/testimonials' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                    Testimonials
                </a> -->
            </nav>
        </div>

        <!-- communication Group -->
        <div>
            <p class="px-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest mb-2">Communication</p>
            <nav class="space-y-1">
                <?php
                $db = \Config\Database::connect();
                $enquiryCount = $db->table('enquiries')->countAllResults();
                ?>
                <a href="<?= base_url('admin/enquiries') ?>"
                    class="flex items-center gap-3 px-4 py-2 rounded-xl text-sm font-medium transition-all <?= uri_string() == 'admin/enquiries' ? 'bg-teal-accent text-navy' : 'text-gray-400 hover:bg-white/5 hover:text-white' ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Enquiries
                    <span
                        class="ml-auto bg-teal-accent text-navy text-[10px] font-bold px-2 py-0.5 rounded-full"><?= $enquiryCount ?></span>
                </a>
            </nav>
        </div>

    </div>

    <!-- Sidebar Footer -->
    <div class="p-4 border-t border-white/5">
        <a href="<?= base_url('admin/logout') ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-red-400 hover:bg-red-500/10 transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            Logout
        </a>
    </div>
</aside>

<!-- Overlays -->
<div id="sidebar-overlay" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-20 hidden lg:hidden"></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
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

        if (mobileToggle) mobileToggle.addEventListener('click', openMenu);
        if (closeSidebar) closeSidebar.addEventListener('click', closeMenu);
        if (overlay) overlay.addEventListener('click', closeMenu);
    });
</script>