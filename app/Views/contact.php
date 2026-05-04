<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-navy py-20 lg:py-28">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?auto=format&fit=crop&w=1600&q=80"
            alt="Contact NextgenT Enterprises for Hospital and Hospitality Consulting" class="w-full h-full object-cover opacity-10" />
        <div class="absolute inset-0 bg-navy/60"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <span data-aos="fade-up" class="inline-block px-4 py-1.5 rounded-full bg-teal-accent/20 border border-teal-accent/30 text-teal-accent text-sm font-bold tracking-widest uppercase mb-6">Get in Touch</span>
        <h1 data-aos="fade-up" data-aos-delay="100" class="text-4xl md:text-6xl font-bold mb-6"><?= esc($contact['heading']) ?></h1>
        <p data-aos="fade-up" data-aos-delay="200" class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
            <?= esc($contact['description']) ?>
        </p>
    </div>
</section>


<!-- Contact information & Form -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 lg:gap-24">
            
            <!-- left Column: Contact Info -->
            <div class="lg:w-1/3" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-navy mb-8">Ready for Next <span class="text-teal-accent font-medium">Generation</span> Growth?</h2>
                <p class="text-slate-600 mb-12 leading-relaxed">Whether you're planning a greenfield project or need to optimize existing operations, our consultants are just a message away.</p>
                
                <div class="space-y-10">
                    <!-- Address -->
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-12 h-12 bg-slate-50 border border-slate-100 rounded-2xl flex items-center justify-center text-navy shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-[#000080] mb-2">Office Location</h3>
                            <p class="text-slate-500 text-sm leading-relaxed"><?= nl2br(esc($contact['address'])) ?></p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-12 h-12 bg-teal-50 border border-teal-100 rounded-2xl flex items-center justify-center text-teal-accent shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-[#000080] mb-2">Direct Contact</h3>
                            <p class="text-slate-500 text-sm leading-relaxed"><?= esc($contact['phone']) ?></p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-12 h-12 bg-slate-50 border border-slate-100 rounded-2xl flex items-center justify-center text-navy shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-[#000080] mb-2">Email Queries</h3>
                            <p class="text-slate-500 text-sm leading-relaxed"><?= esc($contact['email']) ?></p>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Sticky/Floating Promo Button -->
                <div class="mt-12 p-6 rounded-[2rem] bg-slate-50 border border-slate-100 flex items-center gap-6 group">
                   <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $settings['whatsapp'] ?? '919876543210') ?>" target="_blank" class="shrink-0 w-14 h-14 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-lg shadow-green-500/20 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                   </a>
                   <div>
                        <h3 class="text-sm font-bold text-navy">Quick WhatsApp Chat</h3>
                        <p class="text-xs text-slate-500">Response time: &lt; 30 mins</p>
                   </div>
                </div>
            </div>

            <!-- right Column: Enquiry Form -->
            <div class="lg:w-2/3" data-aos="fade-left">
                <div class="bg-white p-8 md:p-12 rounded-[2.5rem] border border-slate-100 shadow-2xl shadow-navy/5">
                    <h3 class="text-2xl font-bold text-navy mb-1">Send an Enquiry</h3>
                    <p class="text-sm text-slate-500 mb-8 font-medium">Please fill out the form below and our subject specialists will get back to you.</p>
                    
                    <form action="<?= base_url('contact/submit') ?>" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-[#000080]/60 mb-2 ml-1">Full Name *</label>
                                <input type="text" name="name" required placeholder="e.g. Mr. Jadab Mandal" class="w-full px-5 py-4 rounded-xl border border-slate-200 outline-none focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all text-sm font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-[#000080]/60 mb-2 ml-1">Company Name *</label>
                                <input type="text" name="company" required placeholder="e.g. NextgenT Enterprises" class="w-full px-5 py-4 rounded-xl border border-slate-200 outline-none focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all text-sm font-medium">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-[#000080]/60 mb-2 ml-1">Industry Focus *</label>
                                <select name="industry_focus" required class="w-full px-5 py-4 rounded-xl border border-slate-200 outline-none focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all text-sm font-medium bg-white appearance-none">
                                    <option value="" disabled selected>Select Industry</option>
                                    <option>Hospital Sector</option>
                                    <option>Project Identification</option>
                                    <option>Operational Audit</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-[#000080]/60 mb-2 ml-1">Phone Number *</label>
                                <input type="tel" name="phone" id="phone_input" required 
                                       pattern="[0-9]{10}" maxlength="10"
                                       oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                       placeholder="10 Digit Number" 
                                       class="w-full px-5 py-4 rounded-xl border border-slate-200 outline-none focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all text-sm font-medium">
                                <p class="mt-1 text-[10px] text-slate-400">Enter exactly 10 digits (e.g. 9876543210)</p>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-[#000080]/60 mb-2 ml-1">Email Address *</label>
                            <input type="email" name="email" required placeholder="example@company.com" class="w-full px-5 py-4 rounded-xl border border-slate-200 outline-none focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all text-sm font-medium">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-[#000080]/60 mb-2 ml-1">Your Message *</label>
                            <textarea name="message" rows="4" required placeholder="Briefly describe your project or operational requirements..." class="w-full px-5 py-4 rounded-xl border border-slate-200 outline-none focus:border-teal-accent focus:ring-4 focus:ring-teal-accent/5 transition-all text-sm font-medium resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full py-5 bg-navy text-white rounded-xl font-bold text-lg shadow-xl shadow-navy/10 hover:bg-teal-accent transition-all hover:shadow-teal-500/20 active:scale-95 flex items-center justify-center gap-3">
                            Submit Enquiry 
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section class="pb-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto h-96 rounded-[3rem] bg-slate-100 border border-slate-200 overflow-hidden relative group" data-aos="fade-up">
        <iframe src="<?= esc($contact['map_link']) ?>" class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-700" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?= $this->include('templates/footer') ?>
