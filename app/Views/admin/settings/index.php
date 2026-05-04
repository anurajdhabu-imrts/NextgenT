<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Settings | NextgenT Admin</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        .bg-navy-light\/50 {
            background-color: rgba(26, 74, 122, 0.5);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <?= view('admin/layout/sidebar') ?>

    <div class="lg:ml-72 min-h-screen flex flex-col">
        <?= view('admin/layout/header', ['title' => 'Website Settings']) ?>

        <main class="p-6 flex-1">
            <div class="space-y-6">
                <!-- Header -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-navy">Website Settings</h1>
                        <p class="text-gray-500 text-sm">Manage footer content, social links, and legal pages</p>
                    </div>
                </div>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="p-4 rounded-xl bg-teal-accent/10 border border-teal-accent/20 text-teal-accent text-sm">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Footer Settings -->
                    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm">
                        <div class="p-6 border-b border-gray-50 bg-gray-50/30">
                            <h3 class="font-bold text-navy flex items-center gap-2">
                                <svg class="w-5 h-5 text-teal-accent" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                                Footer Settings
                            </h3>
                        </div>
                        <form action="<?= base_url('admin/settings/update-footer') ?>" method="POST"
                            class="p-6 space-y-4">
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Footer
                                    Description</label>
                                <textarea name="footer_description" rows="3"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required><?= esc($settings['footer_description']) ?></textarea>
                                <p class="text-[10px] text-gray-500 mt-1">Brief summary displayed in the footer brand
                                    column.</p>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Address</label>
                                <textarea name="address" rows="2"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required><?= esc($settings['address']) ?></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Phone
                                        Number</label>
                                    <input type="text" name="phone" value="<?= esc($settings['phone']) ?>"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                        required>
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Email
                                        Address</label>
                                    <input type="email" name="email" value="<?= esc($settings['email']) ?>"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                        required>
                                </div>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Copyright
                                    Text</label>
                                <input type="text" name="copyright_text" value="<?= esc($settings['copyright_text']) ?>"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required>
                            </div>
                            <button type="submit"
                                class="w-full bg-navy text-white font-bold py-3 rounded-xl hover:opacity-90 transition-opacity">Update
                                Footer</button>
                        </form>
                    </div>

                    <!-- Social Media Links -->
                    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm">
                        <div class="p-6 border-b border-gray-50 bg-gray-50/30">
                            <h3 class="font-bold text-navy flex items-center gap-2">
                                <svg class="w-5 h-5 text-teal-accent" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                                Social Connectivity
                            </h3>
                        </div>
                        <form action="<?= base_url('admin/settings/update-social') ?>" method="POST"
                            class="p-6 space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Facebook
                                        URL</label>
                                    <input type="text" name="facebook" value="<?= esc($settings['facebook']) ?>"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors">
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Instagram
                                        URL</label>
                                    <input type="text" name="instagram" value="<?= esc($settings['instagram']) ?>"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors">
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Twitter
                                        URL</label>
                                    <input type="text" name="twitter" value="<?= esc($settings['twitter']) ?>"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors">
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">LinkedIn
                                        URL (Optional)</label>
                                    <input type="text" name="linkedin" value="<?= esc($settings['linkedin']) ?>"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors">
                                </div>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">WhatsApp
                                    Number</label>
                                <input type="text" name="whatsapp" value="<?= esc($settings['whatsapp']) ?>"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors">
                                <p class="text-[10px] text-gray-500 mt-1">Include country code without +, e.g.,
                                    919876543210</p>
                            </div>
                            <button type="submit"
                                class="w-full bg-navy text-white font-bold py-3 rounded-xl hover:opacity-90 transition-opacity">Update
                                Social Links</button>
                        </form>
                    </div>

                    <!-- Privacy Policy -->
                    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm">
                        <div class="p-6 border-b border-gray-50 bg-gray-50/30 flex items-center justify-between">
                            <h3 class="font-bold text-navy flex items-center gap-2">
                                <svg class="w-5 h-5 text-teal-accent" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Privacy Policy
                            </h3>
                            <a href="<?= base_url('privacy') ?>" target="_blank"
                                class="text-xs font-bold text-teal-accent hover:underline flex items-center gap-1">
                                View Live
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                        <form action="<?= base_url('admin/settings/update-privacy') ?>" method="POST"
                            class="p-6 space-y-4">
                            <!-- ... existing fields ... -->
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Page
                                    Title</label>
                                <input type="text" name="privacy_title" value="<?= esc($settings['privacy_title']) ?>"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Short
                                    Intro</label>
                                <textarea name="privacy_intro" rows="2"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required><?= esc($settings['privacy_intro']) ?></textarea>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Content</label>
                                <textarea name="privacy_content" rows="10"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required><?= esc($settings['privacy_content']) ?></textarea>
                                <p class="text-[10px] text-gray-500 mt-1">Separate sections with new lines. Use - for
                                    bullets. No HTML required.</p>
                            </div>
                            <button type="submit"
                                class="w-full bg-navy text-white font-bold py-3 rounded-xl hover:opacity-90 transition-opacity">Update
                                Privacy Policy</button>
                        </form>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm">
                        <div class="p-6 border-b border-gray-50 bg-gray-50/30 flex items-center justify-between">
                            <h3 class="font-bold text-navy flex items-center gap-2">
                                <svg class="w-5 h-5 text-teal-accent" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Terms & Conditions
                            </h3>
                            <a href="<?= base_url('terms') ?>" target="_blank"
                                class="text-xs font-bold text-teal-accent hover:underline flex items-center gap-1">
                                View Live
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                        <form action="<?= base_url('admin/settings/update-terms') ?>" method="POST"
                            class="p-6 space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Page
                                    Title</label>
                                <input type="text" name="terms_title" value="<?= esc($settings['terms_title']) ?>"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Short
                                    Intro</label>
                                <textarea name="terms_intro" rows="2"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required><?= esc($settings['terms_intro']) ?></textarea>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Content</label>
                                <textarea name="terms_content" rows="10"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 text-sm focus:outline-none focus:border-teal-accent transition-colors"
                                    required><?= esc($settings['terms_content']) ?></textarea>
                                <p class="text-[10px] text-gray-500 mt-1">Separate sections with new lines. Use - for
                                    bullets. No HTML required.</p>
                            </div>
                            <button type="submit"
                                class="w-full bg-navy text-white font-bold py-3 rounded-xl hover:opacity-90 transition-opacity">Update
                                Terms & Conditions</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="p-6 text-center border-t border-gray-100 bg-white">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> NextgenT Enterprises. Admin Portal.</p>
        </footer>
    </div>


</body>

</html>