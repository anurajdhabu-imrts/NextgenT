<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | NextgenT Admin</title>
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
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Sidebar Layout -->
    <?= view('admin/layout/sidebar') ?>

    <!-- Main Content -->
    <div class="lg:ml-72 min-h-screen flex flex-col">
        
        <!-- Top Header -->
        <?= view('admin/layout/header', ['title' => $title]) ?>

        <!-- Body -->
        <main class="p-6 flex-1 flex items-center justify-center">
            <div class="text-center">
                <div class="w-20 h-20 bg-teal-accent/10 rounded-full flex items-center justify-center text-teal-accent mx-auto mb-6">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-navy mb-2"><?= $title ?></h2>
                <p class="text-gray-500 max-w-sm mx-auto">This module is currently under development. Content management for this section will be available soon.</p>
                <a href="<?= base_url('admin/dashboard') ?>" class="mt-8 inline-flex items-center gap-2 text-teal-accent font-semibold hover:underline">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Back to Dashboard
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="p-6 text-center border-t border-gray-100 bg-white">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> NextgenT Enterprises. Powered by NextgenT Tech Solutions.</p>
        </footer>

    </div>

    <!-- Mobile Menu Script (duplicated from dashboard for consistency) -->
    <script>
        // Sidebar toggle logic if needed in placeholder
    </script>

</body>
</html>
