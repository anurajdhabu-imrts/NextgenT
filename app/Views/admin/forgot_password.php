<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | NextgenT</title>
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
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-md">
        <!-- Logo Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-navy">
                NextgenT<span class="text-teal-accent ml-1">Enterprises</span>
            </h1>
            <p class="text-gray-500 mt-2 text-sm">Recover Your Access</p>
        </div>

        <!-- Forgot Password Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-2 text-center">Forgot Password?</h2>
            <p class="text-gray-500 text-sm mb-6 text-center">Enter your email and we'll send you a link to reset your password.</p>
            
            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                    <p class="text-sm text-red-700"><?= session()->getFlashdata('error') ?></p>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                    <p class="text-sm text-green-700"><?= session()->getFlashdata('success') ?></p>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/forgot-password-submit') ?>" method="post" class="space-y-5">
                <?= csrf_field() ?>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5" for="email">Admin Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-accent/20 focus:border-teal-accent outline-none transition-all" placeholder="admin@example.com">
                </div>

                <button type="submit" class="w-full bg-navy text-white font-bold py-3.5 rounded-xl hover:bg-navy-light transition-all transform active:scale-[0.98] shadow-lg shadow-navy/20">
                    Send Reset Link
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <p class="text-sm text-gray-500">
                    Remember your password? 
                    <a href="<?= base_url('admin/login') ?>" class="text-teal-accent font-semibold hover:text-teal-accent-dark">Back to Login</a>
                </p>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="<?= base_url('/') ?>" class="text-sm text-gray-500 hover:text-navy flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Back to Website
            </a>
        </div>
    </div>

</body>
</html>
