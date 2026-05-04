<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration | NextgenT</title>
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
            <p class="text-gray-500 mt-2 text-sm">Create Admin Account</p>
        </div>

        <!-- Registration Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Admin Registration</h2>
            
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                    <ul class="text-sm text-red-700 list-disc list-inside">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/register-submit') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?= old('name') ?>" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-accent/20 focus:border-teal-accent outline-none transition-all" placeholder="John Doe">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="<?= old('email') ?>" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-accent/20 focus:border-teal-accent outline-none transition-all" placeholder="john@example.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?= old('username') ?>" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-accent/20 focus:border-teal-accent outline-none transition-all" placeholder="johndoe">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="password">Password</label>
                        <input type="password" id="password" name="password" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-accent/20 focus:border-teal-accent outline-none transition-all" placeholder="••••••••">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="confirm_password">Confirm</label>
                        <input type="password" id="confirm_password" name="confirm_password" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-accent/20 focus:border-teal-accent outline-none transition-all" placeholder="••••••••">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-navy text-white font-bold py-3 rounded-xl hover:bg-navy-light transition-all transform active:scale-[0.98] shadow-lg shadow-navy/20">
                        Create Account
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-500">
                    Already have an account? 
                    <a href="<?= base_url('admin/login') ?>" class="text-teal-accent font-semibold hover:text-teal-accent-dark">Log In</a>
                </p>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <p class="text-xs text-gray-400">
                    &copy; <?= date('Y') ?> NextgenT Enterprises. All rights reserved.
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
