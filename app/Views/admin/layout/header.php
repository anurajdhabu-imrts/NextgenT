<!-- Global Admin Toast Notification -->
<?php if(session()->getFlashdata('success') || session()->getFlashdata('error')): ?>
    <div id="admin-toast" class="fixed top-24 right-6 min-w-[300px] z-[9999] transition-all duration-500 transform translate-x-full">
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
        document.addEventListener('DOMContentLoaded', () => {
            const toast = document.getElementById('admin-toast');
            setTimeout(() => {
                toast.classList.remove('translate-x-full');
                setTimeout(() => {
                    toast.classList.add('translate-x-full');
                }, 4000);
            }, 300);
        });
    </script>
<?php endif; ?>

<header class="bg-white border-b border-gray-100 flex items-center justify-between px-6 h-16 sticky top-0 z-10">
    <!-- Breadcrumbs / Page Title -->
    <div class="flex items-center gap-4">
        <!-- Mobile Toggle -->
        <button id="mobile-sidebar-toggle" class="lg:hidden p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
        </button>
        <div class="hidden md:flex items-center text-sm text-gray-500 gap-2">
            <span>Admin</span>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-navy font-semibold"><?= $title ?? 'Dashboard' ?></span>
        </div>
    </div>

    <!-- Right Actions -->
    <div class="flex items-center gap-5">
        <!-- Search -->
        <form action="<?= base_url('admin/enquiries') ?>" method="GET" class="hidden sm:flex relative">
            <input type="text" name="q" value="<?= esc(request()->getGet('q')) ?>" placeholder="Search..." class="pl-10 pr-4 py-2 bg-gray-50 border border-gray-100 rounded-lg text-sm focus:ring-2 focus:ring-teal-accent/20 outline-none w-64 transition-all">
            <button type="submit" class="absolute left-3 top-3 text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </button>
        </form>

        <!-- Notifications -->
        <button class="relative p-2 text-gray-400 hover:text-navy transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            <span class="absolute top-2 right-2 w-2 h-2 bg-teal-accent rounded-full border-2 border-white"></span>
        </button>

        <!-- User Profile -->
        <div class="flex items-center gap-3 pl-4 border-l border-gray-100">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-semibold text-navy leading-none">Admin</p>
                <p class="text-[10px] text-gray-400 mt-1"><?= session()->get('username') ?></p>
            </div>
            <div class="w-10 h-10 rounded-full bg-teal-accent/10 border border-teal-accent/20 flex items-center justify-center text-teal-accent font-bold">
                SA
            </div>
        </div>
    </div>
</header>
