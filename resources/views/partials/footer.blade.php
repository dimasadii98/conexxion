<footer class="bg-slate-950 text-gray-300">
    <div class="max-w-7xl mx-auto py-16 px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Company Row -->
            <div>
                <h3 class="text-xl font-bold text-white mb-4">
                    Conexxion
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Produsen peralatan dapur komersial berbahan stainless
                    untuk kebutuhan usaha, instansi, rumah sakit,
                    dapur SPPG, dan dapur MBG langsung dari produksi kami.
                </p>
            </div>

            <div class="lg:pl-16">
                <h4 class="text-lg font-semibold text-white mb-4">
                    Navigasi
                </h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('products') }}" class="hover:text-white transition">Produk</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-white transition">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-4">
                    Produk Kami
                </h4>

                <ul>
                    <ul class="space-y-2">
                    <li>Kitchen Equipment</li>
                    <li>Custom Stainless</li>
                    <li>Dapur Rumah Sakit</li>
                    <li>Dapur SPPG & MBG</li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold text-white mb-4">
                    Kontak Kami
                </h4>

                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="w-5 h-5 text-orange-500 mt-1 shrink-0" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor" 
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21s-7-5.686-7-10a7 7 0 1114 0c0 4.314-7 10-7 10z"/>
                            <circle cx="12" cy="11" r="3"/>
                        </svg>
                        <span class="leading-relaxed">
                            Jl. Karang Bajang, Tlogoadi District, Mlati, Sleman Regency,
                            Yogyakarta Special Region 55286.
                        </span>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="w-5 h-5 text-orange-500" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor" 
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M22 16.92V19a2 2 0 01-2.18 2A19.86 19.86 0 013 5.18 
                                2 2 0 015 3h2.09a2 2 0 012 1.72c.12.9.32 1.77.59 
                                2.61a2 2 0 01-.45 2.11L8.09 10.91a16 16 0 
                                006 6l1.47-1.14a2 2 0 012.11-.45c.84.27 
                                1.71.47 2.61.59A2 2 0 0122 16.92z"/>
                        </svg>
                        <span>+62 823-2229-5727</span>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="w-5 h-5 text-orange-500" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor" 
                            stroke-width="2">

                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                            <path d="m16 11.37-.88-.88"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r=".5" fill="currentColor"/>
                        </svg>

                        <a href="https://instagram.com/conexxion.id" 
                        target="_blank"
                        class="hover:text-white transition">
                            @conexxion.id
                        </a>
                    </li>

                    <li>
                        <a href="https://wa.me/6282322295727"
                        target="_blank"
                        class="inline-flex items-center gap-2 mt-2 px-4 py-2 
                                bg-orange-600 text-white rounded-lg 
                                hover:bg-orange-700 transition">

                            <svg xmlns="http://www.w3.org/2000/svg" 
                                class="w-5 h-5" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke="currentColor" 
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 11.5a8.38 8.38 0 01-1.9 5.4 
                                    8.5 8.5 0 11-3.6-13.9 
                                    8.38 8.38 0 015.4 8.5z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01"/>
                            </svg>
                            WhatsApp Kami
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="border-t border-gray-800 mt-12 pt-6 text-center text-gray-500 text-sm">
            © {{ date('Y') }} Conexxion. Seluruh hak cipta dilindungi.
        </div>

    </div>
</footer>