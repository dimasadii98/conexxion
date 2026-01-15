@extends('layouts.app')

@section('container')

<!-- Hero Section -->
<section
    class="relative bg-cover bg-center"
    style="background-image: url('/img/backgroundHero.png');">
    <!-- Overlay -->

    <div class="relative max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Hero Image -->
        <div class="relative order-1 md:order-2">
            <img src="/img/small-hero.png"
                alt="Dapur Komersial Conexxion"
                class="relative rounded-2xl shadow-2xl w-full object-cover">
        </div>
    
        <!-- Hero Text -->
        <div class="order-2 md:order-1">
            <span class="inline-block mb-4 px-4 py-1 text-sm font-semibold text-orange-600 bg-orange-100 rounded-full">
                Produsen Langsung
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6">
                Produsen Alat Dapur Komersial<br>
                <span class="text-orange-600">Profesional & Custom</span>
            </h1>

            <p class="text-white text-lg mb-8">
                Conexxion adalah perusahaan manufaktur peralatan dapur komersial
                untuk kebutuhan usaha, instansi, rumah sakit, dapur SPPG, dan dapur MBG
                langsung dari produksi kami sendiri.
            </p>

            <div class="flex gap-4">
                <a href="{{ route('products') }}"
                class="px-8 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition">
                    Lihat Produk
                </a>

                <a href="{{ route('contact') }}"
                class="px-8 py-3 border border-gray-300 text-white font-semibold rounded-lg
                        hover:bg-gray-100 hover:text-black transition-colors duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>

    </div>
</section>

@endsection