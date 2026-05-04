<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager | NextgenT Admin</title>
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
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => 'Contact Page Management']) ?>

        <main class="p-6 flex-1">
            

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center">
                    <h3 class="font-bold text-navy">Contact Content & Settings</h3>
                    <a href="<?= base_url('contact') ?>" target="_blank" class="text-xs font-bold text-teal-accent hover:underline uppercase tracking-wider flex items-center gap-1">
                        View Live Page
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>
                <form action="<?= base_url('admin/contact/update') ?>" method="POST" class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Frontend Heading</label>
                            <input type="text" name="heading" value="<?= esc($contact['heading']) ?>" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Support Phone Number</label>
                            <input type="text" name="phone" value="<?= esc($contact['phone']) ?>" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Description / Tagline</label>
                        <textarea name="description" rows="3" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm resize-none"><?= esc($contact['description']) ?></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Office Email</label>
                            <input type="email" name="email" value="<?= esc($contact['email']) ?>" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Physical Address</label>
                            <input type="text" name="address" value="<?= esc($contact['address']) ?>" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-accent outline-none text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-navy mb-2">Google Maps Embed Link (src)</label>
                            <input type="text" name="map_link" value="<?= esc($contact['map_link']) ?>" class="w-full px-4 py-3 rounded-xl border border-gray-100 focus:ring-2 focus:ring-teal-accent/20 outline-none transition-all" placeholder="https://www.google.com/maps/embed?pb=...">
                            <div class="mt-3 p-4 bg-teal-50 border border-teal-100 rounded-2xl flex items-start gap-3">
                                <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-teal-accent shrink-0 shadow-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <p class="text-xs text-teal-800 leading-relaxed font-medium">
                                    <span class="font-bold block mb-0.5">How to get the right link:</span>
                                    Go to Google Maps -> Share -> Embed a map -> Copy HTML. Only paste the <span class="bg-white px-1.5 py-0.5 rounded border border-teal-200 font-mono text-[10px]">src="..."</span> value here. 
                                    <br><span class="opacity-70 mt-1 block italic text-[10px]">Note: Standard sharing links are automatically converted!</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4 border-t border-gray-50">
                        <button type="submit" class="bg-navy text-white px-10 py-3.5 rounded-xl font-bold text-sm hover:bg-navy-light transition-all shadow-lg shadow-navy/10">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

        </main>

        <footer class="p-6 text-center border-t border-gray-100 bg-white">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> NextgenT Enterprises. Admin Portal.</p>
        </footer>
    </div>

</body>
</html>
