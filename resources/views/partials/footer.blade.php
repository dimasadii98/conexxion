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

                <ul class="space-y-3">
                    <li>📍 Jl. Industri No.123, Indonesia</li>
                    <li>📞 +62 812 3456 7890</li>
                    <li>✉️ info@conexxion.co.id</li>

                    <li>
                        <a href="https://wa.me/6281234567890"
                            target="_blank"
                            class="inline-block mt-2 px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
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