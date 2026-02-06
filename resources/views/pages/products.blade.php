@extends('layouts.app')

@section('container')

<!-- Header -->
<section class="bg-slate-900 py-20 text-center text-white">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 mt-4">
        Produk Kami
    </h1>

    <p class="text-gray-300 max-w-2xl mx-auto">
        Berbagai peralatan dapur komersial berbahan stainless
        untuk kebutuhan usaha, instansi, dan industri.
    </p>
</section>

<!-- Products Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

            @foreach ($products as $product)
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition overflow-hidden group">

                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset($product['gambar']) }}" 
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-6">
                        <span class="text-sm text-orange-600 font-semibold">
                            {{ $product['kategori'] }}
                        </span>

                        <h3 class="text-lg font-bold text-gray-900 mt-2 mb-4">
                            {{ $product['nama'] }}
                        </h3>

                        <a href="{{ route('contact') }}"
                            class="inline-block text-sm font-semibold text-orange-600 hover:underline">
                            Konsultasi Produk →
                        </a>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>

@endsection