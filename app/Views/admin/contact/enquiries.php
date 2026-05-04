<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiries Manager | NextgenT Admin</title>
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
        ::-webkit-scrollbar { width: 0px; background: transparent; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => 'User Enquiries']) ?>

        <main class="p-6 flex-1">
            

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-50 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-navy">Enquiry Submissions</h3>
                        <?php if(request()->getGet('q')): ?>
                            <p class="text-[10px] text-teal-accent font-semibold mt-1">
                                Showing results for: "<?= esc(request()->getGet('q')) ?>"
                                <a href="<?= base_url('admin/enquiries') ?>" class="ml-2 text-gray-400 hover:text-navy underline">Clear</a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="text-xs font-medium text-gray-400">
                        Total Enquiries: <?= count($enquiries) ?>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50 text-[11px] font-bold text-gray-400 uppercase tracking-widest">
                                <th class="px-6 py-4">Sender Details</th>
                                <th class="px-6 py-4">Company & Tech</th>
                                <th class="px-6 py-4">Message</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <?php foreach($enquiries as $row): ?>
                                <tr class="hover:bg-gray-50/50 transition-colors group <?= $row['status'] == 'New' ? 'bg-teal-50/10' : '' ?>">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-full bg-navy/5 flex items-center justify-center text-xs font-bold text-navy">
                                                <?= strtoupper(substr($row['name'], 0, 2)) ?>
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-gray-700"><?= esc($row['name']) ?></p>
                                                <p class="text-[11px] text-gray-400 font-medium"><?= esc($row['email']) ?></p>
                                                <p class="text-[11px] text-teal-accent font-semibold"><?= esc($row['phone']) ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-xs font-bold text-navy mb-1 uppercase tracking-wider"><?= esc($row['company']) ?></p>
                                        <span class="px-2 py-0.5 rounded-md bg-gray-100 text-gray-500 text-[10px] font-bold"><?= esc($row['industry_focus']) ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="max-w-[250px]">
                                            <p class="text-sm text-gray-600 line-clamp-2" title="<?= esc($row['message']) ?>">
                                                <?= esc($row['message']) ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php if($row['status'] == 'New'): ?>
                                            <span class="px-2.5 py-1 rounded-lg bg-teal-accent/10 text-teal-accent text-[10px] font-bold uppercase tracking-wider">New</span>
                                        <?php else: ?>
                                            <span class="px-2.5 py-1 rounded-lg bg-gray-100 text-gray-400 text-[10px] font-bold uppercase tracking-wider">Read</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-[11px] text-gray-500 font-medium"><?= date('d M Y', strtotime($row['created_at'])) ?></p>
                                        <!-- <p class="text-[10px] text-gray-400 italic"><?= date('h:i A', strtotime($row['created_at'])) ?></p> -->
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="<?= base_url('admin/enquiries/status/'.$row['id']) ?>" class="p-2 <?= $row['status'] == 'New' ? 'text-teal-accent hover:bg-teal-50' : 'text-gray-400 hover:bg-gray-100' ?> rounded-lg transition-all" title="Mark as <?= $row['status'] == 'New' ? 'Read' : 'New' ?>">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            </a>
                                            <button onclick="confirmDelete('<?= base_url('admin/enquiries/delete/'.$row['id']) ?>')" class="p-2 text-red-300 hover:text-red-500 hover:bg-red-100 rounded-lg transition-all">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if(empty($enquiries)): ?>
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center">
                                            <svg class="w-12 h-12 text-gray-200 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                                            <p class="text-gray-400 font-medium text-sm">No enquiries found</p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

        <footer class="p-6 text-center border-t border-gray-100 bg-white">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> NextgenT Enterprises. Admin Portal.</p>
        </footer>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm z-[70] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-sm rounded-2xl shadow-2xl overflow-hidden text-center p-8">
            <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center text-red-500 mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <h3 class="text-xl font-bold text-navy mb-2">Delete Submission?</h3>
            <p class="text-gray-500 text-sm mb-8">This will permanently remove this enquiry from the database.</p>
            <div class="flex gap-4">
                <button onclick="toggleModal('delete-modal')" class="flex-1 bg-gray-50 text-gray-500 py-3 rounded-xl font-bold hover:bg-gray-100 transition-all">Cancel</button>
                <a id="delete-confirm-btn" href="#" class="flex-1 bg-red-500 text-white py-3 rounded-xl font-bold hover:bg-red-600 transition-all shadow-lg shadow-red-200">Delete</a>
            </div>
        </div>
    </div>

    <script>
        function toggleModal(id) {
            document.getElementById(id).classList.toggle('hidden');
        }

        function confirmDelete(url) {
            document.getElementById('delete-confirm-btn').href = url;
            toggleModal('delete-modal');
        }

        window.onclick = function(event) {
            if (event.target.id.endsWith('-modal')) {
                toggleModal(event.target.id);
            }
        }
    </script>

</body>
</html>
