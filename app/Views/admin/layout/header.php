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
        <div class="hidden sm:flex relative">
            <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 bg-gray-50 border border-gray-100 rounded-lg text-sm focus:ring-2 focus:ring-teal-accent/20 outline-none w-64 transition-all">
            <svg class="w-4 h-4 absolute left-3 top-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>

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
