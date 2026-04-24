<?php
$seo = [
    'title' => '404 - Page Not Found | NextgenT Enterprises',
    'description' => 'The page you are looking for could not be found.',
    'keywords' => '404, Page Not Found, NextgenT'
];
echo view('templates/header', ['seo' => $seo]);
?>

<!-- 404 Error Section -->
<section class="py-20 lg:py-32 bg-gray-50 flex items-center justify-center min-h-[70vh]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 text-center" data-aos="fade-up" data-aos-duration="800">
        <!-- 404 Graphic/Text -->
        <div class="relative inline-block mb-4">
            <h1
                class="text-8xl md:text-9xl font-extrabold text-[#0F2D52]/10 tracking-widest drop-shadow-sm select-none">
                404
            </h1>
            <h1
                class="text-6xl md:text-8xl font-extrabold text-[#0F2D52] tracking-tight absolute inset-0 flex items-center justify-center">
                404
            </h1>
        </div>

        <div class="mb-8">
            <span
                class="bg-[#14B8A6] px-5 py-1.5 text-sm md:text-base font-bold rounded-full text-white inline-block shadow-md uppercase tracking-wider">
                Error
            </span>
        </div>

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 tracking-tight">
            Oops! Page Not Found.
        </h2>

        <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed md:text-xl">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            Let's get you back to business excellence.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= base_url('/') ?>"
                class="inline-flex items-center justify-center bg-[#0F2D52] text-white px-8 py-3.5 rounded-xl font-bold text-lg hover:bg-[#1A4A7A] hover:shadow-xl transition-all duration-300 w-full sm:w-auto min-w-[200px] border border-[#0F2D52]">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Return Home
            </a>
            <a href="<?= base_url('contact') ?>"
                class="inline-flex items-center justify-center bg-white text-[#0F2D52] border-2 border-gray-200 px-8 py-3.5 rounded-xl font-bold text-lg hover:border-[#14B8A6] hover:text-[#14B8A6] hover:shadow-lg transition-all duration-300 w-full sm:w-auto min-w-[200px]">
                Contact Support
            </a>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>