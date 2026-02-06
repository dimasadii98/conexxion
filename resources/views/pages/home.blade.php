@extends('layouts.app')

@section('container')

<!-- Hero Section -->
<section
    class="relative bg-cover bg-center"
    style="background-image: url('/img/backgroundHero.jpg');">
    <!-- Overlay -->

    <div class="relative max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Hero Image -->
        <div class="relative order-1 md:order-2">
            <img src="/img/small-hero.jpg"
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

<!-- PRODUCT CATEGORY SECTION -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- SECTION HEADER -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                Kategori Produk
            </h2>
            <p class="text-gray-600 text-lg">
                Kami memproduksi berbagai peralatan dapur komersial berbahan stainless
                untuk memenuhi kebutuhan industri, instansi, dan usaha profesional.
            </p>
        </div>

        <!-- Product Category -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <a href="{{ route('products') }}"
            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition overflow-hidden">

                <div class="h-48 overflow-hidden">
                    <img src="/img/kitchen-equipment.jpg"
                        alt="Kitchen Equipment"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Kitchen Equipment
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Peralatan dapur komersial untuk restoran, hotel, dan industri makanan.
                    </p>
                </div>
            </a>

            <a href="{{ route('products') }}"
            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition overflow-hidden">

                <div class="h-48 overflow-hidden">
                    <img src="/img/stainless-steel.jpg"
                        alt="Custom Stainless"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Custom Stainless
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Produksi stainless custom sesuai desain dan kebutuhan klien.
                    </p>
                </div>
            </a>

            <a href="{{ route('products') }}"
            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition overflow-hidden">

                <div class="h-48 overflow-hidden">
                    <img src="/img/hospital-kitchen.jpg"
                        alt="Hospital Kitchen"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Hospital Kitchen
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Solusi dapur rumah sakit sesuai standar kebersihan dan keamanan.
                    </p>
                </div>
            </a>

            <a href="{{ route('products') }}"
            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition overflow-hidden">

                <div class="h-48 overflow-hidden">
                    <img src="/img/dapur-mbg.jpg"
                        alt="SPPG & MBG"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Dapur SPPG & MBG
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Sistem dapur terintegrasi untuk kebutuhan instansi dan pemerintah.
                    </p>
                </div>
            </a>

        </div>

    </div>
</section>

<!-- Why Choose Conexxion -->
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <span class="inline-block mb-4 px-4 py-1 text-sm font-semibold text-orange-600 bg-orange-100 rounded-full">
                    Keunggulan Kami
                </span>

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">
                    Mengapa Memilih Conexxion
                </h2>

                <p class="text-gray-600 text-lg">
                    Kami bukan sekadar penjual, melainkan produsen langsung peralatan dapur
                    komersial dengan proses produksi terkontrol, tenaga ahli berpengalaman,
                    dan layanan purna jual yang jelas.
                </p>
            </div>

            <!-- Image -->
            <div class="relative">
                <div class="absolute -top-8 -left-8 w-32 h-32 bg-orange-100 rounded-full blur-3xl"></div>
                <img src="/img/produksi-conexxion.jpg"
                    alt="Produksi Conexxion"
                    class="relative rounded-2xl shadow-xl w-full object-cover">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-100 text-orange-600 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7h18M3 12h18M3 17h18"/>
                    </svg>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Produksi Langsung
                </h3>
                <p class="text-gray-600 text-sm">
                    Seluruh produk diproduksi langsung di workshop kami tanpa perantara.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-100 text-orange-600 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                    </svg>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Standar Industri
                </h3>
                <p class="text-gray-600 text-sm">
                    Material stainless berkualitas dan pengerjaan sesuai standar dapur komersial.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-100 text-orange-600 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.1 0-2 .9-2 2v6h4v-6c0-1.1-.9-2-2-2z"/>
                    </svg>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Custom Sesuai Kebutuhan
                </h3>
                <p class="text-gray-600 text-sm">
                    Desain fleksibel mengikuti layout, kapasitas, dan kebutuhan klien.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-100 text-orange-600 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M12 18a9 9 0 100-18 9 9 0 000 18z"/>
                    </svg>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    After Sales Jelas
                </h3>
                <p class="text-gray-600 text-sm">
                    Dukungan teknis, garansi, dan layanan purna jual berkelanjutan.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Client/Partner -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6">

    <!-- Header -->
    <div class="text-center max-w-2xl mx-auto mb-16">
        <span class="inline-block mb-4 px-4 py-1 text-sm font-semibold text-orange-600 bg-orange-100 rounded-full">
            Klien & Mitra
        </span>

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
            Dipercaya Berbagai Instansi dan Usaha
        </h2>

        <p class="text-gray-600 text-lg">
            Produk dan layanan Conexxion telah digunakan oleh berbagai instansi,
            rumah sakit, dan pelaku usaha di berbagai sektor.
        </p>
    </div>

    <!-- Logo/Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-10 items-center">
        @foreach ($clients as $client)
            <div class="flex items-center justify-center bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <img src="{{ asset($client['logo']) }}"
                    alt="{{ $client['name'] }}"
                    class="h-12 object-contain grayscale hover:grayscale-0 transition rounded-full">
            </div>
        @endforeach
    </div>

    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-slate-900 py-24 overflow-hidden">

    <div class="absolute inset-0">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-orange-500/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-orange-500/10 rounded-3xl blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">
            Konsultasikan Kebutuhan Dapur Anda
        </h2>

        <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10">
            Tim Conexxion siap membantu perencanaan, desain, dan produksi
            peralatan dapur komersial sesuai kebutuhan usaha, instansi,
            rumah sakit, dapur SPPG, dan dapur MBG.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">

            <a href="https://wa.me/6282322295727"
                target="_blank"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.52 3.48A11.91 11.91 0 0012.06 0C5.44 0 .06 5.38.06 12c0 2.11.55 4.18 1.59 6.01L0 24l6.15-1.61a11.9 11.9 0 005.91 1.51h.01c6.62 0 12-5.38 12-12a11.9 11.9 0 00-3.46-8.42z"/>
                </svg>
                Konsultan WhatsApp
            </a>

            <!-- CONTACT PAGE -->
            <a href="{{ route('contact') }}"
            class="inline-flex items-center justify-center px-8 py-4 border border-gray-400 text-white font-semibold rounded-xl
            hover:bg-gray-100 hover:text-black transition-colors duration-300">
                Hubungi Kami
            </a>

        </div>

    </div>

</section>

@endsection