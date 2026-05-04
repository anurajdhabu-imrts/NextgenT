<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | NextgenT Admin</title>
    <link rel="icon" href="<?= base_url('FAVICON.png') ?>" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#0F2D52',
                            dark: '#0B213D',
                            light: '#1A4A7A',
                        },
                        'teal-accent': {
                            DEFAULT: '#14B8A6',
                            dark: '#0D9488',
                            light: '#2DD4BF',
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        /* Also hide main scrollbar if desired for cleaner look */
        ::-webkit-scrollbar { width: 0px; background: transparent; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Sidebar Layout -->
    <?= view('admin/layout/sidebar') ?>

    <!-- Main Content -->
    <div class="lg:ml-72 min-h-screen flex flex-col">
        
        <!-- Top Header -->
        <?= view('admin/layout/header', ['title' => 'Dashboard Overview']) ?>

        <!-- Dashboard Body -->
        <main class="p-6 flex-1">
            
            <!-- Quick Action Buttons -->
            <div class="flex flex-wrap gap-4 mb-8">
                <a href="<?= base_url('admin/pages/services') ?>" class="bg-navy text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-navy-light transition-all shadow-lg shadow-navy/10 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Manage Services
                </a>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
                <!-- Stat Card 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-teal-accent/10 rounded-xl flex items-center justify-center text-teal-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">Active</span>
                    </div>
                    <p class="text-gray-500 text-sm font-medium">Total Services</p>
                    <h3 class="text-2xl font-bold text-navy mt-1"><?= $total_services ?></h3>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-navy/5 rounded-xl flex items-center justify-center text-navy">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <span class="text-xs font-bold text-teal-accent bg-teal-50 px-2 py-1 rounded-lg">Live</span>
                    </div>
                    <p class="text-gray-500 text-sm font-medium">Total Projects</p>
                    <h3 class="text-2xl font-bold text-navy mt-1"><?= $total_projects ?></h3>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center text-purple-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Expert</span>
                    </div>
                    <p class="text-gray-500 text-sm font-medium">Team Members</p>
                    <h3 class="text-2xl font-bold text-navy mt-1"><?= $total_team ?></h3>
                </div>

                <!-- Stat Card 4 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-red-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <span class="animate-pulse w-2 h-2 bg-red-500 rounded-full"></span>
                    </div>
                    <p class="text-gray-500 text-sm font-medium">New Enquiries</p>
                    <h3 class="text-2xl font-bold text-navy mt-1"><?= $total_enquiries ?></h3>
                </div>
            </div>

            <!-- Table Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-50 flex items-center justify-between">
                    <h3 class="font-bold text-navy">Recent Enquiries</h3>
                    <a href="<?= base_url('admin/enquiries') ?>" class="text-xs font-bold text-teal-accent hover:underline uppercase tracking-wider">View All</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Client Name</th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Service Requested</th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Date</th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Status</th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <?php if(!empty($recent_enquiries)): ?>
                                <?php foreach($recent_enquiries as $row): ?>
                                    <tr class="hover:bg-gray-50/50 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-full bg-navy/5 flex items-center justify-center text-[10px] font-bold text-navy">
                                                    <?= strtoupper(substr($row['name'], 0, 2)) ?>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-gray-700"><?= esc($row['name']) ?></p>
                                                    <p class="text-[11px] text-gray-400"><?= esc($row['email']) ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-sm text-gray-600"><?= esc($row['industry_focus'] ?? 'N/A') ?></span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-sm text-gray-500"><?= date('M d, Y', strtotime($row['created_at'])) ?></span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php if($row['status'] == 'New'): ?>
                                                <span class="px-2.5 py-1 rounded-lg bg-yellow-50 text-yellow-600 text-[10px] font-bold uppercase tracking-wide">Pending</span>
                                            <?php else: ?>
                                                <span class="px-2.5 py-1 rounded-lg bg-green-50 text-green-600 text-[10px] font-bold uppercase tracking-wide">Read</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="<?= base_url('admin/enquiries') ?>" class="p-2 text-gray-400 hover:text-navy hover:bg-white rounded-lg transition-all group-hover:shadow-sm">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-gray-400 text-sm">No enquiries found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

        <!-- Footer -->
        <footer class="p-6 text-center border-t border-gray-100 bg-white">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> NextgenT Enterprises. Powered by NextgenT Tech Solutions.</p>
        </footer>

    </div>


</body>
</html>
