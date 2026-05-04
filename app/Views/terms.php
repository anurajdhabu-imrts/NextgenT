<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-navy py-16 lg:py-24">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-navy"></div>
        <div
            class="absolute inset-0 opacity-10 bg-[radial-gradient(#14B8A6_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <span data-aos="fade-up"
            class="inline-block px-4 py-1.5 rounded-full bg-teal-accent/20 border border-teal-accent/30 text-teal-accent text-sm font-bold tracking-widest uppercase mb-6">Terms
            of Service</span>
        <h1 data-aos="fade-up" data-aos-delay="100" class="text-4xl md:text-5xl font-bold mb-6">
            <?= esc($settings['terms_title']) ?></h1>
        <p data-aos="fade-up" data-aos-delay="200" class="text-lg text-slate-300 max-w-2xl mx-auto">
            <?= esc($settings['terms_intro']) ?>
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-10 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="prose prose-slate max-w-none prose-headings:text-navy prose-headings:font-bold prose-p:text-slate-600 prose-p:leading-relaxed">

            <div class="mb-16">
                <div class="space-y-6">
                    <?php
                    // Use preg_split to handle multiple line ending types
                    $paragraphs = preg_split('/\r\n|\r|\n/', $settings['terms_content']);
                    $inList = false;
                    $firstElement = true;

                    foreach ($paragraphs as $para):
                        $para = trim($para);
                        if (empty($para)) {
                            if ($inList) {
                                echo '</ul>';
                                $inList = false;
                            }
                            continue;
                        }

                        // Heading
                        if (preg_match('/^(\d+|[A-Z])\./', $para) || (strlen($para) < 70 && !preg_match('/[.!?:]$/', $para))) {
                            if ($inList) {
                                echo '</ul>';
                                $inList = false;
                            }
                            $mt = $firstElement ? 'mt-0' : 'mt-12';
                            echo '<h2 class="' . $mt . ' text-3xl font-bold text-navy mb-6">' . esc($para) . '</h2>';
                        }
                        // List Item
                        elseif (preg_match('/^[-*•]/', $para)) {
                            if (!$inList) {
                                echo '<ul class="list-disc pl-6 space-y-3 text-lg text-slate-600 mb-8">';
                                $inList = true;
                            }
                            echo '<li>' . esc(ltrim($para, '-*• ')) . '</li>';
                        }
                        // Intro/Sub-header
                        elseif (str_ends_with($para, ':')) {
                            if ($inList) {
                                echo '</ul>';
                                $inList = false;
                            }
                            echo '<p class="text-xl font-semibold text-navy mt-8 mb-4">' . esc($para) . '</p>';
                        }
                        // Description
                        else {
                            if ($inList) {
                                echo '</ul>';
                                $inList = false;
                            }
                            echo '<p class="text-lg text-slate-600 leading-relaxed mb-6">' . esc($para) . '</p>';
                        }
                        $firstElement = false;
                    endforeach;
                    if ($inList)
                        echo '</ul>';
                    ?>
                </div>
            </div>

            <div class="p-10  bg-slate-50 border border-slate-100 rounded-3xl shadow-sm">
                <h2 class="text-2xl font-bold text-navy mb-6">Contact Information</h2>
                <div class="space-y-4">
                    <p class="text-slate-600 leading-relaxed">
                        For any legal inquiries or clarifications regarding these terms, please contact our
                        administrative
                        team:
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-10">
                        <div>
                            <span
                                class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Email</span>
                            <p class="text-navy font-bold text-lg"><?= esc($settings['email']) ?></p>
                        </div>
                        <div>
                            <span
                                class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Phone</span>
                            <p class="text-navy font-bold text-lg"><?= esc($settings['phone']) ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>